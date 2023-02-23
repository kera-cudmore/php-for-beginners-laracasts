<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>
<body>
    <h1>Recommended Books - Standard List</h1>

    <ul>
        <li>Do androids dream of electric sheep</li>
        <li>The Langoliers</li>
        <li>Hail Mary</li>
    </ul>

    <h2>Dynamic Lists using an array</h2>
        
        <!-- Create the array -->
        <?php
            $books = [
                "Do androids dream of electric sheep",
                "The Langoliers",
                "Hail Mary"
            ]
        ?>

                <!-- Using a foreach loop to echo out the books -->
        <ul>
            <?php foreach($books as $book) {
                echo "<li>$book</li>";
            }
            ?>
        </ul>


        <h2>Shorthand for foreach loops</h2>

        <!-- The above can get a bit messy if there are numberous tags nested, so we can clean up the code as follows -->
        <ul>
            <?php foreach ($books as $book) : ?>
                <li><?= $book ?></li>
            <?php endforeach; ?>
        </ul>
</body>
</html>