












<!doctype html>
<html lang="en" data-bs-theme="blue-theme">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  
  

  <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png">
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet">
  <script src="assets/js/pace.min.js"></script>
  <style type="scss">

  </style>
<style>
  .overlay-box {
    background-color: rgba(255, 255, 255, 0.8); /* Light background */
     /* Padding around the button */
    border-radius: 5px; /* Rounded corners */

}
.fade-in-component {
    opacity: 0; /* Start hidden */
    transition: opacity 1s ease-in-out; /* Transition effect */
    display: block; /* Ensure it takes up space */
}

.fade-in-component.fade-in {
    opacity: 1; /* Fully visible */
}

.custom-box {
    width: 563.25px; /* Set a fixed width */
    height: 296.75px; /* Set a fixed height */
    display: flex; /* Use flexbox for centering */
    align-items: center; /* Center items vertically */
    justify-content: center; /* Center items horizontally */
    border-radius: 5px; /* Rounded corners */
    padding: 20px; /* Inner padding */
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3); /* Shadow for depth */
    gap: 23px;
    border: 2px 2px 2px solid ;
    font-weight: 400;
    filter: drop-shadow(0 0 0.85rem black);
}
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}

body {
  background-color: #b71540;
  font-family: 'Montserrat', sans-serif;
}

.box {
  background-color: transparent;
  border-radius: 3px;
  color: #fff;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 400px;
  height: 300px;
  transform-style: preserve-3d;
  perspective: 2000px;
  transition: .4s;
  text-align: center;
  &:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: transparent;
    border-top: 20px solid #fff;
    border-left: 20px solid #fff;
    box-sizing: border-box;
  }
  &:after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-bottom: 20px solid #fff;
    border-right: 20px solid #fff;
    box-sizing: border-box;
  }
  .fas {
    font-size: 25px;
    height: 50px;
    width: 50px;
    line-height: 50px !important;
    background-color: #fff;
    color: #2C3A47;
  }
  .fa2 {
    position: absolute;
    bottom: 0;
    right: 0;
    z-index: 1;
  }
  .text {
    position: absolute;
    top: 30px;
    left: -30px;
    width: calc(100% + 60px);
    height: calc(100% - 60px);
    background-color: #2C3A47;
    border-radius: 3px;
    transition: .4s;
    .fa1 {
      position: absolute;
      top: 0;
      left: 0;
    }
    div {
      position: absolute;
      top: 50%;
      left: 0;
      transform: translateY(-50%);
      text-align: center;
      width: 100%;
      padding: 30px 60px;
      line-height: 1.5;
      box-sizing: border-box;
      h3 {
        font-size: 30px;
        margin-bottom: 5px;
      }
      p {
        font-size: 15px;
      }
    }
  }
  &:hover {
    .text {
      transform: rotateY(20deg) skewY(-3deg)
    }
    transform: translate(-50%, -50%) rotateY(-20deg) skewY(3deg)
  }
}

</style>
  <!--plugins-->
  <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/plugins/metismenu/metisMenu.min.css">
  <link rel="stylesheet" type="text/css" href="assets/plugins/metismenu/mm-vertical.css">
  <link rel="stylesheet" type="text/css" href="assets/plugins/simplebar/css/simplebar.css">
  <!-- Add jQuery CDN in your HTML -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!--bootstrap css-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
  <!--main css-->
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
  <link href="sass/main.css" rel="stylesheet">
  <link href="assets/css/horizontal-menu.css" rel="stylesheet">
  <link href="sass/dark-theme.css" rel="stylesheet">
  <link href="sass/blue-theme.css" rel="stylesheet">
  <link href="sass/semi-dark.css" rel="stylesheet">
  <link href="sass/bordered-theme.css" rel="stylesheet">
  <link href="sass/responsive.css" rel="stylesheet">

</head>

