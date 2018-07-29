<?php
/**
 * Created by PhpStorm.
 * user: zhengyq
 * Date: 2018-05-28
 * Time: 11:30
 */
namespace app\index\model;

use think\Model;

class User extends Model
{
    // 设置完整的数据表（包含前缀）
    protected $table = 'xhy_User';
}