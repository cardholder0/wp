<?php
/**
 * Template Part: Home Represent Popup
 */
    $popup_cancel = get_field('popup_cancel');
    $popup_video = get_field('popup_video');
    $popup_play = get_field('popup_play');
    $popup_content1_image = get_field('popup_content1_image');
    $popup_content2_image = get_field('popup_content2_image');
?>

<div class="home_popup_overlay">
    <div class="home_popup_content">
            <div class="home_popup_content_upper">
                <div class="home_popup_content_label">
                    <div class="home_popup_content_label_wrapper">
                        <span>
                            <?php echo esc_html( get_field('popup_hurry') ); ?>
                        </span>
                        <span class="home_popup_content_label_wrapper_counter">
                            00:15:00
                        </span>
                    </div>
                    <span>
                        <?php echo esc_html( get_field('popup_discount') ); ?>
                    </span>
                </div>
                <button>
                    <?php
                    if( !empty( $popup_cancel ) ): ?>
                        <img
                            src="<?php echo esc_url($popup_cancel['url']); ?>"
                            alt="<?php echo esc_attr($popup_cancel['alt']); ?>"
                        />
                    <?php endif; ?>
                </button>
            </div>
        <h2>
            <?php echo esc_html( get_field('popup_title') ); ?>
        </h2>
        <div class="home_popup_content_lower">

            <?php echo do_shortcode( '[contact-form-7 id="af13255"]' ); ?>

            <div class="home_popup_content_lower_rightcont">
                <div class="home_popup_content_lower_rightcont_video">
                    <?php
                    if( !empty( $popup_video ) ): ?>
                        <video width="100%" id="popupVideo">
                            <source src="<?php echo esc_url($popup_video['url']); ?>" type="video/mp4">
                        </video>
                    <?php endif; ?>
                    <?php
                    if( !empty( $popup_play ) ): ?>
                        <img
                            src="<?php echo esc_url($popup_play['url']); ?>"
                            alt="<?php echo esc_attr($popup_play['alt']); ?>"
                        />
                    <?php endif; ?>
                </div>
                <span>
                    <?php echo esc_html( get_field('popup_video_title') ); ?>
                </span>
                <div class="home_popup_content_lower_rightcont_lower">
                    <div class="home_popup_content_lower_rightcont_lower_phrase">
                        <span>
                            <?php echo esc_html( get_field('popup_content1_title') ); ?>
                        </span>
                        <?php
                        if( !empty( $popup_content1_image) ): ?>
                            <img
                                src="<?php echo esc_url($popup_content1_image['url']); ?>"
                                alt="<?php echo esc_attr($popup_content1_image['alt']); ?>"
                            />
                        <?php endif; ?>
                    </div>
                    <div class="home_popup_content_lower_rightcont_lower_award">
                        <?php
                        if( !empty( $popup_content2_image) ): ?>
                            <img
                                src="<?php echo esc_url($popup_content2_image['url']); ?>"
                                alt="<?php echo esc_attr($popup_content2_image['alt']); ?>"
                            />
                        <?php endif; ?>
                        <span class="home_popup_content_lower_rightcont_lower_award_title">
                            <?php echo esc_html( get_field('popup_content2_title') ); ?>
                        </span>
                        <span class="home_popup_content_lower_rightcont_lower_award_text">
                            <?php echo esc_html( get_field('popup_content2_subtitle') ); ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal-overlay" id="modalOverlay">
    <div class="modal">
        <div class="modal-video">
            <?php
            if( !empty( $popup_video ) ): ?>
                <video width="100%">
                    <source src="<?php echo esc_url($popup_video['url']); ?>" type="video/mp4">
                </video>
            <?php endif; ?>
            <?php
            if( !empty( $popup_play ) ): ?>
                <img
                    src="<?php echo esc_url($popup_play['url']); ?>"
                    alt="<?php echo esc_attr($popup_play['alt']); ?>"
                />
            <?php endif; ?>
        </div>
        <form class="modal-form">
            <input type="email" class="form-input" placeholder="Enter e-mail">
            <button class="form-button">TALK TO SALES</button>
        </form>
    </div>
</div>

