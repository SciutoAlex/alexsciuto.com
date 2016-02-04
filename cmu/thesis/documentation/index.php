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

  <h2>Data Visualization for Medical Price Education and Transparency</h2>
  <h3>Gathering, Using, and Understanding Medical Price Data</h3>
  
    <h6>Abstract</h6>
    <p class="intro">
      The health care system in the United States is changing rapidly. Individual patients are expected to become educated medical consumers making informed choices and paying for those choices. Many researchers and designers are studying how medical consumers understand their medical care, but there is an opportunity for meaningful design strategies using data visualization to help consumers understand how much they pay for their care. This thesis uses service and user-centered design methods and interactive data visualization to create systems that gather medical prices and display them back to users all with the goal of creating more educated medical consumers.  
    </p>
  <figure class="figure" id="toc">
  <h3>Table of Contents</h3>
  <ul>
    <li class="section">
      <h6><a class="scroll" href="#introduction">Introduction</a></h6>
      <ul class="sub-sections">
        <li><a class="scroll" href="#motivation">Motivation</a></li>
        <li><a class="scroll" href="#problem">Problem</a></li>
        <li><a class="scroll" href="#overview">Documentation Overview</a></li>
      </ul>
    </li>
    <li class="section">
      <h6><a class="scroll" href="#literature">Literature Review</a></h6>
      <ul class="sub-sections">
        <li><a class="scroll" href="#crowdsourcing">Crowdsourcing</a></li>
        <li><a class="scroll" href="#webvis">Web-based Data Visualizations</a></li>
        <li><a class="scroll" href="#health">Health 2.0</a></li>
        <li><a class="scroll" href="#commercial">Existing Commercial Work</a></li>
      </ul>
    </li>
    <li class="section"> 

       <h6><a class="scroll" href="#process">Process Themes</a></h6>
      <ul class="sub-sections">
      <li><a class="scroll" href="#converse">Conversing with Data</a></li>
        <li><a class="scroll" href="#fidelity">Levels of Fidelity</a></li>
        <li><a class="scroll" href="#nothing">Creating Data From Nothing</a></li>
        <li><a class="scroll" href="#reflecting">Reflecting Data Back to the User</a></li>
      </ul>
    </li>
    <li class="section">
       <h6><a class="scroll" href="#process">Process Timeline</a></h6>
      <ul class="sub-sections">
        <li><a class="scroll" href="#initial">Initial Explorations</a></li>
        <li><a class="scroll" href="#medicalprices">PGHMedicalPrices.us</a></li>
        <li><a class="scroll" href="#priceexplorer">Pittsburgh Price Explorer</a></li>
      </ul>
    </li>
    <li class="section">
      <h6><a class="scroll" href="#solution">Design Solution</a></h6>
      <ul class="sub-sections">
        <li><a class="scroll" href="#sol-prices">PGHMedicalPrices.us</a></li>
        <li><a class="scroll" href="#sol-explorer">MedicalPrice History Explorer</a></li>
        <li><a class="scroll" href="#sol-careshare">CareShare Service Concept</a></li>
      </ul>
    </li>
    <li class="section">
      <h6><a class="scroll" href="#end">Design Solution</a></h6>
      <ul class="sub-sections">
        <li><a class="scroll" href="#end">Conclusion</a></li>
        <li><a class="scroll" href="#thanks">Thanks</a></li>
        <li><a class="scroll" href="#bibliography">Bibliography</a></li>
      </ul>
    </li>
  </ul>
</figure>
<h3 id="introduction">Introduction</h3>
  <h5 id="motivation">Motivation</h5>
  <p>Florence Nightingale, the mother of modern nursing, is widely known for the reforms she advocated  in the second half of the nineteenth century. She led efforts to improve the care of wounded and sick soldiers in the Crimean War, and after the war she founded a nursing school in London for the training of skilled nurses. She is less well known for her visual thinking and excellence in the field of statistics. She realized that using visual means to communicate complex ideas would help "to affect thro' the Eyes what we fail to convey to the public through their word-proof ears." She used data graphics about sick and wounded in the Crimean War to convert incomprehensible statistics into meaningful information that moved people who viewed the graphics to change their actions.</p>
  <aside class="citation">
    <label>Gelman, Andrew and Anthony Unwin. "Infovis and Statistical Graphics: Different Goals, Different Looks"</br>2013. <a href="http://www.tandfonline.com/doi/abs/10.1080/10618600.2012.761137">Journal of Computational and Graphical Statistics</a></label>
  </aside>
  <figure class="img">
    <img src="img/Nightingale-mortality.jpg">
    <label>Florence Nightingale. "Diagram of the causes of mortality in the army in the East". 1857.
  </figure>
  <p>This thesis project is motivated by two impulses: a deep love and respect for the communicative power of well-designed visual information and a belief that this power should be put to use to substantially and positively impact its users. I have chosen to focus on medical price visualizations because it is an area where well-designed information graphics can make a large, positive impact on medical consumers as they make medical choices. Also, while much work has been done on medical data visualizations, there is a lack of design work that attempts to make medical prices more understandable.</p>
  <p>This thesis is important because it suggests an expanded role for information visualization by combining information design with service design and methods of crowdsourcing. This method could be applied to many other problems where data is decentralized, fragmented, and hard for customers to get.</p>
  <h5 id="problem">The Problem</h5>
  <p>This thesis is also important because of the timeliness of its content. The Affordable Care Act of 2010 was designed to provide Americans with better health security by modifying how United States citizens purchase health care. The law's stated goal is to expand coverage, hold insurance companies accountable, lower health care costs, guarantee more choice, and enhance the quality of care for all Americans. As of May 2014, nearly 20 million people have gained health care with the help of the Affordable Care Act.</p>
  <aside class="citation">
    <label>David Blumenthal, M.D., M.P.P., and Sara R. Collins, Ph.D. "Health Care Coverage under the Affordable Care Act — A Progress Report"<br/>2014. <a href="http://www.nejm.org/doi/full/10.1056/NEJMhpr1405667">NEJM.org</a></label>
  </aside>
  <p>The Affordable Care Act has created a new complex ecology of health care providers, costs, and networks for receiving care. Overall, patients are bearing more financial risks. This was a vision of the ACA. People are now supposed to be more cautious about health care spending, but it is nearly impossible to search for and monitor costs. The end result is that people get bills that surprise and anger them making them feel more alienated from their medical professionals.</p>
  <p>New tools and services are necessary to educate and engage in their new role as medical consumers. The projects in this thesis all attempt to bring participants into this new role.</p>
  <!--   <p>To attempt to make medical prices more understandable for medical consumers, this thesis combines different trends in contemporary human-computer interaction and interaction design. The web browser today provides an expressive design environment for creating data visualizations. Visualizations that use the web browser have the ability to have two-way communication both giving visualzations to the user but also eliciting the user to give back their own data. Another trend in HCI that this project combines is crowdsourcing, or breaking up large tasks into smaller and simpler tasks for a crowd of people to complete. Finally, this project uses the concept of service design to think about the relationship between the system, its users, and the data that is traded back and forth.</p> -->
