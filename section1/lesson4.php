<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Variables</title>
</head>

<body>

    <!-- To concatonate - we use a . -->
    <h1>
        <?php echo "Hello, " . "world"; ?>
    </h1>


    <!-- To create a variable - we use $ followed by the variable name. -->
    <!-- to prevent the variable and everyone being written all together, we can concatonate a space -->
    <h2>
        <?php 
            $greeting = "Hello";
            echo $greeting . " " . "everyone";
        ?>
    </h2>


    <!-- Alternatively - we can refactor & surround the whole thing with double quotes. This makes the code cleaner -->
    <!-- Note: Double quotes display the value of the variable. Single quotes print the variable itself -->
    <p>
        <?php
            $greeting = "Hi there";
            echo "$greeting everyone";
        ?>
    </p>

</body>
</html>