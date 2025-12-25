<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Oooh+Baby&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="top">
    <!-- Loading Overlay -->
    <div class="page-loader" id="pageLoader">
        <div class="page-loader__content">
            <img src="<?php echo get_theme_file_uri('src/images/common/logo.svg'); ?>" alt="LANGIS"
                class="page-loader__logo">
            <div class="page-loader__spinner"></div>
        </div>
    </div>

    <div class="wrapper">
        <header class="header hero-entrance fade-in-up delay-100">
            <div class="container header__container">
                <div class="header__logo">
                    <a href="<?php echo home_url('/'); ?>">
                        <img src="<?php echo get_theme_file_uri('src/images/common/logo.svg'); ?>" alt="LANGIS">
                    </a>
                </div>
                <nav class="header__nav">
                    <ul>
                        <li><a href="<?php echo home_url('/'); ?>#about">ABOUT US</a></li>
                        <li><a href="<?php echo home_url('/'); ?>#service">SERVICE</a></li>
                        <li><a href="<?php echo home_url('/'); ?>#member">MEMBER</a></li>
                        <li><a href="<?php echo home_url('/'); ?>#company">COMPANY</a></li>
                        <li><a href="<?php echo home_url('/'); ?>#gallery">GALLERY</a></li>
                    </ul>
                </nav>
                <div class="header__contact-btn">
                    <a href="<?php echo home_url('/'); ?>#contact" class="btn btn--pill">CONTACT</a>
                </div>
                <div class="header__menu-trigger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </header>

        <!-- Global Menu -->
        <div class="global-menu">
            <div class="global-menu__overlay"></div>
            <div class="global-menu__container">
                <div class="global-menu__wrapper">
                    <div class="global-menu__bg-visual"
                        style="background-image: url(<?php echo get_theme_file_uri('src/images/common/gnav-bg.png'); ?>);">
                    </div>
                    <div class="global-menu__content">
                        <div class="global-menu__logo">
                            <img src="<?php echo get_theme_file_uri('src/images/common/gnav-logo.svg'); ?>"
                                alt="LANGIS">
                        </div>
                        <div class="global-menu__grid">
                            <div class="global-menu__col">
                                <ul class="global-menu__list">
                                    <li class="global-menu__item">
                                        <a href="<?php echo home_url('/'); ?>">
                                            <span class="en">_TOP</span>
                                            <span class="ja">トップページ</span>
                                        </a>
                                    </li>
                                    <li class="global-menu__item">
                                        <a href="<?php echo home_url('/'); ?>#about">
                                            <span class="en">_ABOUT US</span>
                                            <span class="ja">ランギスの良さって、どこにある？</span>
                                        </a>
                                    </li>
                                    <li class="global-menu__item">
                                        <a href="<?php echo home_url('/'); ?>#service">
                                            <span class="en">_SERVICE</span>
                                            <span class="ja">ランギスのサービスは、人です。</span>
                                        </a>
                                    </li>
                                    <li class="global-menu__item">
                                        <a href="<?php echo home_url('/'); ?>#member">
                                            <span class="en">_MEMBER</span>
                                            <span class="ja">ランギスの核となるメンバーたち</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="global-menu__col">
                                <ul class="global-menu__list">
                                    <li class="global-menu__item">
                                        <a href="<?php echo home_url('/'); ?>#company">
                                            <span class="en">_COMPANY</span>
                                            <span class="ja">ランギスを知る。</span>
                                        </a>
                                    </li>
                                    <li class="global-menu__item">
                                        <a href="<?php echo home_url('/'); ?>#gallery">
                                            <span class="en">_GALLERY</span>
                                            <span class="ja">ギャラリー</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="global-menu__contact">
                                    <a href="<?php echo home_url('/'); ?>#contact" class="btn btn--pill">
                                        CONTACT
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>