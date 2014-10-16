<?php

/*
 * This file is subject to the terms and conditions defined in
 * file 'LICENSE.txt', which is part of this source code package.
 */

namespace iwareprint\representations;

/**
 * Description of Order
 *
 * @author yagular
 */
class Order {
    
    private $id;
    private $number;
    private $userInfo;
    private $orderGroupId;
    private $packageId;
    private $userId;
    private $date;
    private $email;
    private $phone;
    private $costNetto;
    private $costBrutto;
    private $userComment;
    private $statusId;
    private $statusChangeDate;
    private $productId;
    private $productTitle;
    private $params;
    private $endDate;
    private $commentsCount;
    private $preflightWorkerOperatorId;
    private $preflightWorkerId;
    private $orderFileRepresentations;
    private $productionStatusRepresentation;
    private $automaticPreflight;
    
    public function getId() {
        return $this->id;
    }

    public function getNumber() {
        return $this->number;
    }

    public function getUserInfo() {
        return $this->userInfo;
    }

    public function getOrderGroupId() {
        return $this->orderGroupId;
    }

    public function getPackageId() {
        return $this->packageId;
    }

    public function getUserId() {
        return $this->userId;
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

    public function getCostNetto() {
        return $this->costNetto;
    }

    public function getCostBrutto() {
        return $this->costBrutto;
    }

    public function getUserComment() {
        return $this->userComment;
    }

    public function getStatusId() {
        return $this->statusId;
    }

    public function getStatusChangeDate() {
        return $this->statusChangeDate;
    }

    public function getProductId() {
        return $this->productId;
    }

    public function getProductTitle() {
        return $this->productTitle;
    }

    /**
     * 
     * @return Param[]
     */
    public function getParams() {
        return $this->params;
    }

    public function getEndDate() {
        return $this->endDate;
    }

    public function getCommentsCount() {
        return $this->commentsCount;
    }

    public function getPreflightWorkerOperatorId() {
        return $this->preflightWorkerOperatorId;
    }

    public function getPreflightWorkerId() {
        return $this->preflightWorkerId;
    }

    /**
     * 
     * @return OrderFileRepresentation[]
     */
    public function getOrderFileRepresentations() {
        return $this->orderFileRepresentations;
    }

    
    public function getProductionStatusRepresentation() {
        return $this->productionStatusRepresentation;
    }

    public function getAutomaticPreflight() {
        return $this->automaticPreflight;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNumber($number) {
        $this->number = $number;
    }

    public function setUserInfo($userInfo) {
        $this->userInfo = $userInfo;
    }

    public function setOrderGroupId($orderGroupId) {
        $this->orderGroupId = $orderGroupId;
    }

    public function setPackageId($packageId) {
        $this->packageId = $packageId;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
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

    public function setCostNetto($costNetto) {
        $this->costNetto = $costNetto;
    }

    public function setCostBrutto($costBrutto) {
        $this->costBrutto = $costBrutto;
    }

    public function setUserComment($userComment) {
        $this->userComment = $userComment;
    }

    public function setStatusId($statusId) {
        $this->statusId = $statusId;
    }

    public function setStatusChangeDate($statusChangeDate) {
        $this->statusChangeDate = $statusChangeDate;
    }

    public function setProductId($productId) {
        $this->productId = $productId;
    }

    public function setProductTitle($productTitle) {
        $this->productTitle = $productTitle;
    }

    public function setParams($params) {
        $this->params = \iwareprint\Util::fetch($params,  Param::class);
    }

    public function setEndDate($endDate) {
        $this->endDate = $endDate;
    }

    public function setCommentsCount($commentsCount) {
        $this->commentsCount = $commentsCount;
    }

    public function setPreflightWorkerOperatorId($preflightWorkerOperatorId) {
        $this->preflightWorkerOperatorId = $preflightWorkerOperatorId;
    }

    public function setPreflightWorkerId($preflightWorkerId) {
        $this->preflightWorkerId = $preflightWorkerId;
    }

    public function setOrderFileRepresentations($orderFileRepresentations) {
        $this->orderFileRepresentations = \iwareprint\Util::fetch($orderFileRepresentations,  OrderFileRepresentation::class);
    }

    public function setProductionStatusRepresentation($productionStatusRepresentation) {
        $this->productionStatusRepresentation = $productionStatusRepresentation;
    }

    public function setAutomaticPreflight($automaticPreflight) {
        $this->automaticPreflight = $automaticPreflight;
    }





    
}
