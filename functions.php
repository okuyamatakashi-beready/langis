<?php
/**
 * Theme Functions
 */

// ViteのDevサーバーが動いているかどうか判定 (簡易的な方法)
// 本番運用時はこの判定ロジックをより厳密にすることをお勧めします
// 開発環境と本番環境の自動判定
// localhostが含まれる、またはIPがローカルの場合のみ開発モード(true)にする
// shared hosting (XServer)などでREMOTE_ADDRが127.0.0.1になる可能性があるためIP判定は削除し、
// HTTP_HOSTのみで判定します。 (localhost または langis を含む場合)
// Enable error logging for debugging (safe to leave in dev/staging)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// localhostが含まれる、またはIPがローカルの場合判定（修正版）
$http_host = $_SERVER['HTTP_HOST'] ?? '';
$is_local = false;

if (strpos($http_host, 'localhost') !== false) {
    $is_local = true;
} elseif (strpos($http_host, 'langis') !== false) {
    // ステージング環境(stg-)や本番ドメイン(llc-beready)を除外する
    if (strpos($http_host, 'stg-') === false && strpos($http_host, 'llc-beready') === false) {
        $is_local = true;
    }
}

define('IS_VITE_DEVELOPMENT', $is_local);

function langis_enqueue_scripts()
{
    // 開発環境（Vite Dev Server）
    if (defined('IS_VITE_DEVELOPMENT') && IS_VITE_DEVELOPMENT) {

        // Viteクライアントの読み込み (HMR用)
        wp_enqueue_script('vite-client', 'http://localhost:3000/@vite/client', [], null, true);

        // エントリーポイントの読み込み
        wp_enqueue_script('langis-main', 'http://localhost:3000/src/main.js', [], null, true);

    } else {
        // 本番環境（ビルド後）
        $manifest_path = get_theme_file_path('dist/.vite/manifest.json');

        if (file_exists($manifest_path)) {
            // Manifest loading (Primary method)
            $manifest_content = file_get_contents($manifest_path);
            $manifest = json_decode($manifest_content, true);

            if (is_array($manifest) && isset($manifest['src/main.js']['file'])) {
                $js_file = $manifest['src/main.js']['file'];

                // Load all CSS files associated with the entry
                if (isset($manifest['src/main.js']['css']) && is_array($manifest['src/main.js']['css'])) {
                    foreach ($manifest['src/main.js']['css'] as $index => $css_file) {
                        wp_enqueue_style('langis-style-' . $index, get_theme_file_uri('dist/' . $css_file), [], null);
                    }
                }

                wp_enqueue_script('langis-main', get_theme_file_uri('dist/' . $js_file), [], null, true);
            }
        } else {
            // Fallback: Scan dist/assets for any .css and .js files
            // This handles cases where .vite/manifest.json is missing on server
            $asset_dir = get_theme_file_path('dist/assets');
            $asset_uri = get_theme_file_uri('dist/assets');

            if (is_dir($asset_dir)) {
                $files = scandir($asset_dir);
                foreach ($files as $file) {
                    if (pathinfo($file, PATHINFO_EXTENSION) === 'css') {
                        wp_enqueue_style('langis-style-fallback', $asset_uri . '/' . $file, [], null);
                    }
                    if (pathinfo($file, PATHINFO_EXTENSION) === 'js') {
                        wp_enqueue_script('langis-main-fallback', $asset_uri . '/' . $file, [], null, true);
                    }
                }
            }
        }
    }
}
add_action('wp_enqueue_scripts', 'langis_enqueue_scripts');

// Vite用のスクリプトに type="module" を付与する
function langis_add_type_attribute($tag, $handle, $src)
{
    if ($handle === 'vite-client' || $handle === 'langis-main') {
        return '<script type="module" src="' . esc_url($src) . '"></script>';
    }
    return $tag;
}
add_filter('script_loader_tag', 'langis_add_type_attribute', 10, 3);

function langis_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'langis_setup');

// 初回有効化時などに必要な固定ページを自動生成する
function langis_create_pages()
{
    $pages = [
        ['slug' => 'about', 'title' => 'About Us'],
        ['slug' => 'service', 'title' => 'Service'],
        ['slug' => 'company', 'title' => 'Company'],
        ['slug' => 'gallery', 'title' => 'Gallery'],
        ['slug' => 'contact', 'title' => 'Contact'],
    ];

    foreach ($pages as $page) {
        $existing_page = get_page_by_path($page['slug']);
        if (!$existing_page) {
            wp_insert_post([
                'post_title' => $page['title'],
                'post_name' => $page['slug'],
                'post_status' => 'publish',
                'post_type' => 'page',
                'post_content' => '', // テンプレート側で表示するので空でOK
            ]);
        }
    }
}
add_action('init', 'langis_create_pages');
