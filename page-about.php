<?php get_header(); ?>

<main class="main-content">
    <!-- Page Header -->
    <div class="page-header">
        <div class="page-header__inner">
            <p class="page-header__label">_ABOUT US</p>
            <h1 class="page-header__title">
                <span class="u-highlight">ランギスの良さって、<br>どこにある？</span>
            </h1>
            <span class="page-header__en-title">ABOUT US</span>
        </div>
    </div>
    <!-- About Section -->
    <section class="section section-about" id="about">
        <div class="container about__container">
            <div class="about__wrapper">
                <div class="about__img-col about__img-col--left js-animate fade-in-up">
                    <img src="<?php echo get_theme_file_uri('src/images/top/about-img01.png'); ?>" alt="About Image 1">
                </div>

                <div class="about__center-col js-animate fade-in-up delay-200">
                    <h3 class="section-label">ABOUT US</h3>
                    <h2 class="section-title section-title--vertical">ランギスの<br>良さって、<br>どこにある？</h2>
                </div>

                <div class="about__img-col about__img-col--right js-animate fade-in-up delay-400">
                    <img src="<?php echo get_theme_file_uri('src/images/top/about-img02.png'); ?>" alt="About Image 2">
                </div>
            </div>

            <div class="about__content-below about__lower-grid">
                <div class="about__lower-col js-animate fade-in-up">
                    <a href="<?php echo home_url('/coming-soon/'); ?>" class="btn btn--circle">通信の会社？<br>営業の会社？</a>
                </div>

                <div class="about__text-box js-animate fade-in-up delay-200">
                    <p>通信の会社であり、営業の会社であるのは事実ですが、<br>それだけではないのですと強く言いたい。<br>人は宝だと昔から言います。それは今の時代も変わらないと感じています。<br>ランギスの社員はオーダーや要望に対しての瞬発力が違います。<br>求められていること、先回りすること、期待を超えることに対して。<br><br><span
                            class="u-text-nowrap">その証として、無茶振りにも対応したメンバーたちの素敵な顔をご覧ください。</span>
                    </p>
                </div>

                <div class="about__lower-col js-animate fade-in-up delay-400">
                    <a href="<?php echo home_url('/coming-soon/'); ?>"
                        class="btn btn--circle">いや、<br>ランギスは<br>瞬発力の会社！</a>
                </div>
            </div>

            <div class="u-center u-mt-40 js-animate fade-in-up delay-500">
                <a href="<?php echo home_url('/coming-soon/'); ?>" class="btn btn--pill">VIEW MORE</a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>