<style>
	 @media screen and (min-width: 992px) {
     /* .bottom-header{
		 margin: auto !important;
	 } */
	 /* .homeOne-banner, .banner__wrapper, .banner__image{
		 
	 } */
	 .banner__div{
		 height: 70vh !important;
	 }
	 .homeOne-banner{
		 background:#111 !important;
	 }
	 .homeOne-banner{

	 }
	 .banner__wrapper{
		height: 70vh !important;


	 }

     }
	 .header__words{
		 background: #fff !important;
		 padding: 10px !important;
		 border-radius: 20px !important;
		 color: #111 !important;
		 font-weight: bold !important;
		 font-size: 15px !important;
		 line-height: 1.5em !important;

	 }

</style>

<header>


				<!-- ===================== Bottom Header ======================= -->
				<div class="bottom-header">
					<div class="container">
						<div class="wrapper clearfix">
							<div class="logo float-left"><a href="#">
                                <img src="https://klba.or.ke/images/klba_logo_full.png"
                                 class="header__logo"
                                 alt="Logo">
                            </a></div>

							<div class="float-right right-side">
								<ul>
									<li>
                                        <a href="{{ route('login') }}">
                                            <h6>Login</h6>
                                        </a>
                                        |
                                        <a href="{{ route('register') }}">
                                            <h6>Register</h6>
                                        </a>
                                        

										

									</li>
								

								</ul>
							</div> <!-- /.right-side -->
						</div> <!-- /.wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.bottom-header -->
			</header>

			<!--
			=============================================
				Theme Main Menu
			==============================================
			-->
			<div class="theme-main-menu">
			   <div class="container">
			   		<!-- ============== Menu Warpper ================ -->
			   		<nav id="mega-menu-holder" class="clearfix">
					   <ul class="clearfix header__push_left">
					      <li class="active"><a href="{{ route('/') }}">Home</a>
					      	
					      </li>
                          <li><a href="#">Organization</a>
                            <ul class="dropdown" style="background: #fff; border-radius:10px">
								<div class="d-flex">
									<div class="header__drop">
										<li><a href="#">ABOUT US</a></li>
										<li><a href="#">HISTORY</a></li>
										<li><a href="#">EXECUTIVE COMMITTE</a></li>
										<li><a href="#">STAFF MEMBERS</a></li>
										<li><a href="#">CONSTITUTION</a></li>
										<li><a href="#">HISTORY</a></li>
										<li><a href="#">EXECUTIVE COMMITTE</a></li>
										<li><a href="#">BYE LAWS</a></li>
										<li><a href="#">JOINING THE OGRANIZATION</a></li>
										<li><a href="{{ route('contactus') }}">CONTACT US</a></li>


	
									  </div>
									  <div class="header__drop1">
										<li><a href="#">BREEDER SOCITIES</a></li>
										<li><a href="#">BREEDER LINKS</a></li>
										<li><a href="#">BREEDER STANDARDS</a></li>
										<li><a href="#">MEMBERSHIP</a></li>

	
									  </div>
                           </ul>
                        </li>
					      <li><a href="#">Services</a>

						
							<!--extension and training-->

							<!--extension and training-->
							<!--extension and training-->
							<!--extension and training-->

					      	<ul class="dropdown " style="background: #fff">
								  <div class="d-flex">
									<div class="header__drop">
										<li><a href="#">EXTENSION AND TRAINING</a></li>
										<li><a href="#">TRAINING SERVICES</a></li>
										<li><a href="#">INSPECTION</a></li>
										<li><a href="#">FIND AN INSPECTOR</a></li>
										<li><a href="#" style="display: none">HER</a></li>
	
									  </div>
									  <div class="header__drop1">
										<li><a href="#">LIVE STOCK REGISTRATION</a></li>
										<li><a href="#">RULES AND REGULATIONS</a></li>
										<li><a href="#">IDENTICATION OF ANIMALS</a></li>
										<li><a href="#">OFFICIAL FORMS AND FEES</a></li>
										<li><a href="#">ONLINE HERD BOOK</a></li>
	
									  </div>

								  </div>

									<li><a href="#">LIVE STOCK REGISTRATION</a></li>
									<li><a href="#">RULES AND REGULATIONS</a></li>
									<li><a href="#">IDENTICATION OF ANIMALS</a></li>
									<li><a href="#">OFFICIAL FORMS AND FEES</a></li>
									<li><a href="#">ONLINE HERD BOOK</a></li>

								 


					         </ul>

					      </li>
					     
					      <li>
							  <a href="#">
								<i class="fa fa-facebook" style="color:black;"></i>
								  PUBLICATIONS

						  </a>

					      	<ul class="dropdown">
					            <li><a href="#">CURRENT PUBLICATIONS</a></li>
					            <li><a href="3">SOCEITY PUBLICATIONS</a></li>
					            <li><a href="#">ANNUAL PUBLICATIONS</a></li>
					         </ul>
					      </li>
					      <li><a href="#">SHOW AND EVENTS</a>
					      	<ul class="dropdown">
					            <li><a href="{{ route('currentevents') }}">CURRENT NEWS</a></li>
					            <li><a href="{{ route('upcomingevnts') }}">UPCOMING EVENTS</a></li>
								<li><a href="{{ route('reports') }}">REPORTS AND RESULTS</a></li>
					         </ul>
					      </li>
					      <li><a href="{{ route('contactus') }}">CONTACT US</a></li>
					   </ul>
					</nav> <!-- /#mega-menu-holder -->
			   </div> <!-- /.container -->
			</div> <!-- /.theme-main-menu -->

			<!--
			=============================================
				Theme Main Banner
			==============================================
			-->

			

