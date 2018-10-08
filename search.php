<?php
require 'Book.php';
require 'Form.php';
require('helpers.php');

use Foobooks0\Book;


session_start();

$book = new Book('books.json');
$form = new DWA\Form($_POST);

# Get data from form request
$searchTerm = $form->get('searchTerm');

$caseSensitive = $form->has('caseSensitive');


#error reporting
$errors = $form->validate([
    'searchTerm' =>'required|alphaNumeric',

]);

if(!$form->hasErrors){
    $books = $book->getByTitle($caseSensitive, $searchTerm);
}

#storing data in the session
#   key        values
$_SESSION['results'] = [
    #storing array of data
    'errors' => $errors,
    'hasErrors' => $form->hasErrors,
    'searchTerm' => $searchTerm, #saving initial search term
    'books' => $books, #saving book data
    'bookCount' => count($books),
    'caseSensitive' => $caseSensitive
];

#redirect back to form
header('Location: index.php');