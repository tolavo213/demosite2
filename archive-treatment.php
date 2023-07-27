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
            <!-- ページ内リンクボタン -->
            <ul class="p-treatment__blue-btn-wrap">
            <?php
            $terms = get_terms('treatment-category');
            foreach ($terms as $term) : ?>
                        <li class="p-treatment__blue-btn"><a class="blue-btn" href="#p-treatment-<?php echo $term->slug;?>"><?php echo $term->name;?></a></li>
            <?php endforeach; ?>
                    </ul>

                    <?php
                    $terms = get_terms('treatment-category');
                    foreach ($terms as $term) : ?>
                    <section id="p-treatment-<?php echo $term->slug;?>" class="p-treatment-<?php echo $term->slug;?>">
                        <div class="p-treatment__section-title">
                            <img src="<?php echo get_theme_file_uri( '/img/common/title_icon.png' ); ?>" alt="渡邊脳神経外科クリニックのロゴ画像(脳のみ)"
                            class="p-treatment__section-title-img">
                            <h3 class="p-treatment__section-title-title"><?php echo $term->name;?></h3>
                            <p class="p-treatment__section-title-text"><?php echo $term->description;?></p>
                    </div>
                    <ul class="p-treatment-<?php echo $term->slug;?>__items p-treatment-items">
                    <?php
                    $args=array(
                            'taxonomy' => 'treatment-category',
                            'term'     => $term->slug,
                            'post_type' => 'treatment',
                            'posts_per_page' => -1,
                    );
                    $wp_query = new WP_Query($args);
                    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) :$wp_query->the_post();
                    ?>
                        <li class="p-treatment-item">
                            <div class="p-treatment-item__wrap">
                                <a class="p-treatment-item__link" href="<?php the_permalink();?>">
                                <?php the_post_thumbnail('post-thumbnail', array('class' => 'p-treatment-item__img', 'alt' => the_title_attribute('echo=0'))); ?>
                                </a>
                            </div>
                            <p class="p-treatment-item__title"><?php the_title();?></p>
                        </li>
                        <?php endwhile;
                        else : ?>
                            <p>まだ記事がありません</p>
                        <?php endif ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>
                </section>
                <?php endforeach; ?>
        </div>
    </main>
    <?php get_footer(); ?>