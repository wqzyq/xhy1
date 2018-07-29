<?php
namespace app\index\controller;
use app\index\model\Customer as CusModel;
use think\Controller;

class Customer extends Controller
{
    public function index(){
        return $this->fetch();
    }
    public function cusadd(){ 
        if (request()->isPost()) { 
            $data =[           
           //'userId' => input['userId'],
           'license' => input('license'),
           'mechanismCode' => input('mechanismCode'),
           'enterpriseName' => input('enterpriseName'),
           'legalPerson' => input('legalPerson'),
           'registeredAddress' => input('registeredAddress'),           
           'mechanismCode' => input('mechanismCode'),
           'enterpriseName' => input('enterpriseName'),
           'legalPerson' => input('legalPerson'),
           'registeredAddress' => input('registeredAddress'),
           'registeredCapital' => input('registeredCapital'),
           'range' => input('range'),
           'permit' => input('permit'),
           'bank' => input('bank'),
           'accounts' => input('accounts'),
           'enterpriseType' => input('enterpriseType'),
           'website' => input('website'),
           'country' => input('country'),
           'area' => input('area'),
           'officeaddress' => input('officeaddress'),
           'companyPhone' => input('companyPhone'),
           'fax' => input('fax'),
           'contactName' => input('contactName'),
           'mobilePhone' => input('mobilePhone'),
            ];
            $cuslist= new CusModel();
            $cuslist->license=$data['license'];
            $cuslist->mechanismCode=$data['mechanismCode'];
            $cuslist->enterpriseName=$data['enterpriseName'];
            $cuslist->legalPerson=$data['legalPerson'];
            $cuslist->registeredAddress=$data['registeredAddress'];
            $cuslist->registeredCapital=$data['registeredCapital'];
            $cuslist->range=$data['range'];
            $cuslist->permit=$data['permit'];
            $cuslist->bank=$data['bank'];
            $cuslist->accounts=$data['accounts'];
            $cuslist->enterpriseType=$data['enterpriseType'];
            $cuslist->website=$data['website'];
            $cuslist->country=$data['country'];
            $cuslist->area=$data['area'];
            $cuslist->officeaddress=$data['officeaddress'];
            $cuslist->companyPhone=$data['companyPhone'];
            $cuslist->fax=$data['fax'];
            $cuslist->contactName=$data['contactName'];
            $cuslist->mobilePhone=$data['mobilePhone'];  if ($cuslist->save()) {
                return '用户[ ' . $cuslist->enterpriseName . ' ]新增成功';
            } else {
                return $cuslist->getError();
            }         
        return $this->fetch();
        }
        return $this->fetch();
    }
}