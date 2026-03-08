<!DOCTYPE html>


<html lang="en">
  <head>

    <meta charset="UTF-8" /> 
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Home</title>
	 <script>
  
  // Insert dynamic year
    document.addEventListener("DOMContentLoaded", function() {
      const yearElement = document.getElementById("year");
      const currentYear = new Date().getFullYear();
      if (yearElement) {
        yearElement.textContent = currentYear;
      }
    });
	</script>
    <!-- Font Awesome -->
	 <!--
  <link 
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
-->

<!-- Core Highcharts -->
<script src="./assets_adq/js/Highcharts_v12.4.0_min.js"></script>
<script src="./assets_adq/js/Highcharts-more_v2.4.0.min.js"></script>
<script src="./assets_adq/js/Highcharts-solid-gauge_v12.4.0_min.js"></script>

<!-- For more chart types if needed -->


  

  <!-- api -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="/opt/js/DarkMode.js" async></script>
    <!DOCTYPE html>
<html lang="en">
<head>

    <!-- Prevent form resubmission -->
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
		
		// var isDarkMode;
		// isDarkMode = localStorage.getItem("isDarkMode") === "true";
		// if (isDarkMode === true) {
			// $("body").addClass("dark-theme");
			// $("#theme-toggle").prop("checked", true);
		// }
		
		// $("#theme-toggle").click(function() {
			// if ($("body").hasClass("dark-theme")) {
				// $("body").removeClass("dark-theme");
				// localStorage.setItem("isDarkMode", false);
				// isDarkMode = false;
				// // setLightModeOptions();
			// } else {
				// $("body").addClass("dark-theme");
				// localStorage.setItem("isDarkMode", true);
				// isDarkMode = true;
				// // setDarkModeOptions();
			// }
		// });  
    </script>

    <!-- Meta tags --> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- Stylesheets -->
    <link href="sm-core-css.css" rel="stylesheet" type="text/css">
    <link href="blue.css?version=6" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/opt/css/Material_icon.css?4">
    <link rel="stylesheet" href="/opt/css/TopMenuJson_offer.css?4">
<!--
    <link rel="stylesheet" href="/opt/css/TopMenuJson.css">
-->
	
	
    <link rel="stylesheet" href="assets/mdl/material.indigo-pink.min.css?4">
    

    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Scripts --> 
    <script src="jquery2.js"></script>
    <script src="assets/mdl/material.min.js?4"></script>

  <script src="/opt/js/DarkTheme.js?8"></script>
    <!--   <script src="/opt/js/DarkMode.js"></script>
	<link rel="stylesheet" href="css/dark-theme_v1.css?v=7.84">
	
	 -->  

	

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZN58C89YGF"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ZN58C89YGF');
</script>


<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '2048886098880661');
fbq('track', 'PageView');
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TZ4648NQ');</script>
<!-- End Google Tag Manager -->

	
</head>
<body>
    
    <nav id="main-nav">
        <input id="main-menu-state" type="checkbox">
        <label class="main-menu-btn" for="main-menu-state"><span class="main-menu-btn-icon"></span> Toggle main menu visibility</label>
        <ul id="main-menu" class="sm sm-blue"></ul>
    </nav>
	

