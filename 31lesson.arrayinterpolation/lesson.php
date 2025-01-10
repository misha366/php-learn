<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "Array Interpolation"; ?></title>
</head>
<body>
    <?php
        $array = ["one" => 14, "two" => 15, "three" => 16];

//        Кавычки писать не нужно
        echo "Foo bar $array[one], hello $array[three]\n";
    ?>
</body>
</html>