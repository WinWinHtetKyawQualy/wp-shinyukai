<?php
/*
template name:privacy
 */

get_header();
?>

<section class="sub-mv-section sub-bg">
    <div class="container">
        <div class="pc">
            <?php echo the_breadcrumb(); ?>
        </div>
        <div class="sub-mv">
            <h2 class="sub-mv-ttl">個人情報保護方針</h2>
            <span class="sub-mv-txt">privacy policy</span>
        </div>
    </div>
</section>
<section class="page-anchor pt80 pb100 pt60-sp pb60-sp">
    <!-- TODO section with many buttons will go here -->
    <div class="container m-w800">
        <ul class="anchor-list">
            <li>
                <a class="goto" href="#item01-sec">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/nyuuin//item01.png" alt="入院の準備・手続き" /></div>
                        <p class="goto-description">入院の準備・手続き</p>
                    </div>
                </a>
            </li>
            <li>
                <a class="goto" href="#item02-sec">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/nyuuin//item02.png" alt="入院中の生活" /></div>
                        <p class="goto-description">入院生活について</p>
                    </div>
                </a>
            </li>
            <li>
                <a class="goto" href="#item03-sec">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/nyuuin//item03.png" alt="面談・面会について" /></div>
                        <p class="goto-description">費用とお支払方法</p>
                    </div>
                </a>
            </li>
            <li>
                <a class="goto" href="#item04-sec">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/nyuuin//item04.png" alt="入院の費用" /></div>
                        <p class="goto-description">お見舞いについて</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</section>

<section id="item01-sec" class="com-section-pad bg-gray nyuuin-sec01">
    <div class="container">
        <h2 class="h2-ttl h2-mb">入院の準備・手続き</h2>
        <p class="nav-desc mt30 mt15-sp">このページでは次の情報をご案内しています。</p>
        <div class="recruit-info-gp">
            <ul class="recruit-info-li">
                <li>
                    <a href="#inner-anchor01">入院手続きについて</a>
                </li>
                <li>
                    <a href="#inner-anchor02">入院に必要なもの</a>
                </li>
                <li>
                    <a href="#inner-anchor03">説明と同意</a>
                </li>
                <li>
                    <a href="#inner-anchor04">意思決定支援</a>
                </li>
            </ul>
        </div>
        <!-- <div class="procedure-block mb40 mb0-sp">
            <ol class="procedure-detail-ol text-blue">
                <li><a href="" class="d-blk-inline text-blue">入院手続きについて</a></li>
                <li><a href="" class="d-blk-inline text-blue">入院に必要なもの</a></li>
                <li><a href="" class="d-blk-inline text-blue">説明と同意</a></li>
                <li><a href="" class="d-blk-inline text-blue">意思決定支援</a></li>
            </ol>
        </div> -->
        <h3 id="inner-anchor01" class="gairai-procedure-ttl procedure-ttl accor-ttl mt40 mt25-sp" key=0>入院手続きについて</h3>
        <div class="emp-info-table procedure-detail accor" key=0>
            <table>
                <tbody>
                    <tr>
                        <th colspan="2" style="width: 20px;">必要なもの</th>
                        <td style="width: calc(100% - 300px);">健康保険証、入院誓約書　（記入済みのもの）　印鑑　他</td>
                    </tr>
                    <tr>
                        <th rowspan="2">手続き方法</th>
                        <th>予約入院の方</th>
                        <td>入院当日まで、1階の受付窓口にて手続きをお済ませください</td>
                    </tr>
                    <tr>
                        <th>緊急入院の方</th>
                        <td>入院日の翌日までに1階の受付窓口にて手続きをお済ませください。</td>
                    </tr>
                    <tr>
                        <th colspan="2">受付時間</th>
                        <td>月火木金　8時30分～17時00分　水土8時30分～12時30分</td>
                    </tr>
                    <tr>
                        <th colspan="2" rowspan="2">健康保険証の確認について</th>
                        <td>入院にあたり健康保険証を確認させていただきます。</td>
                    </tr>
                    <tr>
                        <td>また入院中、保険証に変更が生じた場合、医事課にお申し出ください。</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h3 id="inner-anchor02" class="gairai-procedure-ttl procedure-ttl accor-ttl mt40 mt25-sp" key=1>入院に必要なもの</h3>
        <div class="procedure-detail accor" key=1>
            <p>履物・下着・今まで飲んでいたお薬とお薬手帳。<br>盗難防止のため多額の現金・貴重品などは、持ち込まないようお願いします。</p>
            <ul class="pro-sub-block">
                <li>持ち物には必ず、お名前をご記入ください。</li>
                <li>入院中の寝具（布団・シーツ・枕等）については、病院で用意いたします。</li>
                <li>入院生活を送るうえで必要な日用品などは病院で用意いたします。
                    <br>また、レンタル（有料）できるものもあります。
                </li>
                <li>危険物（ナイフ、ハサミ、ライターなど）の持ち込みは固く禁止いたします。違反した場合は、退院または転院をしていただくことがあります。</li>
                <li>病室でテレビをご覧になりたい患者様は、各自でご用意してください。</li>
                <li>冷蔵庫をご希望される患者様は、貸し出しておりますのでお申し付けください。</li>
                <li>入院保証金は必要ありません。</li>
            </ul>
        </div>
        <h3 id="inner-anchor03" class="gairai-procedure-ttl procedure-ttl accor-ttl mt40 mt25-sp" key=2>説明と同意</h3>
        <div class="procedure-detail accor" key=2>
            <p>患者様の権利を守り、安全・安心・良質な医療を提供するため、診療上必要な処置・検査・手術などの医療行為について十分な説明を行い、患者様が納得されたうえで、同意書を頂くことになっています。聞き足りないことがあった場合や説明が十分理解できなかった場合は、遠慮なく主治医にお申し出ください。</p>
        </div>
        <h3 id="inner-anchor04" class="gairai-procedure-ttl procedure-ttl accor-ttl mt40 mt25-sp" key=3>意思決定支援</h3>
        <div class="procedure-detail accor" key=3>
            <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">セカンドオピニオン（診療を担う医師以外の医師による助言）</h4>
            <p class="mb30 mb20-sp">当院は十分な説明をしたうえで良質な医療を提供するよう努めておりますが、患者様のご要望により、セカンドオピニオンのための他院への紹介を行っております。希望される方は、主治医にお申し出ください。</p>
            <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">臓器提供意思表示カード（通称ドナーカード）</h4>
            <p class="mb30 mb20-sp">ドナーカードをお持ちの方は、職員にお申し出ください。</p>
            <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">リヴィング・ウィルについて</h4>
            <p>延命治療・緩和などに関するリヴィング・ウィル（生前の意思）の書類をお持ちの方は、職員にお申し出ください。</p>
        </div>

    </div>
