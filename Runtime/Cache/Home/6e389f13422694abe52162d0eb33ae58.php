<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ($title); ?></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    
    <link href="/static/css/bootstrap.min.css" rel="stylesheet">
    <link href="/static/css/font-awesome.min.css" rel="stylesheet">
    <!-- <link href="/static/css/animate.min.css" rel="stylesheet"> -->
    <!-- <link href="/static/css/style.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="/static/css/base.css">
    
   	<style type="text/css">
  
   .dropdown-menu-li{
    height: 40px;
    font-size: 14px;
    line-height: 40px;
   }
   .dropdown-menu-li:hover{
    background:#0065B3 ;
    }
    .dropdown-menu > li > a:hover{
        background:#0065B3 ;
    }
    .dropdown-menu > li > a{
    line-height: 40px;
    }
    
   	</style>
   	
<style type="text/css">
  .WU_scrollli {
    border-bottom: 1px dashed #ccc !important; 
  } 
  
  .WU_scrollinfo > .infotitle span:hover{
  opacity: 0.5;
  }
  .img-circle{
  transition: transform linear 0.6s;
  }
  .img-circle:hover{
  transform: rotateY(180deg)
  }
 @keyframes myanite {
   0%{
   transform:translateX(20px);
   }

   50%{
   transform:translateX(0px);
   }
   100%{
  transform:translateX(-20px);
   }

 }

 .WU_Te_thumbnail:hover{
   animation-name:myanite;
   animation-duration:2s;
   animation-timing-function:linear;
 }

</style>


   </head>
	<body>
  <div class="WU_header">
  <div class="WU_top bluetop">
      毕业论文很重要请慎重选择
  </div> 
  <div class="WU_content"> 
  <div class="WU_navbar">
  <div class="row" style="width:100%">
    <div class="col-sm-2">
      <img src="/static/img/logo.png">
    </div>
    <div class="col-xs-10" >
    <nav class="navbar ">
     <ul class="nav navbar-nav WU-nav">
       <li><a href="<?php echo U('Index/index');?>">首页</a></li>
       <li><a href="<?php echo U('Depart/index');?>">院系展示</a></li>
       <li><a href="<?php echo U('Teachers/index');?>">教师课题</a></li>
       <li><a href="<?php echo U('Course/index');?>">学生选课</a></li>
     </ul>
      <form class="navbar-form navbar-left" action="<?php echo U('Index/search',array('role'=>'all'));?>" method="post">
    <div class="input-group " style="position: relative">
    <input type="text" name="username" id="input" class="form-control" placeholder="搜一搜" value="" >
    <div class="WU_search">
    <a href="<?php echo U('Index/search',array('role'=>'Te'));?>" class="btn btn-xs btn-danger" >教师</a>
    <a href="<?php echo U('Index/search',array('role'=>'Cl'));?>" class="btn btn-danger btn-xs" >院系</a>
    </div>
    <div class="input-group-addon btn-primary"  style="cursor: pointer;position: relative">搜索
      <input type="submit" class="WU_search_submit" name=""  value="">
    </div>
    </div>
    
    </form>
    <?php if(empty($_SESSION['_username_'])): ?><form class="navbar-form navbar-right relog ">
    <div class="form-group">
      <a class="btn  btn-success" href="<?php echo U('Index/register');?>">注册</a>
      <a class="btn btn-danger btnfinish"   id='loging' data-toggle="modal"  data-target='#WU_login_modal' >登录</a>
      </div>
     </form>
     <?php else: ?>
      <form class="navbar-text navbar-right dropdown"  style="margin-bottom: 0px;margin-top: -2px;">  
       
      <a href='/<?php echo (session('role')); ?>/course' class="dropdown-toggle" >
      <img src="<?php if(empty($_SESSION['_pic_'])): ?>/static/img/logo.png<?php else: echo (session('_pic_')); endif; ?>"   class="WU_login_img img-circle"> 
      <div class="pull-right">
      <p style="margin-left:5px"><?php echo (session('_username_')); ?></p>
      <p style="margin-left:5px">
      <b>【<?php if(($_SESSION['role']) == "Student"): ?>学生<?php else: ?>教师<?php endif; ?><span class="glyphicon glyphicon-user"></span>】</b></p> 
      </div>
      </a>
      <ul class="dropdown-menu dropdown-menu_list ">
        <li class="dropdown-menu-li"><a href="/<?php echo (session('role')); ?>/photo">我的头像<span class="glyphicon glyphicon-picture"></span></a></li>
        <li class="dropdown-menu-li"><a href="/<?php echo (session('role')); ?>/intro">
       基本资料 <span class=" glyphicon glyphicon-folder-open"></span></a></li>
        <li class="dropdown-menu-li" <?php if(($_SESSION['role']) == "Student"): ?>style="display: none"<?php endif; ?>><a href="/<?php echo (session('role')); ?>/info">我的消息
        <span class="glyphicon glyphicon-bell"></span></a></li>
        <li class="dropdown-menu-li"><a href="/<?php echo (session('role')); ?>/course">我的课目
        <span class="glyphicon glyphicon-tasks"></span></a></li>
        <li class="dropdown-menu-li"><a href="/<?php echo (session('role')); ?>/safe">安全设置
        <span class="glyphicon glyphicon-wrench"></span></a></li>
        <li class="dropdown-menu-li"><a href="<?php echo U('Login/logout');?>">退出
        <span class=" glyphicon glyphicon-log-out"></span></a></li>
      </ul>
      </form><?php endif; ?>

