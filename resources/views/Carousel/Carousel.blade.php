<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Carousel</title>
</head>
<style>
    /* .carousel-item{
          height: 32rem;
          background: #777;
      } */
    .carousel__images {
        display: flex;
        align-items: center;
        justify-content: space-evenly;
    }

    .carousel__imagesDiv {
        margin-left: 20px !important;
    }

    

    .carousel__readMore {
        color: blue;
    }
    .carousel__imageStyle{
      width: 100%;
      object-fit: contain;
      height: 50vh;
    }
    .carousel__headDiv{
      margin:5px;
      font-size: 15px;
      color: #5A5A5A;
      font-weight: bold;
    }
    .carousel__headDiv:hover{
      color: blue;
    }
    .carousel__div{
      margin-top:30px;
      margin-left: 5px;
      font-size: 14px;
      color: #5A5A5A;
    }
    .carousel__services{
      
      font-size: 25px;
      color: #5A5A5A;
      font-weight: 800;
      text-transform: uppercase;
      padding: 5px;
      margin: 10px;;
    }

</style>

<body>
    <div class="container">
         <div class="carousel__services">Our Services</div>
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel__images">

                        <div class="carousel__imagesDiv">
                            <img src="https://klba.or.ke/media/k2/items/cache/3707d8f2be163bd14c78cf07586f13bb_L.jpg"
                                class="d-block w-100 " alt="livestock">
                            <div>
                                <div class="carousel__headDiv">Record Keeping</div>
                                <div class="carousel__div">
                                    A farmer is entitled to keep proper and accurate records in order to maintain and
                                    improve breeding and…
                                    <span class="carousel__readMore">Read More...</span>

                                </div>
                            </div>

                        </div>

                        <div class="carousel__imagesDiv">
                            <img src="https://klba.or.ke/media/k2/items/cache/358873fad4914931314b94f2036b503a_L.jpg"
                                class="d-block w-100" alt="livestock">
                            <div>
                                <div class="carousel__headDiv"> Performance Inspection</div>
                                <div class="carousel__div">
                                    A farmer is entitled to keep proper and accurate records in order to maintain and
                                    improve breeding and…
                                    <span class="carousel__readMore">Read More...</span>

                                </div>
                            </div>
                        </div>

                        <div class="carousel__imagesDiv">
                            <img src="https://klba.or.ke/media/k2/items/cache/358873fad4914931314b94f2036b503a_L.jpg"
                                class="d-block w-100" alt="livestock">
                            <div>
                                <div class="carousel__headDiv">Performance Reports</div>
                                <div class="carousel__div">
                                    A farmer is entitled to keep proper and accurate records in order to maintain and
                                    improve breeding and…
                                    <span class="carousel__readMore">Read More...</span>

                                </div>
                            </div>
                        </div>






                    </div>


                </div>
                <div class="carousel-item">
                    <!--second slide--->
                    <div class="carousel__images">

                      <div class="carousel__imagesDiv">
                          <img src="https://klba.or.ke/media/k2/items/cache/358873fad4914931314b94f2036b503a_L.jpg"
                              class="d-block w-100" alt="livestock">
                          <div>
                              <div class="carousel__headDiv"> Record Keeping</div>
                              <div class="carousel__div">
                                  A farmer is entitled to keep proper and accurate records in order to maintain and
                                  improve breeding and…
                                  <span class="carousel__readMore">Read More...</span>

                              </div>
                          </div>

                      </div>

                      <div class="carousel__imagesDiv">
                          <img src="https://klba.or.ke/media/k2/items/cache/42121f00ffc451d0c288e11c1f28cbd4_L.jpg"
                              class="d-block w-100" alt="livestock">
                          <div>
                              <div class="carousel__headDiv">Live stock Identification and Registration</div>
                              <div class="carousel__div">
                                  A farmer is entitled to keep proper and accurate records in order to maintain and
                                  improve breeding and…
                                  <span class="carousel__readMore">Read More...</span>

                              </div>
                          </div>
                      </div>
                      
                      <div class="carousel__imagesDiv">
                          <img src="https://klba.or.ke/media/k2/items/cache/51a3864ed3ad604d2340c3f8fe249f94_L.jpg"
                              class="d-block w-100" alt="livestock">
                          <div>
                              <div class="carousel__headDiv">Milk Recording</div>
                              <div class="carousel__div">
                                  A farmer is entitled to keep proper and accurate records in order to maintain and
                                  improve breeding and…
                                  <span class="carousel__readMore">Read More...</span>

                              </div>
                          </div>
                      </div>






                  </div>
                    <!--second slide-->
                </div>
                <div class="carousel-item">
                    <!---third slide-->
                    <div class="carousel__images">

                      <div class="carousel__imagesDiv">
                          <img src="https://t3.ftcdn.net/jpg/03/49/94/60/240_F_349946067_O5ZT9iPZmqJsVmrSfq11BzmVmrV6pyc4.jpg"
                              class="d-block w-100" alt="livestock">
                          <div>
                              <div class="carousel__headDiv"> Record Keeping</div>
                              <div class="carousel__div">
                                  A farmer is entitled to keep proper and accurate records in order to maintain and
                                  improve breeding and…
                                  <span class="carousel__readMore">Read More...</span>

                              </div>
                          </div>

                      </div>

                      <div class="carousel__imagesDiv">
                          <img src="https://klba.or.ke/media/k2/items/cache/358873fad4914931314b94f2036b503a_L.jpg"
                              class="d-block w-100" alt="livestock">
                          <div>
                              <div class="carousel__headDiv">Live stock Inspection</div>
                              <div class="carousel__div">
                                  A farmer is entitled to keep proper and accurate records in order to maintain and
                                  improve breeding and…
                                  <span class="carousel__readMore">Read More...</span>

                              </div>
                          </div>
                      </div>
                      
                      <div class="carousel__imagesDiv">
                          <img src="https://klba.or.ke/media/k2/items/cache/3707d8f2be163bd14c78cf07586f13bb_L.jpg"
                              class="d-block w-100" alt="livestock">
                          <div>
                              <div class="carousel__headDiv">Performance Requests</div>
                              <div class="carousel__div">
                                  A farmer is entitled to keep proper and accurate records in order to maintain and
                                  improve breeding and…
                                  <span class="carousel__readMore">Read More...</span>

                              </div>
                          </div>
                      </div>






                  </div>
                    <!--third slide--->
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>

</body>

</html>
