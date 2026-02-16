<?php
/**
 * Template Name: Member Detail Page (Furuhashi)
 * Template Post Type: page
 */
get_header();

global $post;

$member_data = [
    'en_name' => 'Masato Furuhashi',
    'jp_name' => '古橋 真人',
    'dept' => '第一営業部',
    'position' => '課長',
    'date' => '2023年8月',
    'image_url' => get_theme_file_uri('src/images/member/furuhashi-mv.png'),
    'number' => '03'
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
            <h2 class="member-body__heading">プレイヤーとしてもマネージャーとしても<br>不可欠な存在となれるように。</h2>

            <!-- Block 1: Text Left, Image Right -->
            <div class="member-body__row">
                <div class="member-body__text-col">
                    <div class="member-body__labels">
                        <span class="member-body__label">さらに拡大しても</span>
                        <span class="member-body__label">ランギスらしさは継続していきたい。</span>
                    </div>
                    <p class="member-body__text">
                        私がランギスに居る理由は、尊敬している先輩といっしょに働きたかったから。入社当時よりも人が増え、活気も勢いも増してきたことを嬉しく思っています。何よりもメンバー全員仲の良いところが会社の好きなところなので、この先さらに規模が大きくなったとしても不変の魅力であるようにしていきたいですね。そんなランギスのなかで私のポジション・役割は、必要不可欠な存在であること(笑)。皆にそう思ってもらえるように日々の業務を丁寧にしっかりと行っていきます！
                    </p>
                </div>
                <div class="member-body__img-col">
                    <img src="<?php echo get_theme_file_uri('src/images/member/furuhashi-img02.png'); ?>"
                        alt="Interview Image 02">
                </div>
            </div>

            <div class="member-body__divider"></div>

            <!-- Block 2: Image Left, Text Right -->
            <div class="member-body__row member-body__row--reverse">
                <div class="member-body__img-col">
                    <img src="<?php echo get_theme_file_uri('src/images/member/furuhashi-img03.png'); ?>"
                        alt="Interview Image 03">
                </div>
                <div class="member-body__text-col">
                    <div class="member-body__labels">
                        <span class="member-body__label">聞くべきかどうか迷ったら、聞いて欲しい。</span>
                    </div>
                    <p class="member-body__text">
                        日々の仕事は充実していますが、特にやりがいを感じるのは後輩が育ってきたとき。期待を超えてきたときや諦めずにやり遂げたとき、寄り添ってきて良かったなと感じさせてくれます。自分自身が上司や先輩にしてもらった、"なんでも聞いたら教えてくれた"ことを後輩へ還元していきたいです。接する際に気を付けている点は、普段の会話では緊張感をなくしつつ、仕事中などはときに厳しくするなど、メリハリを意識しています。どんな質問でも歓迎していますので、どうぞお気軽に。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="member-message">
        <div class="member-message__container">
            <div class="member-message__image">
                <img src="<?php echo get_theme_file_uri('src/images/member/furuhashi-img04.png'); ?>"
                    alt="Masato Furuhashi">
                <img class="member-message__logo"
                    src="<?php echo get_theme_file_uri('src/images/member/member-logo.png'); ?>" alt="">
            </div>

            <div class="member-message__heading">
                <span class="highlight">いつまでも</span><br>
                <span class="highlight">尊敬できる人間、代表佐藤</span>
            </div>

            <p class="member-message__text">
                「尊敬している人物は誰ですか？」と問われたら、「代表の佐藤です」と答えています。どこをどのように尊敬しているというよりも、人として、男として、仕事人として、尊敬できると感じています。言動が一致しているところやメンバーの迷いを減らしてくれるところ、成長の機会を設けてくれるところなど、やはり付いていきたくなる社長だなと感じています。
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