<?php
/**
 * Created by PhpStorm.
 * User: Zero
 * Date: 2017/8/4
 * Time: 14:11
 */
//使用正则分离字符串
//参数
//1，正则
//2.匹配目标
//3.次数 默认-1（不限次数）
//4.配置


//使用空格分隔
$str = "hello php is hypertext language,programing";
$regex = '#[\s,]#';//分隔符
$rs = preg_split($regex,$str);
var_dump ($rs);
var_dump($rs);
echo "<hr>";


//非空
$str = "programing";
$regex = '##';
$rs = preg_split($regex,$str,-1,PREG_SPLIT_NO_EMPTY);
var_dump($rs);
var_dump($rs);
echo "<hr>";

//偏移量

$str = "hello php is hypertext language,programing";
$regex = '#[\s,]+#';
$rs = preg_split($regex,$str,-1,PREG_SPLIT_OFFSET_CAPTURE);
var_dump($rs);
echo "<hr>";
//模式（）中的结果会返回
$str = "hello123pho234is2344hu";
$regex = '#(\d+)#';
$rs = preg_split($regex,$str,-1,PREG_SPLIT_DELIM_CAPTURE);
var_dump($rs);
echo "<hr>";

//练习
// <td colspan="2" rowspan="2" bgcolor="red">  获得属性和属性值
$str = "<td colspan='2' rowspan='2' bgcolor='red'> ";
$regex = '#[\s]#';
$rs = preg_split($regex,$str);
var_dump($rs);