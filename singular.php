<div class="container-fluid new-nav position-relative">
    <?php 
        get_header();
    ?>
</div>


<?php while ( have_posts() ) : the_post(); ?>

<div class="container vh-100">

    <?php if(!is_Front_page()): ?>
	<h1 class="mb-4 text-info"><?php the_title() ?></h1>
    <?php endif ?>
        
    <div class="post-content">
    	<?php the_content() ?>
    </div>    
			    
</div>

<?php endwhile; ?>

<?php get_footer(); ?>

<?php 
    get_template_part('partials/carousel');
?>