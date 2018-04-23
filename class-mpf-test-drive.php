<?php 

/**
* Post Notice Class
*/
class MPFTest
{
	
	function __construct()
	{
		add_action( 'loop_start', array( $this, 'set_header_box' ) );

	}

	public function set_header_box() {

	?>
	
	<section id="mpf-header-box">

		<h4>
			Moose Plugin Framework 1.0!
		</h4>
		<h3>
			USING loop_start HOOK
		</h3>
		
	</section>	
	
	<?php

	}
}