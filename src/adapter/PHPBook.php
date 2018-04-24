<?php

namespace SON\adapter;

class PHPBook 
{
    private $author;
    private $title;

    public function __construct(string $author, string $title) 
    {
        $this->author = $author;
        $this->title = $title;
    }
    public function getAuthor()
    {
        return $this->author;
    }
    public function getTitle()
    {
        return $this->title;
    }

}