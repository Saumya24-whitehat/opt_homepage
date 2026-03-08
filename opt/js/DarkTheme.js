function optTheme(value)
{
	if (value == 1){
	$( "body" ).addClass( "dark" );
		// $( ".mdl-textfield__input" ).addClass( "Darkinput" );
	    // $(".mdl-textfield__label").css('color', '#1890CC');
	var link = document.createElement('link');  
   // set the attributes for link element 
    link.rel = 'stylesheet';  
    link.type = 'text/css'; 
    link.href = 'js/fSelectCustomDark.css';  
    // Get HTML head element to append  
    // link element to it  
    document.getElementsByTagName('HEAD')[0].appendChild(link);  
	// console.log(link,'link');
	
	}
	else{
		$( "body" ).removeClass( "dark" );
		$( ".mdl-textfield__input" ).removeClass( "Darkinput" );
		var link = document.createElement('link');  
   // set the attributes for link element 
    link.rel = 'stylesheet';  
    link.type = 'text/css'; 
    link.href = 'js/fSelectCustom.css';  
    // Get HTML head element to append  
    // link element to it  
    document.getElementsByTagName('HEAD')[0].appendChild(link);  
	// console.log(link,'link');
	}
}

function Inputcolor(value){
	
	if(value==1){
		$( ".mdl-textfield__input" ).addClass( "Darkinput" );
	    $(".mdl-textfield__label").css('color', '#1890CC');
	}
}

function get_echarts_theme(value1,chart1,chart2){

	if(value1==1){
	CallOptionChart = echarts.init(chart1,'dark');
	PutOptionChart = echarts.init(chart2,'dark');
	PriceColor = 'white';
	ATPColor = '#33FF33';
	IVColor = '#6666FF';
	}
	else
	{
	CallOptionChart = echarts.init(chart1,'light');
	PutOptionChart = echarts.init(chart2,'light');
	PriceColor = 'black';
	ATPColor = 'darkgreen';
	IVColor = 'darkblue';
	}

}

function get_hcharts_theme(value){
	 // console.log('In get_hcharts_theme');
	if(value==1){
	 // console.log('In get_hcharts_theme IF');
	$('#chartContainer').addClass( "dark" );
	// console.log(gChart.theme)
	if(gChart.theme.name == 'Light'){
		// console.log('in loop theme')
		gChart.theme = StockChartX.Theme.Dark;
		// console.log(gChart.theme.name,'gChart.theme.namein loop theme')
	}
	else {
		gChart.theme = StockChartX.Theme.Dark;
	}

	}
	else
	{
	// console.log('In get_hcharts_theme else');
	$('#chartContainer').removeClass( "dark" );
	if(gChart.theme.name == 'Light'){
	gChart.theme = StockChartX.Theme.Light;
	}
	if(gChart.theme.name == 'dark'){
	gChart.theme = StockChartX.Theme.Dark;
	}
	
	}
}
function get_tables_theme(value){
	// console.log('In get_tables_theme');
	if(value==1){
	$( "#sort_table" ).addClass( "optionchainDark" );
	ThemeColor='itmhighlightDark';
	TableDarkTheme = 'dt-dark-themecolor';
	PositiveColor ='rgb(36, 177 ,100)'; 
	NegativeColor='rgb(249,89,89)';
	}
	else
	{
	$( "#sort_table" ).removeClass( "optionchainDark" );
	 ThemeColor='itmhighlight';
	 TableDarkTheme = 'dt-light-themecolor';
	 PositiveColor ='green';
	 NegativeColor='red';
	}
}

function get_indexpage_chart(value){
	if(value==1){
	$( ".card" ).addClass( "ChartBackgroundDark" );
	$( ".card-header" ).addClass( "ChartHeaderBackgroundDark" );
	BarTextColor='#fff';
	// BarTextColor='red';
	TextforeColor='#fff';
	ThemeColor='dark';
	$( ".nodata" ).addClass( "nodataDark" );
	$( ".card-footer" ).removeClass( "text-muted" ).addClass( "text-muted-dark" );
	$('#tooltip').addClass( "TooltipcolorDark" );
	PriceColor='white';
	
	}
	else
	{
	$( ".card" ).removeClass( "ChartBackgroundDark" );
	$( ".card-header" ).removeClass( "ChartHeaderBackgroundDark" );
	BarTextColor='#373d3f';
	TextforeColor='#373d3f';
	ThemeColor='light';
	$( ".nodata" ).removeClass( "nodataDark" );
	$( ".card-footer" ).removeClass( "text-muted-dark" ).addClass( "text-muted" );
	$('#tooltip').removeClass( "TooltipcolorDark" );
	PriceColor='black';
	}
}

