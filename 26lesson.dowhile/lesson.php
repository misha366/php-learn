<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "Do While loop"; ?></title>
</head>
<body>
    <?php
//    гарантированно выполняется 1 раз
        $i = 0;
        do {
            echo ++$i;
//            code
        } while ($i != 10);
    ?>
</body>
</html>