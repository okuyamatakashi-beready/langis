<?php get_header(); ?>

<main class="main-content">
    <div class="utility-page">
        <div class="container utility-page__container">
            <h1 class="utility-page__title">404 NOT FOUND</h1>
            <p class="utility-page__message">
                Ups... page not found.<br>
                お探しのページは見つかりませんでした。
            </p>
            <div class="utility-page__btn">
                <a href="<?php echo home_url('/'); ?>" class="btn btn--pill">TOP PAGE</a>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>