function get_FuturesOIBuildup_table(value){
	if(value==1){
	$( ".option" ).addClass( "FuturesOIDark" ).removeClass("option");
	$( ".OIBuildupHeading" ).addClass( "OIBuildupHeadingDark" ).removeClass("OIBuildupHeading");
	PositiveColor ='rgb(36, 177 ,100)'; 
	NegativeColor='rgb(249,89,89)';
	}
	
	else{
	$( ".option" ).addClass( "option" ).removeClass("FuturesOIDark");
	$( ".OIBuildupHeadingDark" ).addClass( "OIBuildupHeading" ).removeClass("OIBuildupHeadingDark");
	PositiveColor ='green';
	NegativeColor='red';
	}
}

function get_FuturesOIScan_table(value){
	if(value==1){
	$( "#sort_table" ).addClass( "OIScanDark" );
	// $( ".InputColor" ).addClass( "InputColorDark");
	// $( "#column1" ).addClass( "InputColorDark");
	PositiveColor ='rgb(36, 177 ,100)'; 
	NegativeColor='rgb(249,89,89)';
	ColumnSymbolColor = 'rgb(58 57 57)';
	ElseColor = '#ffffff';
	InputBackgroundColor = '#505050';
	InputSearchColor = '#ffffff';
	
	}
	
	else{
	// $( "#sort_table" ).removeClass( "optionchainDark" ).addClass( "optionchain" );
	$( "#sort_table" ).removeClass( "OIScanDark" );
	// $( ".InputColor" ).removeClass( "InputColorDark" );
	PositiveColor ='green';
	NegativeColor='red';
	ColumnSymbolColor = '#f8f8ff';
	ElseColor = '#000000';
	InputBackgroundColor = ' ';
	InputSearchColor = '#000000';
	}
	
}

function get_OIBreakup_table(value){
	if(value==1){
	$( "#sort_table" ).addClass( "OIScanDark" );
	ClassNameBreakup = 'OIScanDark';
	ColumnSymbolColor = 'rgb(58 57 57)';
	PositiveColor ='rgb(36, 177 ,100)'; 
	NegativeColor='rgb(249,89,89)';
	ElseColor = '#ffffff';
	VolumeBlue='#6666FF';
	}
	else{
	$( "#sort_table" ).removeClass( "OIScanDark" );
	ClassNameBreakup = 'headercolor';
	ColumnSymbolColor = '#f8f8ff';
	PositiveColor ='green';
	NegativeColor='red';
	ElseColor = '#000000';
	VolumeBlue='blue';
	}
}

function get_IVRIVPScan_table(value){
	if(value==1){
	$( "#sort_table" ).addClass( "OIScanDark" );
	ColumnSymbolColor = 'rgb(58 57 57)';
	PositiveColor ='rgb(36, 177 ,100)'; 
	NegativeColor='rgb(249,89,89)';
	ElseColor = '#ffffff';
	InputBackgroundColor = '#505050';
	InputSearchColor = '#ffffff';
	}
	else{
	$( "#sort_table" ).removeClass( "OIScanDark" );
	ColumnSymbolColor = '#f8f8ff';
	PositiveColor ='green';
	NegativeColor='red';
	ElseColor = '#000000';
	InputBackgroundColor = ' ';
	InputSearchColor = '#000000';
	}
}

function CallPutColorsTheme(value)
{
	if(value==1){
		// console.log('newcallput')
		
		// CallColor='#7BC862';
		// PutColor='#dc143c' ;
		
		CallColor='#dc143c';
		PutColor='#7BC862';
		
		CallFillColor='rgba(254,132,132,0.45)';
		PutFillColor='rgba(153,237,195,0.45)';
	}
	
	else{
		// console.log('oldcallput')
		CallColor='#7BC862';
		PutColor='#dc143c' ;
		
		CallFillColor='rgba(153,237,195,0.45)';
		PutFillColor='rgba(254,132,132,0.45)';
		// CallColor='#dc143c';
		// PutColor='#7BC862';
	}
	
}

function cumm_oi_call_put_color(value)
{
  if(value==1){
    CallColor='red';
    PutColor='green';
  }
  else{

    CallColor='green';
    PutColor='red' ;
  
  }
  
}

