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
            <!-- Slider Start-->
            <div class="fullwidthbanner-container">
               <div class="fullwidthbanner rslider">
                  <ul>
                     <!-- THE FIRST SLIDE -->
                     <li data-delay="6000" data-masterspeed="300" data-transition="fade">
                        <div class="slotholder"><img src="/homestatic/img/slider/slider-bg-1.jpg" data-fullwidthcentering="on" alt="Pixma"></div>
                        <div class="caption modern_big_bluebg h1 lft tp-caption start"
                           data-x="40"
                           data-y="85"
                           data-speed="700"
                           data-endspeed="800"
                           data-start="1000"
                           data-easing="easeOutQuint"
                           data-endeasing="easeOutQuint">
                           <h3>亿欣通服务理念</h3>
                        </div>
                        <div class="caption list_slide lfb tp-caption start" 
                           data-easing="easeOutExpo" 
                           data-start="1400" 
                           data-speed="1050" 
                           data-y="180" 
                           data-x="40">
                           <div class="list-slide">
                              <i class="icon-camera slide-icon"></i>
                              <h5 class="dblue">以企业发展为主</h5>
                           </div>
                        </div>
                        <div class="caption list_slide lfb tp-caption start" 
                           data-easing="easeOutExpo" 
                           data-start="1800" 
                           data-speed="1200" 
                           data-y="220" 
                           data-x="40">
                           <div class="list-slide">
                              <i class="icon-search slide-icon"></i>
                              <h5 class="dblue">为企业量身定制 </h5>
                           </div>
                        </div>
                        <div class="caption list_slide lfb tp-caption start" 
                           data-easing="easeOutExpo" 
                           data-start="2200" 
                           data-speed="1350" 
                           data-y="260" 
                           data-x="40">
                           <div class="list-slide">
                              <i class="icon-code slide-icon"></i>
                              <h5 class="dblue"> 对企业永久性负责 </h5>
                           </div>
                        </div>
                      
                     </li>
                     <!-- THE RESPONSIVE SLIDE -->
                     <li data-transition="fade" data-slotamount="1" data-masterspeed="300">
                        <img src="/homestatic/img/sslider/slider-bg-2.jpg" data-fullwidthcentering="on" alt="">
                        <div class="caption large_text sft"
                           data-x="660"
                           data-y="54"
                           data-speed="300"
                           data-start="800"
                           data-easing="easeOutExpo"  >我们公司的</div>
                        <div class="caption large_text sfr"
                           data-x="738"
                           data-y="88"
                           data-speed="300"
                           data-start="1100"
                           data-easing="easeOutExpo"  ><span class="dblue">核心竞争力</span></div>
                        <div class="caption list_slide lfb tp-caption start" 
                           data-easing="easeOutExpo" 
                           data-start="1400" 
                           data-speed="1050" 
                           data-y="180" 
                           data-x="660">
                           <div class="list-slide">
                              <i class="icon-eye-open slide-icon"></i>
                              <h5>卓越的团队</h5>
                           </div>
                        </div>
                        <div class="caption list_slide lfb tp-caption start" 
                           data-easing="easeOutExpo" 
                           data-start="1800" 
                           data-speed="1200" 
                           data-y="220" 
                           data-x="660">
                           <div class="list-slide">
                              <i class="icon-table slide-icon"></i>
                              <h5>高效的开发</h5>
                           </div>
                        </div>
                        <div class="caption list_slide lfb tp-caption start" 
                           data-easing="easeOutExpo" 
                           data-start="2200" 
                           data-speed="1350" 
                           data-y="260" 
                           data-x="660">
                           <div class="list-slide">
                              <i class="icon-ok slide-icon"></i>
                              <h5>永久的售后</h5>
                           </div>
                        </div>
                        
                        <div class="caption lfl"
                           data-x="53"
                           data-y="30"
                           data-speed="300"
                           data-start="1400"
                           data-easing="easeOutExpo">
                           <img src="img/slider/responsive-imac.png" alt="iMac Responsive">
                        </div>
                        <div class="caption lfl"
                           data-x="323"
                           data-y="145"
                           data-speed="300"
                           data-start="1500"
                           data-easing="easeOutExpo">
                           <img src="img/slider/responsive-ipad.png" alt="iPad Responsive">
                        </div>
                        <div class="caption lfl"
                           data-x="472"
                           data-y="253"
                           data-speed="300"
                           data-start="1600"
                           data-easing="easeOutExpo">
                           <img src="img/slider/responsive-iphone.png" alt="iPhone Responsive">
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
            <!-- Slider End--> 
            <!-- Slogan Start-->
            <div class="bottom-pad-small" style="text-align: center">
               <div class="container">
                  <div class="row">
                     <div class="slogan-content">
                    <div class="col-lg-12 col-md-12">
                           <h2 class="slogan-title align_center"><b>我们的产品优势</b></h2>
                        </div>
                     <!-- <div class="clearfix"></div> -->
                     </div>
                  </div>
               </div>
            </div>
            <!-- Slogan End--> 
            <!-- Main Content start-->
            <div class="main-content">
               <div class="container">
                  <div class="row">
                      <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="content-box big ch-item bottom-pad-small">
                           <div class="ch-info-wrap">
                              <div class="ch-info">
                                 <div class="ch-info-front ch-img-1"><i class="icon-fullscreen"></i></div>
                                 <div class="ch-info-back">
                                    <i class="icon-fullscreen"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="content-box-info">
                              <h3>Responsive Layout</h3>
                              <p>
                                 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                              </p>
                              <a href="#">Read More <i class="icon-angle-right"></i><i class="icon-angle-right"></i></a>
                           </div>
                        </div>
                     </div>
                      <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="content-box big ch-item bottom-pad-small">
                           <div class="ch-info-wrap">
                              <div class="ch-info">
                                 <div class="ch-info-front ch-img-1"><i class="icon-fullscreen"></i></div>
                                 <div class="ch-info-back">
                                    <i class="icon-fullscreen"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="content-box-info">
                              <h3>Responsive Layout</h3>
                              <p>
                                 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                              </p>
                              <a href="#">Read More <i class="icon-angle-right"></i><i class="icon-angle-right"></i></a>
                           </div>
                        </div>
                     </div>
                     
                  </div>
               </div>
            </div>
            <!-- Main Content end--> 
              <!-- Features start -->  
            <div class="features bottom-pad">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h3  class="title">我们能做什么</h3>
                        <div class="row">
                           <div class="circular-nav">
                              <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 animate_afl">
                                 <div id="cn-tabs">
                                    <div class="service service-1">
                                       <div class="cn-content">
                                          <h4>Premium Sliders</h4>
                                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                                          <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> -->
                                          <a href="#">Read More <i class="icon-angle-right"></i><i class="icon-angle-right"></i></a>
                                          <div class="clearfix"></div>
                                       </div>
                                       <div class="clearfix"></div>
                                    </div>
                                    <div class="service service-2">
                                       <div class="cn-content">
                                          <h4>Unlimited Colors</h4>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <a href="#">Read More <i class="icon-angle-right"></i><i class="icon-angle-right"></i></a>
                                          <div class="clearfix"></div>
                                       </div>
                                    </div>
                                    <div class="service service-3">
                                       <div class="cn-content">
                                          <h4>Shortcodes</h4>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <a href="#">Read More <i class="icon-angle-right"></i><i class="icon-angle-right"></i></a>
                                       </div>
                                       <div class="clearfix"></div>
                                    </div>
                                    <div class="service service-4">
                                       <div class="cn-content">
                                          <h4>300+ Icons</h4>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <a href="#">Read More <i class="icon-angle-right"></i><i class="icon-angle-right"></i></a>
                                       </div>
                                       <div class="clearfix"></div>
                                    </div>
                                    <div class="service service-5">
                                       <div class="cn-content">
                                          <h4>HTML5 / CSS3</h4>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <a href="#">Read More <i class="icon-angle-right"></i><i class="icon-angle-right"></i></a>
                                       </div>
                                       <div class="clearfix"></div>
                                    </div>
                                    <div class="service service-6">
                                       <div class="cn-content">
                                          <h4>After Sale Support</h4>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <a href="#">Read More <i class="icon-angle-right"></i><i class="icon-angle-right"></i></a>
                                       </div>
                                       <div class="clearfix"></div>
                                    </div>
                                    <div class="service service-7">
                                       <div class="cn-content">
                                          <h4>Google Fonts</h4>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <a href="#">Read More <i class="icon-angle-right"></i><i class="icon-angle-right"></i></a>
                                       </div>
                                       <div class="clearfix"></div>
                                    </div>
                                    <div class="service service-8">
                                       <div class="cn-content">
                                          <h4>Ajax Contact Form</h4>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <a href="#">Read More <i class="icon-angle-right"></i><i class="icon-angle-right"></i></a>
                                       </div>
                                       <div class="clearfix"></div>
                                    </div>
                                    <div class="service service-9">
                                       <div class="cn-content">
                                          <h4>Valid HTML Files</h4>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <a href="#">Read More <i class="icon-angle-right"></i><i class="icon-angle-right"></i></a>
                                       </div>
                                       <div class="clearfix"></div>
                                    </div>
                                 </div>
                                 <div class="clearfix"></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 animate_afr">
                                 <div class="cn-wrapper">
                                    <ul>
                                       <li class="circle-1 circle"><a class="active" href="#">网站建设</a></li>
                                       <li class="circle-2 circle"><a href="#"><span class="icon-rocket"></span></a></li>
                                       <li class="circle-3 circle"><a href="#"><span class="icon-puzzle-piece"></span> </a></li>
                                       <li class="circle-4 circle"><a href="#"><span class="icon-thumbs-up-alt"></span></a></li>
                                       <li class="circle-5 circle"><a href="#"><span class="icon-html5"></span></a></li>
                                       <li class="circle-6 circle"><a href="#"><span class="icon-user"></span></a></li>
                                       <li class="circle-7 circle"><a href="#"><span class="icon-google-plus"></span> </a></li>
                                       <li class="circle-8 circle"><a href="#"><span class="icon-envelope-alt"></span></a></li>
                                       <li class="circle-9 circle"><a href="#"><span class="icon-hand-right"></span></a></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                 </div>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Features End --> 
           
          
            <!-- Latest Posts start --> 
            <div class="latest-posts">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 com-sm-12 col-xs-12">
                        <h3 class="title">经典案例</h3>
                     </div>
                     <div class="clearfix"></div>
                     <div class="blog-showcase col-lg-12 col-md-12 col-sm-12 col-xs-12 animate_afb d1">
                        <ul>
                           <li class="blog-first-el">
                              <div class="blog-showcase-thumb col-lg-4">
                                 <div class="post-body">
                                    <a class="post-item-link" href="/homestatic/img/portfolio/portfolio-5.jpg" data-rel="prettyPhoto"><span class="post-item-hover"></span><span class="fullscreen"><i class="icon-search"></i></span><img alt="" src="/homestatic/img/portfolio/portfolio-5.jpg"></a>
                                 </div>
                              </div>
                              <div class="blog-showcase-extra-info col-lg-4">
                                 <span><a href="#">Sep 11th, 2013</a></span>
                                 <h4><a href="#" class="title">Blog post title</a></h4>
                                 <p>Mauris sed mauris bibendum est imperdiet porttitor tincidunt at lorem. Proin augue massa</p>
                                 <a href="#">Read more <i class="icon-double-angle-right"></i></a>
                              </div>
                           </li>
                            <li class="">
                              <div class="blog-showcase-thumb col-lg-4">
                                 <div class="post-body">
                                    <a class="post-item-link" href="/homestatic/img/portfolio/portfolio-5.jpg" data-rel="prettyPhoto"><span class="post-item-hover"></span><span class="fullscreen"><i class="icon-search"></i></span><img alt="" src="/homestatic/img/portfolio/portfolio-5.jpg"></a>
                                 </div>
                              </div>
                              <div class="blog-showcase-extra-info col-lg-4">
                                 <span><a href="#">Sep 11th, 2013</a></span>
                                 <h4><a href="#" class="title">Blog post title</a></h4>
                                 <p>Mauris sed mauris bibendum est imperdiet porttitor tincidunt at lorem. Proin augue massa</p>
                                 <a href="#">Read more <i class="icon-double-angle-right"></i></a>
                              </div>
                           </li>
                             <li class="">
                              <div class="blog-showcase-thumb col-lg-4">
                                 <div class="post-body">
                                    <a class="post-item-link" href="/homestatic/img/portfolio/portfolio-5.jpg" data-rel="prettyPhoto"><span class="post-item-hover"></span><span class="fullscreen"><i class="icon-search"></i></span><img alt="" src="/homestatic/img/portfolio/portfolio-5.jpg"></a>
                                 </div>
                              </div>
                              <div class="blog-showcase-extra-info col-lg-4">
                                 <span><a href="#">Sep 11th, 2013</a></span>
                                 <h4><a href="#" class="title">Blog post title</a></h4>
                                 <p>Mauris sed mauris bibendum est imperdiet porttitor tincidunt at lorem. Proin augue massa</p>
                                 <a href="#">Read more <i class="icon-double-angle-right"></i></a>
                              </div>
                           </li>
                             <li class="">
                              <div class="blog-showcase-thumb col-lg-4">
                                 <div class="post-body">
                                    <a class="post-item-link" href="/homestatic/img/portfolio/portfolio-5.jpg" data-rel="prettyPhoto"><span class="post-item-hover"></span><span class="fullscreen"><i class="icon-search"></i></span><img alt="" src="/homestatic/img/portfolio/portfolio-5.jpg"></a>
                                 </div>
                              </div>
                              <div class="blog-showcase-extra-info col-lg-4">
                                 <span><a href="#">Sep 11th, 2013</a></span>
                                 <h4><a href="#" class="title">Blog post title</a></h4>
                                 <p>Mauris sed mauris bibendum est imperdiet porttitor tincidunt at lorem. Proin augue massa</p>
                                 <a href="#">Read more <i class="icon-double-angle-right"></i></a>
                              </div>
                           </li>
                        
                        </ul>
                        <div class="clearfix"></div>
                     </div>
                  </div>
                  <div class="divider"></div>
               </div>
            </div>
            <!-- Latest Posts End -->
             <!-- Recent works start-->
            <div class="recentworks bottom-pad">
               <div class="container">
                <div class="iaAndn">
                     <div class="row">
                      <div id="iabout" class="iabout  col-lg-5 col-md-5 col-sm-5 col-xs-5">
                          <div class="iaHeader">
                              <a class="iaPrev" href="javascript:void(0);" title="上一个"></a><a class="iaNext" href="javascript:void(0);"
                                  title="下一个"></a>
                          </div>
                          <ul class="iaQuery">
                              <li class="iaList">
                                  <div class="iaName">
                                      <span class="iaNameEn">ABOUT US</span><span class="iaNameCn">企业概况</span></div>
                                  <div class="iaBody">
                                      <div class="iaPic">
                                          <a href="/abouts/">
                                              <img src="templets/images/124226034_461n.jpg" /></a> <span class="iaPicMask">
                                          </span><span class="iaPicName">简介</span>
                                      </div>
                                      <div class="iaIntro">
                                          <h4 class="iaTitle">
                                              企业发展之路</h4>
                                          <div class="iaContent">
                                              专门致力于企业网站建设、高端品牌形象设计、交互设计、视觉设计于一体的专业用户体验的互联网服务。互联网是当今不可或缺的沟通方式，越来越多的人通过网络搜寻...
                                          </div>
                                      </div>
                                  </div>
                              </li>
                              <li class="iaList">
                                  <div class="iaName">
                                      <span class="iaNameEn">团队介绍</span><span class="iaNameCn">企业概况</span></div>
                                  <div class="iaBody">
                                      <div class="iaPic">
                                          <a href="/abouts/">
                                              <img src="templets/images/124226034_461n.jpg" /></a> <span class="iaPicMask">
                                          </span><span class="iaPicName">团队</span>
                                      </div>
                                      <div class="iaIntro">
                                          <h4 class="iaTitle">
                                              探长网络 —— 理念</h4>
                                          <div class="iaContent">
                                              重庆探长网络科技以良好的商业信誉，完善的服务及深厚的技术力量，以客户服务为中心，专业为客户量身打造客户喜欢的网站平台。客户满意度是我们永恒的追求。我们通过敏锐...
                                          </div>
                                      </div>
                                  </div>
                              </li>
                              <li class="iaList">
                                  <div class="iaName">
                                      <span class="iaNameEn">ABOUT US</span><span class="iaNameCn">企业概况</span></div>
                                  <div class="iaBody">
                                      <div class="iaPic">
                                          <a href="/abouts/">
                                              <img src="templets/images/124226034_461n.jpg" /></a> <span class="iaPicMask">
                                          </span><span class="iaPicName">创业之路</span>
                                      </div>
                                      <div class="iaIntro">
                                          <h4 class="iaTitle">
                                              探长网络科技 —— 文化</h4>
                                          <div class="iaContent">
                                              专门致力于企业网站建设、高端品牌形象设计、交互设计、视觉设计于一体的专业用户体验的互联网服务。互联网是当今不可或缺的沟通方式，越来越多的人通过网络搜寻...
                                          </div>
                                      </div>
                                  </div>
                              </li>
                          </ul>
                          <div class="iaCtrl">
                          </div>
                      </div>
                      <div id="iNews" class="iNews col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <div class="inHeader">
                              <a class="inMore" href="/news/">更多</a> <a class="inNext" href="javascript:void(0);"
                                  title="下一页"></a><a class="inPrev" href="javascript:void(0);" title="上一页"></a>
                              <span class="inNameEn">NEWS</span> <span class="inNameCn">探长网络动态</span>
                          </div>
                          <div class="inQueryWrap">
                              <ul class="inQuery">
                                  <li class="inList">
                                      <div class="inLableDate">
                                          <span class="indDay">10</span><span class="indMonth">Oct.</span></div>
                                      <span class="inDate">2015年10月10日</span> <a href="/news/hor/3580.html" target="_blank"
                                          class="inTitle" title="高通820又跳票 魅族PRO 5性能强到无朋友">高通820又跳票 魅族PRO 5性能强到无朋友</a>
                                      <div class="inIntro">
                                          近日，手机芯片霸主之一的高通又传来跳票消息，其最新研发的骁龙820原定于今年年底出货，</div>
                                  </li>
                                  <li class="inList">
                                      <div class="inLableDate">
                                          <span class="indDay">09</span><span class="indMonth">Oct.</span></div>
                                      <span class="inDate">2015年10月09日</span> <a href="/news/hor/3579.html" target="_blank"
                                          class="inTitle" title="科技史上最糟糕的5个浏览器，你觉得哪个">科技史上最糟糕的5个浏览器，你觉得哪个</a>
                                      <div class="inIntro">
                                          IE使用的网络化多媒体对象技术，一个漏洞百出的浏览器控件系统，极易受到攻击，直到今年，</div>
                                  </li>
                                  <li class="inList">
                                      <div class="inLableDate">
                                          <span class="indDay">09</span><span class="indMonth">Oct.</span></div>
                                      <span class="inDate">2015年10月09日</span> <a href="/news/hor/3578.html" target="_blank"
                                          class="inTitle" title="钱多多：P2P监管并不是万能的！">钱多多：P2P监管并不是万能的！</a>
                                      <div class="inIntro">
                                          P2P网贷的监管时代呼之欲出。不管是行业内还是投资者，无不翘首以盼。许多投资人认为，只</div>
                                  </li>
                                  <li class="inList">
                                      <div class="inLableDate">
                                          <span class="indDay">09</span><span class="indMonth">Oct.</span></div>
                                      <span class="inDate">2015年10月09日</span> <a href="/news/hor/3577.html" target="_blank"
                                          class="inTitle" title="苹果iOS9 Safari浏览器 广告屏蔽插件  那边">苹果iOS9 Safari浏览器 广告屏蔽插件 那边</a>
                                      <div class="inIntro">
                                          长假最后一夜，第四季 《中国好声音》 总决赛落幕，彻底被一个公司洗脑了，优信 二手车 。</div>
                                  </li>
                                  <li class="inList">
                                      <div class="inLableDate">
                                          <span class="indDay">09</span><span class="indMonth">Oct.</span></div>
                                      <span class="inDate">2015年10月09日</span> <a href="/news/hor/3576.html" target="_blank"
                                          class="inTitle" title="屏蔽广告的，也开始照顾广告的感受了">屏蔽广告的，也开始照顾广告的感受了</a>
                                      <div class="inIntro">
                                          那边苹果刚刚开放了 iOS 9 中 Safari 浏览器的Content Blocking（内容屏蔽）接口给开发者，这厢一个</div>
                                  </li>
                                  <li class="inList">
                                      <div class="inLableDate">
                                          <span class="indDay">09</span><span class="indMonth">Oct.</span></div>
                                      <span class="inDate">2015年10月09日</span> <a href="/news/hor/3575.html" target="_blank"
                                          class="inTitle" title="三星推“以旧换新”活动 iPhone 4S等机型可">三星推“以旧换新”活动 iPhone 4S等机型可</a>
                                      <div class="inIntro">
                                          站长之家（Chinaz.com）10月9日消息 近日，外媒消息称， 三星 首次开启了以旧换新活动，包括三</div>
                                  </li>
                                  <li class="inList">
                                      <div class="inLableDate">
                                          <span class="indDay">07</span><span class="indMonth">Oct.</span></div>
                                      <span class="inDate">2015年10月07日</span> <a href="/news/hor/3574.html" target="_blank"
                                          class="inTitle" title="PornHub：人们越来越喜欢在手机上看小电影">PornHub：人们越来越喜欢在手机上看小电影</a>
                                      <div class="inIntro">
                                          新浪科技讯 北京时间10月4日下午消息，Juniper和PornHub近期进行了一项调查，研究了iOS和Android用</div>
                                  </li>
                                  <li class="inList">
                                      <div class="inLableDate">
                                          <span class="indDay">06</span><span class="indMonth">Oct.</span></div>
                                      <span class="inDate">2015年10月06日</span> <a href="/news/hor/3571.html" target="_blank"
                                          class="inTitle" title="马云油画处女作《桃花源》拍出3600万">马云油画处女作《桃花源》拍出3600万</a>
                                      <div class="inIntro">
                                          在香港的苏富比拍卖会上， 马云和曾梵志合作的油画《桃花源》，以130万元港币起拍，经过</div>
                                  </li>
                                  <li class="inList">
                                      <div class="inLableDate">
                                          <span class="indDay">06</span><span class="indMonth">Oct.</span></div>
                                      <span class="inDate">2015年10月06日</span> <a href="/news/hor/3570.html" target="_blank"
                                          class="inTitle" title="国平：将网络合作打造成中美关系新亮点">国平：将网络合作打造成中美关系新亮点</a>
                                      <div class="inIntro">
                                          将网络合作打造成中美关系新亮点 习近平主席访美并出席联合国系列活动成果评述四 作者：国</div>
                                  </li>
                                  <li class="inList">
                                      <div class="inLableDate">
                                          <span class="indDay">05</span><span class="indMonth">Oct.</span></div>
                                      <span class="inDate">2015年10月05日</span> <a href="/news/hor/3573.html" target="_blank"
                                          class="inTitle" title="万能的苹果：库克要改变整个科技行业">万能的苹果：库克要改变整个科技行业</a>
                                      <div class="inIntro">
                                          你知道你现在是在一个企业软件公司举行的会议上的对吧？利维问 库克 ，你的公关团队和你说</div>
                                  </li>
                                  <li class="inList">
                                      <div class="inLableDate">
                                          <span class="indDay">05</span><span class="indMonth">Oct.</span></div>
                                      <span class="inDate">2015年10月05日</span> <a href="/news/hor/3572.html" target="_blank"
                                          class="inTitle" title="北京摩托车“二环十三郎”遭严惩：已被">北京摩托车“二环十三郎”遭严惩：已被</a>
                                      <div class="inIntro">
                                          此前，一段名为北京二环13分钟跑完，最高时速237公里的视频在网络上热传。视频中一个摩托车</div>
                                  </li>
                                  <li class="inList">
                                      <div class="inLableDate">
                                          <span class="indDay">05</span><span class="indMonth">Oct.</span></div>
                                      <span class="inDate">2015年10月05日</span> <a href="/news/hor/3569.html" target="_blank"
                                          class="inTitle" title="万事达：三年时间消灭密码">万事达：三年时间消灭密码</a>
                                      <div class="inIntro">
                                          不管是社交还是购物，互联网给人们带来的便利是无与伦比的，但唯一美中不足的，就是需要</div>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      </div>
                  </div>
                  
               </div>
            </div>
            <!-- Recent work end-->
            <!-- Our Clients Start-->
            
            <!-- Our Clients End -->  
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
                     <section class="col-lg-4 col-md-4 col-xs-12 col-sm-4 footer-four">
                        <h3></h3>
                        <ul id="flickrfeed" class="thumbs"></ul>
                     </section>
                     <section class="col-lg-4 col-md-4 col-xs-12 col-sm-4 footer-four">
                        <h3>1234565</h3>
                        <ul id="flickrfeed" class="thumbs"></ul>
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