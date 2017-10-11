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
      
            
<div id="main">
   <body class="grey">
    <div class="serBody">
        <ul id="serlist" class="serlist">
            <li class="serli">
                <div class="serLeft">
                    <div class="serlIco">
                        <img src="templets/images/2014731350821.png" alt="企业官网建设 创意网站建设 电子商务网站" title="企业官网建设 创意网站建设 电子商务网站"></div>
                    <h2 class="serlTitle">
                        品牌网站建设</h2>
                </div>
                <div class="serRight">
                    <div class="serLabel">
                        <span>企业官网建设 创意网站建设 电子商务网站</span></div>
                    <div class="serSum">
                        网站建设包括网站策划、网页设计、网站功能、网站优化技术、网站内容整理、网站推广、网站评估、网站运营、网站整体优化、网站改版等。网站建设的前期准备包括了前期网站定位、内容差异化、页面沟通等战略性调研，这些确立后，再去注册域名、租用空间、网......</div>
                    <div class="serCon">
                        <p style="font-family: 'Microsoft Yahei'; background-color: #FFFFFF;">
                            网站建设包括网站策划、网页设计、网站功能、网站优化技术、网站内容整理、网站推广、网站评估、网站运营、网站整体优化、网站改版等。网站建设的前期准期网站定位、内容差异化、页面沟通等战略性调研，这些确立后，再去注册域名、租用空间。
                        </p>
                        <p style="font-family: 'Microsoft Yahei'; background-color: #FFFFFF;">
                            <br />
                        </p>
                        <p style="font-family: 'Microsoft Yahei'; background-color: #FFFFFF;">
                            <span style="color: #454545; font-family: 'Microsoft Yahei', 微软雅黑, Tahoma, Verdana, Arial, Helvetica, sans-serif;
                                font-size: 12px; line-height: 24px; background-color: #FFFFFF;">集团网站是大型集团面向新老客户、业界人士及全社会的窗口。集团网站通常将集团日常工作，及营销活动、技术支持、售后服务、物料采购、社会公共关系处理等结合。集团网站涵盖的工作类型多，信息量大，访问群体广，信息更新需要多个部门共同完成。集团网站有利于社会对企业的全面了解。</span><span
                                    style="color: #454545; font-family: 'Microsoft Yahei', 微软雅黑, Tahoma, Verdana, Arial, Helvetica, sans-serif;
                                    line-height: 24px;"> </span>
                        </p>
                        <span style="line-height: 24px; font-size: 14px; color: #454545; font-family: 'Microsoft Yahei', 微软雅黑, Tahoma, Verdana, Arial, Helvetica, sans-serif;
                            background-color: #FFFFFF;"><span style="font-size: 12px;">
                                <h3 style="color: #454545; font-family: 'Microsoft Yahei', 微软雅黑, Tahoma, Verdana, Arial, Helvetica, sans-serif;
                                    font-weight: normal; font-size: 16px; background-color: #FFFFFF;">
                                    <span style="font-size: 12px;"></span><span style="font-size: 12px;">我们始终认为好的设计</span><span
                                        style="font-size: 12px;">是帮助企业展现自己最重要的一步，而网站设计的好坏直接取决于设计师的网页设计与制作经验。本公司网站设计师平均网页设计工作经验达到四年以上，他们拥有丰富的设计经验，有着自己独特的见解，会依据客户的要求，融入自己丰富的经验，给出适合客户的个性化方案和建议，从而为客户网站的完成起到真正的保障。</span>
                                </h3>
                                <p>
                                    <span style="font-size: 12px;">
                                        <br />
                                    </span>
                                </p>
                            </span></span>
                        <p style="font-family: 'Microsoft Yahei'; background-color: #FFFFFF;">
                            <span style="font-size: 12px;">品牌网站着重通过优秀设计，传达其品牌；需要良好的用户体验策划，提升访客体验；并最终提升综合互联网品牌影响力。本类型网站着重展示企业CI、传播品牌文化、提高品牌知名度。对于产品品牌众多的企业，可以单独建立各个品牌的独立网站，以便市场营销策略与网站宣传统一。</span>
                        </p>
                        <p style="font-family: 'Microsoft Yahei'; background-color: #FFFFFF;">
                            <br />
                        </p>
                        <p style="font-family: 'Microsoft Yahei'; background-color: #FFFFFF;">
                            <span style="font-size: 12px;">企业电子商务网站以产品销售为目的，需要对运营情况和用户购买行为数据</span><span style="font-size: 12px;">适时分析，制定个性化的营销网站建设方案</span><span
                                style="font-size: 12px;">进行新品介绍、主题活动、阶段主题推广的最好的形式。我们不但会根据客户需求进行创意</span><span style="font-size: 12px;">制作，更利用社会化媒体营销的优势使Minisite被最大化的传播，达到最佳活动效果。</span><br />
                            <br />
                            <span style="font-size: 12px;">品牌网站着重通过优秀设计，传达其品牌；需要良好的用户体验策划，提升访客体验；并最终提升综合互联网品牌影响力。本类型网站着重展示企业CI、传播品牌文化、提高品牌知名度。对于产品品牌众多的企业，可以单独建立各个品牌的独立网站，以便市场营销策略与网站宣传统一。</span>
                        </p>
                    </div>
                    <a class="serDet" href="javascript:void(0);"><span class="serdLink">查看详情</span> <span
                        class="serdHover">查看详情</span> </a>
                </div>
            </li>
            <li class="serli">
                <div class="serLeft">
                    <div class="serlIco">
                        <img src="templets/images/201473141318.png" alt="iPhone应用开发 Android应用开发 平板应用设计开发"
                            title="iPhone应用开发 Android应用开发 平板应用设计开发"></div>
                    <h2 class="serlTitle">
                        移动APP开发</h2>
                </div>
                <div class="serRight">
                    <div class="serLabel">
                        <span>iPhone应用开发 Android应用开发 平板应用设计开发</span></div>
                    <div class="serSum">
                        移动APP开发准确把握产品定位及传播受众需求，完美实现您的想法，基于iPhone应用定制开发，结合iPhone本身的用户操作习惯设计，对每个界面的操作体验和每一个像素效果进行推敲，创作IOS平台上各种动态交互特效。帮助客户于
                        iPhone用户群体中迅速推广产... 基于Android平台app的设计开发，我们具有优秀的跨平台开发经验，提供符合安卓平台特点的设计及开发服务，多分辨率适配设计的良好操作体验。</div>
                    <div class="serCon">
                        <p style="font-family: 'Microsoft Yahei'; background-color: #FFFFFF;">
                            移动APP开发准确把握产品定位及传播受众需求，完美实现您的想法<br />
                            <br />
                            基于iPhone应用定制开发，结合iPhone本身的用户操作习惯设计，对每个界面的操作体验和每一个像素效果进行推敲，创作IOS平台上各种动态交互特效。帮助客户于
                            iPhone用户群体中迅速推广产品。<br />
                            <br />
                            基于Android平台app的设计开发，我们具有优秀的跨平台开发经验，提供符合安卓平台特点的设计及开发服务，多分辨率适配设计的良好操作体验。<br />
                            <br />
                            凭借丰富的行业软件设计&实施经验，基于PC和手机系统，为您提供高品质界面设计方案以及可供延展开发的设计资源包。<br />
                            <br />
                            完全支持 Html 5，无论客户置身海外,旅途，都可通过手机直接浏览企业网站，方便了解公司服务与产品信息，帮助品牌掌控移动设备。我们最大程度优化移动浏览体验与节约流量。<br />
                            <br />
                            针对平板电脑上的App进行专属的设计开发，按照大屏幕上特有的展现形式和操作习惯，对交互和视觉进行各种创新设计。
                        </p>
                        <p style="font-family: 'Microsoft Yahei'; background-color: #FFFFFF;">
                            <br />
                        </p>
                    </div>
                    <a class="serDet" href="javascript:void(0);"><span class="serdLink">查看详情</span> <span
                        class="serdHover">查看详情</span> </a>
                </div>
            </li>
            <li class="serli">
                <div class="serLeft">
                    <div class="serlIco">
                        <img src="templets/images/2014731422684.png" alt="微信网站 响应式网站 WAP网站" title="微信网站 响应式网站 WAP网站"></div>
                    <h2 class="serlTitle">
                        手机/微网站建设</h2>
                </div>
                <div class="serRight">
                    <div class="serLabel">
                        <span>微信网站 响应式网站 WAP网站</span></div>
                    <div class="serSum">
                        手机网站是指用WML（无线标记语言）编写的专门用于手机浏览的网站，通常以文字信息和简单的图片信息为主。随着向手机智能化方向发展，安装了操作系统和浏览器的手机的功能和电脑是很相似的（这种智能手机也就是"口袋个人电脑"PPC），使用这种手机可以通过GPRS上网可浏览几乎所有的www网站...</div>
                    <div class="serCon">
                        <p style="font-family: 'Microsoft Yahei'; background-color: #FFFFFF;">
                            <p class="p0">
                                手机网站是指用WML（无线标记语言）编写的专门用于手机浏览的网站，通常以文字信息和简单的图片信息为主。随着向手机智能化方向发展，安装了操作系统和浏览器的手机的功能和电脑是很相似的（这种智能手机也就是"口袋个人电脑"PPC），使用这种手机可以通过GPRS上网可浏览几乎所有的www网站，无论网站是不是专门的wap网站，而且还可以安装专门为手机设计的程序，如手机炒股、QQ、MSN等。由于手机的屏幕尺寸和CPU处理能力有限，专门为手机进行优化的网站更为方便用户浏览。这也为网站设计提出了新的要求：网站要适应手机浏览。
                            </p>
                            <p class="p0">
                                <br />
                            </p>
                            <p class="p0">
                                <p class="p0">
                                    手机上网经常会用到WAP这一概念，一些专门为手机浏览的网站往往称为wap网站，wap是不是就是手机网站的意思，手机上网就是浏览wap网站吗？
                                </p>
                                <p class="p0">
                                    <br />
                                </p>
                                <p class="p0">
                                    WAP是英文Wireless Application Protocol的缩写，意思是无线应用协议。WAP是一种GPRS应用模式，但并不是手机上网的唯一模式，其实WAP本身和手机网站并不是一回事，手机上网也不仅仅是浏览wap网站。
                                </p>
                                <p class="p0">
                                    <br />
                                </p>
                                <p class="p0">
                                    <p class="p0">
                                        什么是响应式网站
                                    </p>
                                    <p class="p0">
                                        不同设备，同一个后台，网站数据同步更新！
                                    </p>
                                    <p class="p0" style="text-indent: 18pt;">
                                        响应式网站：在网站开发过程中根据用户行为以及设备环境进行相应的操作和布局，使网站可针对不同平台、尺寸和定向进行智能化调整，实现了在智能手机和平板电脑等多种智能移动终端浏览效果的流畅，防止页面变形，并可在任一浏览终端进行网站数据的同步更新。
                                    </p>
                                    <p class="p0" style="text-indent: 18pt;">
                                    </p>
                                    <p class="p0">
                                        响应式网站的优势
                                    </p>
                                    <p class="p0">
                                    </p>
                                    <p class="p0">
                                        1.响应式网站可兼容多个智能移动浏览终端，并自动适应其屏幕尺寸，风格统一，增加网站辨识度。
                                    </p>
                                    <p class="p0">
                                        2.响应式网站所用的后台及数据库是统一的，即在电脑PC端编辑了网站内容后，手机、PAD等智能移动浏览终端能够同步显示修改之后的内容。网站数据的管理能够更加及时和便捷。
                                    </p>
                                    <p class="p0">
                                        3.响应式网站中的特效能够更好地丰富手机等智能移动终端浏览的效果，提升网站技术品质。
                                    </p>
                                    <p class="p0">
                                        4.响应式网站能够更好地发掘潜在客户群体，给网站带来更多访问流量。
                                    </p>
                                    <p class="p0">
                                        <br />
                                    </p>
                                    <p class="p0">
                                        <p class="p0">
                                            wap网站，即WAP(Wireless Application Protocol)是无线应用协议的缩写，一种实现移动电话与互联网结合的应用协议标<span style="line-height: 1.5;">准WAP是全球统一且开放的标准，最新的WAP版本是WAP论坛于1999年12月发布的。WAP论坛于99年11月首次公布了WAP标准的</span>
                                        </p>
                                        <p class="p0">
                                            结构，在1998年5月就推出了WAP协议的1.0版。
                                        </p>
                                    </p>
                                </p>
                            </p>
                        </p>
                        <p style="font-family: 'Microsoft Yahei'; background-color: #FFFFFF;">
                            <br />
                        </p>
                    </div>
                    <a class="serDet" href="javascript:void(0);"><span class="serdLink">查看详情</span> <span
                        class="serdHover">查看详情</span> </a>
                </div>
            </li>
            <li class="serli">
                <div class="serLeft">
                    <div class="serlIco">
                        <img src="templets/images/2014731438471.png" alt="网站改版及修改 域名注册 空间服务器租用" title="网站改版及修改 域名注册 空间服务器租用"></div>
                    <h2 class="serlTitle">
                        网站运营维护</h2>
                </div>
                <div class="serRight">
                    <div class="serLabel">
                        <span>网站改版及修改 域名注册 空间服务器租用</span></div>
                    <div class="serSum">
                        网站运营任何一项工程都需后期精心维护才能发挥持久价值，网站也是如此添加页面维护（部分文字修改）、制作漂浮窗口、制作弹窗广告、网页垃圾信息清理、新增页面、Flash
                        Banner制作、Banner制作、更新JS轮换 Banner、信息维护、产品维护、资料翻译、文章撰写、软文修改、资料上传、信息编辑、发布产品、图片、视频...</div>
                    <div class="serCon">
                        <p style="font-family: 'Microsoft Yahei'; background-color: #FFFFFF;">
                            <strong>网站运营</strong>
                        </p>
                        <p style="font-family: 'Microsoft Yahei'; background-color: #FFFFFF;">
                            <b>
                                <br />
                            </b>任何一项工程都需后期精心维护才能发挥持久价值，网站也是如此<br />
                            <br />
                            <br />
                            <strong>页面内容修改、添加</strong><br />
                            <br />
                            页面维护（部分文字修改）、制作漂浮窗口、制作弹窗广告、网页垃圾信息清理、新增页面、Flash Banner制作、Banner制作、更新JS轮换 Banner、信息维护、产品维护、资料翻译、文章撰写、软文修改、资料上传、信息编辑、发布产品、图片、视频、动画优化及发布<br />
                            <br />
                            <strong>程序功能修改和维护</strong><br />
                            <br />
                            数据库导入导出、数据库备份、数据后台维护、网站紧急恢复 、故障恢复、查杀、清理木马后门、清理挂马、防止黑链、安全防护<br />
                            <br />
                            邮箱管理权在公司，保证重要业务资料不丢失；统一的邮箱账号后缀，有利于塑造企业形象；使用全球知名的MIRAPOINT超级反垃圾反病毒邮件系统，可靠性高达99.999%，免除垃圾、病毒邮件对您的烦扰。
                        </p>
                        <p style="font-family: 'Microsoft Yahei'; background-color: #FFFFFF;">
                            <br />
                        </p>
                    </div>
                    <a class="serDet" href="javascript:void(0);"><span class="serdLink">查看详情</span> <span
                        class="serdHover">查看详情</span> </a>
                </div>
            </li>
            <li class="serli">
                <div class="serLeft">
                    <div class="serlIco">
                        <img src="templets/images/201473152141.png" alt="企业OA系统 CRM客户管理 ERP系统" title="企业OA系统 CRM客户管理 ERP系统"></div>
                    <h2 class="serlTitle">
                        软件开发</h2>
                </div>
                <div class="serRight">
                    <div class="serLabel">
                        <span>企业OA系统 CRM客户管理 ERP系统</span></div>
                    <div class="serSum">
                        在这个竞争激烈的时代，信息化的重要性空前突出；大量的企业开始注重利用信息化手段优化，企业管理、增强企业核心竞争力。企业不仅要通过降低成本提高效率来保障企业利润，更需要在信息化，建设中结合业务发展不断创新；通过规范管理、知识整合及传递、从提高单一效率到通过协同提高企业整体效率等都是...</div>
                    <div class="serCon">
                        <p style="font-family: 'Microsoft Yahei'; background-color: #FFFFFF;">
                            在这个竞争激烈的时代，信息化的重要性空前突出；大量的企业开始注重利用信息化手段优化，企业管理、增强企业核心竞争力。企业不仅要通过降低成本提高效率来保障企业利润，更需要在信息化，建设中结合业务发展不断创新；通过规范管理、知识整合及传递、从提高单一效率到通过协同提高企业整体效率等都是当前企业家重点考虑的问题。而通过网络化的协同信息化系统来改善管理运作，是其中之一必要的解决方案。<br />
                            <br />
                            客户管理的主要功能是监控销售过程，组织和协调销售团队，记录和分析销售数据，保存和查询客户资料。它通过不同的系统模块实现了对企业销售、营销、服务部门中对客户关系管理的整体流程解决方案。我们结合了数百家企业的各种需求，经过严格的系统分析和测试后研制开发的专业中小企业CRM系统。无论是贸易，行业、服务行业或生产企业，CRM系统都能满足您的。<br />
                            <br />
                            <br />
                            MANRO人力资源管理系统包括人员档案、人事合同、考勤管理、人员异动、工资方案、工资单管理以及基础设置等，企业运用 MANRO人力资源管理系统，对企业的人力资源管理方方面面进行分析、规划、实施、调整，提高企业人力资源管理水平，使人力资源更有效的服务于企业。<br />
                            <br />
                            <br />
                            一般的大中型企业的ERP项目，不但需要良好的管理基础、人员素质，而且动辄需要几十万、上百万，甚至几百万、上千万的投入购买ERP系统及其服务。这些都是中小企业所无法承受的。
                            难道中小型企业就不能搞ERP了吗？我们根据自身多年服务中小企业信息化的经验，推出了一套行之有效的解决方案，并取得了中小企业的广泛认同。
                        </p>
                        <p style="font-family: 'Microsoft Yahei'; background-color: #FFFFFF;">
                            <br />
                        </p>
                    </div>
                    <a class="serDet" href="javascript:void(0);"><span class="serdLink">查看详情</span> <span
                        class="serdHover">查看详情</span> </a>
                </div>
            </li>
            <li class="serli">
                <div class="serLeft">
                    <div class="serlIco">
                        <img src="templets/images/201473157284.png" alt="微信营销推广 SEO优化 产品推广" title="微信营销推广 SEO优化 产品推广"></div>
                    <h2 class="serlTitle">
                        网站优化推广</h2>
                </div>
                <div class="serRight">
                    <div class="serLabel">
                        <span>微信营销推广 SEO优化 产品推广</span></div>
                    <div class="serSum">
                        策略定位 创意策划 活动执行 效果评估在品牌社会化的浪潮下，企业不可能再像以往传统广告那样单向喊话的与消费者沟通，而需要与消费者进行平等的面对面的交流。这种交流实际上正是社交媒体的官方账号所扮演的重要角色，所以官方账号的运营和维护效果将直接影响着企业在社交网络上的品牌价值和在消费者心...</div>
                    <div class="serCon">
                        <p style="font-family: 'Microsoft Yahei'; background-color: #FFFFFF;">
                            根据社会热点或企业需求，策划和创意各种微信平台的活动，如促销活动、地理位置活动等，提升官方微信的关注度，促进销售和品牌影响力。<br />
                            <br />
                            <br />
                            策略定位 创意策划 活动执行 效果评估在品牌社会化的浪潮下，企业不可能再像以往传统广告那样单向喊话的与消费者沟通，而需要与消费者进行平等的面对面的交流。这种交流实际上正是社交媒体的官方账号所扮演的重要角色，所以官方账号的运营和维护效果将直接影响着企业在社交网络上的品牌价值和在消费者心中的品牌地位。<br />
                            <br />
                            <br />
                            结合产品特性与网民兴趣点，运用创新的活动形式吸引受众产生兴趣；参与者在遵守活动设定的前提下，引导、调动他们的创意能力与其他人娱乐、交流；在轻松环境中理解产品内涵、品牌理念，从而产生对产品、品牌的高度好感甚至崇拜；从而引发长期的对于朋友、亲属等有亲密关系的角色，进行的主动口碑传播。<br />
                            <br />
                            搜索优化是让网站在进行搜索关键字中获得较好排名，提高网站曝光率，从而赢得更多潜在客户。迈若将客户自身特性及要求，以最小的投入，获最大的来自搜索引擎的访问量。
                        </p>
                        <p style="font-family: 'Microsoft Yahei'; background-color: #FFFFFF;">
                            <br />
                        </p>
                    </div>
                    <a class="serDet" href="javascript:void(0);"><span class="serdLink">查看详情</span> <span
                        class="serdHover">查看详情</span> </a>
                </div>
            </li>
        </ul>
    </div>
    <div id="serDetaile" class="serDetaile">
        <a href="javascript:void(0);" class="sdCloseBtn"></a>
        <h4 class="sdTitle">
            高端品牌网站建设</h4>
        <div class="sdContent">
            <div class="sdContentInner">
            </div>
        </div>
    </div>
    <div id="mask" class="mask">
    </div>
    </div>
 
</body>
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