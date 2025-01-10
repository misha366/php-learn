<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "List"; ?></title>
</head>
<body>
    <?php
        $arr = [1, 2, 3];
        list($first, $second, $third) = $arr; // распаковывает массив

//        Чтобы использовать ф-ю list в массиве все ключи должны индексами,
//        как в стандартном массиве (0, 1, 2, 3....)
        echo $first . " " . $second . " " . $third;

//        list($y, $x) = [$x, $y]; - свап переменных
    ?>
</body>
</html>