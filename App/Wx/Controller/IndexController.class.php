<?php
namespace Wx\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function _initalize(){
    	parent::initalize();
    	
    } 

    public function index(){
       $De=D('Depart');
       $count=$De->count();
       $page=new \Think\Page($count,4);
       $showpage=$page->show();
       $Dedata=$De->limit($page->firstRow.','.$page->listRows)->select();
       $this->assign('showpage',$showpage);
       $this->assign('Dedata',$Dedata);
       if($_GET['device']){
        $this->ajaxReturn($Dedata);
        exit;
        }
       $this->display();
       
   }
   public function search(){
    $this->error('对不起现在还没开通查找功能');
   }

    
}