<?php
/**
 * Created by PhpStorm.
 * User: Zero
 * Date: 2017/8/4
 * Time: 13:05
 */


$a = 1;
if (is_int($a)){
    echo "int型 ";
}else
{
    echo "不是int ";

}

echo "<br>";
//类型转换

$b = 0;
if ($b)
{
    echo 'b=0';

}else
{
    echo "自动转为bool";
}
echo "<br>";


$a = '';
if ($a){

}else{
    echo "string->bool";
}
echo '<br>';


$a = null;
if ($a){

}else{
    echo "null->bool";
}
echo $a;
echo "<br>";


$a = array();
if ($a){

}else{
    echo "array()->bool";
}
echo $a;
echo "<br>";

//转换
$a = '123.3abc';
echo "<hr>";
echo (boolean) $a;
echo "<br>";

//函数强转

echo intval($a);
echo "<br>";
echo floatval($a);
echo "<br>";
echo doubleval($a);
echo "<br>";
echo gettype($a);
echo "<br>";
settype($a,'integer');
echo $a;
echo "<br>";
var_dump($a);
echo "<br>";
echo gettype($a);
echo "<br>";
echo $a;
echo "<hr>";


//运算
$a = 1;
echo -$a;
echo "<br>";

$a = 87;
$b = $a%7;//求余
echo $b;
echo "<br>";//3

$a +=5;
echo $a;
echo "<br>";

$b %= 7;
echo $b;
echo "<br>";

echo "<hr>";

$a = 1;
$b = $a<<3;//二进制移位00001>>>00100
echo "$b".'<br>';

//取反
$a = 10;
$b = ~$a;
echo $b;
echo "<br>";


//& 与
$a = 3;//00000011
$b = 4;//00000100

$c = $a&$b;//00000000
echo $c;
echo "<br>";

$d = $a | $b;//000000111
echo "$d";
echo "<br>";

echo "<hr>";

$a = "1";
$b = 1;
if ($a == $b){
    echo "相等";
}else{
    echo "全等";
}

echo "<hr>";


$a = 'a';
$b = 'b';


echo '<hr>';
$a = '我是一个字符串';
$b = 10;
$c = $a.$b;
echo $c;//

echo '<hr>';
$c .= 'wo shi you zhui jia d  zi fu chuan ';
$c = $c.'wo shi you zhui jia d  zi fu chuan ';
echo $c;


echo '<hr>';
var_dump(true and true); //true
var_dump(false and true); //false
var_dump(true && true); //true
var_dump(false && true);//false

echo '<hr>';
var_dump(true or true);//true
var_dump(true or false);//true
var_dump(false or false);//false

echo '<hr>';
//异或 不一样的才为真
var_dump(true xor true);//false
var_dump(true xor false);//true
var_dump(false xor false);//false

echo'<hr>';
var_dump(!true);//false
var_dump(!false);//true
echo '<hr>';

//while 循环 先判断条件,在执行循环
//do...while 先执行一次代码,在判断条件

$a = 0;
do{
    echo ++$a.'<br>';
}while($a<10);

echo '<hr>';
$a=0;
do{
    echo $a++.'<br>';
}while($a<10);

echo '<hr>';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Document</title>

</head>
<body>
<table rules="all" border="1">
    <?php
    for ($i=1; $i <=9 ; $i++) {
        echo "<tr>";
        //写列
        for ($j=1; $j <=$i ; $j++) {
            $a = $i*$j;
            echo "<td style='padding: 20px;font-size: 10px;'>{$i}&times;{$j}={$a}</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>

















