<?php
/**
 * Franchise Blog / Expansion Advice Articles
 *
 * @package RAWR_Beauty
 */
$franchise_posts = array(
    array(
        'title' => 'How RAWR Franchise Owners Scale Beyond a Single Salon',
        'read' => '6 min read',
        'desc' => 'Insights into multi-unit scaling, mobile therapist territories, and managing regional salon clusters.',
    ),
    array(
        'title' => 'The Economics of Modern Beauty: High Retention & Predictable Revenue',
        'read' => '5 min read',
        'desc' => 'Why beauty salon bars with automated WhatsApp booking achieve consistent 70%+ repeat client rates.',
    ),
);
?>
<section class="rawr-section" style="padding: 60px 0;">
    <div class="rawr-container">
        <div class="rawr-section-header text-center">
            <span class="rawr-badge"><?php esc_html_e('Franchise Journal', 'rawr-beauty'); ?></span>
            <h2 class="rawr-title"><?php esc_html_e('Scaling & Business Insights', 'rawr-beauty'); ?></h2>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
            <?php foreach ($franchise_posts as $post) : ?>
                <div style="background: white; border-radius: 20px; padding: 32px; border: 1px solid var(--color-border); box-shadow: var(--shadow-card);">
                    <span style="font-size: 11px; font-weight: 700; color: var(--color-secondary-dark);"><?php echo esc_html($post['read']); ?></span>
                    <h3 style="font-family: var(--font-serif); font-size: 22px; margin: 10px 0; color: var(--color-primary);"><?php echo esc_html($post['title']); ?></h3>
                    <p style="font-size: 14px; color: var(--color-text-muted); line-height: 1.6;"><?php echo esc_html($post['desc']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
