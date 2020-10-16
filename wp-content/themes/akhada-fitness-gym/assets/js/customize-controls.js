( function( api ) {

	// Extends our custom "akhada-fitness-gym" section.
	api.sectionConstructor['akhada-fitness-gym'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );