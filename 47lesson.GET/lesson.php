<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "GET method"; ?></title>
</head>
<body>
    <?php
        print_r($_GET);
        // urlencode() - кодирует недопустимые в урл символы
        // parse_url() - собирает всю инфу про урл в массив
        // - PHP_URL_... - получить отдельно какой-либо элемент из урл
    ?>
</body>
</html>