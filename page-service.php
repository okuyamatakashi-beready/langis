<?php get_header(); ?>

<main class="main-content">
    <!-- Page Header -->
    <div class="page-header">
        <div class="page-header__inner">
            <p class="page-header__label">_SERVICE</p>
            <h1 class="page-header__title">
                <span class="u-highlight">ランギスの<br>サービスは、<br>人です。</span>
            </h1>
            <span class="page-header__en-title">SERVICE</span>
        </div>
    </div>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>