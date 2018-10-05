<?php

session_start();

require('helpers.php');

# Get data from form request
$searchTerm = $_GET['searchTerm'];

# Load book data

$booksJson = file_get_contents('books.json');
$books = json_decode($booksJson, true);

#filter book data according to search term
#       data       key      value
foreach($books as $title => $book){
    if($title != $searchTerm ){
    #         array   key
        unset($books[$title]);
    }
}

#storing data in the session
        #   key        values
$_SESSION['results'] = [
     #storing array of data
    'searchTerm' => $searchTerm, #saving initial search term
    'books' => $books, #saving book data
    'bookCount' => count($books),
];


dump($searchTerm);

#redirect back to form
header('Location: index.php');