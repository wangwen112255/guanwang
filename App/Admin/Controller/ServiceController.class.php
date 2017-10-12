<?php
namespace Admin\Controller;
use Think\Controller;
class ServiceController extends BaseController {
	   /*protected $dao;
    public function _initialize(){
        parent::_initialize();
         $this->dao=D('Class');
    } */
    public function index(){
           // $Daodata=$this->dao->selectall();
           // $this->assign('codata',$Daodata['data']);
           // $this->assign('page',$Daodata['page']);
           $this->display();

     }
    
  
      public function create(){
      /*$De=D('Depart');
      $dedata=$De->selectall();
      $this->assign('dedata',$dedata['data']);
      $this->assign('page',$dedata['page']);
      if(!empty($_GET['cid'])&&isset($_GET['cid'])){
          $Codata=$this->dao->find($_GET['cid']);
          $this->assign("codata",$Codata);
          $this->display();
      }else{
          $this->assign('did',$_GET['did']);*/
          $this->display();
      /*}*/
      }


      public function saves(){
      if(IS_AJAX){
       if(!empty($_POST['cid'])&&isset($_POST['cid'])){
         if($this->dao->create()){
              if($this->dao->where('id='.$_POST['cid'])->save())
              $this->ajaxReturn(toJson(true,"恭喜您,修改成功"));
              else
              $this->ajaxReturn(toJson("修改失败请稍候"));
          }else{
          $this->ajaxReturn(toJson($this->getError()));
          } 
       }else{
          if($this->dao->create()){
              if($this->dao->add())
              $this->ajaxReturn(toJson(true,"专业添加成功,您可以继续添加"));
              else
              $this->ajaxReturn("添加失败请稍候");
          }else{
          $this->ajaxReturn(toJson($this->getError()));
          }
       }

      }else{
          $this->ajaxReturn(toJson('数据来源有误请重新填写'));
      }
    
    }
      public function del(){
      if(IS_AJAX){
       if(!empty($_POST['id'])&&isset($_POST['id'])){
              if($this->dao->delete($_POST['id']))
              $this->ajaxReturn(toJson(true,"删除成功"));
              else
              $this->ajaxReturn(toJson("删除失败请稍候"));
          }else{
          $this->ajaxReturn(toJson("数据有误，删除失败"));
          }
      }
      else{
          $this->ajaxReturn(toJson('数据来源有误请重新填写'));
      }
      }
    public function result($cid){
          $Co=M('Order');
          $condition['xk_order.class_id']=$cid;
          $condition['xk_order.is_success']=1;
          $counts= $Co->where( $condition)->count();
          $Page=new  \Think\Page($counts,10);
          $show=$Page->show();
          $codata= $Co
          ->where($condition)
          ->field("xk_student.realname as stuname,xk_teacher.realname as tename,xk_course.coursename as coname,xk_student.studentid as stid")
          ->join('LEFT JOIN __STUDENT__ ON __ORDER__.student_id=__STUDENT__.id')
          ->join('LEFT JOIN __COURSE__ ON __ORDER__.course_id=__COURSE__.id') 
          ->join('LEFT JOIN __TEACHER__ ON __COURSE__.teacher_id=__TEACHER__.id')
          ->limit($Page->firstRow.','.$Page->listRows)->select();
          $this->assign('id',$cid);
          $this->assign('page',$show);
          $this->assign('codata',$codata);
          // dump($codata);
          $this->display();
    }
     public function excel($id){
        $Co=M('Order');$Cl=M('Class');
        $classname=$Cl->where('id='.$id)->getField('classname');
        $condition['xk_order.class_id']=$id;
        $condition['xk_order.is_success']=1;
         $codata= $Co
          ->where($condition)
          ->field("xk_student.realname as stuname,xk_student.studentid as stid,xk_course.coursename as coname,xk_teacher.realname as tename")
          ->join('LEFT JOIN __STUDENT__ ON __ORDER__.student_id=__STUDENT__.id')
          ->join('LEFT JOIN __COURSE__ ON __ORDER__.course_id=__COURSE__.id') 
          ->join('LEFT JOIN __TEACHER__ ON __COURSE__.teacher_id=__TEACHER__.id')
          ->select();
          array_unshift($codata,array('学生姓名','学生学号','课题名称','指导教师'));
          // dump($codata);
        // dump(range('A','Z'));
        $this->getExcel($classname,$codata,'专业结果');
       
    }
    
            
}
