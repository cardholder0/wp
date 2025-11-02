<?php
/**
 * Template Part: Home Gear1
 */
    $g1_icon = get_field('g1_icon');
    $g1_section1 = get_field('g1_section1');
    $g1_section2 = get_field('g1_section2');
    $g1_section3 = get_field('g1_section3');
    $g1_section4 = get_field('g1_section4');
    $g1_section5 = get_field('g1_section5');
?>

<section class="home_gear1">
    <header class="home_gear_header">
        <span>
            <?php echo esc_html( get_field('g1_title') ); ?>
        </span>
        <?php
        if( !empty( $g1_icon ) ): ?>
            <img
                src="<?php echo esc_url($g1_icon['url']); ?>"
                alt="<?php echo esc_attr($g1_icon['alt']); ?>"
            />
        <?php endif; ?>
    </header>
    <div class="home_gear1_wrapper">
        <?php
        if( $g1_section1 ): ?>
            <div class="home_gear1_info_container" data-section="1">
                <span class="home_gear1_info_label">
                    <?php echo esc_html( $g1_section1['g1_section1_title'] ); ?>
                </span>
                <div class="home_gear1_info_text_container">
                    <h2>
                        <?php echo esc_html( $g1_section1['g1_section1_subtitle'] ); ?>
                    </h2>
                    <span class="home_gear1_info_text_container_text">
                        <?php echo wp_kses_post( $g1_section1['g1_section1_description'] ); ?>
                    </span>
                </div>
            </div>
        <?php endif; ?>

        <?php
        if( $g1_section2 ): ?>
            <div class="home_gear1_info_container" data-section="2">
                <span class="home_gear1_info_label">
                    <?php echo esc_html( $g1_section2['g1_section2_title'] ); ?>
                </span>
                <div class="home_gear1_info_text_container">
                    <h2>
                        <?php echo esc_html( $g1_section2['g1_section2_subtitle'] ); ?>
                    </h2>
                    <span class="home_gear1_info_text_container_text">
                        <?php echo wp_kses_post( $g1_section2['g1_section2_description'] ); ?>
                    </span>
                </div>
            </div>
        <?php endif; ?>

        <?php
        if( $g1_section3 ): ?>
            <div class="home_gear1_info_container" data-section="3">
                <span class="home_gear1_info_label">
                    <?php echo esc_html( $g1_section3['g1_section3_title'] ); ?>
                </span>
                <div class="home_gear1_info_text_container">
                    <h2>
                        <?php echo esc_html( $g1_section3['g1_section3_subtitle'] ); ?>
                    </h2>
                    <span class="home_gear1_info_text_container_text">
                        <?php echo wp_kses_post( $g1_section3['g1_section3_description'] ); ?>
                    </span>
                </div>
            </div>
        <?php endif; ?>

        <?php
        if( $g1_section4 ): ?>
            <div class="home_gear1_info_container" data-section="4">
                <span class="home_gear1_info_label">
                    <?php echo esc_html( $g1_section4['g1_section4_title'] ); ?>
                </span>
                <div class="home_gear1_info_text_container">
                    <h2>
                        <?php echo esc_html( $g1_section4['g1_section4_subtitle'] ); ?>
                    </h2>
                    <span class="home_gear1_info_text_container_text">
                        <?php echo wp_kses_post( $g1_section4['g1_section4_description'] ); ?>
                    </span>
                </div>
            </div>
        <?php endif; ?>

        <?php
        if( $g1_section5 ): ?>
            <div class="home_gear1_info_container" data-section="5">
                <span class="home_gear1_info_label">
                    <?php echo esc_html( $g1_section5['g1_section5_title'] ); ?>
                </span>
                <div class="home_gear1_info_text_container">
                    <h2>
                        <?php echo esc_html( $g1_section5['g1_section5_subtitle'] ); ?>
                    </h2>
                    <span class="home_gear1_info_text_container_text">
                        <?php echo wp_kses_post( $g1_section5['g1_section5_description'] ); ?>
                    </span>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>