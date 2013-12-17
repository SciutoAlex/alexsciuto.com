var ListApp = {};

ListApp.init = function() {
  //localStorage.clear();
  ListApp.$doc = $(document);
  ListApp.$addEntry = $('.addentry');
  ListApp.data = {};
  //ListApp.data = listData;
  ListApp.entryTemplate = Mustache.compile($('#entryTemplate').html());
  ListApp.listTemplate = Mustache.compile($('#listTemplate').html());
  ListApp.categoryTemplate = Mustache.compile($('#categoryTemplate').html());
  ListApp.$info = $('#info');
  ListApp.$info.hide();

  this.colors = [
    ["BB0000", "00BB00", "0000BB", "F4A460", ],
    ["990000", "009900", "000099", "FF7F24", ],
    ["770000", "007700", "000077", "EE7621", ],
    ["550000", "005500", "000055", "CD853F", ],
    ["330000", "003300", "000033", "CD661D", ],
    ["220000", "002200", "000022", "8B4513", ], ];

  if (localStorage.timeEntriesv4) {
    this.data = JSON.parse(localStorage.timeEntriesv4);
     if ($.isEmptyObject(this.data.lists)) {
       ListApp.$info.show();
     }
  } else {
    ListApp.$info.show();
    this.data = {
      "categories": {
        "homework": {
          "cat": "homework",
          "color": "#BB0000"
        },
        "clients": {
          "cat": "clients",
          "color": "#007700"
        },
        "misc": {
          "cat": "misc",
          "color": "#CD661D"
        }
      },
      "lists": {}
    };
  }

  $('#categorycolor').spectrum({
    showPaletteOnly: true,
    palette: ListApp.colors
  });


  for (var i in this.data.lists) {
    var list = new ListApp.List(this.data.lists[i]);
  }

  $('#add-list').click(function() {
    new ListApp.List({
      "totalHours": 0,
      "name": "Untitled List",
      "timestamp": String(new Date().getTime()),
      "data": {}
    });
  });

  new ListApp.Categories();

  $('#category-show-button').click(function() {
    $('#category-area').animate({
      marginLeft: 0
    }, 500);
    $('#main-area').animate({
     "left":320
    }, 500);
    $(this).fadeOut();
  });

  $('#category-hide-button').click(function() {
    $('#category-area').animate({
      marginLeft: -320
    }, 500);
    $('#main-area').animate({
     "left":0

    }, 500);
    $('#category-show-button').fadeIn();
  });
     
     $('#toolbar .content').css("width",$(window).width());
     
     $(document).resize(function() {
      $('#list-area').css('min-height', $(window).height()-$('#toolbar').height());
     $('#category-area').css('min-height', $(window).height());
   
     });
     $(document).trigger('resize');
     
     $('#icon').click(function() {
     new ListApp.List({
      "totalHours": 0,
      "name": "Untitled List",
      "timestamp": String(new Date().getTime()),
      "data": {}
    });
     });
}

ListApp.Save = function() {
  localStorage.timeEntriesv4 = JSON.stringify(ListApp.data);
}