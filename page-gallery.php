<?php get_header(); ?>

<main class="main-content">
    <!-- Page Header -->
    <div class="page-header">
        <div class="page-header__inner">
            <p class="page-header__label">GALLERY</p>
            <h1 class="page-header__title">
                <span class="u-highlight">ランギスの素や<br>プライベートなんかも。</span>
            </h1>
            <span class="page-header__en-title">GALLERY</span>
        </div>
    </div>
    <!-- Gallery Section -->
    <section class="section section-gallery section-gallery--page" id="gallery">
        <div class="container gallery__container">

            <?php if (have_rows('gallery_repeater')): ?>
                <div class="gallery__grid">
                    <?php while (have_rows('gallery_repeater')):
                        the_row();
                        $image_url = get_sub_field('gallery_image');
                        if ($image_url):
                            ?>
                            <div class="gallery__item js-animate fade-in-up">
                                <img src="<?php echo esc_url($image_url); ?>" alt="Gallery Image">
                            </div>
                            <?php
                        endif;
                    endwhile; ?>
                </div>
            <?php else: ?>
                <p class="u-text-center">No images found.</p>
            <?php endif; ?>

        </div>
    </section>
</main>

<?php get_footer(); ?>