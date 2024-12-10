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

        var_dump($id);
        var_dump($age);

        echo "<b>" . $id . "</b>";
        echo "<b>" . $age . "</b>";
    ?>
</body>

</html>