<footer>
    <div class="footer-nav">
        <!-- Display footer menu -->
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
    </div>
    <!-- Copyright and privacy policy -->
    <p>Copyright &copy; <?php echo date("Y"); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?> | <a
            href="/privacy-policy">Privacy Policy</a> | <a target="_blank" href="https://anjileen.com">Website by
            Anjileen</a></p>
</footer>

<?php wp_footer(); ?>

</body>
</html>