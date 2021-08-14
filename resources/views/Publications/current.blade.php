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
			<li><a href="#">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
				Home</a></li>
			<li><a href="#">

				publications</a></li>
			<li><a href="#">Current Publications</a></li>
		
		  </ul>
		<!--bread crumb-->
		<!---here-->

			<div class="events_color">
				<div class="col-md-8">Hits: 16374</div>
				<div class="col-md-4">
					<i class="fa fa-print" style="margin-right: 10px; cursor:pointer;">Print</i>

				    <i class="fa fa-envelope-o" aria-hidden="true" style="cursor: pointer;">Email</i>
				</div>

		</div>

		 
		<!--here-->
			<div class="row">
				<div class="col-md-12">
					<div class="yearevnets__content" style="margin-left: 25px; margin-top:15px; cursor: pointer;">
						<h5 style="color: #111;">Reports and Results</h5>
						<ul class="yearevents">
							<li>Information Booklet</li>
							<li>Information Flyer</li>
							<li>Presenations</li>
							<li>Articles</li>
							
						</ul>
					</div>
	
				</div>
			</div>
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