<?php
namespace app\index\controller;

use think\Db;
use think\Controller;
use app\index\model\Incounit as IncounitModel;

class Incounit extends Controller
{

    public function index()
    {
        return $this->fetch('Incounit/Customer');
    }

    public function customer()
    {
        if (request()->isPost()) {
            $data = [
                'UnitName' => input('UnitName'),
                'Bank' => input('Bank'),
                'BankAccount' => input('BankAccount'),
                'AccountName' => input('AccountName'),
                'InternalUnit' => input('InternalUnit'),
                'DutyParagraph' => input('DutyParagraph'),
                'UnitCategory' => input('UnitCategory'),
                'AffiliatedArea' => input('AffiliatedArea'),
                'UnitAddress' => input('UnitAddress'),
                'Contacts' => input('Contacts'),
                'ContactNumber' => input('ContactNumber'),
                'LegalPerson' => input('LegalPerson'),
            ];
            $incounit = new IncounitModel;
            $incounit->UnitName = $data['UnitName'];
            $incounit->Bank = $data['Bank'];
            $incounit->BankAccount = $data['BankAccount'];
            $incounit->AccountName = $data['AccountName'];
            $incounit->InternalUnit = $data['InternalUnit'];
            $incounit->DutyParagraph = $data['DutyParagraph'];
            $incounit->UnitCategory = $data['UnitCategory'];
            $incounit->AffiliatedArea = $data['AffiliatedArea'];
            $incounit->UnitAddress = $data['UnitAddress'];
            $incounit->Contacts = $data['Contacts'];
            $incounit->ContactNumber = $data['ContactNumber'];
            $incounit->LegalPerson = $data['LegalPerson'];
            if ($incounit->save()) {
                return '用户[ ' . $incounit->UnitName . ' ]新增成功';
            } else {
                return $incounit->getError();
            }

        }

    }

    public function customerlist()
    {
        $list = IncounitModel::all();
        $this->assign('list', $list);
        $this->assign('count', count($list));
        return $this->fetch('Incounit/customerlist');
    }

    public function customerdel()
    {
        $id = input('id');
        if ($id > 0) {
            if (db('incounit')->delete(input('id'))) {
                $this->success('删除客户成功!', 'customerlist');
            } else {
                $this->error('删除客户失败!');
            }
        } else {
            $this->error('初始化客户不能删除!');
        }
    }

    public function cueditlist()
    {
        $id = input('id');
        $list = db('incounit')->select($id);
        $this->assign('list', $list);
        return $this->fetch('Incounit/cueditlist');
    }

    public function cueditsave()
    {
        if(request()->isPost()) {
            $id = input('id');
            $data = [
                'UnitName' => input('UnitName'),
                'Bank' => input('Bank'),
            ];
            $incounit = IncounitModel::get($id);
            $incounit->UnitName = $data['UnitName'];
            $incounit->Bank = $data['Bank'];
            if ($incounit->save()) {
                return '用户[ ' . $incounit->UnitName . ' ]修改成功';
            } else {
                return $incounit->getError();
            }
        }else{
            echo "你不是通过POST上传的字段,请先打开客户列表进行修改";
        }


    }


}