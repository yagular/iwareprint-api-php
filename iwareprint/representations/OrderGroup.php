<?php

/*
 * This file is subject to the terms and conditions defined in
 * file 'LICENSE.txt', which is part of this source code package.
 */

namespace iwareprint\representations;

/**
 * Description of OrderGroup
 *
 * @author yagular
 */
class OrderGroup {
    
    private $id;
    private $userId;
    private $userInfo;
    private $date;
    private $email;
    private $phone;
    private $totalCostNetto;
    private $totalCostBrutto;
    private $summary;
    private $userComment;
    private $shipmentCostNetto;
    private $shipmentCostBrutto;
    private $confirmFileLink;
    private $printingHouseId;
    private $orderRepresentationsIds = [];
    private $invoiceTaxId;
    private $invoiceData;
    private $shipmentData;
    private $senderData;
    private $invoiceEnabled;
    private $shipmentMethod;
    private $statusId;
    
    public function getId() {
        return $this->id;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getUserInfo() {
        return $this->userInfo;
    }

    public function getDate() {
        return $this->date;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getTotalCostNetto() {
        return $this->totalCostNetto;
    }

    public function getTotalCostBrutto() {
        return $this->totalCostBrutto;
    }

    public function getSummary() {
        return $this->summary;
    }

    public function getUserComment() {
        return $this->userComment;
    }

    public function getShipmentCostNetto() {
        return $this->shipmentCostNetto;
    }

    public function getShipmentCostBrutto() {
        return $this->shipmentCostBrutto;
    }

    public function getConfirmFileLink() {
        return $this->confirmFileLink;
    }

    public function getPrintingHouseId() {
        return $this->printingHouseId;
    }

    public function getOrderRepresentationsIds() {
        return $this->orderRepresentationsIds;
    }

    public function getInvoiceTaxId() {
        return $this->invoiceTaxId;
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

    /**
     * 
     * @return AddressData
     */
    public function getSenderData() {
        return $this->senderData;
    }

    public function getInvoiceEnabled() {
        return $this->invoiceEnabled;
    }

    /**
     * 
     * @return ShipmentMethodRepresentation
     */
    public function getShipmentMethod() {
        return $this->shipmentMethod;
    }

    public function getStatusId() {
        return $this->statusId;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
    }

    public function setUserInfo($userInfo) {
        $this->userInfo = $userInfo;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function setTotalCostNetto($totalCostNetto) {
        $this->totalCostNetto = $totalCostNetto;
    }

    public function setTotalCostBrutto($totalCostBrutto) {
        $this->totalCostBrutto = $totalCostBrutto;
    }

    public function setSummary($summary) {
        $this->summary = $summary;
    }

    public function setUserComment($userComment) {
        $this->userComment = $userComment;
    }

    public function setShipmentCostNetto($shipmentCostNetto) {
        $this->shipmentCostNetto = $shipmentCostNetto;
    }

    public function setShipmentCostBrutto($shipmentCostBrutto) {
        $this->shipmentCostBrutto = $shipmentCostBrutto;
    }

    public function setConfirmFileLink($confirmFileLink) {
        $this->confirmFileLink = $confirmFileLink;
    }

    public function setPrintingHouseId($printingHouseId) {
        $this->printingHouseId = $printingHouseId;
    }

    public function setOrderRepresentationsIds($orderRepresentationsIds) {
        $this->orderRepresentationsIds = $orderRepresentationsIds;
    }

    public function setInvoiceTaxId($invoiceTaxId) {
        $this->invoiceTaxId = $invoiceTaxId;
    }

    public function setInvoiceData($invoiceData) {
        $this->invoiceData = \iwareprint\Util::fetch($invoiceData, AddressData::class);
    }

    public function setShipmentData($shipmentData) {
        $this->shipmentData = \iwareprint\Util::fetch($shipmentData,  AddressData::class);
    }

    public function setSenderData($senderData) {
        $this->senderData = \iwareprint\Util::fetch($senderData,  AddressData::class);
    }

    public function setInvoiceEnabled($invoiceEnabled) {
        $this->invoiceEnabled = $invoiceEnabled;
    }

    public function setShipmentMethod($shipmentMethod) {
        $this->shipmentMethod = \iwareprint\Util::fetch($shipmentMethod,  ShipmentMethodRepresentation::class);
    }

    public function setStatusId($statusId) {
        $this->statusId = $statusId;
    }


    


}
