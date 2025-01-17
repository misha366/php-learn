<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "Functions 4"; ?></title>
</head>
<body>
    <?php
        // Замыкание - функция, которая запоминает состояние окружения в момент
        // своего создания

        // Т. Е. Если состояние переменных после декларации функции изменится, то
        // функция с замыканием будет содержать первоначальное состояние этих переменных

        // замыкания работают только с анонимными функциями

        // без замыкания доступа к внешней переменной не будет

        $message = "Hello";
        $sample = function () use ($message) {
            echo $message;
        };

        $message = "foo";

        $sample();
    ?>
</body>
</html>