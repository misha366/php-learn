<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "Arrays"; ?></title>
</head>
<body>
    <?php
//      Каждый массив в пхп ассоциативный
        $arr = ['Hello', 'foo' => 'World', '!'];

        foreach ($arr as $key => $item) {
            echo "$key: $item<br/>";
        }
    ?>
</body>
</html>