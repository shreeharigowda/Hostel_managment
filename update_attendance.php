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
    <title>NIE | Update Attendance</title>
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
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
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


    <div class="res">



        <div class="container">
            <div class="form-body">
                <div class="row">
                    <div class="form-holder">
                        <div class="form-content">
                            <div class="form-items h-50" style="overflow-y:scroll">
                                <h3>Upload Attendance</h3>
                                <form action="insert_attendance.php" method="POST">
                                    <table class="table table-bordered ">
                                        <tr>
                                            <th><b class="text-primary ">Name</b></th>
                                            <th><b class="text-primary">Attendance</b></th>
                                            <th><b class="text-primary"></b></th>

                                        </tr>
                                        <tr>
                                            <div class="col-md-12">
                                                <td> <label>Shaan Somaiah :</label></td>

                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="shaan_attend"
                                                            id="shaan_attend" value="Present" />
                                                        <label class="form-check-label" for="Present">Present</label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="shaan_attend"
                                                            id="shaan_attend" value="Absent" />
                                                        <label class="form-check-label" for="Absent">Absent</label>
                                                    </div>
                                                </td>
                                            </div>

                                        </tr>
                                        <tr>
                                            <div class="col-md-12">
                                                <td> <label>Shree Hari :</label> </td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="hari_attend"
                                                            id="hari_attend" value="Present" />
                                                        <label class="form-check-label" for="Present">Present</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="hari_attend"
                                                            id="hari_attend" value="Absent" />
                                                        <label class="form-check-label" for="Absent">Absent</label>
                                                    </div>
                                                </td>
                                            </div>
                                        </tr>
                                        <tr>
                                            <div class="col-md-12">
                                                <td> <label>Rahul KN :</label> </td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="rahul_attend"
                                                            id="rahul_attend" value="Present" />
                                                        <label class="form-check-label" for="Present">Present</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="rahul_attend"
                                                            id="rahul_attend" value="Absent" />
                                                        <label class="form-check-label" for="Absent">Absent</label>
                                                    </div>
                                                </td>
                                            </div>
                                        </tr>
                                        <tr>
                                            <div class="col-md-12">
                                                <td><label>Praveen :</label></td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="praveen_attend" id="praveen_attend" value="Present" />
                                                        <label class="form-check-label" for="Present">Present</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="praveen_attend" id="praveen_attend" value="Absent" />
                                                        <label class="form-check-label" for="Absent">Absent</label>
                                                    </div>
                                                </td>
                                            </div>
                                        </tr>
                                        <tr>
                                            <div class="col-md-12">
                                                <td> <label>Riteesh :</label></td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="riteesh_attend" id="riteesh_attend" value="Present" />
                                                        <label class="form-check-label" for="Present">Present</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="riteesh_attend" id="riteesh_attend" value="Absent" />
                                                        <label class="form-check-label" for="Absent">Absent</label>
                                                    </div>
                                                </td>
                                            </div>
                                        </tr>
                                        <tr>
                                            <div class="col-md-12">
                                                <td><label>Pruthwik :</label></td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="pruthwik_attend" id="pruthwik_attend"
                                                            value="Present" />
                                                        <label class="form-check-label" for="Present">Present</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="pruthwik_attend" id="pruthwik_attend"
                                                            value="Absent" />
                                                        <label class="form-check-label" for="Absent">Absent</label>
                                                    </div>
                                                </td>
                                            </div>
                                        </tr>
                                        <tr>
                                            <div class="col-md-12">
                                                <td><label>Aditya Lal :</label></td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="aditya_attend" id="aditya_attend" value="Present" />
                                                        <label class="form-check-label" for="Present">Present</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="aditya_attend" id="aditya_attend" value="Absent" />
                                                        <label class="form-check-label" for="Absent">Absent</label>
                                                    </div>
                                                </td>
                                            </div>
                                        </tr>
                                        <tr>
                                            <div class="col-md-12">
                                                <td><label>Gagandeep :</label></td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gagan_attend"
                                                            id="gagan_attend" value="Present" />
                                                        <label class="form-check-label" for="Present">Present</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gagan_attend"
                                                            id="gagan_attend" value="Absent" />
                                                        <label class="form-check-label" for="Absent">Absent</label>
                                                    </div>
                                                </td>
                                            </div>
                                        </tr>
                                        <tr>
                                            <div class="col-md-12">
                                                <td><label>Pratyush :</label></td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="pratyush_attend" id="pratyush_attend"
                                                            value="Present" />
                                                        <label class="form-check-label" for="Present">Present</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="pratyush_attend" id="pratyush_attend"
                                                            value="Absent" />
                                                        <label class="form-check-label" for="Absent">Absent</label>
                                                    </div>
                                                </td>
                                            </div>
                                        </tr>
                                        <tr>
                                            <div class="col-md-12">
                                                <td> <label>Vishal :</label></td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="vishal_attend" id="vishal_attend" value="Present" />
                                                        <label class="form-check-label" for="Present">Present</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="vishal_attend" id="vishal_attend" value="Absent" />
                                                        <label class="form-check-label" for="Absent">Absent</label>
                                                    </div>
                                                </td>
                                            </div>
                                        </tr>
                                    </table>

                                    <div class="form-button mt-3">
                                        <button name="submit_attendance" id="submit" type="submit"
                                            class="btn btn-primary">
                                            Upload
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
include "insert_attendance.php";
?>