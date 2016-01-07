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
    <title>404 | <?php echo get_opinion('title');?></title>
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


    <?php echo hook('pageHeader', "");?>

</head>

<body>
<?php echo hook('userHeader', "");?>
<?php echo W('Widget/menuHead');?>

<!-- 404 error -->
<section id="error" class="container">
    <h1>404, Page not found</h1>

    <p><?php echo ($message); ?></p>
    <a class="btn btn-success" href="<?php echo U('/');?>">回到首页</a>
</section>
<!-- /404 error -->

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