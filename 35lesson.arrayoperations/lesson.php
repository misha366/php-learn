<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "Array operations"; ?></title>
</head>
<body>
    <?php

        /*
         *
         * isset/array_key_exists - проверка ключа
         * in_array - проверка значения (можно передать true 3 аргументом
         * чтобы сравнение проходило по типам дополнительно)
         * array_search('value', $array) - возвращает КЛЮЧ, под которым храниться значение
         * unset($arr[key]) - удаляет элемент из массива
         *
         * !!! на пхп не нужно писать велосипеды, скорее всего все нужные функции для работы
         * с литералами/внутренними объектами уже написаны
         *
         * */

        $arr = [
            "first" => "foo",
            "second" => "bar",
            "third" => "baz",
            "fourth" => "qux"
        ];

        // isset, помимо переменных, так же проверяет и то, есть
        // ли указанный элемент в массиве
        if (!isset($arr["fifth"])) {
            echo "There is no item with 'fifth' key in array<br/>";
        }

        echo "<pre>";
        print_r($arr);
        echo "</pre>";

        if (is_array($arr)) { // is_array - проверка на массив
            echo "\$arr - массив<br/>";
        }

        if (in_array("foo", $arr)) { // есть ли указанный элемент в массиве
            echo "foo in array<br/>";
        }
    ?>
</body>
</html>