<?php
/**
 * Created by PhpStorm.
 * User: yagular
 * Date: 4/28/17
 * Time: 4:42 PM
 */

namespace iwareprint\forms;


class AddOrderFileDelegatedForm {
    public $orderId;
    public $filename;
    public $fileSize;
    public $delegateRepresentation;
    public $sendMail = true;

    /**
     * @return bool
     */
    public function isSendMail(): bool {
        return $this->sendMail;
    }

    /**
     * @param bool $sendMail
     */
    public function setSendMail(bool $sendMail) {
        $this->sendMail = $sendMail;
    }



    /**
     * @return mixed
     */
    public function getOrderId() {
        return $this->orderId;
    }

    /**
     * @param mixed $orderId
     */
    public function setOrderId($orderId) {
        $this->orderId = $orderId;
    }

    /**
     * @return mixed
     */
    public function getFilename() {
        return $this->filename;
    }

    /**
     * @param mixed $filename
     */
    public function setFilename($filename) {
        $this->filename = $filename;
    }

    /**
     * @return mixed
     */
    public function getFileSize() {
        return $this->fileSize;
    }

    /**
     * @param mixed $fileSize
     */
    public function setFileSize($fileSize) {
        $this->fileSize = $fileSize;
    }

    /**
     * @return mixed
     */
    public function getDelegateRepresentation() {
        return $this->delegateRepresentation;
    }

    /**
     * @param mixed $delegateRepresentation
     */
    public function setDelegateRepresentation($delegateRepresentation) {
        $this->delegateRepresentation = $delegateRepresentation;
    }


}