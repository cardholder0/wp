<?php
/**
 * Template Part: Home Gear3
 */
    $g3_icon = get_field('g3_icon1');
    $g3_bg1 = get_field('g3_bg1');
    $g3_clients = get_field('g3_clients');
    $g3_reviews = get_field('g3_reviews');
    $g3_cases = get_field('g3_cases');
?>

<section class="home_gear3">
    <header class="home_gear_header">
        <span>
            <?php echo esc_html( get_field('g3_title') ); ?>
        </span>
        <?php
        if( !empty( $g3_icon ) ): ?>
            <img
                src="<?php echo esc_url($g3_icon['url']); ?>"
                alt="<?php echo esc_attr($g3_icon['alt']); ?>"
            />
        <?php endif; ?>
    </header>
    <div class="home_gear3_container">
        <h2>
            <?php echo esc_html( get_field('g3_subtitle') ); ?>
        </h2>
        <?php
        if( !empty( $g3_bg1 ) ): ?>
            <img
                class="home_gear3_background"
                src="<?php echo esc_url($g3_bg1['url']); ?>"
                alt="<?php echo esc_attr($g3_bg1['alt']); ?>"
            />
        <?php endif; ?>

        <?php
        if( $g3_clients ): ?>
            <div class="home_gear3_clients">
                <div class="home_gear3_clients_avatar">
                    <div class="avatar-item">
                        <button data-trigger="client1">
                            <img
                                src="<?php echo esc_url( $g3_clients['g3_client1_image']['url'] ); ?>"
                                alt="<?php echo esc_url( $g3_clients['g3_client1_image']['alt'] ); ?>"
                            />
                        </button>
                        <div class="tooltip">
                            <?php echo esc_html( $g3_clients['g3_client1_name'] ); ?>
                        </div>
                    </div>
                    <div class="avatar-item">
                        <button data-trigger="client2">
                            <img
                                src="<?php echo esc_url( $g3_clients['g3_client2_image']['url'] ); ?>"
                                alt="<?php echo esc_url( $g3_clients['g3_client2_image']['alt'] ); ?>"
                            />
                        </button>
                        <div class="tooltip">
                            <?php echo esc_html( $g3_clients['g3_client2_name'] ); ?>
                        </div>
                    </div>
                    <div class="avatar-item">
                        <button data-trigger="client3">
                            <img
                                src="<?php echo esc_url( $g3_clients['g3_client3_image']['url'] ); ?>"
                                alt="<?php echo esc_url( $g3_clients['g3_client3_image']['alt'] ); ?>"
                            />
                        </button>
                        <div class="tooltip">
                            <?php echo esc_html( $g3_clients['g3_client3_name'] ); ?>
                        </div>
                    </div>
                    <div class="avatar-item selected">
                        <button data-trigger="client4">
                            <img
                                src="<?php echo esc_url( $g3_clients['g3_client4_image']['url'] ); ?>"
                                alt="<?php echo esc_url( $g3_clients['g3_client4_image']['alt'] ); ?>"
                            />
                        </button>
                        <div class="tooltip">
                            <?php echo esc_html( $g3_clients['g3_client4_name'] ); ?>
                        </div>
                    </div>
                    <div class="avatar-item">
                        <button data-trigger="client5">
                            <img
                                src="<?php echo esc_url( $g3_clients['g3_client5_image']['url'] ); ?>"
                                alt="<?php echo esc_url( $g3_clients['g3_client5_image']['alt'] ); ?>"
                            />
                        </button>
                        <div class="tooltip">
                            <?php echo esc_html( $g3_clients['g3_client5_name'] ); ?>
                        </div>
                    </div>
                    <div class="avatar-item">
                        <button data-trigger="client6">
                            <img
                                src="<?php echo esc_url( $g3_clients['g3_client6_image']['url'] ); ?>"
                                alt="<?php echo esc_url( $g3_clients['g3_client6_image']['alt'] ); ?>"
                            />
                        </button>
                        <div class="tooltip">
                            <?php echo esc_html( $g3_clients['g3_client6_name'] ); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php
        if( $g3_reviews ): ?>
            <div class="home_gear3_reviews">
                <div class="home_gear3_reviews_review" data-client="client1">
                    <span>
                        <?php echo wp_kses_post( $g3_reviews['g3_review1_text'] ); ?>
                    </span>
                    <div class="client">
                        <img
                            src="<?php echo esc_url( $g3_reviews['g3_review1_image']['url'] ); ?>"
                            alt="<?php echo esc_url( $g3_reviews['g3_review1_image']['alt'] ); ?>"
                        />
                        <div class="client_info">
                            <span class="client_name">
                                <?php echo esc_html( $g3_reviews['g3_review1_name'] ); ?>
                            </span>
                            <span class="client_additional">
                                <?php echo esc_html( $g3_reviews['g3_review1_company'] ); ?>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="home_gear3_reviews_review" data-client="client2">
                    <span>
                        <?php echo wp_kses_post( $g3_reviews['g3_review2_text'] ); ?>
                    </span>
                    <div class="client">
                        <img
                            src="<?php echo esc_url( $g3_reviews['g3_review2_image']['url'] ); ?>"
                            alt="<?php echo esc_url( $g3_reviews['g3_review2_image']['alt'] ); ?>"
                        />
                        <div class="client_info">
                            <span class="client_name">
                                <?php echo esc_html( $g3_reviews['g3_review2_name'] ); ?>
                            </span>
                            <span class="client_additional">
                                <?php echo esc_html( $g3_reviews['g3_review2_company'] ); ?>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="home_gear3_reviews_review" data-client="client3">
                    <span>
                        <?php echo wp_kses_post( $g3_reviews['g3_review3_text'] ); ?>
                    </span>
                    <div class="client">
                        <img
                            src="<?php echo esc_url( $g3_reviews['g3_review3_image']['url'] ); ?>"
                            alt="<?php echo esc_url( $g3_reviews['g3_review3_image']['alt'] ); ?>"
                        />
                        <div class="client_info">
                            <span class="client_name">
                                <?php echo esc_html( $g3_reviews['g3_review3_name'] ); ?>
                            </span>
                            <span class="client_additional">
                                <?php echo esc_html( $g3_reviews['g3_review3_company'] ); ?>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="home_gear3_reviews_review selected" data-client="client4">
                    <span>
                        <?php echo wp_kses_post( $g3_reviews['g3_review4_text'] ); ?>
                    </span>
                    <div class="client">
                        <img
                            src="<?php echo esc_url( $g3_reviews['g3_review4_image']['url'] ); ?>"
                            alt="<?php echo esc_url( $g3_reviews['g3_review4_image']['alt'] ); ?>"
                        />
                        <div class="client_info">
                            <span class="client_name">
                                <?php echo esc_html( $g3_reviews['g3_review4_name'] ); ?>
                            </span>
                            <span class="client_additional">
                                <?php echo esc_html( $g3_reviews['g3_review4_company'] ); ?>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="home_gear3_reviews_review" data-client="client5">
                    <span>
                        <?php echo wp_kses_post( $g3_reviews['g3_review5_text'] ); ?>
                    </span>
                    <div class="client">
                        <img
                            src="<?php echo esc_url( $g3_reviews['g3_review5_image']['url'] ); ?>"
                            alt="<?php echo esc_url( $g3_reviews['g3_review5_image']['alt'] ); ?>"
                        />
                        <div class="client_info">
                            <span class="client_name">
                                <?php echo esc_html( $g3_reviews['g3_review5_name'] ); ?>
                            </span>
                            <span class="client_additional">
                                <?php echo esc_html( $g3_reviews['g3_review5_company'] ); ?>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="home_gear3_reviews_review" data-client="client6">
                    <span>
                        <?php echo wp_kses_post( $g3_reviews['g3_review6_text'] ); ?>
                    </span>
                    <div class="client">
                        <img
                            src="<?php echo esc_url( $g3_reviews['g3_review6_image']['url'] ); ?>"
                            alt="<?php echo esc_url( $g3_reviews['g3_review6_image']['alt'] ); ?>"
                        />
                        <div class="client_info">
                            <span class="client_name">
                                <?php echo esc_html( $g3_reviews['g3_review6_name'] ); ?>
                            </span>
                            <span class="client_additional">
                                <?php echo esc_html( $g3_reviews['g3_review6_company'] ); ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <?php
    if( $g3_cases): ?>
        <div class="home_gear3_lower_container">
            <h2>
                <?php echo esc_html( $g3_cases['g3_cases_title'] ); ?>
            </h2>
            <img
                class="back"
                src="<?php echo esc_url( $g3_cases['g3_cases_bg']['url'] ); ?>"
                alt="<?php echo esc_url( $g3_cases['g3_cases_bg']['alt'] ); ?>"
            />
            <div class="dashed_vertical"></div>
            <div class="dashed_horizontal"></div>
            <div class="lower_wrapper">
                <?php if( have_rows('g3_cases') ): while( have_rows('g3_cases') ): the_row();
                    $g3_cases_left = get_sub_field('g3_cases_left');
                    $g3_cases_right = get_sub_field('g3_cases_right');
                ?>
                <div class="home_gear3_lower_left">
                    <div class="dashed_vertical"></div>
                    <div class="label">
                        <img
                            src="<?php echo esc_url( $g3_cases_left['g3_cases_left_icon']['url'] ); ?>"
                            alt="<?php echo esc_url( $g3_cases_left['g3_cases_left_icon']['alt'] ); ?>"
                        />
                        <div>
                            <?php echo esc_html( $g3_cases_left['g3_cases_left_title'] ); ?>
                        </div>
                    </div>
                    <span>
                        <?php echo esc_html( $g3_cases_left['g3_cases_left_subtitle'] ); ?>
                    </span>
                    <div class="cases_wraper">
                        <div class="case">
                            <div class="dashed_vertical"></div>
                            <div class="case_label">
                                <img
                                    src="<?php echo esc_url( $g3_cases_left['g3_cases_left_case1_icon']['url'] ); ?>"
                                    alt="<?php echo esc_url( $g3_cases_left['g3_cases_left_case1_icon']['alt'] ); ?>"
                                />
                                <span>
                                    <?php echo esc_html( $g3_cases_left['g3_cases_left_case1_title'] ); ?>
                                </span>
                            </div>
                            <span>
                                <?php echo esc_html( $g3_cases_left['g3_cases_left_case1_description'] ); ?>
                            </span>
                        </div>

                        <div class="case">
                            <div class="dashed_vertical"></div>
                            <div class="case_label">
                                <img
                                    src="<?php echo esc_url( $g3_cases_left['g3_cases_left_case2_icon']['url'] ); ?>"
                                    alt="<?php echo esc_url( $g3_cases_left['g3_cases_left_case2_icon']['alt'] ); ?>"
                                />
                                <span>
                                    <?php echo esc_html( $g3_cases_left['g3_cases_left_case2_title'] ); ?>
                                </span>
                            </div>
                            <span>
                                <?php echo esc_html( $g3_cases_left['g3_cases_left_case2_description'] ); ?>
                            </span>
                        </div>

                        <div class="case">
                            <div class="dashed_vertical"></div>
                            <div class="case_label">
                                <img
                                    src="<?php echo esc_url( $g3_cases_left['g3_cases_left_case3_icon']['url'] ); ?>"
                                    alt="<?php echo esc_url( $g3_cases_left['g3_cases_left_case3_icon']['alt'] ); ?>"
                                />
                                <span>
                                    <?php echo esc_html( $g3_cases_left['g3_cases_left_case3_title'] ); ?>
                                </span>
                            </div>
                            <span>
                                <?php echo esc_html( $g3_cases_left['g3_cases_left_case3_description'] ); ?>
                            </span>
                        </div>
                    </div>
                    <button>
                        <?php echo esc_html( $g3_cases_left['g3_cases_left_button'] ); ?>
                    </button>
                </div>
                <div class="home_gear3_lower_right">
                    <div class="dashed_vertical"></div>
                    <div class="label">
                        <img
                            src="<?php echo esc_url( $g3_cases_right['g3_cases_right_icon']['url'] ); ?>"
                            alt="<?php echo esc_url( $g3_cases_right['g3_cases_right_icon']['alt'] ); ?>"
                        />
                        <div>
                            <?php echo esc_html( $g3_cases_right['g3_cases_right_title'] ); ?>
                        </div>
                    </div>
                    <span>
                        <?php echo esc_html( $g3_cases_right['g3_cases_right_subtitle'] ); ?>
                    </span>
                </div>
            </div>

            <div class="right_bottom">
                <div class="right_cases_wrapper">
                    <div class="case">
                        <div class="dashed_vertical"></div>
                        <div class="case_label">
                            <span>
                                <?php echo esc_html( $g3_cases_right['g3_cases_right_case1_title'] ); ?>
                            </span>
                        </div>
                        <span>
                            <?php echo esc_html( $g3_cases_right['g3_cases_right_case1_description'] ); ?>
                        </span>
                    </div>

                    <div class="case">
                        <div class="dashed_vertical"></div>
                        <div class="case_label">
                            <span>
                                <?php echo esc_html( $g3_cases_right['g3_cases_right_case2_title'] ); ?>
                            </span>
                        </div>
                        <span>
                             <?php echo esc_html( $g3_cases_right['g3_cases_right_case2_description'] ); ?>
                        </span>
                    </div>

                    <div class="case">
                        <div class="dashed_vertical"></div>
                        <div class="case_label">
                            <span>
                                <?php echo esc_html( $g3_cases_right['g3_cases_right_case3_title'] ); ?>
                            </span>
                        </div>
                        <span>
                             <?php echo esc_html( $g3_cases_right['g3_cases_right_case3_description'] ); ?>
                        </span>
                    </div>
                </div>
                <button>
                    <?php echo esc_html( $g3_cases_right['g3_cases_right_button'] ); ?>
                </button>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    <?php endif; ?>
</section>