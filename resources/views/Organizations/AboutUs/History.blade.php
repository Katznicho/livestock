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
			<li><a href="#"> History </a></li>
		</ul>
		<!--bread crumb-->
		<!---here-->

		<div class="container">
		<section class="entry-content media"> 
																					<h3>History of Kenya Livestock Breeders Association - KLBA (formerly KLBO)</h3>
<p>Kenya Livestock Breeders Association is the national pedigree service for purebred and non-purebred livestock in Kenya. We are a private non-profit organization that has been serving the Kenya's livestock industry continuously since its formation in 1920. The organization was formally called East Africa Stud Book <strong>(EASB)</strong>. And was corporated under the Animal Pedigree Act, which is federal legislation that regulates the keeping of all animal pedigree records in East Africa. The various breed associations are also incorporated under the same Act, and any association so incorporated may become a member of <strong>KLBA</strong>. There are approximately five member societies for which records are being maintained. In addition, KLBA administers, its registration roles in East Africa as well.</p>
<p><strong>KLBA</strong> was formed on 12th March 1994. However, it’s institutional framework is over half a century old . Kenya Stud Book history dates back to May 1920 when the Royal Agricultural Society Started the East African Stud Book in Nairobi. At this time white Settlers Farmers were directly importing breeding animals. On formation, the Stud Book was mandated to:-</p>
<blockquote>
<ol>
<li class="s1"><strong>Maintain pedigree register for the progeny of the imported livestock.</strong></li>
<li class="s1"><strong>Maintain the up-grading scheme for the crosses bred through crossing the indigenous animals and the exotic breeds.</strong></li>
<li class="s1"><strong>Issue registration certificates for the animals registered.</strong></li>
</ol>
</blockquote>
<p>The Milk Recording Program started by the Royal Agricultural Society of Kenya Way back in 1939 as the East Africa Milk Records.</p>
<p>In 1959 it was transferred to the Kenya Dairy Board because RASK were no longer able to finance it. At it’s initial set up, Kenya Dairy Board was owned by farmers who financed it through cess payment.</p>
<p>With the collapse of the  East Africa Community in 1968 the East Africa Milk Records changed its name to Kenya Milk Records. KMR was financed by  Kenya Dairy Board (KDB) until the cess ceased to be transferred from Kenya Co-operative Creameries (KCC) to the KDB in 1984.</p>
<p>Over the years both the milk recording and the livestock registration schemes have witnessed periods of severe operational handicaps. In actual fact at one time the Kenya Dairy Board and the Departments of Veterinary and Livestock Production had been in charge of these schemes. During this time the schemes were financially constrained, not well coordinated and unable to deliver effective services. Hence, in 1994 farmers out of the realization that registration and performance recording are key prerequisites for any breeding program, they decided to group the services of the two schemes together under one committee<strong> “Kenya Livestock Breeders Committee”</strong>. From then to date, despite problems occasioned by severe financial constraints farmers are running a self sustaining organization financed through income generated from services rendered and very minimal government intervention in form of a small annual grant.</p>
<p>Since then KMR was funded by Ministry grants, subscriptions, grant from World Food Programme ( Dairy Development Committee) until 1998 when Kenya Dairy Board handed KMR to the Kenya Livestock Breeders Committee which changed its name to Dairy Recording Service of Kenya (DRSK).</p>								
			
		
		
		
		
		</div>

		 
		<!--here-->
			
		</div>
		<!--reports-->
		

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