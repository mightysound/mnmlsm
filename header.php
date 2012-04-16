<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
  <title><?php if (is_home () ) { bloginfo('name'); } elseif ( is_category() ) { single_cat_title(); echo " - "; bloginfo('name'); } elseif (is_single() || is_page() ) { single_post_title(); echo "x"; } elseif (is_search() ) { bloginfo('name'); echo " search results: "; echo wp_specialchars($s); } else { wp_title('',true); } ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="alternate" type="application/rss+xml" title="Blog RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Blog Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<?php wp_head(); ?>

<!-- HN -->
<script>
	(function() {
		var hn = document.createElement('script'); hn.type = 'text/javascript';
		hn.async = true; hn.src = 'http://hnbutton.appspot.com/static/hn.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(hn, s);
	})();
</script>
<!-- HN -->
</head>

<body>


<!-- FB Like -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=183757341703770";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- FB Like -->


<header id="simple"> 
	<h1><a href="<?php echo get_settings('home'); ?>">ahmetalpbalkan</a></h1>
	<h2>I'm a computer engineering student.</h2>
	<ul id="user_info">
		<li class="website"><a href="http://ahmetalpbalkan.com">about</a></li>
		<li class="twitter"><a href="http://twitter.com/ahmetalpbalkan" rel='nofollow'>@ahmetalpbalkan</a></li>
		<li class="email"><a href='mailto&#58;ahme&#116;al&#37;70b&#97;l%&#54;Ban&#64;&#103;mail%2E%63om&#63;&#115;ubject%3D&#37;68i' rel='nofollow'>say hello</a></li>
		<li class="rss"><a href="<?php bloginfo('rss2_url'); ?>">rss feed</a></li>
	</ul>
	<p class="copyleft">Theme 
		<!--[if lte IE 8]><span style="filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2); display: inline-block;"><![endif]--><span class="copyleftRSS">&copy;</span>
		<!--[if lte IE 8]></span><![endif]-->
		 by <a href="http://www.rss-ems.com/blog" rel='nofollow'>RSS</a>.
			<a href='https://github.com/ahmetalpbalkan/mnmlsm' rel='nofollow'>Fork it</a>.
	</p>
</header>
