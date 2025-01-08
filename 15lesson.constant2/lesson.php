<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "Files"; ?></title>
</head>
<body>
    <?php
        // __DIR__ - тоже самое что и __FILE__, только путь до папки
        // require_once 'file.php'; - подключает файл (только один раз )

        // Так же можно создавать константы внутри класса
        class Point {
            const name = "str";
            // поле-константа ведёт себя так же как и статическое поле
        }
    ?>
</body>
</html>