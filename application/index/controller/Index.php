<?php
namespace app\index\controller;
use think\Db;
use think\Controller;

class Index extends Controller
{
    public function index(){
        //第一个Hello World!实例
       // echo "Hello World!";
        $result = Db::name('data')
            ->where('id', 1)
            ->find();
        dump($result);
    }
//    public function index()
//    {
//        return "<H1>欢迎光临微前教育！</H1>";
//    }

    public function index1($name = '张三')
    {
        //获取_GET传参
        print_r($this->request->param());
        echo "</br>" . $name;
    }

    public function wq($name = 'thinkphp1')
    {
        //print_r($_POST);
        $data = Db::name('data')->find(2);
        print_r($data);
        //$this->assign('name',$name);
        //return $this->fetch();

    }
}
