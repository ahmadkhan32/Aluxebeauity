<?php
/**
 * Single Course Template - Rawr Training Academy
 *
 * @package RawrBeauty
 */

get_header();

while ( have_posts() ) : the_post();
    $course_id = get_the_ID();
    $duration  = get_post_meta( $course_id, '_rawr_course_duration', true ) ?: '1 - 2 Days';
    $level     = get_post_meta( $course_id, '_rawr_course_level', true ) ?: 'Beginner / Intermediate';
    $price     = get_post_meta( $course_id, '_rawr_course_price', true ) ?: '£295';
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'rawr-single-course' ); ?>>
    <header style="background: var(--color-charcoal, #1A1A2E); color: #fff; padding: 100px 0 60px; text-align: center;">
        <div class="container">
            <span style="display: inline-block; background: var(--color-gold-pale, #FDF8EE); color: #A8862E; font-size: 11px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; padding: 4px 14px; border-radius: 20px; margin-bottom: 16px;">
                RAWR Training Academy & Qualifications
            </span>
            <h1 style="font-size: clamp(2.2rem, 4vw, 3.5rem); font-family: var(--font-heading, Georgia, serif); margin-bottom: 16px;">
                <?php the_title(); ?>
            </h1>
            <p style="font-size: 16px; opacity: 0.85;">
                🎓 Level: <?php echo esc_html( $level ); ?> &nbsp;•&nbsp; ⏱️ <?php echo esc_html( $duration ); ?> &nbsp;•&nbsp; 💰 <?php echo esc_html( $price ); ?>
            </p>
        </div>
    </header>

    <div class="container" style="padding: 70px 20px;">
        <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 40px;">
            <div>
                <h2 style="font-size: 2rem; margin-bottom: 20px; font-family: var(--font-heading, Georgia, serif);">Course Curriculum</h2>
                <div class="entry-content" style="line-height: 1.8; color: #4A4A6A;">
                    <?php the_content(); ?>
                </div>
            </div>
            <aside>
                <div style="background: #FDF8EE; padding: 30px; border-radius: 16px; border: 1px solid rgba(201,168,76,0.3); text-align: center;">
                    <h3 style="font-size: 1.3rem; margin-bottom: 10px; font-family: var(--font-heading, Georgia, serif); color: #1A1A2E;">Enrol on This Course</h3>
                    <p style="font-size: 13px; color: #8888AA; margin-bottom: 20px;">Earn an accredited beauty certification with full kit included.</p>
                    <a href="<?php echo esc_url( home_url( '/contact/?enquiry=course&title=' . urlencode( get_the_title() ) ) ); ?>" class="btn btn-primary" style="display: block; width: 100%; background: #C9A84C; color: #1A1A2E; padding: 12px; border-radius: 50px; font-weight: 700; text-decoration: none;">
                        Enquire / Enrol Today
                    </a>
                </div>
            </aside>
        </div>
    </div>
</article>

<?php
endwhile;

get_footer();
