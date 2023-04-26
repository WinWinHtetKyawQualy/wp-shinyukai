<?php
/*
template name:about
 */

get_header();
?>

<section class="sub-mv-section sub-bg">
    <div class="container">
        <div class="pc">
            <?php echo the_breadcrumb(); ?>
        </div>
        <div class="sub-mv">
            <h2 class="sub-mv-ttl">病院紹介</h2>
            <span class="sub-mv-txt">Hospital Information</span>
        </div>
    </div>
</section>
<section class="page-anchor pt80 pb100 pt60-sp pb60-sp">
    <!-- TODO section with many buttons will go here -->
    <div class="container m-w800">
        <ul class="anchor-list">
            <li>
                <a class="goto" href="#greeting-section">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/abouts/item01.png" alt="院長挨拶" /></div>
                        <p class="goto-description">院長　あいさつ</p>
                    </div>
                </a>
            </li>

            <li>
                <a class="goto" href="#overview-section">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/abouts/item02.png" alt="病院概要・沿革" /></div>
                        <p class="goto-description">病院概要・沿革</p>
                    </div>
                </a>
            </li>
            <li>
                <a class="goto" href="#traffic-section">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/abouts/item03.png" alt="交通アクセス" /></div>
                        <p class="goto-description">交通アクセス</p>
                    </div>
                </a>
            </li>

            <li>
                <a class="goto" href="#floor-section">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/abouts/item04.png" alt="フロアガイド" /></div>
                        <p class="goto-description">フロアガイド</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</section>
<section class="greeting-section bg-gray">
    <div class="container">
        <div class="abouts">
            <h2 class="h2-ttl" id="greeting-section">
                <span> 院長　あいさつ </span>
            </h2>
            <div class="greeting-block">
                <p class="greeting-pg">
                    高齢者の方の多くの望みは、住み慣れた街や場所で、関わりを持ってきた親しい人たちと最後まで生活したいという思いです。自然な思いを実現するために当院はそのニーズに応えて参りたいと思います。<br>
                    当院は、長期に療養生活を行う方々の為の療養型病院です。そのため病院が治療の場であることに加えて、生活の場としての役割も重要となります。病院で暮らすという事を大前提に捉え、患者様の入院生活の質の向上に努めてまいります。スタッフ全員が大家族となって高齢者のお世話に特化した経験と技術を活かし、患者様を私たちの家族と想い接してゆきます。
                    また医療・介護・福祉の連携によって、地域と人に着目した切れ目のない環境を構築いたします。

                </p>
                <p class="greeting-name">院長　三輪　英則</p>
            </div>
        </div>
    </div>
