<?php
/*
Template Name: クリニックのご紹介
*/
get_header();
?>
<!-- 下層ページ header -->
<div class="subpage-header subpage-header--about">
    <h2 class="subpage-header__en-title">about</h2>
    <h2 class="subpage-header__title">クリニックのご紹介</h2>
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
    <!-- 院長紹介 -->
    <section class="p-about-director-intro">
        <div class="inner">
            <h3 class="p-about-director-intro__title">院長紹介</h3>
            <div class="p-about-director-intro__img-wrap">
                <img class="p-about-director-intro__img" src="<?php echo get_theme_file_uri('/img/about/about_head-doctor.jpg'); ?>" alt="院長先生が微笑んでいる様子">
            </div>
            <div class="p-about-director-intro__content">
                <p class="p-about-director-intro__text">院長の渡邊和則と申します。</p>
                <p class="p-about-director-intro__text">平成10年に医師免許を取得し、その後脳神経外科専門医を取得。</p>
                <p class="p-about-director-intro__text">
                    大学病院や総合病院での経験を経て、平成20年に日本脳卒中学会脳卒中専門医を取得。平成28年、福岡市に「渡邉脳神経外科クリニック」を開院させていただくことになりました。</p>
                <p class="p-about-director-intro__text p-about-director-intro__text--large">“あなたの第一の相談相手”</p>
                <p class="p-about-director-intro__text">当クリニックではつらい症状から些細な症状まで気軽に受診できる、地域に密着したクリニックを目指しております。
                </p>
                <p class="p-about-director-intro__text">
                    ちょっとした軽い症状を放置し、取り返しのつかない事態となることも少なくありません。どんなに些細な症状や心配事でも構いませんので、どうぞお気軽に受診ください。</p>
                <p class="p-about-director-intro__sign">渡邉脳神経外科クリニック院長</p>
                <img src="<?php echo get_theme_file_uri('/img/about/about_head-doctor_sign.png'); ?>" alt="渡邊和則と書かれた直筆サイン" class="p-about-director-intro__sign-img">
            </div>
        </div>
    </section>
    <!-- 院内紹介 -->
    <section class="p-about-clinic-intro">
        <div class="inner">
            <h3 class="p-about-clinic-intro__title">院内紹介</h3>
            <div class="p-about-clinic-intro__text-wrap">
                <p class="p-about-clinic-intro__text">ご来院の皆さまがリラックスして診察を受けていただけるよう、木目を基調とした清潔感ある<br class="u-desktop">落ち着いた空間造りを目指しています。
                </p>
                <p class="p-about-clinic-intro__text">最新の装置を導入し、異常の早期発見、早期対応ができるように努めています。</p>
                <p class="p-about-clinic-intro__text">他の医療機関とも連携体制を構築し、患者様に適切な医療を提供いたします。</p>
            </div>
            <div class="p-about-clinic-intro__img-wrap">
                <img src="<?php echo get_theme_file_uri('/img/about/about_hospital_1.jpg'); ?>" alt="病院内受付の様子" class="p-about-clinic-intro__img">
                <img src="<?php echo get_theme_file_uri('/img/about/about_hospital_2.jpg'); ?>" alt="病院内廊下の様子" class="p-about-clinic-intro__img">
                <img src="<?php echo get_theme_file_uri('/img/about/about_hospital_3.jpg'); ?>" alt="病院内待合室の様子" class="p-about-clinic-intro__img">
                <img src="<?php echo get_theme_file_uri('/img/about/about_hospital_4.jpg'); ?>" alt="院長先生が男性に問診している様子" class="p-about-clinic-intro__img">
                <img src="<?php echo get_theme_file_uri('/img/about/about_hospital_5.jpg'); ?>" alt="診察台の様子" class="p-about-clinic-intro__img">
                <img src="<?php echo get_theme_file_uri('/img/about/about_hospital_6.jpg'); ?>" alt="MRIの様子" class="p-about-clinic-intro__img">
            </div>
        </div>

    </section>

</main>
<?php get_footer(); ?>