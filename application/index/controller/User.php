<?php
/**
 * Created by PhpStorm.
 * user: zhengyq
 * Date: 2018-05-28
 * Time: 10:37
 */
namespace app\index\controller;

use app\index\model\User as UserModel;
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

    public function data()
    {
//        $list=DataModel::all();
    }

    public function enpriregister()
    {
        $userName = input('userName');
        $pwd = input('pwd');
        $pwd1 = input('pwd1');
        $phone = input('phone');
        $enpriName = input('enpriName');
        $user = UserModel::where('userName', $userName)->where('enpriName', $enpriName)->limit(1)->select();
        if ($user) {
            if ($pwd == $pwd1) {
                if (request()->isPost()) {
                    $data = [
                        'userName' => $userName,
                        'pwd' => $pwd,
                        'phone' => $phone,
                        '$enpriName' => $enpriName,
                    ];
                    $user = new UserModel();
                    $user->userName = $data['userName'];
                    $user->pwd = $data['pwd'];
                    $user->phone = $data['phone'];
                    $user->enpriName = $data['enpriName'];
                    if ($user->save()) {
                        return '用户[ ' . $user->userName . ' ]新增成功';
                    } else {
                        return $user->getError();
                    }

                }
                return $this->fetch();
            } else {
                echo "您输入的密码不对，请重新输入！";
            }
        } else {
            echo "您的会员名或者企业名称重复，请检查！";
        }
    }

    public function user()
    {
        // 分页输出列表 每页显示3条数据
        $list = UserModel::paginate(3);
        $this->assign('list', $list);
        return $this->fetch();
    }
}
