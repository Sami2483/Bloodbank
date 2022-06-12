<?php
include "db.php";
session_start();
 ?>

<!DOCTYPE html>

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
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Account settings - Account | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg
                  width="25"
                  viewBox="0 0 25 42"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <defs>
                    <path
                      d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                      id="path-1"
                    ></path>
                    <path
                      d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                      id="path-3"
                    ></path>
                    <path
                      d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                      id="path-4"
                    ></path>
                    <path
                      d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                      id="path-5"
                    ></path>
                  </defs>
                  <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                      <g id="Icon" transform="translate(27.000000, 15.000000)">
                        <g id="Mask" transform="translate(0.000000, 8.000000)">
                          <mask id="mask-2" fill="white">
                            <use xlink:href="#path-1"></use>
                          </mask>
                          <use fill="#696cff" xlink:href="#path-1"></use>
                          <g id="Path-3" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-3"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                          </g>
                          <g id="Path-4" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-4"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                          </g>
                        </g>
                        <g
                          id="Triangle"
                          transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) "
                        >
                          <use fill="#696cff" xlink:href="#path-5"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">Sneat</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>



        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->






          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4> -->

              <div class="row">
                <div class="col-md-12">
                  <!-- <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                      <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Account</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages-account-settings-notifications.html"
                        ><i class="bx bx-bell me-1"></i> Notifications</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages-account-settings-connections.html"
                        ><i class="bx bx-link-alt me-1"></i> Connections</a
                      >
                    </li>
                  </ul> -->
                  <div class="card mb-4">
                    <h3 class="card-header" style="color:red;">JOIN AS A DONOR</h3>
                    <!-- Account -->


                    <hr class="my-0" />
                    <div class="card-body">
