<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url('/'); ?>">
    <input class="search-box" type="text" value="<?php echo get_search_query() ?>" name="s" title="Search" placeholder="サイト内検索" />
    <button class="search-submit" type="submit"></button>
</form>