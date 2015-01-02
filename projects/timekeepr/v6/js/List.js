ListApp.List = function(obj) {
  /* obj = {
  "totalHours" : 0,
  "name": "sdf",
  "timestamp" : String(new Date().getTime()),
  "data": {} */
  var listobj = this;
  this.listtimestamp = obj.timestamp;
  this.name = obj.name;
  this.data = obj.data;
  this.totalhours = obj.totalHours;
  this.listContainer = $(ListApp.listTemplate({})).prependTo("#list-area");
  ListApp.data.lists[this.listtimestamp] = obj;
  this.categoriesdropdown = this.listContainer.find('.categories-dropdown');

  ListApp.$info.hide();

  for (var i in this.data) {

    new ListApp.Entry(this.data[i], this.listContainer);
  }
  var titlearea = this.listContainer.find('.title').html(this.name);


  titlearea.dblclick(function() {
    $(this).attr('contentEditable', 'true');

  });

  titlearea.blur(function() {
    $(this).attr('contentEditable', 'false');
    ListApp.data.lists[listobj.listtimestamp].name = $(this).html();
    ListApp.Save();
  });

  this.listContainer.find(".removelist").click(function(e) {
    e.preventDefault();
    $.proxy(listobj.removeList(), listobj);
  });

  this.listContainer.find('.addentry').submit($.proxy(this.addEntry, this));

  for (var i in ListApp.data.categories) {
    $('<option>' + ListApp.data.categories[i].cat + '</option>').appendTo(this.categoriesdropdown);
  }
  ListApp.Save();

}

ListApp.List.prototype.addEntry = function(e) {
  e.preventDefault();
  var txt = this.listContainer.find("#entry-text");
  var cat = this.listContainer.find(".categories-dropdown").val();
  var time = this.listContainer.find("#entry-time");
  var listtime = this.listtimestamp;

  var newNote = {
    v: $.trim(txt.val()),
    c: cat,
    t: parseFloat(time.val(), 10),
    d: String(new Date().getTime()),
    ls: listtime,
    selected: false
  };

  if (newNote.v.length > 0 && newNote.t >= .25) {
    var note = new ListApp.Entry(newNote, this.listContainer);
    txt.val("");
    time.val("");
  }



}

ListApp.List.prototype.removeList = function() {

  var container = this.listContainer;
  container.fadeOut(function() {
    container.remove();
  });
  delete ListApp.data.lists[this.listtimestamp];
  ListApp.Save();
  console.log($('#list-area').children().length);
  if ($('#list-area').children().length < 2) {
    ListApp.$info.show();
  }
}
