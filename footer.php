<footer class="footer">
    <!-- Hand Background Decoration -->
    <div class="footer__decor"></div>

    <div class="container footer__container">
        <!-- Left Column: Logo & Company Info -->
        <div class="footer__info">
            <div class="footer__logo">
                <img src="<?php echo get_theme_file_uri('src/images/common/logo.svg'); ?>" alt="LANGIS">
            </div>
            <p class="footer__company-name">株式会社LANGIS</p>
            <address class="footer__address">
                〒455-0037<br>
                愛知県名古屋市港区名港一丁目20-11 宝来ビル2階<br>
                TEL:052-380-3442 FAX:000-000-0000
            </address>
        </div>

        <!-- Center Column: Navigation -->
        <div class="footer__nav">
            <ul>
                <li><a href="#top">_TOP</a></li>
                <li><a href="#about">_ABOUT US</a></li>
                <li><a href="#service">_SERVICE</a></li>
                <li><a href="#member">_MEMBER</a></li>
            </ul>
            <ul>
                <li><a href="#company">_COMPANY</a></li>
                <li><a href="#gallery">_GALLERY</a></li>
            </ul>
        </div>

        <!-- Right Column: Contact -->
        <div class="footer__contact">
            <a href="#contact" class="btn btn--pill btn--contact">CONTACT</a>
        </div>
    </div>

    <!-- Copyright -->
    <p class="footer__copyright">
        Copyright &copy; 株式会社LANGIS All Rights Reserved.
    </p>
</footer>

<?php wp_footer(); ?>
</body>

</html>