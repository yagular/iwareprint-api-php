<?php

/*
 * This file is subject to the terms and conditions defined in
 * file 'LICENSE.txt', which is part of this source code package.
 */

namespace iwareprint\representations;

/**
 * Description of OrderFileRepresentation
 *
 * @author yagular
 */
class OrderFileRepresentation {

    private $id;
    private $fileName;
    private $date;
    private $preflightStatus;
    private $contentProvider;

    public function getId() {
        return $this->id;
    }

    public function getFileName() {
        return $this->fileName;
    }

    public function getDate() {
        return $this->date;
    }

    public function getPreflightStatus() {
        return $this->preflightStatus;
    }

    public function getContentProvider() {
        return $this->contentProvider;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setFileName($fileName) {
        $this->fileName = $fileName;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function setPreflightStatus($preflightStatus) {
        $this->preflightStatus = $preflightStatus;
    }

    public function setContentProvider($contentProvider) {
        $this->contentProvider = $contentProvider;
    }

}
