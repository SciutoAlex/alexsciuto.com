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
    Almost everyone above a certain age has received a medical bill or explanation of benefits from a hospital or medical provider. They appear unexpectedly, often months after a procedure or operation. Inscrutable, dense, medical bills fall into the same category of impenetrability as monthly financial statements or the fine-print on a credit card bill. But the data they hold is a rich source that describes all the procedures a person has experienced. This thesis project is composed of three projects that are each different methods of turning medical price data into useful and accessible information.
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
  <h5>Motivation (draft)</h5>
  <p>Florence Nighingale, the mother of modern nursing, is widely known for the reforms she advocated for in second half of the nineteenth century. She led efforts to improve the care of wounded and sick soldiers in the Crimean War, and after the war she founded a nursing school in London for the training of skilled nurses. Less well known, she was an excellent statistician and visual thinker. She realized that using visual means to communicate complex ideas would help "to affect thro' the Eyes what we fail to convey to the public through their word-proof ears." She used data graphics about sick and wounded in the Crimean War to convert incomprehensible statistics into meaningful information that moved people who viewed the graphics to change their actions.</p>
  <p>This thesis project is motivated by two impulses: a deep love and respect for the communicative power of well-designed visual information and a belief that this power should be put to use to substantially and positively impact its users. I have chosen to focus on medical price visualizations becuase it is an area where well-designed information graphics can make a large, positive impact on medical consumers as they make medical choices. Also, while much work has been done on medical data visualizations, there is a lack of design work that attempts to make medical prices more understandable.</p>
  <p>This thesis is important because it suggests an expanded role for information visualization by combining information design with service design and methods of crowdsourcing. This method could be applied to many other problems where data is de-centralized, fragmented, and hard to get.</p>
  <p>To attempt to make medical prices more understandable for medical consumers, this thesis combines different trends in contemporary human-computer interaction and interaction design. The web browser today provides an expressive design environment for creating data visualizations. Visualizations that use the web browser have the ability to have two-way communication both giving visualzations to the user but also eliciting the user to give back their own data. Another trend in HCI that this project combines is crowdsourcing, or breaking up large tasks into smaller and simpler tasks for a crowd of people to complete. Finally, this project uses the concept of service design to think about the relationship between the system, its users, and the data that is traded back and forth.</p>
