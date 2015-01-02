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
    ["#1E5634", "#691A32", "#3F2C55", "#232E68", "#B59D3B", "#6B4026", "#1D242B"],
    ["#156939", "#691A32", "#553578", "#1B3E6C", "#DFCB38", "#945028", "#4C5055"],
    ["#A3D5B3", "#EF7597", "#8E87BE", "#7FA1C3", "#F1EC9F", "#F0C8A4", "#D3CCBE"],];

    //$('body').append(localStorage.timeEntriesv4);
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
          "color": "#691A32"
        },
        "clients": {
          "cat": "clients",
          "color": "#1B3E6C"
        },
        "misc": {
          "cat": "misc",
          "color": "#4C5055"
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
    var date = new Date();
    new ListApp.List({
      "totalHours": 0,
      "name": "Untitled List",
      "timestamp": date.toString(),
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
     var date = new Date().toString();

     new ListApp.List({
      "totalHours": 0,
      "name": "Untitled List",
      "timestamp": 'sdf',
      "data": {}
    });
     });
}

ListApp.Save = function() {
  localStorage.timeEntriesv4 = JSON.stringify(ListApp.data);
}
