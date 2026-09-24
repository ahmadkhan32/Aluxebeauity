<?php
/**
 * Featured In Press / Media Badges
 *
 * @package RAWR_Beauty
 */
$publications = array('VOGUE', 'COSMOPOLITAN', 'GLAMOUR', 'ELLE', 'GRAZIA', 'HARPER’S BAZAAR');
?>
<section class="rawr-press-strip">
    <div class="rawr-container text-center">
        <span class="rawr-press-label"><?php esc_html_e('AS FEATURED & RECOGNIZED IN', 'rawr-beauty'); ?></span>
        <div class="rawr-press-logos">
            <?php foreach ($publications as $pub) : ?>
                <span class="rawr-press-logo"><?php echo esc_html($pub); ?></span>
            <?php endforeach; ?>
        </div>
    </div>
</section>
