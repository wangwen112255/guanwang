<?php if (!defined('THINK_PATH')) exit();?>
  <link href="/static/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/static/css/plugins/fileinput/fileinput.min.css">
  <link rel="stylesheet" type="text/css" href="/static/css/base.css">
  <style type="text/css">
    .help-block {
     padding: 5px;
      }
  </style>
  
  <form id="signupForm" action="<?php echo U('create');?>"  style="margin-top: 30px" method="post" class="form-horizontal">
    <div class="form-group ">
        <div class="col-md-2 control-label" >
            <label >案例名称</label>
        </div>
        <div class="col-md-8">
            <input type="text"  placeholder="" class="form-control" value="<?php echo ($codata["departname"]); ?>"  name="name">
        </div>
    </div>
    <div class="form-group ">
        <div class="col-md-2 control-label" >
            <label >开发者</label>
        </div>
        <div class="col-md-8">
            <input type="text"  placeholder="" class="form-control" value="<?php echo ($codata["departname"]); ?>"  name="author">
        </div>
    </div>
    <div class="form-group ">
        <div class="col-md-2 control-label" >
            <label >案例类型</label>
        </div>
        <div class="col-md-8">
            <select name="type_id" placeholder="" class="form-control"  name="departname">
            <?php if(is_array($Typedata)): $i = 0; $__LIST__ = $Typedata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["typename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        
        </div>
    </div>
    <div class="form-group ">
        <div class="col-md-2 control-label" >
            <label >案例地址</label>
        </div>
        <div class="col-md-8">
            <input type="text"  placeholder="" class="form-control" value=""  name="url">
        </div>
    </div>
    <input type="hidden" name="cid" value="">  
    <div class="form-group">
        <div class="col-md-2 control-label">
            <label >案例详情</label>
        </div>
        <div class="col-md-8">
          <textarea id="courseeditor" placeholder="请输进去毕业设计的要求" name="desc" style="width:100%" class="form-control" rows="6">
         <!--  <?php  echo htmlspecialchars_decode($codata['desc']); ?> -->
        </textarea>
        <!-- <input type="text" class="form-control" value="<?php echo ($datadetail["icon"]); ?>" name="icon"> -->
        </div>
    </div>
    <div class="form-group" >
        <div class="col-md-2 control-label">
            <label >案例缩列图</label>
        </div>
        <div class="col-sm-8">
            <input  id="uploadfile" style="z-index: 999;opacity: 0" name="pic" type="file" data-show-caption="true"> 
            <div  value="上传图片"  style="position: absolute;top:-10px;width: 100px;height: 40px;border-radius: 4px;background: #9902e0;z-index:-10;text-align:center;line-height: 40px;color:#ffffff;"  id='uploadbtn'/>上传图片</div>
        </div>
    </div>
  
    <div class="col-md-3 col-md-offset-2">
    <button type="submit" class="btn btn-primary">提交</button>
    <button type="reset" class="btn-primary btn">取消</button>
      
    </div>

  </form>

<script src="/static/js/jquery.js"></script>
<script type="text/javascript" src='/static/js/plugins/validate/jquery.validate.min.js'></script>
<script type="text/javascript" src="/static/js/plugins/layer/layer.min.js"></script>
<!-- <script type="text/javascript" src="/static/js/plugins/fileinput/fileinput.min.js"></script> -->
<!-- <script type="text/javascript" src="/static/js/plugins/fileinput/zh.js"></script> -->
<script type="text/javascript" src="/static/js/common.js"></script>
<script src="/static/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/static/js//kind/kindeditor-all-min.js"></script>
<script type="text/javascript">
$(function(){
$.extend($.validator.defaults,{ignore:""});
var icon = "<i class='glyphicon  glyphicon-remove'></i> ";
var rule={
  departname:{
   required:true,
   maxlength:30
  },
  desc:{
    required:true,
   
    //maxlength:200
  },
  pic:{
    required:true,
  }

 };

 var message={
  departname:{
   required:icon+"请输进去正确的院系名称",
   maxlength:icon+"最长的题目不能超过三十个字"
  },
  desc:{
    required:icon+'请输进去简单的院系简介'
    // maxlength:icon+"毕设要求不能超过300字"
  },
   pic:{
    required:icon+"请上传图标",
  }
 
  
 };
// _validade({rules:rule,messages:message,class:'help-block'});
_SwitchStatus('.js-check');
KindEditor.ready(function(K){
          window.editor = K.create('textarea[name="desc"]',{
           allowFileManager : true,
           afterBlur : function(){
           this.sync();}
           });
});
// $("#uploadbtn").click(function(){
// $("#uploadfile").click();
// });
});
</script>

</block>