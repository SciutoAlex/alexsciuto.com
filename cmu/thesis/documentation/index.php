<?php

  include_once "../../../page.php";

  $params = array();
  $params['title'] = "Literature Review";
  $params['page_name'] = "topic page";

  $params['js'] = array();
  array_push($params['js'], "http://d3js.org/d3.v3.min.js");
  array_push($params['js'], "js/handlebars.js");
  array_push($params['js'], "js/main.js");

  $params['css']  = array();
  array_push($params['css'], "css/main.css");

  page_header($params);
?>




<article id="thesis">

  <h2>Medical Billing Data</h2>
  <h3>Gathering, Using, and Understanding the Most Neglected Part of the Medical Process</h3>
  <p class="intro">
    Almost everyone above a certain age has received a medical bill or explanation of benefits from a hospital or medical provider. They appear unexpectedly, often months after a procedure or operation. Inscrutable, dense, medical bills fall into the same category of impenetrability as monthly financial statements or the fine-print on a credit card bill. But the data they hold is a rich source that describes all the procedures a person has experienced. This thesis project makes two contributions: a method for crowdsourcing the gathering of medical bills and a system concept for what to do once we have that data.
  </p>
  <figure class="figure" id="toc">
  <h3>Table of Contents</h3>
  <ul>
    <li class="section">
      <h6><a class="scroll" href="#introduction">Introduction</a></h6>
      <ul class="sub-sections">
        <li><a class="scroll" href="#prior-art-healthcare">Motivation</a></li>
        <li><a class="scroll" href="#prior-art-healthcare">Overview and Timeline</a></li>
        <li><a class="scroll" href="#related-commercial-products">Contribution</a></li>
      </ul>
    </li>
    <li class="section">
      <h6><a class="scroll" href="#background">Background</a></h6>
      <ul class="sub-sections">
        <li><a class="scroll" href="#prior-art-healthcare">Health 2.0</a></li>
        <li><a class="scroll" href="#prior-art-healthcare">Crowdsourcing</a></li>
        <li><a class="scroll" href="#related-commercial-products">Connected Data Visualizations</a></li>
        <li><a class="scroll" href="#related-commercial-products">Data Visualization Frameworks</a></li>
        <li><a class="scroll" href="#related-commercial-products">Existing Commercial Work</a></li>
      </ul>
    </li>
    <li class="section">
      <h6>Process</h6>
      <ul class="sub-sections">
        <li><a class="scroll" href="#prior-art-healthcare">Initial Explorations</a></li>
        <li><a class="scroll" href="#prior-art-healthcare">Gathering More Data</a></li>
        <li><a class="scroll" href="#related-commercial-products">Medical Consumer Interviews</a></li>
        <li><a class="scroll" href="#related-commercial-products">Prototyping a New Experience</a></li>
        <li><a class="scroll" href="#related-commercial-products">Evaluative Testing</a></li>
      </ul>
    </li>
    <li class="section">
      <h6>Design Solution</h6>
      <ul class="sub-sections">
        <li><a class="scroll" href="#sec-one">PGHMedicalPrices.us</a></li>
        <li><a class="scroll" href="#sec-one">MedicalPrice History Explorer</a></li>
        <li><a class="scroll" href="#sec-one">Pittsburgh Price Maps</a></li>
      </ul>
    </li>
    <li class="section">
      <h6>Personal Reflection</h6>
      <ul class="sub-sections">
        <li><a class="scroll" href="#sec-one">subnote</a></li>
      </ul>
    </li>
    <li class="section">
      <h6>End Matter</h6>
      <ul class="sub-sections">
        <li><a class="scroll" href="#sec-one">subnote</a></li>
      </ul>
    </li>
  </ul>
