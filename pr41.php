<h2>Задача 1</h2>
<?php
$nums = [23, 11, 42, 55];
$max = $nums[0];
$min = $nums[0];
$maxIndex = 0;
$minIndex = 0;
$i = 0;
foreach ($nums as $num) {
    if ($num > $max) {
        $max = $num;
        $maxIndex = $i;
    }
    if ($num < $min) {
        $min = $num;
        $minIndex = $i;
    }
    $i++;
}
echo "Максимум = $max, индекс = $maxIndex <br>";
echo "Минимум = $min, индекс = $minIndex"
?>
<h2>Задача 2</h2>
<?php
$nums = [1,2,3,4,5,6];
$sum = 0;
$product = 1;
foreach ($nums as $num) {
    $sum += $num;
    $product *= $num;
}
echo "Сумма: $sum<br>";
echo "Произведение: $product"
?>
<h2>Задача 3</h2>
<?php
$nums = [3, 2, 1];
$sum = 0;
$count = 0;
foreach ($nums as $num){
    $sum += $num;
}
    $avg = $sum / count($nums);
    echo "Среднее арифметическое: $avg";
?>
<h2>Задача 4</h2>
<?php
$nums = [23, -10, 43, -2];
$b = [];
foreach ($nums as $num) {
    if ($num > 0){
        $b[] = $num * $num;
    } else {
        $b[] = abs($num);
    }
}
echo "Исходный массив: ";
foreach ($nums as $num) {
    echo $num, ", ";
}
echo "<br>Получившийся массив: ";
foreach ($b as $num) {
    echo $num, ", ";
}
?>
<h2>Задача 5</h2>
<?php
$nums = [32, 12, 43, 31, 34, 12, 134, 532];
$i = 0;
foreach ($nums as $num) {
    if ($i % 2 == 0) {
        echo $num . " ";
    }
    $i ++;
}
?>
<h2>Задача 6</h2>
<?php
$nums = [1, 5, 3, 4, 6, 2];
$previous = null;
$first = true;
foreach ($nums as $num) {
    if (!$first && $num > $previous) {
        echo $num ." ";
    }
    $previous = $num;
    $first = false;
}
?>
<h2>Задача 7</h2>
<?php
$nums = [1, 2, 3, 4, 5, 6];
$result = [];
$temp = null;
$first = true;
foreach ($nums as $num) {
    if ($first) {
        $temp = $num;
        $first = false;
    } else {
        $result[] = $num;
        $result[] = $temp;
        $first = true;
    }
}
if (!$first) {
    $result[] = $temp;
}
foreach ($result as $num) {
    echo $num ." ";
}
?>
