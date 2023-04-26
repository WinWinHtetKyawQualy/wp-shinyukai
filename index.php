<?php

get_header();
?>

<section class="mv-section">
    <div class="loopImg">
        <div class="loopImg-container"></div>
    </div>
    <h2 class="mv-ttl">原点は優しい心<br />患者さま中心の医療を実施し<br />心のこもったケアをいたします</h2>
</section>
<section class="info-section">
    <div class="container">
        <div class="information">
            <h2 class="h2-ttl h2-mb">診療科目のご案内</h2>
            <div class="info-block">
                <ul>
                    <li>
                        <a href="<?php echo home_url() . '/gairai/#inner-link-01'; ?>">
                            <div class="info-img">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/common/info-img1.png" alt="内科" />
                            </div>
                            <p class="in-sty">内科</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url() . '/gairai/#inner-link-02'; ?>">
                            <div class="info-img">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/common/info-img2.png" alt="消化器内科" />
                            </div>
                            <p class="in-sty">消化器内科</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url() . '/gairai/#inner-link-03'; ?>">
                            <div class="info-img">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/common/info-img3.png" alt="外科" />
                            </div>
                            <p class="in-sty">外科</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url() . '/gairai/#inner-link-04'; ?>">
                            <div class="info-img">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/common/info-img4.png" alt="整形外科" />
                            </div>
                            <p class="in-sty">整形外科</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url() . '/gairai/#inner-link-05'; ?>">
                            <div class="info-img">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/common/info-img5.png" alt="肛門外科" />
                            </div>
                            <p class="in-sty">肛門外科</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url() . '/gairai/#inner-link-06'; ?>">
                            <div class="info-img">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/common/info-img6.png" alt="リハビリテーション科" />
                            </div>
                            <p class="in-sty">リハビリ
                                <br />
                                <p class="in-sty">テーション科</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="news-section" id="news-section">
    <div class="container">
        <div class="news">
            <h2 class="h2-ttl">
                <span> お知らせ </span>
            </h2>
            <?php
            query_posts(array(
                'post_type' => 'post',
                'posts_per_page' => 3
            ));
            ?>
            <div class="news-block">
                <ul class="news-block-ul">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <li class="news-block-li">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="new-box">
                                        <div class="news-li-date">
                                            <p><?php the_time('Y.m.d'); ?></p>
                                        </div>
                                        <div class="news-li-info">
                                            <p class="news-li-post"><?php echo wp_trim_words(get_the_title(), 30, "..."); ?></p>
                                            <p class="news-li-info-sp sp">もっと読む</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                    <?php endwhile;
                    endif; ?>
                    <?php wp_reset_postdata(); ?>
                </ul>
            </div>
            <div class="top-com-btn">
                <a href="<?php echo home_url() . '/news'; ?>">
                    <p class="btn-txt">お知らせ一覧</p>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- section class="staff-section">
    <div class="container">
        <h2 class="h2-ttl">スタッフブログ</h2>
        <?php
        query_posts(array(
            'post_type' => 'blog',
            'posts_per_page' => 3
        ));
        ?>
        <div class="staff-margin">
            <div class="staff-block-container">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="staff-block">
                        <a href="<?php the_permalink(); ?>">
                            <div class="staff-box">
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
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
        <div class="top-com-btn">
            <a href="<?php echo home_url() . '/blog'; ?>">
                <p class="btn-txt">もっと見る</p>
            </a>
        </div>
    </div>
</section -->

<?php
get_footer();
