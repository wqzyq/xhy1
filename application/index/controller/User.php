<?php
/**
 * Created by PhpStorm.
 * user: zhengyq
 * Date: 2018-05-28
 * Time: 10:37
 */
namespace app\index\controller;
use app\index\model\User as UserModel;
//use app\index\model\Data as DataModel;
use think\Controller;

class User extends Controller
{
    // 获取用户数据列表并输出
    public function index()
    {
        //视图输出
        $list = UserModel::all();
        //dump($list);
       $this->assign('list', $list);
       $this->assign('count', count($list));
        return $this->fetch();

    }

    public function data(){
//        $list=DataModel::all();

    }
    public function user()
    {
        // 分页输出列表 每页显示3条数据
        $list = UserModel::paginate(3);
        $this->assign('list',$list);
        return $this->fetch();
    }
}
