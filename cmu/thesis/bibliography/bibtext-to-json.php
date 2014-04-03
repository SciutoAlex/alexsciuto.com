<?php include_once "../../../page.php";

page_header();
?>

<textarea name="Name" rows="8" cols="40"></textarea>
<div class="output"></div>


<script>

var app = {};

app.init = function() {

  var textFieldToConvert = $('textarea');
  var outputField = $('.output');



  this.convert = function() {
    console.log('hi');

    var date = new Date().toString();

    var newText = "{<br/>"
    var textToConvert = textFieldToConvert.val();
    var textToConvert = textToConvert.split('\n');
    for(var i = 1; i < textToConvert.length-1; i++) {
      //\s\s([A-Z]+)={([A-Z\s\.\,0-9\-\:\\\/\=\?]+)}
      var regexToAddQuotesToKeys = new RegExp("([A-Z]{1,}).*?{(.{0,}?)\\}", "gi");
      var newTextTemplate = '&nbsp;&nbsp;&nbsp;"$1" : "$2"';
      console.log(textToConvert[i].replace(regexToAddQuotesToKeys,newTextTemplate))
      newText += textToConvert[i].replace(regexToAddQuotesToKeys,newTextTemplate) + "<br/>";
    }
    newText += '&nbsp;&nbsp;&nbsp;"read" : "unread",<br/>&nbsp;&nbsp;&nbsp;"notes" : "",<br/>';
    newText += '&nbsp;&nbsp;&nbsp;"dateAdded" : "'+date+'",<br/>}';
    outputField.html(newText)
  }

  textFieldToConvert.on('keyup', this.convert);

};



window.onload = app.init;


</script>



<?   page_footer(); ?>
