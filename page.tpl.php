<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="
<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyled Content in IE */ ?> </script>
</head>

<body class="<?php print $body_classes; ?>">

	<!-- header starts-->
	<div id="header-wrap"><div id="header" class="container_16">						
		
		<h1 id="logo-text"><a href="<?php print $front_page ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a></h1>
		<p id="intro"><?php print $site_slogan; ?></p>
		
		<!-- navigation -->
		<div  id="nav">
			<?php if (!empty($primary_links)): ?>
          <div id="primary" class="clear-block">
            <?php print theme('links', $primary_links, array('class' => 'links primary-links')); ?>
          </div>
        <?php endif; ?>
		</div>		
		
		<div id="header-image"></div>
		<div class="header-region-div"><?php print $header_region ?></div>
	<!-- header ends here -->
	</div></div>
	<!-- content starts -->
	<div id="content-outer"><div id="content-wrapper" class="container_16">
	
		<!-- main -->
		<div id="main" class="grid_8">
          <?php if (!empty($title)): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
          <?php if (!empty($tabs)): ?><div class="tabs"><?php print $tabs; ?></div><?php endif; ?>
          <?php if (!empty($messages)): print $messages; endif; ?>
          <?php if (!empty($help)): print $help; endif; ?>
          <?php print $content; ?>
			<div class="clear">&nbsp;</div>
			<div class="grid_4 alpha"><?php print $content_left ?></div>
			<div class="grid_4 omega"><?php print $content_right ?></div>
		</div>
		<!-- main ends -->
		
		<!-- right-columns starts -->
		<div id="left-columns" class="grid_8">
		<?php if (!empty($sidebar_left)): ?>
			<div class="grid_4 alpha">
				<div class="sidemenu">
				<?php print $sidebar_left ?>
				</div>
			</div>
		<?php endif; ?>
		
		<?php if (!empty($sidebar_left)): ?>
			<div class="grid_4 omega">
				<div class="featured-post">
				<?php print $sidebar_right ?>				
		
			<?php endif; ?>
			</div>
			</div>
		<!-- end right-columns -->
		</div>		
	
	<!-- contents end here -->	
	</div></div>

	<!-- footer starts here -->	
	<div id="footer-wrapper" class="container_16">
		<div id="footer-content">
			<div class="grid_8">
			<?php print $footer_left ?>		
			</div>
			<div class="grid_8">
			<?php print $footer_right ?>
			</div>	
		</div>
	
		<div id="footer-bottom">
			<p class="bottom-left">		
			&nbsp; &copy;2010 <a href="http://shtrak.eu/it" title="Drupal theming"> Drupal theming</a> by Kalin Chernev. Thanks to 
			<a href="http://www.bluewebtemplates.com/" title="Website Templates">website templates</a> by <a href="http://www.styleshout.com/">styleshout</a>
			</p>	
			<p class="bottom-right" >
				<a href="#">Home</a> |
				<a href="#">Sitemap</a> |
				<a href="#">RSS Feed</a> |						
				<a href="#">CSS</a> | 
		   	    <a href="#">XHTML</a>
			</p>
		</div>	
	</div>
	<!-- footer ends here -->
	<div id="footer">
        <?php print $footer_message; ?>
        <?php if (!empty($footer)): print $footer; endif; ?>
		<?php print $closure; ?>
</body>
</html>
