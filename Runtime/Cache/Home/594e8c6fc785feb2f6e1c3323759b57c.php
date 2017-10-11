<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 8]>       <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>       <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
   <head>
      <meta charset="utf-8">
      <title>河南亿欣网络科技有限公司|专注于网站建设</title>
      <meta name="description" content="河南亿欣网络科技有限公司|专注于郑州河南网站微信建设">
      <meta name="author" content="河南亿欣网络科技有限公司|专注于郑州河南网站微信建设">
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Google Fonts -->
     
      <!-- Library CSS -->
      <link rel="stylesheet" type="text/css" href="/tepstatic/css/style.css">
      <link rel="stylesheet" href="/homestatic/css/bootstrap.css">
      <link rel="stylesheet" href="/homestatic/css/fonts/font-awesome/css/font-awesome.css">
      <link rel="stylesheet" href="/homestatic/css/animations.css" media="screen">
      <link rel="stylesheet" href="/homestatic/css/superfish.css" media="screen">
      <link rel="stylesheet" href="/homestatic/css/revolution-slider/css/settings.css" media="screen">
      <link rel="stylesheet" href="/homestatic/css/prettyPhoto.css" media="screen">
      <!-- Theme CSS -->
      <link rel="stylesheet" href="/homestatic/css/style.css">
      <!-- Skin -->
      <link rel="stylesheet" href="/homestatic/css/colors/blue.css" id="colors">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="/homestatic/css/theme-responsive.css">
      <!-- Switcher CSS -->
     <link href="/homestatic/css/switcher.css" rel="stylesheet">
     <link href="/homestatic/css/spectrum.css" rel="stylesheet">
      <!-- Favicons -->
      <link rel="shortcut icon" href="/homestatic/img/ico/favicon.ico">
      
      
   </head>
   <body class="home">
      <div class="wrap">
         <!-- Header Start -->
         <header id="header">

            <!-- Header Top Bar Start -->
            <div class="top-bar" >
               <div class="slidedown collapse">
                  <div class="container">
                     <div class="phone-email pull-left">
                        <a>您好，欢迎来到河南亿欣通网络科技有限公司</a>

                        <a><i class="icon-phone"></i>咨询热线 ：13298310589</a>
                       
                     </div>
                     <div class="pull-right">
                        <ul class="social pull-left" style="padding-top: 8px">
                           <li class="facebook" style="position: relative;">
                           <!-- <a href="#"><i class="icon-facebook">友</i></a> -->
                            <a class="sfocus" href="javascript:void(0);">微</a>
                            <div class="sqrcode_wrap">
                                    <a class="sqrcode" href="javascript:void(0);">
                                        <img src="/tepstatic/images/201474111670.png" title="扫一扫" alt="扫一扫" /></a> 
                                    <a  class="slink" style="color:#0990e2" 
                                    href="javascript:void(0);">微信公众号 
                                    </a>
                            </div>
                           </li>
                           <li class="facebook" style="position: relative;">
                           <!-- <a href="#"><i class="icon-facebook">友</i></a> -->
                            <a class="sfocus" href="javascript:void(0);">微</a>
                            <div class="sqrcode_wrap">
                                    <a class="sqrcode" href="javascript:void(0);">
                                        <img src="/tepstatic/images/201474111670.png" title="扫一扫" alt="扫一扫" /></a> 
                                    <a  class="slink" style="color:#0990e2" 
                                    href="javascript:void(0);">新浪微博
                                    </a>
                            </div>
                           </li>
                        </ul>
                     <!--    <div id="search-form" class="pull-right">
                           <form action="#" method="get">
                              <input type="text" class="search-text-box">
                           </form>
                        </div> -->
                     </div>
                  </div>
               </div>
            </div>
            <!-- Header Top Bar End -->
            <!-- Main Header Start -->
            <div class="main-header"  style="background:#0990e2">
               <div class="container">
                  <!-- TopNav Start -->
                  <div class="topnav navbar-header">
                     <a class="navbar-toggle down-button" data-toggle="collapse" data-target=".slidedown">
                     <i class="icon-angle-down icon-current"></i>
                     </a> 
                  </div>
                  <!-- TopNav End -->
                  <!-- Logo Start -->
                  <div class="logo pull-left">
                     <h1>
                        <a href="index.html">
                        <img src="img/logo.png" alt="pixma" width="125" height="60">
                        </a>
                     </h1>
                  </div>
                  <!-- Logo End -->
                  <!-- Mobile Menu Start -->
                  <div class="mobile navbar-header">
                     <a class="navbar-toggle" data-toggle="collapse" href=".html">
                     <i class="icon-reorder icon-2x"></i>
                     </a> 
                  </div>
                  <!-- Mobile Menu End -->
                  <!-- Menu Start -->
                  <nav class="collapse navbar-collapse menu" >
                     <ul class="nav navbar-nav sf-menu">
                        <li>
                           <a  href="<?php echo U('Index/index');?>"  <?php if((CONTROLLER_NAME) == "Index"): ?>id='current'<?php endif; ?> >
                           首页
                           </a>
                        </li>
                        <li>
                           <a  <?php if((CONTROLLER_NAME) == "Service"): ?>id='current'<?php endif; ?>href="<?php echo U('Service/index');?>" class="sf-with-ul">
                          服务介绍
                           </a>
                        </li>
                        <li>
                           <a  <?php if((CONTROLLER_NAME) == "Case"): ?>id='current'<?php endif; ?> href="<?php echo U('Case/index');?>" class="sf-with-ul">
                           案例展示
                           </a>
                        </li>
                         <li>
                           <a  <?php if((CONTROLLER_NAME) == "Build"): ?>id='current'<?php endif; ?> href="<?php echo U('Build/index');?>" class="sf-with-ul">
                           定制开发 
                           </a>
                        </li>
                        <li>
                           <a <?php if((CONTROLLER_NAME) == "Recruit"): ?>id='current'<?php endif; ?>  href="<?php echo U('Recruit/index');?>" class="sf-with-ul">
                           企业资讯 
                           </a>
                        </li>
                         <li>
                           <a <?php if((CONTROLLER_NAME) == "Contact"): ?>id='current'<?php endif; ?> href="<?php echo U('Contact/index');?>" class="sf-with-ul">
                           联系我们 
                           </a>
                        </li>
                     </ul>
                  </nav>
                  <!-- Menu End --> 
               </div>
            </div>
            <!-- Main Header End -->
         </header>
         <!-- Header End --> 
         <!-- Content Start -->
      
            
