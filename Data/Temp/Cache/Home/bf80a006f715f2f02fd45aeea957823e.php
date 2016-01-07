<?php if (!defined('THINK_PATH')) exit();?><div class="widget search">
    <h3>搜索</h3>

    <form action="<?php echo U('Home/Archive/search',array(),true,true);?>" method="get">
        <input type="text" name="keyword" class="input-block-level" placeholder="搜索..."/>
    </form>
</div>