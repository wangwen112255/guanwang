<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <link rel="stylesheet" href="/static/css/hui/hui.css" />

    <title></title>
    
<style type="text/css">
  
    #list2 li{width:50%; float:left; margin:5px 0px;}
    #hui-footer a{width: 25%;}
    .hui-media-content{
      float: left;
      width: 80%;
      padding-left: 0px;
      padding-right: 2px;
    }
</style>
 
    <style>
    #list2 li{width:50%; float:left; margin:5px 0px;}
    #hui-footer a{width: 25%;}
   </style>

</head>

<body style="background:#F8F8F8;padding-bottom: 80px;">
  

 <header class="hui-header" style="background:#26A2FF ;">
      <div id="hui-back"></div>
      <h1>我的选课</h1>
  </header>
  <div class="hui-wrap">
   <?php if(empty($Codata)): ?><div style="padding:30px;"><center><span style="font-size: 50px;color: #f40" class="hui-icons hui-icons-warn">  
  <button  onclick="history.go(-1)" type="button" class="hui-button  hui-button-large " style="color:#ffff;background: green" >不好意思未查询到相关信息，点击返回</button>
   </span>
   </center> 
    </div><?php endif; ?>
    <div class="hui-media-list" style="padding:10px;">
    <?php if(is_array($Codata)): $i = 0; $__LIST__ = $Codata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ul>
        <li>
        
            <!--<div class="hui-media-list-img"><img src="img/1.png" /></div>-->
            <div class="hui-media-content">
              <h1>题目：<?php echo ($vo["coname"]); ?></h1>
              <p>指导教师：<?php echo ($vo["tename"]); ?></p>
              <p>
                    
                    选课情况：<span class="hui-badge hui-danger">已选<?php echo ($vo["choosenum"]); ?></span>
            <?php if($vo['isreceive'] == 0): ?>课程状态：<span class="hui-badge hui-default">待审核</span>
              </p>
            </div>
            
             <button id='trash<?php echo ($vo["oid"]); ?>' style="position: absolute;right: 5px;height: 30px;top:50%;margin-top: -15px;" type="button" class="hui-button hui-default trash hui-button-small ">撤销</button>
          <input type="hidden" name="oid" value="<?php echo ($vo["oid"]); ?>">
            <?php else: ?>
            <?php if(($vo["is_success"]) == "1"): ?>课程状态：<span class="hui-badge hui-primary">已正选</span>
              </p>
            </div>
            <input type="hidden" name="oid" value="<?php echo ($vo["oid"]); ?>">
             <button style="position: absolute;right: 5px;height: 30px;top:50%;margin-top: -15px;background: green" type="button" class="hui-button  hui-button-small ">恭喜您</button>
			<?php else: ?>
			 课程状态：<span class="hui-badge hui-danger">已拒绝</span>
              </p>
            </div>
            <!-- <input type="hidden" name="oid" value="<?php echo ($vo["oid"]); ?>"> -->
             <button style="position: absolute;right: 5px;height: 30px;top:50%;margin-top: -15px;background: green" type="button" class="hui-button hui h
             ui-button-small "试试其它课程</button><?php endif; endif; ?>
        </li>
      
      </ul><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>

  </div>


<script type="text/javascript" src="/static/js/hui/hui.js"></script>  


<script type="text/javascript" src="/static/js/hui/base.js"></script>  
<script type="text/javascript">
hui(".trash").click(function(){
obj=hui(this);
 var oid=hui(this).next().val();
 // obj=hui("#trash"+oid);
  _ajaxchange({url:'/wx.php/Student/trashcourse',msg:'您确定要撤销这门选课吗？',data:{id:oid},'action':'obj.html("migntian")'});
})

</script>



</body>

</html>