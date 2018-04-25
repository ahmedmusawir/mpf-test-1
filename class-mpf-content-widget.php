<?php 

/**
* MPF Test Class
*/
class MPFContentWidget
{
	
	function __construct()
	{
		add_action( 'widgets_init', array( $this, 'mpf_register_sidebar' ) );
	}

	public function mpf_register_sidebar() {

		register_sidebar( array( 
		
			'name'  		=> __( 'Post Content Plus', 'mpf' ),
			'id'			=> 'mpf-sidebar',
			'description'	=> __( 'Widgets in this area display on single posts', 'mpf' ), 
			'before_widget'	=> '<div class="widget mpf-sidebar">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widgettitle mpf-title',
			'after_title'	=> '</h2>',
		) );

	}

	public function setup_widget() {

		add_filter( 'the_content', array( $this, 'mpf_display_sidebar' ) );

	}

	public function mpf_display_sidebar( $content ) {

		dynamic_sidebar( 'mpf-sidebar' );

		return $content;
	}
}