<body>

    <!-- Your page content here -->

    <div class="fade-in-component">



  <!--start header-->
 <header class="top-header">
  <nav class="navbar navbar-expand align-items-center justify-content-between gap-4 border-bottom">
    <div class="logo-header d-none d-xl-flex align-items-center gap-2">
      <div class="logo-icon">
        <img src="assets/images/logo-icon.png" class="logo-img" width="45" alt="">
      </div>
      <div class="logo-name">
        <h5 class="mb-0">Maxton</h5>
      </div>
    </div>
    <div class="btn-toggle d-xl-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
      <a href="javascript:;"><i class="material-icons-outlined">menu</i></a>
    </div>
    <div class="search-bar">
      <div class="position-relative">
        <input class="form-control rounded-5 px-5 search-control d-lg-block d-none" type="text" placeholder="Search">
        <span class="material-icons-outlined position-absolute d-lg-block d-none ms-3 translate-middle-y start-0 top-50">search</span>
        <span class="material-icons-outlined position-absolute me-3 translate-middle-y end-0 top-50 search-close">close</span>
        <div class="search-popup p-3">
          <div class="card rounded-4 overflow-hidden">
            <div class="card-header d-lg-none">
              <div class="position-relative">
                <input class="form-control rounded-5 px-5 mobile-search-control" type="text" placeholder="Search">
                <span class="material-icons-outlined position-absolute ms-3 translate-middle-y start-0 top-50">search</span>
                <span class="material-icons-outlined position-absolute me-3 translate-middle-y end-0 top-50 mobile-search-close">close</span>
               </div>
            </div>
            <div class="card-body search-content">
              <p class="search-title">Recent Searches</p>
              <div class="d-flex align-items-start flex-wrap gap-2 kewords-wrapper">
                <a href="javascript:;" class="kewords"><span>Angular Template</span><i
                    class="material-icons-outlined fs-6">search</i></a>
                <a href="javascript:;" class="kewords"><span>Dashboard</span><i
                    class="material-icons-outlined fs-6">search</i></a>
                <a href="javascript:;" class="kewords"><span>Admin Template</span><i
                    class="material-icons-outlined fs-6">search</i></a>
                <a href="javascript:;" class="kewords"><span>Bootstrap 5 Admin</span><i
                    class="material-icons-outlined fs-6">search</i></a>
                <a href="javascript:;" class="kewords"><span>Html eCommerce</span><i
                    class="material-icons-outlined fs-6">search</i></a>
                <a href="javascript:;" class="kewords"><span>Sass</span><i
                    class="material-icons-outlined fs-6">search</i></a>
                <a href="javascript:;" class="kewords"><span>laravel 9</span><i
                    class="material-icons-outlined fs-6">search</i></a>
              </div>
              <hr>
              <p class="search-title">Tutorials</p>
              <div class="search-list d-flex flex-column gap-2">
                <div class="search-list-item d-flex align-items-center gap-3">
                  <div class="list-icon">
                    <i class="material-icons-outlined fs-5">play_circle</i>
                  </div>
                  <div class="">
                    <h5 class="mb-0 search-list-title ">Wordpress Tutorials</h5>
                  </div>
                </div>
                <div class="search-list-item d-flex align-items-center gap-3">
                  <div class="list-icon">
                    <i class="material-icons-outlined fs-5">shopping_basket</i>
                  </div>
                  <div class="">
                    <h5 class="mb-0 search-list-title">eCommerce Website Tutorials</h5>
                  </div>
                </div>

                <div class="search-list-item d-flex align-items-center gap-3">
                  <div class="list-icon">
                    <i class="material-icons-outlined fs-5">laptop</i>
                  </div>
                  <div class="">
                    <h5 class="mb-0 search-list-title">Responsive Design</h5>
                  </div>
                </div>
              </div>

              <hr>
              <p class="search-title">Members</p>

              <div class="search-list d-flex flex-column gap-2">
                <div class="search-list-item d-flex align-items-center gap-3">
                  <div class="memmber-img">
                    <img src="assets/images/avatars/01.png" width="32" height="32" class="rounded-circle" alt="">
                  </div>
                  <div class="">
                    <h5 class="mb-0 search-list-title ">Andrew Stark</h5>
                  </div>
                </div>

                <div class="search-list-item d-flex align-items-center gap-3">
                  <div class="memmber-img">
                    <img src="assets/images/avatars/02.png" width="32" height="32" class="rounded-circle" alt="">
                  </div>
                  <div class="">
                    <h5 class="mb-0 search-list-title ">Snetro Jhonia</h5>
                  </div>
                </div>

                <div class="search-list-item d-flex align-items-center gap-3">
                  <div class="memmber-img">
                    <img src="assets/images/avatars/03.png" width="32" height="32" class="rounded-circle" alt="">
                  </div>
                  <div class="">
                    <h5 class="mb-0 search-list-title">Michle Clark</h5>
                  </div>
                </div>

              </div>
            </div>
            <div class="card-footer text-center bg-transparent">
              <a href="javascript:;" class="btn w-100">See All Search Results</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <ul class="navbar-nav gap-1 nav-right-links align-items-center">
      <li class="nav-item d-lg-none mobile-search-btn">
        <a class="nav-link" href="javascript:;"><i class="material-icons-outlined">search</i></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="avascript:;" data-bs-toggle="dropdown"><img src="assets/images/county/02.png" width="22" alt="">
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/01.png" width="20" alt=""><span class="ms-2">English</span></a>
          </li>
          <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/02.png" width="20" alt=""><span class="ms-2">Catalan</span></a>
          </li>
          <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/03.png" width="20" alt=""><span class="ms-2">French</span></a>
          </li>
          <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/04.png" width="20" alt=""><span class="ms-2">Belize</span></a>
          </li>
          <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/05.png" width="20" alt=""><span class="ms-2">Colombia</span></a>
          </li>
          <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/06.png" width="20" alt=""><span class="ms-2">Spanish</span></a>
          </li>
          <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/07.png" width="20" alt=""><span class="ms-2">Georgian</span></a>
          </li>
          <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/08.png" width="20" alt=""><span class="ms-2">Hindi</span></a>
          </li>
        </ul>
      </li>

      <li class="nav-item dropdown position-static  d-md-flex d-none">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-bs-auto-close="outside"
        data-bs-toggle="dropdown" href="javascript:;"><i class="material-icons-outlined">done_all</i></a>
        <div class="dropdown-menu dropdown-menu-end mega-menu shadow-lg p-4 p-lg-5">
          <div class="mega-menu-widgets">
           <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3 g-4 g-lg-5">
              <div class="col">
                <div class="card rounded-4 shadow-none border mb-0">
                  <div class="card-body">
                    <div class="d-flex align-items-start gap-3">
                      <div class="mega-menu-icon flex-shrink-0 bg-danger">
                        <i class="material-icons-outlined">question_answer</i>
                      </div>
                      <div class="mega-menu-content">
                         <h5>Marketing</h5>
                         <p class="mb-0 f-14">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate
                           the visual form of a document.</p>
                      </div>
                   </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card rounded-4 shadow-none border mb-0">
                  <div class="card-body">
                    <div class="d-flex align-items-start gap-3">
                      <img src="assets/images/megaIcons/02.png" width="40" alt="">
                      <div class="mega-menu-content">
                         <h5>Website</h5>
                         <p class="mb-0 f-14">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate
                           the visual form of a document.</p>
                      </div>
                   </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card rounded-4 shadow-none border mb-0">
                  <div class="card-body">
                    <div class="d-flex align-items-start gap-3">
                      <img src="assets/images/megaIcons/03.png" width="40" alt="">
                      <div class="mega-menu-content">
                          <h5>Subscribers</h5>
                         <p class="mb-0 f-14">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate
                           the visual form of a document.</p>
                      </div>
                   </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card rounded-4 shadow-none border mb-0">
                  <div class="card-body">
                    <div class="d-flex align-items-start gap-3">
                      <img src="assets/images/megaIcons/01.png" width="40" alt="">
                      <div class="mega-menu-content">
                         <h5>Hubspot</h5>
                         <p class="mb-0 f-14">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate
                           the visual form of a document.</p>
                      </div>
                   </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card rounded-4 shadow-none border mb-0">
                  <div class="card-body">
                    <div class="d-flex align-items-start gap-3">
                      <img src="assets/images/megaIcons/11.png" width="40" alt="">
                      <div class="mega-menu-content">
                         <h5>Templates</h5>
                         <p class="mb-0 f-14">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate
                           the visual form of a document.</p>
                      </div>
                   </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card rounded-4 shadow-none border mb-0">
                  <div class="card-body">
                    <div class="d-flex align-items-start gap-3">
                      <img src="assets/images/megaIcons/13.png" width="40" alt="">
                      <div class="mega-menu-content">
                         <h5>Ebooks</h5>
                         <p class="mb-0 f-14">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate
                           the visual form of a document.</p>
                      </div>
                   </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card rounded-4 shadow-none border mb-0">
                  <div class="card-body">
                    <div class="d-flex align-items-start gap-3">
                      <img src="assets/images/megaIcons/12.png" width="40" alt="">
                      <div class="mega-menu-content">
                         <h5>Sales</h5>
                         <p class="mb-0 f-14">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate
                           the visual form of a document.</p>
                      </div>
                   </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card rounded-4 shadow-none border mb-0">
                  <div class="card-body">
                    <div class="d-flex align-items-start gap-3">
                      <img src="assets/images/megaIcons/08.png" width="40" alt="">
                      <div class="mega-menu-content">
                         <h5>Tools</h5>
                         <p class="mb-0 f-14">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate
                           the visual form of a document.</p>
                      </div>
                   </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card rounded-4 shadow-none border mb-0">
                  <div class="card-body">
                    <div class="d-flex align-items-start gap-3">
                      <img src="assets/images/megaIcons/09.png" width="40" alt="">
                      <div class="mega-menu-content">
                         <h5>Academy</h5>
                         <p class="mb-0 f-14">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate
                           the visual form of a document.</p>
                      </div>
                   </div>
                  </div>
                </div>
              </div>
           </div><!--end row-->
          </div>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-bs-auto-close="outside"
          data-bs-toggle="dropdown" href="javascript:;"><i class="material-icons-outlined">apps</i></a>
        <div class="dropdown-menu dropdown-menu-end dropdown-apps shadow-lg p-3">
          <div class="border rounded-4 overflow-hidden">
            <div class="row row-cols-3 g-0 border-bottom">
              <div class="col border-end">
                <div class="app-wrapper d-flex flex-column gap-2 text-center">
                  <div class="app-icon">
                    <img src="assets/images/apps/01.png" width="36" alt="">
                  </div>
                  <div class="app-name">
                    <p class="mb-0">Gmail</p>
                  </div>
                </div>
              </div>
              <div class="col border-end">
                <div class="app-wrapper d-flex flex-column gap-2 text-center">
                  <div class="app-icon">
                    <img src="assets/images/apps/02.png" width="36" alt="">
                  </div>
                  <div class="app-name">
                    <p class="mb-0">Skype</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="app-wrapper d-flex flex-column gap-2 text-center">
                  <div class="app-icon">
                    <img src="assets/images/apps/03.png" width="36" alt="">
                  </div>
                  <div class="app-name">
                    <p class="mb-0">Slack</p>
                  </div>
                </div>
              </div>
            </div><!--end row-->

            <div class="row row-cols-3 g-0 border-bottom">
              <div class="col border-end">
                <div class="app-wrapper d-flex flex-column gap-2 text-center">
                  <div class="app-icon">
                    <img src="assets/images/apps/04.png" width="36" alt="">
                  </div>
                  <div class="app-name">
                    <p class="mb-0">YouTube</p>
                  </div>
                </div>
              </div>
              <div class="col border-end">
                <div class="app-wrapper d-flex flex-column gap-2 text-center">
                  <div class="app-icon">
                    <img src="assets/images/apps/05.png" width="36" alt="">
                  </div>
                  <div class="app-name">
                    <p class="mb-0">Google</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="app-wrapper d-flex flex-column gap-2 text-center">
                  <div class="app-icon">
                    <img src="assets/images/apps/06.png" width="36" alt="">
                  </div>
                  <div class="app-name">
                    <p class="mb-0">Instagram</p>
                  </div>
                </div>
              </div>
            </div><!--end row-->

            <div class="row row-cols-3 g-0 border-bottom">
              <div class="col border-end">
                <div class="app-wrapper d-flex flex-column gap-2 text-center">
                  <div class="app-icon">
                    <img src="assets/images/apps/07.png" width="36" alt="">
                  </div>
                  <div class="app-name">
                    <p class="mb-0">Spotify</p>
                  </div>
                </div>
              </div>
              <div class="col border-end">
                <div class="app-wrapper d-flex flex-column gap-2 text-center">
                  <div class="app-icon">
                    <img src="assets/images/apps/08.png" width="36" alt="">
                  </div>
                  <div class="app-name">
                    <p class="mb-0">Yahoo</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="app-wrapper d-flex flex-column gap-2 text-center">
                  <div class="app-icon">
                    <img src="assets/images/apps/09.png" width="36" alt="">
                  </div>
                  <div class="app-name">
                    <p class="mb-0">Facebook</p>
                  </div>
                </div>
              </div>
            </div><!--end row-->

            <div class="row row-cols-3 g-0">
              <div class="col border-end">
                <div class="app-wrapper d-flex flex-column gap-2 text-center">
                  <div class="app-icon">
                    <img src="assets/images/apps/10.png" width="36" alt="">
                  </div>
                  <div class="app-name">
                    <p class="mb-0">Figma</p>
                  </div>
                </div>
              </div>
              <div class="col border-end">
                <div class="app-wrapper d-flex flex-column gap-2 text-center">
                  <div class="app-icon">
                    <img src="assets/images/apps/11.png" width="36" alt="">
                  </div>
                  <div class="app-name">
                    <p class="mb-0">Paypal</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="app-wrapper d-flex flex-column gap-2 text-center">
                  <div class="app-icon">
                    <img src="assets/images/apps/12.png" width="36" alt="">
                  </div>
                  <div class="app-name">
                    <p class="mb-0">Photo</p>
                  </div>
                </div>
              </div>
            </div><!--end row-->
          </div>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" data-bs-auto-close="outside"
          data-bs-toggle="dropdown" href="javascript:;"><i class="material-icons-outlined">notifications</i>
          <span class="badge-notify">5</span>
        </a>
        <div class="dropdown-menu dropdown-notify dropdown-menu-end shadow">
          <div class="px-3 py-1 d-flex align-items-center justify-content-between border-bottom">
            <h5 class="notiy-title mb-0">Notifications</h5>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle dropdown-toggle-nocaret option" type="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <span class="material-icons-outlined">
                  more_vert
                </span>
              </button>
              <div class="dropdown-menu dropdown-option dropdown-menu-end shadow">
                <div><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                      class="material-icons-outlined fs-6">inventory_2</i>Archive All</a></div>
                <div><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                      class="material-icons-outlined fs-6">done_all</i>Mark all as read</a></div>
                <div><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                      class="material-icons-outlined fs-6">mic_off</i>Disable Notifications</a></div>
                <div><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                      class="material-icons-outlined fs-6">grade</i>What's new ?</a></div>
                <div>
                  <hr class="dropdown-divider">
                </div>
                <div><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                      class="material-icons-outlined fs-6">leaderboard</i>Reports</a></div>
              </div>
            </div>
          </div>
          <div class="notify-list">
            <div>
              <a class="dropdown-item border-bottom py-2" href="javascript:;">
                <div class="d-flex align-items-center gap-3">
                  <div class="">
                    <img src="assets/images/avatars/01.png" class="rounded-circle" width="45" height="45" alt="">
                  </div>
                  <div class="">
                    <h5 class="notify-title">Congratulations Jhon</h5>
                    <p class="mb-0 notify-desc">Many congtars jhon. You have won the gifts.</p>
                    <p class="mb-0 notify-time">Today</p>
                  </div>
                  <div class="notify-close position-absolute end-0 me-3">
                    <i class="material-icons-outlined fs-6">close</i>
                  </div>
                </div>
              </a>
            </div>
            <div>
              <a class="dropdown-item border-bottom py-2" href="javascript:;">
                <div class="d-flex align-items-center gap-3">
                  <div class="user-wrapper bg-primary text-primary bg-opacity-10">
                    <span>RS</span>
                  </div>
                  <div class="">
                    <h5 class="notify-title">New Account Created</h5>
                    <p class="mb-0 notify-desc">From USA an user has registered.</p>
                    <p class="mb-0 notify-time">Yesterday</p>
                  </div>
                  <div class="notify-close position-absolute end-0 me-3">
                    <i class="material-icons-outlined fs-6">close</i>
                  </div>
                </div>
              </a>
            </div>
            <div>
              <a class="dropdown-item border-bottom py-2" href="javascript:;">
                <div class="d-flex align-items-center gap-3">
                  <div class="">
                    <img src="assets/images/apps/13.png" class="rounded-circle" width="45" height="45" alt="">
                  </div>
                  <div class="">
                    <h5 class="notify-title">Payment Recived</h5>
                    <p class="mb-0 notify-desc">New payment recived successfully</p>
                    <p class="mb-0 notify-time">1d ago</p>
                  </div>
                  <div class="notify-close position-absolute end-0 me-3">
                    <i class="material-icons-outlined fs-6">close</i>
                  </div>
                </div>
              </a>
            </div>
            <div>
              <a class="dropdown-item border-bottom py-2" href="javascript:;">
                <div class="d-flex align-items-center gap-3">
                  <div class="">
                    <img src="assets/images/apps/14.png" class="rounded-circle" width="45" height="45" alt="">
                  </div>
                  <div class="">
                    <h5 class="notify-title">New Order Recived</h5>
                    <p class="mb-0 notify-desc">Recived new order from michle</p>
                    <p class="mb-0 notify-time">2:15 AM</p>
                  </div>
                  <div class="notify-close position-absolute end-0 me-3">
                    <i class="material-icons-outlined fs-6">close</i>
                  </div>
                </div>
              </a>
            </div>
            <div>
              <a class="dropdown-item border-bottom py-2" href="javascript:;">
                <div class="d-flex align-items-center gap-3">
                  <div class="">
                    <img src="assets/images/avatars/06.png" class="rounded-circle" width="45" height="45" alt="">
                  </div>
                  <div class="">
                    <h5 class="notify-title">Congratulations Jhon</h5>
                    <p class="mb-0 notify-desc">Many congtars jhon. You have won the gifts.</p>
                    <p class="mb-0 notify-time">Today</p>
                  </div>
                  <div class="notify-close position-absolute end-0 me-3">
                    <i class="material-icons-outlined fs-6">close</i>
                  </div>
                </div>
              </a>
            </div>
            <div>
              <a class="dropdown-item py-2" href="javascript:;">
                <div class="d-flex align-items-center gap-3">
                  <div class="user-wrapper bg-danger text-danger bg-opacity-10">
                    <span>PK</span>
                  </div>
                  <div class="">
                    <h5 class="notify-title">New Account Created</h5>
                    <p class="mb-0 notify-desc">From USA an user has registered.</p>
                    <p class="mb-0 notify-time">Yesterday</p>
                  </div>
                  <div class="notify-close position-absolute end-0 me-3">
                    <i class="material-icons-outlined fs-6">close</i>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </li>
      <li class="nav-item d-md-flex d-none">
        <a class="nav-link position-relative" data-bs-toggle="offcanvas" href="#offcanvasCart"><i
            class="material-icons-outlined">shopping_cart</i>
          <span class="badge-notify">8</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a href="javascrpt:;" class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
           <img src="assets/images/avatars/01.png" class="rounded-circle p-1 border" width="45" height="45" alt="">
        </a>
        <div class="dropdown-menu dropdown-user dropdown-menu-end shadow">
          <a class="dropdown-item  gap-2 py-2" href="javascript:;">
            <div class="text-center">
              <img src="assets/images/avatars/01.png" class="rounded-circle p-1 shadow mb-3" width="90" height="90"
                alt="">
              <h5 class="user-name mb-0 fw-bold">Hello, Jhon</h5>
            </div>
          </a>
          <hr class="dropdown-divider">
          <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
            class="material-icons-outlined">person_outline</i>Profile</a>
          <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
            class="material-icons-outlined">local_bar</i>Setting</a>
          <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
            class="material-icons-outlined">dashboard</i>Dashboard</a>
          <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
            class="material-icons-outlined">account_balance</i>Earning</a>
            <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
              class="material-icons-outlined">cloud_download</i>Downloads</a>
          <hr class="dropdown-divider">
          <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="../auth-logout.php">
             <i class="material-icons-outlined">power_settings_new</i>Logout
            </a>
        </div>
      </li>
    </ul>

  </nav>