</figure>
<h3 id="introduction">Introduction</h3>
  <h5>Motivation</h5>
  <p>Florence Nighingale, the mother of modern nursing, is widely known for the reforms she advocated for in second half of the nineteenth century. She led efforts to improve the care of wounded and sick soldiers in the Crimean War, and after the war she founded a nursing school in London for the training of skilled nurses. Less well known, she was an excellent statistician and visual thinker. She realized that using visual means to communicate complex ideas would help "to affect thro' the Eyes what we fail to convey to the public through their word-proof ears." Through her graphics and public speaking, she was a successful lobbyist who ralied many people to her cause. </p>
  <p>This thesis project is motivated by two impulses: a deep love and respect for the communicative power of well-designed visual information and a belief that this power should be put to use to substantially and positively impact its users. My focus is the design of systems that take people's personal data, combine them together with other people's data, and visually communicate back insights to the user.</p>
  <p>To attempt to achieve this goal, this thesis combines different trends in contemporary human-computer interaction and interaction design. I have chosen healthcare and in particular healthcare billing as an application-space that could benefit from such an interactive system. Many researchers and designers are exploring how computer systems can affect modern healthcare. They are also exploring ways to visually the exponentially increasing amount of health data we have access to. In order to gather data that is worthwhile and novel to visualize, I have decided to explore methods of gathering data directly from users using automated systems. Many systems like this exists today and are often called crowdsourced. Researchers have written much about the challenges and opportunities of crowdsourced systems. Finally, to visualize the data we gather, I have chosen to look at the field of information visualizion. By combining these three areas, I hope to contribute new ideas.</p>
  <h5>Overview</h5>
  <p>overview will go here.</p>
  <h5>Thesis Contributions</h5>
  <ul>
    <li>Something about gathering data from users</li>
    <li>Something about combining medical billers with individual work</li>
    <li>Something about comparing old and new techniques</li>
    <li>Something about the recent history of internet visualizations.</li>
    <li>Something about an index of medical bills public.</li>
  </ul>
  <h3>Prior Art</h3>
  <h5 id="related-academic-work">Health 2.0</h5>sdfdfsds afas dfa
    <p>In the United States in the last decade and a half, the Internet has become widespread, routinely accessed, and accessed on a variety of devices. The ubiquity of the Internet in people's daily lives has affected many parts of how people live. How they access healthcare is one such area. Patients use search engines to research ailments. They use online forums to connect with other patients and express their feelings (Belt et al., "Definition of Health 2.0 and Medicine 2.0: A Systematic Review"). They use connected apps to track and communicate their health to others (Boulos et al., "How Smartphones Are Changing the Face of Mobile and Participatory Healthcare: An Overview, with Example from ECAALYX" 24).</p>
    <p>In 2004, the term "Web 2.0" was introduced to highlight a paradigm shift in the type of software consumers use. "Web 1.0" included software sold for use on individual desktop computers. "Web 2.0" software was Internet-based web services that offered advanced functionality, accessible on any device with an Internet connection, often free or priced on a monthly or yearly subscription. (http://www.oreilly.com/pub/a/web2/archive/what-is-web-20.html?page=2). When these technologies are applied to the healthcare industry, the term Health 2.0 may be used.</p>
    <p>Health 2.0 is marked by a number of characteristics. Boulos et al. list themes of Health 2.0 medical literature: Patients and Consumers, Web 2.0/Technology, Professionals, Social Networking, Change of Healthcare, Collaboration, and Health Information. Eysenbach lists the characteristics of Medicine 2.0 as: social networking, participation,  apomediation, collaboration, and openess.</p>
    <p>Pre existing applications are many and wide ranging. Health tracking apps like Google Health and Apple Health, drug information sites, etc.</p>
    <p>Technological causes of Participatory Healthcare.</p>
    <h6>Sources</h6>
    <ul>
      <li>Belt, T. H. V. D.; Engelen, L. J.; Berben, S. A.; Schoonhoven, L. Definition of Health 20 and Medicine 20: A Systematic Review. Journal of Medical Internet Research. 2010, 12.</li>
      <li>Eysenbach, G. Medicine 20: Social Networking, Collaboration, Participation, Apomediation, and Openness. Journal of Medical Internet Research. 2008, 10, e22.</li>
      <li>Boulos, M.; Wheeler, S.; Tavares, C.; Jones, R. How Smartphones Are Changing the Face of Mobile and Participatory Healthcare: an Overview, With Example From ECAALYX. BioMedical Engineering OnLine. 2011, 10, 24. http://www.biomedical-engineering-online.com/content/10/1/24.</li>
    </ul>
  <h5 id="related-academic-work">Crowdsourcing</h5>
    <p>Crowdsourcing is the practice of enlisting many humans to perform simple tasks that when combined solve problems that a computer or individual person could not solve. Crowdsourcing goes by many names that highlight the multitude of uses crowdsourcing has: peer production, user-powered systems, user-generated content, collaborative systems, community systems, social systems, social search, social media, collective intelligence, wikinomics, crowd wisdom, smart mobs, mass collaboration, and human computation (Doan, Ramakrishnan, and Halevy 86). Doan, Ramakrishnan, and Halevy explicitly define crowdsourcing broadly as any system as long as it "it enlists a crowd of humans to help solve a problem defined by the system owners."</p>
    <p>The origins of crowdsourcing depend on how one chooses to define it. Architecture competitions and prizes for design work have been held for decades, and these projects enlisting many teams to create the design for a building or product can be included as crowdsourcing. A competition for the design of the Sydney Opera House was held to determine its architect. Jørn Utzon would win five thousand pounds in 1957 when his design was selected [Murray 2004].</p>
    <p>Localized Crowdsourcing.</p>
    <p>Different ways humans can contribute to Crowdsourced systems. Ours is data donation, but can be other things.</p>
    <p>Four main challenges of Crowdsourcing:</p>
    <ul>
      <li>Recruiting and Maintaining Participants</li>
      <li>What are users able to do</li>
      <li>How to combine User Inputs</li>
      <li>How are users' work evaluated?</li>
    </ul>
      <li>Doan, Anhai, Raghu Ramakrishnan, and Alon Y. Halevy. "Crowdsourcing Systems on the World-Wide Web." Communications of the ACM 54.4 (2011): 86. Web.</li>
    </ul>
  <h5 id="related-academic-work">Web-based Data Visualization</h5>
  <p>Information Visualization is an old discipline that developed in the 1600s. With renewed interest in the workings of the physical world, networks of amateur scientists needed visual means to communicate ideas. Using pen and paper, inline sketching of the moons of Jupiter (Galileo) or of sunspots traversing the Sun's surface (Christoph Scheiner) recorded and diseminated the discoveries of early scientists. Since then, visualizers have used the technology at hand to encode available information and data in visual form. This section will layout a few broad movements in the history of information visualization. These movements are defined both by the technology available to the visualizer as well as the data they have access to. The section will conclude with a more detailed history of information visualizations that use the Internet and world wide web as a canvas.</p>
  <figure class="img">
    <img src="img/scheiner.jpg" alt="" />
    <figcaption>Christoph Scheiner. 1626.</figcaption>
  </figure>
  <h6>Early Scientific Visualization</h6>
  <p>With the rekindling of the scientific investigation in Europe, scientists in the seventeenth and eighteenth centuries needed a method to record their observations of the natural world and share their complex findings. Many began to turn to drawing and sketching as a method to record and share. One such scientist was the Jesuit priest and astronomer Christoph Scheiner who used information visualization to record, then publicize, his findings about sunspots [5]. In 1611, Scheiner began recording the sunspots he observed using pen and paper. In 1626, Scheiner published "Tres Epistolae de Maculis Solaribus Scriptae ad Marcum Welserum" ("Three Letters on Solar Spots written to Marc Welser"). In these letters, Scheiner included small-multiple diagrams of his recordings. The grid of profiles of the sun showed the progression of sun spots as they progressed around the surface of the sun. The publication used etched plates to duplicate Sheiner's visualization. Few copies of Scheiner's letters were produced.</p>
  <p>Scheiner's sunspots exemplify the Scientific Visualization era. The data Scheiner visualized was data he had personally observed. To visualize what he saw, he used the tools available to him: pen and paper. He shared his visualization with other highly educated scientists—the letters were written in Latin and required extensive knowledge of astronomy. So expensive data, expensive production, and limited audience made visualization a specialists tool. Only the most educated would encounter an infovis in during this period.</p>
  <figure class="figure">
    <img src="img/langren.jpg" alt="" /><br/>
    <div>
      <div class="col2-1">
        <img src="img/camera-obscura-1544.gif" alt="" />
      </div>
      <div class="col2-1">
        <img src="img/OrteliusWorldMap1570.jpg" alt="" />
      </div>
      <div class="clear"></div>
    </div>
    <figcaption>Top: Michael F. van Langren . Visualization of the variations of estimates of the longitude between Toledo and Rome. Bottom left: Regnier Gemma-Frisius. Illustration of Camera Obscura. Bottom right: Abraham Ortelius. Theatrum Orbis Terrarum</figcaption>
  </figure>
  <p>These visualizations all had characteristics in common. Because the data gathered was limited to the naked eye (or one with a small telescope), most of the visualizations were about the natural world. The first modern atlas appeared a half century before Scheiner's sunspot visualizations. The first visual representation of statistical data appeared showing variations in estimates of the longitutude between Rome and Toledo. The first published image of the camera obscura showed a diagram of how the machine worked. These projects were taking commonly experience phenomema, abstracting them, and then publishing the visualizations.
    (http://euclid.psych.yorku.ca/SCS/Gallery/milestone/milestone.pdf)
  <h6>Bureaucratic Infovis</h6>
  <p>
    The Bureaucratic Visualization era occurred when the limits that scientists like Scheiner experienced were lifted. As these limits were reduced, an explosion of new visualizations occurred. This explosion's size and variety have earned the mid- to late-nineteenth century the title of Infovis's Golden Age[6]. Friendly explains the antecedents of this golden age as being: new statistics recorded by the nation-state, new statistics recorded about social activity, new methods of statistical analysis, new methods of print production, and new advances in the visual language of graphs [7].
  </p>
  <aside class="citation">
    <div>6. Heer, Jeffrey. "A Brief History of Data Visualization." Seminar on People, Computers, and Design. Stanford University. Stanford University, California. 26 Mar. 2009. Speech.</div>
    <div>7. Friendly, Michael. "The Golden Age of Statistical Graphics." Statistical Science 23.4 (2008): 502-535. Print.</div>
  </aside>
  <p>
    One of the most famous graphs of this golden age illustrates the great change in data-gathering, technology, and communication. Florence Nightingale introduced her landmark visualization, "Diagram of the causes of mortality in the army in the East" in 1858 when she she sent to Queen Victoria her book on the mortality rates of the British Army in the Crimean War. In this visualization, Nightingale performed two sets of comparisons. She first compared the number of British soldiers who died in the Crimean War due to preventable disease, wounds, and other. She then separated the graph to before and after March 1855, when a delegation of Sanitary Commissioners arrived in Crimea to improve sanitation in camps. The graph showed in one graphic that soldiers were far likelier to die of preventable disease and that the arrival of the commissioners correlated with a drop in these preventable deaths.
  </p>
  <figure class="img">
    <img src="img/Nightingale-mortality.jpg" alt="" />
    <figcaption>Florence Nightingale. 1858.</figcaption>
  </figure>
  <p>
    Nightingale wasn't the first to use the polar-area or coxcomb diagram. But she was the earliest prominent example of a person using infovis for persuasive and popular impact. She is quoted by Ehyde and Seneta as saying that her goal for all her visualizations was "to affect thro' the Eyes what we fail to convey to the public through their word-proof ears" [8]. She sent her book to Queen Mary and published it so that anyone interested could see her argument rather having to hear about using their "word-proof ears." Nightingale collaborated with the British epidemiologist William Farr for over two decades. Her unique contribution to the partnership was, according to Ehyde and Seneta, "a flair for publicizing their statistical findings through the use of diagrams." John Tukey, the 20th century statistician, referred to this persuasive quality as "interocularity," a graphic whose message hits you right between the eyes [9].
  </p>
  <aside class="citation">
    <div>8. Ehyde, C.C. and Seneta, E., 2001 Statisticians of the Centuries, New York: Springer</div>
    <div>9. Tukey, John W.. "Data-Based Graphics: Visual Display in the Decades to Come." Statistical Science 5.3 (1990): 327-339. Print.
    </aside>
    <p>
      Other visualizers like Charles Joseph Minard, Andre-Michel Guerry, and Francis Galton also contributed richly designed visualizations [10]. Minard's flow map of Napoleon's march to Russia is perhaps the most famous visualization ever. Andre-Michel Guerry took crime statistics&mdash;a novel piece of data first tabulated by the Paris police department&mdash;and released thematic maps of crime throughout France. Francis Galton published seventeen articles dealing how charts could be used for meteorology. The London <em>Times</em> published one of his weather charts in 1875. It was the first instance of a modern weather map published in newspapers.
    </p>
    <aside class="citation">
      <div>10. Friendly 2008</div>
    </aside>
    <p>
      After the infovis golden age, interest in the field waned. New methods of summary statistics were developed that were considered more accurate and "true" to the data.[11] Infovis which was hand-drawn, and painstakingly produced appeared old and Victorian. From 1900 to 1950, there was little to note in infovis developments.
    </p>
    <aside class="citation">
      <div>11. Heer 2009</div>
    </aside>
  <p>In the past ten years, the internet has created the ability to connect internet users together and allow them to access and share a collective experience, often in real time. The ability for users to connect with each other through a centralized system has revolutionized the field of information visualization. Today, it is easier to distribute, customize, quickly modify, and receive feedback from visualizations than ever before.</p>

  <p>Internet as delivery system</p>
  <p>Interactive Visualizaitons using the browser</p>
  <p>Towards connected visualizations</p>

  <p>Implications of internet visualizations on Participatory Health</p>


  <h5 id="related-academic-work">Processes of Data visualization</h5>
    <p>Ben Fry</p>
    <p>Jeffrey Heer</p>
  <h5 id="related-academic-work">Commercial Products</h5>
    <p>CureCrowd</p>
    <p>Iodine</p>
    <p>23 and me</p>
    <p>fitbit</p>
    <p>patients like me</p>
    <p>Save on Medical</p>



    <h3>Process</h3>
      <h5 id="related-academic-work">Initial Explorations</h5>
        <p>The original expectation for the thesis was to visualize the medical data in United States Medicare's Hospital Compare Database. Using exploratory visualization methods, we found that the data Hospital Compare contained to be too abstract too be useful. The process of making this realization is worth noting because of the methods used to explore this initial dataset.</p>
        <p>The Hospital Compare dataset comes from Medicare. It covers Medicare-certified hospitals, over 4,000 in the United States. The data set includes a few different interesting categories of data. Hospital Compare runs a patient survey that measures some quality measure from the patient’s point of view. These indicators include measurements like how responsive patients felt doctors and nurses were, how clean patients thought their rooms were, and how well patients thought their pain was well managed. In addition to quality indicators, the database included Medicare’s average per patient payment made to each hospital. This kind of data appeared to be a good first step towards visualizing the hospital landscape in the United States.</p>
        <p>I began to explore the data by transforming it from the text files provided by medicare into a standard database (MongoDB). I had never done this before, and it was a good exercise for me to learn more about the NodeJS programming and server environment. The lessons from these experiments greatly helped later on in the development of the PGH Medical Prices web application.</p>
        <figure class="figure">
          <img src="img/csv-to-db.jpg" alt="" />
          <figcaption>The Hospital Compare database was provided in a series of comma-separated-value spreadsheet files. CSV files are easy to distribute and can be easily accessed by spreadsheet programs, but are not ideal for applications to access data from. I converted the CSV files into a single database that my visualizations could programatically access.</figcaption>
        </figure>
        <p>Importing and then geocoding the 4,000 hospitals was straightforward. I used Google Maps’ API to feed in the hospital addresses as supplied from the dataset, and I got the latitude and longitude coordinates back. Google Maps limits to 2,500 api calls per day, which did mean that it took three or four days to successfully geocode every hospital.</p>
      <h5 id="related-academic-work">Gathering More Data</h5>
        <p>We wanted more granular data</p>
      <h5 id="related-academic-work">Medical Consumer Interviews</h5>
      <h5 id="related-academic-work">Prototyping a New Experience</h5>
      <h5 id="related-academic-work">Evaluative Testing</h5>
  </ul>


    <p>CureCrowd</p>
    <p>Iodine</p>
    <p>23 and me</p>
    <p>fitbit</p>
    <p>patients like me</p>
    <p>Save on Medical</p>
  <aside class="citation">
      <div></div>
  </aside>

  <h3>References</h3>
  <ul class="references">
<li>Heer, Jeffrey. "A Brief History of Data Visualization." Seminar on People, Computers, and Design. Stanford University. Stanford University, California. 26 Mar. 2009. Speech.</li>
</ul>

  </p>

</article>


<script>

</script>

<script id="rowTemplate" type="text/html">
<tr>
  <td class="exampleTitle">
    {{title}}<br/>
    <span><a href="{{{url}}}">link</a>. {{author}}. {{year}}</span>
  </td>
  {{#if narrative}}
  <td class="data true">
     &#x2713;
  </td>
  {{else}}
  <td class="data">
  </td>
  {{/if}}
  {{#if social}}
  <td class="data true">
     &#x2713;
  </td>
  {{else}}
  <td class="data">
  </td>
  {{/if}}
  {{#if personal}}
  <td class="data true">
     &#x2713;
  </td>
  {{else}}
  <td class="data">
  </td>
  {{/if}}
  {{#if service}}
  <td class="data true">
     &#x2713;
  </td>
  {{else}}
  <td class="data">
  </td>
  {{/if}}
  {{#if ambient}}
  <td class="data true">
     &#x2713;
  </td>
  {{else}}
  <td class="data">
  </td>
  {{/if}}
  {{#if art}}
  <td class="data true">
     &#x2713;
  </td>
  {{else}}
  <td class="data">
  </td>
  {{/if}}
</tr>
</script>

<script id="biblioTemplate" type="text/html">
<p>{{author}}. {{year}}. <em>{{title}}</em>. {{journal}} {{number}}({{volume}}). {{publisher}}. </p>
</script>



<?php page_about();?>
<?php page_bottom();?>
