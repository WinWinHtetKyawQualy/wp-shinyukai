<?php
/*
template name:gairai
 */

get_header();
?>

<section class="sub-mv-section sub-bg">
    <div class="container">
        <div class="pc">
            <?php echo the_breadcrumb(); ?>
        </div>
        <div class="sub-mv">
            <h2 class="sub-mv-ttl">外来のご案内</h2>
            <span class="sub-mv-txt">Outpatient care Information</span>
        </div>
    </div>
</section>
<section class="page-anchor mt80 mt45-sp mb90 mb35-sp">
    <!-- TODO section with many buttons will go here -->
    <div class="container m-w800">
        <ul class="anchor-list">
            <li>
                <a class="goto" href="#gairai-sec01">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/gairai/item01.png" alt="診療科目" /></div>
                        <p class="goto-description">禁煙外来について</p>
                    </div>
                </a>
            </li>
            <li>
                <a class="goto" href="#gairai-sec02">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/gairai/item02.png" alt="診療時間" /></div>
                        <p class="goto-description">受診される方へ</p>
                    </div>
                </a>
            </li>
            <li>
                <a class="goto" href="#gairai-sec03">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/gairai/item03.png" alt="外来担当医表" /></div>
                        <p class="goto-description">患者様の相談窓口</p>
                    </div>
                </a>
            </li>
            <li>
                <a class="goto" href="#gairai-sec04">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/gairai/item04.png" alt="外来担当医ご紹介" /></div>
                        <p class="goto-description">敷地内禁煙について</p>
                    </div>
                </a>
            </li>
            <li>
                <a class="goto" href="#gairai-sec05">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/gairai/item05.png" alt="外来について" /></div>
                        <p class="goto-description">診療科のご案内</p>
                    </div>
                </a>
            </li>
            <li>
        </ul>
    </div>
</section>


