<?php
class Footer_Walker extends Walker_Nav_Menu {

    public function start_lvl( &$output, $depth = 0, $args = null ) {
        // ничего не делаем — вложенность обработаем вручную
    }

    public function end_lvl( &$output, $depth = 0, $args = null ) {
        // ничего не делаем
    }

    public function start_el(  &$output, $item, $depth = 0, $args = null, $id = 0  ) {
        $title = esc_html($item->title);
        $url   = esc_url($item->url ?: '#');
        $attr  = esc_attr($item->attr_title);
        $has_children = in_array('menu-item-has-children', $item->classes);

        // Верхний уровень = заголовок колонки
        if ( $depth === 0 ) {
            if ( $has_children ) {
                $output .= '<div class="footer_nav_list">';
                $output .= '<span class="footer_nav_list_title">' . $title . '</span>';
                $output .= '<ul class="footer_nav_list_list">';
            } else {
                // если вдруг будет одиночный элемент без подменю
                $output .= '<div class="footer_nav_list">';
                $output .= '<span class="footer_nav_list_title">' . $title . '</span>';
                $output .= '<ul class="footer_nav_list_list">';
            }
        } else {
            // Второй уровень — элементы списка
            $output .= '<li><a href="' . $url . '">' . $title . '</a></li>';
        }
    }

    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        if ( $depth === 0 ) {
            $output .= '</ul></div>';
        }
    }
}
