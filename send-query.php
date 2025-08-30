<!DOCTYPE html>
<html lang="en">
   <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Query | Uttara Crescent Hospital</title>
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
                            <h2>Submit Your Query</h2>
                            <ul class="bread-list">
                            <li><a href="index.php">Home</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Query</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumbs -->

        <!-- Start service -->
        <section class="services section mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Submit Your Query</h2>
                            <img src="img/section-img.png" alt="specialities-details.php" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="row">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Email</label>
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Password</label>
                                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Address</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Address 2</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">City</label>
                                        <input type="text" class="form-control" id="inputCity">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState">State</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputZip">Zip</label>
                                        <input type="text" class="form-control" id="inputZip">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                        Check me out
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End service -->

        <?php include 'layouts/footer.php'; ?>
   </body>
</html>