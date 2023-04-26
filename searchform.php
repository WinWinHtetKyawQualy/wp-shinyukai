<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
    <input type="search" value="<?php echo get_search_query() ?>" name="s" title="Search" placeholder="サイト内検索">
    <button type="submit" id="searchsubmit" value="検索" class="ser-btn">
        <svg class="gUZ B9u U9O kVc mr13" height="18" width="18" viewBox="0 0 24 24" aria-label="search" role="img">
            <path d="M10 16c-3.31 0-6-2.69-6-6s2.69-6 6-6 6 2.69 6 6-2.69 6-6 6m13.12 2.88l-4.26-4.26A9.842 9.842 0 0 0 20 10c0-5.52-4.48-10-10-10S0 4.48 0 10s4.48 10 10 10c1.67 0 3.24-.41 4.62-1.14l4.26 4.26a3 3 0 0 0 4.24 0 3 3 0 0 0 0-4.24"></path>
        </svg>
    </button>
</form>