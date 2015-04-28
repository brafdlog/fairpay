jQuery(document).ready(function() {
	jQuery('.clientsItem').off('click').on('click', function() {
		var paragraphOfClickedItem = jQuery(this).find('p');
		
		var alreadyOpen = paragraphOfClickedItem.is(":visible");
		
		// Fold visible paragraph so we don't have a state of two visible paragraphs at the same time
		jQuery('#ourClientsContentRow p:visible').slideUp();
		
		if (!alreadyOpen) {
			paragraphOfClickedItem.slideDown();
		}
	});
});