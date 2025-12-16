<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="header">
        <div class="container header__container">
            <div class="header__logo">
                <a href="<?php echo home_url('/'); ?>">
                    <img src="<?php echo get_theme_file_uri('src/images/common/logo.svg'); ?>" alt="LANGIS">
                </a>
            </div>
            <nav class="header__nav">
                <ul>
                    <li><a href="#about">ABOUT US</a></li>
                    <li><a href="#service">SERVICE</a></li>
                    <li><a href="#member">MEMBER</a></li>
                    <li><a href="#company">COMPANY</a></li>
                    <li><a href="#gallery">GALLERY</a></li>
                </ul>
            </nav>
            <div class="header__contact-btn">
                <a href="#contact" class="btn btn--pill">CONTACT</a>
            </div>
            <div class="header__menu-trigger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <!-- Global Menu -->
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
                        <img src="<?php echo get_theme_file_uri('src/images/common/gnav-logo.svg'); ?>" alt="LANGIS">
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
                                    <a href="#about">
                                        <span class="en">_ABOUT US</span>
                                        <span class="ja">ランギスの良さって、どこにある？</span>
                                    </a>
                                </li>
                                <li class="global-menu__item">
                                    <a href="#service">
                                        <span class="en">_SERVICE</span>
                                        <span class="ja">ランギスのサービスは、人です。</span>
                                    </a>
                                </li>
                                <li class="global-menu__item">
                                    <a href="#member">
                                        <span class="en">_MEMBER</span>
                                        <span class="ja">ランギスの核となるメンバーたち</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="global-menu__col">
                            <ul class="global-menu__list">
                                <li class="global-menu__item">
                                    <a href="#company">
                                        <span class="en">_COMPANY</span>
                                        <span class="ja">ランギスを知る。</span>
                                    </a>
                                </li>
                                <li class="global-menu__item">
                                    <a href="#gallery">
                                        <span class="en">_GALLERY</span>
                                        <span class="ja">ギャラリー</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="global-menu__contact">
                                <a href="#contact" class="btn btn--pill">
                                    CONTACT
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main class="main-content">
        <!-- Hero Section -->
        <section class="hero">
            <div class="container hero__container">
                <div class="hero__visual">
                    <!-- Left Slider -->
                    <div class="hero__slider hero__slider--left swiper">
                        <div class="swiper-wrapper">
                            <?php for ($i = 1; $i <= 3; $i++): ?>
                                <div class="swiper-slide">
                                    <div class="hero__person">
                                        <img src="<?php echo get_theme_file_uri('src/images/top/mv0' . $i . '.png'); ?>"
                                            alt="Staff <?php echo $i; ?>">
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>

                    <!-- Center Text -->
                    <div class="hero__center-text">
                        <div class="hero__center-bg"
                            style="background-image: url(<?php echo get_theme_file_uri('src/images/top/hero-bg.png'); ?>);">
                            <p class="vertical-text-sub">ロゴのグッドサインのような<br>「いいね！わかった！賛成！」が<br>自然と出てくる会社でありつづけたい。</p>
                        </div>
                        <div class="hero__pagination"></div>
                    </div>

                    <!-- Right Slider -->
                    <div class="hero__slider hero__slider--right swiper">
                        <div class="swiper-wrapper">
                            <?php for ($i = 4; $i <= 6; $i++): ?>
                                <div class="swiper-slide">
                                    <div class="hero__person">
                                        <img src="<?php echo get_theme_file_uri('src/images/top/mv0' . $i . '.png'); ?>"
                                            alt="Staff <?php echo $i; ?>">
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
                <div class="hero__big-text">LANGISLANGIS</div>
            </div>
        </section>

        <!-- About Section -->
        <section class="section section-about">
            <div class="container">
                <div class="about__grid">
                    <!-- Circular Images Grid -->
                    <?php for ($i = 0; $i < 10; $i++): ?>
                        <div class="about__circle-img"></div>
                    <?php endfor; ?>

                    <div class="about__center-content">
                        <p class="section-label">ABOUT US</p>
                        <h2 class="section-title">ランギスの<br>良さって、<br>どこにある？</h2>
                    </div>
                </div>
                <div class="about__text-box">
                    <p>テキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <div class="about__actions">
                    <a href="#" class="btn btn--circle">開発者が見る<br>環境の良さ</a>
                    <a href="#" class="btn btn--circle">人柄、<br>ランギスの空気</a>
                </div>
                <div class="u-center u-mt-40">
                    <a href="#" class="btn btn--pill">VIEW MORE</a>
                </div>
            </div>
        </section>

        <!-- Service Section -->
        <section class="section section-service section--orange-bg-wrapper">
            <div class="container">
                <div class="service-card">
                    <div class="service-card__content">
                        <p class="section-label">SERVICE</p>
                        <h2 class="section-title">ランギスの<br>サービスは、<br>人です。</h2>
                        <p class="service-description">
                            ただ作るだけじゃない。<br>
                            クライアントと対話し、...
                        </p>
                        <a href="#" class="btn btn--pill btn--green">VIEW MORE</a>
                    </div>
                    <div class="service-card__image">
                        <!-- Placeholder -->
                    </div>
                </div>
            </div>
        </section>

        <!-- Member Section -->
        <section class="section section-member section--orange">
            <div class="container">
                <p class="section-label">MEMBER</p>
                <h2 class="section-title--white">ランギスの核となる<br>メンバーたち</h2>

                <div class="member__content">
                    <div class="member__image-group">
                        <!-- Overlapping images placeholder -->
                    </div>
                    <div class="member__text-box">
                        <h3>LANGIS</h3>
                        <p>ここのメンバーが中心となって...</p>
                        <a href="#" class="btn btn--pill btn--pink">VIEW MORE</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Company Section -->
        <section class="section section-company section--orange">
            <div class="container">
                <div class="company__visual">
                    <!-- Street view placeholder -->
                </div>
                <div class="company__content">
                    <p class="section-label">COMPANY</p>
                    <h2 class="section-title">ランギスを知る。</h2>
                    <div class="u-center">
                        <a href="#" class="btn btn--pill btn--blue">VIEW MORE</a>
                    </div>
                </div>
                <div class="company__office-visual">
                    <!-- Office visual -->
                </div>
            </div>
        </section>

        <!-- Gallery Section -->
        <section class="section section-gallery">
            <div class="container">
                <div class="gallery__grid">
                    <!-- Grid items -->
                    <?php for ($i = 0; $i < 8; $i++): ?>
                        <div class="gallery__item"></div>
                    <?php endfor; ?>

                    <div class="gallery__center-text">
                        <p class="section-label">GALLERY</p>
                        <h2 class="section-title">ランギスの裏や<br>プライベートなんかも。</h2>
                        <a href="#" class="btn btn--pill">VIEW MORE</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container footer__container">
            <div class="footer__logo">
                <img src="<?php echo get_theme_file_uri('/assets/images/logo.png'); ?>" alt="LANGIS">
            </div>
            <div class="footer__nav">
                <ul>
                    <li>TOP</li>
                    <li>ABOUT US</li>
                    <li>SERVICE</li>
                    <li>MEMBER</li>
                    <li>COMPANY</li>
                    <li>GALLERY</li>
                </ul>
            </div>
            <div class="footer__contact">
                <a href="#" class="btn btn--pill">CONTACT</a>
            </div>
        </div>
        <div class="footer__copyright">
            &copy; LANGIS Inc.
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>

</html>