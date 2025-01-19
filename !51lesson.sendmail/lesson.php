<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "Send Mail"; ?></title>
</head>
<body>
    <?php
        // https://www.youtube.com/watch?v=DC3Q-FEchnA&list=PLuY6eeDuleIN_pFzp1vlu0PD3KXUrPTVS&index=51

        // свой смтп https://habr.com/ru/articles/544376/
        // !!! смтп через гмейл https://www.youtube.com/watch?v=AQ5rIDw3M-w
        // на мыле нужно включить имап и ДА (ДА лучше подрубить через резервные коды,
        // аутентификатор)

        $subject = "My subject";
        $to = "civohog574@kurbieh.com";

        $from = "abababab@gmail.com";

        $message = "sample message";

        $headers = 'From: sample@gmail.com' . "\r\n" .
            'Reply-To: sample@gmail.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);

        // в готовых проектах лучше не юзать mail(), а использовать библиотеки
        // phpMailer или swiftMailer
    ?>
</body>
</html>