<section id="gairai-sec01" class="gairai-info-section bg-gray">
    <div class="container">
        <div class="information">
            <h2 class="h2-ttl h2-mb">禁煙外来について</h2>
            <p>禁煙外来は完全予約制になっております<br>事前に電話にてご予約お願いします</p>
            <h3 class="gairai-procedure-ttl mt40 mt25-sp">治療の対象者及び保険適応</h3>
            <p>保険診療には以下の条件を満たす方が対象となります</p>
            <ul class="pro-sub-block">
                <li>ニコチン依存症テストで５点以上の方<a class="text-blue" style="display: inline;" href="<?php bloginfo('template_directory'); ?>/assets/pdf/20150316163658.pdf" target="_blank"> ニコチン依存症チェック</a></li>
                <li>1日の喫煙本数×喫煙年数＝200以上の方</li>
                <li>１ヶ月以内に禁煙の意思がある方</li>
                <li>禁煙治療を受けることに文書で同意できる方</li>
                <li>過去に健康保険等で禁煙治療を受けたことのある方の場合は<br>前回の治療から１年を越えた方は再度保険適応となります</li>
            </ul>
            <p class="mt20 mt15-sp">上記の条件に当てはまらない方でも、自費で治療ができますので<br>あきらめずにご相談ください</p>
        </div>
        <div class="card m-auto mt40 mt25-sp">
            <div class="card-head">
                <div class="card-head-ttl text-center">
                    <span>お問い合わせ</span>
                </div>
            </div>
            <div class="card-body">
                <div class="card-body-wrapper m-auto">
                    <p class="text-center">留萌記念病院<br>
                        電話　0164-42-0271 内科外来
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="gairai-sec02" class="overview-section">
    <div class="container">
        <h2 class="h2-ttl h2-mb">受診される方へ</h2>

        <div class="overview-table">
            <table>
                <tbody>
                    <tr>
                        <td>外来診察日</td>
                        <td>月曜日～金曜日</td>
                    </tr>
                    <tr>
                        <td>休診日</td>
                        <td>
                            土曜 日曜 祝日<br>
                            ※病院指定休診日（7月17日留萌神社祭）<br>
                            ※お盆休み（8月15日）<br>
                            ※年末年始（12月30日～1月3日）<br>
                        </td>
                    </tr>
                    <tr>
                        <td>受付時間</td>
                        <td>8：30～11：30、13：30～15:30</td>
                    </tr>
                    <tr>
                        <td>備考</td>
                        <td>診療担当医・受付時間・診療時間につきましては、<a class="text-blue d-blk-inline" href="">各診療科のご案内</a>をご覧ください
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h3 class="gairai-procedure-ttl mt40 mt25-sp">初めての受診の際は、以下のものをご用意ください。</h3>
        <p class="fz-bold">受診前に必ずご用意ください。</p>
        <ul class="pro-sub-block">
            <li>各種健康保険証</li>
        </ul>
        <p class="fz-bold mt30 mt20-sp">お持ちの場合は必ずお見せください。</p>
        <ul class="pro-sub-block">
            <li>医療受給者証</li>
            <li>お薬手帳</li>
        </ul>
        <h3 class="gairai-procedure-ttl mt40 mt25-sp">必ずお読みください　保険証提示に関する注意です。</h3>
        <ul class="pro-sub-block">
            <li>再診の方も医療法の規定により、月１回の保険証のご提示をお願いいたします。なお、ご提示が出来ない場合は、保険扱いできない場合があります。</li>
            <li>保険証の変更があった場合は、必ずお申しでください。</li>
            <li>保険証のコピーは（複写）は医療法の規定により、お取扱い出来ませんのでご了承ください。</li>
        </ul>
        <p class="fz-bold mt30 mt20-sp">マイナ保険証について</p>
        <p>当院はオンライン資格確認を行う体制を有しており、マイナ保険証をご提示された患者様に対して、受診歴、薬剤情報、特定健診情報その他必要な診療情報を取得・活用して診療等を行っております。<br>
            診療情報を取得・活用することにより、質の高い医療の提供に努めておりますので、正確な情報を取得・活用するため、マイナ保険証の利用にご協力をお願いいたします。</p>
        <p>◆医療情報・システム基盤整備体制充実加算（初診時）<br>
            　加算１：４点　　加算２：２点（マイナ保険証を利用した場合）</p>
        <h3 class="gairai-procedure-ttl mt40 mt25-sp">当院での受付～診察～会計の流れ</h3>
        <ul class="pro-sub-block">
            <li>受付窓口で、「受付表」に必要事項を記載し、「健康保険証」、「医療証」、「紹介状等」とともに受付窓口へ提出してください。</li>
            <li>診療科の前の待合席でお待ちください。診察順が来ましたら診察室からお名前をお呼びします。</li>
            <li>尚、検査などが必要な場合には、担当者がご案内します。</li>
            <li>お薬が処方されている方には、院外処方箋をお渡しします。会計窓口でお名前をお呼びしますので、お待ちください。</li>
            <li>会計窓口で精算をお済ませください。お薬は、４日以内に院外処方箋を持って、保険（調剤）薬局でお受け取りください。</li>
        </ul>

    </div>
</section>

<section id="gairai-sec03" class="bg-gray com-section-pad">
    <div class="container">
        <h2 class="h2-ttl h2-mb">患者様の相談窓口</h2>
        <p>当院では、患者様やそのご家族の方からのご相談を承っております。<br>
            ご相談内容は秘密を厳守し、プライバシーを保護すると共に、相談されたことにより、不利益を受けることはありません。<br>
            １階ロビー「受付」へご気軽にご相談ください。</p>
        <h3 class="gairai-procedure-ttl mt40 mt25-sp">ご相談内容</h3>
        <ul class="pro-sub-block">
            <li>病気や治療に伴う不安や悩みなどのご相談</li>
            <li>経済的問題や医療費に関するご相談</li>
            <li>介護保険・社会福祉制度などに関するご相談</li>
            <li>入院や退院に関するご相談</li>
            <li>在宅医療に関するご相談</li>
            <li>当院に関するご意見や苦情。</li>
            <li>個人情報保護方針に関するご相談</li>
        </ul>
        <p class="mt30 mt20-sp">上記以外についてもご気軽にご相談ください。</p>
        <h3 class="gairai-procedure-ttl mt40 mt25-sp">患者様の声　意見箱</h3>
        <p>各階には「意見箱」を設置してあります。遠慮なくご意見をお寄せください。</p>
        <p>1階：正面玄関風除室内</p>
        <p>2階：詰所向かいの中央階段横</p>
        <p>3階：東側エレベーターの横</p>
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
</section>

