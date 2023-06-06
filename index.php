<?php
include("./config.php")
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
    <title>999 Emergency Services center in Bangladesh</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid page-width">
          <a class="navbar-brand" href="#">
            <img class="logo-size" src="./img/logo.png" alt="" srcset="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Emergency</a>
              </li>
              <li class="nav-item dropdown text-white">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Services
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item text-black" href="#">Action</a></li>
                  <li><a class="dropdown-item text-black" href="#">Request</a></li>
                  <li><hr class="dropdown-divider text-black"></li>
                  <li><a class="dropdown-item text-black" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item text-white">
                <a class="nav-link text-white">About</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Services" aria-label="Search" id="live_search">
              <button class="btn btn-outline-success" type="submit" onclick="refreshDiv();">Search</button>
              <div class="xyz">
              <div id="searchResult">
                <div id="refre">
                <?php 
                  include'./config.php';
                ?>
                </div>
              </div>
              </div>
            </form>
          </div>
        </div>
      </nav>


      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner vh80">
          <div class="carousel-item active">
            <img src="./img/999.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none bg-clor d-md-block">
              <h5>Happy with us</h5>
              <p>We care about your everything</p>
            </div>
          </div>
          <div class="carousel-item vh80">
            <img src="./img/slide3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>বঙ্গবন্ধুর বাংলাদেশে</h5>
              <p>পুলিশ আছে জনতার পাশে</p>
            </div>
          </div>
          <div class="carousel-item vh80">
            <img src="./img/slide2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block bg-gg">
              <h5>ফায়ার সার্ভিস ও সিভিল ডিফেন্স অধিদপ্তর</h5>
              <p>“অগ্নিকান্ডসহ সকল দুর্যোগ মোকাবিলা ও নাগরিক সুরক্ষা নিশ্চিতকরণের মাধ্যমে এশিয়ার অন্যতম শ্রেষ্ঠ  প্রতিষ্ঠান হিসেবে  সক্ষমতা অর্জন”</p>
            </div>
          </div>
          <div class="carousel-item vh80">
            <img src="./img/slide1.webp" class="d-block w-100" alt="...">
            <div class="carousel-caption bg-clor d-none d-md-block">
              <h5>Specialist Doctors List in Bangladesh</h5>
              <p>Health care is one of the prime concerns of Bangladesh government</p>
              <button class="btn btn-success a-link-color"><a href="https://www.doctorbangladesh.com/" target=”_blank”>Our Specialist</a></button>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="page-width">
        <div class="row pt-5 pb-5">
            <div class="col-md-6">
                <img src="./img/police.jpg" class="img-fluid" alt="Banner">
            </div>
            <div class="col-md-6 p-5">
                <h2>Human rights</h2>
                <p>Human rights are generally perceived as inalienable fundamental rights to which a person is inherently entitled simply because he or she is a human being. Human rights are thus conceived as universal and egalitarian. These rights may exist as natural rights or as legal rights, in local, regional, national, and international law. The doctrine of human rights in international practice, within international law, global and regional institutions, in the policies of states and in the activities of non-governmental organizations, has been a cornerstone of public policy around the world.</p>
            </div>
        </div>
        <div class="row pt-5 pb-5">
            <div class="col-md-6 p-5">
                <h2>Human rights</h2>
                <p>Human rights are generally perceived as inalienable fundamental rights to which a person is inherently entitled simply because he or she is a human being. Human rights are thus conceived as universal and egalitarian. These rights may exist as natural rights or as legal rights, in local, regional, national, and international law. The doctrine of human rights in international practice, within international law, global and regional institutions, in the policies of states and in the activities of non-governmental organizations, has been a cornerstone of public policy around the world.</p>
            </div>
            <div class="col-md-6">
                <img src="./img/police.jpg" class="img-fluid" alt="Banner">
            </div>
        </div>
      </div>




      <!--Footer-->
<div class="container-fluid my-5">

    <!-- Footer -->
    <footer
            class="text-center text-lg-start text-white"
            style="background-color: #1c2331"
            >
      <!-- Section: Social media -->
      <section
               class="d-flex justify-content-between p-4"
               style="background-color: #00004A"
               >
        <!-- Left -->
        <div class="me-5">
          <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->
  
        <!-- Right -->
        <div>
          <a href="" class="text-white me-4">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-google"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-github"></i>
          </a>
        </div>
        <!-- Right -->
      </section>
      <!-- Section: Social media -->
  
      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold"><a class="navbar-brand" href="./index.html">
                <img class="logo-size" src="./img/logo.png" alt="" srcset="">
              </a></h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #00004A; height: 2px"
                  />
              <p>
                Here you can use rows and columns to organize your footer
                content. Lorem ipsum dolor sit amet, consectetur adipisicing
                elit.
              </p>
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Products</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #00004A; height: 2px"
                  />
              <p>
                <a href="#!" class="text-white">MDBootstrap</a>
              </p>
              <p>
                <a href="#!" class="text-white">MDWordPress</a>
              </p>
              <p>
                <a href="#!" class="text-white">BrandFlow</a>
              </p>
              <p>
                <a href="#!" class="text-white">Bootstrap Angular</a>
              </p>
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Useful links</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #00004A; height: 2px"
                  />
              <p>
                <a href="#!" class="text-white">Services</a>
              </p>
              <p>
                <a href="#" class="text-white">Search</a>
              </p>
              <p>
                <a href="./emergency.html" class="text-white">Emergency</a>
              </p>
              <p>
                <a href="./help.html" class="text-white">Help</a>
              </p>
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Contact</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p><i class="fas fa-home mr-3"></i> Bangladesh republic services</p>
              <p><i class="fas fa-envelope mr-3"></i> info@999-service.com</p>
              <p><i class="fas fa-phone mr-3"></i> +88 01 234 567 88</p>
              <p><i class="fas fa-print mr-3"></i> +88 01 234 567 89</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->
  
      <!-- Copyright -->
      <div
           class="text-center p-3"
           style="background-color: rgba(0, 0, 0, 0.2)"
           >
        © 2023 Copyright:
        <a class="text-white" href="#"
           >999</a
          >
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  
  </div>
  <!-- End of .container -->



      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

  <script type="text/javascript">
      $(document).ready(function(){
        $("#live_search").keyup(function(){
          var input =$(this).val();
          //alert(input);
          if(input !=""){
            $.ajax({
              url:"emergency.php",
              method:"POST",
              data:{input:input},

              success:function(data){
                $("#searchResult").html(data);
              }
            })
          }
          else{
            $("#searchResult").css("display","none");
          }
        });
      });


      function refreshDiv(){
        $('#refresh').load(location.href + "#refre");
      }

  </script>



</body>
</html>