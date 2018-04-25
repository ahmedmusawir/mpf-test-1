jQuery(document).ready(function($) {

  var adminHeaderBox = $( '#mpf-header-box' );
  // console.log( adminContent );

  adminHeaderBox.click( function(){

  	// alert('Whadap!');
  	$( this ).css('background-color', 'goldenrod');

  });

  var adminLoopBox = $( '#mpf-loop-box' );
  // console.log( adminContent );

  adminLoopBox.click( function(){

  	// alert('Whadap!');
  	$( this ).css('background-color', 'orangered');

  });
	
});