<?php 
/* Template Name: Agenda */ 

    $fuse = [
        'section-6' => true,
        'section-7' => false,
        'section-8' => true,
        'section-9' => true,
        'section-10' => true,
    ];
?>

<div class="container-fluid new-nav position-relative">
    <?php 
        get_header();
    ?>
</div>

<!-- section 10 -->

<?php if($fuse['section-10']) { ?>

<section class="container-fluid section-10 position-relative">
    <img class="section-10-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img-underline.svg" alt="box">

    <div class="container ">
        <h1 class="section-10-header text-secondary py-5 fs-1 text-center text-lg-start">
            <span class="fw-bolder">Agenda</span><br/>
            <span class="fw-light">wydarzenia</span> 
        </h1>

        <div class="container">

        <?php foreach(get_posts('post_type=event&posts_per_page=-1') as $block): ?> 

            <?php 
                $is_event = get_post_meta($block->ID, 'is_event', true);
                
                $firstnames = get_post_meta($block->ID, 'event_firstname', false);
                $lastnames = get_post_meta($block->ID, 'event_lastname', false);
                $img_hosts = get_post_meta($block->ID, 'event_img_host', false);
                $img_companies = get_post_meta($block->ID, 'event_img_company', false);
            ?>
            
            <div class="p-3 m-2 row d-flex text-secondary <?php if($is_event){ ?> section-10-event <?php } else { ?> section-10-event-2 <?php }?>">
                <div class="d-flex justify-content-center align-items-center col-12 col-md-2">
                    <p class="section-10-hour">
                        <?php echo get_post_meta($block->ID, 'event_hour', true); ?> 
                    </p>
                </div>

                <div class="col-12 col-md-10  d-flex align-items-center justify-content-center justify-content-md-start">
                    <div class="d-flex flex-column ">
                        <p class="section-10-title lh-sm text-center text-md-start w-100 fs-5">
                            <span class="fw-semibold"><?php echo get_post_meta($block->ID, 'event_title', true); ?> </span><br/>
                            <span class="fw-light"><?php echo get_post_meta($block->ID, 'event_subtitle', true); ?> </span>
                        </p>

                        <div class="ps-5 ps-md-0 d-flex flex-wrap justify-content-start  gap-3">
                            
                            <?php 
                                if ($firstnames && $lastnames && $img_hosts && $img_companies) {
                                    $count = count($firstnames);
                                    for ($i = 0; $i < $count; $i++) {
                                        $firstname = $firstnames[$i];
                                        $lastname = $lastnames[$i];
                                        $img_host = $img_hosts[$i];
                                        $img_company = $img_companies[$i];
                            ?>

                            <div class="d-flex section-10-hosts">
                                <div class="section-10-container-1">

                                    <?php
                                        $file_url = wp_get_attachment_url($img_host); 
                                        if ($file_url) {
                                            echo '<img src="' . $file_url . '"/>';
                                        }
                                    ?>

                                </div>

                                <div class="lh-1 ms-2">
                                    <span class="fw-bold"><?php echo $firstname ?></span><br/>
                                    <span class=""><?php echo $lastname ?></span><br/>
                                    <div class="pt-2 section-10-container-2">

                                        <?php 
                                            $file_url = wp_get_attachment_url($img_company); 
                                            if ($file_url) {
                                                echo '<img src="' . $file_url . '"/>';
                                            }
                                        ?>

                                    </div>
                                </div>
                            </div>

                            <?php 
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</section>

<?php } ?>

<!-- section 6 -->

<?php if($fuse['section-6']) { 
    get_template_part('partials/content','packages');
} ?>

<!-- section 7 -->

<?php if($fuse['section-7']) { 
    get_template_part('partials/partners','partners');
} ?>

<!-- section 8 -->

<?php if($fuse['section-8']) { 
    get_template_part('partials/newsletter');
} ?>

<!-- section 9 -->

<?php if($fuse['section-9']) { 
    get_template_part('partials/contact') ;
} ?>

<?php 
    get_footer();
?>

<?php 
    get_template_part('partials/carousel');
?>