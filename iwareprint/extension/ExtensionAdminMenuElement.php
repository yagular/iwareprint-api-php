<?php
/**
 * Created by PhpStorm.
 * User: yagular
 * Date: 7/18/16
 * Time: 10:04 PM
 */

namespace extensions;


class ExtensionAdminMenuElement {

    public $section;
    public $icon;
    public $url;
    public $title;

    public static function getSections() {
        return [
            "orders","products","marketing","customers","cms","statistics",
            "creator","couriers","settings"
        ];
    }

    /**
     * @return mixed
     */
    public function getSection() {
        return $this->section;
    }

    /**
     * @param mixed $section
     */
    public function setSection($section) {
        $this->section = $section;
    }

    /**
     * @return mixed
     */
    public function getIcon() {
        return $this->icon;
    }

    /**
     * @param mixed $icon
     */
    public function setIcon($icon) {
        $this->icon = $icon;
    }

    /**
     * @return mixed
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url) {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title) {
        $this->title = $title;
    }


}