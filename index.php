<?php get_header();?>
	<div class="section top-section">
    <!-- Chamada WP Query -->
               <?php
               // array WP query
               $args = array(
                'post_type'         =>  'post',
                'posts_per_page'    => 3,
                'category__in'      => 13
               );
               $destaque = new WP_Query($args);
               // chamada do loop
               if($destaque->have_posts()):
                    while($destaque->have_posts()):
                        $destaque->the_post();
                ?>
                <div class="col-md-12">        
                    <?php get_template_part('content', 'destaque'); ?>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
               endif;

               ?>
  </div>
  <div class="section">
    <div class="wrapper side-paddings w-container">
	      <div class="header-block">
	        <h3 class="header">Notícias</h3>
	        <a href="#" class="more-link w-inline-block">
	          <div>VER TODAS</div>
	          <div class="more-link-icon"><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae076636288d80_right.svg" alt="" class="more-link-arrow"><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae072c3b288d9d_right-white.svg" alt="" class="more-link-arrow-hover"></div>
	        </a>
	        <div class="header-line"></div>
	    	</div>
         	<!-- Chamada WP Query -->
               <?php
               // array WP query
               $args = array(
                'post_type'         =>  'post',
                'posts_per_page'    => 1,
                'category__in'      => 4
               );
               $noticias = new WP_Query($args);
               // chamada do loop
               if($noticias->have_posts()):
                    while($noticias->have_posts()):
                        $noticias->the_post();
                ?>
                <div class="col-md-12">        
                    <?php get_template_part('content', 'noticias'); ?>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
               endif;

               ?>
	    	</div>
  		</div>
  <div class="section">
    <div class="wrapper side-paddings w-container">
      <div class="header-block no-margin-bottom">
        <h3 class="header">Filmes</h3>
        <div class="header-line"></div>
      </div>
    </div>
         	<!-- Chamada WP Query -->
               <?php
               // array WP query
               $args = array(
                'post_type'         =>  'post',
                'posts_per_page'    => 1,
                'category__in'      => 7
               );
               $filmes = new WP_Query($args);
               // chamada do loop
               if($filmes->have_posts()):
                    while($filmes->have_posts()):
                        $filmes->the_post();
                ?>
                <div class="col-md-12">        
                    <?php get_template_part('content', 'filmes'); ?>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
               endif;

               ?>
    </div>
  </div>
  <div class="section">
    <div class="wrapper side-paddings w-container">
      <div class="header-block no-margin-bottom">
        <h3 class="header">Mimos</h3>
       <div class="header-line"></div>
    </div>
     <!-- Chamada WP Query -->
               <?php
               // array WP query
               $args = array(
                'post_type'         =>  'post',
                'posts_per_page'    => 8,
                'category__in'      => 9
               );
               $mimos = new WP_Query($args);
               // chamada do loop
               if($mimos->have_posts()):
                    while($mimos->have_posts()):
                        $mimos->the_post();
                ?>
                <div class="col-md-12">        
                    <?php get_template_part('content', 'mimos'); ?>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
               endif;

               ?>
   		 <div class="slider-v3-arrow left w-slider-arrow-left"><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae073ffd288d8a_left.svg" alt="" class="slider-v5-arrow-icon"></div>
        <div class="slider-v3-arrow w-slider-arrow-right"><img src="images/right.svg" alt="" class="slider-v5-arrow-icon"></div>
        <div class="slider-v5-nav w-slider-nav w-round"></div>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="wrapper side-paddings w-container">
      <div class="header-block no-margin-bottom">
        <h3 class="header">Podcasts</h3>
        <div class="header-line"></div>
      </div>
      <div>
      	<!-- Chamada WP Query -->
               <?php
               // array WP query
               $args = array(
                'post_type'         =>  'post',
                'posts_per_page'    => 6,
                'category__in'      => 11
               );
               $podcasts = new WP_Query($args);
               // chamada do loop
               if($podcasts->have_posts()):
                    while($podcasts->have_posts()):
                        $podcasts->the_post();
                ?>
                <div class="col-md-12">        
                    <?php get_template_part('content', 'podcast'); ?>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
               endif;

               ?>
      </div>
        <div class="slider-v3-arrow left w-slider-arrow-left"><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae073ffd288d8a_left.svg" alt="" class="slider-v5-arrow-icon"></div>
        <div class="slider-v3-arrow w-slider-arrow-right"><img src="images/right.svg" alt="" class="slider-v5-arrow-icon"></div>
        <div class="slider-v5-nav w-slider-nav w-round"></div>
      </div>
    </div>
  </div>
  <div class="section-2 bg-gray-4 dn">
    <div class="main-container">
      <div class="container-large align-center justify-content-center">
        <h4 class="large-heading section-title">Quer o MEM na palma da mão?</h4>
      </div>
      <div class="container-large align-center">
        <div class="hero-subscribe-form w-form">
          <form id="wf-form-Wide-Subscribe-Form" name="wf-form-Wide-Subscribe-Form" data-name="Wide Subscribe Form">
            <div class="form-horizontal"><input type="email" class="form-input form-input-large w-input" maxlength="256" name="Email-Address-2" data-name="Email Address 2" placeholder="Informe seu melhor email" id="Email-Address-2" required=""><input type="submit" value="Enviar" data-wait="Please wait..." class="button-2 form-horizontal-button button-large w-button"></div>
          </form>
          <div class="form-success-2 w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="form-error-2 w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php get_footer();?>