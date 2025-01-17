<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "HTML tools"; ?></title>
</head>
<body>
    <?php
        $str = "text\nhtml\nbar";

        echo nl2br($str); // ф-я заменяет \n на <br/>
        // htmlspecialchars() - ф-я, которая гарантирует, что любой код в выводимой строке
        // будет отображен, но не будет выполнен

        // strip_tags() - удаляет из строки все хтмл теги
    ?>
</body>
</html>