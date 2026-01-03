<?php get_header(); ?>

<main class="main-content">
    <!-- Page Header -->
    <div class="page-header">
        <div class="page-header__inner">
            <p class="page-header__label">_GALLERY</p>
            <h1 class="page-header__title">
                <span class="u-highlight">ランギスの素や<br>プライベートなんかも。</span>
            </h1>
            <span class="page-header__en-title">GALLERY</span>
        </div>
    </div>
    <!-- Gallery Section -->
    <section class="section section-gallery" id="gallery">
        <div class="gallery__bg">
            <img src="<?php echo get_theme_file_uri('src/images/gallery/gallery_bg.jpg'); ?>" alt="Gallery Background">
        </div>
        <div class="container gallery__container">
            <div class="gallery__card js-animate fade-in-up">
                <span class="section-label">GALLERY</span>
                <h2 class="section-title">ランギスの素や<br>プライベートなんかも。</h2>
                <div class="gallery__btn">
                    <a href="<?php echo home_url('/coming-soon/'); ?>" class="btn btn--pill btn--gallery">VIEW MORE</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>