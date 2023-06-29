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

<body id="top">
  <div class="wrapper">
    <div class="header-mv">
      <header id="header">
        <div class="header-main">
          <div class="header-flex">
            <div class="main-logo">
              <!-- <img src="<?php bloginfo('template_directory'); ?>/assets/img/main-logo.png" alt="心優会" /> -->
              <h1 class="header-logo">
                <a href="<?php echo home_url('/'); ?>">
                  <div class="logo-img">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/shinyuukai-logo.png" alt="心優会" />
                  </div>
                  <p><span class="fz-16 fz-14-sp">医療法人社団</span><span class="fz-38 fz-30-sp">心優会</span></p>
                </a>
              </h1>
            </div>
            <div class="size-control pc">
              <p class="fz-control-txt">文字の大きさ</p>
              <button data-font-size="62.5%" class="fz-control-btn fz-btn-active">標準</button>
              <button data-font-size="72.5%" class="fz-control-btn">大</button>
              <button data-font-size="82.5%" class="fz-control-btn">特大</button>
            </div>
          </div>
          <div class="menu-list pc">
            <ul class="menu-list-ul">
              <li>
                <a href="<?php echo home_url('/about'); ?>">心優会について
                  <span>About</span>
                </a>
              </li>
              <li>
                <a href="<?php echo home_url('#facility-info'); ?>">施設のご案内
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
              <form method="get" id="searchform" class="search-form" action="<?php echo home_url('/'); ?>">
                <input class="search-box" type="text" value="<?php echo get_search_query() ?>" name="s" title="Search" placeholder="サイト内検索" />
                <button class="search-submit" type="submit"></button>
              </form>
              <button class="search-close"></button>
              <span class="form-close-txt">閉じる</span>
            </div>
          </div>
          <nav class="sp">
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
                    <a href="<?php echo home_url('#facility-info'); ?>">施設のご案内
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

      <div class="main-mv-container">
        <div class="main-mv">
          <img src="<?php bloginfo('template_directory'); ?>/assets/img/mv-bg.png" alt="" />
        </div>
        <p class="mv-ttl">
          原点は優しい心<br />
          患者さま中心の医療を実施し<br />
          心のこもったケアをいたします
        </p>
      </div>
      <div class="scroll-hint">
        <a href="#news-header">
          <span></span>
          <p>scroll</p>
        </a>
      </div>
    </div>

    <main>
      <section class="news-sec">
        <div class="container">
          <div class="h2-ttl" id="news-header">新着情報</div>
          <?php
          query_posts(array(
            'post_type' => 'post',
            'posts_per_page' => 3
          ));
          ?>
          <div class="news-block">
            <ul class="news-list">

                  <li>
                    
                    <ul class="date"> 
                    <?php
                    include_once( ABSPATH . WPINC . '/feed.php' );
                    $feeduri = array( 'http://shinyukai-r.or.jp/rumoi/?feed=rss2' , 'http://shinyukai-r.or.jp/kato/?feed=rss2' , 'http://shinyukai-r.or.jp/noguchi/?feed=rss2' , 'http://shinyukai-r.or.jp/nakae/?feed=rss2' , 'http://shinyukai-r.or.jp/numazaki/?feed=rss2');
                    $rss = fetch_feed($feeduri);
                    if (!is_wp_error($rss)) {
                    $maxitems = $rss->get_item_quantity(5);
                    $rss_items = $rss->get_items( 0, $maxitems );
                    }
                    foreach ( $rss_items as $item ) : ?>
                        <li><a href="<?php echo $item->get_permalink(); ?>">
                        <?php
                        $first_img = '';
                        if ( preg_match( '/<img.+?src=[\'"]([^\'"]+?)[\'"].*?>/msi', $item->get_content(), $matches ) ) {
                            $first_img = $matches[1];
                        }
                        ?>
                            <img src="<?php echo esc_attr( $first_img ); ?>" alt="">
                        <?php 
                        $item_date = $item->get_date();
                        $date = date('Y/m/d',strtotime( $item_date )); ?>
                            <span class="dateTime"><?php echo $date; ?></span>
                        <?php
                        $title = $item->get_title();
                        if(mb_strlen( $title ) > 40 ):
                        ?>
                            <span class="news_title"><?php echo mb_substr( $title,0,40 );?>...</span>
                        <?php else : ?>
                            <span class="news_title"><?php echo $title ;?></span>
                        <?php endif; ?>   
                        </a></li>
                    <?php
                    endforeach;
                    wp_reset_postdata();
                    ?>
                    </ul>
                  </li>

            </ul>
            <button class="news-btn">
              <a href="<?php echo home_url() . '/news'; ?>">
                一覧を見る
              </a>
            </button>
          </div>
        </div>
      </section>

      <section class="staff-blog">
        <div class="container">
          <div class="h2-ttl">スタッフブログ</div>
          <p class="txt-center mt55">各病院のスタッフが、病院の様子などをご紹介しています。</p>
          <div class="staff-blog-wrapper">
            <ul class="blog-list">
              <li>
                <a href="/rumoi/">
                  <img src="<?php bloginfo('template_directory'); ?>/assets/img/staff-blog-img01.png" alt="留萌記念病院" />
                  <p class="staff-blog-txt first-staff-txt">留萌記念病院</p>
                </a>
              </li>
              <li>
                <a href="/noguchi/">
                  <img src="<?php bloginfo('template_directory'); ?>/assets/img/staff-blog-img02.png" alt="野口病院" />
                  <p class="staff-blog-txt">野口病院</p>
                </a>
              </li>
              <li>
                <a href="/nakae/">
                  <img src="<?php bloginfo('template_directory'); ?>/assets/img/staff-blog-img03.png" alt="中江病院" />
                  <p class="staff-blog-txt">中江病院</p>
                </a>
              </li>
              <li>
                <a href="/kato/">
                  <img src="<?php bloginfo('template_directory'); ?>/assets/img/staff-blog-img04.png" alt="加藤病院" />
                  <p class="staff-blog-txt">加藤病院</p>
                </a>
              </li>
              <li>
                <a href="/numazaki/">
                  <img src="<?php bloginfo('template_directory'); ?>/assets/img/staff-blog-img05.png" alt="沼崎病院" />
                  <p class="staff-blog-txt">沼崎病院</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <section class="about-shinyukai-sec">
        <div class="container">
          <div class="h2-ttl h2-mb">心優会について</div>
          <!-- <div class="abt-txt-sec">
             <p>
              心優会は、テキストテキストテキストテキストテキストテキスト<br />
              テキストテキストテキストテキストテキストテキストテキスト<br />
              テキストテキストテキストテキストテキストテキストテキストテキスト。<br /><br />
              テキストテキストテキストテキストテキストテキスト<br />
              テキストテキストテキストテキストテキストテキストテキスト<br />
              テキストテキストテキストテキストテキストテキストテキストテキスト。<br />
            </p> 
          </div> -->
          <div class="btn-list-wrapper">
            <ul class="btn-list">
              <li>
                <a href="<?php echo home_url('/about/#shinyukai-info01'); ?>">理事長あいさつ</a>
              </li>
              <li>
                <a href="<?php echo home_url('/about/#shinyukai-info02'); ?>">基本理念</a>
              </li>
              <li>
                <a href="<?php echo home_url('/about/#shinyukai-info03'); ?>">法人沿革</a>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <?php get_template_part('facilityinfo'); ?>
    </main>
    <?php get_footer(); ?>