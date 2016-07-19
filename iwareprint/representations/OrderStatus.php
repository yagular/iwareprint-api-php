<?php

/*
 * This file is subject to the terms and conditions defined in
 * file 'LICENSE.txt', which is part of this source code package.
 */

namespace iwareprint\representations;

/**
 * Description of OrderStatus
 *
 * @author yagular
 */
class OrderStatus {
    
    const STATUS_NEW = 1;
    const STATUS_PAID = 2;
    const STATUS_IN_REALIZATION = 9;
    const STATUS_SENT = 3;
    const STATUS_CANCELED = 4;
    
    private $statusId;
    
    public function getStatusId() {
        return $this->statusId;
    }

    public function setStatusId($statusId) {
        $this->statusId = $statusId;
    }




}
