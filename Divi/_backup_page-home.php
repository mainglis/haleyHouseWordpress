<?php
session_start();
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Haley House is a Boston-based nonprofit organization that uses food as a vehicle to help alleviate suffering, build new skills and bring communities together." />
	<meta name="keywords" content="Haley House" />
	<meta name="robots" content="index, follow" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="stylesheet" type="text/css" media="screen" href="/css/style_test.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="/css/foodstyle.css" />
	<style>
		/* Override wordpress default settings */
		html {
			overflow-x: hidden !important;
		}
		body {
			overflow: hidden !important;
		}
		/* No logo on this page, already there! */
		#logo {
			display: none;
		}
		/* No overlap overrides header settings */
		#main-header {
			z-index: 5 !important;
			/* no fix because vertical menu isn't */
			position: absolute !important;
		}
	</style>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="/js/jquery_haleyhouse.js"></script>
	<script type="text/javascript" src="/js/jquery_indexpage_test.js"></script>
    <!--[if lt IE 7]>
	<style type="text/css">
	  .photo span { behavior: url(iepngfix.htc); } 

	</style>
	<![endif]--><!-- InstanceBeginEditable name="doctitle" -->
<title>Haley House</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<!--
	<script type="text/javascript">
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-24014519-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
-->
</head>

<?php

get_header();

$is_page_builder_used = et_pb_is_pagebuilder_used( get_the_ID() ); ?>

<div id="main-content">

</head>
<body id="none">
<style type="text/css">

#sidebar #banner {
	padding: 5px;
	width: 250px;
	height: 125px;
	border-width:2px 2px;
	-webkit-border-radius: 30px;
	-moz-border-radius: 30px;
	border-radius: 30px;
	border:solid thin #6FE0E8; 
	margin-left:55%;
	
}
</style>

<div id="sidebar">
	<div class="row-1">
<!-- Change this href when migrating to main domain! -->
			<a href="/wp"><img id="sidebarlogo" src="/background_images/mainlogo.png"></a>
			<a href="https://www.facebook.com/events/304403386383990/" target="_blank"><div id="promo">Join us on June 27 for Dinner & A Movie featuring Adelante</div></a>
	</div>

	<div class="row-2" id="mission_nav">
		<a href="/wp/about-us/mission/"><div id="believe"><img src="/background_images/we_believe_off.png"></div></a>
		<div id="in"><img src="/background_images/in.png"></div>
		<a href="/bakery-cafe/"><div id="food"><img src="/background_images/food_with_purpose_off.png"></div></a>
		<div id="the"><img src="/background_images/the.png"></div>
		<a href="/housing"><div id="community"><img src="/background_images/power_of_community_off.png"></div></a>
	</div>

	<div class="row-3">
		<div id="action_nav">
			<ul id="action_menu">
			<li><a href="/give" class="give">give</a></li>
			<li><a href="/volunteer" class="volunteer">volunteer</a></li>
			<li><a href="/catering"  class="catering">catering</a></li>
			<li><a href="/calendar" class="updates">updates</a></li>
			<li><a href="http://www.facebook.com/pages/Haley-House-Bakery-Cafe/170929453273?v=info" class="facebook">Facebook</a></li>
			<li><a href="http://twitter.com/hhbakerycafe" class="twitter">Twitter</a></li>
			<li><a href="#" class="newsletter" id="newsletterSide">Subscribe to Newsletter</a></li>
			</ul>
		</div>
		<div id="flagbend"></div>
	</div>
</div>
<!--<div id="flagbend"></div>-->
    
<div id="main">
 <div id="rightpanel">
<!-- InstanceBeginEditable name="main" -->

<div id="debug"></div>
<div id="rightpanelindex">
<img class="main-image" src="/images/home_1.jpg">
<img class="main-image" src="/images/home_2.jpg">
<img class="main-image" src="/images/home_3.jpg">
<img class="main-image" src="/images/home_4.jpg">
<img class="main-image" src="/images/home_5.jpg">
<img class="main-image" src="/images/home_6.jpg">
</div>

<!-- InstanceEndEditable -->
</div><!-- rightcontent end -->

  <div class="popup">
   <div id="sidebarbackground"></div>
   <span class="closebutton"><a href="#">close</a></span>
   <div id="newsletter_screen"> 
    <ul>

<form method="post" action="http://oi.vresp.com?fid=4f32627452" target="vr_optin_popup" onsubmit="window.open( 'http://www.verticalresponse.com', 'vr_optin_popup', 'scrollbars=yes,width=600,height=450' ); return true;" >


      
      <li><p> <input type="submit" value="Join Mailing List" style="border: 1px solid #999; padding: 3px;"/></p></li>
      <li><p><a href="#" id="newsletter_close">Close</a></p></li>

</form>

    </ul> 
   </div>    
  </div>
</div><!-- rightpanel end -->
</div><!-- main end --> 
</body>
<!-- InstanceEnd --></html>

</div> <!-- #main-content -->
