<?php get_header(); ?>

<main class="l-main">
    <?php if (have_posts()):
        while (have_posts()):
            the_post(); ?>
            <article class="member-single">

                <header class="member-single__header">
                    <div class="container mb-container">
                        <h1 class="member-single__title">
                            <?php the_title(); ?>
                        </h1>
                        <?php if (has_excerpt()): ?>
                            <p class="member-single__position">
                                <?php echo get_the_excerpt(); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </header>

                <div class="member-single__content">
                    <div class="container mb-container">
                        <?php if (has_post_thumbnail()): ?>
                            <div class="member-single__main-image">
                                <?php the_post_thumbnail('full'); ?>
                            </div>
                        <?php endif; ?>

                        <div class="member-single__body">
                            <?php the_content(); ?>
                        </div>

                        <div class="member-single__footer">
                            <a href="<?php echo esc_url(get_post_type_archive_link('member')); ?>" class="c-button-back">
                                一覧に戻る
                            </a>
                        </div>
                    </div>
                </div>

            </article>
        <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>