</section>

<section id="item02-sec" class="com-section-pad">
    <div class="container">
        <h2 class="h2-ttl h2-mb">入院生活について</h2>
        <p class="nav-desc mt30 mt15-sp">このページでは次の情報をご案内しています。</p>
        <div class="recruit-info-gp">
            <ul class="recruit-info-li">
                <li>
                    <a href="#inner-anchor001">担当医師</a>
                </li>
                <li>
                    <a href="#inner-anchor002">看護体制</a>
                </li>
                <li>
                    <a href="#inner-anchor003">病室のご案内</a>
                </li>
                <li>
                    <a href="#inner-anchor004">プライバシーの保護</a>
                </li>
                <li>
                    <a href="#inner-anchor005">食事について</a>
                </li>
                <li>
                    <a href="#inner-anchor006">点灯・消灯時間について</a>
                </li>
                <li>
                    <a href="#inner-anchor007">外出・外泊について</a>
                </li>
                <li>
                    <a href="#inner-anchor008">付き添いについて</a>
                </li>
                <li>
                    <a href="#inner-anchor009">喫煙について</a>
                </li>
                <li>
                    <a href="#inner-anchor010">貴重品の扱いについて</a>
                </li>
                <li>
                    <a href="#inner-anchor011">電気製品の持ち込みについて</a>
                </li>
                <li>
                    <a href="#inner-anchor012">公衆電話</a>
                </li>
            </ul>
        </div>

        <h3 class="gairai-procedure-ttl procedure-ttl accor-ttl mt40 mt25-sp" id="inner-anchor001" key=4>担当医師</h3>
        <div class="procedure-detail accor" key=4>
            <p>入院の際に診療を担当する医師（主治医・担当医）が決まります。診療に関して疑問点やご希望がありましたら、お気軽にご相談ください。</p>
        </div>

        <h3 class="gairai-procedure-ttl procedure-ttl accor-ttl mt40 mt25-sp" id="inner-anchor002" key=5>看護体制</h3>
        <div class="procedure-detail accor" key=5>
            <p>受け持ちの看護師を決めていますが、心配な事などがありましたら、いつでもご相談ください。看護師一同、患者様に安心して入院生活を送っていただけるよう努めております。</p>
        </div>

        <h3 class="gairai-procedure-ttl procedure-ttl accor-ttl mt40 mt25-sp" id="inner-anchor003" key=6>病室のご案内</h3>
        <div class="procedure-detail accor" key=6>
            <p>病室は4人部屋、3人部屋、2人部屋、個室があります。入院中の病状の変化などにより、病棟、病室を移っていただく場合がありますので、あらかじめご了承ください。</p>
            <p>なお、個室のご利用については病状を優先いたします。利用中であっても病室の移動をお願いする場合もありますので、ご理解とご協力お願いします。</p>
        </div>

        <h3 class="gairai-procedure-ttl procedure-ttl accor-ttl mt40 mt25-sp" id="inner-anchor004" key=7>プライバシーの保護</h3>
        <div class="procedure-detail accor" key=7>
            <p>プライバシーの保護のため、電話での患者様に関するお問い合わせにはお答えしておりません。また、面会を希望されない方はお申し出ください。</p>
            <p>安全確認の為,病室や点滴ボトル、検査のための蓄尿袋などに氏名表示をしておりますが、ご都合の悪い方は看護師へお申し出ください。</p>
        </div>

        <h3 class="gairai-procedure-ttl procedure-ttl accor-ttl mt40 mt25-sp" id="inner-anchor005" key=8>食事について</h3>
        <div class="procedure-detail accor" key=8>
            <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">食事時間</h4>
            <p>朝食7時45分　昼食11時50分　夕食17時50分</p>
            <ul class="pro-sub-block">
                <li>患者様の病状にあった食事をお出ししています。</li>
                <li>アレルギーなどの理由で、召し上がれない食品がある方は、主治医または看護師にお申し出ください。</li>
                <li>歩ける方、車椅子で移動ができる方は、食堂で食事をとることも出来ます。</li>
            </ul>
        </div>

        <h3 class="gairai-procedure-ttl procedure-ttl accor-ttl mt40 mt25-sp" id="inner-anchor006" key=9>点灯・消灯時間について</h3>
        <div class="procedure-detail accor" key=9>
            <p>点灯時間は6時00分、消灯時間は21時00分です。消灯時間を過ぎてからの点灯や、病棟を離れることはご遠慮ください。</p>
        </div>

        <h3 class="gairai-procedure-ttl procedure-ttl accor-ttl mt40 mt25-sp" id="inner-anchor007" key=10>外出・外泊について</h3>
        <div class="procedure-detail accor" key=10>
            <p>円滑な治療を遂行するために、外出・外泊はできるだけご遠慮ください。やむをえず外出・外泊を希望される場合は主治医にご相談ください。また、院内であっても病棟を離れる場合には、看護師へお申し出ください。</p>
        </div>

        <h3 class="gairai-procedure-ttl procedure-ttl accor-ttl mt40 mt25-sp" id="inner-anchor008" key=11>付き添いについて</h3>
        <div class="procedure-detail accor" key=11>
            <p>医療保険制度に基づく看護を行っていますので、原則として付き添いの必要はありません。ただし、患者様やご家族から申し出があり、主治医が認めた場合は、付き添うことができます。</p>
        </div>

        <h3 class="gairai-procedure-ttl procedure-ttl accor-ttl mt40 mt25-sp" id="inner-anchor009" key=12>喫煙について</h3>
        <div class="procedure-detail accor" key=12>
            <p>喫煙は、ご自身はもとより周囲の方にも悪影響を及ぼすため、当院は敷地内全面禁煙を実施しています。病院内外において喫煙する場所はありませんので、禁煙にご協力をお願いします。なお、禁煙の指示を守られない場合は、防火管理上、退院または、転院していただくことがありますのでご了承ください。</p>
        </div>

        <h3 class="gairai-procedure-ttl procedure-ttl accor-ttl mt40 mt25-sp" id="inner-anchor010" key=13>貴重品の扱いについて</h3>
        <div class="procedure-detail accor" key=13>
            <ul class="pro-sub-block">
                <li>テレビをご利用される方は、基本的にはお持込にてのご利用になります。病室にて使用料は1日108円となります。</li>
                <li>他の患者様の迷惑にならないよう、イヤホンをご使用ください。<br>尚、お持ちでない方は、1階受付にて200円で販売をしております。</li>
            </ul>
        </div>

        <h3 class="gairai-procedure-ttl procedure-ttl accor-ttl mt40 mt25-sp" id="inner-anchor011" key=14>電気製品の持ち込みについて</h3>
        <div class="procedure-detail accor" key=14>
            <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">使用できる電気製品</h4>
            <p class="mb30 mb20-sp">コンピュータ機器（パソコンなど）、音響機器（CD、MD、ラジオなど）、映像機器（DVDなど）、電気カミソリ、ドライヤーなど、充電機器類。</p>
            <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">使用時間</h4>
            <p class="mb30 mb20-sp">7時00分～18時00分</p>
        </div>

        <h3 class="gairai-procedure-ttl procedure-ttl accor-ttl mt40 mt25-sp" id="inner-anchor012" key=15>注意事項</h3>
        <div class="procedure-detail accor" key=15>
            <ul class="pro-sub-block">
                <li>医療機器優先で電源を使用することをご了承ください。</li>
                <li>使用に当たっては、他の患者様への配慮（イヤホン使用など）をお願いします。</li>
            </ul>
        </div>

        <h3 class="gairai-procedure-ttl procedure-ttl accor-ttl mt40 mt25-sp" id="inner-anchor013" key=16>公衆電話</h3>
        <div class="procedure-detail accor" key=16>
            <p>公衆電話は1階に設置してあります。</p>
        </div>
    </div>
