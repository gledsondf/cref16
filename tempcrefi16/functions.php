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
						<ul id="linkCategoria">
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





/*========================================================================== BreadCrumbs*/


function wp_custom_breadcrumbs() {
 
  $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
  $delimiter = '&raquo;'; // delimiter between crumbs
  $home = 'Home'; // text for the 'Home' link
  $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
  $before = '<span class="current">'; // tag before the current crumb
  $after = '</span>'; // tag after the current crumb
 
  global $post;
  $homeLink = get_bloginfo('url');
 
  if (is_home() || is_front_page()) {
 
    if ($showOnHome == 1) echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a></div>';
 
  } else {
 
    echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
 
    if ( is_category() ) {
      $thisCat = get_category(get_query_var('cat'), false);
      if ($thisCat->parent != 0) echo get_category_parents($thisCat->parent, TRUE, ' ' . $delimiter . ' ');
      echo $before . 'categoria "' . single_cat_title('', false) . '"' . $after;
 
    } elseif ( is_search() ) {
      echo $before . 'Search results for "' . get_search_query() . '"' . $after;
 
    } elseif ( is_day() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('d') . $after;
 
    } elseif ( is_month() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('F') . $after;
 
    } elseif ( is_year() ) {
      echo $before . get_the_time('Y') . $after;
 
    } elseif ( is_single() && !is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
        if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        $cats = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
        if ($showCurrent == 0) $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
        echo $cats;
        if ($showCurrent == 1) echo $before . get_the_title() . $after;
      }
 
    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      echo $before . $post_type->labels->singular_name . $after;
 
    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
      echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
      if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
 
    } elseif ( is_page() && !$post->post_parent ) {
      if ($showCurrent == 1) echo $before . get_the_title() . $after;
 
    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      for ($i = 0; $i < count($breadcrumbs); $i++) {
        echo $breadcrumbs[$i];
        if ($i != count($breadcrumbs)-1) echo ' ' . $delimiter . ' ';
      }
      if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
 
    } elseif ( is_tag() ) {
      echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
 
    } elseif ( is_author() ) {
       global $author;
      $userdata = get_userdata($author);
      echo $before . 'Articles posted by ' . $userdata->display_name . $after;
 
    } elseif ( is_404() ) {
      echo $before . 'Error 404' . $after;
    }
 
    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo __('Page') . ' ' . get_query_var('paged');
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }
 
    echo '</div>';
 
  }
} // end wp_custom_breadcrumbs()
?>