<section id="gairai-sec04" class="com-section-pad">
    <div class="container">
        <h2 class="h2-ttl h2-mb">敷地内禁煙について</h2>
        <h3 class="gairai-procedure-ttl mt40 mt25-sp">禁煙ご協力のお願い</h3>
        <p>当院では、健康増進法の施行に伴い、特定の場所以外では喫煙できない「建物内分煙」を実施してきましたが、この度、厚生労働省より受動喫煙を防止するため公共施設においては全面禁煙とするよう通知がありました。つきましては、当院でも平成23年4月1日より、敷地内全面禁煙となっておりますので、皆様のご理解とご協力をお願いいたします。</p>
        <h3 class="gairai-procedure-ttl mt40 mt25-sp">健康増進法（抜粋）</h3>
        <p>（受動喫煙の防止）</p>
        <p>第25条　学校、体育館、病院、劇場、観覧場、集会場、展示場、百貨店、事務所、官公庁施設、飲食店その他の多数の者が利用する施設を管理するものは、これらを利用するものについて、受動喫煙（室内またはこれに準ずる環境において、他人のたばこの煙を吸わされることをいう。）を防止するために必要な措置をこうずるように努めなければならない。</p>
    </div>
</section>

<section id="gairai-sec05" class="gairai-sec05 bg-gray com-section-pad">
    <div class="container">
        <h2 class="h2-ttl h2-mb">診療科のご案内</h2>
        <div class="recruit-info-gp">
            <ul class="recruit-info-li">
                <li>
                    <a href="#inner-link-01">内科</a>
                </li>
                <li>
                    <a href="#inner-link-02">消化器内科</a>
                </li>
                <li>
                    <a href="#inner-link-03">外科</a>
                </li>
                <li>
                    <a href="#inner-link-04">整形外科</a>
                </li>
                <li>
                    <a href="#inner-link-05">肛門外科</a>
                </li>
                <li>
                    <a href="#inner-link-06">リハビリテーション科</a>
                </li>
            </ul>
        </div>

        <div id="inner-link-01">
            <h3 class="gairai-procedure-ttl mt40 mt25-sp">内科</h3>
            <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">2023年4月</h4>
            <table class="table-dec">
                <tbody>
                    <tr class="table-tr">
                        <th class="table-th"></th>
                        <th class="table-th">月</th>
                        <th class="table-th">火</th>
                        <th class="table-th">水</th>
                        <th class="table-th">木</th>
                        <th class="table-th">金</th>
                        <th class="table-th">土</th>
                    </tr>


                    <tr class="table-tr">
                        <th class="table-th single-th">午前</th>
                        <td class="table-td">
                            石川 </td>
                        <td class="table-td">
                            石川 </td>
                        <td class="table-td">
                            三輪 </td>
                        <td class="table-td">
                            三輪 </td>
                        <td class="table-td">
                            三輪 </td>
                        <td class="table-td">
                            休診
                        </td>
                    </tr>
                    <tr class="table-tr">
                        <th class="table-th single-th">午後</th>
                        <td class="table-td">
                            石川 </td>
                        <td class="table-td">
                            石川 </td>
                        <td class="table-td">休診 </td>
                        <td class="table-td">訪問診療のみ</td>
                        <td class="table-td">訪問診療のみ</td>
                        <td class="table-td">休診
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="emp-info-table">
                <table>
                    <tbody>
                        <tr>
                            <td>受付時間</td>
                            <td>8時30分～11時30分　13時30分～15時30分</td>
                        </tr>
                        <tr>
                            <td>診療時間</td>
                            <td>9時00分～12時30分　14時00分～16時30分</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="inner-link-02">
            <h3 class="gairai-procedure-ttl mt40 mt25-sp">消化器内科</h3>
            <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">2023年4月</h4>
            <table class="table-dec">
                <tbody>
                    <tr class="table-tr">
                        <th class="table-th"></th>
                        <th class="table-th">月</th>
                        <th class="table-th">火</th>
                        <th class="table-th">水</th>
                        <th class="table-th">木</th>
                        <th class="table-th">金</th>
                        <th class="table-th">土</th>
                    </tr>


                    <tr class="table-tr">
                        <th class="table-th single-th">午前</th>
                        <td class="table-td">休診</td>
                        <td class="table-td">休診</td>
                        <td class="table-td">
                            三輪 </td>
                        <td class="table-td">
                            三輪 </td>
                        <td class="table-td">
                            三輪 </td>
                        <td class="table-td">休診</td>
                    </tr>
                    <tr class="table-tr">
                        <th class="table-th single-th">午後</th>
                        <td class="table-td"> 休診</td>
                        <td class="table-td"> 休診</td>
                        <td class="table-td"> 休診</td>
                        <td class="table-td"> 休診</td>
                        <td class="table-td"> 休診</td>
                        <td class="table-td"> 休診</td>
                    </tr>
                </tbody>
            </table>
            <div class="emp-info-table">
                <table>
                    <tbody>
                        <tr>
                            <td>受付時間</td>
                            <td>8時30分～11時30分　13時30分～15時30分</td>
                        </tr>
                        <tr>
                            <td>診療時間</td>
                            <td>9時00分～12時30分　14時00分～16時30分</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="inner-link-03">
            <h3 class="gairai-procedure-ttl mt40 mt25-sp">外科</h3>
            <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">2023年4月</h4>
            <table class="table-dec">
                <tbody>
                    <tr class="table-tr">
                        <th class="table-th"></th>
                        <th class="table-th">月</th>
                        <th class="table-th">火</th>
                        <th class="table-th">水</th>
                        <th class="table-th">木</th>
                        <th class="table-th">金</th>
                        <th class="table-th">土</th>
                    </tr>


                    <tr class="table-tr">
                        <th class="table-th single-th">午前</th>
                        <td class="table-td">休診</td>
                        <td class="table-td">休診</td>
                        <td class="table-td">
                            三輪 </td>
                        <td class="table-td">
                            三輪 </td>
                        <td class="table-td">
                            三輪 </td>
                        <td class="table-td">休診</td>
                    </tr>
                    <tr class="table-tr">
                        <th class="table-th single-th">午後</th>
                        <td class="table-td"> 休診</td>
                        <td class="table-td"> 休診</td>
                        <td class="table-td"> 休診</td>
                        <td class="table-td"> 休診</td>
                        <td class="table-td"> 休診</td>
                        <td class="table-td"> 休診</td>
                    </tr>
                </tbody>
            </table>
            <div class="emp-info-table">
                <table>
                    <tbody>
                        <tr>
                            <td>受付時間</td>
                            <td>8時30分～11時30分　13時30分～15時30分</td>
                        </tr>
                        <tr>
                            <td>診療時間</td>
                            <td>9時00分～12時30分　14時00分～16時30分</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="inner-link-04">
            <h3 class="gairai-procedure-ttl mt40 mt25-sp">整形外科</h3>
            <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">2023年4月</h4>
            <table class="table-dec">
                <tbody>
                    <tr class="table-tr">
                        <th class="table-th"></th>
                        <th class="table-th">月</th>
                        <th class="table-th">火</th>
                        <th class="table-th">水</th>
                        <th class="table-th">木</th>
                        <th class="table-th">金</th>
                        <th class="table-th">土</th>
                    </tr>
                    <tr class="table-tr">
                        <th class="table-th single-th">午前</th>
                        <td class="table-td">石川</td>
                        <td class="table-td">石川</td>
                        <td class="table-td">休診 </td>
                        <td class="table-td">休診 </td>
                        <td class="table-td">休診 </td>
                        <td class="table-td">休診</td>
                    </tr>
                    <tr class="table-tr">
                        <th class="table-th single-th">午前</th>
                        <td class="table-td">石川</td>
                        <td class="table-td">石川</td>
                        <td class="table-td">休診 </td>
                        <td class="table-td">休診 </td>
                        <td class="table-td">休診 </td>
                        <td class="table-td">休診</td>
                    </tr>
                </tbody>
            </table>
            <div class="emp-info-table">
                <table>
                    <tbody>
                        <tr>
                            <td>受付時間</td>
                            <td>8時30分～11時30分　13時30分～15時30分</td>
                        </tr>
                        <tr>
                            <td>診療時間</td>
                            <td>9時00分～12時30分　14時00分～16時30分</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="inner-link-05">
            <h3 class="gairai-procedure-ttl mt40 mt25-sp">肛門外科</h3>
            <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">2023年4月</h4>
            <table class="table-dec">
                <tbody>
                    <tr class="table-tr">
                        <th class="table-th"></th>
                        <th class="table-th">月</th>
                        <th class="table-th">火</th>
                        <th class="table-th">水</th>
                        <th class="table-th">木</th>
                        <th class="table-th">金</th>
                        <th class="table-th">土</th>
                    </tr>
                    <tr class="table-tr">
                        <th class="table-th single-th">午前</th>
                        <td class="table-td">休診</td>
                        <td class="table-td">休診</td>
                        <td class="table-td">三輪 </td>
                        <td class="table-td">三輪 </td>
                        <td class="table-td">三輪 </td>
                        <td class="table-td">休診</td>
                    </tr>
                    <tr class="table-tr">
                        <th class="table-th single-th">午前</th>
                        <td class="table-td">石川</td>
                        <td class="table-td">石川</td>
                        <td class="table-td">休診 </td>
                        <td class="table-td">休診 </td>
                        <td class="table-td">休診 </td>
                        <td class="table-td">休診</td>
                    </tr>
                </tbody>
            </table>
            <div class="emp-info-table">
                <table>
                    <tbody>
                        <tr>
                            <td>受付時間</td>
                            <td>8時30分～11時30分　13時30分～15時30分</td>
                        </tr>
                        <tr>
                            <td>診療時間</td>
                            <td>9時00分～12時30分　14時00分～16時30分</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="inner-link-06">
            <h3 class="gairai-procedure-ttl mt40 mt25-sp">リハビリテーション科</h3>
            <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">2023年4月</h4>
            <table class="table-dec">
                <tbody>
                    <tr class="table-tr">
                        <th class="table-th"></th>
                        <th class="table-th">月</th>
                        <th class="table-th">火</th>
                        <th class="table-th">水</th>
                        <th class="table-th">木</th>
                        <th class="table-th">金</th>
                        <th class="table-th">土</th>
                    </tr>
                    <tr class="table-tr">
                        <th class="table-th single-th">午前</th>
                        <td class="table-td">診療あり</td>
                        <td class="table-td">診療あり</td>
                        <td class="table-td">診療あり </td>
                        <td class="table-td">診療あり </td>
                        <td class="table-td">診療あり </td>
                        <td class="table-td">休診</td>
                    </tr>
                    <tr class="table-tr">
                        <th class="table-th single-th">午前</th>
                        <td class="table-td">休診</td>
                        <td class="table-td">休診</td>
                        <td class="table-td">休診 </td>
                        <td class="table-td">休診 </td>
                        <td class="table-td">休診 </td>
                        <td class="table-td">休診</td>
                    </tr>
                </tbody>
            </table>
            <div class="emp-info-table">
                <table>
                    <tbody>
                        <tr>
                            <td>受付時間</td>
                            <td>8時30分～11時30分　13時30分～15時30分</td>
                        </tr>
                        <tr>
                            <td>診療時間</td>
                            <td>9時00分～12時30分　14時00分～16時30分</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>



    </div>
</section>


<!-- alsdfla;sd -->

<?php
get_footer();
