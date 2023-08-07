    <footer class="site-footer">
        <div class="container">
            <div class="copyright">
                <p>Lucca P. Bordin -  All Rights Reserved</p>
            </div>
            <nav class="footer-menu">
                <?php wp_nav_menu(array(
                    'theme_location' => 'bordin_footer_menu',
                    'depth' => 1)); ?>
            </nav>
        </div>
    </footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>