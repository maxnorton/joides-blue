<?php

// $Id: page.tpl.php,v 1.13 2008/09/15 08:31:58 johnalbin Exp $



/**

 * @file page.tpl.php

 *

 * Theme implementation to display a single Drupal page.

 *

 * Available variables:

 *

 * General utility variables:

 * - $base_path: The base URL path of the Drupal installation. At the very

 *   least, this will always default to /.

 * - $css: An array of CSS files for the current page.

 * - $directory: The directory the theme is located in, e.g. themes/garland or

 *   themes/garland/minelli.

 * - $is_front: TRUE if the current page is the front page. Used to toggle the mission statement.

 * - $logged_in: TRUE if the user is registered and signed in.

 * - $is_admin: TRUE if the user has permission to access administration pages.

 *

 * Page metadata:

 * - $language: (object) The language the site is being displayed in.

 *   $language->language contains its textual representation.

 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.

 * - $head_title: A modified version of the page title, for use in the TITLE tag.

 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and

 *   so on).

 * - $styles: Style tags necessary to import all CSS files for the page.

 * - $scripts: Script tags necessary to load the JavaScript files and settings

 *   for the page.

 * - $body_classes: A set of CSS classes for the BODY tag. This contains flags

 *   indicating the current layout (multiple columns, single column), the current

 *   path, whether the user is logged in, and so on.

 *

 * Site identity:

 * - $front_page: The URL of the front page. Use this instead of $base_path,

 *   when linking to the front page. This includes the language domain or prefix.

 * - $logo: The path to the logo image, as defined in theme configuration.

 * - $site_name: The name of the site, empty when display has been disabled

 *   in theme settings.

 * - $site_slogan: The slogan of the site, empty when display has been disabled

 *   in theme settings.

 * - $mission: The text of the site mission, empty when display has been disabled

 *   in theme settings.

 *

 * Navigation:

 * - $search_box: HTML to display the search box, empty if search has been disabled.

 * - $primary_links (array): An array containing primary navigation links for the

 *   site, if they have been configured.

 * - $secondary_links (array): An array containing secondary navigation links for

 *   the site, if they have been configured.

 *

 * Page content (in order of occurrance in the default page.tpl.php):

 * - $left: The HTML for the left sidebar.

 *

 * - $breadcrumb: The breadcrumb trail for the current page.

 * - $title: The page title, for use in the actual HTML content.

 * - $help: Dynamic help text, mostly for admin pages.

 * - $messages: HTML for status and error messages. Should be displayed prominently.

 * - $tabs: Tabs linking to any sub-pages beneath the current page (e.g., the view

 *   and edit tabs when displaying a node).

 *

 * - $content: The main content of the current Drupal page.

 *

 * - $right: The HTML for the right sidebar.

 *

 * Footer/closing data:

 * - $feed_icons: A string of all feed icons for the current page.

 * - $footer_message: The footer message as defined in the admin settings.

 * - $footer : The footer region.

 * - $closure: Final closing markup from any modules that have altered the page.

 *   This variable should always be output last, after all other dynamic content.

 *

 * @see template_preprocess()

 * @see template_preprocess_page()

 */

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">



