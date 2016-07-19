<?php

/*
 * This file is subject to the terms and conditions defined in
 * file 'LICENSE.txt', which is part of this source code package.
 */

namespace iwareprint\representations;

/**
 * Description of Product
 *
 * @author yagular
 */
class ProductRepresentation {
    
    private $id;
    private $name;
    private $title;
    private $short;
    private $hidden;
    private $calculationType;
    private $position;
    private $parameters;
    
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getShort() {
        return $this->short;
    }

    public function getHidden() {
        return $this->hidden;
    }

    public function getCalculationType() {
        return $this->calculationType;
    }

    public function getPosition() {
        return $this->position;
    }

    /**
     * 
     * @return ParameterRepresentation[]
     */
    public function getParameters() {
        return $this->parameters;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setShort($short) {
        $this->short = $short;
    }

    public function setHidden($hidden) {
        $this->hidden = $hidden;
    }

    public function setCalculationType($calculationType) {
        $this->calculationType = $calculationType;
    }

    public function setPosition($position) {
        $this->position = $position;
    }

    public function setParameters($parameters) {
        $this->parameters = \iwareprint\Util::fetch($parameters,  ParameterRepresentation::class);
    }


}
