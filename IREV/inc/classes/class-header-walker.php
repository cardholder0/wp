<?php
class Custom_Header_Walker extends Walker_Nav_Menu {

    private $dropdowns = []; // соберём dropdown-меню отдельно

    public function start_lvl( &$output, $depth = 0, $args = null ) {
        // ничего не делаем — dropdown будет выводиться в конце
    }

    public function end_lvl( &$output, $depth = 0, $args = null ) {
        // ничего не делаем
    }

    public function start_el(  &$output, $item, $depth = 0, $args = null, $id = 0  ) {
        $title = esc_html($item->title);
        $url   = esc_url($item->url ?: '#');
        $attr  = esc_attr($item->attr_title);
        $has_children = in_array('menu-item-has-children', $item->classes);

        // Верхний уровень
        if ( $depth === 0 ) {

            $output .= '<div class="header_menu_item" '
                . ( $has_children ? 'data-dropdown-trigger="' . $attr . '"' : '' )
                . '>';

            if ( $has_children ) {
                $output .= '<div class="header_menu_item_inner">';
                $output .= '<button>' . $title . '</button>';
                $output .= '<img src="' . esc_url(get_theme_file_uri('src/icons/miniArrow.svg')) . '" alt="arrow" class="header_menu_item_arrow_unselected"/>';
                $output .= '<img src="' . esc_url(get_theme_file_uri('src/icons/arrowSelected.svg')) . '" alt="arrow" class="header_menu_item_arrow_selected"/>';
                $output .= '</div>';
            } else {
                // без подменю — просто текст или ссылка
                $output .= '<a href="' . $url . '">' . $title . '</a>';
            }

            $output .= '</div>';

            // собираем подменю отдельно
            if ( $has_children ) {
                $children_html = $this->get_dropdown_html( $item );
                if ( $children_html ) {
                    $this->dropdowns[] = '<div class="nav_dropdown" data-dropdown-content="' . $attr . '">' . $children_html . '</div>';
                }
            }

        }
    }

    private function get_dropdown_html( $parent_item ) {
        $children = get_posts([
            'post_type'      => 'nav_menu_item',
            'numberposts'    => -1,
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
            'post_status'    => 'publish',
            'meta_key'       => '_menu_item_menu_item_parent',
            'meta_value'     => $parent_item->ID
        ]);

        if ( empty($children) ) {
            return '';
        }

        $html = '';
        foreach ( $children as $child ) {
            $child_item = wp_setup_nav_menu_item($child);
            $html .= '<a href="' . esc_url($child_item->url) . '">' . esc_html($child_item->title) . '</a>';
        }

        return $html;
    }

    // Вызывается после wp_nav_menu()
    public function get_dropdowns_html() {
        if ( empty($this->dropdowns) ) return '';
        return '<div class="nav_dropdown_container">' . implode('', $this->dropdowns) . '</div>';
    }
}
