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
        echo "<br/><br/>Tasks: <br/>";

        // 1 Ф-я с проверкой на чётность

        // 1.1
        function isEven(int $number): bool {
            return !($number % 2);
        }
        echo "<hr/>Task 1.1: <br/>";
        echo isEven(2) . "<br/>";
        echo isEven(543) . "<br/>";
        echo isEven(9999) . "<br/>";
        echo isEven(1918) . "<hr/>";

        // Сумма всех аргументов

        // 2.1
        echo "Task 2.1: <br/>";

        function sumArgs(int ...$args) : int {
            return array_sum($args);
        }

        echo sumArgs(33, 32, 599, 283832, 100, 0, 1, 2);

    ?>
</body>
</html>