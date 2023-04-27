<?php
/*
template name:recruit
 */

get_header();
?>

<section class="sub-mv-section sub-bg">
    <div class="container">
        <div class="pc">
            <?php echo the_breadcrumb(); ?>
        </div>
        <div class="sub-mv">
            <h2 class="sub-mv-ttl">採用情報</h2>
            <span class="sub-mv-txt">Recruit</span>
        </div>
    </div>
</section>

<section class="page-anchor mt80 mt0-sp mb90 mb40-sp pt40-sp">
    <div class="container m-w800">
        <ul class="anchor-list">
            <li>
                <a class="goto" href="#recruitment-information-graduates">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/recruit/item-1.png" alt="募集職種のご案内" /></div>
                        <p class="goto-description">高卒新卒向け採用情報</p>
                    </div>
                </a>
            </li>

            <li>
                <a class="goto" href="#about-recruitment">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/recruit/item-2.png" alt="職員募集について" /></div>
                        <p class="goto-description">採用情報</p>
                    </div>
                </a>
            </li>
            <li>
                <a class="goto" href="#recruitment-information-list">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/recruit/item-3.png" alt="採用情報" /></div>
                        <p class="goto-description">採用情報一覧</p>
                    </div>
                </a>
            </li>

        </ul>
    </div>
</section>


<?php
get_footer();
