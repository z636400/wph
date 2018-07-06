
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>『豪情』后台管理</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="/static/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/static/admin/css/main.css"/>
    <script type="text/javascript" src="/static/admin/js/libs/modernizr.min.js"></script>
    <script type="text/javascript" src="/static/admin/js/libs/jquery-1.8.3.min.js"></script>

</head>
<body>
     
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="index.html">首页</a></li>
                <li><a href="http://www.mycodes.net/" target="_blank">网站首页</a></li>
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
                    <a href="#"><i class="icon-font">&#xe017;</i>网站配置</a>
                    <ul class="sub-menu">
                        <li><a href="/admin/config/index"><i class="icon-font">&#xe017;</i>显示配置</a></li>
                        <li><a href="/admin/config/add"><i class="icon-font">&#xe005;</i>修改配置</a></li>
                        <li><a href="/admin/banner/add"><i class="icon-font">&#xe006;</i>banner添加</a></li>
                        <li><a href="/admin/banner/index"><i class="icon-font">&#xe006;</i>banner管理</a></li>
                    </ul>
                </li>
                 <li>
                    <a href="#"><i class="icon-font">&#xe017;</i>网站配置</a>
                    <ul class="sub-menu">
                        <li><a href="design.html"><i class="icon-font">&#xe017;</i>显示配置</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe005;</i>修改配置</a></li>
                      
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="system.html"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe037;</i>清理缓存</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
   @section('sidebar')
    @show
    

    
    <!--/main-->
      

</div>
</body>
</html>