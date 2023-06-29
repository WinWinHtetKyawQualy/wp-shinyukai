<?php
/*
template name:privacy
 */
get_header();
?>

<main class="sub-contents">
    <section class="policy-sec common-sec">
        <div class="container">
            <h2 class="h2-ttl">個人情報保護方針</h2>
            <div class="policy-contents">
                <?php
                $intro_txt = scf::get('intro_txt');
                $privacy_gp = scf::get('privacy_gp');
                $privacy_date = scf::get('privacy_date');
                $privacy_name = scf::get('privacy_name');
                ?>

                <?php if(!empty("$intro_txt")){?>
                    <?php echo $intro_txt; ?>
                <?php } ?>
        
                <ul class="privacy-list">
                    <?php foreach ($privacy_gp as $fields) {
                        $privacy_head = $fields['privacy_head'];
                        $privacy_txt = $fields['privacy_txt'];
                    ?>
                    <li>
                    <?php   if (!empty($privacy_head)) {?>
                        <h3 class="h3-ttl"><?php echo $privacy_head; ?></h3>
                    <?php } ?>
                    <?php if(!empty($privacy_txt)){?>
                        <?php echo $privacy_txt; ?>
                    <?php } ?>
                    </li>
                    <?php } ?>
                </ul>
                <p class="txt-right"><?php if(!empty($privacy_date)){ echo $privacy_date; }?> <br />医療法人社団心優会 <br /><?php if(!empty($privacy_name)){ echo $privacy_name; }?></p>
            </div>
        </div>
    </section>
    <?php get_template_part('facilityinfo'); ?>
</main>


<?php
get_footer();
