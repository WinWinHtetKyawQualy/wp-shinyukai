<?php
/*
template name:kenshin-zaitaku
 */

get_header();
?>

<section class="sub-mv-section sub-bg">
    <div class="container">
        <div class="pc">
            <?php echo the_breadcrumb(); ?>
        </div>
        <div class="sub-mv">
            <h2 class="sub-mv-ttl">健康診断・在宅医療</h2>
            <span class="sub-mv-txt">Health checkup/Home medical care</span>
        </div>
    </div>
</section>

<div class="panels dept-border">
    <section class="page-anchor mt80 mt45-sp mb90 mb35-sp">
        <!-- TODO section with many buttons will go here -->
        <div class="container m-w800">
            <ul class="anchor-list">
                <li>
                    <a class="goto" href="#item01-sec">
                        <div class="goto-left-side">
                            <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/kenshin-zaitaku/item01.png" alt="診療科目"></div>
                            <p class="goto-description">各種健診・検査のご案内</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="goto" href="#item02-sec">
                        <div class="goto-left-side">
                            <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/kenshin-zaitaku/item02.png" alt="診療時間"></div>
                            <p class="goto-description">特定健康診査のご案内</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="goto" href="#item03-sec">
                        <div class="goto-left-side">
                            <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/kenshin-zaitaku/item03.png" alt="外来担当医表"></div>
                            <p class="goto-description">在宅医療について</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <section id="item01-sec" class="sec-01 com-section-pad bg-gray">
        <div class="container">
            <h2 class="h2-ttl h2-mb">各種健診・検査のご案内</h2>
            <h3 class="gairai-procedure-ttl mt40 mt25-sp">当院で行っている健診</h3>
            <p>健康に関心はあるけれど、つい自分のことは疎かにしてしまう。そんなことはありませんか？<br>毎日のお仕事や生活に追われて、皆様お忙しい日々をお過ごしかと思いますが、年に1度の健康診断の受診をお勧めします。
            </p>

            <div class="emp-info-table th-280 td-no-bg">
                <table>
                    <tbody>
                        <tr>
                            <th style="width:20%;">健診名</th>
                            <th style="width:65%">内容</th>
                            <th style="width:15%">料金（税込）</th>
                        </tr>
                        <tr>
                            <td>一般定期健診</td>
                            <td>労働安全衛生法による各職場で行われる企業検診や、個人が健康状態の評価のために行う一般健診などがあります。</td>
                            <td>3,080円～</td>
                        </tr>
                        <tr>
                            <td>特定健康診査（メタボ健診）</td>
                            <td>厚生労働省により、平成20年から実施が義務付けられた、メタボリックシンドローム（内臓脂肪型肥満）に着目した健康診査です。</td>
                            <td>各種</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section>

    <section id="item02-sec" class="sec-02 com-section-pad">
        <div class="container">
            <h2 class="h2-ttl h2-mb">特定健康診査のご案内</h2>
            <h3 class="gairai-procedure-ttl mt40 mt25-sp">特定健診の目的</h3>
            <p>医療制度改革に伴い、平成20年4月から国民健康保険や健康保険組合などすべての医療保険者において、「特定健康診査・特定保健指導」いわゆる「メタボ健診」の実施が義務付けられました。<br>新たな特定健診では、生活習慣病の早期発見の為、メタボリックッシンドロームに関する検査が追加され、生活習慣病予備軍に対して指導～治療が求められることになります。<br>糖尿病などの生活習慣病、特に内臓脂肪症候群（メタボリックシンドローム）に着目した生活習慣病予防のための健診です。
            </p>
            <h3 class="gairai-procedure-ttl mt40 mt25-sp">特定健診の対象者</h3>
            <p>特定健康診査の対象者は、特定健診の実施年度に40歳から74歳の年齢に達する者。</p>

        </div>
    </section>

    <section id="item03-sec" class="sec-03 com-section-pad bg-gray">
        <div class="container">
            <h2 class="h2-ttl h2-mb">在宅医療について</h2>

            <p class="nav-desc" style="margin-top:30px">このページでは次の情報をご案内しています。</p>
            <div class="recruit-info-gp">
                <ul class="recruit-info-li">
                    <li>
                        <a href="#anchor01">在宅医療とは？</a>
                    </li>
                    <li>
                        <a href="#anchor02">当院の在宅医療の種類と内容</a>
                    </li>
                    <li>
                        <a href="#anchor03">在宅医療をうけるには</a>
                    </li>
                </ul>
            </div>
            <h3 class="gairai-procedure-ttl mt40 mt25-sp" id='anchor01'>在宅医療とは？</h3>
            <p>在宅医療とは、患者様のお宅に医療関係者が訪問して医療を行うことです。医療サービスには、入院や通院の他、住み慣れた自宅や施設で診療を受ける在宅医療という方法もあります。</p>
            <p>本来これらの受療手段は患者様に最も適したものが選択されるべきですが、在宅医療は入院や通院に比べて質・量ともに充実しているとは言い難いのが現状です。私たちは医療サービスの幅を広げて療養生活を豊かにするため在宅医療の発展に取り組んでいます。
            </p>
            <h3 class="gairai-procedure-ttl mt40 mt25-sp" id='anchor02'>当院の在宅医療の種類と内容</h3>

            <div class="emp-info-table th-280 td-no-bg">
                <table>
                    <tbody>
                        <tr>
                            <th style="width:15%;">種類</th>
                            <th style="width:20%">訪問者</th>
                            <th style="width:60%">内容の項目</th>
                        </tr>
                        <tr>
                            <td rowspan="0">訪問診療</td>
                            <td rowspan="0">医師・看護師</td>
                            <td>一般診療</td>
                        </tr>
                        <tr>
                            <td>経管栄養の管理・指導</td>
                        </tr>
                        <tr>
                            <td>導尿や尿カテーテルの管理・指導</td>
                        </tr>
                        <tr>
                            <td>吸痰や吸入の管理・指導</td>
                        </tr>
                        <tr>
                            <td>悪性腫瘍終末期診療</td>
                        </tr>
                        <tr>
                            <td>末梢点滴・注射</td>
                        </tr>
                        <tr>
                            <td>床ずれなどの創傷の予防や治療処置</td>
                        </tr>
                        <tr>
                            <td>血液検査・尿検査・便検査</td>
                        </tr>
                        <tr>
                            <td>心電図検査</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h3 class="gairai-procedure-ttl mt40 mt25-sp" id='anchor03'>在宅医療をうけるには</h3>
            <ul class="pro-sub-block">
                <li>寝たきりの状態、準寝たきりの状態、機器をつけたまま退院されて、通院困難になった場合に在宅医療を利用することが出来ます。</li>
                <li>在宅医療を利用する場合、主治医にご相談ください。</li>
                <li>介護保険をご利用の方は、担当ケアマネージャーにご相談ください。</li>
            </ul>
        </div>
    </section>

</div>

<?php
get_footer();
