<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson</title>
</head>
<body>
    <?php
        $arr1 = [
            "first" => "Red",
            "second" => "Green",
        ];
        $arr2 = [
            "first" => "White",
            "third" => "Blue",
            "fourth" => "Yellow",
        ];

        $con = $arr1 + $arr2; // Конкатенация массивов
        // При перезаписи элементов приоритет отдаётся
        // элементам массива слева

        // Чтобы соединить все элементы массива, без явно
        // указанных ключей без перезаписи нужно использовать
        // функцию array_merge(...$arrays)

        echo "<pre>";
        var_dump($con);
        echo "</pre>";

        // Массивы будут равными (== и ===), только если у них одинаковое кол-во
        // элементов и под одними и теми же ключами одни и те же значения

        // В случае использования == типы значений могут отличаться, но массивы
        // будут равны


    ?>
</body>
</html>