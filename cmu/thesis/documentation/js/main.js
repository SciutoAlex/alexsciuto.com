
var litReviewApp = {};

litReviewApp.init = function() {

  function scrollToAnchor(aid){
    console.log(aid);
    var aTag = $(aid);
    $('html,body').animate({scrollTop: aTag.offset().top - 150},'slow');
  }

  $('.scroll').click(function(e) {
    e.preventDefault();
    scrollToAnchor($(this).attr('href'));
  })

  // $('p').attr('contenteditable', 'true');
  $('.citation').each(function() {
    var height = $(this).height()+30;
    $(this).css('margin-top', height*-1);
  });

  var templateSource = document.getElementById("rowTemplate").innerHTML;
  var handleBarsTemplate = Handlebars.compile(templateSource);

  var listEl = $('#exampleTable');

  d3.csv('data/examples.csv', dataLoaded);

  function dataLoaded(data) {

    data.sort(function(a,b){
      if (a['year'] < b['year'])
         return -1;
      if (a['year'] > b['year'])
        return 1;
      return 0;
    });
    console.log(data)
    for(var example in data) {
      listEl.append(handleBarsTemplate(data[example]));
    }
  }
};


function compare(accessor) {
  return
}

window.onload = litReviewApp.init;
