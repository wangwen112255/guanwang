<?php
namespace Admin\Controller;
class IndexController extends BaseController {
    public function step(){
      $De=M('Depart');
      $Cl=M('Class');
      $St=M('Student');
      $Te=M('Teacher');
      if($De->select()){
        $de=1;
        $this->assign('de',$de);
     }else{
     $this->display();
     exit;
     }
 
      if($Cl->select()){
        $cl=1;
        $this->assign('cl',$cl);
     }else{
     $this->display();
      exit; 
     }
    
      if($Te->select()){
        $te=1;
        $this->assign('te',$te);
     }else{
     
     $this->display();
     exit;
     }
      if($St->select()){
        $st=1;
        $this->assign('st',$st);
     }else{
        $this->display();
        exit;
     }
    $this->display();
     
    }
    public function settime(){
         $Da=M('Date');
        if(isset($_POST['starttime'])&& !empty($_POST['starttime'])){
            if(empty($_POST['endtime']))
            $this->error('请将时间填写完整');
           $condition['starttime']=strtotime($_POST['starttime']);
           $condition['endtime']=strtotime($_POST['endtime']);
           $Da->where('id>0')->save($condition);
           $this->success('恭喜您设置成功');
          }else{
        $Date=$Da->select();       
        $this->assign('Time',$Date[0]);
        $this->display();
        }
    }
     public function setlimitnum(){
         $Da=M('Limitnum');
        if(isset($_POST['num'])&& !empty($_POST['num'])){
           $Da->where('id>0')->setField('num',$_POST['num']);
           $this->success('恭喜您设置成功');
          }else{
        $Date=$Da->select();       
        $this->assign('data',$Date[0]);
        $this->display();
        }
    }
    public function index(){
        $this->display();
    }

}