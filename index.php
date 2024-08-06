<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Practice</title>
    <style>
        h2, h1 {
           display: grid;
            place-items: center;
            height: 10vh;
            margin: 0;
            font-family: sans-serif;

        }
        ul {
            list-style: none;
            display: grid;
            place-items: center;
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
        li{
            display: grid;
            place-items: center;
            margin: 0;
            padding: 10px;
            font-family: sans-serif;
        }
    </style>
</head>
<body>

    <h1>
        <?php
            $greeting = "Hello";
            $group = "Everybody";
             echo "$greeting,  $group !";

         ?>

    </h1>

<p>

    <?php
    echo "lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, asperiores atque beatae commodi consequatur corporis
    cumque debitis, distinctio doloribus eaque eos, excepturi expedita fugit harum iure magnam molestias nemo obcaecati
    omnis quaerat quas quia quibusdam quisquam repellendus rerum saepe sapiente sed similique sint soluta tempora totam
    ut velit vero voluptas voluptatum.d"
    ?>
</p>
<?php
$title = '"Dark Matter."';
$read = false;

if ($read) {

    $message =  "You have read $title";
} else {
    $message = "You have NOT read $title";
}
   ?>
<h2>
    <?= $message ?>
</h2>

<h1>Recommended Books</h1>


<?php

//Array of books
$books = [
        [
                'name'=>"The Hitchhiker's Guide to the Galaxy",
            "author" => "Douglas Adams",
        "site" => "https://example.com",
            'release_year' => 1979,

],
    [
        "name"=>"The Hunger Games",
        "author" => "Douglas Adams",
        "site" => "https://example.com",
        'release_year' => 2008,

    ],
    [
        "name" => "The Lord of the Rings",
        "author" => "JRR Tolkien",
        "site" => "https://example.com",
            'release_year' => 1954,


]
];
?>
<ul>
    <!--Looping through the array
    <?php foreach ($books as $book) : ?>
        <!-Displaying the books-->
        <li>
            <a href="<?= $book['site'] ?>"><?= $book['name'] ?></a>
            author: <?= $book['author'] ?> <br>
            Release Year: <?= $book['release_year'] ?>
            <br>
         </li>
    <?php endforeach;

    ?>
</ul>
</body>
</html>