<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "Foreach loop"; ?></title>
</head>
<body>
    <?php
        $arr = [1, 2, 3];
        for ($i = 0; $i < count($arr); $i++) { // count - возвращает length массива
            echo $arr[$i] . "<br>";
        }

        foreach ($arr as $key => $value) {
            echo "$key => $value" . "<br>";
        }
    ?>
</body>
</html>