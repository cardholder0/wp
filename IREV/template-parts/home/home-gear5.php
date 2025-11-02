<?php
/**
 * Template Part: Home Gear5
 */
    $g5_icon = get_field('g5_icon');
    $g5_cards = get_field('g5_cards');
    $g5_faq = get_field('g5_faq');
?>

<section class="home_gear5">
    <header class="home_gear_header">
        <span>
            <?php echo esc_html( get_field('g5_title') ); ?>
        </span>
        <?php
        if( !empty( $g5_icon ) ): ?>
            <img
                    src="<?php echo esc_url($g5_icon['url']); ?>"
                    alt="<?php echo esc_attr($g5_icon['alt']); ?>"
            />
        <?php endif; ?>
    </header>
    <div class="home_gear5_container">
        <h2>
            <?php echo esc_html( get_field('g5_subtitle') ); ?>
        </h2>
        <div class="home_gear5_cards_container">
            <?php
            if( $g5_cards ): ?>
                <div class="cards_card" data-card-index="0">
                    <img
                        src="<?php echo esc_url( $g5_cards['g5_card1_image']['url'] ); ?>"
                        alt="<?php echo esc_url( $g5_cards['g5_card1_image']['alt'] ); ?>"
                    />
                    <div class="card_label">
                        <div class="card_label_wrapper">
                            <img
                                src="<?php echo esc_url( $g5_cards['g5_card1_label_image']['url'] ); ?>"
                                alt="<?php echo esc_url( $g5_cards['g5_card1_label_image']['alt'] ); ?>"
                            />
                            <div>
                                <?php echo esc_html( $g5_cards['g5_card1_label_title'] ); ?>
                            </div>
                        </div>
                        <span>
                            <?php echo esc_html( $g5_cards['g5_card1_label_subtitle'] ); ?>
                        </span>
                    </div>
                    <ul>
                        <li>
                            <span class="label_list_main">
                                <?php echo esc_html( $g5_cards['g5_card1_list1'] ); ?>
                            </span>
                            <span class="label_list_additional">
                                <?php echo esc_html( $g5_cards['g5_card1_list2'] ); ?>
                            </span>
                        </li>
                        <li>
                            <span class="label_list_main">
                                <?php echo esc_html( $g5_cards['g5_card1_list3'] ); ?>
                            </span>
                            <span class="label_list_additional">
                                <?php echo esc_html( $g5_cards['g5_card1_list4'] ); ?>
                            </span>
                        </li>
                        <li>
                            <span class="label_list_main">
                                <?php echo esc_html( $g5_cards['g5_card1_list5'] ); ?>
                            </span>
                            <span class="label_list_additional">
                                <?php echo esc_html( $g5_cards['g5_card1_list6'] ); ?>
                            </span>
                        </li>
                    </ul>
                    <button>
                        <?php echo esc_html( $g5_cards['g5_card1_button'] ); ?>
                    </button>
                </div>

                <div class="cards_card" data-card-index="1">
                    <img
                        src="<?php echo esc_url( $g5_cards['g5_card2_image']['url'] ); ?>"
                        alt="<?php echo esc_url( $g5_cards['g5_card2_image']['alt'] ); ?>"
                    />
                    <div class="card_label">
                        <div class="card_label_wrapper">
                            <img
                                src="<?php echo esc_url( $g5_cards['g5_card2_label_image']['url'] ); ?>"
                                alt="<?php echo esc_url( $g5_cards['g5_card2_label_image']['alt'] ); ?>"
                            />
                            <div>
                                <?php echo esc_html( $g5_cards['g5_card2_label_title'] ); ?>
                            </div>
                        </div>
                        <span>
                            <?php echo esc_html( $g5_cards['g5_card2_label_subtitle'] ); ?>
                        </span>
                    </div>
                    <ul>
                        <li>
                            <span class="label_list_main">
                                <?php echo esc_html( $g5_cards['g5_card2_list1'] ); ?>
                            </span>
                            <span class="label_list_additional">
                                <?php echo esc_html( $g5_cards['g5_card2_list2'] ); ?>
                            </span>
                        </li>
                        <li>
                            <span class="label_list_main">
                                <?php echo esc_html( $g5_cards['g5_card2_list3'] ); ?>
                            </span>
                            <span class="label_list_additional">
                                <?php echo esc_html( $g5_cards['g5_card2_list4'] ); ?>
                            </span>
                        </li>
                        <li>
                            <span class="label_list_main">
                                <?php echo esc_html( $g5_cards['g5_card2_list5'] ); ?>
                            </span>
                            <span class="label_list_additional">
                                <?php echo esc_html( $g5_cards['g5_card2_list6'] ); ?>
                            </span>
                        </li>
                    </ul>
                    <button>
                        <?php echo esc_html( $g5_cards['g5_card2_button'] ); ?>
                    </button>
                </div>

                <div class="cards_card" data-card-index="2">
                    <img
                        src="<?php echo esc_url( $g5_cards['g5_card3_image']['url'] ); ?>"
                        alt="<?php echo esc_url( $g5_cards['g5_card3_image']['alt'] ); ?>"
                    />
                    <div class="card_label">
                        <div class="card_label_wrapper">
                            <img
                                src="<?php echo esc_url( $g5_cards['g5_card3_label_image']['url'] ); ?>"
                                alt="<?php echo esc_url( $g5_cards['g5_card3_label_image']['alt'] ); ?>"
                            />
                            <div>
                                <?php echo esc_html( $g5_cards['g5_card3_label_title'] ); ?>
                            </div>
                        </div>
                        <span>
                             <?php echo esc_html( $g5_cards['g5_card3_label_subtitle'] ); ?>
                        </span>
                    </div>
                    <ul>
                        <li>
                            <span class="label_list_main">
                                <?php echo esc_html( $g5_cards['g5_card3_list1'] ); ?>
                            </span>
                            <span class="label_list_additional">
                                <?php echo esc_html( $g5_cards['g5_card3_list2'] ); ?>
                            </span>
                        </li>
                        <li>
                            <span class="label_list_main">
                                <?php echo esc_html( $g5_cards['g5_card3_list3'] ); ?>
                            </span>
                            <span class="label_list_additional">
                                <?php echo esc_html( $g5_cards['g5_card3_list4'] ); ?>
                            </span>
                        </li>
                        <li>
                            <span class="label_list_main">
                                <?php echo esc_html( $g5_cards['g5_card3_list5'] ); ?>
                            </span>
                            <span class="label_list_additional">
                                <?php echo esc_html( $g5_cards['g5_card3_list6'] ); ?>
                            </span>
                        </li>
                    </ul>
                    <button>
                        <?php echo esc_html( $g5_cards['g5_card3_button'] ); ?>

                    </button>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="home_gear5_lower_container">

        <?php
        if( $g5_faq ): ?>
            <img
                src="<?php echo esc_url( $g5_faq['g5_faq_icon']['url'] ); ?>"
                alt="<?php echo esc_url( $g5_faq['g5_faq_icon']['alt'] ); ?>"
            />
            <h2>
                <?php echo esc_html( $g5_faq['g5_faq_title'] ); ?>
            </h2>
            <div class="home_gear5_accordion">
                <div class="accordion_item">
                    <span>
                        <?php echo esc_html( $g5_faq['g5_faq1_title'] ); ?>
                    </span>
                    <span class="text_opened">
                        <?php echo wp_kses_post( $g5_faq['g5_faq1_description'] ); ?>
                    </span>
                    <button>
                        <img
                            class="open"
                            src="<?php echo esc_url( $g5_faq['g5_faq_open']['url'] ); ?>"
                            alt="<?php echo esc_url( $g5_faq['g5_faq_open']['alt'] ); ?>"
                        />
                        <img
                            class="close"
                            src="<?php echo esc_url( $g5_faq['g5_faq_close']['url'] ); ?>"
                            alt="<?php echo esc_url( $g5_faq['g5_faq_close']['alt'] ); ?>"
                        />
                    </button>
                </div>
                <div class="accordion_item">
                    <span>
                        <?php echo esc_html( $g5_faq['g5_faq2_title'] ); ?>
                    </span>
                    <span class="text_opened">
                        <?php echo wp_kses_post( $g5_faq['g5_faq2_description'] ); ?>
                    </span>
                    <button>
                        <img
                            class="open"
                            src="<?php echo esc_url( $g5_faq['g5_faq_open']['url'] ); ?>"
                            alt="<?php echo esc_url( $g5_faq['g5_faq_open']['alt'] ); ?>"
                        />
                        <img
                            class="close"
                            src="<?php echo esc_url( $g5_faq['g5_faq_close']['url'] ); ?>"
                            alt="<?php echo esc_url( $g5_faq['g5_faq_close']['alt'] ); ?>"
                        />
                    </button>
                </div>
                <div class="accordion_item">
                    <span>
                        <?php echo esc_html( $g5_faq['g5_faq3_title'] ); ?>
                    </span>
                    <span class="text_opened">
                        <?php echo wp_kses_post( $g5_faq['g5_faq2_description'] ); ?>
                    </span>
                    <button>
                        <img
                            class="open"
                            src="<?php echo esc_url( $g5_faq['g5_faq_open']['url'] ); ?>"
                            alt="<?php echo esc_url( $g5_faq['g5_faq_open']['alt'] ); ?>"
                        />
                        <img
                            class="close"
                            src="<?php echo esc_url( $g5_faq['g5_faq_close']['url'] ); ?>"
                            alt="<?php echo esc_url( $g5_faq['g5_faq_close']['alt'] ); ?>"
                        />
                    </button>
                </div>
                <div class="accordion_item">
                    <span>
                        <?php echo esc_html( $g5_faq['g5_faq4_title'] ); ?>
                    </span>
                    <span class="text_opened">
                        <?php echo wp_kses_post( $g5_faq['g5_faq4_description'] ); ?>
                    </span>
                    <button>
                        <img
                            class="open"
                            src="<?php echo esc_url( $g5_faq['g5_faq_open']['url'] ); ?>"
                            alt="<?php echo esc_url( $g5_faq['g5_faq_open']['alt'] ); ?>"
                        />
                        <img
                            class="close"
                            src="<?php echo esc_url( $g5_faq['g5_faq_close']['url'] ); ?>"
                            alt="<?php echo esc_url( $g5_faq['g5_faq_close']['alt'] ); ?>"
                        />
                    </button>
                </div>
                <div class="accordion_item">
                    <span>
                        <?php echo esc_html( $g5_faq['g5_faq5_title'] ); ?>
                    </span>
                    <span class="text_opened">
                        <?php echo wp_kses_post( $g5_faq['g5_faq5_description'] ); ?>
                    </span>
                    <button>
                        <img
                            class="open"
                            src="<?php echo esc_url( $g5_faq['g5_faq_open']['url'] ); ?>"
                            alt="<?php echo esc_url( $g5_faq['g5_faq_open']['alt'] ); ?>"
                        />
                        <img
                            class="close"
                            src="<?php echo esc_url( $g5_faq['g5_faq_close']['url'] ); ?>"
                            alt="<?php echo esc_url( $g5_faq['g5_faq_close']['alt'] ); ?>"
                        />
                    </button>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>