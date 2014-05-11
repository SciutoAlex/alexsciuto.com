<?php

  include_once "../../../page.php";

  $params = [];
  $params['title'] = "Literature Review";
  $params['page_name'] = "topic page";

  $params['js'] = [];
  array_push($params['js'], "http://d3js.org/d3.v3.min.js");
  array_push($params['js'], "js/handlebars.js");
  array_push($params['js'], "js/main.js");

  $params['css'] = [];
  array_push($params['css'], "css/main.css");

  page_header($params);
?>




<article id="thesis">

  <h2>Changing Audience and Expectations for Information Visualization</h2>
  <p class="intro">
    More than ever before, the visualizations produced by information visualizers are all around us. Visit an online news site, and you'll likely see interactive charts that accompany articles. Smart appliances in the home produce data streams that are visualized both on the appliance and on companion websites. Large-scale public installations turn data into pieces of public art. These visualizations inform us, move us to action, and make us more aware of the world we live in. They are easily accessible, and the data they visualize is highly relevant to our daily lives.
  </p>
  <p>
    This new, popular flowering of infovis requires the infovis practice to change the visual forms it uses, the technologies it bases its visualizations on, the assumptions about its viewers, and the data it visualizes. The field must move away from traditional notions of the relationship between user/viewer and computer/visualization that have their basis in human-computer interaction. Traditional conceptions of HCI that revolve around skilled, individual users interacting with computers in a work setting must give way to new conceptions of how people interact with technology around them.
  </p>

    <figure class="img">
      <img src="img/bin-laden.png" alt="" />
      <figcaption><a href="http://www.nytimes.com/interactive/2011/05/03/us/20110503-osama-response.html">(Link)</a>. This 2011 visualization from the New York Times is an example of several new trends in infovis. The visualization was collaboratively produced in real-time based on viewers thoughts and feelings.</figcaption>
    </figure>
  <p>
    This will not be the first time that the field of infovis has had to pivot to respond to changing times. Infovis's earliest examples come from scientists in the seventeenth and eighteenth centuries using infovis as a method of recording and communicating scientific ideas. By the early nineteenth century infovis had to pivot to meet new developments in bureaucratic data production and improvements in print technology. The field pivoted again with the rise of the computer in the mid-twentieth century. Today, with the maturation of the internet, infovis is experiencing a third pivot.
  </p>
  <p>
    This literature review includes four main parts. First is a description of the first two pivots infovis undertook as well as exemplary examples from each era. Second, I explain the current paradigm that arose from HCI in the 1960s through the 1990s. Third, I will examine some new trends in infovis that are distinct from the HCI infovis approach. Finally, I have compiled a list of very recent visualizations, and I map these examples to my trends.
  </p>
  <h3>What is Infovis?</h3>
  <p>
    Before we begin, it is useful to define our terms and outline the value that infovis brings to viewers of visualizations.
  </p>
  <p>
  Card, Mackinlay, and Shneiderman offer a commonly cited definition of infovis. They define information visualization broadly: "Visualization: The use of computer-supported, interactive, visual representations of data to amplify cognition" [1]. Later in the same article, they elaborate that the data being visualized is abstract and that the graphic produced will be non-representational. For this paper's history section, we will define infovis broader still. Infovis is any graphic that uses visual means to encode data that could later be decoded to amplify the cognition of the viewer.
  </p>
  <aside class="citation">
      <div>1. Card, Stuart K., Jock D. Mackinlay, and Ben Shneiderman. <em>Readings in information visualization: using vision to think</em>. San Francisco, Calif.: Morgan Kaufmann Publishers, 1999. Print.</div>
  </aside>
  <p>
    There are many cognitive benefits to visually encoding information. Our eyes are constantly pre-processing the images they take in [2,3]. These preprocessing steps are what enable all people to quickly see visual patterns, spot movement, and discern different types of color. By exploiting these pre-processing steps, designers of all stripes can greatly improve viewers grasp of visual information. For the most part, viewers are unaware of all the processing that the eyes and visual cortex do before images enter consciousness. Below are two examples that highlight how design that takes advantage of these visual processes can greatly decrease the cognitive load of viewers.
  </p>
  <aside class="citation">
      <div>2. Ware, Colin. <em>Visual thinking for design</em>. Burlington, MA: Morgan Kaufmann, 2008. Print.</div>
      <div>3. Cairo, Alberto. <em>The functional art: an introduction to information graphics and visualization</em>. Berkeley: New Riders, 2013. Print.</div>
  </aside>
  <figure class="figure">
    <img src="img/visual-perception.png" alt="" />
    <figcaption>(L) How many "3" digits are in the string of numbers? (R) Locate the United States' three largest cities. The preprocessing capacity of the brain's visual system makes answering the question and performing the task easy when the appropriate design is used. </figcaption>
  </figure>
  <p>
    The above benefits apply to all information designers. There are a variety of additional cognitive benefits viewers gain from using visualizations instead of writing about or tabulating data. These include:
  </p>
  <ul>
    <li>Easy viewing of huge amounts of data. The viewer can see the important details of more data points at the same time.</li>
    <li>Emergent properties of data become visible. The human mind is highly skilled at seeing visual patterns. Infovis exploits this.</li>
    <li>Singularities, outliers, and unexpected data points are easy to spot when a dataset is properly visualized.</li>
    <li>The eye can move easily between different levels of the data by focusing on different combinations of shapes. The viewer can move from single data points to overall aggregates by only changing their attention.</li>
    <li>Visualizations invite hypothesis forming because they offer evidence but not a completely clear logical narrative. [4]</li>
  </ul>
  <aside class="citation">
      4. Ware, Colin. Information visualization perception for design. San Francisco, CA: Morgan Kaufman, 2004. Print.
  </aside>
  <p>
    By encoding information visually, infovis uses a different set of cognitive processes than a written narrative or set of summary statistics. These different processes focus on low-level visual processing that is very cognitively easy for most people to perform. This frees up higher levels of cognition to deal with the meaning and implications of data.
  </p>
  <h3>Previous Infovis Pivots</h3>
  <p>
    Infovis has a long history, and during that history, the data visualized and the expected audience has evolved. The history of Infovis&mdash;broadly defined as visual works that represent information in non-verbal, non-representational form&mdash;is a long one, and starts with the Renaissance of the seventeenth century. I've divided this history into five main eras: Scientific Visualization (1600 - 1800), Bureaucratic Visualization (1800-1900), the Lost Years (1900 - 1950), Modern Infovis (1950-2000), and the Rise of the Internet (2000 onwards). Each era of Infovis's history visualized different types of data, used different forms to visualize the data, and had different expectations for who would view the audience.
  </p>
  <h4>Scientific Infovis</h4>
  <p>
    With the rekindling of the scientific investigation in Europe, scientists in the seventeenth and eighteenth centuries needed a method to record their observations of the natural world and share their complex findings. Many began to turn to drawing and sketching as a method to record and share. One such scientist was the Jesuit priest and astronomer Christoph Scheiner who used infovis to record, then publicize, his  findings about sunspots [5]. In 1611, Scheiner began recording the sunspots he observed. A year later, in 1612, Scheiner published a series of public letters on his discovery. In these letters, Scheiner included small-multiple diagrams of his recordings. The grid of profiles of the sun showed the progression of sun spots as they progressed around the surface of the sun.
  </p>
  <aside class="citation">
    5. Tufte, Edward R.. Envisioning information. Cheshire, Conn. (P.O. Box 430, Cheshire 06410): Graphics Press, 1990. Print.
  </aside>
  <figure class="img">
    <img src="img/scheiner.jpg" alt="" />
    <figcaption>Christoph Scheiner. 1612.</figcaption>
  </figure>
  <p>
    Scheiner's sunspots exemplify the Scientific Visualization era. The data Scheiner visualized was data he had personally recorded. To visualize what he saw, he used the tools available to him: pen and paper. He shared his visualization with other highly educated scientists—the letters were written in Latin and required extensive knowledge of astronomy. So expensive data, expensive production, and limited audience made visualization a specialists tool. Only the most educated would encounter an infovis in during this period.
  </p>
  <h4>Bureaucratic Infovis</h4>
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
<h3>Infovis of the past sixty years</h3>
<p>
  Interest in infovis revived with the creation of better computers and access to even more data in the 1950s and 1960s. During this time, rigor was brought to the discipline, and a use for infovis was discovered that complimented the field of statistics, not competed with it.
