<?php
/**
 * Template Name: Member Detail Page (Sebe)
 * Template Post Type: page
 */
get_header();

global $post;
// $slug = $post->post_name; // No longer needed as this is specific

$member_data = [
    'en_name' => 'Takuya Sebe',
    'jp_name' => '瀬邉 拓也',
    'dept' => '第二営業部',
    'position' => '課長',
    'date' => '2021年4月',
    'content' => '
        <h2>Vision & Leadership</h2>
        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
    ',
    'image_url' => get_theme_file_uri('src/images/member/sebe-mv.png'),
    'number' => '02'
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
            <h2 class="member-body__heading">便利屋として、アタッカーとして。<br>切り込みます、どこへでも。</h2>

            <!-- Block 1: Text Left, Image Right -->
            <div class="member-body__row">
                <div class="member-body__text-col">
                    <div class="member-body__labels">
                        <span class="member-body__label">任せてもらえる信頼と期待と。</span>
                        <span class="member-body__label">責任を背負って。</span>
                    </div>
                    <p class="member-body__text">
                        学生時代から代表の坂とは付き合いがあり、年齢に関係なく切磋琢磨していく仲。以前の会社では、現場での叩き上げのようなイメージでガツガツ数字を追うタイプでした。色々な経験を経て、新しい環境に挑戦したい、会社の成長に寄与できる存在になりたい、そう思えたのがランギス入社のキッカケです。自分を雇い入れてくれたこと、代表からの「お前、頼むな」と言う言葉に応える為に、何でもやるつもりでいます！「これは無理だろう」と言われるような壁こそ、ぶち壊しにいくのが私のスタイル。
                    </p>
                </div>
                <div class="member-body__img-col">
                    <img src="<?php echo get_theme_file_uri('src/images/member/sebe-img02.png'); ?>"
                        alt="Interview Image 02">
                </div>
            </div>

            <div class="member-body__divider"></div>

            <!-- Block 2: Image Left, Text Right -->
            <div class="member-body__row member-body__row--reverse">
                <div class="member-body__img-col">
                    <img src="<?php echo get_theme_file_uri('src/images/member/sebe-img03.png'); ?>"
                        alt="Interview Image 03">
                </div>
                <div class="member-body__text-col">
                    <div class="member-body__labels">
                        <span class="member-body__label">バックリから詳細を埋める、</span>
                        <span class="member-body__label">点と線をつなぐ。</span>
                    </div>
                    <p class="member-body__text">
                        マネージャーの坂や高橋が案件をとってくる、いわゆる「点」を打つ人であれば、私はその点と点をつなぐ役割を担っています。日々現場に飛び込みつつ、今足りていない点、やるべき事、現場への落とし込みなどを徹底する。クリエイティブな発想も大事ですが、しっかりとした計画と実行力が無ければ絵に描いた餅になってしまう。感覚的なアイデアを具体的な行動や数値に落とし込み、プロジェクトごとに「どう動くことが最速で成果を出せるか」をシビアに考え、スタッフが安心して走っていける、加速していけるような、そんな道を作るのが私の仕事です。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="member-message">
        <div class="member-message__container">
            <div class="member-message__image">
                <img src="<?php echo get_theme_file_uri('src/images/member/sebe-img04.png'); ?>" alt="Takuya Sebe">
                <img class="member-message__logo"
                    src="<?php echo get_theme_file_uri('src/images/member/member-logo.png'); ?>" alt="">
            </div>

            <div class="member-message__heading">
                <span class="highlight">適材適所、得手不得手を理解して</span><br>
                <span class="highlight">最大出力を出せる環境</span>
            </div>

            <p class="member-message__text">
                基本的にランギスのメンバーのことは全幅の信頼を置いています。個々に尖った才能持っているメンバーが集まっているからこそ、得意不得意は当然ありますが、みんながお互いの背中を預けあっています。だから私も含め、いつも笑顔でいられる！
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