<div class="catBody">
    <div id="catTab" class="catTab">
        <a class="curr catLabel" href="javascript:void(0);">联系方式</a> <a class="catLabel"
            href="javascript:void(0);">诚聘英才</a> <a class="catLabel" href="javascript:void(0);">新浪微博</a>
    </div>
    <ul id="catQuery" class="catQuery">
        <li class="catCon catContact">
            <div class="catConTop">
                <div class="catContl">
                    <h2 class="catctlTitle">
                        河南亿欣通网络科技有限公司</h2>
                    <div class="catctlCon">
                        <span style="color: #484848; font-family: 'Microsoft Yahei'; line-height: 32px; background-color: #FFFFFF;">
                            手机：132-9831-0589</span><br />
                        <span style="color: #484848; font-family: 'Microsoft Yahei'; line-height: 32px; background-color: #FFFFFF;">
                            Q Q：171997274</span><br />
                      	 <span style="color: #484848; font-family: 'Microsoft Yahei'; line-height: 32px; background-color: #FFFFFF;">
                      	    邮 箱：1205483453@qq.com</span><br />                   
                        <span style="color: #484848; font-family: 'Microsoft Yahei'; line-height: 32px; background-color: #FFFFFF;">
                            网址：</span><a href="http://www.99it.cn" target="_blank">http://www.echainto.com</a><br />
                        <span style="color: #484848; font-family: 'Microsoft Yahei'; line-height: 32px; background-color: #FFFFFF;">
                            地址：河南省郑州市郑东新区金水路与东风路绿地原盛国际2</span><br />
                        <span id="qqLoginBtn"></span>
                    </div>
                </div>
                <ul id="catContr" class="catContr">
                    <li class="catQrcode"><a class="curr catqTab catqTabwx" href="javascript:void(0);">微信</a>
                        <div class="catqc">
                            <img src="templets/images/201474111666.png" title="扫一扫" alt="扫一扫" /></div>
                    </li>
                    <li class="catQrcode"><a class="catqTab catqTabwb" href="javascript:void(0);">新浪微博</a>
                        <div class="catqc">
                            <img src="templets/images/201474111670.png" title="扫一扫" alt="扫一扫" /></div>
                    </li>
                </ul>
            </div>

        </li>
        <li class="catCon catWork">
            <div id="UpdatePanel1">
                <div class="catwHead">
                    <span class="catwTitle">需求留言</span>（提交您的业务需求，我们的客户经理将及时与您取得联系）</div>
                <span class='catwTip'></span>
                <form action="/plus/diy.php" enctype="multipart/form-data" method="post">
                <input type="hidden" name="action" value="post" />
                <input type="hidden" name="diyid" value="1" />
                <input type="hidden" name="do" value="2" />
                <div class="catwInput">
                    <input name="comname" type="text" id="comname" value='公司名称：' />
                    <input name="tel" type="text" id="tel" value='电话：' />
                </div>
                <div class="catwInput">
                    <input name="name" type="text" id="name" value='姓名：' />
                    <input name="email" type="text" id="email" value='ＱＱ：' />
                </div>
                <div class="catwText">
                    <textarea name='mesinfo' id='mesinfo' value='内容：'></textarea></div>
                <input type="text" class="entry ent-2 w-156 " style="width: 80px; text-transform: uppercase;"
                    id="vdcode" name="vdcode" class="code" />
                <img id="vdimgck" align="absmiddle" onclick="this.src=this.src+'?'" style="cursor: pointer;"
                    alt="看不清？点击更换" src="templets/images/dimgck.php" />
                看不清？ <a href="javascript:void(0)" onclick="changeAuthCode();">点击更换</a>
                <script type="text/javascript">
                    $ = jQuery;
                    function changeAuthCode() {
                        var num = new Date().getTime();
                        var rand = Math.round(Math.random() * 10000);
                        num = num + rand;
                        $('#ver_code').css('visibility', 'visible');
                        if ($("#vdimgck")[0]) {
                            $("#vdimgck")[0].src = "../include/vdimgck.php?tag=" + num;
                        }
                        return false;
                    }  
                </script>
                <div id="catwBtn" class="catwBtn">
                    <span class="catwSubmit">
                        <input type="hidden" name="dede_fields" value="comname,text;name,text;email,text;mesinfo,multitext;tel,text" />
                        <input type="hidden" name="dede_fieldshash" value="47ab12d5b4395dee81fc86c971b4b051" />
                        <input type="submit" name="submit" value="提 交" class='catwBtnHover' />
                    </span>
                </form>
                <br />
                <span class='catwTip'>( 我们将会在1个工作日内给您回复，资料会保密处理！)</span>
            </div>
        </li>
        <li class="catCon">
            <div id="UpdatePanel1">
               <iframe width="100%" height="550" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=0&height=550&fansRow=2&ptype=1&speed=0&skin=1&isTitle=1&noborder=1&isWeibo=1&isFans=1&uid=5370511811&verifier=29b59629&dpc=1"></iframe>
            </div>
        </li>
    </ul>
