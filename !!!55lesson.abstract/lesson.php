<?php declare(strict_types=1); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "Abstract"; ?></title>
</head>
<body>
    <?php
        /*
         *
         * Абстракция
         *
         * Если коротко - абстрактный класс описывает общий стейт и реализовывает часть общего
         * поведения (для нескольких классов-наследников); интерфейс в свою очередь описывает
         * частное поведение.
         *
         * Абстрактный метод - довольно рудиментарный механизм, оптимальную замену которому можно найти
         * всегда, его лучше не использовать в коде. Если ты использовал абстрактный метод,
         * значит у тебя в логике что-то не так.
         * Проблема абстрактного метода в том, что с ним тяжелее воспринимать код, без него
         * понятно, что интерфейс хранит поведение, а абстрактный класс стейт и РЕАЛИЗАЦИЮ
         * части поведения. Но уже с абстрактным методом класс начинает хранить поведение и это
         * очень сбивает. (!!!) Если нужно хранить одинаковое поведение с разной реализацией для
         * нескольких классов, то лучше создать отдельный интерфейс с этим поведением, который
         * унаследуют все интерфейсы, которые в свою очередь будут имплементированы в эти классы
         *
         * Отличия абстрактного метода и интерфейса:
         * 1. Класс может наследовать только 1 класс, но может имплементировать несколько
         * интерфейсов (данное правило существует, дабы избежать множественного наследования,
         * которое приводит к путанице в коде)
         * 2. В интерфейсе не может быть полей, только константы (но константы лучше выносить
         * непосредственно в имплементирующий класс)
         * 3. В интерфейсе нет конструктора, потому что конструктор создаёт стейт для объекта,
         * а в интерфейсе стейта нет
         * 4. Все методы в интерфейсе автоматически считаются public.
         * Методы интерфейса не могут быть protected или private.
         *
         * */

        // Задаёт реализацию поведения, не может иметь свои объекты
        abstract class Lesson {
            const TIME = 45;

            protected string $name;

            public function __construct(string $name) {
                $this->name = $name;
            }

            protected function startLesson() : void {
                echo "Lesson started" . "<br/>";
            }
            protected function endLesson() : void {
                echo "Lesson ended, Time: " . self::TIME . "<br/>";
            }
        }

        // Задаёт поведение, но не реализовывает его
        interface Math {
            function learnMath() : void;
            function playMathGame() : void;
        }

        // Реализовывает своё поведение, наследует общее поведение
        final class MathImplementation extends Lesson implements Math {
            public function learnMath(): void
            {
                self::startLesson();
                echo "Learning math..." . "<br/>";
                self::endLesson();
            }

            public function playMathGame(): void
            {
                echo "Playing math game..." . "<br/>";
            }
        }

        $firstMathLesson = new MathImplementation("math");
        $firstMathLesson->playMathGame();
        $firstMathLesson->learnMath();

        echo $firstMathLesson instanceof Math;
    ?>
</body>
</html>
