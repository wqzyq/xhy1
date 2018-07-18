<?php
/**
 * Created by PhpStorm.
 * user: zhengyq
 * Date: 2018-05-28
 * Time: 10:02
 */
namespace app\admin\controller;

class Index
{
    public  function Index(){
        echo"admin Index";
    }
    public function hello()
    {
        echo '请求参数：';
        dump(input());
        echo 'name:'.input('name');
    }
}