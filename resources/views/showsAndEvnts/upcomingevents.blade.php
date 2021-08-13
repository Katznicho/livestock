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
</style>
<body>
    <div class="main-page-wrapper">
        <!--header-->
		@include('Header.header');
		 

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