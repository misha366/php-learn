<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "Strings"; ?></title>
</head>
<body>
    <?php

        /*
         *
         * chr($ascii) - ascii -> char
         * ord($char_number) - char -> ascii
         *
         */

        // Строки в пхп работают почти как массивы
        $string = "Hello World!";

        echo $string[4] . "<br/>";

        // С обращением по индексу есть проблема. Английские символы занимают байт,
        // а русские 2, поэтому при обращении по индексу выводится только половина
        // символа, из-за чего выдаёт знак вопроса

        $string2 = "ПРивет мир";
        echo mb_strlen($string2) . "<br/>";

        // Использовать mb_strlen, вместо strlen, для правильного подсчёта русских символов
    ?>
</body>
</html>