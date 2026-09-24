<?php
/**
 * Course Card Partial
 *
 * @package RawrBeauty
 */
$c_id     = get_the_ID();
$duration = get_post_meta( $c_id, '_rawr_course_duration', true ) ?: '1 - 2 Days';
$price    = get_post_meta( $c_id, '_rawr_course_price', true ) ?: '£295';
?>
<div class="education-course-card" style="background: #fff; border-radius: 16px; padding: 26px; border: 1px solid rgba(201,168,76,0.2); box-shadow: 0 4px 14px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: space-between;">
    <div>
        <span style="font-size: 11px; color: #8888AA; font-weight: 600;">⏱️ <?php echo esc_html( $duration ); ?></span>
        <h3 style="font-size: 1.3rem; margin: 6px 0 10px; font-family: var(--font-heading, Georgia, serif);">
            <a href="<?php the_permalink(); ?>" style="color: #1A1A2E; text-decoration: none;">
                <?php the_title(); ?>
            </a>
        </h3>
        <div style="font-size: 13px; color: #4A4A6A; line-height: 1.6; margin-bottom: 16px;">
            <?php the_excerpt(); ?>
        </div>
    </div>
    <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid #F0F0F5; padding-top: 14px;">
        <span style="font-size: 1.2rem; font-weight: 700; color: #A8862E; font-family: var(--font-heading, Georgia, serif);"><?php echo esc_html( $price ); ?></span>
        <a href="<?php the_permalink(); ?>" class="btn btn-primary" style="background: #C9A84C; color: #1A1A2E; padding: 8px 16px; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 12px;">
            View Course
        </a>
    </div>
</div>
