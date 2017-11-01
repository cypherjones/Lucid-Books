<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <div class="container">
    <!-- main navigation of the page -->
    <?php
            wp_nav_menu( array(
                'menu'              => 'menu-mobile',
                'theme_location'    => 'mobile-nav',
                'depth'             => 2,
                // 'menu_class'        => 'test',
                // 'menu_class'        => 'nav navbar-nav',
                // 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                 'walker'          => new Child_Wrap()
                )
            );
          ?>
    <!-- social networks -->
    <ul class="social-networks visible-xs">
      <?php 
        // grab the social networks partial
        get_template_part('partials/main/social', 'networks' );
       ?>
    </ul>
  </div>
</div>

