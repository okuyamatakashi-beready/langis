<?php get_header(); ?>

<main class="main-content">
    <!-- Page Header -->
    <div class="page-header">
        <div class="page-header__inner">
            <p class="page-header__label">_SERVICE</p>
            <h1 class="page-header__title">
<<<<<<< HEAD
                <span class="u-highlight">ランギスの<br>サービスは、<br>人です。</span>
=======
                <span class="u-highlight u-highlight--green">ランギスのサービスは、<br>人です。</span>
>>>>>>> develop
            </h1>
            <span class="page-header__en-title">SERVICE</span>
        </div>
    </div>
<<<<<<< HEAD
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
                            <a href="<?php echo home_url('/coming-soon/'); ?>"
                                class="btn btn--pill btn--service-custom">VIEW MORE</a>
                        </div>
=======
    <!-- Service Intro Section -->
    <section class="service-intro">
        <div class="container service-intro__container">
            <div class="service-intro__content">
                <!-- Left: Image Area -->
                <div class="service-intro__image-area">
                    <div class="service-intro__circle-img">
                        <img src="<?php echo get_theme_file_uri('src/images/service/service_staff.png'); ?>"
                            alt="Service Staff">
                    </div>
                </div>

                <!-- Right: Text Area -->
                <div class="service-intro__text-area">
                    <h2 class="service-intro__heading">
                        <span class="u-highlight-white">通信商材の知識と扱うノウハウ。</span><br>
                        <span class="u-highlight-white">信頼関係を築く営業力。</span>
                    </h2>
                    <p class="service-intro__desc">
                        ランギスと言えば、人。サービスも、また人です。<br>
                        通信商材のご提案時の接客も、<br>
                        アウトソーシングで出向いた先での営業や商談も、<br>
                        いずれも対するのは人です。<br>
                        であればAIのように求める答えだけをご提供していては、価値がありません。<br>
                        だからこそ人を大事にしますし、サービスも人だと言い切っていきます。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Gallery Section -->
    <section class="service-gallery">
        <div class="container service-gallery__container">
            <div class="service-gallery__grid">
                <div class="service-gallery__top-row">
                    <div class="service-gallery__item service-gallery__item--01">
                        <img src="<?php echo get_theme_file_uri('src/images/service/service_img01.png'); ?>"
                            alt="Service Scene 01">
                    </div>
                    <div class="service-gallery__item service-gallery__item--02">
                        <img src="<?php echo get_theme_file_uri('src/images/service/service_img02.png'); ?>"
                            alt="Service Scene 02">
                    </div>
                </div>
                <div class="service-gallery__bottom-row">
                    <div class="service-gallery__item service-gallery__item--03">
                        <img src="<?php echo get_theme_file_uri('src/images/service/service_img03.png'); ?>"
                            alt="Service Scene 03">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Works Section -->
    <section class="service-works">
        <div class="container service-works__container">
            <div class="service-works__header">
                <h2 class="service-works__title">WORKS</h2>
                <p class="service-works__subtitle">ランギスの仕事</p>
            </div>

            <div class="service-works__list">
                <!-- Card 01 -->
                <div class="service-works__card"
                    style="background-image: url('<?php echo get_theme_file_uri('src/images/service/service-works01.png'); ?>');">
                    <div class="service-works__card-content">
                        <div class="service-works__card-title-box">
                            <h3 class="service-works__card-title">通信商材の営業代理店・代行業務</h3>
                        </div>
                        <p class="service-works__card-desc">
                            各光回線キャリアや周辺機器の営業代行業を主として<br>
                            広く通信事業に携わっており、<br>
                            主に個人様へ向けた固定通信回線（光回線、取次業務）を<br>
                            商材として扱っています。
                        </p>
                    </div>
                </div>

                <!-- Card 02 -->
                <div class="service-works__card"
                    style="background-image: url('<?php echo get_theme_file_uri('src/images/service/service-works02.png'); ?>');">
                    <div class="service-works__card-content">
                        <div class="service-works__card-title-box">
                            <h3 class="service-works__card-title">セールスプロモーション業務</h3>
                        </div>
                        <p class="service-works__card-desc">
                            課題と現状を分析したスタッフィングや運営、<br>
                            必要なツール作成など幅広く対応いたします。<br>
                            携帯電話をはじめとした通信機器の販売促進、企画立案から現場での販売まで<br>
                            ワンストップでお任せください。
                        </p>
>>>>>>> develop
                    </div>
                </div>
            </div>
        </div>
    </section>
<<<<<<< HEAD
=======

    <!-- Bottom Section (Replicated from About) -->
    <section class="about-bottom service-bottom">
        <div class="about-bottom__bg-text">LANGIS</div>
        <div class="container about-bottom__container">
            <div class="about-bottom__images">
                <div class="about-bottom__img-item js-animate fade-in-up delay-200">
                    <img src="<?php echo get_theme_file_uri('src/images/about/about_bottom01.png'); ?>" alt="Staff 01">
                </div>
                <div class="about-bottom__img-item js-animate fade-in-up delay-400">
                    <img src="<?php echo get_theme_file_uri('src/images/about/about_bottom02.png'); ?>" alt="Staff 02">
                </div>
                <div class="about-bottom__img-item js-animate fade-in-up delay-600">
                    <img src="<?php echo get_theme_file_uri('src/images/about/about_bottom03.png'); ?>" alt="Staff 03">
                </div>
                <div class="about-bottom__img-item js-animate fade-in-up delay-800">
                    <img src="<?php echo get_theme_file_uri('src/images/about/about_bottom04.png'); ?>" alt="Staff 04">
                </div>
            </div>
        </div>
    </section>
>>>>>>> develop
</main>

<?php get_footer(); ?>