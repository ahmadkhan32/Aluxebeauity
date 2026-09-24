<?php
/**
 * Single Career / Vacancy Template
 *
 * @package RawrBeauty
 */

get_header();

while ( have_posts() ) : the_post();
    $career_id = get_the_ID();
    $location  = get_post_meta( $career_id, '_rawr_career_location', true ) ?: 'UK Nationwide';
    $job_type  = get_post_meta( $career_id, '_rawr_career_type', true ) ?: 'Full-time / Part-time';
    $salary    = get_post_meta( $career_id, '_rawr_career_salary', true ) ?: 'Competitive + Commission';
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'rawr-single-career' ); ?>>
    <header style="background: var(--color-charcoal, #1A1A2E); color: #fff; padding: 100px 0 60px; text-align: center;">
        <div class="container">
            <span style="display: inline-block; background: var(--color-gold-pale, #FDF8EE); color: #A8862E; font-size: 11px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; padding: 4px 14px; border-radius: 20px; margin-bottom: 16px;">
                Join the RAWR Beauty Family
            </span>
            <h1 style="font-size: clamp(2.2rem, 4vw, 3.5rem); font-family: var(--font-heading, Georgia, serif); margin-bottom: 16px;">
                <?php the_title(); ?>
            </h1>
            <p style="font-size: 16px; opacity: 0.85;">
                📍 Location: <?php echo esc_html( $location ); ?> &nbsp;•&nbsp; 💼 <?php echo esc_html( $job_type ); ?> &nbsp;•&nbsp; 💰 <?php echo esc_html( $salary ); ?>
            </p>
        </div>
    </header>

    <div class="container" style="padding: 70px 20px;">
        <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 40px;">
            <div>
                <h2 style="font-size: 2rem; margin-bottom: 20px; font-family: var(--font-heading, Georgia, serif);">Job Role & Requirements</h2>
                <div class="entry-content" style="line-height: 1.8; color: #4A4A6A;">
                    <?php the_content(); ?>
                </div>
            </div>
            <aside>
                <div style="background: #FDF8EE; padding: 30px; border-radius: 16px; border: 1px solid rgba(201,168,76,0.3); text-align: center;">
                    <h3 style="font-size: 1.3rem; margin-bottom: 10px; font-family: var(--font-heading, Georgia, serif); color: #1A1A2E;">Apply for This Position</h3>
                    <p style="font-size: 13px; color: #8888AA; margin-bottom: 20px;">Send your CV and portfolio directly to our recruitment team.</p>
                    <a href="mailto:careers@rawrbeauty.co.uk?subject=<?php echo urlencode( 'Application: ' . get_the_title() ); ?>" class="btn btn-primary" style="display: block; width: 100%; background: #C9A84C; color: #1A1A2E; padding: 12px; border-radius: 50px; font-weight: 700; text-decoration: none;">
                        Apply via Email
                    </a>
                </div>
            </aside>
        </div>
    </div>
</article>

<?php
endwhile;

get_footer();

