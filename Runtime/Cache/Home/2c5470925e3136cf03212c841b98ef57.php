<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ($title); ?></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="/static/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="/static/css/plugins/layer/layui.css"> -->
    <!-- <link href="/static/css/font-awesome.min.css" rel="stylesheet"> -->
    <!-- <link href="/static/css/animate.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="/static/css/base.css">

    <!-- <link href="/static/css/style.min.css" rel="stylesheet"> -->
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
   	

<link rel="stylesheet" type="text/css" href="/static/css/plugins/fileinput/fileinput.min.css">
<style type="text/css">


</style>


   </head>
	<body>
  <div class="WU_header">
  <div class="WU_top bluetop">
      毕业论文很重要请慎重选择<span ></span>
  </div> 
  <div class="WU_content"> 
  <div class="WU_navbar">
  <div class="row" style="width:100%">
    <div class="col-sm-2">
      <img src="/static/img/logo.png">
    </div>
    <div class="col-sm-10">
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
      <form class="navbar-text navbar-right dropdown"  style="margin-bottom: 0px;margin-top: -2px;">
      <a href="<?php echo U('Student/course');?>" target="_blank" class="dropdown-toggle" >
      <img src="<?php if(empty($_SESSION['_pic_'])): ?>/static/img/logo.png<?php else: echo (session('_pic_')); endif; ?>"   class="WU_login_img img-circle"> 
      <div class="pull-right">
      <p style="margin-left:5px"><?php echo (session('_username_')); ?></p>
      <p style="margin-left:5px"><b>【学生】</b></p> 
      </div>
      </a>
      <ul class="dropdown-menu dropdown-menu_list">
        <li class="dropdown-menu-li"><a href="<?php echo U('Student/photo');?>">我的头像<span class="glyphicon glyphicon-picture"></span></a></li>
        <li class="dropdown-menu-li"><a href="<?php echo U('Student/intro');?>">基本资料<span class="glyphicon glyphicon-bell"></span></a></li>
        <!-- <li class="dropdown-menu-li"><a href="<?php echo U('Student/info');?>">我的通知</a></li> -->
        <li class="dropdown-menu-li"><a href="<?php echo U('Student/course');?>">我的课目<span class="glyphicon glyphicon-tasks"></span></a></li>
        <li class="dropdown-menu-li"><a href="<?php echo U('Student/safe');?>">安全设置<span class="glyphicon glyphicon-wrench"></span></a></li>
        <li class="dropdown-menu-li"><a href="<?php echo U('Login/logout');?>">退出<span class="glyphicon glyphicon-log-out"></span></a></li>
      </ul>
      </form>

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
          <h4 class="modal-title">登录</h4>
        </div>
        <div class="modal-body">
          <form action="ming.html" class="form-horizontal" method="post">
            <div class="form-group">
              <label class="col-sm-3 control-label">用户名</label>
              <div class="col-sm-6">
              <input type="text" name="username" class="form-control" placeholder="请输进去用户名">
              </div>
            </div>            
            <div class="form-group">
              <label class="col-sm-3 control-label">密码</label>
              <div class="col-sm-6">
              <input type="text" name="username" class="form-control" placeholder="请输进去密码">
              </div>
            </div> 
            <div class="form-group">
               <div class="col-sm-offset-3   col-sm-3">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <input type="radio"   name="role" aria-label="">
                      </span>
                      <input type="" value="学生" disabled class="form-control" aria-label="">
                      </div>
             <!-- --- -->
               </div>
                 <div class="col-sm-3">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <input type="radio"  name="role"   aria-label="">
                        </span>
                        <input type="" value="教师" disabled class="form-control" aria-label="">
                        </div>
               <!-- --- -->
                 </div>
             </div>
            <div class="form-group">
              <div class="col-sm-9 col-sm-offset-3">
                  <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                  <button type="submit" class="btn btn-primary" id="login">登录</button>
              </div>
            </div>
           
          </form>
        </div>
      </div>
    </div>
  </div>

