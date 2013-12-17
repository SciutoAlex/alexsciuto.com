<?
/*
Plugin Name: Run For Cover
Plugin URI: http://dirkie.nu/wordpress-widgets/run-for-cover/
Description: Adds a sidebar widget that shows the covers of cds you listen the most to. It uses information from last.fm and the Amazon Web Service.
Author: Dog Of Dirk
Version: 1.8
Author URI: http://dirkie.nu/wordpress-widgets/
*/

// version 1.0: initial release
// version 1.1: changed to weekly feed
// version 1.2: you can specify in the options if you want to link to Amazon or to Last.fm (Last.fm is default)
// version 1.3: added 'Loading...' text which is configurable
//              added 'No images to display' which is configurable along with the necessary checks
//              invalid username also generates this text (there's no check if a username is valid)
//              ' in artist/album names is replaced with ` to avoid javascript errors
//              widget starts loading images after page has finish loading
// version 1.4  the period from which to use data is configurable now
//              couple of small bugs
//              check for new version is no longer automatic
// version 1.5  php now generates the html in one function call, instead of relying on ajax calls
//              implemented a caching mechanism to be less dependent on last.fm and Amazon
// version 1.6  widget now shows "no images available" when you registered within the last week at last.fm
// version 1.7  support for multi-user environments of wordpress (see http://mu.wordpress.org/)
// version 1.8  implemented "recent tracks" (as last.fm doesn't include album info for recent tracks, 
//                         the cd cover can be for another album the song you listened to is also on)
//              added 3rd link option: large version of cd cover (supports widget wp-lightbox if available)


$rfc_widget_version = "1.8";
$rfc_cachedir       = dirname(__FILE__) . DIRECTORY_SEPARATOR . "runforcover" . DIRECTORY_SEPARATOR;

