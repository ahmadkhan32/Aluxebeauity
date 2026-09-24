<?php
/**
 * Franchise Application Partial
 *
 * @package RawrBeauty
 */
?>
<section class="franchise-application-section" style="padding: 70px 0; background: #fff;">
    <div class="container" style="max-width: 700px; margin: 0 auto;">
        <div style="background: #FAFAF8; padding: 40px; border-radius: 20px; border: 1px solid rgba(201,168,76,0.25); text-align: center;">
            <h2 style="font-size: 2rem; font-family: var(--font-heading, Georgia, serif); margin-bottom: 12px;">Apply for a Franchise</h2>
            <p style="color: #4A4A6A; font-size: 14px; margin-bottom: 24px;">Start your application today and our franchise director will get in touch within 48 hours.</p>
            <form style="display: flex; flex-direction: column; gap: 14px; text-align: left;">
                <input type="text" placeholder="Full Name" required style="padding: 12px; border: 1px solid #ccc; border-radius: 8px;">
                <input type="email" placeholder="Email Address" required style="padding: 12px; border: 1px solid #ccc; border-radius: 8px;">
                <input type="tel" placeholder="Phone Number" required style="padding: 12px; border: 1px solid #ccc; border-radius: 8px;">
                <input type="text" placeholder="Preferred Location / City" required style="padding: 12px; border: 1px solid #ccc; border-radius: 8px;">
                <select style="padding: 12px; border: 1px solid #ccc; border-radius: 8px;">
                    <option value="">Available Investment Capital</option>
                    <option value="25-50k">£25,000 - £50,000</option>
                    <option value="50-100k">£50,000 - £100,000</option>
                    <option value="100k+">£100,000+</option>
                </select>
                <button type="submit" class="btn btn-primary" style="background: #C9A84C; color: #1A1A2E; padding: 14px; border-radius: 50px; font-weight: 700; cursor: pointer; border: none; font-size: 14px; margin-top: 10px;">
                    Submit Franchise Enquiry
                </button>
            </form>
        </div>
    </div>
</section>
