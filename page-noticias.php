<?php get_header(); ?>

<h1>Esta é uma página de notícias</h1>
<div class="container">
    <div class="row">
        <div class="grid-miniaturas">
            <div class=" miniaturas col-lg-4 col-md-4 col-sm-4 col-xs-4">
               <!-- Chamada WP Query -->
               <?php
               // array WP query
               $args = array(
                'post_type'         =>  'post',
                'posts_per_page'    => 6,
                'category__in'      => 1
               );
               $blog = new WP_Query($args);
               // chamada do loop
               if($blog->have_posts()):
                    while($blog->have_posts()):
                        $blog->the_post();
                ?>
                <div class="col-md-12">        
                    <?php get_template_part('content', 'blog'); ?>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
               endif;

               ?>
            </div>
            <div class=" miniaturas col-lg-4 col-md-4 col-sm-4 col-xs-4">
               <!-- Chamada WP Query -->
               <?php
               // array WP query
               $args = array(
                'post_type'         =>  'post',
                'posts_per_page'    => 6,
                'category__in'      => 1
               );
               $blog = new WP_Query($args);
               // chamada do loop
               if($blog->have_posts()):
                    while($blog->have_posts()):
                        $blog->the_post();
                ?>
                <div class="col-md-12">        
                    <?php get_template_part('content', 'blog'); ?>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
               endif;

               ?>
            </div>
            <div class=" miniaturas col-lg-4 col-md-4 col-sm-4 col-xs-4">
               <!-- Chamada WP Query -->
               <?php
               // array WP query
               $args = array(
                'post_type'         =>  'post',
                'posts_per_page'    => 6,
                'category__in'      => 1
               );
               $blog = new WP_Query($args);
               // chamada do loop
               if($blog->have_posts()):
                    while($blog->have_posts()):
                        $blog->the_post();
                ?>
                <div class="col-md-12">        
                    <?php get_template_part('content', 'blog'); ?>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
               endif;

               ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>