function widget_runforcover_init() {

	if ( !function_exists('register_sidebar_widget') )
		return;

  global $rfc_cachedir;
  if (!file_exists($rfc_cachedir)) {
    # try to create cachedir
    @mkdir($rfc_cachedir);
  }

  # output for sidebar
	function widget_runforcover($args) {
    extract($args);

    $options = get_option('widget_runforcover');

    echo "\n\n" . $before_widget . $before_title . $options['title'] . $after_title . "\n";
    echo "  <span id=\"runforcover\">\n";
    echo rfc_getHtml($options);
    echo "  </span>\n";
		echo $after_widget . "\n\n";
	}

  function widget_runforcover_control() {

		// Get our options and see if we're handling a form submission.
		$options = get_option('widget_runforcover');
		if ( !is_array($options) ) {
			$options = array('title'     => 'favorite cds', 
			                 'username'  => 'hondjevandirkie', 
			                 'count'     => '6', 
			                 'imgwidth'  => '70', 
			                 'noimages'  => 'No images to display...',
			                 'charttype' => 'weekly');
    }

		if ( $_POST['runforcover-submit'] ) {
			$options['title']       = strip_tags(stripslashes($_POST['runforcover-title']));
			$options['username']    = strip_tags(stripslashes($_POST['runforcover-username']));
			$options['imgwidth']    = intval($_POST['runforcover-imgwidth']);
			if ($options['imgwidth'] < 10) {
				$options['imgwidth'] = 0;
			}
			$options['count']       = intval($_POST['runforcover-count']);
			// if (($options['count'] < 1) || ($options['count'] > 24)) {
      if ($options['count'] < 1) {
        $options['count'] = 6;
      }
			$options['linkto']      = strip_tags(stripslashes($_POST['runforcover-linkto']));
      $options['noimages']    = strip_tags(stripslashes($_POST['runforcover-noimages']));
      $options['charttype']   = strip_tags(stripslashes($_POST['runforcover-charttype']));

			update_option('widget_runforcover', $options);

			# and regenerate the HTML
			rfc_refreshHtml($options);
		}

    // Be sure you format your options to be valid HTML attributes.
    $title        = htmlspecialchars($options['title'], ENT_QUOTES);
    $username     = htmlspecialchars($options['username'], ENT_QUOTES);
    $imgwidth     = htmlspecialchars($options['imgwidth'], ENT_QUOTES);
    $count        = htmlspecialchars($options['count'], ENT_QUOTES);
    $noimages     = htmlspecialchars($options['noimages'], ENT_QUOTES);

    // no need to look at HTML attribs
    $charttype    = $options['charttype'];

		// Here is our little form segment. Notice that we don't need a
		// complete form. This will be embedded into the existing form.

?>
    <p style="text-align:right;">
      <label for="runforcover-title">Widget title: 
        <input style="width: 200px;" id="runforcover-title" name="runforcover-title" type="text" value="<?= $title ?>" />
      </label>
    </p>
    <p style="text-align:right;">
    	<label for="runforcover-username">Last.fm username: 
    	  <input style="width: 200px;" id="runforcover-username" name="runforcover-username" type="text" value="<?= $username ?>" />
    	</label>
    </p>
    <p style="text-align:right;">
      <label for="runforcover-charttype">Period:
        <select style="width: 200px;" id="runforcover-charttype" name="runforcover-charttype">
          <option value="weekly"<?  if ('weekly'  == $charttype) { echo ' selected'; } ?>>last week</option>
          <option value="3month"<?  if ('3month'  == $charttype) { echo ' selected'; } ?>>last 3 months</option>
          <option value="6month"<?  if ('6month'  == $charttype) { echo ' selected'; } ?>>last 6 months</option>
          <option value="12month"<? if ('12month' == $charttype) { echo ' selected'; } ?>>last 12 months</option>
          <option value="overall"<? if ('overall' == $charttype) { echo ' selected'; } ?>>give me everything</option>
          <option value="recenttracks"<? if ('recenttracks' == $charttype) { echo ' selected'; } ?>>recent tracks (use with caution)</option>
        </select>
      </label>
    </p>
    <p style="text-align:right;">
      <label for="runforcover-count">Max. displayed: 
        <input style="width: 200px;" id="runforcover-count" name="runforcover-count" type="text" value="<?= $count ?>" />
      </label>
    </p>
    <p style="text-align:right;">
      <label for="runforcover-imgwidth">Thumbnail size: 
        <input style="width: 200px;" id="runforcover-imgwidth" name="runforcover-imgwidth" type="text" value="<?= $imgwidth ?>" /><br />
        (You can set this to zero and use<br />img.runforcover in your stylesheet)
      </label>
    </p>
    <p style="text-align:right;">
      <label for="runforcover-noimages">Text when no images: 
        <input style="width: 200px;" id="runforcover-noimages" name="runforcover-noimages" type="text" value="<?= $noimages ?>" />
      </label>
    </p>
    <p style="text-align:right;">
      <label for="runforcover-linkto">Link to:
        <select style="width: 200px;" id="runforcover-linkto" name="runforcover-linkto">
          <option value="lastfm">Last.fm</option>
          <option value="amazon"<? if ('amazon' == $options['linkto']) { echo ' selected'; } ?>>Amazon</option>
          <option value="cover"<?  if ('cover'  == $options['linkto']) { echo ' selected'; } ?>>Large version of the cover</option>
        </select>
      </label>
    </p>
    <p>&nbsp;<br /></p>
<?
  if (rfc_isSiteAdmin()) {
  	# show link to check for updates
    global $rfc_widget_version;
?>
    <p style="text-align:right;">
      <script type="text/javascript">
        <!--
        function ow() {
        	var nW = window.open(
                     'http://dirkie.nu/downloads/runforcover.popup.php?version=<?= $rfc_widget_version ?>',
                     'runforcover',
                     'height=200,width=300,status=no,toolbar=no,menubar=no,location=no'
                   );
          return false;
        }
        -->
      </script>
    	<a href="#" onclick="return ow();">
        check for new version of this widget at dirkie.nu
      </a>
    </p>
<?
  } else {
  	# no site admin in wordpress mu, show ordinary info
?>
    <p style="text-align:right;">
      Run For Cover widget by <a href="http://dirkie.nu/wordpress-widgets/run-for-cover/">dirkie.nu</a>
    </p>
<?
  }

  global $rfc_cachedir;
  if (!file_exists($rfc_cachedir)) {
?>
      <p style="border: 2px solid #f00; padding: 4px;">
        ERROR: cannot create cache dir
        <br /><br />
        Please note that this widget needs a directory for storing
        images and html. Seeing this message means that the widget
        cannot create the folder itself. Please create a directory
        <br /><br />
        <?= $rfc_cachedir ?><br /><br />
        and make sure this widget can write to it. Most FTP programs
        allow you to set the permissions for this new directory to 777.
      </p>
<?
  }
?>
    </p>
    <input type="hidden" id="runforcover-submit" name="runforcover-submit" value="1" />
<?
  }
	
	// This registers our widget so it appears with the other available
	// widgets and can be dragged and dropped into any active sidebars.
	register_sidebar_widget('Run For Cover', 'widget_runforcover');

	// This registers our optional widget control form.
  global $rfc_cachedir;
  if (!file_exists($rfc_cachedir)) {
	  register_widget_control('Run For Cover', 'widget_runforcover_control', 375, 500);
	} else {
	  register_widget_control('Run For Cover', 'widget_runforcover_control', 375, 380);
	}
}

