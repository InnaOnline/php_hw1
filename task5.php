<?php
/**
 * Создайте массив $bmw с ячейками:
model
speed
doors
year
 *
Заполните ячейки значениями соответственно: “X5”, 120, 5, “2015”
Создайте   массивы   $toyota   и   $opel   аналогичные   массиву   $bmw   (заполните  данными)
Объедините три массива в один многомерный массив
Выведите значения всех трех массивов в виде:
CAR name
name ­ model ­speed ­ doors ­ year
Например:
CAR bmw
X5 ­120 ­ 5 ­ 2015
 */

$bmw = [
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => 2015
];

$toyota = [
    'model' => 'Camry',
    'speed' => 110,
    'doors' => 5,
    'year' => 2016
];

$opel = [
    'model' => 'Astra',
    'speed' => 100,
    'doors' => 3,
    'year' => 2017
];

$cars = ['bmw' => $bmw, 'toyota' => $toyota, 'opel' => $opel];

foreach ($cars as $name => $car) {
    echo "CAR $name<br>";
    echo "{$car['model']} {$car['speed']} {$car['doors']} {$car['year']}<br><br>";
}