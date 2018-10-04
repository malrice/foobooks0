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
</head>

<body>
<h1>Foobooks0</h1>


<?php foreach($books as $title => $book): ?>
    <div class ='book'>
       <?= $title ?> by <?= $book['author'] ?>
       <img src='<?=$book['cover_url'];?>' alt='Cover photo for the book <?=$title;?>'>

    </div>
<?php endforeach ?>

<div class ='book'>
    <?= $title?> by <? $book['author']?>

<!--
<form method='GET' action='search.php'>

    <label>Search for a book:
        <input type='text' name='searchTerm'>
    </label>

    <input type='submit' value='Search'>

</form>
<?php if($searchTerm): ?>
    You searched for <?=$searchTerm?>
<?php endif; ?>

<?php if(isset($books)): ?>
<?php foreach($books as $title => $book): ?>
    <div class ="book">
    <?=$title ?> by <?=$book["author"] ?>
    <img src='<?=$book['cover_url']?>' alt='Cover photo for the book <?=$title ?>'
    </div>
<?php endforeach?>
<?php endif; ?> -->
</body>
</html>