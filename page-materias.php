<?php get_header(); ?>

<h1>Esta é uma página de materias</h1>
<div id="primary">
			<main id="main">
				<div class="container">
					<?php
					while(have_posts()): the_post();
						get_template_part('content', 'single');
					endwhile;
					?>
				</div>
			</main>
		</div>

<?php get_footer(); ?>