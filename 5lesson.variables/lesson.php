<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "Variables"; ?></title>
</head>
<body>
    <?php
        # Первым символом нельзя вводить число
        # Из специальных символов можно использовать только "_"
        
        # Переменные чувствительны к регистру
        $var_sample = "Sample";

        echo $var_sample;

        class SampleObject {}

        # типы данных php
        $boolean_sample = true;
        $integer_sample = 2507;
        $float_sample = 2.334;
        $string_sample = "some content";
        $array_sample = array("foo", "bar", "hello", "world");
        $object_sample = new SampleObject;
        $null_sample; // = NULL
        # и так же есть переменные с типом resource, которые хранят
        # дескрипторы открытых файлов, соединений с базой данных,
        # областей холста изображения
    ?>
</body>
</html>