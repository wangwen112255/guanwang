<?php if (!defined('THINK_PATH')) exit(); session_start(); $role=$_SESSION['role']?$_SESSION['role']:'Student'; $role.='/index'; ?>
<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <link rel="stylesheet" href="/static/css/hui/hui.css" />

    <title></title>
    
<style type="text/css">
 #list2 li{width:50%; float:left; margin:5px 0px;}
 #hui-footer a{width: 25%;}

</style>

 
    <style>
    #list2 li{width:50%; float:left; margin:5px 0px;}
    #hui-footer a{width: 25%;}
   </style>

</head>

<body style="background:#F8F8F8;padding-bottom: 80px;">
  
  <header class="hui-header" style="background:#26A2FF ;">
      <div id="hui-header-menu"></div>
      <h1>教师查看</h1>
  </header>
<div class="hui-swipe" id="swipe1">
    <div class="hui-swipe-pre"><img src="/static/img/1.png"/></div>
  </div>
  <div class="hui-wrap">
   <?php if(empty($tedata)): ?><div style="padding:30px;"><center><span style="font-size: 50px;color: #f40" class="hui-icons hui-icons-warn">  
  <button  onclick="history.go(-1)" type="button" class="hui-button  hui-button-large " style="color:#ffff;background: green" >不好意思未查询到相关信息，点击返回</button>
   </span>
   </center> 
    </div><?php endif; ?>
    <div class="hui-media-list" style="padding:10px;">
      <?php if(is_array($tedata)): $i = 0; $__LIST__ = $tedata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><ul>
        <li>
          <a href="<?php echo U('lists',array('id'=>$data['idt']));?>">
            <div class="hui-media-list-img"><img src="<?php echo ((isset($data["photo"]) && ($data["photo"] !== ""))?($data["photo"]):'/static/img/a2.jpg'); ?>" /></div>
            <div class="hui-media-content">
              <h1>姓名：<?php echo ($data["realname"]); ?></h1>
              <p>简介：<?php echo ((isset($data["desct"]) && ($data["desct"] !== ""))?($data["desct"]):'该老师是优秀教师'); ?></p>
              <p>在选课程数目：<span class="hui-badge hui-primary"><?php echo ($data["total"]); ?></span></p>
            </div>
            <a href="<?php echo U('lists',array('id'=>$data['idt']));?>">
            <button style="position: absolute;right: 5px;top:50%;margin-top:-15px;height:30px;" type="button" class="hui-button hui-primary  hui-button-small ">查看</button>
            </a>
          </a>
        </li>
      </ul><?php endforeach; endif; else: echo "" ;endif; ?>

    </div>
    <center><?php echo ($showpage); ?></center>  
  </div>

 
  <div id="hui-footer">
    <a href="<?php echo U('Index/index');?>" id="nav-home">
        <div class="hui-footer-icons hui-icons-home"></div>
        <div class="hui-footer-text">首页</div>
    </a>
    <a href="<?php echo U('Teachers/index');?>" id="nav-teacher">
        <div class="hui-footer-icons hui-icons-news"></div>
        <div class="hui-footer-text">教师查看</div>
    </a>
    <a href="<?php echo U('Course/index');?>" id="nav-course">
        <div class="hui-footer-icons hui-icons-forum"></div>
        <div class="hui-footer-text">学生选课</div>
    </a>
    <a href="<?php echo U($role);?>" id="nav-my">
        <div class="hui-footer-icons hui-icons-my"></div>
        <div class="hui-footer-text">个人中心</div>
    </a>
  </div>
<script type="text/javascript" src="/static/js/hui/hui.js"></script>  


<script type="text/javascript">
  

</script>


</body>

</html>