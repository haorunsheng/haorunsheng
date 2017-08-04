<?php
/**
 * Created by PhpStorm.
 * User: Zero
 * Date: 2017/8/4
 * Time: 17:16
 */
$a = "Original";
$my_array = array("a" => "Cat", "2" => "Dog", "c" => "Horse");

extract($my_array,EXTR_PREFIX_INVALID,"hao");

var_dump($my_array);