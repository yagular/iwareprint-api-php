<?php
/**
 * Created by PhpStorm.
 * User: yagular
 * Date: 5/4/17
 * Time: 9:57 PM
 */

namespace iwareprint\forms;


class OrderFilePreflightStatusForm {

    public $status;
    public $preflightInfo;

    /**
     * @return mixed
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status) {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getPreflightInfo() {
        return $this->preflightInfo;
    }

    /**
     * @param mixed $preflightInfo
     */
    public function setPreflightInfo($preflightInfo) {
        $this->preflightInfo = $preflightInfo;
    }


}