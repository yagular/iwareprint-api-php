<?php

/*
 * This file is subject to the terms and conditions defined in
 * file 'LICENSE.txt', which is part of this source code package.
 */

namespace iwareprint;

use ReflectionMethod;
use ReflectionObject;

/**
 * Description of Util
 *
 * @author yagular
 */
class Util {
    
    public static function fetch($data,$class) {
        if (is_array($data)) {
            foreach($data as $key=>$value) {
                $data[$key] = static::fetch($value, $class);
            }
            return $data;
        } else {
            
            $reflection = new \ReflectionClass($class);
            if ($reflection->isInstance($data)) {
                return $data;
            }
            $result = $reflection->newInstanceArgs();
            foreach($data as $key=>$value) {
                if ($reflection->hasMethod("set".  ucfirst($key))) {
                    $method = $reflection->getMethod("set".  ucfirst($key));
                    $method->invoke($result, $value);
                }
            }
            return $result;
        }
    }
    
    /**
     * 
     * @param ReflectionObject $reflection
     * @return \ReflectionMethod[]
     */
    public static function getters(ReflectionObject $reflection) {
        foreach($reflection->getMethods() as $method) {
            /* @var $method \ReflectionMethod */
            if (substr($method->getName(), 0, strlen("get")) === "get") {
                yield $method;
            }
        }
    }
    /**
     * 
     * @param ReflectionObject $reflection
     * @return \ReflectionMethod[]
     */
    public static function setters(ReflectionObject $reflection) {
        foreach($reflection->getMethods() as $method) {
            /* @var $method \ReflectionMethod */
            if (substr($method->getName(), 0, strlen("set")) === "set") {
                yield $method;
            }
        }
    }
}
