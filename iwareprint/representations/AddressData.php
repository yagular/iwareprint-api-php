<?php

/*
 * This file is subject to the terms and conditions defined in
 * file 'LICENSE.txt', which is part of this source code package.
 */

namespace iwareprint\representations;

/**
 * Description of AddressData
 *
 * @author yagular
 */
class AddressData {
    private $company;
    private $firstName;
    private $lastName;
    private $street;
    private $buildingNumber;
    private $apartmentNumber;
    private $postal;
    private $city;
    private $phone;
    
    public function getCompany() {
        return $this->company;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getStreet() {
        return $this->street;
    }

    public function getBuildingNumber() {
        return $this->buildingNumber;
    }

    public function getApartmentNumber() {
        return $this->apartmentNumber;
    }

    public function getPostal() {
        return $this->postal;
    }

    public function getCity() {
        return $this->city;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setCompany($company) {
        $this->company = $company;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function setStreet($street) {
        $this->street = $street;
    }

    public function setBuildingNumber($buildingNumber) {
        $this->buildingNumber = $buildingNumber;
    }

    public function setApartmentNumber($apartmentNumber) {
        $this->apartmentNumber = $apartmentNumber;
    }

    public function setPostal($postal) {
        $this->postal = $postal;
    }

    public function setCity($city) {
        $this->city = $city;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }


}
