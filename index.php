<?php
get_header();?>

<main id="main">
    <!--slide section-->
    <section class="slide">
        <div class="wrapper">

            <div class="slide__content">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/background.png" alt
                    class="img-fluid">

                <div class="slide__title">
                    <span class="slide__title-txt">充実のカーエレで、もっと楽しいレンタカー！</span>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/title.png" alt width="
                    548" height="48" class="
                    img-fluid">
                </div>

                <div class="slide__center">
                    <div class="slide__center-detail">
                        <div class="slide__center-contact">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/phone.png" alt width="24"
                                height="24" class="img-fluid">
                            <p class="slide__center-txt">お電話でのご予約はこちら</p>
                        </div>
                        <a class="slide__center-number" href=" tel:+ 080-4388-3365">080-4388-3365</a>
                    </div>
                    <div class="slide__address">
                        <p class="slide__address-page">受付時間：8時〜19時</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--news section-->

    <section class="news">
        <div class="container">
            <div class="news__head">
                <div class="news__left">
                    <div class="news__left-title">
                        <h2 class="news__left-heading">NEWS</h2>
                        <span class="news__left-subheading">お知らせ</span>
                    </div>
                    <div class="news__left-txt">
                        <span class="news__left-page">アルスタレンタカーの <br>
                            最新情報をお知らせします。
                        </span>
                    </div>
                </div>
                <div class="news__right">
                    <?php
                    $args=array(
                        'post_type'=>'news',
                        'posts_per_page'=> -1,
                        'post_status'=>'publish',
                        'order'=>'ASC',

                    );
                    $the_query =new WP_Query($args); ?>
                    <?php if($the_query->have_posts()): ?>
                    <?php while($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="news__right-list">
                        <span class="news__right-date"><?php echo get_the_date('Y.m.d');?> </span>
                        <p class="news__right-txt"> <a
                                href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></p>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata();?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>



    <!--Rent section-->
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
                    'posts_per_page' => 3,
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
            <a href="<?php echo home_url(); ?>/rent" class="rent__btn-part">See More
            </a>
            </div>
        </div>
    </section>


    <!--feature section-->

    <section class="feature">
        <div class="container">
            <div class="feature__car">
                <div class="feature__left">
                    <h2 class="feature__heading">OUR FEATURES</h2>
                    <span class="feature__subheading">アルスタレンタカーの <br>
                        特徴！</span>
                </div>
                <div class="feature__right">
                    <?php
                    $args = array(
                        'post_type' => 'feature', 
                        'posts_per_page' => 3,
                        'post_status' => 'publish',
                         'order' => 'ASC',
                    );
                    $f_the_query = new WP_Query($args);
                    $counter = 1;
                    if ($f_the_query->have_posts()) :
                        while ($f_the_query->have_posts()) :
                            $f_the_query->the_post(); ?>
                    <div class="feature__right-list">

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
                        <span class="feature__right-desc"><?php echo get_field('feature_description'); ?></span>

                    </div>
                    <?php $counter++;
                        endwhile;
                        wp_reset_postdata();
                    endif ; ?>

                </div>
            </div>
            <div class="feature__btn">
                <a href="<?php echo home_url(); ?>/feature" class="feature__btn-part">See More</a>
            </div>
        </div>
    </section>

    <!--usage section-->

    <section class="usage">
        <div class="container">
            <div class="usage__scenes">
                <div class="usage__title">
                    <h2 class="usage__heading">USAGE SCENES</h2>
                    <span class="usage__subheading">ご利用シーン</span>
                </div>
                <div class="usage__information">

                    <?php
                $u_args = array(
                    'post_type' => 'usage', 
                        'posts_per_page' => 3,
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
                <a href="<?php echo home_url();?>/usage" class="usage__btn-part">See More</a>
            </div>
        </div>

    </section>

    <!--information section-->

    <section class="information">
        <div class="container">
            <div class="information__topice">
                <div class="information__topice-title">
                    <h2 class="information__topice-heading">INFORMATION</h2>
                    <span class="information__topice-subheading">ご利用案内</span>
                </div>
                <div class="information__list">
                    <?php
                        $i_args=array(
                            'post_type'=>'information',
                            'posts_type'=>-1,
                            'post_status'=>'publish',
                            'order'=>'ASC',
                        );
                        $i_the_query = new WP_Query($i_args);
                        if($i_the_query->have_posts()) :
                            while($i_the_query->have_posts()) :
                                $i_the_query->the_post();?>

                    <div class="information__list-item">
                        <a href="<?php echo the_permalink();?>">
                            <p class="information__list-txt"><?php echo get_the_title();?></p>
                        </a>
                    </div>
                    <?php 
                endwhile;
                    wp_reset_postdata();
                endif; ?>
                </div>

                <div class="information__row">
                    <p class="information__row-text">貸渡約款はこちら</p>
                </div>

            </div>
        </div>
        <div class="information__box">
            <div class="information__wrapper">
                <div class="information__content">
                    <div class="information__detail">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/contact.png" alt width="24"
                            height="24" class="img-fluid">
                        <p class="information__desc">お電話でのご予約はこちら</p>
                    </div>
                    <a class="information__contact" href="tel:+080-4388-3365">080-4388-3365</a>

                </div>
                <p class="information__page">受付時間：8時〜19時</p>

            </div>

        </div>

    </section>

    <!--Access section-->

    <section class="access">
        <div class="container">
            <div class="access__list">
                <h2 class="access__heading">ACCESS</h2>
                <span class="access__subheading">アクセス</span>
            </div>
            <div class="access__wrapper">

                <div class="access__column">
                    <div class="access__menu">
                        <h2 class="access__title">アルスタレンタカー</h2>
                    </div>

                    <div class="access__address">
                        <span class="access__location">〒901-0225 <br>
                            沖縄県 豊見城市 豊崎1-411 <br>
                            豊崎ライフスタイルセンター TOMITON 1F
                        </span>
                        <div class="access__contact">
                            <a class="access__number" href="tel:+080-4388-3365">080-4388-3365</a>
                            <p class="access__desc">営業時間 <br> 平土日祝
                                08:00～19:00</p>
                        </div>
                    </div>

                </div>

                <div class="access__map">

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3565.4785210479236!2d87.68505107543092!3d26.665174226795514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e58e1758939dab%3A0xc0be579f905d943f!2sModel%20Campus%2C%20Damak%2057217!5e0!3m2!1sen!2snp!4v1718943307853!5m2!1sen!2snp"
                        width="600" height="450" style="border:0;" allowfullscreen loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </div>
    </section>

</main>
<?php get_footer(); ?>