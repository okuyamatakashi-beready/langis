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

<body <?php body_class(); ?>>
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
                        <div class="hero__slider hero__slider--left swiper hero-entrance fade-in-up delay-400">
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
                        <div class="hero__center-text hero-entrance fade-in-up delay-600">
                            <div class="hero__center-bg"
                                style="background-image: url(<?php echo get_theme_file_uri('src/images/top/hero-bg.png'); ?>);">
                                <p class="vertical-text-sub">ロゴのグッドサインのような<br>「いいね！わかった！賛成！」が<br>自然と出てくる会社でありつづけたい。</p>
                            </div>
                        </div>

                        <div class="hero__pagination hero-entrance fade-in-up delay-800"></div>

                        <!-- Right Slider -->
                        <div class="hero__slider hero__slider--right swiper hero-entrance fade-in-up delay-400">
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
                </div>
                <div class="hero__big-text hero-entrance fade-in-up delay-1000">
                    <div class="hero__big-text-track">
                        <span>LANGIS LANGIS LANGIS LANGIS</span>
                        <span>LANGIS LANGIS LANGIS LANGIS</span>
                    </div>
                </div>
            </section>

            <!-- About Section -->
            <section class="section section-about" id="about">
                <div class="container about__container">
                    <div class="about__wrapper">
                        <div class="about__img-col about__img-col--left js-animate fade-in-up">
                            <img src="<?php echo get_theme_file_uri('src/images/top/about-img01.png'); ?>"
                                alt="About Image 1">
                        </div>

                        <div class="about__center-col js-animate fade-in-up delay-200">
                            <h3 class="section-label">ABOUT US</h3>
                            <h2 class="section-title section-title--vertical">ランギスの<br>良さって、<br>どこにある？</h2>
                        </div>

                        <div class="about__img-col about__img-col--right js-animate fade-in-up delay-400">
                            <img src="<?php echo get_theme_file_uri('src/images/top/about-img02.png'); ?>"
                                alt="About Image 2">
                        </div>
                    </div>

                    <div class="about__content-below about__lower-grid">
                        <div class="about__lower-col js-animate fade-in-up">
                            <a href="#" class="btn btn--circle">通信の会社？<br>営業の会社？</a>
                        </div>

                        <div class="about__text-box js-animate fade-in-up delay-200">
                            <p>通信の会社であり、営業の会社であるのは事実ですが、<br>それだけではないのですと強く言いたい。<br>人は宝だと昔から言います。それは今の時代も変わらないと感じています。<br>ランギスの社員はオーダーや要望に対しての瞬発力が違います。<br>求められていること、先回りすること、期待を超えることに対して。<br><br><span
                                    class="u-text-nowrap">その証として、無茶振りにも対応したメンバーたちの素敵な顔をご覧ください。</span>
                            </p>
                        </div>

                        <div class="about__lower-col js-animate fade-in-up delay-400">
                            <a href="#" class="btn btn--circle">いや、<br>ランギスは<br>瞬発力の会社！</a>
                        </div>
                    </div>

                    <div class="u-center u-mt-40 js-animate fade-in-up delay-500">
                        <a href="#" class="btn btn--pill">VIEW MORE</a>
                    </div>
                </div>
            </section>

            <!-- Service Section -->
            <!-- Service Section -->
            <section class="section section-service" id="service">
                <div class="container">
                    <div class="service-card js-animate fade-in-up"
                        style="background-image: url(<?php echo get_theme_file_uri('src/images/service/service_bg.png'); ?>);">
                        <h3 class="section-label js-animate fade-in-up delay-200">SERVICE</h3>
                        <div class="service-card__body">
                            <div class="service-card__left">
                                <p class="section-title section-title--vertical-big js-animate fade-in-up delay-200">
                                    <strong>ランギスの<br>サービスは、<br>人です。</strong>
                                </p>
                            </div>
                            <div class="service-card__right">
                                <div class="service-keywords js-animate fade-in-up delay-300">
                                    <p class="keyword-box">通信商材の知識と扱うノウハウ。</p>
                                    <p class="keyword-box">信頼関係を築く営業力。</p>
                                </div>
                                <p class="service-description js-animate fade-in-up delay-400">
                                    ランギスと言えば、人。サービスも、また人です。<br>
                                    通信商材のご提案時の接客も、<br>
                                    アウトソーシングで出向いた先での営業や商談も、<br>
                                    いずれも対するのは人です。<br>
                                    であればAIのように求める答えだけをご提供していては、価値がありません。<br>
                                    だからこそ人を大事にしますし、サービスも人だと言い切っていきます。
                                </p>
                                <div class="service-btn-wrapper js-animate fade-in-up delay-500">
                                    <a href="#" class="btn btn--pill btn--service-custom">VIEW MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Member Section -->
            <section class="section section-member section--orange">
                <div class="container">
                    <h3 class="section-label js-animate fade-in-up">MEMBER</h3>
                    <h2 class="section-title--zabuton js-animate">
                        <span class="zabuton">ランギスの核となる</span><br>
                        <span class="zabuton">メンバーたち</span>
                    </h2>

                    <div class="member__layout-wrapper">
                        <div class="member__vertical-text js-animate fade-in-up delay-400">
                            <span>上からも下からも信頼を集める</span>
                            <span>頼りになるメンバー</span>
                        </div>

                        <div class="member__card js-animate fade-in-up delay-400">
                            <div class="member__images">
                                <?php
                                $member_order = [4, 2, 3, 1];
                                foreach ($member_order as $index => $img_num):
                                    ?>
                                    <div
                                        class="member__image member__image--0<?php echo $img_num; ?> js-animate fade-in-up delay-<?php echo 100 + (($index + 1) * 100); ?>">
                                        <img src="<?php echo get_theme_file_uri('src/images/member/member0' . $img_num . '.png'); ?>"
                                            alt="Member <?php echo $img_num; ?>">
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <div class="member__info">
                                <h3 class="member__title">LANGIS</h3>
                                <p class="member__description">
                                    いつも笑顔で大きすぎることが多いランギスのメンバーですが、<br>
                                    仕事をするときは真剣になります。とはいえ、堅苦しくない程度に。<br>
                                    接客が多いため、人と接するときには自然と笑顔に。<br>
                                    仕事面と共に仕事へのモチベーションや会社への想いを紹介しています。
                                </p>
                                <div class="member__btn-wrapper">
                                    <a href="#" class="btn btn--pill btn--pink">VIEW MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Company Section -->
            <section class="section section-company" id="company">
                <div class="company__bg-decor">
                    <!-- Hand Illustration (CSS background) -->
                </div>
                <div class="container company__container">
                    <!-- Company Logo (Top Right) -->
                    <div class="company__logo js-animate fade-in-up">
                        <img src="<?php echo get_theme_file_uri('src/images/company/company-logo.png'); ?>"
                            alt="Company Logo" width="307">
                    </div>

                    <!-- Top Left Image -->
                    <div class="company__image company__image--01 js-animate fade-in-up">
                        <img src="<?php echo get_theme_file_uri('src/images/company/company_img01.png'); ?>"
                            alt="Office Exterior">
                    </div>

                    <!-- Central Card -->
                    <div class="company__card js-animate fade-in-up delay-200">
                        <span class="section-label">COMPANY</span>
                        <h2 class="section-title">ランギスを知る。</h2>
                        <p class="company__description">
                            名古屋市港区にオフィスを構えています。<br>
                            東海エリアを中心に関西エリアにも進出中。
                        </p>
                        <div class="company__btn">
                            <a href="#" class="btn btn--pill btn--company-teal">VIEW MORE</a>
                        </div>
                    </div>

                    <!-- Bottom Right Image -->
                    <div class="company__image company__image--02 js-animate fade-in-up delay-400">
                        <img src="<?php echo get_theme_file_uri('src/images/company/company_img02.png'); ?>"
                            alt="Office Interior">
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
                            <h3 class="section-label">GALLERY</h3>
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