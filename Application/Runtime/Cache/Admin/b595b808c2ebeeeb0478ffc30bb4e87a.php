<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>畅哲网站管理后台</title>

    <!-- bootstrap - css -->
    <link href="/Public/BJUI/themes/css/bootstrap.css" rel="stylesheet">
    <!-- core - css -->
    <link href="/Public/BJUI/themes/css/style.css" rel="stylesheet">
    <link href="/Public/BJUI/themes/purple/core.css" id="bjui-link-theme" rel="stylesheet">
    <!-- plug - css -->
    <link href="/Public/BJUI/plugins/kindeditor_4.1.10/themes/default/default.css" rel="stylesheet">
    <link href="/Public/BJUI/plugins/colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="/Public/BJUI/plugins/niceValidator/jquery.validator.css" rel="stylesheet">
    <link href="/Public/BJUI/plugins/bootstrapSelect/bootstrap-select.css" rel="stylesheet">
    <link href="/Public/BJUI/themes/css/FA/css/font-awesome.min.css" rel="stylesheet">
    <!--[if lte IE 7]>
    <link href="/Public/BJUI/themes/css/ie7.css" rel="stylesheet">
    <![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lte IE 9]>
    <script src="/Public/BJUI/other/html5shiv.min.js"></script>
    <script src="/Public/BJUI/other/respond.min.js"></script>
    <![endif]-->
    <!-- jquery -->
    <script src="/Public/BJUI/js/jquery-1.7.2.min.js"></script>
    <script src="/Public/BJUI/js/jquery.cookie.js"></script>
    <!--[if lte IE 9]>
    <script src="/Public/BJUI/other/jquery.iframe-transport.js"></script>
    <![endif]-->
    <!-- BJUI.all 分模块压缩版 -->
    <script src="/Public/BJUI/js/bjui-all.js"></script>
    <!-- 以下是B-JUI的分模块未压缩版，建议开发调试阶段使用下面的版本 -->
    <!--
    <script src="BJUI/js/bjui-core.js"></script>
    <script src="BJUI/js/bjui-regional.zh-CN.js"></script>
    <script src="BJUI/js/bjui-frag.js"></script>
    <script src="BJUI/js/bjui-extends.js"></script>
    <script src="BJUI/js/bjui-basedrag.js"></script>
    <script src="BJUI/js/bjui-slidebar.js"></script>
    <script src="BJUI/js/bjui-contextmenu.js"></script>
    <script src="BJUI/js/bjui-navtab.js"></script>
    <script src="BJUI/js/bjui-dialog.js"></script>
    <script src="BJUI/js/bjui-taskbar.js"></script>
    <script src="BJUI/js/bjui-ajax.js"></script>
    <script src="BJUI/js/bjui-alertmsg.js"></script>
    <script src="BJUI/js/bjui-pagination.js"></script>
    <script src="BJUI/js/bjui-util.date.js"></script>
    <script src="BJUI/js/bjui-datepicker.js"></script>
    <script src="BJUI/js/bjui-ajaxtab.js"></script>
    <script src="BJUI/js/bjui-datagrid.js"></script>
    <script src="BJUI/js/bjui-tablefixed.js"></script>
    <script src="BJUI/js/bjui-tabledit.js"></script>
    <script src="BJUI/js/bjui-spinner.js"></script>
    <script src="BJUI/js/bjui-lookup.js"></script>
    <script src="BJUI/js/bjui-tags.js"></script>
    <script src="BJUI/js/bjui-upload.js"></script>
    <script src="BJUI/js/bjui-theme.js"></script>
    <script src="BJUI/js/bjui-initui.js"></script>
    <script src="BJUI/js/bjui-plugins.js"></script>
    -->
    <!-- plugins -->
    <!-- swfupload for uploadify && kindeditor -->
    <script src="/Public/BJUI/plugins/swfupload/swfupload.js"></script>
    <!-- kindeditor -->
    <script src="/Public/BJUI/plugins/kindeditor_4.1.10/kindeditor-all.min.js"></script>
    <script src="/Public/BJUI/plugins/kindeditor_4.1.10/lang/zh_CN.js"></script>
    <!-- colorpicker -->
    <script src="/Public/BJUI/plugins/colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- ztree -->
    <script src="/Public/BJUI/plugins/ztree/jquery.ztree.all-3.5.js"></script>
    <!-- nice validate -->
    <script src="/Public/BJUI/plugins/niceValidator/jquery.validator.js"></script>
    <script src="/Public/BJUI/plugins/niceValidator/jquery.validator.themes.js"></script>
    <!-- bootstrap plugins -->
    <script src="/Public/BJUI/plugins/bootstrap.min.js"></script>
    <script src="/Public/BJUI/plugins/bootstrapSelect/bootstrap-select.min.js"></script>
    <script src="/Public/BJUI/plugins/bootstrapSelect/defaults-zh_CN.min.js"></script>
    <!-- icheck -->
    <script src="/Public/BJUI/plugins/icheck/icheck.min.js"></script>
    <!-- dragsort -->
    <script src="/Public/BJUI/plugins/dragsort/jquery.dragsort-0.5.1.min.js"></script>
    <!-- HighCharts -->
    <script src="/Public/BJUI/plugins/highcharts/highcharts.js"></script>
    <script src="/Public/BJUI/plugins/highcharts/highcharts-3d.js"></script>
    <script src="/Public/BJUI/plugins/highcharts/themes/gray.js"></script>
    <!-- ECharts -->
    <script src="/Public/BJUI/plugins/echarts/echarts.js"></script>
    <!-- other plugins -->
    <script src="/Public/BJUI/plugins/other/jquery.autosize.js"></script>
    <link href="/Public/BJUI/plugins/uploadify/css/uploadify.css" rel="stylesheet">
    <script src="/Public/BJUI/plugins/uploadify/scripts/jquery.uploadify.min.js"></script>
    <!-- init -->
    <script type="text/javascript">
        $(function() {
            BJUI.init({
                JSPATH       : '/Public/BJUI/',         //[可选]框架路径
                PLUGINPATH   : '/Public/BJUI/plugins/', //[可选]插件路径
                loginInfo    : {url:'login_timeout.html', title:'登录', width:400, height:200}, // 会话超时后弹出登录对话框
                statusCode   : {ok:200, error:300, timeout:301}, //[可选]
                ajaxTimeout  : 50000, //[可选]全局Ajax请求超时时间(毫秒)
                pageInfo     : {pageCurrent:'pageCurrent', pageSize:'pageSize', orderField:'orderField', orderDirection:'orderDirection'}, //[可选]分页参数
                alertMsg     : {displayPosition:'topcenter', displayMode:'slide', alertTimeout:3000}, //[可选]信息提示的显示位置，显隐方式，及[info/correct]方式时自动关闭延时(毫秒)
                keys         : {statusCode:'statusCode', message:'message'}, //[可选]
                ui           : {
                    showSlidebar     : true, //[可选]左侧导航栏锁定/隐藏
                    clientPaging     : true, //[可选]是否在客户端响应分页及排序参数
                    overwriteHomeTab : false //[可选]当打开一个未定义id的navtab时，是否可以覆盖主navtab(我的主页)
                },
                debug        : false,    // [可选]调试模式 [true|false，默认false]
                theme        : 'purple' // 若有Cookie['bjui_theme'],优先选择Cookie['bjui_theme']。皮肤[五种皮肤:default, orange, purple, blue, red, green]
            })
            //时钟
            var today = new Date(), time = today.getTime()
            $('#bjui-date').html(today.formatDate('yyyy/MM/dd'))
            setInterval(function() {
                today = new Date(today.setSeconds(today.getSeconds() + 1))
                $('#bjui-clock').html(today.formatDate('HH:mm:ss'))
            }, 1000)
        })

        //菜单-事件
        function MainMenuClick(event, treeId, treeNode) {
            event.preventDefault()

            if (treeNode.isParent) {
                var zTree = $.fn.zTree.getZTreeObj(treeId)

                zTree.expandNode(treeNode)
                return
            }

            if (treeNode.target && treeNode.target == 'dialog')
                $(event.target).dialog({id:treeNode.tabid, url:treeNode.url, title:treeNode.name})
            else
                $(event.target).navtab({id:treeNode.tabid, url:treeNode.url, title:treeNode.name, fresh:treeNode.fresh, external:treeNode.external})
        }
    </script>
    <!-- for doc begin -->
    <link type="text/css" rel="stylesheet" href="/js/syntaxhighlighter-2.1.382/styles/shCore.css"/>
    <link type="text/css" rel="stylesheet" href="/js/syntaxhighlighter-2.1.382/styles/shThemeEclipse.css"/>
    <script type="text/javascript" src="/js/syntaxhighlighter-2.1.382/scripts/brush.js"></script>
    <link href="doc/doc.css" rel="stylesheet">
    <script type="text/javascript">
        $(function(){
           SyntaxHighlighter.config.clipboardSwf = '/js/syntaxhighlighter-2.1.382/scripts/clipboard.swf'
            $(document).on(BJUI.eventType.initUI, function(e) {
                SyntaxHighlighter.highlight();
            })
        })
    </script>
    <!-- for doc end -->
