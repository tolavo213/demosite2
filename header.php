<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <!-- 納品時には削除 -->
    <meta name="robots" content="noindex,nofollow" />

    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <!-- meta情報 -->
    <title>渡邉脳神経外科クリニック</title>
    <!-- <meta name="description" content="" />
    <meta name="keywords" content="" /> -->
    <meta name=“robots” content=“noindex” />
    <!-- ogp -->
    <!-- <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" /> -->
    <!-- ファビコン -->
    <!-- <link rel="shortcut icon" href="#" type="image/x-icon" /> -->
    <!-- フォント -->
    <script>
        (function(d) {
            var config = {
                    kitId: 'njf6rte',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
    </script>
    <?php wp_head(); ?>
</head>

<body>
    <!-- header -->
    <header class="header">
        <div class="header__inner">
            <h1 class="header__logo">
                <a class="header__logo-link" href="<?php echo esc_url(home_url()); ?>">
                    <picture>
                        <source srcset="<?php echo get_theme_file_uri('/img/common/header_logo--pc.svg'); ?>" media="(min-width: 768px)">
                        <img class="header__logo-img" src="<?php echo get_theme_file_uri('/img/common/header_logo--sp.svg'); ?>" alt="渡邉脳神経外科クリニックのロゴ画像">
                    </picture>
                </a>
            </h1>
            <button class="header__hamburger hamburger js-hamburger u-mobile">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <?php
            $defaults = array(
                'menu'            => 'header-nav',
                'container'       => 'nav',
                'container_class' => 'drawer-menu js-drawer',
                'menu_class'      => 'drawer-menu__items',
                'add_li_class' => 'drawer-menu__item',
                'add_a_class' => 'drawer-menu__link',
            );
            wp_nav_menu($defaults);
            ?>
            <?php
            $defaults = array(
                'menu'            => 'header-nav',
                'container'       => 'nav',
                'container_class' => 'header__nav header-nav u-desktop',
                'menu_class'      => 'header-nav__items',
                'add_li_class' => 'header-nav__item',
                'add_a_class' => 'header-nav__link',
            );
            wp_nav_menu($defaults);
            ?>
        </div>
    </header>
    <div class="circle-bg js-circle-bg"></div>