<!DOCTYPE php>

<!-- beautify ignore:start -->
<php lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title>Be@Unique</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logo.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome.css"/>

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="assets/css/custom.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

   <script src="assets/js/config.js"></script>
  </head>

  <body>
    <?php

     session_start();
     $email=$_SESSION['email'];
     ?>
    <!-- Layout wrapper -->
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

          <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center dashboard-name">
                <h5>Dashboard</h5>
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
                            <li class="breadcrumb-item">
                                <a href="order_details.php">
                                    Order Details
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="addproduct.php">
                                    Add Product
                                </a>
                            </li>
                            <li class="breadcrumb-item active">
                                Update Product
                            </li>
                        </ol>
                    </nav>
                    <!-- Pagination End -->
                      <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <!--<h5 class="card-header">
                                  User Master List
                                </h5>-->
                                <div class="table-responsive text-nowrap">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Index</th>
                                            <th>Image</th>
                                            <th>Watch Name</th>
                                            <th>Catagory</th>
                                            <th>Description	</th>
                                            <th>Color</th>
                                            <th>Price</th>
                                            <th>Brand</th>
                                            <th>Date Add</th>
                                            <th>Dail Color</th>
                                            <th>Dali Glass Material</th>
                                            <th>Case Shape</th>
                                            <th>Case Material</th>
                                            <th>case daimeter</th>
                                            <th>Band color</th>
                                            <th>Band Material</th>
                                            <th>Upade/Delect</th>
                                        </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                        <?php
                                        $conn = mysqli_connect("localhost","root","",'be@unique');
                                        $sql = "SELECT * from product";
                                        $res = mysqli_query($conn,$sql);
                                        
                                        while($row=mysqli_fetch_array($res))
                                       { 
                                         echo "<tr><td>"; 
                                         echo  $row['index'];
                                             echo"</td><td>"; ?>
                                              <img src="<?php  echo "../admin panel/img/";echo $row['img']; ?>"  alt="" class="pcard__img" width="80%"> <?php
                                              echo"</td><td>";
                                              echo $row['watch_name'];
                                              echo"</td><td>";
                                              echo $row['catagory'];
                                              echo"</td><td>";
                                              echo $row['Description'];
                                              echo"</td><td>";
                                              echo $row['color'];
                                              echo "</td><td>";
                                              echo $row['price'];
                                              echo"</td>";
                                              echo "<td>";
                                              echo $row['brand'];
                                              echo "</div>";
                                              echo "</td>";
                                              echo "<td>";
                                              echo $row['date_add'];;
                                              echo "</td><td>";
                                              echo $row['dial_color'];
                                              echo "</td><td>";
                                              echo $row['dial_glass_material'];
                                              echo "</td><td>";
                                              echo $row['case_shape'];
                                              echo "</td><td>";
                                              echo $row['case_material'];
                                              echo "</td><td>";
                                              echo $row['case_diameter'];
                                              echo "</td><td>";
                                              echo $row['band_color'];
                                              echo "</td><td>";
                                              echo $row['band_material'];
                                              echo"</td>";
                                              echo "<td>";
                                              echo'<div class="d-flex action-btn-div">';
                                              $id=$row['index']; ?>
                                              <a href="productupdateform.php?id=<?php echo $id; ?>" class="btn btn-outline-warning mx-1"> <?php
                                              echo'<i class="far fa-edit"></i>';
                                              echo" </a>"; ?>
                                              <a href="delectproduct.php?id=<?php echo $id; ?>" class="btn btn-outline-danger mx-1"> <?php
                                              echo'<i class="far fa-trash-alt"></i>';
                                              echo "</a>";
                                              echo "</div>";             
                                              echo"</td></tr>";
                                       }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>




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

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {

        $(".menu-item").on("click",function(){
          $("li.menu-item").removeClass('active');
          $(this).toggleClass('active');
        })

        $("#task_manage").on("click", function () {
          $("#dash-task-card").addClass("show");
          $("#dash-lead-card").removeClass("show");
        })
        $("#lead_details").on("click", function () {
          $("#dash-task-card").removeClass("show");
          $("#dash-lead-card").addClass("show");
        })


        $(".dropdown-list").on("click",function(){
          $(".dropdown-item-list").toggleClass('show')
        })
      })
    </script>
  </body>
    </html>