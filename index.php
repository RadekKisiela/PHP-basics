<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>PHP basics</h1>
    <form action="index.php" method="get">
        <input type="text" name="name" placeholder="Enter your name" required>
        <input type="submit" value="Submit">
    </form>
    <?php
    if (isset($_GET['name'])) {
        $name = $_GET['name'];
    } else {
        $name = 'Anonymous';
    }

    echo '<h2>Hello ' . $name . '</h2>'
    ?>
</body>

</html>