<input name="RenewalDateDifference" id='RenewalDateDifference' type="hidden" value="28" />
    <script type="text/javascript">
        var menuHTML = "<li id='Home' class=''><a href='\/opt\/index.php' target=''>Home<\/a><\/li><li id='Futures' class=''><a href='#' target=''>Futures<\/a><ul><li id='' class=''><a href='\/opt\/FnOCharts.php' target=''>FnO Charts (TradingView)<\/a><\/li><li id='' class=''><a href='\/opt\/SymbolDashboard.php' target=''><img class='new-icon' src='\/opt\/images\/newicon.png' alt='icon' \/> Symbol Dashboard<\/a><\/li><li id='' class=''><a href='\/opt\/FuturesChart.php' target=''>Futures Chart<\/a><\/li><li id='' class=''><a href='\/opt\/FuturesOIBuildup.php' target=''>OI Buildup<\/a><\/li><li id='' class=''><a href='\/opt\/FuturesOIScan.php' target=''>OI Scan<\/a><\/li><li id='' class=''><a href='\/opt\/ScripsInUptrendDowntrend.php' target=''><img class='new-icon' src='\/opt\/images\/newicon.png' alt='icon' \/> Scrips In Uptrend \/ Downtrend<\/a><\/li><li id='' class=''><a href='\/opt\/FuturesOIBreakup.php' target=''>OI Breakup<\/a><\/li><li id='' class=''><a href='\/opt\/OpenHighLowScan.php' target=''>Open-High \/ Open-Low<\/a><\/li><li id='' class=''><a href='\/opt\/FuturesPreopen.php' target=''><img class='new-icon' src='\/opt\/images\/newicon.png' alt='icon' \/> Futures Preopen<\/a><\/li><li id='' class=''><a href='\/opt\/DaywiseSummary.php' target=''>Daywise Price & OI Summary<\/a><\/li><li id='' class=''><a href='\/opt\/DaywiseDetails.php' target=''>Daywise Price & OI Details<\/a><\/li><li id='' class=''><a href='\/opt\/VolumeAndOISpikesScan.php' target=''>Volume \/ OI \/ OI Chg Spikes<\/a><\/li><li id='' class=''><a href='\/opt\/Heatmap.php' target=''>Heatmap<\/a><\/li><li id='' class=''><a href='\/opt\/FuturesRollover.php' target=''>Futures Rollover<\/a><\/li><li id='' class=''><a href='\/opt\/ParticipantsWiseOIDashboard.php' target=''><img class='new-icon' src='\/opt\/images\/newicon.png' alt='icon' \/> Participant Wise OI Dashboard<\/a><\/li><li id='' class=''><a href='\/opt\/ParticipantWiseOITrends.php' target=''>Participant Wise OI Trends<\/a><\/li><li id='' class=''><a href='\/opt\/SectorSummary.php' target=''><img class='new-icon' src='\/opt\/images\/newicon.png' alt='icon' \/> Sector Summary - New<\/a><\/li><li id='' class=''><a href='\/opt\/SupportResistanceScan.php' target=''><img class='new-icon' src='\/opt\/images\/newicon.png' alt='icon' \/> Support\/Resistance Scan - New<\/a><\/li><\/ul><\/li><li id='Options' class=''><a href='#' target=''>Options<\/a><ul><li id='' class=''><a href='\/opt\/FnOCharts.php' target=''>FnO Charts (TradingView)<\/a><\/li><li id='' class=''><a href='\/opt\/OptionsChart.php' target=''>Options Chart<\/a><\/li><li id='' class=''><a href='\/opt\/OptionChain.php' target=''>Options Chain<\/a><\/li><li id='' class=''><a href='\/opt\/OptionChain_Old.php' target=''>Options Chain - Old<\/a><\/li><li id='' class=''><a href='\/opt\/OptionChain_Beta_MinuteWise.php' target=''><img class='new-icon' src='\/opt\/images\/newicon.png' alt='icon' \/> Option Chain - Min-by-Min - New<\/a><\/li><li id='' class=''><a href='\/opt\/PremiumDecay.php' target=''>Premium Decay<\/a><\/li><li id='' class=''><a href='\/opt\/OpenHighLowScanOptions.php' target=''>Open-High \/ Open-Low<\/a><\/li><li id='' class=''><a href='\/opt\/OptionOIStats.php' target=''><img class='new-icon' src='\/opt\/images\/newicon.png' alt='icon' \/> Option OI Stats<\/a><\/li><li id='' class=''><a href='\/opt\/OptionSnapshot.php' target=''>Option Snapshot<\/a><\/li><li id='' class=''><a href='\/opt\/OptionsOIBreakup.php' target=''>Options OI Breakup<\/a><\/li><li id='' class=''><a href='\/opt\/PriceVsOI.php' target=''>Price vs OI<\/a><\/li><li id='' class=''><a href='\/opt\/MultiStrikeOI.php' target=''>Multi Strike OI<\/a><\/li><li id='' class=''><a href='\/opt\/CumulativeOIChange.php' target=''>Cumulative OI Change<\/a><\/li><li id='' class=''><a href='\/opt\/TotalPECEOIDiff.php' target=''>Total PE-CE OI Diff<\/a><\/li><li id='' class=''><a href='\/opt\/TotalPECEOIDiff_Beta.php' target=''><img class='new-icon' src='\/opt\/images\/newicon.png' alt='icon' \/> Total PE-CE OI Diff - New<\/a><\/li><li id='' class=''><a href='\/opt\/MultiStrikePCR.php' target=''><img class='new-icon' src='\/opt\/images\/newicon.png' alt='icon' \/> Multi Strike PCR - New<\/a><\/li><li id='' class=''><a href='\/opt\/MaxPain.php' target=''>Max Pain<\/a><\/li><li id='ivTools' class=''><a href='#' target=''>IV Tools<\/a><ul><li id='' class=''><a href='\/opt\/VolatilitySkew.php' target=''>Volatility Skew<\/a><\/li><li id='' class=''><a href='\/opt\/iv.php' target=''>IV Chart<\/a><\/li><li id='' class=''><a href='\/opt\/iv_hv.php' target=''>IV-HV Chart<\/a><\/li><li id='' class=''><a href='\/opt\/ivr.php' target=''>IVR-IVP Chart<\/a><\/li><li id='' class=''><a href='\/opt\/IVR-IVP-Scan.php' target=''>IVR-IVP Scan<\/a><\/li><\/ul><\/li><\/ul><\/li><li id='Strategies' class=''><a href='#' target=''>Strategies<\/a><ul><li id='' class=''><a href='\/opt\/StrategyBuilder' target=''><img class='new-icon' src='\/opt\/images\/beta_icon_green_v2.png' alt='icon' \/> Strategy Builder<\/a><\/li><li id='' class=''><a href='#' target=''>Straddle \/ Strangle<\/a><ul><li id='' class=''><a href='\/opt\/StraddleSnapshot.php' target=''>Straddle Snapshot<\/a><\/li><li id='' class=''><a href='\/opt\/StraddleCharts.php' target=''>Straddle Charts<\/a><\/li><li id='' class=''><a href='\/opt\/StraddleWatch.php' target=''>Straddle Watch<\/a><\/li><li id='' class=''><a href='\/opt\/StraddleChartsPlus.php' target=''>Straddle Charts Plus<\/a><\/li><li id='' class=''><a href='\/opt\/StraddleComboCharts.php' target=''>Straddle Combo Charts<\/a><\/li><li id='' class=''><a href='\/opt\/MultiStraddleCharts.php' target=''><img class='new-icon' src='\/opt\/images\/newicon.png' alt='icon' \/> Multi Straddles - New<\/a><\/li><li id='' class=''><a href='\/opt\/StraddleChartsTV_Beta.php' target=''><img class='new-icon' src='\/opt\/images\/newicon.png' alt='icon' \/> Straddle Charts (TradingView)- New<\/a><\/li><li id='' class=''><a href='\/opt\/StraddleChartsATM_Beta.php' target=''><img class='new-icon' src='\/opt\/images\/newicon.png' alt='icon' \/> ATM Straddle Chart - New<\/a><\/li><\/ul><\/li><li id='' class=''><a href='#' target=''>Spreads<\/a><ul><li id='' class=''><a href='\/opt\/SpreadChart.php' target=''>Spread Chart<\/a><\/li><li id='' class=''><a href='\/opt\/SpreadChart_TV.php' target=''><img class='new-icon' src='\/opt\/images\/beta_icon_green_v2.png' alt='icon' \/> Spread Chart (TradingView)<\/a><\/li><\/ul><\/li><li id='' class=''><a href='\/opt\/Butterfly.php' target=''>Butterfly<\/a><\/li><li id='' class=''><a href='\/opt\/IronButterfly.php' target=''>Iron Condor \/ Iron Fly<\/a><\/li><li id='' class=''><a href='\/opt\/DoubleCalendar.php' target=''>Double Calendar \/ Diagonal<\/a><\/li><\/ul><\/li><li id='Tools' class=''><a href='#' target=''>Tools<\/a><ul><li id='' class=''><a href='\/opt\/StrategyBuilder' target=''><img class='new-icon' src='\/opt\/images\/beta_icon_green_v2.png' alt='icon' \/> Strategy Builder<\/a><\/li><li id='' class=''><a href='#' target=''>Old Versions<\/a><ul><li id='' class=''><a href='\/opt\/PortfolioTracker.php' target=''>Portfolio Tracker<\/a><\/li><li id='' class=''><a href='\/opt\/FnOCharts_Old.php' target=''>FnO Charts (TradingView) - Old<\/a><\/li><li id='' class=''><a href='\/opt\/OptionOIStats_Old.php' target=''>OI Stats (Prev)<\/a><\/li><li id='' class=''><a href='\/opt\/MultiStrikeOI_prev_version.php' target=''>Multi Strike OI (Prev)<\/a><\/li><li id='' class=''><a href='\/opt\/TotalPECEOIDiff_prev_version.php' target=''>Total PE-CE OI Diff (Prev)<\/a><\/li><li id='' class=''><a href='\/opt\/OptionsOIBreakup_prev_version.php' target=''>Options OI Breakup (Prev)<\/a><\/li><li id='' class=''><a href='\/opt\/PriceVsOI_Old.php' target=''>Price vs OI (Prev)<\/a><\/li><li id='' class=''><a href='\/opt\/CumulativeOIChange_Old.php' target=''>Cumulative OI Change (Prev)<\/a><\/li><li id='' class=''><a href='\/opt\/FuturesOIBreakup_prev_version.php' target=''>OI Breakup (Prev)<\/a><\/li><li id='' class=''><a href='\/opt\/Heatmap_prev_version.php' target=''>Heatmap (Prev)<\/a><\/li><\/ul><\/li><\/ul><\/li><li id='LiveTools' class=''><a href='#' target=''>Live Tools<\/a><ul><li id='' class=''><a href='\/opt\/Brokers.php' target=''>Brokers<\/a><\/li><li id='' class=''><a href='\/opt\/OptionChainRT.php' target=''>Option Chain<\/a><\/li><li id='' class=''><a href='\/opt\/StrategyBuilderRT' target=''><img class='new-icon' src='\/opt\/images\/newicon.png' alt='icon' \/> Strategy Builder<\/a><\/li><li id='' class=''><a href='\/opt\/FnOChartsRT.php' target=''><img class='new-icon' src='\/opt\/images\/beta_icon_green_v2.png' alt='icon' \/> FnO Charts (TradingView)<\/a><\/li><li id='' class=''><a href='\/opt\/OptionTrader.php' target=''><img class='new-icon' src='\/opt\/images\/beta_icon_green_v2.png' alt='icon' \/> Option Trader<\/a><\/li><li id='' class=''><a href='\/opt\/PriceVsOIRT.php' target=''>Price Vs OI<\/a><\/li><li id='' class=''><a href='\/opt\/StraddleChartsRT_TV.php' target=''><img class='new-icon' src='\/opt\/images\/newicon.png' alt='icon' \/> Straddle Charts (TradingView)<\/a><\/li><li id='' class=''><a href='\/opt\/StraddleChartsRT.php' target=''>Straddle Charts<\/a><\/li><li id='' class=''><a href='\/opt\/MultiStraddleChartsRT.php' target=''><img class='new-icon' src='\/opt\/images\/newicon.png' alt='icon' \/> Multi Straddle Charts<\/a><\/li><li id='' class=''><a href='\/opt\/PriceAndOISummaryRT.php' target=''>Price And OI Summary<\/a><\/li><li id='' class=''><a href='\/opt\/OpenHighLowScanRT.php' target=''>Futures Open-High \/ Open-Low<\/a><\/li><li id='' class=''><a href='\/opt\/FuturesOIBuildupRT.php' target=''>Futures OI Buildup<\/a><\/li><li id='' class=''><a href='\/opt\/OptionOIStatsRT.php' target=''>Option OI Stats<\/a><\/li><li id='' class=''><a href='\/opt\/MultiStrikeOIRT.php' target=''><img class='new-icon' src='\/opt\/images\/newicon.png' alt='icon' \/> Multi Strike OI<\/a><\/li><li id='' class=''><a href='\/opt\/BrokerLogout.php' target=''>Broker Logout<\/a><\/li><\/ul><\/li><li id='Help' class=''><a href='#' target=''>Help<\/a><ul><li id='' class=''><a href='\/opt\/FAQ.php' target='blank'>FAQ<\/a><\/li><li id='' class=''><a href='https:\/\/www.youtube.com\/user\/IndiaiCharts\/videos' target='blank'>Videos<\/a><\/li><li id='' class=''><a href='\/opt\/Documentation.php' target=''>Documentation<\/a><\/li><li id='' class=''><a href='\/opt\/WebsiteUpdates.php' target=''>Website Updates<\/a><\/li><li id='' class=''><a href='\/opt\/Disclaimer.php' target=''>Disclaimer<\/a><\/li><li id='' class=''><a href='\/opt\/Partners.php' target=''>Partners<\/a><\/li><li id='telegram' class='telegramclassNew'><a href='https:\/\/t.me\/+Rj-i-hHeuLvY_U65' target=''>Telegram Help &nbsp;<i class='fa-brands' style='font-size:23px;'>&#xf2c6;<\/i><\/a><\/li><\/ul><\/li><li id='profile-menu' class=''><a href='#' target=''>Profile<\/a><ul><li id='' class=''><a href='\/opt\/ManageSymbolLists.php' target=''><img class='new-icon' src='\/opt\/images\/newicon.png' alt='icon' \/> Manage Symbol Lists<\/a><\/li><li id='' class=''><a href='\/opt\/ChangePassword.php' target=''>Change Password<\/a><\/li><li id='' class=''><a href='\/opt\/MyAccount.php' target=''>My Account<\/a><\/li><\/ul><\/li><li id='subscription-details' class=''><a href='\/opt\/SubscriptionDetails.php' target=''>Subscription Details<\/a><\/li><\/li><li id='Logout' class='access'><a href='\/opt\/logout.php' target=''>Logout<\/a><\/li><\/li><li id='specialOffer' class='' title='New Year Offer'><a href='\/opt\/SubscriptionDetails.php' target=''><span><i class='fa-solid fa-gift fa-beat-fade' style='color: #FFD700; --fa-animation-duration: 1.5s; --fa-fade-opacity: 0.5;'><\/i><\/span><span id='ExpiryBadge' class='sOffer' title='Special Offer'><\/span>    New Year Offer<\/a><\/li>";
        $('#main-menu').html(menuHTML);
		//console.log('renewal diffs -');
		var renewalDt =  $('#RenewalDateDifference').val();
		//console.log(renewalDt !== '');
        
		$(function() {
		  var $mainMenuState = $('#main-menu-state');
		  if ($mainMenuState.length) {
			// animate mobile menu
			$mainMenuState.change(function(e) {
			  var $menu = $('#main-menu');
			  if (this.checked) {
				$menu.hide().slideDown(250, function() { $menu.css('display', ''); });
			  } else {
				$menu.show().slideUp(250, function() { $menu.css('display', ''); });
			  }
			});
			// hide mobile menu beforeunload
			$(window).on('beforeunload unload', function() {
			  if ($mainMenuState[0].checked) {
				$mainMenuState[0].click();
			  }
			});
		  }
		});
    </script>

