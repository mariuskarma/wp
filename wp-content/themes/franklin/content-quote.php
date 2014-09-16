<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">	
		<div id="quote" class="col-lg-12">			
			<?php the_content(); ?>	
			<?php the_title('<h3 class="post-title">', '</h3>'); ?>
		</div>
	</div>
	<?php if (is_active_sidebar('content-bottom-sidebar')): ?>	
		<div id="content-bottom"><?php dynamic_sidebar('content-bottom-sidebar'); ?></div>	
	<?php endif; ?>	
</article>
<hr class="post-divider">