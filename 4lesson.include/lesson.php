<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "Include Sample"; ?></title>
</head>
<body>
    <?php 
        echo "First block of content";
        require "include.php";
        echo "Second block of content";
        include "include.php";
        # выражения require и include работают идентично - обе функции включают в текущий php скрипт
        # содержимое из другого php файла. Отличие состоит в том, что в случае отсутсвия требоваемого файла
        # include будет бросать предупреждение, а require будет ложить скрипт с ошибкой, поэтому 
        # рекомендуется использовать require
    ?>
</body>
</html>