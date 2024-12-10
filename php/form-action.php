<!DOCTYPE html>
<html lang="en">

<head>
    <!-- settings -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- title -->
    <title>PHP page</title>
</head>

<body>
    <?php
        $id = $_GET["id"];
        $age = $_GET["age"];

        if ($age >= 18) {
            echo "<div>Sei maggiorenne</div>";
        } else {
            echo "<div>Sei minorenne</div>";
        }
    ?>
</body>

</html>