</p>
  <h5 id="overview">Overview</h5>
  <p>This thesis is composed of three projects:</p>
  <ul class="italic">
    <li><strong>PGHMedicalPrices.us</strong> A website that solicits users to upload photos of their medical bills.</li>
    <li><strong>CareShare Service Concept</strong> A service design concept that lets individuals track their medical care expenses and make choices about where to go for care.</li>
    <li><strong>Pittsburgh Price Explorer</strong> An alternative method for gathering and disseminating medical price data.</li>
  </ul>
  <figure class="figure">
    <img src="img/projectsFryFrame.png" alt="" /><br/>
    <label>Ben Fry's <a href="http://benfry.com/phd/">phd thesis</a> lays out a seven step process for creating data visualizations. In this diagram, Fry's framework is applied to the three projects comprising this thesis.</label>
  </figure>
   <p>The thesis documentation is composed of four main parts:</p>
    <ul>
    <li><strong>Literature and Commercial Review</strong> A review of current literature in crowdsourcing, web-based data visualizations, and health care 2.0. This also includes an overview of current commercial products combining data visualization, crowdsourcing, and health care.</li>
    <li><strong>Process Themes</strong> An overview of the most important lessons and themes from this process.</li>
    <li><strong>Process Narrative</strong> An overview of the process of creating the final artifacts.</li>
    <li><strong>Design Solution</strong> Images and a description of the final three design artifacts.</li>
  </ul>
  <p>The thesis makes five contributions:</p>
    <ul>
    <li><strong>Local Crowdsourcing</strong> Crowdsourcing is practice of using groups of anonymous workers to perform tasks computers cannot complete. Typically, these crowds are anonymous. This thesis suggest a use for local, context-specific workers.</li>
    <li><strong>Conversing with Data</strong> Exploring new ways to bring data visualization into the iterative design process.</li>
    <li><strong>Levels of Fidelity for Data Visualization</strong> Enumerating different levels of fidelity of design when creating data visualization.</li>
    <li><strong>Creating Data for Visualization</strong> Visualization has historically not been concerned where the raw data comes from. This thesis argues that visualizers should care where the data comes from so that they are not stuck only visualizing easy-to-access data.</li>
    <li><strong>Reflecting Data Back to the Users</strong> Successful data visualization should provide a mirror to let the users see themselves in a new ways.</li>
  </ul>
  <aside class="citation">
    <label>See Shneiderman, Ben. "Inventing Discovery Tools: Combining Information Visualization with Data Mining." 2001 and Fry, Ben. "Computational Information Design." 2004. for two examples of visualizers giving overviews of the visualization process without considering where their data comes from.</label>
  </aside>
  <h3 id="literature">Literature Review</h3>
  <p>In this section, I will give a brief overview of the three academic areas that are closely related to my thesis: crowdsourcing and distributed work, online information visualization, and health 2.0.</p>
  <h5 id="crowdsourcing">Crowdsourcing</h5>
    <h6>Crowdsourcing and Design</h6>
    <p>Crowdsourcing is the practice of enlisting many humans to perform simple tasks that when combined solve problems that a computer or individual person could not solve. Crowdsourcing goes by many names that highlight the multitude of uses crowdsourcing has: peer production, user-powered systems, user-generated content, collaborative systems, community systems, social systems, social search, social media, collective intelligence, wikinomics, crowd wisdom, smart mobs, mass collaboration, and human computation. Doan, Ramakrishnan, and Halevy explicitly define crowdsourcing broadly as any system as long as "it enlists a crowd of humans to help solve a problem defined by the system owners."</p>
    <aside class="citation">
      <label>Doan, Anhai, Raghu Ramakrishnan, and Alon Y. Halevy. "Crowdsourcing systems on the World-Wide Web"<br/>2011. <a href="http://dl.acm.org/citation.cfm?id=1924442">ACM.org</a></label>
    </aside>
    <p>The origins of crowdsourcing depend on how one chooses to define it. Architecture competitions and prizes for design work have been held for decades, and these projects that enlist many teams to create sets of proposed designs for a building or product can be considered crowdsourcing. An example of such an architecture competition is the design of the Sydney Opera House in 1957. Jørn Utzon won five thousand pounds in 1957 when his design was selected for the iconic hall. Usually crowdsourcing is considered a new method of bringing people together to solve a common problem, but it is much older than the Internet.</p>
    <aside class="citation">
      <label>Murray, Peter. <em>The Saga of the Sydney Opera House: The Dramatic Story of the Design and Construction of the Icon of Modern Australia</em><br/>
      2004. London: Spon Press</label>
    </aside>
    <p>Designers have employed crowdsourced systems in their practice in various ways. One popular use of crowdsourcing is to perform user studies. Crowdsourced user studies have several benefits. They are cheaper and easier to perform than traditional user studies. They can also reach a larger or more targeted audience than a recruitment-based study. Crowdsourced systems for design follow the model of asking a user a series of objective questions either about themselves or about a prototype they have been shown, then asks them a series of questions to understand their response to the prototype. Using this method, a designer can get feedback or iterative inspiration from a great variety of people the designer would normally not have access to.</p>
    <aside class="citation">
      <label>Kittur, Chi, and Suh. "Crowdsourcing user studies with Mechanical Turk"<br/>
      2008. <a href="http://dl.acm.org/citation.cfm?id=1357127">ACM Digital Library</a></label>
    </aside>
    <p>Others have incorporated a variety of crowd-sourced features into software systems. Soylent, a series of add-ons for Microsoft Word, offers editorial functions powered by crowdsourced workers. These functions include shortening paragraphs while maintaining meaning, proofreading grammar and syntax, and offloading arbitrary word processing such as formatting citations. Be My Eyes, a mobile app, connects crowdsourced volunteers with blind people who need help with short, time-sensitive tasks. The app translates the blind person's phone's video feed into spoken conversation. Be My Eyes makes it transparent how the crowdsourced working is helping. Duolingo is another crowdsourced service for translating content into new languages. Unlike Be My Eyes, Duolingo offers crowdsourced workers an experience of learning a new language, using the output of that experience as the input of its crowdsourced system.</p>
    <aside class="citation">
      <label>Bernstein, Michael S., Little, et al.. "Soylent: A Word Processor with a Crowd Inside "<br/>
      2010. <a href="http://dl.acm.org/citation.cfm?id=1866078">ACM Digital Library</a></label>
      <label><a href="http://www.bemyeyes.org/">Be My Eyes</a><br/>2012.</label>
      <label>Savage, Neil. "Gaining Wisdom from Crowds."<br/>2012 <a href="http://dl.acm.org/citation.cfm?id=2093553">Communications of the ACM</a></label>
    </aside>
    <h6>Crowdsourcing for Gathering Data</h6>
    <figure style="width:30%;"  class="img">
      <img src="img/data-viz-crowd.png">
    </figure>
    <p>Designers use crowdsourced systems to complete a variety of tasks that a computer alone could not achieve. Similarly, crowdsourcing offers visualizers a method of gathering difficult to obtain data. Crowdsourced systems have a number of attributes that make it attractive for visualization. Crowdsourced systems turn human beings into sensors that can do complex analysis of the environment around them. A crowdsourced system can ask complex questions like "Is the area around you crowded and if so, what is your location?" The human workers in a crowdsourced visualization system can also perform creative or difficult tasks to create the data. For example, a system may ask workers to draw a picture or find a difficult piece of data in their homes.</p>
    <p>Two visualization practice areas that have used crowdsourced systems to power visualizations are news visualization and artistic visualization. Both of these practice areas offer visualizers flexibility to try new techniques and have quick project timelines. Two visualization projects that use crowdsourced data are the Aaron Koblin's "Ten Thousand Cents" project and an innovative opinion graphic in the New York Times on the death of Osama bin Laden.</p> 
    <figure class="img">
      <img src="img/bin-laden.png">
    </figure>
    <p>When Osama bin Laden was killed in 2011, the news caused a huge uproar in the United States. There were many discussions, particularly about the importance of the event and whether his death (as opposed to capture or imprisonment) was a good or bad thing. The New York Times graphic team produced <a href="http://www.nytimes.com/interactive/2011/05/03/us/20110503-osama-response.html?_r=0">"The Death of a Terrorist: A Turning Point?"</a>, a crowdsourced system that let readers mark their opinion along a two-dimensional grid and also see what others felt about bin Laden's death.</p>
    <p>The visualization got thousands of responses, and the corresponding grid of responses brought out interesting emergent patterns of how people answered. People tended to align their answers to the center-lines or edges of the grid. The extreme points also got a large number of selections. This implies that a simpler, three-by-three grid would have been just as effective, but the detailed grid made it more obvious just how many viewers gave their input.</p>
    <figure class="img">
      <img src="img/koblin.png">
    </figure>
    <p>Aaron Koblin's <a href="http://www.tenthousandcents.com/"><em>Ten Thousand Cents</em></a> project is an early piece (2008) that used crowdsourced data to gather novel data for use in a visualization. Koblin paid 10,000 crowdsourced workers a small amount of money to draw a small part of an image of hundred dollar bill. The drawings were then combined into an interactive quilt.</p>
    <p><em>Ten Thousand Cents</em> uses crowdsourcing to gather data&mdash;the paths and colors generated by an online drawing program&mdash;that would never be gathered by other means. The piece also shows how the rich variety of responses still creates a recognizable dollar image.</p>
    
  
    <h6>Localized crowdsourcing: An opportunity</h6>
    <p>Crowdsourced systems today do little to filter those who participate in a crowdsourced project. Amazon Mechanical Turk, the most common platform for crowdsourced programs, allows the designer to indicate desired skills the crowdsourced workers should have as well as the crowdsourced workers' country of origin. For designers who use Mechanical Turk, as long as these basic levels are met, every worker is considered interchangeable.</p>
    <p>Good designers though are focused not on interchangeable and anonymous groups of users, but instead design for concrete situations, scenarios, and users. The need for quality feedback not just from skilled workers but from skilled workers grounded in a particular context is not being met by Amazon Mechanical Turk or any other crowdsourced system. This is in part because the desire for specific participants violates the primary strength of crowdsourced systems, their large number of users.</p>
    <aside class="citation">
        <label>Stolterman, Erik. "The Nature of Design Practice and Implications 
  for Interaction Design Research"<br/>
        2008. <a href="http://www.ijdesign.org/ojs/index.php/IJDesign/article/view/240/148
  ">International Journal of Design</a></label>
    </aside>
    <p>There is an opportunity for combining the best of small-scale personally recruited design methods with crowdsourced automation. These hybrid systems would allow designers to recruit targeted people either online or offline and lead them into an automated process where their membership in the desired community would be confirmed. The selected users would them complete tasks.</p>
    <p>This project attempts to use a form of this hybrid crowdsourced system. Instead of relying upon small payments to anonymous users, the study attempted to recruit local participants to <a href="http://www.pghmedicalprices.us">PGHMedicalPrices.us</a> where they could upload a photo of a medical bill. Participants were offered incentive price gift cards to a local chain of grocery stores.</p>

  
  </p>
  


  <h5 id="webvis">Web-based Data Visualization</h5>
  <p>Web-based information visualization has been a subject of research and practice since the early days of the world wide web. Tim Berners-Lee publicly debuted the world wide web in 1992, and by 1993, the first web browser, the Mosaic Browser by Marc Andreessen, gave web browsers a graphical user interface to access web content. The early world wide web focused on linking text and low-resolution images together in the form of hypertext documents. There would be many uncoordinated attempts to add graphical and interactive capabilities to web browsers necessary to enable web-based data visualizations. Eventually by the late 2000s, with the adoption of HTML5, CSS3, and javascript as a common standard for markup, styling, and interaction, web developers and programmers began creating visualization tools and using those tools to create richly interactive web-based visualizations.</p>
  <figure>
  <img src="img/web-history.png">
  <label>Timeline of history of web-based visualization based on browser, visualization library, and noteworthy applications.</label>
  </figure>
  <h6>Early Visualization Experiments</h6>
  <p>Early experiments in visualization on the web focused on <a href="http://ieeexplore.ieee.org/stamp/stamp.jsp?tp=&arnumber=595269&tag=1">visualizing the web itself</a>. Visualizers attempted to show the topology of the web in graphical form. Network graphs of servers, of web pages, of hypertext links were made. Visualizers also tried to map the web to physical geographies or organizational maps. Realizing that web page connections told something about the real world, by mapping the connections of web pages, visualizers could map other phenomena like the relationships between different departments at a university. Finally, early visualizers attempted to visualizer web user's cognitive models for the data they were viewing. This came in the form of interactive bookmarking applications, hot lists of useful websites, and other ways to divide content.</p>
  <figure class="img">
    <img src="img/visualizing-web-resources.png" alt="" />
  </figure>
  <p>An example of this early kind of web visualization is Gerson et al's 1995 <a href="">Visualizing Internet Resources Case Study</a>. The case study included three different visualizations that were additions to the Mosaic Browser. The first visualization, "Hyperspace View," was intended to aid users in exploring the web without getting lost. Tree graphs were used to visualize the path the user traveled through and also to record alternative paths that were not taken. A second case study enabled browser users to interactively change the styling of links and where links pointed to make them more memorable and more personal. "For information resources to be effective and to enhance problem solving and analysis, they should allow each user to construct his or her own information space with links and associations." It's a radical response to the author-centric approach to the web. The final case study included analyzing gathered web content and correlating word pairs to highlight interesting content. The goal of this visualization was to make the already overwhelming amount of information available more easy to consume.</p>
   <aside class="citation">
        <label>Gershon, N. et al. "Case study: visualizing Internet resources"<br/>
        1995. <a href="http://ieeexplore.ieee.org/stamp/stamp.jsp?tp=&arnumber=528696
  ">Information Visualization Proceedings</a></label>
    </aside>
  <p>Soon after, the power of web-based visualization to visualize datasets unrelated to the web itself was explored. Wood et al. created a <a href="http://ieeexplore.ieee.org/stamp/stamp.jsp?arnumber=567610">3D histogram</a> visualizing environmental data. Wood et al. also gave four possible scenarios for how web-based visualizations could take place. They suggested visualization could happen as either an image or 3d file sent to the browser. They noted that this is the standard method of visualization circa 1996. They then suggest that the raw data could be sent over the web, and the user or their own software could be responsible for the visualization. Finally, Wood et al. suggest an interactive model where the visualization would be created by the producer of the data but the user could modify and change the visualization. It's interesting to see these different scenarios, because two of them became prevalent and two scenarios are not used. Today in the mid 2010s, images are still widely used to quickly convey visualizations over the web (see the figures in this thesis for example). The most interesting visualizations today use the fourth model Wood et al. suggested. Scenario three, where the user is responsible for the visualization has not been adopted. But some applications, like Tableau, Processing, or pre-made D3.js graphs templates foreshadow that user-controlled visualization may just have had to wait longer for its time to come.</p>
  <aside class="citation">
        <label>Wood, J., Brodlie, K., Wright, H. "
