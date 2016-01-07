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
    <title><?php echo get_opinion('title');?></title>
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

    <link rel="stylesheet" href="/Public/Charmy/css/style.css">
    <?php echo hook('pageHeader', "");?>

</head>

<body data-spy="scroll" data-target="#menu">
<?php echo hook('userHeader', "");?>


<?php echo W('Widget/menuHead_fp');?>

<?php $CatsLogic=new Common\Logic\CatsLogic(); $cat71 = $CatsLogic->getPostsByCat(get_theme_opinion("id1"), 10 ,0 ,false ); $cat73 = $CatsLogic->getPostsByCat(get_theme_opinion("id2"), 10 ,0 ,false ); $cat13 = $CatsLogic->getPostsByCat(get_theme_opinion("id3"), 10 ,0 ,false ); ?>
<!-- start home -->
		<section id="home">
			<div class="overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10 wow fadeIn" data-wow-delay="0.3s">
							<h1 class="text-upper">松哥洽味蜂蜜创业故事</h1>
							<p class="tm-white">我们是湖南大学研究生众筹创业者，我们十三人众筹200万元来做纯蜂蜜事业,我们走遍大江南北，在最原始最天然的地方寻找最纯的蜜</p>
                                                        <div>
                                                        <iframe src="http://static.video.qq.com/TPout.swf?vid=z0167urk7rs&amp;auto=0" frameborder="0" allowfullscreen="" style="width: 850px;height:500px"></iframe>
                                                        </div>
                                                       <!-- <div class="news">
                                                            <span>洽味趣闻:</span>
                                                            <ul class="newslist"><li class="news-item">
            <a href="/index.php?m=home&c=post&a=single&info=4" title="雪脂莲蜜 ">
                雪脂莲蜜  </a></li><li class="news-item">
            <a href="/index.php?m=home&c=post&a=single&info=1" title="欢迎来到洽味蜂蜜">
                欢迎来到洽味蜂蜜 </a></li></ul>
                                                        </div>-->
                                                       
                                                </div>
					</div>
				</div>
			</div>
		</section>
 <!-- start charmystory-->
    <section id="charmystory">
      <div class="container">
        <div class="row">
           <header class="block-heading cleafix">
          
          <div class="title-page">
            <h2 class="main-header">品牌故事</h2>
            <h2 class="sub-header">&nbsp|||&nbspCharmy Story</h2>
          </div>
          <a href="/index.php?a=story_detail&storyname=ppgs" class="button button-royal button-circle button-giant " style="margin-top:10px" >...更多</a>
        </header>
        <section class="block-body">
          <div class="row">
            <div class="col-sm-3">
              <a href="/index.php?a=story_detail&storyname=ppgs" class="recent-work" style="background-image:url(/Public/Charmy/images/story/story01.jpg)">

									<span class="btn btn-o-white">品牌故事</span>

								</a>
                <p>每一个品牌，背后总有许多故事</p>
            </div>
            <div class="col-sm-3">
              <a href="/index.php?a=story_detail&storyname=qwlc" class="recent-work" style="background-image:url(/Public/Charmy/images/story/story02.jpg)">

									<span class="btn btn-o-white">洽味历程</span>

								</a>
                <p>每一个历程，背后总充满了艰辛</p>
            </div>
            <div class="col-sm-3">
              <a href="/index.php?a=story_detail&storyname=qwdy" class="recent-work" style="background-image:url(/Public/Charmy/images/story/story03.jpg)">

									<span class="btn btn-o-white">万众代言</span>

								</a>
                <p>每一个成功，背后总有很多努力</p>
            </div>
            <div class="col-sm-3">
              <a href="/index.php?a=story_detail&storyname=wmdgs" class="recent-work" style="background-image:url(/Public/Charmy/images/story/story04.jpg)">

									<span class="btn btn-o-white">我们的故事</span>

								</a>
                <p>每一个故事，背后总有大家的汗水</p>
            </div>
        </section>
        </div>
      </div>
    </section>
    <!-- end charmystory-->
		<!-- end home -->
		<!-- start divider -->
		<!--<section id="brandstory">
			<div class="container">
				<div class="row">
					 <div class="col-md-6 wow fadeInLeft" data-wow-delay="0.6s">
                                            <h2 class="text-uppercase">一个偶然，和蜂蜜结缘</h2>
                                            <p>有些故事，与生活息息相关，而我们不曾听过。蜂农故事，大抵如此。</p>
                                            <p><span><i></i></span>邻居卿伯伯是一个老蜂农，走南闯北，追花寻蜜，三十余年。洞庭湖畔，黄海之滨，太行腹地，蒙古草原，东北三省， 边陲云南......每年都有他的身影，还有他的聋哑儿子，以及他的200箱550万只蜜蜂。</p>
                                            <p><i></i>很多人追求稳定，而他选择了漂泊；很多人拥抱城市，而他扎根在荒野；很多人急于成功，而他一生只做一件事。</p>
                                </div>
                                <div class="col-md-6 wow fadeInRight" data-wow-delay="0.6s">
                                    <a href="/index.php?a=story_detail&storyname=wmdgs"><img src="/Public/Charmy/images/story.jpg" class="img-responsive" alt="brandstory img"></a>
                                    <p style="text-align: center">洽味众筹股东</p>
                                </div>
				</div>
			</div>
		</section>-->
		<!-- end divider -->
    <!-- start brandstory1 -->
    <!--<section id="brandstory">
      <div class="container">
        <div class="row">
          <div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
              <a href="/index.php?a=story_detail&storyname=wmdgs"><img src="/Public/Charmy/images/story_2.jpg" class="img-responsive" alt="brandstory img"></a>
          </div>
          <div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <h2 class="text-uppercase">我们的故事</h2>
            <p>我是刘松</p>
            <p>洽味蜂蜜创始人</p>
            <p>湖南大学设计学院研四学生</p>
            <p>
              <span>
                <i></i>
              </span>我的家乡常德 有很多蜂农，盛产蜂蜜 我是家乡喝蜂蜜长大的</p>
            <p>对蜂蜜有着特别的亲切 对蜜蜂的勤劳、奉献有着特别的敬意....</p>
          </div>
        </div>
      </div>
    </section>-->
    <!-- end brandstory1 -->
    <section id="newprointrudction">
      <div class="container">
        <div class="row">
            <div class="container portfolio-sec">
          <header class="block-heading cleafix">
            <div class="title-page">
              <h2 class="main-header">洽味精装</h2>
              <h2 class="sub-header">&nbsp|||&nbspCharmy Competitive Product</h2>
            </div>
            <a href="/index.php?a=product_detail&productname=compose" class="button button-royal button-circle button-giant " style="margin-top:10px" >...更多</a>
          </header>
          <section class="block-body">
            <div class="row">
              <div class="col-sm-4">
                <a href="/index.php?a=product_detail&productname=dsm" class="recent-work01" style="background-image:url(/Public/Charmy/images/honey/1.jpg)">
								</a>
              </div>
              <div class="col-sm-4">
                <a href="/index.php?a=product_detail&productname=xzlm" class="recent-work05" style="background-image:url(/Public/Charmy/images/honey/2.jpg)">
								</a>
              </div>
              <div class="col-sm-4">
                <a href="/index.php?a=product_detail&productname=ygqm" class="recent-work07" style="background-image:url(/Public/Charmy/images/honey/3.jpg)">
          		</a>
              </div>
            </div>
          </section>
        </div>
        </div>
      </div>
    </section>
    <!-- start prointrudction -->
    <section id="prointrudction">
      <div class="container">
        <div class="row">
          <header class="block-heading cleafix">
          <div class="title-page">
            <h2 class="main-header">洽味简装</h2>
            <h2 class="sub-header">&nbsp|||&nbspCharmy Simple Product</h2>
          </div>
          <a href="/index.php?a=product_detail&productname=compose" class="button button-royal button-circle button-giant " style="margin-top:10px" >...更多</a>
        </header>
        <section class="block-body">
          <div class="row">
            <div class="col-sm-4">
              <a href="/index.php?a=product_detail&productname=wqm" class="recent-work04" style="background-image:url(/Public/Charmy/images/honey/rain_1-320x240.jpg)">
								</a>
            </div>
            <div class="col-sm-4">
              <a href="/index.php?a=product_detail&productname=szm" class="recent-work03" style="background-image:url(/Public/Charmy/images/honey/min_icons_thumb1-320x240.jpg)">
								</a>
            </div>
            <div class="col-sm-4">
              <a href="/index.php?a=product_detail&productname=yhm" class="recent-work06" style="background-image:url(/Public/Charmy/images/honey/flat_icons_thumb.jpg)">
								</a>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <a href="/index.php?a=product_detail&productname=zhm" class="recent-work08" style="background-image:url(/Public/Charmy/images/honey/wood-320x240.jpg)">
								</a>
            </div>
            <div class="col-sm-4">
              <a href="/index.php?a=product_detail&productname=jtm" class="recent-work02" style="background-image:url(/Public/Charmy/images/honey/bike-320x240.jpg)">
								</a>
            </div>
            <div class="col-sm-4">
              <a href="/index.php?a=product_detail&productname=compose" class="recent-work09" style="background-image:url(/Public/Charmy/images/honey/honey09.jpg)">
								</a>
            </div>
          </div>
        </section>
        </div>
      </div>
    </section>
    <!-- end prointrudction -->
    <!-- start charmynews -->
    <section id="charmynews">
      <div class="container">
        <div class="row">
           <header class="block-heading cleafix">
            <div class="title-page">
              <h2 class="main-header">洽味新闻</h2>
              <h2 class="sub-header">&nbsp|||&nbspCharmy News.</h2>
            </div>
            <a href="/index.php?m=home&c=cat&a=detail&info=1" class="button button-royal button-circle button-giant " style="margin-top:10px" >...更多</a>
          </header>
          <section class="block-body">
            <div class="row">
              <div class="col-sm-4 blog-post">
                <img src="/Public/Charmy/images/news/bike_water1-1000x600.jpg">
                <a href="/index.php?m=home&c=cat&a=detail&info=1"><h4>教育厅长与教育部司长考察洽味 </h4></a>
                <div class="date">2015.05.12</div>
                <p>湖南大学设计院研三学生刘松引领十三人众筹，遍尝众筹之路酸甜苦辣...</p>
                <a href="/index.php?m=home&c=post&a=single&info=1">查看详情</a>
              </div>
              <div class="col-sm-4 blog-post">
                <img src="/Public/Charmy/images/news/mac_glasses1-1000x600.jpg">
                <a href="/index.php?m=home&c=cat&a=detail&info=1"><h4>湖南经视对刘劲军和刘松的专题报道</h4></a>
                <div class="date">2015.06.28</div>
                <p>湖南省内研究蜜蜂第一人——洽味蜂蜜专家刘劲军教授，痴迷于蜂学，研究蜜蜂防农作物减产...</p>
                <a href="/index.php?m=home&c=post&a=single&info=1">查看详情</a>
              </div>
              <div class="col-sm-4 blog-post">
                <img src="/Public/Charmy/images/news/road-1000x600.jpg">
                <a href="/index.php?m=home&c=cat&a=detail&info=1"><h4>湖南教育台对刘松洽味创业事迹的报道</h4></a>
                <div class="date">2015.07.01</div>
                <p>湖南大学设计院研三学生刘松追逐花海，万里寻蜜，打造一番甜蜜事业...</p>
                <a href="/index.php?m=home&c=post&a=single&info=1">查看详情</a>
              </div>
            </div>
          </section>
        </div>
      </div>
    </section>
    <!-- end charmynews -->
    <!-- start cooperation -->
    <section id="charmycoop">
      <div class="container">
        <div class="row">
           <header class="block-heading cleafix">
            <div class="title-page">
              <h2 class="main-header">战略合作</h2>
              <h2 class="sub-header">&nbsp|||&nbspCharmy Cooperation.</h2>
            </div>
            <!--<a href="/index.php?m=home&c=cat&a=detail&info=1" class="button button-royal button-circle button-giant " style="margin-top:10px" >...更多</a>-->
          </header>
          <section class="block-body">
            <div class="row">
              <div class="col-sm-6 blog-post">
                <img src="/Public/Charmy/images/book01.jpg">
                <a href="/index.php?a=story_detail&storyname=coop"><p><p><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;贵州赖世纲酒业有限公司赖茅系列酒</h4></a>
              </div>
              <div class="col-sm-6 blog-post">
                <img src="/Public/Charmy/images/book02.jpg">
                <a href="/index.php?a=story_detail&storyname=contact" ><p><p><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;联系我们</h4></a>
              </div>
            </div>
          </section>
        </div>
      </div>
    </section>
    <!-- start coopration -->



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





<script type="text/javascript">
    $(function () {
     /* $(".newslist").bootstrapNews({
		newsPerPage: 1,
		autoplay: true,
		pauseOnHover: true,
		navigation: false,
		direction: 'down',
		newsTickerInterval: 2500,
		onToDo: function () {
			//console.log(this);
		}
	});*/
    });
</script>

<?php echo hook('pageFooter', "");?>

</body>
</html>