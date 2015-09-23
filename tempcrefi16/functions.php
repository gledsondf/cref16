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

//add_theme_support( 'post-thumbnails' );// Adicionar para Posts e páginas

add_theme_support( 'post-thumbnails', array( 'post' ) ); // Adicionar para Posts
//add_theme_support( 'post-thumbnails', array( 'page' ) ); // Adicionar para Páginas

set_post_thumbnail_size( 200, 100,true); // 50 pixeis de largura por 50 pixeis de altura, no modo hard-cropping


/*==========================================================================*/
//Gledson 23/09/2015

/* função para remover as imagens das páginas*/

function remove_images( $content ) {
   $postOutput = preg_replace('/<img[^>]+./','', $content);
   return $postOutput;
}


// remove o filtro de remover imagem

/*<?php  remove_filter( 'the_content', 'remove_images', 100 ); ?>*/

//adiciona o filtro de remover imagem
/*<?php add_filter( 'the_content', 'remove_images', 100 ); ?>*/

/*==========================================================================*/

?>