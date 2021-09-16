<?php 

//chamando o title
function mem_title_tag(){
	add_theme_support('title-tag');
}
add_action('after_theme_setup', 'men_title_tag');


// função dos menus
register_nav_menus(
	array(
		'menu_principal' => 'Menu Principal',
		'menu_dopdown'	=> 'Menu Dopdown'
	)
);

// registra  a classe navwalker
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

// adicionando fundo customizado
 add_theme_support('custom-background');
//adicionando cabeçalho customizado
 add_theme_support('custom-header');
 // Adicionar o logotipo
add_theme_support( 'custom-logo' );

add_theme_support('post-thumbnails');
set_post_thumbnail_size(1280, 720,true);
remove_action( 'begin_fetch_post_thumbnail_html', '_wp_post_thumbnail_class_filter_add' );

//tamanho do resumo
add_filter('excerpt_length', function($length){
	return 15;
});

 ?>



