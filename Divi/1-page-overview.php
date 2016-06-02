<?php
session_start();
?>
<?php

get_header();

$is_page_builder_used = et_pb_is_pagebuilder_used( get_the_ID() ); ?>

<div id="main-content">
<!-- If this breaks things, uncomment, otherwise, DELETE when optimizing
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

-->

<div id="sidebar">
	<div class="row-1">
<!-- Change this href when migrating to main domain! -->
			<a href="/wp"><img id="sidebarlogo" src="/background_images/mainlogo.png" alt="Haley House Logo"></a>
			<a href="https://www.facebook.com/events/304403386383990/" target="_blank"><div id="promo">Join us on June 27 for Dinner & A Movie featuring Adelante</div></a>
	</div>

	<div class="row-2" id="mission_nav">
		<a href="/wp/about-us/mission/"><div id="believe"><img class="hidden" src="/background_images/we_believe_off.png" alt="we believe"></div></a>
		<div id="in"><img class="hidden" src="/background_images/in.png" alt="in"></div>
		<a href="/bakery-cafe/"><div id="food"><img class="hidden" src="/background_images/food_with_purpose_off.png" alt="food with purpose and"></div></a>
		<div id="the"><img class="hidden" src="/background_images/the.png" alt="the"></div>
		<a href="/housing"><div id="community"><img class="hidden" src="/background_images/power_of_community_off.png" alt="power of community"></div></a>
	</div>

	<div class="row-3">
		<div id="action_nav">
			<img class="hidden" src="/background_images/greenflag_cropped.png">
			<ul id="action_menu">
				<li><a href="/give" class="give">give</a></li>
				<li><a href="/volunteer" class="volunteer">volunteer</a></li>
				<li><a href="/catering"  class="catering">catering</a></li>
				<li class="text-hide"><a href="http://www.facebook.com/pages/Haley-House-Bakery-Cafe/170929453273?v=info" class="facebook"><img class="hidden" src="/background_images/Facebook_cropped.png" alt="Facebook"></a></li>
				<li class="text-hide"><a href="http://twitter.com/hhbakerycafe" class="twitter"><img class="hidden" src="/background_images/twitter_cropped.png" alt="Subscribe to newsletter"></a></li>
				<li class="text-hide"><a href="#" class="newsletter" id="newsletterSide"><img class="hidden" src="/background_images/newsletter_cropped.png" alt="Subscribe to newsletter"></a></li>
			</ul>
		</div>
		<div id="flagbend"></div>
	</div>
</div>
<!--<div id="flagbend"></div>-->
    
<div id="main">
<div id="rightpanel">
	<?php
		the_content();
	?>
</div><!-- rightpanel end -->
</div><!-- main end --> 
<!-- InstanceEnd --></html>