</head>
<body>
<!--[if lte IE 7]>
<div id="errorie"><div>您还在使用老掉牙的IE，正常使用系统前请升级您的浏览器到 IE8以上版本 <a target="_blank" href="http://windows.microsoft.com/zh-cn/internet-explorer/ie-8-worldwide-languages">点击升级</a>&nbsp;&nbsp;强烈建议您更改换浏览器：<a href="http://down.tech.sina.com.cn/content/40975.html" target="_blank">谷歌 Chrome</a></div></div>
<![endif]-->
<header id="bjui-header">
    <div class="bjui-navbar-header">
        <button type="button" class="bjui-navbar-toggle btn-default" data-toggle="collapse" data-target="#bjui-navbar-collapse">
            <i class="fa fa-bars"></i>
        </button>
        <a class="bjui-navbar-logo" href="#" style="color: #ffffff; text-decoration: none; line-height: 35px; font-size: 20px" >&nbsp;&nbsp;畅哲网站管理系统</a>
    </div>
    <nav id="bjui-navbar-collapse">
        <ul class="bjui-navbar-right">
            <li class="datetime"><div><span id="bjui-date"></span><br><i class="fa fa-clock-o"></i> <span id="bjui-clock"></span></div></li>
<!--            <li><a href="http://www.bootcss.com/" target="_blank">Bootstrap中文网</a></li>
            <li><a href="http://www.j-ui.com/" target="_blank">DWZ(j-ui)官网</a></li>-->
            <li><a href="#">消息 <span class="badge">4</span></a></li>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">我的账户 <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#" data-toggle="dialog" data-id="changepwd_page" data-mask="true" data-width="400" data-height="260">&nbsp;<span class="glyphicon glyphicon-lock"></span> 修改密码&nbsp;</a></li>
                    <li><a href="#">&nbsp;<span class="glyphicon glyphicon-user"></span> 我的资料</a></li>
                    <li class="divider"></li>
                    <li><a href="/index.php/Admin/Login/loginout" class="red">&nbsp;<span class="glyphicon glyphicon-off"></span> 注销登陆</a></li>
                </ul>
            </li>
            <li class="dropdown"><a href="#" class="dropdown-toggle theme purple" data-toggle="dropdown"><i class="fa fa-tree"></i></a>
                <ul class="dropdown-menu" role="menu" id="bjui-themes">
                    <li><a href="javascript:;" class="theme_default" data-toggle="theme" data-theme="default">&nbsp;<i class="fa fa-tree"></i> 黑白分明&nbsp;&nbsp;</a></li>
                    <li><a href="javascript:;" class="theme_orange" data-toggle="theme" data-theme="orange">&nbsp;<i class="fa fa-tree"></i> 橘子红了</a></li>
                    <li class="active"><a href="javascript:;" class="theme_purple" data-toggle="theme" data-theme="purple">&nbsp;<i class="fa fa-tree"></i> 紫罗兰</a></li>
                    <li><a href="javascript:;" class="theme_blue" data-toggle="theme" data-theme="blue">&nbsp;<i class="fa fa-tree"></i> 青出于蓝</a></li>
                    <li><a href="javascript:;" class="theme_red" data-toggle="theme" data-theme="red">&nbsp;<i class="fa fa-tree"></i> 红红火火</a></li>
                    <li><a href="javascript:;" class="theme_green" data-toggle="theme" data-theme="green">&nbsp;<i class="fa fa-tree"></i> 绿草如茵</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header>
