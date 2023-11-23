<?php
//Дан массив вида [1,' ',  2, ' ',  3] – то есть в нем есть пустые строки.
//Удалите все такие элементы из этого массива.

$array = [1, '', 2, '', 3];
?>

<h1>Изначальный массив: <?php print_r($array); ?></h1>

<?php
for ($i = 0; $i < count($array); $i++)
{
    if ($array[$i] == '')
    {
        unset($array[$i]);
    }
}
?>

<h1>С удаленными пустыми элементами: <?php print_r($array); ?></h1>