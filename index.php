<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home-Zenj Leadership</title>
  <meta content="" name="description">
  <meta content="" name="keyw  ords">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function () {
      $("#myModal").modal('show');
    });
  </script>

  <!-- Favicons -->
  <link href="assets/img/icon.ico" rel="icon">
  <link href="assets/img/icon.ico" rel="apple-touch-icon">
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="Home.css" media="screen">
  <!-- Google Fonts -->
  <!--<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">-->
  <link href="https://fonts.googleapis.com/css2?family=Festive&display=swap" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <!--<h1 class="logo"><a href="index.html">The Zenj</a></h1>-->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.php" class="logo"><img src="assets/img/icon.ico" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#team">Our Team</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="partners.php#partners">Partners</a></li>


          <li class="drop-down"><a href="#">Our Packages</a>


            <ul>
              <li><a href="training.php">Training Package</a></li>
              <li><a href="coaching.php">Coaching Package</a>
                <ul>
                  <li><a href="#"></a></li>
                  <li><a href="#"></a></li>

                </ul>
              </li>
              <li><a href="mentorship.php">Mentorship Package</a></li>
              <li><a href="startup.php">Start up Package</a></li>

            </ul>
          </li>
          <li><a href="events.php#events">Events</a></li>
          <li><a href="#footer">Contact</a></li>
          <div id="smart-button-container">
            <div style="text-align: center;">
              <div id="paypal-button-container"></div>
            </div>
          </div>
          <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD"
            data-sdk-integration-source="button-factory"></script>
          <script>
            function initPayPalButton() {
              paypal.Buttons({
                style: {
                  shape: 'rect',
                  color: 'gold',
                  layout: 'horizontal',
                  label: 'pay',
                  tagline: true
                },

                createOrder: function (data, actions) {
                  return actions.order.create({
                    purchase_units: [{ "amount": { "currency_code": "USD", "value": 1 } }]
                  });
                },

                onApprove: function (data, actions) {
                  return actions.order.capture().then(function (orderData) {

                    // Full available details
                    console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

                    // Show a success message within this page, e.g.
                    const element = document.getElementById('paypal-button-container');
                    element.innerHTML = '';
                    element.innerHTML = '<h3>Thank you for your payment!</h3>';

                    // Or go to another URL:  actions.redirect('thank_you.html');

                  });
                },

                onError: function (err) {
                  console.log(err);
                }
              }).render('#paypal-button-container');
            }
            initPayPalButton();
          </script>
        </ul>
      </nav><!-- .nav-menu -->

      <a href="#about" class="btn-get-started scrollto"></a>

    </div>
    <div style="position: fixed;" class="progress-container">
      <div style="position: fixed;" class="progress-bar" id="myBar"></div>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up" data-aos-delay="550">
      <h1 style="font-family:Raleway, sans-serif;font-size: 50PX;">The Zenj</h1>
      <h2 style="font-family: 'Festive', cursive;font-size: 48px;">Leadership Organization</h2>
      <div class="d-flex" data-aos="fade-down" data-aos-delay="944">
        <a href="#about" class="btn-get-started scrollto">Explore</a><br>
        <!--<a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>-->
      </div>
    </div>
  </section><!-- End Hero -->
  <section style="height: auto;padding-top:-10%;margin-top:0%;padding-top:0%;margin-bottom:0%;" class=" mine4">
    <center>
      <div class="row container justify-content-center">
        <div class="col-sm-4" data-aos="zoom-in">
          <div style="background-color:transparent;" class="count-box"><br>
            <i style="color:dodgerblue;font-size: 50px ! important; background-color:black;padding: 20px; border-radius: 100%;"
              class="glow icofont-medal"></i><br>
            <br><span style="font-size: 60px ! important;font-weight:bold;" data-toggle="counter-up">150</span>
            <p style="color:black;margin-top: 0%;">projects completed</p>
          </div>
        </div>
        <div class="col-sm-4" data-aos="fade-up">
          <div style="background-color:transparent;" class="count-box"><br>
            <i style="color:dodgerblue;font-size: 50px ! important; background-color:black;padding: 20px; border-radius: 100%;"
              class="glow icofont-clock-time" style="padding:0px ! important"></i><br><br>
            <span style="font-size: 60px ! important;font-weight:bold;" data-toggle="counter-up">3400</span>
            <p style="color:black;margin-top: 0%;">Service hours completed </p>
          </div>
        </div>
        <div class="col-sm-4" data-aos="zoom-in">
          <div style="background-color:transparent;" class="count-box"><br>
            <i style="color:dodgerblue;font-size: 50px ! important; background-color:black;padding: 20px; border-radius: 100%;"
              class="glow icofont-users-social"></i><br><br>
            <span style="font-size: 60px ! important;font-weight:bold;" data-toggle="counter-up">1700</span>
            <p style="color:black;margin-top: 0%;">Alumni from 33 countries </p>
          </div>
        </div>
      </div>
    </center>
    </div>
    </div>
    <style type="text/css">
      .about .container {
        box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
        padding-bottom: 15px;
      }

      .about .count-box {
        padding: 70px 0;
        width: 100%;
      }

      .about .count-box span {
        font-size: 48px;
        line-height: 25px;
        font-weight: 700;
        color: #365870;
        margin-left: 60px;
      }

      .about .count-box i {
        font-size: 68px;
        color: dodgerblue;
        float: left;
        padding-right: -5px;
      }

      .about .count-box span {
        font-size: 48px;
        line-height: 25px;
        font-weight: 700;
        color: #365870;
        margin-left: 60px;
        padding: 10px;
      }

      .about .count-box p {
        padding: 5px 0 0 0;
        margin: 0 0 0 60px;
        font-family: "Raleway", sans-serif;
        font-weight: 600;
        font-size: 14px;
        color: #2e4b5e;
        float: center;
      }

      .about .count-box a {
        font-weight: 600;
        display: block;
        margin-top: 20px;
        color: #2e4b5e;
        font-size: 15px;
        font-family: "Poppins", sans-serif;
        transition: ease-in-out 0.3s;
      }

      .about .count-box a:hover {
        color: #477392;
      }

      .about .content {
        font-size: 15px;
      }

      .about .content h3 {
        font-weight: 700;
        font-size: 24px;
        color: #263d4d;
      }

      .about .content ul {
        list-style: none;
        padding: 0;
      }

      .about .content ul li {
        padding-bottom: 10px;
        padding-left: 28px;
        position: relative;
      }

      .about .content ul i {
        font-size: 24px;
        color: dodgerblue;
        position: absolute;
        left: 0;
        top: -2px;
      }
    </style>
    <main id="main">


      <!--<div class="row">
          <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 pt-3 pt-lg-0 content">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bx bx-check-double"></i> Voluptate repellendus pariatur reprehenderit corporis sint.</li>
              <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>

        </div>

      </div>-->
      <section id="about" style="margin-top:0%;padding-top:0%;" class="services">
        <div class="container" data-aos="fade-up">

          <div class="section-title">

            <center>
              <p style="font-family:Raleway, sans-serif;">About the zenj leadership Organization</p>
            </center>
          </div>
          <div class="row">
            <div style="padding: 15px;height: 100%;" class="col-sm-5 ">
              <h4 style="color: dodgerblue;"><strong> Why the organization was formed.</strong></h4>
              <p style="text-align: left;color: black;">The Zenj leadership organisation was founded to
                provide answers to the global challenging questions that revolve around Power,
                Environment, Climate, Human interactions, Employment, Health, and Wellbeing
                among others. For the last 3 years, this has been the focus of this organisation
                through its extremely affordable and accessible, highly intentional, and exceptionally
                practical leadership and business start-up sessions and boot camps. Central to this
                is a well-built curriculum that emphasises transformative global servant leadership
                and job creation mindset, among the upcoming generations of young people, from all
                over the world. The organisation emphasises young people’s participation in society
                leadership from the perspective and approach of a leader, (NOT a boss or Ruler),
                putting into consideration the impact and consequences of their decisions on
                themselves, families, society, our planet,<br> and its future. Our philosophy is
                to lead by example in every walk of life, utilising leadership as a tool to mobilise
                all other disciplines to serve the common needs of our world,
                a belief that all young people have something to offer and <br>such avenues
                must be created for them to monetize their skills to achieve financial
                stability while at the same time remaining in active service to their
                society.<br><br>
                <button class="btn-sm btn-primary" style="width:100%;">
                  <a style="color:black;" href="#testimony"> Check what people are saying about us</a></button>
              </p>
            </div>
            <div class="col-sm-7">
              <h4 style="font-family:Raleway, sans-serif;color:dodgerblue;"><strong>Our mission</strong></h4>
              <p5 style=" text-align: justify ! important;color:black;"><i class="bx bxs-quote-alt-left quote-icon-left"
                  style="color:grey;"></i><i> By providing top-notch leadership skills,
                  entrepreneurial education, and best business practices of the 21st century, to young people worldwide,
                  through in-depth, practical leadership training, Coaching, and Mentorship sessions. While partnering
                  with various technical and financial institutions, several individuals and organisations, to create
                  global leaders and
                  entrepreneurs, who are more conscious about our world, people and ready to serve.<i
                    class="bx bxs-quote-alt-right quote-icon-right" style="color:grey;"></i></i></p5>
              <h4 style="font-family:Raleway, sans-serif;color:dodgerblue;"><strong>Our vision</strong></h4>
              <p5 style="text-align: justify ! important; color:black;"><i class="bx bxs-quote-alt-left quote-icon-left"
                  style="color:grey;"></i><i> To establish the next generation of
                  Transformational
                  servant global leaders and put an end to Youth Unemployment.<i
                    class="bx bxs-quote-alt-right quote-icon-right" style="color:grey;"></i></i></p5><br><br>
              <h4 style="color: dodgerblue;"><strong> What is Zenj as a name?</strong></h4><br>
              <iframe width="100%" height="345" src="https://www.youtube.com/embed/PYGWs8oOnVQ"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
          </div>
        </div>



        <!-- ======= About Boxes Section ======= -->
        <div id="about section-bg" class="container" data-aos="fade-in">
          <div data-aos="fly-in" style="height: auto;" class="text-center section-title">

            <div id="about section-bg" class="container" data-aos="fade-in">
              <div data-aos="fly-in" style="height: auto;" class="text-center section-title">
              </div>
      </section><!-- End About Boxes Section -->

      <!-- ======= Clients Section ======= 
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section>End Clients Section -->




      <!-- ======= Services Section ======= -->
      <section class="  u-align-center u-black u-clearfix u-section-7 services mine5 " id="package">
        <div class="section-title">
          <p style="font-family:Raleway, sans-serif;">TRAINING MODEL<br>OF THE ZENJ LEADERSHIP ORGANIZATION</p>
        </div>
        <div class="u-expanded-width u-layout-grid u-list u-list-1">
          <div style="height: auto;" class="container u-repeater u-repeater-1">
            <div class="u-align-center  u-container-style u-list-item u-repeater-item">
              <div class=" u-similar-container u-container-layout-1"><span
                  class="u-icon u-icon-circle u-text-black u-icon-1"><svg class="u-svg-link"
                    preserveAspectRatio="xMidYMin slice" viewBox="0 0 498.752 498.752" style="">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-2907"></use>
                  </svg><svg class="u-svg-content" viewBox="0 0 498.752 498.752" x="0px" y="0px" id="svg-2907"
                    style="enable-background:new 0 0 498.752 498.752;">
                    <g>
                      <g>
                        <path
                          d="M480.12,435.248c-6.088-20.272-22.8-35.216-43.624-39L384,386.696v-4.144c19.632-11.4,34.008-30.848,38.488-53.84    C437.032,325.704,448,312.8,448,297.376V218.36c0-22.328-14.624-41.8-35.84-48.136l-4-4    c-18.608-18.608-43.344-28.848-69.656-28.848c-54.312,0-98.504,44.184-98.504,98.504v61.496c0,15.424,10.968,28.328,25.512,31.336    C270,351.704,284.368,371.16,304,382.552v4.144l-52.496,9.544c-20.824,3.792-37.536,18.736-43.624,39.008l-18.632,62.128h309.504    L480.12,435.248z M424,311.152V283.6c4.76,2.776,8,7.88,8,13.776S428.76,308.376,424,311.152z M264,311.152    c-4.76-2.776-8-7.88-8-13.776s3.24-11,8-13.776V311.152z M264,257.376v9.136c-2.848,0.744-5.52,1.864-8,3.312V235.88    c0-45.488,37.008-82.504,82.504-82.504c22.032,0,42.76,8.584,58.344,24.168l7.056,7.064l2.152,0.528    c15.28,3.816,25.944,17.48,25.944,33.224v51.464c-2.48-1.448-5.152-2.576-8-3.312v-9.136h-25.368    c-21.68,0-42.4-10.352-55.4-27.688l-6.36-8.496l-15.896,15.904c-13.088,13.08-30.48,20.28-48.976,20.28H264z M280,313.376v-40.368    c19.752-1.832,38.08-10.4,52.288-24.6l3.112-3.112c16.04,17.704,39.144,28.08,63.232,28.08H408v40c0,35.288-28.712,64-64,64    C308.712,377.376,280,348.664,280,313.376z M320.68,389.888c7.384,2.256,15.208,3.488,23.32,3.488s15.936-1.232,23.32-3.488    L344,407.376L320.68,389.888z M331.824,418.24l-16.328,16.32l-10.592-31.768l5.096-0.92L331.824,418.24z M378,401.872l5.088,0.928    l-10.592,31.768l-16.328-16.32L378,401.872z M210.752,481.376l12.464-41.528c4.344-14.48,16.28-25.16,31.16-27.856l34.64-6.296    l19.496,58.496L344,428.688l35.496,35.496l19.496-58.496l34.64,6.296c14.872,2.704,26.816,13.384,31.16,27.856l12.456,41.536    H210.752z">
                        </path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path
                          d="M208,130.728V80.024l-21.712-5.784c-0.64-1.672-1.336-3.344-2.096-5.016l11.272-19.472l-35.84-35.84l-19.472,11.272    c-1.664-0.76-3.336-1.456-5-2.096l-5.808-21.712H78.656l-5.8,21.72c-1.672,0.64-3.336,1.336-5,2.096l-19.472-11.28l-35.84,35.84    l11.272,19.472c-0.768,1.672-1.464,3.344-2.104,5.016L0,80.024v50.704l21.712,5.784c0.64,1.672,1.336,3.344,2.104,5.016    L12.544,161l35.84,35.84l19.472-11.272c1.664,0.76,3.336,1.456,5,2.096l5.8,21.712h50.688l5.8-21.72    c1.672-0.64,3.336-1.336,5-2.096l19.472,11.272l35.84-35.84l-11.272-19.472c0.76-1.672,1.464-3.344,2.096-5.016L208,130.728z     M175.456,158.368l-18.464,18.472l-16.28-9.432l-3.888,1.992c-3.568,1.832-7.2,3.352-10.784,4.512l-4.152,1.336l-4.832,18.128    H90.944l-4.832-18.128l-4.152-1.336c-3.584-1.168-7.216-2.68-10.784-4.512l-3.888-1.992l-16.28,9.432l-18.464-18.472l9.424-16.272    l-1.992-3.888c-1.848-3.592-3.36-7.224-4.504-10.784l-1.336-4.16L16,118.432V92.32l18.136-4.832l1.336-4.16    c1.144-3.552,2.656-7.184,4.504-10.784l1.992-3.888l-9.424-16.272l18.464-18.472l16.28,9.432l3.888-1.992    c3.568-1.832,7.2-3.352,10.784-4.512l4.152-1.336l4.832-18.128h26.112l4.832,18.128l4.152,1.336    c3.584,1.168,7.216,2.68,10.784,4.512l3.888,1.992l16.28-9.432l18.464,18.472l-9.424,16.272l1.992,3.888    c1.848,3.592,3.36,7.224,4.504,10.784l1.336,4.16L192,92.32v26.112l-18.136,4.832l-1.336,4.16    c-1.144,3.552-2.656,7.184-4.504,10.784l-1.992,3.888L175.456,158.368z">
                        </path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path
                          d="M148.944,138.792C156.176,129.08,160,117.528,160,105.376c0-30.872-25.12-56-56-56s-56,25.128-56,56s25.12,56,56,56    c12.48,0,24.28-4.008,34.136-11.6l-9.76-12.672c-7.04,5.416-15.464,8.272-24.376,8.272c-22.056,0-40-17.944-40-40    c0-22.056,17.944-40,40-40c22.056,0,40,17.944,40,40c0,8.68-2.728,16.928-7.888,23.856L148.944,138.792z">
                        </path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path
                          d="M482.344,99.72L472,110.064V81.376c0-44.112-35.888-80-80-80h-48v16h48c35.288,0,64,28.712,64,64v28.688L445.656,99.72    l-11.312,11.312L464,140.688l29.656-29.656L482.344,99.72z">
                        </path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path
                          d="M40,417.376v-28.688l10.344,10.344l11.312-11.312L32,358.064L2.344,387.72l11.312,11.312L24,388.688v28.688    c0,44.112,35.888,80,80,80v-16C68.712,481.376,40,452.664,40,417.376z">
                        </path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect y="241.376" width="208" height="16"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect y="305.376" width="208" height="16"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect y="273.376" width="96" height="16"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <polygon
                          points="158,273.376 120,273.376 112,273.376 112,289.376 120,289.376 158,289.376 208,289.376 208,273.376   ">
                        </polygon>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect x="312" y="1.376" width="16" height="16"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect x="280" y="1.376" width="16" height="16"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect x="120" y="481.376" width="16" height="16"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect x="152" y="481.376" width="16" height="16"></rect>
                      </g>
                    </g>
                  </svg></span>
                <h3 style="font-family:Raleway, sans-serif;" class="u-text u-text-3" style="color:dodgerblue;">1<br>
                  <strong>
                    <p style="color:lime;" class="section-title" style="color: black;">Learn</p>
                  </strong>
                </h3>
                <p style="color: white;font-family:Raleway, sans-serif;" class=" u-text  u-text-4">We give you a new
                  concept, a new perspective.</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2"><span
                  class="u-icon u-icon-circle u-text-green  u-icon-2"><svg class="u-svg-link"
                    preserveAspectRatio="xMidYMin slice" viewBox="0 0 60 60" style="">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-e7f4"></use>
                  </svg><svg class="u-svg-content" viewBox="0 0 60 60" id="svg-e7f4">
                    <!-- Generator: Sketch 51.3 (57544) - http://www.bohemiancoding.com/sketch -->
                    <title></title>
                    <desc>Created with Sketch.</desc>
                    <defs></defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g id="010---Idea" transform="translate(-1.000000, -1.000000)" fill="currentColor"
                        fill-rule="nonzero">
                        <path
                          d="M2.472,38.391 C2.80086084,38.6198362 3.1484244,38.8205466 3.511,38.991 C3.943,39.212 4.667,39.582 4.718,39.841 C4.78091334,40.1828671 4.73980788,40.535747 4.6,40.854 C4.451,41.174 4.295,41.449 4.16,41.686 C3.794,42.333 3.181,43.417 4.105,44.172 C4.321,44.372 4.694,44.661 5.034,44.922 C4.78370505,45.359639 4.67048978,45.8623148 4.709,46.365 C4.76186098,46.7607003 4.97661897,47.1166988 5.302,47.348 C5.524,47.505 5.761,47.641 5.995,47.774 C6.586,48.111 6.817,48.268 6.895,48.581 C6.95056021,48.9834802 6.91641128,49.3932674 6.795,49.781 C6.736,50.048 6.679,50.316 6.645,50.581 C6.54569822,51.4923539 6.65829272,52.4143284 6.974,53.275 C7.42370729,54.8635039 8.86033341,55.9703193 10.511,56 C10.7865929,55.9991845 11.0613714,55.9700312 11.331,55.913 C14.1877778,55.2358183 17.0028445,54.3934018 19.762,53.39 C22.015,54.712 23.438,58.732 23.809,60.241 C23.9197719,60.6870872 24.3203652,61.0002183 24.78,61 L49.88,60.93 C50.198095,60.9293833 50.4969218,60.7774667 50.6848608,60.5208273 C50.8727998,60.2641879 50.9274293,59.9334437 50.832,59.63 C50.584758,58.9524505 50.2437748,58.3128965 49.819,57.73 C49.5792082,57.3843183 49.3630492,57.0228282 49.172,56.648 C48.7193866,55.7320866 48.3418152,54.7809676 48.043,53.804 C47.4796807,51.892495 47.0868117,49.9348428 46.869,47.954 C46.8362198,47.5904715 46.6079772,47.2736806 46.2735229,47.1275034 C45.9390686,46.9813261 45.5515383,47.028986 45.2624697,47.2518466 C44.9734011,47.4747071 44.8287194,47.8373617 44.885,48.198 C45.1162532,50.2975152 45.53356,52.3723367 46.132,54.398 C46.4610482,55.4729292 46.876054,56.5196399 47.373,57.528 C47.6011562,57.9808684 47.8600969,58.4175592 48.148,58.835 L48.215,58.935 L25.536,59 C24.8721602,56.6278229 23.6672676,54.4419012 22.016,52.614 L22.916,52.299 C23.586,52.065 24.091,51.889 24.35,51.806 C28.634,50.451 30.776,48.5 30.718,46.006 C30.7188193,45.7395248 30.6104239,45.4843502 30.4180704,45.2999327 C30.2257169,45.1155152 29.9662044,45.0179608 29.7,45.03 C29.1480455,45.043101 28.711146,45.5010397 28.724,46.053 C28.748,47.082 27.905,48.583 23.748,49.898 C23.477,49.985 22.955,50.167 22.262,50.409 C21.519,50.669 20.574,50.999 19.532,51.353 L19.525,51.353 C16.7107997,52.3845725 13.8393482,53.2526858 10.925,53.953 C9.99247911,54.1327213 9.08430877,53.5444846 8.867,52.62 C8.65336419,52.0511056 8.5729723,51.4408114 8.632,50.836 C8.658,50.626 8.706,50.418 8.752,50.209 C8.95576742,49.5173075 8.98565126,48.7860121 8.839,48.08 C8.54716334,47.1627356 7.87192053,46.4170866 6.988,46.036 L6.78,45.917 C6.88797779,45.6989963 7.01691908,45.4920204 7.165,45.299 C7.33275906,45.0864363 7.40714209,44.8149259 7.3711438,44.5465408 C7.33514552,44.2781557 7.19184383,44.0358431 6.974,43.875 C6.734,43.699 6.168,43.275 5.754,42.941 C5.802,42.854 5.854,42.758 5.904,42.671 C6.061,42.396 6.24,42.076 6.415,41.706 C6.73144627,41.0050454 6.82465982,40.2237273 6.682,39.468 C6.442,38.248 5.274,37.65 4.421,37.214 C4.13416022,37.0782339 3.85919867,36.9186759 3.599,36.737 C3.38457095,36.5929247 3.18373805,36.4295806 2.999,36.249 C2.999,36.098 3.161,35.732 3.923,34.803 C5.71384484,32.498386 7.24854751,30.0057096 8.5,27.369 C8.73611116,26.9557612 8.86887835,26.4915906 8.887,26.016 C8.78370832,25.0108401 8.25104392,24.0993679 7.426,23.516 C7.021,23.145 6.64,22.795 6.596,22.472 C6.60268284,22.2350157 6.65567877,22.0016297 6.752,21.785 C6.915,21.356 7.103,20.936 7.292,20.515 C7.70205054,19.6694994 8.02956792,18.786408 8.27,17.878 L8.37,17.452 C8.58206913,16.4522045 8.85524847,15.4663544 9.188,14.5 C9.97629737,12.324256 11.1967986,10.3305666 12.776,8.639 C14.689,6.615 17.7,5.183 21.74,4.38 C24.8302616,3.70160137 27.9659304,3.24973351 31.122,3.028 C32.6960458,2.94277949 34.2746881,3.03232644 35.829,3.295 C36.3662791,3.37553169 36.8695693,3.01236779 36.9624952,2.47709308 C37.0554211,1.94181837 36.7039844,1.43027041 36.171,1.325 C34.4695916,1.03584978 32.741255,0.93724101 31.018,1.031 C27.7640828,1.25668862 24.5310865,1.72059835 21.345,2.419 C16.836,3.319 13.559,4.9 11.322,7.264 C9.55741114,9.15217091 8.19304573,11.3778111 7.311,13.807 C6.95086895,14.8522819 6.65498362,15.9186045 6.425,17 L6.325,17.422 C6.1115707,18.2063052 5.82532664,18.9689531 5.47,19.7 C5.27,20.156 5.062,20.612 4.883,21.084 C4.65276773,21.6097458 4.56151568,22.1858389 4.618,22.757 C4.81979497,23.6523879 5.33739273,24.4451147 6.076,24.99 C6.565,25.439 6.886,25.755 6.89,26.03 C6.85380114,26.1823392 6.7962306,26.3287906 6.719,26.465 C5.52099974,28.9889269 4.05238629,31.3752561 2.339,33.582 C1.616,34.463 0.859,35.49 1.02,36.517 C1.23180829,37.311752 1.75532747,37.9874235 2.472,38.391 Z"
                          id="Shape"></path>
                        <path
                          d="M12.167,18.793 L12.267,18.348 C12.4422745,17.5166167 12.6649717,16.6959424 12.934,15.89 C13.5362565,14.2205007 14.4695935,12.6898825 15.678,11.39 C16.9740184,10.1680016 18.560379,9.29686276 20.287,8.859 C20.6356132,8.76076066 20.9038574,8.48169775 20.9882433,8.12947458 C21.0726292,7.7772514 20.9599648,7.40693017 20.6937164,7.1613819 C20.4274681,6.91583364 20.0492577,6.83344433 19.705,6.946 C17.6443921,7.48150189 15.7566426,8.53920641 14.224,10.017 C12.8313939,11.5140375 11.7555448,13.2769606 11.061,15.2 C10.7609653,16.0876495 10.5135358,16.9922196 10.32,17.909 L10.22,18.342 C10.0952009,18.8796006 10.4295239,19.4166657 10.967,19.542 C11.0413988,19.5594609 11.1175799,19.5681865 11.194,19.568 C11.6590938,19.5673679 12.0623542,19.2461687 12.167,18.793 Z"
                          id="Shape"></path>
                        <circle id="Oval" cx="10" cy="22" r="1"></circle>
                        <path
                          d="M28,21.21 C27.9315063,24.6191785 29.136268,27.9314708 31.379,30.5 C32.0849236,31.2334657 32.8546161,31.9027636 33.679,32.5 C35.142,33.631 36.528,34.712 36.896,36.216 C35.7535128,36.6681633 35.0022442,37.7712918 35,39 L35,41 C35.0052514,42.2667854 35.8056491,43.3937454 37,43.816 L37,44 C37,46.209139 38.790861,48 41,48 C43.209139,48 45,46.209139 45,44 L45,43.816 C46.1943509,43.3937454 46.9947486,42.2667854 47,41 L47,39 C46.9971059,37.7702998 46.2440591,36.6668879 45.1,36.216 C45.467,34.716 46.854,33.631 48.317,32.5 C49.1411778,31.9025042 49.9108481,31.2332256 50.617,30.5 C52.8605892,27.9317144 54.0667144,24.6195942 54,21.21 C53.9721024,14.0073776 48.2012507,8.14330443 41,8 C33.7987493,8.14330443 28.0278976,14.0073776 28,21.21 Z M38,23 L37,23 C36.4477153,23 36,22.5522847 36,22 C36,21.4477153 36.4477153,21 37,21 C37.5522847,21 38,21.4477153 38,22 L38,23 Z M42,36 L40,36 L40,25 L42,25 L42,36 Z M41,46 C39.8954305,46 39,45.1045695 39,44 L43,44 C43,45.1045695 42.1045695,46 41,46 Z M45,41 C45,41.5522847 44.5522847,42 44,42 L38,42 C37.4477153,42 37,41.5522847 37,41 L37,39 C37,38.4477153 37.4477153,38 38,38 L44,38 C44.5522847,38 45,38.4477153 45,39 L45,41 Z M52,21.241 C52.0622371,24.1446194 51.0416699,26.9674874 49.137,29.16 C48.509758,29.8031215 47.8282342,30.390965 47.1,30.917 C45.9209331,31.738395 44.8753526,32.7364184 44,33.876 L44,25 L45,25 C46.6568542,25 48,23.6568542 48,22 C48,20.3431458 46.6568542,19 45,19 C43.3431458,19 42,20.3431458 42,22 L42,23 L40,23 L40,22 C40,20.3431458 38.6568542,19 37,19 C35.3431458,19 34,20.3431458 34,22 C34,23.6568542 35.3431458,25 37,25 L38,25 L38,33.876 C37.1262995,32.7369645 36.0823985,31.7392717 34.905,30.918 C34.1764592,30.3915917 33.4946066,29.8034185 32.867,29.16 C30.9603793,26.9683744 29.9382903,24.1452412 30,21.241 C30.1,15.147 35.132,10 41,10 C46.868,10 51.905,15.147 52,21.241 Z M44,23 L44,22 C44,21.4477153 44.4477153,21 45,21 C45.5522847,21 46,21.4477153 46,22 C46,22.5522847 45.5522847,23 45,23 L44,23 Z"
                          id="Shape"></path>
                        <path
                          d="M57,22 L60,22 C60.5522847,22 61,21.5522847 61,21 C61,20.4477153 60.5522847,20 60,20 L57,20 C56.4477153,20 56,20.4477153 56,21 C56,21.5522847 56.4477153,22 57,22 Z"
                          id="Shape"></path>
                        <path
                          d="M52.313,10.687 C52.5785413,10.6872088 52.8332623,10.5817946 53.021,10.394 L55.142,8.272 C55.4019566,8.02092553 55.5062126,7.64912211 55.4146972,7.29949268 C55.3231817,6.94986324 55.0501368,6.67681828 54.7005073,6.58530284 C54.3508779,6.4937874 53.9790745,6.59804342 53.728,6.858 L51.606,8.979 C51.3193761,9.26489995 51.2334066,9.69540717 51.3882414,10.0694636 C51.5430763,10.44352 51.9081643,10.687319 52.313,10.687 Z"
                          id="Shape"></path>
                        <path
                          d="M41,6 C41.5522847,6 42,5.55228475 42,5 L42,2 C42,1.44771525 41.5522847,1 41,1 C40.4477153,1 40,1.44771525 40,2 L40,5 C40,5.55228475 40.4477153,6 41,6 Z"
                          id="Shape"></path>
                        <path
                          d="M30.394,10.394 C30.581777,10.2064317 30.6872867,9.95190925 30.6872867,9.6865 C30.6872867,9.42109075 30.581777,9.16656826 30.394,8.979 L28.272,6.858 C28.0209255,6.59804342 27.6491221,6.4937874 27.2994927,6.58530284 C26.9498632,6.67681828 26.6768183,6.94986324 26.5853028,7.29949268 C26.4937874,7.64912211 26.5980434,8.02092553 26.858,8.272 L28.979,10.394 C29.1665683,10.581777 29.4210908,10.6872867 29.6865,10.6872867 C29.9519092,10.6872867 30.2064317,10.581777 30.394,10.394 Z"
                          id="Shape"></path>
                        <path
                          d="M22,20 C21.4477153,20 21,20.4477153 21,21 C21,21.5522847 21.4477153,22 22,22 L25,22 C25.5522847,22 26,21.5522847 26,21 C26,20.4477153 25.5522847,20 25,20 L22,20 Z"
                          id="Shape"></path>
                      </g>
                    </g>
                  </svg></span>
                <h3 style="font-family:Raleway, sans-serif;" class="u-text u-text-5" style="color:dodgerblue;">2<br>
                  <strong>
                    <p style="color:lime;" class="section-title" style="color: black;">Think</p>
                  </strong>
                </h3>
                <p style="color:white;font-family:Raleway, sans-serif;" class=" u-text  u-text-6">This is the second
                  stage where we challenge you to get to critically think through what is taught.</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3"><span
                  class="u-icon u-icon-circle u-text-black u-icon-3"><svg class="u-svg-link"
                    preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style="">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-e154"></use>
                  </svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-e154"
                    style="enable-background:new 0 0 512 512;">
                    <g>
                      <g>
                        <path
                          d="M482,332.596V45c0-24.813-20.187-45-45-45H106C81.187,0,61,20.187,61,45v16H45C20.187,61,0,81.187,0,106s20.187,45,45,45    h16v60H45c-24.813,0-45,20.187-45,45s20.187,45,45,45h16v60H45c-24.813,0-45,20.187-45,45s20.187,45,45,45h16v15    c0,11.955,4.597,23.347,12.944,32.079C82.526,507.056,93.911,512,106,512h301c57.897,0,105-47.551,105-106    C512,377.457,500.546,351.542,482,332.596z M45,121c-8.271,0-15-6.729-15-15s6.729-15,15-15h31c8.271,0,15,6.729,15,15    s-6.729,15-15,15H45z M45,271c-8.271,0-15-6.729-15-15s6.729-15,15-15h31c8.271,0,15,6.729,15,15s-6.729,15-15,15H45z M76,421H45    c-8.271,0-15-6.729-15-15s6.729-15,15-15h31c8.271,0,15,6.729,15,15S84.271,421,76,421z M106,482c-7.99,0-15-7.477-15-16v-17.58    c17.459-6.192,30-22.865,30-42.42c0-19.555-12.541-36.228-30-42.42v-65.16c17.459-6.192,30-22.865,30-42.42    c0-19.555-12.541-36.228-30-42.42v-65.16c17.459-6.192,30-22.865,30-42.42s-12.541-36.228-30-42.42V45c0-8.271,6.729-15,15-15h331    c8.271,0,15,6.729,15,15v266.145c-13.646-6.5-28.905-10.145-45-10.145c-57.897,0-105,47.103-105,105    c0,29.78,12.233,56.726,31.886,76H106z M407,482c-41.355,0-75-34.093-75-76c0-41.355,33.645-75,75-75c41.355,0,75,33.645,75,75    C482,447.907,448.355,482,407,482z">
                        </path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path
                          d="M407,121h-90c-8.284,0-15,6.716-15,15s6.716,15,15,15h90c8.284,0,15-6.716,15-15S415.284,121,407,121z">
                        </path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path
                          d="M407,241h-90c-8.284,0-15,6.716-15,15s6.716,15,15,15h90c8.284,0,15-6.716,15-15S415.284,241,407,241z">
                        </path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path
                          d="M437,391h-15v-15c0-8.284-6.716-15-15-15s-15,6.716-15,15v30c0,8.284,6.716,15,15,15h30c8.284,0,15-6.716,15-15    S445.284,391,437,391z">
                        </path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path
                          d="M266.606,95.393c-5.857-5.858-15.355-5.858-21.212,0.001L196,144.787l-23.611-23.611c-5.857-5.858-15.355-5.858-21.213,0    c-5.858,5.858-5.858,15.355,0,21.213l34.218,34.218C188.322,179.536,192.161,181,196,181s7.678-1.464,10.606-4.394l60-60    C272.464,110.748,272.464,101.251,266.606,95.393z">
                        </path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path
                          d="M266.606,215.393c-5.857-5.858-15.355-5.858-21.212,0.001L196,264.787l-23.611-23.611c-5.857-5.858-15.355-5.858-21.213,0    c-5.858,5.858-5.858,15.355,0,21.213l34.218,34.218C188.322,299.536,192.161,301,196,301s7.678-1.464,10.606-4.394l60-60    C272.464,230.748,272.464,221.251,266.606,215.393z">
                        </path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path
                          d="M266.606,335.393c-5.857-5.858-15.355-5.858-21.212,0.001L196,384.787l-23.611-23.611c-5.857-5.858-15.355-5.858-21.213,0    c-5.858,5.858-5.858,15.355,0,21.213l34.218,34.218C188.322,419.536,192.161,421,196,421s7.678-1.464,10.606-4.394l60-60    C272.464,350.748,272.464,341.251,266.606,335.393z">
                        </path>
                      </g>
                    </g>
                  </svg></span>
                <h3 style="font-family:Raleway, sans-serif;" class="u-text u-text-7" style="color:dodgerblue;">3<br>
                  <strong>
                    <p style="color:lime;" class="section-title" style="color: black;">Plan</p>
                  </strong>
                </h3>
                <p style="color: white;font-family:Raleway, sans-serif;" class=" u-text u-text-8">Your thoughts should
                  be able to lead you into planning to do something. At this stage, we set goals and objectives.</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4"><span
                  class="u-icon u-icon-circle u-text-black u-icon-4"><svg class="u-svg-link"
                    preserveAspectRatio="xMidYMin slice" viewBox="0 0 511.938 511.938" style="">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1e56"></use>
                  </svg><svg class="u-svg-content" viewBox="0 0 511.938 511.938" id="svg-1e56">
                    <g id="XMLID_1418_">
                      <g id="XMLID_868_">
                        <path id="XMLID_121_"
                          d="m492.426 391-9.2-55.428c-.905-5.447-6.046-9.132-11.503-8.228-5.448.904-9.132 6.055-8.228 11.503l9.2 55.428c2.389 14.39-1.65 29.025-11.083 40.152-9.432 11.127-23.208 17.509-37.795 17.509h-160.781v-56.246c7.212 4.865 15.895 7.709 25.23 7.709h19.308c18.584 0 34.581-11.27 41.531-27.332h52.597c2.78 0 5.435-1.157 7.326-3.193 1.892-2.037 2.851-4.769 2.646-7.541l-13.349-181.218c-.275-3.743-2.587-6.879-5.803-8.356l-7.749-4.668c-6.361-3.83-11.206-9.804-13.642-16.82-4.326-12.459-3.646-25.906 1.916-37.866 2.417-5.196 7.682-8.555 13.414-8.555h36.813c8.157 0 14.793 6.637 14.793 14.794v62.206c0 .549.045 1.097.135 1.638l10.452 62.961c.905 5.447 6.054 9.13 11.503 8.228 5.448-.904 9.132-6.055 8.228-11.503l-10.317-62.147v-61.382c0-19.186-15.608-34.794-34.793-34.794h-36.813c-13.481 0-25.866 7.898-31.549 20.122-7.764 16.693-8.714 35.466-2.676 52.858 3.967 11.427 11.857 21.156 22.219 27.395l4.31 2.596 12.172 165.247h-38.186c-1.102-23.969-20.942-43.131-45.178-43.131h-19.308c-14.54 0-27.49 6.903-35.77 17.596-14.65-14.41-31.287-26.424-49.647-35.844l-4.23-39.258c12.79-1.149 25.179-5.744 36.031-13.626 19.013-13.809 29.917-35.206 29.917-58.704v-47.022c3.426 2.201 6.469 5.023 8.921 8.384 1.919 2.63 4.946 4.107 8.08 4.107 1.033 0 2.078-.161 3.099-.493 4.115-1.342 6.9-5.179 6.9-9.508v-38.365c0-45.77-36.416-83.174-81.793-84.814-2.022-3.077-4.382-5.996-7.086-8.7-1.875-1.875-4.419-2.929-7.071-2.929s-5.196 1.054-7.071 2.929l-2.687 2.687c-38.22-17.756-84.305-9.914-114.486 20.266-33.64 33.64-39.28 86.099-13.986 125.966-.073 1.075-.124 2.151-.124 3.231 0 13.299 5.596 26.275 15.753 36.604l9.327 11.027c1.679 1.985 3.549 3.719 5.558 5.207v57.003c-44.11 42.988-69.333 102.604-69.333 164.291v68.963c0 5.522 4.478 10 10 10s10-4.478 10-10v-68.963c0-55.748 22.557-109.65 62.08-148.797l89.235 26.387c20.355 9.86 38.45 23.182 53.869 39.64-.245 1.374-.428 2.768-.546 4.182-8.064-1.557-16.078-4.188-23.916-7.916-28.841-13.715-63.396-7.751-85.986 14.841-14.287 14.287-22.156 33.284-22.156 53.49 0 20.205 7.869 39.202 22.156 53.489 14.601 14.601 33.95 22.186 53.501 22.185 13.266 0 26.625-3.493 38.651-10.656 8.656-5.156 18.192-7.882 27.578-7.882h43.303l6.435 31.973c.956 4.749 5.129 8.029 9.793 8.029.654 0 1.318-.064 1.983-.198 5.415-1.09 8.921-6.362 7.831-11.776l-5.641-28.027h107.079c20.476 0 39.812-8.958 53.052-24.576 13.24-15.62 18.91-36.162 15.557-56.361zm-204.16-58.064h19.308c13.913 0 25.231 11.318 25.231 25.231s-11.318 25.231-25.231 25.231h-19.308c-13.912 0-25.23-11.318-25.23-25.231s11.318-25.231 25.23-25.231zm-85.577-248.463c13.083-13.083 18.167-31.169 15.287-48.156 30.411 5.365 53.592 31.961 53.592 63.887v16.813c-7.628-4.054-16.226-6.269-25.059-6.269h-21.943c-13.364 0-26.363-3.958-37.403-11.264l15.405-14.893c.041-.039.081-.078.121-.118zm-135.937 45.273c-10.88-29.258-4.152-63.044 18.764-85.96 22.445-22.446 55.849-29.514 85.036-19.101l-97.178 97.178c-2.481 2.482-4.687 5.123-6.622 7.883zm14.689 44.129c-2.752-4.731-4.177-9.814-4.177-15.033 0-8.232 3.545-16.129 10.252-22.835l107.072-107.074c7.149 13.24 5.155 30.149-5.984 41.34zm16.174 19.681-3.49-4.126 25.139-24.304v20.501c0 7.96-6.165 10.836-8.055 11.528s-8.455 2.48-13.594-3.599zm10.287 71.909v-33.427l61.671 20.059c2.92.95 5.864 1.705 8.818 2.281l3.554 32.982zm67.856-32.388-55.471-18.042c11.603-5.208 18.977-16.506 18.977-29.407v-39.837l33.26-32.155c15.031 11.07 33.255 17.113 52.042 17.113h20.002v52.351c0 17.021-7.898 32.52-21.67 42.522-13.772 10.003-30.952 12.719-47.14 7.455zm67.278 219.589c-9.617 1.393-19.082 4.768-27.814 9.97-21.876 13.03-49.747 9.539-67.774-8.488-10.511-10.51-16.299-24.483-16.299-39.347s5.788-28.838 16.299-39.348c16.62-16.621 42.042-21.009 63.254-10.921 10.533 5.009 21.381 8.411 32.335 10.16v77.974z">
                        </path>
                      </g>
                      <g id="XMLID_849_">
                        <path id="XMLID_737_"
                          d="m465.994 302.816c-2.63 0-5.21-1.07-7.069-2.93-1.87-1.86-2.931-4.44-2.931-7.07s1.061-5.21 2.931-7.08c1.859-1.86 4.439-2.92 7.069-2.92s5.21 1.06 7.07 2.92c1.86 1.87 2.93 4.44 2.93 7.08 0 2.63-1.069 5.21-2.93 7.07-1.86 1.86-4.44 2.93-7.07 2.93z">
                        </path>
                      </g>
                    </g>
                  </svg></span>
                <h3 style="font-family:Raleway, sans-serif;" class="u-text u-text-9" style="color:dodgerblue;">4<br>
                  <strong>
                    <p style="color:lime;" class="section-title" style="color: black;">Do</p>
                  </strong>
                </h3>
                <p style="color: white;font-family:Raleway, sans-serif;" class=" u-text u-text-10">Having planned, it’s
                  now time to take action and get going.</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-5"><span
                  class="u-icon u-icon-circle u-text-black u-icon-5"><svg class="u-svg-link"
                    preserveAspectRatio="xMidYMin slice" viewBox="0 0 64 64" style="">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a18d"></use>
                  </svg><svg class="u-svg-content" viewBox="0 0 64 64" id="svg-a18d">
                    <g>
                      <circle cx="22" cy="14" r="1"></circle>
                      <path
                        d="m37 34c0-6.462-3.446-12.378-9.021-15.592-.144-3.326-1.448-6.146-2.345-7.705 1.953-.681 3.366-2.521 3.366-4.703 0-2.757-2.243-5-5-5-1.116 0-2.136.38-2.969 1h-3.364c-6.434 0-11.667 5.233-11.667 11.667 0 2.224.654 4.383 1.82 6.23-4.286 3.403-6.82 8.603-6.82 14.103 0 9.925 8.075 18 18 18 3.058 0 5.938-.771 8.463-2.123l13.123 13.123h.414c3.859 0 7-3.14 7-7v-.414l-13.123-13.123c1.352-2.525 2.123-5.405 2.123-8.463zm-22-1.382v12.682c-1.492-.53-2.846-1.344-4.001-2.382l.001-10.533c0-2.643 1.477-4.993 3.796-6.175l4.204 4.204 2.204-2.204c2.319 1.182 3.796 3.532 3.796 6.175v9.991c-1.767 1.026-3.813 1.624-6 1.624-.683 0-1.348-.071-2-.181v-14.437l-2.553-1.276-.895 1.789zm-2.807-8.473.943.707c-2.55 1.622-4.136 4.423-4.136 7.533l-.001 8.232c-1.26-1.898-1.999-4.172-1.999-6.617 0-3.984 1.94-7.61 5.193-9.855zm9.807 2.206v-1.601c.633-.214 1.22-.556 1.707-1.042.169-.169.313-.354.451-.544 4.182 1.982 6.842 6.146 6.842 10.836 0 3.542-1.552 6.72-4 8.919v-8.534c0-3.451-1.941-6.535-5-8.034zm1-7.072v1.307c0 .645-.251 1.251-.707 1.707s-1.063.707-1.707.707h-2.586v2h2v1.586l-1 1-3-3v-4.757c0-.801-.313-1.555-.879-2.122l-.828-.828c-.189-.189-.293-.441-.293-.708v-.171c0-.551.448-1 1-1h1v-3c0-.551.448-1 1-1h5 1.473c.659 1.016 2.298 3.86 2.506 7.287zm-5.333-15.279h1.757c-.27.614-.424 1.288-.424 2h2c0-1.654 1.346-3 3-3s3 1.346 3 3-1.346 3-3 3h-2-5c-1.654 0-3 1.346-3 3v1.171c-1.164.413-2 1.525-2 2.829v.171c0 .801.313 1.555.879 2.122l.828.828c.189.189.293.441.293.708v3.172l-2.134-1.6c-2.421-1.817-3.866-4.708-3.866-7.734 0-5.331 4.337-9.667 9.667-9.667zm-14.667 30c0-4.877 2.241-9.489 6.035-12.516.451.5.941.968 1.48 1.386-3.475 2.641-5.515 6.702-5.515 11.13 0 7.72 6.28 14 14 14s14-6.28 14-14c0-5.505-3.143-10.387-8.076-12.683.033-.197.068-.393.074-.596l1.896-.632c5.008 2.847 8.106 8.134 8.106 13.911 0 8.822-7.178 16-16 16s-16-7.178-16-16zm42.984 22.398c-.193 2.44-2.146 4.393-4.586 4.586l-12.182-12.182c1.791-1.24 3.346-2.795 4.586-4.586z">
                      </path>
                      <path d="m47 53h14v-14h-14zm2-12h10v10h-10z"></path>
                      <path d="m53 46.586-1.293-1.293-1.414 1.414 2.707 2.707 5.707-5.707-1.414-1.414z"></path>
                      <path d="m47 37h14v-14h-14zm2-12h10v10h-10z"></path>
                      <path d="m53 30.586-1.293-1.293-1.414 1.414 2.707 2.707 5.707-5.707-1.414-1.414z"></path>
                      <path d="m31 1v8h32v-8zm14 2h4v4h-4zm-2 4h-4v-4h4zm8-4h4v4h-4zm-18 0h4v4h-4zm28 4h-4v-4h4z">
                      </path>
                      <path d="m37 11h18v2h-18z"></path>
                      <path d="m37 15h18v2h-18z"></path>
                      <path d="m53 19h2v2h-2z"></path>
                      <path d="m37 19h2v2h-2z"></path>
                      <path d="m45 19h2v2h-2z"></path>
                      <path d="m49 19h2v2h-2z"></path>
                      <path d="m41 19h2v2h-2z"></path>
                    </g>
                  </svg></span>
                <h3 style="font-family:Raleway, sans-serif;" class="u-text u-text-11" style="color:dodgerblue;">5<br>
                  <strong>
                    <p style="color:lime;" style="color: black;" class="section-title">Evaluate</p>
                  </strong>
                </h3>
                <p style="color: white;font-family:Raleway, sans-serif;" class=" u-text  u-text-12">Congratulations! You
                  have completed your task, now was it good enough or not? At this stage, we challenge you to go back to
                  the drawing board and check if there is a need for improvement.</p>
              </div>
            </div>
          </div>
      </section>


      <!-- ======= Services Section ======= -->
      <section id="services" class="mcne9 section-bg services">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <center>
              <p style="font-family:Raleway, sans-serif;">Our training Programs</p>
            </center>
          </div>
          <!--new-->
          <style type="text/css">
            h4,
            h3,
            i {
              font-family: Raleway, sans-serif;
            }

            a {
              text-decoration: none;
            }
          </style>
          <div class=" row" data-aos="fade-up" data-aos-delay="200">
            <div class="col-md-6">
              <div style="background-image: url(assets/img/kennn.jpg);" class="icon-box">
                <i class="icofont-brain"></i>
                <h4 style="font-family:Raleway, sans-serif;color:black;"><strong>Training package</strong>

                </h4>
                <p style="color:black;">The Zenj Leadership Training <br>6 days of 1 Hour</p>
                <h4><a href="training.php">See details</a></h4>
              </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
              <div style="background-image: url(assets/img/kennn.jpg);" class="icon-box">
                <i class="icofont-chart-bar-graph"></i>
                <h4 style="color:black;"><strong>Coaching package</strong>

                  </strong></h4>
                <p style="color:black;">The Zenj Leadership Coaching<br>3 months,2 Weekly,1 Hour-session.</p>
                <h4><a href="coaching.php">See details</a></h4>
              </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
              <div style="background-image: url(assets/img/kennn.jpg);" class="icon-box">
                <i class="icofont-learn"></i>
                <h4 style="color:black;"><strong>Mentorship Package</strong>

                  </strong></h4>
                <p style="color:black;">The Zenj Leadership Mentorship<br>Annual 2-Weekly-1-Hour session.</p>
                <h4><a href="mentorship.php">See details</a></h4>
              </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
              <div style="background-image: url(assets/img/kennn.jpg);" class="icon-box">
                <i class="icofont-settings"></i>
                <h4 style="color:black;"><strong>Startup package</strong>

                  </strong></h4>
                <p style="color:black;">The Zenj Leadership Entrepreneur and Bussiness Startup<br>3 month,2
                  Weekly.1-Hour session</p>
                <h4><a href="startup.php">See details</a></h4>
              </div>
            </div>


          </div>
      </section><!-- End Services Section -->
      <!-- ======= Features Section ======= -->
      <!-- ======= Features Section ======= -->
      <section style="height: auto;" id="team" class="mine6 container-fluid">
        <div class="section-title">
          <center>
            <p style="font-family:Raleway, sans-serif;">our team</p>
          </center>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="card">
                <div class="face front-face"> <img src="assets/img/isaac.jpg" alt="" class="profile">
                  <div class="pt-3 text-uppercase name" style="color: dodgerblue;"><strong>ISAAC SSEKISAMBU</strong>
                  </div>
                  <div class="designation text-center" style="color:black;"><strong>founder and COO of Zenj Leadership
                      Organization.</strong></div>
                </div>
                <div style="background-color:grey;" class="face back-face">
                  <!--<span class="fas fa-quote-left"></span>-->
                  <div class="testimonial"><i class="bx bxs-quote-alt-left quote-icon-left"></i><i>Young people have a
                      choice to either inherit a world in a mess
                      or intentionally Create one they desire.<i
                        class="bx bxs-quote-alt-right quote-icon-right"></i></i><br><span
                      style="color: white;"><strong>Isaac Ssekisambu.</strong></span>
                    <div>
                      <center><button class="btn btn-sm btn-primary" data-toggle="modal"
                          data-target="#exampleModalCenter">Read More</button></center>
                    </div>
                  </div>
                  <!--<span class="fas fa-quote-right"></span>-->
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
                <div class="face front-face"> <img src="assets/img/lillian.jpeg" alt="" class="profile">
                  <div class="pt-3 text-uppercase name text-center" style="color:dodgerblue;"><strong>Mirembe Lillian
                      Michelle
                    </strong></div>
                  <div class="designation text-center" style="color:black;"><strong>co founder & Ag.Vice President HR
                      Development & Management of Zenj
                      Leadership Organization.</strong></div>
                </div>
                <div style="background-color:grey;" class="face back-face">
                  <!--<span class="fas fa-quote-left"></span>-->
                  <div class="testimonial"><i class="bx bxs-quote-alt-left quote-icon-left"></i><i>yes, we can.<i
                        class="bx bxs-quote-alt-right quote-icon-right">
                      </i></i><br><span style="color: white;"><strong>Barack Obama</strong></span>
                    <div>
                      <center><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#lillian">Read
                          More</button></center>
                    </div>
                  </div>
                  <!--<span class="fas fa-quote-right"></span>-->
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div style="padding-bottom: 2px;border-bottom: 2px;" class="card">
                <div class="face front-face"> <img src="assets/img/opiyo.jpg" alt="" class="profile">
                  <div class="pt-3 text-uppercase name text-center" style="color:dodgerblue;"> <strong>Opiyo Samuel
                      Laloyo</strong>
                  </div>
                  <div class="designation text-center" style="color: black;"><strong>CEO of Zenj Leadership
                      Organization.</strong></div>
                </div>
                <div style="background-color:grey;" class="face back-face">
                  <!--<span class="fas fa-quote-left"></span>-->
                  <div class="testimonial"><br><span style="color: dodgerblue;"></span>
                    <div>
                      <center><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#opiyolaloyo">Read
                          More</button></center>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><br>


          <div class="row">
            <div class="col-lg-4">
              <div class="card">
                <div class="face front-face"> <img src="assets/img/sydney.jpg" alt="" class="profile">
                  <div class="pt-3 text-uppercase name text-center" style="color:dodgerblue;"> <strong>Sydney David
                      Walusimbi</strong></div>
                  <div class="designation text-center" style="color:black;"> <strong>Patron and Chairperson of the Board
                      of Directors at
                      The Zenj Leadership Organisation.</strong></div>
                </div>
                <div style="background-color:grey;" class="face back-face">
                  <!--<span class="fas fa-quote-left"></span>-->
                  <div class="testimonial"><i class="bx bxs-quote-alt-left quote-icon-left"></i><i>Every Young Person in
                      any part of the world has a power embedded within them,
                      a power determines the Future he/she wants to be a part of. The Zenj Leadership is here to help
                      activate that power.<i class="bx bxs-quote-alt-right quote-icon-right"></i></i><span
                      style="color: white;"><strong>Sydney David Walusimbi.</strong></span>
                    <br>
                    <div>
                      <center><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#sydo">Read
                          More</button></center>
                    </div>
                  </div>
                  <!--<span class="fas fa-quote-right"></span>-->
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
                <div class="face front-face"> <img src="assets/img/katura.jpg" alt="Arthur" class="profile">
                  <div class="pt-3 text-uppercase name" style="color:dodgerblue;"><strong>Arthur Katura</strong></div>
                  <div class="designation text-center" style="color:black;"><strong>Facilitator,Grants Sponsorship and
                      <br>proposol manager at the Zenj Leadership Organization.</strong></div>
                </div>
                <!--<div class="face back-face"> <span class="fas fa-quote-left"></span>
              <div class="testimonial">Young people have a choice to either inherit a world in a mess
                 or intentionally Create one they desire. <br><span style="color: dodgerblue;">Ssekisambu Isaac.</span>
                 <div><center><button class="btn btn-sm btn-primary"data-toggle="modal"
                  data-target="#exampleModalCenter">Read More</button></center></div>
                </div> <span class="fas fa-quote-right"></span>-->
              </div>
            </div>
            <div class="col-lg-4">
              <div style="padding-bottom: 2px;border-bottom: 2px;" class="card">
                <div class="face front-face"> <img src="assets/img/deesha.jpg" alt="" class="profile">
                  <div class="pt-3 text-uppercase name" style="color:dodgerblue;"><strong> Deesha G Ambani</strong>
                  </div>
                  <div class="designation text-center" style="color:black;"><strong>Manager Zenj Miscellaneous
                      (Debates,Speech and Poetry) at the Zenj Leadership Organization.</strong></div>
                </div>
                <!--<div class="face back-face"> <span class="fas fa-quote-left"></span>-->
                <!--<div class="testimonial">“yes, we can”.<br><span style="color: dodgerblue;"></span>
                <div><center><button class="btn btn-sm btn-primary"data-toggle="modal"
                  data-target="#opiyolaloyo">Read More</button></center>-->
              </div>
            </div>
          </div>
        </div>
        </div>
        </div><br>


        </div>
        </div>
        </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div style="background-color: gainsboro;" class="modal-header">
                <h5 style="font-family:Raleway;color: black;" class="modal-title" id="exampleModalLongTitle">
                  <center>Isaac Ssekisambu is the founder and COO of Zenj Leadership Organization. He
                    is a high performance and transformational servant leadership Coach.</center>
                </h5>
                <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>-->
              </div>
              <div class="text-center ">
                <p style="color: black;padding: 12px;">
                  Ssekisambu founded the youth centered Leadership Organization in
                  2018 while he was the Head Prefect at his Advanced level. The youth group, now Organisation, advocated
                  for
                  <strong> servant leadership and Youth active involvement in creating a sustainable future.</strong>
                  Mr. Ssekisambu is passionate
                  about helping young people globally, actively participate in leading themselves, their communities,
                  and
                  creating their businesses than Seek Jobs. Since 2018, he has reached 1700+ young people in Africa and
                  Abroad .
                </p>
                <div style="padding: 15px;" class="model-footer">
                  <i data-dismiss="modal" class="icofont-close"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="lillian" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 style="font-family:Raleway;color: black;" class="modal-title" id="exampleModalLongTitle">
                  <center>Mirembe Lillian Michelle is a co founder & Ag.Vice President HR Development &
                    Management of Zenj Leadership Organization.</center>
                </h5>
                <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>-->
              </div>
              <div class="text-center ">
                <p style="color: black;padding: 12px;">
                  She is Very passionate about Youth related activities and engagements, and in her own right has
                  participated in
                  several of them getting, an Honorable mention in a Youth Writing Competition.With this Organisation
                  Mirembe hopes to reach a
                  number of youth in line with helping them boast their leadership skills, develop their love and
                  concern for
                  the environment at large for the betterment of the future. Mirembe is driven by a famous saying of one
                  of the greatest leaders of all time
                </p>
                <div style="padding: 15px;" class="model-footer">
                  <i data-dismiss="modal" class="icofont-close"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="opiyolaloyo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 style="font-family:Raleway;color: black;" class="modal-title" id="exampleModalLongTitle">
                  <center>Opiyo Samuel Laloyo is the CEO of Zenj
                    Leadership Organization.</center>
                </h5>
                <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>-->
              </div>
              <div class="text-center ">
                <p style="color: black;padding: 12px;">
                  Samuel Opiyo is an educator, administrator, leadership coach and facilitator, analyst, youth
                  strategist and writer. Samuel believes the greatest act of justice is harnessing the potential of
                  young people across
                  all spheres of life. This has been his motivation in founding New Boundaries films and other platforms
                  for the youth to get employed
                  and explore their talents and skills. He has also worked as students’ leadership development officer
                  across many schools in Uganda. He also believes
                  that for any country to achieve economic growth, there is need for deliberate human capital
                  development and capacity development.
                </p>
                <div style="padding: 15px;" class="model-footer">
                  <i data-dismiss="modal" class="icofont-close"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>



        <!-- Modal -->
        <div class="modal fade" id="sydo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 style="font-family:Raleway;color: black;" class="modal-title" id="exampleModalLongTitle">
                  <center>Sydney David Walusimbi is the Patron and Chairperson of the Board
                    of Directors at The Zenj Leadership Organisation.</center>
                </h5>
                <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>-->
              </div>
              <div class="text-center ">
                <p style="color: black;padding: 12px;">
                  He is a Leadership Coach & Mentor. Sydney David also serves as Mentor Training Facilitator at Watoto
                  Christian Hall
                  in partnership with Leadership Edge, Inc. and Southeastern University based in the United States and
                  he is passionate about using
                  his skills and experience to help young people succeed globally. He dedicates most of his time to
                  research, so that whatever is passed on
                  to the young generation is exceptionally
                  beneficial and it can practically be used to tackle our day-to-day challenges of Poor personal and
                  community leadership and Unemployment.
                </p>
                <div style="padding: 15px;" class="model-footer">
                  <i data-dismiss="modal" class="icofont-close"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>



        <style type="text/css">
          .container {
            margin-top: 80px
          }

          .container .col-lg-4 {
            display: flex;
            justify-content: center
          }

          .card {
            width: 300px;
            height: 300px;
            transform-style: preserve-3d;
            perspective: 500px;
            border: none;
            background-color: inherit
          }

          .card .face {
            position: absolute;
            color: #fff;
            width: 100%;
            height: 100%;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.06);
            transform-style: preserve-3d;
            transition: 0.5s;
            backface-visibility: hidden;
            border-top: 1px solid #ddd;
            border-left: 1px solid dodgerblue
          }

          .card .face.front-face,
          .card .face.back-face {
            position: absolute;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center
          }

          .card .face.front-face .profile {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover
          }

          .card .face.front-face .name {
            letter-spacing: 2px
          }

          .card .face.front-face .designation {
            font-size: 0.8rem;
            color: #ddd;
            letter-spacing: 0.8px
          }

          .card:hover .face.front-face {
            transform: rotateY(180deg)
          }

          .card .face.back-face {
            position: absolute;
            background: rgba(255, 255, 255, 0.06);
            transform: rotateY(180deg);
            padding: 20px 30px;
            text-align: center;
            user-select: none
          }

          .card .face.back-face .fa-quote-left {
            position: absolute;
            top: 25px;
            left: 25px;
            font-size: 1.2rem
          }

          .card .face.back-face .fa-quote-right {
            position: absolute;
            bottom: 35px;
            right: 25px;
            font-size: 1.2rem
          }

          .card:hover .face.back-face {
            transform: rotateY(360deg)
          }

          @media(max-width: 991.5px) {
            .col-lg-4 {
              margin-top: 40px;
              margin-bottom: 20px
            }
          }
        </style>
        <div class="text-center"><br><br>
          <a href="#" type="button" style="background-color: dodgerblue;" class=" btn" data-toggle="collapse"
            data-target="#demo"><i class="fa fa-expand" aria-hidden="true"></i></a>
        </div><br>
        <div id="demo" class="collapse">
          <div class="row" data-aos="fade-up">
            <div class="container">
              <div class="row">
                <div class="col-lg-4">
                  <div class="card">
                    <div class="face front-face"> <img src="assets/img/diane.jpg" alt="" class="profile">
                      <div class="pt-3 text-uppercase name" style="color:dodgerblue;font-weight:bold;"> Uwingabire Diane
                        Faith </div>
                      <div class="designation text-center" style="color: black; font-weight:bold;">Facilitator at the
                        Zenj Leadership Organization.</div>
                    </div>
                    <!--<div class="face back-face"><span class="fas fa-quote-left"></span>
                          <div class="testimonial">“yes, we can”.<br><span style="color: dodgerblue;">Barack Obama</span>
                            <div><center><button class="btn btn-sm btn-primary"data-toggle="modal"
                              data-target="#lillian">Read More</button></center></div>
                           </div> <span class="fas fa-quote-right"></span>-->
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="card">
                    <div class="face front-face"> <img src="assets/img/pinkisirvi.png" alt="" class="profile">
                      <div class="pt-3 text-uppercase name" style="color:dodgerblue;font-weight:bold;"> Pink Survi</div>
                      <div class="designation text-center" style="color: black; font-weight:bold;">Facilitator at the
                        Zenj Leadership Organization.</div>
                    </div>
                    <!--<div class="face back-face"><span class="fas fa-quote-left"></span>
                        <div class="testimonial">“yes, we can”.<br><span style="color: dodgerblue;">Barack Obama</span>
                          <div><center><button class="btn btn-sm btn-primary"data-toggle="modal"
                            data-target="#lillian">Read More</button></center></div>
                         </div> <span class="fas fa-quote-right"></span>-->
                  </div>
                </div>
                <div class="col-lg-4">
                  <div style="padding-bottom: 2px;border-bottom: 2px;" class="card">
                    <div class="face front-face text-center"> <img src="assets/img/nathanael.jpg" alt=""
                        class="profile">
                      <div class="pt-3 text-uppercase name" style="color:dodgerblue;font-weight:bold;"> Nathanael Flomo
                        Molubahn Jr.</div>
                      <div class="designation text-center" style="color:black;font-weight:bold;">Facilitator and
                        Communications Manager at the Zenj Leadership Organization.</div>
                    </div>
                    <!--<div class="face back-face"> <span class="fas fa-quote-left"></span>
                          <div class="testimonial">“yes, we can”.<br><span style="color: dodgerblue;"></span>
                            <div><center><button class="btn btn-sm btn-primary"data-toggle="modal"
                              data-target="#opiyolaloyo">Read More</button></center>
                        </div>
                    </div>
                </div>-->
                  </div>
                </div>
              </div>
              <br>

              <div class="row">
                <div class="col-lg-4">
                  <div class="card">
                    <div class="face front-face"> <img src="assets/img/moses.jpg" alt="" class="profile">
                      <div class="pt-3 text-uppercase name" style="color:dodgerblue;font-weight:bold;">Assimwe Moses
                      </div>
                      <div class="designation text-center" style="color: black; font-weight:bold;">Facilitator at the
                        Zenj Leadership Organization.</div>
                    </div>
                    <!--<div class="face back-face"><span class="fas fa-quote-left"></span>
                                          <div class="testimonial">“yes, we can”.<br><span style="color: dodgerblue;">Barack Obama</span>
                                            <div><center><button class="btn btn-sm btn-primary"data-toggle="modal"
                                              data-target="#lillian">Read More</button></center></div>
                                           </div> <span class="fas fa-quote-right"></span>-->
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="card">
                    <div class="face front-face"> <img src="assets/img/anastasia.jpg" alt="" class="profile">
                      <div class="pt-3 text-uppercase name" style="color:dodgerblue;font-weight:bold;">Anastasia
                        Livingstone</div>
                      <div class="designation text-center" style="color: black; font-weight:bold;">Facilitator at the
                        Zenj Leadership Organization.</div>
                    </div>
                    <!--<div class="face back-face"><span class="fas fa-quote-left"></span>
                                        <div class="testimonial">“yes, we can”.<br><span style="color: dodgerblue;">Barack Obama</span>
                                          <div><center><button class="btn btn-sm btn-primary"data-toggle="modal"
                                            data-target="#lillian">Read More</button></center></div>
                                         </div> <span class="fas fa-quote-right"></span>-->
                  </div>
                </div>
                <div class="col-lg-4">
                  <div style="padding-bottom: 2px;border-bottom: 2px;" class="card">
                    <div class="face front-face text-center"> <img src="assets/img/naikesa.jpg" alt="" class="profile">
                      <div class="pt-3 text-uppercase name" style="color:dodgerblue;font-weight:bold;">Esther Naikesa
                      </div>
                      <div class="designation text-center" style="color:black;font-weight:bold;">Facilitator and HR at
                        the Zenj Leadership Organization.</div>
                    </div>
                    <!--<div class="face back-face"> <span class="fas fa-quote-left"></span>
                                          <div class="testimonial">“yes, we can”.<br><span style="color: dodgerblue;"></span>
                                            <div><center><button class="btn btn-sm btn-primary"data-toggle="modal"
                                              data-target="#opiyolaloyo">Read More</button></center>
                                        </div>
                                    </div>
                                </div>-->
                  </div>
                </div>
              </div>
              <br>

              <center>
                <div class="col-lg-4">
                  <div style="padding-bottom: 2px;border-bottom: 2px;" class="card">
                    <div class="face front-face"> <img src="assets/img/knd.jpg" alt="KnDjoshua" class="profile">
                      <div class="pt-3 text-uppercase name" style="color:dodgerblue;font-weight:bold;"> Oloya Kennedy
                        Joshua</div>
                      <div class="designation text-center" style="color: black; font-weight:bold;">Web developer/Web
                        Administrator at the Zenj Leadership Organization.</div>
                    </div>
                    <div class="face back-face">
                      <!--<span class="fas fa-quote-left"></span>-->
                      <div class="social ">
                        <a href="https://twitter.com/kennedyoloya?lang=en"><i class="icofont-twitter"></i></a>
                        <a href="https://www.facebook.com/oloya.kennedy.3"><i class="icofont-facebook"></i></a>
                        <a href="https://www.instagram.com/oloyakennedy/"><i class="icofont-instagram"></i></a>
                        <a href="https://ug.linkedin.com/in/oloya-kennedy-459a74196"><i
                            class="icofont-linkedin"></i></a>
                        <a href="https://kdjoshua.github.io/KnD/"><i class="icofont-world"></i></a>
                        <a href="https://www.youtube.com/channel/UCcgzlxuWPeucvPQjVro8xvA"><i
                            class="icofont-youtube"></i></a>
                      </div>
                      <!--<div><center><button class="btn btn-sm btn-primary"data-toggle="modal"
                  data-target="#opiyolaloyo">Read More</button></center>-->
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div><br>
        <style type="text/css">
          .social {
            background-color: transparent;
            height: 80px;
            padding-top: 15px;
            padding-bottom: 40px;
          }
        </style>




      </section>

  </section><!-- End Features Section -->









  <!-- ======= Testimonials Section ======= -->
  <section id="testimony" style="height: auto;" class="container-fluid mine3 testimonials">
    <div class="container-fluid" data-aos="zoom-in">

      <div class=" section-title">
        <center>
          <p style="font-family:Raleway, sans-serif;">Our testimonial</p>
        </center>
      </div>

      <div class="owl-carousel testimonials-carousel">

        <div class="testimonial-item">
          <!--<img src="assets/img/testimonials/antony.png" class="testimonial-img" alt="their pic">-->
          <h3>Antony Bolton</h3>
          <!-- <h4>Tattoo &amp;  artist</h4>-->
          <p>
          <div class="container">
            <i class="bx bxs-quote-alt-left quote-icon-left">
              <span style="font-family:Raleway, sans-serif;text-align: justify; "> Very committed to improve leadership
                qualities in youth.Events where worth attending and i gained volumes from theinteractions there.</span>
              <i class="bx bxs-quote-alt-right quote-icon-right"></i></i>
          </div>
          </p>
        </div>

        <div class="testimonial-item">
          <!--<img src="assets/img/testimonials/diana.png" class="testimonial-img" alt="their pic">-->
          <h3>Diana Tuhumwire</h3>
          <h4></h4>
          <div class="container">
            <p> <i class="bx bxs-quote-alt-left quote-icon-left">
                <span style="font-family:Raleway, sans-serif;"> The organization of this movement is great.I enjoyed
                  every single second i was there; during the camps and bussiness talks. Continue the great work.</span>
                <i class="bx bxs-quote-alt-right quote-icon-right"></i></i>
            </p>
          </div>
        </div>

        <div class="testimonial-item">
          <!--<img src="assets/img/testimonials/immaculate.png" class="testimonial-img" alt="their pic">-->
          <h3>Immaculate Atuko</h3>
          <h4></h4>
          <div class="container">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left">
                <span style="font-family:Raleway, sans-serif;"> I loved every bit of the camp,looking forward to more
                  like this.</span>
                <i class="bx bxs-quote-alt-right quote-icon-right"></i></i>
            </p>
          </div>
        </div>

        <div class="testimonial-item">
          <!-- <img src="assets/img/testimonials/berack.png" class="testimonial-img" alt="their pic">-->
          <h3>Berack Ntooreinwe</h3>
          <h4></h4>
          <div class="container">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left">
                <span style="font-family:Raleway, sans-serif;">Am really moved at the Zenj leadership efforts in
                  instilling expertise and leadership skills in the youths globally.</span>
                <i class="bx bxs-quote-alt-right quote-icon-right"></i></i>
            </p>
          </div>
        </div>
      </div><br>
      <div class="text-center">
        <a href="https://search.google.com/local/writereview?placeid=ChIJX73xlXG9fRcRx5zLEWfHHkI"
          class="btn btn-lg btn-primary">WRITE A REVIEW</a>
      </div>
    </div>


  </section><!-- End Testimonials Section -->


  <!-- ======= Team Section ======= -->

  <style type="text/css">
    .mine5 {
      width: 100%;
      background: url("assets/img/training.jpg") fixed center center;
      background-size: cover;
      padding: 120px 0;
    }

    .mine3 {
      width: 100%;
      background: url("assets/img/testimonials.jpg") fixed center center;
      background-size: cover;
      background-color: rgb(0, 0, 0, 0, 6);
      padding: 120px 0;
    }

    .mne6 {
      width: 100%;
      background: url("assets/img/youngpeople.jpg") fixed center center;
      background-size: fit;
      padding: 120px 0;
    }

    .mne9 {
      width: 100%;
      background: url("assets/img/.jpg") fixed center center;
      background-size: fit;
      padding: 120px 0;
    }
  </style>



  <!-- model popup on load
