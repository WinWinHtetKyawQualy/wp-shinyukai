<?php
/*template name:news*/

get_header();
?>
<section class="news-sec ">
    <div class="container">
        <div class="h2-ttl" id="news-header">新着情報</div>
        <?php
        query_posts(array(
            'post_type' => 'post',
            'posts_per_page' => 10
        ));
        ?>
        <div class="news-block">
            <ul class="news-list">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>">
                                <p class="news-date">
                                    <span class="dt-txt"><?php the_time('Y.m.d'); ?></span>
                                    <?php
                                    $category = get_the_category();
                                    $category_name = $category[0]->name;
                                    if ($category_name === '中江病院') {
                                        echo '<span class="light-org">中江病院</span>';
                                    } elseif ($category_name === '留萌記念病院') {
                                        echo '<span class="dark-pink">留萌記念病院</span>';
                                    } elseif ($category_name === '加藤病院') {
                                        echo '<span class="extra-dark-org">加藤病院</span>';
                                    } elseif ($category_name === '野口病院') {
                                        echo '<span class="dark-org">野口病院</span>';
                                    } else {
                                        echo '<span></span>';
                                    }
                                    ?>
                                </p>
                                <p class="news-txt"><?php echo wp_trim_words(get_the_title(), 30, "..."); ?></p>
                            </a>
                        </li>
                <?php endwhile;
                endif; ?>
                <?php wp_reset_postdata(); ?>
            </ul>
        </div>
        <div class="pagination">
            <a href="#" class="prev">前へ</a>
            <a href="#" class="page active">1</a>
            <a href="#" class="page">2</a>
            <a href="#" class="page">3</a>
            <a href="#" class="next">次へ</a>
        </div>
    </div>
</section>

<?php
get_footer();