</p>
<p>
  Two men, French cartographer Jacques Bertin and American statistician John Tukey helped revive the discipline. Bertin's landmark <em>Semiology of Graphics</em> developed a theory of graphics for showing large amounts of quantitative data efficiently. Bertin brought intellectual rigor to the visual choices infovis practitioners make when they are developing visualizations. He wrote about how to group and differentiate different series of data as well as layering different types of data on top of one another for a richer, denser experience. Bertin offered a fresh start to infovis rooted not in the craftsmanship of the Bureaucratic Visualization era but in scientific precision of the twentieth century.
</p>
<p>
  Where Bertin brought rigor to visual design in infovis, John Tukey realized that the summary statistical methods that statisticians had used to replace visualizations didn't enable the viewer a rich exploratory experience with data. Summary statistics may describe data well, but Tukey argued that exploration, hypothesis building, and insight discovery were different than summarized data. He introduced the content of his book <em>Exploratory Data Analysis</em> as:
</p>
<blockquote>
  ...looking at data to see what it seems to say. It concentrates on simple arithmetic and easy-to-draw pictures. It regards whatever appearances we have recognized as partial descriptions, and tries to look beneath them for new insights. Its concern is with appearance, not with confirmation. [12]
</blockquote>
<aside class="citation">
  <div>12. Tukey, John. 1970 <em>Exploratory Data Analysis</em>. Addison-Wesley Publishing Company. Quoted in Fry, Ben. 2004. Doctoral Dissertation. Massachusetts Institute of Technology.</div>
