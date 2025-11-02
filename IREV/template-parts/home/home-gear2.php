<?php
/**
 * Template Part: Home Gear2
 */
    $g2_icon = get_field('g2_icon');
    $g2_icon2 = get_field('g2_icon2');
    $g2_nitro_image = get_field('g2_nitro_image');
?>

<section class="home_gear2">
    <header class="home_gear_header">
        <span>
            <?php echo esc_html( get_field('g2_title') ); ?>
        </span>
        <?php
        if( !empty( $g2_icon ) ): ?>
            <img
                src="<?php echo esc_url($g2_icon['url']); ?>"
                alt="<?php echo esc_attr($g2_icon['alt']); ?>"
            />
        <?php endif; ?>
    </header>
    <div class="home_gear2_upper_container">
        <h2>
            <?php echo esc_html( get_field('g2_subtitle') ); ?>
        </h2>
        <div class="home_gear2_upper_back">
            <div class="home_gear2_upper_credits">
                <div class="credits_scroll">
                    <div class="credits_track">
                        <div class="credits_group">
                            <?php echo wp_kses_post ( get_field('g2_credits') ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            if( !empty( $g2_icon2 ) ): ?>
                <img
                    src="<?php echo esc_url($g2_icon2['url']); ?>"
                    alt="<?php echo esc_attr($g2_icon2['alt']); ?>"
                />
            <?php endif; ?>
        </div>
    </div>
        <div class="home_gear2_lower_container">
            <div class="home_gear2_lower_container_nitro">
                <div class="nitro-effect">
                    <?php
                    if( !empty( $g2_nitro_image ) ): ?>
                        <img
                            src="<?php echo esc_url($g2_nitro_image['url']); ?>"
                            alt="<?php echo esc_attr($g2_nitro_image['alt']); ?>"
                        />
                    <?php endif; ?>
                </div>
                <span class="home_gear2_lower_container_rev">
                    <?php echo esc_html( get_field('g2_nitro_label') ); ?>
                </span>
            </div>
            <div class="home_gear2_lower_container_lower_wrapper">
                <span>
                    <?php echo esc_html( get_field('g2_button_label') ); ?>
                </span>
                <button>
                    <?php echo esc_html( get_field('g2_button_text') ); ?>
                </button>
            </div>
        </div>
</section>