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
			<li><a href="#"> Bye Laws </a></li>
		</ul>
		<!--bread crumb-->
		<!---here-->

		<section class="entry-content media"> 
																					<p> </p>
<p><strong>Terms and Conditions of Membership</strong></p>
<p><strong class="b">Your subscription to this service is subject to the following terms &amp; conditions. Posting your details to this database is a tacit ackowledgement to be bound by these terms &amp; conditions.</strong></p>
<p><strong><em><span class="s1">Preamble</span></em></strong></p>
<p class="s1">The use of “You” or "Member "in this document shall be construed to mean the farmer, breeder or partner. “KLBO ” or “We” shall mean Kenya Livestock Breeders Organization, its employees, directors and authorized agents. “partner” shall mean any entity using this database for purposes of their efforts in following up collaborative work with KLBO.</p>
<ol>
<li class="s1">Our service to You is limited to keeping Your details in our database and making it available to KLBO and our Partners..</li>
<li class="s1">If we decide to contact You, we may do so directly or through this website, using the contacts You shall have provided.</li>
<li class="s1">You must expressly acknowledge that any use of information we gain from You will be at Your own risk, so the information provided by you should be <strong>accurate</strong> as possible to avoid you any inconveniences.</li>
<li class="s1">You must warrant that all information You provide to KLBO does not breach any law or the rights of any person or entity or farm.</li>
<li class="s1">You must not impersonate any person or farm or partner, falsely state, or otherwise misrepresent Your affiliation with a person or farm or partner.</li>
</ol>
<p> </p>
<p><div class ="embed-container native-embed-container">
				<!-- <embed src="http://localhost/bpii/files/pdf/KLBO Rules on Registration.pdf" style="width:100%; height:300px;"frameborder="1"/></div></p> -->
		 
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