</header>

<!--end top header-->
</div>
<!-- component1 -->




  
  <!--start main wrapper-->
  <main class="main-wrapper">
    <div class="main-content">
      <!--breadcrumb-->
      <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Dashboard</div>
        <div class="ps-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
              <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
            </li>
              <li class="breadcrumb-item active" aria-current="page">eCommerce</li>
            </ol>
          </nav>
        </div>
        <div class="ms-auto">
          <div class="btn-group">
            <button type="button" class="btn btn-success"><a href="form-layouts.php">Make Appointment</a></button>
          </div>
        </div>
      </div>
      
      
<!-- get started -->
<!-- <div class="">
            <img src="assets/images/gallery/15.png" class="card-img w-50" alt="...">
            <div class="card-img-overlay">
              <p class="mb-4 text-white text-uppercase">Travel</p>
              <h3 class="card-title text-white">Various versions evolved</h3>
              <p class="mb-0 text-white">It was popularised in the 1960s with the release of Letraset sheets containing. <br>
                Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus
              </p>
            </div>
            <div class="bottom-0 position-absolute m-3">
              <a href="javascript:;" class="btn text-dark px-3 bg-white d-flex gap-2">Read More<span class="material-icons-outlined">east</span></a>
            </div>
          </div> -->
          <!-- get started -->
          
          <!-- component2 -->
       
          

          
          
          
          
          
          

          
          
          

          
          

        <div class="fade-in-component">
     
