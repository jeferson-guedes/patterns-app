<?php 
    require __DIR__.'/../vendor/autoload.php';

    use SON\adapter\PHPBookAdapter;
    use SON\adapter\RenderBook;

    $book = new PHPBookAdapter('Jeferson Guedes', 'Livro de consumo');
    
    $render =  new RenderBook($book);

    echo $render->renderTitleAndName();