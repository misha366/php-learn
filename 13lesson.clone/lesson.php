<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "Clone"; ?></title>
</head>
<body>
    <?php 
        class Point {
            public $x;
            public $y;
        }

        $point_obj = new Point;
        $point_obj->x = 44;
        $point_obj->y = 44;

        
        $point_copy = clone $point_obj;
        $point_copy->x = 56;
        $point_copy->y = 47;

        // В $point_copy была записана не ссылка на объект $point_obj,
        // а его копия
        echo var_dump($point_obj);
    ?>
</body>
</html>