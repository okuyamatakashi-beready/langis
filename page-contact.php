<?php get_header(); ?>

<main class="main-content">
    <!-- Page Header -->
    <div class="page-header">
        <div class="page-header__inner">
            <p class="page-header__label">_CONTACT</p>
            <h1 class="page-header__title">
                <span class="u-highlight">お問い合わせ</span>
            </h1>
            <span class="page-header__en-title">CONTACT</span>
        </div>
    </div>
    <!-- Contact Section -->
    <section class="section section-contact" id="contact">
        <div class="container container--contact">
            <h3 class="section-label js-animate fade-in-up">CONTACT</h3>
            <h2 class="section-title js-animate fade-in-up delay-200">お問い合わせ</h2>

            <div class="contact__form-wrapper js-animate fade-in-up delay-400">
                <p class="u-center">
                    お問い合わせフォームは現在準備中です。<br>
                    お急ぎの方は、お電話または各SNSよりご連絡ください。
                </p>
                <!-- Placeholder for Contact Form 7 or similar -->
                <!-- <?php // echo do_shortcode('[contact-form-7 id="..."]'); ?> -->
            </div>

            <div class="u-center u-mt-40 js-animate fade-in-up delay-500">
                <a href="<?php echo home_url('/'); ?>" class="btn btn--pill">TOPへ戻る</a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>