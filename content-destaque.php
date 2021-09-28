<section>
	<div class="wrapper">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <?php the_post_thumbnail('full', array('class'=> 'img-responsive d-block w-100')); ?>
            
            <div class="carousel-caption d-none d-md-block legendaDestaque" >
              
              <a href="<?php the_permalink(); ?>"><p><?php the_excerpt();?></p></a>
              <label class="d-flex justify-content-center">
                <div style="border-right: 2px solid gray" class="pr-3">
                   <img src="<?php bloginfo('template_directory'); ?>/images/user.png">
                <a href=""><?php the_author();?></a>
                </div>
                <div style="border-right: 1px solid gray" class="ml-3 pr-3">
                  <img src="<?php bloginfo('template_directory'); ?>/images/calendar.png"> 
                  <?php the_category(' '); ?>
                </div>
                 <div class="ml-3">
                   <img src="<?php bloginfo('template_directory'); ?>/images/clock.png"> 
                 </div>
                </label>
            </div>
          </div>

          <div class="carousel-item">
            <?php the_post_thumbnail('full', array('class'=> 'img-responsive d-block w-100')); ?>
            
            <div class="carousel-caption d-none d-md-block legendaDestaque" >
              
              <a href="<?php the_permalink(); ?>"><p><?php the_excerpt();?></p></a>
              <label class="d-flex justify-content-center">
                <div style="border-right: 2px solid gray" class="pr-3">
                   <img src="<?php bloginfo('template_directory'); ?>/images/user.png">
                <a href=""><?php the_author();?></a>
                </div>
                <div style="border-right: 1px solid gray" class="ml-3 pr-3">
                  <img src="<?php bloginfo('template_directory'); ?>/images/calendar.png"> 
                  <?php the_category(' '); ?>
                </div>
                 <div class="ml-3">
                   <img src="<?php bloginfo('template_directory'); ?>/images/clock.png"> 
                 </div>
                </label>
            </div>
          </div>

          <div class="carousel-item">
            <?php the_post_thumbnail('full', array('class'=> 'img-responsive d-block w-100')); ?>
            
            <div class="carousel-caption d-none d-md-block legendaDestaque" >
              
              <a href="<?php the_permalink(); ?>"><p><?php the_excerpt();?></p></a>
              <label class="d-flex justify-content-center">
                <div style="border-right: 2px solid gray" class="pr-3">
                   <img src="<?php bloginfo('template_directory'); ?>/images/user.png">
                <a href=""><?php the_author();?></a>
                </div>
                <div style="border-right: 1px solid gray" class="ml-3 pr-3">
                  <img src="<?php bloginfo('template_directory'); ?>/images/calendar.png"> 
                  <?php the_category(' '); ?>
                </div>
                 <div class="ml-3">
                   <img src="<?php bloginfo('template_directory'); ?>/images/clock.png"> 
                 </div>
                </label>
            </div>
          </div> 
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>
      </div>
    </div>
</section>