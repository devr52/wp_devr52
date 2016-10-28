<?php

/* Collection of Walker classes */

class Walker_Nav_Primary extends Walker_Nav_Menu {

   public function start_lvl( &$output, $depth = 0, $args = array() ) { //ul generation
      $indent  = str_repeat("\t", $depth);
      $submenu = ($depth > 0 ? ' sub-menu' : '');
      $output .= "\n$indent<ul class=\"dropdown-menu$submenu \">\n";
   }


   public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) { //li a generation
      $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

      $li_attr = '';
      $class_names = $value = '';

      $classes = empty( $item->classes ) ? array() : (array) $item->classes;
      $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
      $classes[] = ($item->current || $item->current_item_anchestor) ? 'active' : '';
      $classes[] = 'menu-item-' . $item->ID;
      if($depth && $args->walker->has_children) $classes[] = 'dropdown-submenu';

      /**
		 * Filters the CSS class(es) applied to a menu item's list item element.
		 *
		 * @since 3.0.0
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param array  $classes The CSS classes that are applied to the menu item's `<li>` element.
		 * @param object $item    The current menu item.
		 * @param array  $args    An array of wp_nav_menu() arguments.
		 * @param int    $depth   Depth of menu item. Used for padding.
		 */

      $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
      $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

      /**
		 * Filters the ID applied to a menu item's list item element.
		 *
		 * @since 3.0.1
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param string $menu_id The ID that is applied to the menu item's `<li>` element.
		 * @param object $item    The current menu item.
		 * @param array  $args    An array of wp_nav_menu() arguments.
		 * @param int    $depth   Depth of menu item. Used for padding.
		 */
      $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
      $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

      $output .= $indent . '<li' . $id . $value . $li_attr . $class_names .'>';

      $attributes  = ! empty( $item->attr_title ) ? ' title="' . esc_attr($item->attr_title) . '"': '';
      $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr($item->target) . '"' : '';
      $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
      $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : '';
      $attributes .= ($args->has_children) ? ' class="dropdown-toggle" data-toggle="dropdown"' : '';
      $attributes .= ' class="page-scroll"';

      $item_output = $args->before;
      $item_output .= '<a'. $attributes .'>';
      $item_output .= $args->link_before .apply_filters('the_title' , $item->title,$item->ID) . $args->link_after;
      $item_output .= ($depth == 0 && $args->walker->has_children) ? ' <b class="caret"></b></a>' : '</a>';
      $item_output .= $args->after;

      /**
		 * Filters a menu item's starting output.
		 *
		 * The menu item's starting output only includes `$args->before`, the opening `<a>`,
		 * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
		 * no filter for modifying the opening and closing `<li>` for a menu item.
		 *
		 * @since 3.0.0
		 *
		 * @param string $item_output The menu item's starting HTML output.
		 * @param object $item        Menu item data object.
		 * @param int    $depth       Depth of menu item. Used for padding.
		 * @param array  $args        An array of wp_nav_menu() arguments.
		 */
      $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
   }

   public function end_lvl( &$output, $depth = 0, $args = array() ) {
      $indent = str_repeat("\t", $depth);
      $output .= "$indent</ul>\n";
   }

   public function end_el( &$output, $item, $depth = 0, $args = array() ) {
      $output .= "</li>\n";
   }

}