<!-- component2 -->
          <!--carousel  -->
          <div class="col">
    <h6 class="mb-0 text-uppercase">With Crossfade</h6>
    <hr>
    <div class="card">
        <div class="card-body position-relative">
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/carousels/WhatsApp Image 2024-09-21 at 03.30.37_6b525e69.jpg" class="d-block w-100" alt="...">
                        <div class="overlay-box position-absolute top-50 start-50 translate-middle text-center">
                            <div class="box  custom-box bg-white shadow d-flex flex-column justify-content-center align-items-center text-dark p-3 gap-">
                              <h2 style="color: black;">Classical Smart Beds</h2>
                              <h6 class="text-dark">Pakistan's leading and only smart beds manufacturer</h6>
                                <button class="btn btn-dark col-md-6">Action 1</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/carousels/WhatsApp Image 2024-09-21 at 03.30.37_7b316976.jpg" class="d-block w-100" alt="...">
                        <div class="overlay-box position-absolute top-50 start-50 translate-middle text-center">
                        <div class="custom-box bg-white shadow d-flex flex-column justify-content-center align-items-center text-dark p-3 gap-">
                              <h2 style="color: black;">Classical Smart Beds</h2>
                              <h6 class="text-dark">Pakistan's leading and only smart beds manufacturer</h6>
                                <button class="btn btn-dark col-md-6">Action 1</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/carousels/WhatsApp Image 2024-09-21 at 03.30.37_9d32a121.jpg" class="d-block w-100" alt="...">
                        <div class="overlay-box position-absolute top-50 start-50 translate-middle text-center">
                        <div class="custom-box bg-white shadow d-flex flex-column justify-content-center align-items-center text-dark p-3 gap-">
                              <h2 style="color: black;">Classical Smart Beds</h2>
                              <h6 class="text-dark">Pakistan's leading and only smart beds manufacturer</h6>
                                <button class="btn btn-dark col-md-6"></button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/carousels/WhatsApp Image 2024-09-21 at 03.30.38_62148e8a.jpg" class="d-block w-100" alt="...">
                        <div class="overlay-box position-absolute top-50 start-50 translate-middle text-center">
                        <div class="custom-box bg-white shadow d-flex flex-column justify-content-center align-items-center text-dark p-3 gap-">
                              <h2 style="color: black;">Classical Smart Beds</h2>
                              <h6 class="text-dark">Pakistan's leading and only smart beds manufacturer</h6>
                                <button class="btn btn-dark col-md-6">Action 1</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/carousels/WhatsApp Image 2024-09-21 at 03.30.39_859a1f8d.jpg" class="d-block w-100" alt="...">
                        <div class="overlay-box position-absolute top-50 start-50 translate-middle text-center">
                        <div class="custom-box bg-white shadow d-flex flex-column justify-content-center align-items-center text-dark p-3 gap-">
                              <h2 style="color: black;">Classical Smart Beds</h2>
                              <h6 class="text-dark">Pakistan's leading and only smart beds manufacturer</h6>
                                <button class="btn btn-dark col-md-6">Action 1</button>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="box">

