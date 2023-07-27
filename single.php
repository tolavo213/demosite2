<?php
/*
Template Name: お知らせ詳細ページ
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
            <div class="p-news-detail-container">
                <!-- 記事 -->
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <article class="p-news-detail-content__wrap">
                    <div class="p-news-detail-content">
                        <div class="p-news-detail-content__img-wrap">
                            <?php the_post_thumbnail('post-thumbnail', array('class' => 'p-news-detail-content__img', 'alt' => the_title_attribute('echo=0'))); ?>
                        </div>
                        <p class="p-news-detail-content__label u-desktop">
                            <?php
                                $category = get_the_category();
                                $label_color = get_field('color', 'category_' . $category[0]->cat_ID);
                            ?>
                            <span style="border:1px solid <?php echo $label_color; ?>; color:<?php echo $label_color; ?>">
                                    <?php echo $category[0]->name ?>
                            </span>
                        </p>
                        <p class="p-news-detail-content__time u-desktop">
                            <time datetime="<?php the_time('Y-m-d'); ?>">
                                <?php the_time('Y.m.d'); ?>
                            </time>
                        </p>
                        <p class="p-news-detail-content__title">
                            <?php the_title(); ?>
                        </p>
                        <div class="p-news-detail-content__main">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </article>
                <?php endwhile;
                else : ?>
                    <p>まだ記事がありません</p>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                <!-- ページネーション -->
                <div class="p-news-detail-pagination">
                    <?php
                    $args = array(
                        'mid_size' => 1,
                        'prev_text' => '前の記事',
                        'next_text' => '後の記事',
                        'screen_reader_text' => ' ',
                    );
                    the_posts_pagination($args);
                    ?>
                    <div class="p-news-detail-pagination__item p-news-detail-pagination__item--btn">
                        <a class="blue-btn" href="<?php echo esc_url(home_url("/news")); ?>">お知らせ一覧へ</a>
                    </div>
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