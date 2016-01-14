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


<script src="<?php echo get_template_directory_uri(); ?>/js/frontend/lib/jquery-1.11.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/frontend/src/common.js"></script>
</body>
</html>