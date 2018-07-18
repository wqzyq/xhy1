<?php
/**
 * Created by PhpStorm.
 * user: zhengyq
 * Date: 2018-05-28
 * Time: 9:48
 */
namespace app\index\controller;
use think\Request;

class Index1
{
    public function hello(request $request)
    {
        echo '请求参数：';
        dump($request->param());
        echo 'name:'.$request->param('name');
        echo '<br>GET参数：';
        dump($request->get());
        echo '<br>GET参数：name';
        dump($request->get('name'));
        echo '<br>POST参数：name';
        dump($request->post('name'));
        echo '<br>cookie参数：name';
        dump($request->cookie('name'));
        echo '<br>上传文件信息：image';
        dump($request->file('image'));
    }
}