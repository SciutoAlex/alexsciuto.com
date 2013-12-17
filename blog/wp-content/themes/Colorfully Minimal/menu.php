<?php
/*
Template Name: Menu
*/
?>
<div id="menu">
<div class="menucol">

<h4 class="menutitle">Latest Posts</h4>
<ul id="latestposts">
<?php wp_get_archives('title_li=&type=postbypost&limit=10'); ?>
</ul>
</div>

<div class="menucol">
<h4 class="menutitle">The Categories</h4>
<ul id="categories">
<div class="menulabels"><?php
wp_list_categories('orderby=name&hierarchical=0&title_li=&show_count=1'); ?> </div>
</ul>
</div>

<div class="menucol">
<h4 class="menutitle">The Tags</h4>
<ul id="tagcloud">
<div class="menulabels"><?php wp_tag_cloud('smallest=6&largest=12&number=50&orderby=count&order=DESC'); ?></div>
</ul>
</div>


</div>