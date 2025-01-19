<?php declare(strict_types=1); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "Inherit"; ?></title>
</head>
<body>
    <?php
        class Animal {
            private int $legs = 4;

            public function info() : void {
                echo "I have " . $this->legs . " legs.\n";
            }
        }

        class Dog extends Animal {
            public string $name = "Dog";
        }

        $dog = new Dog();
        $dog->info();
    ?>
</body>
</html>
