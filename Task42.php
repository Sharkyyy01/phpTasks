<?php
//Создайте массив $arr=['a', 'b', 'c'].
//Выведите значение массива на экран с помощью функции var_dump().
//С помощью массива $arr из предыдущего номера выведите на экран содержимое первого,
//второго и третьего элементов.

$arr = ['sp' => ['azul', 'rojo', 'verde'], 'en' => ['blue', 'red', 'green']];
?>

<h1><?php var_dump($arr); ?></h1>
<h1><?php var_dump($arr['sp']); ?></h1>
<h1><?php var_dump($arr['en']); ?></h1>

<?php
$arr = ['a', 'b', 'c'];
?>

<h1><?php var_dump($arr); ?></h1>

