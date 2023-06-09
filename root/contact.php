<?php 
  require "../database/connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $website_name?></title>

  <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!--- End favicon-->

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Public+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
  <!-- End google font  -->

  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/fontawesome.css" />
  <link rel="stylesheet" href="assets/css/slick.css" />
  <link rel="stylesheet" href="assets/css/magnific-popup.css" />
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
  <link rel="stylesheet" href="assets/css/icomoon-font.css" />
  <link rel="stylesheet" href="assets/css/animate.css" />


  <!-- Code Editor  -->

  <link rel="stylesheet" href="assets/css/main.css" />
  <link rel="stylesheet" href="assets/css/app.min.css" />
</head>
<style>
  #load_img {
    animation: rotate 1s infinite linear;
    transform: translate(-50%, -50%); 
    margin: 15em 45%
  }
  #fixed  {
    display: none;
  }
  @keyframes rotate {
      from {
        transform: rotate(0deg);
      }
      to {
        transform: rotate(360deg);
      }
  }
  @media screen and (min-width: 768px) {
    #load_img {
      margin: 15em 50%;
      }
  }

</style>
<img src="../dashboard/images/bitcoin.png" width="50px" id='load_img'>
<div id="fixed">
<script>
  var load_img = document.getElementById('load_img');
  var fixed = document.getElementById('fixed');
  setTimeout(() => {
    load_img.style.display = 'none'
    fixed.style.display = 'block'
  }, 4000);
</script>

