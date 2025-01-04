<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Type casting"; ?></title>
</head>
<body>
    <?php 
        $str = "4.544ффф%"; // строка
        $number = $str + 0.466; // при использовании строки в которой есть число
        // в арифметической операции она неявно преобразуеться в числовой тип, 
        // отбросив весь текст, который не являеться числом

        echo "result" . $number; // так же число преобразовывается в строку
        // в случае конкатенации
    ?>
</body>
</html>