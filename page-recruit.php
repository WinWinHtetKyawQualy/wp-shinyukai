<?php
/*
template name:recruit
 */

get_header();
?>

<!-- <section id="employment-information-list" class="item03-sec recruitment-information-list mb0" style="padding-bottom: 80px;">
    <div class="container m-w800">
        <h2 class="h2-ttl h2-mb">採用情報</h2>
        <div class="recruit-info-gp">
            <ul class="recruit-info-li">
                <li>
                    <a href="#recruit-info01" style="height: 52px;">看護師</a>
                </li>
                <li>
                    <a href="#recruit-info02" style="height: 52px;">看護補助者・介護職員</a>
                </li>
            </ul>
        </div>

        <?php
        $recruit_gp = SCF::get('recruit_gp');
        foreach ($recruit_gp as $fields) {
        ?>
            <div>
                <h3 id="<?php echo $fields['r_radio']; ?>" class="emp-info-text"><?php echo $fields['r_big']; ?></h3>

                <div class="emp-info-table">
                    <h4 class="pro-sub-ttl" style="margin-top:25px;"><?php echo $fields['r_mid']; ?></h4>
                    <?php if( $fields['r_situation'] == 'on' ): ?> 
                    <table border="1" caption="採用情報" width="100%" id="joboffer">
                        <tbody>
                            <tr>
                                <th>職種</th>
                                <td><?php echo $fields['row_1']; ?></td>
                            </tr>
                            <tr>
                                <th>募集内容</th>
                                <td><?php echo $fields['row_2']; ?></td>
                            </tr>
                            <tr>
                                <th>試用期間</th>
                                <td><?php echo $fields['row_3']; ?></td>
                            </tr>
                            <tr>
                                <th>業務内容</th>
                                <td><?php echo $fields['row_4']; ?></td>
                            </tr>
                            <tr>
                                <th>勤務時間</th>
                                <td><?php echo $fields['row_5']; ?></td>
                            </tr>
                            <?php if (!empty($fields['row_6'])) { ?>
                                <tr>
                                    <th>休日・休暇</th>
                                    <td><?php echo $fields['row_6']; ?></td>
                                </tr>
                            <?php } ?>
                            <?php if (!empty($fields['row_7'])) { ?>
                                <tr>
                                    <th>社会保険</th>
                                    <td><?php echo $fields['row_7']; ?></td>
                                </tr>
                            <?php } ?>
                            <?php if (!empty($fields['row_8'])) { ?>
                                <tr>
                                    <th>子育て支援制度</th>
                                    <td><?php echo $fields['row_8']; ?></td>
                                </tr>
                            <?php } ?>
                            <?php if (!empty($fields['row_9'])) { ?>
                                <tr>
                                    <th>マイカー通勤</th>
                                    <td><?php echo $fields['row_9']; ?></td>
                                </tr>
                            <?php } ?>
                            <?php if (!empty($fields['row_10'])) { ?>
                                <tr>
                                    <th>給与等</th>
                                    <td><?php echo $fields['row_10']; ?></td>
                                </tr>
                            <?php } ?>
                            <?php if (!empty($fields['row_11'])) { ?>
                                <tr>
                                    <th>マイカー通勤</th>
                                    <td><?php echo $fields['row_11']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?php elseif( $fields['r_situation'] == 'off' ): ?> 
                    <p class="mt20 text-center">現在募集を行なっておりません。</p>
                    <?php endif; ?>
                </div>

            </div>
        <?php } ?>

    </div>
</section> -->
<section class="item02-sec">
    <div class="container m-w800">
        <h2 class="h2-ttl h2-mb">採用情報一覧</h2>
        <div class="table-dec td-anchor-blue">
        <?php $r_top_table = scf::get('r_top_table'); echo $r_top_table; ?>
        </div>
    </div>
</section>
<?php get_template_part('facilityinfo'); ?>
<?php
get_footer();