<head>

  <title><?php if ( substr( $head_title, 0, 12 ) == 'Home Page | ' ) { print substr( $head_title, 12 ); } else { print $head_title; }; ?></title>

  <?php print $head; ?>

  <?php print $styles; ?>
  
  <!--[if IE 6]>
  <style type="text/css">
	a.imagecache img { visibility: hidden; } /*hides rounded corners but necessary because IE6 can't handle transparency in PNGs*/

	/* fixes column alignment on blog page */
	body.page-blog li.node_read_more, body.page-node.node-type-blog li.node_read_more { clear: left; }
	body.page-blog div#navbar, body.page-node.node-type-blog div#navbar { clear: left; }
	body.page-blog div#sidebar-left, body.page-node.node-type-blog div#sidebar-left { width: 290px; margin-right: 9px; margin-left: 0; display: inline; clear: left; }
	body.page-blog div#content, body.page-node.node-type-blog div#content { position: relative; left: 270px; margin-right: 6px; margin-left: 0; width: 480px; }
	body.page-blog div#sidebar-right, body.page-node.node-type-blog div#sidebar-right { position: relative; left: 258px; margin-left: 0; }
  </style>
  <![endif]-->

  <?php print $scripts; ?>

  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyled Content in IE */ ?> </script>
  <script type="text/javascript" src="http://joidesresolution.org/sites/all/themes/joides_blue/js/iframeResize.js"></script>
  <script type="text/javascript" src="http://joidesresolution.org/sites/all/themes/joides_blue/js/jquery.backstretch.js"></script>
  
  <?php if ($is_front) {?>
  	<meta name="description" content="Research vessel studying Earth's oceans and paleoclimate through scientific drilling. Part of the Integrated Ocean Drilling Program." />
  <?php }; ?>

<!-- This supplemental Google Analytics tracking code is intended to feed JR information into an Ocean Leadership roll-up GA account in addition to the JR account that is operated through the Google Analytics module. This code was provided by Will Ramos on 1-3-2014. -->
<!-- Start Google Analytics tracking code -->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-8178935-1']);
  _gaq.push(['_trackPageview']);
  _gaq.push(['_setDomainName', ',joidesresolution.org']);
  _gaq.push(['_setAllowLinker', true]);


  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['rollup._setAccount', 'UA-46802625-1']);
  _gaq.push(['rollup._trackPageview']);
  _gaq.push(['rollup._setDomainName', 'joidesresolution.org']);
  _gaq.push(['rollup._setAllowLinker', true]);


  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!-- End Google Analytics tracking code -->
</head>

