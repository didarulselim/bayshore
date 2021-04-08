<?php

if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['number'])) {
    # code...
        if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['number'])) {
            # code...
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $number = $_POST['number'];

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                # code...
                echo 'Kindly Provide Valid Email';
            }
                else {
                 $body = $fname." ".$lname."\n".$email."\n".$number;
                    if (mail('info.bayshorecommunication@gmail.com' , 'Bayshore Communication Website', $body ,'From: salmansaikote9@gmail.com')) {
                    echo "<script>alert ('Thank You For Contact Us!')</script>";
                 }
                 else {
                    echo 'There is a problem in sending mail.';
                 }
                }
            
            }
       
        else {
            echo 'All Fields Are Required.';
        }
     }
        else {
            echo '';
        }
        
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Home - Bayshore Communication">
    <meta property="og:url" content="https://bayshorecommunication.com/">
    <meta property="og:image:alt" content="Bayshore Communication">
    <link rel="shortcut icon" type="image/png" href="assets/images/fevicon.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/css/avenuehq.min.css"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.4.6/plyr.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    

    <title>Home - Bayshore Communication</title>

  </head>
  <body data-bs-spy="scroll">
    <header id="Home" class="">
      <nav class="navbar navbar-expand-lg navbar-light bg-white mr-5 pl-2 fixed-top">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-brand ">
            <a class=" logo " href="https://bayshorecommunication.com/">
            <img src="assets/images/logo.png" alt="" width="214px" height="64px"> </a>
            <a class=" phone" href="tel:5092837547"><i class="fas fa-phone"></i> <!-- <i class="fas fa-mobile"></i> --></a>
          </div>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 main-menu">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"> Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> Services</a>
              </li><li class="nav-item">
                <a class="nav-link" href="#"> Marketing Blog</a>
              </li><li class="nav-item">
                <a class="nav-link" href="#"> Contact</a>
              </li>
            </ul>
            <div class="navbar-right ml-auto d-flex">
              <a class="btn  bg-dark text-white col-xs-12" href="tel:5092837547">509-283-7547</a>
              <button type="button" class="btn  bg-dark text-white col-xs-12" data-bs-toggle="modal" data-bs-target="#contract-form">Get A Free Consultation</button>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <section class="home">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-0 d-flex">
            <div class="col-lg-6 col-xl-6 col-xxl-6 col-md-6 col-sm-12 col-xs-12 home-img">
              <img src="assets/images/Hero_Home.jpg" class="img-fluid" alt="...">
            </div>
              <div class="col-lg-6 col-xl-6 col-xxl-6 col-md-12col-sm-12 col-xs-12">
                <div class="home-right ">
                  <h3>Let's work together to grow your business</h3>
                  <p>Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Aut aspernatur culpa minima ut nam dolore eveniet veniam, provident similique, quaerat nobis nesciunt ad dolorum libero exercitationem.</p>
                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#contract-form">Get A Free Consultation</button>

                  <div class="modal fade" id="contract-form" tabindex="-1" aria-labelledby="contract-formLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content p-5">
                        <div class="modal-header">
                          <h5 class="modal-title" id="contract-formLabel">Get A Free Consultation</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form method="post" action="">
                            
                             <div class="row">
                               <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 col-sm-12 col-xs-12  d-flex fl-name mb-3">
                                 <div class="col-md-6 f-name  ">
                                    <label for="fname" class="form-label">Fast Name</label><br>
                                    <input type="text" class="wn-button " name="fname" placeholder="Fast Name" required=""> 
                                  </div>
                                 <div class="col-md-6 l-name " >
                                    <label for="lname" class="form-label">Fast Name</label><br>
                                    <input type="text" class="wn-button " name="lname" placeholder="Last Name"required=""> 
                                  </div>
                               </div>
                               <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 col-sm-12 col-xs-12 mail mb-3">
                                 <label for="email" class="">email</label> <br><input type="email" class="w-button" name="email" placeholder="Email address" required="">
                               </div>
                               <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 col-sm-12 col-xs-12 number mb-3">
                                 <label for="number" class="">Phone number<br></label><input type="number" class="w-button" name="number" pattern="[0-9\-]+" placeholder="Phone number (eg. 555-555-5555)" minlength="9" required="">
                               </div>
                               <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 col-sm-12 col-xs-12">
                                 
                                  <button class="btn submit-btn"  type="submit" value="send">SEND YOUE MESSAGE</button>
                               </div>
                             </div>
                          </form>
                        </div><!-- 
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Send message</button>
                        </div> -->
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <section class="About text-center">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 col-lg-12 heading">
            <h1>Ready to meet your Avenue team?</h1>
            <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#contract-form">Get A Free Consultation</button>
          </div>          
          <div class="col-md-12 col-lg-12 pre">
            <p class="text-center">
              Show new clients the best version of you. Unforgettable online marketing for your real estate business, handled by our team of experts.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="work  text-center">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 col-xxl-12 col-lg-12 text-center intro-dis">
              <h3>Website</h3>
              <p class="p-2 ">Beautifully designed and one of a kind—the heart of your online marketing. Featuring lead capture, listings map search, mobile optimization, and SEO.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="Service p-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-12 text-center d-flex m-auto">
            <div class="col-xs-12 col-md-4 card service-item-1 p-3">
              <h3>Advertising</h3>
              <p>New audiences, new leads. Your Avenue team runs ad campaigns targeting qualified homebuyers on Facebook, Google, and Instagram.</p>
            </div>
            <div class="col-xs-12 col-md-4 card service-item-2 p-3">
              <h3>Social Media</h3>
              <p>Shows potential lead that you’re active and tuned in. Your Avenue team posts curated content to your Facebook Business page once per week.</p>
            </div>
            <div class="col-xs-12 col-md-4 card service-item-3 p-3">
              <h3>Newsletter</h3>
              <p>Keep top-of-mind with your database of leads. Customized for you, your monthly newsletter features local market statistics relevant to subscribers.</p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="project-done p-5">
      <div class="container">
        <div class="row">
         <div class="col-md-12 col-lg-12">
            <div id="projectFacts" class="sectionClass ">
    <div class="fullWidth eight columns">
        <div class="projectFactsWrap ">
            <div class="item wow fadeInUpBig animated animated col-md-4 p-4" data-number="112" style="">
                <i class="fas fa-briefcase"></i>
                <p id="number1" class="number">112</p>
                <span></span>
                <p>Projects done</p>
            </div>
            <div class="item wow fadeInUpBig animated animated col-md-4 p-4" data-number="110" style="visibility: visible;">
                <i class="fas fa-smile"></i>
                <p id="number2" class="number">110</p>
                <span></span>
                <p>Happy clients</p>
            </div>
            <div class="item wow fadeInUpBig animated animated col-md-4 p-4" data-number="56" style="visibility: visible;">
                <i class="fas fa-chess-king"></i>
                <p id="number3" class="number">56</p>
                <span></span>
                <p>YEARS OF EXPRIENCE</p>
            </div>
            
          </div>
        </div>
      </div>
         </div>
    </div>
  </div>
    </section>

    <section class="work-process p-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-12 text-center p-4 ">
            <h2>A few simple steps to get started</h2>
          </div>
          <div class="col-md-12 col-lg-12 text-center d-flex m-auto">
            <div class="col-xs-12 col-md-4 card process-1 p-5">
              <h3>1. We chat</h3>
              <p>During your consultation, you chat with one of our team members. They ask about your interests, tastes, and professional goals.</p>
            </div>
            <div class="col-xs-12 col-md-4 card process-2 p-5">
              <h3>2. We prepare</h3>
              <p>Marketers and designers on your Avenue team review your consultation info, then prepare your website and marketing strategy.</p>
            </div>
            <div class="col-xs-12 col-md-4 card process-3 p-5">
              <h3>3. We launch</h3>
              <p>We share design samples with you. Once you’ve approved them, your Avenue team launches your new online presence.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="pricing-table p-5">
      <div class="container">
        <div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12 text-center">
      <h1 class="pricing-heading text-white">Pricing designed for your business </h1>
      <p class="pricing-dis text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, porro.</p>
    </div>
    <div class="col-md-12 col-lg-12 col-sm-12" id="price">
    
  <!--price tab-->
    <section>
  <div class='pricing pricing-palden'>
    <div class='pricing-item'>
      <div class='pricing-deco'>
        <svg class='pricing-deco-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
          <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A; c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;  c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;  H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
          <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A; c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
        </svg>
        <div class='pricing-price'><span class='pricing-currency'>$</span>179
          <span class='pricing-period'>/ mo</span>
        </div>
        <h3 class='pricing-title'>Build</h3>
      </div>
      <ul class='pricing-feature-list'>
        <li class='pricing-feature'>Prepaid annually<br>Or $189/month</li>
        <li class='pricing-feature'>Plus $399 setup fee</li>
        <li class='pricing-feature'>A professionally <br> designed website with:</li>
        <li class='pricing-feature'><b>IDX & Property Searches</b></li>
        <li class='pricing-feature'><b>Integrated Lead Capture</b></li>
      </ul>
      <button data-bs-toggle="modal" data-bs-target="#contract-form" class='pricing-action'>Get Started</button>
    </div>
    <div class='pricing-item pricing__item--featured'>
      <div class='pricing-deco'>
        <svg class='pricing-deco-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
          <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A; c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;  c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;  H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
          <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A; c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
        </svg>
        <div class='pricing-price'><span class='pricing-currency'>$</span>229
          <span class='pricing-period'>/ mo</span>
        </div>
        <h3 class='pricing-title'>Grow</h3>
      </div>
      <ul class='pricing-feature-list'>
        <li class='pricing-feature'>Prepaid annually <br> Or $249/month</li>
        <li class='pricing-feature'>Additional ad spend required</li>
        <li class='pricing-feature'>Plus $199 setup fee</li>
        <li class='pricing-feature'>Everything in <br> Build, plus:</li>
        <li class='pricing-feature'><b>Facebook Ads</b></li>
        <li class='pricing-feature'><b>Weekly Facebook Posts</b></li>
        <li class='pricing-feature'><b>Monthly Newsletter</b></li>
      </ul>
      <button data-bs-toggle="modal" data-bs-target="#contract-form" class='pricing-action'>Get Started</button>
    </div>
    <div class='pricing-item'>
      <div class='pricing-deco'>
        <svg class='pricing-deco-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
          <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A; c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;  c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;  H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
          <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A; c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
        </svg>
        <div class='pricing-price'><span class='pricing-currency'>$</span>339
          <span class='pricing-period'>/ mo</span>
        </div>
        <h3 class='pricing-title'>Accelerate</h3>
      </div>
      <ul class='pricing-feature-list'>
        <li class='pricing-feature'>Prepaid annually <br> Or $379/month</li>
        <li class='pricing-feature'>Additional ad spend required</li>
        <li class='pricing-feature'>Plus $199 setup fee</li>
        <li class='pricing-feature'>Everything in <br> Grow, plus:</li>
        <li class='pricing-feature'><b>Instagram Ads</b></li>
        <li class='pricing-feature'><b>Google Ads</b></li>
      </ul>
      <button data-bs-toggle="modal" data-bs-target="#contract-form" class='pricing-action'>Get Started</button>
      
    </div>
  </div>
