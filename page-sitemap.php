<?php
/*
template name:sitemap
 */

get_header();
?>

<section class="sub-mv-section sub-bg">
    <div class="container">
        <div class="pc">
            <?php echo the_breadcrumb(); ?>
        </div>
        <div class="sub-mv">
            <h2 class="sub-mv-ttl">サイトマップ</h2>
            <span class="sub-mv-txt">Site Map</span>
        </div>
    </div>
</section>
<section class="sitemap-section">
    <div class="sitemap-container">
        <div class="">
            <ul class="sitemap-ul">
                <li class="sitemap-ul-li">
                    <ul class="column-ul">
                        <li class="column-li">
                            <a href="<?php echo home_url(); ?>" class="left-bdr-1">留萌記念病院</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/news'; ?>">お知らせ</a>
                        </li>
                    </ul>

                    <ul class="column-ul">
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/about'; ?>" class="left-bdr-1">心優会について</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/about/#greeting'; ?>">理事長あいさつ</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/about/#basic-principle'; ?>">基本理念</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/about/#lperson-history'; ?>">法人沿革</a>
                        </li>
                    </ul>

                    <ul class="column-ul">
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/info'; ?>" class="left-bdr-1">施設のご案内</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/nyuuin/#item01-sec'; ?>">施設のご案内</a>
                        </li>
                    </ul>

                </li>

                <li class="sitemap-ul-li">
                    <ul class="column-ul">
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/recruit'; ?>" class="left-bdr-1">採用情報</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/recruit/#recruit'; ?>">各種健診・検査のご案内</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</section>

<?php
get_footer();
