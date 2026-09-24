<?php
/**
 * Template Name: FAQ Page
 * Frequently Asked Questions for RAWR Beauty Treatments, Bookings, Franchise & Academy
 *
 * @package RawrBeauty
 */

get_header();
?>

<div class="rawr-faq-page">
    <header style="background: var(--color-charcoal, #1A1A2E); color: #fff; padding: 100px 0 60px; text-align: center;">
        <div class="container">
            <span style="display: inline-block; background: var(--color-gold-pale, #FDF8EE); color: #A8862E; font-size: 11px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; padding: 4px 14px; border-radius: 20px; margin-bottom: 16px;">
                <?php esc_html_e( 'Help & Support', 'rawr-beauty' ); ?>
            </span>
            <h1 style="font-size: clamp(2.5rem, 5vw, 4rem); font-family: var(--font-heading, Georgia, serif); margin-bottom: 16px;">
                Frequently Asked <span style="color: var(--color-gold, #C9A84C);"><?php esc_html_e( 'Questions', 'rawr-beauty' ); ?></span>
            </h1>
            <p style="font-size: 16px; opacity: 0.85; max-width: 600px; margin: 0 auto;">
                <?php esc_html_e( 'Find quick answers about our beauty treatments, nationwide walk-ins, online orders, and academy qualifications.', 'rawr-beauty' ); ?>
            </p>
        </div>
    </header>

    <div class="container" style="padding: 70px 20px 100px; max-width: 900px; margin: 0 auto;">
        <div class="faq-accordion" style="display: flex; flex-direction: column; gap: 20px;">
            <details style="background: #fff; border: 1px solid rgba(201,168,76,0.25); border-radius: 12px; padding: 20px 24px; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
                <summary style="font-weight: 700; font-size: 17px; cursor: pointer; color: #1A1A2E;">Do I need to book an appointment or can I walk in?</summary>
                <p style="margin-top: 12px; color: #4A4A6A; line-height: 1.7;">All our 26+ salon branches welcome walk-in clients! However, to guarantee your preferred time slot or specialist technician, we recommend booking online through our booking portal.</p>
            </details>

            <details style="background: #fff; border: 1px solid rgba(201,168,76,0.25); border-radius: 12px; padding: 20px 24px; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
                <summary style="font-weight: 700; font-size: 17px; cursor: pointer; color: #1A1A2E;">How long does UK delivery take for beauty products?</summary>
                <p style="margin-top: 12px; color: #4A4A6A; line-height: 1.7;">Orders are dispatched next business day via Royal Mail Tracked 24 or 48. Standard delivery is £3.99 and complimentary on orders over £40 across England, Scotland, Wales, and Northern Ireland.</p>
            </details>

            <details style="background: #fff; border: 1px solid rgba(201,168,76,0.25); border-radius: 12px; padding: 20px 24px; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
                <summary style="font-weight: 700; font-size: 17px; cursor: pointer; color: #1A1A2E;">Are RAWR Academy courses accredited?</summary>
                <p style="margin-top: 12px; color: #4A4A6A; line-height: 1.7;">Yes, all training academy diplomas and qualifications are fully accredited by industry-recognized bodies (including ABT and CPD), enabling graduates to secure professional insurance immediately.</p>
            </details>

            <details style="background: #fff; border: 1px solid rgba(201,168,76,0.25); border-radius: 12px; padding: 20px 24px; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
                <summary style="font-weight: 700; font-size: 17px; cursor: pointer; color: #1A1A2E;">How does the Quick Buy checkout work?</summary>
                <p style="margin-top: 12px; color: #4A4A6A; line-height: 1.7;">Our Quick Buy allows you to purchase directly from any product card with just your delivery name, UK address, phone, and city dropdown without going through a complicated multi-step funnel.</p>
            </details>
        </div>
    </div>
</div>

<?php
get_footer();
