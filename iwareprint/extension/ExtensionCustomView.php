<?php
/**
 * Created by PhpStorm.
 * User: yagular
 * Date: 7/18/16
 * Time: 10:03 PM
 */

namespace extensions;


class ExtensionCustomView {

    const TYPE_LOCAL = 1;
    const TYPE_EXTERNAL = 2;

    public $path;

    public $contentType = 1;
    public $content;

    /**
     * @return mixed
     */
    public function getPath() {
        return $this->path;
    }

    /**
     * @param mixed $path
     */
    public function setPath($path) {
        $this->path = $path;
    }

    /**
     * @return int
     */
    public function getContentType() {
        return $this->contentType;
    }

    /**
     * @param int $contentType
     */
    public function setContentType($contentType) {
        $this->contentType = $contentType;
    }

    /**
     * @return mixed
     */
    public function getContent() {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content) {
        $this->content = $content;
    }



}