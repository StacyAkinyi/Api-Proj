<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
       <h1>This is my first page</h1>
       <?php
        require_once "load.php";
        print $Obj-> user_age("Alex", 2001);
        ?>
    </body>
</html>