<!--<div id="bjui-hnav">-->
    <!--<button type="button" class="bjui-hnav-toggle btn-default" data-toggle="collapse" data-target="#bjui-hnav-navbar">-->
        <!--<i class="fa fa-bars"></i>-->
    <!--</button>-->
    <!--<ul id="bjui-hnav-navbar">-->
        <!--<li style="width:204px;"><a>欢迎您，超级管理员！</a></li>-->
        <!--<li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-check-square-o"></i> 表单元素</a>-->
            <!--<ul id="bjui-hnav-tree1" class="ztree ztree_main" data-toggle="ztree" data-on-click="MainMenuClick" data-expand-all="true" data-noinit="true">-->
                <!--<li data-id="1" data-pid="0" data-faicon="th-large">表单元素</li>-->
                <!--<li data-id="10" data-pid="1" data-url="form-button.html" data-tabid="form-button" data-faicon="hand-o-up">按钮</li>-->
                <!--<li data-id="11" data-pid="1" data-url="form-input.html" data-tabid="form-input" data-faicon="terminal">文本框</li>-->
                <!--<li data-id="12" data-pid="1" data-url="form-select.html" data-tabid="form-select" data-faicon="caret-square-o-down">下拉选择框</li>-->
                <!--<li data-id="13" data-pid="1" data-url="form-checkbox.html" data-tabid="table" data-faicon="check-square-o">复选、单选框</li>-->
                <!--<li data-id="14" data-pid="1" data-url="form.html" data-tabid="form" data-faicon="list">表单综合演示</li>-->
            <!--</ul>-->
        <!--</li>-->
        <!--<li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-table"></i> 表格</a>-->
            <!--<ul id="bjui-hnav-tree2" class="ztree ztree_main" data-toggle="ztree" data-on-click="MainMenuClick" data-expand-all="true" data-noinit="true">-->
                <!--<li data-id="2" data-pid="0">表格</li>-->
                <!--<li data-id="20" data-pid="2" data-url="table.html" data-tabid="table">普通表格</li>-->
                <!--<li data-id="21" data-pid="2" data-url="table-fixed.html" data-tabid="table-fixed">固定表头表格</li>-->
                <!--<li data-id="22" data-pid="2" data-url="table-edit.html" data-tabid="table-edit">可编辑表格</li>-->
            <!--</ul>-->
        <!--</li>-->
        <!--<li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-table"></i> Datagrid(beta)</a>-->
            <!--<ul id="bjui-hnav-tree-datagrid" class="ztree ztree_main" data-toggle="ztree" data-on-click="MainMenuClick" data-expand-all="true" data-noinit="true">-->
                <!--<li data-id="3" data-pid="0">datagrid (beta)</li>-->
                <!--<li data-id="31" data-pid="3" data-url="datagrid-convertable.html" data-tabid="datagrid-convertable">转换普通表格</li>-->
                <!--<li data-id="32" data-pid="3" data-url="datagrid-demo.html" data-tabid="datagrid-demo">完整示例</li>-->
                <!--<li data-id="33" data-pid="3" data-url="datagrid-datatype.html" data-tabid="datagrid-datatype">三种数据类型</li>-->
            <!--</ul>-->
        <!--</li>-->
        <!--<li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-plane"></i> 弹出窗口</a>-->
            <!--<ul id="bjui-hnav-tree4" class="ztree ztree_main" data-toggle="ztree" data-on-click="MainMenuClick" data-expand-all="true" data-noinit="true">-->
                <!--<li data-id="4" data-pid="0">弹出窗口</li>-->
                <!--<li data-id="40" data-pid="4" data-url="dialog.html" data-tabid="dialog">弹出窗口</li>-->
                <!--<li data-id="41" data-pid="4" data-url="alert.html" data-tabid="alert">信息提示</li>-->
            <!--</ul>-->
        <!--</li>-->
        <!--<li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-image"></i> 图形报表</a>-->
            <!--<ul id="bjui-hnav-tree5" class="ztree ztree_main" data-toggle="ztree" data-on-click="MainMenuClick" data-expand-all="true" data-noinit="true">-->
                <!--<li data-id="5" data-pid="0">图形报表</li>-->
                <!--<li data-id="51" data-pid="5" data-url="highcharts.html" data-tabid="chart">Highcharts图表</li>-->
                <!--<li data-id="52" data-pid="5" data-url="echarts.html" data-tabid="echarts">ECharts图表</li>-->
            <!--</ul>-->
        <!--</li>-->
        <!--<li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-coffee"></i> 框架组件</a>-->
            <!--<ul id="bjui-hnav-tree6" class="ztree ztree_main" data-toggle="ztree" data-on-click="MainMenuClick" data-expand-all="true" data-noinit="true">-->
                <!--<li data-id="6" data-pid="0">框架组件</li>-->
                <!--<li data-id="61" data-pid="6" data-url="tabs.html" data-tabid="tabs">选项卡</li>-->
            <!--</ul>-->
        <!--</li>-->
        <!--<li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-bug"></i> 其他插件</a>-->
            <!--<ul id="bjui-hnav-tree6" class="ztree ztree_main" data-toggle="ztree" data-on-click="MainMenuClick" data-expand-all="true" data-noinit="true">-->
                <!--<li data-id="7" data-pid="0">其他插件</li>-->
                <!--<li data-id="71" data-pid="7" data-url="ztree.html" data-tabid="ztree">zTree</li>-->
                <!--<li data-id="72" data-pid="7" data-url="ztree-select.html" data-tabid="ztree-select">zTree下拉选择</li>-->
            <!--</ul>-->
        <!--</li>-->
        <!--<li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-database"></i> 综合应用</a>-->
            <!--<ul id="bjui-hnav-tree8" class="ztree ztree_main" data-toggle="ztree" data-on-click="MainMenuClick" data-expand-all="true" data-noinit="true">-->
                <!--<li data-id="8" data-pid="0">综合应用</li>-->
                <!--<li data-id="80" data-pid="8" data-url="table-layout.html" data-tabid="table-layout">局部刷新1</li>-->
            <!--</ul>-->
        <!--</li>-->
        <!--<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i> 系统设置 <span class="caret"></span></a>-->
            <!--<ul class="dropdown-menu" role="menu">-->
                <!--<li><a href="#">角色权限</a></li>-->
                <!--<li><a href="#">用户列表</a></li>-->
                <!--<li class="divider"></li>-->
                <!--<li><a href="#">关于我们</a></li>-->
                <!--<li class="divider"></li>-->
                <!--<li><a href="#">友情链接</a></li>-->
            <!--</ul>-->
        <!--</li>-->
    <!--</ul>-->
    <!--<form class="hnav-form">-->
        <!--<div class="input-group">-->
            <!--<input type="text" class="form-control" placeholder="Search...">-->
                <!--<span class="input-group-btn">-->
                    <!--<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>-->
                <!--</span>-->
        <!--</div>-->
    <!--</form>-->
