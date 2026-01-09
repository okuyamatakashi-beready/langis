<?php get_header(); ?>

<main class="l-main">
    <!-- Page Header (reuse existing style if possible or simple one) -->
    <section class="page-header section-page-header">
        <div class="page-header__inner">
            <h1 class="page-header__title">MEMBER</h1>
            <p class="page-header__subtitle">メンバー紹介</p>
        </div>
    </section>

    <section class="member-archive">
        <div class="container">
            <div class="member-grid">
                <?php if (have_posts()):
                    while (have_posts()):
                        the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="member-card">
                            <div class="member-card__image">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('large'); ?>
                                <?php else: ?>
                                    <div class="member-card__no-image">No Image</div>
                                <?php endif; ?>
                            </div>
                            <div class="member-card__info">
                                <h2 class="member-card__name">
                                    <?php the_title(); ?>
                                </h2>
                                <?php if (has_excerpt()): ?>
                                    <p class="member-card__excerpt">
                                        <?php echo get_the_excerpt(); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </a>
                    <?php endwhile; else: ?>
                    <p>メンバーが見つかりませんでした。</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>