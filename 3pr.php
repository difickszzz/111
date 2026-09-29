<h2>Задание 1: </h2>
<?php
$a = 2;
$b = 5;
if ($a<$b){
    echo $a + $b;
}
else{
    echo $a * $b;
}
?>
<h2>Задание 2: </h2>
<?php
$angle1 = 90;
$angle2 = 90;
if ($angle1+$angle2>=180){
    echo "<p>Такого треугольника не существует</p>";
}
if ($angle1 or $angle2 = 90){
    echo "Этот треугольник прямоугольный";
}
?>
<h2>Задание 3: </h2>
<?php
$age = 8;
if ($age<=1){
    $ageGroup = "Котята";
}
if ($age>1 and $age<=3){
    $ageGroup = "Молодые коты";
}
if ($age>3 and $age<=7){
    $ageGroup = "Коты средних лет";
}
if ($age>7){
    $ageGroup = "Почтенные коты";
}
echo $ageGroup
?>
<h2>Задание 4: </h2>
<?php
$year = 144;
if ($year % 100 > 0 and ($year %100) % 4 == 0 or $year % 400 == 0){
    echo "Год високосный";
}
else{
    echo "Год не високосный";
}
?>