<body class="light">



  <header class="site-header site-header--menu-right Optimal-header-section" id="sticky-menu">
    <div class="container-fluid">
      <nav class="navbar site-navbar">
        <!-- Brand Logo-->
        <div class="brand-logo">
          <a href="index">
            <img src="../images/<?php echo $logo_img?>" alt="" class="light-version-logo">
          </a>
        </div>
        <div class="menu-block-wrapper">
          <div class="menu-overlay"></div>
          <nav class="menu-block" id="append-menu-header">
            <div class="mobile-menu-head">
              <div class="go-back">
                <i class="fa fa-angle-left"></i>
              </div>
              <div class="current-menu-title"></div>
              <div class="mobile-menu-close">&times;</div>
            </div>
            <ul class="site-menu-main ">
              <li class="nav-item sub-menu--item nav-item-has-children">
                <a href="index">Home</a>
              </li>

              <li class="nav-item sub-menu--item nav-item-has-children">
                <a href="about-us">About</a>
              </li>

              <li class="nav-item sub-menu--item nav-item-has-children">
                <a href="service">Services</a>
              </li>

              <li class="nav-item sub-menu--item nav-item-has-children">
                <a href="faq">FaQ</a>
              </li>
              <li class="nav-item sub-menu--item nav-item-has-children">
                <a href="contact">Contact</a>
              </li>





            </ul>
          </nav>
        </div>
        <div class="header-btn header-btn-l1 ms-auto d-none d-xs-inline-flex">
          <a class="Optimal-btn Optimal-header-btn" href="../public/register">
            Get Started
          </a>
          
        </div>
        <!-- mobile menu trigger -->
        <div class="mobile-menu-trigger">
          <span></span>
        </div>
        <!--/.Mobile Menu Hamburger Ends-->
      </nav>
    </div>
  </header>
  <!--End landex-header-section -->

  <div class="Optimal-breadcrumb-section">
    <div class="container">
      <div class="breadcrumbs">
        <h1 class="wow fadeInUpX" data-wow-delay="0s">Get in touch</h1>
        <nav aria-label="breadcrumb" class="wow fadeInUpX" data-wow-delay="0.15s">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"> Get in touch</li>
          </ol>
        </nav>
      </div>

    </div>
    <div class="Optimal-shape8">
      <img src="assets/images/shape/shape7.png" alt="">
    </div>
    <div class="Optimal-shape9">
      <img src="assets/images/shape/shape8.png" alt="">
    </div>
  </div>
  <!-- End breadcrumb -->

  <div class="section bg-warning-300 Optimal-section-padding3">
    <div class="container">
      <div class="Optimal-section-title">
        <h2>Want communicate directly?</h2>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="Optimal-iconbox-wrap4 wow fadeInUpX" data-wow-delay="0s">
            <div class="Optimal-iconbox-icon4">
              <img src="assets/images/all-img/contact/icon1.png" alt="">
            </div>
            <div class="Optimal-iconbox-data4">
              <h4>Careers</h4>
              <p>Want to join our team, reach and be a part of our ever growing and innonating team.</p>
              <!-- <a class="Optimal-icon-btn" href="">Discover More <img src="assets/images/svg/arrow-black-right.svg" alt=""></a> -->
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="Optimal-iconbox-wrap4 wow fadeInUpX" data-wow-delay=".10s">
            <div class="Optimal-iconbox-icon4">
              <img src="assets/images/all-img/contact/icon2.png" alt="">
            </div>
            <div class="Optimal-iconbox-data4">
              <h4>Help & Support</h4>
              <p>Our highly trained customer representatives are always avaliable to with help & support.</p>
              <!-- <a class="Optimal-icon-btn" href="">Discover More <img src="assets/images/svg/arrow-black-right.svg" alt=""></a> -->
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
          <div class="Optimal-iconbox-wrap4 wow fadeInUpX" data-wow-delay=".20s">
            <div class="Optimal-iconbox-icon4">
              <img src="assets/images/all-img/contact/icon3.png" alt="">
            </div>
            <div class="Optimal-iconbox-data4">
              <h4>Ask Question</h4>
              <p>Got questions? Feel free to reach us on any of our contact platforms and well get back to you.</p>
              <!-- <a class="Optimal-icon-btn" href="">Discover More <img src="assets/images/svg/arrow-black-right.svg" alt=""></a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End section -->

  <div class="section Optimal-section-padding">
    <div class="container">
      <div class="row">
        <div class="col-xl-5 col-lg-6 col-md-10">
          <div class="Optimal-default-content contact-page">
            <h2>Have any questions? We will talk to you sincerely anytime</h2>
            <p>If you have any questions about registration, please fill out the form and our team will get back to you within 24 hours.</p>
            <div class="Optimal-contact-info">
              <ul>
                <li>
                  <a href="tel:123">
                    <div class="Optimal-contact-info-icon">
                      <img src="assets/images/social/call.svg" alt="">
                    </div>
                    <h5>Call us</h5>
                    <!-- <p>+1 <?php echo $website_name?></p> -->
                  </a>
                </li>
                <li>
                  <a href="mailto:name@email.com">
                    <div class="Optimal-contact-info-icon">
                      <img src="assets/images/social/email.svg" alt="">
                    </div>
                    <h5>Email us</h5>
                    <p><?php echo $website_email?></p>
                  </a>
                </li>
                <li>
                  <a href="">
                    <div class="Optimal-contact-info-icon">
                      <img src="assets/images/social/map.svg" alt="">
                    </div>
                    <h5>Office address</h5>
                    <p>4132 Thornridge City, New York.</p>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 offset-xl-1">
          <div class="Optimal-contact-wrap  wow fadeInUpX">
            <?php 
              $name = $email = $sub = $text = "";
                if (isset($_POST['submit'])) {
                  $name = htmlspecialchars(trim($_POST['name']));
                  $email = htmlspecialchars(trim($_POST['email']));
                  $sub = htmlspecialchars(trim($_POST['subject']));
                  $text = htmlspecialchars(trim($_POST['textarea']));

                                                      // send mail
                $to = "$admin_mail";
                $subject = "Hello Admin, somebody sent a request Contact Mail {$date}";
                $message = "
                <div style='background: #E4E9F0'>
                <center><img src='$website_url/images/dashboard-logo.png' width='100px;'></center>
                <div style='font-family: sans-serif; padding: 10px; margin: 5px; background: white; margin: 5px 5%; border-radius: 10px;'>
                <center><img src='$website_url/images/mail.png' width='100px'></center>
                <p>Name: <b>$name</b></p>
                <p>Email:  $email </p>
                <p>Subject:  $sub </p>
                <p>Message:  $text</p>  
                <a href='$website_url' style='color: dodgerblue; text-decoration: none'>
                <button style='padding: 10px; background: dodgerblue; border: 1px solid transparent; color: white; width: 100%; border-radius: 3px'>Login Now</button></a>                
                </div><br><br>
                </div>
                ";
        
                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        
                // More headers
                $headers .= "rom: $website_email" . "\r\n";
                $headers .= "Reply-To: $website_email \r\n";
                $headers .= "Return-Path: $website_email\r\n";
                // $headers .= "CC: $website_email\r\n";
                $headers .= "BCC: $website_email\r\n";
    
                if (mail($to,$subject,$message,$headers,"-f $website_email")){
                    echo "<script>
                              alert('Your request has been sent. You will receive a message shortly');
                              window.location.href = 'index'
                          </script>";
                }else {
                    echo "<script>
                      alert('Sorry an error occurred. Please try again later');
                      window.location.href = 'index'
                  </script>";

                }
              }
            ?>
            <form action="" method="post">
            <div class="Optimal-input-field">
              <label>Your name</label>
              <input type="text" name='name' value='<?php echo $name?>' placeholder="Enter your full name" required>
            </div>
            <div class="Optimal-input-field">
              <label>Email address</label>
              <input type="email" name='email' value='<?php echo $email?>' placeholder="Enter your email" required>
            </div>

            <div class="Optimal-input-field">
              <label>Subject</label>
              <input type="text" name='subject' value='<?php echo $sub?>' placeholder="" required>
            </div>

            <div class="Optimal-input-field">
              <label>Write your message</label>
              <textarea name="textarea" value='<?php echo $text?>' placeholder="Write us your question here..." required></textarea>
            </div>
            <button id="Optimal-input-submit" name='submit'>Send Message</button>