// Run our code later in case this loads prior to any required plugins.
add_action('plugins_loaded', 'widget_runforcover_init');

###############################################################################
# PHP functions below                                                         #
###############################################################################

function rfc_getHtml($rfc_options) {
  global $rfc_cachedir;
  $rfc_cachefile = rfc_getCacheFilename($rfc_options);

  # has the html already been generated?
  if (file_exists($rfc_cachedir . $rfc_cachefile)) {
    # cachefile exists
    return file_get_contents($rfc_cachedir . $rfc_cachefile);
  } else {
    # no; go fetch the recent list from last.fm and the images from Amazon
    return rfc_refreshHtml($rfc_options);
  }
}

function rfc_refreshHtml($_options) {
  # this function:
  #   1. connects to last.fm to find the cds the user has listened to and parses the html
  #      (yes, it doesn't use the never updating xml-feed)
  #   2. for each cd, connects to Amazon to find the url of image of the cd cover
  #      (it doesn't download the images itself!)
  #   3. generates the HTML with the urls for the imnages in it
  #   4. if ok, saves the html to the cache directory and returns it
  #   5. if not ok, returns the error text that has been set in the options

  #   oh, one more thing: I'm working on parsing the 'recenttracks' list from last.fm, which would make it
  #   possible to show the most recent covers. This is not working properly yet ;-)
  
  $rfc_last_fm_url = 'http://www.last.fm/user/' . $_options['username'] . '/charts/?subtype=album&charttype=' . $_options['charttype'];
  $rfc_url_contents = rfc_loadUrl($rfc_last_fm_url);

  if (false == $rfc_url_contents) {
  	# feed not available, let's hope it's there next time.
  	return $_options['noimages'];
  }

  # parse the html from last.fm
  # this is what we call screenscraping
  $rfc_albums = explode('<a href="/music/', $rfc_url_contents);
  array_shift($rfc_albums);

  $rfc_ta = array();
  foreach ($rfc_albums as $rfc_k => $rfc_v) {
    
    $rfc_v         = substr($rfc_v, 0, strpos($rfc_v, '"'));
    $rfc_parts     = explode('/', $rfc_v);

    $rfc_artist    = $rfc_parts[0];
    if ('recenttracks' == $_options['charttype']) {
    	# under 'recenttracks', the title is for the song, not the cd
    	# this function tries to find the cd it's on
    	$rfc_cdtitle = rfc_findCdTitleForTrack($rfc_parts[2], $rfc_parts[0]);
    	if (!$rfc_cdtitle) {
    		# no cd found where this track appears on
    		continue;
    	} else {
    		# found
    		$rfc_cdtitle = urlencode($rfc_cdtitle);
    	}
    } else {
      $rfc_cdtitle = $rfc_parts[1];
    }

    # make sure every cd gets listed once
    $rfc_ta[$rfc_cdtitle] = $rfc_artist;
  }

  $rfc_nr_displayed = 0;
  $rfc_result = "";
  
  foreach($rfc_ta as $rfc_cdtitle => $rfc_artist) {  
    if ($rfc_nr_displayed >= intval($_options['count'])) {
      break;
    }

    # let's find the cd cover
    $rfc_imghtml = rfc_getImageHtml($rfc_cdtitle, $rfc_artist, $_options);

    if ($rfc_imghtml) {
      $rfc_result = $rfc_result . $rfc_imghtml . "\n";
    	$rfc_nr_displayed++;
    }
  }

  # save result to cache?
  if ('' != $rfc_result) {
  	# debug info
  	global $rfc_widget_version;

    $rfc_result = $rfc_result . "\n  <!--\n";
    $rfc_result = $rfc_result . "    widget version: " . $rfc_widget_version . "\n";
    $rfc_result = $rfc_result . "    number of songs in " . $_options['charttype'] . " list: " . count($rfc_albums) . "\n";
    $rfc_result = $rfc_result . "    maximum number to display: " . $_options['count'] . "\n";
    $rfc_result = $rfc_result . "    last.fm username: " . $_options['username'] . "\n";
    $rfc_result = $rfc_result . "  -->\n";

    global $rfc_cachedir;
    $rfc_cachefile = rfc_getCacheFilename($_options);

    $rfc_file = @fopen($rfc_cachedir . $rfc_cachefile, 'w');
    if ($rfc_file) {
      fwrite($rfc_file, $rfc_result, strlen($rfc_result));
      fclose($rfc_file);
    }

    # delete old html files in cache
    rfc_cleanupCache($rfc_cachedir, $_options['username']);
  } else {
  	# no need to save error messages to the cache
  	$rfc_result = $_options['noimages'];
  }

	return $rfc_result;
}

