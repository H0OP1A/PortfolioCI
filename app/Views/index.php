<!DOCTYPE html>
<html lang="zxx">

<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <!-- Required meta tags-->
  <meta charset="utf-8">
  <!-- Title-->
  <title>Akhsan Nurramdhan | Portfolio</title>
  <!-- Description-->
  <meta name="description" content="Personal Portfolio Template">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicons-->
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/icon.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/icon.png">
  <!-- Web fonts-->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&amp;display=swap" rel="stylesheet">
  <!-- CSS vendors-->
  <link rel="stylesheet" href="<?php base_url() ?>/css/bootstrap-custom.css">
  <link rel="stylesheet" href="<?php base_url() ?>/css/devicon.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>/css/tiny-slider.css">
  <link rel="stylesheet" href="<?php base_url() ?>/css/lity.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>/css/simplebar.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>/css/jquery.mb.YTPlayer.min.css">
  <!-- Main CSS-->
  <link rel="stylesheet" href="<?php base_url() ?>/css/main.css">
  <!-- CSS Color scheme-->
  <link id="color-scheme" rel="stylesheet" href="css/colors/main-orange.css">
  <!-- Custom CSS (Add your custom CSS styles to this file)-->
  <link rel="stylesheet" href="<?php base_url() ?>/css/custom.css">
  <!-- removeIf(customizerDist)-->
  <link rel="stylesheet" href="<?php base_url() ?>/customizer/main.css">
  <!-- endremoveIf(customizerDist)-->
</head>

