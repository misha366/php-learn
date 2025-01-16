<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "Global Variables"; ?></title>
</head>
<body>
    <?php
        function sampleVar() : int {
            global $var;
            $var = 33;
            return $var;
        }

        $var = 56;
        echo $var . "<br/>"; // 56
        sampleVar();
        echo $var; // 33

        // Так же с помощью ключевого слова static можно сделать так,
        // чтобы переменная не уничтожалась после выхода из функции
    ?>
</body>
</html>