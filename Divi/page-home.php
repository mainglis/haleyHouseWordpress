<?php
session_start();
?>

<?php
get_header();
?>

<div id="main-content">

<div id="sidebar">
	<div class="row-1">
			<a href="/"><img id="sidebarlogo" src="/background_images/mainlogo.png" alt="Haley House Logo"></a>
			<a href="<?php echo $PROMO_LINK ?>" target="_blank"><div id="promo"><?php echo $PROMO_TEXT ?></div></a>
	</div>

	<div class="row-2" id="mission_nav">
		<a href="/about-us/mission/"><div id="believe"><img class="hidden" src="/background_images/we_believe_off.png" alt="we believe"></div></a>
		<div id="in"><img class="hidden" src="/background_images/in.png" alt="in"></div>
		<a href="/what-we-do/"><div id="food"><img class="hidden" src="/background_images/food_with_purpose_off.png" alt="food with purpose and"></div></a>
		<div id="the"><img class="hidden" src="/background_images/the.png" alt="the"></div>
		<a href="/who-we-are/people/"><div id="community"><img class="hidden" src="/background_images/power_of_community_off.png" alt="power of community"></div></a>
	</div>

	<div class="row-3">
		<div id="action_nav">
			<img class="hidden" alt="greenflag" src="/background_images/greenflag_cropped.png">
			<ul id="action_menu">
				<li><a href="/give/donate/" class="give">give</a></li>
				<li><a href="/give/volunteer/" class="volunteer">volunteer</a></li>
				<li><a href="/what-we-do/catering/" class="catering">catering</a></li>
				<li class="text-hide facebook"><a href="http://www.facebook.com/pages/Haley-House-Bakery-Cafe/170929453273?v=info"><img class="hidden" src="/background_images/Facebook_cropped.png" alt="Facebook"></a></li>
				<li class="text-hide twitter"><a href="http://twitter.com/hhbakerycafe"><img class="hidden" src="/background_images/twitter_cropped.png" alt="Subscribe to newsletter"></a></li>
				<li class="text-hide newsletter"><a href="#" id="newsletterSide"><img class="hidden" src="/background_images/newsletter_cropped.png" alt="Subscribe to newsletter"></a></li>
			</ul>
		</div>
		<div id="flagbend"></div>
	</div>
</div>
    
<div id="main">
<div id="rightpanel">
<div id="rightpanelindex">
<div class="main-image" id="img1"></div>
<div class="main-image" id="img2"></div>
<div class="main-image" id="img3"></div>
<div class="main-image" id="img4"></div>
<div class="main-image" id="img5"></div>
<div class="main-image" id="img6"></div>
</div>

</div>

  <div class="popup">
   <div id="sidebarbackground"></div>
   <span class="closebutton"><a href="#">close</a></span>
   <div id="newsletter_screen"> 
    <ul>
	<li>
<!-- FIXME change when migrating to main domain!!!! -->
	<form action="/mailing-list">
		<button type="submit" style="border: 1px solid #999; padding: 3px;">Join Our Mailing List</button>
	</form>
	</li>
	<li>
<form action="/contact-us">
	<button type="submit" style="border: 1px solid #999; padding: 3px;">Contact Us</button>
</form>
	</li>
    </ul> 
   </div>    
  </div>
</div>
</div>
<!-- Override custom js for home page -->
<script type='text/javascript' src='http://haleyhouse.org/wp-content/themes/Divi/js/custom.js?ver=1.0'></script>
<script type="text/javascript" src="/js/jquery_haleyhouse.js"></script>
</html>
