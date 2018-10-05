<?php
session_start();
#dump($books["The Bell Jar"]['author']);

#extracing information out of the session, isset tells us if the restults key exists in the session
if(isset($_SESSION['results'])){
    #go into session array set up on search.php,
    #first by getting all results, then narrowing down to books, term
    $results =$_SESSION['results'];
    $books = $results['books'];
    $searchTerm = $results['searchTerm'];
    $booksCount = $results['bookCount'];
    }

session_unset();