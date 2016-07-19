<?php

/*
 * This file is subject to the terms and conditions defined in
 * file 'LICENSE.txt', which is part of this source code package.
 */

namespace iwareprint\representations;


/**
 * Description of OrderPackage
 *
 * @author yagular
 */
class OrderPackage {

    private $id;
    private $orderGroupId;
    private $status;
    private $shipmentData;
    private $shipmentMethod;
    private $shipmentCost;
    private $readyToSend;
    private $weight;
    private $orders;
    private $cod;
    private $pickupByCustomer;
    private $courierType;
    private $labelsGenerated;
    
    public function getId() {
        return $this->id;
    }

    public function getOrderGroupId() {
        return $this->orderGroupId;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getShipmentData() {
        return $this->shipmentData;
    }

    public function getShipmentMethod() {
        return $this->shipmentMethod;
    }

    public function getShipmentCost() {
        return $this->shipmentCost;
    }

    public function getReadyToSend() {
        return $this->readyToSend;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function getOrders() {
        return $this->orders;
    }

    public function getCod() {
        return $this->cod;
    }

    public function getPickupByCustomer() {
        return $this->pickupByCustomer;
    }

    public function getCourierType() {
        return $this->courierType;
    }

    public function getLabelsGenerated() {
        return $this->labelsGenerated;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setOrderGroupId($orderGroupId) {
        $this->orderGroupId = $orderGroupId;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function setShipmentData($shipmentData) {
        $this->shipmentData = \iwareprint\Util::fetch($shipmentData,  AddressData::class);
    }

    public function setShipmentMethod($shipmentMethod) {
        $this->shipmentMethod = \iwareprint\Util::fetch($shipmentMethod,  ShipmentMethodRepresentation::class);
    }

    public function setShipmentCost($shipmentCost) {
        $this->shipmentCost = $shipmentCost;
    }

    public function setReadyToSend($readyToSend) {
        $this->readyToSend = $readyToSend;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function setOrders($orders) {
        $this->orders = $orders;
    }

    public function setCod($cod) {
        $this->cod = $cod;
    }

    public function setPickupByCustomer($pickupByCustomer) {
        $this->pickupByCustomer = $pickupByCustomer;
    }

    public function setCourierType($courierType) {
        $this->courierType = $courierType;
    }

    public function setLabelsGenerated($labelsGenerated) {
        $this->labelsGenerated = $labelsGenerated;
    }



}
