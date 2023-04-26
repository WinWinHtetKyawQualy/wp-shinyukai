<div class="archive-bl">
    <h3>月別アーカイブ</h3>
    <ul class="post-li">
        <?php wp_get_archives(array('type' => 'monthly', 'show_post_count' => 'true')); ?>
    </ul>
</div>
<div class="recent-post">
    <h3>最近の記事</h3>
    <ul class="post-li">
        <?php
        query_posts(array(
            'post_type' => array('news', 'blog', 'post'),
            'posts_per_page' => 3
        ));
        ?>
        <?php while (have_posts()) : the_post(); ?>
            <li>
                <a href="<?php echo the_permalink(); ?>"><?php echo get_the_title(); ?></a>
            </li>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
    </ul>
</div>