</aside>
<p>
  Tukey realized that graphics use the visual processing parts of the brain to efficiently consume and understand large amounts of data, and that these abilities align with exploring data and gaining insights.
</p>
<p>
  Both of these men viewed the primary consumer of visualizations to be skilled workers already knowledgeable about the data. Example visualizations from Bertin's work include hotel data visualizations that showed when hotel rooms were over- and under-booked. These visualizations enabled hotel owners to make better decisions. Tukey created new visualizations like the box and whisker plot for statisticians to better understand the data they were already working with. For as how important he is in the history of infovis, he is probably just as important in the history of statistics [13]. His primary affiliations throughout his life were Princeton University and Bell Labs, where he received patents and led research.
</p>
<aside class="citation">
  <div>13. David R., Brillinger. "John W. Tukey: His Life and Professional Contributions." The Annals of Statistics 30.6 (2002): 1535-1575. Print.</div>
</aside>
<figure class="img">
  <img src="img/bertin-mechanical-infovis.png" alt="" />
  <figcaption>Two sketches of Bertin's mechanical sorting machines for creating interactive visualizations. 1977.[*]</figcaption>
</figure>
<p>
  Experimentations using computers to create interactive information visualizations made similar assumptions about skilled users. Bertin in the 1960s created mechanically interactive data visualizations that could create sorted bar charts and other basic visualizations using different pieces of paper [14]. These machines required a team of secretaries and many hours of work to make them work. Tukey developed the first true computer graphics system for visualizing data in 1972 [15]. PRIM-9 was a system that enabled the user to picture, rotate, isolate, and mask multivariate data. These early experiments in interaction from both men used the technology that was available to them, and the technology involved individual users interacting with specialized equipment.
</p>
<aside class="citation">
  <div>14. Bertin, Jacques, and Serge Bonin. La graphique et le traitement graphique de l'information. Paris: Flammarion, 1977. Print. Accessed from Falguerolles, Antoine. Laboratoire de Statistique et Probabilités, UMR CNRS. Université Paul Sabatier, 29 Nov. 1996. <a href="http://nativesystems.inf.ethz.ch/pub/Main/FelixFriedrichPublications/Bertin.pdf">Link</a>.</div>
  <div>15. Friedman, Jerome H., and Werner Stuetzle. "John W. Tukey's Work on Interactive Graphics." Annals of Statistics 30.6 (2002): 1629-1639. Print.</div>
</aside>
<p>
Edward Tufte and Ben Shneiderman separately continued the work of Bertin and Tukey into the 1980s and 1990s. Tufte extended Bertin's rigorous work formulating rules for creating information rich visualizations. Shneiderman and other HCI researchers created interactive visualizations that used the knowledge developed by the HCI community.</p>
<figure class="img">
  <img src="img/copper-levels.jpg" alt="" />
  <figcaption>Electrical Resistivity of Copper, Gold, Palladium, and Silver. R.A. Matula. 1979 Tufte, Edward R.. <em>Envisioning information</em>. Cheshire, Conn. (P.O. Box 430, Cheshire 06410): Graphics Press, 1990. Print.</figcaption>
