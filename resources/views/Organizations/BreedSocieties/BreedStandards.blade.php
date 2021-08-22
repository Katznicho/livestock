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
			<li><a href="#"> Breed Standards </a></li>
		</ul>
		<!--bread crumb-->
		<!---here-->

		
		<div class="container">
		<p><strong>Breed Standards</strong></p>
<p class="s1">A Breed is an animal with a common origin and selection history. Animals within a breed have physical characteristics that distinguish them from other breeds or groups of animals within that same species. At Kenya Livestock Breeders Association, Various breeds societies have a mandate to set and establish breeds standards which are rules set that guides inspectors in selection of desired breed traits.</p>
<p class="s1">Farmers are advised to contact the various <a href="index.php/organization/breed-societies/breeder-links" rel="alternate">breed societies</a> and inspectors for guidance on breeds standards for particular breeds.</p>
<p class="s1">The ultimate goal in working with breeds associations is helping farmers to select breeds for desired traits and improving the standards in every successive generation.</p>								
	
		
		</div>
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