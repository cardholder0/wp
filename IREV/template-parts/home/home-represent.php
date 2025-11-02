<?php
/**
 * Template Part: Home Represent
 */
    $represent_counter_red = get_field('represent_counter_red');
    $represent_counter_yellow = get_field('represent_counter_yellow');
    $represent_counter_green = get_field('represent_counter_green');
    $represent_avatar1 = get_field('represent_avatar1');
    $represent_avatar2 = get_field('represent_avatar2');
    $represent_avatar3 = get_field('represent_avatar3');
    $represent_avatar4 = get_field('represent_avatar4');
    $represent_avatar5 = get_field('represent_avatar5');
    $represent_avatar6 = get_field('represent_avatar6');
    $represent_avatar_stars = get_field('represent_avatar_stars');
    $represent_video = get_field('represent_video');
    $represent_video_playb = get_field('represent_video_playb');
    $represent_video_playw = get_field('represent_video_playw');
    $represent_background = get_field('represent_background');
?>

<section class="home_represent">
    <div class="home_represent_upperWrapper">
        <div class="home_represent_counter">
            <span class="home_represent_counter_timer">00:03,00</span>
            <?php
            if( !empty( $represent_counter_red ) ): ?>
                <img
                    class="home_represent_counter_red"
                    src="<?php echo esc_url($represent_counter_red['url']); ?>"
                    alt="<?php echo esc_attr($represent_counter_red['alt']); ?>"
                />
            <?php endif; ?>
            <?php
            if( !empty( $represent_counter_yellow ) ): ?>
                <img
                    class="home_represent_counter_yellow"
                    src="<?php echo esc_url($represent_counter_yellow['url']); ?>"
                    alt="<?php echo esc_attr($represent_counter_yellow['alt']); ?>"
                />
            <?php endif; ?>
            <?php
            if( !empty( $represent_counter_green ) ): ?>
                <img
                    class="home_represent_counter_green"
                    src="<?php echo esc_url($represent_counter_green['url']); ?>"
                    alt="<?php echo esc_attr($represent_counter_green['alt']); ?>"
                />
            <?php endif; ?>
            <span class="home_represent_counter_go">
                <?php echo esc_html( get_field('represent_counter_go') ); ?>
            </span>
        </div>
        <div class="home_represent_general">
            <h1 class="home_represent_general_slogan">
                <?php echo esc_html( get_field('represent_title') ); ?>
            </h1>
            <div class="home_represent_form_container">
                <form class="home_represent_form">
                    <input
                            type="email"
                            placeholder="Enter e-mail"
                            class="home_represent_form_container_input"
                    />
                    <button
                            class="home_represent_form_container_button"
                            type="submit">
                        <?php echo esc_html( get_field('represent_subscription') ); ?>
                    </button>
                </form>
                <span>
                    <?php echo esc_html( get_field('represent_left') ); ?>
                </span>
            </div>
        </div>
    </div>
    <div class="home_represent_rate">
            <div class="home_represent_rate_avatars">
                <?php
                if( !empty( $represent_avatar1 ) ): ?>
                    <img
                        src="<?php echo esc_url($represent_avatar1['url']); ?>"
                        alt="<?php echo esc_attr($represent_avatar1['alt']); ?>"
                    />
                <?php endif; ?>
                <?php
                if( !empty( $represent_avatar2 ) ): ?>
                    <img
                        src="<?php echo esc_url($represent_avatar2['url']); ?>"
                        alt="<?php echo esc_attr($represent_avatar2['alt']); ?>"
                    />
                <?php endif; ?>
                <?php
                if( !empty( $represent_avatar3 ) ): ?>
                    <img
                        src="<?php echo esc_url($represent_avatar3['url']); ?>"
                        alt="<?php echo esc_attr($represent_avatar3['alt']); ?>"
                    />
                <?php endif; ?>
                <?php
                if( !empty( $represent_avatar4 ) ): ?>
                    <img
                        src="<?php echo esc_url($represent_avatar4['url']); ?>"
                        alt="<?php echo esc_attr($represent_avatar4['alt']); ?>"
                    />
                <?php endif; ?>
                <?php
                if( !empty( $represent_avatar5 ) ): ?>
                    <img
                        src="<?php echo esc_url($represent_avatar5['url']); ?>"
                        alt="<?php echo esc_attr($represent_avatar5['alt']); ?>"
                    />
                <?php endif; ?>
                <?php
                if( !empty( $represent_avatar6 ) ): ?>
                    <img
                        src="<?php echo esc_url($represent_avatar6['url']); ?>"
                        alt="<?php echo esc_attr($represent_avatar6['alt']); ?>"
                    />
                <?php endif; ?>
            </div>
        <?php
        if( !empty( $represent_avatar_stars ) ): ?>
            <img
                class="home_represent_rate_rating"
                src="<?php echo esc_url($represent_avatar_stars['url']); ?>"
                alt="<?php echo esc_attr($represent_avatar_stars['alt']); ?>"
            />
        <?php endif; ?>

        <span>
            <?php echo esc_html( get_field('represent_avatar_text') ); ?>
        </span>
    </div>
    <div class="home_represent_lowerWrapper">
        <span class="home_represent_lowerWrapper_text">
            <?php echo esc_html( get_field('represent_central_text') ); ?>
        </span>
        <div class="home_represent_lowerWrapper_video">
            <div class="video_cont">
                <?php
                if( !empty( $represent_video) ): ?>
                    <video width="100%">
                        <source src="<?php echo esc_url($represent_video['url']); ?>" type="video/mp4">
                    </video>
                <?php endif; ?>
                <?php
                if( !empty( $represent_video_playb ) ): ?>
                    <img
                        src="<?php echo esc_url($represent_video_playb['url']); ?>"
                        alt="<?php echo esc_attr($represent_video_playb['alt']); ?>"
                    />
                <?php endif; ?>
            </div>
            <div class="video_player">
                <span>00:30</span>
                <button>
                    <?php
                    if( !empty( $represent_video_playw ) ): ?>
                        <img
                            src="<?php echo esc_url($represent_video_playw['url']); ?>"
                            alt="<?php echo esc_attr($represent_video_playw['alt']); ?>"
                        />
                    <?php endif; ?>
                </button>
            </div>
        </div>
    </div>
    <?php
    if( !empty( $represent_background  ) ): ?>
        <img
            class="home_represent_backgroundImg"
            src="<?php echo esc_url($represent_background ['url']); ?>"
            alt="<?php echo esc_attr($represent_background ['alt']); ?>"
        />
    <?php endif; ?>
</section>