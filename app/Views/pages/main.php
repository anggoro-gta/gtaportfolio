<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>GTA Web Portfolio</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>/assets/img/icon/icon.png" />

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/assets/css/styles.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/assets/css/animate.css" rel="stylesheet" />

    <!-- sweetalert -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.6/dist/sweetalert2.min.css"> -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/sweetalert2.min.css">
    <!-- sweetalert -->
</head>

<body id="page-top">

    <!-- GTA navbar -->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">GTA;</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">
                            <i class='bx bx-home-alt nav__icon'></i>
                            <span class="nav__name">Home</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#project" class="nav__link">
                            <i class='bx bx-code-block nav__icon'></i>
                            <span class="nav__name">Project</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#about" class="nav__link">
                            <i class='bx bx-user nav__icon'></i>
                            <span class="nav__name">About</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#contact" class="nav__link">
                            <i class='bx bx-message-square-detail nav__icon'></i>
                            <span class="nav__name">Contact</span>
                        </a>
                    </li>
                </ul>
            </div>

            <img src="<?= base_url(); ?>/assets/img/icon/icon.png" alt="" class="nav__img">
        </nav>
    </header>
    <!--end GTA navbar -->

    <!-- Home Section-->
    <section class="page-section section bg-primary text-center text-white mb-0 mt-0 wow fadeInUp" data-wow-delay=".15s" id="home">
        <div class="masthead d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image                 -->
            <img class="masthead-avatar mb-5" src="assets/img/profile/profile.png" alt="..." />
            <!-- Masthead Heading -->
            <h1 class="masthead-heading text-uppercase mb-0">Gigih Trianung Anggoro</h1>
            <!-- Icon Divider -->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-desktop"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading -->
            <p class="masthead-subheading font-weight-light mb-0">Graphic Designer - Web Developer - Video Editor</p>
        </div>
    </section>

    <!-- Portfolio Section-->
    <section class="page-section section portfolio wow fadeInUp" data-wow-delay=".15s" id="project">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">my Project</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-desktop"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                <!-- Portfolio Item 1-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/project/hasil_project1.png" alt="..." />
                    </div>
                </div>
                <!-- Portfolio Item 2-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="<?= base_url(); ?>/assets/img/project/hasil_project2.png" alt="..." />
                    </div>
                </div>
                <!-- Portfolio Item 3-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="<?= base_url(); ?>/assets/img/project/hasil_project3.png" alt="..." />
                    </div>
                </div>
                <!-- Portfolio Item 4-->
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="<?= base_url(); ?>/assets/img/project/hasil_project4.png" alt="..." />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section-->
    <section class="page-section section bg-primary text-white mb-0 wow fadeInUp" data-wow-delay=".15s" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">About Me</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-desktop"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <div class="col-lg-4 ms-auto">

                    <h1>Education</h1>
                    <div class="timeline-item">
                        <div class="circle-dot"></div>
                        <h3 class="timeline-date">
                            <i class="fa fa-calendar"></i> 2011 - 2017
                        </h3>
                        <p class="lead">Bachelor of Computer Science (S1) Universitas Brawijaya Malang</p>
                    </div>
                </div>
                <div class="col-lg-4 me-auto">
                    <h1>Experience</h1>
                    <div class="timeline-item">
                        <div class="circle-dot"></div>
                        <h3 class="timeline-date">
                            <i class="fa fa-calendar"></i> 2017 - 2018
                        </h3>
                        <p class="lead">Staff Data Entry at Dispendukcapil Kab. Kediri</p>
                    </div>
                    <div class="timeline-item">
                        <div class="circle-dot"></div>
                        <h3 class="timeline-date">
                            <i class="fa fa-calendar"></i> 2018 - Now
                        </h3>
                        <p class="lead">Staff IT at Bappeda Kab. Kediri</p>
                    </div>
                    <div class="timeline-item">
                        <div class="circle-dot"></div>
                        <h3 class="timeline-date">
                            <i class="fa fa-calendar"></i> 2021 - Now
                        </h3>
                        <p class="lead">Freelance Web Developer at GTA Project</p>
                    </div>
                </div>
            </div>
            <!-- About Section Button-->
            <div class="text-center mt-4">
                <a class="btn btn-xl btn-outline-light" href="<?= base_url(); ?>/assets/cv/CV_gigih.pdf" target="_blank">
                    <i class="fas fa-download me-2"></i>
                    Download CV!
                </a>
            </div>
        </div>
    </section>
    <!-- Contact Section-->
    <section class="page-section section wow fadeInUp" id="contact" data-wow-delay=".15s">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-desktop"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Contact Section Form-->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <form action="/home/savemessage" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..." required />
                            <label for="name">Full name</label>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" required />
                            <label for="email">Email address</label>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" name="phone" type="tel" placeholder="(123) 456-7890" required />
                            <label for="phone">Phone number</label>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" name="message" type="text" placeholder="Enter your message here..." style="height: 10rem" required></textarea>
                            <label for="message">Message</label>
                        </div>
                        <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- svg waves -->
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="parallax">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(29,45,68,0.7" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(29,45,68,0.5)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(29,45,68,0.3)" />
            <use xlink:href="#gentle-wave" x="48" y="7" fill="#1D2D44" />
        </g>
    </svg>
    <!-- end svg waves -->

    <!-- Footer-->
    <footer class="footer text-center wow fadeInUp" data-wow-delay=".15s">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Location</h4>
                    <p class="lead mb-0">
                        Ketawang-Purwoasri-Kediri
                        <br />
                        <a href="https://goo.gl/maps/ipzxsAHE9WDuWzrn8" target="_blank">Find me on maps <i class="fas fa-map-marker-alt"></i></a>
                    </p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Social Media</h4>
                    <!-- <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a> -->
                    <a class="btn btn-outline-light-facebook btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light-instagram btn-social mx-1" href="#!"><i class="fab fa-fw fa-instagram"></i></a>
                    <a class="btn btn-outline-light-linkedin btn-social mx-1" href="https://www.linkedin.com/in/gigih-trianung-anggoro-27b122138" target="_blank"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light-youtube btn-social mx-1" href="https://www.youtube.com/c/gigihtrianunganggoro" target="_blank"><i class="fab fa-fw fa-youtube"></i></a>
                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">GTA PROJECT</h4>
                    <p class="lead mb-0">
                        GTA Project create new ecosystem using modern technology.
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; GTA Project 2022</small></div>
    </div>

    <!-- Portfolio Modals-->
    <!-- Portfolio Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">siDika</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-desktop"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="<?= base_url(); ?>/assets/img/project/project1_besar.png" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">sidika merupakan website back end tentang data indiaktor pembangunan Daerah Kabupaten Kediri.</p>
                                <a href="https://gtaciprojectok.000webhostapp.com/" target="_blank">
                                    <button class="btn btn-primary">
                                        <i class="fas fa-share-square fa-fw"></i>
                                        See Project
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 2-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">link page</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-desktop"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="<?= base_url(); ?>/assets/img/project/project2_besar.png" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Landing page untuk front end pada website bappeda kab. kediri bertujuan untuk memberikan akses link untuk mendownload share materi-materi rapat.</p>
                                <a href="https://bappeda.kedirikab.go.id/linkbpd/" target="_blank">
                                    <button class="btn btn-primary">
                                        <i class="fas fa-share-square fa-fw"></i>
                                        See Project
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 3-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">edycell</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-desktop"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="<?= base_url(); ?>/assets/img/project/project3_besar.png" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Edycell merupakan web site front end toko modern yang memanfaatkan teknologi website pada pemasarannya.</p>
                                <a href="https://edycell.000webhostapp.com/" target="_blank">
                                    <button class="btn btn-primary">
                                        <i class="fas fa-share-square fa-fw"></i>
                                        See Project
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 4-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Bappeda Website</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-desktop"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="<?= base_url(); ?>/assets/img/project/project4_besar.png" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Bappeda Website merupakan front end website dari Kantor Badan Perencanaan Pembangunan Daerah Kabupaten Kediri.</p>
                                <a href="https://bappeda.kedirikab.go.id/" target="_blank">
                                    <button class="btn btn-primary">
                                        <i class="fas fa-share-square fa-fw"></i>
                                        See Project
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery -->
    <!-- <script src="../../assets/js/jquery-3.6.0.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- end jquery -->

    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="<?= base_url(); ?>/assets/js/wow.min.js"></script>

    <!-- Core theme JS-->
    <script src="<?= base_url(); ?>/assets/js/scripts.js"></script>

    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> -->

    <!-- sweetalert -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.6/dist/sweetalert2.min.js"></script> -->
    <script src="../../assets/js/sweetalert2.min.js"></script>
    <!-- end sweetalert -->

    <?php if (session()->getFlashdata('pesan') == 'berhasil') : ?>
        <script>
            $(document).ready(function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Thanks',
                    text: 'Thanks for your paritisipation',
                    // footer: '<a href="">Why do I have this issue?</a>'
                })
            });
        </script>
    <?php endif; ?>
</body>

</html>