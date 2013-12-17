ListApp.Entry = function(obj, container) {

/*
              obj = { 
              v:"sdf", 
              c:"#cdd", 
              t:parseFloat(time, 10),
              d:String(new Date().getTime()),
              ls:$this.find('#time-id').val(),
  selected:false
            }
              */
  this.entryText = obj.v;
  if(!ListApp.data.categories[obj.c]) {
    this.cat = "";
    this.color = "gray";
  } else {
  this.cat = ListApp.data.categories[obj.c].cat
  this.color = ListApp.data.categories[obj.c].color;
  }
  this.entryTime = obj.t;
  this.entryTimestamp = obj.d;
  this.listTimestamp = obj.ls;
  ListApp.data.lists[this.listTimestamp].data[this.entryTimestamp] = obj;
  this.entryContainer = $(ListApp.entryTemplate({
    text: this.entryText,
    time: this.entryTime,
    cat: this.cat
  })).css({
    borderColor: this.color,
    backgroundColor: this.color,
    height: this.entryTime * 100
  }).appendTo(container.find('.list'));

  this.entryContainer.find('.ex').click($.proxy(this.removeEntry, this));

  ListApp.Save();
  
  ListApp.$doc.on('change', '.colorpicker', $.proxy(this.recolor, this));
}

ListApp.Entry.prototype.removeEntry = function() {
  var container = this.entryContainer;
  container.slideUp(function() {
    container.remove();
  });
  delete ListApp.data.lists[this.listTimestamp].data[this.entryTimestamp];
  ListApp.Save();
}

ListApp.Entry.prototype.recolor = function() {
  if(!ListApp.data.categories[this.cat]) {
    this.color = "light gray";
  } else {
    this.color = ListApp.data.categories[this.cat].color;
  }
    this.entryContainer.css({
      borderColor: this.color,
      backgroundColor: this.color
    });
}