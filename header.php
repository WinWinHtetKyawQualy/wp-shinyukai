<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1" />

    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/assets/img/common/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/img/common/favicon.ico" type="image/x-icon">
    <meta property="og:image" content="<?php bloginfo('template_directory'); ?>/assets/img/common/ogp.png" />

    <?php wp_head(); ?>
    <!-- For Noto Sans JP , Gothic -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet" />
</head>

<body id="top" class="body_hide">
    <div class="wrapper">
        <header id="header">
            <div class="headcontainer">
                <div class="main-header">
                    <div class="header-ttl pc">
                        <a href="http://www.shinyukai-r.or.jp/" target="_blank">医療法人社団心優会ホームページへ</a>
                    </div>
                    <div class="header-ttl-sp fz-10-sp sp">
                        <p>旭川の内科・消化器内科・血液内科・感染症内科なら沼﨑病院</p>
                    </div>
                    <div class="header-m">
                        <h1 class="header-logo">
                            <a href="<?php echo home_url(); ?>">
                                <div class="h-logo-img">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/common/logo.png" alt="留萌記念病院" />
                                </div>
                                <p>医療法人社団 心優会<span>留萌記念病院</span></p>
                            </a>
                        </h1>
                        <div class="phone-btn sp"><a href="tel:0166232090">お電話</a></div>
                        <div class="pc">
                            <div class="nav">
                                <div class="size-button btn-active">
                                    <span>文字の大きさ</span>
                                    <ul class="size">
                                        <li class="size-btn btn-active regular">
                                            <button>標準</button>
                                        </li>
                                        <li class="size-btn large">
                                            <button>大</button>
                                        </li>
                                        <li class="size-btn extra-large">
                                            <button>特大</button>
                                        </li>
                                    </ul>
                                    <div class="search-box">
                                        <form method="get" id="searchform" class="searchform" action="<?php echo home_url('/'); ?>">
                                            <input type="text" value="<?php echo get_search_query() ?>" name="s" title="Search" placeholder="サイト内検索">
                                            <button type="submit" id="searchsubmit" value="検索" class="ser-btn">
                                                <svg class="gUZ B9u U9O kVc mr13" height="18" width="18" viewBox="0 0 24 24" aria-label="search" role="img">
                                                    <path d="M10 16c-3.31 0-6-2.69-6-6s2.69-6 6-6 6 2.69 6 6-2.69 6-6 6m13.12 2.88l-4.26-4.26A9.842 9.842 0 0 0 20 10c0-5.52-4.48-10-10-10S0 4.48 0 10s4.48 10 10 10c1.67 0 3.24-.41 4.62-1.14l4.26 4.26a3 3 0 0 0 4.24 0 3 3 0 0 0 0-4.24"></path>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <!-- /.content -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-menu pc">
                <div class="container">
                    <div class="nav-list">
                        <ul>
                            <li>
                                <a href="<?php echo home_url() . '/gairai'; ?>">
                                    <div class="nav-img1">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/common/nav-img1.png" alt="外来のご案内" />
                                    </div>
                                    <span class="hover-eff">外来のご案内</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo home_url() . '/nyuuin'; ?>">
                                    <div class="nav-img2">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/common/nav-img2.png" alt="入院のご案内" />
                                    </div>
                                    <span class="hover-eff">入院のご案内</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo home_url() . '/department'; ?>">
                                    <div class="nav-img3">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/common/nav-img3.png" alt="部門紹介" />
                                    </div>
                                    <span class="hover-eff">部門紹介</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <nav class="sp">
                <div class="gmenu-sp">
                    <div class="menu-sp">
                        <span class="line line_01"></span>
                        <span class="line line_02"></span>
                        <span class="line line_03"></span>
                    </div>
                </div>
                <div class="nav-sp">
                    <div class="nav-menu-sp">
                        <ul>
                            <li>
                                <a href="<?php echo home_url(); ?>" class="menu-list">
                                    <p>トップページ</p>
                                    <span class="arr-icon"></span>
                                </a>
                            </li>
                            <li class="sp-menu-toggle menu-on">
                                <div class="menu-list">
                                    <p>外来のご案内</p>
                                    <span class="arr-icon"></span>
                                </div>
                                <div class="menu-sub-list">
                                    <ul class="subnav-box">
                                        <li><a href="<?php echo home_url() . '/gairai'; ?>">外来のご案内</a></li>
                                        <li><a href="<?php echo home_url() . '/gairai#gairai-sec02'; ?>">診療時間</a></li>
                                        <li><a href="<?php echo home_url() . '/gairai#gairai-sec03'; ?>">外来担当医表</a></li>
                                        <li><a href="<?php echo home_url() . '/gairai#gairai-sec04'; ?>">外来担当医のご紹介</a></li>
                                        <li><a href="<?php echo home_url() . '/gairai#gairai-sec05'; ?>">外来について</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="sp-menu-toggle menu-on">
                                <div class="menu-list">
                                    <p>入院のご案内</p>
                                    <span class="arr-icon"></span>
                                </div>
                                <div class="menu-sub-list">
                                    <ul class="subnav-box">
                                        <li><a href="<?php echo home_url() . '/nyuuin'; ?>">入院のご案内</a></li>
                                        <li><a href="<?php echo home_url() . '/nyuuin#item01-sec'; ?>">入院されるとき</a></li>
                                        <li><a href="<?php echo home_url() . '/nyuuin#item02-sec'; ?>">注意事項</a></li>
                                        <li><a href="<?php echo home_url() . '/nyuuin#item03-sec'; ?>">入院中の生活</a></li>
                                        <li><a href="<?php echo home_url() . '/nyuuin#item04-sec'; ?>">面談・面会について</a></li>
                                        <li><a href="<?php echo home_url() . '/nyuuin#item05-sec'; ?>">入院の費用</a></li>
                                        <li><a href="<?php echo home_url() . '/nyuuin#item06-sec'; ?>">その他事項</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="<?php echo home_url() . '/department'; ?>" class="menu-list">
                                    <p>部門紹介</p>
                                    <span class="arr-icon"></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo home_url() . '/'; ?>" class="menu-list">
                                    <p>健康診断・在宅医療</p>
                                    <span class="arr-icon"></span>
                                </a>
                            </li>
                            <li class="sp-menu-toggle menu-on">
                                <div class="menu-list">
                                    <p>病院紹介</p>
                                    <span class="arr-icon"></span>
                                </div>
                                <div class="menu-sub-list">
                                    <ul class="subnav-box">
                                        <li><a href="<?php echo home_url() . '/about'; ?>">病院紹介</a></li>
                                        <li><a href="<?php echo home_url() . '/about#greeting-section'; ?>">院長挨拶</a></li>
                                        <li><a href="<?php echo home_url() . '/about#overview-section'; ?>">病院概要・沿革</a></li>
                                        <li><a href="<?php echo home_url() . '/about#traffic-section'; ?>">交通アクセス</a></li>
                                        <li><a href="<?php echo home_url() . '/about#floor-section'; ?>">フロアガイド</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="sp-menu-toggle menu-on">
                                <div class="menu-list">
                                    <p>採用情報</p>
                                    <span class="arr-icon"></span>
                                </div>
                                <div class="menu-sub-list">
                                    <ul class="subnav-box">
                                        <li><a href="<?php echo home_url() . '/recruit'; ?>">採用情報</a></li>
                                        <li><a href="<?php echo home_url() . '/recruit#recruitment-information-list'; ?>">採用情報一覧</a></li>
                                        <li><a href="<?php echo home_url() . '/recruit#about-recruitment'; ?>">職員募集について</a></li>
                                        <li><a href="<?php echo home_url() . '/recruit#employment-information-list'; ?>">採用情報詳細</a></li>
                                        <li><a href="<?php echo home_url() . '/recruit#nursing-scholarship'; ?>">看護学生 奨学金制度</a></li>
                                        <li><a href="<?php echo home_url() . '/recruit#certified-worker-scholarship'; ?>">介護福祉士 奨学金制度</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="http://www.shinyukai-r.or.jp/" target="_blank" class="menu-list">
                                    <p>医療法人社団 心優会<br />ホームページへ</p>
                                    <span class="arr-icon"></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo home_url() . '/sitemap'; ?>" class="menu-list">
                                    <p>サイトマップ</p>
                                    <span class="arr-icon"></span>
                                </a>
                            </li>
                            <li>
                                <div class="menu-list search-sp">
                                    <form method="get" id="searchform" class="searchform" action="<?php echo home_url('/'); ?>">
                                        <button type="submit" id="searchsubmit" value="検索" class="ser-btn sp">
                                            <svg class="gUZ B9u U9O kVc mr13" height="18" width="18" viewBox="0 0 24 24" aria-label="search" role="img">
                                                <path d="M10 16c-3.31 0-6-2.69-6-6s2.69-6 6-6 6 2.69 6 6-2.69 6-6 6m13.12 2.88l-4.26-4.26A9.842 9.842 0 0 0 20 10c0-5.52-4.48-10-10-10S0 4.48 0 10s4.48 10 10 10c1.67 0 3.24-.41 4.62-1.14l4.26 4.26a3 3 0 0 0 4.24 0 3 3 0 0 0 0-4.24"></path>
                                            </svg>
                                        </button>
                                        <input type="text" value="<?php echo get_search_query() ?>" name="s" title="Search" placeholder="サイト内検索" class="menu-list-search" />
                                    </form>
                                    <!-- <p class="menu-list-search">サイト内検索</p> -->
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="mv-service pc" id="time">
            <div class="mv-block anime">
                <div class="mv-part">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/common/mv_icon.png" alt="診療時間・アクセス" />
                    <span>診療時間・アクセス</span>
                </div>
                <div class="timeTable">
                    <table class="table-pc">
                        <thead>
                            <tr>
                                <td class="text-left pl0 pr0">診療時間</td>
                                <td>月</td>
                                <td>火</td>
                                <td>水</td>
                                <td>木</td>
                                <td>金</td>
                                <td>土</td>
                                <td>日</td>
                                <td class="pl0 pr0">祝祭日</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-left pl0 pr0">9:00-12:30</td>
                                <td><i class="circle m-auto"></i></td>
                                <td><i class="circle m-auto"></i></td>
                                <td><i class="circle m-auto"></i></td>
                                <td><i class="circle m-auto"></i></td>
                                <td><i class="circle m-auto"></i></td>
                                <!-- <td class="pd1"><span class="icon-triangle"></span></td> -->
                                <td class="pl0 pr0">-</td>
                                <td class="pl0 pr0">-</td>
                                <td class="pl0 pr0">-</td>
                            </tr>
                            <tr>
                                <td class="text-left pl0 pr0">14:00-16:30</td>
                                <td><i class="circle m-auto"></i></td>
                                <td><i class="circle m-auto"></i></td>
                                <td><i class="circle m-auto"></i></td>
                                <td><i class="circle m-auto"></i></td>
                                <td><i class="circle m-auto"></i></td>
                                <td class="pl0 pr0">-</td>
                                <td class="pl0 pr0">-</td>
                                <td class="pl0 pr0">-</td>
                            </tr>
                            <tr>
                                <!-- <td class="text-left pl0 pr0"><span class="icon-triangle"></span>13:30-17:00</td> -->
                                <td colspan="10" class="text-left pl0 pr0">
                                    <p class="addr">
                                        <i class="location"></i>
                                        <span class="addr-text">〒077-0042 北海道留萌市開運町1丁目6番1号</span>
                                    </p>
                                    <div class="mv-service-btn">
                                        <a class="pc open-map-btn" target="_blank" href="https://www.google.com/maps/dir/?api=1&destination=留萌記念病院"><span>マップを開く</span></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="phone-number">お電話でのお問い合わせ<span class="ph-no font-blue">0164-42-0271</span></p>
                </div>
            </div>
        </div>