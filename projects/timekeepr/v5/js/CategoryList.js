ListApp.Categories = function() {
  for (var i in ListApp.data.categories) {
    new ListApp.Category(ListApp.data.categories[i]);
  
  }

  $('#addcategory').click(function(e) {

    e.preventDefault();
    var newcategory = {
      "cat": $.trim($('#categoryname').val()),
      "color": $('#categorycolor').val()
    }
        console.log(newcategory);
    if (newcategory.cat.length > 0) {
      ListApp.data.categories[newcategory.cat] = newcategory;
      ListApp.Save();
      $('<option>' + newcategory.cat + '</option>').appendTo('.categories-dropdown');
    }
    
    new ListApp.Category(newcategory);
    
    

  });



}

ListApp.Category = function(obj) {
  this.color = obj.color;
  this.label = obj.cat;

  this.categoryelement = $(ListApp.categoryTemplate(obj)).appendTo('#category-list');

  this.categoryelement.find('.colorpicker').spectrum({
    showPaletteOnly: true,
    palette: ListApp.colors,
    change: function(color) {
      ListApp.data.categories[obj.cat].color = $(this).val();
      $('.colorpicker').trigger('change');
      ListApp.Save();
    }
    
   

 
  });
 this.categoryelement.find('.ex').click($.proxy(this.removecat, this));
}
  
  ListApp.Category.prototype.removecat = function() {
    delete ListApp.data.categories[this.label];
    ListApp.Save();
    $(this.categoryelement).remove();
    $('.colorpicker').trigger('change');
  }