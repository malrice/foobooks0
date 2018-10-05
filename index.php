<?php
require 'helpers.php';
require 'logic.php';
?>


<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Foobooks0</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
    <link href='/css/style.css' rel='stylesheet'>

</head>

<body>
<h1>Foobooks0</h1>
<p> Foobooks0 is a small library of books</p>

<form method='GET' action='search.php'>
    <label> Search for a book by title<br/>
    <!--prefills the box with search term -->
        <input type='text' name='searchTerm' value='<?php if(isset($searchTerm)) echo $searchTerm;?>' >

    </label>
    <br/>
    <input type='submit' value='Search'>
</form>
<?php if (isset($searchTerm)): ?>
    <div class='alert alert-success' role='alert'>
    You searched for <em><?= $searchTerm ?></em>
    </div>
<?php endif; ?>

<?php if (isset($booksCount) and $booksCount == 0): ?>
    <div class='alert alert-warning' role='alert'>
        No results found.
    </div>
<?php endif; ?>

<?php if (isset($books)): ?>

    <ul class='books'>
    <?php foreach ($books as $title => $book): ?>
        <li class='book'>
            <div class='book'>
                <div class='title'> <?= $title ?> </div>
                <div class='author'>
                    by <?= $book['author'] ?>
                </div>
                <img src='<?= $book['cover_url']; ?>' alt='Cover photo for the book <?= $title; ?>'>
        </li>
        </ul>
        </div>
    <?php endforeach ?>
<?php endif ?>

</body>
</html>