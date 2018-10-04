<?php

session_start();

require('helpers.php');

#Get data from form request
$searchTerm = $_GET['searchTerm'];

# Load Book data
$booksJson= file_get_contents( 'books.json');
$books = json_decode($booksJson, true);
dump($books['The Bell Jar']);

#filter book data according to  search term
foreach($books as $title => $book){
    if($title != $searchTerm){
        unset($books[$title]);
     }

}

#Store our data in the session
$_SESSION['results'] = [
    'searchTerm' => $searchTerm,
    'books' => $books
];

header('Location: index.php');