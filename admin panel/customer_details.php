<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-free">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title>Be@Unique</title>

    <meta name="description" content=""/>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logo.png"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"/>

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css"/>
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome.css"/>

    <!-- Select 2 Css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css"/>

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css"/>
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css"/>
    <link rel="stylesheet" href="assets/css/demo.css"/>

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"/>

    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css"/>
    <link rel="stylesheet" href="assets/css/custom.css"/>

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
</head>


<!-- Admin Delete Modal Start -->
<div class="modal fade" id="Admin-Delete" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <i class="far fa-times-circle text-danger" style="font-size: 50px;"></i>
                    <h1 class="my-3">Are you sure?</h1>
                    <p>Do you relly want to delete these records?</p>
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Cancel
                </button>
                <button type="button" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>
<!-- Admin Delete Modal End -->

<body>
<!-- Layout wrapper -->
<?php

     session_start();
     $email=$_SESSION['email'];
     ?>
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
                <a href="index.php" class="app-brand-link">
                    <img src="assets/img/logo.png" alt="img" class="img-fluid">
                </a>

                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                    <i class="bx bx-chevron-left bx-sm align-middle"></i>
                </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
                <!-- Dashboard -->
                <li class="menu-item">
                    <a href="index.php" class="menu-link">
                        <i class="menu-icon tf-icons fas fa-th-large"></i>
                        <div data-i18n="Analytics">Dashboard</div>
                    </a>
                </li>

            <li class="menu-item">
                 <a href="order_details.php" class="menu-link">
                <i class="menu-icon tf-icons fas fa-laptop-house"></i>
                <div data-i18n="Analytics">Order Details</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="customer_details.php" class="menu-link">
                <i class="menu-icon tf-icons fas fa-laptop-house"></i>
                <div data-i18n="Analytics">Customer Details</div>
              </a>
            </li>
                <li class="menu-item">
              <a href="addproduct.php" class="menu-link">
                <i class="menu-icon tf-icons fas fa-laptop-house"></i>
                <div data-i18n="Analytics">Add products</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="updateproduct.php" class="menu-link">
                <i class="menu-icon tf-icons fas fa-laptop-house"></i>
                <div data-i18n="Analytics">Upadate products</div>
              </a>
            </li>

                <li class="menu-item">
                    <a href="logout.php" class="menu-link">
                        <i class="menu-icon tf-icons fas fa-sign-out-alt"></i>
                        <div data-i18n="Analytics">Logouts</div>
                    </a>
                </li>


            </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

            <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                 id="layout-navbar">
                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                        <i class="bx bx-menu bx-sm"></i>
                    </a>
                </div>

                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                    <!-- Search -->
                    <div class="navbar-nav align-items-center">
                        <h5>Customer Details</h5>
                    </div>
                    <!-- /Search -->

                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar avatar-online">
                          <img src="assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <div class="fw-semibold d-block">
                           <?php  
                            
                             $conn = mysqli_connect("localhost","root","",'be@unique'); 
                             $query = "SELECT * from admin_info where email='$email'";
                             $res = mysqli_query($conn,$query);
                             $row=mysqli_fetch_array($res);
                             echo $row["firstname"];
                          
                            ?>
                        </div>
                        <small class="text-primary">
                          <?php
                            $email=$_SESSION['email'];
                            $conn = mysqli_connect("localhost","root","",'be@unique');
                            $query = "SELECT * from admin_info where email='$email'";
                            $res = mysqli_query($conn,$query);
                            $row=mysqli_fetch_array($res);
                            echo $row["email"];
                          ?>
                        </small>
                      </div>
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?php  
                            
                            $conn = mysqli_connect("localhost","root","",'be@unique'); 
                            $query = "SELECT * from admin_info where email='$email'";
                            $res = mysqli_query($conn,$query);
                            $row=mysqli_fetch_array($res);
                            echo $row["firstname"];
                         
                           ?></span>
                            <small class="text-muted"><?php
                            $email=$_SESSION['email'];
                            $conn = mysqli_connect("localhost","root","",'be@unique');
                            $query = "SELECT * from admin_info where email='$email'";
                            $res = mysqli_query($conn,$query);
                            $row=mysqli_fetch_array($res);
                            echo $row["email"];
                          ?></small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="profile-detail.php">
                                        <i class="bx bx-user me-2"></i>
                                        <span class="align-middle">My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="auth-login-basic.php">
                                        <i class="bx bx-power-off me-2"></i>
                                        <span class="align-middle">Log Out</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/ User -->
                    </ul>
                </div>
            </nav>

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">

                    <!-- Pagination Start -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-style1 justify-content-end">
                            <li class="breadcrumb-item">
                                <a href="index.php">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">
                                Customer Details
                            </li>
                        </ol>
                    </nav>
                    <!-- Pagination End -->
                    <?php
// Assuming you have a database connection established

// Initialize the filter variable
$filterEmail = '';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filterEmail = $_POST['filter_email'];
    $sql = "SELECT * FROM `users` WHERE `email` LIKE '%$filterEmail%'";
} else {
    $sql = "SELECT * FROM `users`";
}

$result = mysqli_query($conn, $sql);

if (!$result) {
    echo "Error: " . mysqli_error($conn);
} else {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Filtered Table</title>
        <!-- Add your CSS and other head elements here -->
    </head>
    <body>

    <div class="card filter-card mb-4">
        <h5 class="card-header">Filter</h5>
        <div class="card-body">
            <form method="post">
                <div class="row gx-3 gy-2 align-items-center">
                    <div class="col-12 col-sm-6 col-md-2 col-lg-2 col-xl-2">
                        <div class="form-group mb-3 mb-md-0">
                            <input class="form-control" type="text" name="filter_email" placeholder="Enter Customer email" value="<?php echo $filterEmail; ?>">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                        <div class="form-group mb-3 mb-md-0">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Customer Name</th>
                                <th>Customer Email</th>
                                <th>Customer Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row["firstname"] . " " . $row["lastname"]; ?></td>
                                        <td><?php echo $row["email"] ?></td>
                                        <td><?php echo $row["mobilenum"] ?></td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                echo "<tr><td colspan='3'>No results found.</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>
    <?php
}
?>


</section>



                <!-- / Content -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->


<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="assets/vendor/libs/jquery/jquery.js"></script>
<script src="assets/vendor/libs/popper/popper.js"></script>
<script src="assets/vendor/js/bootstrap.js"></script>
<script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>

<!-- Page JS -->
<script src="assets/js/dashboards-analytics.js"></script>

<!-- Page JS -->
<script src="assets/js/pages-account-settings-account.js"></script>

<!-- Select 2 Js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


<script>

    $('.select2').select2({});

</script>
</body>
</html>
