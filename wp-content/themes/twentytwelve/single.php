    <?php get_header(); ?>

<div class="section">
    <div class="post">
        <?php while (have_posts()) : the_post(); ?>
            <h3 class="title"><?php the_title(); ?></h3>
            <div class="content">
                <?php the_content(); ?>
            </div>
        <?php endwhile; // end of the loop. ?>

    </div>
</div>


    <?php get_footer(); ?>
</div>
    <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>

<script src="<?php echo get_template_directory_uri(); ?>/js/frontend/lib/jquery-1.11.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/frontend/src/common.js"></script>
</body>
</html>