<?php
    $news_id=1;//
    $baseUrl=home_url()."/app/";
?>
    <?php get_header(); ?>

    <script type="text/template" id="resultTpl">
        {@if !noData}
        {@each results as r}
        <li style="padding-left:15%">
            {@if r.status==0}
            <a href="<?php echo $baseUrl; ?>user/competitions/${r.id}/register">
                {@else}
                <a href="<?php echo $baseUrl; ?>user/competitions/${r.id}">
                    {@/if}
                    <img class="thumb" src="${r.logo}">
                    <div class="info">
                        <div class="titleContainer">
                            {@if r.status==0}
                            <span class="status tColor2">报名截止：${r.date_reg_end}</span>
                            {@else if r.status==1}
                            <span class="status tColor1">进行中...</span>
                            {@else}
                            <span class="status tColor1">已结束</span>
                            {@/if}

                            <h3 class="title ellipsis">${r.name}</h3>
                        </div>
                            <span class="intro">
                                <label>项目:</label>
                                <span>${r.athletic_item.name}</span>
                            </span>
                            <span class="intro">
                                <label>类型:</label>
                                <span>${r.typeTxt}</span>
                            </span>
                            <span class="intro">
                                <label>城市:</label>
                                <span>${r.loc_state}/${r.loc_city}/${r.loc_country}</span>
                            </span>
                            <span class="intro">
                                <label>开赛时间:</label>
                                <span>${r.date_started}</span>
                            </span>
                            <span class="intro">
                                <label>已报名:</label>
                                <span>${r.registered_teams}</span>
                            </span>
                        <br>
                            <span class="intro">
                                <label class="introTxtLabel">主办:</label>
                                <span class="introTxt ellipsis">${r.host}</span>
                            </span>
                            <span class="intro">
                                <label class="introTxtLabel">承办:</label>
                                <span class="introTxt ellipsis">${r.organizer}</span>
                            </span>
                            <span class="intro">
                                <label class="introTxtLabel">赞助:</label>
                                <span class="introTxt ellipsis">${r.sponsor}</span>
                            </span>
                    </div>
                </a>
        </li>
        {@/each}
        {@else}
        <li class="tColor1 noData">${noData}</li>
        {@/if}
    </script>

    <div class="roll">
        <link href="<?php echo plugins_url(); ?>/simple-responsive-slider/assets/css/responsiveslides.css" type="text/css" rel="stylesheet">

        <?php
            if ( function_exists( 'show_simpleresponsiveslider' ) ) show_simpleresponsiveslider();
        ?>

    </div>
    <div class="section">
        <div class="titles">
            <h1 class="title">赛事公告</h1>
            <h3 class="subTitle">各种热门赛事</h3>
        </div>
        <ul class="list3" id="myList">

        </ul>
        <a class="more" href="<?php echo $baseUrl; ?>user/competitions/">查看更多</a>
    </div>
   <!-- <div class="section">
        <div class="titles titles1">
            <h1 class="title">万余场地，等你来战</h1>
            <h3 class="subTitle">找到你所需要的场地</h3>
        </div>
        <img src="<?php /*echo get_template_directory_uri(); */?>/images/frontend/app/banner2.jpg">
        <a class="more more1" href="<?php /*echo $baseUrl; */?>user/sites/">查看更多</a>
    </div>-->
    <div class="section">
        <div class="titles">
            <h1 class="title">公司新闻</h1>
            <h3 class="subTitle">公司的各种新闻</h3>
        </div>
        <ul class="list">
            <?php
            // The Query
            $query = new WP_Query(array(
                "cat"=>$news_id,"posts_per_page"=>5,"orderby"=>'date',"order"=>'DESC'
            ));

            // The Loop
            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
                    ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <span class="date"><?php echo get_the_date("Y-m-d"); ?></span>
                            <h4 class="title ellipsis"><?php the_title(); ?></h4>
                        </a>
                    </li>
                <?php
                }
            }

            /* Restore original Post Data */
            wp_reset_postdata();

            ?>

        </ul>
        <a class="more" href="<?php echo get_category_link($news_id);?>">查看更多</a>
    </div>

    <?php get_footer(); ?>
</div>


<script src="<?php echo get_template_directory_uri(); ?>/js/frontend/lib/jquery-1.11.1.min.js"></script>
<script src="<?php echo plugins_url(); ?>/simple-responsive-slider/assets/js/responsiveslides.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/frontend/lib/juicer-min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/frontend/src/common.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/frontend/src/index.js"></script>
<script>
    <?php
       global $simple_responsive_slider;
       $simple_responsive_slider->dynamics_scripts();
    ?>
</script>
</body>
</html>