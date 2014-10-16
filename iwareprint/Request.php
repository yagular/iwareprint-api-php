<?php

/*
 * This file is subject to the terms and conditions defined in
 * file 'LICENSE.txt', which is part of this source code package.
 */

namespace iwareprint;

use ReflectionObject;

/**
 * Description of Request
 *
 * @author yagular
 */
class Request {

    private $url;
    private $params = [];
    private $json = true;

    function __construct($url, array $params = [], $object = null) {
        $this->url = $url;
        $this->params = $params;
        if (null != $object) {
            $this->setObjectAsParameter($object);
        }
    }

    public function isJson() {
        return $this->json;
    }

    public function setJson($json) {
        $this->json = $json;
    }

    public function getUrl() {
        return $this->url;
    }

    public function getParams() {
        return $this->params;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    /**
     * 
     * @param type $params
     * @return Request
     */
    public function setParams($params) {
        $this->params = $params;
        return $this;
    }

    /**
     * 
     * @param type $object
     * @return Request
     */
    public function setObjectAsParameter($object) {
        foreach (Util::getters(new ReflectionObject($object)) as $method) {
            $this->params[lcfirst(substr($method->getName(), 3))] = $method->invoke($object);
        }
        return $this;
    }
    
    private function prepare($data) {
        if (is_array($data)) {
            foreach($data as $key=>$value) {
                $data[$key] = $this->prepare($value);
            }
            return $data;
        } elseif (is_object($data)) {
            $result = new \stdClass();
            foreach(Util::getters(new ReflectionObject($data)) as $method) {
                $result->{lcfirst(substr($method->getName(), 3))} = $this->prepare($method->invoke($data));
            }
            return $result;
        } else {
            return $data;
        }
    }

    public function run() {
        
        if ($this->json) {
            $postdata = http_build_query(["json" => json_encode($this->prepare($this->params))]);
        } else {
            $postdata = http_build_query($this->prepare($this->params));
        }
        $opts = ['http' =>
            [
                'method' => 'POST',
                'header' => 'Content-type: application/x-www-form-urlencoded',
                'content' => $postdata
            ]
        ];

        $json = file_get_contents($this->url, false, stream_context_create($opts));
        if (null == $json) {
            return new Response(Response::STATUS_ERROR, "Brak poprawnej odpowiedzi " . $json);
        }
        $object = json_decode($json);
        if (!is_object($object)) {
            return new Response("ok",$object);
        }

        return new Response($object->status, $object->result);
    }

}
