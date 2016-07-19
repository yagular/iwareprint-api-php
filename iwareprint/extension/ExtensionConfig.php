<?php
/**
 * Created by PhpStorm.
 * User: yagular
 * Date: 7/18/16
 * Time: 10:03 PM
 */

namespace extensions;


class ExtensionConfig {
    public $setSettingsUrl;
    public $adminMenuElements = [];
    public $customViews = [];
    public $apiAccessSections = [];
    public $requiredModules = [];

    /**
     * @return mixed
     */
    public function getSetSettingsUrl() {
        return $this->setSettingsUrl;
    }

    /**
     * @param mixed $setSettingsUrl
     */
    public function setSetSettingsUrl($setSettingsUrl) {
        $this->setSettingsUrl = $setSettingsUrl;
    }





    /**
     * @return array
     */
    public function getAdminMenuElements() {
        return $this->adminMenuElements;
    }

    /**
     * @param array $adminMenuElements
     */
    public function setAdminMenuElements($adminMenuElements) {
        $this->adminMenuElements = $adminMenuElements;
    }

    /**
     * @return array
     */
    public function getCustomViews() {
        return $this->customViews;
    }

    /**
     * @param array $customViews
     */
    public function setCustomViews($customViews) {
        $this->customViews = $customViews;
    }

    /**
     * @return array
     */
    public function getApiAccessSections() {
        return $this->apiAccessSections;
    }

    /**
     * @param array $apiAccessSections
     */
    public function setApiAccessSections($apiAccessSections) {
        $this->apiAccessSections = $apiAccessSections;
    }

    /**
     * @return array
     */
    public function getRequiredModules() {
        return $this->requiredModules;
    }

    /**
     * @param array $requiredModules
     */
    public function setRequiredModules($requiredModules) {
        $this->requiredModules = $requiredModules;
    }


}