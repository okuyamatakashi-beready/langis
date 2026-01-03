<?php get_header(); ?>

<main class="main-content">
    <!-- Page Header -->
    <div class="page-header">
        <div class="page-header__inner">
            <p class="page-header__label">_COMPANY</p>
            <h1 class="page-header__title">
                <span class="u-highlight">ランギスを知る。</span>
            </h1>
            <span class="page-header__en-title">COMPANY</span>
        </div>
    </div>
    <!-- Company Section -->
    <section class="section section-company" id="company">
        <div class="company__bg-decor">
            <!-- Hand Illustration (CSS background) -->
        </div>
        <div class="container company__container">
            <!-- Company Logo (Top Right) -->
            <div class="company__logo js-animate fade-in-up">
                <img src="<?php echo get_theme_file_uri('src/images/company/company-logo.png'); ?>" alt="Company Logo"
                    width="307">
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
                    <a href="<?php echo home_url('/coming-soon/'); ?>" class="btn btn--pill btn--company-teal">VIEW
                        MORE</a>
                </div>
            </div>

            <!-- Bottom Right Image -->
            <div class="company__image company__image--02 js-animate fade-in-up delay-400">
                <img src="<?php echo get_theme_file_uri('src/images/company/company_img02.png'); ?>"
                    alt="Office Interior">
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>