function get_OiStats_theme(value){

	if(value==1){
	$( "#ChartHeadings" ).addClass( "OIStatsDark" );
	CallOptionChart = echarts.init(callchartdom,'dark');
	PutOptionChart = echarts.init(putchartdom,'dark');
	totalOiChart = echarts.init(totaloidom,'dark');
	totalOiChangeChart = echarts.init(totaloichangedom,'dark');
	ATMSpotLineColor = 'white';
	
	// .mdl-layout__tab-bar_Dark ChartHeadings

	} 
	else
	{
	$( "#ChartHeadings" ).removeClass( "OIStatsDark" );
	CallOptionChart = echarts.init(callchartdom,'light');
	PutOptionChart = echarts.init(putchartdom,'light');
	totalOiChart = echarts.init(totaloidom,'light');
	totalOiChangeChart = echarts.init(totaloichangedom,'light');
	ATMSpotLineColor = 'darkblue';
	

	}	
}

function get_OptionBreakUp_table(value){
	if(value==1){
		$( "#sort_table" ).addClass( "optionchainDark" );
		ThemeColor='itmhighlightDark';
		TableDarkTheme = 'dt-dark-themecolor';
		OIColor = 'mediumpurple';
		PositiveColor ='rgb(36, 177 ,100)'; 
		NegativeColor='rgb(249,89,89)';
		VolumeColor ='#428bca';
		// if(dayhighcolor=='black') dayhighcolor='white';

	}
	else
	{
		$( "#sort_table" ).removeClass( "optionchainDark" );
		ThemeColor='itmhighlight';
		TableDarkTheme = 'dt-light-themecolor';
		OIColor = 'purple';
		PositiveColor ='green';
		NegativeColor='red';
		VolumeColor ='blue';
	}
}

function get_OptionsMonitor_theme(value){

	if(value==1){
	CallOptionChart = echarts.init(callchartdom,'dark');
	PutOptionChart = echarts.init(putchartdom,'dark');
	PriceColor = 'white';
	ATPColor = '#33FF33';
	IVColor = '#6666FF';
	} 
	else
	{

	CallOptionChart = echarts.init(callchartdom,'light');
	PutOptionChart = echarts.init(putchartdom,'light');
	PriceColor = 'black';
	ATPColor = 'darkgreen';
	IVColor = 'darkblue';
	}	
}

function get_MultiStrikeOI_theme(value){
	if(value==1){
	$("#atmstrikesnumber").css('color', '#ffffff');
	$("#atmstrikesnumber").css('background', '#333333');
	// $(".mdl-checkbox__box-outline").css('border', '2px solid rgb(24 144 204) !important');
	CallOptionChart = echarts.init(callchartdom,'dark');
	PriceColor = 'white';
	}
	else{
		CallOptionChart = echarts.init(callchartdom,'light');
		PriceColor = 'black';
	}
}

function get_PutCallOI_theme(value){
	if(value==1){
	$("#atmstrikesnumber").css('color', '#ffffff');
	$("#atmstrikesnumber").css('background', '#333333');
	$( "#sort_table" ).addClass( "optionchainDark" );
	ThemeColor='itmhighlightDark';
	TableDarkTheme = 'dt-dark-themecolor';
	FutureOIColor='mediumpurple';

	}
	else{
		// CallOptionChart = echarts.init(callchartdom,'light');
		PriceColor = 'black';
		$( "#sort_table" ).removeClass( "optionchainDark" );
		ThemeColor='itmhighlight';
		TableDarkTheme = 'dt-light-themecolor';
		FutureOIColor='purple';
	}
}

function get_Straddle_snapTheme(value){
	
	if(value==1){
		// console.log('its called')
		$( "#StraddleSnap" ).addClass( "optionchainDark" );
		// $( "#StraddleSnap" ).css('border', '1px solid #ffffff');
		
	}
	
}

function get_Documentation_theme(value){
	
if(value==1){
		$( ".chartheading" ).addClass( "chartheadingDark" );
		$( ".panel" ).addClass( "panelDark" );
		$( ".navbar-default" ).addClass( "DocuMenu_Dark" );
		$( ".navbar-brand" ).addClass( "text-muted-dark" );
		$( "#navbar a" ).addClass( "text-muted-dark" );
		$( "#navbar ul li" ).css('border-top', '0px solid #e8e8e8');
		
	}	
	
	else{
		$("#navbar a").css('color', '#444');
	}
}

function get_subscription_theme(value){
	if(value==1){
		$( ".SubscriptionHeading" ).addClass( "SubscriptionHeadingDark" );
		$( ".pricing__item" ).addClass( "SubscriptionCardDark" );
	}
}