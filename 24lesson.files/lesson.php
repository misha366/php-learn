<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "Files"; ?></title>
</head>
<body>
    <?php
        const FILENAME = "content.txt";
        $content = file_exists(FILENAME) ? file_get_contents(FILENAME) : "";
        
        echo $content;

        file_put_contents(FILENAME, "\$content\nNEWCONTENT");

    ?>
</body>
</html>