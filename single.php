<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package numazaki
 */

get_header();

?>
<section class="detail-sec bg-gray">
    <div class="container">
        <div class="detail-main cFix">
            <div class="main">
                <div class="post-bl">
                    <div class="post-info">
                        <div class="post-h">
                            <span class="post-date"><?php the_time('Y.m.d'); ?></span>
                            <h1><?php echo get_the_title(); ?></h1>
                        </div>
                    </div>
                    <div class="sin-post post-main bor-tblr">
                        <div class="post-conts">
                            <?php
                            /* Start the Loop */
                            while (have_posts()) : the_post();
                                the_content();
                            endwhile; // End of the loop.
                            ?>
                        </div>
                    </div>
                </div>
                <div class="front-page">
                    <ul>
                        <li>
                            <a href="<?php echo home_url() . '/blog'; ?>" class="col-gp ali-center">
                                <span class="front-arr arr-pos">＜</span>
                                <span class="m-color pl10">一覧に戻る</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