</section>

<section id="item03-sec" class="com-section-pad bg-gray">
    <div class="container">
        <h2 class="h2-ttl h2-mb">費用とお支払方法</h2>
        <p class="nav-desc mt30 mt15-sp">このページでは次の情報をご案内しています。</p>
        <div class="recruit-info-gp">
            <ul class="recruit-info-li">
                <li>
                    <a href="#inner-payment01">入院日数</a>
                </li>
                <li>
                    <a href="#inner-payment02">入院費の計算</a>
                </li>
                <li>
                    <a href="#inner-payment03">入院費のお支払</a>
                </li>
                <li>
                    <a href="#inner-payment04">退院について</a>
                </li>
            </ul>
        </div>

        <h3 class="gairai-procedure-ttl procedure-ttl accor-ttl mt40 mt25-sp" id="inner-payment01" key=17>入院日数</h3>
        <div class="procedure-detail accor" key=17>
            <p>法令により、入院期間には入院日及び退院日を含みます。</p>
        </div>

        <h3 class="gairai-procedure-ttl procedure-ttl accor-ttl mt40 mt25-sp" id="inner-payment02" key=18>入院費の計算</h3>
        <div class="procedure-detail accor" key=18>
            <p>入院費は、医療費と食事料の自己負担額に、特別室料などを合算した金額となります。</p>
            <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2 mt20 mt10-sp">医療費</h4>
            <p>医療費の計算は、健康保険の定めにより行います。</p>
            <p>自費、労災、交通事故など、健康保険以外での入院の場合は、必ず入院手続きの際にお申し出ください。事前手続きによりご加入の健康保険から「限度額適用認定証」及び「限度額適用・標準額負担額減額認定証」を交付された方は、*高額療養費制度で定められた一定額を支払えば済むようになりますので、入院時に必ず認定証をご提示ください。</p>
            <p class="mb30 mb20-sp">※高額療養費制度の手続き等の詳細は、それぞれご加入の健康保険の保険者にお問い合わせください</p>
            <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">食事料</h4>
            <p>医療区分によって異なります。</p>
            <p>事前手続きにより、ご加入の健康保険から「標準負担額減額認定証」及び「限度額適用・標準額負担額減額認定証」を交付された方は、下記の通りになりますので、入院時に必ず認定証をご提示ください。</p>
        </div>

        <h3 class="gairai-procedure-ttl procedure-ttl accor-ttl mt40 mt25-sp" id="inner-payment03" key=19>高額療養費制度で定められた金額表</h3>
        <div class="emp-info-table th-280 procedure-detail accor" key=19>
            <table>
                <tbody>
                    <tr>
                        <th rowspan="2" style="">区市町村民税非課税世帯など</th>
                        <th>90日までの入院</th>
                        <td style="width: calc(100% - 300px);">210円/1食</td>
                    </tr>
                    <tr>
                        <th rowspan="1">90日を超える入院</th>
                        <td>160円/1食</td>
                    </tr>
                    <tr>
                        <th colspan="2">老齢福祉年金受給権者（70歳以上のみ）</th>
                        <td>100円/1食</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 class="gairai-procedure-ttl procedure-ttl accor-ttl mt40 mt25-sp" id="inner-payment04" key=20>入院費のお支払</h3>
        <div class="emp-info-table th-280 procedure-detail accor" key=20>
            <p class="mb30 mb20-sp">入院費用は、治療内容、保険の有無や種類によって異なります。詳しくは病院1階「受付」でお尋ねください。</p>
            <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">入院中の場合</h4>
            <p class="mb30 mb20-sp">入院中の費用の請求は月末に計算し、翌月の10日ごろに請求書を郵送、もしくは受付にてお預かりしています。納入期限までにお支払いください。</p>
            <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">退院の場合</h4>
            <p>当日までの入院費用を退院時にお支払いください。</p>
            <p>なお、退院までに計算が間に合わない場合は、後日、請求させていただく事もありますのでご了承ください。</p>
            <p class="mb30 mb20-sp">領収書は、所得税の医療費控除を申告する場合などに必要となりますので大切に保管してください。</p>
            <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">支払い時間</h4>
            <p>平日8時30分～17時00分　土曜日8時30～12時30分</p>
            <p>※なお、午前中は外来の患者様で混雑いたしますので、なるべく午後の時間帯をご利用ください。</p>
        </div>

        <h3 class="gairai-procedure-ttl procedure-ttl accor-ttl mt40 mt25-sp" id="inner-payment05" key=21>退院について</h3>
        <div class="emp-info-table th-280 procedure-detail accor" key=21>
            <ul class="pro-sub-block">
                <li>退院は、医師の医学的判断により決まります。</li>
                <li>費用の概算をお知りになりたい場合は、事務員または看護師にご相談ください。</li>
                <li>退院後、引き続き診察が必要となる方には、会計後に受診日をご確認ください。</li>
            </ul>
        </div>

    </div>
