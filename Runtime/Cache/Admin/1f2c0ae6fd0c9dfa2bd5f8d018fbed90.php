<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="renderer" content="webkit">
    <title>毕业设计后台管理系统</title>

    <!-- CSS文件 -->
   <link href="/static/css/bootstrap.min.css" rel="stylesheet">
   <link href="/static/css/font-awesome.min.css" rel="stylesheet">
   <link href="/static/css/animate.min.css" rel="stylesheet">
   <link href="/static/css/style.min.css" rel="stylesheet">
    

<link href="/static/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
<style type="text/css">

</style>


</head>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-9">
        <h2></h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">学生管理</a>
            </li>
            <li class="active">
                <strong>院系专业</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-3">
        <!-- <div class="title-action">
            <a href="" class="btn btn-primary">活动区域</a>
        </div> -->
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="wrapper wrapper-content animated bounceInRight">
            <div class="col-sm-1 pull-right">
                <a  href="" class="btn btn-primary btn-outline"><span class="fa fa-refresh fa-spiner"></span>刷新</a>
            </div>
            

<div class="col-sm-12">
  <ul class="notes">
      <?php if(is_array($dedata)): $i = 0; $__LIST__ = $dedata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li>
          <div>
              <h3><?php echo ($data["classname"]); ?>专业</h3>
              <p><?php echo ((isset($data["desc"]) && ($data["desc"] !== ""))?($data["desc"]):'该专业是学校的优秀'); ?></p>
              <a class="btn btn-primary" href="<?php echo U('Student/detail',array('id'=>$data['id']));?>">进专业</a>
          </div>
      </li><?php endforeach; endif; else: echo "" ;endif; ?> 
    </ul>  
    <?php if(empty($dedata)): ?><div class="jumbotron">
         <div class="container">
           <h1>已经尽力了</h1>
           <p>暂时还没有相关院系的专业信息，抓紧上传吧</p>
           <p>
             <a class="btn btn-primary btn-lg" onclick="javascript:history.go(-1)">返回</a>
           </p>
         </div>
       </div><?php endif; ?>

</div>

<div class="col-sm-12">
<div class="col-sm-12"> <?php echo ($page); ?></div>
</div>

        </div>
    </div>
</div>
<!-- 全局js -->
  <script src="/static/js/jquery.min.js"></script>
  <script src="/static/js/bootstrap.min.js"></script>
  <script src="/static/js/plugins/layer/layer.min.js"></script>
  <script src="/static/js/common.js"></script>

  <!-- 自定义js -->

  <!-- 第三方插件 -->

<script src="/static/js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
<script src="/static/js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
<script src="/static/js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
<script type="text/javascript">
</script>

</body>
</html>