=== Run for Cover ===
Contributors: hondjevandirkie
Donate link: http://dirkie.nu/wordpress-widgets/run-for-cover/
Tags: widget, lastfm, last-fm, cd-cover, cd, cover, amazon
Requires at least: 2.0
Tested up to: 2.1
Stable tag: 1.8

This widget shows cd covers from your Last.FM account.

== Description ==

This widget shows cd covers on your Wordpress weblog. It connects to last.fm and 
grabs the list of cds you listened to recently and tries to find the cover images 
at Amazon. To speed things up, it only fetches these data once a day and keeps a 
local copy for the rest of the day.

== Installation ==

1. As for any widget, you need the widgets plugin by Automattic, at
   http://automattic.com/code/widgets/
2. Upload `runforcover.php` to wp-content/plugins/widgets
3. Activate the widget through the 'Plugins' menu in WordPress
4. Configure the widget under 'Presentation'

== Frequently Asked Questions ==

= I get an error message telling me I need a cache folder =

The widget tries to create a cache folder, so it doesn't have to fetch the info from Last.FM and
Amazon every time someone visits your weblog. If it can't create the folder, you will have to create
it by hand at

wp-content/plugins/widgets/runforcover/

and make sure the widget can write HTML to it (usually `chmod 777` will do).

= What are all this options I get? =

* **Widget title**: the text to display over the cd covers
* **Last.fm username**: your username. Default is my username,so if you like Randy Newman cd covers, do not change it ;-)
* **Period**: last.fm can go back in time for the cds you listened to. Leave it set to weekly if you want to see lots of different cd covers
* **Max. displayed**: the maximum number of cd covers you want. As not all cds have cover images at Amazon, you will not always get the exact number you set here
* **Thumbnail size**: the desired width and height of the images. You can set this to zero and use img.runforcover in your stylesheet.If you do not know what this means, try some numbers between 75 and 160.
* **Text when no images**: when the widget can find no images, this text is used. In rare occassions this message is used as error message
* **Link to**: you can choose where the images link to: Last.fm (default) or Amazon. If you choose to link to the Amazon product page, please note that this includes my associate id for Amazon.

= Does your widget support multi-user wordpress installations? =

Yes.

== Screenshots ==

1. An example how the cd covers may look in your sidebar
2. The options screen for this widget
