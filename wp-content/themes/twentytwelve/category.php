<?php get_header(); ?>
<div class="section">
    <h2 style="text-align: center;color:#0db3c7"><?php single_cat_title(); ?></h2>
    <ul class="list">

        <?php while (have_posts()) : the_post();?>
            <li>
                <a href="<?php the_permalink(); ?>">
                    <span class="date"><?php echo get_the_date("Y-m-d"); ?></span>
                    <h4 class="title ellipsis"><?php the_title(); ?></h4>
                </a>
            </li>
        <?php endwhile; ?>

    </ul>

    <div class="paginationContainer">

        <?php
        global $wp_query;
        $total = $wp_query->max_num_pages;
        if ($total > 1) {
            if (!$current_page = get_query_var('paged')) {
                $current_page = 1;
            }
            //获取路径
            $permalink_structure = get_option('permalink_structure');
            $format = empty($permalink_structure) ? '&page=%#%' : '/page/%#%/';

            echo paginate_links(array(
                'base' => get_pagenum_link(1) . '%_%',
                'format' => $format,
                'current' => $current_page,
                'total' => $total, 'mid_size' => 4,
                'type' => 'list'
            ));
        }
        ?>
    </div>
</div>


<?php get_footer(); ?>

</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/frontend/lib/jquery-1.11.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/frontend/src/common.js"></script>
</body>
</html>