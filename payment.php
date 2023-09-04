<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>NIE | Payment Verification </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Header Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row gx-0">
            <div class="col-lg-3 bg-dark d-none d-lg-block">
                <a href="index.php"
                    class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 display-4 text-primary text-uppercase">NIE HOSTEL</h1>
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row gx-0 bg-secondary d-none d-lg-flex">
                    <div class="col-lg-7 px-5 text-start">
                        <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                            <i class="fa fa-envelope text-primary me-2"></i>
                            <h6 class="mb-0">southcampus@nie.ac.in
                            </h6>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2">
                            <i class="fa fa-phone-alt text-primary me-2"></i>
                            <h6 class="mb-0"> (+91) 821 2480475</h6>
                        </div>
                    </div>
                    <div class="col-lg-5 px-5 text-end">
                        <div class="d-inline-flex align-items-center py-3">
                           
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0 px-lg-5">
                    <a href="index.php" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary text-uppercase">NIE HOSTEL</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            
                            <a href="attendance.php" class="nav-item nav-link">Attendance</a>
                            <a href="mess_absense.php" class="nav-item nav-link">Mess Absense</a>
                            <a href="payment.php" class="nav-item nav-link active">Payment Verification</a>
                            <a href="feedback.php" class="nav-item nav-link">Feedback</a>
                
                           
                        
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="container">


        <div class="row">

            <div class="col-md-8 order-md-1">
                <h4 class="mb-3 mt-3">Payment Verification</h4>
                <br>
                <form class="needs-validation" action="insert_payment.php" method="Post" novalidate="">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="firstName">Name</label>
                            <input type="text" class="form-control" name="payment_name" id="payment_name" placeholder=""
                                value="" required>

                        </div>

                    </div>

                    <div class="mb-3">
                        <label for="username">USN</label>
                        <div class="input-group">

                            <input type="text" class="form-control" name="payment_usn" id="payment_usn"
                                placeholder="" required>

                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="semester">Current Semester</label>
                        <div class="input-group">

                            <input type="number" class="form-control" name="payment_semester" id="payment_semester"
                                placeholder="" required>

                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="Ammount">Ammount paid</label>
                        <input type="number" class="form-control" name="payment_amount" id="payment_amount"
                            placeholder="" required>

                    </div>
                    <div class="mb-3">
                        <label for="UTR">UTR Number</label>
                        <input type="text" class="form-control" name="payment_utr" id="payment_utr" placeholder="" required>

                    </div>








                    <div class="row">

                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit_payment">Submit</button>
                </form>
            </div>
        </div>


    </div>


    

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary px-5 mt-5">
        <div class="row gx-5">
            <div class="col-lg-8 col-md-6">
                <div class="row gx-5">
                    <div class="col-lg-4 col-md-12 pt-5 mb-5">
                        <h4 class="text-uppercase text-light mb-4">Get In Touch</h4>
                        <div class="d-flex mb-2">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <p class="mb-0">South Campus Manandavadi Road Mysuru – 570008 Karnataka
                            </p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <p class="mb-0">southcampus@nie.ac.in
                            </p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <p class="mb-0"> (+91) 821 2480475</p>
                        </div>
                        
                    </div>


                </div>
            </div>

        </div>
    </div>

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>