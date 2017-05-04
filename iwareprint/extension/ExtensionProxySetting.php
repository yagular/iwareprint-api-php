<?php
/**
 * Created by PhpStorm.
 * User: yagular
 * Date: 8/4/16
 * Time: 5:10 PM
 */

namespace iwareprint\extensions;


class ExtensionProxySetting {

    public $localUri;
    public $remoteUrl;

    /**
     * @return mixed
     */
    public function getLocalUri() {
        return $this->localUri;
    }

    /**
     * @param mixed $localUri
     */
    public function setLocalUri($localUri) {
        $this->localUri = $localUri;
    }

    /**
     * @return mixed
     */
    public function getRemoteUrl() {
        return $this->remoteUrl;
    }

    /**
     * @param mixed $remoteUrl
     */
    public function setRemoteUrl($remoteUrl) {
        $this->remoteUrl = $remoteUrl;
    }



}