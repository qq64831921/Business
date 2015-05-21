<?php if (!defined('THINK_PATH')) exit();?>
<nav class="navbar navbar-default" id="navId" >
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" id="logo" ><img src="/img/logo.png" width="272" height="56" ></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav ">
                <?php if(is_array($navlist)): $k = 0; $__LIST__ = $navlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vonav): $mod = ($k % 2 );++$k;?><li><a href="/index.php/Home/index.html" id="dropmenu<?php echo ($vonav["id"]); ?>"><?php echo ($vonav["name"]); ?> <span class="sr-only">(current)</span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            <!--    <li><a href="#">新闻资讯</a></li>
                <li><a href="#" id="serviceid">产品应用</a></li>
                &lt;!&ndash;<li><a href="#" id="valueid">价值</a></li>&ndash;&gt;
                <li><a href="#">合作伙伴</a></li>
                <li><a href="#">关于我们</a></li>-->
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<?php if(is_array($dropnav)): $i = 0; $__LIST__ = $dropnav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vodrop): $mod = ($i % 2 );++$i;?><div class="eject hideinner service<?php echo ($vodrop["id"]); ?>" >
        <div class="container">
            <div class="row">
                <?php if(is_array($vodrop['subitem'])): $i = 0; $__LIST__ = $vodrop['subitem'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub1): $mod = ($i % 2 );++$i; if($sub1['isshow'] == '0'): else: ?>
                            <div class="col-lg-4 col-lg-offset-2">
                                <p class="p1"><a href="2.html"><?php echo ($sub1['name']); ?></a></p>
                                <ul>
                                    <?php echo (getdropinner($sub1["id"])); ?>
                                </ul>
                            </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>


            </div>
        </div>
    </div><?php endforeach; endif; else: echo "" ;endif; ?>

<div class="eject value" style="display: none">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-lg-offset-2">
                <p class="p1"><a>钢帘线行业</a></p>
                <ul>
                    <li><a href="###">液体类</a></li>
                    <li><a href="###">固体软包装</a></li>
                    <li><a href="###">固体硬包装</a></li>
                    <li><a href="###">进口产品</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-lg-offset-1">
                <p class="p2"><a>医药行业</a></p>
                <ul>
                    <li><a href="###">医疗器械</a></li>
                    <li><a href="###">中药</a></li>
                    <li><a href="###">西药</a></li>
                    <li><a href="###">保健品</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-lg-offset-1">
                <p class="p3"><a>农产品</a></p>
                <ul>
                    <li><a href="###">果蔬</a></li>
                    <li><a href="###">粮油</a></li>
                    <li><a href="###">农畜</a></li>
                    <li><a href="###">水产</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-lg-offset-2">
                <p class="p4"><a>日化行业</a></p>
                <ul>
                    <li><a href="###">化妆品</a></li>
                    <li><a href="###">日用洗涤</a></li>
                    <li><a href="###">驱虫灭害产品</a></li>
                    <li><a href="###">其他产品</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-lg-offset-1">
                <p class="p5"><a>化工行业</a></p>
                <ul>
                    <li><a href="###">润滑油</a></li>
                    <li><a href="###">涂料油漆</a></li>
                    <li><a href="###">橡胶制品</a></li>
                    <li><a href="###">农化产品</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-lg-offset-1">
                <p class="p6"><a>其他</a></p>
                <ul>
                    <li><a href="###">建材</a></li>
                    <li><a href="###">纺织品</a></li>
                    <li><a href="###">家居</a></li>
                    <li><a href="###">机电</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>