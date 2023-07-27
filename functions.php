<?php
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // titleタグ自動生成
  add_theme_support('html5', array( // HTML5による出力
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
}
add_action('after_setup_theme', 'my_setup'); ?>

<?php
/* CSSとJavaScriptの読み込み */
function my_script_init()
{ // WordPressに含まれているjquery.jsを読み込まない
  wp_deregister_script('jquery');
  // jQueryの読み込み
  wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.6.1.min.js', "", "1.0.1", true);
  wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array('jquery'), '1.0.1', true);
  wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.1', true);
  wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', array(), '1.0.1');
  wp_enqueue_style('style-css', get_template_directory_uri() . '/css/style.css', array(), '1.0.1');
}
add_action('wp_enqueue_scripts', 'my_script_init'); ?>

<?php
function my_theme_widgets_init()
{
  register_sidebar(array(
    'name' => 'Main Sidebar',
    'id' => 'main-sidebar',
  ));
}
add_action('widgets_init', 'my_theme_widgets_init');
?>

<?php
function custom_taxonomy()
{
  $labels = array(
    'name'              => 'Treatment Categories',
    'singular_name'     => 'Treatment Category',
    'search_items'      => 'Search Categories',
    'all_items'         => 'All Categories',
    'parent_item'       => 'Parent Category',
    'parent_item_colon' => 'Parent Category:',
    'edit_item'         => 'Edit Category',
    'update_item'       => 'Update Category',
    'add_new_item'      => 'Add New Category',
    'new_item_name'     => 'New Category Name',
    'menu_name'         => 'Treatment Categories',
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array('slug' => 'treatment-category'),
  );

  register_taxonomy('treatment-category', array('treatment'), $args);
}
add_action('init', 'custom_taxonomy');
?>

<!-- Contact Form 7で自動挿入されるPタグ、brタグを削除 -->
<?php
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
  return false;
}
?>


<?php
// wp_nav_menuのliにclass追加
function add_additional_class_on_li($classes, $item, $args)
{
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// wp_nav_menuのaにclass追加
function add_additional_class_on_a($classes, $item, $args)
{
  if (isset($args->add_a_class)) {
    $classes['class'] = $args->add_a_class;
  }
  return $classes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);
?>

<?php
function exclude_taxonomy_from_breadcrumbs($trail, $type_object)
{
  // 除外するカスタム投稿タイプのスラッグと、除外したいタクソノミーのスラッグを指定
  $excluded_post_type = 'treatment';
  $excluded_taxonomy = 'treatment-category';

  if ($type_object->name === $excluded_post_type && is_tax($excluded_taxonomy)) {
    // タクソノミーページを除外する場合は、パンくずリストから除外
    unset($trail->trail['tax-' . $excluded_taxonomy]);
  }

  return $trail;
}
add_filter('bcn_breadcrumb_trail', 'exclude_taxonomy_from_breadcrumbs', 10, 2);
?>