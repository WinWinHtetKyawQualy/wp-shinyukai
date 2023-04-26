<?php
/*
template name:department
 */

get_header();
?>

<section class="sub-mv-section sub-bg">
    <div class="container">
        <div class="pc">
            <?php echo the_breadcrumb(); ?>
        </div>
        <div class="sub-mv">
            <h2 class="sub-mv-ttl">部門紹介</h2>
            <span class="sub-mv-txt">Category Information</span>
        </div>
    </div>
</section>

<div class="panels dept-border">
    <section class="page-anchor mb90 mb50-sp mt60-sp dpt-right-tab pt50-sp">
        <!-- TODO section with many buttons will go here -->
        <div class="container m-w800 pt-80">
            <ul class="anchor-list">
                <li>
                    <a class="goto" href="#item01-sec">
                        <div class="goto-left-side">
                            <p class="goto-description">看護部門</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="goto" href="#item02-sec">
                        <div class="goto-left-side">
                            <p class="goto-description">医療技術部門</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <section id="item01-sec" class="com-section-pad bg-gray">
        <div class="container">
            <h2 class="h2-ttl h2-mb">看護部門</h2>
            <div class="recruit-info-gp">
                <ul class="recruit-info-li">
                    <li>
                        <a href="#recruit-info01">介護福祉士奨学金制度について</a>
                    </li>
                    <li>
                        <a href="#recruit-info02">看護部理念</a>
                    </li>
                    <li>
                        <a href="#recruit-info03">看護部の特色</a>
                    </li>
                    <li>
                        <a href="#recruit-info04">看護部体制</a>
                    </li>
                    <li>
                        <a href="#recruit-info05">看護部委員会活動</a>
                    </li>
                    <li>
                        <a href="#recruit-info06">看護学生奨学金制度について</a>
                    </li>
                    <li>
                        <a href="#recruit-info07">抑制廃止宣言</a>
                    </li>
                </ul>
            </div>


            <div id="recruit-info01">
                <h3 class="gairai-procedure-ttl mt40 mt25-sp">介護福祉士奨学金制度について</h3>
                <p class="nav-desc">このページでは次の情報をご案内しています。</p>
                <div class=" sec-nav" style="--text-color: #1e803d; margin-bottom:30px;">
                    <a href="#inner-anchor01">対象者</a>
                    <a href="#inner-anchor02">貸付金額</a>
                    <a href="#inner-anchor03">必要書類</a>
                    <a href="#inner-anchor04">貸付審査</a>
                    <a href="#inner-anchor05">返済の免除</a>
                    <a href="#inner-anchor06">返還等について</a>
                </div>
                <p>当法人では、介護福祉士を目指して勉強される方を対象に、奨学金制度を実施しております。<br>皆さんの修学のために役立てて頂く制度ですので、是非ご利用下さい。</p>
                <h4 id="inner-anchor01" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">対象者</h4>
                <ul class="pro-sub-block">
                    <li>介護福祉士養成学校に入学が許可された方</li>
                    <li>介護福祉士養成学校に在学中の方（年度途中の方はお問い合わせください）</li>
                    <li>卒業後、医療法人社団心優会の医療・介護施設へ勤務しようとする意志をお持ちの方</li>
                    <li>心身ともに健康であり、品行方正であって学業成績が良好である方</li>
                </ul>
                <h4 id="inner-anchor02" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">貸付金額</h4>
                <ul class="pro-sub-block">
                    <li>貸付金額は、原則として1年間42万円以内とし、毎月に均等分割して貸与します。</li>
                </ul>
                <h4 id="inner-anchor03" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">必要書類</h4>
                <ul class="pro-sub-block">
                    <li>奨学金等貸与申請書　他（指定の用紙）</li>
                    <li>履歴書（市販の用紙に写真貼付必須）</li>
                    <li>介護福祉士養成学校の入学を証明できるものまたは在学証明書</li>
                    <li>最終学歴の学校または現在在籍している学校の成績証明書</li>
                    <li>住民票の写し（本籍の記載があるもの）</li>
                </ul>
                <h4 id="inner-anchor04" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">貸付審査</h4>
                <ul class="pro-sub-block">
                    <li>奨学金貸与の際は、書類選考・面接のうえ決定致します。</li>
                </ul>
                <h4 id="inner-anchor05" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">返済の免除</h4>
                <ul class="pro-sub-block">
                    <li>所定の期間を勤務することにより、返済は免除されます。</li>
                </ul>
                <h4 id="inner-anchor06" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">返還等について</h4>
                <ul class="pro-sub-block">
                    <li>在学中に休学や留年等の理由により、奨学金支給の欠格事由が発生した場合は、奨学金返還猶予制度を設けております。また、在学途中で当法人関連施設以外の医療機関へ就職が決まったなどの事情により奨学金を辞退される場合は,一括にて奨学金を返済していただきます。</li>
                </ul>
                <p class="mt20"><a href="<?php bloginfo('template_directory'); ?>/assets/pdf/20161020084018.pdf" target="_blank" class="d-blk-inline text-blue">パンフレット</a>(257.1KB)</p>
                <div class="card m-auto mt40 mt25-sp">
                    <div class="card-head">
                        <div class="card-head-ttl text-center">
                            <span>お問い合わせ</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-body-wrapper m-auto">
                            <p class="text-center">留萌記念病院<br>
                                〒077-0042<br>
                                北海道留萌市開運町1丁目6番1号<br>
                                電話　0164-42-0271<br>
                                FAX　0164-42-8608
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="recruit-info02">
                <h3 class="gairai-procedure-ttl mt40 mt25-sp">看護部理念</h3>
                <p>個々の役割と責任を果たすと共に組織人として、質の高い効率的な看護の提供を目指します。<br>患者様に納得・安心・満足していただける看護を提供します。</p>
                <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">看護部方針</h4>
                <ul class="pro-sub-block">
                    <li>思いやりと優しさをもって、患者様中心の看護を実践します。</li>
                    <li>安心して入院生活が送れるよう、安全安楽に努めます。</li>
                    <li>常に業務を見直し、看護の質の向上に努めます。</li>
                    <li>高度な知識と技術、豊かな人間性を身につけた看護職を育成します。</li>
                    <li>地域との連携を図り、地域看護に貢献します。</li>
                </ul>
            </div>

            <div id="recruit-info03">
                <h3 class="gairai-procedure-ttl mt40 mt25-sp">看護部の特色</h3>
                <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">高齢者に優しい医療を提供しています</h4>
                <p>当院の特色は療養型病棟、訪問看護や老健施設、有料老人ホームを同法人内で展開することで地域に根差した患者様の様々なニーズに対応した医療を展開しているところです。</p>
                <p>急性期の大病院と比較してハード面や医師、看護師の体制は限られたものになりますが、入院から在宅まで一貫して関わらせて頂く中で培われた患者様との信頼関係や、家族的な親密感は当院ならではの特色でもあります。</p>
                <ul class="pro-sub-block">
                    <li>患者様から信頼され、やり甲斐のある看護を目指します。</li>
                    <li>地域のみなさまに安心して検査・治療を受けて頂けるよう、各科専門領域での幅広い知識と技術の習得に努めています。</li>
                    <li>待ち時間の短縮、プライバシーへの配慮、インフォームドコンセント（説明と同意）の充実を考慮し、親切でわかりやすい笑顔での対応を忘れず、接遇面でもご満足頂けるよう日々努力しています。</li>
                </ul>
            </div>

            <div id="recruit-info04">
                <h3 class="gairai-procedure-ttl mt40 mt25-sp">看護部体制</h3>
                <p>患者様中心の看護を実践する組織として、患者様や職員の声が通る、風通しの良い組織作りを目指しています。<br>病棟は2病棟あり、1病棟57～60床で2交代勤務を行っています。</p>
                <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">勤務体制</h4>
                <h5 class="fz-18 fz-16-sp mt10 mb5">日勤</h5>
                <p>8時30分　～　17時00分　</p>
                <h5 class="fz-18 fz-16-sp mt10 mb5">夜勤</h5>
                <p>16時30分 　～　9時00分</p>
            </div>

            <div id="recruit-info05">
                <h3 class="gairai-procedure-ttl mt40 mt25-sp">看護部委員会活動</h3>
                <!-- <p>このページでは次の情報をご案内しています。</p>
                    <div class="procedure-block mb40 mb0-sp mt15">
                        <ol class="procedure-detail-ol text-blue">
                            <li><a href="" class="d-blk-inline text-blue">医療安全管理委員会</a></li>
                            <li><a href="" class="d-blk-inline text-blue">院内感染防止委員会</a></li>
                            <li><a href="" class="d-blk-inline text-blue">褥瘡防止対策委員会</a></li>
                            <li><a href="" class="d-blk-inline text-blue">接遇委員会</a></li>
                            
                            <li><a href="" class="d-blk-inline text-blue">抑制廃止委員会</a></li>
                            <li><a href="" class="d-blk-inline text-blue">教育委員会</a></li>
                            <li><a href="" class="d-blk-inline text-blue">業務改善委員会</a></li>
                            <li><a href="" class="d-blk-inline text-blue">環境整備委員会</a></li>
                            <li><a href="" class="d-blk-inline text-blue">輸血療法委員会</a></li>


                        </ol>
                    </div> -->
                <p class="nav-desc">このページでは次の情報をご案内しています。</p>
                <div class=" sec-nav" style="--text-color: #1e803d; margin-bottom:30px;">
                    <a href="#inner-anchor11">医療安全管理委員会</a>
                    <a href="#inner-anchor12">院内感染防止委員会</a>
                    <a href="#inner-anchor13">褥瘡防止対策委員会</a>
                    <a href="#inner-anchor14">接遇委員会</a>
                    <a href="#inner-anchor15">抑制廃止委員会</a>
                    <a href="#inner-anchor16">教育委員会</a>
                    <a href="#inner-anchor17">業務改善委員会</a>
                    <a href="#inner-anchor18">環境整備委員会</a>
                    <a href="#inner-anchor19">輸血療法委員会</a>
                </div>

                <h4 id="inner-anchor11" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">医療安全管理委員会</h4>
                <p>インシデントレポート報告書の収集と分析を行い、再発防止に向けた対策を検討し、患者様が安心して治療に専念できるよう対策を講じています。<br>医療安全に向けた人材育成のため、年に2回以上職員を対象として研修会を開催しています。</p>

                <h4 id="inner-anchor12" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">院内感染防止委員会</h4>
                <p>院内における患者様及び医療従事者の感染予防に努めています。<br>職員の教育・指導を目的とし年に2回以上職員を対象として研修会を開催しています。</p>

                <h4 id="inner-anchor13" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">褥瘡防止対策委員会</h4>
                <p>入院患者様の褥瘡発生予防及び、褥瘡患者様のケアに関し実施内容の妥当性の検討、計画立案、評価を行っています。</p>

                <h4 id="inner-anchor14" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">接遇委員会</h4>
                <p>患者様に選ばれる病院、患者様に満足して頂ける病院を目指し、職員の接遇の向上並びに院内における接遇の標準化を図っています。</p>

                <h4 id="inner-anchor15" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">抑制廃止委員会</h4>
                <p>身体拘束ゼロを目指して取り組んでいます。<br>職員全員が身体拘束の弊害を正確に認識し抑制廃止に取り組むため活動しています。</p>

                <h4 id="inner-anchor16" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">教育委員会</h4>
                <p>専門職としての必要な知識・技術を習得し、豊かな人間性を養うための教育を企画し研修会を開催しています。</p>

                <h4 id="inner-anchor17" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">業務改善委員会</h4>
                <p>看護サービスの質向上と、一貫性のある看護提供を目指し、看護・介護業務の効率化省力化を検討しています。また院内業務の統一化を図っています。</p>

                <h4 id="inner-anchor18" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">環境整備委員会</h4>
                <p>病院施設内外の環境作りと整備を行い、安全・清潔・快適な療養環境を保ちます。<br>全職員の環境整備に対する意識向上を高める目的もあります。</p>

                <h4 id="inner-anchor19" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">輸血療法委員会</h4>
                <p>輸血マニュアル、同意書等の整備や血液製剤使用実績報告、業務での問題点の検討を行っています。</p>

            </div>

            <div id="recruit-info06">
                <h3 class="gairai-procedure-ttl mt40 mt25-sp">看護学生奨学金制度について</h3>
                <p class="nav-desc">このページでは次の情報をご案内しています。</p>
                <div class=" sec-nav" style="--text-color: #1e803d; margin-bottom:30px;">
                    <a href="#inner-anchor31">対象者</a>
                    <a href="#inner-anchor32">貸付金額</a>
                    <a href="#inner-anchor33">必要書類</a>
                    <a href="#inner-anchor34">貸付審査</a>
                    <a href="#inner-anchor35">返済の免除</a>
                    <a href="#inner-anchor36">返還等について</a>
                </div>
                <p>当院では、看護師を目指して勉強される方を対象に、奨学金制度を実施しております。<br>皆さんの修学のために役立てて頂く制度ですので、是非ご利用下さい。</p>

                <h4 id="inner-anchor31" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">対象者</h4>
                <ul class="pro-sub-block">
                    <li>看護学校に入学が許可された方</li>
                    <li>看護学校に在学中の方（年度途中の方はお問い合わせください）</li>
                    <li>卒業後、当法人関連施設にて看護業務へ勤務しようとする意思の明らかな方</li>
                    <li>心身ともに健康であり、品行方正であって学業成績が良好である方</li>
                </ul>

                <h4 id="inner-anchor32" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">貸付金額</h4>
                <p>貸付金額は、原則として1年間36～60万円とし、毎月に均等分割して貸与します。</p>

                <h4 id="inner-anchor33" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">必要書類</h4>
                <ul class="pro-sub-block">
                    <li>奨学金等貸与申請書（指定の用紙）</li>
                    <li>履歴書（市販の用紙に写真貼付必須）</li>
                    <li>看護学校の入学を証明できるものまたは在学証明書</li>
                    <li>最終学歴の学校または現在在籍している学校の成績証明書</li>
                    <li>住民票の写し（本籍の記載があるもの）</li>
                </ul>

                <h4 id="inner-anchor34" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">貸付審査</h4>
                <p>奨学金貸与の際は、書類選考・面接のうえ決定致します。</p>

                <h4 id="inner-anchor35" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">返済の免除</h4>
                <p>所定の期間を勤務することにより、返済は免除されます。</p>

                <h4 id="inner-anchor36" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">返還等について</h4>
                <p>在学中に休学や留年等の理由により、奨学金支給の欠格事由が発生した場合は、奨学金返還猶予制度を設けております。また、在学途中で当法人関連施設以外の医療機関へ就職が決まったなどの事情により奨学金を辞退される場合は,一括にて奨学金を返済していただきます。</p>
                <p class="mt20"><a href="<?php bloginfo('template_directory'); ?>/assets/pdf/20161020083656.pdf" target="_blank" class="d-blk-inline text-blue">パンフレット</a>(257.1KB)</p>
                <div class="card m-auto mt40 mt25-sp">
                    <div class="card-head">
                        <div class="card-head-ttl text-center">
                            <span>お問い合わせ</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-body-wrapper m-auto">
                            <p class="text-center">留萌記念病院<br>
                                〒077-0042<br>
                                北海道留萌市開運町1丁目6番1号<br>
                                電話　0164-42-0271<br>
                                FAX　0164-42-8608
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div id="recruit-info07">
                <h3 class="gairai-procedure-ttl mt40 mt25-sp">抑制廃止宣言</h3>
                <p>当院では、認知症の方をベッドや椅子に縛り付けたり、自分で服を脱げないように、つなぎの服を着せたりする抑制行為の全面廃止を目指しております。患者様1人1人の人権を尊重し、地域に根差した病院づくりを目指しております。</p>
                <ul class="pro-sub-block">
                    <li>抑制行為を廃止し、快適な療養生活を送って頂けるよう努めます。</li>
                    <li>抑制をゼロにするために何が必要なのかを考え、創意工夫あるケアを提供いたします。</li>
                    <li>患者様の人権を尊重し、抑制を限りなくゼロに近づけるよう努力いたします。</li>
                </ul>


                <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">当院の抑制廃止に取り組む5つのポイント</h4>
                <ul class="pro-sub-block">
                    <li>医療・看護の原点に戻ること。</li>
                    <li>抑制廃止に対して全職員の強い意志を持つこと。</li>
                    <li>安心・安全な療養生活を過ごせるように環境・設備を整えること。</li>
                    <li>安心・安全な療養生活を過ごせるように係わるスタッフ数を確保すること。</li>
                    <li>常に患者様第一の医療を考えること。</li>
                </ul>
            </div>




        </div>
    </section>

    <section id="item02-sec" class="com-section-pad">
        <div class="container">
            <h2 class="h2-ttl h2-mb">医療技術部門</h2>
            <div class="recruit-info-gp">
                <ul class="recruit-info-li">
                    <li>
                        <a href="#recruit02-info01">薬剤科紹介</a>
                    </li>
                    <li>
                        <a href="#recruit02-info02">リハビリテーション科紹介</a>
                    </li>
                    <li>
                        <a href="#recruit02-info03">栄養科紹介</a>
                    </li>
                    <li>
                        <a href="#recruit02-info04">放射線科紹介</a>
                    </li>
                </ul>
            </div>

            <div id="recruit02-info01">
                <h3 class="gairai-procedure-ttl mt40 mt25-sp">薬剤科紹介</h3>
                <p class="nav-desc">このページでは次の情報をご案内しています。</p>
                <div class=" sec-nav" style="--text-color: #1e803d; margin-bottom:30px;">
                    <a href="#inner-anchor41">外来調剤・入院調剤</a>
                    <a href="#inner-anchor42">注射薬業務</a>
                    <a href="#inner-anchor43">薬剤管理指導業務</a>
                    <a href="#inner-anchor44">医薬品の発注・在庫管理</a>
                    <a href="#inner-anchor45">医薬品安全使用の収集および提供</a>
                </div>
                <p>医薬品の供給と調剤、医薬品情報管理、患者様へ正しく効果的な服薬指導を中心に業務を行っています。</p>

                <h4 id="inner-anchor41" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">外来調剤・入院調剤</h4>
                <p>当院では、原則として院外処方としています。そのため、調剤は、主に入院の処方せんを対応しております。また、療養病棟が主体ですので、錠剤そのままでは服用が困難な患者様が多く、入院処方の8割以上が錠剤・カプセルの粉砕等を含む散剤です。<br>処方せんの受付時には薬の量や服用時間、飲み合わせの悪い薬の確認のほか、必要に応じ、粉砕の可否などの処方せん記載内容を確認し、患者様が服薬（服用）しやすいように対応しています。さらに患者様のご家族の人や病棟において薬の管理を行いやすいように服用時間ごとに一包化を行うなどの対応をしています。</p>

                <h4 id="inner-anchor42" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">注射薬業務</h4>
                <p>注射薬は、一般に効果の発現が早く、その使い方には特に注意が必要です。注射薬も内服薬と同様に、薬剤師が処方せんの内容を確認した上で患者様ごとに取り揃えています。</p>

                <h4 id="inner-anchor43" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">薬剤管理指導業務</h4>
                <p>各病棟では、入院患者様が安心して薬物治療を続けられるように薬剤管理指導業務［服薬指導］を行っています。担当薬剤師が患者様のベットサイドへ直接お伺いし、お薬の作用や注意点についての説明、副作用の早期発見などのモニタリングを行います。</p>

                <h4 id="inner-anchor44" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">医薬品の発注・在庫管理</h4>
                <p>内服薬、外用薬、注射薬のほか、処置薬・消毒薬の発注、供給、在庫管理を行っています。また、ジェネリック薬導入への協力、さらに病棟等配置薬の在庫や使用期限の確認による在庫薬の適正化を行っています。</p>

                <h4 id="inner-anchor45" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">医薬品安全使用の収集および提供</h4>
                <p>医薬品の安全性情報や添付文書の改訂内容、その他医薬品に関する問い合わせなど、医薬品・医療機器全般にわたる情報を提供します。</p>

            </div>

            <div id="recruit02-info02">
                <h3 class="gairai-procedure-ttl mt40 mt25-sp">リハビリテーション科紹介</h3>
                <p>当院は理学療法士4名、助手2名のスタッフで、多様な患者様へより治療効果の高いリハビリテーションを提供しています。</p>
                <p>各スタッフ、各科と連携して、患者様の機能の回復、退院へ向けての支援をさせていただきます。</p>

                <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">当院リハビリテーション科の特色</h4>
                <p>スタッフが退院後の生活を見据えて入院中のリハビリテーションをお手伝いしています。各患者様の生活様式、性格、趣味などを考慮して3ヶ月毎にケアプランに基づいてリハビリテーション内容を計画します。</p>
                <p>退院後は、隣接している介護老人保健施設「季実の杜」のデイケアと連携して、リハビリテーションを継続して身体の機能・能力の維持、向上を図っています。</p>
            </div>

            <div id="recruit02-info03">
                <h3 class="gairai-procedure-ttl mt40 mt25-sp">栄養科紹介</h3>
                <p class="nav-desc">このページでは次の情報をご案内しています。</p>
                <div class=" sec-nav" style="--text-color: #1e803d; margin-bottom:30px;">
                    <a href="#inner-anchor51">入院患者様の食事について</a>
                    <a href="#inner-anchor52">栄養食事指導について</a>
                    <a href="#inner-anchor53">栄養管理について</a>
                </div>

                <h4 id="inner-anchor51" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">入院患者様の食事について</h4>
                <p>栄養科では、心のこもった食事作りを大切にしています。<br>入院中の食事は、治療のため栄養的に考慮されたものとなっています。<br>食事の形態についても、その方の食べやすい形や飲み込みやすさを考慮し調理しています。<br>食物アレルギーのある方の食事についても、可能な限り対応していますので、お申し出ください。</p>

                <h4 id="inner-anchor52" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">栄養食事指導について</h4>
                <p>食事や生活習慣が原因となる生活習慣病（脳卒中、心臓病、糖尿病、高血圧症等）が多くなっています。<br>その治療や予防には食生活を中心とした生活習慣の改善が大切になります。<br>栄養科では、入院、外来の患者様を対象に栄養食事指導を行っています。</p>

                <h4 id="inner-anchor53" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">栄養管理について</h4>
                <p>当院では、入院されているすべての患者様の栄養状態を把握し、栄養管理を行っています。<br>栄養科では他職種と連携を取り、チーム医療に取り組みながら、食事、栄養面からのサポートに力を入れております。</p>

            </div>

            <div id="recruit02-info04">
                <h3 class="gairai-procedure-ttl mt40 mt25-sp">放射線科紹介</h3>
                <p>放射線科では各診療科から依頼受け、診断に必要な画像を提供しています。</p>
                <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">一般撮影検査</h4>
                <p>胸部・腹部・四肢などの撮影をおこなっております。CRシステムにより軟部から骨部まで幅広い安定した画像が得られます。</p>
                <div class="procedure-detail-img-flex mt30 mt15-sp">
                    <div class="procedure-detail-img-box mb15-sp">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/department/numazaki_dept_img_01.jpg" alt="一般撮影検査画像1">
                    </div>
                    <div class="procedure-detail-img-box">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/department/numazaki_dept_img_02.jpg" alt="一般撮影検査画像2">
                    </div>
                </div>

                <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">骨塩定量測定</h4>
                <p>極めて少ないX線を用いて骨の密度（骨年齢）を測定し、骨粗しょう症を診断します。<br>検査時間は2～3分と短く、痛みもありません。</p>
                <div class="procedure-detail-img-flex mt30 mt15-sp">
                    <div class="procedure-detail-img-box mb15-sp">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/department/numazaki_dept_img_03.jpg" alt="骨塩定量測定">
                    </div>
                </div>

                <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">CT検査</h4>
                <p>CTとはX線を体の周囲から照射しコンピュータで処理することにより、体の内部を画像化する検査です。<br>当院では16列マルチスライスCTを用いて、患者さんの病状に応じた撮影条件で診断に必要な画像を提供しています。<br>非常に高速かつ、短時間で検査を行うことができます。</p>
                <div class="procedure-detail-img-flex mt30 mt15-sp">
                    <div class="procedure-detail-img-box mb15-sp">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/department/numazaki_dept_img_04.jpg" alt="CT検査">
                    </div>
                </div>

                <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt30 mt20-sp">超音波検査</h4>
                <p>体内に超音波（人の耳に聞こえない高周波数の音）をあてて、CTやMRIと同じように体の内部を画像化する検査です。<br>リアルタイムに動きを観察でき、痛みや合併症はなく、安全で簡便な検査です。</p>
                <div class="procedure-detail-img-flex mt30 mt15-sp">
                    <div class="procedure-detail-img-box mb15-sp">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/department/numazaki_dept_img_05.jpg" alt="超音波検査">
                    </div>
                </div>



            </div>


        </div>
    </section>

</div>

<?php
get_footer();
