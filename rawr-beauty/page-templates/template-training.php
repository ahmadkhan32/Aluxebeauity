<?php
/**
 * Template Name: Training Academy
 *
 * @package RawrBeauty
 */

get_header();
?>

<div class="rawr-training-page">
    <header style="background: var(--color-charcoal, #1A1A2E); color: #fff; padding: 100px 0 60px; text-align: center;">
        <div class="container">
            <span style="display: inline-block; background: var(--color-gold-pale, #FDF8EE); color: #A8862E; font-size: 11px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; padding: 4px 14px; border-radius: 20px; margin-bottom: 16px;">
                Accredited Qualifications
            </span>
            <h1 style="font-size: clamp(2.5rem, 5vw, 4rem); font-family: var(--font-heading, Georgia, serif); margin-bottom: 16px;">
                RAWR <span style="color: var(--color-gold, #C9A84C);">Training Academy</span>
            </h1>
            <p style="font-size: 16px; opacity: 0.85; max-width: 600px; margin: 0 auto 24px;">
                Master the art of nails, brows, lashes and skin therapies with industry-leading educators.
            </p>
            <a href="#courses" class="btn btn-primary btn-lg" style="background: var(--color-gold, #C9A84C); color: #1A1A2E; padding: 12px 28px; border-radius: 50px; font-weight: 700; text-decoration: none;">
                Browse Accredited Courses
            </a>
        </div>
    </header>

    <div class="container" id="courses" style="padding: 70px 20px 90px;">
        <h2 style="font-size: 2rem; font-family: var(--font-heading, Georgia, serif); margin-bottom: 30px; text-align: center;">
            Featured Academy Courses
        </h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 28px;">
            <?php
            $courses = new WP_Query( array(
                'post_type'      => 'course',
                'posts_per_page' => -1,
            ) );
            if ( $courses->have_posts() ) :
                while ( $courses->have_posts() ) : $courses->the_post();
                    $duration = get_post_meta( get_the_ID(), '_rawr_course_duration', true ) ?: '1 - 2 Days';
                    $price    = get_post_meta( get_the_ID(), '_rawr_course_price', true ) ?: '£295';
            ?>
                <div style="background: #fff; border-radius: 16px; padding: 28px; border: 1px solid rgba(201,168,76,0.2); box-shadow: 0 4px 14px rgba(0,0,0,0.04);">
                    <span style="font-size: 11px; color: #8888AA; font-weight: 600;">⏱️ <?php echo esc_html( $duration ); ?></span>
                    <h3 style="font-size: 1.4rem; font-family: var(--font-heading, Georgia, serif); margin: 6px 0 10px;">
                        <a href="<?php the_permalink(); ?>" style="color: #1A1A2E; text-decoration: none;">
                            <?php the_title(); ?>
                        </a>
                    </h3>
                    <div style="font-size: 13px; color: #4A4A6A; margin-bottom: 16px;"><?php the_excerpt(); ?></div>
                    <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid #F0F0F5; padding-top: 16px;">
                        <strong style="color: #A8862E; font-size: 1.2rem;"><?php echo esc_html( $price ); ?></strong>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary" style="background: #C9A84C; color: #1A1A2E; padding: 8px 16px; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 12px;">
                            Enrol Now
                        </a>
                    </div>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</div>

<?php
get_footer();