<body class="<?php print implode(' ',$classes_array); ?>">


  <div id="page"><div id="page-inner">



    <a name="top" id="navigation-top"></a>

    <?php if ($primary_links or $secondary_links or $nav_bar): ?>

      <div id="skip-to-nav"><a href="#navigation"><?php print t('Skip to Navigation'); ?></a></div>

    <?php endif; ?>


    <div id="wrap-header">
    
    <div id="header">
    
        <?php if ($top_bar): ?>

    	  <div id="top-bar"><?php print $top_bar; ?></div>

	    <?php endif; ?>

		<div id="header-inner" class="clear-block">
        
          <?php if ($logo or $site_name or $site_slogan): ?>

    	    <div id="logo-title">



	        <?php if ($logo): ?>

            	<div id="logo">

                	 <div id="logo-inner">       

                        <a href="<?php print $base_path; ?>" title="<?php print t('Home'); ?>" rel="home""><img src="/sites/all/themes/joides_blue/images/logo-new.png" alt="<?php print t('JOIDES Resolution Ocean Drilling Research Vessel home page'); ?>" id="logo-image" /></a>
                                               
                    </div>
                        
                        <img src="/sites/all/themes/joides_blue/images/header-ship-globe.png" alt="Ship and globe logo" class="globe" />
                        
                </div>

    	      <?php endif; ?>



	          <?php if ($site_name): ?>

            	<?php if ($is_front): ?>

        	      <h1 id="site-name">

    	            <a href="<?php print $base_path; ?>" title="<?php print t('Home'); ?>" rel="home">

	                <?php print $site_name; ?>

                	</a>

            	  </h1>

        	    <?php else: ?>

    	          <div id="site-name"><strong>

	                <a href="<?php print $base_path; ?>" title="<?php print t('Home'); ?>" rel="home">

                	<?php print $site_name; ?>

            	    </a>

        	      </strong></div>

    	        <?php endif; ?>


        	  <?php if ($site_slogan): ?>

    	        <div id="site-slogan"><?php print $site_slogan; ?></div>

	          <?php endif; ?>



        	</div> <!-- /#logo-title -->

    	  <?php endif; ?>



	      <?php if ($header): ?>

        	<div id="header-blocks" class="region region-header">

        	  <?php print $header; ?>

    	    </div> <!-- /#header-blocks -->

 	     <?php endif; ?>

      

      <?php endif; ?>



    </div></div></div><!-- /#header-inner, /#header, /#wrap-header -->



    <div id="main"><div id="main-inner" class="clear-block<?php if ($search_box or $primary_links or $secondary_links or $nav_bar) { print ' with-navbar'; } ?>">



            <?php if ($search_box or $primary_links or $secondary_links or $nav_bar): ?>

        <div id="navbar"><div id="navbar-inner" class="region region-navbar">



          <a name="navigation" id="navigation"></a>



          <?php if ($search_box): ?>

            <div id="search-box">

              <?php print $search_box; ?>

            </div> <!-- /#search-box -->

          <?php endif; ?>



          <?php if ($primary_links): ?>

            <div id="primary">

              <?php //print theme('links', $primary_links); ?>
              <?php print $nav_bar; ?>

            </div> <!-- /#primary -->

          <?php endif; ?>



          <?php if ($secondary_links): ?>

            <div id="secondary">

              <?php //print theme('links', $secondary_links); ?>

            </div> <!-- /#secondary -->

          <?php endif; ?>



          <?php //print $nav_bar; ?>



        </div></div> <!-- /#navbar-inner, /#navbar -->

      <?php endif; ?>



      <?php if ($left): ?>

        <div id="sidebar-left"><div id="sidebar-left-inner" class="region region-left">

          <?php print $left; ?>

        </div></div> <!-- /#sidebar-left-inner, /#sidebar-left -->

      <?php endif; ?>
      
      
      <div id="content"><div id="content-inner">
      
      	<div id="breadcrumb"><?php print $breadcrumb; ?></div>

        <?php if ($mission): ?>

          <div id="mission"><?php print $mission; ?></div>

        <?php endif; ?>



        <?php if ($content_top): ?>

          <div id="content-top" class="region region-content_top">

            <?php print $content_top; ?>

          </div> <!-- /#content-top -->

        <?php endif; ?>



        <?php if ($breadcrumb or $title or $tabs or $help or $messages): ?>

          <div id="content-header">

            <?php if ($title): ?>

              <h1 class="title"><?php print $title; ?></h1>

            <?php endif; ?>

            <?php print $messages; ?>

            <?php if ($tabs): ?>

              <div class="tabs"><?php print $tabs; ?></div>

            <?php endif; ?>

            <?php print $help; ?>

          </div> <!-- /#content-header -->

        <?php endif; ?>



        <div id="content-area">

          <?php print $content; ?>

        </div>



        <?php if ($feed_icons): ?>

          <div class="feed-icons"><?php print $feed_icons; ?></div>

        <?php endif; ?>



        <?php if ($content_bottom): ?>

          <div id="content-bottom" class="region region-content_bottom">

            <?php print $content_bottom; ?>

          </div> <!-- /#content-bottom -->

        <?php endif; ?>



      </div></div> <!-- /#content-inner, /#content -->

      <?php if ($right): ?>

        <div id="sidebar-right"><div id="sidebar-right-inner" class="region region-right">
          <?php print $right; ?>

        </div></div> <!-- /#sidebar-right-inner, /#sidebar-right -->

      <?php endif; ?>



    </div></div> <!-- /#main-inner, /#main -->


  </div></div> <!-- /#page-inner, /#page -->


    <?php if ($footer or $footer_message): ?>

      <div id="footer"><div id="footer-inner" class="region region-footer">



        <?php if ($footer_message): ?>

          <div id="footer-message"><?php print $footer_message; ?></div>

        <?php endif; ?>



        <?php print $footer; ?>



      </div></div> <!-- /#footer-inner, /#footer -->

    <?php endif; ?>







