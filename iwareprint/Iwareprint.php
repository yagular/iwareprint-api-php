<?php

/*
 * This file is subject to the terms and conditions defined in
 * file 'LICENSE.txt', which is part of this source code package.
 */

namespace iwareprint;

use iwareprint\criteria\OrderCriteria;
use iwareprint\criteria\ProductCriteria;
use iwareprint\criteria\UserCriteria;
use iwareprint\forms\AddOrderFileDelegatedForm;
use iwareprint\forms\CalculationForm;
use iwareprint\forms\OrderFilePreflightStatusForm;
use iwareprint\forms\OrderGroupAddForm;
use iwareprint\forms\UserAddForm;

class Iwareprint {

    private $baseUrl;
    private $key;

    function __construct($baseUrl, $key) {
        $this->baseUrl = $baseUrl;
        $this->key = $key;
    }

    private function request($uri, $object = null) {
        $params = ["key" => $this->key];
        $result = (new Request($this->baseUrl . "api/" . $uri, $params, $object))->run();
        if ("ok" != $result->getStatus()) {
//            var_dump(Request::$lastResponse);
            throw new IwareprintException($result->getResult()."\n".Request::$lastResponse);
        }
        return $result->getResult();
    }
    
    /**
     * Pobiera informacje o pliku
     * @param int $id
     * @return representations\OrderFileRepresentation
     */
    public function getOrderFile($id) {
        return Util::fetch($this->request("orderFile/get/" . $id), representations\OrderFileRepresentation::class);
    }

    /**
     * Pobiera plik i zapisuje pod daną ścieżką na dysku lokalnym
     * @param int $id
     * @param string $outputFilePath
     */
    public function downloadOrderFile($id, $outputFilePath) {
        file_put_contents($outputFilePath, fopen($this->baseUrl . "api/orderFile/download/" . $id . "/?key=" . $this->key, 'r'));
    }

    /**
     * Dodaje plik do zlecenia kopiując go z podanego url
     * @param int $orderId
     * @param \iwareprint\representations\Url $url
     * @return representations\OrderFileRepresentation
     */
    public function addOrderFileFromUrl($orderId, representations\Url $url) {
        return Util::fetch($this->request("orderFile/addFromUrl/" . $orderId, $url), representations\OrderFileRepresentation::class);
    }

    /**
     * Dodaje plik do zlecenia kopiując go z dysku lokalnego
     * @param int $orderId
     * @param string $localFilePath
     * @return representations\OrderFileRepresentation
     */
    public function uploadOrderFile($orderId, $localFilePath) {
        if (!file_exists($localFilePath)) {
            throw new IwareprintException("File ".$localFilePath.' does not exist');
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, array(
            "key" => $this->key,
            'file' => '@' . $localFilePath
        ));
        curl_setopt($ch, CURLOPT_URL, $this->baseUrl . "api/orderFile/upload/" . $orderId);
        ob_start();
        curl_exec($ch);
        curl_close($ch);
        $result = ob_get_contents();
        ob_clean();
        $data = json_decode($result);
        $result = new Response($data->status, $data->result);
        if ("ok" != $result->getStatus()) {
            throw new IwareprintException($result->getResult());
        }
        return Util::fetch($result->getResult(),  representations\OrderFileRepresentation::class);
    }

    /**
     * Dodaje plik do zlecenia (delegated)
     * @param int $orderId
     * @param \iwareprint\representations\Url $url
     * @return representations\OrderFileRepresentation
     */
    public function addOrderFileDelegated(AddOrderFileDelegatedForm $form) {
        return Util::fetch($this->request("orderFile/addDelegated/", $form), representations\OrderFileRepresentation::class);
    }

    /**
     * Dodaje plik do zlecenia (delegated)
     * @param int $orderId
     * @param \iwareprint\representations\Url $url
     * @return representations\OrderFileRepresentation
     */
    public function setPreflightStatus($orderFileId, OrderFilePreflightStatusForm $form) {
        return Util::fetch($this->request("orderFile/setPreflightStatus/".$orderFileId, $form), representations\OrderFileRepresentation::class);
    }
    
    /**
     * Usuwa plik
     * @param int $id
     * @return string
     */
    public function deleteOrderFile($id) {
        return $this->request("orderFile/delete/".$id);
    }

    /**
     * Usuwa referencje do pliku
     * @param int $id
     * @return string
     */
    public function deleteOrderFileReference($id) {
        return $this->request("orderFile/deleteReference/".$id);
    }

    /**
     * Pobiera link umożliwiający jednorazowe pobranie pliku
     * @param int $id
     * @return string
     */
    public function downloadOrderFileLink($id) {
        return $this->request("orderFile/downloadLink/" . $id);
    }

    /**
     * Pobiera informacje o zleceniu
     * @param int $id
     * @return representations\Order
     */
    public function getOrder($id) {
        return Util::fetch($this->request("order/get/" . $id), representations\Order::class);
    }

    /**
     * Pobiera zlecenia na podstawie podanych kryteriów
     * @param \iwareprint\criteria\OrderCriteria $criteria
     * @return representations\Order[]
     */
    public function findOrders(OrderCriteria $criteria) {
        return Util::fetch($this->request("order/find/", $criteria), representations\Order::class);
    }
    
