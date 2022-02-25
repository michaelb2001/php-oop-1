<?php


require_once __DIR__."/classes/Movie.php";

$film_1= new Movie("la banda dei babbi natale");
$film_2= new Movie("chiedimi se sono felice");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>movies</title>
</head>
<body>
    <h2>primo film: <?php echo $film_1->getTitle() ?></h1>
    <h2>primo film: <?php echo $film_2->getTitle() ?></h1>
</body>
</html>
