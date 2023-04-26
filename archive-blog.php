<?php
get_header();
?>

<section class="sub-mv-section sub-bg">
    <div class="container">
        <div class="pc">
            <?php echo the_breadcrumb(); ?>
        </div>
        <div class="sub-mv">
            <h2 class="sub-mv-ttl">スタッフブログ</h2>
            <span class="sub-mv-txt">Blogs</span>
        </div>
    </div>
</section>
<section class="blog-section m-bg">
    <div class="container">
        <div class="m-w800">
            <div class="blog-block">
                <?php if (have_posts()) : while (have_posts()) : the_post();?>
                        <div class="staff-block">
                            <a href="<?php the_permalink(); ?>">
                                <div class="staff-box staff-mb-st">
                                    <div class="staff-img">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('thumbnail,'); ?>
                                        <?php else : ?>
                                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/common/n_noimage.png" alt="沼﨑病院デフォルト画像" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="staff-txt">
                                        <p><?php the_time('Y.m.d'); ?></p>
                                        <p><?php echo wp_trim_words(get_the_title(), 30, "..."); ?></p>
                                    </div>
                                </div>
                                <p class="news-li-info-sp sp">もっと読む</p>
                            </a>
                        </div>
                <?php endwhile;
                endif; ?>
                <?php wp_reset_query(); ?>
            </div>
            <div class="pagination">
                <?php wp_pagenavi(); ?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
