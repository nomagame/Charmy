<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo ($title); ?>|<?php echo get_opinion('title');?></title>
    <meta name="description" content="<?php echo get_opinion('description');?>">
    <meta name="keywords" content="<?php echo get_opinion('keywords');?>"/>
    <meta name="author" content="greenstudio"/>

    <meta name="viewport" content="width=device-width">

    <!-- animate css -->
<link rel="stylesheet" href="/Public/Charmy/css/font-awesome.min.css">
<link rel="stylesheet" href="/Public/Charmy/css/animate.min.css">
<!-- bootstrap css -->
<link rel="stylesheet" href="/Public/Charmy/css/bootstrap.min.css">
<!-- font-awesome -->
<link rel="stylesheet" href="/Public/Charmy/css/font-awesome.min.css">
<!-- google font -->
<link href='http://fonts.useso.com/css?family=Open+Sans:400,300,400italic,700,800' rel='stylesheet' type='text/css'>
<!-- custom css -->
<link rel="stylesheet" href="/Public/Charmy/css/templatemo-style.css">
<link rel="stylesheet" href="/Public/Charmy/css/default.css">
<link rel="stylesheet" href="/Public/NovaGreenStudio/css/bootstrap-responsive.min.css">
<link rel="stylesheet" href="/Public/NovaGreenStudio/css/font-awesome.min.css">
<link rel="stylesheet" href="/Public/NovaGreenStudio/css/main.css">
    <link rel="stylesheet" href="/Public/Charmy/css/style.css">
<style>
    p {
        font-size: 18px;
        line-height: 25px;

        font-family: "SongFont", Arial, Helvetica, sans-serif;
    }
</style>

    <style>.thumbnail > img {
        max-width: 50%;
    }</style>
    <?php echo hook('pageHeader', "");?>

</head>

<body>
<?php echo hook('userHeader', "");?>
<?php echo W('Widget/menuHead');?>

<section class="title">
    <div class="container">
        <div class="row-fluid">
            <div class="span8">
                <h1><?php echo ($title); ?></h1>
            </div>
            <div class="span4">
                <ul class="breadcrumb pull-right">
                    <?php echo ($breadcrumbs); ?>
                </ul>


            </div>
        </div>
    </div>
</section>
<!-- / .title -->
<section class="container">


    <section id="about-us" class="container main">
        <div class="row-fluid">
            <div class="span8">
                <div class="blog">
                    <?php if(is_array($postslist)): $i = 0; $__LIST__ = $postslist;if( count($__LIST__)==0 ) : echo "没有相关文章.." ;else: foreach($__LIST__ as $key=>$post): $mod = ($i % 2 );++$i;?><div class="blog-item well">
                            <a href="<?php echo (get_post_url($post)); ?>">
                                <h2><?php echo (is_top($post["post_top"])); echo ($post["post_title"]); ?></h2></a>

                            <div class="blog-meta clearfix">
                                <p class="pull-left">
                                    <i class="icon-user"></i> 作者: <a href="#"><?php echo ($post["post_user"]["user_nicename"]); ?></a> |
                                    <i class="icon-folder-close"></i> 分类:
                                    <?php if(is_array($post["post_cat"])): $i = 0; $__LIST__ = $post["post_cat"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat): $mod = ($i % 2 );++$i;?><a
                                            href="<?php echo (get_cat_url($cat)); ?>"><?php echo ($cat["cat_name"]); ?></a>,<?php endforeach; endif; endif; ?>
                                    |
                                    <i class="icon-folder-close"></i> 标签:
                                    <?php if(is_array($post["post_tag"])): $i = 0; $__LIST__ = $post["post_tag"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tag): $mod = ($i % 2 );++$i;?><a
                                            href="<?php echo (get_tag_url($tag)); ?>"><?php echo ($tag["tag_name"]); ?></a>,<?php endforeach; endif; endif; ?>
                                    |
                                    <i class="icon-calendar"></i> <?php echo (gettimeurl($post['post_date'],$post['post_type'])); ?>
                                </p>

                            </div>
                            <!--<p> <?php echo (get_post_thumbnail($post)); ?></p>-->

                            <p><?php echo (mb_substr(strip_tags($post["post_content"]),0,400,"UTF-8")); ?></p>
                            <a class="btn btn-link" href="<?php echo (get_post_url($post)); ?>">阅读详细
                                <i
                                        class="icon-angle-right"></i></a>
                        </div><?php endforeach; endif; endif; ?>

                    <?php if($res404 == 0 ): ?><div class="blog-item well">
                            <div class="post-content medium clearfix">
                                没有相关文章
                                <div class="ten columns omega"></div>
                            </div>
                        </div><?php endif; ?>


                    <div class="gap"></div>

                    <!-- Paginationa -->
                    <div class="pagination">
                        <ul><?php echo ($pager); ?>
                        </ul>
                    </div>

                </div>
            </div>
            <aside class="span4">

                <!-- /.search -->


                <?php echo W('Widget/search');?>
                <?php echo W('Widget/recentPost');?>


                <!-- End Archive Widget -->

            </aside>
        </div>

    </section>


</section>


	<!-- start footer -->
		<footer>
			 <div class="container">
                            <div class="row">
                                <p>Copyright © 2015-2016</p>
                                <p>长沙市敬味食坊生态农业科技有限公司</p>
                            </div>
                        </div>
		</footer>
		<!-- end footer -->
<!--/bottom-->





<script src="/Public/share/js/jquery-1.9.0.min.js"></script>
<script src="/Public/Charmy/js/jquery.js"></script>
<script src="/Public/Charmy/js/bootstrap.min.js"></script>
<script src="/Public/Charmy/js/wow.min.js"></script>
<script src="/Public/Charmy/js/jquery.singlePageNav.min.js"></script>
<script src="/Public/Charmy/js/custom.js"></script>
<script src="/Public/Charmy/js/jquery.bootstrap.newsbox.min.js"></script>



<?php echo hook('pageFooter', "");?>

</body>
</html>