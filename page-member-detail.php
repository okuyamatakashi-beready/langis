<?php
/**
 * Template Name: Member Detail Page
 * Template Post Type: page
 */
get_header();

global $post;
$slug = $post->post_name;

// Define content based on slug
$member_data = [];

switch ($slug) {
    case '01':
        $member_data = [
            'title' => 'Member 01',
            'position' => 'CEO / Founder',
            'content' => '
                <h2>Vision & Leadership</h2>
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            ',
            'image_url' => '', // Add image URL later
        ];
        break;
    case '02':
        $member_data = [
            'title' => 'Member 02',
            'position' => 'CTO / Lead Engineer',
            'content' => '
                <h2>Technology & Innovation</h2>
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            ',
            'image_url' => '',
        ];
        break;
    case '03':
        $member_data = [
            'title' => 'Member 03',
            'position' => 'Creative Director',
            'content' => '
                <h2>Design & Creativity</h2>
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            ',
            'image_url' => '',
        ];
        break;
    case '04':
        $member_data = [
            'title' => 'Member 04',
            'position' => 'Marketing Manager',
            'content' => '
                <h2>Growth & Strategy</h2>
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            ',
            'image_url' => '',
        ];
        break;
    default:
        // Fallback or 404 behavior
        $member_data = [
            'title' => 'Member Not Found',
            'position' => '',
            'content' => '<p>指定されたメンバーが見つかりませんでした。</p>',
            'image_url' => '',
        ];
        break;
}
?>

<main class="l-main">
    <article class="member-single">

        <header class="member-single__header">
            <div class="container mb-container">
                <h1 class="member-single__title">
                    <?php echo esc_html($member_data['title']); ?>
                </h1>
                <?php if ($member_data['position']): ?>
                    <p class="member-single__position">
                        <?php echo esc_html($member_data['position']); ?>
                    </p>
                <?php endif; ?>
            </div>
        </header>

        <div class="member-single__content">
            <div class="container mb-container">
                <!-- Main Image -->
                <?php if ($member_data['image_url']): ?>
                    <div class="member-single__main-image">
                        <img src="<?php echo esc_url($member_data['image_url']); ?>"
                            alt="<?php echo esc_attr($member_data['title']); ?>">
                    </div>
                <?php else: ?>
                    <div class="member-single__main-image"
                        style="background-color: #eee; height: 300px; display: flex; align-items: center; justify-content: center; color: #999;">
                        No Image
                    </div>
                <?php endif; ?>

                <div class="member-single__body">
                    <?php echo $member_data['content']; // Outputting HTML directly ?>
                </div>

                <div class="member-single__footer">
                    <a href="<?php echo home_url('/member/'); ?>" class="c-button-back">
                        一覧に戻る
                    </a>
                </div>
            </div>
        </div>

    </article>
</main>

<?php get_footer(); ?>