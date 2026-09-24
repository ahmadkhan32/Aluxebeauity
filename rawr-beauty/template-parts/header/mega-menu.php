<?php
/**
 * Header Mega Menu Component
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="rawr-mega-menu-dropdown" style="display: none; position: absolute; top: 100%; left: 0; width: 100%; background: #ffffff; color: #1A1A2E; box-shadow: 0 15px 30px rgba(0,0,0,0.12); border-top: 2px solid #C9A84C; padding: 40px 0; z-index: 1000;">
    <div class="container" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px;">
        <div>
            <h4 style="font-size: 13px; letter-spacing: 2px; text-transform: uppercase; color: #C9A84C; margin-bottom: 16px;">Services</h4>
            <ul style="list-style: none; padding: 0; margin: 0; line-height: 2;">
                <li><a href="<?php echo esc_url( home_url( '/services/nails/' ) ); ?>" style="color: #4A4A6A; text-decoration: none;">Nails & Gel Manicures</a></li>
                <li><a href="<?php echo esc_url( home_url( '/services/brows/' ) ); ?>" style="color: #4A4A6A; text-decoration: none;">Brows & Microblading</a></li>
                <li><a href="<?php echo esc_url( home_url( '/services/lashes/' ) ); ?>" style="color: #4A4A6A; text-decoration: none;">Lashes & Extensions</a></li>
                <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" style="color: #1A1A2E; font-weight: 700; text-decoration: none;">View All Treatments →</a></li>
            </ul>
        </div>
        <div>
            <h4 style="font-size: 13px; letter-spacing: 2px; text-transform: uppercase; color: #C9A84C; margin-bottom: 16px;">Top UK Branches</h4>
            <ul style="list-style: none; padding: 0; margin: 0; line-height: 2;">
                <li><a href="<?php echo esc_url( home_url( '/branches/colchester/' ) ); ?>" style="color: #4A4A6A; text-decoration: none;">Colchester</a></li>
                <li><a href="<?php echo esc_url( home_url( '/branches/canterbury/' ) ); ?>" style="color: #4A4A6A; text-decoration: none;">Canterbury</a></li>
                <li><a href="<?php echo esc_url( home_url( '/branches/coventry/' ) ); ?>" style="color: #4A4A6A; text-decoration: none;">Coventry</a></li>
                <li><a href="<?php echo esc_url( home_url( '/branches/' ) ); ?>" style="color: #1A1A2E; font-weight: 700; text-decoration: none;">All 26 UK Branches →</a></li>
            </ul>
        </div>
        <div>
            <h4 style="font-size: 13px; letter-spacing: 2px; text-transform: uppercase; color: #C9A84C; margin-bottom: 16px;">Shop Beauty</h4>
            <ul style="list-style: none; padding: 0; margin: 0; line-height: 2;">
                <li><a href="<?php echo esc_url( home_url( '/shop/?category=nails' ) ); ?>" style="color: #4A4A6A; text-decoration: none;">Nail Care & Oils</a></li>
                <li><a href="<?php echo esc_url( home_url( '/shop/?category=brows' ) ); ?>" style="color: #4A4A6A; text-decoration: none;">Brow Fix & Gels</a></li>
                <li><a href="<?php echo esc_url( home_url( '/shop/?category=lashes' ) ); ?>" style="color: #4A4A6A; text-decoration: none;">Lash Serums</a></li>
                <li><a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>" style="color: #1A1A2E; font-weight: 700; text-decoration: none;">Full Shop Collection →</a></li>
            </ul>
        </div>
        <div>
            <h4 style="font-size: 13px; letter-spacing: 2px; text-transform: uppercase; color: #C9A84C; margin-bottom: 16px;">Education & Franchise</h4>
            <ul style="list-style: none; padding: 0; margin: 0; line-height: 2;">
                <li><a href="<?php echo esc_url( home_url( '/rawr-training-academy/' ) ); ?>" style="color: #4A4A6A; text-decoration: none;">Training Academy</a></li>
                <li><a href="<?php echo esc_url( home_url( '/rawr-education/' ) ); ?>" style="color: #4A4A6A; text-decoration: none;">Education Diplomas</a></li>
                <li><a href="<?php echo esc_url( home_url( '/careers/' ) ); ?>" style="color: #4A4A6A; text-decoration: none;">Careers & Stylists</a></li>
                <li><a href="<?php echo esc_url( home_url( '/franchise/' ) ); ?>" style="color: #1A1A2E; font-weight: 700; text-decoration: none;">Franchise Opportunities →</a></li>
            </ul>
        </div>
    </div>
</div>
