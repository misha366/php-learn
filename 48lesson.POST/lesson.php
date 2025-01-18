<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "POST method"; ?></title>
</head>
<body>
    <?php
        // в POST передаются важные данные, которые нужно защитить
        if (empty($_POST)) {
    ?>
            <form method="POST">
                <input type="text" name="firstName"><br>
                <input type="text" name="secondName"><br>
                <input type="submit" value="Submit">
            </form>
    <?php } else {
            echo "POST data:<br>";
            print_r($_POST);
        }?>
</body>
</html>