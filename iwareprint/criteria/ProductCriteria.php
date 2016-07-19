<?php

/*
 * This file is subject to the terms and conditions defined in
 * file 'LICENSE.txt', which is part of this source code package.
 */

namespace iwareprint\criteria;

/**
 * Description of ProductCriteria
 *
 * @author yagular
 */
class ProductCriteria {

    private $start = 0;
    private $limit;
    private $orderBy;
    private $orderByType;
    private $title;
    private $name;
    private $short;

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

    public function getTitle() {
        return $this->title;
    }

    public function getName() {
        return $this->name;
    }

    public function getShort() {
        return $this->short;
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

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setShort($short) {
        $this->short = $short;
    }

}
