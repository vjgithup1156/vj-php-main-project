
<!--Mail Function-->

<?php

if ($_POST['email']) {



  // $msg_c = '';

// echo "ok";
// exit;

  // $from = 'PINKGYM@pinkgym.co.in';



//   $to = 'saiyuvaraj@gmail.com, ramkaashyap@gmail.com, pinkkodambakkam@gmail.com, kodambakkam@pinkfitness.in';





  $from='developer@cwd.co.in';

  $to='ganesan@kathirvelmoopanar.in';




  $headers  = 'MIME-Version: 1.0' . "\r\n";

  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

  $headers .= 'From:' . $from;



  $subject = "Pink kodambakkam Weightloss Enquiry";



  $message = "<b>Dear Admin, </b>";



  $message = $message . "<div align=justify>You have an enquiry for the weight loss program </div>";

  $message = $message . "<br>Name  : $_REQUEST[name]</b>";
  $message = $message . "<br>email : $_REQUEST[email]</b>";
  $message = $message . "<br>number  : $_REQUEST[number]</b>";
  $message = $message . "<br>message  : $_REQUEST[message]</b>";



  // var_dump($message);die;



  $send = @mail($to, $subject, $message, $headers);

//   var_dump($send);
 

  if ($send) {
    // echo "alryfstuduyhf";

    echo "<script>alert('Thank you for making an enquiry. Our Fitness experts will contact you shortly.');document.location='http://senthil.in.net/kathirvelmooopanar/'</script>";
  } else {
// echo "jhf";
    echo "<script>alert('Your mail not sent.Please try agin');document.location='http://senthil.in.net/kathirvelmooopanar//'</script>";
  }
}
// }else{
//   echo "not in";
// }


?>

