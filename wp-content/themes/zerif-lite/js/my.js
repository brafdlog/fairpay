jQuery(document).ready(function() {
	jQuery('.clientsItem').off('click').on('click', function() {
		var clickedItem = jQuery(this);
		var paragraphOfClickedItem = clickedItem.find('p');
		
		var alreadyOpen = paragraphOfClickedItem.is(":visible");
		
		// Fold visible paragraph so we don't have a state of two visible paragraphs at the same time
		jQuery('#ourClientsContentRow p:visible').slideUp();
		clickedItem.find('i.fa-chevron-up').removeClass('fa-chevron-up').addClass('fa-chevron-down');
		
		if (!alreadyOpen) {
			paragraphOfClickedItem.slideDown();
			clickedItem.find('i.fa-chevron-down').removeClass('fa-chevron-down').addClass('fa-chevron-up');
		}
	});
});