<?php get_header(); ?>

<main class="main-content">
    <!-- Page Header -->
    <div class="page-header">
        <div class="page-header__inner">
            <p class="page-header__label">CONTACT</p>
            <h1 class="page-header__title">
                <span class="u-highlight">お問い合わせ</span>
            </h1>
            <span class="page-header__en-title">CONTACT</span>
        </div>
    </div>
    <!-- Contact Phone Section -->
    <section class="contact-phone">
        <div class="contact-phone__container">
            <div class="contact-phone__box">
                <h2 class="contact-phone__title">電話からのお問い合わせ</h2>
                <a href="tel:0523803442" class="contact-phone__number">052-380-3442</a>
                <p class="contact-phone__desc">ご不明な点はお気軽にお問い合わせください。</p>
                <p class="contact-phone__hours">受付: 月〜金曜日 10:00〜18:00</p>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form-section" id="form">
        <div class="contact-form-section__container">
            <h2 class="contact-form-section__title">フォームからのお問い合わせ</h2>

            <div class="contact-form-card">
                <?php echo do_shortcode('[contact-form-7 id="7425725" title="コンタクトフォーム 1"]'); ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>