<!--Mail Function End-->



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>A.Kathirvel Moopanar & co</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: UpConstruction - v1.3.0
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center" id="logo-one">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/moopanarlogo-one.png" alt="">
        <!-- <h1><img src="assets/img/moopanarlogo.png"><span>.</span></h1> -->
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list info"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x info"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html" class="active">Home</a></li>
          <li><a href="#alt-services">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#projects">Projects</a></li>
          <!-- <li><a href="blog.html">Blog</a></li> -->
          <!-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                    class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> -->
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center w-100">
            <h2 data-aos="fade-down">Welcome to<br> <span>A.Kathirvel Moopanar & Co</span></h2>
            <p data-aos="fade-up">We are the mining contractors,we provide machinery solution to all the excavation problem in a mine or difficult areas.we do mineral excavation and overburden excavation under a leading corporate companies.since 2005 we have been in this field of expertise have been done projects with ultra tech cements Ltd.</p>
            <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/slider-2.jpg)">
      </div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/slider-1.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/slider-3.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/slider-4.jpg)"></div>
      <!-- <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-5.jpg)"></div> -->

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About page ======= -->


    <section id="alt-services" class="alt-services">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>About</h2>
        </div>


        <div class="row justify-content-around gy-4">
          <div class="col-lg-6 img-bg" style="background-image: url(assets/img/demo.webp);" data-aos="zoom-in"
            data-aos-delay="100"></div>

          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>The construction industry in India is an important indicator of the nation’s development</h3>
            <p>There is an ever increasing demand for innovative machines and solutions in the construction equipment industry that can cater to different applications in the field.</p>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-easel flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">JCP heavy construction</a></h4>
                <p>JCB, being one of India’s leading construction equipment manufacturers, offers indigenous, world-class, and versatile solutions to ease ground work for the construction industry.</p>
              </div>
            </div><!-- End Icon Box -->

            <!-- <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Processing</a></h4>
                <p>Ariyalur reddipalayam unit,primary mine location was at sundakkudi  2 mine lease areas was given under contract basis to us for excellence in excavation and mine maintenance.</p>
              </div>
            </div>End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Equipment</a></h4>
                <p>Hitachi zx 220 , volvo 380dl xcmg 230 CE and rock breakers such as pc 220 komatsu wedge shaped chisel ,breaker boom can be exchangeable ,mine trucks we provide was Bharat Benz</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Working places</a></h4>
                <p> We are also soon getting a project under dalmia cements ,Ariyalur.we provide excavating machineries and mine trucks on lease based with mining companies.</p>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section>

    <!-- End Icon Box -->


    <!-- ======= Constructions Section ======= -->
    

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Services</h2>
          <p>Our service - We provide excavating machineries and mine trucks on lease based with mining companies all at the most competitive prices</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-solid fa-mountain-city"></i>
              </div>
              <h3>Operating</h3>
              <p>PrHere at JCB, we know how much of an important role your equipment plays in your day-to-day operation.</p>
              
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
              </div>
              <h3>Peak performance</h3>
              <p>That’s why we offer many JCB maintenance services to help you run efficiently, reduce costs, and minimise any downtime</p>
              
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-compass-drafting"></i>
              </div>
              <h3>Machine maintenance</h3>
              <p>Whether it’s machine maintenance, machine repair, or general JCB help, you can rely on the decades of experience behind our expert team.</p>
              
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-trowel-bricks"></i>
              </div>
              <h3>Our trusted</h3>
              <p>We always work to the highest standards, and only use trusted, proven methods and genuine parts to ensure a quality finish, every time. </p>
            
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-helmet-safety"></i>
              </div>
              <h3>Team work</h3>
              <p>The ‘team’ is central to everything we do. You can see it exercised in our open plan offices, the way everyone feels part of the machine, the contribution everyone makes to our success.</p>
              
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
              </div>
              <h3>Rewards</h3>
              <p>We expect the very best from our team and they can expect the same from us. Our benefits package is one of the best, and the opportunities to develop are endless.</p>
            
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Projects</h2>
          <p>
            We are done a lot of work with the most of the Powerful machine to working of the years in complete our mining construction projects, and it's all here for you</p>
        </div>

        <div class="row">
          <div class="colum">
            <img src="assets/img/mining-flow-7.jpg">
            <img src="assets/img/mining-flow-1.jpg">
            <img src="assets/img/construct-3.jpg">
            <img src="assets/img/mining-3.jpg" height="235px">
          
          </div>
          <div class="colum">
            <!-- <img src="assets/img/construct-4.jpg"> -->
            <img src="assets/img/truck-1.jpg">
            <img src="assets/img/mining-flow-4.jpg">
            <img src="assets/img/mining-flow-8.jpg"  height="256px">
            <img src="assets/img/truck-2.jpg" height="287px">
         
         
          </div>
          <div class="colum">
            <img src="assets/img/mining-6.jpg">
            <img src="assets/img/mining-flow-5.jpg">
            <img src="assets/img/mining-flow-6.jpg">
            <img src="assets/img/mining-7.jpg">
            
           
      
            
           
            </div>
           </div>
        
        </div>
    </section><!-- End Our Projects Section -->

   <!-- ======= Contact Section ======= -->
   <section id="contact" class="contact">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="section-header">
        <h2>Contact Us</h2>

      <div class="row">

            <div class="col-lg-6 ">
       
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-map"></i>
              <h3>Office Address</h3>
              <p>A.Panangoor Sundakkudi Post - 621701 Ariyalur Dt.</p>
            </div>

           <div class="d-md-flex">
            <div class="col-md-6 info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-envelope"></i>
              <h3>Email Us</h3>
       <p><a href="mailto:ganesan@kathirvelmoopanar.in">ganesan@kathirvelmoopanar.in</a></p>
            </div>

            <div class="col-md-6 info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p><a href="tel:8300136264">
              +91 83001 36264</a></p>
              
            </div>
           </div>


          </div>
          

        <div class="col-lg-6">
          <!-- <div class="section-header">
            <h2>Contact Us</h2> -->
          <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="php-email-form">
            <div class="row gy-4">
              <div class="col-lg-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-lg-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="number" id="number" placeholder="Your Number" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit" name="submit-one">Send Message</button></div>
          </form>
          
        </div><!-- End Contact Form -->

      </div>

    </div>
      

    </div>
    
  </section><!-- End Contact Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>A.Kathirvel Moopanar &amp; Co</h3>

                <h4>Office Address</h4>
              <p>A.Panangoor Sundakkudi Post - 621701 Ariyalur Dt.</p>
                 
                <br>
                <h4>Client Address</h4>
              <p>
                Ultra Tech Cements Ltd
                Reddipalayam              
                Ariyalur - 621704.</p>

              <p>
                Dalmia  Cements Ltd
                Thamaraikulam
                Ariyalur - 621705. </p> <br>
                <!-- +91 83001 36264 -->
               <!-- ganesan@akm.com -->
               <p> <strong>Phone:</strong><a href="tel:8300136264"> +91 83001 36264</a></p>

               <p><strong>Email:</strong><a href="mailto:ganesan@kathirvelmoopanar.in"> ganesan@kathirvelmoopanar.in</a></p><br>
             
            
            </div>
          </div><!-- End footer info column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><a href="#">Operting</a></li>
              <li><a href="#">Perfomence</a></li>
              <li><a href="#">Team work</a></li>
              <li><a href="#">Rewards</a></li>          
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Social-media</h4>
            <div class="social-links d-flex mt-3">
              <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-telegram"></i></a>
              <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
              <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
              <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-whatsapp"></i></a>
            </div>
          </div><!-- End footer links column-->

        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>A.Kathirvel Moopanar & co</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
          Designed by <a href="https://www.cwd.co.in/">Sri Hema Infotech.</a>
        </div>
      </div>
    </div>

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>