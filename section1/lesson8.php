<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Functions & Filters</title>
</head>
<body>

    <?php
        $books = [
            [
                'title' => 'True Colours',
                'author' => 'Kristin Hannah',
                'website' => 'https://kristinhannah.com/',
                'releaseYear' => 2009,
            ],
            [
                'title' => 'The Bad Beginning',
                'author' => 'Lemony Snicket',
                'website' => 'https://www.lemonysnicket.com/',
                'releaseYear' => 1999,
            ],
            [
                'title' => 'The Crossover',
                'author' => 'Kwame Alexander',
                'website' => 'https://kwamealexander.com/',
                'releaseYear' => 2014,
            ],
            [
                'title' => 'Night Road',
                'author' => 'Kristin Hannah',
                'website' => 'https://kristinhannah.com/',
                'releaseYear' => '2011'
            ],
        ];
    ?>

        <!-- if clause - if the book author is Kristin Hannah Display, otherwise skip -->
        <!-- Note: must be triple === to check equality (single = is for assigning)-->
        <ul>
            <?php foreach ($books as $book) : ?>
                <?php if ($book['author'] === 'Kristin Hannah') : ?>
            <li>
                <a href="<?= $book['website'] ?>">
                    <?= $book['title']; ?> <?= $book['releaseYear']; ?>
                </a>
            </li>
            <?php endif; ?>
            <?php endforeach; ?>
        </ul>



        <!-- Functions are like the verbs of the coding world - they are called, do something and then return a result -->
        <!-- The function stores a piece of code logic within a readable function name that describes what the code is doing -->
        <?php
        function filterByAuthor($books, $author) {
            $filteredBooks = [];

            foreach($books as $book) {
                if ($book['author'] === $author) {
                    $filteredBooks[] = $book;
                }
            }
            return $filteredBooks;
        }
        ?>

        <!-- Calling/Using the function -->
        <ul>
            <?php foreach(filterByAuthor($books, 'Kristin Hannah') as $book) : ?>
                <li>
                <a href="<?= $book['website'] ?>">
                    <?= $book['title']; ?> <?= $book['releaseYear']; ?>
            </a>
                </li>
            <?php endforeach; ?>
        </ul>


<h2>HOMEWORK</h2>

<p>
    Create an array of your favorites movies, including their respective release dates. Then, write a function that filters your list of movies down to only those that were released in the year 2000 or higher. Display the results in an unordered list.
</p>

<?php

$movies = [
    [ 
        'title' => 'Scream',
        'released' => 1996,
        'director' => 'Wes Craven',
        'owned' => true
    ],
    [ 
        'title' => 'Avatar',
        'released' => 2009,
        'director' => 'James Cameron',
        'owned' => true
    ],
    [ 
        'title' => 'Titanic',
        'released' => 1997,
        'director' => 'James Cameron',
        'owned' => true
    ],
    [ 
        'title' => 'The Fast and the Furious: Toyko Drift',
        'released' => 2006,
        'director' => 'Justin Lin',
        'owned' => true
    ],
    [ 
        'title' => 'Transformers',
        'released' => 2007,
        'director' => 'Michael Bay',
        'owned' => true
    ],
];

function filterByYear($movies, $year) {
    
    $releasedAfter2000 = [];
    
    foreach($movies as $movie) {
        if ($movie['released'] >= $year) {
            $releasedAfter2000[] = $movie;
        }
    }
    return $releasedAfter2000;
};

?>

<ul>
    <?php foreach(filterByYear($movies, 2000) as $movie) : ?>
    <li>
        <?= $movie['title']; ?> - <?= $movie['released']; ?>
    </li>
    <?php endforeach; ?>
</ul>


</body>
</html>