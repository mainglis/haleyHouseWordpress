jQuery(document).ready(function() {
  jQuery('.people-gallery').find('figure a').each(function() {
  	$this = $(this);
	try {
		alt = $this.find('img').attr('alt');
	} catch (e) {
		alt = "";
	}
  	$this.attr('data-name', alt);
  });
  if(jQuery('.people-gallery-filter-select').length) {
    var selector = jQuery('.people-gallery-filter-select').get(0);
    filterGalleries(selector);

    jQuery(selector).change(function(){
      filterGalleries(this);
    });
  }
});

function filterGalleries(selector) {
    var ind = jQuery(selector).val();
    var galleries = jQuery(selector).parent().children('.gallery');
    galleries.hide();
    jQuery(galleries.get(ind)).show();
}