<?php
if (isset($_POST['submit'])) {
$firstName=$_POST['firstName'];
$fatherName=$_POST['lastName'];
$gender=$_POST['gender'];
$date=$_POST['date'];
$email=$_POST['email'];
$bg=$_POST['bg'];
$bw=$_POST['bw'];
$country=$_POST['country'];
$city=$_POST['city'];
$kebele=$_POST['kebele'];
$house=$_POST['house'];
$phone=$_POST['phone'];
$password=$_POST['password'];
// $photo=$_POST['photo'];
// $photo=$_FILES['image']['name'];

// $allow=array('pdf');
// $temp = explode(".",$_FILES['photo']['name']);
// $extension=end($temp);
$upload_file= $_FILES['photo']['name'];
$file_tmp=$_FILES['photo']['tmp_name'];

move_uploaded_file($file_tmp,"uploads/$upload_file");

$query="INSERT INTO users(name,father,gender,dob,email,bg,bw,country,city,kebele,adress,phone,password,photo) ";
$query .= "values('$firstName','$fatherName','$gender','$date','$email','$bg','$bw','$country','$city','$kebele','$house','$phone','$password','$upload_file') ";
$result=mysqli_query($connection,$query);
if (!$result) {
  die("unable to insert".mysqli_error($connection));
}
// $_SESSION['phone']=$phone;
// header("location:user_profile.php");
}


 ?>


 <form id="formAccountSettings" method="post" enctype="multipart/form-data">

                        <div class="card-body">


                          <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img
                              src="../assets/img/avatars/pp.jpg"
                              alt="user-avatar"
                              class="d-block rounded"
                              height="100"
                              width="100"
                              id="uploadedAvatar"
                            />
                            <div class="button-wrapper">
                              <label for="upload" class="btn btn-danger me-2 mb-4" tabindex="0">
                                <span class="d-none d-sm-block">Upload new photo</span>
                                <i class="bx bx-upload d-block d-sm-none"></i>
                                <input
                                  type="file"
                                  id="upload"
                                  class="account-file-input"
                                  name="photo"
                                  hidden
                                  accept="image/png, image/jpeg"
                                />
                              </label>
                              <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                <i class="bx bx-reset d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Reset</span>
                              </button>

                              <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                            </div>
                          </div>
                        </div>

                        <div class="row">

                          <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">First Name</label>
                            <input
                              class="form-control"
                              type="text"
                              id="firstName"
                              name="firstName"
                              value=""
                              autofocus
                              required
                            />
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Father name</label>
                            <input class="form-control" type="text" required name="lastName" id="lastName" value="" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="language" class="form-label">Gender</label>
                            <select id="language" required name="gender" class="select2 form-select">
                              <option value="">Select gender</option>
                              <option value="female">Female</option>
                              <option value="male">Male</option>
                              <option value="other">other</option>

                            </select>
                          </div>



                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input
                              class="form-control"
                              type="text"
                              id="email"
                              name="email"
                              value=""
                              required
                              placeholder=""

                            />
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="html5-date-input" class="col-md-2 col-form-label">Date</label>
                            <div class="col-md-10">
                              <input class="form-control" type="date" name="date" value="2021-06-18" id="html5-date-input" />
                            </div>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="language" class="form-label">Blood Group</label>
                            <select id="language"  name="bg" class="select2 form-select">
                              <option value="">Select Blood</option>
                              <option value="A+">A+</option>
                              <option value="B+">B+</option>
                              <option value="O+">O+</option>
                              <option value="AB+">AB+</option>
                            
                              <option value="A-">A-</option>
                              <option value="B-">B-</option>
                              <option value="O-">O-</option>
                              <option value="AB-">AB-</option>


                            </select>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="html5-number-input" class="col-md-2 col-form-label">Body weight</label>
                            <div class="col-md-10">
                              <input class="form-control" name="bw" type="number" value="" id="html5-number-input" />
                            </div>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="language" class="form-label">Country</label>
                            <select id="language" required name="country" class="select2 form-select">
     <option value="">Select country</option>
     <option value="Afganistan">Afghanistan</option>
     <option value="Albania">Albania</option>
     <option value="Algeria">Algeria</option>
     <option value="American Samoa">American Samoa</option>
     <option value="Andorra">Andorra</option>
     <option value="Angola">Angola</option>
     <option value="Anguilla">Anguilla</option>
     <option value="Antigua & Barbuda">Antigua & Barbuda</option>
     <option value="Argentina">Argentina</option>
     <option value="Armenia">Armenia</option>
     <option value="Aruba">Aruba</option>
     <option value="Australia">Australia</option>
     <option value="Austria">Austria</option>
     <option value="Azerbaijan">Azerbaijan</option>
     <option value="Bahamas">Bahamas</option>
     <option value="Bahrain">Bahrain</option>
     <option value="Bangladesh">Bangladesh</option>
     <option value="Barbados">Barbados</option>
     <option value="Belarus">Belarus</option>
     <option value="Belgium">Belgium</option>
     <option value="Belize">Belize</option>
     <option value="Benin">Benin</option>
     <option value="Bermuda">Bermuda</option>
     <option value="Bhutan">Bhutan</option>
     <option value="Bolivia">Bolivia</option>
     <option value="Bonaire">Bonaire</option>
     <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
     <option value="Botswana">Botswana</option>
     <option value="Brazil">Brazil</option>
     <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
     <option value="Brunei">Brunei</option>
     <option value="Bulgaria">Bulgaria</option>
     <option value="Burkina Faso">Burkina Faso</option>
     <option value="Burundi">Burundi</option>
     <option value="Cambodia">Cambodia</option>
     <option value="Cameroon">Cameroon</option>
     <option value="Canada">Canada</option>
     <option value="Canary Islands">Canary Islands</option>
     <option value="Cape Verde">Cape Verde</option>
     <option value="Cayman Islands">Cayman Islands</option>
     <option value="Central African Republic">Central African Republic</option>
     <option value="Chad">Chad</option>
     <option value="Channel Islands">Channel Islands</option>
     <option value="Chile">Chile</option>
     <option value="China">China</option>
     <option value="Christmas Island">Christmas Island</option>
     <option value="Cocos Island">Cocos Island</option>
     <option value="Colombia">Colombia</option>
     <option value="Comoros">Comoros</option>
     <option value="Congo">Congo</option>
     <option value="Cook Islands">Cook Islands</option>
     <option value="Costa Rica">Costa Rica</option>
     <option value="Cote DIvoire">Cote DIvoire</option>
     <option value="Croatia">Croatia</option>
     <option value="Cuba">Cuba</option>
     <option value="Curaco">Curacao</option>
     <option value="Cyprus">Cyprus</option>
     <option value="Czech Republic">Czech Republic</option>
     <option value="Denmark">Denmark</option>
     <option value="Djibouti">Djibouti</option>
     <option value="Dominica">Dominica</option>
     <option value="Dominican Republic">Dominican Republic</option>
     <option value="East Timor">East Timor</option>
     <option value="Ecuador">Ecuador</option>
     <option value="Egypt">Egypt</option>
     <option value="El Salvador">El Salvador</option>
     <option value="Equatorial Guinea">Equatorial Guinea</option>
     <option value="Eritrea">Eritrea</option>
     <option value="Estonia">Estonia</option>
     <option value="Ethiopia">Ethiopia</option>
     <option value="Falkland Islands">Falkland Islands</option>
     <option value="Faroe Islands">Faroe Islands</option>
     <option value="Fiji">Fiji</option>
     <option value="Finland">Finland</option>
     <option value="France">France</option>
     <option value="French Guiana">French Guiana</option>
     <option value="French Polynesia">French Polynesia</option>
     <option value="French Southern Ter">French Southern Ter</option>
     <option value="Gabon">Gabon</option>
     <option value="Gambia">Gambia</option>
     <option value="Georgia">Georgia</option>
     <option value="Germany">Germany</option>
     <option value="Ghana">Ghana</option>
     <option value="Gibraltar">Gibraltar</option>
     <option value="Great Britain">Great Britain</option>
     <option value="Greece">Greece</option>
     <option value="Greenland">Greenland</option>
     <option value="Grenada">Grenada</option>
     <option value="Guadeloupe">Guadeloupe</option>
     <option value="Guam">Guam</option>
     <option value="Guatemala">Guatemala</option>
     <option value="Guinea">Guinea</option>
     <option value="Guyana">Guyana</option>
     <option value="Haiti">Haiti</option>
     <option value="Hawaii">Hawaii</option>
     <option value="Honduras">Honduras</option>
     <option value="Hong Kong">Hong Kong</option>
     <option value="Hungary">Hungary</option>
     <option value="Iceland">Iceland</option>
     <option value="Indonesia">Indonesia</option>
     <option value="India">India</option>
     <option value="Iran">Iran</option>
     <option value="Iraq">Iraq</option>
     <option value="Ireland">Ireland</option>
     <option value="Isle of Man">Isle of Man</option>
     <option value="Israel">Israel</option>
     <option value="Italy">Italy</option>
     <option value="Jamaica">Jamaica</option>
     <option value="Japan">Japan</option>
     <option value="Jordan">Jordan</option>
     <option value="Kazakhstan">Kazakhstan</option>
     <option value="Kenya">Kenya</option>
     <option value="Kiribati">Kiribati</option>
     <option value="Korea North">Korea North</option>
     <option value="Korea Sout">Korea South</option>
     <option value="Kuwait">Kuwait</option>
     <option value="Kyrgyzstan">Kyrgyzstan</option>
     <option value="Laos">Laos</option>
     <option value="Latvia">Latvia</option>
     <option value="Lebanon">Lebanon</option>
     <option value="Lesotho">Lesotho</option>
     <option value="Liberia">Liberia</option>
     <option value="Libya">Libya</option>
     <option value="Liechtenstein">Liechtenstein</option>
     <option value="Lithuania">Lithuania</option>
     <option value="Luxembourg">Luxembourg</option>
     <option value="Macau">Macau</option>
     <option value="Macedonia">Macedonia</option>
     <option value="Madagascar">Madagascar</option>
     <option value="Malaysia">Malaysia</option>
     <option value="Malawi">Malawi</option>
     <option value="Maldives">Maldives</option>
     <option value="Mali">Mali</option>
     <option value="Malta">Malta</option>
     <option value="Marshall Islands">Marshall Islands</option>
     <option value="Martinique">Martinique</option>
     <option value="Mauritania">Mauritania</option>
     <option value="Mauritius">Mauritius</option>
     <option value="Mayotte">Mayotte</option>
     <option value="Mexico">Mexico</option>
     <option value="Midway Islands">Midway Islands</option>
     <option value="Moldova">Moldova</option>
     <option value="Monaco">Monaco</option>
     <option value="Mongolia">Mongolia</option>
     <option value="Montserrat">Montserrat</option>
     <option value="Morocco">Morocco</option>
     <option value="Mozambique">Mozambique</option>
     <option value="Myanmar">Myanmar</option>
     <option value="Nambia">Nambia</option>
     <option value="Nauru">Nauru</option>
     <option value="Nepal">Nepal</option>
     <option value="Netherland Antilles">Netherland Antilles</option>
     <option value="Netherlands">Netherlands (Holland, Europe)</option>
     <option value="Nevis">Nevis</option>
     <option value="New Caledonia">New Caledonia</option>
     <option value="New Zealand">New Zealand</option>
     <option value="Nicaragua">Nicaragua</option>
     <option value="Niger">Niger</option>
     <option value="Nigeria">Nigeria</option>
     <option value="Niue">Niue</option>
     <option value="Norfolk Island">Norfolk Island</option>
     <option value="Norway">Norway</option>
     <option value="Oman">Oman</option>
     <option value="Pakistan">Pakistan</option>
     <option value="Palau Island">Palau Island</option>
     <option value="Palestine">Palestine</option>
     <option value="Panama">Panama</option>
     <option value="Papua New Guinea">Papua New Guinea</option>
     <option value="Paraguay">Paraguay</option>
     <option value="Peru">Peru</option>
     <option value="Phillipines">Philippines</option>
     <option value="Pitcairn Island">Pitcairn Island</option>
     <option value="Poland">Poland</option>
     <option value="Portugal">Portugal</option>
     <option value="Puerto Rico">Puerto Rico</option>
     <option value="Qatar">Qatar</option>
     <option value="Republic of Montenegro">Republic of Montenegro</option>
     <option value="Republic of Serbia">Republic of Serbia</option>
     <option value="Reunion">Reunion</option>
     <option value="Romania">Romania</option>
     <option value="Russia">Russia</option>
     <option value="Rwanda">Rwanda</option>
     <option value="St Barthelemy">St Barthelemy</option>
     <option value="St Eustatius">St Eustatius</option>
     <option value="St Helena">St Helena</option>
     <option value="St Kitts-Nevis">St Kitts-Nevis</option>
     <option value="St Lucia">St Lucia</option>
     <option value="St Maarten">St Maarten</option>
     <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
     <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
     <option value="Saipan">Saipan</option>
     <option value="Samoa">Samoa</option>
     <option value="Samoa American">Samoa American</option>
     <option value="San Marino">San Marino</option>
     <option value="Sao Tome & Principe">Sao Tome & Principe</option>
     <option value="Saudi Arabia">Saudi Arabia</option>
     <option value="Senegal">Senegal</option>
     <option value="Seychelles">Seychelles</option>
     <option value="Sierra Leone">Sierra Leone</option>
     <option value="Singapore">Singapore</option>
     <option value="Slovakia">Slovakia</option>
     <option value="Slovenia">Slovenia</option>
     <option value="Solomon Islands">Solomon Islands</option>
     <option value="Somalia">Somalia</option>
     <option value="South Africa">South Africa</option>
     <option value="Spain">Spain</option>
     <option value="Sri Lanka">Sri Lanka</option>
     <option value="Sudan">Sudan</option>
     <option value="Suriname">Suriname</option>
     <option value="Swaziland">Swaziland</option>
     <option value="Sweden">Sweden</option>
     <option value="Switzerland">Switzerland</option>
     <option value="Syria">Syria</option>
     <option value="Tahiti">Tahiti</option>
     <option value="Taiwan">Taiwan</option>
     <option value="Tajikistan">Tajikistan</option>
     <option value="Tanzania">Tanzania</option>
     <option value="Thailand">Thailand</option>
     <option value="Togo">Togo</option>
     <option value="Tokelau">Tokelau</option>
     <option value="Tonga">Tonga</option>
     <option value="Trinidad & Tobago">Trinidad & Tobago</option>
     <option value="Tunisia">Tunisia</option>
     <option value="Turkey">Turkey</option>
     <option value="Turkmenistan">Turkmenistan</option>
     <option value="Turks & Caicos Is">Turks & Caicos Is</option>
     <option value="Tuvalu">Tuvalu</option>
     <option value="Uganda">Uganda</option>
     <option value="United Kingdom">United Kingdom</option>
     <option value="Ukraine">Ukraine</option>
     <option value="United Arab Erimates">United Arab Emirates</option>
     <option value="United States of America">United States of America</option>
     <option value="Uraguay">Uruguay</option>
     <option value="Uzbekistan">Uzbekistan</option>
     <option value="Vanuatu">Vanuatu</option>
     <option value="Vatican City State">Vatican City State</option>
     <option value="Venezuela">Venezuela</option>
     <option value="Vietnam">Vietnam</option>
     <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
     <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
     <option value="Wake Island">Wake Island</option>
     <option value="Wallis & Futana Is">Wallis & Futana Is</option>
     <option value="Yemen">Yemen</option>
     <option value="Zaire">Zaire</option>
     <option value="Zambia">Zambia</option>
     <option value="Zimbabwe">Zimbabwe</option>


                            </select>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">City</label>
                            <input
                              class="form-control"
                              type="text"
                              id="firstName"
                              name="city"
                              value=""

                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="" class="form-label">Kebele</label>
                            <input
                              class="form-control"
                              type="text"
                              id="firstName"
                              name="kebele"
                              value=""

                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="" class="form-label">House_No</label>
                            <input
                              class="form-control"
                              type="text"
                              id="firstName"
                              name="house"
                              value=""

                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="" class="form-label">phone no</label>
                            <input
                              class="form-control"
                              type="number"
                              id="firstName"
                              name="phone"
                              value=""

                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="" class="form-label">password</label>
                            <input
                              class="form-control"
                              type="password"
                              id="firstName"
                              name="password"
                              value=""
                              required

                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="" class="form-label">re enter password</label>
                            <input
                              class="form-control"
                              type="password"
                              id="firstName"
                              name="kebele"
                              value=""
                                required
                            />
                          </div>

                          <!-- <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">Organization</label>
                            <input
                              type="text"
                              class="form-control"
                              id="organization"
                              name="organization"
                              value="ThemeSelection"
                            />
                          </div> -->
                          <!-- <div class="mb-3 col-md-6">
                            <label class="form-label" for="phoneNumber">Phone Number</label>
                            <div class="input-group input-group-merge">
                              <span class="input-group-text">ETH (+251)</span>
                              <input
                                type="text"
                                id="phoneNumber"
                                name="phoneNumber"
                                class="form-control"
                                placeholder="202 555 0111"
                              />
                            </div>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="state" class="form-label">State</label>
                            <input class="form-control" type="text" id="state" name="state" placeholder="California" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="zipCode" class="form-label">Zip Code</label>
                            <input
                              type="text"
                              class="form-control"
                              id="zipCode"
                              name="zipCode"
                              placeholder="231465"
                              maxlength="6"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="country">Country</label>
                            <select id="country" class="select2 form-select">
                              <option value="">Select</option>
                              <option value="Australia">Australia</option>
                              <option value="Bangladesh">Bangladesh</option>
                              <option value="Belarus">Belarus</option>
                              <option value="Brazil">Brazil</option>
                              <option value="Canada">Canada</option>
                              <option value="China">China</option>
                              <option value="France">France</option>
                              <option value="Germany">Germany</option>
                              <option value="India">India</option>
                              <option value="Indonesia">Indonesia</option>
                              <option value="Israel">Israel</option>
                              <option value="Italy">Italy</option>
                              <option value="Japan">Japan</option>
                              <option value="Korea">Korea, Republic of</option>
                              <option value="Mexico">Mexico</option>
                              <option value="Philippines">Philippines</option>
                              <option value="Russia">Russian Federation</option>
                              <option value="South Africa">South Africa</option>
                              <option value="Thailand">Thailand</option>
                              <option value="Turkey">Turkey</option>
                              <option value="Ukraine">Ukraine</option>
                              <option value="United Arab Emirates">United Arab Emirates</option>
                              <option value="United Kingdom">United Kingdom</option>
                              <option value="United States">United States</option>
                            </select>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="language" class="form-label">Language</label>
                            <select id="language" class="select2 form-select">
                              <option value="">Select Language</option>
                              <option value="en">English</option>
                              <option value="fr">French</option>
                              <option value="de">German</option>
                              <option value="pt">Portuguese</option>
                            </select>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="timeZones" class="form-label">Timezone</label>
                            <select id="timeZones" class="select2 form-select">
                              <option value="">Select Timezone</option>
                              <option value="-12">(GMT-12:00) International Date Line West</option>
                              <option value="-11">(GMT-11:00) Midway Island, Samoa</option>
                              <option value="-10">(GMT-10:00) Hawaii</option>
                              <option value="-9">(GMT-09:00) Alaska</option>
                              <option value="-8">(GMT-08:00) Pacific Time (US & Canada)</option>
                              <option value="-8">(GMT-08:00) Tijuana, Baja California</option>
                              <option value="-7">(GMT-07:00) Arizona</option>
                              <option value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                              <option value="-7">(GMT-07:00) Mountain Time (US & Canada)</option>
                              <option value="-6">(GMT-06:00) Central America</option>
                              <option value="-6">(GMT-06:00) Central Time (US & Canada)</option>
                              <option value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                              <option value="-6">(GMT-06:00) Saskatchewan</option>
                              <option value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                              <option value="-5">(GMT-05:00) Eastern Time (US & Canada)</option>
                              <option value="-5">(GMT-05:00) Indiana (East)</option>
                              <option value="-4">(GMT-04:00) Atlantic Time (Canada)</option>
                              <option value="-4">(GMT-04:00) Caracas, La Paz</option>
                            </select>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="currency" class="form-label">Currency</label>
                            <select id="currency" class="select2 form-select">
                              <option value="">Select Currency</option>
                              <option value="usd">USD</option>
                              <option value="euro">Euro</option>
                              <option value="pound">Pound</option>
                              <option value="bitcoin">Bitcoin</option>
                            </select>
                          </div> -->

                            <div class="form-check mb-3">
                              <input
                                class="form-check-input"
                                type="checkbox"
                                name="accountActivation"
                                id="accountActivation"
                              />
                              <label class="form-check-label" for="accountActivation"
                                >  <div class="mb-3 col-12 mb-0">
                                    <div class="alert alert-warning">
                                      <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
                                      <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                                    </div>
                                  </div></label
                              >
                            </div>


  <button type="submit" name="submit" class="btn btn-danger">REGISTER</button>
                        </div>
                        <div class="mt-2">



                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>

                </div>
              </div>
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



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/pages-account-settings-account.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
