<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace MicroCMS\Domain;

/**
 * Description of Book
 *
 * @author demoniakillah
 */
class Book {
    
    /**
     * Book id.
     *
     * @var integer
     */
    private $id;
    
    /**
     * Book title.
     *
     * @var string
     */
    private $title;
    
    /**
     * Book isbn.
     * 
     * @var string
     */
    private $isbn;
    
    /**
     * Book summary.
     * 
     * @var string
     */
    private $summary;
    
    /**
     * Associated author.
     *
     * @var \MicroCMS\Domain\Author
     */
    private $author;
    
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getIsbn() {
        return $this->isbn;
    }

    public function getSummary() {
        return $this->summary;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setIsbn($isbn) {
        $this->isbn = $isbn;
    }

    public function setSummary($summary) {
        $this->summary = $summary;
    }
    
    public function getAuthor() {
        return $this->author;
    }

    public function setAuthor(\MicroCMS\Domain\Author $author) {
        $this->author = $author;
    }




}
