<?php

session_start();

if($_SESSION['results']){
    $results = $_SESSION['results'];

    $books = $results['books'];
    $searchTerm = $results['searchTerm'];
}

session_unset();