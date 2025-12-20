<?php
/**
 * Theme Functions
 */

// ViteのDevサーバーが動いているかどうか判定 (簡易的な方法)
// 本番運用時はこの判定ロジックをより厳密にすることをお勧めします
// 開発環境と本番環境の自動判定
// localhostが含まれる、またはIPがローカルの場合のみ開発モード(true)にする
// shared hosting (XServer)などでREMOTE_ADDRが127.0.0.1になる可能性があるためIP判定は削除
$is_local = strpos($_SERVER['HTTP_HOST'], 'localhost') !== false;
define('IS_VITE_DEVELOPMENT', $is_local);

function langis_enqueue_scripts()
{
    // 開発環境（Vite Dev Server）
    if (defined('IS_VITE_DEVELOPMENT') && IS_VITE_DEVELOPMENT) {

        // Viteクライアントの読み込み (HMR用)
        wp_enqueue_script('vite-client', 'http://localhost:3000/@vite/client', [], null, true);

        // エントリーポイントの読み込み
        wp_enqueue_script('langis-main', 'http://localhost:3000/src/main.js', [], null, true);

        // SCSSもJS内でimportしていればViteが注入しますが、依存関係として定義
        // wp_enqueue_style('langis-style', 'http://localhost:3000/src/scss/style.scss', [], null);

    } else {
        // 本番環境（ビルド後）
        // dist/manifest.json を読み込んでファイル名を特定するのが正解ですが、
        // 簡易的に直接読み込むか、manifest読み込みロジックを実装します。

        $manifest_path = get_theme_file_path('dist/.vite/manifest.json');

        if (file_exists($manifest_path)) {
            // Manifest loading (Primary method)
            $manifest = json_decode(file_get_contents($manifest_path), true);
            $js_file = $manifest['src/main.js']['file'];
            $css_file = $manifest['src/main.js']['css'][0] ?? null;

            if ($css_file) {
                wp_enqueue_style('langis-style', get_theme_file_uri('dist/' . $css_file), [], null);
            }
            wp_enqueue_script('langis-main', get_theme_file_uri('dist/' . $js_file), [], null, true);
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
