<?php
get_header(); ?>

<section class="usage">
        <div class="container">
            <div class="usage__scenes">
                <div class="usage__title">
                    <h2 class="usage__heading">USAGE SCENES</h2>
                    <span class="usage__subheading">ご利用シーン</span>
                </div>
                <div class="usage__information -flex">

                    <?php
                $u_args = array(
                    'post_type' => 'usage', 
                        'posts_per_page' => -1,
                        'post_status' => 'publish',
                         'order' => 'ASC',
                );
                    $u_the_query = new WP_Query($u_args);
                    if($u_the_query->have_posts()) :
                        while($u_the_query->have_posts()) :
                        $u_the_query->the_post();?>

                    <div class="usage__picture">
                        <a href="<?php echo the_permalink(); ?>">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt width="100%"
                                class="img-fluid"></a>
                        <p class="usage__txt"><?php echo get_the_title();?></p>
                        <span class="usage__desc"><?php echo get_field('usage_description'); ?></span>
                    </div>

                    <?php
                        endwhile ;
                        wp_reset_postdata();
                        endif; ?>
                </div>
            </div>
            <div class="usage__btn">
                <a href="<?php echo home_url(); ?>" class=" usage__btn-part">Home</a>
            </div>
        </div>

    </section>
    <?php get_footer();?>