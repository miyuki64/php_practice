<?php
$name = "みゆき";
$age = 33;
$height = 160.2;
$isJobHunting = true;
$ageAfter10Years = $age + 10;
echo '<pre>';
var_dump($name, $age, $height, $isJobHunting);
echo '</pre>';

echo "名前：" . $name . "<br>";
echo "年齢：{$age}歳<br>";
echo "10年後は". $ageAfter10Years . "歳です<br>";
echo "10年後は{$ageAfter10Years}歳です";
