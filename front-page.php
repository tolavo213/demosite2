<?php get_header(); ?>
<main>
    <!-- mv -->
    <div class="p-top-mv">
        <div class="p-top-mv__inner">
            <div class="p-top-mv__slider swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <picture>
                            <source srcset="<?php echo get_theme_file_uri('/img/top/mv/mv1--pc.jpg'); ?>" media="(min-width: 768px)">
                            <img src="<?php echo get_theme_file_uri('/img/top/mv/mv1--sp.jpg'); ?>" alt="渡邊脳神経外科クリニックの外観">
                        </picture>
                    </div>
                    <div class="swiper-slide">
                        <picture>
                            <source srcset="<?php echo get_theme_file_uri('/img/top/mv/mv2--pc.jpg'); ?>" media="(min-width: 768px)">
                            <img src="<?php echo get_theme_file_uri('/img/top/mv/mv2--sp.jpg'); ?>" alt="MRI診断を受ける様子">
                        </picture>
                    </div>
                </div>
            </div>
            <h2 class="p-top-mv__catchcopy js-mv__catchcopy">
                <picture>
                    <source srcset="<?php echo get_theme_file_uri('/img/top/mv/mv__text--pc.png'); ?>" media="(min-width:768px)">
                    <img class="p-top-mv__catchcopy-img" src="<?php echo get_theme_file_uri('/img/top/mv/mv__text--sp.png'); ?>" alt="頭痛・めまい・物忘れ　あなたの第一の相談相手">
                </picture>
            </h2>
        </div>
    </div>

    <!-- news -->
    <section class="p-top-news">
        <div class="section-title">
            <img src="<?php echo get_theme_file_uri('/img/common/title_icon.png'); ?>" alt="渡邊脳神経外科クリニックのロゴ画像(脳のみ)" class="section-title__img">
            <p class="section-title__text">お知らせ</p>
            <p class="section-title__en">news</p>
        </div>
        <div class="p-top-news__inner">
            <ul class="p-top-news__lists">
                <?php
                if (wp_is_mobile()) {
                    $num = 3;
                } else {
                    $num = 3;
                }
                $args = [
                    'post_type' => 'post',
                    'posts_per_page' => $num,
                ];
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                        <li class="p-top-news__list">
                            <a class="p-top-news__list-link" href="<?php the_permalink(); ?>">
                                <p class="p-top-news__list-time"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time></p>
                                <p class="p-top-news__list-label">
                                <?php
                                $category = get_the_category();
                                $label_color = get_field('color', 'category_' . $category[0]->cat_ID);
                            ?>
                                <span style="border:1px solid <?php echo $label_color; ?>; color:<?php echo $label_color; ?>">
                                    <?php echo $category[0]->name ?>
                                </span>
                                <p class="p-top-news__list-title">
                                    <?php the_title(); ?>
                                </p>
                            </a>
                        </li>
                    <?php endwhile;
                else : ?>
                    <p>まだ記事がありません</p>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                <div class="p-top-news__btn-wrap">
                    <a href="<?php echo esc_url(home_url("/news")); ?>" class="btn">もっと見る</a>
                </div>
            </ul>
        </div>
    </section>
    <!-- about -->
    <section class="p-top-about">
        <div class="p-top-about__inner inner">
            <div class="p-top-about__body">
                <div class="p-top-about__img-wrap">
                    <picture>
                        <source srcset="<?php echo get_theme_file_uri('/img/top/about/about--pc.png'); ?>" media="(min-width:768px)">
                        <img src="<?php echo get_theme_file_uri('/img/top/about/about--sp.png'); ?>" alt="院内の様子と院長が笑っている様子" class="p-top-about__img">
                    </picture>
                </div>
                <div class="p-top-about__content">
                    <div class="p-top-about__content-title section-title">
                        <img src="<?php echo get_theme_file_uri('/img/common/title_icon.png'); ?>" alt="渡邊脳神経外科クリニックのロゴ画像(脳のみ)" class="section-title__img">
                        <p class="section-title__text">クリニックのご紹介</p>
                        <p class="section-title__en">about</p>
                    </div>
                    <p class="p-top-about__content-subtitle">安心して相談できるかかりつけ医</p>
                    <p class="p-top-about__content-text">地域の皆様の第一の相談相手になりたい<br>
                        頭のことなら”渡邉脳神経外科クリニック”<br>
                        そんなニーズにお応えできるクリニックを<br class="u-mobile">目指しています。
                    </p>
                    <div class="p-top-about__btn-wrap">
                        <a href="<?php echo esc_url(home_url("/about")); ?>" class="btn">もっと見る</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- treatment -->
    <section class="p-top-treatment">
        <div class="p-top-treatment__inner inner">
            <div class="p-top-treatment__body">
                <div class="p-top-treatment__img-wrap">
                    <picture>
                        <source srcset="<?php echo get_theme_file_uri('/img/top/treatment/treatment--pc.png'); ?>" media="(min-width:768px)">
                        <img src="<?php echo get_theme_file_uri('/img/top/treatment/treatment--sp.png'); ?>" alt="MIRの風景、と医師が問診をしている様子" class="p-top-treatment__img">
                    </picture>
                </div>
                <div class="p-top-treatment__content">
                    <div class="p-top-treatment__content-title section-title">
                        <img src="<?php echo get_theme_file_uri('/img/common/title_icon.png'); ?>" alt="渡邊脳神経外科クリニックのロゴ画像(脳のみ)" class="section-title__img">
                        <p class="section-title__text">診療科目</p>
                        <p class="section-title__en">treatment</p>
                    </div>
                    <p class="p-top-treatment__content-subtitle">早期発見・早期治療が<br class="u-mobile">大事な脳の病気。</p>
                    <p class="p-top-treatment__content-text">頭の専門医として、脳卒中や認知症だけではなく、<br class="u-mobile">
                        頭痛やめまい、しびれなどの<br>
                        日常的な症状まで幅広く治療を行っております。<br>
                        どんなに小さな悩みでもお気軽にご相談ください。
                    </p>
                    <div class="p-top-treatment__btn-wrap">
                        <a href="<?php echo esc_url( home_url("/treatment") ); ?>" class="btn">もっと見る</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact -->
    <section class="p-top-contact">
        <div class="p-top-contact__inner inner">
            <div class="p-top-contact__body">
                <div class="p-top-contact__img-wrap">
                    <picture>
                        <source srcset="<?php echo get_theme_file_uri('/img/top/contact/contact--pc.jpg'); ?>" media="(min-width:768px)">
                        <img src="<?php echo get_theme_file_uri('/img/top/contact/contact--sp.jpg'); ?>" alt="看護師が問診をしている様子" class="p-top-contact__img">
                    </picture>
                </div>
                <div class="p-top-contact__content">
                    <div class="p-top-contact__content-title section-title">
                        <img src="<?php echo get_theme_file_uri('/img/common/title_icon.png'); ?>" alt="渡邊脳神経外科クリニックのロゴ画像(脳のみ)" class="section-title__img">
                        <p class="section-title__text">お問い合わせ</p>
                        <p class="section-title__en">contact</p>
                    </div>
                    <p class="p-top-contact__content-text">当クリニックは地域の皆様の第一の相談相手を<br class="u-mobile">
                        目指しております。<br>
                        何でもお気軽にお問合せください。
                    </p>
                    <div class="p-top-contact__btn-wrap">
                        <a href="<?php echo esc_url(home_url("/contact")); ?>" class="btn">お問い合わせへ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- access -->
    <section class="p-top-access">
        <div class="inner">
            <div class="section-title">
                <img src="<?php echo get_theme_file_uri('/img/common/title_icon.png'); ?>" alt="渡邊脳神経外科クリニックのロゴ画像(脳のみ)" class="section-title__img">
                <p class="section-title__text">アクセス</p>
                <p class="section-title__en">access</p>
            </div>
            <div class="p-top-access__googlemap-wrap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.4631889340753!2d130.34663908561018!3d33.59328450457495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354193aa23040001%3A0xf9743b36617a912d!2z56aP5bKh44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1689956716180!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <p class="p-top-access__text">
                病院の敷地内に6台の駐車スペースを<br class="u-mobile">
                ご用意しております。<br>
                ※駐車場内での事故等のトラブルについては一切責任を負いかねます。あらかじめご了承ください。
            </p>
            <table class="p-top-access__timetable">
                <thead>
                    <tr class="row1">
                        <th>診療時間</th>
                        <td>月</td>
                        <td>火</td>
                        <td>水</td>
                        <td>木</td>
                        <td>金</td>
                        <td><span class="saturday">土</span></td>
                        <td><span class="sunday">日</span></td>
                    </tr>
                </thead>
                <tbody>
                    <tr class="row2">
                        <th>10:00~12:30</th>
                        <td><span class="open"></span></td>
                        <td><span class="open"></span></td>
                        <td><span class="open"></span></td>
                        <td><span class="open"></span></td>
                        <td><span class="open"></span></td>
                        <td><span class="open"></span></td>
                        <td><span class="close"></span></td>
                    </tr>
                    <tr class="row3">
                        <th>14:00~17:00</th>
                        <td><span class="open"></span></td>
                        <td><span class="open"></span></td>
                        <td><span class="open"></span></td>
                        <td><span class="close"></span></td>
                        <td><span class="open"></span></td>
                        <td><span class="close"></span></td>
                        <td><span class="close"></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</main>
<?php get_footer(); ?>