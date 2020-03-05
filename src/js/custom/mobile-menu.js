( function() {
	let openButton = document.getElementById( 'slide-menu-button-open' );
	let closeButton = document.getElementById( 'slide-menu-button-close' );

	openButton.onclick = function() {
		document.body.classList.add( 'mobile-slide-menu--active' );
	};

	closeButton.onclick = function() {
		document.body.classList.remove( 'mobile-slide-menu--active' );
	};

}() );