function rfc_getImageHtml($rfc_title, $rfc_artist, $_options) {

  if (('' == $rfc_title) || ('' == $rfc_artist)) {
  	return false;
  }

  $rfc_AMZimg = rfc_getAmazonImageData($rfc_title, $rfc_artist);

  if (!is_array($rfc_AMZimg)) {
  	return false;
  }

  $rfc_safe_title  = str_replace("'", "`", urldecode($rfc_title));
  $rfc_safe_artist = str_replace("'", "`", urldecode($rfc_artist));

  $rfc_imgHTML = "<img src='" . $rfc_AMZimg['image'] . "' "
             . "title='" . $rfc_safe_title . ": " . $rfc_safe_artist . "' ";

  # people using their own class in css?
  if (0 == $_options['imgwidth']) {
    $rfc_imgHTML .= "class='runforcover' ";
  } else {
  	# no -- so give the image the width specified and add some margin to keep them apart
    $rfc_imgHTML .= "style='height: " . $_options['imgwidth'] . "px; width: " . $_options['imgwidth'] . "px; margin: 0px 5px 5px 0px;' ";
  }
  $rfc_imgHTML .= "/>";

  # "alt='" . $rfc_safe_title . ": " . $rfc_safe_artist . "' ";

  # new functionality in 1.2 -- where do we link to?
  # NB: Amazon link is only available when ASIN came back from Amazon
  if ((array_key_exists('linkto', $_options)) && ('amazon' == $_options['linkto']) && (array_key_exists('asin', $rfc_AMZimg))) {
    return "    <a href='http://www.amazon.com/exec/obidos/ASIN/" . $rfc_AMZimg['asin'] . "/hondjevandirk-20/'>\n      " . $rfc_imgHTML . "\n    </a>\n";
  } elseif ((array_key_exists('linkto', $_options)) && ('cover' == $_options['linkto'])) {
    # add link to large cover image if it exists, otherwise the medium one
    if ($rfc_AMZimg['largeimage']) {
  	  return "    <a href='" . $rfc_AMZimg['largeimage'] . "' rel='lightbox[runforcover]'>\n      " . $rfc_imgHTML . "\n    </a>";
  	} else {
  	  return "      " . $rfc_imgHTML . "\n";
  	}
  } else {
    // add Last.fm link
    $rfc_imgHTML = "    <a href='http://www.last.fm/music/" . $rfc_artist . "/" . $rfc_title . "/'>\n      " . $rfc_imgHTML . "\n    </a>";
  }

  return $rfc_imgHTML;
}

function rfc_cleanupCache($_dir, $_lastfmusername) {
	# in theory, in multi user wordpress environments,
	# diffent blogs can display cd covers from the same
	# last.fm user
	
	# so we keep all cache files, except the ones for the current last.fm user that are not for today

	# this means when a user has cache files for "recenttracks", the cache will keep
	# 24 files before deleting them. oh well.. the recenttracks option is hidden for now anyway.
  if ($handle = opendir($_dir)) {
    while (false !== ($_file = readdir($handle))) {
      # first: is this a cache file? I would like to be able to add covers by hand for cds Amazon
      # doesn't know in a future version of this widget, so we skip everything that's not cached html
      if ("cache" == substr($_file, -5)) {
      	# ok, it's cached html. is it for the current last.fm user?
        if ($_lastfmusername == substr($_file, 0, strlen($_lastfmusername))) {
          # now, if it's not from today, we can delete it
          if (false === strpos($_file, "." . date("ymd"))) {
            @unlink($_dir . $_file);
          }
      	}
      }
    }
  }

  # we're always happy
  return true;
}
	
function rfc_getCacheFilename($_options) {
  # this function returns
  # [lastfmname].[datepart].[charttype].cache

  # refresh every hour for recent tracks
  $_datepart = ("recenttracks" == $_options['charttype']) ? date("ymdH") : date("ymd");

  return $_options['username'] . "." . $_datepart . "." . $_options['charttype'] . ".cache";
}

function rfc_isSiteAdmin() {
  if (function_exists('is_site_admin')) {
  	return is_site_admin();
  } else {
  	return true;
  }
}

