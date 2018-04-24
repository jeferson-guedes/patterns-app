<?php

namespace SON\adapter;

class PHPBookAdapter implements IBook
{
    private $book;

    public function __construct(string $author, string $title)
    {
        $this->book = new PHPBook($author, $title);
    }
    public function getAuthorAndTitle()
    {
        return  $this->book->getTitle() . 'by' . $this->book->getAuthor();
    }
}