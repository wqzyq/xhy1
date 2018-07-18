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
        //echo 'customer';
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
                'UnitAddres' => input('UnitAddres'),
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
            $incounit->UnitAddres = $data['UnitAddres'];
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

    public function index1()
    {
        echo 'index1';
    }
}