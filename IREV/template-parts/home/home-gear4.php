<?php
/**
 * Template Part: Home Gear4
 */
    $g4_icon = get_field('g4_icon');
    $g4_winner = get_field('g4_winner');
    $g4_industries = get_field('g4_industries');
    $g4_bg = get_field('g4_bg');
?>

<section class="home_gear4">
    <header class="home_gear_header">
        <span>
            <?php echo esc_html( get_field('g4_title') ); ?>
        </span>
        <?php
        if( !empty( $g4_icon ) ): ?>
            <img
                src="<?php echo esc_url($g4_icon['url']); ?>"
                alt="<?php echo esc_attr($g4_icon['alt']); ?>"
            />
        <?php endif; ?>
    </header>
    <?php
    if( $g4_winner ): ?>
    <!-- todo:тут картинка немного странная у звезды, не хочет добавляться в админку, поэтому прямой путь пока -->
        <div class="home_gear4_container">
            <img
                class="star1"
                src="<?php echo esc_url(get_theme_file_uri('src/icons/gear4star.svg')); ?>"
                alt="<?php echo esc_url( $g4_winner['g4_winner_star_icon']['alt'] ); ?>"
            />
            <img
                class="star2"
                src="<?php echo esc_url(get_theme_file_uri('src/icons/gear4star.svg')); ?>"
                alt="<?php echo esc_url( $g4_winner['g4_winner_star_icon']['alt'] ); ?>"
            />
            <img
                class="star3"
                src="<?php echo esc_url(get_theme_file_uri('src/icons/gear4star.svg')); ?>"
                alt="<?php echo esc_url( $g4_winner['g4_winner_star_icon']['alt'] ); ?>"
            />
            <img
                class="star4"
                src="<?php echo esc_url(get_theme_file_uri('src/icons/gear4star.svg')); ?>"
                alt="<?php echo esc_url( $g4_winner['g4_winner_star_icon']['alt'] ); ?>"
            />
            <img
                src="<?php echo esc_url( $g4_winner['g4_winner_award_icon']['url'] ); ?>"
                alt="<?php echo esc_url( $g4_winner['g4_winner_award_icon']['alt'] ); ?>"
            />
            <div class="text_wrapper">
                <span class="text_main">
                    <?php echo esc_html( $g4_winner['g4_winner_title'] ); ?>
                </span>
                <span class="text_additional">
                    <?php echo esc_html( $g4_winner['g4_winner_subtitle'] ); ?>
                </span>
            </div>
        </div>
    <?php endif; ?>

    <div class="home_gear4_lower_container">
        <?php
        if( $g4_industries): ?>
            <h2>
                <?php echo esc_html( $g4_industries['g4_industries_title'] ); ?>
            </h2>
            <div class="home_gear4_lower_label_wrapper">
                <div class="label">
                    <div class="label_upper">
                        <?php echo esc_html( $g4_industries['g4_industry1_label'] ); ?>
                    </div>
                    <div class="border">
                        <div class="border_vertical">
                            <div class="upper_circle circle1"></div>
                            <div class="lower_circle circle2"></div>
                        </div>
                        <div class="border_horizontal"></div>
                    </div>
                    <div class="label_lower">
                        <?php echo esc_html( $g4_industries['g4_industry2_label'] ); ?>
                    </div>
                </div>
                <div class="border_link"></div>
                <div class="label">
                    <div class="label_upper">
                        <?php echo esc_html( $g4_industries['g4_industry3_label'] ); ?>
                    </div>
                    <div class="border">
                        <div class="border_horizontal"></div>
                        <div class="border_vertical second">
                            <div class="upper_circle circle3"></div>
                            <div class="lower_circle circle4"></div>
                        </div>
                        <div class="border_horizontal"></div>
                    </div>
                    <div class="label_lower">
                        <?php echo esc_html( $g4_industries['g4_industry4_label'] ); ?>
                    </div>
                </div>
                <div class="border_link"></div>
                <div class="label third">
                    <div class="label_upper">
                        <?php echo esc_html( $g4_industries['g4_industry5_label'] ); ?>
                    </div>
                    <div class="border">
                        <div class="border_horizontal"></div>
                        <div class="border_vertical second">
                            <div class="upper_circle circle5"></div>
                        </div>
                    </div>
                    <div class="label_lower last">
                        <img
                            src="<?php echo esc_url( $g4_industries['g4_industries_image']['url'] ); ?>"
                            alt="<?php echo esc_url( $g4_industries['g4_industries_image']['alt'] ); ?>"
                        />
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php
        if( !empty( $g4_bg ) ): ?>
            <img
                class="gear4back"
                src="<?php echo esc_url($g4_bg['url']); ?>"
                alt="<?php echo esc_attr($g4_bg['alt']); ?>"
            />
        <?php endif; ?>
    </div>
</section>