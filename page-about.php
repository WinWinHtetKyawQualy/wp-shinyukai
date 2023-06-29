<?php
/*
template name:about
 */

get_header();
?>

<main>
    <section class="page-anchor pt80 pb100 pt60-sp pb60-sp">
        <div class="container m-w800">
            <ul class="anchor-list">
                <li>
                    <a class="goto" href="#shinyukai-info01">
                        <div class="goto-left-side">
                            <!-- <div class="goto-icon"><img class="inline-block" src="" alt="院長挨拶"></div> -->
                            <p class="goto-description">理事長あいさつ</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="goto" href="#shinyukai-info02">
                        <div class="goto-left-side">
                            <!-- <div class="goto-icon"><img class="inline-block" src="" alt="病院概要・沿革"></div> -->
                            <p class="goto-description">基本理念</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="goto" href="#shinyukai-info03">
                        <div class="goto-left-side">
                            <!-- <div class="goto-icon"><img class="inline-block" src="" alt="交通アクセス"></div> -->
                            <p class="goto-description">法人沿革</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <section class="greeting-section bg-gray pt80 pt45-sp pb90 pb45-sp" id="shinyukai-info01">
        <div class="container">
            <div class="abouts">
                <h2 class="h2-ttl">
                    <span>理事長あいさつ</span>
                </h2>
                <div class="greeting-block procedure-detail">
                    <?php
                    $about_greeting = SCF::get('about_greeting');
                    if (!empty($about_greeting)) { ?>
                        <p class="greeting-pg"><?php echo $about_greeting ?></p>
                    <?php } ?>
                    <?php
                    $about_name = SCF::get('about_name');
                    if (!empty($about_name)) { ?>
                        <p class="greeting-name"><?php echo $about_name ?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <section class="principle-section mt80  mt45-sp mb90 mb45-sp" id="shinyukai-info02">
        <div class="container">
            <div class="abouts">
                <h2 class="h2-ttl h2-mb">
                    <span>基本理念</span>
                </h2>
                <div class="procedure-detail dot">
                    <?php
                    $about_policy = SCF::get('about_policy');
                    if (!empty($about_policy)) { ?>
                        <div><?php echo $about_policy ?></div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <section class="history-section bg-gray pt80 pt45-sp pb90 pb45-sp" id="shinyukai-info03">
        <div class="container m-w800">
            <h2 class="h2-ttl h2-mb">法人沿革</h2>
            <div class="emp-info-table">
                <table>
                    <tbody>
                        <?php
                        $about_gp = SCF::get('about_gp');
                        foreach ($about_gp as $fields) {
                        ?>
                            <tr>
                                <td><?php echo $fields['about_date']; ?></td>
                                <td><?php echo $fields['about_content']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <?php get_template_part("facilityinfo") ?>
</main>
<?php
get_footer();
