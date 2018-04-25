<?php 

/**
* MPF Test Class
*/
class MPFTest
{
	
	function __construct()
	{
		add_action( 'loop_start', array( $this, 'set_loop_box' ) );
		add_action( 'loop_end', array( $this, 'set_loopend_box' ) );
		add_action( 'wp_head', array( $this, 'set_header_box' ), 10 );
		// add_action( 'wp_head', array( $this, 'set_header_box2' ), 11 );
		add_action( 'wp_footer', array( $this, 'set_footer_box' ) );
		add_action( 'dynamic_sidebar', array( $this, 'set_sidebar_box' ) );
		add_action( 'login_header', array( $this, 'add_to_login_header' ) );
		add_action( 'login_enqueue_scripts', array($this, 'login_pg_styles') );


	}

	public function set_loop_box() {

	?>
	
		<section id="mpf-loop-box">

			<h4>
				Moose Plugin Framework 1.0!
			</h4>
			<h3>
				USING loop_start HOOK
			</h3>
			
		</section>	
	
	<?php

	}
	public function set_loopend_box() {

	?>
	
		<section id="mpf-loop-box">

			<h4>
				Moose Plugin Framework 1.0!
			</h4>
			<h3>
				USING loop_end HOOK
			</h3>
			
		</section>	
	
	<?php

	}

	public function set_header_box() {

	?>
	
		<section id="mpf-header-box">

			<h4>
				Moose Plugin Framework 1.0!
			</h4>
			<h3>
				USING wp_head HOOK
			</h3>
			
		</section>	
	
	<?php

	}
	public function set_header_box2() {

	?>
	
		<section id="mpf-header-box">

			<h4>
				Moose Plugin Framework 2.0!
			</h4>
			<h3>
				USING wp_head HOOK
			</h3>
			
		</section>	
	
	<?php

	}

	public function set_header_tag_box() {

	?>
	
		<section id="mpf-header-box">

			<h4>
				Targeting Head Tag 
			</h4>
			<h3>
				USING wp_enqueue_scripts HOOK
			</h3>
			
		</section>	
	
	<?php

	}

	public function set_footer_box() {

	?>
	
		<section id="mpf-header-box">

			<h4>
				Moose Plugin Framework 1.0!
			</h4>
			<h3>
				USING wp_footer HOOK
			</h3>
			
		</section>	
	
	<?php

	}

	public function set_sidebar_box() {

	?>
	
		<section id="mpf-header-box">

			<h5>
				USING dynamic_sidebar HOOK
			</h5>
			
		</section>	
	
	<?php

	}

	public function add_to_login_header() {

	?>
	
		<section id="mpf-header-box">

			<h4>
				Moose Plugin Framework 1.0!
			</h4>
			<h3>
				USING login_header & login_enqueue_scripts HOOK
			</h3>
			
		</section>	
	
	<?php

	}


		
	public function login_pg_styles() {


		wp_enqueue_style( 'moose-login-style', plugin_dir_url( __FILE__ ) . 'assets/css/login.css', array(), '1.0' );
		// wp_enqueue_style( 'moose-login-style', plugins_url( 'assets/css/login.css', __FILE__ ), array(), '1.0' );
	
	}


	public function COPY_ME() {

	?>
	
		<section id="mpf-header-box">

			<h4>
				Moose Plugin Framework 1.0!
			</h4>
			<h3>
				USING wp_footer HOOK
			</h3>
			
		</section>	
	
	<?php

	}
}































