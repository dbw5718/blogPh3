<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html  lang="zh-CN" prefix="og: http://ogp.me/ns#">
<head>
    <title>文章页面</title>
   
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    
    <meta charset="UTF-8" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


      <link href='/blog/Public/Home/style/style.css' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" type="text/css" href="/blog/Public/Home/style/font.css">
      <script type="text/javascript" src="/blog/Public/Home/style/jquery-1.11.3.min.js"></script>



  
           


		<style type="text/css">
			img.wp-smiley,
			img.emoji {
				display: inline !important;
				border: none !important;
				box-shadow: none !important;
				height: 1em !important;
				width: 1em !important;
				margin: 0 .07em !important;
				vertical-align: -0.1em !important;
				background: none !important;
				padding: 0 !important;
			}
		</style>
   
</head>

<body class="p-blog zh">
<!-- Desktop Header -->
<!-- 导航啦开始 -->
    <header>
        <div class="header">
            <div class="logo">
                <div class="title">
                    <a href="#">
                        <img src="https://blog.360totalsecurity.com/wp-content/themes/360TotalSecurity/img/blog_logo.png" alt="360 Total Security Blog Logo" title="360 Total Security Blog Logo" width="126" height="45" />
                        <h1>博客222</h1>
                    </a>
                </div>
               
            </div>
            <nav class="navbar" role="navigation">
                <ul class="nav">
                    <!-- <li><a class="active" href="#">最新文章</a></li> -->
                    <?php if(is_array($navers)): $i = 0; $__LIST__ = $navers;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a  href="/blog/index.php/Home/<?php if($vo['cate_id'] == 12): ?>index<?php elseif($vo['cate_id'] == 11): ?>article<?php elseif($vo['cate_id'] == 10): ?>about<?php endif; ?>/index"
                    <?php if($cateids['cate_id'] == $vo['cate_id']): ?>class="active"<?php endif; ?>
                    ><?php echo ($vo["cate_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                    <!-- <li><a href="#">公司新闻</a></li>    -->             
                </ul>
            </nav>
        </div>
    </header>

    <div class="anchor-bar">
        <ul>
            <li class="active"><a href="#">最新文章</a></li>
            <li><a href="#">产品相关</a></li>
            <li><a href="#">公司新闻</a></li>            
            <li>
               <a class="download" data-ga="download|anchor-bar|ts|" href="#">免费下载</a>
            </li>
        </ul>
    </div>








<div class="body">
<div class="wrapper cls">
    <div class="main">

        <div class="list">
          <ul>
            <li>
	          	<h1 class="title"><a href="#" ><?php echo ($firsts["f_title"]); ?></a></h1>
				<div class="info"><span><?php echo (date("Y-m-d",$firsts["time"])); ?></span></div>
			<!-- 	文章内容 -->
        <?php echo ($firsts["f_content"]); ?>



      <!--  文章内容 -->
				
          	</li>
                 
          </ul>
        </div>
      </volist>
    </div>


 <div class="sticky-content-spacer">
      <div id="sidebar" class="side">
        <!-- Desktop Sidebar -->

<div class="widget-download">
        <div class="free-download">
      <img class="ts-logo" width="228" src="https://blog.360totalsecurity.com/wp-content/themes/360TotalSecurity/img/360_logo_wide.png" alt="360 Total Security" />
      <a class="title" data-ga="download|sidebar|ts|360 Total Security 博客" target="_blank" title="免费下载 360 Total Security" href="#">免费下载</a>
      <span class="os">适用于Windows 10/8.1/8/7/Vista/XP (32,64bit)</span>
    </div>
</div>



<!-- 热门文章 -->
<div class="pop">
    <div class="title">热门文章</div>
    <ul>
      <?php if(is_array($arem)): $i = 0; $__LIST__ = $arem;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
           <div class="thumb"><a href="/blog/index.php/Home/article/article/id/<?php echo ($vo["a_id"]); ?>">
            <img width="1350" height="675" src="/blog/<?php echo ($vo["a_pic"]); ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image"  /></a>
            </div>
            <h2 class="topic"><a href="/blog/index.php/Home/article/article/id/<?php echo ($vo["a_id"]); ?>"><?php echo ($vo["a_title"]); ?></a></h2>
            <div class="clear"></div>
       </li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div>
<!-- 热门文章end -->

<div class="fb-page" data-href="https://www.facebook.com/360safe" data-width="293" data-height="320" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/360safe"><a href="https://www.facebook.com/360safe">360 Total Security</a></blockquote></div>
</div>
      </div>
    </div>
    	<div class="clear"></div>
</div>
</div><!-- 
                <div class="pagebar">
      <a href='https://blog.360totalsecurity.com/zh-cn/' class='active'>1</a><a href='https://blog.360totalsecurity.com/zh-cn/page/2/'>2</a><a href="https://blog.360totalsecurity.com/zh-cn/page/2/" class="next icon alt">></a>    </div> -->
                        



<footer>
    <div class = "footer">
        <div class="row">
            <dl>
                <dt>产品</dt>
                    <dd>
                       <a target="_blank" href="#">360 Total Security</a>
                    </dd>
                        <dd>
                            <a target="_blank" href="//www.360totalsecurity.com/zh-cn/features/360-total-security-essential/">360 Total Security Essential</a>
                        </dd>
                        <dd>
                            <a target="_blank" href="//www.360totalsecurity.com/zh-cn/features/360-total-security-mac/">360 Total Security for Mac</a>
                        </dd>
                        <dd>
                            <a target="_blank" href="http://360safe.com/mobile-security.html" rel="nofollow">360 Security for Android</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>新闻</dt>
                        <dd><a href="https://blog.360totalsecurity.com/zh-cn/category/%e4%ba%a7%e5%93%81%e7%9b%b8%e5%85%b3/">产品相关</a></dd><dd><a href="https://blog.360totalsecurity.com/zh-cn/category/%e5%85%ac%e5%8f%b8%e6%96%b0%e9%97%bb/">公司新闻</a></dd>                    </dl>
                    <dl>
                        <dt>联系我们</dt>
                        <dd>
                            <a class="email-link" href="mailto:support@360overseas.com">support@360overseas.com</a>
                        </dd>
                        <dd>
                            <a href="//www.360totalsecurity.com/zh-cn/about/">Qihoo 360</a>
                        </dd>
                    </dl>
                </div>
                
                <div class="row">
                    <span class="copyright">© 2014 - 2017 Qihu 360 Software Co. Limited</span>
                </div>
            </div>
        </footer>
    
      
     
        <script>
        $(function($){
            $('[data-ga]').click(function() {
                var e = $(this).attr('data-ga').split('|');
                ga('send', 'event', e[0], e[1], e[2]);
            });


        });

        $(function() {
          'use strict';

          var $window = $(window);

          $window.scroll(checkAnchorBar);

          checkAnchorBar();

          function checkAnchorBar() {
            var $anchorBar = $('.anchor-bar');
            var scrollTop = $window.scrollTop();

            var $anchorStartElem = $('header');
            var attachedClass = 'attached';

            var threshold = $anchorStartElem.offset().top + $anchorStartElem.height();

            if (!$anchorBar.hasClass(attachedClass) && scrollTop >= threshold) {
              $anchorBar.addClass(attachedClass);
            } else if ($anchorBar.hasClass(attachedClass) && scrollTop < threshold) {
              $anchorBar.removeClass(attachedClass);
            }
          }
        });
    </script>
    
    
    <div id="fb-root"></div>

   
    </body>
</html>