</figure>
  <p>
For Tufte, the best information graphics functioned like the thermal conductivity graphs included in this literature review. These graphics contained multiple layers of information, and every line or marker highlighted a unique facet of the underlying dataset. Tufte refers to these kind of high-density visualizations as truly interactive infovis [16]. The viewer can visually move around the graphic and zoom and out to different levels of data abstraction. Tufte's rules and maxims like the data-ink ratio and concepts of data-density continued Bertin's work of codifying good visualizations as being highly dense, straightforward, easily accessible visualizations.
  </p>
  <aside class="citation">
    <div>16. Tufte, Edward R.. <em>The visual display of quantitative information</em>. Cheshire, Conn. (Box 430, Cheshire 06410): Graphics Press, 1983. Print.</div>
  </aside>

<p>
  Ben Shneiderman and other HCI researchers took the interactive work of John Tukey and added the principles of direct-manipulation graphical user interfaces to create information exploration applications. Schneiderman summarized this strand of HCI research as Visual Information Seeking. He gave it the mantra of "Overview first, zoom and filter, then details-on-demand." Similar to Tufte's views, Schneiderman believed that new generations interactive applications could help users overcome the great increase in information they were being exposed to. "There is promising evidence that the next generation of digital libraries for structured databases, textual documents, and multimedia will enable convenient exploration of growing information spaces by a wider range of users," Shneiderman wrote in 1996[17].
</p>
<aside class="citation">
17. Shneiderman, Ben. "The eyes have it: a task by data type taxonomy for information visualizations." Visual Languages, 1996. Proceedings., IEEE Symposium on 1996 (1996): 336 - 343. IEEE Explore Abstract. Web. 7 May 2014.
</aside>
<figure class="figure">
<img src="img/current-infovis.png" alt="" />
<figcaption>Examples of Visual Information Seeking systems. L: 2004, M: 2012, R: 2014.</figcaption>
</figure>
<p>
  From Bertin to Shneiderman, these visualizers were at the forefront of infovis were using technology in innovative ways, but the focus has always been on how to use technology to enable viewers to consume more data into more efficient ways. This current model leaves out many important insights that both the HCI and interaction design communities have discovered over the past decade. Relevant insights from design and HCI include the recognition of the interpersonal aspect of computer use, the recognition of the importance of context of the computer use session, recognition that a variety of users interact with computer systems, and recognition that users often desire more than efficiency or ease in their computing experience [18].
</p>
  <aside class="citation">
