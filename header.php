<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,300;0,500;0,700;1,300;1,500;1,700&family=Poppins:wght@100;200;300;400;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
</head>
<body <?php body_class(); ?>>

	<nav class="navbar navbar-expand-lg py-4 nav-scroll-1 <?php echo !is_front_page() ? "second_page" : ""  ?> ">

  		<div class="container mb-2 mt-5">
                    
                    <div class="d-lg-flex justify-content-center w-100 gap-4">
                        
                        <div class="d-flex justify-content-between mb-2 mb-lg-0">
	                        <a href="http://localhost/stronka-wp/" class="me-4">
								<img class="mt-2" src="<?php echo get_stylesheet_directory_uri(); ?> <?php echo is_front_page() ? "/img/shark-logo1.png" : "/img/shark-logo2.png" ?>"/> 
	                        </a>    
	                        
	                        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
	                            <span></span><span></span><span></span>
	                        </button>
                        </div>


                        <?php wp_nav_menu( array(
                            'theme_location'    => 'header-menu',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse',
                            'container_id'      => 'main-menu',
                            'menu_class'        => 'navbar-nav ms-auto',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),
                        )); ?>                        

                    </div>
  		</div>
	</nav>


	
