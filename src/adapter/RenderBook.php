<?php

namespace SON\adapter;

class RenderBook
{
    private $book;

    public function __construct(IBook $book)
    {
        $this->book = $book;
    }
    
    public function renderTitleAndName()
    {
        return $this->book->getAuthorAndTitle();
    }
}