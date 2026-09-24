<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package RAWR_Beauty
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="rawr-container" style="padding: 100px 24px; text-align: center;">
        <span style="font-size: 80px; display: block; margin-bottom: 20px;">✨</span>
        <h1 class="rawr-title" style="font-size: clamp(2.5rem, 5vw, 4rem); margin-bottom: 16px;">
            <?php esc_html_e('404 — Page Not Found', 'rawr-beauty'); ?>
        </h1>
        <p style="color: var(--color-text-muted); font-size: 16px; max-width: 500px; margin: 0 auto 30px;">
            <?php esc_html_e('It seems the page or treatment you are looking for has moved or does not exist. Explore our treatments or return to the homepage.', 'rawr-beauty'); ?>
        </p>
        <div style="display: flex; justify-content: center; gap: 16px; flex-wrap: wrap;">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="rawr-btn rawr-btn-primary">
                <?php esc_html_e('Return to Homepage', 'rawr-beauty'); ?>
            </a>
            <a href="<?php echo esc_url(home_url('/services')); ?>" class="rawr-btn rawr-btn-outline">
                <?php esc_html_e('Explore Services', 'rawr-beauty'); ?>
            </a>
        </div>
    </div>
</main>

<?php
get_footer();
