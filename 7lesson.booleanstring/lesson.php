<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "Bool and String" ?></title>
</head>
<body>
    <?php
        # Константы булевых значений true/false не чувстительны к регистру
        $bool = TRUE;
        $bool = faLSe;
    
        $str = "Hello foo bar"; // Макисмальный объём строки ограничен - 128mb

        $var_sample = 5;

        echo "Hello $var_sample";
        echo 'Goodbye $var_sample';
        echo `Guten tag $var_sample`;

    ?>
</body>
</html>