<?php
/**
 * Services Grid Template Part
 *
 * @package RAWR_Beauty
 */
$services_data = array(
    array(
        'name' => 'Facials & Hydra Glow',
        'icon' => '✨',
        'desc' => 'Medical-grade hydra-dermabrasion, deep pore extraction, gold brightening, and anti-aging massage.',
        'items' => array('Face Clean Up (£15)', 'Whitening Facial (£20)', 'Gold Facial (£30)', 'Hydra Facial (£60)', 'Carbon Facial (£50)'),
    ),
    array(
        'name' => 'Threading & Brow Architecture',
        'icon' => '🪡',
        'desc' => 'Precision eyebrow shaping, full face threading, tinting and brow lamination.',
        'items' => array('Eyebrows (£5)', 'Upper Lip (£4)', 'Chin (£4)', 'Full Face Threading (£18)'),
    ),
    array(
        'name' => 'Waxing — Face & Body',
        'icon' => '🌸',
        'desc' => 'Premium hot wax formulations designed for sensitive skin, long-lasting silkiness and minimal redness.',
        'items' => array('Full Face Wax (£15)', 'Full Arms (£18)', 'Full Legs (£25)', 'Full Body Wax (£80)'),
    ),
    array(
        'name' => 'Laser Hair Removal',
        'icon' => '⚡',
        'desc' => 'Permanent, virtually pain-free diode laser treatments for all skin types and tones.',
        'items' => array('Upper Lip/Chin (£15)', 'Full Face (£50)', 'Underarms (£25)', 'Full Legs (£120)'),
    ),
);
?>
<div class="rawr-services-page-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; margin-bottom: 50px;">
    <?php foreach ($services_data as $s) : ?>
        <div class="rawr-service-full-card" style="background: white; border-radius: 20px; padding: 32px; border: 1px solid var(--color-border); box-shadow: var(--shadow-card);">
            <span style="font-size: 40px; display: block; margin-bottom: 16px;"><?php echo esc_html($s['icon']); ?></span>
            <h3 style="font-family: var(--font-serif); font-size: 24px; margin-bottom: 8px;"><?php echo esc_html($s['name']); ?></h3>
            <p style="color: var(--color-text-muted); font-size: 14px; line-height: 1.6; margin-bottom: 20px;"><?php echo esc_html($s['desc']); ?></p>
            <ul style="list-style: none; padding: 0; display: flex; flex-direction: column; gap: 8px; margin-bottom: 24px;">
                <?php foreach ($s['items'] as $item) : ?>
                    <li style="font-size: 13px; font-weight: 600; color: var(--color-primary); display: flex; align-items: center; gap: 8px;">
                        <span style="color: var(--color-secondary);">•</span> <?php echo esc_html($item); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
            <a href="<?php echo esc_url(rawr_whatsapp_url('Hi! I would like to book ' . $s['name'])); ?>" target="_blank" rel="noopener noreferrer" class="rawr-btn rawr-btn-primary rawr-btn-sm" style="width: 100%; text-align: center;">
                <?php esc_html_e('Book This Service', 'rawr-beauty'); ?>
            </a>
        </div>
    <?php endforeach; ?>
</div>
