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
                            <a href="<?php echo home_url() . '/gairai'; ?>" class="left-bdr-1">外来のご案内</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/gairai/#gairai-sec01'; ?>">禁煙外来について</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/gairai/#gairai-sec02'; ?>">受診される方へ</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/gairai/#gairai-sec03'; ?>">患者様の相談窓口</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/gairai/#gairai-sec04'; ?>">敷地内禁煙について</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/gairai/#gairai-sec05'; ?>">診療科のご案内</a>
                        </li>
                    </ul>

                    <ul class="column-ul">
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/nyuuin'; ?>" class="left-bdr-1">入院のご案内</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/nyuuin/#item01-sec'; ?>">入院の準備・手続き</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/nyuuin/#item02-sec'; ?>">入院生活について</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/nyuuin/#item03-sec'; ?>">費用とお支払方法</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/nyuuin/#item04-sec'; ?>">お見舞いについて</a>
                        </li>
                    </ul>

                    <ul class="column-ul">
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/department'; ?>" class="left-bdr-1">部門紹介</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/department/#item01-sec'; ?>">看護部門</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/department/#item02-sec'; ?>">医療技術部門</a>
                        </li>
                    </ul>
                </li>

                <li class="sitemap-ul-li">
                    <ul class="column-ul">
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/kenshin-zaitaku'; ?>" class="left-bdr-1">健康診断・在宅医療</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/kenshin-zaitaku/#item01-sec'; ?>">各種健診・検査のご案内</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/kenshin-zaitaku/#item02-sec'; ?>">特定健康診査のご案内</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/kenshin-zaitaku/#item03-sec'; ?>">在宅医療について</a>
                        </li>
                    </ul>

                    <ul class="column-ul">
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/about'; ?>" class="left-bdr-1">病院紹介</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/about/#greeting-section'; ?>">院長　あいさつ</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/about/#overview-section'; ?>">病院概要・沿革</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/about/#traffic-section'; ?>">交通アクセス</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/about/#floor-section'; ?>">フロアガイド</a>
                        </li>
                    </ul>

                    <ul class="mb-0 column-ul">
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/recruit'; ?>" class="left-bdr-1">採用情報</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/recruit/#recruitment-information-graduates'; ?>">高卒新卒向け採用情報</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/recruit/#about-recruitment'; ?>">採用情報</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/recruit/#recruitment-information-list'; ?>">採用情報一覧</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</section>

<?php
get_footer();
