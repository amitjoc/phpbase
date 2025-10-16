<?php
use PHPBASE\Model\Book;

include_once __DIR__ . '/../vendor/autoload.php';

$book = new Book("1984", "George Orwell");
echo "Title: " . $book->getTitle() . "\n";
echo "Author: " . $book->getAuthor() . "\n";
