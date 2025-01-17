<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "Substrings"; ?></title>
</head>
<body>
    <?php
        /*
         *
         * str_replace($s1, $s2, $s3) - заменяет $s1 на $s2 в строке $s3
         * trim($s[, $del]) - удаляет все пробелы по бокам [+ удаляет все подстроки $del
         * из строки $s (imba)]
         *
         * */

        $string = "Hello World!";

        echo substr($string, 6, 5);
        echo strpos($string, "World"); // возвращает индекс первого вхождения подстроки
    ?>
</body>
</html>