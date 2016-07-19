<?php

/*
 * This file is subject to the terms and conditions defined in
 * file 'LICENSE.txt', which is part of this source code package.
 */

namespace iwareprint\criteria;

/**
 * Description of OrderCriteria
 *
 * @author yagular
 */
class OrderCriteria {

    private $orderGroupNumber;
    private $orderPackageNumber;
    private $dateFrom;
    private $dateTo;
    private $statusChangeDateFrom;
    private $statusChangeDateTo;
    private $userId;
    private $printingHouseId;
    private $start = 0;
    private $limit;
    private $orderBy;
    private $orderByType;
    private $statuses = [];
    public function getOrderGroupNumber() {
        return $this->orderGroupNumber;
    }

    public function getOrderPackageNumber() {
        return $this->orderPackageNumber;
    }

    public function getDateFrom() {
        return $this->dateFrom;
    }

    public function getDateTo() {
        return $this->dateTo;
    }

    public function getStatusChangeDateFrom() {
        return $this->statusChangeDateFrom;
    }

    public function getStatusChangeDateTo() {
        return $this->statusChangeDateTo;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getPrintingHouseId() {
        return $this->printingHouseId;
    }

    public function getStart() {
        return $this->start;
    }

    public function getLimit() {
        return $this->limit;
    }

    public function getOrderBy() {
        return $this->orderBy;
    }

    public function getOrderByType() {
        return $this->orderByType;
    }

    public function getStatuses() {
        return $this->statuses;
    }

    public function setOrderGroupNumber($orderGroupNumber) {
        $this->orderGroupNumber = $orderGroupNumber;
    }

    public function setOrderPackageNumber($orderPackageNumber) {
        $this->orderPackageNumber = $orderPackageNumber;
    }

    public function setDateFrom($dateFrom) {
        $this->dateFrom = $dateFrom;
    }

    public function setDateTo($dateTo) {
        $this->dateTo = $dateTo;
    }

    public function setStatusChangeDateFrom($statusChangeDateFrom) {
        $this->statusChangeDateFrom = $statusChangeDateFrom;
    }

    public function setStatusChangeDateTo($statusChangeDateTo) {
        $this->statusChangeDateTo = $statusChangeDateTo;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
    }

    public function setPrintingHouseId($printingHouseId) {
        $this->printingHouseId = $printingHouseId;
    }

    public function setStart($start) {
        $this->start = $start;
    }

    public function setLimit($limit) {
        $this->limit = $limit;
    }

    public function setOrderBy($orderBy) {
        $this->orderBy = $orderBy;
    }

    public function setOrderByType($orderByType) {
        $this->orderByType = $orderByType;
    }

    public function setStatuses($statuses) {
        $this->statuses = $statuses;
    }


}
