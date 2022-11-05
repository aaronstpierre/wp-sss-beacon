<?php
/**
* Plugin Name: Saintly Solutions Support 
* Plugin URI: https://saintlysolutions.com 
* Description: Saintly Solutions Support Beacon 
* Version: 0.1
* Requires at least: 5.2
* Author: Saintly Solutions
* Author URI: https://saintlysolutions.com
* Update URI: https://saintlysolutions.com/support
* Text Domain: saintly-solutions-support
* Domain Path: /languages
**/

// render HS beacon 
function ss_hs_beacon() {
?>
	<!-- Helpscout -->
		<script type="text/javascript">!function(e,t,n){function a(){var e=t.getElementsByTagName("script")[0],n=t.createElement("script");n.type="text/javascript",n.async=!0,n.src="https://beacon-v2.helpscout.net",e.parentNode.insertBefore(n,e)}if(e.Beacon=n=function(t,n,a){e.Beacon.readyQueue.push({method:t,options:n,data:a})},n.readyQueue=[],"complete"===t.readyState)return a();e.attachEvent?e.attachEvent("onload",a):e.addEventListener("load",a,!1)}(window,document,window.Beacon||function(){});</script>
		<script type="text/javascript">window.Beacon('init', 'cf574745-d105-4ca1-9b19-b7be47eb2f7f')</script>
	<!-- Helpscout -->
<?php
}
add_action( 'admin_footer', 'ss_hs_beacon' ); // For back-end
