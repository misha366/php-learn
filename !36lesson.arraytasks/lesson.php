<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "tasks"; ?></title>
</head>
<body>
    <?php
        $array1 = ['red', 'green', 'blue', 'violet', 'grey'];

        $array2 = [
            "first" => 'red',
            "second" => 'green',
            "third" => 'blue',
            "fourth" => 'violet',
            "fifth" => 'grey'
        ];

        // 1. Случайный элемент из массива
        // 1.1

        $randomIndex = mt_rand(0, count($array1) - 1);

        echo "1.1: " . $array1[$randomIndex] . "<br/>";

        // 1.2

        echo "1.2: " . $array2[array_keys($array2)[mt_rand(
                0, count($array2) - 1
            )]] . "<br/>";

        // 1.3 (альтернатива)

        echo "1.3: " . $array2[array_rand($array2)] . "<br/>";

        // 2. Создать массив со случайным кол-вом элементов (от 5 до 10), при этом
        // - каждый элемент должен иметь случайное целочисленное значение (от 0 до 100)
        // - массив должен быть отсортирован по возрастанию

        // 2.1
        $array_task_2 = [];

        for ($i = 0; $i < mt_rand(5, 10); $i++) {
            $array_task_2[$i] = mt_rand(0, 100);
        }

        echo "2.1 (before sort): <pre>";
        print_r($array_task_2);
        echo "</pre>";

        $isSorted = false;

        while (!$isSorted) {
            for ($i = 0; $i < count($array_task_2); $i++) {
                if ($i == count($array_task_2) - 1) {
                    $isSorted = true;
                    break;
                }
                if ($array_task_2[$i] > $array_task_2[$i + 1]) {
                    $currentValue = $array_task_2[$i];
                    $nextValue = $array_task_2[$i + 1];
                    $array_task_2[$i] = $nextValue;
                    $array_task_2[$i + 1] = $currentValue;
                    break;
                }
            }
        }

        echo "2.1 (after sort): <pre>";
        print_r($array_task_2);
        echo "</pre>";

        // 2.2
        $array_task_2_2 = [];

        for ($i = 0; $i < mt_rand(5, 10); $i++) {
            $array_task_2_2[$i] = mt_rand(0, 100);
        }

        sort($array_task_2_2);

        echo "2.2: <pre>";
        print_r($array_task_2_2);
        echo "</pre>";

        // 3.1

        const FILEPATH = "./file.txt";

        $file = file_exists(FILEPATH) ? file_get_contents(FILEPATH) : "";

        $file_arr = explode("\n", $file);

        echo "3.1: <pre>";
        print_r($file_arr);
        echo "</pre>";

        // 3.2

        // ф-я file сразу разбивает весь контент файла на массив по сепаратору "\n"
        $file_3_2 = file_exists(FILEPATH) ? file(FILEPATH) : "";

        echo "3.2: <pre>";
        print_r($file_3_2);
        echo "</pre>";

    ?>
</body>
</html>