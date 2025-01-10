<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "Arrays 3"; ?></title>
</head>
<body>
    <?php
        $transport = [
            "Авто" => ['Лада', 'Chevrolet', 'Dodge'],
            "Самолёты" => ['Самолёт1', 'Самолёт2', "Самолёт3", "Самолёт4"],
            "Status" => true
        ];
    ?>
    <pre>
        <?php
            var_dump($transport);
        ?>
    </pre>
</body>
</html>