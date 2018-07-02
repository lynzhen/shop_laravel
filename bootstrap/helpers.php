<?php
/**
 * Created by PhpStorm.
 * User: wanglinzhen
 * Date: 2018/7/1
 * Time: 下午11:34
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}