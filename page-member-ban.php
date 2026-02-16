<?php
/**
 * Template Name: Member Detail Page (Ban)
 * Template Post Type: page
 */
get_header();

global $post;

$member_data = [
    'en_name' => 'Yasunari Ban',
    'jp_name' => '坂 康成',
    'dept' => '第二営業部',
    'position' => 'マネージャー',
    'date' => '2021年7月',
    'image_url' => get_theme_file_uri('src/images/member/ban-mv.png'),
    'number' => '04'
];
?>

<article class="member-single">

    <!-- Member Page Header (Common) -->
    <section class="member-page-header">
        <div class="container member-page-header__container">
            <div class="member-page-header__box">
                <p class="member-page-header__label">MEMBER</p>
                <h2 class="member-page-header__title">
                    <span class="highlight">ランギスの核となる</span><br>
                    <span class="highlight">メンバーたち。</span>
                </h2>
                <div class="member-page-header__bg-text">MEMBER</div>
            </div>
        </div>
    </section>

    <!-- Hero Section -->
    <section class="member-hero">
        <div class="container member-hero__container">
            <div class="member-hero__content">
                <p class="member-hero__label">_INTERVIEW</p>
                <h1 class="member-hero__number">
                    <?php echo esc_html($member_data['number']); ?>
                </h1>
                <div class="member-hero__names">
                    <p class="member-hero__en-name">
                        <?php echo esc_html($member_data['en_name']); ?>
                    </p>
                    <p class="member-hero__jp-name">
                        <?php echo esc_html($member_data['jp_name']); ?>
                    </p>
                </div>
                <div class="member-hero__meta">
                    <?php if (!empty($member_data['dept'])): ?>
                        <dl>
                            <dt>部署:</dt>
                            <dd>
                                <?php echo esc_html($member_data['dept']); ?>
                            </dd>
                        </dl>
                    <?php endif; ?>
                    <?php if (!empty($member_data['position'])): ?>
                        <dl>
                            <dt>役職:</dt>
                            <dd>
                                <?php echo esc_html($member_data['position']); ?>
                            </dd>
                        </dl>
                    <?php endif; ?>
                    <?php if (!empty($member_data['date'])): ?>
                        <dl>
                            <dt>入社年月:</dt>
                            <dd>
                                <?php echo esc_html($member_data['date']); ?>
                            </dd>
                        </dl>
                    <?php endif; ?>
                </div>
            </div>
            <div class="member-hero__image">
                <?php if ($member_data['image_url']): ?>
                    <img src="<?php echo esc_url($member_data['image_url']); ?>"
                        alt="<?php echo esc_attr($member_data['en_name']); ?>">
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="member-body">
        <div class="member-body__container">
            <h2 class="member-body__heading">「もっとこの会社のためになることをしたい」<br>をいつまでも。</h2>

            <!-- Block 1: Text Left, Image Right -->
            <div class="member-body__row">
                <div class="member-body__text-col">
                    <div class="member-body__labels">
                        <span class="member-body__label">会社にどれだけ貢献できるかを大切に。</span>
                    </div>
                    <p class="member-body__text">
                        入社前から関わりがあり、個人事業主としてお仕事をいただいていました。関わりが増えるたびに「もっとこの会社のためになることをしたい」と考えたのがキッカケです。ランギスのためになることの第一歩として入社を決断しました。入社前から面識がある方が多かったので入社後にイメージが変わることはありませんでしたが、距離が近くなったことで、優しさや心強さをより実感したのを覚えています。ランギスは、日頃から仕事以外での関わりが多く信頼関係が強いため、年齢を気にせず本音でぶつかり合える会社だなと思います。
                    </p>
                </div>
                <div class="member-body__img-col">
                    <img src="<?php echo get_theme_file_uri('src/images/member/ban-img02.png'); ?>"
                        alt="Interview Image 02">
                </div>
            </div>

            <div class="member-body__divider"></div>

            <!-- Block 2: Image Left, Text Right -->
            <div class="member-body__row member-body__row--reverse">
                <div class="member-body__img-col">
                    <img src="<?php echo get_theme_file_uri('src/images/member/ban-img03.png'); ?>"
                        alt="Interview Image 03">
                </div>
                <div class="member-body__text-col">
                    <div class="member-body__labels">
                        <span class="member-body__label">実体験に基づいたアドバイスがもらえる環境。</span>
                    </div>
                    <p class="member-body__text">
                        社内での自分の役割は、併売店事業の責任者として併売店を長く太い事業にするため奮闘すると共に、その他事業のサポートをする立場だと捉えています。不安を感じることなく邁進できるのは、何かトラブルがあったときには、間に入ってくれる人が必ずいるところ。そのおかげで安心できます。フォロー体制については、実体験をもとにしたアドバイスや実際に自身が行なっている案内方法などを元に指導している方が多い為、指導を受ける側もわかりやすく実行にも移しやすいと感じています。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="member-message">
        <div class="member-message__container">
            <div class="member-message__image">
                <img src="<?php echo get_theme_file_uri('src/images/member/ban-img04.png'); ?>" alt="Kousei Ban">
                <img class="member-message__logo"
                    src="<?php echo get_theme_file_uri('src/images/member/member-logo.png'); ?>" alt="">
            </div>

            <div class="member-message__heading">
                <span class="highlight">誰からも学び、</span><br>
                <span class="highlight">誰よりも成長できるように。</span>
            </div>

            <p class="member-message__text">
                先輩後輩問わず、全員を尊敬しています。ランギスにはさまざまな方面で秀でた人員が揃っており、各々に対して尊敬している部分があります。日々、全員の良いところを盗み、吸収して私も尊敬されるような人間になれたらと思っています。機会があった際には、良いところを一層伸ばし、少しずつ成功体験を積み重ねられる指導をしたいと考えています。
            </p>

            <div class="member-message__action">
                <a href="<?php echo home_url('/member/'); ?>" class="btn btn--pill btn--white btn--left-arrow">
                    一覧へ戻る
                </a>
            </div>
        </div>
    </section>

    <!-- Bottom Section -->
    <section class="member-bottom member-bottom--detail">
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

</article>
</main>

<?php get_footer(); ?>