<?php

if ( function_exists('register_sidebar') )
{
    register_sidebar
    (   array
        (
          'name' => 'Left',
          'before_widget' => '<div class="widgetleft">',
          'after_widget' => '</div>',
          'before_title' => '<h6 class="widgettitle">',
          'after_title' => '</h6>',
        )
    );  
    register_sidebar
    (   array
        (
          'name' => 'Middle',
          'before_widget' => '<div class="widgetmiddle">',
          'after_widget' => '</div>',
          'before_title' => '<h6 class="widgettitle">',
          'after_title' => '</h6>',
        )
    );   
 register_sidebar
    (   array
        (
          'name' => 'Right',
          'before_widget' => '<div class="widgetright">',
          'after_widget' => '</div>',
          'before_title' => '<h6 class="widgettitle">',
          'after_title' => '</h6>',
        )
    );   
}
?>