<?php
include "conn.php";
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style_index.css" />
    <meta charset="utf-8" />
    <title>NIE | Room Allocation</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/room_alocation_style.css" />
</head>

<body>
    <!-- Header Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row gx-0">
            <div class="col-lg-3 bg-dark d-none d-lg-block">
                <a href="index.php"
                    class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 display-4 text-primary text-uppercase">
                        NIE HOSTEL
                    </h1>
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row gx-0 bg-secondary d-none d-lg-flex">
                    <div class="col-lg-7 px-5 text-start">
                        <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                            <i class="fa fa-envelope text-primary me-2"></i>
                            <h6 class="mb-0">southcampus@nie.ac.in</h6>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2">
                            <i class="fa fa-phone-alt text-primary me-2"></i>
                            <h6 class="mb-0">(+91) 821 2480475</h6>
                        </div>
                    </div>
                    <div class="col-lg-5 px-5 text-end">
                        <div class="d-inline-flex align-items-center py-3"></div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0 px-lg-5">
                    <a href="index.php" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary text-uppercase">
                            NIE HOSTEL
                        </h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="room_allocation.php" class="nav-item nav-link">Room Allocation</a>
                            <a href="update_attendance.php" class="nav-item nav-link">Attandance</a>
                            <a href="mess_absentee_number.php" class="nav-item nav-link">Mess Absentee Number</a>
                            <a href="squad_complaints.php" class="nav-item nav-link">Complaints</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="form-body">
            <div class="row">
                <div class="form-holder">
                    <div class="form-content">
                        <div class="form-items">
                            <h3>Register New Students</h3>
                            <form class="requires-validation" novalidate action="insert_students.php" method="POST">
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="full_name" placeholder="Full Name"
                                        required />
                                    <div class="valid-feedback">Username field is valid!</div>
                                    <div class="invalid-feedback">
                                        Username field cannot be blank!
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="usn" placeholder="USN" required />
                                    <div class="valid-feedback">USN field is valid!</div>
                                    <div class="invalid-feedback">
                                        USN field cannot be blank!
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="room_number" placeholder="Room Number"
                                        required />
                                    <div class="valid-feedback">
                                        Room number field is valid!
                                    </div>
                                    <div class="invalid-feedback">
                                        Room number field cannot be blank!
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                        required />
                                    <label class="form-check-label">I confirm that all data are correct</label>
                                    <div class="invalid-feedback">
                                        Please confirm that the entered data are all correct!
                                    </div>
                                </div>

                                <div class="form-button mt-3">
                                    <button name="submit_room" id="submit" type="submit" class="btn btn-primary">
                                        Register 
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


  


    <script>
        (function () {
            'use strict';
            const forms = document.querySelectorAll('.requires-validation');
            Array.from(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault();
                            event.stopPropagation();
                        }

                        form.classList.add('was-validated');
                    }, false);
                });
        })();
    </script>

    <!-- Blog Start -->

    

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

<?php
include "insert_students.php";
?>