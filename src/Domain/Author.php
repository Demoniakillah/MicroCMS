<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace MicroCMS\Domain;
/**
 * Description of Author
 *
 * @author demoniakillah
 */
class Author {
    
    /**
     * Author id.
     *
     * @var integer
     */
    private $id;
    
    /**
     * Author firstName.
     * 
     * @var string 
     */
    private $firstName;
    
    /**
     * Author lastName.
     * 
     * @var string 
     */
    private $lastName;
    
    public function getId() {
        return $this->id;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }
    
}
