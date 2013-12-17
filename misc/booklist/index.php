<?php include_once "../../page.php";
  
  page_header();
  ?>

<div id="list"></div>


<script>
  
  
  var app = {};
  
  app.init = function() {
    
    var mustacheTemplateText = document.getElementById("rowTemplate").innerHTML;
    var listEl = document.getElementById("list");
    
    
    var data = {
      "data" : [
        {
          "cat" : "Design Philosphy Books",
          "items" : [
            {
              "head" : "The Design of Everyday Things",
              "head2" : "Donald Norman",
              "url" : "http://www.amazon.com/Design-Everyday-Things-Donald-Norman/dp/0465067107",
              "bought" : false
            },
            {
              "head" : "The Design Way: Intentional Change in an Unpredictable World",
              "head2" : "Harold G. Nelson, Erik Stolterman",
              "url" : "http://www.amazon.com/The-Design-Way-Intentional-Unpredictable/dp/0262018179",
              "bought" : true
            }
          ]
        },
        {
          "cat" : "Design Practice Books",
          "items" : [
             {
              "head" : "Sketching User Experiences: Getting the Design Right and the Right Design",
              "head2" : "Bill Buxton",
              "url" : "http://www.amazon.com/Sketching-User-Experiences-Interactive-Technologies/dp/0123740371#",
              "bought" : false
            },
            {
              "head" : "Drawing Ideas: A Hand-Drawn Approach for Better Design",
              "head2" : "Mark Baskinger",
              "url" : "http://www.amazon.com/Drawing-Ideas-Hand-Drawn-Approach-Better/dp/0385344627",
              "bought" : true
            },
            {
              "head" : "Microinteractions: Designing with Details",
              "head2" : "Dan Saffer",
              "url" : "http://shop.oreilly.com/product/0636920027676.do",
              "bought" : false
            }
            ,{
              "head" : "Making and Breaking the Grid: A Graphic Design Layout Workshop",
              "head2" : "Timothy Samara",
              "url" : "http://www.amazon.com/Making-Breaking-Grid-Graphic-Workshop/dp/1592531253",
              "bought" : false
            }
            
          ]
        },
        {
          "cat" : "Design Tools",
          "items" : [
            {
              "head" : "The Arduino Starter Kit",
              "head2" : "Arduino",
              "url" : "http://www.amazon.com/Arduino-Starter-Official-170-page-Projects/dp/B009UKZV0A/ref=sr_1_2?ie=UTF8&qid=1387046515&sr=8-2&keywords=arduino+starter+kit",
              "bought" : false
            }
          ]
        },
        {
          "cat" : "Data Visualization Books",
          "items" : [
             {
              "head" : "The Visual Display of Quantitative Information",
              "head2" : "Edward Tufte",
              "url" : "http://www.amazon.com/Visual-Display-Quantitative-Information/dp/0961392142/ref=la_B000APET3Y_1_1?s=books&ie=UTF8&qid=1387046682&sr=1-1",
              "bought" : false
            },
            {
              "head" : "The Functional Art: An introduction to information graphics and visualization",
              "head2" : "Alberto Cairo",
              "url" : "http://www.peachpit.com/store/functional-art-an-introduction-to-information-graphics-9780321834737",
              "bought" : false
            }
            
          ]
        }
      ]
    };
    
    for(var section in data.data) {
console.log(data.data[section].items);
      data.data[section].items.sort(function(a,b) { return compare(a,b,'head'); })
    }
    var mustacheTemplate = Mustache.to_html(mustacheTemplateText, data);
    
    listEl.innerHTML = mustacheTemplate;
    
  };
  
  
  function compare(a,b, accessor) {
  if (a[accessor] < b[accessor])
     return -1;
  if (a[accessor] > b[accessor])
    return 1;
  return 0;
}
  
  window.onload = app.init;
  
  
</script>

<script id="rowTemplate" type="text/html">
  
  <div class="list">
    {{#data}}
    <div class="cat">{{cat}}</div>
    <div class="rows">
      {{#items}}
      <div class="row">
        <div class="check check-{{bought}}">
          
        </div>
        
        <div class="info">
          <div class="title">
            <a href="{{{url}}}">{{head}}</a>
          </div>
          <div class="subtitle">
            {{head2}}
          </div>
        </div>
        <div class="clear"></div>
      </div>
      {{/items}}
    </div>
    {{/data}}
  </div>
</script>

<style>
  
  .row {
    margin-bottom:20px;
  }
  
  .rows {
    margin-bottom:50px;
  }
  .check-true {
    background: url('img/check-true.png') no-repeat;
    
  }
  
  
  .check-false {
    background: url('img/check-false.png') no-repeat;
    
    
  }
  
  .check {
    width:40px;
    height:40px;
    background-size: 83%;
  }
  
  .title {
    font-size:2em;
    line-height:1em;
  }
  
  .title a {
    text-decoration:none;
  }
  
  .info {
    margin:5px 0 0 5px;
    width:80%;
  }
  
  .check, .info {
    float:left;
  }
  
  .list .cat {
    font-size:1.1em;
    font-weight:bold;
    color:#FE2139;
    margin-left:45px;
  }
</style>

<?   page_footer(); ?>