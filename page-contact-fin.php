<?php
/*
Template Name: お問い合わせ完了
*/
get_header();
?>
    <!-- 下層ページ header -->
    <div class="subpage-header subpage-header--contact">
        <h2 class="subpage-header__en-title">contact</h2>
        <h2 class="subpage-header__title">お問い合わせ完了</h2>
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
        <section class="p-contact-fin">
            <div class="p-contact-fin__inner inner">
                <img src="<?php echo get_theme_file_uri( '/img/common/title_icon.png' ); ?>" alt="渡邊脳神経外科クリニックのロゴ画像(脳のみ)" class="p-contact-fin__img">
                <h3 class="p-contact-fin__title">送信完了</h3>
                <p class="p-contact-fin__text">
                    この度はお問い合わせいただき、有難うございました。<br>
                    3営業日以内にご返信させていただきますので、しばらくお待ちくださいませ。
                </p>
                <a href="<?php echo esc_url( home_url() ); ?>" class="p-contact-fin__btn blue-btn">ホームへ戻る</a>
            </div>

        </section>
    </main>
    <?php get_footer(); ?>