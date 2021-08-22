<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Live Stock Farming</title>
    		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="{{  asset('images/fav-icon/icon.png')}}">

        		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="{{  asset('css/style.css')}}">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="{{  asset('css/responsive.css')}}">
</head>
<style>
	.register__buttonDiv{
		margin:10px auto !important;
	}
	.register__button{
		background: #1c478e !important;
		color: #fff !important;
		padding: 4px !important;
		width: 70% !important;
		cursor: pointer;
		border-radius: 20px !important;
	}
		/* Style the list */
	ul.breadcrumb {
	padding: 4px 16px;
	list-style: none;
	/* background-color: #eee; */
	}
	.events_color{
		background-color: #eee !important;
		padding: 30px !important;
		width: 100%;
		height: 10vh !important ;
		border-radius: 10px !important;

	}

	/* Display list items side by side */
	ul.breadcrumb li {
	display: inline;
	font-size: 14px;
	}

	/* Add a slash symbol (/) before/behind each list item */
	ul.breadcrumb li+li:before {
	padding: 8px;
	color: black;
	content: "/\00a0";
	}

	/* Add a color to all links inside the list */
	ul.breadcrumb li a {
	color:#111;
	text-decoration: none;
	}

	/* Add a color on mouse-over */
	ul.breadcrumb li a:hover {
	color: #01447e;

	}
</style>
<body>
    <div class="main-page-wrapper">
        <!--header-->
		@include('Header.header');

		<!--reports-->
		<div class="container">
			 <!--bread crumb-->
		<ul class="breadcrumb">
			<li>
				<a href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> Home </a>
			</li>
			<li><a href="#"> Organisation </a></li>
			<li><a href="#"> Breed Societies </a></li>
			<li><a href="#"> Breed Links </a></li>
		</ul>
		<!--bread crumb-->
		<!---here-->

			
		<section class="entry-content media"> 
																					<h3>Breeds Societies for different Species </h3>
