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
    <section class="section section-gallery section-gallery--page" id="gallery">
        <div class="container gallery__container">
            <?php if (have_rows('gallery_repeater')): ?>
                <div class="gallery__grid">
                    <?php while (have_rows('gallery_repeater')):
                        the_row(); ?>
                        <?php
                        $image = get_sub_field('gallery_image');
                        if ($image):
                            // Image ID comes in as array or ID depending on return setting. 
                            // Assuming Image Array or URL. Let's handle generic image output.
                            // If return format is 'Image Array'
                            $img_url = '';
                            $img_alt = '';
                            if (is_array($image)) {
                                $img_url = $image['url'];
                                $img_alt = $image['alt'];
                            } else {
                                // URL string
                                $img_url = $image;
                            }
                            ?>
                            <div class="gallery__item js-animate fade-in-up">
                                <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($img_alt); ?>">
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>