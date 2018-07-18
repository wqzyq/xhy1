<?php
namespace app\index\controller;
use think\Db;
use think\Controller;

class Incounit extends Controller
{
    
    public function index(){     
    
       return $this->fetch('Incounit/Customer');
      // echo 'index';
    }

    public function customer(){
        echo 'customer';
    	     if(request()->isPost()){           
            $data = [
                'UnitName'=>input('UnitName'),
                'Bank'=>input('Bank'),
            ];
            dump($data);die;
        }
        
    }

    public function index1(){
    	echo 'index1';
    }
 }