<?php if ( is_home() || is_front_page() ) : ?>  
  <div class="Hero">
      <div class="Hero__inner inner">
          <div class="Hero__site-branding">
          <?php
                        the_custom_logo();
                        if (is_front_page() && is_home()) :
                            ?>
                            <h1 class="site-title">
                                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                            </h1>
                        <?php
                        else :
                            ?>
                            <p class="Hero__site-title">
                                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                            </p>
                        <?php
                        endif;
                        $blog_prime_description = get_bloginfo('description', 'display');
                        if ($blog_prime_description || is_customize_preview()) :
                            ?>
                            <p class="site-description">
                               <span><?php echo esc_html( $blog_prime_description ); /* WPCS: xss ok. */ ?></span>
                            </p>
                        <?php endif; ?>


          </div>

        </header>
      </div>
    </div>

<?php elseif( is_page('ieyasu') ) : ?>
  <div class="Hero__ieyasu">
      <div class="Hero__inner inner">
      </div>
    </div>

<?php endif; ?>