    /**
     * Zmienia status zlecenia
     * @param int $orderId
     * @param \iwareprint\representations\OrderStatus $status
     * @return string
     */
    public function setOrderStatus($orderId,  representations\OrderStatus $status) {
        return $this->request("order/setStatus/".$orderId,$status);
    }

    /**
     * Pobiera informacje o paczce
     * @param int $id
     * @return representations\OrderPackage
     */
    public function getOrderPackage($id) {
        return Util::fetch($this->request("orderPackage/get/" . $id), representations\OrderPackage::class);
    }

    /**
     * Pobiera paczki na podstawie podanych kryteriów
     * @param \iwareprint\criteria\OrderCriteria $criteria
     * @return representations\OrderPackage[]
     */
    public function findOrderPackages(OrderCriteria $criteria) {
        return Util::fetch($this->request("orderPackage/find/", $criteria), representations\OrderPackage::class);
    }

    /**
     * Pobiera informacje o zamówieniu
     * @param int $id
     * @return representations\OrderGroup
     */
    public function getOrderGroup($id) {
        return Util::fetch($this->request("orderGroup/get/" . $id), representations\OrderGroup::class);
    }

    /**
     * Pobiera zamówienia na podstawie podanych kryteriów
     * @param \iwareprint\criteria\OrderCriteria $criteria
     * @return representations\OrderGroup[]
     */
    public function findOrderGroups(OrderCriteria $criteria) {
        return Util::fetch($this->request("orderGroup/find/", $criteria), representations\OrderGroup::class);
    }

    /**
     * Tworzy zamówienie
     * @param \iwareprint\forms\OrderGroupAddForm $form
     * @return representations\OrderGroup
     */
    public function addOrderGroup(OrderGroupAddForm $form) {
        return Util::fetch($this->request("orderGroup/add/", $form), representations\OrderGroup::class);
    }
    
    /**
     * Zmienia status zamówienia
     * @param type $id
     * @param \iwareprint\representations\OrderStatus $status
     * @return string
     */
    public function setOrderGroupStatus($id, representations\OrderStatus $status) {
        return $this->request("orderGroup/setStatus/".$id, $status);
    }

    /**
     * Pobiera informacje o użytkowniku
     * @param int $id
     * @return representations\User
     */
    public function getUser($id) {
        return Util::fetch($this->request("user/get/" . $id), representations\User::class);
    }

    /**
     * Pobiera użytkowników na podstawie podanych kryteriów
     * @param \iwareprint\criteria\UserCriteria $criteria
     * @return representations\User[]
     */
    public function findUsers(UserCriteria $criteria) {
        return Util::fetch($this->request("user/find/", $criteria),  representations\User::class);
    }

    /**
     * Dodaje użytkownika
     * @param \iwareprint\forms\UserAddForm $form
     * @return representations\User
     */
    public function addUser(UserAddForm $form) {
        return Util::fetch($this->request("user/add/", $form),  representations\User::class);
    }

    /**
     * Pobiera produkt
     * @param int $id
     * @return representations\ProductRepresentation
     */
    public function getProduct($id) {
        return Util::fetch($this->request("product/get/" . $id),  representations\ProductRepresentation::class);
    }

    /**
     * Probiera produkty na podstawie podanych kryteriów
     * @param \iwareprint\criteria\ProductCriteria $criteria
     * @return representations\ProductRepresentation[]
     */
    public function findProducts(ProductCriteria $criteria) {
        return Util::fetch($this->request("product/find/", $criteria),  representations\ProductRepresentation::class);
    }
    
    /**
     * Pobiera parametr
     * @param int $id
     * @return representations\ParameterRepresentation
     */
    public function getParameter($id) {
        return Util::fetch($this->request("product/getParameter/".$id),  representations\ParameterRepresentation::class);
    }
    
    /**
     * Pobiera wartość parametru
     * @param int $id
     * @return representations\ParameterValueRepresentation
     */
    public function getParameterValue($id) {
        return Util::fetch($this->request("product/getParameterValue/".$id), representations\ParameterValueRepresentation::class);
    }

    /**
     * Oblicza cenę i czas realizacji
     * @param \iwareprint\forms\CalculationForm $form
     * @return representations\OrderProduct
     */
    public function calculate(CalculationForm $form) {
        return Util::fetch($this->request("product/calculate/", $form),  representations\OrderProduct::class);
    }
    
    /**
     * Pobiera metodę wysyłki
     * @param int $id
     * @return representations\ShipmentMethodRepresentation
     */
    public function getShipmentMethod($id) {
        return Util::fetch($this->request("shipment/getShipmentMethod/".$id), representations\ShipmentMethodRepresentation::class);
    }
    
    /**
     * Pobiera wszystkie metody wysyłki
     * @return representations\ShipmentMethodRepresentation[]
     */
    public function getShipmentMethods() {
        return Util::fetch($this->request("shipment/getShipmentMethods/"), representations\ShipmentMethodRepresentation::class);
    }

}
