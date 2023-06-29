<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="description" content="ページの説明" />
  <meta name="format-detection" content="telephone=no" />

  <?php wp_head(); ?>
  <!-- favicon/webclipicon -->
  <link rel="icon" href="favicon.ico" />
  <link rel="icon" href="favicon.svg" type="image/svg+xml" />
  <link rel="apple-touch-icon" href="webclip.png" />

  <!-- ogp -->
  <meta property="og:site_name" content="サイト名" />
  <meta property="og:url" content="URL" />
  <meta property="og:type" content="website or article" />
  <meta property="og:title" content="ページのタイトル" />
  <meta property="og:description" content="ページの説明" />
  <meta property="og:image" content="URL" />
  <meta property="og:locale" content="ja_JP" />
  <!-- <meta property="fb:app_id" content="AppID"> -->
  <meta name="twitter:card" content="summary_large_image or summary" />
  <!-- <meta name="twitter:site" content="@moshamusha2010" /> -->
  <meta name="twitter:description" content="ページの説明" />
  <meta name="twitter:image:src" content="URL" />

  <!-- css -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/import.css" />

  <!-- js -->

  <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.4.1.min.js" defer></script>
  <script src="<?php bloginfo('template_directory'); ?>/assets/js/common.js" defer></script>

  <!-- 場合によって必要 -->
  <!-- <meta name="robots" content="noindex,nofollow"> -->
</head>

<body>
  <div class="wrapper">
    <div class="header-mv sub-header-mv sub-header-nomv">
      <header id="header">
        <div class="header-main">
          <div class="header-flex">
            <div class="main-logo">
              <h1 class="header-logo">
                <a href="<?php echo home_url(); ?>">
                  <div class="logo-img">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/shinyuukai-logo.png" alt="心優会" />
                  </div>
                  <p><span class="fz-16 fz-14-sp">医療法人社団</span><span class="fz-38 fz-30-sp">心優会</span></p>
                </a>
              </h1>
            </div>
            <div class="menu-list-sec menu-list pc">
              <ul class="menu-list-ul">
                <li>
                  <a href="<?php echo home_url('/about'); ?>">心優会について
                    <span>About</span>
                  </a>
                </li>
                <li>
                  <a href="<?php echo home_url('/information'); ?>">施設のご案内
                    <span>Information</span>
                  </a>
                </li>
                <li>
                  <a href="<?php echo home_url('/recruit'); ?>">採用情報
                    <span>Recruit</span>
                  </a>
                </li>
                <li>
                  <a href="<?php echo home_url('/contact'); ?>">お問い合わせ
                    <span>Contact</span>
                  </a>
                </li>
              </ul>
              <button class="search-open-btn" type="submit"></button>
              <div class="search-wrapper">
                <!-- Add id, method, class, action in form / Add type="text" , value, name, title -->
                <form method="get" id="searchform" class="search-form" action="<?php echo home_url('/'); ?>">
                  <input class="search-box" type="text" value="<?php echo get_search_query() ?>" name="s" title="Search" placeholder="サイト内検索" />
                  <button class="search-submit" type="submit"></button>
                </form>
                <button class="search-close"></button>
                <span class="form-close-txt">閉じる</span>
              </div>
            </div>
            <div class="size-control pc">
              <p class="fz-control-txt">文字の大きさ</p>
              <button data-font-size="62.5%" class="fz-control-btn fz-btn-active">標準</button>
              <button data-font-size="72.5%" class="fz-control-btn">大</button>
              <button data-font-size="82.5%" class="fz-control-btn">特大</button>
            </div>
          </div>
          <div class="mv-header">
            <div class="container">
              <div id="breadcrumb">
                <div class="crumb">
                  <ul class="crumb-in">
                    <li>
                      <a href="<?php echo home_url(); ?>">ホーム</a>
                    </li>
                    <li><span class="current"><?php echo the_title(); ?></span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <nav class="sub-gmenu sp">
            <div class="gmenu-sp">
              <div class="menu-sp">
                <div class="line line-one"></div>
                <div class="line line-two"></div>
                <div class="line line-three"></div>
              </div>
            </div>
            <div class="nav-sp">
              <div class="nav-menu-sp">
                <ul>
                  <li>
                    <a href="<?php echo home_url('/about'); ?>">心優会について
                      <span>About</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo home_url('/information'); ?>">施設のご案内
                      <span>Information</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo home_url('/recruit'); ?>">採用情報
                      <span>Recruit</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo home_url('/contact'); ?>">お問い合わせ
                      <span>Contact</span>
                    </a>
                  </li>
                  <li>
                    <div>
                      <form method="get" id="searchform" class="search-form" action="<?php echo home_url('/'); ?>">
                        <input class="search-box" type="text" value="<?php echo get_search_query() ?>" name="s" title="Search" placeholder="サイト内検索" />
                        <button class="search-submit" type="submit"></button>
                      </form>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="size-control">
                <p class="fz-control-txt">文字の大きさ</p>
                <button data-font-size="62.5%" class="fz-control-btn fz-btn-active">標準</button>
                <button data-font-size="72.5%" class="fz-control-btn">大</button>
                <button data-font-size="82.5%" class="fz-control-btn">特大</button>
              </div>
            </div>
          </nav>
        </div>
      </header>
    </div>