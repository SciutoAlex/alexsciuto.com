 $(window).load(function() {
      
      $('.zoom').each(function() {
        
        //Variables
        var $zoom = $(this);
        var visible = false;
        var bigurl = $zoom.attr('data-large');
        var width = $zoom.width();
        var height = $zoom.height();
        var $caption = $zoom.next('p');
        var x=0, y=0;
        var $zoomlarge = $('<div>', {
          'class' : 'largeimg',
          'css' : {
            'left':'0px',
            'top':'0px',
            'display':'none',
            'position':'absolute',
            'height' : height,
            'width' : width,
            'background-image':'url('+bigurl+')',
            'background-repeat' : 'no-repeat'
          }
        }).appendTo(this);
        
        //MouseMove
        $zoom.mousemove(function(e) {
          if(visible) {
            var offset = 50;
            var parentOffset = $(this).parent().offset(); 
            var relX = (e.pageX - parentOffset.left-offset)/(width-2*offset);
            var relY = (e.pageY - parentOffset.top-offset)/(height-2*offset);
            
            if (relX > 1) { relX = 1}
            if (relX < 0) { relX = 0}
            if (relY > 1) { relY = 1}
            if (relY < 0) { relY = 0}
            
            
            var newx = ($zoom.attr('data-width')-width)*relX*-1;
            var newy = ($zoom.attr('data-height')-height)*relY*-1;
            
            x += (newx - x) / 4;
            y += (newy - y) / 4;
            $zoomlarge.css({
              'background-position-x' : x,
              'background-position-y' : y
            });
            
          }
        });
        
        //Hover
        $zoom.hover(function() {
          visible = true;
          $caption.fadeOut();
          $zoomlarge.fadeIn();
        }, function() {
          visible = false;
          $zoomlarge.fadeOut();
          $caption.fadeIn();
          
        });
      });
      
      
    });