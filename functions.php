<?php 

function eamexicano_setup() {

	register_nav_menus( array(
		'primary' => __( 'Navegacion', 'eamexicano' ),
	) );

}
add_action( 'after_setup_theme', 'eamexicano_setup' );

function eamexicano_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widgets', 'eamexicano' ),
		'id'            => 'sidebar-1',
		'description'   => 'Arrastra los widgets aquí para que se visualicen en la barra lateral.',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'eamexicano_widgets_init' );
?>