<?php
 get_header();?>

<section class="rent">
        <div class="container">
            <div class="rent__car">
                <div class="rent__car-detail">
                    <h2 class="rent__car-heading">RENT A CAR LINEUP</h2>
                    <span class="rent__car-subheading">レンタカーラインナップ</span>
                </div>
                <div class="rent__list">
                    <?php
                $args = array(
                    'post_type' => 'rent', 
                    'posts_per_page' => -1,
                    'post_status' => 'publish',
                    'order' => 'ASC',
                );
                $the_query = new WP_Query($args);
                ?>
                    <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="rent__list-item">
                        <div class="rent__list-picture">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>"
                                    alt="<?php the_title_attribute(); ?>" width="100%" class="img-fluid">
                            </a>
                        </div>
                        <div class="rent__list-information">
                            <?php
                                $terms = get_the_terms(get_the_ID(), 'car_type');
                                if ($terms && !is_wp_error($terms)) :
                                    foreach ($terms as $term) :
                                        echo '<span class="rent__list-txt">' . esc_html($term->name) . '</span>';
                                    endforeach;
                                endif;
                                ?>
                        </div>
                        <h4 class="rent__tag"> <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
                        </h4>
                        <p class="rent__price"><?php echo esc_html(get_field('rent_price')); ?></p>
                    </div>

                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="rent__btn">
            <a href="<?php echo home_url(); ?>" class="rent__btn-part">Home 
            </a>
            </div>
        </div>
    </section>





 <?php get_footer();?>