<!--  -->
      </nav>
      </div>
    </div>
  </div>
  </div>
 </div>
  <!-- ----登陆-->

  <div class="modal fade" id="WU_login_modal" style="z-index:9999">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">用户登录</h4>
        </div>
        <div class="modal-body">
          <form action="<?php echo U('Login/dologin');?>" id='loginform' class="form-horizontal" method="post">
            <div class="form-group">
              <label class="col-sm-3 control-label">用户名</label>
              <div class="col-sm-6">
              <input type="text" name="username" class="form-control" placeholder="请输进去用户名">
              </div>
            </div>            
            <div class="form-group">
              <label class="col-sm-3 control-label">密码</label>
              <div class="col-sm-6">
              <input type="password" name="password" class="form-control" placeholder="请输进去密码">
              </div>
            </div> 
          
            <div class="form-group" style="display: none">
              <label class="col-sm-3 control-label">验证码</label>
              <div class="col-sm-3">
              <input type="text" name="validate" class="form-control" placeholder="请输进去密码">
              </div>
              <div class="col-sm-3">
              <button class="btn btn-primary">获取验证码</button>
              </div>
            </div> 
            <div class="form-group">
               <div class="col-sm-offset-3   col-sm-3">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <input type="radio"  value="st" checked name="role" >
                      </span>
                      <input type="" value="学生" disabled checked class="form-control" aria-label="">
                      </div>
             <!-- --- -->
               </div>
                 <div class="col-sm-3">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <input type="radio"  value="te" name="role"   >
                        </span>
                        <input type="" value="教师" disabled class="form-control" aria-label="">
                        </div>
               <!-- --- -->
                 </div>
             </div>
            <div class="form-group">
              <div class="col-sm-6 col-sm-offset-3">
                  <span>没有账号,</span><a href="/Teachers/register" style="cursor:pointer">立即注册</a>
                  <a class='pull-right' href="<?php echo U('Public/forgetpwd');?>" target="_blank" style="cursor:pointer">忘记密码?</a>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-9 col-sm-offset-3">
                  <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                  <button  class="btn btn-primary" id="login">登录</button>
              </div>
            </div>
                    
          </form>

          <div class="row">
           <hr> 
           <div class="col-sm-9 col-sm-offset-3">
                第三方登陆
                <a href="<?php echo U('Ming/getOauth',array('type'=>'qq'));?>" target='_blank' onclick="return confirm('学生才可以第三方登录，老师请走正常线路登录，请确认一下您的身份');" style="display:inline-block;width:36px;height:32px;background-image: url('/static/img/login-third-party.png');background-position: -110px;"></a>&nbsp;&nbsp;
                <a href="<?php echo U('Ming/getOauth',array('type'=>'sina'));?>" onclick="alert('没有拿到证书呢');return false;" style="display:inline-block;width:32px;height:32px;background-image: url('/static/img/login-third-party.png')"></a>&nbsp;&nbsp;
               <a href="<?php echo U('Ming/getOauth',array('type'=>'wx'));?>"  onclick="alert('没有拿到证书呢');return false;"  style="display:inline-block;width:32px;height:32px;background-position: 32px;background-image: url('/static/img/login-third-party.png')"></a>
          </div>

          </div>

         
       
        </div>
      </div>
    </div>
  </div>