18. Pousman, Zachary, John Stasko, and Michael Mateas. "Casual Information Visualization: Depictions of Data in Everyday Life." IEEE Transactions on Visualization and Computer Graphics 13.6 (2007): 1145-1152. Print.
  </aside>
  <h3>Current Trends In Infovis</h3>
  <p>A number of practitioners have put forth different directions that they see the field of infovis moving. All of these writers predict a future of infovis that has more widespread viewership, more sophisticated and accessible creation tools, and exponentially more data available. But they divide the future of the field into different categories.
  </p>
  <p>
    In 1990, Tukey listed 19 areas that infovis "have almost reached" and should soon reach [19]. Tukey's writings were extremely prescient and his predictions and concerns are still with the infovis discipline today. I've grouped his 19 areas into a more manageable number. The first area Tukey was concerned with was improving the visual design of infovis practitioners. He listed as some of his 19 areas: "What can we do with color?", "Learning from graphic designers", "Avoiding busyness (visual clutter)," and "Gaining from 'ink' and space restrictions." Tukey was also concerned with how how infovis could be made interactive. "Easy flow, usually one path among several" and "Opportunities in dynamic graphics." Tukey also felt that with changes in technology, developing toolkits ("Steps toward graphic systems") would be required to enable practitioners to develop computer-dependent visualizations. A number of Tukey's areas deal with the relationship between the practitioner and the data they are visualizing.  ("Immediacy; interocularity; inescapability," "The importance of purpose," "Phenomena versus numbers," "Prospecting versus transfer of recognition"). Tukey realized that the relationship was more complex than the visualizer showing data, that the visualizer was always telling a story with data. Finally, Tukey argued that infovis is a partner for Statistics, not a replacement or a cheap substitute ("The need for precomputation," "Building from Classical Skills").
  </p>
  <aside class="citation">
    <div>19. Tukey. 1990.</div>
  </aside>
  <p>
    In 2009, Jeffrey Heer suggested that the near future of infovis would be about creating connections between different viewers of visualizations, visualizing the outputs of more and more complex machine learning algorithms, and developing toolkits to allow more people to become visualizers themselves [20]. Almost twenty years elapsed between Tukey's predictions and Heer's talk. The most notable difference between the two is Heer's interest in social visualization. When Tukey was writing in 1990, technology was still at the one-computer-one-person paradigm. Since then, developments in internet technology have made Heer's interest in social infovis an interesting area.
  </p>
  <aside class="citation">
    <div>
      20. Heer, Jeffrey. "A Brief History of Data Visualization." Seminar on People, Computers, and Design. Stanford University. Stanford University, California. 26 Mar. 2009. Speech.
    </div>
  </aside>
  <p>
  Two years before Heer gave his predictions, Pousman et al wrote about a variety of edge cases in infovis that violated the skilled-user assumption modern infovis has always followed [21]. They grouped all his categories under the term casual infovis to denote visualizations that are accessible to a range of viewers from expert to novice and accessible in a range of contexts beyond the work place. The article divided the field of casual infovis into three primary subfields: artistic, ambient, and social, and a number of smaller fields: tools, personal data visualization, and persuasive visualization.
  </p>
<aside class="citation">
  <div>21. Pousman et al. 2007.</div>
</aside>
<h3>Synthesis from history and current examples</h3>
<p>
  These three infovis forecasts point to an infovis future where infovis is used by more people, uses a device paradigm beyond one-computer-one-user, and takes place in different contexts beyond the workplace. I have used these forecasts as examples for my own explorations of the infovis space. And I've added to their work by collecting contemporary examples to bring their typologies up-to-date. I've decided to group what what I see are interesting trends that all break the traditional infovis concept of a single computer user interacting in a work environment.
  <figure class="figure">
    <table id="exampleTable">
      <thead>
        <td class="exampleTitle">Title</td>
        <td class="data">Narrative</td>
        <td class="data">Social</td>
        <td class="data">Personal</td>
        <td class="data">Service</td>
        <td class="data">Ambient</td>
        <td class="data">Art</td>
      </thead>
    </table>
  </figure>
  <h4>Narrative Infovis</h4>
  <p>
    Narrative Infovis de-emphasizes the exploration of data that is a hallmark Visual Information Seeking systems and instead focuses on using visual elements to tell a story about data [24]. This method has been pioneered by news organizations, who have applied the skills of journalism to visualizations. The transfer has been successful and has produced unique information visualizations. These visualizations transfer from the viewer to the author much of the cognitive work of turning exploration into insight. They are thus able to create insights more easily, but the insights are more focused.
  </p>
  <aside class="citation">
    <div>
      24. Gershon, Nahum, and Ward Page. "What storytelling can do for information visualization." Communications of the ACM 44.8 (2001): 31-37. Print.
    </div>

  </aside>
  <figure class="img">
  <img src="img/narrative.png" alt="" />
  <figcaption>The Guardian. 2012. This example highlights including narrative in infovis. The visualization's authors determine the procession of facts for the viewer, but the viewer is free to access additional details or jump around the authors' narrative..</figcaption>
  </figure>
  <p>
    These visualizations use a variety of visual methods to tell a directed story instead of general exploration. Data is highly edited to include only relevant details that strengthen the narrative. Different views of the data will show the data differently in order to emphasize different aspects of the data. The visualizations themselves have a beginning, middle, and end both physically and temporally. Heer lists seven genres of narrative infovis. They are:
  </p>
  <ul>
    <li><strong>Magazine Layout</strong> A single graphic whose accompanying text-based story provides narrative structure.</li>
    <li><strong>Annotated Chart</strong> A chart that layers on top of it notes and conversation that tell a story about the data</li>
    <li><strong>Partitioned Chart</strong> A multi-chart layout where the loose combination of charts tells a narrative</li>
    <li><strong>Comic Strip</strong> A multi-chart layout with a clear movement from one chart to the next using the principles of comic layout.</li>
    <li><strong>Flowchart</strong> A multi-chart layout where the user visually moves through a logical flow to arrive at a conclusion.</li>
    <li><strong>Slideshow</strong> A multi-chart layout where the graphics as the user progresses through the slideshow</li>
    <li><strong>Film Video Animation</strong> Using constant animation to tell a visualization story [22]</li>
  </ul>
  <aside class="citation">
  <div>
    22. Segel, Edward, and Jeffrey Heer. "Narrative Visualization: Telling Stories With Data." IEEE Transactions on Visualization and Computer Graphics 16.6 (2010): 1139-1148. Print.
  </div>
