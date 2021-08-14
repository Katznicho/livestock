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

				Services</a></li>
			<li><a href="#">LiveStocl Registration</a></li>
            <li><a href="#">Identification of Animals</a></li>
		
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
				   <div class="identification">
                       <h3>Animal Identification</h3>
                       <div>
                        Animal identification is the basis for keeping accurate production records of the herd/flock. Individual animal identification allows producers to keep records on an animal's parentage, birth date, production records, health history, and a host of other important management information. Accurate records provide the producer with enough information to make individual or whole herd/flock management decisions. In many instances, the producer needs to be able to quickly identify an animal. A successful identification system makes this task more efficient. Identification is also important to indicate ownership of a particular animal, or to indicate the herd/flock of origin. There are many identification systems, but selection should be based on the method that best fits an operation's needs. Factors such as size of the operation, type of records kept,and source of replacement breeding stock, determines which system(s) to choose. When selecting forms of identification, consider the application methods for each type, along with visibility from a distance, equipment needed for application, cost, permanence, and how easy or difficult the method is to apply. Two different methods should be used to assure permanent identification. Once a system has been selected, it is important to be consistent with providing each animal a unique and permanent identification number that matches with each method used. Be careful not to duplicate numbers over a minimum of a ten-year period. When an animal is born/purchased, it should be identified immediately with only one unique number, which will serve as its identification number until it departs from the herd/flock.
                       </div>
                       <h3>
                        Numbering Systems
                       </h3>
                       <div>
                        There are many numbering systems that can be used to identify animals in a herd. One of the most commonly used and highly recommended systems uses a combination of letters and numbers, 
                        designating birth year and birth order respectively. 
                       </div>
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