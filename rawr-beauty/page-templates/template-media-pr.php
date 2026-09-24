<?php
/**
 * Template Name: Media & PR
 *
 * @package RawrBeauty
 */

get_header();
?>

<div class="rawr-media-page">
    <header style="background: var(--color-charcoal, #1A1A2E); color: #fff; padding: 100px 0 60px; text-align: center;">
        <div class="container">
            <span style="display: inline-block; background: var(--color-gold-pale, #FDF8EE); color: #A8862E; font-size: 11px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; padding: 4px 14px; border-radius: 20px; margin-bottom: 16px;">
                Press Enquiries
            </span>
            <h1 style="font-size: clamp(2.5rem, 5vw, 4rem); font-family: var(--font-heading, Georgia, serif); margin-bottom: 16px;">
                Media & <span style="color: var(--color-gold, #C9A84C);">Press Office</span>
            </h1>
            <p style="font-size: 16px; opacity: 0.85; max-width: 600px; margin: 0 auto;">
                For press releases, high-res image assets, interviews, and brand collaborations.
            </p>
        </div>
    </header>

    <div class="container" style="padding: 70px 20px 90px;">
        <div style="background: #FAFAF8; padding: 40px; border-radius: 20px; border: 1px solid #E8E8F0; text-align: center; max-width: 700px; margin: 0 auto 50px;">
            <h3 style="font-size: 1.5rem; font-family: var(--font-heading, Georgia, serif); margin-bottom: 10px;">Press Contact</h3>
            <p style="color: #4A4A6A; margin-bottom: 20px;">Email our communications team for media kits and sample requests.</p>
            <a href="mailto:press@rawrbeauty.co.uk" class="btn btn-primary" style="background: #C9A84C; color: #1A1A2E; padding: 12px 28px; border-radius: 50px; font-weight: 700; text-decoration: none;">
                press@rawrbeauty.co.uk
            </a>
        </div>

        <h2 style="font-size: 2rem; font-family: var(--font-heading, Georgia, serif); margin-bottom: 30px; text-align: center;">Recent Press Features</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 28px;">
            <?php
            $press = new WP_Query( array(
                'post_type'      => 'press',
                'posts_per_page' => 6,
            ) );
            if ( $press->have_posts() ) :
                while ( $press->have_posts() ) : $press->the_post();
            ?>
                <div style="background: #fff; border-radius: 16px; padding: 24px; border: 1px solid rgba(201,168,76,0.2);">
                    <h3 style="font-size: 1.3rem; font-family: var(--font-heading, Georgia, serif); margin-bottom: 8px;">
                        <a href="<?php the_permalink(); ?>" style="color: #1A1A2E; text-decoration: none;">
                            <?php the_title(); ?>
                        </a>
                    </h3>
                    <div style="font-size: 13px; color: #4A4A6A;"><?php the_excerpt(); ?></div>
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
