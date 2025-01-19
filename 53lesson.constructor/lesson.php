<?php declare(strict_types=1); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "Constructor PHP"; ?></title>
</head>
<body>
    <?php
        class People {
            private string $name;
            public function __construct(string $name) {
                $this->name = $name;
            }

            // в ПХП нету перегрузки через аргументы
            // public function __construct() {
            //     $this->name = $name;
            // }

            // Чтобы изменить строковое представление объекта можно перезаписать
            // метод __toString

            public function getName() : string {
                return $this->name;
            }
        }

        $nevermore = new People("nevermore");
        echo $nevermore->getName();
    ?>
</body>
</html>