</aside>
<p>
  These visualizations are different than text-based narratives that include photos. The interplay of image and text is closely connected. Additional data-details are available to interested readers. The data can be made available in different ways. In a "martini glass" structure, the narrative often ends with an open-ended view of the data and an invitation to explore. Or the visualization starts with a singular choice and then additional exploration leads from the initial choice.
</p>
<h4>Social Infovis</h4>
<p>
  In the past ten years, the internet has created the ability to connect internet users together and allow them to share a collective experience, often in real time. The ability for users to connect with each other through a centralized system has revolutionized every aspect of the internet. Infovis is only beginning to develop ways to take advantage of this ability to connect users to other users. Practitioners have tried a variety of methods out, but there is no consensus on what is the most useful way to integrate multiple viewer interactions into infovis.
</p>
<p>
  One method of adding social interactivity is to provide a commentary and story-creation layer on top of unchanging data. Jeffrey Heer has created a number of systems that enable the adding to text, lines, and shapes to specific views of a dataset. For example, in an infovis that shows US employment patterns over the past century, the user can customize the graph based on time and occupation, add a comment or ask a question, then share a unique link to friends who can then see an identical view. Because the data and the commentary occupy two loosely connected systems, this method could be used to make many current infovis projects more social.
</p>
<p>
  Another method, employed by the New York Times graphics team, has been to incorporate user commentary in a more tightly coupled way. By asking users specific questions and asking for specific kinds of responses, a visualization can take the responses and begin to visualize the results in realtime. The visualization uses the responses as its data set. This has the potential to be useful for time-sensitive visualizations where responses are quickly developing but there is a need for a comprehensive summary. There are not many examples of this kind of visualization, but one comes from the days after the death of Osama Bin Laden. The Times' graphics team created a two-dimensional scatter plot of user feelings. Users could use the graph as an input device and add their feelings along with a short sentence. The Times have not repeated this chart since then.
</p>
<p>
  Social infovis is more than visualizing datasets that include social data. This area is unique because it is trying to involve many users in the process of creating unique insights from data.
</p>
<figure class="img">
<img src="img/personal.png" alt="" />
<figcaption>Future Advisor. 2014. While the service Future Advisor falls into the Service Infovis trend, the service uses an interactive visualization to educate customers about how much they will need to save for retirement. Viewers can adjust parameters to the chart to fit their context.</figcaption>
</figure>
<h4>Personal Infovis</h4>
<p>
  Data today often describes things that affect individuals in direct ways. The challenge is that it requires cognitive work to apply the insights gained from the visualization to the viewer's particular context. A way to overcome this hurdle of applying insights is to incorporate key pieces of data supplied by the user within the visualization itself. With the viewer's supplied data as a visual landmark, the viewer can take advantage of the visual processing power of the brain to not just understand the data, but understand how the data compares to them.
</p>
<p>
  An interesting side effect of including self-supplied personal information within a visualization is that it allows viewers to explore the dataset by inhabiting different personas. A visualization that shows the viewer how much they will need to save for retirement to have a certain expected income can change the different parameters of the graph to temporarily become a wealthy middle-aged woman or a poor 24 year-old. This kind of data exploration could even be encouraged if the visualization supplied interesting pre-set personas for the user to inhabit.
</p>
<h4>Infovis Services</h4>
<p>
  Much of the data produced today is continuously produced by the services and devices people own. Quantified self sensors describe on-going phenomena like personal health. Many websites will connect financial accounts to measure a person's ongoing financial health. This ongoing monitoring is continuous and takes places over months and years. It makes sense then to think about visualizations as part of larger service ecosystems.
