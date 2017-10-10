<?php
namespace Wx\Controller;
use Think\Controller;
class PublicController extends Controller{
	public $dao;
	public function verifys(){
		ob_clean();
		session_start();
		$config =array(
		    'fontSize'  =>  22,              // 验证码字体大小(px)
		    'imageH'    =>  50,               // 验证码图片高度
		    'imageW'    =>  150,               // 验证码图片宽度
		    'length'    =>  4,               // 验证码位数
		    // 'fontttf'   =>  '6.ttf',              // 验证码字体，不设置随机获取
		    // 'useImgBg'  =>  true,       // 使用背景图片 
		    //'useZh'     =>  false,           // 使用中文验证码 
		   // 'useCurve'  =>  true,            // 是否画混淆曲线
		    'useNoise'  =>  true,            // 是否添加杂点
		    // 'bg'        =>  array(143, 151, 154),  // 背景颜色
		   );
		// $verify=new \Think\Verify($config);
		// $verify->entry();
		$Verify = new \Think\Verify($config);
		$Verify->entry();

	}
	   function check()  {
	
	      $code = $_POST['code'];  
	      if(check_verify($code) === true)  
	      {  
	       $data['isCode']=1;
	       $this->ajaxReturn($data);
	      }else  
	      {  
			$data['isCode']=0;
	       $this->ajaxReturn($data);	          // $this->
	      }  
	
	  }  
	  function checks()  {
	
	      $code = $_GET['code'];  
	      if(check_verify($code) === true)  
	      {  
	       // $data['isCode']=1;
	       // $this->ajaxReturn($data);
	       echo '成功';
	      }else  
	      {  
			// $data['isCode']=0;
	       // $this->ajaxReturn($data);	          // $this->
	       echo 'shibai';

	      }  
	
	  } 
	  public function checkusername(){
	  	$condition['username']=$_POST['username'];
	  	$Stu=M('Student');
	  	$Tea=M('Teacher');
	  	$s=$Stu->where($condition)->find();
	  	$t=$Tea->where($condition)->find();
	  	if($s!=null || $t!=null){
	  	    $data['isExit']=1;
	       $this->ajaxReturn($data);
	   }
	   else{
	   		 $data['isExit']=0;
	   	     $this->ajaxReturn($data);
	   }
	  	// }
	  	// else{
	  	// 	$data['isExit']=0;
	   //     $this->ajaxReturn($data);	
	  	// }
	  }
	  public function forgetpwd(){
	  	if(isset($_POST["cid"])){
	  		if(!isset($_POST["username"])||empty($_POST["username"])){
	  		$this->error('信息有误无法发查询');
	  		exit;
	  		}
	  		if(!isset($_POST["pwd"])||empty($_POST["pwd"])){
	  		$this->error('信息有误无法发查询');
	  		exit;
	  		}
	  		if(!isset($_POST["studentid"])||empty($_POST["studentid"])){
	  		$this->error('信息有误无法发查询');
	  		exit;
	  		}
	  		if(!isset($_POST["realname"])||empty($_POST["realname"])){
	  		$this->error('信息有误无法发查询');
	  		exit;
	  		}
	  		$St=M('Student');
	  		$Condition['username']=$_POST["username"];
	  		$Condition['studentid']=$_POST["studentid"];
	  		$Condition['realname']=$_POST["realname"];
	  	if($St->where($Condition)->setField('pwd',$value))
	  		$this->success('设置成功');
	  	else
	  		$this->error('信息有误无法发查询');
	  	}
	    else
	  	$this->display();
	  }
	
	  public function uploadfile($itemname='photo'){
	  	    if(session('_username_')){
	  	    	$Dao=M(session('role'));
	  	    	$config = array( 
	  	    		'maxSize'    =>    3145728,
	  	    		    'savePath'   =>    './'.$itemname.'/',  
	  	    		    'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),   
	  	    		    'autoSub'    =>    true,   
	  	    		    'subName'    =>    array('date','Ymd'),
	  	    		    );
	  	    	$upload = new \Think\Upload($config);// 实例化上传类
	  	    	$upload->saveName = date('YmdHis',time()).'_'.mt_rand();
	  	    	$info=$upload->uploadOne($_FILES['myfile']);
	  	    	if(!$info){
	  	    	  $this->ajaxReturn(toJson($upload->getError()));
	  	    	  }else{
	  	    	  $condition['username']=session('_username_');
	  	    	  $url='/Uploads'.ltrim($info['savepath'].$info['savename'],'.');
	  	    	  $image = new \Think\Image();
	  	    	  $image->open('.'.$url);
	  	    	  $suffx=strchr($url,'.');
	  	    	  $thumurl=substr($url,0,strripos($url,'.')).'_thumb'.$suffx;
	  	    	  unlink('.'.$url);
	  	    	  $image->thumb(200, 200,\Think\Image::IMAGE_THUMB_FIXED)->save('.'.$thumurl); 
	  	    	  if($Dao->where($condition)->setField('photo',$thumurl))
	  	    	  {
	  	    	   session('_pic_',$thumurl); 		
	  	    	   $this->ajaxReturn(toJson(true,"恭喜您成功上传",$thumurl));
	  	    	  }
	  	    	  else
	  	    	  $this->ajaxReturn(toJson('服务器有问题上传失败'));
	  	    	
	  	    	}
	  	    }
	  	
	    }
	    public function uploadfilewx(){
	    	if(session('_username_')){
	  	    	$Dao=M(session('role'));
	    	if(!empty($_POST)){
	    	    if(isset($_POST['pd'])){
	    	      $_POST['pd'] = str_replace('data:image/png;base64,', '', $_POST['pd']);
	    	    $ymdfolder=date('Ymd',time());
	    	    $role=$_SESSION['role']=='Teacher'?'tephoto':'stphoto';
	    	    if(!file_exists('Uploads/'.$role.'/'.$ymdfolder))
	    	    	mkdir('Uploads/'.$role.'/'.$ymdfolder);
	    	    $img = date('YmdHis',time()).'_'.mt_rand().'.png';
	    	    $img='Uploads/'.$role.'/'.$ymdfolder.'/'.$img;
	    	    file_put_contents($img, base64_decode($_POST['pd']));
	    	    $image = new \Think\Image();
	  	    	$image->open($img);
	  	    	$thumimg=substr($img,0,strripos($img,'.')).'_thumb'.".png";
	  	    	unlink($img);
	  	    	$image->thumb(200, 200,\Think\Image::IMAGE_THUMB_FIXED)->save($thumimg); 
	  	    	$condition['username']=session('_username_');
	    	     if($Dao->where($condition)->setField('photo','/'.$thumimg))
	    	     {
	    	      session('_pic_',$thumurl); 	
	    	      $link=U($_SESSION['role'].'/index',array('timestamp'=>time()));
	    	      $this->ajaxReturn(toJson(true,"恭喜您成功上传",$link));
	    	     }
	    	     else
	    	     $this->ajaxReturn(toJson('服务器有问题上传失败'));
	    	   
	    	   

	    	   }
	    	}
	    }else{
	    	 $this->ajaxReturn(toJson('数据有误'));
	    }

	    } 
     }



?>