<!-- ------ -->
 <div  class="row">
 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
   <!-- Indicators -->
   <ol class="carousel-indicators">
     <li data-target="#carousel-example-generic " data-slide-to="0" class="active WU_carousel_dotted"></li>
     <li data-target="#carousel-example-generic" class="WU_carousel_dotted" data-slide-to="1"></li>
     <li data-target="#carousel-example-generic" class="WU_carousel_dotted" data-slide-to="2"></li>
     <!-- <li data-target="#carousel-example-generic" data-slide-to="2"></li> -->
   </ol>
   <!-- Wrapper for slides -->
   <div class="carousel-inner" role="listbox">
     <div class="item active">
       <img src="/static/img/header2.png" alt="...">
       <div class="carousel-caption">
         ...
       </div>
     </div>
     <div class="item">
       <img src="/static/img/header1.png" alt="...">
       
       <div class="carousel-caption">
         ...
       </div>
     </div>
     <div class="item">
       <img src="/static/img/header4.png" alt="...">
       
       <div class="carousel-caption">
         ...
       </div>
     </div>
  
   </div>


 </div>


 </div>
  <div style="padding-right: 50px;padding-left: 50px;">
  <div class="container-fluid">
    


    
    <!-- 导航图 -->
  <div class="container-fluid" >

  <div class="WU_info">
   <div class="row WU_inforow">
   <span class='WU_infoheader'>毕设指导教师</span>

     </div>
    <div class="row WU_scrollinfo" style="padding-top:15px; ">
     <?php if(empty($tedata)): ?><div class="jumbotron">
      <div class="container">
        <h1>已经尽力了</h1>
        <p>暂时还没有搜索到任何的教师信息，敬请关注</p>
        <p>
          <a class="btn btn-primary btn-lg" onclick="javascript:history.go(-1)">返回</a>
        </p>
      </div>
    </div><?php endif; ?>
    <?php if(is_array($tedata)): $i = 0; $__LIST__ = $tedata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="col-sm-2">
      <div class="thumbnail WU_Te_thumbnail">
            <img src="<?php echo ((isset($data["photo"]) && ($data["photo"] !== ""))?($data["photo"]):'/static/img/a2.jpg'); ?>" class="img-circle" alt="...">
            <div class="caption">
              <h3 class="text-center"><?php echo ($data["realname"]); ?></h3>
              <p class="text-center"><?php echo ((isset($data["desct"]) && ($data["desct"] !== ""))?($data["desct"]):"优秀毕业导师"); ?></p>
              <p class="text-center">
              <a href="<?php echo U('lists',array('id'=>$data['idt']));?>" class="btn btn-primary" role="button">点击查看</a>
               <a  class="btn btn-success" role="button">课程数量<span class="badge"><?php echo ($data["total"]); ?></span></a></p>
            </div>
      </div>
    </div><?php endforeach; endif; else: echo "" ;endif; ?>

    </div>
    <?php echo ($showpage); ?>
    
    </div>
    </div>


  
  </div>
  </div>
  </div>
     <div class="WU_footer " style="width:100%">
         <p class="text-center text-center-footer ">
           <span>关于选课</span>
           <span>联系me</span>
           <span>关于php</span>
           <span>我的博客</span>
         </p>         
          <p class="text-center">公安备案号豫ICP备16036348号 </p>
          <p class="text-center"><span class="glyphicon glyphicon-signal"></span>友情链接:华北水利水电|中国科技大学 </p>
          <div style="floatright;">
          <p class="text-center text-center-footer ">
           <img src="/static/img/code.png">

          <img src="/static/img/code.png">
         </p>  
         </div>       
  
     </div>
    
    <script src="/static/js/jquery.js"></script>
    <script type="text/javascript" src="/static/js/holder.min.js"></script>
    <script type="text/javascript" src='/static/js/plugins/validate/jquery.validate.min.js'></script>
    <script type="text/javascript" src="/static/js/plugins/layer/layer.min.js"></script>
    <script type="text/javascript" src="/static/js/common.js"></script>
    <script src="/static/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(function(){
      $('#WU_login_modal').on('show.bs.modal', function (e) {
    
      })
      $('.dropdown').mouseenter(function(){
        $('.dropdown-menu').show();
      }).mouseleave(function(event) {
        $('.dropdown-menu').hide();
        
      });
      $(".thumbnail").mouseover(function(){
        
      })
      jQuery.validator.addMethod("isChinese", function(value, element) {  
      return this.optional(element) || /^[a-zA-Z0-9]+$/.test(value);       
      }, "用户名必须是字母或数字组成");
     jQuery.validator.addMethod("isExit", function(value, element) {  
           var  ok=this.optional(element);
            if(!ok){
             $.ajax({
              url: '/index.php/Public/checkusername',
              type: 'POST',
              dataType: 'json',
              data: {'username': value},
              async: false,
              success:function(data){
              if(data.isExit==1)
               ok=true;
             else
               ok=false;
              },
              error:function(){alert('请检查网络');ok=false;}
            })
          }
          return ok;
           
            
     }, "用户名不存在,请先注册");
      var icon="<span class='glyphicon glyphicon-remove'></span>";   
       messageslogin={
       username:{
        required:icon+'输进去用户名',
        minlength:icon+'请输进去正确长度的用户名',

       },
       password:{
        required:icon+'请输输入正确的密码',
        minlength:icon+'密码长度不正确'
       }
     

      };
       ruleslogin={
        username:{
          isChinese:true,
          required:true,
          minlength:5,
          isExit:true
        },
      
        password:{
          required:true,
          minlength:5
        }
      };

      _validade({id:'loginform',rules:ruleslogin,messages:messageslogin})
      var url="/Teachers/index";
      urlarr=url.split('/');
      urlarr.pop();
      url=urlarr.pop();
      $(".WU-nav li a").each(function(){
            var acurl=$(this).attr('href');
            if(acurl.match(url)){
              $(this).parent().css({"transition":"all linear 0.5s"}).css({'border-bottom':'solid 3px #0065B3'})
            }

      });
     
      })

// _validade({rules:rule,messages:message,class:'help-block'});
    </script>
   	
    
<script type="text/javascript">
  myscroll=$(".WU_myscroll")[0];
  myscrollafter=$(".WU_myscrollafter")[0];
  scrollinfo=$(".WU_scrollinfo")[1];
  myscrollafter.innerHTML=myscroll.innerHTML;
  // alert(myscroll.offsetHeight);
  // alert(scrollinfo.scrollTop);
    // setInterval(function(){
    //  if(scrollinfo.scrollTop>=myscroll.offsetHeight)
    //    scrollinfo.scrollTop=scrollinfo.scrollTop-myscroll.offsetHeight;
    //  else
    //    scrollinfo.scrollTop++;
    //  },10)

</script>

</body>
   

</html>