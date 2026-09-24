<?php
/**
 * The Footer for RAWR Beauty Theme
 *
 * @package RAWR_Beauty
 */
?>
    <!-- Pre-Footer Newsletter & Booking CTA -->
    <?php get_template_part('template-parts/footer/newsletter'); ?>

    <!-- Main Footer -->
    <?php get_template_part('template-parts/footer/footer-main'); ?>

    <!-- Footer Copyright & Legal -->
    <?php get_template_part('template-parts/footer/footer-bottom'); ?>

    <!-- React Cart Drawer & WhatsApp Quick-Action Mount Point -->
    <div id="rawr-cart-drawer-mount"></div>
    <div id="rawr-quick-actions-mount"></div>

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
