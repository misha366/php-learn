<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "Rounding"; ?></title>
</head>
<body>
    <?php 
        $tests = array(
            "42",
            1337.2334555,
            0x539,
            02471,
            0b101010111001,
            1337e0,
            "0x529",
            "0b101010111001",
            "1337e0",
            "not numeric",
            array(),
            9.1,
            NULL
        );

        foreach ($tests as $element) {
            if (is_numeric($element)) {
                // echo var_export($element, true) . "- number" . "<br/>";
                echo var_export(
                    // round(n[, m]) - округлит число n до m знаков после запятой
                    round($element, 1)
                , true) . "- number" . "<br/>";
            } else{
                echo var_export($element, true) . "- not number" . "<br/>";
            }
        }
    // floor(n), округляет n до нижнего значения
    // ceil(n), округляет n до верхнего значения
    ?>
</body>
</html>