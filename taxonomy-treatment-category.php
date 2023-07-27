<?php
/*
Template Name: 診療科目一覧ページ
*/
get_header();
?>
<!-- 下層ページ header -->
<div class="subpage-header subpage-header--treatment">
    <h2 class="subpage-header__en-title">treatment</h2>
    <h2 class="subpage-header__title">診療科目</h2>
</div>
<div class="breadcrumbs-wrap inner">
    <ul class="breadcrumbs">
        <?php
        if (function_exists('bcn_display')) {
            bcn_display();
        }
        ?>
    </ul>
</div>
<main>
    <div class="inner">
        <?php
        $current_page_id = get_the_ID();
        $terms = get_the_terms($current_page_id, 'treatment-category');
        ?>
        <?php foreach ($terms as $term) : ?>
            <section id="p-treatment-<?php echo $term->slug; ?>" class="p-treatment-<?php echo $term->slug; ?> p-treatment-category">
                <div class="p-treatment__section-title">
                    <img src="<?php echo get_theme_file_uri('/img/common/title_icon.png'); ?>" alt="渡邊脳神経外科クリニックのロゴ画像(脳のみ)" class="p-treatment__section-title-img">
                    <h3 class="p-treatment__section-title-title"><?php echo $term->name; ?></h3>
                    <p class="p-treatment__section-title-text"><?php echo $term->description; ?></p>
                </div>
            <?php endforeach; ?>
            <ul class="p-treatment-<?php echo $term->slug; ?>__items p-treatment-items">
                <?php
                if (wp_is_mobile()) {
                    $num = 4;
                } else {
                    $num = 8;
                }
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $type = get_query_var('treatment-category');
                $args = [
                    'post_type' => 'treatment',
                    'posts_per_page' => $num,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'treatment-category',
                            'field' => 'slug',
                            'terms' => $type,
                        ),
                    )
                ];
                $wp_query = new WP_Query($args);
                if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <li class="p-treatment-item">
                            <div class="p-treatment-item__wrap">
                                <a class="p-treatment-item__link" href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('post-thumbnail', array('class' => 'p-treatment-item__img', 'alt' => the_title_attribute('echo=0'))); ?>
                                </a>
                            </div>
                            <p class="p-treatment-item__title"><?php the_title(); ?></p>
                        </li>
                    <?php endwhile;
                else : ?>
                    <p>まだ記事がありません</p>
                <?php endif ?>
                <?php wp_reset_postdata(); ?>
            </ul>
            </section>
    </div>
</main>
<?php get_footer(); ?>