<?php get_header(); ?>

<div class="container pt-2 pb-2">

	<?php if ( have_posts() ) : ?>
	
	<?php endif; ?>

</div>

<?php get_footer(); ?>

<?php 
    get_template_part('partials/carousel');
?>