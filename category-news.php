<?php
/*template name:news*/

get_header();
?>

<section class="sub-mv-section sub-bg">
    <div class="container">
        <div class="pc">
            <?php echo the_breadcrumb(); ?>
        </div>
        <div class="sub-mv">
            <h2 class="sub-mv-ttl">お知らせ</h2>
            <span class="sub-mv-txt">News</span>
        </div>
    </div>
</section>
<section class="news-sec">
    <div class="container">
        <div class="news-main cFix">
            <div class="main">
                <div class="news">
                    <ul class="news-block-ul">
                        <?php $args = array(
                        'post_type'         => 'post',
                        'posts_per_page'    => 10,
                        'paged'             => $paged,
                    );
                    $q = new WP_Query($args);
                    if ($q->have_posts()) :
                        while ($q->have_posts()) :$q->the_post();?>
                                <li class="news-block-li">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="new-box bot-bt pb35">
                                            <div class="news-li-date">
                                                <p><?php the_time('Y.m.d'); ?></p>
                                            </div>
                                            <div href="<?php the_permalink(); ?>" class="news-li-info">
                                                <p class="news-li-post"><?php echo wp_trim_words(get_the_title(), 30, "..."); ?></p>
                                                <p class="news-li-info-sp sp">もっと読む</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                        <?php endwhile;
                        endif; ?>
                        <?php wp_reset_query(); ?>
                    </ul>
                    <div class="pagination mt50 mt30-sp">
                        <?php wp_pagenavi(array('query' => $q)); ?>
                    </div>
                </div>
            </div>
            <div class="right-side">
                <?php get_sidebar() ?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();