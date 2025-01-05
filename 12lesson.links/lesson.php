<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "Scope"; ?></title>
</head>
<body>
    <?php 
        class Point {
            public $x;
            public $y;
        }

        $first = new Point;
        $first->x = 3;
        $first->y = 3;

        $second = $first; // 1
        $first->x = 5;
        $first->y = 5;

        // Будет выведено 5, 5; потому что в моменте 1 не создалась копия класса,
        // в $second записалась ссылка, которая посылается на $first
        echo "First: $first->x, $first->y" . "<br />";

        // Это не работает с простыми значениями, если переменной присваиваеться 
        // простое значение из другой переменной, то оно просто копируеться в неё

        // Но можно сделать иначе, можно ту переменную что вбирает в себя значение
        // сделать ссылкой, чтобы поведение было похоже на поведение с объектами классов:
        
        $var_first = 5;
        $var_second = &$var_first;
        $var_second = 88;
        echo "\$var_first: $var_first";
    ?>
</body>
</html>