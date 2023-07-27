<?php
/*
Template Name: 診療科目詳細
*/
get_header();
?>
    <!-- 下層ページ header -->
    <div class="subpage-header subpage-header--treatment">
        <h2 class="subpage-header__en-title">treatment</h2>
        <h2 class="subpage-header__title">診療科目</h2>
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
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <article class="p-treatment-detail">
                <div class="p-treatment-detail__img-wrap">
                    <?php the_post_thumbnail('post-thumbnail', array('class' => 'p-treatment-detail__img', 'alt' => the_title_attribute('echo=0'))); ?>
                </div>
                <h3 class="p-treatment-detail__title"><?php the_title();?></h3>
                <p class="p-treatment-detail__text">
                    <?php the_content(); ?>
                </p>
                <div class="p-treatment-detail__blue-btn"><a class="blue-btn" href="<?php echo esc_url(home_url("/treatment")); ?>">診療科目一覧へ</a></div>
            </article>
            <?php endwhile;
                else : ?>
                    <p>まだ記事がありません</p>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
        </div>
    </main>
    <?php get_footer(); ?>