<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Conditionals and Booleans</title>

    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>

</head>

<body>

    <h1>You have read "Dark Matter"</h1>

    <!-- Making the contents dynamic - using a variable to insert the book name -->
    <?php $name = "Dark Matter"; ?>
    
    <h2>You have read "<?php echo $name; ?>"</h2>


    <!-- Conditionals - show a different piece of text depending on if the book has been read or not -->
    <!-- the question goes in the parentheses - if true what is in the curly braces will happen -->
    <?php
    $name = "Dark Matter";
    $read = true;

    if ($read) {
        $message = "You have read $name";
    } else {
        $message = "You have NOT read $name";
    }
    
    ?>

    <!-- shorthand for echoing - semicolon at the end is optional as we are closing the tag straight after -->
    <h2><?= $message ?></h2>

</body>
</html>