<p>The Kenya Livestock Breeders Organization brings together all the livestock keepers in Kenya who have come together to register and improve their breeds. </p>
<p>We have a total of 30 breeds currently registered as follows; Cattle = 17, Goat = 5, Sheep = 6 and Pig = 2 </p>
<p><div class="accordion" id="sc-accordion"><div class="accordion-group"><div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#sc-accordion" href="#species---cattle">Species - Cattle</a></div><div id="species---cattle" class="accordion-body collapse in"><div class="accordion-inner"></p>
<table style="height: 488px; border-color: #f0f0f0; margin-left: auto; margin-right: auto;" width="905">
<tbody>
<tr>
<td style="width: 300px; background-color: #59c5f0;">
<p><strong>Breed</strong></p>
</td>
<td style="width: 300px; background-color: #59c5f0;">
<p><strong>Breed Society</strong></p>
</td>
</tr>
<tr>
<td>Aberdeen Angus</td>
<td> </td>
</tr>
<tr>
<td style="width: 100px; background-color: #f0f0f0;">Ayrshire</td>
<td style="background-color: #f0f0f0;">Ayrshire Cattle Breeders Society of Kenya</td>
</tr>
<tr>
<td>Boran</td>
<td><a title="Boran Cattle Breeders Society of Kenya " href="http://www.bcbs.org/" target="_blank" rel="alternate">Boran Cattle Breeders Society of Kenya</a></td>
</tr>
<tr>
<td style="width: 100px; background-color: #f0f0f0;">Brahman</td>
<td style="background-color: #f0f0f0;"> </td>
</tr>
<tr>
<td>Brown Swiss</td>
<td> </td>
</tr>
<tr>
<td style="width: 100px; background-color: #f0f0f0;">Charolais</td>
<td style="background-color: #f0f0f0;"> </td>
</tr>
<tr>
<td>Fleckvieh</td>
<td><a title="FGEAL" href="http://www.fleckviehgeneticsea.com/" target="_blank" rel="alternate">Fleckvieh Genetics East Africa Ltd</a></td>
</tr>
<tr>
<td style="width: 100px; background-color: #f0f0f0;">Holstein Friesian</td>
<td style="background-color: #f0f0f0;">Holstein Friesian Cattle Breeders Society of Kenya</td>
</tr>
<tr>
<td>Guernsey</td>
<td>Guernsey Cattle Breeders Society of Kenya</td>
</tr>
<tr>
<td style="width: 100px; background-color: #f0f0f0;">Hereford</td>
<td style="background-color: #f0f0f0;"> </td>
</tr>
<tr>
<td>Jersey</td>
<td>Jersey Cattle Breeders Society of Kenya</td>
</tr>
<tr>
<td style="width: 100px; background-color: #f0f0f0;">Limousine</td>
<td style="background-color: #f0f0f0;"> </td>
</tr>
<tr>
<td>Piemontese</td>
<td> </td>
</tr>
<tr>
<td style="width: 100px; background-color: #f0f0f0;">Red Poll</td>
<td style="background-color: #f0f0f0;"> </td>
</tr>
<tr>
<td>Sahiwal</td>
<td>Sahiwal Cattle Breeders Society of Kenya</td>
</tr>
<tr>
<td style="width: 100px; background-color: #f0f0f0;">Santa Getrudis</td>
<td style="background-color: #f0f0f0;"> </td>
</tr>
<tr>
<td>Simmental</td>
<td> </td>
</tr>
</tbody>
</table>
<p></div></div></div><div class="accordion-group"><div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#sc-accordion" href="#species---goat">Species - Goat</a></div><div id="species---goat" class="accordion-body collapse"><div class="accordion-inner"></p>
<table style="height: 188px; border-color: #f0f0f0; margin-left: auto; margin-right: auto;" width="899">
<tbody>
<tr>
<td style="width: 300px; background-color: #59c5f0;">
<p><strong>Breed</strong></p>
</td>
<td style="width: 300px; background-color: #59c5f0;">
<p><strong>Breed Society</strong></p>
</td>
</tr>
<tr>
<td>Boer Goat</td>
<td> </td>
</tr>
<tr>
<td style="background-color: #f0f0f0;">Galla Goat</td>
<td style="background-color: #f0f0f0;">Galla Goat Breeders Society of Kenya</td>
</tr>
<tr>
<td>Kenya Alpine Goat</td>
<td><a title="Dairy Goats Association of Kenya" href="http://www.dgak.crg/" target="_blank" rel="alternate">Dairy Goats Association of Kenya</a></td>
</tr>
<tr>
<td style="background-color: #f0f0f0;">Saanen</td>
<td style="background-color: #f0f0f0;"> </td>
</tr>
<tr>
<td>Toggernburg</td>
<td> </td>
</tr>
</tbody>
</table>
<p></div></div></div><div class="accordion-group"><div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#sc-accordion" href="#species---sheep">Species - Sheep</a></div><div id="species---sheep" class="accordion-body collapse"><div class="accordion-inner"></p>
<table style="height: 202px; border-color: #f0f0f0; margin-left: auto; margin-right: auto;" width="901">
<tbody>
<tr>
<td style="width: 300px; background-color: #59c5f0;">
<p><strong>Breed</strong></p>
</td>
<td style="width: 300px; background-color: #59c5f0;">
<p><strong>Breed Society</strong></p>
</td>
</tr>
<tr>
<td>Corriedale</td>
<td> </td>
</tr>
<tr>
<td style="background-color: #f0f0f0;">Dorper</td>
<td style="background-color: #f0f0f0;">Dorper Sheep Association of Kenya</td>
</tr>
<tr>
<td>Hampshire Down</td>
<td> </td>
</tr>
<tr>
<td style="background-color: #f0f0f0;">Merino</td>
<td style="background-color: #f0f0f0;"> </td>
</tr>
<tr>
<td>Persian Black Head</td>
<td> </td>
</tr>
<tr>
<td style="background-color: #f0f0f0;">Red Maasai</td>
<td style="background-color: #f0f0f0;"> </td>
</tr>
</tbody>
</table>
<p></div></div></div><div class="accordion-group"><div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#sc-accordion" href="#species---pig">Species - Pig</a></div><div id="species---pig" class="accordion-body collapse"><div class="accordion-inner"></p>
<table style="height: 129px; border-color: #f0f0f0; margin-left: auto; margin-right: auto;" width="895">
<tbody>
<tr>
<td style="width: 300px; background-color: #59c5f0;">
<p><strong>Breed</strong></p>
</td>
<td style="width: 300px; background-color: #59c5f0;">
<p><strong>Breed Society</strong></p>
</td>
</tr>
<tr>
<td>Large White</td>
<td> </td>
</tr>
<tr>
<td style="background-color: #f0f0f0;">Landrace</td>
<td style="background-color: #f0f0f0;"> </td>
</tr>
<tr>
<td> </td>
<td> </td>
</tr>
</tbody>
</table>
<p></div></div></div></div></p>
</div>

		 

		@include('Partners.Partners');
		@include('Footer.Footer');
    
        <!--header-->
        <!-- Js File_________________________________ -->

		<!-- j Query -->
		<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script type="text/javascript" src=" {{  asset('vendor/jquery.2.2.3.min.js')}}"></script>

		<!-- Bootstrap JS -->
		<script type="text/javascript" src="{{  asset('vendor/bootstrap/bootstrap.min.js')}}"></script>
		<!-- Bootstrap Select JS -->
		<script type="text/javascript" src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.js')}}"></script>

		<!-- Vendor js _________ -->
		<!-- revolution -->
		<script src="{{ asset('vendor/revolution/jquery.themepunch.tools.min.js')}}"></script>
		<script src="{{ asset('vendor/revolution/jquery.themepunch.revolution.min.js')}}"></script>
		<script type="text/javascript" src="{{ asset('vendor/revolution/revolution.extension.slideanims.min.js')}}"></script>
		<script type="text/javascript" src="{{ asset( 'vendor/revolution/revolution.extension.layeranimation.min.js')}}"></script>
		<script type="text/javascript" src="{{  asset('vendor/revolution/revolution.extension.navigation.min.js')}}"></script>
		<script type="text/javascript" src="{{ asset('vendor/revolution/revolution.extension.kenburn.min.js')}}"></script>
		<!-- menu  -->
		<script type="text/javascript" src="{{  asset('vendor/menu/src/js/jquery.slimmenu.js')}}"></script>
		<script type="text/javascript" src="{{  asset('vendor/jquery.easing.1.3.js')}}"></script>
		<!-- isotop -->
		<script type="text/javascript" src="{{  asset('vendor/isotope.pkgd.min.js')}}"></script>
		<!-- fancy box -->
		<script type="text/javascript" src="{{ asset('vendor/fancy-box/jquery.fancybox.pack.js')}}"></script>
		<!-- owl.carousel -->
		<script type="text/javascript" src="{{ asset('vendor/owl-carousel/owl.carousel.min.js')}}"></script>
		<!-- js count to -->
		<script type="text/javascript" src="{{  asset('vendor/jquery.appear.js') }}"></script>
		<script type="text/javascript" src="{{  asset('vendor/jquery.countTo.js')}}"></script>


		<!-- Theme js -->
		<script type="text/javascript" src="{{  asset('js/theme.js')}}"></script>

		</div> <!-- /.main-page-wrapper -->

    
    
</body>
</html>