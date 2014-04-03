  <?php include_once "../../../page.php";

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
          "cat" : "Articles",
          "items" : [
            {
               "title" : "Pixels or Perish",
               "author" : "Hayes, Brian",
               "journal" : "American Scientist",
               "volume" : "100",
               "number" : "2",
               "pages" : "106--111",
               "year" : "2012",
               "publisher" : "SIGMA XI-SCI RES SOC PO BOX 13975, RES TRIANGLE PK, NC 27709 USA",
               "read" : "unread",
               "notes" : "",
               "dateAdded" : 'Thu Apr 03 2014 14:00:09 GMT-0400 (EDT)',
            },
            {
               "title" : "Review of visualisation methods for the representation of benefit-risk assessment of medication: Stage 1 of 2",
               "author" : "Mt-Isa, Shahrul and Peters, R and Phillips, LD and Chan, K and Hockley, KS and Wang, N and others",
               "read" : "unread",
               "notes" : "How to show danger level. Show packs-of-smoking per day? Compare 1 in a million to city-level. Make stats concrete.",
               "dateAdded" : 'Thu Apr 03 2014 13:57:41 GMT-0400 (EDT)',
            },
            {
               "title" : "The golden age of statistical graphics",
               "author" : "Friendly, Michael",
               "journal" : "Statistical Science",
               "pages" : "502--535",
               "year" : "2008",
               "publisher" : "JSTOR",
               "read" : "read",
               "notes" : "Article includes numerous graphics. Nice background info."
            },
            {
              "year" : "2004",
              "title" : "Computational Information Design",
              "author" : "Fry, Ben",
              "url" : "http://benfry.com/phd/",
              "read" : "read",
              "notes" : "</p>Really great overview explaining the process of creating data visualzations.<p>Aquire - Parse - Filter - Mine - Represent - Refine - Interact</p><p>The one thing I think that would be interesting to add would be to look at this framework within the context of modern web browsers."
            },
            {
               "title" : "A tour through the visualization zoo.",
               "author" : "Heer, Jeffrey and Bostock, Michael and Ogievetsky, Vadim",
               "journal" : "Commun. ACM",
               "volume" : "53",
               "number" : "6",
               "pages" : "59--67",
               "year" : "2010",
               "read" : "unread",
               "notes" : "",
               "url" : "http://hci.stanford.edu/jheer/files/zoo/"
            },
            {
               "author" : "Ji Soo Yi and Youn ah Kang and Stasko, J.T. and Jacko, J.A.",
               "journal" : "Visualization and Computer Graphics, IEEE Transactions on",
               "title" : "Toward a Deeper Understanding of the Role of Interaction in Information Visualization",
               "year" : "2007",
               "month" : "Nov",
               "volume" : "13",
               "number" : "6",
               "pages" : "1224-1231",
               "keywords" : "data visualisation;human computer interaction;Infovis community;Infovis interaction techniques;Infovis systems;information visualization;taxonomy;Computer displays;Computer graphics;Conference proceedings;Data visualization;Filters;Human computer interaction;Rendering (computer graphics);Research and development;Taxonomy;Visual analytics;Information visualization;interaction;interaction techniques;taxonomy;visual analytics",
               "doi" : "10.1109/TVCG.2007.70515",
               "read" : "read",
               "notes" : "Very interesting. Partially read. Focus on the interaction within dataviz. Includes seven different interactions: Select: mark something as interesting Explore: show me something else  Reconfigure: show me a different arrangement Encode: show me a different representation  Abstract/Elaborate: show me more or less detail  Filter: show me something conditionally  Connect: show me related items"
            },
            {
              "author" : "Manovich, Lev",
              "title" : "What is Visualization?",
              "url" : "http://www.datavisualisation.org/2010/11/lev-manovich-what-is-visualization/",
              "read" : "read",
              "notes" : "",
              "year" : "2010"
            },
            {
               "author" : "Yi, Ji Soo and Kang, Youn-ah and Stasko, John T. and Jacko, Julie A.",
               "title" : "Understanding and Characterizing Insights: How Do People Gain Insights Using Information Visualization?",
               "booktitle" : "Proceedings of the 2008 Workshop on BEyond Time and Errors: Novel evaLuation Methods for Information Visualization",
               "series" : "BELIV '08",
               "year" : "2008",
               "isbn" : "978-1-60558-016-6",
               "location" : "Florence, Italy",
               "pages" : "4:1--4:6",
               "articleno" : "4",
               "numpages" : "6",
               "url" : "http://doi.acm.org/10.1145/1377966.1377971",
               "doi" : "10.1145/1377966.1377971",
               "acmid" : "1377971",
               "publisher" : "ACM",
               "address" : "New York, NY, USA",
               "keywords" : "categorization, evaluation, information visualization, insight, sensemaking",
               "read" : "read",
               "notes" : "Types of insight: "
            },
            {
               "author" : "Shneiderman, B.",
               "booktitle" : "Visual Languages, 1996. Proceedings., IEEE Symposium on",
               "title" : "The eyes have it: a task by data type taxonomy for information visualizations",
               "year" : "1996",
               "month" : "Sep",
               "pages" : "336-343",
               "keywords" : "data visualisation;graphical user interfaces;visual programming;advanced graphical user interface design;data type taxonomy;information visualizations;multi dimensional data;network data;visual information seeking;Art;Data mining;Data visualization;Displays;Eyes;Information filtering;Information filters;Multimedia databases;Taxonomy;Visual databases",
               "doi" : "10.1109/VL.1996.545307",
               "read" : "unread",
               "notes" : ""
            },
            {
               "author" : "Viegas, F.B. and Wattenberg, M. and Feinberg, J.",
               "journal" : "Visualization and Computer Graphics, IEEE Transactions on",
               "title" : "Participatory Visualization with Wordle",
               "year" : "2009",
               "month" : "Nov",
               "volume" : "15",
               "number" : "6",
               "pages" : "1137-1144",
               "keywords" : "Web sites;data analysis;data visualisation;text analysis;Web-based tool;Wordle;Wordle layouts;tag-cloud-like displays;text visualisation;Visualization;Visualization;educational visualization;memory;participatory culture;social data analysis;tag cloud;text",
               "doi" : "10.1109/TVCG.2009.171",
               "read" : "unread",
               "notes" : "in resources/participatory"
            },
            {
               "author" : "Rodgers, J. and Bartram, L.",
               "journal" : "Visualization and Computer Graphics, IEEE Transactions on",
               "title" : "Exploring Ambient and Artistic Visualization for Residential Energy Use Feedback",
               "year" : "2011",
               "month" : "Dec",
               "volume" : "17",
               "number" : "12",
               "pages" : "2489-2497",
               "keywords" : "art;building management systems;data visualisation;decision making;energy conservation;feedback;power consumption;power engineering computing;ubiquitous computing;abstract visualizations;ambient visualization;artistic visualization;decision making support;distributed point-of-consumption feedback device;environmental conservation efforts;informative art;pervasive computing technology;residential energy consumption;residential energy use feedback visualization;resource consumption;Art;Data visualization;Feedback;Real time systems;Resource management;Ambient visualization;casual infovis;distributed visualization.;informative art;sustainability",
               "doi" : "10.1109/TVCG.2011.196",
               "read" : "read",
               "notes" : "'With the graphs for Google (PowerMeter) and for the typical bill, you had to think about it a lot, you had to definitely read it and you had to sort of figure out where the information was... whereas with the display you could see at a glance that there is something going on.'"
            },

            {
               "author" : "Pousman, Z. and Stasko, J.T. and Mateas, M.",
               "journal" : "Visualization and Computer Graphics, IEEE Transactions on",
               "title" : "Casual Information Visualization: Depictions of Data in Everyday Life",
               "year" : "2007",
               "month" : "Nov",
               "volume" : "13",
               "number" : "6",
               "pages" : "1145-1152",
               "keywords" : "data visualisation;ambient infovis;casual audiences;casual information visualization;casual infovis;cognition;interactive visual model;social infovis;system evaluation;Cognition;Data visualization;Finance;Focusing;Government;Information analysis;Refining;Technology management;Testing;Vocabulary;Casual information visualization;ambient infovis;design;editorial;evaluation.;social infovis;Activities of Daily Living;Computer Graphics;Database Management Systems;Databases, Factual;Information Storage and Retrieval;User-Computer Interface",
               "doi" : "10.1109/TVCG.2007.70541",
               "read" : "read",
               "notes" : "Important piece. Introduces the concept of casual infovis.<br/>Casual Vis exists at the margins of the infovis underlying metaphor. Traditional infovis assumes rational-processor humans. CasualVis wants to think holistically about people.<br/>'The systems can be thought of as positioned near the boundary between infovis and other domains including ubiquitous computing, design, and art.<br/>New edge areas: Ambient (what is the minimum level of data required to still be infovis?), Social, Artistic (This system is intentionally ambiguous, open to interpretation by members of the home (and their guests). This is obviously different from core infovis systems, which most often have a single “correct” reading of the visual output), less active: infovis tools, personal infovis, persuasive vis'"

            },
            {
              "author" : "Jeffrey Hear",
              "url" : "http://hci.stanford.edu/courses/cs547/abstracts/08-09/090213-heer.html",
              "title" : "A Brief History of Data Visualization (Video)",
              "read" : "read",
              "year" : "2009",
              "notes" : "survey of history of infovis</br>              150AD Ptolemy's Map. Earliest map. Scholars added to it 'proto-wikipedia if you will'</br>              Science drives visualizations - record scientific measurement - Scheiner, math problems</br>              Golden Age (rise of capitalism and rise of bureaucracy):</br>              William Playfair, Florence Nightingale</br>              Nightingale is interesting - visual rhetoric graphically evocative to get British bureacracy to act</br>              'were not enough to engage the public or effect decision making amongst the royalty'</br>              'to affect through the eyes which we fail to affect through their ears' -Nightingale</br>              Charles Menard - Coordiante visualization. Showing charts in concert.</br>              Late 1800s Explosion of atlases</br>              1900s - 1950s the death of visualizations</br>              Why? Because of the rise of statistics. Visuals don't tell truth</br>              1950s - 1970s</br>              Jaque Bertin and Edward Tukey and the computer</br>              define the modern age</br>              Bertin Semiology of Graphics establishes the rigorous study of how to visually encode information</br>              Bill Clevealand, Bell Labs. Early experiements in interaction."

            }





          ]
        },
        {
          "cat" : "Books",
          "items" : [
          {
              "title" : "Interactive Visualization: Insight Through Inquiry",
              "author" : "Ferster, B. and Shneiderman, B.",
              "isbn" : "9780262018159",
              "lccn" : "2012008686",
              "url" : "http://books.google.com/books?id=EuUAuwAACAAJ",
              "year" : "2012",
              "publisher" : "University Press Group Limited",
              "read" : "read",
              "notes" : "<p>A introductory text book about how to create interactive visualizations. Good overview of the current state of the art. Lots of cataloging of what is going on."
          },
            {
              "title" : "The Functional Art: An Introduction to Information Graphics and Visualization",
              "author" : "Cairo, Alberto",
              "url" : "http://www.thefunctionalart.com/",
              "read" : "read",
              "year" : "2012",
              "notes" : "Covers a lot of ground in news design. Includes interviews with practioners as well as many different examples."
            },
            {
              "title" : "Visualize This: The FlowingData Guide to Design, Visualization, and Statistics",
              "author" : "Yau, Nathan",
              "url" : "#",
              "year" : "2011",
              "read" : "read",
              "notes" : "Practical examples of how to build graphics. Not so much on why or how."
            },
            {
              "title" : "Visual complexity : mapping patterns of information ",
              "author" : "Lima, Manuel",
              "year" : "2013",
              "url" : "http://www.visualcomplexity.com/vc/book/",
              "read" : "noaccess",
              "notes" : "on hold from CMU Libe"
            },
            {
               "title" : "Visual Thinking: for Design",
               "author" : "Ware, C.",
               "isbn" : "9780080558417",
               "series" : "Morgan Kaufmann series in interactive technologies",
               "url" : "http://books.google.com/books?id=WBlUgKhMbdsC",
               "year" : "2010",
               "publisher" : "Elsevier Science",
               "read" : "noaccess",
               "notes" : "requested from Hunt"
            },
            {
               "title" : "Information Visualization: Perception for Design",
               "author" : "Ware, C.",
               "isbn" : "9780123814647",
               "lccn" : "2012009489",
               "series" : "Information Visualization: Perception for Design",
               "url" : "http://books.google.com/books?id=qFmS95vf6H8C",
               "year" : "2013",
               "publisher" : "Morgan Kaufmann",
               "read" : "noaccess",
               "notes" : "in Hunt Libe"
            },
            {
               "title" : "Readings in information visualization: using vision to think",
               "author" : "Card, Stuart K and Mackinlay, Jock D and Shneiderman, Ben",
               "year" : "1999",
               "publisher" : "Morgan Kaufmann",
               "read" : "noaccess",
               "notes" : "Requested from Hunt"
            }
          ]
        },
        {
          "cat" : "website",
          "items" : [
            {
              "url" : "http://www.datavis.ca/milestones/",
              "title" : "Milestones in the History of Thematic Cartography, Statistical Graphics, and Data Visualization",
              "author" : "Friendly, M.",
              "year" : "2014",
              "read" : "read",
              "notes" : "Detailed timeline of key milestones in infovis. Very detailed"

            }
          ]
        }
      ]
    };

    for(var section in data.data) {
console.log(data.data[section].items);
      data.data[section].items.sort(function(a,b) { return compare(a,b,'author'); })
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
        <div class="check read-{{read}}">
        </div>


        <div class="info">
          <div class="title">
            <a href="{{{url}}}">{{title}}</a>
          </div>
          <div class="subtitle">
            {{year}}. {{author}}. {{journal}}
          </div>
          <div class="notes">
            {{{notes}}}
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


  .read-read {
    background: url('img/check-read.png') no-repeat;
  }

  .read-unread {
    background: url('img/check-unread.png') no-repeat;
  }

  .read-noaccess {
    background: url('img/check-noaccess.png') no-repeat;
  }

  .check {
    width:40px;
    height:40px;
    background-size: 83%;
  }

  .title {
    font-size:1.3em;
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

  .notes {
    color:#888;
  }
</style>

<?   page_footer(); ?>
