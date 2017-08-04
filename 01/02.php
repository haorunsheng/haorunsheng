<?php
/**
 * Created by PhpStorm.
 * User: Zero
 * Date: 2017/8/4
 * Time: 15:01
 */
//goto 跳转到指定的位置,执行代码
for ($i=0; $i <10 ; $i++) {

    if ($i == 5) {
        goto mycode;
    }
    echo $i;
}

echo '循环执行结束';

mycode:echo '循环没有结束,被跳出';


@strpos();
file_put_contents('error.txt',$php_errormsg);


function myTest() {
static $x=0;
echo $x;
$x++;
}

myTest();
myTest();
myTest();

