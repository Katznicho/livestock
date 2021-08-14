<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Live Stock Farming</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="{{ asset('images/fav-icon/icon.png') }}">

    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
</head>
<style>
    .register__buttonDiv {
        margin: 10px auto !important;
    }

    .register__button {
        background: #1c478e !important;
        color: #fff !important;
        padding: 4px !important;
        width: 70% !important;
        cursor: pointer;
        border-radius: 20px !important;
    }
	.currentNewImage{
      /* width: 80% !important;
	  height: 80vh !important;
	  object-fit: cover !important; */
	  object-fit: cover !important;
	  width: 100% !important;
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

        <!--current events--->
        <!--
   =============================================
    Serivice Details
   ==============================================
   -->
        <div>
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="#">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Home</a></li>
                    <li><a href="#">
        
                        Show & Events</a></li>
                    <li><a href="#">Upcoming shows</a></li>
                
                  </ul>
                <!--bread crumb-->
                <div class="details-content float-left">

                    <div class="single-service-part clearfix col-md-12">
						<div class="col-md-7">
							<img src="https://klba.or.ke/images/goatbreeders.jpg" 
							class="currentNewImage"
						  alt="" class="float-left">

						</div>
                     <div class="col-md-5">
						<div class="text float-left">
                            <div>
                                <h2> News</h2>
                            </div> <!-- /.theme-title -->
                            <p>
								The Livestock Breeders Show and Sale  attracted both large-scale and smallholder 
								farmers from all over the country, with about 30 farmers from Uganda. The show began with the j
								udging of various animal breeds, including cows such as Jersey, Ayrshire, Friesian and Guernsey.
							</p>
                            
                        </div> 

					 </div>


						<!-- /.text -->
                    </div> <!-- /single-service-part -->
                </div> <!-- end #accordion -->
            </div> <!-- End of .service-panel -->
        </div> <!-- /.details-content -->

    </div> <!-- /.service-sidebar -->
    </div> <!-- /.container -->
    </div> <!-- /.service-details -->

    <!---current events-->
          
	<!--year national news-->
	<div class="container">
		
		<div class="row">
			<div class="col-md-12">
				<div class="yearevnets__content" style="margin-left: 25px; margin-top:15px; cursor: pointer;">
					<p style="color: #000;">Year 2016 National Shows News</p>
					<ul class="yearevents">
						<li>1.Aks Shows</li>
						<li>2.Livestock Breeders Show and Sale</li>
						<li> 3.County Shows</li>
						<li>4.Society Shows</li>
					</ul>
				</div>

			</div>
		</div>
	</div>
	<!--year national news-->

    @include('Partners.Partners');
    @include('Footer.Footer');

    <!--header-->
    <!-- Js File_________________________________ -->

    <!-- j Query -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="text/javascript" src=" {{ asset('vendor/jquery.2.2.3.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script type="text/javascript" src="{{ asset('vendor/bootstrap/bootstrap.min.js') }}"></script>
    <!-- Bootstrap Select JS -->
    <script type="text/javascript" src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.js') }}"></script>

    <!-- Vendor js _________ -->
    <!-- revolution -->
    <script src="{{ asset('vendor/revolution/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('vendor/revolution/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/revolution/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/revolution/revolution.extension.layeranimation.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('vendor/revolution/revolution.extension.navigation.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('vendor/revolution/revolution.extension.kenburn.min.js') }}"></script>
    <!-- menu  -->
    <script type="text/javascript" src="{{ asset('vendor/menu/src/js/jquery.slimmenu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/jquery.easing.1.3.js') }}"></script>
    <!-- isotop -->
    <script type="text/javascript" src="{{ asset('vendor/isotope.pkgd.min.js') }}"></script>
    <!-- fancy box -->
    <script type="text/javascript" src="{{ asset('vendor/fancy-box/jquery.fancybox.pack.js') }}"></script>
    <!-- owl.carousel -->
    <script type="text/javascript" src="{{ asset('vendor/owl-carousel/owl.carousel.min.js') }}"></script>
    <!-- js count to -->
    <script type="text/javascript" src="{{ asset('vendor/jquery.appear.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/jquery.countTo.js') }}"></script>


    <!-- Theme js -->
    <script type="text/javascript" src="{{ asset('js/theme.js') }}"></script>

    </div> <!-- /.main-page-wrapper -->



</body>

</html>
