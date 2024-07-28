<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="utf-8" />
        <meta name="format-detection"
            content="email=no,telephone=no,address=no" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />

        <title>Site Title</title>
        <meta name="description" content />
        <meta name="keywords" content>

        <!-- OGPタグ/twitterカード -->
        <meta property="og:url" content="xxxxxxxxxxxxxxxxxxxxxxx/" />
        <meta property="og:title" content="Site Title" />
        <meta property="og:type" content="website">
        <meta property="og:description" content />
        <meta property="og:image"
            content="xxxxxxxxxxxxxxxxxxxxxxx/assets/img/ogp.jpg" />
        <meta name="twitter:card"
            content="xxxxxxxxxxxxxxxxxxxxxxx/assets/img/ogp.jpg" />
        <meta name="twitter:site" content />
        <meta property="og:site_name" content="Site Title" />
        <meta property="og:locale" content="ja_JP" />
        <meta property="fb:app_id" content />

        <!-- canonical -->
        <link rel="canonical" href="xxxxxxxxxxxxxxxxxxxxxxx/" />

        <!-- ファビコン -->
        <link rel="icon" href="画像URL" sizes="16x16" type="image/png" />
        <link rel="icon" href="画像URL" sizes="32x32" type="image/png" />
        <link rel="icon" href="画像URL" sizes="48x48" type="image/png" />
        <link rel="icon" href="画像URL" sizes="62x62" type="image/png" />
        <link rel="apple-touch-icon-precomposed"
            href="xxxxxxxxxxxxxxxxxxxxxxx/assets/img/ogp.jpg" />
        <meta name="msapplication-TileImage"
            content="xxxxxxxxxxxxxxxxxxxxxxx/assets/img/ogp.jpg" />
        <meta name="msapplication-TileColor" content="######" />
        <meta name="theme-color" content="######">

        <!--fonts-->
        <link
            href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap"
            rel="stylesheet">
        <!-- CSS/JS -->
        <link rel="stylesheet" href="./assets/css/app.css"
            media="all" />

        <!-- フィードページのURLを指定 -->
        <link rel="alternate" type="application/rss+xml" title="Site Title"
            href="xxxxxxxxxxxxxxxxxxxxxxx/" />
            <?php wp_head();?>
    </head>

    <body>
        <!-- Google Tag Manager (noscript) -->
        <!-- End Google Tag Manager (noscript) -->

        <!-- HEADER  -->

        <header class="header" id="header">
            <div class="header__wrapper">
                <div class="header__left">
                    <div class="header__left-logo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/front.png" alt="" width="268" height="24" class="img-fluid">
                    </div>
                </div>
                <div class="header__right">
                    <ul class="header__right-list">
                        <li class="header__right-item">
                            <a href="#" class="header__right-link">お知らせ</a>
                        </li>
                        <li class="header__right-item">
                            <a href="#" class="header__right-link">貸し出し車両一覧</a>
                        </li>

                        <li class="header__right-item">
                            <a href="#" class="header__right-link">ご利用案内</a>
                        </li>

                        <li class="header__right-item">
                            <a href="#" class="header__right-link">アクセス</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
