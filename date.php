<?php
/*
Template Name: お知らせ月別
*/
get_header();
?>
<!-- 下層ページ header -->
<div class="subpage-header subpage-header--news">
    <h2 class="subpage-header__en-title">news</h2>
    <h2 class="subpage-header__title">お知らせ</h2>
</div>
<div class="breadcrumbs-wrap inner">
    <div class="breadcrumbs">
        <?php
        if (function_exists('bcn_display')) {
            bcn_display();
        }
        ?>
    </div>
</div>
<main>
    <div class="inner">
        <div class="p-news-container">
            <!-- newsリスト一覧 -->
            <ul class="p-news-lists">
                <?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                ?>
                <?php
                if (wp_is_mobile()) {
                    $num = 5; // スマホの表示数(全件は-1)
                } else {
                    $num = 5; // PCの表示数(全件は-1)
                }
                $args = array(
                    'post_type' => array('post'), // 投稿タイプのスラッグ(通常投稿なので'post')
                    'paged' => $paged, // ページネーションがある場合に必要
                    'posts_per_page' => $num, // 表示件数（変更不要）
                );
                $wp_query = new WP_Query($args);
                if ($wp_query->have_posts()) : while ($wp_query->have_posts()) :
                    $wp_query->the_post();
                    ?>
                        <li class="p-news-list">
                            <a class="p-news-list__link" href="<?php the_permalink(); ?>">
                                <?php
                                $label_color = get_field('color', 'category_' . get_the_category()[0]->cat_ID);
                                ?>
                                <p class="p-news-list__label" style="border:1px solid <?php echo $label_color; ?>; color:<?php echo $label_color; ?>">
                                    <?php
                                    $category = get_the_category();
                                    echo $category[0]->name;
                                    ?>
                                </p>
                                <p class="p-news-list__title">
                                    <?php the_title(); ?>
                                </p>
                                <p class="p-news-list__time">
                                    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                                </p>
                                <div class="p-news-list__img-wrap">
                                    <?php the_post_thumbnail('post-thumbnail', array('class' => 'p-news-list__img', 'alt' => the_title_attribute('echo=0'))); ?>
                                </div>
                            </a>
                        </li>
                    <?php endwhile;
                else : ?>
                    <p>まだ記事がありません</p>
                <?php endif ?>
                <?php wp_reset_postdata(); ?>
            </ul>
            <!-- ページネーション -->
            <div class="p-news-pagination">
                <?php
                $args = array(
                    'mid_size' => 1,
                    'prev_text' => '',
                    'next_text' => '',
                    'screen_reader_text' => ' ',
                );
                the_posts_pagination($args);
                ?>
            </div>
            <!-- サイドバー -->
            <?php if (is_active_sidebar('main-sidebar')) : ?>
                <ul class="sidebar p-news-sidebar">
                    <?php dynamic_sidebar('main-sidebar'); ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>