</div>

<!-- component 2 -->
</div>

<div class="fade-in-component">
<!-- component 3 -->


<!-- links  -->
<div class="col">
  <h1 class="text-center  mt-5">CATERGORIES</h1>
    <div class="card">
        <div class="card-body">
            <div class="row row-cols-1 row-cols-lg-2 g-3">
                <div class="col">
                    <div class="card shadow-none bg-voilet mb-0" style="height: 160px;">
                        <div class="card-body">
                            <h5 class="mb-0 text-white">Women Clothes</h5>
                            <img src="assets/images/cat/01.png" class="position-absolute end-0 bottom-0" width="140" alt="">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-none bg-success mb-0" style="height: 160px;">
                        <div class="card-body">
                            <h5 class="mb-0 text-white">Men Clothes</h5>
                            <img src="assets/images/cat/02.png" class="position-absolute end-0 bottom-0" width="90" alt="">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-none bg-dark-blue mb-0" style="height: 160px;">
                        <div class="card-body">
                            <h5 class="mb-0 text-white">Airpods</h5>
                            <img src="assets/images/cat/03.png" class="position-absolute end-0 bottom-0" width="120" alt="">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-none bg-danger mb-0" style="height: 160px;">
                        <div class="card-body">
                            <h5 class="mb-0 text-white">Furniture</h5>
                            <img src="assets/images/cat/04.png" class="position-absolute end-0 bottom-0 m-2" width="160" alt="">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-none bg-orange mb-0" style="height: 160px;">
                        <div class="card-body">
                            <h5 class="mb-0 text-white">Hand Watch</h5>
                            <img src="assets/images/cat/05.png" class="position-absolute end-0 bottom-0" width="130" alt="">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-none bg-indigo mb-0" style="height: 160px;">
                        <div class="card-body">
                            <h5 class="mb-0 text-white">Shoes Pair</h5>
                            <img src="assets/images/cat/06.png" class="position-absolute end-0 bottom-0 m-2" width="200" alt="">
                        </div>
                    </div>
                </div>
            </div><!--end row-->
        </div>
    </div>
