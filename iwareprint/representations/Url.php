<?php

/*
 * This file is subject to the terms and conditions defined in
 * file 'LICENSE.txt', which is part of this source code package.
 */
namespace iwareprint\representations;
/**
 * Description of Url
 *
 * @author yagular
 */
class Url {
    private $url;
    
    public function getUrl() {
        return $this->url;
    }

    /**
     * @apiDescription Url pliku
     * @param string $url
     */
    public function setUrl($url) {
        $this->url = $url;
    }


}
