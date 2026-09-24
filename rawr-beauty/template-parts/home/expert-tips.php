<?php
/**
 * Expert Beauty Tips & Journal Preview
 *
 * @package RAWR_Beauty
 */
$articles = array(
    array(
        'title' => 'Why Every Skin Type Needs a Hydra Facial This Season',
        'category' => 'Skincare',
        'read' => '5 min read',
        'excerpt' => 'Discover how medical hydra-dermabrasion clears congested pores and restores elasticity in 60 minutes.',
    ),
    array(
        'title' => 'The Complete Guide to Laser Hair Removal — What to Expect',
        'category' => 'Laser Safety',
        'read' => '7 min read',
        'excerpt' => 'Essential pre-treatment preparation, pain levels, and how to schedule your sessions for permanent smoothness.',
    ),
    array(
        'title' => 'Your Bridal Beauty Timeline — 3 Months to Flawless Skin',
        'category' => 'Bridal',
        'read' => '8 min read',
        'excerpt' => 'Step-by-step beauty scheduling to look radiant on your wedding day without last-minute skin redness.',
    ),
);
?>
<section class="rawr-section rawr-journal-section">
    <div class="rawr-container">
        <div class="rawr-section-header text-center">
            <span class="rawr-badge"><?php esc_html_e('Expert Insights', 'rawr-beauty'); ?></span>
            <h2 class="rawr-title"><?php esc_html_e('The RAWR Beauty Journal', 'rawr-beauty'); ?></h2>
            <p class="rawr-subtitle"><?php esc_html_e('Pro tips, treatment preparations, and skincare routines written by our therapists.', 'rawr-beauty'); ?></p>
        </div>

        <div class="rawr-blog-grid">
            <?php foreach ($articles as $art) : ?>
                <article class="rawr-post-card">
                    <div class="post-card-meta">
                        <span class="post-card-tag"><?php echo esc_html($art['category']); ?></span>
                        <span class="post-card-time"><?php echo esc_html($art['read']); ?></span>
                    </div>
                    <h3 class="post-card-title"><?php echo esc_html($art['title']); ?></h3>
                    <p class="post-card-excerpt"><?php echo esc_html($art['excerpt']); ?></p>
                    <a href="<?php echo esc_url(home_url('/blog')); ?>" class="post-card-link">
                        <?php esc_html_e('Read Full Article &rarr;', 'rawr-beauty'); ?>
                    </a>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
