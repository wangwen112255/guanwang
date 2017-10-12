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
                           <a <?php if((CONTROLLER_NAME) == "Recruit"): ?>id='current'<?php endif; ?>  href="<?php echo U('News/index');?>" class="sf-with-ul">
                           企业动态 
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
      
            
  <div class="nqBody">
        <div id="nqType" class="nqType">
            <ul id="nqtWrap" class="nqtWrap">
                <li><a href='/news/comp/'>公司动态</a></li>
                <li><a href='/news/hor/'>行业资讯</a></li>
                <li><a href='/news/webmaster/'>站长专栏</a></li>
                <li><a href='/news/chuangyezhilu/'>创业之路</a></li>
                <li><a href='/news/mobile/'>移动互联</a></li>
            </ul>
            <span class="nqpNameCn">移动互联</span> <span class="nqpNameEn">NEWS</span>
        </div>
        <ul id="nqlWrap" class="nqlWrap">
            <li class="nqli">
                <div class="nqlDate">
                    <span class="nqldDay">12</span><span class="nqldMy">2015-09</span></div>
                <a class="nqlTitle" href="news_show.html" target="_blank">iPad Pro为谁而生？</a>
                <div class="nqlSum">
                    如果你想完成某项工作，你需要一台笔记本。如果你只想看电影和玩游戏，那么一台平板电脑就够了。这样的规则已经持续了一段时间，不过似乎到了要变革的时候。...</div>
                <div class="nqlDetDate">
                    2015-09-12</div>
            </li>
            <li class="nqli">
                <div class="nqlDate">
                    <span class="nqldDay">12</span><span class="nqldMy">2015-09</span></div>
                <a class="nqlTitle" href="news_show.html" target="_blank">高通：中国将一批实现5G</a>
                <div class="nqlSum">
                    我服务每家公司都在比较有挑战的时候。翻开自己过往的从业经历，孟檏也许觉得自己天生就是一个救火队员。2002年孟檏加入高通时，他的任务是推...</div>
                <div class="nqlDetDate">
                    2015-09-12</div>
            </li>
            <li class="nqli">
                <div class="nqlDate">
                    <span class="nqldDay">12</span><span class="nqldMy">2015-09</span></div>
                <a class="nqlTitle" href="news_show.html" target="_blank">欢呼！老iPhone也能有3D Touch</a>
                <div class="nqlSum">
                    3D Touch堪称一项革命性的触摸技术，但是因为软硬件上的限制，它是iPhone 6S、iOS 9的专利等等，真的这样吗？...</div>
                <div class="nqlDetDate">
                    2015-09-12</div>
            </li>
            <li class="nqli">
                <div class="nqlDate">
                    <span class="nqldDay">12</span><span class="nqldMy">2015-09</span></div>
                <a class="nqlTitle" href="news_show.html" target="_blank">逼死处女座 中高端手机查看“体质”指南</a>
                <div class="nqlSum">
                    随着手机处理器和性能的飞速发展，高性能的处理器也成了不少玩家所追求的一个重要元素。而不少玩家都会提到手机处理器的“体质”问题，那体质究竟代表什么，我们又如何查看...</div>
                <div class="nqlDetDate">
                    2015-09-12</div>
            </li>
            <li class="nqli">
                <div class="nqlDate">
                    <span class="nqldDay">12</span><span class="nqldMy">2015-09</span></div>
                <a class="nqlTitle" href="news_show.html" target="_blank">玩性价比：搭载i7处理器的神舟K660E仅需5199元</a>
                <div class="nqlSum">
                    性价比一词相信很多人都并不陌生，最近几年智能手机行业一直在玩价格战，各大厂商在性价比方面厮杀的非常厉害，而性价比这一特性在笔记本电脑行业同样适用，用户在购买电脑...</div>
                <div class="nqlDetDate">
                    2015-09-12</div>
            </li>
            <li class="nqli">
                <div class="nqlDate">
                    <span class="nqldDay">12</span><span class="nqldMy">2015-09</span></div>
                <a class="nqlTitle" href="news_show.html" target="_blank">只想做“不完美”的高端手机 魅族是要干啥？</a>
                <div class="nqlSum">
                    在过去短短的一年时间内，魅族今年手机产品的销量较去年增长400%。这产品更新速度和销量增长是魅族品牌过去从来没有出现过的，甚至在同期的国内手机市场唯一一家能做到的。...</div>
                <div class="nqlDetDate">
                    2015-09-12</div>
            </li>
            <li class="nqli">
                <div class="nqlDate">
                    <span class="nqldDay">12</span><span class="nqldMy">2015-09</span></div>
                <a class="nqlTitle" href="news_show.html" target="_blank">老iPhone也能有3D Touch?</a>
                <div class="nqlSum">
                    3DTouch堪称一项革命性的触摸技术，但是因为软硬件上的限制，它是iPhone6S、iOS9的专利……等等，真的这样吗？Cydia开发者EliasLimneos刚刚公布了一段视频，展示了在iOS8上...</div>
                <div class="nqlDetDate">
                    2015-09-12</div>
            </li>
            <li class="nqli">
                <div class="nqlDate">
                    <span class="nqldDay">12</span><span class="nqldMy">2015-09</span></div>
                <a class="nqlTitle" href="news_show.html" target="_blank">“玫瑰金色”是什么颜色 它是怎么来的？</a>
                <div class="nqlSum">
                    土豪金已经不再是热门话题了，现在大家开口闭口聊的都是玫瑰金，一大波妹子们已经做好了点击购买玫瑰金iPhone6s的准备，当然可能也有很多人要买的是玫瑰金的AppleWatch。不...</div>
                <div class="nqlDetDate">
                    2015-09-12</div>
            </li>
            <li class="nqli">
                <div class="nqlDate">
                    <span class="nqldDay">12</span><span class="nqldMy">2015-09</span></div>
                <a class="nqlTitle" href="news_show.html" target="_blank">美银美林：iPhone 6s物料成本234美元</a>
                <div class="nqlSum">
                    美银美林周五发布报告称，苹果新款iPhone6s的物料成本约为234美元。报告显示，iPhone6s中成本最高的一部分是半导体器件，总成本为127美元。其中，用于支持移动通信网络的半...</div>
                <div class="nqlDetDate">
                    2015-09-12</div>
            </li>
            <li class="nqli">
                <div class="nqlDate">
                    <span class="nqldDay">12</span><span class="nqldMy">2015-09</span></div>
                <a class="nqlTitle" href="news_show.html" target="_blank">好壮观！慢镜头下观察火柴头燃烧爆炸</a>
                <div class="nqlSum">
                    ......</div>
                <div class="nqlDetDate">
                    2015-09-12</div>
            </li>
            <li class="nqli">
                <div class="nqlDate">
                    <span class="nqldDay">12</span><span class="nqldMy">2015-09</span></div>
                <a class="nqlTitle" href="news_show.html" target="_blank">牛奶和洗洁精的神奇化学反应，好神奇！</a>
                <div class="nqlSum">
                    ......</div>
                <div class="nqlDetDate">
                    2015-09-12</div>
            </li>
            <li class="nqli">
                <div class="nqlDate">
                    <span class="nqldDay">12</span><span class="nqldMy">2015-09</span></div>
                <a class="nqlTitle" href="news_show.html" target="_blank">将磁铁丢入金属泥后，太不可思议了！</a>
                <div class="nqlSum">
                    ......</div>
                <div class="nqlDetDate">
                    2015-09-12</div>
            </li>
        </ul>
        <img src="/templets/lanse/images/noInfo.png" style="display: none; margin: 0 auto;" />
        <div id="pageInfo" class="pagination">
            <div class="pgWrap">
                <div class="plRounded">
                </div>
                <div class="prRounded">
                </div>
                <div class="pgQuery">
                    <div id="pager1">
                        <span class="curr" style="margin-right: 5px;">1</span> <a href='list_14_2.html' style="margin-right: 5px;">
                            2</a> <a href='list_14_3.html' style="margin-right: 5px;">3</a> <a href='list_14_4.html'
                                style="margin-right: 5px;">4</a> <a href='list_14_5.html' style="margin-right: 5px;">
                                    5</a> <a href='list_14_6.html' style="margin-right: 5px;">6</a> <a href='list_14_7.html'
                                        style="margin-right: 5px;">7</a> <a href='list_14_8.html' style="margin-right: 5px;">
                                            8</a> <a href='list_14_9.html' style="margin-right: 5px;">9</a>
                        <a href='list_14_10.html' style="margin-right: 5px;">10</a> <a href='list_14_11.html'
                            style="margin-right: 5px;">11</a>
                    </div>
                </div>
            </div>
        </div>
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
      
<script type="text/javascript" src="/tepstatic/js/scrollbar.min.js"></script>
<script type="text/javascript" src="/tepstatic/js/common.js"></script>

  
  </body>
</html>