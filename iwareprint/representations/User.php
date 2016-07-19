<?php

/*
 * This file is subject to the terms and conditions defined in
 * file 'LICENSE.txt', which is part of this source code package.
 */
namespace iwareprint\representations;


/**
 * Description of User
 *
 * @author yagular
 */
class User {
    private $id;
    private $invoiceData;
    private $shipmentData;
    private $email;
    private $verified;
    private $registrationDate;
    private $points;
    private $printingHouseId;
    
    public function getId() {
        return $this->id;
    }

    /**
     * 
     * @return AddressData
     */
    public function getInvoiceData() {
        return $this->invoiceData;
    }

    /**
     * 
     * @return AddressData
     */
    public function getShipmentData() {
        return $this->shipmentData;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getVerified() {
        return $this->verified;
    }

    public function getRegistrationDate() {
        return $this->registrationDate;
    }

    public function getPoints() {
        return $this->points;
    }

    public function getPrintingHouseId() {
        return $this->printingHouseId;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setInvoiceData($invoiceData) {
        $this->invoiceData = \iwareprint\Util::fetch($invoiceData,  AddressData::class);
    }

    public function setShipmentData($shipmentData) {
        $this->shipmentData = \iwareprint\Util::fetch($shipmentData,  AddressData::class);
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setVerified($verified) {
        $this->verified = $verified;
    }

    public function setRegistrationDate($registrationDate) {
        $this->registrationDate = $registrationDate;
    }

    public function setPoints($points) {
        $this->points = $points;
    }

    public function setPrintingHouseId($printingHouseId) {
        $this->printingHouseId = $printingHouseId;
    }




}
