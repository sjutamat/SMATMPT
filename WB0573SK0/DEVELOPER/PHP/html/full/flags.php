<?php

//initilize the page
require_once 'init.web.php';

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Flags";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["ui_elements"]["sub"]["icons"]["sub"]["flags"]["active"] = true;
include("inc/nav.php");

?>
<!-- ==========================CONTENT STARTS HERE ========================== -->

<!-- MAIN PANEL -->
<div id="main" role="main">

	<?php
		//configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
		//$breadcrumbs["New Crumb"] => "http://url.com"
		$breadcrumbs["UI Elements"] = "";
		$breadcrumbs["Icons"] = "";
		include("inc/ribbon.php");
	?>
	
	<!-- MAIN CONTENT -->
	<div id="content">
		<!-- row -->
		<div class="row">
			
			<!-- col -->
			<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
				<h1 class="page-title txt-color-blueDark"><i class="fa fa-desktop fa-fw "></i> 
					UI Elements 
					<span>&gt;
					 Icons &gt; Flags
					</span>
				</h1>
			</div>
			<!-- end col -->
			
			<!-- right side of the page with the sparkline graphs -->
			<!-- col -->
			<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
				<!-- sparks -->
				<ul id="sparks">
					<li class="sparks-info">
						<h5> My Income <span class="txt-color-blue">$47,171</span></h5>
						<div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm">
							1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
						</div>
					</li>
					<li class="sparks-info">
						<h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up" data-rel="bootstrap-tooltip" title="Increased"></i>&nbsp;45%</span></h5>
						<div class="sparkline txt-color-purple hidden-mobile hidden-md hidden-sm">
							110,150,300,130,400,240,220,310,220,300, 270, 210
						</div>
					</li>
					<li class="sparks-info">
						<h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
						<div class="sparkline txt-color-greenDark hidden-mobile hidden-md hidden-sm">
							110,150,300,130,400,240,220,310,220,300, 270, 210
						</div>
					</li>
				</ul>
				<!-- end sparks -->
			</div>
			<!-- end col -->
			
		</div>
		<!-- end row -->

		<!--
			The ID "widget-grid" will start to initialize all widgets below 
			You do not need to use widgets if you dont want to. Simply remove 
			the <section></section> and you can use wells or panels instead 
			-->

		<!-- widget grid -->
		<section id="widget-grid" class="">

			<!-- row -->
			<div class="row">
				
				<!-- NEW WIDGET START -->
				<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					
					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget" id="wid-id-0">
						<!-- widget options:
							usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
							
							data-widget-colorbutton="false"	
							data-widget-editbutton="false"
							data-widget-togglebutton="false"
							data-widget-deletebutton="false"
							data-widget-fullscreenbutton="false"
							data-widget-custombutton="false"
							data-widget-collapsed="true" 
							data-widget-sortable="false"
							
						-->
						<header>
							<span class="widget-icon"> <i class="fa fa-comments"></i> </span>
							<h2>World Flag </h2>				
							
						</header>

						<!-- widget div-->
						<div>
							
							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
								<!-- This area used as dropdown edit box -->
								<input class="form-control" type="text">	
							</div>
							<!-- end widget edit box -->
							
							<!-- widget content -->
							<div class="widget-body">
								<div class="alert alert-info">
										<i class="fa fa-exclamation"></i> Please note: flag images has a base class for image <code>
											flag flag-*</code>. A full example of this in use will be as follows: <code> img class="flag flag-us" src="img/blank.gif"</code>
									</div>
						<h2>Africa</h2>
						<div class="row">
							
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-dz" src="img/blank.gif" alt="Algeria"> Algeria
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ao" src="img/blank.gif" alt="Angola"> Angola
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-bj" src="img/blank.gif" alt="Benin"> Benin
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-bw" src="img/blank.gif" alt="Botswana"> Botswana
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-bf" src="img/blank.gif" alt="Burkina Faso"> Burkina Faso
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-bi" src="img/blank.gif" alt="Burundi"> Burundi
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-cm" src="img/blank.gif" alt="Cameroon"> Cameroon
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-cv" src="img/blank.gif" alt="Cape Verde"> Cape Verde
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-cf" src="img/blank.gif" alt="Central African Republic"> Central African Republic
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-td" src="img/blank.gif" alt="Chad"> Chad
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-km" src="img/blank.gif" alt="Comoros"> Comoros
							</div>	
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-cg" src="img/blank.gif" alt="Congo"> Congo
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-cd" src="img/blank.gif" alt="Congo, The Democratic Republic of the"> Congo, The Democratic Republic of the
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ci" src="img/blank.gif" alt="Côte d'Ivoire"> Côte d'Ivoire
							</div>	
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-dj" src="img/blank.gif" alt="Djibouti"> Djibouti
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-eg" src="img/blank.gif" alt="Egypt"> Egypt
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-gq" src="img/blank.gif" alt="Equatorial Guinea"> Equatorial Guinea
							</div>	
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-er" src="img/blank.gif" alt="Eritrea"> Eritrea
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-et" src="img/blank.gif" alt="Ethiopia"> Ethiopia
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ga" src="img/blank.gif" alt="Gabon"> Gabon
							</div>			
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-gm" src="img/blank.gif" alt="Gambia"> Gambia
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-gh" src="img/blank.gif" alt="Ghana"> Ghana
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-gn" src="img/blank.gif" alt="Guinea"> Guinea
							</div>			
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-gw" src="img/blank.gif" alt="Guinea-Bissau"> Guinea-Bissau
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ke" src="img/blank.gif" alt="Kenya"> Kenya
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ls" src="img/blank.gif" alt="Lesotho"> Lesotho
							</div>			
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-lr" src="img/blank.gif" alt="Liberia"> Liberia
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ly" src="img/blank.gif" alt="Libya"> Libya
							</div>				
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-mg" src="img/blank.gif" alt="Madagascar"> Madagascar
							</div>			
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-mw" src="img/blank.gif" alt="Malawi"> Malawi
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ml" src="img/blank.gif" alt="Mali"> Mali
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-mr" src="img/blank.gif" alt="Mauritania"> Mauritania
							</div>			
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-mu" src="img/blank.gif" alt="Mauritius"> Mauritius
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-yt" src="img/blank.gif" alt="Mayotte"> Mayotte
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ma" src="img/blank.gif" alt="Morocco"> Morocco
							</div>			
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-mz" src="img/blank.gif" alt="Mozambique"> Mozambique
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-na" src="img/blank.gif" alt="Namibia"> Namibia
							</div>	
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ne" src="img/blank.gif" alt="Niger"> Niger
							</div>			
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ng" src="img/blank.gif" alt="Nigeria"> Nigeria
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-rw" src="img/blank.gif" alt="Rwanda"> Rwanda
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-re" src="img/blank.gif" alt="Réunion"> Réunion
							</div>			
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-sh" src="img/blank.gif" alt="Saint Helena"> Saint Helena
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-st" src="img/blank.gif" alt="Sao Tome and Principe"> Sao Tome and Principe
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-sn" src="img/blank.gif" alt="Senegal"> Senegal
							</div>			
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-sc" src="img/blank.gif" alt="Seychelles"> Seychelles
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-sl" src="img/blank.gif" alt="Sierra Leone"> Sierra Leone
							</div>	
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-so" src="img/blank.gif" alt="Somalia"> Somalia
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-za" src="img/blank.gif" alt="South Africa"> South Africa
							</div>	
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ss" src="img/blank.gif" alt="South Sudan"> South Sudan
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-sd" src="img/blank.gif" alt="Sudan"> Sudan
							</div>	
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-sz" src="img/blank.gif" alt="Swaziland"> Swaziland
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-tz" src="img/blank.gif" alt="Tanzania"> Tanzania
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-tg" src="img/blank.gif" alt="Togo"> Togo
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-tn" src="img/blank.gif" alt="Tunisia"> Tunisia
							</div>	
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ug" src="img/blank.gif" alt="Uganda"> Uganda
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-eh" src="img/blank.gif" alt="Western Sahara"> Western Sahara
							</div>	
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-zm" src="img/blank.gif" alt="Zambia"> Zambia
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-zw" src="img/blank.gif" alt="Zimbabwe"> Zimbabwe
							</div>	
						</div>
						
						<h2>America</h2>		
						<div class="row">
							
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ai" src="img/blank.gif" alt="Anguilla"> Anguilla
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ag" src="img/blank.gif" alt="Antigua and Barbuda"> Antigua and Barbuda
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ar" src="img/blank.gif" alt="Argentina"> Argentina
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-aw" src="img/blank.gif" alt="Aruba"> Aruba
							</div>	
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-bs" src="img/blank.gif" alt="Bahamas"> Bahamas
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-bb" src="img/blank.gif" alt="Barbados"> Barbados
							</div>	
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-bz" src="img/blank.gif" alt="Belize"> Belize
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-bm" src="img/blank.gif" alt="Bermuda"> Bermuda
							</div>	
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-bo" src="img/blank.gif" alt="Bolivia, Plurinational State of"> Bolivia, Plurinational State of
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-br" src="img/blank.gif" alt="Brazil"> Brazil
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ca" src="img/blank.gif" alt="Canada"> Canada
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ky" src="img/blank.gif" alt="Cayman Islands"> Cayman Islands
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-cl" src="img/blank.gif" alt="Chile"> Chile
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-co" src="img/blank.gif" alt="Colombia"> Colombia
							</div>	
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-cr" src="img/blank.gif" alt="Costa Rica"> Costa Rica
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-cu" src="img/blank.gif" alt="Cuba"> Cuba
							</div>	
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-cw" src="img/blank.gif" alt="Curaçao"> Curaçao
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-dm" src="img/blank.gif" alt="Dominica"> Dominica
							</div>	
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-do" src="img/blank.gif" alt="Dominican Republic"> Dominican Republic
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ec" src="img/blank.gif" alt="Ecuador"> Ecuador
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-sv" src="img/blank.gif" alt="El Salvador"> El Salvador
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-fk" src="img/blank.gif" alt="Falkland Islands (Malvinas)"> Falkland Islands (Malvinas)
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-gf" src="img/blank.gif" alt="French Guiana"> French Guiana
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-gl" src="img/blank.gif" alt="Greenland"> Greenland
							</div>	
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-gd" src="img/blank.gif" alt="Grenada"> Grenada
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-gp" src="img/blank.gif" alt="Guadeloupe"> Guadeloupe
							</div>	
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-gt" src="img/blank.gif" alt="Guatemala"> Guatemala
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-gy" src="img/blank.gif" alt="Guyana"> Guyana
							</div>	
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ht" src="img/blank.gif" alt="Haiti"> Haiti
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-hn" src="img/blank.gif" alt="Honduras"> Honduras
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-jm" src="img/blank.gif" alt="Jamaica"> Jamaica
							</div>	
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-mq" src="img/blank.gif" alt="Martinique"> Martinique
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-mx" src="img/blank.gif" alt="Mexico"> Mexico
							</div>	
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ms" src="img/blank.gif" alt="Montserrat"> Montserrat
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-an" src="img/blank.gif" alt="Netherlands Antilles"> Netherlands Antilles
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ni" src="img/blank.gif" alt="Nicaragua"> Nicaragua
							</div>	
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-pa" src="img/blank.gif" alt="Panama"> Panama
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-py" src="img/blank.gif" alt="Paraguay"> Paraguay
							</div>	
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-pe" src="img/blank.gif" alt="Peru"> Peru
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-pr" src="img/blank.gif" alt="Puerto Rico"> Puerto Rico
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-kn" src="img/blank.gif" alt="Saint Kitts and Nevis"> Saint Kitts and Nevis
							</div>	
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-lc" src="img/blank.gif" alt="Saint Lucia"> Saint Lucia
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-pm" src="img/blank.gif" alt="Saint Pierre and Miquelon"> Saint Pierre and Miquelon
							</div>	
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-vc" src="img/blank.gif" alt="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-sx" src="img/blank.gif" alt="Sint Maarten"> Sint Maarten
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-sr" src="img/blank.gif" alt="Suriname"> Suriname
							</div>	
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-tt" src="img/blank.gif" alt="Trinidad and Tobago"> Trinidad and Tobago
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-tc" src="img/blank.gif" alt="Turks and Caicos Islands"> Turks and Caicos Islands
							</div>	
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-us" src="img/blank.gif" alt="United States"> United States
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-uy" src="img/blank.gif" alt="Uruguay"> Uruguay
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ve" src="img/blank.gif" alt="Venezuela, Bolivarian Republic of"> Venezuela, Bolivarian Republic of
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-vg" src="img/blank.gif" alt="Virgin Islands, British"> Virgin Islands, British
							</div>	
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-vi" src="img/blank.gif" alt="Virgin Islands, U.S."> Virgin Islands, U.S.
							</div>
						</div>




						<h2>Asia</h2>
						<div class="row">
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-af" src="img/blank.gif" alt="Afghanistan"> Afghanistan
							</div>	
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-am" src="img/blank.gif" alt="Armenia"> Armenia
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-az" src="img/blank.gif" alt="Azerbaijan"> Azerbaijan
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-bh" src="img/blank.gif" alt="Bahrain"> Bahrain
							</div>	
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-bd" src="img/blank.gif" alt="Bangladesh"> Bangladesh
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-bt" src="img/blank.gif" alt="Bhutan"> Bhutan
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-bn" src="img/blank.gif" alt="Brunei Darussalam"> Brunei Darussalam
							</div>	
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-kh" src="img/blank.gif" alt="Cambodia"> Cambodia
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-cn" src="img/blank.gif" alt="China"> China
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-cy" src="img/blank.gif" alt="Cyprus"> Cyprus
							</div>	
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ge" src="img/blank.gif" alt="Georgia"> Georgia
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-hk" src="img/blank.gif" alt="Hong Kong"> Hong Kong
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-in" src="img/blank.gif" alt="India"> India
							</div>	
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-id" src="img/blank.gif" alt="Indonesia"> Indonesia
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ir" src="img/blank.gif" alt="Iran, Islamic Republic of"> Iran, Islamic Republic of
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-iq" src="img/blank.gif" alt="Iraq"> Iraq
							</div>	
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-il" src="img/blank.gif" alt="Israel"> Israel
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-jp" src="img/blank.gif" alt="Japan"> Japan
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-jo" src="img/blank.gif" alt="Jordan"> Jordan
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-kz" src="img/blank.gif" alt="Kazakhstan"> Kazakhstan
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-kp" src="img/blank.gif" alt="Korea, Democratic People's Republic of"> Korea, Democratic People's Republic of
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-kr" src="img/blank.gif" alt="Korea, Republic of"> Korea, Republic of
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-kw" src="img/blank.gif" alt="Kuwait"> Kuwait
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-kg" src="img/blank.gif" alt="Kyrgyzstan"> Kyrgyzstan
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-la" src="img/blank.gif" alt="Lao People's Democratic Republic"> Lao People's Democratic Republic
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-lb" src="img/blank.gif" alt="Lebanon"> Lebanon
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-mo" src="img/blank.gif" alt="Macao"> Macao
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-my" src="img/blank.gif" alt="Malaysia"> Malaysia
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-mv" src="img/blank.gif" alt="Maldives"> Maldives
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-mn" src="img/blank.gif" alt="Mongolia"> Mongolia
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-mm" src="img/blank.gif" alt="Myanmar"> Myanmar
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-np" src="img/blank.gif" alt="Nepal"> Nepal
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-om" src="img/blank.gif" alt="Oman"> Oman
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-pk" src="img/blank.gif" alt="Pakistan"> Pakistan
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ps" src="img/blank.gif" alt="Palestinian Territory, Occupied"> Palestinian Territory, Occupied
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ph" src="img/blank.gif" alt="Philippines"> Philippines
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-qa" src="img/blank.gif" alt="Qatar"> Qatar
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-sa" src="img/blank.gif" alt="Saudi Arabia"> Saudi Arabia
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-sg" src="img/blank.gif" alt="Singapore"> Singapore
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-lk" src="img/blank.gif" alt="Sri Lanka"> Sri Lanka
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-sy" src="img/blank.gif" alt="Syrian Arab Republic"> Syrian Arab Republic
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-tw" src="img/blank.gif" alt="Taiwan, Province of China"> Taiwan, Province of China
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-tj" src="img/blank.gif" alt="Tajikistan"> Tajikistan
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-th" src="img/blank.gif" alt="Thailand"> Thailand
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-tl" src="img/blank.gif" alt="Timor-Leste"> Timor-Leste
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-tr" src="img/blank.gif" alt="Turkey"> Turkey
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-tm" src="img/blank.gif" alt="Turkmenistan"> Turkmenistan
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ae" src="img/blank.gif" alt="United Arab Emirates"> United Arab Emirates
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-uz" src="img/blank.gif" alt="Uzbekistan"> Uzbekistan
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-vn" src="img/blank.gif" alt="Viet Nam"> Viet Nam
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ye" src="img/blank.gif" alt="Yemen"> Yemen
							</div>
						</div>
						
						<h2>Australia and Oceania</h2>
						<div class="row">
							
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-as" src="img/blank.gif" alt="American Samoa"> American Samoa
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-au" src="img/blank.gif" alt="Australia"> Australia
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ck" src="img/blank.gif" alt="Cook Islands"> Cook Islands
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-fj" src="img/blank.gif" alt="Fiji"> Fiji
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-pf" src="img/blank.gif" alt="French Polynesia"> French Polynesia
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-gu" src="img/blank.gif" alt="Guam"> Guam
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ki" src="img/blank.gif" alt="Kiribati"> Kiribati
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-mh" src="img/blank.gif" alt="Marshall Islands"> Marshall Islands
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-fm" src="img/blank.gif" alt="Micronesia, Federated States of"> Micronesia, Federated States of
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-nr" src="img/blank.gif" alt="Nauru"> Nauru
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-nc" src="img/blank.gif" alt="New Caledonia"> New Caledonia
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-nz" src="img/blank.gif" alt="New Zealand"> New Zealand
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-nu" src="img/blank.gif" alt="Niue"> Niue
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-nf" src="img/blank.gif" alt="Norfolk Island"> Norfolk Island
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-mp" src="img/blank.gif" alt="Northern Mariana Islands"> Northern Mariana Islands
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-pw" src="img/blank.gif" alt="Palau"> Palau
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-pg" src="img/blank.gif" alt="Papua New Guinea"> Papua New Guinea
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-pn" src="img/blank.gif" alt="Pitcairn"> Pitcairn
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ws" src="img/blank.gif" alt="Samoa"> Samoa
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-sb" src="img/blank.gif" alt="Solomon Islands"> Solomon Islands
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-tk" src="img/blank.gif" alt="Tokelau"> Tokelau
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-to" src="img/blank.gif" alt="Tonga"> Tonga
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-tv" src="img/blank.gif" alt="Tuvalu"> Tuvalu
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-vu" src="img/blank.gif" alt="Vanuatu"> Vanuatu
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-wf" src="img/blank.gif" alt="Wallis and Futuna"> Wallis and Futuna
							</div>
							
						</div>

						<h2>Europe</h2>
						
						<div class="row">
							
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-al" src="img/blank.gif" alt="Albania"> Albania
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ad" src="img/blank.gif" alt="Andorra"> Andorra
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-at" src="img/blank.gif" alt="Austria"> Austria
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-by" src="img/blank.gif" alt="Belarus"> Belarus
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-be" src="img/blank.gif" alt="Belgium"> Belgium
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ba" src="img/blank.gif" alt="Bosnia and Herzegovina"> Bosnia and Herzegovina
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-bg" src="img/blank.gif" alt="Bulgaria"> Bulgaria
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-hr" src="img/blank.gif" alt="Croatia"> Croatia
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-cz" src="img/blank.gif" alt="Czech Republic"> Czech Republic
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-dk" src="img/blank.gif" alt="Denmark"> Denmark
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ee" src="img/blank.gif" alt="Estonia"> Estonia
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-fo" src="img/blank.gif" alt="Faroe Islands"> Faroe Islands
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-fi" src="img/blank.gif" alt="Finland"> Finland
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-fr" src="img/blank.gif" alt="France"> France
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-de" src="img/blank.gif" alt="Germany"> Germany
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-gi" src="img/blank.gif" alt="Gibraltar"> Gibraltar
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-gr" src="img/blank.gif" alt="Greece"> Greece
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-va" src="img/blank.gif" alt="Holy See (Vatican City State)"> Holy See (Vatican City State)
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-hu" src="img/blank.gif" alt="Hungary"> Hungary
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-is" src="img/blank.gif" alt="Iceland"> Iceland
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ie" src="img/blank.gif" alt="Ireland"> Ireland
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-it" src="img/blank.gif" alt="Italy"> Italy
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-lv" src="img/blank.gif" alt="Latvia"> Latvia
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-li" src="img/blank.gif" alt="Liechtenstein"> Liechtenstein
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-lt" src="img/blank.gif" alt="Lithuania"> Lithuania
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-lu" src="img/blank.gif" alt="Luxembourg"> Luxembourg
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-mk" src="img/blank.gif" alt="Macedonia, The Former Yugoslav Republic of"> Macedonia, The Former Yugoslav Republic of
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-mt" src="img/blank.gif" alt="Malta"> Malta
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-md" src="img/blank.gif" alt="Moldova, Republic of"> Moldova, Republic of
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-mc" src="img/blank.gif" alt="Monaco"> Monaco
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-me" src="img/blank.gif" alt="Montenegro"> Montenegro
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-nl" src="img/blank.gif" alt="Netherlands"> Netherlands
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-no" src="img/blank.gif" alt="Norway"> Norway
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-pl" src="img/blank.gif" alt="Poland"> Poland
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-pt" src="img/blank.gif" alt="Portugal"> Portugal
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ro" src="img/blank.gif" alt="Romania"> Romania
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ru" src="img/blank.gif" alt="Russian Federation"> Russian Federation
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-sm" src="img/blank.gif" alt="San Marino"> San Marino
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-rs" src="img/blank.gif" alt="Serbia"> Serbia
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-sk" src="img/blank.gif" alt="Slovakia"> Slovakia
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-si" src="img/blank.gif" alt="Slovenia"> Slovenia
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-es" src="img/blank.gif" alt="Spain"> Spain
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-se" src="img/blank.gif" alt="Sweden"> Sweden
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ch" src="img/blank.gif" alt="Switzerland"> Switzerland
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ua" src="img/blank.gif" alt="Ukraine"> Ukraine
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-gb" src="img/blank.gif" alt="United Kingdom"> United Kingdom
							</div>
						</div>

						<h2>Other areas</h2>
						<div class="row">
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-bv" src="img/blank.gif" alt="Bouvet Island"> Bouvet Island
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-io" src="img/blank.gif" alt="British Indian Ocean Territory"> British Indian Ocean Territory
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-ic" src="img/blank.gif" alt="Canary Islands"> Canary Islands
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-catalonia" src="img/blank.gif" alt="Catalonia"> Catalonia
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-england" src="img/blank.gif" alt="England"> England
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-eu" src="img/blank.gif" alt="European Union"> European Union
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-tf" src="img/blank.gif" alt="French Southern Territories"> French Southern Territories
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-gg" src="img/blank.gif" alt="Guernsey"> Guernsey
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-hm" src="img/blank.gif" alt="Heard Island and McDonald Islands"> Heard Island and McDonald Islands
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-im" src="img/blank.gif" alt="Isle of Man"> Isle of Man
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-je" src="img/blank.gif" alt="Jersey"> Jersey
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-kurdistan" src="img/blank.gif" alt="Kurdistan"> Kurdistan
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-scotland" src="img/blank.gif" alt="Scotland"> Scotland
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-somaliland" src="img/blank.gif" alt="Somaliland"> Somaliland
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-gs" src="img/blank.gif" alt="South Georgia and the South Sandwich Islands"> South Georgia and the South Sandwich Islands
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-um" src="img/blank.gif" alt="United States Minor Outlying Islands"> United States Minor Outlying Islands
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-wales" src="img/blank.gif" alt="Wales"> Wales
							</div>
							<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
								<img class="flag flag-zanzibar" src="img/blank.gif" alt="Zanzibar"> Zanzibar 
							</div>
							
						</div>






							</div>
							<!-- end widget content -->
							
						</div>
						<!-- end widget div -->
						
					</div>
					<!-- end widget -->

				</article>
				<!-- WIDGET END -->
				
			</div>

			<!-- end row -->

			<!-- row -->

			<div class="row">

				<!-- a blank row to get started -->
				<div class="col-sm-12">
					<!-- your contents here -->
				</div>
					
			</div>

			<!-- end row -->

		</section>
		<!-- end widget grid -->

	</div>
	<!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->
<!-- ==========================CONTENT ENDS HERE ========================== -->

<?php
	// include page footer
	include("inc/footer.php");
?>

<?php 
	//include required scripts
	include("inc/scripts.php"); 
?>

<!-- PAGE RELATED PLUGIN(S) 
<script src="<?php echo ASSETS_URL; ?>/js/plugin/YOURJS.js"></script>-->

<script>

	$(document).ready(function() {
		// PAGE RELATED SCRIPTS
	})

</script>

<?php 
	//include footer
	include("inc/google-analytics.php"); 
?>