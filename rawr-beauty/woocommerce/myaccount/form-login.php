<?php
/**
 * Login Form in My Account
 *
 * @package RawrBeauty
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_customer_login_form' ); ?>

<div class="u-columns col2-set" id="customer_login" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px; margin-top: 30px;">

    <div class="u-column1 col-1" style="background: #fff; padding: 30px; border-radius: 16px; border: 1px solid #ECECF2;">
        <h2 style="font-size: 1.6rem; font-family: var(--font-heading, Georgia, serif); color: #1A1A2E; margin-bottom: 20px;"><?php esc_html_e( 'Login', 'rawr-beauty' ); ?></h2>

        <form class="woocommerce-form woocommerce-form-login login" method="post">
            <?php do_action( 'woocommerce_login_form_start' ); ?>

            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide" style="margin-bottom: 16px;">
                <label for="username" style="display: block; font-size: 13px; font-weight: 700; color: #1A1A2E; margin-bottom: 6px;"><?php esc_html_e( 'Username or email address', 'rawr-beauty' ); ?>&nbsp;<span class="required">*</span></label>
                <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" style="width: 100%; padding: 12px; border: 1px solid #D5D5E2; border-radius: 8px;" /><?php // @codingStandardsIgnoreLine ?>
            </p>
            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide" style="margin-bottom: 16px;">
                <label for="password" style="display: block; font-size: 13px; font-weight: 700; color: #1A1A2E; margin-bottom: 6px;"><?php esc_html_e( 'Password', 'rawr-beauty' ); ?>&nbsp;<span class="required">*</span></label>
                <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" style="width: 100%; padding: 12px; border: 1px solid #D5D5E2; border-radius: 8px;" />
            </p>

            <?php do_action( 'woocommerce_login_form' ); ?>

            <p class="form-row" style="display: flex; justify-content: space-between; align-items: center; margin-top: 20px;">
                <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce_form_user_rememberme">
                    <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php esc_html_e( 'Remember me', 'rawr-beauty' ); ?></span>
                </label>
                <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
                <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="<?php esc_attr_e( 'Log in', 'rawr-beauty' ); ?>" style="background: #C9A84C; color: #1A1A2E; padding: 10px 24px; border-radius: 50px; font-weight: 700; border: none; cursor: pointer;"><?php esc_html_e( 'Log in', 'rawr-beauty' ); ?></button>
            </p>
            <p class="woocommerce-LostPassword lost_password" style="margin-top: 14px; font-size: 13px;">
                <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>" style="color: #8888AA;"><?php esc_html_e( 'Lost your password?', 'rawr-beauty' ); ?></a>
            </p>

            <?php do_action( 'woocommerce_login_form_end' ); ?>
        </form>
    </div>

    <?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>
    <div class="u-column2 col-2" style="background: #FAF9F6; padding: 30px; border-radius: 16px; border: 1px solid rgba(201,168,76,0.3);">
        <h2 style="font-size: 1.6rem; font-family: var(--font-heading, Georgia, serif); color: #1A1A2E; margin-bottom: 20px;"><?php esc_html_e( 'Register', 'rawr-beauty' ); ?></h2>

        <form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action( 'woocommerce_register_form_tag' ); ?> >
            <?php do_action( 'woocommerce_register_form_start' ); ?>

            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide" style="margin-bottom: 16px;">
                <label for="reg_email" style="display: block; font-size: 13px; font-weight: 700; color: #1A1A2E; margin-bottom: 6px;"><?php esc_html_e( 'Email address', 'rawr-beauty' ); ?>&nbsp;<span class="required">*</span></label>
                <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" style="width: 100%; padding: 12px; border: 1px solid #D5D5E2; border-radius: 8px;" /><?php // @codingStandardsIgnoreLine ?>
            </p>

            <?php do_action( 'woocommerce_register_form' ); ?>

            <p class="woocommerce-form-row form-row" style="margin-top: 20px;">
                <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
                <button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit" name="register" value="<?php esc_attr_e( 'Register', 'rawr-beauty' ); ?>" style="width: 100%; background: #1A1A2E; color: #fff; padding: 12px 24px; border-radius: 50px; font-weight: 700; border: none; cursor: pointer;"><?php esc_html_e( 'Register Account', 'rawr-beauty' ); ?></button>
            </p>

            <?php do_action( 'woocommerce_register_form_end' ); ?>
        </form>
    </div>
    <?php endif; ?>

</div>
<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
