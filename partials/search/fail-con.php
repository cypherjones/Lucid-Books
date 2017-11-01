<div class="col-md-3">
  <h3>Sorry, There are no search results for that term. Please try a different term.</h3>
    <div class="search-form">
      <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
        <div class="form-group">
          <input type="search" class="form-control" id="search" placeholder="Search" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>">
        </div>
        <button type="submit" class="btn btn-default" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>">Submit</button>
      </form>
    </div>
</div>