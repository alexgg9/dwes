<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variables especiales</title>
</head>
<body>
    <h1>Prueba de variables especiales</h1>

        <h2>Variables especiales</h2>

        <h3>$_POST</h3>
        <pre><?php print_r($_POST); ?></pre>

        <h3>$_GET</h3>
        <pre><?php print_r($_GET); ?></pre>

        <h3>$_REQUEST</h3>
        <pre><?php print_r($_REQUEST); ?></pre>

        <h3>$_SERVER</h3>
        <pre><?php print_r($_SERVER); ?></pre>

        <h3>$_SESSION</h3>
        <pre><?php print_r($_SESSION); ?></pre>

        <h3>$_COOKIE</h3>
        <pre><?php print_r($_COOKIE); ?></pre>

        <h3>$_ENV</h3>
        <pre><?php print_r($_ENV); ?></pre>
        
        
        <h3>Foreach solo valor</h3>
        <?php
        foreach($_SERVER as $row){
            echo "$row <br>";
        }
        
        ?>

        <h3>Foreach solo valor</h3>
        <?php
        foreach($_SERVER as $key => $value){
            echo "[ $key ] => $value <br>";
        }

        ?>
        
</body>
</html>
