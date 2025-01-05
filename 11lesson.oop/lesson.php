<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "OOP"; ?></title>
</head>
<body>
    <?php 
        class Point {
            public $x;
            public $y;
        }

        $point_object = new Point;
        $point_object->x = 14;
        $point_object->y = -3314;
        echo var_dump($point_object);

        unset($point_object); // удаляет объект
    ?>
</body>
</html>