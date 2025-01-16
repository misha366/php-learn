<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "Functions 3"; ?></title>
</head>
<body>
    <?php
        // Анонимные ф-и
        $funcSample = function () : string {
            return "hello";
        };

        echo $funcSample();
    ?>
</body>
</html>