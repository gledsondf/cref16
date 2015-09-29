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

function register_my_menus() {
  register_nav_menus(
  	array(
  			'menu-principal' => __('Menu Principal'),
  			'menu-acesso-rapido' => __( 'Menu Acesso Rápido' ),
  			'menu-servicos' => __('Serviços')
  		)

  );
}
add_action( 'init', 'register_my_menus' );

/*========================================================================== social midia buttons*/
//esta function adiciona uma barra de rodapé no artigo contendo links de compartilhamento mídias sociais e lista no rodapé a categoria do artigo

function midiaSocialbtn ($content) {
	if (is_singular()|| is_home()) {
		$atalhoURL = get_permalink();
		$atalhoTitle = get_the_title();
		$atalhoListaCategoria = get_the_category_list(', ');
		$atalhoTemplateURL = get_bloginfo('template_url');
		$twitterURL = 'https://twitter.com/intent/tweet?text='.$atalhoTitle.'&amp;url='.$atalhoURL;
		$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$atalhoURL;


		$content .= '<div class="artFoot row">';
		$content .= '<footer>';
		$content .= '<div class="col-2terco">
						<p>CREFFITO 16 </p>
						<ul>
							<li><span>categoria:</span>'.$atalhoListaCategoria.'</li>
						</ul>
					</div>';

		$content .= '<ul class="col-terco">
		<li><span>compartilhe: </span></li>';
		$content .=	'<li><a href="'. $facebookURL .'" target="_blank"><img title="facebook"  alt="facebook" src="'. $atalhoTemplateURL.'/img/logoFace_p.png"  /></a></li>';
			/*<li><a href="#"><img title="Youtube"  alt="Youtube" src="<?php bloginfo('template_url'); ?>/img/logoYoutube_p.png" /></a></li>*/
		$content .=	'<li><a href="'. $twitterURL .'" target="_blank"><img title="Twitter"  alt="Twitter" src="'. $atalhoTemplateURL.'/img/logoTwitter_p.png" /></a></li>';
			/*<li><a href="#"><img title="Instagram"  alt="Instagram" src="<?php bloginfo('template_url'); ?>/img/logoInstagram_p.png" /></a></li>
			<li><a href="#"><img title="Flickr"  alt="Flickr" src="<?php bloginfo('template_url'); ?>/img/logoFlickr_p.png" /></a></li>
			<li><a href="#"><img title="Whatsapp"  alt="Whatsapp" src="<?php bloginfo('template_url'); ?>/img/logoWhatsapp_p.png" /></a></li>*/
		$content .= '</ul>';
	$content .= '</div>';

	return $content;

	}else {
		return $content;
	}

};

add_filter ('the_content','midiaSocialbtn');


?>



