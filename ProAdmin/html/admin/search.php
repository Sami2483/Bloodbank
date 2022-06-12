<!DOCTYPE html>
<?php ob_start(); ?>
<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Tables - Basic Tables | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

<?php include "includes/menu.php"; ?>
        <!-- / Menu -->

        <!-- Layout container -->


        <div class="layout-page">
          <!-- Navbar -->

        <?php include "includes/navigation.php"; ?>
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Table Basic</h5>
                <div class="table-responsive text-nowrap">
                  <?php
                  include "../db.php";
                  $search =$_POST['search'];
                  $query="SELECT * FROM users where name like '%$search%'";
                  $result=mysqli_query($connection,$query);

                  if (!$result) {
                    die("error".mysqli_error($connection));
                  }
                  $count=mysqli_num_rows($result);
                  if ($count == 0) {
                    echo "<div class='alert alert-success' role='alert'>
                                        <h1>sorry no result</h1><br> </div><br";
                  }
                    else{



                   ?>

                   <table class="table">
                     <thead>
                       <tr>
                       <th style="color:red; font-size:16px;">Full name</th>
                       <th style="color:red; font-size:16px;">gender</th>
                       <th style="color:red; font-size:16px;">dob</th>
                       <th style="color:red; font-size:16px;">bg</th>
                       <th style="color:red; font-size:16px;">bw</th>
                       <th style="color:red; font-size:16px;">email</th>
                       <th style="color:red; font-size:16px;">country</th>
                       <th style="color:red; font-size:16px;">city</th>
                       <th style="color:red; font-size:16px;">kebele</th>
                       <th style="color:red; font-size:16px;">adress</th>
                       <th style="color:red; font-size:16px;">phone</th>

                       </tr>
                     </thead>
                     <?php

                     while ($row=mysqli_fetch_assoc($result)) {
                       // code...


                       $id=$row['id'];
                       $name=$row['name'];
                       $father=$row['father'];
                       $gender=$row['gender'];
                       $dob=$row['dob'];
                       $bg=$row['bg'];
                       $bw=$row['bw'];
                       $email=$row['email'];
                       $country=$row['country'];
                       $city=$row['city'];
                       $kebele=$row['kebele'];
                       $adress=$row['adress'];
                       $phone=$row['phone'];
                       // $password=$row['password'];
                       $photo=$row['photo'];
                      ?>
                     <tbody class="table-border-bottom-0">
                       <tr>
                         <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo $name." ".$father; ?></strong></td>
                         <td><?php echo $gender; ?></td>
                         <td><?php echo $dob; ?></td>
                         <td><?php echo $bg; ?></td>
                         <td><?php echo $bw; ?></td>
                         <td><?php echo $email; ?></td>
                         <td><?php echo $country; ?></td>
                         <td><?php echo $city; ?></td>
                         <td><?php echo $kebele; ?></td>
                         <td><?php echo $adress; ?></td>
                         <td><?php echo $phone; ?></td>
                         <!-- <td>
                   <img src="../uploads/<?php echo $photo; ?>" alt="" width="50" height="60">
                         </td> -->

                         <td>
                           <div class="dropdown">
                             <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                               <i class="bx bx-dots-vertical-rounded"></i>
                             </button>
                             <div class="dropdown-menu">
                               <a class="dropdown-item" href="javascript:void(0);"
                                 ><i class="bx bx-edit-alt me-1"></i> Edit</a
                               >
                               <a class="dropdown-item" href='users.php?delete=<?php echo $id; ?>'
                                 ><i class="bx bx-trash me-1"></i> Delete</a>

                             </div>
                           </div>
                         </td>
                       </tr>
                     <?php }

}
                     ?>

                     </tbody>
                   </table>




                </div>
              </div>

              <!-- Bootstrap Table with Header - Footer -->
  </div>

                </div>
              </div>
              </div>
              <!--/ Responsive Table -->
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
                </div>
                <div>
                  <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                  <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                  <a
                    href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                    target="_blank"
                    class="footer-link me-4"
                    >Documentation</a
                  >

                  <a
                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                    target="_blank"
                    class="footer-link me-4"
                    >Support</a
                  >
                </div>
              </div>
            </footer>
            <!-- / Footer -->

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

    <div class="buy-now">
      <a
        href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Upgrade to Pro</a
      >
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
