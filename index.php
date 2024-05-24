<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hospital Management System</title>
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/linearicons.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="shortcut icon" href="favicon.ico" />

    <link rel="stylesheet" href="css/swiper-bundle.min.css" />

    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="assets/css/toastr.min.css" rel="stylesheet" type="text/css" />
</head>
<body>

    <!-- <header class="header-area">
        <div id="header" id="home">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
               
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="index.php">Home</a></li>
                        <li><a href="backend/doc/index.php">Doctor's Login</a></li>
                        <li><a href="backend/admin/index.php">Administrator Login</a></li>
                    </ul>
                </nav>	    		
                </div>
            </div>
        </div>
    </header> -->
    
    <div class="landing-page">

        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top navbar-custom sticky sticky-light"
                id="navbar">
                <div class="container">
                    <a class="navbar-brand logo" href="#!">
                        <img src="assets/images/logo-dark.png" alt="" height="22" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link active" class="menu-active" aria-current="page" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#services">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#departments">Departments</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#team">Team</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                        </ul>
                        <div class="nav-btn">
                            <a href="backend/doc/index.php" class="btn btn-primary"><i
                                    class="mdi mdi-login me-2"></i>Log in as a Doctor</a>
                        </div>

                        <div class="nav-btn">
                            <a href="backend/admin/index.php" class="btn btn-primary" ><i
                                    class="mdi mdi-login "></i>Log in as admin</a>
                        </div>

                    </div>
                </div>
            </nav>
        </header>

        <section class="hero-section bg-img" id="home">
            <div class="container">
                
                <div class="row align-items-center justify-content-between g-3 g-lg-5">
                    <div class="col-lg-5 align-self-start">
                        <div class="hero-content">
                            <div class="title-sm my-4">
                                <h4 class="text-success">Certificated Doctors</h4>
                            </div>
                            <div class="hero-header">
                                <h1 class="display-6 lh-base fw-medium">
                                    Search and find
                                    <span class="text-primary"> our clinic </span>for better
                                    solution
                                </h1>
                                <p>
                                    Expands Access To Care For Patients And Supports Community
                                    Health Staff And Junior Doctors. Consult With Online Doctors
                                    In Worldwide - Book Appointment With Doctors.
                                </p>
                            </div>
                            <div class="hero-btn mt-4">
                                <a href="backend/doc/index.php" class="btn btn-primary"><i
                                        class="mdi mdi-file-document-edit-outline me-2"></i>Make
                                    an Appointment</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 align-self-end">
                        <div class="img-part ms-auto">
                            <img src="assets/images/doctor-team.png" alt="doctor" class="img-fluid img-width" />
                            <div class="img-text text-center p-3 pb-1 rounded-3 z-n1">
                                <i class="mdi mdi-ambulance"></i>
                                <p class="my-2 fw-semibold">24 Hour Doctor</p>
                                <div class="mb-3">
                                    <span>We Provide 24/7 Medical Services</span>
                                </div>
                            </div>
                            <div class="img-text-1 text-start rounded-3 px-3 p-2">
                                <i class="mdi mdi-doctor"></i>
                                <div class="text">
                                    <p class="pt-2 pb-2 ms-4 fw-semibold mb-0">
                                        Best Doctor In Our Hospital
                                    </p>
                                    <div class="ms-4">
                                        <span>All Department</span>
                                    </div>
                                </div>
                            </div>
                            <div class="img-text-2 text-center p-2 px-3 rounded-3">
                                <i class="mdi mdi-cast-education"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <section class="section about-section bg-light" id="services">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-header text-center">
                            <h1>Health services for you</h1>
                            <p>We are always here to listening and understanding</p>
                        </div>
                    </div>
                </div>

                <div class="about-content mt-5">

                    <div class="row align-items-center justify-content-center g-4">
                        <div class="col-lg-2 col-md-6">
                            <div class="icon-text p-4 pb-3 text-center shadow">
                                <i class="mdi mdi-virus"></i>
                                <p class="mt-4 fw-semibold">Covid-19 Test</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="icon-text p-4 pb-3 bg-primary text-center shadow">
                                <i class="mdi mdi-tooth"></i>
                                <p class="mt-4 fw-semibold text-light">Dental Care</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="icon-text p-4 pb-3 text-center shadow">
                                <i class="mdi mdi-heart-pulse"></i>
                                <p class="mt-4 fw-semibold">Heart Caring</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="icon-text p-4 pb-3 bg-primary text-center shadow">
                                <i class="mdi mdi-bone"></i>
                                <p class="mt-4 fw-semibold text-light">Orthopadic</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="icon-text p-4 pb-3 text-center shadow">
                                <i class="mdi mdi-clipboard-search-outline"></i>
                                <p class="mt-4 fw-semibold">Research</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="icon-text p-4 pb-3 bg-primary text-center shadow">
                                <i class="mdi mdi-lungs"></i>
                                <p class="mt-4 fw-semibold text-light">Lungs</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="section services-section">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="about-header text-center">
                            <h1 class="lh-base">
                                Why Choose
                                <span class="text-primary">CareWave Plus </span>Home care ?
                            </h1>
                            <p>
                                The medical profession is the most respected profession in the
                                world. No matter where you work, you as a doctor
                            </p>
                        </div>
                    </div>
                </div>
                <div class="services-content mt-5">
                    <div class="row align-items-center justify-content-center g-4">
                        <div class="col-lg-3 col-md-6">
                            <div class="content-main bg-light p-4 rounded-3 shadow-sm">
                                <i class="mdi mdi-medical-bag"></i>
                                <h4 class="my-4 lh-base">Medical Advices &amp; Check Ups</h4>
                                <a href="#!" class="text-primary fw-medium">Learn More</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="content-main bg-light p-4 rounded-3 shadow-sm">
                                <i class="mdi mdi-needle"></i>
                                <h4 class="my-4 lh-base">Trusted Medical Treatment</h4>
                                <a href="#!" class="text-primary fw-medium">Learn More</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="content-main bg-light p-4 rounded-3 shadow-sm">
                                <i class="mdi mdi-store-24-hour"></i>
                                <h4 class="my-4 lh-base">Emergency Help Aveilable 24/7</h4>
                                <a href="#!" class="text-primary fw-medium">Learn More</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="content-main bg-light p-4 rounded-3 shadow-sm">
                                <i class="mdi mdi-doctor"></i>
                                <h4 class="my-4 lh-base">Research Professional</h4>
                                <a href="#!" class="text-primary fw-medium">Learn More</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="features-section bg-light" id="features">
            <div class="container">

                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-5">
                        <div class="features-img">
                            <img src="assets/images/doctor-2.png" alt="doctor" class="img-fluid" />
                            <div class="img-text-2 text-center bg-white p-3 pb-3 rounded-3">
                                <i class="mdi mdi-doctor"></i>
                                <p class="mt-2 mb-0 fw-semibold">Dr. Aenna backer</p>
                                <span>New York, United states</span>
                                <div class="hero-btn mt-3">
                                    <a href="#!" class="btn btn-primary"><i
                                            class="mdi mdi-file-document-edit-outline me-2 p-0 bg-primary fs-5 text-light"></i>Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 align-self-start">
                        <div class="features-header pt-3">
                            <div class="title-sm">
                                <h4 class="text-success">Our Features</h4>
                            </div>
                            <h1 class="lh-base mt-3">
                                We are always ensure best
                                <span class="text-primary">Medical treatment</span> for Your
                                Health
                            </h1>
                            <p>
                                Pain Management Treatment Options Pain and symptom management
                                is one of the primary goals of palliative and hospice care
                            </p>
                        </div>
                        <div class="features-list d-flex mt-2">
                            <i class="mdi mdi-check-circle"></i>
                            <p class="pt-2 ms-4">Top Specialist Doctor</p>
                        </div>
                        <div class="features-list d-flex mt-2">
                            <i class="mdi mdi-check-circle"></i>
                            <p class="pt-2 ms-4">State of the art Doctor services</p>
                        </div>
                        <div class="features-list d-flex mt-2">
                            <i class="mdi mdi-check-circle"></i>
                            <p class="pt-2 ms-4">Discount for all medical treatment</p>
                        </div>
                        <div class="features-list d-flex mt-2">
                            <i class="mdi mdi-check-circle"></i>
                            <p class="pt-2 ms-4">Enrollment is Quick and easy</p>
                        </div>
                        <div class="feature-btn mt-3 mb-5">
                            <a href="#!" class="btn btn-primary"><i
                                    class="mdi mdi-file-document-edit-outline me-2"></i>Make
                                an Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="section department-section pb-4" id="departments">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="department-header text-center">
                            <div class="title-sm">
                                <h4 class="text-success">Our Department</h4>
                            </div>
                            <h1 class="lh-base mt-3">
                                We have all <span class="text-primary">Department</span>
                            </h1>
                            <p>
                                Dermatologists Have problems with your skin, hair, nails? ·
                                Endocrinologists These are experts on hormones and metabolism.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 g-3">
                    <div class="col-lg-2 col-md-6">
                        <a href="#!">
                            <div class="department-content text-center p-3 bg-light rounded-3 shadow-sm">
                                <i class="mdi mdi-human-wheelchair"></i>
                                <h5 class="mt-1">Crutches</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <a href="#!">
                            <div class="department-content text-center p-3 bg-light rounded-3 shadow-sm">
                                <i class="mdi mdi-radiology-box"></i>
                                <h5 class="mt-1">X-ray</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <a href="#!">
                            <div class="department-content text-center p-3 bg-light rounded-3 shadow-sm">
                                <i class="mdi mdi-heart-pulse"></i>
                                <h5 class="mt-1">Pulmonary</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <a href="#!">
                            <div class="department-content text-center p-3 bg-light rounded-3 shadow-sm">
                                <i class="mdi mdi-lungs"></i>
                                <h5 class="mt-1">Cardiology</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <a href="#!">
                            <div class="department-content text-center p-3 bg-light rounded-3 shadow-sm">
                                <i class="mdi mdi-tooth"></i>
                                <h5 class="mt-1">Dental Care</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <a href="#!">
                            <div class="department-content text-center p-3 bg-light rounded-3 shadow-sm">
                                <i class="mdi mdi-brain"></i>
                                <h5 class="mt-1">Neurology</h5>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-6">
                        <a href="#!">
                            <div class="department-content text-center p-3 bg-light rounded-3 shadow-sm">
                                <i class="mdi mdi-needle"></i>
                                <h5 class="mt-1">Medical</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <a href="#!">
                            <div class="department-content text-center p-3 bg-light rounded-3 shadow-sm">
                                <i class="mdi mdi-bone"></i>
                                <h5 class="mt-1">Orthopadic</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <a href="#!">
                            <div class="department-content text-center p-3 bg-light rounded-3 shadow-sm">
                                <i class="mdi mdi-water"></i>
                                <h5 class="mt-1">Blood Bank</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <a href="#!">
                            <div class="department-content text-center p-3 bg-light rounded-3 shadow-sm">
                                <i class="mdi mdi-wheelchair-accessibility"></i>
                                <h5 class="mt-1">Surgical</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <a href="#!">
                            <div class="department-content text-center p-3 bg-light rounded-3 shadow-sm">
                                <i class="mdi mdi-mother-nurse"></i>
                                <h5 class="mt-1">Nursing</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <a href="#!">
                            <div class="department-content text-center p-3 bg-light rounded-3 shadow-sm">
                                <i class="mdi mdi-head-snowflake"></i>
                                <h5 class="mt-1">Psychiarty</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section team-section" id="team">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="department-header text-center">
                            <div class="title-sm">
                                <h4 class="text-success">Our Doctor</h4>
                            </div>
                            <h1 class="lh-base mt-3">
                                We Have Best <span class="text-primary">Doctor</span>
                            </h1>
                            <p>
                                TeamDoctor provides organisations with an essential
                                video-based online training course for all employees which
                                gives a baseline of knowledge.
                            </p>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>


        <section class="section cta-section bg-light pt-5" id="contact">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-lg-7">
                        <div class="cta-header">
                            <h1 class="lh-base mt-3">
                                Health services or tips for
                                <span class="text-primary"> Healthy Living</span>, you can
                                find here
                            </h1>
                            <div class="cta-btn mt-5">
                                <a href="#!" class="btn btn-primary"><i class="mdi mdi-login-variant me-2"></i>Stay
                                    Connected</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        

        <div class="footer-copyright p-4">
            <div class="container">
                <div class="text-center">
                    <p class="text-black m-0">© 2024 . Crafted by Priyanshu Urkade</p>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/superfish.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
