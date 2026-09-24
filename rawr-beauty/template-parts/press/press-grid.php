<?php
/**
 * Press & Media Grid Template Part
 *
 * @package RAWR_Beauty
 */
$press_items = array(
    array('pub' => 'VOGUE UK', 'title' => 'The Best Express Brow & Lash Bars in London', 'quote' => 'RAWR Beauty continues to redefine modern salon speed, precision and luxury.'),
    array('pub' => 'COSMOPOLITAN', 'title' => 'Beauty On Demand: The Rise of Doorstep Beauty Services', 'quote' => 'Why their complimentary 2-mile doorstep service is a total game-changer for working women.'),
    array('pub' => 'GLAMOUR', 'title' => 'Hydra Facials Tried & Tested: The Instant Glow Review', 'quote' => 'Our editors loved the radiant, non-invasive results from RAWR’s signature skin therapy.'),
);
?>
<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
    <?php foreach ($press_items as $p) : ?>
        <div style="background: white; border-radius: 20px; padding: 36px; border: 1px solid var(--color-border); box-shadow: var(--shadow-card);">
            <span style="font-size: 13px; font-weight: 800; color: var(--color-secondary-dark); letter-spacing: 2px; text-transform: uppercase;"><?php echo esc_html($p['pub']); ?></span>
            <h3 style="font-family: var(--font-serif); font-size: 22px; margin: 12px 0; color: var(--color-primary);"><?php echo esc_html($p['title']); ?></h3>
            <p style="font-size: 14px; font-style: italic; color: var(--color-text-muted); line-height: 1.6;">&ldquo;<?php echo esc_html($p['quote']); ?>&rdquo;</p>
        </div>
    <?php endforeach; ?>
</div>
