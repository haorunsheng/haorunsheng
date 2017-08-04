<?php
//动态创建一个混合数组
$arry = [];
$array[]='a';
$array[]='b';
$array['c']='c';
$array['d']='d';

var_dump($array);

//动态创建一个关联数组
$arry = [];
$array['name']='a';
$array['age']='b';
$array['sex']='c';
$array['tel']='d';

var_dump($array);


$arr = range(5,10,2);
var_dump($arr);
print_r($arr);
echo '<hr>';
foreach ($arr as $arrs)
{
    echo $arrs;
}
echo '<hr>';
function familyName($fname) {
    echo "$fname Zhang.<br>";
}

familyName("Li");
familyName("Hong");
familyName("Tao");
familyName("Xiao Mei");
familyName("Jian");

//快速创建 ,关联数组 (compact紧凑的 合约)
$user = 'xiaoming';
$pwd = '123456';
$tel = '13232388989';

$arr = compact('user','pwd','tel');
print_r($arr);

echo '</pre>';


$b = "Original";
$my_array = array("a" => "Cat", "b" => "Dog", "c" => "Horse");

extract($my_array, EXTR_PREFIX_SAME, "dup");

echo "\$a = $a; \$b = $b; \$c = $c; \$dup_b = $dup_b";

echo '<hr>';

$a = "Original";
$my_array = array("a" => "Cat", "b" => "Dog", "c" => "Horse");

extract($my_array,EXTR_OVERWRITE);

echo "\$a = $a; \$b = $b; \$c = $c";

echo '<hr>';
$a = "Original";
$my_array = array("a" => "Cat", "b" => "Dog", "c" => "Horse");

extract($my_array,EXTR_SKIP);

echo "\$a = $a; \$b = $b; \$c = $c";

echo '<hr>';
$a = "Original";
$my_array = array("a" => "Cat", "2" => "Dog", "c" => "Horse");

extract($my_array,EXTR_PREFIX_ALL,"hao");

echo "\$a = $a; \$b = $b; \$c = $c";

echo '<hr>';
$a = "Original";
$my_array = array("a" => "Cat", "2" => "Dog", "c" => "Horse");

extract($my_array,EXTR_PREFIX_INVALID,"hao");

echo "\$a = $a; \$b = $b; \$c = $c";
var_dump($my_array);