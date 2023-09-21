<!DOCTYPE html>

<!-- beautify ignore:start -->
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-free">
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
                      <a class="dropdown-item" href="#">
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
                            <li class="breadcrumb-item active">
                                Add Product
                            </li>
                        </ol>
                    </nav>
                    <!-- Pagination End -->
                    <form action="addproductbackend.php" method="post"  enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-body p-4 p-md-4 p-lg-5">
                            <div class="row">
                                <div class="col-md-4 col-xl-3">
                                    <div class="franchise-img-div">
                                    <div class="d-flex align-items-start align-items-sm-center gap-4" style="margin-top:85px;">
                                        <div class="button-wrapper fran-img-div image-attach-div position-relative overflow-hidden">
                                            <img src="assets/img/img-thumb.png" alt="user-avatar" class="d-block rounded-circle img-fluid" id="uploadedAvatar"/>
                                            <label for="upload" class="" tabindex="0">
                                                <span class="d-none d-sm-block"></span>
                                                <i class="bx bx-upload d-block d-sm-none"></i>
                                                <input
                                                        type="file"
                                                        id="upload"
                                                        name="upload"
                                                        class="account-file-input"
                                                        hidden
                                                        accept="image/png, image/jpeg ,image/jpg"
                                                />
                                            </label>
                                        </div>

                                    </div>

                                    </div>
                                </div>
                                <div class="col-md-8 col-xl-9">
                                    <div class="franchise-form-div">
                                        <div class="form-box mb-3">
                                            <h6 class="mb-3">Product Details</h6>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Watch Name<small class="text-danger">*</small></label>
                                                        <input type="text" id="wname" name="wname" class="form-control"  placeholder="Watch Name" require>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Catagory<small class="text-danger">*</small></label>
                                                        <select id="catagory" name="catagory" class="select2 form-select" require>
                                                            <option disabled> Select Catagory</option>
                                                            <option selected>Smart Watch</option>
                                                            <option >luxury Watch</option>
                                                            <option>Sport Watch</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Color<small class="text-danger">*</small></label>
                                                        <input type="text" id="color" name="color" class="form-control" placeholder="Color" require>
                                                        <!-- <input type="color" class="form-control"> -->
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="mb-3">
                                                        <label class="form-label">Price<small class="text-danger">*</small></label>
                                                        <input type="text"id="price" name="price" class="form-control" placeholder="Price" require>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="mb-3">
                                                        <label class="form-label">Brand<small class="text-danger">*</small></label>
                                                        <input type="text" id="brand" name="brand" class="form-control" placeholder="Brand" require>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="mb-3">
                                                        <label class="form-label">Date of product Add<small class="text-danger">*</small></label>
                                                        <input type="Date" id="date" name="date" class="form-control" placeholder="DD/MM/YYYY" require>
                                                    </div>
                                                </div>
                                                

                                                <!-- about this product  -->
                                                <div class="col-md-6">
                                                <div class="mb-3">
                                                        <label class="form-label">Dial Color<small class="text-danger">*</small></label>
                                                        <input type="text" id="dialcolor" name="dialcolor" class="form-control" placeholder="dialcolor" require>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Dial Glass Material<small class="text-danger">*</small></label>
                                                        <select id="dialglassmaterial" name="dialglassmaterial" class="select2 form-select" require>
                                                            <option selected>Acrylic Crystal</option>
                                                            <option > Mineral Crystal</option>
                                                            <option >  Sapphire Crystal</option>
                                                            <option >  Watch Display</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Case Shape<small class="text-danger">*</small></label>
                                                        <select id="caseshape" name="caseshape" class="select2 form-select" require>
                                                            <option selected>Round</option>
                                                            <option >Squer</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Case Material<small class="text-danger">*</small></label>
                                                        <select id="casematerial" name="casematerial" class="select2 form-select" require>
                                                            <option selected>Stainless steel</option>
                                                            <option >Titanium</option>
                                                            <option >Ceramic</option>
                                                            <option >DLC</option>
                                                            <option >Ceramic</option>
                                                            <option >Plastic</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="mb-3">
                                                        <label class="form-label">Case Diameter<small class="text-danger">*</small></label>
                                                        <input type="number" id="casediameter" name="casediameter" class="form-control" placeholder="casesiameter" require>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                <div class="mb-3">
                                                        <label class="form-label">Band Color<small class="text-danger">*</small></label>
                                                        <input type="text" id="bandcolor" name="bandcolor" class="form-control" placeholder="bandcolor" require>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Band Material <small class="text-danger">*</small></label>
                                                        <select id="bandmaterial" name="bandmaterial" class="select2 form-select" require>
                                                            <option selected>Faux leather</option>
                                                            <option >Genuine leathe</option>
                                                            <option > Full-grain leather</option>
                                                            <option >Nylon Banding Strap</option>
                                                            <option >Silicone Band</option>
                                                            <option >Ceramic watch Band</option>
                                                            <option >Mesh Watch Band</option>
                                                            <option >Titanium watch Band</option>
                                                        </select>
                                                    </div>
                                                </div>
                                              
                                                <div class="col-md-6">
                                                <div class="mb-3">
                                                        <label class="form-label">Description<small class="text-danger">*</small></label>
                                                        <textarea  class="form-control" name="description" id="description" cols="" rows=""></textarea>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="submit-btn-div justify-content-center d-flex">
                                            <button href="" class="btn btn-primary btn-lg w-75">ADD</button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- / Content -->

                <div class="content-backdrop fade"></div>
            </div>
            </form>       

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