</section>

<section id="item04-sec" class="com-section-pad">
    <div class="container">
        <h2 class="h2-ttl h2-mb">お見舞いについて</h2>
        <p class="nav-desc mt30 mt15-sp">このページでは次の情報をご案内しています。</p>
        <div class="recruit-info-gp">
            <ul class="recruit-info-li">
                <li>
                    <a href="#inner-visiting01">面会時間</a>
                </li>
                <li>
                    <a href="#inner-visiting02">手続き</a>
                </li>
                <li>
                    <a href="#inner-visiting03">面会制限について</a>
                </li>
            </ul>
        </div>

        <h3 class="gairai-procedure-ttl procedure-ttl accor-ttl mt40 mt25-sp" id="inner-visiting01" key=22>面会時間</h3>
        <div class="procedure-detail accor" key=22>
            <p>11時30分～20時00分</p>
            <p>※上記の時間以外に面会を希望される場合は、看護師とご相談ください。</p>
        </div>

        <h3 class="gairai-procedure-ttl procedure-ttl accor-ttl mt40 mt25-sp" id="inner-visiting02" key=23>手続き</h3>
        <div class="procedure-detail accor" key=23>
            <p>1階「受付」にて面会者名簿に記帳してください。</p>
            <ul class="pro-sub-block">
                <li>病室に入る前に、ナースステーションにお立ち寄りください。<br>（患者様の病状によっては、面会をお断りする場合もあります）</li>
                <li>他の患者様へのご迷惑にならないよう、多人数及び長時間の面会はご遠慮ください。</li>
                <li>病棟によっては、治療の関係上、面会時間を制限させていただく場合があります。医師または看護師の指示に従ってください。</li>
                <li>病室での喫煙や飲食は、禁止しております。飲食物の持ち込みは、ご遠慮ください。</li>
            </ul>
        </div>

        <h3 class="gairai-procedure-ttl procedure-ttl accor-ttl mt40 mt25-sp" id="inner-visiting03" key=24>面会制限について</h3>
        <div class="procedure-detail accor" key=24>
            <p>院内感染を予防するために面会制限（禁止）の対応をとる場合があります。ご家族並びに、ご面会者の方にはご不便をかけることもありますが、ご理解とご協力のほどよろしくお願いします。</p>
        </div>



    </div>
</section>


<?php
get_footer();
