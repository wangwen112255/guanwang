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
                           诚聘英才 
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
      
            
      <div id="main">
            <!-- Title, Breadcrumb Start-->
          
            <!-- Title, Breadcrumb End-->
            <!-- Main Content start-->
            <div class="content">
               <div class="container">
                   <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h3 class="title">为什么要进行企业定制开发</h3>
                     </div>
                     <div class="divider"></div>
                     <div class="reasons">
                        <div class="col-lg-4 col-md-4 col-sm-4 animate_afc d1">
                           <div class="content-box big ch-item bottom-pad-small">
                              <div class="ch-info-wrap">
                                 <div class="ch-info">
                                    <div class="ch-info-front ch-img-1"><i class="icon-rocket"></i></div>
                                    <div class="ch-info-back">
                                       <i class="icon-rocket"></i>
                                    </div>
                                 </div>
                              </div>
                              <div class="content-box-info">
                                 <h3>Professional Quality</h3>
                                 <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                 </p>
                                 <a href="#">Read More <i class="icon-angle-right"></i><i class="icon-angle-right"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 animate_afc d2">
                           <div class="content-box big ch-item bottom-pad-small">
                              <div class="ch-info-wrap">
                                 <div class="ch-info">
                                    <div class="ch-info-front ch-img-1"><i class="icon-code"></i></div>
                                    <div class="ch-info-back">
                                       <i class="icon-code"></i>
                                    </div>
                                 </div>
                              </div>
                              <div class="content-box-info">
                                 <h3>Perfect Implementation</h3>
                                 <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                 </p>
                                 <a href="#">Read More <i class="icon-angle-right"></i><i class="icon-angle-right"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 animate_afc d3">
                           <div class="content-box big ch-item">
                              <div class="ch-info-wrap">
                                 <div class="ch-info">
                                    <div class="ch-info-front ch-img-1"><i class="icon-ok"></i></div>
                                    <div class="ch-info-back">
                                       <i class="icon-ok"></i>
                                    </div>
                                 </div>
                              </div>
                              <div class="content-box-info">
                                 <h3>On Time Delivery</h3>
                                 <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                 </p>
                                 <a href="#">Read More <i class="icon-angle-right"></i><i class="icon-angle-right"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="posts-block col-lg-9 col-md-8 col-sm-8 col-xs-12">
                        <article>
                           <h3 class="title">什么是定制开发？</h3>
                           <div class="post-content">
                              <div class="img-content">
                                 <img src="img/team/team.jpg" alt="">
                              </div>
                              <p>
                                 There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                              </p>
                           </div>
                        </article>
                     </div>
                     <!-- Left Section End -->
                     <!-- Skill Section Start -->
                     <div class="choice col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h3 class="title">基础服务</h3>
                        <ul class="check-list why">
                           <li>Flexible, Responsive Layout</li>
                           <li>Latest WordPress Compatible</li>
                           <li>Cross Browsers Compatible</li>
                           <li>Smartphones and Tablet Friendly</li>
                           <li>Creative Responsive Template</li>
                        </ul>
                     </div>
                     <!-- Skill Section Start -->
                  </div>
               </div>
            </div>
            <div class="divider"></div>
            <!-- 3 Column Big Services -->
            <div class="services-big">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h3 class="title">如何进行定制开发</h3>
                     </div>
                     <div class="clearfix"></div>
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="content-box">
                           <div class="content-box-icon">
                              <img src="img/portfolio/portfolio-6.jpg" alt=" "/>
                           </div>
                           <div class="content-box-info">
                              <h4>企业网站开发</h4>
                              <p>
                                 Lorem Ipsum is simply dummy text of Lorem the printing and typesettings. Lorem Ipsum is simply dummy text of Lorem the printing and typesettings.
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="content-box">
                           <div class="content-box-icon">
                              <img src="img/portfolio/portfolio-3.jpg" alt=" "/>
                           </div>
                           <div class="content-box-info">
                              <h4>商城网站开发</h4>
                              <p>
                                 Lorem Ipsum is simply dummy text of Lorem the printing and typesettings. Lorem Ipsum is simply dummy text of Lorem the printing and typesettings.
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="content-box">
                           <div class="content-box-icon">
                              <img src="img/portfolio/portfolio-7.jpg" alt=" "/>
                           </div>
                           <div class="content-box-info">
                              <h4>移动微信开发</h4>
                              <p>
                                 Lorem Ipsum is simply dummy text of Lorem the printing and typesettings. Lorem Ipsum is simply dummy text of Lorem the printing and typesettings.
                              </p>
                           </div>
                        </div>
                     </div>
                     <!-- 3 Column Services End-->
                     <div class="clearfix"></div>
                  </div>
               </div>
            </div>
            <div class="divider"></div>
               <div class="redcon">
            <ul>
                <li>
                    <img src="/tepstatic/images//newimages/redc1.png" alt="调研" /></li>
                <li>
                    <img src="/tepstatic/images/newimages/redc2.png" alt="策划" /></li>
                <li>
                    <img src="/tepstatic/images/newimages/redc3.png" alt="设计" /></li>
                <li>
                    <img src="/tepstatic/images/newimages/redc4.png" alt="制作" /></li>
                <li>
                    <img src="/tepstatic/images/newimages/redc5.png" alt="开发" /></li>
                <li>
                    <img src="/tepstatic/images/newimages/redc6.png" alt="编辑" /></li>
               <li> <img src="/tepstatic/images/newimages/redc7.png" alt="测试" /></li>
                <li>
                    <img src="/tepstatic/images/newimages/redc8.png" alt="培训" /></li>
                <li>
                    <img src="/tepstatic/images/newimages/redc9.png" alt="上线" /></li>
                <li>
                    <img src="/tepstatic/images/newimages/redc10.png" alt="售后" /></li>
            </ul>
        </div>
            <div class="divider"></div>
            <!-- 3 Column Services -->
           
          <!--   <div class="divider"></div>
            <div class="service-reasons">
             
            </div> -->
            <!-- Main Content end-->
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