</section>

 
  <!-- end of price tab-->
  </div>
  </div>
  </div>
</section>

  <section class="About text-center p-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-12">
            <h1 class="pb-3">Ready to meet your Avenue team?</h1>
            <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#contract-form">Get A Free Consultation</button>
          </div>
        </div>
      </div>
    </section>

    <section class="consultation p-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-12 video">
            <div class="col-md-6 col-sm-12 col-xs-12">
              <h1>Get a Free <br> Consultation Today!</h1>
              <p>Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Fugiat voluptates consequuntur, excepturi ipsa illo, fuga ea non, reprehenderit quas sunt autem neque quidem aperiam deleniti. Vel praesentium nulla aspernatur ducimus inventore tempora mollitia. Deleniti a accusamus pariatur reprehenderit quo aspernatur ducimus enim dicta officiis facere!</p>
              <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#contract-form">Get A Free Consultation</button>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12  intro-video">
              <iframe width="100%" height="315" src="https://www.youtube.com/embed/_w0PULSINAM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <!-- <video controls crossorigin playsinline poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" id="player" class="">
                 Video files 
                <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" size="576">
                <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" size="720">
                <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4" size="1080">
                <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1440p.mp4" type="video/mp4" size="1440">

                 Caption files 
                <track kind="captions" label="English" srclang="en" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt"
                    default>
                <track kind="captions" label="Français" srclang="fr" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt">

                 Fallback for browsers that don't support the <video> element 
                <a href="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" download>Download</a>
            </video> -->
              <!-- <img src="assets/images/Laptop.png" class="img-fluid" alt="..."> -->
            </div>
            <!-- <div class="col-md-6">
              <img src="assets/images/mac-pc.png" class="img-fluid" alt="...">
            </div> -->
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="testmonials bg-dark p-5 text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-12 heading">
            <p>Client Say</p>
            <h1>What Clients Say About US</h1>
          </div>
          <div class="col-md-12 col-lg-12">
            <div id="quote-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
              <div class="carousel-inner ">
                <div class="carousel-item active">
                  <div class="carousel-caption ">
                    <blockquote>
                          <p>I was struggling  with my startup, the main issue was with generating the leads to onboard more clients. I took help from Bay Shore Communication and with their excellent services my business is in a good shape </p>
                            <h6>Didarul Selim <Span> - Sales Man</Span></h6>
                    </blockquote>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="carousel-caption ">
                    <blockquote>
                          <p>My business is entirely on selling goods, It wasn’t easy for me to find the perfect design for my clothing lines. I took help from this company and my business is running in a full swing </p>
                            <h6>Didarul Selim <Span> - CFO</Span></h6>
                        
                    </blockquote>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="carousel-caption ">
                    <blockquote>
                          <p>It is always a pleasure to find what is suitable for somebody’s business, They have consulted me to initiate marketing campaigns based on short animated clips. Now I am top of the world.</p>
                            <h6>Didarul Selim <Span> - Developer</Span></h6>
                    </blockquote>
                  </div>
                </div>
              </div>

            <ol class="carousel-indicators">
              <li type="" data-bs-target="#quote-carousel" data-bs-slide-to="0" class="slide-1 active" aria-current="true" aria-label="Slide 1"><img class="img-responsive " src="assets/images/client-1.jpg" alt=""></li>
              <li type="" data-bs-target="#quote-carousel" data-bs-slide-to="1" aria-label="Slide 2" class="slide-2"><img class="img-responsive " src="assets/images/client-2.jpg" alt=""></li>
              <li type="" data-bs-target="#quote-carousel" data-bs-slide-to="2" aria-label="Slide 3" class="slide-3
            "><img class="img-responsive " src="assets/images/client-3.jpg" alt=""></li>
            </ol>
            <button class="carousel-control-prev btn" type="button" data-bs-target="#quote-carousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next btn" type="button" data-bs-target="#quote-carousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          </div>
        </div>
      </div>
    </section> -->


    <footer class=" text-white pt-4">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-12 text-center">
            <p><span>&copy;</span> 2021 All right reserved by <a class="text-orange text-decoration-none" href="https://bayshorecommunication.com/"> Bayshore Communication</a></p>
          </div>
        </div>
      </div>
    </footer>



    <!-- Optional JavaScript; choose one of the two! -->
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="assets/js/bootstrap.bundle.min.js"></script>
     <script src="https://cdn.plyr.io/3.4.6/plyr.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
      jQuery(document).ready(function($){
  //hide the subtle gradient layer (.pricing-list > li::after) when pricing table has been scrolled to the end (mobile version only)
  checkScrolling($('.pricing-body'));
  $(window).on('resize', function(){
    window.requestAnimationFrame(function(){checkScrolling($('.pricing-body'))});
  });
  $('.pricing-body').on('scroll', function(){ 
    var selected = $(this);
    window.requestAnimationFrame(function(){checkScrolling(selected)});
  });

  function checkScrolling(tables){
    tables.each(function(){
      var table= $(this),
        totalTableWidth = parseInt(table.children('.pricing-features').width()),
        tableViewport = parseInt(table.width());
      if( table.scrollLeft() >= totalTableWidth - tableViewport -1 ) {
        table.parent('li').addClass('is-ended');
      } else {
        table.parent('li').removeClass('is-ended');
      }
    });
  }

  //switch from monthly to annual pricing tables
  bouncy_filter($('.pricing-container'));

  function bouncy_filter(container) {
    container.each(function(){
      var pricing_table = $(this);
      var filter_list_container = pricing_table.children('.pricing-switcher'),
        filter_radios = filter_list_container.find('input[type="radio"]'),
        pricing_table_wrapper = pricing_table.find('.pricing-wrapper');

      //store pricing table items
      var table_elements = {};
      filter_radios.each(function(){
        var filter_type = $(this).val();
        table_elements[filter_type] = pricing_table_wrapper.find('li[data-type="'+filter_type+'"]');
      });

      //detect input change event
      filter_radios.on('change', function(event){
        event.preventDefault();
        //detect which radio input item was checked
        var selected_filter = $(event.target).val();

        //give higher z-index to the pricing table items selected by the radio input
        show_selected_items(table_elements[selected_filter]);

        //rotate each pricing-wrapper 
        //at the end of the animation hide the not-selected pricing tables and rotate back the .pricing-wrapper
        
        if( !Modernizr.cssanimations ) {
          hide_not_selected_items(table_elements, selected_filter);
          pricing_table_wrapper.removeClass('is-switched');
        } else {
          pricing_table_wrapper.addClass('is-switched').eq(0).one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function() {    
            hide_not_selected_items(table_elements, selected_filter);
            pricing_table_wrapper.removeClass('is-switched');
            //change rotation direction if .pricing-list has the .bounce-invert class
            if(pricing_table.find('.pricing-list').hasClass('bounce-invert')) pricing_table_wrapper.toggleClass('reverse-animation');
          });
        }
      });
    });
  }
  function show_selected_items(selected_elements) {
    selected_elements.addClass('is-selected');
  }

  function hide_not_selected_items(table_containers, filter) {
    $.each(table_containers, function(key, value){
        if ( key != filter ) {  
        $(this).removeClass('is-visible is-selected').addClass('is-hidden');

      } else {
        $(this).addClass('is-visible').removeClass('is-hidden is-selected');
      }
    });
  }
});
    </script>
    <!-- <script>
      document.addEventListener('DOMContentLoaded', () => { 
  // This is the bare minimum JavaScript. You can opt to pass no arguments to setup.
  const player = new Plyr('#player');
  
  // Expose
  window.player = player;

  // Bind event listener
  function on(selector, type, callback) {
    document.querySelector(selector).addEventListener(type, callback, false);
  }

  // Play
  on('.js-play', 'click', () => { 
    player.play();
  });

  // Pause
  on('.js-pause', 'click', () => { 
    player.pause();
  });

  // Stop
  on('.js-stop', 'click', () => { 
    player.stop();
  });

  // Rewind
  on('.js-rewind', 'click', () => { 
    player.rewind();
  });

  // Forward
  on('.js-forward', 'click', () => { 
    player.forward();
  });
});
    </script> -->
    <script>
      $.fn.jQuerySimpleCounter = function( options ) {
          var settings = $.extend({
              start:  0,
              end:    100,
              easing: 'swing',
              duration: 400,
              complete: ''
          }, options );

          var thisElement = $(this);

          $({count: settings.start}).animate({count: settings.end}, {
          duration: settings.duration,
          easing: settings.easing,
          step: function() {
            var mathCount = Math.ceil(this.count);
            thisElement.text(mathCount);
          },
          complete: settings.complete
        });
      };


    $('#number1').jQuerySimpleCounter({end: 112,duration: 3000});
    $('#number2').jQuerySimpleCounter({end: 110,duration: 3000});
    $('#number3').jQuerySimpleCounter({end: 7,duration: 2000});

    </script>

  </body>
</html>