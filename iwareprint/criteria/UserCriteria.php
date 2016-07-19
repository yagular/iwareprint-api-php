<?php

/*
 * This file is subject to the terms and conditions defined in
 * file 'LICENSE.txt', which is part of this source code package.
 */

namespace iwareprint\criteria;

/**
 * Description of UserCriteria
 *
 * @author yagular
 */
class UserCriteria {

    private $email;
    private $dateFrom;
    private $dateTo;
    private $printingHouseId;
    private $start = 0;
    private $limit;
    private $orderBy;
    private $orderByType;

    public function getEmail() {
        return $this->email;
    }

    public function getDateFrom() {
        return $this->dateFrom;
    }

    public function getDateTo() {
        return $this->dateTo;
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

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setDateFrom($dateFrom) {
        $this->dateFrom = $dateFrom;
    }

    public function setDateTo($dateTo) {
        $this->dateTo = $dateTo;
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

}
