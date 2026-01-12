<footer class="footer">
    <!-- Hand Background Decoration -->
    <div class="footer__decor">
        <img src="<?php echo get_theme_file_uri('src/images/common/footer-bg.png'); ?>" alt=""
            class="footer__decor-img">
    </div>

    <!-- Page Top Button -->
    <a href="#top" class="pagetop" id="js-pagetop"></a>

    <div class="container footer__container">
        <!-- Left Column: Logo & Company Info -->
        <div class="footer__info">
            <div class="footer__logo">
                <img src="<?php echo get_theme_file_uri('src/images/common/footer-logo.svg'); ?>" alt="LANGIS">
            </div>
            <p class="footer__company-name">株式会社LANGIS</p>
            <address class="footer__address">
                〒455-0037<br>
                愛知県名古屋市港区名港一丁目20-11 宝来ビル2階<br>
                TEL:052-380-3442 <span style="margin-left: 20px;">FAX:000-000-0000</span>
            </address>
        </div>

        <!-- Center Column: Navigation -->
        <div class="footer__nav">
            <ul>
                <li><a href="<?php echo home_url('/'); ?>">_TOP</a></li>
                <li><a href="<?php echo home_url('/about/'); ?>">_ABOUT US</a></li>
                <li><a href="<?php echo home_url('/service/'); ?>">_SERVICE</a></li>
<<<<<<< HEAD
                <li><a href="<?php echo home_url('/#member'); ?>">_MEMBER</a></li>
=======
                <li><a href="<?php echo home_url('/member/'); ?>">_MEMBER</a></li>
>>>>>>> develop
            </ul>
            <ul>
                <li><a href="<?php echo home_url('/company/'); ?>">_COMPANY</a></li>
                <li><a href="<?php echo home_url('/gallery/'); ?>">_GALLERY</a></li>
                <li style="margin-top: 20px;"><a href="<?php echo home_url('/contact/'); ?>"
                        class="btn btn--pill btn--contact">CONTACT</a></li>
            </ul>
        </div>

    </div>

    <!-- Copyright -->
    <p class="footer__copyright">
        Copyright &copy; 株式会社LANGIS All Rights Reserved.
</footer>
</div><!-- /.wrapper -->

<?php wp_footer(); ?>
</body>

</html>