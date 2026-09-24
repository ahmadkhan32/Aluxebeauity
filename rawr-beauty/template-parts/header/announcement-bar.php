<?php
/**
 * Top Announcement Bar Template Part
 *
 * @package RAWR_Beauty
 */
$announcement = get_theme_mod('rawr_announcement_text', '🌟 10% OFF all services Mon–Wed · Free home service within 2 miles · 📞 07398 926226');
?>
<div class="rawr-announcement-bar">
    <div class="rawr-container text-center">
        <p class="rawr-announcement-text"><?php echo wp_kses_post($announcement); ?></p>
    </div>
</div>
