<?php

/*
 * This file is subject to the terms and conditions defined in
 * file 'LICENSE.txt', which is part of this source code package.
 */

namespace iwareprint\representations;

/**
 * Description of Param
 *
 * @author yagular
 */
class Param {
    
    private $parameterId;
    private $value;
    
    public function getParameterId() {
        return $this->parameterId;
    }

    public function getValue() {
        return $this->value;
    }

    public function setParameterId($parameterId) {
        $this->parameterId = ($parameterId);
    }

    public function setValue($value) {
        $this->value = ($value);
    }


}
