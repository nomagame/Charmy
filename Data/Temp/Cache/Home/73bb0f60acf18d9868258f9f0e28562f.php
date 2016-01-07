<?php if (!defined('THINK_PATH')) exit();?><div class="widget widget-popular">
    <h3>最近文章</h3>

    <div class="widget-blog-items">


        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "没有相关文章.." ;else: foreach($__LIST__ as $key=>$post): $mod = ($i % 2 );++$i;?><div class="widget-blog-item media">
                <div class="pull-left">
                    <div class="date">
                        <span class="month"><?php echo (gettimestamp($post["post_date"],'month')); ?>月</span>
                        <span class="day"><?php echo (gettimestamp($post["post_date"],'day')); ?>日</span>
                    </div>
                </div>
                <div class="media-body">
                    <a href="<?php echo (get_post_url($post)); ?>">
                        <h5><?php echo (is_top($post["post_top"])); echo ($post["post_title"]); ?></h5></a>
                </div>
            </div><?php endforeach; endif; endif; ?>

    </div>
</div>
<!-- End Popular Posts -->