<body class="theme-dark">
  <!-- Preloader-->
  <div class="preloader">
    <div class="preloader-block">
      <div class="preloader-icon"><span class="loading-dot loading-dot-1"></span><span class="loading-dot loading-dot-2"></span><span class="loading-dot loading-dot-3"></span></div>
    </div>
  </div>
  <div id="overlay-effect"></div>
  <!-- Navbar-->
  <nav class="navbar-expand-md navbar fixed-top" id="navbar">
    <span class="navbar-menu ml-auto" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" role="button"><span class="btn-line"></span></span>
    <div class="collapse navbar-collapse order-1 order-lg-0" id="navbarSupportedContent">
      <!-- Navbar menu-->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#resume">Resume</a></li>
        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
    </div>
  </nav>
  <!-- Home-->
  <section class="home-area element-cover-bg" id="home" style="background-image:url(img/home.png)">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center">
        <div class="col-12 col-lg-8 home-content text-center">
          <h1 class="home-name" style="font-size: 40pt;">Akhsan <span>Nurramdhan</span></h1>
          <h4 class="cd-headline clip home-headline">I’m a <span class="cd-words-wrapper single-headline"><b class="is-visible">Developer</b><b>Freelancer</b><b>AI Enthusiasm</b></span></h4>
        </div>
      </div>
    </div>
    <div class="fixed-wrapper">
      <!-- Social media icons-->
      <div class="fixed-block block-right">
        <ul class="list-unstyled social-icons">
          <li><a href="https://www.linkedin.com/in/muhammad-akhsan-nurramdhan-825740225/"><i class="icon ion-logo-linkedin"></i></a></li>
          <li><a href="https://github.com/H0OP1A"><i class="icon ion-logo-github"></i></a></li>
          <li><a href="https://www.instagram.com/akhsan_sanusi/"><i class="icon ion-logo-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  </section>
  <!-- About lightbox-->
  <div class="lightbox-wrapper" id="about" data-simplebar>
    <div class="container">
      <div class="lightbox-close">
        <div class="close-btn" data-modal-close=""><span class="btn-line"></span></div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="lightbox-content">
            <div class="row">
              <div class="col-12">
                <div class="section-heading page-heading">
                  <p class="section-description">Get to know me</p>
                  <h2 class="section-title">About Me</h2>
                  <div class="animated-bar"></div>
                </div>
              </div>
            </div>
            <!-- Info section-->
            <div class="info-section single-section">
              <div class="row align-items-center">
                <!-- Picture part-->
                <div class="col-12 col-lg-4 info-img"><img class="img-fluid img-thumbnail" src="img/me.png" alt="About Picture"></div>
                <!-- Content part-->
                <div class="col-12 col-lg-8 info-content">
                  <div class="content-block">
                    <h2 class="content-subtitle">Who am i?</h2>
                    <h6 class="content-title">I'm Akhsan Nurramdhan, a Web Developer and AI Enthusiasm</h6>
                    <div class="content-description">
                      <p>I'm Akhsan Nurramdhan, a freelancer based in Indonesia, a Web Developer, and an AI enthusiast with experience as a Bangkit Machine Learning Cohort participant; I have been building noteworthy websites for years that comply with the latest design trends, helping to convert visions and ideas into meaningful and useful products with a sharp eye for product evolution to prioritize tasks, iterate fast, and deliver faster.</p>
                    </div>
                    <address class="content-info">
                      <div class="row">
                        <?php foreach ($biodata as $biodata) { ?>
                          <div class="col-12 col-md-6 single-info"><span>Name:</span>
                            <p><?php echo $biodata['nama']; ?></p>
                          </div>
                          <div class="col-12 col-md-6 single-info"><span>Email:</span>
                            <p><a href="mailto:emma@example.com"><?php echo $biodata['email']; ?></a></p>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-12 col-md-6 single-info"><span>Age:</span>
                          <p><?php echo $biodata['umur']; ?></p>
                        </div>
                        <div class="col-12 col-md-6 single-info"><span>From:</span>
                          <p><?php echo $biodata['alamat']; ?></p>
                        </div>
                      </div>
                    </address>
                  <?php } ?>
                  <ul class="list-unstyled list-inline content-follow">
                    <li class="list-inline-item"><a href="https://www.instagram.com/akhsan_sanusi/"><i class="icon ion-logo-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/muhammad-akhsan-nurramdhan-825740225/"><i class="icon ion-logo-linkedin"></i></a></li>
                    <li class="list-inline-item"><a href="https://github.com/H0OP1A"><i class="icon ion-logo-github"></i></a></li>
                  </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <!-- Resume lightbox-->
  <div class="lightbox-wrapper" id="resume" data-simplebar>
    <div class="container">
      <div class="lightbox-close">
        <div class="close-btn" data-modal-close=""><span class="btn-line"></span></div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="lightbox-content">
            <div class="row">
              <div class="col-12">
                <div class="section-heading page-heading">
                  <p class="section-description">Check out my Resume</p>
                  <h2 class="section-title">Resume</h2>
                  <div class="animated-bar"></div>
                </div>
              </div>
            </div>
            <!-- Resume section-->
            <div class="resume-section single-section">
              <div class="row">
                <!-- Education part-->
                <div class="col-12 col-md-6">
                  <div class="col-block education">
                    <h3 class="col-title">Education</h3>
                    <?php foreach ($pendidikan as $pendidikan) : ?>
                    <div class="resume-item"><span class="item-arrow"></span>
                      <h5 class="item-title"><?= $pendidikan['prodi']; ?></h5><span class="item-details"><?= $pendidikan['institusi']; ?> / <?= $pendidikan['tahun_mulai']; ?> - <?= $pendidikan['tahun_selesai']; ?></span>
                      <p class="item-description"><?= $pendidikan['deskripsi']; ?></p>
                    </div>
                    <?php endforeach; ?>
                  </div>
                </div>
                <!-- Experience part-->
                <div class="col-12 col-md-6">
                  <div class="col-block experience">
                    <h3 class="col-title">Experience</h3>
                    <?php foreach ($pengalaman as $pengalaman) : ?>
                    <div class="resume-item"><span class="item-arrow"></span>
                      <h5 class="item-title"><?= $pengalaman['posisi']; ?></h5><span class="item-details"><?= $pengalaman['tempat']; ?> / <?= $pengalaman['tahun_mulai']; ?> - <?= $pengalaman['tahun_selesai']; ?></span>
                      <p class="item-description"><?= $pengalaman['deskripsi']; ?></p>
                    </div>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- Skills section-->
            <div class="skills-section single-section">
              <div class="row">
                <div class="col-12">
                  <div class="section-heading">
                    <p class="section-description">My level of knowledge in some tools</p>
                    <h2 class="section-title">Languange</h2>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="single-skill" data-percentage="90">
                    <div class="skill-info"><span class="skill-name">HTML/CSS/PHP</span><span class="skill-percentage"></span></div>
                    <div class="progress skill-progress">
                      <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="single-skill" data-percentage="80">
                    <div class="skill-info"><span class="skill-name">Python</span><span class="skill-percentage"></span></div>
                    <div class="progress skill-progress">
                      <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="single-skill" data-percentage="85">
                    <div class="skill-info"><span class="skill-name">Java</span><span class="skill-percentage"></span></div>
                    <div class="progress skill-progress">
                      <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="single-skill" data-percentage="80">
                    <div class="skill-info"><span class="skill-name">JavaScript</span><span class="skill-percentage"></span></div>
                    <div class="progress skill-progress">
                      <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="single-skill" data-percentage="70">
                    <div class="skill-info"><span class="skill-name">Kotlin</span><span class="skill-percentage"></span></div>
                    <div class="progress skill-progress">
                      <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="single-skill" data-percentage="75">
                    <div class="skill-info"><span class="skill-name">C++</span><span class="skill-percentage"></span></div>
                    <div class="progress skill-progress">
                      <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="services-section single-section">
              <div class="row">
                <div class="col-12">
                  <div class="section-heading center-section">
                    <h2 class="section-title bar-section">Framework</h2>
                  </div>
                </div>
              </div>
              <div class="row">
                <!-- Single service-->
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="single-service"><i class="icon service-icon devicon-codeigniter-plain"></i>
                    <h6 class="service-title">Codeigniter</h6>
                  </div>
                </div><!-- Single service-->
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="single-service"><i class="icon service-icon devicon-laravel-original"></i>
                    <h6 class="service-title">Laravel</h6>
                  </div>
                </div>
                <!-- Single service-->
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="single-service"><i class="icon service-icon devicon-tensorflow-original"></i>
                    <h6 class="service-title">Tensorflow</h6>
                  </div>
                </div>
                <!-- Single service-->
                <div class="col-12 col-md-6 col-lg-4 offset-md-2">
                  <div class="single-service"><i class="icon service-icon devicon-p5js-original"></i>
                    <h6 class="service-title">p5.js</h6>
                  </div>
                </div>
                <!-- Single service-->
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="single-service"><i class="icon service-icon devicon-react-original"></i>
                    <h6 class="service-title">React Native & ReactJS</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio lightbox-->
  <div class="lightbox-wrapper" id="portfolio" data-simplebar>
    <div class="container">
      <div class="lightbox-close">
        <div class="close-btn" data-modal-close=""><span class="btn-line"></span></div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="lightbox-content">
            <div class="row">
              <div class="col-12">
                <div class="section-heading page-heading">
                  <p class="section-description">Showcasing some of my best work</p>
                  <h2 class="section-title">Portfolio</h2>
                  <div class="animated-bar"></div>
                </div>
              </div>
            </div>
            <!-- Portfolio section-->
            <div class="portfolio-section single-section">
              <div class="row">
                <!-- Filter nav-->
                <div class="col-12">
                  <ul class="list-inline filter-control" role="group" aria-label="Filter Control">
                    <li class="list-inline-item tab-active" data-filter="*">All</li>
                    <li class="list-inline-item" data-filter=".project">Project</li>
                    <li class="list-inline-item" data-filter=".certification">Certification</li>
                    <li class="list-inline-item" data-filter=".photos">Photos</li>
                  </ul>
                </div>
              </div>
              <!-- Thumbnail list-->
              <div class="portfolio-grid row">
              <?php foreach ($portfolio as $portfolio) : ?>
                <!-- Single item-->
                <div class="single-item col-6 col-lg-4 <?= $portfolio['category']; ?>"><a class="portfolio-item" href="<?= $portfolio['src']; ?>" data-lightbox>
                    <div class="portfolio-wrapper"><img class="img-fluid" alt="Item" src="<?= $portfolio['src']; ?>">
                      <div class="item-content">
                        <h6 class="content-title"><?= $portfolio['description']; ?></h6><span class="content-more">More Info</span>
                      </div>
                    </div>
                  </a></div>
               <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact lightbox-->
  <div class="lightbox-wrapper" id="contact" data-simplebar>
    <div class="container">
      <div class="lightbox-close">
        <div class="close-btn" data-modal-close=""><span class="btn-line"></span></div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="lightbox-content">
            <div class="row">
              <div class="col-12">
                <div class="section-heading page-heading">
                  <p class="section-description">Feel free to contact me anytimes</p>
                  <h2 class="section-title">Get in Touch</h2>
                  <div class="animated-bar"></div>
                </div>
              </div>
            </div>
            <!-- Contact section-->
            <div class="contact-section single-section">
              <div class="row">
                <!-- Contact info-->
                <div class="col-12 col-lg-5 offset-md-4">
                  <div class="contact-info">
                    <h4 class="content-title">Contact Info</h4>
                    <p class="info-description">Always available for freelance work if the right project comes along, Feel free to contact me!</p>
                    <ul class="list-unstyled list-info">
                    <?php foreach ($contact as $contact) : ?>
                      <li>
                        <div class="media align-items-center"><span class="info-icon"><i class="icon ion-logo-ionic"></i></span>
                          <div class="media-body info-details">
                            <h6 class="info-type">Name</h6><span class="info-value"><?= $contact['name']; ?></span>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="media align-items-center"><span class="info-icon"><i class="icon ion-md-map"></i></span>
                          <div class="media-body info-details">
                            <h6 class="info-type">Location</h6><span class="info-value"><?= $contact['address']; ?></span>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="media align-items-center"><span class="info-icon"><i class="icon ion-md-call"></i></span>
                          <div class="media-body info-details">
                            <h6 class="info-type">Call Me</h6><span class="info-value"><a href="https://wa.me/<?= $contact['phone']; ?>"><?= $contact['phone']; ?></a></span>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="media align-items-center"><span class="info-icon"><i class="icon ion-md-send"></i></span>
                          <div class="media-body info-details">
                            <h6 class="info-type">Email Me</h6><span class="info-value"><a href="mailto:<?= $contact['name']; ?>"><?= $contact['email']; ?></a></span>
                          </div>
                        </div>
                      </li>
                     <?php endforeach; ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Scripts-->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/animatedModal.js"></script>
  <script src="js/tiny-slider.js"></script>
  <script src="js/lity.min.js"></script>
  <script src="js/simplebar.min.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>
  <script src="js/main.js"></script>
  <!-- Custom JS (Add your custom JS scripts to this file)-->
  <script src="js/custom.js"></script>
  <!-- removeIf(customizerDist)-->
  <script src="../customizer/main.js"></script>
  <!-- endremoveIf(customizerDist)-->
</body>

</html>