</p>

<p>
Mint.com's data service for personal finance is an example of both this areas strengths and weaknesses. The user gives Mint.com access to the user's other financial accounts. The service then pulls in all the data it can, and it populates an interface that the user can manipulate to gain insights. Users can gain insights by viewing trends in their financial data like total money earned or spent. They can also access details like credit card and bank transactions. Mint.com's strengths are that it enables glanceable information that summarizes an individuals financial health. Mint.com's weaknesses are in creating insights from independent data exploration. Mint.com has the visualizations it has, and there is not much a user can do to expand and explore those visualizations.
<figure class="img">
<img src="img/ge-lobby.png" alt="" />
<figcaption>Fathom Design. General Electric Lobby Installation. 2012. Fathom's infovis installation is a great example of ambient infovis. When left alone, the visualization quietly sits in the background displaying an overview of a centuries worth of General Electric Annual Reports. When a viewer interacts with the visualization, the visualization gives them the ability to drill down into the data and access details.</figcaption>
</figure>
<h4>Ambient Infovis</h4>
<p>
  The preceding examples have all been internet browser-based, using web technologies to enable anyone with an internet connection and modern browser to access and interact with the visualization. There are two areas of infovis development that abandon the browser completely. Ambient infovis attempts to integrate visualizations into the general environment. Art infovis abandons the infovis goal of providing obvious insights opting instead to provoke or confuse rather than to clarify and inform.
</p>
<p>
  Ambient infovis offers a method for delivering important information at the moment of need instead of a moments of reflection. A great example of this is Rodgers and Bartram's project to redesign energy use meters [25]. Traditional energy use visualizations rely on dashboards that give an overview of the collected energy data. Users must seek this dashboard out, then expend cognitive energy gaining insights from it. Rodgers and Bartram instead installed a series of screen displaying abstract shape whose movements changed based on the instantaneous energy use of particular appliances. One participant noted, "With the graphs for Google (PowerMeter) and for the typical bill, you had to think about it a lot, you had to definitely read it and you had to sort of figure out where the information was... whereas with the display you could see at a glance that there is something going on."
</p>
<aside class="citation">
  <div>
    25. Rodgers, J., and L. Bartram. "Exploring Ambient and Artistic Visualization for Residential Energy Use Feedback." IEEE Transactions on Visualization and Computer Graphics 17.12 (2011): 2489-2497. Print.
  </div>
</aside>
<h4>Artistic Infovis</h4>
<p>
  Artistic infovis is the wide range of art pieces and installations that display data and transform it into visual representations, many of which are interactive. As Pousman et al summarize, "In our view, these systems have the explicit goal of challenging preconceptions of data and representation. In the vocabulary of the art world, they 'problematize' our everyday conceptions [26]."
</p>
<aside class="citation">
  <div>
    26. Pousman et al. 2007.
  </div>
</aside>
<p>
  Artistic Infovis is, unlike the other trends, not functionalist. The other infovis trends all try to help the viewer achieve an insight. Artistic innovation's goals may be creating delight or confusion at the moment of viewing. This is a distinct goal from insight.
</p>
<p>
  Some examples of artistic infovis are Wignell's 2007 gallery piece that took a live video stream, sorted the pixels based on color intensity, and played it back for the viewer. The viewer could tell the output was based on the video of them, but not much else. Another example is <em>Tableau Machine</em> that took recordings of a home and processed them into abstract representations of family cohesion. The data was the basis for the visualization, but the final visualization is ambiguous and open to interpretation. See Pousman et al for more examples.
</p>
<h3>Conclusion</h3>
<p>
  This paper has argued that the field of infovis has pivoted a number of times in its history as technology and expectations about visualizations have changed. This paper has assumed that the because of changes in technology in the past decade, there is another pivot in progress. No one know how infovis will change in the next ten years, but based on experienced practitioners predictions and my own gathering of examples, I have laid forth six new areas in infovis that are different than the HCI-based infovis of the past fifty years.
</p>
  <p>
  </p>
  <h3>References</h3>
  <ul class="references">
