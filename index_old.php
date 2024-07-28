<?php get_header(); ?>
<main id="main">
    <div class="hero">
        <div class="hero-content">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/img1.jpg" alt="showcase Image"
                class="img-fluid" width>
            <div class="hero-content__moto">
                <p>充実のカーエレで、もっと楽しいレンタカー！</p>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/white.png" class="img-fluid" alt
                    width="547" height="47" class="img-fluid">
            </div>
            <div class="hero-content__box">
                <div class="hero-content__box-content">
                    <div class="hero-content__box-text">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/phone.jpg" alt>
                        <p1>お電話でのご予約はこちら</p1>
                    </div>
                    <a class="hero-content__box-tel" href="tel:+080-4388-3365">080-4388-3365</a>
                </div>
                <div class="hero-content__box-num">
                    <div class="hero-main-text2">
                        <p3>受付時間：8時〜19時</p3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--new section-->
    <section class="new">
        <div class="container">
            <div class="new__wrapper">
                <div class="new__left">
                    <div class="new__left-detail">
                        <h2 class="new__left-title">NEWS</h2>
                        <span class="new__left-subtitle">お知らせ</span>
                    </div>
                    <div class="new__left-txt">
                        <p class="new__left-desc">アルスタレンタカーの <br> 最新情報をお知らせします。
                        </p>
                    </div>
                </div>

                <div class="new__right">

                    <?php 
                    $args = array(
                        'post_type'=> 'news',
                        'posts_per_page'=> -1,
                        'post_status' => 'publish',
                        'order'=> 'ASC',
                     );
                    $the_query=new WP_query($args); ?>
                    <?php if($the_query->have_posts()) : ?>
                    <?php while($the_query->have_posts()) : $the_query->the_post(); ?>

                    <a href="<?php echo get_the_permalink(); ?>" class="new__right-date">
                        <span class="new__right-nbr"><?php echo get_the_date('Y.n.d'); ?></span>
                        <p class="new__right-txt"><?php echo get_the_title(); ?></p>

                    </a>
                    <!-- <div class="new__right-date">
                        <span class="new__right-nbr"><?php //echo get_the_date('Y.n.d'); ?></span>
                        <p class="new__right-txt">ホームページを公開しました。</p>

                    </div>
                    <div class="new__right-date">
                        <span class="new__right-nbr">2024.02.01</span>
                        <p class="new__right-txt">ホームページを公開しました。</p>

                    </div> -->
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                    <p><?php _e('No news found'); ?></p>
                    <?php endif; ?>

                </div>
            </div>

        </div>
    </section>


    <!--Rent section-->



    <div class="rent">
        <div class="container">
            <div class="rent-car">
                <div class="rent-detail">
                    <h3 class="rent-name">RENT A CAR LINEUP</h3>
                    <span class="rent-subname">レンタカーラインナップ</span>
                </div>

                <div class="rent-wrapper">
                    <?php
                $args = array(
                    'post_type'=> 'rent',
                    'posts_per_page'=> 3,
                    'post_status' => 'publish',
                    'order'=> 'ASC',
                );
                $the_query = new WP_Query($args);
                ?>
                    <?php if($the_query->have_posts()) : ?>
                    <?php while($the_query->have_posts()) : $the_query->the_post(); ?>

                    <div class="rent-part">
                        <div class="rent-part2">
                            <div class="rent-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/car.jpg" alt="img"
                                    width="384" height="285" class="img-fluid">
                            </div>
                            <div class="rent-list">
                                <span class="rent-price">8人乗り</span>
                                <span class="rent-txt">禁煙車</span>
                                <span class="rent-txt">人気車両</span>
                            </div>
                            <h3 class="rent-title">新型デリカ D：5</h3>
                            <p class="rent-tag">1泊：¥17,500〜（正規料金）</p>

                        </div>
                    </div>



                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                    <p><?php _e('No rent posts found'); ?></p>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>




    <?php /*
    <div class="rent">
        <div class="container">
            <div class="rent-car">
                <div class="rent-detail">
                    <h3 class="rent-name">RENT A CAR LINEUP</h3>
                    <span class="rent-subname">レンタカーラインナップ</span>
                </div>

                <div class="rent-wrapper">
                    <div class="rent-part">
                        <div class="rent-part2">
                            <div class="rent-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/car.jpg" alt="img"
    width="384" height="285" class="img-fluid">
    </div>
    <div class="rent-list">
        <span class="rent-price">8人乗り</span>
        <span class="rent-txt">禁煙車</span>
        <span class="rent-txt">人気車両</span>
    </div>
    <h3 class="rent-title">新型デリカ D：5</h3>
    <p class="rent-tag">1泊：¥17,500〜（正規料金）</p>

    </div>
    </div>

    <div class="rent-part">
        <div class="rent-part2">
            <div class="rent-img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/car.jpg" alt="img" width="384"
                    height="285" class="img-fluid">
            </div>
            <div class="rent-list">
                <span class="rent-price">8人乗り</span>
                <span class="rent-txt">禁煙車</span>
                <span class="rent-txt">人気車両</span>
            </div>
            <h3 class="rent-title">新型デリカ D：5</h3>
            <p class="rent-tag">1泊：¥17,500〜（正規料金）</p>

        </div>
    </div>
    </div>

    </div>
    </div>
    </div>
    */ ?>
    <!--feature section -->


    <section class="feature">
        <div class="container">
            <div class="feature__wrapper">
                <div class="feature__left">
                    <h2 class="feature__left-title">OUR FEATURES</h2>
                    <span class="feature__left-subtitle">アルスタレンタカーの <br>特徴</span>
                </div>

                <div class="feature__right">
                    <?php
                // Custom query to get feature posts
                $args = array(
                    'post_type' => 'feature',
                    'posts_per_page' => -1 
                );
                $feature_query = new WP_Query($args);

                if ($feature_query->have_posts()) :
                    $count = 1;
                    while ($feature_query->have_posts()) : $feature_query->the_post(); ?>
                    <div class="feature__right-content">
                        <div class="feature__right-detail">
                            <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large', array('class' => 'img-fluid', 'width' => '581px', 'height' => '362px')); ?>
                            <?php else : ?>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/default.jpg" alt="Image"
                                class="img-fluid" width="581px" height="362px">
                            <?php endif; ?>
                        </div>
                        <h3 class="feature__right-block">
                            <span
                                class="feature__right-nbr"><?php echo sprintf('%02d', $count); ?></span><?php the_title(); ?>
                        </h3>
                        <div class="feature__right-desc">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <?php $count++; ?>
                    <?php endwhile;
                    wp_reset_postdata();
                else : ?>
                    <p><?php _e('Sorry, no feature posts matched your criteria.'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>



    <!-- <section class="feature">
        <div class="container">
            <div class="feature__wrapper">
                <div class="feature__left">
                    <h2 class="feature__left-title">OUR FEATURES</h2>
                    <span class="feature__left-subtitle">アルスタレンタカーの <br>
                        特徴</span>

                </div>

                <div class="feature__right">
                    <div class="feature__right-content">
                        <div class="feature__right-detail">
                            <img src="<?php //echo get_stylesheet_directory_uri(); ?>/assets/img/car1.jpg" alt
                                width="581px" height="362px" class="img-fluid">
                        </div>
                        <h3 class="feature__right-block">
                            <span class="feature__right-nbr">01</span>充実のカーエレを搭載！
                        </h3>
                        <p class="feature__right-desc">カーナビの「アルパイン」製のナビやディスプレイオーディオを
                            <br>
                            装備したレンタカーをご用意。大画面でのナビや、高音質スピーカーで <br>
                            車内でのエンタメでより快適なドライブを提供します。<br>
                            ※車両により装備が異なります。ETCももちろん標準装備です。
                        </p>
                    </div>

                    <div class="feature__right-content">
                        <div class="feature__right-detail">
                            <img src="<?php //echo get_stylesheet_directory_uri(); ?>/assets/img/car2.jpg" alt
                                width="581px" height="362px" class="img-fluid">
                        </div>
                        <h3 class="feature__right-block">
                            <span class="feature__right-nbr">02</span>キレイなレンタカー
                        </h3>
                        <p class="feature__right-desc">アルスタレンタカーでは、新車や年式の新しい車両を導入しています。<br>
                            沖縄旅行のドライブにふさわしい、ステキな車両をご提供します。</p>
                    </div>

                    <div class="feature__right-content">
                        <div class="feature__right-detail">
                            <img src="<?php //echo get_stylesheet_directory_uri(); ?>/assets/img/car4.jpg" alt
                                width="581px" height="362px" class="img-fluid">
                        </div>
                        <h3 class="feature__right-block">
                            <span class="feature__right-nbr">03</span>充実したオプション
                        </h3>
                        <p class="feature__right-desc">家族のドライブに必要不可欠なチャイルドシートやベビーシートもご用意し
                            <br>
                            ています。その他スマホへの充電を可能とするケーブル類もご用意。<br>
                            レンタカーに装備しているナビやディスプレイオーディオと接続することで <br>
                            音楽や動画も楽しめますよ。
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section> -->


    <!--usage section -->

    <section class="usage">
        <div class="container">
            <div class="usage-scens">
                <div class="usage-heading">
                    <h2 class="usage-name">USAGE SCENES</h2>
                    <span class="usage-subname">ご利用シーン</span>
                </div>
                <div class="usage-list">
                    <div class="usage-detail">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/img10.jpg" alt width="350"
                            height="247" class="img-fluid">
                        <h3 class="usage-title">ご家族での沖縄旅行</h3>
                        <p class="usage-desc">家族で楽しむ沖縄旅行だからこそ、<br>
                            気持ちのよいレンタカーで旅行したい。<br>
                            アルスタレンタカーは、そんなお客様にピッタリ！<br>
                            キレイなレンタカーをご用意するのはもちろん、<br>
                            充実したカーエレでドライブ中も音楽や動画も楽しめるエンタメ空間を提供します。</p>

                    </div>

                    <div class="usage-detail">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/img11.jpg" alt width="350"
                            height="247" class="img-fluid">
                        <h3 class="usage-title">お友達との沖縄旅行</h3>
                        <p class="usage-desc">お友達との沖縄旅行だからこそ、<br>
                            思いっきり旅行を楽しみたいですよね！<br>
                            行きたい場所に快適に移動できるカーエレで、<br>
                            車内でエンタメを満喫。<br>
                            アルスタレンタカーのレンタカーでとっておきのスポットにお出かけしてください。</p>

                    </div>

                    <div class="usage-detail">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/img12.jpg" alt width="350"
                            height="247" class="img-fluid">
                        <h3 class="usage-title">ビジネスでの沖縄出張</h3>
                        <p class="usage-desc">ビジネスやお仲間との出張時にも <br>
                            アルスタレンタカーはピッタリです。<br>
                            キレイなレンタカーで大切なお客様をお迎えできます。また荷室の広
                            <br>い車両もご用意していますので、ゴルフバッグなど大きな荷
                            <br>物もたっぷり収納できます。
                        </p>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--information section-->
    <section class="information">
        <div class="container">
            <div class="information-part">
                <div class="information-head">
                    <h2 class="information-heading">INFORMATION</h2>
                    <span class="information-subheading">ご利用案内</span>
                </div>
                <div class="information-detail">
                    <div class="information-list">
                        <p class="information-qst">送迎について</p>
                    </div>
                    <div class="information-list">
                        <p class="information-qst">貸渡・お支払いについて</p>
                    </div>
                    <div class="information-list">
                        <p class="information-qst">ご返却について</p>
                    </div>
                    <div class="information-list">
                        <p class="information-qst">各種保険について</p>
                    </div>
                    <div class="information-list">
                        <p class="information-qst">休業補償）について</p>
                    </div>
                    <div class="information-list">
                        <p class="information-qst">キャンセルポリシー</p>
                    </div>
                    <div class="information-txt">

                        <p class="information-page">貸渡約款はこちら</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="information-menu">
            <div class="information-wrapper">
                <div class="information-tel">
                    <div class="information-tel-wrapper">
                        <div class="information-tel-box">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/phone.jpg" alt width="24"
                                height="24" class="img-fluid">
                            <p class="information-address">お電話でのご予約はこちら</p>
                        </div>
                        <a class="information-tel-phone" href="tel:+080-4388-3365">080-4388-3365</a>
                    </div>
                    <div class="information-desc">
                        <p class="information-desc-page">受付時間：8時〜19時</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!--Access section-->
    <section class="access">
        <div class="container">
            <div class="access__head">
                <h2 class="access__head-japnese">ACCESS
                    <span class="access__head-english">アクセス</span>
                </h2>
            </div>
            <div class="access__wpr">
                <div class="access__left">
                    <h2 class="access__left-title">アルスタレンタカー</h2>
                    <div class="access__left-address">

                        <p class="access__left-location">〒901-0225 <br>
                            沖縄県 豊見城市 豊崎1-411 <br> 豊崎ライフスタイルセンター TOMITON 1F
                        </p>
                    </div>
                    <div class="access__left-contact">
                        <a href="tel:+080-4388-3365" class="access__left-phone">080-4388-3365</a>
                        <p class="access__left-txt">営業時間
                            <br> 平土日祝 08:00～19:00
                        </p>
                    </div>
                </div>

                <div class="access__right">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2309.8319800463087!2d85.33112550358133!3d27.733940037221178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb193937191b1b%3A0x5a43148376faf3e1!2sTeaching%20Hospital%20Emergency%20Ward!5e0!3m2!1sen!2snp!4v1718250493732!5m2!1sen!2snp"
                        width="610" height="428" style="border:0;" allowfullscreen loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>