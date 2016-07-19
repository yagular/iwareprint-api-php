<?php

/*
 * This file is subject to the terms and conditions defined in
 * file 'LICENSE.txt', which is part of this source code package.
 */

namespace iwareprint\forms;

use iwareprint\representations\AddressData;

/**
 * Description of OrderAddForm
 *
 * @author yagular
 */
class OrderGroupAddForm {

    private $email;
    private $phone;
    private $invoiceEnabled = false;
    private $invoiceTaxId;
    private $invoiceData;
    private $shipmentData;
    private $senderData;
    private $printingHouseId;
    private $userId;
    private $shipmentMethodId;
    private $orders = [];
    private $userComments;
    
    public function getEmail() {
        return $this->email;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getInvoiceEnabled() {
        return $this->invoiceEnabled;
    }

    public function getInvoiceTaxId() {
        return $this->invoiceTaxId;
    }

    public function getInvoiceData() {
        return $this->invoiceData;
    }

    public function getShipmentData() {
        return $this->shipmentData;
    }

    public function getSenderData() {
        return $this->senderData;
    }

    public function getPrintingHouseId() {
        return $this->printingHouseId;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getShipmentMethodId() {
        return $this->shipmentMethodId;
    }

    public function getOrders() {
        return $this->orders;
    }

    public function getUserComments() {
        return $this->userComments;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function setInvoiceEnabled($invoiceEnabled) {
        $this->invoiceEnabled = $invoiceEnabled;
    }

    public function setInvoiceTaxId($invoiceTaxId) {
        $this->invoiceTaxId = $invoiceTaxId;
    }

    public function setInvoiceData(AddressData $invoiceData) {
        $this->invoiceData = $invoiceData;
    }

    public function setShipmentData(AddressData $shipmentData) {
        $this->shipmentData = $shipmentData;
    }

    public function setSenderData(AddressData $senderData) {
        $this->senderData = $senderData;
    }

    public function setPrintingHouseId($printingHouseId) {
        $this->printingHouseId = $printingHouseId;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
    }

    public function setShipmentMethodId($shipmentMethodId) {
        $this->shipmentMethodId = $shipmentMethodId;
    }

    public function setOrders(array $orders) {
        $this->orders = $orders;
    }

    public function setUserComments($userComments) {
        $this->userComments = $userComments;
    }



}