</section>
<section class="overview-section">
    <div class="container">
        <div class="abouts">
            <h2 class="h2-ttl" id="overview-section">
                <span> 病院概要・沿革 </span>
            </h2>


            <p class="nav-desc" style="margin-top:30px">このページでは次の情報をご案内しています。</p>
            <div class="recruit-info-gp">
                <ul class="recruit-info-li">
                    <li>
                        <a href="#anchor01">病院概要</a>
                    </li>
                    <li>
                        <a href="#anchor02">施設概要</a>
                    </li>
                    <li>
                        <a href="#anchor03">沿革</a>
                    </li>
                </ul>
            </div>

            <h3 class="overview-text h3-ttl" id="anchor01">病院概要</h3>
            <p>
                当院は、主に慢性疾患のご高齢の患者様を対象とした医療機関です。病状は安定しているものの継続的な療養が必要な患者様を対象にして看護とリハビリテーションを重点に置き、快適な環境の中で在宅復帰を目指していただく病院です。<br>

                療養型病院のために、廊下の幅、患者様一人当たりの専有面積なども通常の病院より広めにしています。また機能訓練室、食堂、体の不自由な方が入浴できる施設等も完備。適性に合わせ、無理なく患者様の力を引き出す、カリキュラムを大切にしています。
            </p>
            </h4>
            <h3 class="overview-text h3-ttl" id="anchor02">施設概要</h3>
            <div class=" overview-table">
                <table>
                    <tr>
                        <td>医療機関名</td>
                        <td>医療法人社団　心優会　留萌記念病院</td>
                    </tr>
                    <tr>
                        <td>所在地</td>
                        <td>
                            <ul>
                                <li>〒077-0042　留萌開運町1丁目6番1号</li>
                                <li>電話番号：0164-42-0271　　　Fax番号：0164-42-8608</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>病院長</td>
                        <td> 三輪　英則</td>
                    </tr>
                    <tr>
                        <td>病院種別</td>
                        <td>
                            一般病院
                        </td>
                    </tr>
                    <tr>
                        <td>許可病床数</td>
                        <td>
                            <ul>
                                <li>・117床</li>
                                <li>・2階：医療療養病床（17室/57床）</li>
                                <li>・階：医療療養病床（16室/60床</li>

                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>構造概要</td>
                        <td>
                            構造概要
                        </td>
                    </tr>
                </table>
            </div>
            <div class="history" id="anchor03">
                <h3 class="history-text h3-ttl">沿革</h3>
                <div class="history-list">
                    <ul class='pro-sub-block'>
                        <li>昭和31年6月　澤泉外科医院の発足</li>
                        <li>昭和38年3月　澤泉外科病院として開設</li>
                        <li>昭和49年5月　現在の開運町に移転</li>
                        <li>平成10年3月　医療法人澤泉病院を開設</li>
                        <li>平成17年4月　医療法人社団心優会へ名称変更</li>
                        <li>平成17年4月　医療法人社団心優会留萌記念病院に名称変更</li>
                        <li>平成17年4月　旧39床から101床に申請認可</li>
                        <li>平成18年8月　16床増床工事竣工、117床に増床</li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="traffic-section bg-gray">
    <div class="container">
        <div class="abouts">
            <h2 class="h2-ttl" id="traffic-section">
                <span> 交通アクセス </span>
            </h2>



            <p class="nav-desc mt30 mt15-sp">このページでは次の情報をご案内しています。</p>
            <div class="recruit-info-gp">
                <ul class="recruit-info-li">
                    <li>
                        <a href="#anchor04">お車の場合</a>
                    </li>
                    <li>
                        <a href="#anchor05">JRの場合</a>
                    </li>
                    <li>
                        <a href="#anchor06">バスの場合</a>
                    </li>
                </ul>
            </div>

            <p class="traffic-text">当院へ来院される方へのアクセス情報です。</p>
            <div class="traffic-map">


                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1436.4487964880923!2d141.647646!3d43.940793!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0c689244006633%3A0x522cf5973779d8fb!2z55WZ6JCM6KiY5b-155eF6Zmi!5e0!3m2!1sja!2smm!4v1680492515545!5m2!1sja!2smm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="car-block pb20">
                <h3 class="block-title h3-ttl" id="anchor04">お車の場合</h3>
                <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30">
                    旭川市からのご来院の場合</h4>
                <ul class="pro-sub-block">
                    <li>国道12号線で深川の国道分岐点まで約20分、分岐点を右折し国道233号線で深川を経由して留萌まで約1時間10分。</li>
                </ul>

                <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30">
                    札幌からご来院の場合</h4>
                <ul class="pro-sub-block">
                    <li>高速道路で留萌大和田ICまで約2時間、留萌大和田ICより国道233号線で留萌まで約15分。</li>
                    <li>国道275号線で碧水まで約2時間20分。碧水より国道233号線で留萌まで約40分。</li>
                    <li>国道231号線（日本海側）で留萌まで約2時間30分。</li>
                    <li>国道12号線で深川まで約2時間、深川から国道233号線で留萌まで約1時間。</li>
                </ul>

                <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30">
                    稚内からご来院の場合</h4>
                <ul class="pro-sub-block">
                    <li>道道909号線より天塩まで約1時間10分、天塩から国道232号線で留萌まで約2時間10分。</li>

                </ul>
            </div>
            <div class="car-block pb20">
                <h3 class="block-title h3-ttl" id="anchor05">JRの場合
                </h3>
                <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30">
                    旭川からご来院の場合</h4>
                <ul class="pro-sub-block">
                    <li>旭川から函館本線を利用し特急で深川まで約20分、深川より留萌本線で留萌まで普通列車で約1時間。</li>
                </ul>

                <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30">
                    札幌からご来院の場合</h4>
                <ul class="pro-sub-block">
                    <li>札幌から函館本線を利用し特急で深川まで約60分、深川で乗り換え、深川より留萌本線で留萌まで普通列車で約1時間。</li>

                </ul>

            </div>
            <div class="car-block pb20">
                <h3 class="block-title h3-ttl" id="anchor06">バスの場合
                </h3>
                <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30">
                    旭川からご来院の場合</h4>
                <ul class="pro-sub-block">
                    <li>旭川駅前より留萌直行便で所要時間約2時間10分。</li>
                </ul>

                <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30">
                    札幌からご来院の場合</h4>
                <ul class="pro-sub-block">
                    <li>札幌駅前バスターミナルより留萌直行便で所要時間は約3時間。</li>

                </ul>
                <p>※経由箇所により多少時間が前後します。</p>

            </div>
            <!-- <div class="jr-block">
                <h3 class="block-title h3-ttl">JR・バスの場合</h3>
                <p class="block-txt">
                    JR旭川駅北口より旭川電気軌道・市役所前バス停にて下車。徒歩4分。八条スタルヒン通り沿いにございます。
                </p>
            </div> -->
            <!--<div class="bus-block">
                <p class="block-title">バスの場合</p>
                <p class="block-txt">
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                </p>
            </div>-->
        </div>
    </div>
