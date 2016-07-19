<?php

/*
 * This file is subject to the terms and conditions defined in
 * file 'LICENSE.txt', which is part of this source code package.
 */

namespace iwareprint\representations;

/**
 * Description of OrderProduct
 *
 * @author yagular
 */
class OrderProduct {
    
    private $productId;
    private $params = [];
    private $price;
    private $weight;
    private $points;
    private $realization;
    
    /**
     * 
     * @return Param[]
     */
    public function getParams() {
        return $this->params;
    }
    
    public function getProductId() {
        return $this->productId;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function getPoints() {
        return $this->points;
    }

    public function getRealization() {
        return $this->realization;
    }

    public function setProductId($productId) {
        $this->productId = $productId;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function setPoints($points) {
        $this->points = $points;
    }

    public function setRealization($realization) {
        $this->realization = $realization;
    }

    public function setParams($params) {
        $this->params = \iwareprint\Util::fetch($params, Param::class);
    }



}
