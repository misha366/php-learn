<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Type casting"; ?></title>
</head>
<body>
    <?php 
        $str = "4.544kakakkaka"; // строка
        $number = $str + 0.466; // при использовании строки в которой есть число
        // в арифметической операции она неявно преобразуеться в числовой тип, 
        // отбросив весь текст, который не являеться числом
        // При этом при обрезании строки перед преобразованием будет выдано 
        // предупреждение

        echo "result" . $number; // так же число преобразовывается в строку
        // в случае конкатенации

        // Преобразование в логический тип false:
        # false == NULL
        # false == 0
        # false == 0.0
        # false == "0"
        # false == ""
        # false == array()

        // Все остальные значение будут преобразованы в true

        // Так же логические true и false типы преобразовываются в строковые
        // значения "1" и "0" соответственно

        echo "<br />";

        // Явное приведение:
        $some_float = 4.56;
        $some_int = (int) $some_float;

        echo "Result: \$some_int = $some_int";
    ?>
</body>
</html>