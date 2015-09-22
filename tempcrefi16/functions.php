<?php

// Tornar o template disponível para tradução
// A tradução pode ser feita em /languages/
load_theme_textdomain( 'tempcrefi16', TEMPLATEPATH . '/languages' );
 
$locale = get_locale();
$locale_file = TEMPLATEPATH . "/languages/$locale.php";
if ( is_readable($locale_file) )
   require_once($locale_file);
 
// Puxar o número de página
function get_page_number() {
          if ( get_query_var('paged') ) {
              print ' | ' . __( 'Page ' , 'tempcrefi16') . get_query_var('paged');
         }
 } // end get_page_number



 //Remove a barra de administração trazida pelo wp_footer logo abaixo do rodapé

remove_action('wp_footer', 'wp_admin_bar_render', 1000);



?>