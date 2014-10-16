<?php

/*
 * This file is subject to the terms and conditions defined in
 * file 'LICENSE.txt', which is part of this source code package.
 */

namespace iwareprint\forms;

/**
 * Description of CalculationForm
 *
 * @author yagular
 */
class CalculationForm {
    private $productId;
    private $params;
    
    public function getProductId() {
        return $this->productId;
    }

    public function getParams() {
        return $this->params;
    }

    public function setProductId($productId) {
        $this->productId = $productId;
    }

    public function setParams(array $params) {
        $this->params = $params;
    }


}
