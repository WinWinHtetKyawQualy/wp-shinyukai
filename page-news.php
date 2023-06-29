<?php
/*
template name:news
 */

get_header('one');
?>
<main class="sub-contents">
  <section class="news-sec mb65">
    <div class="container">
      <div class="h2-ttl" id="news-header">新着情報</div>
      <ul class="news-list">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 10,
          'paged' => $paged
        );

        $query = new WP_Query($args);

        $feeduri = array(
          'http://shinyukai-r.or.jp/rumoi/?feed=rss2',
          'http://shinyukai-r.or.jp/kato/?feed=rss2',
          'http://shinyukai-r.or.jp/noguchi/?feed=rss2',
          'http://shinyukai-r.or.jp/nakae/?feed=rss2',
          'http://shinyukai-r.or.jp/numazaki/?feed=rss2'
        );

        $all_items = array();

        foreach ($feeduri as $eachfeeduri) {
          $rss = fetch_feed($eachfeeduri);

          if (!is_wp_error($rss)) {
            $maxitems = $rss->get_item_quantity();
            $rss_items = $rss->get_items(0, $maxitems);

            foreach ($rss_items as $item) {
              $all_items[] = $item;
            }
          }
        }

        // Sort the items by date in descending order
        usort($all_items, function ($a, $b) {
          $a_date = strtotime($a->get_date());
          $b_date = strtotime($b->get_date());
          return $b_date - $a_date;
        });

        $current_page = max(1, get_query_var('paged'));
        $items_per_page = 10;
        $total_items = count($all_items);
        $total_pages = ceil($total_items / $items_per_page);

        // Display the sorted items for the current page
        $start = ($current_page - 1) * $items_per_page;
        $end = $start + $items_per_page;
        $items_to_display = array_slice($all_items, $start, $items_per_page);

        // Display the sorted items
        foreach ($items_to_display as $item) :
          $permalink = $item->get_permalink();
          $source = '';
          $source_class = '';

          if (strpos($permalink, 'shinyukai-r.or.jp/rumoi') !== false) {
            $source = '留萌記念病院';
            $source_class = 'post-source post-roumoi';
          } elseif (strpos($permalink, 'shinyukai-r.or.jp/kato') !== false) {
            $source = '加藤病院';
            $source_class = 'post-source post-kato';
          } elseif (strpos($permalink, 'shinyukai-r.or.jp/noguchi') !== false) {
            $source = '野口病院';
            $source_class = 'post-source post-noguchi';
          } elseif (strpos($permalink, 'shinyukai-r.or.jp/nakae') !== false) {
            $source = '中江病院';
            $source_class = 'post-source post-nakae';
          } elseif (strpos($permalink, 'shinyukai-r.or.jp/numazaki') !== false) {
            $source = '沼﨑病院';
            $source_class = 'post-source post-numazaki';
          }
        ?>
          <li>
            <a href="<?php echo $item->get_permalink(); ?>">
              <?php
              $item_date = $item->get_date();
              $date = date('Y/m/d', strtotime($item_date));
              ?>
              <span class="news-date"><?php echo $date; ?></span>
              <!-- Display source information -->
              <span class="<?php echo $source_class; ?>"><?php echo $source; ?></span>
              <?php
              $title = $item->get_title();
              if (mb_strlen($title) > 40) :
              ?>
                <span class="news-title"><?php echo mb_substr($title, 0, 40); ?>...</span>
              <?php else : ?>
                <span class="news-title"><?php echo $title; ?></span>
              <?php endif; ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>

      <!-- Display pagination links -->
      <?php if ($total_pages > 1) : ?>
        <div class="pagination">
          <?php
          echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => 'page/%#%/',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text' => __('前へ'),
            'next_text' => __('次へ'),
          ));
          ?>
        </div>
      <?php endif; ?>
    </div>
  </section>
</main>
<?php
get_footer();
?>