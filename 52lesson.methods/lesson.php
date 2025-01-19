<?php declare(strict_types=1);?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "Methods"; ?></title>
</head>
<body>
    <?php
        class Hello {

            private string $name;

            public static function printText() : void {
                echo "Hello World!";
            }

            public function setName(string $name) : void {
                $this->name = $name;
            }

            public function getName() : string {
                return $this->name;
            }
        }



        Hello::printText();
    ?>
</body>
</html>