</p>
  <h5>Overview (scribbles)</h5>
  <p>This thesis is composed of three projects:</p>
  <ul class="italic">
    <li><strong>PGHMedicalPrices.us</strong> A website that solicits users to upload photos of their medical bills.</li>
    <li><strong>Medical Price Explorer</strong> A service design concept that expands the PGHMedicalPrices.us website turning it into a full service</li>
    <li><strong>Pittsburgh Price Maps</strong> An alternative method for gathering and disseminating medical price data.</li>
  </ul>
  <figure class="figure">
    <img src="img/projectsFryFrame.png" alt="" /><br/>
    <figcaption>Caption goes here</figcaption>
  </figure>
   <p>The Prior Art section tells about academic and commercial work that relates to my project</p>
   <p>The Process section outlines the process of creating these projects.</p>
   <p>The Design solution section contains a tour of the projects along with other documentation.</p>
   <p>The Discussion section contains a reflection about the thesis.</p>
  <h5>Thesis Contributions</h5>
  <ul>
    <li>Something about gathering data from users</li>
    <li>Something about combining medical billers with individual work</li>
    <li>Something about comparing old and new techniques</li>
    <li>Something about the recent history of internet visualizations.</li>
    <li>Something about an index of medical bills public.</li>
  </ul>
  <h3>Prior Art</h3>
  <p>In this section, I will give a brief overview of the three academic areas that are most closely related to my thesis: crowdsourcing and distributed work, online information visualization, and health 2.0.</p>
  <h5 id="related-academic-work">Crowdsourcing (scribbles)</h5>
    <h6>History and Definition</h6>
    <p>Crowdsourcing is the practice of enlisting many humans to perform simple tasks that when combined solve problems that a computer or individual person could not solve. Crowdsourcing goes by many names that highlight the multitude of uses crowdsourcing has: peer production, user-powered systems, user-generated content, collaborative systems, community systems, social systems, social search, social media, collective intelligence, wikinomics, crowd wisdom, smart mobs, mass collaboration, and human computation (Doan, Ramakrishnan, and Halevy 86). Doan, Ramakrishnan, and Halevy explicitly define crowdsourcing broadly as any system as long as it "it enlists a crowd of humans to help solve a problem defined by the system owners."</p>
    <p>The origins of crowdsourcing depend on how one chooses to define it. Architecture competitions and prizes for design work have been held for decades, and these projects that enlist many teams to create sets of proposed designs for a building or product can be included as crowdsourcing. A competition for the design of the Sydney Opera House was held to determine its architect. Jørn Utzon would win five thousand pounds in 1957 when his design was selected [Murray 2004]. Usually crowdsourcing is considered a new method of bringing people together to solve a common problem, but it is much older than the Internet.</p>
    <p>Today, crowdsourcing flourishes using the internet as its base of communication. Crowdsourced apps take advange of the...</p>
    <h6>Challenges of Crowdsourcing</h6>
    <p>There are four challenges to implementing a successful crowdsourced system. They are:</p>
    <ul>
      <li>Recruiting and Maintaining Participants</li>
      <li>Determining what users tasks will be</li>
      <li>Combining the individual units of work together</li>
      <li>Ensuring that individual units of work are done correctly.</li>
    </ul>
    <h6>Localized Crowdsourcing</h6>
    <p>Almost all crowdsourced systems assume that their workers are undifferentiable or differentiable based on some skills-criterion like ability to read English or do simple math. Another way to differentiate workers is based on their geography. Targeting crowdsourced work to particular geographic locations has not yet been explored. One reason that this hasn't been explored is that the economic success of web-based crowdsourcing rests on exploiting geographically deterimined economic disparities. It is the latest iteration of exporting work to places with lower human-labor costs. After the United States, the second-largest percentage of Amazon Mechnical Turk workers come from India.</p>
    <p></p>
    <h6>Examples of Crowdsourced Systems</h6>
    <p>Wikipedia</p>
    <p>Amazon Turk</p>
    <p>Palantir Crisis Mobile App</p>
    <p>oDesk</p>
      <li>Doan, Anhai, Raghu Ramakrishnan, and Alon Y. Halevy. "Crowdsourcing Systems on the World-Wide Web." Communications of the ACM 54.4 (2011): 86. Web.</li>
    </ul>sourcing is
  </p>
  <h5 id="related-academic-work">Health 2.0 (scribbles)</h5>
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


  <h5 id="related-academic-work">Web-based Data Visualization (draft)</h5>
  <img src="img/web-history.png">
  <p>Web-based information visualization has been a subject of research and practice since the early days of the world wide web. Tim Berners-Lee publicly debuted the world wide web in 1992, and by 1993, the first web browser, the Mosaic Browser by Marc Andreessen gave web browsers a graphical user interface to access web content. The early world wide web focused on linking text documents with low-resolution images together in the form of hypertext documents. There would be many uncoordinated attempts to add graphical and interactive capabilities to web browsers necessary to enable web-based data visualizations. Eventually by the late 2000s, with the adoption of HTML5, CSS3, and javascript as a common standard for markup, styling, and interaction, web developers and programmers began creating visualization tools and using those tools to create richly interactive web-based visualizations.</p>
  <h6>Early Visualization Experiments</h6>
  <p>Early experiments in visualization on the web focused on <a href="http://ieeexplore.ieee.org/stamp/stamp.jsp?tp=&arnumber=595269&tag=1">visualizing the web itself</a>. Visualizers attempted to show the topology of the web in graphical form. Network graphs of servers, of web pages, of hypertext links were made. Visualizers also tried to map the web to physical geographies or organizational maps. Realizing that web page connections told something about the real world, by mapping the connections of web pages, visualizers could map other phenomena like the relationships between different departments at a university. Finally, early visualizers attempted to visualizer web users cognitive models for the data they were viewing. This came in the form of interactive bookmarking applications, hot lists of useful websites, and other ways to divide content.</p>
  <figure class="img">
    <img src="img/visualizing-web-resources.png" alt="" />
  </figure>
  <p>An example of this early kind of web visualization is Gerson et al's 1995 <a href="http://ieeexplore.ieee.org/stamp/stamp.jsp?tp=&arnumber=528696">Visualizing Internet Resources Case Study</a>. The case study included three different visualizations that were additions to the Mosaic Browser. The first visualization, "Hyperspace View," was intended to aid users in exploring the web without getting lost. Tree graphs were used to visualize the path the user traveled through and also to record alternative paths that were not taken. A second case study enabled browser users to interactively change the styling of links and where links pointed to make them more memorable and more personal. "For information resources to be effective and to enhance problem solving and analysis, they should allow each user to construct his or her own information space with links and associations." It's a radical response to the author-centric approach to the web. The final case study included analyzing gathered web content and correlating word pairs to highlight interesting content. The goal of this visualization was to make the already overwhelming amount of information available more easy to consume.</p>
  <p>Soon after, the power of web-based visualization to visualize datasets unrelated to the web itself was explored. Wood et al. created a <a href="http://ieeexplore.ieee.org/stamp/stamp.jsp?arnumber=567610">3D histogram</a> visualizing environmental data. Wood et al. also gave four possible scenarios for how web-based visualizations could take place. They suggested visualization could happen as either an image or 3d file sent to the browser. They noted that this is the standard method of visualization circa 1996. They then suggest that the raw data could be sent over the web, and the user themself or their own software could be responsible for the visualization. Finally, Wood et al. suggest an interactive model where the visualization would be created by the producer of the data but the user could modify and change the visualization. It's interesting to see these different scenarios. Today in the mid 2010s, images are still widely used to quickly convey visualizations over the web (see the figures in this thesis for example). The most interesting visualizations today use the fourth model Wood et al. suggested. Scenario three, where the user is responsible for the visualization has not been adopted. But some applications, like Tableau, Processing, or pre-made D3 graphs templates foreshadow that user-controlled visualization may just have had to wait longer for its time to come.</p>
  <p>These early experiments in web visualization were primarily concerned with the possibilities of what technology could deliver, when viewing the work that was created, it is clear that little attention was put towards design, storytelling, or insight generation.</p>
  <h6>Uncoordinated technology</h6>
  <p>When the web was created, its creator focused on the exchange of text documents with embedded images. Almost immediately, web users tried to style the content created. In order to satisfy this demand for greater visual sophistication, browsers began implementing non-standard HTML markup like &lt;blink&gt;, &lt;center&gt;, &lt;spacer&gt;, &lt;stroke&gt;. As expectations for web bounded ahead of agreed upon specifications, different technologies provided additional features that information visualizers used to make visualizations.</p>
  <p>Introduced in 1995, the Java applet gave developers direct access to the hardware processing of a computer through the web browser. Visualizers could write code in Java, then run the applet in the browser. Early visualizations used applets to access the full power of the computer while still existing on the web. Even today, users who wish to share <a href="https://processing.org/">Processing</a> visualizations must use java applets to share them through the web. The benefits of using applets were myriad in the early web, applets bypassed the limits of HTML, enabled greater interactivity, and offered developers greater computing power.</p>
  <figure class="figure">
    <img src="img/java-examples.png" alt="" />
    <figcaption>Three Java applets: <a href="http://ieeexplore.ieee.org/xpls/abs_all.jsp?arnumber=663891&tag=1">VizWiz (1997)</a>, <a href="http://bioinformatics.oxfordjournals.org/content/20/17/3246.short"> Java TreeView (2004)</a>, <a href="http://artport.whitney.org/commissions/thedumpster/dumpster.shtml">the Dumpster (2006)</a></figcaption>
  </figure>
    <p>Java applets were appealing, but they were not to be a lasting technology. For a variety of reasons, mainly the creators of java's choice to <a href="http://www.javaworld.com/article/2077055/soa/what-does-sun-s-lawsuit-against-microsoft-mean-for-java-developers-.html">sue Microsoft</a> for its incomplete implementation of java applets, some popular browsers didn't include applet support. In addition, Java had numerous security issues that made using <a href="http://threatpost.com/javas-losing-security-legacy/102176"></a>applets dangerous</a>. Browser makers responded to this danger by requiring users to jump through additional dialogues and warnings before running an applet. In the end, these drawbacks led to less and less use of java applets. Today, outside of specialized and older websites, applets are not used.</p>
    <p>Adobe Flash is a technology developed by Macromedia and later aquired by Adobe that added rich interaction and multimedia support to standard websites. Introduced in 1996, the Flash Player must be downloaded and installed by each individual user. This requirement meant that for a number of years, Flash adoption would grow until it reached ubiquity in the early 2000s. Flash offered similar features to Java applets, but Flash's creators focused on maintaining usability, security, and compatability. A visualizer could know that if they created a visualization in Flash, it would appear correctly no matter the computer or browser used.</p>
    <figure class="figure">
      <img src="img/flash-examples.png" alt="" />
      <figcaption>Three Flash apps: <a href="http://www.maani.us/xml_charts/">XML/SWF Charts (2003-2015)</a>, <a href="http://stamen.com/projects/inthenews"> In The News (2004)</a>, <a href="http://www.nytimes.com/interactive/2009/07/31/business/20080801-metrics-graphic.html">How We Spend Our Day (2008)</a></figcaption>
    </figure>
    <p>Flash and Applets were the two main formats used by early web-based visualizers. They attempted to expand the very limited design pallete early web browsers offered. Because they were both non-standard, proprietary additions, their popularity eventually faded as open, standardized technologies caught up to the expectations of visualizers.</p>
    <h6>Standards-based Data Visualization</h6>
    <p>Creating the standards that determine the capabilities of web content is a collaborative affair. The main stakeholders in the process, technology companies like Microsoft, Apple, Google, and nonprofit, open-source organizations like Mozilla and Opera, and individual engineers and developers, come together under the aegis of the World Wide Web Consortium, to develop agreed upon standards. Those standards are then taken by each oragnizations and built into the products they offer. As an example of the timeframe for developing standards, HTML 4 was standardized in 1997 and updated in 2000. Work on what would become HTML5 began in 2004. the HTML5 standard was completed in 2014, ten years after beginning work. Throughout those ten years, browser developers incrementally added in support for HTML 5 features as features were added and removed from the draft specification.</p>
    <p>It was in this lag between HTML 4 and HTML5 that alternative technologies like Java and Flash thrived.</p>
    <figure>
      <img src="img/nyt-maps.png">
      <figcaption>Ten years of interactive electoral maps from the New York Times. In 2000, the map was a static image. In 2004 and 2008, the Times used Flash to make their map. In 2012 and 2014, the map was made using HTML5 web technologies.</figcaption>
    </figure>
    <p>By 2010, web browsers had caught up enough to the rich features that Java applets and Flash offered, that developers and visualizers switched to developing standards-based visualizations. These visualizations used a variety of technologies to deliver visualizations. Data could be delivered over HTTP using JSON or XML data structures. SVG and Canvas were graphics technologies that enabled large expressiveness, especially for lines, shapes, and 3d. Javascript became powerful enough and standardized enough to control translate received data into SVG and Canvas-based representations. CSS provided an interface to style elements on the screen. And HTML5 was the glue that kept all these technologies together. Taken together, these technologies turn the web browser into a powerful but accessible environment for visualizers.</p>
    <figure class="figure">
      <img src="img/html-examples.png" alt="" />
      <figcaption>Three HTML visualizations: <a href="http://alexsciuto.com/projects/state-size/">State Sizes (2012)</a>, <a href="http://www.therefugeeproject.org/"> The Refugee Project (2014)</a>, <a href="http://spacecraftforall.com/">Spacecraft For All (2014)</a></figcaption>
    </figure>
    <p>

    </p>



  <h5 id="related-academic-work">Processes of Data visualization</h5>
    <p>Ben Fry</p>
    <p>Jeffrey Heer</p>


  <h5 id="related-academic-work">Commercial Products (draft)</h5>
    <p>Each of the products below take user data, combines it with other data sources, then displays back to the user using the web browser. The goal of this review of commercial products is to show the range of services in the healthcare context that are using user data to provide value back to users. As you'll read, each service has their own particular value-proposition that makes them worthwhile for users to spend their time and money on.</p>

    <img src="img/comp-cure-crowd.png"/>
    <h6>CureCrowd</h6>
    <p>CureCrowd is a user-generated database of treatments for illnesses. Users use the site to find illness they are experiencing, and CureCrowd tells what kinds of treatments other users have tried for that illness. CureCrowd also records what kind of side-effects each user experienced as well as an effectiveness rating. A surgey is prominently featured on each page that solicit the user to enter in their information for that particular illness. CureCrowd adds a small level of context for the illness by including a description of each illness pulled from Wikipedia.org.</p>
    <p>CureCrowd's greatest weakness is its lack of context for different treatments. For headaches, aspirin is listed as the most effective treatment, but how many aspirin, what time of the day the aspirin was taken, and other variables are not recorded. Because of this lack of context, CureCrowds data outputs—a series of bar charts—is sparse. The user is usually left wanting more information. But CureCrowd does a good job of quickly showing available treatments and ascertaining whether or not a treatment is worth considering. CureCrowd is the start, but the ending of a search for treatments for common illnesses.</p>

    <img src="img/comp-iodine.png"/>
    <h6>Iodine</h6>
    <p>Iodine is a service with a goal similar to CureCrowd, to educate consumers about the medications they take. But unlike CureCrowd, Iodine uses more data sources and provides more data outputs for the user to experience. This additional functionality gives the user a more complete view of a particular medication, but the directness of CureCrowd's value-proposition is lost. In addition to user surveys, Iodine used Google Surveys to quickly survey 100,000 people in the United States about the medication they use, its effectiveness, and any side-effects. Iodine also includes medication-specific tips from pharmacists, FDA information, as well as medication cost information.</p>
    <p>Because of the use of Google Surveys, Iodine has a larger base of information that CureCrowd. CureCrowd has thirteen reviews for aspirin, while Iodine has 702 reviews. Also, because Google Surveys are paid, Iodine was able to ask more detailed information about effectiveness and side effects. I can see more information about side effects and efficacy that CureCrowd. This greater level of detail and coverage enables the site to answer more questions about more treatments.</p>
    <p>Iodine also uses additional datasets effectively to give additional information about treatments. Their pharmacists recommendations provide a subjective take on each drug, and the FDA information that is included gives details that come with prescription medication that many people usually throw away. Generic and brand-name prices add another facet that describe medication. By combining all these different sets of data together, Iodine gives the user a multi-faceted view of medication.</p>
    <img src="img/comp-23.png"/>
    <h6>23 and me</h6>
    <p>23 and Me is a genetic sequencing service that for a fee will sequence a user's genetic information, then display ethnic heritage information as well as implications for current and future health. Ethnic heritage is represented by different geographic locations. A person could be 23% Northern European and 13% Asian for example. Health prognoses include responsiveness to certain drugs, likelihood of inheriting particular diseases, and information on physical traits like a flushing reaction to alcohol. When 23 and Me first launched, their pitch was about <a href="http://www.scientificamerican.com/article/23andme-is-terrifying-but-not-for-reasons-fda/">the novelty of getting to know more about a person's own genes</a>, but the company quickly moved onto to advertising the predictive power that genetic information has. Because it has found such an interesting dataset and a way to massively market that dataset, 23 and Me has received a huge amount attention as well as the Food and Drug Administration halting the health implications portion of its service.</p>
    <p>23 and Me features a different service model. Its users are both customers and products for other services it offers. As its <a href="https://www.23andme.com/about/privacy/">privacy policy</a> notes:</p>
    <blockquote cite="https://www.23andme.com/about/privacy/">
      We may share aggregate information with third parties, which is any information that has been stripped of your Registration Information (e.g., your name and contact information) and aggregated with information of others so that you cannot reasonably be identified as an individual (“Aggregate Information”). This Aggregate Information is different from “individual-level” information. Individual-level Genetic Information or Self-Reported Information consists of data about a single individual’s genotypes, diseases or other traits/characteristics information. For example, Aggregate Information may include a statement that “30% of our female users share a particular genetic trait,” without providing any data or testing results specific to any individual user.
    </blockquote>
    <p>
      With this language, it makes it clear that 23 and Me has a split-level plan for its data. On the one hand, it uses visualization and information design to make its consumer palatable more appealing, but these visualizations are a step in their bigger goal of amassing a large set of genetic information that they can then mine to answer medical questions.
    </p>
    <img src="img/comp-fitbit.png"/>
    <h6>fitbit</h6>
    <p>Fitbit is a company that sells wearable devices that record a variety of health information about a user. Health information includes steps walked, heart rate, gps location, activity level, and flights of stairs climbed. Users also have the option to add in additional data, such as their weight, daily eating patterns, and activity descriptions. Fitbit then shows that data back to its users in low-resolution indicators on the devices themselves, and through a web-based dashboard. The dashboard includes line graphs that show the history of sleep and activity, and graphical indicators to show progress throughout the day.</p>
    <p>Fitbit's primary feature is that its wearable devices help users achieve a <a href="http://blog.fitbit.com/the-magic-of-10000-steps/">goal of walking</a> 10,000 steps each day. To do this, even the lease expensive Fitbit devices feature indicators to ambiently remind the user of their the progress towards their goal throughout the day. As the day progresses, lights on the device cumulatively light-up until 10,000 steps are reached. At that point all the lights are reached. The 10,000 steps is an arbitary goal, but it provides a clear, achievable goal that makes the initial investment appear worthwhile.</p>
    <p>Fitbit also differentiates itself from the other examples in this section by providing ways for users to share their data with other users. Users can connect with prior friends or find new friends, make groups, and share goals and stats. This sharing provides a social dynamic that encourages people to reach their goals. Fitbit's information is not very personal inforomation, and the methods Fitbit provides for sharing limit the kinds of sharing that can take place. I believe that Fitbit will need to explore greater levels of sharing for continued success, but they will need to tread carefully to protect their users sense of privacy.</p>
    <img src="img/comp-patients.png"/>
    <h6>patients like me</h6>
    <p>Patients Like Me is a comprehensive health tracking service. It was founded to enable users to <a href="http://www.patientslikeme.com/about">share how they treat serious, long-term conditions</a>. It originally focused on diseases like ALS (Lou Gehrig's Disease) and Parkinsons, but has since expanded to offer functionality to track the health history of any disease. Users enter all the information the receive themselves. In exchange for all this information, users receive a multi-variate graph of all their health statistics charted over time. When filled out, the chart presents a detailed view of an illness: its symptoms, treatments, medications, and how the user emotionally feels. Patients Like Me also shares the anonymized health data with research partners, similar to 23 and Me. Patients Like Me goes so far as to have an <a href="http://www.patientslikeme.com/about/openness">Openess Policy</a> as well as a Privacy Policy. The Openess Policy explains: "Currently, most healthcare data is inaccessible due to privacy regulations or proprietary tactics. As a result, research is slowed, and the development of breakthrough treatments takes decades. ... But it doesn’t have to be that way. When you and thousands like you share your data, you open up the healthcare system."<p>
    <p>Patients Like Me serves as a centralized experience that records all facets of an illness. It has taken advantage of the lack of control patients have over their own health data by giving them the chance to recreate their health records, piece-by-piece. Patients Like Me also allows users to record information that a medical record may discount: level comfort, happiness level, mood. It then uses all this information to give users visualizations and services that make the data-entry worthwhile. As the seriousness of the illness increases, the more likely a user will be willing to invest the time to control their medical health data and reap the benefits that Patients Like Me provides.</p>
    <h6>Competitive Conclusion</h6>
    <p>This section has introduced five services that are gathering data from users and presenting it back to users using information design and data visualization. Each service though, has a different service model, a different set of target users, and different ways that users can interact with the service. With the exception of CureCrowd, these services have found an audience that is interested in exchanging data for insights. This bodes well for designers working in this field. There is much that can still be done with medical data, and users will try using it.</p>
    <p>These services all avoid discussions of price and cost of healthcare. This is a large, though expected, oversight. Because these services rely on users to donate their information, and users have historically had no incentive to care about or track the cost of their healtcare, health care prices have not featured prominently in these services offerings. Because of the changing healthcare landscape in the United States, people will increasingly care about the cost of their healthcare. Providing services that enable users to see and reflect back on their healthcare prices and how it relates to their health outcomes is a promising.</p>
    <h3>Process</h3>
      <p>This thesis has iterated and changed throughout its eight-month life. As data has become available or discovered to be unavailable or less than was expected, the thesis has had to morph to accomdate these changes. Originally, the expectation was that this thesis would be primarilly about data visualization of available data. As time progressed, I felt a more interesting challenge was not visualizing data that is easily aquired but finding ways to aquire data that is not well-maintained or available. As I have come to the end of the thesis process, the process I have engaged in has covered the gamut skills one would expect from a professional data visualization specialist, such as tranforming data, dealing with methods of representation, developing the visualiation, and finding a good story to tell. I have also had to use skills one would more likely associate with a journalist or businessperson, such as cold calling hospitals, handing out fliers, and strategizing publicity.</p>
        <figure class="figure">
          <img src="img/process-timeline.png" alt="" /><br/>
          <figcaption>Caption goes here</figcaption>
        </figure>
      <h5 id="related-academic-work">Initial Data Explorations (draft)</h5>
        <p>The original expectation for the thesis was to visualize the medical data in United States Medicare's Hospital Compare Database. Using exploratory visualization methods, we found that the data Hospital Compare contained to be too abstract to be useful. The process of making this realization is worth noting because of the methods used to explore this initial dataset.</p>
        <figure class="img">
          <img src="img/hospital-compare.png" alt="" />
          <figcaption>The hospital compare user interface.</figcaption>
        </figure>
        <p>The Hospital Compare dataset is produced by US Medicare from data from Medicare-certified hospitals. There are over 4,000 of these certified hospitals in the United States. The data set includes a few different interesting categories of data. Hospital Compare runs a patient survey that measures some quality measure from the patient’s point of view. These indicators include measurements like:</p>
          <ul class="italic">
            <li>Patients who reported that their pain was [always; usually; sometimes or never] well controlled</li>
            <li>Patients who reported that they [always; usually; sometimes or never] received help as soon as they wanted</li>
            <li>Patients who gave their hospital a rating of [9 or 10; 7 or 8; less than six] on a scale from 0 (lowest) to 10 (highest)</li>
            <li>Patients who reported [YES they would definitely; YES they woud probably; NO they would not] recommend the hospital</li>
          </ul>
        <p>In addition to quality indicators, the database included Medicare’s average per patient payment made to each hospital.</p>
        <p>All this data for so many hospitals made it appear to be a good first step towards visualizing the hospital landscape in the United States. Though the data </p>
        <p>I began to explore the data by transforming it from the text files provided by medicare into a standard database (MongoDB). I had never done this before, and it was a good exercise for me to learn more about the NodeJS programming and server environment. The lessons from these experiments greatly helped later on in the development of the PGH Medical Prices web application.</p>
        <figure class="figure">
          <img src="img/csv-to-db.jpg" alt="" />
          <figcaption>The Hospital Compare database was provided in a series of comma-separated-value spreadsheet files. CSV files are easy to distribute and can be easily accessed by spreadsheet programs, but are not ideal for applications to access data from. I converted the CSV files into a single database that my visualizations could programatically access.</figcaption>
        </figure>
        <p>Importing and then geocoding the 4,000 hospitals was straightforward. I used Google Maps’ API to feed in the hospital addresses as supplied from the dataset, and I got the latitude and longitude coordinates back. Google Maps limits to 2,500 api calls per day, which did mean that it took three or four days to successfully geocode every hospital.</p>
        <p>With the hospitals geocoded, I began to associate different pieces of data with each hospital. In order to sketch with code the data I was adding, I made a simple javascript application that combined <a href="http://www.mapbox.com/">MapBox.com's</a> mapping services with the data I had amassed. The app drew a zoomable map on the html page, then sent the bounding latitude and longitude information to the database which then returned hospitals within view.</p>
        <figure class="figure">
          <img src="./img/overall-map.png" alt="" />
        </figure>
        <p>There’s really nothing more wonderful than seeing a first visualization from a dataset. Even when that first visual glimpse of data falls short of what you expected (which is almost always the case), seeing data and not having to read it. Viewing the data is great. It’s awesome. I love looking at data. Visualizing the data opens up new channels for viewing.</p>

        <p>Viewing the geographic distribution of the data showed me that the dataset was national, that it was geographically comprehensive. But I wasn’t interested in showing that the United States has hospitals from coast to coast. I would need to add additional data to the map to begin to see if the data I had gathered would be useful to tell a more interesting story about prices.</p>
        <figure class="figure">
          <img src="./img/hip-surgery.png" alt="" />
        </figure>
        <p>The first layer of data I added to the geographic data was volume of medicare procedures. Hospital Compare tracks a the number of patients treated for variety of common procedures and conditions. These conditions and procedures include chest pain, hip replacement, gall bladder surgery, spinal surgery. The data also separated non-eventful procedures and procedures that resulted in complications. It’s not exhaustive, but it’s what we have. I added this data to the map by changing the the marker size and color for each hospital point. If a hospital did no such procedures, the marker was left gray and small. If a hospital performed procedures, the size changed to indicate volume, and the color was changed to red to further separate it from hospitals that performed no procedures.</p>

        <p>The good news, there are many more successful, non-eventful operations performed in the United States than operations that include complications. The bad news is that using a geographic map with hospital-level resolution to view the data was not particularly helpful beyond providing a quick overview of the data. There are a few reasons that this graphic form didn’t work well. The first is that hospital location tracks population density, so by seeing hospitals we’re really seeing a proxy measurement of population. This method of showing one variable and it indicating another can be done to great effect, such as when Ben Fry visualized all the roads in the United States (http://fathom.info/allstreets). The road map transforms into a mapping of population, economic activity, and topology, even though we only ever see roads. But we’re not interested in seeing population. The second problem with the geographic map with hospital-level resolution is that procedure volume is an unclear variable. High volume does not necessarily mean desirable. A low-volume hospital with high quality indicators may be ideal because that combination of data implies personalized service.</p>

        <p>Determining what is a successful visualization first means I must determine what the audience and what the goal for my visualization is. Ari Lightman, a professor at the Heinz School of Public Policy, asked me, what is the goal of your project? Is this for consumer education, a visualization for policy makers, information for hospital administrators? Each group has their own needs for visualization and their own unique capacity for understanding a slice of the healthcare puzzle.</p>

        <p>In order to move forward, I decided to focus on the medical consumer. I particularly decided to focus on a medical consumer who needs non-emergency surgery. What information could I show them to help them choose between different hospitals. I decided to ignore the question of insurance since that was another layer of complexity.</p>
        <figure class="figure">
          <img src="./img/comparison-app.png" alt="" />
        </figure>

        <p>In order to see how price, location, and quality might interact, and if this combination would be interesting, I created another visualization which focused on a single hospital that the user searched for, then allowed them to compare the selected hospital with other hospitals side-by-side. Users could compare the average medicare cost, average quality indicators, and see a small map of the area surrounding the hospitals.</p>

        <p>The rationale for this visualization was that consumers would be limited to hospitals surrounding them. There would be a limited number of hospitals to compare, and users would want to select hospitals they were interested in, not see all the data from all hospitals in the region. I think this concept has strengths, particularly using a map to select which hospitals should be compared.</p>

        <p>But the visualization also highlighted the weakness of the data I was working with. Medicare bills all seemed to clump around 20,000 dollars. And what that figure means is highly abstract. It is the average amount paid by medicare for a single medicare-qualified patient to receive care in that hospital. This piece of data may be of interest for transparency reasons or for finding small differences between hospitals, but this number wouldn't be meaningful for the average health care consumer. The Quality indicators had similar issues. The indicators lumped together. The data appeared very homogenous. A policy-maker or hospital executive may care about the difference between 17,000 and 21,000 medicare payments, but it was clear that the average user would not be influenced by this data.</p>
        <figure class="img">
          <img src="./img/scatter-edu.png" alt="" />
        </figure>
        <p>I wanted to check that the homogeouneity that I was seeing for Pittsburgh was similar throughout the entire dataset. So I moved a level up in abstraction, abandoned all geographic data, and did a comparison of cost to quality indicators using a scatter plot. In the scatter plot, I plotted the price each hospital was paid by medicare along the X-axis and plotted the percent of respondents who recommended or did not recommend the hospital. If quality and price had a meaningful relationship, I would expect to see the plotted data form some kind of tight oval or other shape indicating that all hospitals recording a particular price had similar outcomes. If there was no relationship, then the scatterplot would be a blob without much structure.</p>
        <figure class="figure">
          <img src="./img/scatter-plot.png" alt="" />
        </figure>
        <p>The figure above shows that there is little relationship between quality and Medicare payout. Hospitals charging similar prices could be expected to have  high quality ratings or low ratings. The price didn't matter much. Conversely, very cheap hospitals were likely to have the same quality ratings as very expensive hospitals.</p>
        <p>Showing this data to others, some suggested that differences in location, particularly rural compared to urban may be skewing the data. In order to explore this possibility, I made a second set of scatter plots. Instead of showing quality compared to price, I showed how urban a hospital was compared to quality. To clearly define urban, I recorded each hospitals distance from the nearest town or city with at least 15,000 people. </p>
        <figure class="figure">
          <img src="./img/quality-distance-scatter.png" alt="" />
        </figure>
        <p>The results of this chart were as unsatisfying as comparing price to quality. The chart shows a majority of hospitals close to urban areas and a tail of hospitals farther away, but the distance doesn't effect the quality indicators.</p>
        <p>At this point, it was clear that the Medicare dataset would not be as useful as I had originally expected. All of the measures were too homogenous to tell a clear story. New data was needed that better illustrated the relationship between price and hosptial care.</p>



      <h5 id="related-academic-work">Gathering More Data (scribbles)</h5>
        <p>We wanted more granular data</p>
      <h5 id="related-academic-work">Medical Consumer Interviews</h5>
      <h5 id="related-academic-work">Prototyping a New Experience</h5>
      <h5 id="related-academic-work">Evaluative Testing</h5>
  </ul>


  <aside class="citation">
      <div></div>
  </aside>

  <h3>References</h3>
  <ul class="references">
<li>Heer, Jeffrey. "A Brief History of Data Visualization." Seminar on People, Computers, and Design. Stanford University. Stanford University, California. 26 Mar. 2009. Speech.</li>
</ul>

<h3>Links</h3>
<ul>
  <li>http://www.ownyourhealthinfo.com/</li>
  <li>http://www.addictinginfo.org/2014/07/15/this-guy-put-his-hospital-bill-online-now-the-whole-world-is-talking-about-it/</li>
  <li>https://www.youtube.com/watch?v=YQZ2UeOTO3I</li>

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
