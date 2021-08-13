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
    .contactus__area{
        margin-top: 40px !important;
    }
</style>
<body>
    <div class="main-page-wrapper">
        <!--header-->
        @include('Header.header')
        <!--header-->

        <!--contact form-->
         <div class="contactus__area">
             	<!-- Contact Form -->
			<div class="contact-form-holder container">
				<div class="row">
					<form action="http://themazine.com/html/fin-tech/inc/sendemail.php" class="form-validation" autocomplete="off">
						<div class="col-sm-6 col-xs-12">
							<div class="single-input-group">
								<input type="text" placeholder="First Name" name="Fname">
							</div> <!-- /.single-input-group -->
						</div> <!-- /.col- -->
						<div class="col-sm-6 col-xs-12">
							<div class="single-input-group">
								<input type="text" placeholder="Last Name" name="Lname">
							</div> <!-- /.single-input-group -->
						</div> <!-- /.col- -->
						<div class="col-sm-6 col-xs-12">
							<div class="single-input-group">
								<input type="email" placeholder="Email" name="email">
							</div> <!-- /.single-input-group -->
						</div> <!-- /.col- -->
						<div class="col-sm-6 col-xs-12">
							<div class="single-input-group">
								<input type="text" placeholder="Phone" name="phone">
							</div> <!-- /.single-input-group -->
						</div> <!-- /.col- -->
						<div class="col-xs-12">
							<textarea placeholder="Write Message" name="message"></textarea>
							<button class="tran3s">send</button>
						</div> <!-- /.col- -->
					</form>
				</div> <!-- /.row -->
				<!--Contact Form Validation Markup -->
				<!-- Contact alert -->
				<div class="alert-wrapper" id="alert-success">
					<div id="success">
						<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
						<div class="wrapper">
			               	<p>Your message was sent successfully.</p>
			             </div>
			        </div>
			    </div> <!-- End of .alert_wrapper -->
			    <div class="alert-wrapper" id="alert-error">
			        <div id="error">
			           	<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
			           	<div class="wrapper">
			               	<p>Sorry!Something Went Wrong.</p>
			            </div>
			        </div>
			    </div> <!-- End of .alert_wrapper -->
			</div> <!-- /.contact-form-holder -->


         </div>
        <!--contact form-->
        @include('Partners.Partners')
        @include('Footer.Footer')
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