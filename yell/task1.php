<?php
/*
 * Необходимо разработать приложение "Графический редактор", которое должно уметь рисовать геометрические фигуры, например: круг, квадрат, треугольник и т.д. Фигура имеет определенный набор атрибутов, таких как: цвет, толщина линии и т.п. (на ваше усмотрение). На данный момент ограничимся всего двумя фигурами – кругом и квадратом, но необходимо сразу заложить возможность добавления новых типов фигур – так, чтобы это приводило к минимальным изменениям в коде. Приложение работает следующим образом: от пользователя приходит запрос, содержащий параметры фигур в виде многомерного массива:

$shapes = [
    ['type' => 'circle', 'params' => [...]],
    ['type' => 'circle', 'params' => [...]]
];
приложение обрабатывает полученные данные и выводит результат. Вывод результата может осуществляться в различных форматах: в виде изображения, в виде массива точек и т.п. Необходимо разработать архитектуру этого приложения (в виде кода PHP) и написать код контроллера, который обрабатывает запрос. Детали построения и рисования фигур следует опустить, чтобы не тратить много времени, интереснее - архитектура. Обязательно применение ООП, желательно – применение паттернов. Пожалуйста, не используйте в решении сторонний код, в частности - фреймворки.
 * */

spl_autoload_register(function($class) {
    include 'class'.DIRECTORY_SEPARATOR.$class.'.php';
});

$shapes = [
    ['type' => 'circle', 'params' => ['color' => '#fff', 'border' => '1px', 'x'=>1, 'y'=>2, 'r' => 10]],
    ['type' => 'circle', 'params' => ['color' => '#fff', 'border' => '1px', 'x'=>1, 'y'=>2, 'r' => 10]],
    ['type' => 'square', 'params' => ['color' => '#fff', 'border' => '1px', 'x'=>10, 'y'=>10, 'x1' => 30, 'y1' => 30]],
];

$Controller = ShapeController::getInstance();
$Controller->draw($shapes);
var_dump($shapes);
