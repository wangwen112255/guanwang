<?php if (!defined('THINK_PATH')) exit();?>
  <link href="/static/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/static/css/plugins/fileinput/fileinput.min.css">
  <link rel="stylesheet" type="text/css" href="/static/css/base.css">
  <style type="text/css">
    .help-block {
     padding: 5px;
      }
  </style>
  
  <form id="signupForm" action="<?php echo U('saves');?>"  style="margin-top: 30px" method="post" class="form-horizontal">
    <div class="form-group ">
    <div class="col-md-2 control-label" >
      <label >院系名称</label>
    </div>
    <div class="col-md-8">
    <input type="text"  placeholder="请输进去毕业设计题目，必填项"   class="form-control" value="<?php echo ($codata["departname"]); ?>"  name="departname">
    </div>
    </div>
    <input type="hidden" name="cid" value="<?php echo ($codata["id"]); ?>">  
    <div class="form-group">
    <div class="col-md-2 control-label">
      <label >简单介绍</label>
    </div>
    <div class="col-md-8">
      <textarea id="courseeditor" placeholder="请输进去毕业设计的要求" name="desc" style="width:100%" class="form-control" rows="6">
      <?php  echo htmlspecialchars_decode($codata['desc']); ?>
    </textarea>
    <!-- <input type="text" class="form-control" value="<?php echo ($datadetail["icon"]); ?>" name="icon"> -->
    </div>
    </div>
    <div class="form-group" style="height:300px">
    <div class="col-md-2 control-label">
      <label >院系图标</label>
    </div>
    <div class="col-sm-8">
     <input id="file" name="myfile" type="file" data-show-caption="true">  
    </div>
    <input type="hidden" name="pic" value="<?php echo ($codata["pic"]); ?>" id='pic'>
    </div>
  
    <div class="col-md-3 col-md-offset-2">
    <button id="addsubmit" class="btn btn-primary">提交</button>
    <button type="reset" class="btn-primary btn">取消</button>
      
    </div>

  </form>

<script src="/static/js/jquery.js"></script>
<script type="text/javascript" src='/static/js/plugins/validate/jquery.validate.min.js'></script>
<script type="text/javascript" src="/static/js/plugins/layer/layer.min.js"></script>
<script type="text/javascript" src="/static/js/plugins/fileinput/fileinput.min.js"></script>
<script type="text/javascript" src="/static/js/plugins/fileinput/zh.js"></script>
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
_validade({rules:rule,messages:message,class:'help-block'});
_SwitchStatus('.js-check');
KindEditor.ready(function(K){
          window.editor = K.create('textarea[name="desc"]',{
           allowFileManager : true,
           afterBlur : function(){
           this.sync();}
           });
});

function _uploadFile(uploadid,uploadurl,receiveid) {
            var pic=$("#"+receiveid).val();
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
                "<img src='"+pic+"' class='file-preview-image' alt='请抓紧上传图片' title='请上上传图片'>",
                ],
                previewFileIcon: "<i class='glyphicon glyphicon-king'></i>",
                msgFilesTooMany: "选择上传的文件数量({n}) 超过允许的最大数值{m}！"
            }).on("fileuploaded", function (e, data) {
                var remsg=data.response;
                if(remsg.code==200) {
                layer.msg(remsg.msg,{icon:1,time:500});
                $('.WU_login_img ').attr('src',remsg.data);
                $("#"+receiveid).val(remsg.data);
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

_uploadFile("file",'<?php echo U("Public/uploadfile",array("itemname"=>"Dephoto","wid"=>200,"hei"=>200));?>','pic');  
}); 

</script>

</block>