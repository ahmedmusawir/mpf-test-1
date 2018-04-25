<?php 

/**
* Post Notice Class
*/
class MPFFilterTest
{
	var $excerpt_more;


	function __construct()
	{
		add_filter( 'excerpt_more', array( $this, 'custom_excerpt_more') );			
		add_filter( 'the_content', array( $this, 'add_to_content'), 10, 1 );			
		add_filter( 'the_content', array( $this, 'before_content'), 10, 1 );			
		add_filter( 'the_content', array( $this, 'after_content'), 10, 1 );			
		add_filter( 'login_headerurl', array( $this, 'update_login_header_url') );		
		add_filter( 'login_errors', array( $this, 'mpf_login_error') );	

	}

	public function custom_excerpt_more( $more ) {

		// echo $more;

		$this->excerpt_more = '<a class="moose-read-more" href="' .	
								get_permalink( get_the_ID() ) . 
								'"> Read MPF More </a>';

		return $this->excerpt_more;

	}
	public function add_to_content( $content ) {

		$bullshit = '<h1>This is Just something Simple added via the_content filter</h1>';
		$content .= $bullshit;

		return $content;

	}

	public function before_content( $content ) {

	?>
	
		<section id="mpf-header-box">

			<h4>
				Before Content
			</h4>
			<h3>
				USING the_content FILTER
			</h3>
			
		</section>	
	
	<?php

		return $content;

	}
	public function after_content( $content ) {

		ob_start();
	?>
	
		<section id="mpf-header-box">

			<h4>
				After Content w Output Buffer
			</h4>
			<h3>
				USING the_content FILTER
			</h3>
			
		</section>	
	
	<?php

		$content .= ob_get_clean();

		return $content;

	}

	public function update_login_header_url( $url ) {

		$url = 'https://htmlfivedev.com';
		return $url;

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

	public function mpf_login_error() {

		return "That was a mistake!";	

	}
}































