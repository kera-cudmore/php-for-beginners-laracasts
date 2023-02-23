<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Associative Arrays</title>
</head>
<body>
    
<!-- Create the array - 0 based array - first item is 0 -->
    <?php
        $books = [
            "Do androids dream of electric sheep",
            "The Langoliers",
            "Hail Mary"
        ]
    ?>

    <!-- To echo out the second item in the array we can use bracket notation -->
    <p>
        <?= $books[1] ?>
    </p>

    <!-- Declare Asociative array -->

    <?php
        $books2 = [
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
            ]
        ];
    ?>

    <!-- To access in associative arrays - we can utilise the key -->
    <ul>
        <?php foreach ($books2 as $book) : ?>

            <li>
                <a href="<?= $book['website']; ?>" target="_blank">
                    <?= $book['title']; ?> (<?= $book['releaseYear']; ?>)
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>