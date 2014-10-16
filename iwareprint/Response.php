<?php

/*
 * This file is subject to the terms and conditions defined in
 * file 'LICENSE.txt', which is part of this source code package.
 */

namespace iwareprint;

/**
 * Description of Response
 *
 * @author yagular
 */
class Response {
    const STATUS_OK = "ok";
    const STATUS_ERROR = "error";
    
    private $status;
    private $result;
    
    function __construct($status, $result) {
        $this->status = $status;
        $this->result = $result;
    }

    
    public function getStatus() {
        return $this->status;
    }

    public function getResult() {
        return $this->result;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function setResult($result) {
        $this->result = $result;
    }



}