</form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End section -->

  

  <div class="Optimal-map">
    <div id="map"></div>
  </div>

  <!-- End map -->

  <!-- <div class="section Optimal-section-padding2">
    <div class="container">
      <div class="Optimal-section-title">
        <h2>Ask us if you have any <br/> other questions</h2>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="nexto-accordion-one" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Q. What is cryptocurrency in general?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  A cryptocurrency is a digital currency, which is an alternative form of payment created using encryption algorithms.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Q. What other types of cryptocurrency are out there?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  A cryptocurrency is a digital currency, which is an alternative form of payment created using encryption algorithms.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Q. What can you buy with cryptocurrency, and how?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  A cryptocurrency is a digital currency, which is an alternative form of payment created using encryption algorithms.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Q. What support and service packages are available?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  A cryptocurrency is a digital currency, which is an alternative form of payment created using encryption algorithms.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="nexto-accordion-one two" id="accordionExample2">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  Q. Will my data and information be safe?
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample2">
                <div class="accordion-body">
                  A cryptocurrency is a digital currency, which is an alternative form of payment created using encryption algorithms.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  Q. What regulation and requirements govern bitcoin?
                </button>
              </h2>
              <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample2">
                <div class="accordion-body">
                  A cryptocurrency is a digital currency, which is an alternative form of payment created using encryption algorithms.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingSeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                  Q. What is the biggest problem with cryptocurrency?
                </button>
              </h2>
              <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample2">
                <div class="accordion-body">
                  A cryptocurrency is a digital currency, which is an alternative form of payment created using encryption algorithms.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingEight">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                  Q. Will my data and information be safe?
                </button>
              </h2>
              <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample2">
                <div class="accordion-body">
                  A cryptocurrency is a digital currency, which is an alternative form of payment created using encryption algorithms.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="Optimal-center-btn">
        <a class="Optimal-btn small-btn" href="">Ask More</a>
      </div>
    </div>
  </div> -->

  <!-- End -->

  <div class="Optimal-go-top">
    <img src="assets/images/svg/arrow-black-right.svg" alt="">
  </div>


  <!-- Footer  -->

  <footer class="Optimal-footer-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="Optimal-textarea">
            <div class="Optimal-footer-logo">
              <img src="assets/images/logo/2.png" alt="" class="light-version-logo">
            </div>
            <p>Trade with a customisable multi-asset trading platform. Offering CFDs on forex, commodities, cryptocurrencies, NFT's and synthetics</p>
            <p class="Optimal-copywright">&copy; Copyright 2022, All Rights Reserved by <?php echo $website_name?> Fx</p>
          </div>
        </div>
        <div class="col-lg-2 offset-lg-1 col-md-4 col-sm-4">
          <div class="Optimal-footer-menu">
            <span>Product</span>
            <ul>
              <li><a href="">Crypto</a></li>
              <li><a href="">NFTs</a></li>
              <li><a href="">Forex</a></li>
              <li><a href="">Indices</a></li>
              <li><a href="">Stocks</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4">
          <div class="Optimal-footer-menu Optimal-custom-margin">
            <span>Company</span>
            <ul>
              <li><a href="index">Home</a></li>
              <li><a href="about-us">About</a></li>
              <li><a href="service">Service</a></li>
              <li><a href="faq">FAQ</a></li>
              <li><a href="s">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4">
          <div class="Optimal-footer-menu">
            <span>Contact</span>
            <ul>
              <!-- <li><a href="tel:123">+1 <?php echo $website_name?></a></li> -->
              <li><a href="mailto:<?php echo $website_email?>"><?php echo $website_email?></a></li>
            </ul>
          </div>
          <div class="Optimal-social-icon">
            <ul>
              <li>
                <a href="">
                  <svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.6518 1.76691C12.2028 1.96645 11.7289 2.09116 11.2301 2.16598C11.7289 1.86668 12.128 1.39279 12.3026 0.819124C11.8287 1.09348 11.3049 1.29302 10.7312 1.41773C10.2823 0.943833 9.63379 0.644531 8.93542 0.644531C7.58857 0.644531 6.49113 1.74197 6.49113 3.08883C6.49113 3.28836 6.51607 3.46295 6.56595 3.63755C4.54567 3.53778 2.72492 2.56505 1.50277 1.06854C1.30323 1.44267 1.17852 1.84174 1.17852 2.29069C1.17852 3.13871 1.60253 3.88697 2.27596 4.33592C1.87689 4.31098 1.50277 4.21121 1.15358 4.03662V4.06156C1.15358 5.25876 2.0016 6.25644 3.12398 6.48091C2.92445 6.5308 2.69997 6.55574 2.4755 6.55574C2.32585 6.55574 2.15125 6.5308 2.0016 6.50585C2.32585 7.47859 3.22375 8.2019 4.29625 8.2019C3.44823 8.85038 2.40067 9.24945 1.25335 9.24945C1.05381 9.24945 0.85428 9.24945 0.679688 9.22451C1.77713 9.92288 3.04916 10.322 4.4459 10.322C8.96037 10.322 11.4296 6.58068 11.4296 3.33825C11.4296 3.23848 11.4296 3.11377 11.4296 3.014C11.9035 2.68976 12.3275 2.26575 12.6518 1.76691Z" fill="white"></path>
                  </svg>
                </a>
              </li>
              <li>
                <a href="">
                  <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.61761 13.7535V7.8033H0.615234V5.48437H2.61761V3.77424C2.61761 1.78964 3.82974 0.708984 5.60014 0.708984C6.44818 0.708984 7.17702 0.772123 7.38943 0.800344V2.87437L6.16156 2.87492C5.19872 2.87492 5.01229 3.33245 5.01229 4.00385V5.48437H7.30858L7.00959 7.8033H5.01228V13.7535H2.61761Z" fill="#13111A"></path>
                  </svg>
                </a>
              </li>
              <li>
                <a href="">
                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.00221 2.05002C9.94011 2.05002 10.1696 2.05728 10.9352 2.09219C11.3954 2.09782 11.8514 2.18234 12.2831 2.34207C12.5962 2.46281 12.8805 2.64777 13.1178 2.88504C13.355 3.12232 13.54 3.40664 13.6607 3.71972C13.8205 4.15144 13.905 4.60736 13.9106 5.06765C13.9452 5.8332 13.9528 6.06269 13.9528 8.0006C13.9528 9.9385 13.9455 10.168 13.9106 10.9335C13.905 11.3938 13.8205 11.8498 13.6607 12.2815C13.54 12.5946 13.355 12.8789 13.1178 13.1161C12.8805 13.3534 12.5962 13.5384 12.2831 13.6591C11.8514 13.8189 11.3954 13.9034 10.9352 13.909C10.1699 13.9436 9.94045 13.9512 8.00221 13.9512C6.06396 13.9512 5.83446 13.9439 5.06926 13.909C4.60897 13.9034 4.15305 13.8189 3.72133 13.6591C3.40825 13.5384 3.12392 13.3534 2.88665 13.1161C2.64938 12.8789 2.46442 12.5946 2.34368 12.2815C2.18395 11.8498 2.09943 11.3938 2.0938 10.9335C2.05923 10.168 2.05163 9.9385 2.05163 8.0006C2.05163 6.06269 2.05889 5.8332 2.0938 5.06765C2.09943 4.60736 2.18395 4.15144 2.34368 3.71972C2.46442 3.40664 2.64938 3.12232 2.88665 2.88504C3.12392 2.64777 3.40825 2.46281 3.72133 2.34207C4.15305 2.18234 4.60897 2.09782 5.06926 2.09219C5.83481 2.05763 6.0643 2.05002 8.00221 2.05002ZM8.00221 0.742188C6.03216 0.742188 5.784 0.750482 5.00981 0.785736C4.40741 0.797718 3.8114 0.911778 3.24714 1.12306C2.76309 1.30544 2.32467 1.59123 1.96246 1.96051C1.59285 2.32285 1.30681 2.76152 1.12432 3.24587C0.913039 3.81014 0.79898 4.40614 0.786998 5.00855C0.752436 5.78205 0.744141 6.03021 0.744141 8.00025C0.744141 9.9703 0.752436 10.2185 0.787689 10.9926C0.799671 11.5951 0.913731 12.1911 1.12502 12.7553C1.3073 13.2396 1.5931 13.6783 1.96246 14.0407C2.32487 14.41 2.76353 14.6958 3.24783 14.8781C3.81209 15.0894 4.4081 15.2035 5.0105 15.2155C5.78469 15.25 6.03181 15.259 8.0029 15.259C9.97398 15.259 10.2211 15.2507 10.9953 15.2155C11.5977 15.2035 12.1937 15.0894 12.758 14.8781C13.24 14.6913 13.6777 14.4059 14.0431 14.0403C14.4085 13.6746 14.6936 13.2367 14.8801 12.7546C15.0914 12.1904 15.2054 11.5944 15.2174 10.992C15.252 10.2185 15.2603 9.9703 15.2603 8.00025C15.2603 6.03021 15.252 5.78205 15.2167 5.00786C15.2047 4.40545 15.0907 3.80944 14.8794 3.24518C14.6971 2.76089 14.4113 2.32222 14.042 1.95981C13.6795 1.59046 13.2409 1.30466 12.7566 1.12237C12.1923 0.911086 11.5963 0.797027 10.9939 0.785045C10.2204 0.750482 9.97225 0.742188 8.00221 0.742188Z" fill="white"></path>
                    <path d="M8.00453 4.27441C7.26737 4.27441 6.54675 4.49301 5.93382 4.90256C5.32089 5.31211 4.84316 5.89421 4.56106 6.57527C4.27896 7.25632 4.20515 8.00574 4.34896 8.72874C4.49278 9.45174 4.84776 10.1159 5.36901 10.6371C5.89027 11.1584 6.55439 11.5134 7.2774 11.6572C8.0004 11.801 8.74981 11.7272 9.43087 11.4451C10.1119 11.163 10.694 10.6853 11.1036 10.0723C11.5131 9.45938 11.7317 8.73877 11.7317 8.0016C11.7317 7.01309 11.339 6.06507 10.6401 5.36608C9.94107 4.6671 8.99305 4.27441 8.00453 4.27441ZM8.00453 10.421C7.52603 10.421 7.05827 10.2791 6.66041 10.0132C6.26255 9.74738 5.95246 9.36953 5.76934 8.92745C5.58623 8.48537 5.53832 7.99892 5.63167 7.52961C5.72502 7.0603 5.95544 6.62921 6.29379 6.29086C6.63215 5.95251 7.06323 5.72209 7.53254 5.62874C8.00185 5.53538 8.4883 5.5833 8.93038 5.76641C9.37246 5.94953 9.75031 6.25962 10.0162 6.65748C10.282 7.05534 10.4239 7.5231 10.4239 8.0016C10.4239 8.64326 10.169 9.25863 9.71528 9.71234C9.26156 10.1661 8.64619 10.421 8.00453 10.421Z" fill="white"></path>
                    <path d="M11.8768 4.99779C12.3578 4.99779 12.7478 4.60785 12.7478 4.12683C12.7478 3.6458 12.3578 3.25586 11.8768 3.25586C11.3958 3.25586 11.0059 3.6458 11.0059 4.12683C11.0059 4.60785 11.3958 4.99779 11.8768 4.99779Z" fill="white"></path>
                  </svg>
                </a>
              </li>
              <li>
                <a href="">
                  <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.65173 0.742188C3.80429 0.742188 0.708984 3.83749 0.708984 7.68493C0.708984 10.7513 2.70502 13.3548 5.45319 14.2805C5.80033 14.3384 5.91604 14.1359 5.91604 13.9334C5.91604 13.7598 5.91604 13.3259 5.91604 12.7474C3.97786 13.1813 3.57287 11.8217 3.57287 11.8217C3.25466 11.0117 2.79181 10.8092 2.79181 10.8092C2.15539 10.3752 2.84966 10.3752 2.84966 10.3752C3.54394 10.4331 3.92 11.0985 3.92 11.0985C4.52749 12.1688 5.53998 11.8506 5.94497 11.677C6.00283 11.2142 6.1764 10.9249 6.37889 10.7513C4.8457 10.5777 3.22573 9.97025 3.22573 7.30887C3.22573 6.55674 3.48608 5.92032 3.94893 5.45747C3.89108 5.2839 3.63072 4.58963 4.00679 3.60607C4.00679 3.60607 4.58535 3.4325 5.91604 4.32927C6.46568 4.18463 7.07317 4.09785 7.65173 4.09785C8.23029 4.09785 8.83778 4.18463 9.38742 4.32927C10.7181 3.4325 11.2967 3.60607 11.2967 3.60607C11.6727 4.5607 11.4413 5.25497 11.3545 5.45747C11.7884 5.94925 12.0777 6.55674 12.0777 7.30887C12.0777 9.97025 10.4578 10.5488 8.89564 10.7224C9.15599 10.9249 9.35849 11.3588 9.35849 11.9952C9.35849 12.9209 9.35849 13.6731 9.35849 13.9045C9.35849 14.078 9.4742 14.3095 9.85027 14.2516C12.5984 13.3548 14.5945 10.7513 14.5945 7.68493C14.5945 3.83749 11.4992 0.742188 7.65173 0.742188Z" fill="white"></path>
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  </div>



  <!-- <div class="Optimal-preloader">
    <div class="Optimal-spinner">
      <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
        <circle cx="50" cy="50" r="46" />
      </svg>
    </div>
    <div class="Optimal-title">loading...</div>
  </div> -->

  <!-- scripts -->
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/menu/menu.js"></script>
  <script src="assets/js/slick.js"></script>
  <script src="assets/js/isotope.pkgd.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/swiper-bundle.min.js"></script>
  <script src="assets/js/countdown.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyArZVfNvjnLNwJZlLJKuOiWHZ6vtQzzb1Y"></script>

  <script src="assets/js/app.js"></script>
</body>
</html>