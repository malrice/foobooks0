<?php

namespace Foobooks0;

class Book
{
    #properties
    private $books;

    #methods
    public function __construct($json)
    {
        # Load book data
        $booksJson = file_get_contents($json);
        #books declared
        $this ->books = json_decode($booksJson, true);
    }

    public function getAll()
    {#       books set
        return $this->books;
    }
                               #setting parameters
    public function getByTitle(Bool $caseSensitive, String $searchTerm){
    $results = [];
#filter book data according to search term, books used
#                        data       key      value
        foreach ($this ->books as $title => $book) {
            if ($caseSensitive) {
                $match = $title == $searchTerm;
            } else {
                $match = strtolower($title) == strtolower($searchTerm);
            }
            if ($match) {
            $results[$title] = $book;
            }
        }
    return $results;
    }

}