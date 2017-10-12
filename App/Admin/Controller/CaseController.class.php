<?php
namespace Admin\Controller;
use Think\Controller;
class  CaseController extends BaseController {
    protected $dao;
    public function _initialize(){
         parent::_initialize();
    	$this->dao=D('Case');
         $this->daotype=D('Casetype');
    } 
    public function index(){
           // $Daodata=$this->dao->selectall();
           // // dump($Daodata);
           // $this->assign('codata',$Daodata['data']);
           // $this->assign('page',$Daodata['page']);
            $this->display();

     }

    
  
      public function create(){
        if(!empty($_POST)){
            $case=M("case");
            if($_FILES['pic']['error']<4){
                //A. 处理上传的图片附件
                $cfg = array(
                    'rootPath'      =>  './public_html/zh_upload/case_img/', //保存根路径
                );
                $up = new \Think\Upload($cfg);
                 //uploadOne()方法执行成功后会把附件(在服务器上)的名字和路径等相关信息给我们返回
                 $z = $up ->uploadOne($_FILES['pic']);
                 $pic = $up -> rootPath.$z['savepath'].$z['savename'];//图路径名
                 $smallimg = $up -> rootPath.$z['savepath'].'small_'.$z['savename'];//小图路径名
                 
                 //B. 对上传好的图片制作缩略图
                 //$im = new \Think\Image();  //实例化Image对象
                 //$im -> open($bigimg);//打开被处理的图片
                 //$im -> thumb(40,40);//制作缩略图(默认有等比例缩放效果)
                 //$im -> save($smallimg);//保存缩略图到服务器*/
                //把上传好的附件存储到数据库里边
                $_POST['pic'] = ltrim($pic,'./');
               //$_POST['small_img'] = ltrim($smallimg,'./');
            }
            $datee=$case->create();
            
            if ($z){
                //$this->redirect([分组/控制器/操作方法]地址，参数，延迟时间，提示信息)
                $this->redirect('index',array('name'=>'zhangyang','age'=>'23'),3,'添加案例成功');

            }else{
                $this->redirect('create',array('name'=>'zhangyang','age'=>'23'),3,'添加案例失败');

            } 

        }else{
            $Typedata  = $this ->daotype->select(); 
            $this->assign("Typedata",$Typedata);
            $this->display();
        }
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
              $this->ajaxReturn(toJson(true,"院系添加成功,您可以继续添加"));
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
    
      public function showclass($cid){
        $Cl=M('Class');
        $cldata=$Cl->where('depart_id='.$cid)->select();
        $this->assign('cldata',$cldata);
        $this->display();
      }
      public function result($cid){
            $Co=M('Order');
            $condition['depart_id']=$cid;
            $condition['is_success']=1;
            $counts= $Co->where( $condition)->count();
            $St=M('Student');
            $total=$St->field("count('id') as num")->where('depart_id='.$cid)->group('iscomplete')->select();
            $progress=floor(intval($total[1]['num'])/(intval($total[0]['num'])+intval($total[1]['num']))*100);
            $this->assign('progress',$progress);
            $this->assign('choose',(int)$total[1]['num']);
            // $progress= ($counts/$total)*100;
            $this->assign('progress',$progress);
            $this->assign('counts',$counts);
           // dump($progress);
            $Page=new  \Think\Page($counts,10);
            $show=$Page->show();
            $cond['xk_order.depart_id']=$cid;
            $cond['xk_order.is_success']=1;
            $codata= $Co
            ->where($cond)
            ->field("departname as dename,xk_student.realname as stuname,xk_teacher.realname as tename,xk_course.coursename as coname,xk_student.studentid as stid,xk_class.classname as clname")
            ->join('LEFT JOIN __STUDENT__ ON __ORDER__.student_id=__STUDENT__.id')
            ->join('LEFT JOIN __COURSE__ ON __ORDER__.course_id=__COURSE__.id') 
            ->join('LEFT JOIN __TEACHER__ ON __COURSE__.teacher_id=__TEACHER__.id')
            ->join('LEFT JOIN __DEPART__ ON __STUDENT__.depart_id=__DEPART__.id')
            ->join('LEFT JOIN __CLASS__ ON __STUDENT__.class_id=__CLASS__.id')
            ->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->assign('page',$show);
            $this->assign('codata',$codata);
            // dump($codata);
            $this->display();
      }

  
   

}



?>