// function rfc_getUserName() {
// 	global $userdata;
//   get_currentuserinfo();
//   return $userdata->user_login;
// }	

function rfc_stringBetween($s, $start, $end) {
  if ((strpos($s, $start) === false) || (strpos($s, $end) === false)) {
    return false;
  }
  $s = substr($s, strpos($s, $start) + strlen($start));
  return substr($s, 0, strpos($s, $end));
}

function rfc_findCdTitleForTrack($_title, $_artist) {
  $_apikey = '17CBJCAMVX5V38CR0F02';

	$_r = "http://webservices.amazon.com/onca/xml?Service=AWSECommerceService&SearchIndex=MusicTracks&" . 
	      "AWSAccessKeyId=" . $_apikey . "&Operation=ItemSearch&ResponseGroup=Small&" . 
	      "Keywords=" . $_title;

	$_amazon_xml = rfc_loadUrl($_r);

  if (!$_amazon_xml) {
		return false;
	}

  $_artist = urldecode($_artist);

  # terrible way of parsing XML
  $rfc_items = explode('<Item>', $_amazon_xml);
	array_shift($rfc_items);
  foreach ($rfc_items as $rfc_k => $rfc_v) {
    if (false !== strpos($rfc_v, $_artist)) {
    	# echo "<!-- $_title van $_artist staat op " . rfc_stringBetween($rfc_v, '<Title>', '</Title>') . "-->\n";
    	return rfc_stringBetween($rfc_v, '<Title>', '</Title>');
    } else {
    	# echo "<!-- $_title van $_artist staat niet op " . rfc_stringBetween($rfc_v, '<Title>', '</Title>') . "-->\n";
    }
  }

  return false;
}

function rfc_getAmazonImageData($_title, $_artist) {
  $_apikey = '17CBJCAMVX5V38CR0F02';

  $_r = "http://webservices.amazon.com/onca/xml?Service=AWSECommerceService&SearchIndex=Music&" . 
        "AWSAccessKeyId=" . $_apikey . "&Operation=ItemSearch&ResponseGroup=Images&" .
        "Title=" . urlencode($_title) . "&Artist=" . urlencode($_artist);

  $_amazon_xml = rfc_loadUrl($_r);

  $_url = false;

  if ($_amazon_xml) {
    $_url = rfc_stringBetween($_amazon_xml, '<MediumImage>', '</MediumImage>');
    # $_url = rfc_stringBetween($_amazon_xml, '<SmallImage>', '</SmallImage>');
    if ($_url) {
    	$_largeurl = rfc_stringBetween($_amazon_xml, '<LargeImage>', '</LargeImage>');
      $_largeimage = ($_largeurl) ? rfc_stringBetween($_largeurl, "<URL>", "</URL>"): false;
    	return array(
               "asin"       => rfc_stringBetween($_amazon_xml, '<ASIN>', '</ASIN>'),
               "image"      => rfc_stringBetween($_url, "<URL>", "</URL>"),
               "largeimage" => $_largeimage
             );
    }
  }

  return false;
}


function rfc_getAmazonImageDataForTrack($_title, $_artist) {
  $_apikey = '17CBJCAMVX5V38CR0F02';

  $_r = "http://webservices.amazon.com/onca/xml?Service=AWSECommerceService&SearchIndex=Music&" . 
        "AWSAccessKeyId=" . $_apikey . "&Operation=ItemSearch&ResponseGroup=Images&" .
        "keyword=" . urlencode($_title) . "&Artist=" . urlencode($_artist);

  $_amazon_xml = rfc_loadUrl($_r);
  $_url = false;

  if ($_amazon_xml) {
    $_url = rfc_stringBetween($_amazon_xml, '<MediumImage>', '</MediumImage>');
    if ($_url) {
    	return array(
               "asin"  => rfc_stringBetween($_amazon_xml, '<ASIN>', '</ASIN>'),
               "image" => rfc_stringBetween($_url, "<URL>", "</URL>")
             );
    }
  }

  return false;
}

function rfc_loadUrl($_url) {
  $_result = false;

  # added curl for Dreamhost etc.
  if (function_exists('curl_exec')) {
    $ch = curl_init();
    curl_setopt ($ch, CURLOPT_URL, $_url);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 5);
    $_result = curl_exec($ch);
    curl_close($ch);
  } else {
    $fp = @fopen($_url, 'r');
    if ($fp) {
      $_result = "";
      while ($data = fgets($fp)) {
        $_result .= $data;
      }
      fclose($fp);
    }
  }
  
  return $_result;
}
?>