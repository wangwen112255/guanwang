<?php
namespace Home\Controller;
use Think\Controller;
class ContactController extends Controller {
    public function _initalize(){
    	parent::initalize();
    	
    } 

  public function index(){
       $this->display();
       
  }
 
  public function search(){
    $this->error('对不起现在还没开通查找功能');
  }

    
}