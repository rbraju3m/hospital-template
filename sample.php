<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sample Collection Service | Uttara Crescent Hospital</title>
        <!-- Favicon -->
        <link rel="icon" href="img/logo.png" />
        <!-- Google Fonts -->
        <link
            href="../fonts.googleapis.com/css2c98.css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap"
            rel="stylesheet" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="css/nice-select.css" />
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <!-- icofont CSS -->
        <link rel="stylesheet" href="css/icofont.css" />
        <!-- Slicknav -->
        <link rel="stylesheet" href="css/slicknav.min.css" />
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="css/owl-carousel.css" />
        <!-- Datepicker CSS -->
        <link rel="stylesheet" href="css/datepicker.css" />
        <!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css" />
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css" />
        <!-- Mediplus CSS -->
        <link rel="stylesheet" href="css/normalize.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/custom.css" />
        <link rel="stylesheet" href="css/responsive.css" />
        <!-- Color CSS -->
        <link rel="stylesheet" href="css/color/color3.css" />
        <link rel="stylesheet" id="colors" />
    </head>
    <body>
        <?php include 'layouts/header.php'; ?>
        <!-- Breadcrumbs -->
        <div class="breadcrumbs overlay">
            <div class="container">
                <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Sample Collection Service</h2>
                        <ul class="bread-list">
                            <li><a href="index.php">Home</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Sample Collection Service</li>
                        </ul>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumbs -->

        <!-- Start Contact Us -->
        <section class="contact-us section mt-4 mb-4">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-6" style="padding: 45px 55px;">
                            <img class="service-highlight-img" src="img/sample.avif" alt="Sample Collection Service">
                            <div class="service-highlight-content">
                                <p>
                                    Our sample collection service is equipped with the latest medical technology and staffed by trained professionals
                                    to provide the best care possible during emergencies.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-us-form">
                                <h2>Submit Your Application</h2>
                                <p>
                                    If you have any questions please feel free to contact with us.
                                </p>
                                <!-- Form -->
                                <form class="form" method="post" action="https://mediplus-html.vercel.app/mail/mail.php">
                                    <div class="row">
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <input
                                                type="text"
                                                name="name"
                                                placeholder="Name"
                                                required=""
                                                />
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <input
                                                type="email"
                                                name="email"
                                                placeholder="Email"
                                                required=""
                                                />
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <input
                                                type="text"
                                                name="phone"
                                                placeholder="Phone"
                                                required=""
                                                />
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <input
                                                type="text"
                                                name="subject"
                                                placeholder="Subject"
                                                required=""
                                                />
                                        </div>
                                        </div>
                                        <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea
                                                name="message"
                                                placeholder="Your Message"
                                                required=""
                                                ></textarea>
                                        </div>
                                        </div>
                                        <div class="col-12">
                                        <div class="form-group login-btn">
                                            <button class="btn" type="submit">Send</button>
                                        </div>
                                        </div>
                                    </div>
                                </form>
                                <!--/ End Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End Contact Us -->
        <?php include 'layouts/footer.php'; ?>
    </body>
</html>