</div>

         
         <!-- Content End -->
         <!-- Footer Start -->
         <footer id="footer">
            <!-- Footer Bottom Start -->
            <div class="footer-bottom">
               <div class="container">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6 " style="margin:0px auto">
                    
                        <ul class=" social-icons-footer-bottom" style="float:left">
                           <li><a href="">首页</a></li>
                           <li><a href="">服务介绍</a></li>
                           <li><a href="">案例展示</a>  </li>
                           <li><a href="">产品价格</a>  </li>
                           <li><a href="">诚聘英才</a></li>
                           <li><a href="">联系我们</a></li>
                        </ul>
                    
                     </div>
                  </div>
               </div>
            </div>
            <!-- Footer Bottom End --> 
            <!-- Footer Top Start -->
            <div class="footer-top">
               <div class="container">
                  <div class="row">
                     <section class="col-lg-4 col-md-4 col-xs-12 col-sm-4 footer-three">
                        <!-- <h3>联系我们</h3> -->
                        <ul class="contact-us">
                           <li>
                              <i class="icon-map-marker"></i>
                              <p> 
                               <!--   <strong>地址:</strong> 河南省郑州市郑东新区<br>
                               绿地原盛国际2号楼2单元9楼  -->
                               <p><strong>:</strong><a href="mailto:info@fifothemes.com">河南省郑州市郑东新区绿地原盛<br>国际2号楼2单元9楼</a></p>
                              </p>
                           </li>
                           <li>
                              <i class="icon-phone"></i>
                              <!-- <p><strong>联系:</strong> 13298310589</p> -->
                              <p><strong>:</strong><a href="mailto:info@fifothemes.com">13298310589</a></p>
                           </li>
                           <li>
                              <i class="icon-envelope"></i>
                              <p><strong>:</strong><a href="mailto:info@fifothemes.com">171997274@qq.com</a></p>
                           </li>
                        </ul>
                     </section>
                  
                  </div>
               </div>
            </div>
            <!-- Footer Top End --> 
            
         </footer>
         <!-- Scroll To Top --> 
         <a href="#" class="scrollup"><i class="icon-angle-up"></i></a>
      </div>
      <!-- Wrap End -->
      <section id="style-switcher">
        <h2>浏览设置<a href="#"><i class="icon-cog"></i></a></h2>
        <div>
           <h3>屏幕模式</h3>
           <div class="layout-style">
              <select autocomplete="off" id="layout-style">
                 <option value="1">平铺</option>
                 <option value="2">标准</option>
              </select>
           </div>
           <h3>导航颜色</h3>
           <div class="header-color">
              <input type='text' class="header-bg" />
           </div>
           <h3>底部颜色</h3>
           <div class="header-color">
              <input type='text' class="footer-bg" />
           </div>
           <h3></h3>
        </div>
     </section>
      <div id="backTop" class="backTop">
        <a class="btqrShow" style="background-image: none; text-align: center; color: #fff;
            font-size: 18px; line-height: 66px; text-decoration: none;" href="tencent://message/?uin=1028112958">
            客服</a>
        <div id="btqrImg" class="btqrImg">
            <img src="templets/images/qr_code_02.png" alt="返回顶部" title="返回顶部"></div>
        <a id="btqrShow" class="btqrShow" href="javascript:void(0);"></a><a id="btBtn" class="btBtn"
            href="javascript:void(0);"></a>
    </div>
      <!-- The Scripts -->
      <script src="/homestatic/js/jquery.min.js"></script>
      <script src="/homestatic/js/bootstrap.js"></script>
      <script src="/homestatic/js/jquery.parallax.js"></script> 
      <script src="/homestatic/js/modernizr-2.6.2.min.js"></script> 
      <script src="/homestatic/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
      <script src="/homestatic/js/jquery.nivo.slider.pack.js"></script>
      <script src="/homestatic/js/jquery.prettyPhoto.js"></script>
      <script src="/homestatic/js/superfish.js"></script>
      <script src="/homestatic/js/tweetMachine.js"></script>
      <script src="/homestatic/js/tytabs.js"></script>
      <script src="/homestatic/js/jquery.gmap.min.js"></script>
      <script src="/homestatic/js/circularnav.js"></script>
      <script src="/homestatic/js/jquery.sticky.js"></script>
      <script src="/homestatic/js/jflickrfeed.js"></script>
      <script src="/homestatic/js/imagesloaded.pkgd.min.js"></script>
      <script src="/homestatic/js/waypoints.min.js"></script>
      <script src="/homestatic/js/spectrum.js"></script>
      <script src="/homestatic/js/switcher.js"></script>
      <script src="/homestatic/js/custom.js"></script>
      <script type="text/javascript" src="/tepstatic/js/TweenMax.min.js"></script>
      <script type="text/javascript" src="/tepstatic/js/page.js"></script>
      <script type="text/javascript">
        $(function(){
          $(".facebook").mouseover(function(){
            $(this).find('div').show();
          });
           $(".facebook").mouseleave(function(){
            $(this).find('div').hide();
          })
        })
      </script>
      
  
  </body>
</html>