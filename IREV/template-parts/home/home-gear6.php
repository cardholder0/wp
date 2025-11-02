<?php
/**
 * Template Part: Home Gear6
 */
    $g6_icon = get_field('g6_icon');
    $g6_bg = get_field('g6_bg');
?>

<section class="home_gear6">
    <header class="home_gear_header">
        <span>
             <?php echo esc_html( get_field('g6_title') ); ?>
        </span>
        <?php
        if( !empty( $g6_icon ) ): ?>
            <img
                src="<?php echo esc_url($g6_icon['url']); ?>"
                alt="<?php echo esc_attr($g6_icon['alt']); ?>"
            />
        <?php endif; ?>
    </header>
    <div class="home_gear6_container">
        <h2>
            <?php echo esc_html( get_field('g6_subtitle') ); ?>
        </h2>
        <button class="open_modal">
            <?php echo esc_html( get_field('g6_button') ); ?>
        </button>
        <?php
        if( !empty( $g6_bg ) ): ?>
            <img
                src="<?php echo esc_url($g6_bg['url']); ?>"
                alt="<?php echo esc_attr($g6_bg['alt']); ?>"
            />
        <?php endif; ?>
    </div>
</section>