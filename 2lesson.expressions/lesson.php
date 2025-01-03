<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "New Page"; ?></title>
    <?php # Конструкция <?= - аналог <?php echo ?>
</head>
<body>
    <?php
        echo date(DATE_RSS); # выводит текущую дату

        # в пхп в конце каждого выражения нужно ставить ;
    ?>
    <hr>
    <?php 
        echo 9 + 3 + 1;
    ?>
    <hr>
    <?php
        # mt_rand(n, m) - возвращает случайное число в диапазоне от n до m
        # включительно
        if (mt_rand(0, 1)) {
            echo "<div style=\"color: blue\">Синий текст</div>";
        } else {
            echo "<div style=\"color: red\">Красный текст</div>";
        }
    ?>
</body>
</html>