<!-- Meta Pixel (noscript) -->
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=2048886098880661&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel (noscript) -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TZ4648NQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<script id='_webengage_script_tag' type='text/javascript'>
var webengage;!function(w,e,b,n,g){function o(e,t){e[t[t.length-1]]=function(){r.__queue.push([t.join("."),
arguments])}}var i,s,r=w[b],z=" ",l="init options track screen onReady".split(z),a="webPersonalization feedback survey notification notificationInbox".split(z),c="options render clear abort".split(z),p="Prepare Render Open Close Submit Complete View Click".split(z),u="identify login logout setAttribute".split(z);if(!r||!r._v){for(w[b]=r={queue:[],_v:"6.0",user:{}},i=0;i < l.length;i++)o(r,[l[i]]);for(i=0;i < a.length;i++){for(r[a[i]]={},s=0;s < c.length;s++)o(r[a[i]],[a[i],c[s]]);for(s=0;s < p.length;s++)o(r[a[i]],[a[i],"on"+p[s]])}for(i=0;i < u.length;i++)o(r.user,["user",u[i]]);setTimeout(function(){var f=e.createElement("script"),d=e.getElementById("_webengage_script_tag");f.type="text/javascript",f.async=!0,f.src=("https:"==e.location.protocol?"https://widgets.in.webengage.com":"http://widgets.in.webengage.com")+"/js/webengage-min-v-6.0.js",d.parentNode.insertBefore(f,d)})}}(window,document,"webengage");webengage.init("in~aa1316cc");
</script>

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"69213928e7bb417e81e32c26e4e671aa","server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9b6728095d0fed7b',t:'MTc2NzE1NjYyOQ=='};var a=document.createElement('script');a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>



