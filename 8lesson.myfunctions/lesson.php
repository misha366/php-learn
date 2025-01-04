<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "PHP Functions" ?></title>
</head>
<body>
    <?php 
        $user = "John";
        # isset(var) - проверяет, существует ли переменна (var != NULL)
        if (isset($user)) {
            echo "User exist: $user";
        } else {
            echo "Error! User doesn't exist";
        }
        # empty(var) - проверяет, пустая ли переменная. Переменная пустая, если:
        # - var == NULL
        # - var == false
        # - var == 0
        # - var == 0.0
        # - var == "0"
        # - var == ""
        # - var == array()

        # gettype(val) - возвращает тип передаваемого аргумента, типы:
        # - integer
        # - string
        # - boolean
        # - double
        # и тд
    ?>
</body>
</html>