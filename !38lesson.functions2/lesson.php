<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "Functions 2"; ?></title>
</head>
<body>
    <?php
        // с версии 7.0 можно указывать типы принимаемых аргументов,
        // возвращаемого результата

        // можно сделать аргумент необязательным установив ему дефолтное значение
        // все необязательные параметры должны быть в конце
        function sum(int $a, int $b, int $c = 0) : int {
            return $a + $b + $c;
        }

        echo sum(34, 67) . "<br/>";

        // Если мы в функцию передаём объект, то будет передаваться его ссылка
        // С литералами так не работает, поэтому чтобы достигнуть такого эффекта можно
        // использовать &

        function add10(int &$a) : int {
            return $a += 10;
        }
        $someNumber = 34;
        echo "\$someNumber = $someNumber<br/>";
        add10($someNumber);
        echo "\$someNumber = $someNumber<br/>";

        // Чтобы принять неопределённое кол-во параметров, нужно использовать
        // оператор ...
        function concatenate(string ...$s) : string {
            // implode - противоположная explode ф-я, принимает сепаратор и массив
            // соединяя элементы массива сепаратором
            return implode("<br/>", $s);
        }

        echo concatenate("hello", "world", "foo", "bar");
    ?>
</body>
</html>