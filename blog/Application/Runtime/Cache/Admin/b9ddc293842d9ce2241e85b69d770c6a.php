<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>

    <link rel="stylesheet" type="text/css" href="/blog/Public/Admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/blog/Public/Admin/css/main.css"/>
    <script type="text/javascript" src="/blog/Public/Admin/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="index.html">首页</a></li>
                <li><a href="#" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="#">管理员</a></li>
                <li><a href="#">修改密码</a></li>
                <li><a href="#">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="/blog/index.php/Admin/Cate/lst"><i class="icon-font">&#xe008;</i>栏目管理</a></li>
                        <!-- <li><a href="design.html"><i class="icon-font">&#xe005;</i>博文管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe006;</i>分类管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe004;</i>留言管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe012;</i>评论管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe052;</i>友情链接</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe033;</i>广告管理</a></li> -->
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="/blog/index.php/Admin/First/lst"><i class="icon-font">&#xe017;</i>首页管理</a></li>
                        <li><a href="/blog/index.php/Admin/Article/lst"><i class="icon-font">&#xe037;</i>文章管理</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe046;</i>关于管理</a></li>
                        <!-- <li><a href="system.html"><i class="icon-font">&#xe045;</i>数据还原</a></li> -->
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->

    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">首页文章管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="/jscss/admin/design/index" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="120">选择分类:</th>
                            <td>
                                <select name="search-sort" id="">
                                    <option value="">全部</option>
                                    <option value="19">精品界面</option><option value="20">推荐界面</option>
                                </select>
                            </td>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="/blog/index.php/Admin/First/add"><i class="icon-font"></i>新增首页文章</a>
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                        <a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i>更新排序</a>
                    </div>
                </div>
                <div class="result-content">

                    <table class="result-tab" width="100%">
                        <tr>
                            
                          
                            <th>ID</th>
                            <th>标题</th>
                            <th>图片</th>
                            <th>操作</th>
                        </tr>
                        <?php if(is_array($firsts)): $i = 0; $__LIST__ = $firsts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            
                            
                            <td><?php echo ($vo["f_id"]); ?></td>
                            <td><?php echo ($vo["f_title"]); ?></td>
                            <td>
                                <?php if($vo['f_pic'] != null): ?><img src="/blog<?php echo ($vo["pic"]); ?>" height="30">
                                <?php else: ?>
                                暂无图片<?php endif; ?>
                            </td>
                            
                            <td>
                                <a class="link-update" href="/blog/index.php/Admin/First/edit/id/<?php echo ($vo["f_id"]); ?>">修改</a>
                                <a class="link-del" href="/blog/index.php/Admin/First/del/id/<?php echo ($vo["f_id"]); ?>"  onclick="return
                                confirm('你要删除栏目 <?php echo ($vo["f_title"]); ?> 吗？');">删除</a>
                                
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                
                    <div class="list-page"> 2 条 1/1 页</div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>