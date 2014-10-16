<?php

/*
 * This file is subject to the terms and conditions defined in
 * file 'LICENSE.txt', which is part of this source code package.
 */

namespace iwareprint\representations;

/**
 * Description of ParameterRepresentation
 *
 * @author yagular
 */
class ParameterRepresentation {

    private $id;
    private $title;
    private $description;
    private $values;
    
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDescription() {
        return $this->description;
    }

    /**
     * 
     * @return ParameterValueRepresentation[]
     */
    public function getValues() {
        return $this->values;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setValues($values) {
        $this->values = \iwareprint\Util::fetch($values,  ParameterValueRepresentation::class);
    }



}