</html>
    <!-- css -->
    <!--<link href="./assets_adq/css/output.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="css/dark-theme_v1.css?v=7.85">
    <link href="./assets_adq/css/publicDashboard_V4.css" rel="stylesheet" />-->
    <link href="./assets_adq/css/public_symbol_Dashboard.css?v4" rel="stylesheet" />
	
<style>
	.blink_me {
  animation: blinker 2.5s linear infinite;
}

@keyframes blinker {
  50% {
    opacity: 0.2;
  }
}

.highcharts-tooltip-box {
    fill-opacity: 0;
    stroke-width: 0;
}







</style>
  
  </head>
  <body>


    <!-- <button id="theme-toggle">Switch to Dark Theme</button> -->
    <section class="main-body py-5 px-7" id="section">


      <div
        class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-11 gap-4"
      >
        <div class="xl:col-span-4 bg-white rounded-md box-shadow-all p-4">
          <h4
            class="text-left text-black font-bold text-sm font-mono niftyname"
          ></h4>
          <div id="chart"></div>
          <div class="niftyData"></div>
        </div>
        <div class="xl:col-span-4 bg-white rounded-md box-shadow-all p-4">
          <h4
            class="text-left text-black font-bold text-sm font-mono bankniftyname"
          ></h4>
          <div id="chart2"></div>
          <div class="bankniftyData"></div>
        </div>
        <div class="xl:col-span-3 bg-white rounded-md box-shadow-all p-4">
          <h4
            class="text-center text-black font-bold text-sm font-mono uppercase gaugenifty"
            style="padding-bottom: 0px"
          ></h4>
          <div class="grid grid-cols-2 gap-4">
		  
            <div>
              <!-- <div class="flex items-center justify-center text-center"> -->
                <div class="flex items-center justify-center text-center" id="gauge1"></div>
              <!-- </div> -->
              
            </div>
            <div>
              <!-- <div class="flex items-center justify-center text-center"> -->
                <div class="flex items-center justify-center text-center" id="gauge2"></div>
              <!-- </div> -->
             
            </div>
          </div>
          <h4
            class="text-center text-black font-bold text-sm font-mono uppercase gaugebanknifty"
            style="padding-bottom: 0px"
          ></h4>
          <div class="grid grid-cols-2 gap-4">
            <div>
              <!-- <div class="flex items-center justify-center text-center"> -->
                <div class="items-center justify-center" id="gauge3"></div>
              <!-- </div> -->
              
            </div>
            <div> 
              <!-- <div class="flex items-center justify-center text-center"> -->
                <div class="items-center justify-center" id="gauge4"></div>
              <!-- </div> -->
             
            </div>
          </div>
        </div>
      </div>
      <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 my-3">
        <div class="bg-white rounded-md box-shadow-all p-4 bar">
          <div class="justify-center items-center text-center flex gap-3 pb-2">
            <div
              class="barbefore text-black font-bold text-sm font-mono hover:cursor-pointer hover:text-blue-600"
              title="shift backward"
            >
              <!-- <i class="fa-solid fa-angle-left"></i
              ><i class="fa-solid fa-angle-left"></i> -->
            </div>
            <h4
              class="text-center text-black font-bold text-sm font-mono longbuildup"
            ></h4>
            <div
              class="barafter text-black font-bold text-sm font-mono hover:cursor-pointer hover:text-blue-600"
              title="shift forward"
            >
              <!-- <i class="fa-solid fa-angle-right"></i
              ><i class="fa-solid fa-angle-right"></i> -->
            </div>
          </div>
          <div id="bar1"></div>
        </div>
        <div class="bg-white rounded-md rounded-2xl box-shadow-all p-4 bar">
          <div class="justify-center items-center text-center flex gap-3 pb-2">
            <div
              class="barbefore text-black font-bold text-sm font-mono hover:cursor-pointer hover:text-blue-600"
              title="shift backward"
            >
              <!-- <i class="fa-solid fa-angle-left"></i
              ><i class="fa-solid fa-angle-left"></i> -->
            </div>
            <h4
              class="text-left text-black font-bold text-sm font-mono shortcovering"
            ></h4>
            <div
              class="barafter text-black font-bold text-sm font-mono hover:cursor-pointer hover:text-blue-600"
              title="shift forward"
            >
              <!-- <i class="fa-solid fa-angle-right"></i
              ><i class="fa-solid fa-angle-right"></i> -->
            </div>
          </div>
          <div id="bar2"></div>
        </div>
        <div class="bg-white rounded-md box-shadow-all p-4 bar">
          <div class="justify-center items-center text-center flex gap-3 pb-2">
            <div
              class="barbefore text-black font-bold text-sm font-mono hover:cursor-pointer hover:text-blue-600"
              title="shift backward"
            >
              <!-- <i class="fa-solid fa-angle-left"></i
              ><i class="fa-solid fa-angle-left"></i> -->
            </div>
            <h4
              class="text-left text-black font-bold text-sm font-mono shortbuildup"
            ></h4>
            <div
              class="barafter text-black font-bold text-sm font-mono hover:cursor-pointer hover:text-blue-600"
              title="shift forward"
            >
              <!-- <i class="fa-solid fa-angle-right"></i
              ><i class="fa-solid fa-angle-right"></i> -->
            </div>
          </div>
          <div id="bar3"></div>
        </div>
        <div class="bg-white rounded-md box-shadow-all p-4 bar">
          <div class="justify-center items-center text-center flex gap-3 pb-2">
            <div
              class="barbefore text-black font-bold text-sm font-mono hover:cursor-pointer hover:text-blue-600"
              title="shift backward"
            >
              <!-- <i class="fa-solid fa-angle-left"></i
              ><i class="fa-solid fa-angle-left"></i> -->
            </div>
            <h4
              class="text-left text-black font-bold text-sm font-mono longunwinding"
            ></h4>
            <div
              class="barafter text-black font-bold text-sm font-mono hover:cursor-pointer hover:text-blue-600"
              title="shift forward"
            >
              <!-- <i class="fa-solid fa-angle-right"></i
              ><i class="fa-solid fa-angle-right"></i> -->
            </div>
          </div>
          <div id="bar4"></div>
        </div>
        <div class="bg-white rounded-md box-shadow-all p-4 bar">
          <div class="justify-center items-center text-center flex gap-3 pb-2">
            <div
              class="barbefore text-black font-bold text-sm font-mono hover:cursor-pointer hover:text-blue-600"
              title="shift backward"
            >
              <!-- <i class="fa-solid fa-angle-left"></i
              ><i class="fa-solid fa-angle-left"></i> -->
            </div>
            <h4
              class="text-left text-black font-bold text-sm font-mono pricegainers"
            ></h4>
            <div
              class="barafter text-black font-bold text-sm font-mono hover:cursor-pointer hover:text-blue-600"
              title="shift forward"
            >
              <!-- <i class="fa-solid fa-angle-right"></i
              ><i class="fa-solid fa-angle-right"></i> -->
            </div>
          </div>
          <div id="bar5"></div>
        </div>
        <div class="bg-white rounded-md box-shadow-all p-4 bar">
          <div class="justify-center items-center text-center flex gap-3 pb-2">
            <div
              class="barbefore text-black font-bold text-sm font-mono hover:cursor-pointer hover:text-blue-600"
              title="shift backward"
            >
              <!-- <i class="fa-solid fa-angle-left"></i
              ><i class="fa-solid fa-angle-left"></i> -->
            </div>
            <h4
              class="text-left text-black font-bold text-sm font-mono pricelosers"
            ></h4>
            <div
              class="barafter text-black font-bold text-sm font-mono hover:cursor-pointer hover:text-blue-600"
              title="shift forward"
            >
              <!-- <i class="fa-solid fa-angle-right"></i
              ><i class="fa-solid fa-angle-right"></i> -->
            </div>
          </div>
          <div id="bar6"></div>
        </div>
        <div class="bg-white rounded-md box-shadow-all p-4 bar">
          <div class="justify-center items-center text-center flex gap-3 pb-2">
            <div
              class="barbefore text-black font-bold text-sm font-mono hover:cursor-pointer hover:text-blue-600"
              title="shift backward"
            >
              <!-- <i class="fa-solid fa-angle-left"></i
              ><i class="fa-solid fa-angle-left"></i> -->
            </div>
            <h4
              class="text-left text-black font-bold text-sm font-mono oigainers"
            ></h4>
            <div
              class="barafter text-black font-bold text-sm font-mono hover:cursor-pointer hover:text-blue-600"
              title="shift forward"
            >
              <!-- <i class="fa-solid fa-angle-right"></i
              ><i class="fa-solid fa-angle-right"></i> -->
            </div>
          </div>
          <div id="bar7"></div>
        </div>
        <div class="bg-white rounded-md box-shadow-all p-4 bar">
          <div class="justify-center items-center text-center flex gap-3 pb-2">
            <div
              class="barbefore text-black font-bold text-sm font-mono hover:cursor-pointer hover:text-blue-600"
              title="shift backward"
            >
              <!-- <i class="fa-solid fa-angle-left"></i
              ><i class="fa-solid fa-angle-left"></i> -->
            </div>
            <h4
              class="text-left text-black font-bold text-sm font-mono oilosers"
            ></h4>
            <div
              class="barafter text-black font-bold text-sm font-mono hover:cursor-pointer hover:text-blue-600"
              title="shift forward"
            >
              <!-- <i class="fa-solid fa-angle-right"></i
              ><i class="fa-solid fa-angle-right"></i> -->
            </div>
          </div>
          <div id="bar8"></div>
        </div>
        <!-- <div class="bg-white rounded-md box-shadow-all p-4 bar">
          <div class="justify-center items-center text-center flex gap-3 pb-2">
            <div
              class="barbefore text-black font-bold text-sm font-mono hover:cursor-pointer hover:text-blue-600"
              title="shift backward"
            >
              <i class="fa-solid fa-angle-left"></i
              ><i class="fa-solid fa-angle-left"></i>
            </div>
            <h4
              class="text-left text-black font-bold text-sm font-mono ivr"
            ></h4>
            <div
              class="barafter text-black font-bold text-sm font-mono hover:cursor-pointer hover:text-blue-600"
              title="shift forward"
            >
              <i class="fa-solid fa-angle-right"></i
              ><i class="fa-solid fa-angle-right"></i>
            </div>
          </div>
          <div id="bar9"></div>
        </div>
        <div class="bg-white rounded-md box-shadow-all p-4 bar">
          <div class="justify-center items-center text-center flex gap-3 pb-2">
            <div
              class="barbefore text-black font-bold text-sm font-mono hover:cursor-pointer hover:text-blue-600"
              title="shift backward"
            >
              <i class="fa-solid fa-angle-left"></i
              ><i class="fa-solid fa-angle-left"></i>
            </div>
            <h4
              class="text-left text-black font-bold text-sm font-mono ivp"
            ></h4>
            <div
              class="barafter text-black font-bold text-sm font-mono hover:cursor-pointer hover:text-blue-600"
              title="shift forward"
            >
              <i class="fa-solid fa-angle-right"></i
              ><i class="fa-solid fa-angle-right"></i>
            </div>
          </div>
          <div id="bar10"></div>
        </div> -->
      </div>
    </section>
 
     <!-- SmartMenus jQuery plugin -->
    <script type="text/javascript" src="jquery.smartmenus.js"></script>

    <!-- SmartMenus jQuery init -->
    <script type="text/javascript">
    	$(function() {
    		$('#main-menu').smartmenus({
    			subMenusSubOffsetX: 1,
    			subMenusSubOffsetY: -8,
				showTimeout: 10,
				hideTimeout: 10
    		});
    	});
    </script>


    <footer>
      <div class="bottom-nav lg:flex lg:justify-between">
        <div class="px-2 lg:py-3 sm:py-3">
          <a href="#">&copy; <span id="year"></span>, iCharts Technologies Private Limited</a>
        </div>
        <div class="lg:flex ">
          <div class="px-2 lg:py-3 sm:py-3"><a href="/opt/Contact_Us.php">Contact Us</a></div>
          <div class="px-2 lg:py-3 sm:py-3"><a href="/opt/About_us.php">About Us</a></div>
          <div class="px-2 lg:py-3 sm:py-3"><a href="/opt/Privacy_Policy.php">Privacy Policy</a></div>
          <div class="px-2 lg:py-3 sm:py-3"> 
            <a href="/opt/Terms_and_Conditions.php">Terms and Conditions</a>
          </div>
          <div class="px-2 lg:py-3 sm:py-3">
            <a href="/opt/Refund_and_Cancellation_Policy.php">Refund and Cancellation Policy</a>
          </div>
          <div class="px-2 lg:py-3 sm:py-3">
            <a href="/opt/Disclaimer.php">Disclaimer</a>
          </div>
        </div>
      </div> 
    </footer> 
	
    <!-- apexcharts JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>-->
     <script src="./assets_adq/js/publicDashboard_v22.js?v=4.1.2"></script> 
	 <!--<script src="./assets_adq/js/publicDashboard_v21.js?v=5.19.1"></script> --> 
	
	  <script>
    function dismissDiv() {
      const topDiv = document.getElementById('topDiv');
      topDiv.style.display = 'none';
    }
  </script>


  </body>
</html>

