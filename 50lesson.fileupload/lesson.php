<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "File Upload"; ?></title>
</head>
<body>
    <pre>
        <?php
            // Вся информация про файл будет в массиве $_FILES
            print_r($_FILES);
        ?>
    </pre>
    <form enctype="multipart/form-data" method="POST">
        <input type="file" name="filename">
        <input type="submit" value="Отправить">
    </form>
</body>
</html>