</div>

<!-- component 3 -->
</div>


<!-- jQuery Fade Function -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Initially hide the cards
    $('.card').hide();

    // Fade in the cards
    $('.card').fadeIn(900); // Adjust the duration as needed (1000ms = 1 second)
});
</script>




<div class="fade-in-component">
<!-- component 4 -->
<div class="col">
          <div class="card">
            <img src="assets/images/gallery/13.png" class="img-fluid card-img-top" alt="">
            <div class="card-body p-4">
              <h3 class="">Welcome to Company</h3>
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text.
                It has roots in a piece of classical Latin literature from 45 BC,
                making it over 2000 years old.</p>
              <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below
                for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
                Cicero are also reproduced in their exact original form, accompanied
                by English versions from the 1914 translation by H. Rackham.</p>

              <div class="my-4 text-center">
                <p class="fs-5">Welcome to the future of work.</p>
                <a href="javascript:;" class="btn btn-success btn-lg px-5">Start Exploring</a>
              </div>

              <div class="mt-5">
                <div class="text-center">
                  <h5 class="mb-3">Explore top services</h5>
                </div>
                <div class="row row-cols-1 row-cols-lg-2 g-4">
                  <div class="col">
                    <div class="text-center">
                      <img src="assets/images/orders/01.png" class="img-fluid rounded" alt="">
                      <h5 class="mb-0 mt-3">Logo Design</h5>
                    </div>
                  </div>
                  <div class="col">
                    <div class="text-center">
                      <img src="assets/images/orders/02.png" class="img-fluid rounded" alt="">
                      <h5 class="mb-0 mt-3">Whiteboard & Animated</h5>
                    </div>
                  </div>
                  <div class="col">
                    <div class="text-center">
                      <img src="assets/images/orders/03.png" class="img-fluid rounded" alt="">
                      <h5 class="mb-0 mt-3">Voice Over</h5>
                    </div>
                  </div>
                  <div class="col">
                    <div class="text-center">
                      <img src="assets/images/orders/04.png" class="img-fluid rounded" alt="">
                      <h5 class="mb-0 mt-3">Wordpress</h5>
                    </div>
                  </div>
                  <div class="col">
                    <div class="text-center">
                      <img src="assets/images/orders/05.png" class="img-fluid rounded" alt="">
                      <h5 class="mb-0 mt-3">Articles & Blog Posts</h5>
                    </div>
                  </div>
                  <div class="col">
                    <div class="text-center">
                      <img src="assets/images/orders/06.png" class="img-fluid rounded" alt="">
                      <h5 class="mb-0 mt-3">Website Design</h5>
                    </div>
                  </div>
                </div><!--end row-->
              </div>
            </div>
          </div>
        </div>

