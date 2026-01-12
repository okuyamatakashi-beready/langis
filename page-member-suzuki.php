<?php
/**
 * Template Name: Member Detail Page
 * Template Post Type: page
 */
get_header();

global $post;
// $slug = $post->post_name; // No longer needed as this is specific

$member_data = [
    'en_name' => 'Hironori Suzuki',
    'jp_name' => '鈴木 宏典',
    'dept' => '第二営業部',
    'position' => '部長',
    'date' => '2023年10月',
    'content' => '
        <h2>Vision & Leadership</h2>
        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
    ',
    'image_url' => get_theme_file_uri('src/images/member/suzuki-mv.png'),
    'number' => '01'
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
                <h1 class="member-hero__number"><?php echo esc_html($member_data['number']); ?></h1>
                <div class="member-hero__names">
                    <p class="member-hero__en-name"><?php echo esc_html($member_data['en_name']); ?></p>
                    <p class="member-hero__jp-name"><?php echo esc_html($member_data['jp_name']); ?></p>
                </div>
                <div class="member-hero__meta">
                    <?php if (!empty($member_data['dept'])): ?>
                        <dl>
                            <dt>部署:</dt>
                            <dd><?php echo esc_html($member_data['dept']); ?></dd>
                        </dl>
                    <?php endif; ?>
                    <?php if (!empty($member_data['position'])): ?>
                        <dl>
                            <dt>役職:</dt>
                            <dd><?php echo esc_html($member_data['position']); ?></dd>
                        </dl>
                    <?php endif; ?>
                    <?php if (!empty($member_data['date'])): ?>
                        <dl>
                            <dt>入社年月:</dt>
                            <dd><?php echo esc_html($member_data['date']); ?></dd>
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
            <h2 class="member-body__heading">社内外をつなぐ調整力に自信あり。<br>最適なバランスを目指す</h2>

            <!-- Block 1: Text Left, Image Right -->
            <div class="member-body__row">
                <div class="member-body__text-col">
                    <div class="member-body__labels">
                        <span class="member-body__label">自分らしくいられるし、</span>
                        <span class="member-body__label">周りが自分を理解してくれる。</span>
                    </div>
                    <p class="member-body__text">
                        前職を辞めたタイミングで次に何をしようかと模索していたところ、自社の在籍社員と出会い、明るくイキイキと働いて楽しそうにしていたため、入社したいと思ったのがキッカケです。入社してみると、ただ仲が良いだけではなく、しっかりと意見を言い合えたり困りごとを相談できたり、とても頼りになっています。皆、良い意味であまり役職や上下関係は意識していないのは、ランギスの特徴かもしれません。意見は言いやすい環境だと思いますし、後輩が先輩をイジる瞬間がたくさんあると思いますよ。
                    </p>
                </div>
                <div class="member-body__img-col">
                    <img src="<?php echo get_theme_file_uri('src/images/member/suzuki-img02.png'); ?>"
                        alt="Interview Image 02">
                </div>
            </div>

            <div class="member-body__divider"></div>

            <!-- Block 2: Image Left, Text Right -->
            <div class="member-body__row member-body__row--reverse">
                <div class="member-body__img-col">
                    <img src="<?php echo get_theme_file_uri('src/images/member/suzuki-img03.png'); ?>"
                        alt="Interview Image 03">
                </div>
                <div class="member-body__text-col">
                    <div class="member-body__labels">
                        <span class="member-body__label">当たり前のことを当たり前に、丁寧に。</span>
                    </div>
                    <p class="member-body__text">
                        やりがいを感じるのは、取引先の要望に対してしっかりと成果が出せた瞬間ですね。その中で後輩や普段関わっている方の成長を感じる時は、この仕事をやっていて良かったなと素直に感じられます。後輩へのフォローで気にかけている点は、悪いところを指摘するだけではなく、良い部分を伸ばすこと。自分自身も褒められる方がやる気に繋がるので、後輩にもそうしたいなとは持っています。そんななか、人に対して思いやりのある発言や行動をしてくれたときは、成長を感じますね。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="member-message">
        <div class="member-message__container">
            <div class="member-message__image">
                <img src="<?php echo get_theme_file_uri('src/images/member/suzuki-img04.png'); ?>"
                    alt="Hironori Suzuki">
                <img class="member-message__logo"
                    src="<?php echo get_theme_file_uri('src/images/member/member-logo.png'); ?>" alt="">
            </div>

            <div class="member-message__heading">
                <span class="highlight">先輩からも後輩からも</span><br>
                <span class="highlight">助けてもらえる幸せ者です。</span>
            </div>

            <p class="member-message__text">
                ランギスのなかで自分の役割は、一言で言うと調整役。取引先の方からさまざまな要望をいただき、それを結果や数字でお応えできるように社内の取り組みや共有をする役割です。メンバーのことは全員それぞれ尊敬しています！
                誰かひとりに決めることは難しいですね。自分はあまり仕事ができる方ではないので、先輩後輩関わらず皆に助けてもらうことが多いので特にそう感じています。
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