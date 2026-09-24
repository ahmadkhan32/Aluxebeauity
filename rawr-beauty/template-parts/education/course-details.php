<?php
/**
 * Course Details Partial
 *
 * @package RawrBeauty
 */
$duration = get_post_meta( get_the_ID(), '_rawr_course_duration', true ) ?: '1 - 2 Days';
$level    = get_post_meta( get_the_ID(), '_rawr_course_level', true ) ?: 'Beginner & Intermediate';
$price    = get_post_meta( get_the_ID(), '_rawr_course_price', true ) ?: '£295';
?>
<div class="course-details-box" style="background: #FAFAF8; padding: 24px; border-radius: 16px; border: 1px solid #E8E8F0; margin-bottom: 24px;">
    <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 10px; font-size: 14px; color: #4A4A6A;">
        <li>🎓 <strong>Accreditation Level:</strong> <?php echo esc_html( $level ); ?></li>
        <li>⏱️ <strong>Course Duration:</strong> <?php echo esc_html( $duration ); ?></li>
        <li>💰 <strong>Total Investment:</strong> <?php echo esc_html( $price ); ?> (Kit included)</li>
    </ul>
</div>
