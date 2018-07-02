<?php
/**
 * Created by PhpStorm.
 * User: wanglinzhen
 * Date: 2018/7/2
 * Time: 上午12:03
 */
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function index()
    {
        return view('index.index');
    }

}