<div style="padding-top:280px;padding-left: 2px;margin-left: 2px;" id="myModal" class="modal fade">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title">Subscribe our Newsletter</h5>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
      <p>Subscribe to our mailing list to get the latest updates straight in your inbox.</p>
              <form>
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="Name">
                  </div>
                  <div class="form-group">
                      <input type="email" class="form-control" placeholder="Email Address">
                  </div>
                  <button type="submit" class="btn btn-primary">Subscribe</button>
              </form>
          </div>
      </div>
  </div>
</div>-->
  <!--End the popup newslwtter-->

  </main><!-- End #main -->

  <style type="text/css">
    .cliens {
      padding: 12px 0;
      text-align: center;
    }

    .cliens img {
      max-width: 45%;
      transition: all 0.4s ease-in-out;
      display: inline-block;
      padding: 15px 0;
      filter: grayscale(100);
    }

    .cliens img:hover {
      filter: none;
      transform: scale(1.1);
    }

    @media (max-width: 768px) {
      .cliens img {
        max-width: 40%;
      }
    }
  </style>


  <?php include("footer.html"); ?>

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div style="color: dodgerblue;" id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>
    window.fbAsyncInit = function () {
      FB.init({
        xfbml: true,
        version: 'v12.0'
      });
    };

    (function (d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Your Chat Plugin code -->
  <div class="fb-customerchat" attribution="install_email" attribution_version="biz_inbox" page_id="104735695074508">
  </div>

</body>

</html>