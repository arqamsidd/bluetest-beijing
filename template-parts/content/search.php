
  <div class="w-container">
    <h1 data-text="t7e85e19e"><?php echo _u('t7e85e19e','text'); ?></h1>
    <form action="<?php echo home_url(''); ?>" class="w-form" method="get" role="search"><label for="search">Search</label><input class="w-input" maxlength="256" name="s" placeholder="Search…" type="search" id="search" required=""><input type="submit" class="w-button" value="Search"><?php global $wp_query; $total_results = $wp_query->found_posts; ?><?php if (is_search()) : ?><div data-node-type="search-result-wrapper"><?php if ($total_results > 0) : ?><div data-node-type="search-result-list"><?php while(have_posts()) : the_post(); ?><div data-node-type="search-result-item"><a data-node-type="link" href="<?php the_permalink(); ?>"><?php the_title() ?></a><div data-node-type="block"><?php the_permalink(); ?></div><p data-node-type="paragraph"><?php the_excerpt() ?></p></div><?php endwhile; ?></div><?php endif  ?><?php if ($total_results == 0) : ?><div data-node-type="search-result-empty"><div data-node-type="block">No matching results.</div></div><?php endif  ?></div><?php endif  ?></form>
  </div>
  
  