<?php
/*
Template Name: お問い合わせ
*/
get_header();
?>
<!-- 下層ページ header -->
<div class="subpage-header subpage-header--contact">
    <h2 class="subpage-header__en-title">contact</h2>
    <h2 class="subpage-header__title">お問い合わせ</h2>
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
    <section class="p-contact-form">
        <div class="inner">
            <div class="p-contact-form__section-title">
                <img src="<?php echo get_theme_file_uri('/img/common/title_icon.png'); ?>" alt="渡邊脳神経外科クリニックのロゴ画像(脳のみ)" class="p-contact-form__section-title-img">
                <h3 class="p-contact-form__section-title-title">お問い合わせフォーム</h3>
                <p class="p-contact-form__section-title-text">ご質問、ご要望、ご相談は下記フォームをご利用ください。<br>
                    ※体調に不安がある方は、直接医師の診察をお勧めします。
                </p>
            </div>
            <?php echo do_shortcode('[contact-form-7 id="69" title="お問い合わせフォーム"]'); ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>