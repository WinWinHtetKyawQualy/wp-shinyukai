<?php get_header(); ?>
<section class="sub-mv-section sub-bg">
    <div class="container">
        <div id="breadcrumb" class="pc">
            <div class="crumb">
                <ul class="crumb-in cFix">
                    <li>
                        <a href="#">トップページ</a>
                    </li>
                    <li>
                        <span class="current"><?php printf(esc_html__('%s', 'numazaki'), '<span>' . get_search_query() . '</span>'); ?>の検索結果一覧</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="sub-mv">
            <h2 class="sub-mv-ttl">検索結果一覧</h2>
            <span class="sub-mv-txt">Search</span>
        </div>
    </div>
</section>
<section class="search-section">
    <div class="search-mv m-bg">
        <div class="container">
            <div class="search-container">
                <div class="search-list">
                    <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url('/'); ?>">
                        <input type="text" value="<?php echo get_search_query() ?>" name="s" title="Search" placeholder="サイト内検索">
                        <button type="submit" id="searchsubmit" value="検索" class="ser-btn">
                            <svg class="gUZ B9u U9O kVc mr13" height="18" width="18" viewBox="0 0 24 24" aria-label="search" role="img">
                                <path d="M10 16c-3.31 0-6-2.69-6-6s2.69-6 6-6 6 2.69 6 6-2.69 6-6 6m13.12 2.88l-4.26-4.26A9.842 9.842 0 0 0 20 10c0-5.52-4.48-10-10-10S0 4.48 0 10s4.48 10 10 10c1.67 0 3.24-.41 4.62-1.14l4.26 4.26a3 3 0 0 0 4.24 0 3 3 0 0 0 0-4.24"></path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="w-bg">
        <div class="container">
            <div class="m-w800">
                <div class="search-result-bl">
                    <p class="result-count"><?php printf(esc_html__('%sの検索結果は', 'numazaki'), '<span>' . get_search_query() . '</span>'); ?><span>
                            <?php /* Search Count */ $allsearch = new WP_Query("s=$s&showposts=-1");
                            $key = wp_specialchars($s, 1);
                            $count = $allsearch->post_count;
                            _e('');
                            echo $count . ' ';
                            wp_reset_query(); ?></span>件です。</p>
                    <?php if (have_posts()) : ?>
                        <div class="search-result-li">
                            <ul class="result-li">
                                <?php while (have_posts()) : the_post(); ?>
                                    <li>
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="result-bl">
                                                <div class="result-img">
                                                    <?php if (has_post_thumbnail()) : ?>
                                                        <?php the_post_thumbnail('thumbnail,'); ?>
                                                    <?php else : ?>
                                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/common/n_noimage.png" alt="沼﨑病院デフォルト画像" />
                                                    <?php endif; ?>
                                                </div>
                                                <div class="result-info">
                                                    <p class="post-ttl"><?php echo wp_trim_words(get_the_title(), 30, "..."); ?></p>
                                                    <p class="post-txt"><?php print custom_trim_excerpt(get_the_content()); ?></p>
                                                </div>
                                            </div>
                                            <p class="news-li-info-sp sp">もっと読む</p>
                                        </a>
                                    </li>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            </ul>
                            <div class="pagination">
                                <?php wp_pagenavi(); ?>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="accident-new">
                            <p><?php printf(esc_html__('%s', 'jps'), get_search_query()); ?>に該当する事例は見つかりませんでした。<br>検索キーワードを変更して再度検索をお願いいたします。</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>