<!--</div>-->
<div id="bjui-container" class="clearfix">
    <div id="bjui-leftside">
        <div id="bjui-sidebar-s">
            <div class="collapse"></div>
        </div>
        <div id="bjui-sidebar">
            <div class="toggleCollapse"><h2><i class="fa fa-bars"></i> 主菜单 <i class="fa fa-bars"></i></h2><a href="javascript:;" class="lock"><i class="fa fa-lock"></i></a></div>
            <div class="panel-group panel-main" data-toggle="accordion" id="bjui-accordionmenu" data-heightbox="#bjui-sidebar" data-offsety="26">
                <div class="panel panel-default">
                    <div class="panel-heading panelContent">
                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#bjui-accordionmenu" href="#bjui-collapse0" class="active"><i class="fa fa-caret-square-o-down"></i>&nbsp;网站系统</a></h4>
                    </div>
                    <div id="bjui-collapse0" class="panel-collapse panelContent collapse in">
                        <div class="panel-body" >
                            <ul id="bjui-tree0" class="ztree ztree_main" data-toggle="ztree" data-on-click="MainMenuClick" data-expand-all="true">
                                <li data-id="1" data-pid="0" data-faicon="th-large">首页内容设置</li>
                                <li data-id="10" data-pid="1" data-url="/index.php/Admin/Inner/nav" data-tabid="inner-nav" data-faicon="hand-o-up" data-fresh=true>导航</li>
                                <li data-id="11" data-pid="1" data-url="/index.php/Admin/Inner/ad" data-tabid="inner-ad" data-faicon="link" data-fresh=true>广告</li>
                                <li data-id="12" data-pid="1" data-url="/index.php/Admin/Inner/dynamic" data-tabid="inner-dynamic" data-faicon="caret-square-o-down" data-fresh=true>畅哲动态</li>
                                <!--                   <li data-id="13" data-pid="1" data-url="form-checkbox.html" data-tabid="table" data-faicon="check-square-o">复选、单选框</li>
                                                 <li data-id="14" data-pid="1" data-url="form.html" data-tabid="form" data-faicon="list">表单综合演示</li>
                                                 <li data-id="2" data-pid="0">表格</li>
                                                 <li data-id="20" data-pid="2" data-url="table.html" data-tabid="table">普通表格</li>
                                                 <li data-id="21" data-pid="2" data-url="table-fixed.html" data-tabid="table-fixed">固定表头表格</li>
                                                 <li data-id="22" data-pid="2" data-url="table-edit.html" data-tabid="table-edit">可编辑表格</li>
                                                 <li data-id="3" data-pid="0">datagrid (beta)</li>
                                                 <li data-id="31" data-pid="3" data-url="datagrid-convertable.html" data-tabid="datagrid-convertable">转换普通表格</li>
                                                 <li data-id="32" data-pid="3" data-url="datagrid-demo.html" data-tabid="datagrid-demo">完整示例</li>
                                                 <li data-id="33" data-pid="3" data-url="datagrid-datatype.html" data-tabid="datagrid-datatype">三种数据类型</li>
                                                 <li data-id="4" data-pid="0">弹出窗口</li>
                                                 <li data-id="40" data-pid="4" data-url="dialog.html" data-tabid="dialog">弹出窗口</li>
                                                 <li data-id="41" data-pid="4" data-url="alert.html" data-tabid="alert">信息提示</li>
                                                 <li data-id="5" data-pid="0">图形报表</li>
                                                 <li data-id="50" data-pid="5" data-url="highcharts.html" data-tabid="chart">Highcharts图表</li>
                                                 <li data-id="50" data-pid="5" data-url="echarts.html" data-tabid="echarts">ECharts图表</li>
                                                 <li data-id="6" data-pid="0">框架组件</li>
                                                 <li data-id="61" data-pid="6" data-url="tabs.html" data-tabid="tabs">选项卡</li>
                                                 <li data-id="7" data-pid="0">其他插件</li>
                                                 <li data-id="71" data-pid="7" data-url="ztree.html" data-tabid="ztree">zTree</li>
                                                 <li data-id="72" data-pid="7" data-url="ztree-select.html" data-tabid="ztree-select">zTree下拉选择</li>
                                                 <li data-id="8" data-pid="0">综合应用</li>
                                                 <li data-id="80" data-pid="8" data-url="table-layout.html" data-tabid="table-layout">局部刷新1</li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="panelFooter"><div class="panelFooterContent"></div></div>
                </div>
               <!-- <div class="panel panel-default">
                    <div class="panel-heading panelContent">
                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#bjui-accordionmenu" href="#bjui-collapse1" class="" style="color:#FF1100;"><i class="fa fa-caret-square-o-right"></i>&nbsp;简要文档</a></h4>
                    </div>
                    <div id="bjui-collapse1" class="panel-collapse panelContent collapse">
                        <div class="panel-body">
                            <ul id="bjui-tree1" class="ztree ztree_main" data-toggle="ztree" data-on-click="MainMenuClick" data-expand-all="false">
                                <li data-id="99" data-pid="0">文件列表</li>
                                <li data-id="100" data-pid="99" data-url="doc/base/filelist.html" data-tabid="doc-file">文件详解</li>
                                <li data-id="1" data-pid="0">框架介绍</li>
                                <li data-id="10" data-pid="1" data-url="doc/base/structure.html" data-tabid="doc-base">页面结构</li>
                                <li data-id="11" data-pid="1" data-url="doc/base/init.html" data-tabid="doc-base">框架初始化</li>
                                <li data-id="12" data-pid="1" data-url="doc/base/hnav.html" data-tabid="doc-base">横向导航菜单</li>
                                <li data-id="13" data-pid="1" data-url="doc/base/navtab.html" data-tabid="doc-base">标签工作区(navtab)</li>
                                <li data-id="14" data-pid="1" data-url="doc/base/dialog.html" data-tabid="doc-base">弹窗工作区(dialog)</li>
                                <li data-id="15" data-pid="1" data-url="doc/base/idname.html" data-tabid="doc-base">元素ID命名规范</li>
                                <li data-id="16" data-pid="1" data-url="doc/base/data.html" data-tabid="doc-base">data属性</li>
                                <li data-id="17" data-pid="1" data-url="doc/base/api.html" data-tabid="doc-base">jQuery API调用</li>
                                <li data-id="18" data-pid="1" data-url="doc/base/event.html" data-tabid="doc-base">事件</li>
                                <li data-id="19" data-pid="1" data-url="doc/base/url.html" data-tabid="doc-base" data-update="true">URL动态赋值</li>
                                <li data-id="2" data-pid="0">标签navtab</li>
                                <li data-id="20" data-pid="2" data-url="doc/navtab/navtab.html" data-tabid="doc-navtab">创建navtab</li>
                                <li data-id="21" data-pid="2" data-url="doc/navtab/navtab-op.html" data-tabid="doc-navtab">参数及方法</li>
                                <li data-id="3" data-pid="0">弹窗dialog</li>
                                <li data-id="30" data-pid="3" data-url="doc/dialog/dialog.html" data-tabid="doc-dialog">创建dialog</li>
                                <li data-id="31" data-pid="3" data-url="doc/dialog/dialog-op.html" data-tabid="doc-dialog">参数及方法</li>
                                <li data-id="alertmsg" data-pid="0">信息提示alertmsg</li>
                                <li data-id="alertmsg-op" data-pid="alertmsg" data-url="doc/alertmsg/alertmsg.html" data-tabid="doc-alertmsg">提示框alertmsg</li>
                                <li data-id="4" data-pid="0">Ajax</li>
                                <li data-id="40" data-pid="4" data-url="doc/ajax/callback.html" data-tabid="doc-ajax">回调函数</li>
                                <li data-id="41" data-pid="4" data-url="doc/ajax/form.html" data-tabid="doc-ajax">提交表单</li>
                                <li data-id="42" data-pid="4" data-url="doc/ajax/search.html" data-tabid="doc-ajax">搜索表单</li>
                                <li data-id="43" data-pid="4" data-url="doc/ajax/load.html" data-tabid="doc-ajax">加载(局部刷新)</li>
                                <li data-id="44" data-pid="4" data-url="doc/ajax/action.html" data-tabid="doc-ajax">执行动作</li>
                                <li data-id="5" data-pid="0">图形报表(插件)</li>
                                <li data-id="50" data-pid="5" data-url="doc/chart/highcharts.html" data-tabid="doc-highcharts">Highcharts图表</li>
                                <li data-id="50" data-pid="5" data-url="doc/chart/echarts.html" data-tabid="doc-echarts">ECharts图表</li>
                                <li data-id="6" data-pid="0">表单相关</li>
                                <li data-id="60" data-pid="6" data-url="doc/form/datepicker.html" data-tabid="doc-form">日期选择器</li>
                                <li data-id="61" data-pid="6" data-url="doc/form/spinner.html" data-tabid="doc-form">微调器</li>
                                <li data-id="62" data-pid="6" data-url="doc/form/lookup.html" data-tabid="doc-form">查找带回</li>
                                <li data-id="63" data-pid="6" data-url="doc/form/tags.html" data-tabid="doc-form">自动完成标签</li>
                                <li data-id="64" data-pid="6" data-url="doc/form/upload.html" data-tabid="doc-form">上传组件</li>
                                <li data-id="7" data-pid="0">表格相关</li>
                                <li data-id="70" data-pid="7" data-url="doc/table/style.html" data-tabid="doc-table">表格样式</li>
                                <li data-id="71" data-pid="7" data-url="doc/table/order.html" data-tabid="doc-table">字段排序</li>
                                <li data-id="72" data-pid="7" data-url="doc/table/paging.html" data-tabid="doc-table">分页组件</li>
                                <li data-id="73" data-pid="7" data-url="doc/table/selected.html" data-tabid="doc-table">行选中操作</li>
                                <li data-id="74" data-pid="7" data-url="doc/table/fixed.html" data-tabid="doc-table">固定表头</li>
                                <li data-id="75" data-pid="7" data-url="doc/table/edit.html" data-tabid="doc-table">可编辑表格</li>
                                <li data-id="datagrid" data-pid="0">Datagrid</li>
                                <li data-id="datagrid-demo" data-pid="datagrid" data-url="doc/datagrid/datagrid-demo.html" data-tabid="doc-datagrid-demo">datagrid示例</li>
                                <li data-id="datagrid-op" data-pid="datagrid" data-url="doc/datagrid/datagrid-op.html" data-tabid="doc-datagrid-op">datagrid参数</li>
                                <li data-id="8" data-pid="0">右键菜单</li>
                                <li data-id="80" data-pid="8" data-url="doc/other/contextmenu.html" data-tabid="doc-other">右键菜单</li>
                                <li data-id="other" data-pid="0">其他插件</li>
                                <li data-id="ztree" data-pid="other" data-url="doc/plugin/ztree.html" data-tabid="doc-ztree">zTree</li>
                                <li data-id="icheck" data-pid="other" data-url="doc/plugin/checkbox.html" data-tabid="doc-icheck">复选/单选</li>
                                <li data-id="selectpicker" data-pid="other" data-url="doc/plugin/select.html" data-tabid="doc-selectpicker">下拉选择框</li>
                                <li data-id="nicevalidator" data-pid="other" data-url="doc/plugin/validate.html" data-tabid="doc-nicevalidator">表单验证</li>
                                <li data-id="kindeditor" data-pid="other" data-url="doc/plugin/kindeditor.html" data-tabid="doc-kindeditor">KindEditor</li>
                                <li data-id="9" data-pid="0">框架皮肤</li>
                                <li data-id="90" data-pid="9" data-url="doc/theme/color.html" data-tabid="doc-theme">颜色值</li>
                            </ul>
                        </div>
                    </div>
                    <div class="panelFooter"><div class="panelFooterContent"></div></div>
                </div>-->
            </div>
        </div>
    </div>
    <div id="bjui-navtab" class="tabsPage">
        <div class="tabsPageHeader">
            <div class="tabsPageHeaderContent">
                <ul class="navtab-tab nav nav-tabs">
                    <li data-url=""><a href="javascript:;"><span><i class="fa fa-home"></i> #maintab#</span></a></li>
                </ul>
            </div>
            <div class="tabsLeft"><i class="fa fa-angle-double-left"></i></div>
            <div class="tabsRight"><i class="fa fa-angle-double-right"></i></div>
            <div class="tabsMore"><i class="fa fa-angle-double-down"></i></div>
        </div>
        <ul class="tabsMoreList">
            <li><a href="javascript:;">#maintab#</a></li>
        </ul>
        <div class="navtab-panel tabsPageContent">
            <div class="navtabPage unitBox">
                <div class="bjui-pageHeader" style="background:#FFF;">
                    <div class="row" style="padding: 0 8px;">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h3 class="panel-title">历史版本</h3></div>
                                <div class="panel-body">
                                    <table class="table table-condensed table-striped table-hover" width="100%">
                                        <thead>
                                        <tr>
                                            <th width="100">版本号</th>
                                            <th width="90">发布日期</th>
                                            <th>描述</th>
                                            <th>描述</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1.2 beta</td>
                                            <td>2015.05.21</td>
                                            <td>网站后台登陆 退出功能</td>
                                            <td><button type="button" class="btn btn-info">重要</button></td>
                                        </tr>
                                        <tr>
                                            <td>1.1</td>
                                            <td>2015.05.20</td>
                                            <td>创建畅哲 管理后台 整合企业网站 </td>
                                            <td><button type="button" class="btn btn-danger">重要</button></td>
                                        </tr>
                                        <tr>
                                            <td>1.0 beta</td>
                                            <td>2015.04.21</td>
                                            <td>创建畅哲企业网站</td>
                                            <td><button type="button" class="btn btn-info">重要</button></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h3 class="panel-title">公告</h3></div>

                                <div class="panel-body">
                                   <!-- <iframe width="100%" height="240" class="share_self" frameborder="0" scrolling="no" src="git.html"></iframe>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer id="bjui-footer">Copyright &copy; 2013 - 2015　<a href="http://www.cdjinyang.com/" target="_blank">北京畅哲科技</a>　
    <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1252983288'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s23.cnzz.com/stat.php%3Fid%3D1252983288%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
</footer>
</body>
</html>