</section>
<section class="floor-section">
    <div class="container">
        <div class="abouts">
            <h2 class="h2-ttl" id="floor-section">
                <span> フロアガイド </span>
            </h2>


            <p class="nav-desc mt30 mt15-sp">このページでは次の情報をご案内しています。</p>
            <div class="recruit-info-gp">
                <ul class="recruit-info-li">
                    <li>
                        <a href="#anchor07">地下1階</a>
                    </li>
                    <li>
                        <a href="#anchor08">1階</a>
                    </li>
                    <li>
                        <a href="#anchor09">2階</a>
                    </li>
                    <li>
                        <a href="#anchor010">3階</a>
                    </li>
                    <li>
                        <a href="#anchor011">4階</a>
                    </li>
                </ul>
            </div>
            <div class="hospitalization-facility" id="anchor07">
                <h3 class="floor-title h3-ttl">地下1階</h3>
                <div class="floor-photo-block">
                    <div class="floor-list">
                        <div class="floor-photo">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/abouts/floor_guide01.jpg" alt="地下1階" />
                        </div>
                        <!-- <p class="floor-detail-title">病室1</p> -->
                        <p class="floor-detail-txt">厨房／栄養士事務室／職員食堂／食品庫／ボイラー室／消毒室／乾燥室／洗濯室　等</p>
                    </div>
                </div>
            </div>
            <div class="hospitalization-facility" id="anchor08">
                <h3 class="floor-title h3-ttl">1階</h3>
                <div class="floor-photo-block">
                    <div class="floor-list">
                        <div class="floor-photo">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/abouts/floor_guide02.jpg" alt="1階" />
                        </div>
                        <!-- <p class="floor-detail-title">病室1</p> -->
                        <p class="floor-detail-txt">外来各診察室／調剤室／DI室／検査室／機能訓練室／CT室／Ｘ線撮影室／食堂／談話室／医局／当直室／事務室／休憩室／更衣室 等</p>
                    </div>
                </div>
            </div>
            <div class="outpatient-facility" id="anchor09">
                <h3 class="floor-title h3-ttl">2階</h3>
                <div class="floor-photo-block">
                    <div class="floor-list">
                        <div class="floor-photo">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/abouts/floor_guide03.jpg" alt="2階" />
                        </div>
                        <!-- <p class="floor-detail-title">病室1</p> -->
                        <p class="floor-detail-txt">療養病棟病室（201号室～223号室）／ナースステーション／サブステーション／特別浴室／リネン室 等</p>
                    </div>

                </div>
            </div>
            <div class="outpatient-facility" id="anchor010">
                <h3 class="floor-title h3-ttl">3階</h3>
                <div class="floor-photo-block">
                    <div class="floor-list">
                        <div class="floor-photo">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/abouts/floor_guide04.jpg" alt="3階" />
                        </div>
                        <!-- <p class="floor-detail-title">病室1</p> -->
                        <p class="floor-detail-txt">療養病棟病室（301号室～317号室）／ナースステーション／特別浴室／リネン室 等</p>
                    </div>

                </div>
            </div>
            <div class="outpatient-facility" id="anchor011">
                <h3 class="floor-title h3-ttl">4階</h3>
                <div class="floor-photo-block">
                    <div class="floor-list">
                        <!-- <div class="floor-photo">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/abouts/floor_guide03.png"
                                alt="病室" />
                        </div>
                        <p class="floor-detail-title">病室1</p> -->
                        <p class="floor-detail-txt">理事長室／院長室／副院長室／医師室／看護師長室</p>
                    </div>

                </div>
            </div>
            <!--
            <div class="hospital-map">
                <p class="hm-title">院内マップ</p>
                <div class="hm-photo-block">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/abouts/floor_guide03.png" alt="院内マップ" />
                </div>
            </div>
        -->
        </div>
    </div>
</section>

<?php
get_footer();
