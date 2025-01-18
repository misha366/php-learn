<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "JSON tools"; ?></title>
</head>
<body>
    <?php
        $arrJson = [
            'name' => 'John Doe',
            'phones' => [
                '888',
                '5555',
            ]
        ];

        $encodeArray = json_encode($arrJson); // возвращает json-строку
        echo $encodeArray;
        echo "<pre>";
        print_r(json_decode($encodeArray, true)); // возвращает массив
        // данных из json строки
        echo "</pre>";
    ?>
</body>
</html>