<!-- component 4 -->
        </div>




      <!--end breadcrumb-->
  </main>
  <!--end main wrapper-->
















  <!--start footer-->
  <footer class="page-footer">
    <p class="mb-0">Copyright © 2024. All right reserved.</p>
  </footer>
  <!--end footer-->

  <!--start cart-->
  <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasCart">
    <div class="offcanvas-header border-bottom h-70">
      <h5 class="mb-0" id="offcanvasRightLabel">8 New Orders</h5>
      <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="offcanvas">
        <i class="material-icons-outlined">close</i>
      </a>
    </div>
    <div class="offcanvas-body p-0">
      <div class="order-list">
        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="assets/images/orders/01.png" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">White Men Shoes</h5>
            <p class="mb-0 order-price">$289</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>

        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="assets/images/orders/02.png" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">Red Airpods</h5>
            <p class="mb-0 order-price">$149</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>

        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="assets/images/orders/03.png" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">Men Polo Tshirt</h5>
            <p class="mb-0 order-price">$139</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>

        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="assets/images/orders/04.png" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">Blue Jeans Casual</h5>
            <p class="mb-0 order-price">$485</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>

        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="assets/images/orders/05.png" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">Fancy Shirts</h5>
            <p class="mb-0 order-price">$758</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>

        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="assets/images/orders/06.png" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">Home Sofa Set </h5>
            <p class="mb-0 order-price">$546</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>

        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="assets/images/orders/07.png" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">Black iPhone</h5>
            <p class="mb-0 order-price">$1049</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>

        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="assets/images/orders/08.png" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">Goldan Watch</h5>
            <p class="mb-0 order-price">$689</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>
      </div>
    </div>
    <div class="offcanvas-footer h-70 p-3 border-top">
      <div class="d-grid">
        <button type="button" class="btn btn-grd btn-grd-primary" data-bs-dismiss="offcanvas">View Products</button>
      </div>
    </div>
  </div>
  <!--end cart-->



  <!--start switcher-->
  <button class="btn btn-grd btn-grd-primary position-fixed bottom-0 end-0 m-3 d-flex align-items-center gap-2" type="button"
    data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop">
    <i class="material-icons-outlined">tune</i>Customize
  </button>

  <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="staticBackdrop">
    <div class="offcanvas-header border-bottom h-70">
      <div class="">
        <h5 class="mb-0">Theme Customizer</h5>
        <p class="mb-0">Customize your theme</p>
      </div>
      <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="offcanvas">
        <i class="material-icons-outlined">close</i>
      </a>
    </div>
    <div class="offcanvas-body">
      <div>
        <p>Theme variation</p>

        <div class="row g-3">
          <div class="col-12 col-xl-6">
            <input type="radio" class="btn-check" name="theme-options" id="BlueTheme" checked>
            <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="BlueTheme">
              <span class="material-icons-outlined">contactless</span>
              <span>Blue</span>
            </label>
          </div>
          <div class="col-12 col-xl-6">
            <input type="radio" class="btn-check" name="theme-options" id="LightTheme">
            <label
              class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4"
              for="LightTheme">
              <span class="material-icons-outlined">light_mode</span>
              <span>Light</span>
            </label>
          </div>
          <div class="col-12 col-xl-6">
            <input type="radio" class="btn-check" name="theme-options" id="DarkTheme">
            <label
              class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4"
              for="DarkTheme">
              <span class="material-icons-outlined">dark_mode</span>
              <span>Dark</span>
            </label>
          </div>
          <div class="col-12 col-xl-6">
            <input type="radio" class="btn-check" name="theme-options" id="SemiDarkTheme">
            <label
              class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4"
              for="SemiDarkTheme">
              <span class="material-icons-outlined">contrast</span>
              <span>Semi Dark</span>
            </label>
          </div>
          <div class="col-12 col-xl-6">
            <input type="radio" class="btn-check" name="theme-options" id="BoderedTheme">
            <label
              class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4"
              for="BoderedTheme">
              <span class="material-icons-outlined">border_style</span>
              <span>Bordered</span>
            </label>
          </div>
        </div><!--end row-->

      </div>
    </div>
  </div>
  <!--start switcher-->

  <!--bootstrap js-->
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <!--plugins-->
  <script src="assets/js/jquery.min.js"></script>
  <!--plugins-->
  <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <script src="assets/plugins/metismenu/metisMenu.min.js"></script>
  <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
  <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="assets/plugins/peity/jquery.peity.min.js"></script>
  <script>
    $(".data-attributes span").peity("donut")
  </script>
  <script src="assets/js/dashboard2.js"></script>
  <script src="assets/js/main.js"></script>

  <!-- <script>
$(document).ready(function() {
    // Initially hide the cards
    $('.card').hide();

    // Fade in the cards
    $('.card').fadeIn(1000); // Adjust the duration as needed (1000ms = 1 second)
});


</script> -->
<script>
    window.addEventListener('load', function() {
        const components = document.querySelectorAll('.fade-in-component');
        components.forEach(component => {
            component.classList.add('fade-in'); // Add fade-in class to each component
        });
    });
</script>


</body>

</html>