<li>Heer, Jeffrey. "A Brief History of Data Visualization." Seminar on People, Computers, and Design. Stanford University. Stanford University, California. 26 Mar. 2009. Speech.</li>
<li>Bertin, Jacques. <em>Semiology of graphics</em>. Madison, Wis.: University of Wisconsin Press, 1967. Print.</li>
<li>Bertin, Jacques, and Serge Bonin. <em>La graphique et le traitement graphique de l'information</em>. Paris: Flammarion, 1977. Print.</li>
<li>Cairo, Alberto. <em>The functional art: an introduction to information graphics and visualization</em>. Berekley: New Riders, 2013. Print.</li>
<li>Card, Stuart K., Jock D. Mackinlay, and Ben Shneiderman. <em>Readings in information visualization: using vision to think</em>. San Francisco, Calif.: Morgan Kaufmann Publishers, 1999. Print.</li>
<li>David R., Brillinger. "John W. Tukey: His Life and Professional Contributions." The Annals of Statistics 30.6 (2002): 1535-1575. Print.</li>
<li>Friedman, Jerome H., and Werner Stuetzle. "John W. Tukey's Work on Interactive Graphics." Annals of Statistics 30.6 (2002): 1629-1639. Print.</li>
<li>Friendly, Michael. "The Golden Age of Statistical Graphics." Statistical Science 23.4 (2008): 502-535. Print.</li>
<li>Gershon, Nahum, and Ward Page. "What storytelling can do for information visualization." Communications of the ACM 44.8 (2001): 31-37. Print.</li>
<li>Heyde, C. C., and E. Seneta. <em>Statisticians of the centuries</em>. New York: Springer, 2001. Print.</li>
<li>Pousman, Zachary, John Stasko, and Michael Mateas. "Casual Information Visualization: Depictions of Data in Everyday Life." IEEE Transactions on Visualization and Computer Graphics 13.6 (2007): 1145-1152. Print.</li>
<li>Rodgers, J., and L. Bartram. "Exploring Ambient and Artistic Visualization for Residential Energy Use Feedback." IEEE Transactions on Visualization and Computer Graphics 17.12 (2011): 2489-2497. Print.</li>
<li>Segel, Edward, and Jeffrey Heer. "Narrative Visualization: Telling Stories With Data." IEEE Transactions on Visualization and Computer Graphics 16.6 (2010): 1139-1148. Print.</li>
<li>Shneiderman, Ben. "The eyes have it: a task by data type taxonomy for information visualizations." Visual Languages, 1996. Proceedings., IEEE Symposium on 1996 (1996): 336 - 343. IEEE Explore Abstract. Web. 7 May 2014.</li>
<li>Tufte, Edward R.. <em>The visual display of quantitative information</em>. Cheshire, Conn. (Box 430, Cheshire 06410): Graphics Press, 1983. Print.</li>
<li>Tufte, Edward R.. <em>Envisioning information</em>. Cheshire, Conn. (P.O. Box 430, Cheshire 06410): Graphics Press, 1990. Print.</li>
<li>Tukey, John W.. <em>Exploratory data analysis</em>. Reading, Mass.: Addison-Wesley Pub. Co., 1977. Print.</li>
<li>Tukey, John W.. "Data-Based Graphics: Visual Display in the Decades to Come." Statistical Science 5.3 (1990): 327-339. Print.</li>
<li>Ware, Colin. <em>Information visualization perception for design</em>. San Francisco, CA: Morgan Kaufman, 2004. Print.</li>
<li>Ware, Colin. <em>Visual thinking for design</em>. Burlington, MA: Morgan Kaufmann, 2008. Print.</li>
<li>Yao, Nathan. "John Tukey and the Beginning of Interactive Graphics." Flowing Data. N.p., 1 Jan. 2008. Web. 9 May 2014. <http://flowingdata.com/2008/01/01/john-tukey-and-the-beginning-of-interactive-graphics/>.</li>
<li>de Falguerolles, Antoine. "http://nativesystems.inf.ethz.ch/pub/Main/FelixFriedrichPublications/Bertin.pdf." Laboratoire de Statistique et Probabilités, UMR CNRS. Université Paul Sabatier, 29 Nov. 1996. Web. 9 May 2014. <http://nativesystems.inf.ethz.ch/pub/Main/FelixFriedrichPublications/Bertin.pdf>.</li>
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
