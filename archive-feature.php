<?php
get_header(); ?>
    <section class="feature">
        <div class="container">
            <div class="feature__car">
                <div class="feature__list -flex">
                    <?php
                    $args = array(
                        'post_type' => 'feature', 
                        'posts_per_page' => -1,
                        'post_status' => 'publish',
                         'order' => 'ASC',
                    );
                    $f_the_query = new WP_Query($args);
                    $counter = 1;
                    if ($f_the_query->have_posts()) :
                        while ($f_the_query->have_posts()) :
                            $f_the_query->the_post(); ?>
                            <div class="feature__list-item">
                                <div class="feature__right-picture">
                                    <a href="<?php echo the_permalink(); ?>">
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>"
                                            alt="<?php the_title_attribute(); ?>" width="100%"
                                            class="img-fluid feature__image"></a>
                                </div>
                                <div class="feature__right-menu">
                                    <h2 class="feature__right-number">
                                        <?php echo sprintf("%02d", $counter) . ' ' . get_the_title(); ?>
                                    </h2>

                                </div>
                                <span class="feature__right-desc"><?php echo esc_html(get_field('feature_description')); ?></span>
                            </div>

                    <?php $counter++;
                        endwhile;
                        wp_reset_postdata();
                    endif ; ?>

                </div>
            </div>
            <div class="feature__btn">
                <a href="<?php echo home_url(); ?>" class="feature__btn-part">Home</a>
            </div>
        </div>
    </section>
    <?php get_footer();?>