<script>

<!--


/**
 * @deprecated
 * $('body.front .panel-col-top h2.title').removeClass('title').addClass('angelina').prepend('&nbsp;');
 * $('body.not-front #sidebar-right .field-item').prepend('- ').addClass('angelina').css({'font-size':'20px','line-height':'20px'});
*/

$('body.front #sidebar-right .menu li').prepend('- ');

$('body.front #sidebar-right #block-menu-menu-teachers').append(

	$('body.front #sidebar-right #block-menu-menu-teachers li.last a').attr('title')

);



$('#sidebar-right .views-field-field-teaserimage-fid img').each( function() {

	var div = document.createElement("div");

	var bgstr = 'url(\"'+$(this).attr('src')+'\") top left no-repeat';

	$(div).css('background',bgstr);

	$(this).wrap(div);

	$(this).attr('src','/sites\/all\/themes\/joides_blue\/img\/mask_80x80.png');

});



$('a.imagecache-80x80_parent_teaser img').each( function() {

	var div = document.createElement("div");

	var bgstr = 'url(\"'+$(this).attr('src')+'\") top left no-repeat';

	$(div).css('background',bgstr);

	$(this).wrap(div);

	$(this).attr('src','/sites\/all\/themes\/joides_blue\/img\/mask_80x80.png');

});



$('.imagecache-150x175_crew_science_party img').each( function() {

	var div = document.createElement("div");

	var bgstr = 'url(\"'+$(this).attr('src')+'\") top left no-repeat';

	$(div).css('background',bgstr);

	$(this).wrap(div);

	$(this).attr('src','/sites\/all\/themes\/joides_blue\/img\/mask_150x175.png');

});



$('.imagecache-220x185_triple-blocks img').each( function() {

	var div = document.createElement("div");

	var bgstr = 'url(\"'+$(this).attr('src')+'\") top left no-repeat';

	$(div).css('background',bgstr);

	$(this).wrap(div);

	$(this).attr('src','/sites\/all\/themes\/joides_blue\/img\/mask_220x185.png');

});



$('.view-crew-member-list .views-field-field-teaserimage-fid img').each( function() {

	var div = document.createElement("div");

	var bgstr = 'url(\"'+$(this).attr('src')+'\") top left no-repeat';

	$(div).css('background',bgstr);

	$(this).wrap(div);

	$(this).attr('src','/sites\/all\/themes\/joides_blue\/img\/mask_150x175.png');

});



$('#sidebar-right h2.title').each(function () {

	str = $(this).text();

	$(this).text(str.toUpperCase());

});



$('.view-teacher-resource-list-view div.item-list').after('<br clear="all" />');

$('.view-news-story-teaser-list-view div.view-content').children('div').after('<br clear="all" />');



$('#edit-search-block-form-1').attr('value','search').css('color','gray').bind('focus', function(){

      $(this).attr('value','').css('color','black').unbind('focus');

});



$('#top-bar #edit-submit').hide().after('<input type=\"image\" src=\"\/sites\/default\/files\/magnifying_glass.gif\" class="form-submit" \/>');

$('.highlighted-teaser iframe').each( function() {
	$(this).parents('div.highlighted-teaser').css('width','450px');
	$(this).parents('div.highlighted-teaser').css('top','38px');
});

//$('html').css('max-height', $('#page').height());
//$.backstretch('http://joidesresolution.org/sites/all/themes/joides_blue/images/bg-water.jpg', {centeredY: false});

// -->

</script>

<script src="/sites/all/themes/joides_blue/js/dev-fixes.js" type="text/javascript"></script>



  <?php if ($closure_region): ?>

    <div id="closure-blocks" class="region region-closure"><?php print $closure_region; ?></div>

  <?php endif; ?>



  <?php print $closure; ?>



</body>

</html>