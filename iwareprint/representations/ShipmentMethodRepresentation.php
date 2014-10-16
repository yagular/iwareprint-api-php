<?php

/*
 * This file is subject to the terms and conditions defined in
 * file 'LICENSE.txt', which is part of this source code package.
 */

namespace iwareprint\representations;

/**
 * Description of ShipmentMethodRepresentation
 *
 * @author yagular
 */
class ShipmentMethodRepresentation {
    private $id;
    private $title;
    private $description;
    private $position;
    private $price;
    private $enabled;
    private $pickupByCustomer;
    private $cod;
    private $printingHouseId;
    
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPosition() {
        return $this->position;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getEnabled() {
        return $this->enabled;
    }

    public function getPickupByCustomer() {
        return $this->pickupByCustomer;
    }

    public function getCod() {
        return $this->cod;
    }

    public function getPrintingHouseId() {
        return $this->printingHouseId;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setPosition($position) {
        $this->position = $position;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setEnabled($enabled) {
        $this->enabled = $enabled;
    }

    public function setPickupByCustomer($pickupByCustomer) {
        $this->pickupByCustomer = $pickupByCustomer;
    }

    public function setCod($cod) {
        $this->cod = $cod;
    }

    public function setPrintingHouseId($printingHouseId) {
        $this->printingHouseId = $printingHouseId;
    }



}
