(function ( $ ) {
  
  $.fn.EKLandscapesGallery = function( options ) {
    
    var settings = $.extend({
      // These are the defaults.
      color: "#556b2f",
      backgroundColor: "white"
    }, options );
    
    var photoIndex = 0,
        totalPhotos = $(this).find('img').length,
        offset = 0;
    
    
    $(this).append("<div id='gallery-wrapper'><div id='gallery-slider'><\/div><\/div>");
    $(this).find('img').appendTo('#gallery-slider');
    $(this).append("<div class='right'><\/div>");
    $(this).append("<div class='left'><\/div>");
    
    var  sliderDiv = $(this).find('#gallery-slider');
    
    
    var refresh = function() {
      var offset = sliderDiv.find('img').eq(photoIndex).position().left;
      
      sliderDiv.animate({
        left : -offset
      }, 1000);
      console.log('refresh');
      
    };
    
    return this.each(function() {
      $(this).find('.right').click(function() {
        photoIndex++;
        if (photoIndex >= totalPhotos) {
          photoIndex = 0;
        }
        
        refresh();
        
      });
      
      $(this).find('.left').click(function() {
        photoIndex--;
        if (photoIndex < 0) {
          photoIndex = totalPhotos-1;
        }
        refresh();
      });
    });
    
  };
  
}( jQuery ));