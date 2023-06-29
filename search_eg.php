<?php get_header(); ?>

<section class="news-sec search-section">
    <div class="container">
        <div class="h2-ttl" id="news-header">新着情報</div>
        <div class="news-block">
        <?php if (have_posts()) : ?>
                <ul class="news-list">
                    <?php while (have_posts()) : the_post(); ?>
                        <li>
                            <a href="">
                                <p class="news-date">
                                    <span class="dt-txt"><?php echo the_date(); ?></span>
                                    <span class="light-org">中江病院</span>
                                </p>
                                <p class="news-txt"><?php echo the_title(); ?></p>
                            </a>
                        </li>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>