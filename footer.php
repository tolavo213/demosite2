<!-- footer -->
<footer class="footer">
    <div class="footer__inner inner">
        <div class="footer__body">
        <?php
            $defaults = array(
                'menu'            => 'footer-menu',
                'container'       => 'nav',
                'container_class' => 'footer__nav',
                'menu_class'      => 'footer__nav-items',
                'add_li_class' => 'footer__nav-item',
                'add_a_class' => 'footer__nav-item-link',
            );
            wp_nav_menu($defaults);
            ?>
            <div class="footer__logo">
                <a href="#">
                    <a class="footer__logo-link" href="<?php echo esc_url( home_url() ); ?>">
                        <picture>
                            <source srcset="<?php echo get_theme_file_uri( '/img/common/footer_logo--pc.svg' ); ?>" media="(min-width:768px)">
                            <img src="<?php echo get_theme_file_uri( '/img/common/footer_logo--sp.svg' ); ?>" alt="渡邊脳神経外科クリニックのロゴ画像">
                        </picture>
                    </a>
            </div>
            <div class="footer__address-wrap">
                <address class="footer__address">福岡県福岡市中央区渡邉123</address>
                <a class="footer__tel" href="tel:093-0000-0000">Tel.&nbsp;093-0000-0000</a>
            </div>
        </div>
    </div>
    <div class="footer__copyright-wrap">
        <p class="footer__copyright"><small>&copy;2022&nbsp;Watanabe&nbsp;neuro-spone&nbsp;clinic</small></p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>