<?php get_header(); ?>

<main class="l-main">
    <!-- Page Header -->
    <div class="page-header">
        <div class="page-header__inner">
            <p class="page-header__label">MEMBER</p>
            <h1 class="page-header__title">
                <span class="u-highlight u-highlight--pink">ランギスの核となる<br>メンバーたち。</span>
            </h1>
            <span class="page-header__en-title">MEMBER</span>
        </div>
    </div>

    <!-- Member Intro Section (Reused from Top Page) -->
    <section class="section-member section-member--page" style="padding-top: 0;">
        <div class="container">
            <div class="member__layout-wrapper">
                <div class="member__vertical-text js-animate fade-in-up delay-400">
                    <span>上からも下からも信頼を集める</span>
                    <span>頼りになるメンバー</span>
                </div>

                <div class="member__card js-animate fade-in-up delay-400">
                    <div class="member__images">
                        <?php
                        $member_order = [4, 2, 3, 1];
                        foreach ($member_order as $index => $img_num):
                            ?>
                            <div
                                class="member__image member__image--0<?php echo $img_num; ?> js-animate fade-in-up delay-<?php echo 100 + (($index + 1) * 100); ?>">
                                <img src="<?php echo get_theme_file_uri('src/images/member/member0' . $img_num . '.png'); ?>"
                                    alt="Member <?php echo $img_num; ?>">
                            </div>
                        <?php endforeach; ?>
                        <div class="member__center-text">
                            <p class="member__center-text-item">上からも下からも信頼を集める</p>
                            <p class="member__center-text-item">頼りになるメンバー</p>
                        </div>
                    </div>

                    <div class="member__info">
                        <h3 class="member__title">LANGIS</h3>
                        <p class="member__description">
                            いつも笑顔で大きすぎることが多いランギスのメンバーですが、<br>
                            仕事をするときは真剣になります。とはいえ、堅苦しくない程度に。<br>
                            接客が多いため、人と接するときには自然と笑顔に。<br>
                            仕事面と共に仕事へのモチベーションや会社への想いを紹介しています。
                        </p>
                        <!-- Button removed for Member Page -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="member-archive">
        <div class="container">
            <div class="member-archive__header">
                <h2 class="member-archive__title">INTERVIEW</h2>
                <p class="member-archive__subtitle">先輩インタビュー</p>
            </div>

            <div class="member-grid">
                <!-- Member 01 -->
                <!-- Member 01 -->
                <?php
                // Link to new static page for Suzuki
                $link01 = home_url('/member-suzuki/');
                ?>
                <a href="<?php echo esc_url($link01); ?>" class="member-card">
                    <div class="member-card__image-wrapper">
                        <img src="<?php echo get_theme_file_uri('src/images/member/member-img01.png'); ?>"
                            alt="Hironori Suzuki">
                    </div>
                    <div class="member-card__body">
                        <h3 class="member-card__jp-name">鈴木 宏典</h3>
                        <div class="member-card__meta">
                            <p class="member-card__dept">部署：第二営業部</p>
                            <p class="member-card__position">役職：部長</p>
                            <p class="member-card__date">入社年月：2023年10月</p>
                        </div>
                        <div class="member-card__btn">
                            <span>VIEW MORE</span>
                            <span class="arrow">→</span>
                        </div>
                    </div>
                </a>

                <!-- Member 02 -->
                <?php
                $link02 = home_url('/member-sebe/');
                ?>
                <a href="<?php echo esc_url($link02); ?>" class="member-card">
                    <div class="member-card__image-wrapper">
                        <img src="<?php echo get_theme_file_uri('src/images/member/member-img02.png'); ?>"
                            alt="Takuya Sebe">
                    </div>
                    <div class="member-card__body">
                        <h3 class="member-card__jp-name">瀬邉 拓也</h3>
                        <div class="member-card__meta">
                            <p class="member-card__dept">部署：第二営業部</p>
                            <p class="member-card__position">役職：課長</p>
                            <p class="member-card__date">入社年月：2021年4月</p>
                        </div>
                        <div class="member-card__btn">
                            <span>VIEW MORE</span>
                            <span class="arrow">→</span>
                        </div>
                    </div>
                </a>

                <!-- Member 03 -->
                <?php
                $link03 = home_url('/member-furuhashi/');
                ?>
                <a href="<?php echo esc_url($link03); ?>" class="member-card">
                    <div class="member-card__image-wrapper">
                        <img src="<?php echo get_theme_file_uri('src/images/member/member-img03.png'); ?>"
                            alt="Member 03">
                    </div>
                    <div class="member-card__body">
                        <h3 class="member-card__jp-name">古橋 真人</h3>
                        <div class="member-card__meta">
                            <p class="member-card__dept">部署：〇〇〇〇</p>
                            <p class="member-card__position">役職：課長</p>
                            <p class="member-card__date">入社年月：2023年8月</p>
                        </div>
                        <div class="member-card__btn">
                            <span>VIEW MORE</span>
                            <span class="arrow">→</span>
                        </div>
                    </div>
                </a>

                <!-- Member 04 -->
                <?php
                $link04 = home_url('/member-ban/');
                ?>
                <a href="<?php echo esc_url($link04); ?>" class="member-card">
                    <div class="member-card__image-wrapper">
                        <img src="<?php echo get_theme_file_uri('src/images/member/member-img04.png'); ?>"
                            alt="Member 04">
                    </div>
                    <div class="member-card__body">
                        <h3 class="member-card__jp-name">坂 康成</h3>
                        <div class="member-card__meta">
                            <p class="member-card__dept">部署：〇〇〇〇</p>
                            <p class="member-card__position">役職：マネージャー</p>
                            <p class="member-card__date">入社年月：2021年7月</p>
                        </div>
                        <div class="member-card__btn">
                            <span>VIEW MORE</span>
                            <span class="arrow">→</span>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </section>

    <!-- Bottom Section -->
    <section class="member-bottom">
        <div class="member-bottom__bg-text">LANGIS</div>
        <div class="container member-bottom__container">
            <div class="member-bottom__images">
                <div class="member-bottom__img-item js-animate fade-in-up delay-200">
                    <img src="<?php echo get_theme_file_uri('src/images/about/about_bottom01.png'); ?>" alt="Staff 01">
                </div>
                <div class="member-bottom__img-item js-animate fade-in-up delay-400">
                    <img src="<?php echo get_theme_file_uri('src/images/about/about_bottom02.png'); ?>" alt="Staff 02">
                </div>
                <div class="member-bottom__img-item js-animate fade-in-up delay-600">
                    <img src="<?php echo get_theme_file_uri('src/images/about/about_bottom03.png'); ?>" alt="Staff 03">
                </div>
                <div class="member-bottom__img-item js-animate fade-in-up delay-800">
                    <img src="<?php echo get_theme_file_uri('src/images/about/about_bottom04.png'); ?>" alt="Staff 04">
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>