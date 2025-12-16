<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <h1><?php bloginfo('name'); ?></h1>
    </header>

    <main>
        <div class="container">
            <h2>Welcome to Langis Theme</h2>
            <p>This is a custom theme using Vite + SCSS.</p>
            <button class="btn">Test Button</button>
        </div>
    </main>

    <?php wp_footer(); ?>
</body>

</html>