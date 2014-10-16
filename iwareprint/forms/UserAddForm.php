<?php

/*
 * This file is subject to the terms and conditions defined in
 * file 'LICENSE.txt', which is part of this source code package.
 */

namespace iwareprint\forms;


/**
 * Description of UserRegisterForm
 *
 * @author yagular
 */
class UserAddForm {

    const USER_TYPE_STANDARD = 1;
    const USER_TYPE_COMPANY = 2;
    const USER_TYPE_AGENCY = 3;

    private $email;
    private $password;
    private $type;
    private $companyName;
    private $taxId;
    private $name;
    private $surname;
    private $street;
    private $buildingNumber;
    private $apartmentNumber;
    private $city;
    private $postal;
    private $phone;
    private $shipmentCompanyName;
    private $shipmentName;
    private $shipmentSurname;
    private $shipmentStreet;
    private $shipmentBuildingNumber;
    private $shipmentApartmentNumber;
    private $shipmentCity;
    private $shipmentPostal;
    private $shipmentPhone;
    private $points;
    private $printingHouseId;

//    public function validate() {
//        $required = [
//            "email", "password", "type",
//            "street", "buildingNumber", "city", "postal", "phone",
//            "shipmentStreet", "shipmentBuildingNumber", "shipmentCity", "shipmentPostal", "shipmentPhone",
//        ];
//        switch ($this->type) {
//            case UserAddForm::USER_TYPE_STANDARD:
//                $required[] = "name";
//                $required[] = "surname";
//                break;
//            case UserAddForm::USER_TYPE_COMPANY:
//            case UserAddForm::USER_TYPE_AGENCY:
//                $required[] = "companyName";
//                $required[] = "taxId";
//            default:
//                throw new IwareprintException("Invalid type " . $this->type);
//        }
//        foreach ($required as $field) {
//            if (null == $this->{$field} || 0 == strlen("" . $this->{$field})) {
//                throw new IwareprintException("Field " . $field . " is required");
//            }
//        }
//    }

    public function getPrintingHouseId() {
        return $this->printingHouseId;
    }

    public function setPrintingHouseId($printingHouseId) {
        $this->printingHouseId = $printingHouseId;
    }

        
    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getType() {
        return $this->type;
    }

    public function getCompanyName() {
        return $this->companyName;
    }

    public function getTaxId() {
        return $this->taxId;
    }

    public function getName() {
        return $this->name;
    }

    public function getSurname() {
        return $this->surname;
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

    public function getCity() {
        return $this->city;
    }

    public function getPostal() {
        return $this->postal;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getShipmentCompanyName() {
        return $this->shipmentCompanyName;
    }

    public function getShipmentName() {
        return $this->shipmentName;
    }

    public function getShipmentSurname() {
        return $this->shipmentSurname;
    }

    public function getShipmentStreet() {
        return $this->shipmentStreet;
    }

    public function getShipmentBuildingNumber() {
        return $this->shipmentBuildingNumber;
    }

    public function getShipmentApartmentNumber() {
        return $this->shipmentApartmentNumber;
    }

    public function getShipmentCity() {
        return $this->shipmentCity;
    }

    public function getShipmentPostal() {
        return $this->shipmentPostal;
    }

    public function getShipmentPhone() {
        return $this->shipmentPhone;
    }

    public function getPoints() {
        return $this->points;
    }

    public function setEmail($email) {
        $this->email = ($email);
    }

    public function setPassword($password) {
        $this->password = ($password);
    }

    public function setType($type) {
        $this->type = ($type);
    }

    public function setCompanyName($companyName) {
        $this->companyName = ($companyName);
    }

    public function setTaxId($taxId) {
        $this->taxId = ($taxId);
    }

    public function setName($name) {
        $this->name = ($name);
    }

    public function setSurname($surname) {
        $this->surname = ($surname);
    }

    public function setStreet($street) {
        $this->street = ($street);
    }

    public function setBuildingNumber($buildingNumber) {
        $this->buildingNumber = ($buildingNumber);
    }

    public function setApartmentNumber($apartmentNumber) {
        $this->apartmentNumber = ($apartmentNumber);
    }

    public function setCity($city) {
        $this->city = ($city);
    }

    public function setPostal($postal) {
        $this->postal = ($postal);
    }

    public function setPhone($phone) {
        $this->phone = ($phone);
    }

    public function setShipmentCompanyName($shipmentCompanyName) {
        $this->shipmentCompanyName = ($shipmentCompanyName);
    }

    public function setShipmentName($shipmentName) {
        $this->shipmentName = ($shipmentName);
    }

    public function setShipmentSurname($shipmentSurname) {
        $this->shipmentSurname = ($shipmentSurname);
    }

    public function setShipmentStreet($shipmentStreet) {
        $this->shipmentStreet = ($shipmentStreet);
    }

    public function setShipmentBuildingNumber($shipmentBuildingNumber) {
        $this->shipmentBuildingNumber = ($shipmentBuildingNumber);
    }

    public function setShipmentApartmentNumber($shipmentApartmentNumber) {
        $this->shipmentApartmentNumber = ($shipmentApartmentNumber);
    }

    public function setShipmentCity($shipmentCity) {
        $this->shipmentCity = ($shipmentCity);
    }

    public function setShipmentPostal($shipmentPostal) {
        $this->shipmentPostal = ($shipmentPostal);
    }

    public function setShipmentPhone($shipmentPhone) {
        $this->shipmentPhone = ($shipmentPhone);
    }

    public function setPoints($points) {
        $this->points = ($points);
    }

}