<!-- ------ -->
 <div  class="row">
 
 </div>
  <div style="padding-right: 50px;padding-left: 50px;">
  <div class="container-fluid">
  <!-- ---- -->
    <div class="container-fluid" >

    <div class="WU_info">
     <div class="row WU_inforow">
     <span class='WU_infoheader'>我的中心</span>

       </div>
      <div class="row WU_scrollinfo" style="padding-top:15px; ">
      <div class="col-sm-3">
        <div class="panel panel-default">
          <div class="panel-body">
           <h4>个人中心</h4>
             <ul class="WU_personal">
              <li><a href="<?php echo U('Student/course');?>">我的选课</a></li>
              <!-- <li><a href="<?php echo U('Student/info');?>">我的通知</a></li> -->
              <li><a href="<?php echo U('Student/classes');?>">正选公示</a></li>
              <li><a href="<?php echo U('Student/guide');?>">指导教师</a></li>
            </ul>
          </div>
          <div class="panel-body">
           <h4>账户设置</h4>
             <ul class="WU_personal">
              <li><a href="<?php echo U('Student/intro');?>">基本信息</a></li>
              <li><a href="<?php echo U('Student/photo');?>">头像设置</a></li>
              <li><a href="<?php echo U('Student/safe');?>">安全设置</a></li>
              <li><a href="<?php echo U('Login/logout');?>"><span class=""></span>退出登录</a></li>
            </ul>
          </div>
          </div>
      </div>
        <div class="col-sm-8">
        <div class="panel panel-primary" style="border-color:#ccc" >
          <div class="panel-heading" style="border-color:#ccc;background: #fff">
            <h3 class="panel-title" style="border-color:#ccc;color:#515151"><span>我的头像</span></h3>
          </div>
              

<div class="panel-body">
 <div class="row" >
			<div class="col-sm-10 col-sm-offset-1">
			<input type="hidden" name="pic"  value="<?php echo ($pic); ?>">
             <input id="file" name="myfile" type="file" data-show-caption="true">  
    	    </div>
    </div>
</div>
  


  
        </div>
      </div>

      </div>

      
      </div>
      </div>
  

    <!-- ------ -->
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
      var url="/Student/photo";
      url=url.split('/').pop();
      $(".WU_personal li a").each(function(){
            var acurl=$(this).attr('href');
            if(acurl.match(url)){
              $(this).parent().css({"transition":"all linear 6s"}).css({'background':'#0065B3','opacity':'0.7','transform':'scale(1,1.1)'})
            }

      });


     })

    </script>
   	
    
<script type="text/javascript" src="/static/js/plugins/fileinput/fileinput.min.js"></script>
<script type="text/javascript" src="/static/js/plugins/fileinput/zh.js"></script>
<script type="text/javascript">
    function _uploadFile(uploadid,uploadurl) {
    	pic=$("input[type='hidden']").val()
    $("#" + uploadid).fileinput({

        language: 'zh', //设置语言
        uploadUrl: uploadurl, //上传的地址
        allowedFileExtensions: ['jpg', 'gif', 'png'],//接收的文件后缀
        //uploadExtraData:{"id": 1, "fileName":'123.mp3'},
        uploadAsync: true, //默认异步上传
        showUpload: true, //是否显示上传按钮
        showRemove: true, //显示移除按钮
        showPreview: true, //是否显示预览
        showCaption: false,//是否显示标题
        autoReplace: true,
        browseClass: "btn btn-primary", //按钮样式
        dropZoneEnabled: true,//是否显示拖拽区
        maxImageHeight: 1000,//图片的最大高度
        maxFileCount: 1,
        validateInitialCount: true,
        initialPreview: [ //预览图片的设置
        "<img src="+pic+" class='file-preview-image' alt='请抓紧上传图片' title='请上上传图片'>",
        ],
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>",
        msgFilesTooMany: "选择上传的文件数量({n}) 超过允许的最大数值{m}！"
    }).on("fileuploaded", function (e, data) {
    	var remsg=data.response;
    	if(remsg.code==200) {
    		 layer.msg(remsg.msg,{icon:1,time:500});
    		 $('.WU_login_img ').attr('src',remsg.data);
    	}
    	else{
    	$(".progress-bar-success").attr('style','width:20%');
    	layer.alert(remsg.msg, {icon: 5},function(index){
    	layer.close(index);

    	});
    	
    	}
        // console.log(data.response);
    });
}
        $(function () {  
            _uploadFile("file",'<?php echo U("Public/uploadfile",array("itemname"=>"stphoto"));?>');  
              
        })  
</script>


</body>
   

</html>