Visualization over the World Wide Web and its application to environmental data"<br/>
        1996. <a href="http://ieeexplore.ieee.org/stamp/stamp.jsp?arnumber=567610
  ">Visualization Proceedings</a></label>
    </aside>
  <p>These early experiments in web visualization were primarily concerned with the possibilities of what technology could deliver. When viewing the work that was created, it is clear that little attention was put towards design, storytelling, or insight generation.</p>
  <h6>Uncoordinated technology</h6>
  <p>When the web was created, it focused on the exchange of text documents and embedded images. Almost immediately, web users tried to add multimedia content and advanced styling. In order to satisfy this demand for greater visual sophistication, browsers began implementing non-standard HTML markup like &lt;blink&gt;, &lt;center&gt;, &lt;spacer&gt;, &lt;stroke&gt;. As expectations for web bounded ahead of agreed upon specifications, different technologies provided additional features that information visualizers used to make visualizations.</p>
  <p>Introduced in 1995, the Java applet gave developers direct access to the hardware processing of a computer through the web browser. Visualizers could write code in Java, then run the applet in the browser of any computer that had loaded the appropriate free Java software. Early visualizations used applets to access the full power of the computer while still existing on the web. Even today, users who wish to share <a href="https://processing.org/">Processing</a> visualizations must use Java applets to share them through the web. The benefits of using applets were myriad in the early web. These applets bypassed the limits of HTML, enabled greater interactivity, and offered developers greater computing power.</p>
  <figure class="figure">
    <img src="img/java-examples.png" alt="" />
    <label>Three Java applets: <a href="http://ieeexplore.ieee.org/xpls/abs_all.jsp?arnumber=663891&tag=1">VizWiz (1997)</a>, <a href="http://bioinformatics.oxfordjournals.org/content/20/17/3246.short"> Java TreeView (2004)</a>, <a href="http://artport.whitney.org/commissions/thedumpster/dumpster.shtml">the Dumpster (2006)</a></label>
  </figure>
    <p>Java applets were appealing, but they were not to be a lasting technology. For a variety of reasons, mainly the creators of Java's choice to <a href="http://www.javaworld.com/article/2077055/soa/what-does-sun-s-lawsuit-against-microsoft-mean-for-java-developers-.html">sue Microsoft</a> for its incomplete implementation of Java applets, some popular browsers didn't include applet support. In addition, Java had numerous security issues that made using <a href="http://threatpost.com/javas-losing-security-legacy/102176">applets dangerous</a>. Browser makers responded to this danger by requiring users to jump through additional dialogs and warnings before running an applet. In the end, these drawbacks led to less and less use of Java applets. Today, outside of specialized and older websites, applets are not used.</p>
    <p>Adobe Flash is a technology developed by Macromedia and later acquired by Adobe that added rich interaction and multimedia support to standard websites. Introduced in 1996, the Flash Player must be downloaded and installed by each individual user. This requirement meant that for a number of years, Flash adoption would grow until it reached ubiquity in the early 2000s. Flash offered similar features to Java applets, but Flash's creators focused on maintaining usability, security, and compatibility. A visualizer could know that if they created a visualization in Flash, it would appear correctly no matter the computer or browser used.</p>
    <figure class="figure">
      <img src="img/flash-examples.png" alt="" />
      <label>Three Flash apps: <a href="http://www.maani.us/xml_charts/">XML/SWF Charts (2003-2015)</a>, <a href="http://stamen.com/projects/inthenews"> In The News (2004)</a>, <a href="http://www.nytimes.com/interactive/2009/07/31/business/20080801-metrics-graphic.html">How We Spend Our Day (2008)</a></label>
    </figure>
    <p>Flash and Java applets were the two main formats used by early web-based visualizers. They circumvented the very limited design palette early web browsers offered. Because they were both non-standard, proprietary additions, their popularity eventually faded as open, standardized technologies caught up to the expectations of visualizers.</p>
    <h6>Standards-based Data Visualization</h6>
    <p>Creating the standards that determine the capabilities of web content is a collaborative affair. The main stakeholders in the process, technology companies like Microsoft, Apple, Google, and nonprofit, open-source organizations like Mozilla and Opera, and individual engineers and developers, come together under the aegis of the World Wide Web Consortium, to develop agreed upon standards. Those standards are then taken by each organizations and built into the products they offer. As an example of the time frame for developing standards, HTML 4 was standardized in 1997 and updated in 2000. Work on what would become HTML5 began in 2004. the HTML5 standard was completed in 2014, ten years after beginning work. Throughout those ten years, browser developers incrementally added in support for HTML5 features as features were added and removed from the draft specification.</p>
    <figure>
      <img src="img/nyt-maps.png">
      <label>Ten years of interactive electoral maps from the New York Times. In 2000, the map was a static image. In 2004 and 2008, the Times used Flash to make their map. In 2012 and 2014, the map was made using HTML5 web technologies.</label>
    </figure>
    <p>By 2010, web browsers had caught up enough to the rich features that Java applets and Flash offered, that developers and visualizers switched to developing standards-based visualizations. This standards-based visualization method is used for most visualizations today. These visualizations use a variety of technologies to deliver visualizations. Data is delivered over HTTP using JSON or XML data structures. SVG and Canvas are the browser-embedded graphics technologies that enabled visual expression, especially for lines, shapes, and three dimensional rendering. Javascript has become expressive and standardized enough to translate received data into SVG and Canvas-based representations. CSS provided an interface to style elements on the screen. And HTML5 is the glue that keeps all these technologies together. Taken together, these technologies turn the web browser into a powerful, widespread, and easily accessible environment for visualizers.</p>
    <figure class="figure">
      <img src="img/html-examples.png" alt="" />
      <label>Three HTML visualizations: <a href="http://alexsciuto.com/projects/state-size/">State Sizes (2012)</a>, <a href="http://www.therefugeeproject.org/"> The Refugee Project (2014)</a>, <a href="http://spacecraftforall.com/">Spacecraft For All (2014)</a></label>
    </figure>
    <p>Today visualizations using the web browser have three large benefits over using other technologies. Because web browsers are widely installed, a visualization created for a web browser can be run on millions of computers and mobile devices without any additional installation of software. Because web browsers are connected to the Internet, a single web-based visualization can be distributed to anyone with an Internet connection. Because the visualization lives on the Internet, the visualization can communicate back to the designer about what the user is doing with the visualization.</p>



    <h5 id="health">Health 2.0</h5>
    <p>In the United States in the last decade and a half, the Internet has become widespread, routinely accessed, and accessed on a variety of devices. The ubiquity of the Internet in people's daily lives has affected many parts of how people live. How they access health care is one such area. The term Health 2.0 defines the set of practices, products, and services that have been created that use the Internet to connect patients to the medical system in new ways.</p>

    <p>A large minority of Internet users today are taking advantage of such Internet-connected services. Twenty-seven percent of Internet users have tracked their weight, diet, exercise routine, or other health indicator online. Six percent of Internet users have posted questions or comments about health or medical issues to health websites. Eleven percent of social network users have posted questions, comments, or information to their social networks. These statistics show that large numbers of Internet users are using Health 2.0 technologies to record their health, research their illnesses, and connect with others based on their health conditions.</p>
    <p>There are a number of ways that patients today are using the Internet to connect to the health care system. Patients use search engines to research ailments. They use online forums to connect with other patients and express their feelings. They use connected apps to track and communicate their health to others. They use review sites to learn about doctor quality. All these practices are nascent and new products and services are beginning to be developed that specifically serve the desires for people to connect and monitor their health.</p>
    <aside class="citation">
       <label>Fox, Susannah. "The Social Life of Health Information, 2011"<br/>2011. <a href="http://pewinternet.org/Reports/2011/Social‐Life‐of‐Health‐Info.aspx">Pew Research Center</a></label>
      <label>Belt THVD, Engelen LJ, Berben SA, Schoonhoven L. "Definition of Health 2.0 and Medicine 2.0: A Systematic Review"<br/>2010. <a href="http://www.jmir.org/2010/2/e18/">JMIR.org</a></label>
      <label>Boulos, Maged NK, et al. "How smartphones are changing the face of mobile and participatory health care: an overview, with example from eCAALYX"<br/>2011. <a href="http://www.biomedical-engineering-online.com/content/10/1/24">Biomedical Engineering Online</a></label>
    </aside>
    <p>All of these practices are marked by a number of characteristics. Belt et al. list themes of Health 2.0 medical literature: </p>
    <ul>
      <li><strong>Patients and Consumers</strong> People who come into the medical system are both traditional patients who are taken care of by knowing doctors, but also consumers, engaged in their own care and making decisions best for them. This theme emphasizes the empowerment of patients, a class of people usually considered to have little agency.</li>
      <li><strong>Web 2.0</strong> Web 2.0 refers to the communication technologies that health care organizations have to connect people and share information. There is also an emphasis on co-opting or combining services that were not created for health care but could be used in health care.</li>
      <li><strong>Professionals or Caregivers</strong> Professionals refer to the groups of people in the health care industry who are not either doctors or patients. Caregivers refers to the family and friends of patients who help them during illness and recovery. Stakeholders like medical payers, health students, researchers, entrepreneurs, and government entities all play a role in Health 2.0.</li>
      <li><strong>Social Networking</strong> Social networks refer to online communities where people can virtually gather and share information.</li>
      <li><strong>Collaboration</strong> Collaboration refers to different stakeholders working together to achieve their goals. The most obvious collaboration is between doctor and patient, but the other stakeholders also have the ability to collaborate if given the chance.</li>
      <li><strong>Health Information</strong> Health information refers to the data that is produced by the medical system. This data can be used to communicate and achieve consensus if shared effectively.</li>
    </ul>
    <p>All of these trends are changing the traditional service model that health care holds. In the traditional model, patients are treated by skilled doctors who have all the answers and follow the interests of the patient. There is no mediation between the doctor and patient, and concerns of price or ability to pay are not factored into the discussion. The prototypical example of this fast-fading type of care is the small-town family doctor who knows each patient by name, and if they are unable to pay, takes in-kind payment.</p>
    <p>One doctor, writing on his personal blog, summarizes how doctors are turning away from this model of thinking:</p>
    <blockquote>I have spoken about the idea that physicians in my generation (Generation X) are a group that trained during an explosion of medical information. We are a group that is challenging the mental model of omniscient physician – we don’t want to hold all the answers for our patients because we’ll fail if we do. We want to learn something new from every patient, every colleague, and every industry, every day, so we can be good educators, too. Now we can, and we are.</blockquote>
    <p>As the health care model changes, there are already consumer services sprouting up to empower and connect medical consumers. These products are not being co-opted for medical consumer purposes, but are expressly designed for tomorrow's medical consumer. In the next section, I'll cover some of these new products.</p>
    <aside class="citation">
      <label>Deyton, Ted. "My Definition of Health 2.0 : The Transition to Personal, Participatory Health Care"<br/>2008. <a href="http://www.tedeytan.com/2008/05/02/889">tedeytan.com</a></label>
    </aside>
  <h5 id="commercial">Commercial Products Review</h5>
    <p>Each of the products below take user data, combines it with other data sources, then displays back to the user using the web browser. The goal of this review of commercial products is to show the range of services in the health care context that are using user data to provide value back to users. As you'll read, each service has their own particular value-proposition that makes them worthwhile for users to spend their time and money on.</p>

    <img src="img/comp-cure-crowd.png"/>
    <h6>CureCrowd</h6>
    <p>CureCrowd is a user-generated database of treatments for illnesses. Users use the site to find illness they are experiencing, and CureCrowd tells what kinds of treatments other users have tried for that illness. CureCrowd also records what kind of side-effects each user experienced as well as an effectiveness rating. A survey is prominently featured on each page that solicit the user to enter in their information for that particular illness. CureCrowd adds a small level of context for the illness by including a description of each illness pulled from Wikipedia.org.</p>
    <p>CureCrowd's greatest weakness is its lack of context for different treatments. For headaches, aspirin is listed as the most effective treatment, but how many aspirin, what time of the day the aspirin was taken, and other variables are not recorded. Because of this lack of context, CureCrowds data outputs&mdash;a series of bar charts&mdash;is sparse. The user is usually left wanting more information. But CureCrowd does a good job of quickly showing available treatments and ascertaining whether or not a treatment is worth considering.</p>
    <p>CureCrowd offers a minimal approach to crowdsourcing health data, but there is much more that can be done to gather and display medical and price data.</p>

    <img src="img/comp-iodine.png"/>
    <h6>Iodine</h6>
    <p>Iodine is a service with a goal similar to CureCrowd, to educate consumers about the medications they take. But unlike CureCrowd, Iodine uses more data sources and provides more data outputs for the user to experience. This additional functionality gives the user a more complete view of a particular medication, but the directness of CureCrowd's value-proposition is lost. In addition to user surveys, Iodine used Google Surveys to quickly survey 100,000 people in the United States about the medication they use, its effectiveness, and any side-effects. Iodine also includes medication-specific tips from pharmacists, FDA information, as well as medication cost information.</p>
    <p>Because of the use of Google Surveys, Iodine has a larger base of information that CureCrowd. CureCrowd has thirteen reviews for aspirin, while Iodine has 702 reviews. Also, because Google Surveys are paid, Iodine was able to ask more detailed information about effectiveness and side effects. Iodine offers more information about side effects and efficacy that CureCrowd. This greater level of detail and coverage enables the site to answer more questions about more treatments.</p>
    <p>Iodine also uses additional datasets effectively to give additional information about treatments. Their pharmacists recommendations provide a subjective take on each drug, and the FDA information that is included gives details that come with prescription medication that many people usually throw away. Generic and brand-name prices add another facet that describe medication. By combining all these different sets of data together, Iodine gives the user a multi-faceted view of medication.</p>
    <img src="img/comp-23.png"/>
    <h6>23 and me</h6>
    <p>23 and Me is a genetic sequencing service that for a fee will sequence a user's genetic information, then display ethnic heritage information as well as implications for current and future health. Health prognoses include responsiveness to certain drugs, likelihood of inheriting particular diseases, and information on physical traits like a flushing reaction to alcohol. When 23 and Me first launched, their pitch was about <a href="http://www.scientificamerican.com/article/23andme-is-terrifying-but-not-for-reasons-fda/">the novelty of getting to know more about a person's own genes</a>, but the company quickly moved onto to advertising the predictive power that genetic information has. Because it has found such an interesting dataset and a way to massively market that dataset, 23 and Me has received a huge amount attention as well as the Food and Drug Administration halting the health implications portion of its service.</p>
    <p>23 and Me features a different service model. Its users are both customers and products for other services it offers. As its <a href="https://www.23andme.com/about/privacy/">privacy policy</a> notes:</p>
    <blockquote cite="https://www.23andme.com/about/privacy/">
      We may share aggregate information with third parties, which is any information that has been stripped of your Registration Information (e.g., your name and contact information) and aggregated with information of others so that you cannot reasonably be identified as an individual ("Aggregate Information"). This Aggregate Information is different from "individual-level" information. Individual-level Genetic Information or Self-Reported Information consists of data about a single individual’s genotypes, diseases or other traits/characteristics information. For example, Aggregate Information may include a statement that “30% of our female users share a particular genetic trait,” without providing any data or testing results specific to any individual user.
    </blockquote>
    <p>
      With this language, it makes it clear that 23 and Me has a split-level plan for its data. On the one hand, it uses visualization and information design to make its consumer-experience pleasant and entertaining, but these visualizations are a step in their bigger goal of amassing a large set of genetic information that they can then mine to answer medical questions.
    </p>
    <img src="img/comp-fitbit.png"/>
    <h6>fitbit</h6>
    <p>Fitbit is a company that sells wearable devices that record a variety of health information about a user. Health information includes steps walked, heart rate, gps location, activity level, and flights of stairs climbed. Users also have the option to add in additional data, such as their weight, daily eating patterns, and activity descriptions. Fitbit then shows that data back to its users in low-resolution indicators on the devices themselves, and through a web-based dashboard. The dashboard includes line graphs that show the history of sleep and activity, and graphical indicators to show progress throughout the day.</p>
    <p>Fitbit's primary feature is that its wearable devices help users achieve a <a href="http://blog.fitbit.com/the-magic-of-10000-steps/">goal of walking</a> 10,000 steps each day. To do this, even the least expensive Fitbit devices feature indicators to ambiently remind the user of their the progress towards their goal throughout the day. As the day progresses, lights on the device cumulatively light up until 10,000 steps are reached. At that point all the lights are reached. The 10,000 steps is a marketing-created goal that loosely aligns to recommendations for physical activity, but more importantly it provides a clear, achievable goal that makes the initial investment appear worthwhile.</p>
    <aside class="citation">
      <label>Tudor-Locke, Catrine, and David R. Bassett. "How Many Steps/Day Are Enough?"<br/>
      2004. <a href="http://link.springer.com/article/10.2165/00007256-200434010-00001">Sports Medicine</a></label>
    </aside>
    <p>Fitbit also differentiates itself from the other examples in this section by providing ways for users to share their data with other users. Users can connect with prior friends or find new friends, make groups, and share goals and stats. This sharing provides a social dynamic that encourages people to reach their goals. Fitbit's information is not very personal information, and the methods Fitbit provides for sharing limit the kinds of sharing that can take place. I believe that Fitbit will need to explore greater levels of sharing for continued success, but they will need to tread carefully to protect their users' sense of privacy.</p>
    <img src="img/comp-patients.png"/>
    <h6>patients like me</h6>
    <p>Patients Like Me is a comprehensive health tracking service. It was founded to enable users to <a href="http://www.patientslikeme.com/about">share how they treat serious, long-term conditions</a>. It originally focused on diseases like ALS (Lou Gehrig's Disease) and Parkinsons, but has since expanded to offer functionality to track the health history of any disease. Users enter all the information they receive themselves. In exchange for all this information, users receive a multi-variate graph of all their health statistics charted over time. When filled out, the chart presents a detailed view of an illness: its symptoms, treatments, medications, and how the user emotionally feels. Patients Like Me also shares the anonymized health data with research partners, similar to 23 and Me. Patients Like Me goes so far as to have an <a href="http://www.patientslikeme.com/about/openness">Openness Policy</a> as well as a Privacy Policy. The Openness Policy explains: "Currently, most health care data is inaccessible due to privacy regulations or proprietary tactics. As a result, research is slowed, and the development of breakthrough treatments takes decades. ... But it doesn’t have to be that way. When you and thousands like you share your data, you open up the health care system."<p>
    <p>Patients Like Me serves as a centralized experience that records all facets of an illness. It has taken advantage of the lack of control patients have over their own health data by giving them the chance to recreate their health records, piece-by-piece. Patients Like Me also allows users to record information that a medical record may discount: level comfort, happiness level, mood. It then uses all this information to give users visualizations and services that make the data-entry worthwhile. As the seriousness of the illness increases, the more likely a user will be willing to invest the time to control their medical health data and reap the benefits that Patients Like Me provides.</p>
    <h6>Competitive Conclusion</h6>
    <img src="img/competitive-grid.png">
    <p>This section has introduced five services that are gathering data from users and presenting it back to users using information design and data visualization. Each service though, has a different service model, a different set of target users, and different ways that users can interact with the service. With the exception of CureCrowd, these services have found an audience that is interested in exchanging data for insights. This bodes well for designers working in this field. There is much that can still be done with medical data, and users will try using it.</p>
    <p>These services all avoid discussions of price and cost of health care. This is a large, though expected, oversight. Because these services rely on users to donate their information, and users have historically had no incentive to care about or track the cost of their health care, health care prices have not featured prominently in these services offerings. Because of the changing health care landscape in the United States, people will increasingly care about the cost of their health care. Providing services that enable users to see and reflect back on their health care prices and how it relates to their health outcomes is a promising.</p>
    <h3 id="themes">Process Themes</h3>
    <p>This thesis has iterated and changed throughout its eight-month life. As data has become available or discovered to be unavailable or less prevalent than was expected, the thesis has had to morph to accommodate these changes. Originally, the expectation was that this thesis would be primarily about data visualization of available data. As time progressed, I felt a more interesting challenge was not visualizing data that is easily acquired but finding ways to acquire data that is not well-maintained or available. As I have come to the end of the thesis process, I have engaged in a gamut of skills one would expect from a professional data visualization specialist, such as transforming data, dealing with methods of representation, developing the visualization, and finding a good story to tell. I have also had to use skills one would more likely associate with a journalist or businessperson, such as cold calling hospitals, handing out fliers, and strategizing publicity.</p>
    <h5 id="converse">Conversing with Data</h5>
    <blockquote>
       It is rare that the designer has the design all in her head in advance, and then merely translates it. Most of the time, she is in a kind of progressive relationship-as she goes along, she is making judgments. Sometimes, the designer's judgments have the intimacy of a conversational relationship[.] <strong>Donald Schön</strong>          
    </blockquote>
      <aside class="citation">
      <label>
      "Reflective Conversation with Materials: An interview with Donald Schön by John Bennett"<br/>1996. <a href="http://hci.stanford.edu/publications/bds/9-schon.html">hci.stanford.edu</a>
      </label>
    </aside>
    <p>A goal of this thesis project was to develop methods to engage in a conversation with the material of data. Having a conversation with a set of data is a challenge because data is abstract, decontextualized, and unsummarized. In order to overcome this, I attempted to create data representation as quickly as possible. These representations of the data gave me the material I needed to begin to a conversation with data.</p>
    <figure class="img">
      <img src="img/sketch-examples.png" alt="" />
      <label>Examples of data sketches in order to prove or disprove hypotheses quickly.</label>
    </figure>
    <p>This conversation consisted mostly of two questions. The first question was whether or not the data supported the story I was telling myself about the data. Constructed narratives are almost always much cleaner and clearer than the reality they are attempting to organize. By having a hypothesis about the world, I could mentally construct how I thought a representation of the data should look if my hypothesis were true. Creating a representation of the data checked my hypothesis. If the representation argued against my interpretation, I then changed my mental story.</p>

    <p>In order for hypothesis testing to work, I needed only a basic sketch of the data. The most successful sketches were thus created quickly and with minimum effort. These sketches had some common characteristics. They were non-interactive&mdash;any filtering or selecting of data was done by changing variables in the javascript code. They were not visually designed, but instead consisted mostly of black dots and labels added without regard to location or typography.</p>
    <p>Looking back on some examples of this kind of data sketching, almost all the sketches were done to begin to understand distributions of values along an axis or to compare one set of values to another set.</p>
    <p>The other question I asked was how best to represent it. These questions arose later during the process as I was crafting final visuals. </p>
    

    <h5 id="fidelity">Levels of Fidelity</h5>
    <img src="img/bar-process.png">
    <p>During the data sketching process, I arrived at three levels of fidelity before creating the final visualization: idea exploration using pen and paper, data exploration using rudimentary visualizations, and communication design using visual design programs.</p>
    <h6>Idea Exploration Using Pen and Paper</h6>
    <p>During this stage, I drew ideas for visualizations using pen and paper. The sketches' primary purpose was to record brainstorming so that I could return to it at a later date. The sketches also allowed me to show my work to other designers and receive immediate feedback. Because I wasn't working directly with the data, the sketches had an off-the-cuff quality to them. A series of lines might represent a bar chart, while scribble marks would represent a user-interface element. Sketches had different levels of scope as well. Some sketches were just a series of boxes that marked out content areas, other sketches were working out the specific interface of a visualization, while other sketches were walk-throughs of what a user would experience over time. Working in this way, I could create full visualization ideas that I could later come back to.</p>
    
    <h6>Data Exploration using rudimentary visualizations</h6>
    <p>Sketching data only brings the designer so far. As noted above, data is both extremely precise, but also entirely ephemeral. This makes it hard to accurately draw what real data in graphical form will look like. In order to make the transition from idea to viewing the idea with real data, I used rudimentary graphs.</p>
    <p>These graphs were rudimentary because they did not contain any colors, did not contain any contextual markers like axes or labels, and were non-interactive. The goal of the graphs was to see the core visualization and nothing else.</p>
    <p>This process was very useful for quickly creating a test visualization and seeing what the visualization looked like with actual data. But it did require discipline to use. A rudimentary visualization could be the nugget of an interesting visualization but just missing a small key ingredient. On the other hand, a rudimentary visualization could be entirely off-base. Experience helped me classify the visualizations, but on reflection, I abandoned some visualizations too soon.</p>

    <h6>Communication Design</h6>
    <p>In order to explore what the final visualizations would look like without actually coding the visualization, I used the typical tools of a user interface or communication designer to mock up my ideas. Adobe illustrator has a series of graphing tools that can quickly output charts and graphs. Adobe Photoshop and Bohemian Coding Sketch both have tools for creating visual mockups.</p>


    <img src="img/distance-process.png" alt="" /><br/>
    <h5 id="nothing">Creating Data From Nothing</h5>
    <p>Data visualizers almost always work with data handily available. That data may need to be cleaned and organized, but the raw information is available to the visualizer. The profusion of open datasets, data services that offer databases, and competitions that provide a dataset for the visualizer to work on is evidence of this. Professional data visualizers either work in-house for an organization visualizing the organizations' data, work as a consultant brought in for specific projects, or work in media where they acquire data from fellow journalists or producers.</p>
    <figure class="img">
      <img src="img/calls-grid.png" alt="" /><br/>
      <img src="img/calls-grid-2.png" alt="" /><br/>
      <label>Two examples of returned calling sheets. These sheets were handed out to volunteers who helped call hospitals to gather price information. The sheets included phone numbers to call, procedure information to ask about, and a sample transcript to make the volunteer more comfortable. The most important part of the sheet was the bottom grid that clearly indicated what data the volunteer was supposed to gather.</label>
    </figure>
    <p>These working methods severely handicap the data visualizer. It determines what they work on, and it determines the conclusions they reach. With the exception of Freedom of Information Act Requests, this way of working also guarantees that the visualizer must please the owners of the data, who often have an agenda and a story to tell. Promotional "infographics" and short animated videos <a href="http://viz.wtf/">abound</a> that cherry-pick data points to tell fluffy, public relations stories. These disasters are all a combination of data visualization ineptitude combined with a strong agenda on the part of the commissioners of the graphics.</p>
    <p>Health data is particularly hard to access. Raw health data is often harder to access. Patient health data is protected by a range of laws that hamper developers and visualizers. Price data is provided in bill form months after a procedure, and bills contain cryptic codes and multiple price amounts for what insurance pays, what the consumer pays, what the hospital charges, the discount negotiated, and other factors. The holders of health care data have little incentive for independent visualizers to experiment with the data and create visualizations.</p>
    <p>This thesis project has attempted to circumvent these challenges by using crowdsourcing and commissioning volunteers to make calls. With so many people having cameras integrated into their smart phones, they are able to provide photos to a system without much work. We have also developed a system to break the manual work of calling hospitals into chunks of work done by volunteers. Because of this independence, we have been allowed to have an adversarial position with the health care industry that we could not have had were we working with an industry partner. </p>
    <p>This thesis project has used two of many methods that an enterprising data visualizer can gather data themselves. There are other methods available as well. <a href="http://johnkeefe.net/">John Keefe</a>, of <a href="http://datanews.tumblr.com/">WNYC's Data New Team</a> works with projects that combine diy hacking to produce small objects. These objects could gather news and report back to the visualizer&mdash;homemade sensors. The web contains a huge amount of data in unstructured form, data, like the ratings of doctors, could be scraped and recombined. There are many possibilities to create data and not just visualize what has already been turned into a CSV file.</p>
      <figure class="img">
          <iframe width="420" height="315" src="https://www.youtube.com/embed/Ik-mr-0LPOg" frameborder="0" allowfullscreen></iframe>
        </figure>
    <h5 id="reflecting">Reflecting Data Back to the User</h5>
    <p>Visual journalist Chad Skelton argues in a <a href="http://www.chadskelton.com/2015/03/video-of-chad-skeltons-talk-at-tapestry.html">short talk</a> that data visualizers often want to give their users powerful telescopes or microscopes to view data with. These kinds of visualizations either take a big and confusing topic and zoom in on a specific detail of data or give a broad overview of a dataset by aggregating and summarizing. But Skelton finds that his most popular visualizations are the ones that offer a mirror to the viewer allowing them to see themselves in the data.</p>
    <p>In this thesis, I have been interested in ways to customize visualizations that allow the user to see themselves in the data more easily. By showing a user a reflection of themselves, the visualization becomes more shareable and interesting, but it also allows the viewer to more easily understand the data being presented because they have the baseline of themselves. Once they have oriented themselves in the data, they can begin to explore how the data changes based on changing their own characteristics. What if the user was older? Or younger? Or lived in a different city? These questions and customizations can give the user insight not only into how they relate to the data, but how other people relate to the data as well.</p>
    <p>There are different types of user characteristics we can customize around. One type, usually simpler characteristics, can be manually inputted and changed by the user. These characteristics include age, gender, living location, wealth. As the user changes categories or values the visualization changes. Another type of characteristic are the digital materials users produce. By connecting a visualization to a user's Twitter or Facebook or Gmail account, the visualization can learn something about the user and customize accordingly. The user's digital data can also be visualized as a complement to the primary data set.</p>

    <h3 id="process">Process Timeline</h3>
         <figure class="figure">
          <img src="img/process-timeline.png" alt="" /><br/>
        </figure>
      <h5 id="initial">Initial Data Explorations</h5>
        <p>The original expectation for the thesis was to visualize the medical data in United States Medicare's Hospital Compare Database. Using exploratory visualization methods, we found that the data Hospital Compare contained to be too abstract to be useful.</p>
        <figure class="img">
          <img src="img/hospital-compare.png" alt="" />
          <label>The hospital compare user interface.</label>
        </figure>
        <p>The Hospital Compare dataset is produced by US Medicare from data from Medicare-certified hospitals. There are over 4,000 of these certified hospitals in the United States. The data set includes a few different interesting categories. Hospital Compare runs a patient survey that measures some quality measure from the patient's point of view. In addition to quality indicators, the database included Medicare's average per patient payment made to each hospital.</p>
        <p>All this data for so many hospitals made it appear to be a good first step towards visualizing the hospital landscape in the United States, but as we performed exploratory analysis of the data, we found the data to be too sparse to give a full portrait of a hospitals' quality. Also the Hospital Compare data did not include the many non-hospital providers such as private doctors' offices, minute clinics, and surgery centers.</p>
        <p>Below is a summary of the most interesting visualizations we created based on the Hospital Compare data.</p>
          <img src="./img/exploration-grid.png" alt="" />

       
       
        <p>I did a few more visual tests with the data, and no matter how I changed the variables, Medicare's data didn't give insightful views into the data. A new data source was needed.</p>
        <h5 id="medicalprices">PGHMedicalPrices.us</h5>
        <p>I expanded the search for other data sources that could provide information around consumer medical price information. </p>
        <p>In particular, I wanted to know how much procedures cost, where they are performed, and if the procedures had positive or negative medical outcomes. These questions can be objectively answered and would not rely upon medical consumer reviews or surveys. For the data to be useful, it needed to be at the individual medical provider level.</p>
        <p>Doing a survey of the available data sources, there were no sources that provided this information. The U.S Department of Health and Human Services publishes the Medical Expenditure Panel Survey. "MEPS is the most complete source of data on the cost and use of health care and health insurance coverage," according to the <a href="http://meps.ahrq.gov/mepsweb/">databases website</a>. Unfortunately this dataset is available for research only and researchers are not allowed to publish hospital-level information. Being in Pennsylvania, another resource for medical data is the Pennsylvania Health Care Cost Containment Council. The <a href="http://www.phc4.org/">PH4C</a> publishes detailed medical billing information on a provider-level basis. PH4C's medical data is available for a fee, but the range of procedures covered left out the most common out-patient procedures. PH4C's data is also delayed, so up-to-date prices are never available.</p>
        <p>Because no dataset was available that met my needs, I brainstormed ways to gather the desired data. I had focused my earlier explorations on what medical consumers want, so I now looked at the data available to medical consumers about their own care. Medical consumers are given many documents during their medical care, and most consumers dispose of them without paying much attention, except when it might be a bill. Medical bills could provide me with the data necessary to build a dataset of procedure prices and procedure volume, and perhaps if the consumer answered a short survey, I could also get a measure of outcomes.</p>
        <figure class="figure">
          <img src="img/cpt-codes.png" alt="" /><br/>
          <label>Nine common CPT codes.</label>
        </figure>
        <p>Every medical procedure done in the United States has an associated Current Procedural Terminology (CPT) code associated with it. This code allows doctors, hospitals, medical billers, and insurers to speak a common language in order to accurately translate what medical practitioners actually do into bills for insurers and medical consumers. A common example, emergency room visits are coded on a sliding scale based on severity of symptoms and time spent. Emergency room Level 1, the least intensive visit, is coded 99201. Emergency Room Level 5, the most intense, is coded 99205.</p>
        <aside class="citation">
          <label>Description of CPT codes 99201-99205.<br/><a href="http://www.cms.gov/medicare-coverage-database/staticpages/cpt-hcpcs-code-range.aspx?DocType=LCD&DocID=32007&Group=1&RangeStart=99201&RangeEnd=99205">CMS.gov</a></label>
        </aside>
        <p>Many medical bills from medical providers and explanation of benefits from insurers include the CPT code along with the price the hospital charged. If we could have medical consumers give us this information, we could create a live database of medical prices for throughout the United States. I looked at examples of crowdsourcing as possible solutions for gathering this data on a wide scale.</p>
        <figure class="img">
          <img src="img/google-form.png" alt="" /><br/>
          <label>Screenshot of Google Form used to test medical consumers' abilities to enter in billing information.</label>
        </figure>
        <p>The first question I had to answer was what chunk of work I would expect my crowd workers to do. Ideally, the crowd would provide accurate CPT codes, descriptions and reviews. Unfortunately, medical bills are not designed for clarity and ease of reading. Insurers have some incentive for clear communication, but hospitals have little incentive to help their consumers understand the charges on their bill, especially when the consumer's insurer is covering the majority of the bill.</p>
        <p>In order to test how well average medical consumers would be at understanding and translating their medical bill, I created a simple prototype powered by Google Forms. I gave the prototype to a half-dozen people who had medical bills, and I asked them to attempt to translate their bill into data. The results of the experiment showed that average people were not experienced enough to enter their own data. Some medical bills were missing CPT codes entirely, others had hospital-specific codes that were not of use unless a skilled medical biller interpreted them. Participants also reported that it was a lot of work for them to enter the information. Based on the feedback, I decided that asking our crowdsourced workers to interpret and enter their own information would be too high of a burden.</p>
        <p>At this point, I began to look in earnest at other ways to gather the medical bill data without having to require people to fill our a complex form. I decided that a photo-based service would be the best idea. Smart phones that have cameras are ubiquitous, and mobile browsers today have the abilities to interface with those cameras.</p>
        <p>As I began to build the system using traditional design and development practices, I also held six hour-long interviews with older, non-college-aged Pittsburgh residents. In the interviews, I asked them a range of questions about:</p>
        <ul>
          <li>Prior medical experiences and subsequent bills.</li>
          <li>What they did with the bills they received.</li>
          <li>How they tracked their medical expenses.</li>
        </ul>
        <p>And I presented participants with wireframes of different potential visualizations.</p> 
        <p>From the conversations, I came away with some important lessons about my users:</p>
        <ul>
          <li>Users wanted to learn more about how much their medical care costs.</li>
          <li>Users receive and often keep medical bills, but they do not use the data. It is a backup.</li>
          <li>Users feel deep anger towards the medical system at the moment they get a bill and afterwards.</li>
          <li>Medical bills do not help assuage this anger. Bills are vague about what procedures are being billed, and confusing about what should be paid by insurance or by individuals.</li>
        </ul>
        <p>These findings encouraged me to continue designing and producing PGHMedicalPrices.us. In later interviews, I was able to show interviewees working prototypes of the system. Responses to system were positive, and every person who saw the system said they would like to use it. In retrospect, I should have realized that their enthusiasm for the system during the interview would wear off if asked to use the system without a prior one-hour interview.</p>



      <h5 id="priceexplorer">Pittsburgh Price Explorer</h5>
      <p>After PGHMedicalPrices.us had been live for a month, I was worried that the site was not getting as much traffic as I had hoped based on the interviews. PGHMedicalPrices.us needed more time to gain popularity, but the academic schedule required that I keep moving forward.</p>
      <p>I brainstormed other ways to gather medical price data from hospitals. I had read <a href="http://well.blogs.nytimes.com/2013/02/11/price-for-a-new-hip-many-hospitals-are-stumped/">articles</a> about people who had called hospitals asking for prices. What if I took that technique but focused on a single metropolitan area's hospitals and gathered data from a variety of procedures instead of just one? This was a worthwhile challenge. I decided to aim for 22 hospitals in Pittsburgh and aim to collect price data on forty common, outpatient procedures.</p>
      <p>The next challenge was how to make all the phone calls. I did an initial round, and I found that hospitals were not prepared to answer questions regarding cost. Because they were not prepared, calls for this first round took on average twenty minutes per hospital once I got a person on the phone. The first round of calling ended up taking more than eight hours of phone calling time including receiving calls days later with the information I was asking for. I began a second round of calls, but many hospitals have a single person who answers these kinds of questions, and some became suspicious of multiple calls.</p>
      <p>In order to get around this problem, I created a series of worksheets for volunteers to make calls. Each worksheet contained two or three hospitals and included two or three procedures. I tracked which volunteer got which worksheet to make sure only one person had a particular set of hospitals. At the bottom of the page was a grid that volunteers would fill out as they made the calls. They could then text me a photo of the sheet with the gathered information.</p>
      <figure>
      <img src="img/examples-of-forms.png">
      <label>Five examples of returned forms. Some were returned using email, some were returned with a photo. Some people used the grid that was provided. Others made their own. Many people added additional comments and information.</label>
      </figure>
      <p>Volunteers expressed surprise and bewilderment at the poor response from most hospitals. For them it was an educational experience that got many people indignant at the health care system and hospital in particular. They were surprised that hospitals offer discounts to the uninsured, and they were surprised that hospitals were not prepared to answer questions about medical prices. One participant reflected:</p>
      <blockquote>I had a very enlightening morning shopping around for MRI's and X-Rays. The main thing I learned was the discount you receive when uninsured, I wish I had known when I was uninsured for 6 months before I found full time employment after graduating college. I remember having to pay a bill in full without even knowing about breaks! I also learned you can access price information if you know the codes, I honestly did not believe a hospital would be open to sharing the price amounts. Next time I need something medical I am going to definitely shop around ... unless it's an emergency.</blockquote>
      <p>This method was successful at getting data. As you can see from the grid below, I had hoped to gather data on the top forty procedures. I was able to get data on half of the procedures.</p>
       <figure class="figure">
          <img src="img/calls-success-grid.png" alt="" /><br/>
          <label>Overview of the data gathered through phone calls to Pittsburgh hospitals.</label>
        </figure>
      <p>With the data gathered, I created the Pittsburgh Price Explorer website. The creation took place in four phases. I sketched ideas for what visualizations the site would include, I did preliminary UI designs to give myself a guide, I developed the site, and then I did some light user testing and optimization. The site is overall successful, but given another chance, I would include user testing earlier than I did.</p>
  </ul>



  <h3 id="solution">Final Prototypes</h3>
  <h5 id="sol-prices">PGHMedicalPrices.us</h5>
  <h6>Visit <a href="http://www.pghmedicalprices.us/">the website.</a></h6>
  <p>PGHMedical prices is an web-based application that enables users to take photos of their bills and send the photos to the project team. The system allows submissions through text-message, mobile browser, or desktop browser. Users are prompted to find a medical bill, hide any personal information, and take a photo of the bill. They then have the option to enter a phone number or email address if they would like to be contacted about the project in the future.</p>
  <img src="img/pgh-screens.png">
  <label>Screen shots of PGHMedicalPrices.us</label>
  <p>The system was designed using a traditional design process. Sketches were created, then higher level UI designs. These UI designs were informally user-tested before the site was developed. After the site was developed, additional user tests were performed asking people to complete the process of uploading a bill. Changes to the UI were made based on these user tests. Most of the users tested were graduate students and older university staff members. They were able to complete the central task easily, though the user testing did not explore motivation or incentives for using this in real life.</p>
  <p>The system has been rather unsuccessful at gathering medical bills. In total the system has gathered approximately fifty medical bills from a dozen users. Future work needs to be done to make the system more appealing to use with a greater reward for the user to upload bills. An entire service could be created around uploading bills, parsing the data, then reflecting the findings back to the user to tell them how much or little they are paying for their health care.</p>
  <h5 id="sol-explorer">Pittsburgh Price Explorer</h5>
  <h6>Visit <a href="http://www.pghmedicalprices.us/price-explorer">the website.</a></h6>
  <p>Pittsburgh Price Explorer is a web-based visualization that shows four different visualizations to the user helping them to understand how the prices in Pittsburgh for medical care differs from hospital to hospital. The data is composed of price data from 20 hospitals from throughout the Pittsburgh region. Each hospital has full and discount price from twenty common procedures. The visualization begins with a one-question quiz to hook the viewer into caring about the data, then displays the data in different formats.</p>
  <img src="img/pittsburgh-price-explorer-top.png">
  <p>The visualization page was an opportunity to use some of the lessons from the literature review:</p>
  <ul>
  <li>The data was a custom-gathered dataset that volunteers worked to create. Without the work of these volunteers, the visualization would have been impossible to make. This was a surprisingly effective use of gathering a small, local crowd of people to help do research.</li>
  <li>The visualization begins with a one-question quiz in order to hook people into the experience. By asking for the user's opinion, the visualization becomes a conversation between user and system, and not just a one-way transfer of information.</li>
  <li>The visualization asks people to enter their address. With this information, the visualizations modify themselves to use the entered location as an axis point for distance measurements. This customization more easily allows people to see what hospitals are near to them, and gives them a better context around the data.</li>
  </ul>
  <figure class="img">
    <img src="img/care-share.png">
  </figure>
  <h5 id="sol-careshare">Service Design Concept</h5>

  <p>In collaboration <a href="http://www.andrew.cmu.edu/user/trishab/about.html">Trisha Black</a>, a CMU Master in Biotechnology, Innovation and Computation (MSBIC) student, we created a service design concept that would combine price and quality data about medical providers into an interface that would give doctors and patients concrete information to plan referrals and tests. Often times, doctors refer based on a variety of factors, such as personal familiarity with other doctors. Having objective data that doctor and patient can agree upon facilitates conversation by providing a common set of facts and data to build the conversation upon. The service would track medical costs and also communicate back to the doctor what procedures or tests had been performed, even if the secondary provider was not on the same network.</p>
  <p>We envision the service beginning at the doctor's office. The doctor will use a tablet computer to draw a patient into a discussion of the subsequent medical procedures the doctor is suggesting. Using the application, the doctor or a nurse can find providers of the needed procedures. The medical provider saves the recommendations on the application. The recommendations are then saved for the user to access in their homes. When the user visits the secondary provider, the original doctor or nurse can see who the patient visited and get information about the visit.</p>
  <p>By presenting price and quality data, the service inserts concerns about price and ability to pay into the medical conversation in an ambient way. The quality information about the medical providers also gives a ground-truth that the doctor can either agree with or react to. This insertion of data thus solves two big problems with medical referrals, suggestions for treatments that are too expensive, and referrals based on friendship or other non-medical reasons.</p>
  <img src="img/care-share-overview.png">
  <p><label>The provider search interface for the CareShare application.</label></p>
  <p>Most of this thesis has been concerned with creating systems that are achievable in the short term. The system envisioned here is currently not possible because of misalignment of incentives in the health care industry. Medical providers who work for hospital systems are often required to refer their patients to within their networks, even if that may be a more expensive or low-quality option. Insurance companies who hold much of the price data that could power such a system would greatly anger hospitals by releasing this type of health data. Some insurance companies though are starting to release <a href="https://www.aetna.com/individuals-families/member-tools-forms/member-payment-estimator.html">estimators</a> similar to what CareShare is suggesting.</p>  
  <h3 id="end">Conclusion: Changing People's Behavior</h3>
  <p>The health care industry is changing quickly, but people only intermittently access health care, and when they do they use old mental models that exclude considerations of price and quality. The most important conclusion from my research into health care is that designers need to create systems to jolt people into seeing the health care system in a new light. Take the mother of two children and show her how she has the power to make choices about her care based on more than gut feelings. Show middle-aged people that they can access health care and not have to worry about price because they know what they'll have to pay beforehand.</p>
  <p>Crowdsourced systems and data visualization offer a way to jolt people by involving them not just in the viewing of gathered data, but by including them in the gathering process. By asking people to participate and gather data, they will look at their data in a new and more critical way. Once they've added the data, the system can show how their data fits in with the larger system. Like one of the crowdsourced participants said, "I had a very enlightening morning shopping around for MRI's and X-Rays [prices] ... Next time I need something medical I am going to definitely shop around[.]"</p>
  <p>The more specific lessons of this thesis&mdash;data sketching, reflecting data in visualizations, generating hard-to-get data, and levels of fidelity in data-visualization&mdash;are all in pursuit of this goal of changing people's behavior.</p>
  <p>I hope anyone who reads this documentation and views the projects is inspired to create data visualizations projects that tackle tough questions that don't have easily-accessed data sources available. Data visualization can do much more than help expert users understand complex data or provide public-relations visuals for selling ideas or products to the public. </p>
  <h3 id="thanks">Thanks</h3>
  <p>Thanks so much to my two advisors, <a href="http://goodgestreet.com/">Jodi Forlizzi</a> and <a href="https://www.andrew.cmu.edu/user/aislingk/">Aisling Kelliher</a>. Thanks to all the volunteers who helped me gather data, and thanks to Carolyn for putting up with me.</p>
  <h3 id="bibliography">Bibliography</h3>
  <ul class="references">
<li>
    Baker, Robert. "Watertracker: Structured Data, Integrated Response - Ushahidi." N.p., 25 June 2012. Web. 01 Nov. 2014.
    &lt;http://www.ushahidi.com/2012/06/25/watertracker/&gt;.
</li>
<li>
Belt, Tom H Van De, Lucien Jlpg Engelen, Sivera Aa Berben, and Lisette Schoonhoven. "Definition of Health 2.0 and Medicine 2.0: A Systematic Review."    <em>Journal of Medical Internet Research</em> 12.2 (2010): n. pag. Web.
</li>
<li>
    Bennet, John. "Bringing Design to Software Ch 9 - Schon." <em>Bringing Design to Software</em>. Addison-Wesley, n.d. Web. 22 Apr. 2015.
</li>
<li>
    Bernstein, Michael S., Greg Little, Bjorn Hartmann, Robert C. Miller, Mark S. Ackerman, David R. Karger, David Crowell, and Katrina Panovich. "Soylent: A
    Word Processor with a Crowd Inside." <em>UIST '10</em> (2010): 313-22. Print.
</li>
<li>
Blumenthal, David, and Sara R. Collins. "Health Care Coverage under the Affordable Care Act - A Progress Report — NEJM."    <em>New England Journal of Medicine</em>. New England Journal of Medicine, 17 July 2014. Web. 22 Apr. 2015.
    &lt;http://www.nejm.org/doi/full/10.1056/NEJMhpr1405667&gt;.
</li>
<li>
Bos, Lodewijk, Andy Marsh, Denis Carroll, Sanjeev Gupta, and Mike Reese. "Patient 2.0 Empowerment."    <em>Proceedings of the 2008 International Conference on Semantic Web &amp; Web Services</em> (2008): 164-67. Web. 16 Jan. 2015.
</li>
<li>
    Boulos, Maged, Steve Wheeler, Carlos Tavares, and Ray Jones. "How Smartphones Are Changing the Face of Mobile and Participatory Healthcare: An Overview,
    with Example from ECAALYX." <em>BioMedical Engineering OnLine</em> 10.1 (2011): 24. Web.
</li>
<li>
Bowen, Simon, Andy Dearden, Peter Wright, Daniel Wolstenholme, and Mark Cobb. "Participatory Healthcare Service Design and Innovation."    <em>Proceeding PDC '10 Proceedings of the 11th Biennial Participatory Design Conference</em> (2010): 155-58. Web.
</li>
<li>
    Doan, Anhai, Raghu Ramakrishnan, and Alon Y. Halevy. "Crowdsourcing Systems on the World-Wide Web." <em>Communications of the ACM</em> 54.4 (2011): 86.
    Web.
</li>
<li>
Eysenbach, Gunther. "Medicine 2.0: Social Networking, Collaboration, Participation, Apomediation, and Openness."    <em>Journal of Medical Internet Research</em> 10.3 (2008): E22. Web.
</li>
<li>
    Fox, Susannah. "The Social Life of Health Information, 2011." <em>Pew Research Centers Internet American Life Project</em>. Pew Research Center, 11 May
    2011. Web. 12 Apr. 2015. &lt;http://pewinternet.org/Reports/2011/Social‐Life‐of‐Health‐Info.aspx&gt;.
</li>
<li>
Gelman, Andrew, and Antony Unwin. "Infovis and Statistical Graphics: Different Goals, Different Looks."    <em>Journal of Computational and Graphical Statistics</em> 22.1 (2013): 2-28. Web.
</li>
<li>
Gershon, Nahum, Joshua LeVasseur, Joel Winstead, Jame Croall, Ari Pernick, and William Ruh. "Case Study Visualizing Internet Resources."    <em>Proceedings of the Proceedings on Information Visualization</em> (1995): 122-28. Print.
</li>
<li>
    Ginsburg, P. B. "Shopping For Price In Medical Care." <em>Health Affairs</em> 26.2 (2007): W208-216. Web.
</li>
<li>
Goodchild, Michael F., and J. Alan Glennon. "Crowdsourcing Geographic Information for Disaster Response: A Research Frontier."    <em>International Journal of Digital Earth</em> 3.3 (2010): 231-41. Web.
</li>
<li>
    Goodchild, Michael F. "Citizens as Sensors: The World of Volunteered Geography." <em>GeoJournal</em> 69.4 (2007): 211-21. Web.
</li>
<li>
Hibbard, Judith H., and Ellen Peters. "SICHCD: Data Presentation Approaches That Facilitate the Use of Information in Choice."    <em>Annual Review of Public Health</em> 24.1 (2003): 413-33. Web.
</li>
<li>
    Howe, Jeff. <em>Crowdsourcing: Why the Power of the Crowd Is Driving the Future of Business</em>. New York: Crown Business, 2008. Print.
</li>
<li>
    Howe, Jeff. "The Rise of Crowdsourcing ." <em>Wired 14.06: The Rise of Crowdsourcing</em>. Wired Magazine, 01 June 2006. Web. 13 Nov. 2014.
</li>
<li>
Kittur, Aniket, Ed H. Chi, and Bongwon Suh. "Crowdsourcing User Studies with Mechanical Turk."    <em>Proceeding CHI '08 Proceedings of the SIGCHI Conference on Human Factors in Computing Systems</em> (2008): 453-56. Print.
</li>
<li>
    Lease, Matthew, Jessica Hullman, Jeffrey P. Bingham, Bernstein Michael, Juho Kim, Walter S. Lasecki, Saeideh Bakhshi, Tanushree Mitra, and Robert C.
    Miller. "Mechanical Turk Is Not Anonymous." <em>Social Science Research Network</em> (2013): n. pag. 16 Mar. 2013. Web. 28 Apr. 2015.
    &lt;http://ssrn.com/abstract=2228728&gt;.
</li>
<li>
    Mol, Annemarie. <em>The Logic of Care: Health and the Problem of Patient Choice</em>. London: Routledge, 2008. Print.
</li>
<li>
    Murray, Peter. <em>The Saga of the Sydney Opera House: The Dramatic Story of the Design and Construction of the Icon of Modern Australia</em>. London:
    Spon, 2004. Print.
</li>
<li>
    Norheim-Hagtun, Ida, and Patrick Meier. "Crowdsourcing for Crisis Mapping in Haiti." <em>Innovations: Technology, Governance, Globalization</em> 5.4
    (2010): 81-89. Web.
</li>
<li>
    Peters, Ellen, Louise Meilleur, and Mary Kate Tompkins. <em>Numeracy and the Affordable Care Act: Opportunities and Challenges</em>. Working paper.
    Columbus OH: Psychology Department, The Ohio State U, 2013. Print.
</li>
<li>
Peters, Ellen, Louise Meilleur, and Mary Kate Tompkins. "Numeracy and the affordable care act: Opportunities and challenges."    <em>Chapter prepared for the Roundtable on Health Literacy, Institute of Medicine</em> (2013).
</li>
<li>
    Rodgers, Simon. "Twitter Mapping: Foundations." <em>Source</em>. Open News, 10 Oct. 2014. Web. 13 Nov. 2014.
</li>
<li>
    Shneiderman, B. "Inventing Discovery Tools: Combining Information Visualization with Data Mining." <em>Information Visualization</em> 1.1 (2002): 5-12.
    Web.
</li>
<li>
    Stolterman, Erik. "The Nature of Design Practice and Implications for Interaction Design Research." <em>International Journal of Design</em> 2.1 (n.d.):
    55-65. Print.
</li>
<li>
Swan, Melanie. "Crowdsourced Health Research Studies: An Important Emerging Complement to Clinical Trials in the Public Health Research Ecosystem."    <em>Journal of Medical Internet Research</em> 14.2 (2012): E46. Web.
</li>
<li>
    Tu, H. T., and J. H. May. "Self-Pay Markets In Health Care: Consumer Nirvana Or Caveat Emptor?" <em>Health Affairs</em> 26.2 (2007): W217-226. Web.
</li>
<li>
    Tudor-Locke, Catrine, and David R. Bassett. "How Many Steps/Day Are Enough?" <em>Sports Medicine</em> 34.1 (2004): 1-8. Web.
</li>
<li>
Wood, Jason, Ken Brodlie, and Helen Wright. "Visualization Over The World Wide Web And Its Application To Environmental Data."    <em>Proceedings of the IEEE Visualization Conference</em> 7 (1996): n. pag. Print.
</li>
<li>
    Zook, Matthew, Mark Graham, Taylor Shelton, and Sean Gorman. "Volunteered Geographic Information and Crowdsourcing Disaster Relief: A Case Study of the
    Haitian Earthquake." <em>World Medical &amp; Health Policy</em>2.2 (2010): 7. Web.
</li>
  </ul>

<!-- <h3>Links</h3>
 <ul class="references">
  <li>http://www.ownyourhealthinfo.com/</li>
  <li>http://www.addictinginfo.org/2014/07/15/this-guy-put-his-hospital-bill-online-now-the-whole-world-is-talking-about-it/</li>
  <li>https://www.youtube.com/watch?v=YQZ2UeOTO3I</li>
  <li>http://blogs.kqed.org/stateofhealth/2014/06/23/share-your-bill-make-health-costs-transparent-in-california/</li>
  <li>https://sidlee.herokuapp.com/</li>
  <li>https://health carebluebook.com/</li>
  <li>http://clearhealthcosts.com/</li>
  <li>http://news.stlpublicradio.org/post/electronic-health-records-prompt-mercy-clinics-urge-measles-vaccinations</li>
  <li>http://www.washingtonpost.com/national/health-science/dr-google-may-not-be-the-best-way-to-get-information-for-picking-a-hospital/2015/02/23/6e870946-b781-11e4-9423-f3d0a1ec335c_story.html</li>
  <li>blogs.kqed.org/stateofhealth/2014/06/23/share-your-bill-make-health-costs-transparent-in-california/</li>
</ul> -->

  </p>

</article>






<?php page_about();?>
<?php page_bottom();?>
