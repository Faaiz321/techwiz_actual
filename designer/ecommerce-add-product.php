

<?php






?>






<?php
<<<<<<< HEAD
$servername = "localhost";
$username = "root";
$password = "";
$databse = "techwiz";
=======
// // TO BE UNCOMMENTED LATER
// include('connections/addproductconn.php');
>>>>>>> 7c9d2afe17434b899771fb30f35d08bc29ea6311

// if (isset($_POST['submit'])) {
//     // Gather form data
//     $product_title = $_POST['product_title'];
//     $price = $_POST['price'];
//     $product_description = $_POST['product_description'];
//     $category = $_POST['category'];
//     $color = $_POST['color'];
//     $brand = $_POST['brand'];
//     $size = $_POST['size'];

<<<<<<< HEAD
if (!$conn) {
  die("Failed to connect");
}

if(isset($_POST['add'])){
  $product_title =$_POST['product_title'];
  $product_description =$_POST['product_description'];
  $images=$_POST['files'];
  $category =$_POST['category'];
  $color=$_POST['color'];
  $brand=$_POST['brand'];
  $size=$_POST['size'];

  



}

$sql="INSERT INTO `products`(`product_id`, `product_name`, `price`, `product_image`, `description`, `category`, `color`, `brand`, `size`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','','')"
=======
//     $file_name = $_FILES['product_image']['name'];
//     $tempname = $_FILES['product_image']['tmp_name'];
//     $folder = "assets/images/" . $file_name;

//     // Move uploaded file
//     if (move_uploaded_file($tempname, $folder)) {
//         $msg = "Image uploaded successfully.";
//     } else {
//         $msg = "Failed to upload image.";
//         echo $msg; // Display error message
//         exit; // Stop execution if image upload fails
//     }
>>>>>>> 7c9d2afe17434b899771fb30f35d08bc29ea6311

//     // Prepare SQL statement to insert product data
//     $sql = "INSERT INTO `products`(`product_name`, `price`, `product_image`, `description`, `category`, `color`, `brand`, `size`) 
//             VALUES ('$product_title', '$price', '$file_name', '$product_description', '$category', '$color', '$brand', '$size')";
    
//     // Execute the query
//     if (mysqli_query($conn, $sql)) {
//         echo "Product added successfully.";
//     } else {
//         echo "Error adding product: " . mysqli_error($conn);
//     }
// }
?>

>>>>>>> 76fd659e1c2285a5c58bc8a3938216226f3ac248
<!doctype html>





<html lang="en" data-bs-theme="blue-theme">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Maxton | Bootstrap 5 Admin Dashboard Template</title>
  <!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png">
  <!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet">
	<script src="assets/js/pace.min.js"></script>

  <!--plugins-->
  <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/plugins/metismenu/metisMenu.min.css">
  <link href="assets/plugins/fancy-file-uploader/fancy_fileupload.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/plugins/metismenu/mm-vertical.css">
  <link rel="stylesheet" type="text/css" href="assets/plugins/simplebar/css/simplebar.css">
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
          <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
          class="material-icons-outlined">power_settings_new</i>Logout</a>
        </div>
      </li>
    </ul>

  </nav>
</header>
<!--end top header-->


<!--navigation-->
<div class="primary-menu">
  <nav class="navbar navbar-expand-xl align-items-center">
   <div class="offcanvas offcanvas-start w-260" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
   <div class="offcanvas-header border-bottom h-70">
     <div class="d-flex align-items-center gap-2">
       <div class="">
         <img src="assets/images/logo-icon.png" class="logo-icon" width="45" alt="logo icon">
       </div>
       <div class="">
         <h4 class="logo-text">Maxton</h4>
       </div>
     </div>
     <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="offcanvas">
      <i class="material-icons-outlined">close</i>
     </a>
   </div>
   <div class="offcanvas-body p-0">
     <ul class="navbar-nav align-items-center flex-grow-1">
     <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
         <div class="parent-icon"><i class="material-icons-outlined">home</i>
         </div>
         <div class="menu-title d-flex align-items-center">Dashboard</div>
         <div class="ms-auto dropy-icon"><i class='material-icons-outlined'>expand_more</i></div>
       </a>
       <ul class="dropdown-menu">
         <li><a class="dropdown-item" href="index.html"><i class='material-icons-outlined'>insights</i>Analysis</a></li>
         <li><a class="dropdown-item" href="index2.html"><i class='material-icons-outlined'>shopping_cart</i>eCommerce</a></li>
       </ul>
       </li>
       <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
         <div class="parent-icon"><i class='material-icons-outlined'>apps</i>
         </div>
         <div class="menu-title d-flex align-items-center">Apps & Pages</div>
         <div class="ms-auto dropy-icon"><i class='material-icons-outlined'>expand_more</i></div>
       </a>
       <ul class="dropdown-menu">
         <li><a class="dropdown-item" href="app-emailbox.html"><i class='material-icons-outlined'>email</i>Email</a></li>
         <li><a class="dropdown-item" href="app-chat-box.html"><i class='material-icons-outlined'>chat</i>Chat Box</a></li>
         <li><a class="dropdown-item" href="app-file-manager.html"><i class='material-icons-outlined'>folder</i>File Manager</a></li>
         <li><a class="dropdown-item" href="app-to-do.html"><i class='material-icons-outlined'>task</i>Todo</a></li>
         <li><a class="dropdown-item" href="app-invoice.html"><i class='material-icons-outlined'>description</i>Invoice</a></li>
         <li class="nav-item dropend">
         <a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"><i class='material-icons-outlined'>layers</i>Pages</a>
         <ul class="dropdown-menu submenu">
           <li class="nav-item dropend"><a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"><i class='material-icons-outlined'>navigate_next</i>Error</a>
             <ul class="dropdown-menu">
               <li><a class="dropdown-item" href="pages-error-403.html"><i class='material-icons-outlined'>navigate_next</i>403 Error</a></li>
               <li><a class="dropdown-item" href="pages-error-404.html"><i class='material-icons-outlined'>navigate_next</i>404 rror</a></li>
               <li><a class="dropdown-item" href="pages-error-505.html"><i class='material-icons-outlined'>navigate_next</i>505 rror</a></li>
               <li><a class="dropdown-item" href="pages-coming-soon.html"><i class='material-icons-outlined'>navigate_next</i>Coming Soon</a></li>
               <li><a class="dropdown-item" href="pages-starter-page.html"><i class='material-icons-outlined'>navigate_next</i>Blank Page</a></li>
               </ul>
           </li>
           <li><a class="dropdown-item" href="user-profile.html"><i class='material-icons-outlined'>navigate_next</i>User Profile</a></li>
           <li><a class="dropdown-item" href="timeline.html"><i class='material-icons-outlined'>navigate_next</i>Timeline</a></li>
           <li><a class="dropdown-item" href="faq.html"><i class='material-icons-outlined'>navigate_next</i>FAQ</a></li>
           <li><a class="dropdown-item" href="pricing-table.html"><i class='material-icons-outlined'>navigate_next</i>Pricing</a></li>
           </ul>
         </li>
       </ul>
       </li>
       <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
         <div class="parent-icon"><i class='material-icons-outlined'>note_alt</i>
         </div>
         <div class="menu-title d-flex align-items-center">Forms</div>
         <div class="ms-auto dropy-icon"><i class='material-icons-outlined'>expand_more</i></div>
       </a>
       <ul class="dropdown-menu">
         <li> <a class="dropdown-item" href="form-elements.html"><i class='material-icons-outlined'>source</i>Form Elements</a>
         </li>
         <li> <a class="dropdown-item" href="form-input-group.html"><i class='material-icons-outlined'>work_outline</i>Input Groups</a>
         </li>
         <li> <a class="dropdown-item" href="form-radios-and-checkboxes.html"><i class='material-icons-outlined'>timeline</i>Radios & Checkboxes</a>
         </li>
         <li> <a class="dropdown-item" href="form-layouts.html"><i class='material-icons-outlined'>label</i>Forms Layouts</a>
         </li>
         <li> <a class="dropdown-item" href="form-validations.html"><i class='material-icons-outlined'>tips_and_updates</i>Form Validation</a>
         </li>
         <li> <a class="dropdown-item" href="form-wizard.html"><i class='material-icons-outlined'>dns</i>Form Wizard</a>
         </li>
         <li> <a class="dropdown-item" href="form-file-upload.html"><i class='material-icons-outlined'>hourglass_empty</i>File Upload</a>
         </li>
         <li> <a class="dropdown-item" href="form-date-time-pickes.html"><i class='material-icons-outlined'>backup</i>Date Pickers</a>
         </li>
         <li> <a class="dropdown-item" href="form-select2.html"><i class='material-icons-outlined'>integration_instructions</i>Select2</a>
         </li>
         <li> <a class="dropdown-item" href="form-repeater.html"><i class='material-icons-outlined'>mark_as_unread</i>Form Repeater</a>
         </li>
       </ul>
       </li>
       <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
         <div class="parent-icon"><i class='material-icons-outlined'>account_circle</i>
         </div>
         <div class="menu-title d-flex align-items-center">Authentication</div>
         <div class="ms-auto dropy-icon"><i class='material-icons-outlined'>expand_more</i></div>
       </a>
       <ul class="dropdown-menu">
         <li class="nav-item dropend">
         <a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"><i class='material-icons-outlined'>event</i>Basic</a>
         <ul class="dropdown-menu submenu">
           <li><a class="dropdown-item" href="auth-basic-login.html"><i class='material-icons-outlined'>navigate_next</i>Sign In</a></li>
           <li><a class="dropdown-item" href="auth-basic-register.html"><i class='material-icons-outlined'>navigate_next</i>Sign Up</a></li>
           <li><a class="dropdown-item" href="auth-basic-forgot-password.html"><i class='material-icons-outlined'>navigate_next</i>Forgot Password</a></li>
           <li><a class="dropdown-item" href="auth-basic-reset-password.html"><i class='material-icons-outlined'>navigate_next</i>Reset Password</a></li>
           </ul>
         </li>
         <li class="nav-item dropend">
         <a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"><i class='material-icons-outlined'>perm_identity</i>Cover</a>
         <ul class="dropdown-menu submenu">
           <li><a class="dropdown-item" href="auth-cover-login.html"><i class='material-icons-outlined'>navigate_next</i>Sign In</a></li>
           <li><a class="dropdown-item" href="auth-cover-register.html"><i class='material-icons-outlined'>navigate_next</i>Sign Up</a></li>
           <li><a class="dropdown-item" href="auth-cover-forgot-password.html"><i class='material-icons-outlined'>navigate_next</i>Forgot Password</a></li>
           <li><a class="dropdown-item" href="auth-cover-reset-password.html"><i class='material-icons-outlined'>navigate_next</i>Reset Password</a></li>
           </ul>
         </li>
         <li class="nav-item dropend">
         <a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"><i class='material-icons-outlined'>assignment</i>Boxed</a>
         <ul class="dropdown-menu submenu">
           <li><a class="dropdown-item" href="auth-boxed-login.html"><i class='material-icons-outlined'>navigate_next</i>Sign In</a></li>
           <li><a class="dropdown-item" href="auth-boxed-register.html"><i class='material-icons-outlined'>navigate_next</i>Sign Up</a></li>
           <li><a class="dropdown-item" href="auth-boxed-forgot-password.html"><i class='material-icons-outlined'>navigate_next</i>Forgot Password</a></li>
           <li><a class="dropdown-item" href="auth-boxed-reset-password.html"><i class='material-icons-outlined'>navigate_next</i>Reset Password</a></li>
           </ul>
         </li>
       </ul>
       </li>
       <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
         <div class="parent-icon"><i class='material-icons-outlined'>medical_services</i>
         </div>
         <div class="menu-title d-flex align-items-center">UI Elements</div>
         <div class="ms-auto dropy-icon"><i class='material-icons-outlined'>expand_more</i></div>
       </a>
       <ul class="dropdown-menu">
         <li class="nav-item dropend">
          <a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"><i class='material-icons-outlined'>widgets</i>Widgets</a>
          <ul class="dropdown-menu submenu">
            <li><a class="dropdown-item" href="widgets-data.html"><i class='material-icons-outlined'>navigate_next</i>Data</a></li>
            <li><a class="dropdown-item" href="widgets-static.html"><i class='material-icons-outlined'>navigate_next</i>Static</a></li>
            </ul>
          </li>
         <li class="nav-item dropend">
         <a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"><i class='material-icons-outlined'>shopping_bag</i>eCommerce</a>
         <ul class="dropdown-menu submenu">
           <li><a class="dropdown-item" href="ecommerce-products.html"><i class='material-icons-outlined'>navigate_next</i>Products</a></li>
           <li><a class="dropdown-item" href="ecommerce-add-product.html"><i class='material-icons-outlined'>navigate_next</i>Add Product</a></li>
           <li><a class="dropdown-item" href="ecommerce-customers.html"><i class='material-icons-outlined'>navigate_next</i>Customer</a></li>
           <li><a class="dropdown-item" href="ecommerce-customer-details.html"><i class='material-icons-outlined'>navigate_next</i>Customer Details</a></li>
           <li><a class="dropdown-item" href="ecommerce-orders.html"><i class='material-icons-outlined'>navigate_next</i>Orders</a></li>
           <li><a class="dropdown-item" href="ecommerce-order-details.html"><i class='material-icons-outlined'>navigate_next</i>Order Details</a></li>
           </ul>
         </li>
         <li class="nav-item dropend">
         <a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"><i class='material-icons-outlined'>free_breakfast</i>Components</a>
         <ul class="dropdown-menu scroll-menu">
           <li><a class="dropdown-item" href="component-alerts.html"><i class='material-icons-outlined'>navigate_next</i>Alerts</a></li>
           <li><a class="dropdown-item" href="component-accordions.html"><i class='material-icons-outlined'>navigate_next</i>Accordions</a></li>
           <li><a class="dropdown-item" href="component-badges.html"><i class='material-icons-outlined'>navigate_next</i>Badges</a></li>
           <li><a class="dropdown-item" href="component-buttons.html"><i class='material-icons-outlined'>navigate_next</i>Buttons</a></li>
           <li><a class="dropdown-item" href="cards.html"><i class='material-icons-outlined'>navigate_next</i>Cards</a></li>
           <li><a class="dropdown-item" href="component-carousels.html"><i class='material-icons-outlined'>navigate_next</i>Carousels</a></li>
           <li><a class="dropdown-item" href="component-media-object.html"><i class='material-icons-outlined'>navigate_next</i>Media Objects</a></li>
           <li><a class="dropdown-item" href="component-modals.html"><i class='material-icons-outlined'>navigate_next</i>Modals</a></li>
           <li><a class="dropdown-item" href="component-navs-tabs.html"><i class='material-icons-outlined'>navigate_next</i>Navs & Tabs</a></li>
           <li><a class="dropdown-item" href="component-navbar.html"><i class='material-icons-outlined'>navigate_next</i>Navbar</a></li>
           <li><a class="dropdown-item" href="component-paginations.html"><i class='material-icons-outlined'>navigate_next</i>Pagination</a></li>
           <li><a class="dropdown-item" href="component-popovers-tooltips.html"><i class='material-icons-outlined'>navigate_next</i>Popovers & Tooltips</a></li>
           <li><a class="dropdown-item" href="component-progress-bars.html"><i class='material-icons-outlined'>navigate_next</i>Progress</a></li>
           <li><a class="dropdown-item" href="component-spinners.html"><i class='material-icons-outlined'>navigate_next</i>Spinners</a></li>
           <li><a class="dropdown-item" href="component-notifications.html"><i class='material-icons-outlined'>navigate_next</i>Notifications</a></li>
           <li><a class="dropdown-item" href="component-avtars-chips.html"><i class='material-icons-outlined'>navigate_next</i>Avatrs & Chips</a></li>
           </ul>
         </li>
         <li class="nav-item dropend">
         <a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"><i class='material-icons-outlined'>cases</i>Icons</a>
         <ul class="dropdown-menu submenu">
           <li><a class="dropdown-item" href="icons-line-icons.html"><i class='material-icons-outlined'>navigate_next</i>Line Icons</a></li>
           <li><a class="dropdown-item" href="icons-boxicons.html"><i class='material-icons-outlined'>navigate_next</i>Boxicons</a></li>
           <li><a class="dropdown-item" href="icons-feather-icons.html"><i class='material-icons-outlined'>navigate_next</i>Feather Icons</a></li>
           </ul>
         </li>
       </ul>
       </li>
       <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
         <div class="parent-icon"><i class='material-icons-outlined'>pie_chart</i>
         </div>
         <div class="menu-title d-flex align-items-center">Charts</div>
         <div class="ms-auto dropy-icon"><i class='material-icons-outlined'>expand_more</i></div>
       </a>
       <ul class="dropdown-menu">
         <li><a class="dropdown-item" href="charts-apex-chart.html"><i class='material-icons-outlined'>leaderboard</i></i>Apex</a></li>
         <li><a class="dropdown-item" href="charts-chartjs.html"><i class='material-icons-outlined'>analytics</i>Chartjs</a></li>
         <li class="nav-item dropend">
         <a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"><i class='material-icons-outlined'>pie_chart</i>Maps</a>
         <ul class="dropdown-menu submenu">
           <li><a class="dropdown-item" href="map-google-maps.html"><i class='material-icons-outlined'>navigate_next</i>Google Maps</a></li>
           <li><a class="dropdown-item" href="map-vector-maps.html"><i class='material-icons-outlined'>navigate_next</i>Vector Maps</a></li>
          </ul>
         </li>
       </ul>
       </li>
       <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
         <div class="parent-icon"><i class='material-icons-outlined'>table_chart</i>
         </div>
         <div class="menu-title d-flex align-items-center">Tables</div>
         <div class="ms-auto dropy-icon"><i class='material-icons-outlined'>expand_more</i></div>
       </a>
       <ul class="dropdown-menu">
         <li><a class="dropdown-item" href="table-basic-table.html"><i class='material-icons-outlined'>navigate_next</i>Basic Table</a></li>
         <li><a class="dropdown-item" href="table-datatable.html"><i class='material-icons-outlined'>navigate_next</i>Data Table</a></li>
       </ul>
       </li>
     </ul>
   </div>
   </div>
 </nav>
</div>
<!--end navigation-->


  <!--start main wrapper-->
  <main class="main-wrapper">
    <div class="main-content">
      <!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Components</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Starter Page</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->

<<<<<<< HEAD
          <div class="row">
            <div class="col-12 col-lg-8">
              <div class="card">
                <div class="card-body">
                  <div class="mb-4">
                    <h5 class="mb-3">Product Title</h5>
                    <input type="text" class="form-control" name ="product_title"placeholder="write title here....">
                  </div>
                  <div class="mb-4">
                    <h5 class="mb-3">Product Description</h5>
                    <textarea class="form-control" cols="4" rows="6" name="product_description" placeholder="write a description here.."></textarea>
                  </div>
                  <div class="mb-4">
                    <h5 class="mb-3">Display images</h5>
                    <input id="fancy-file-upload" type="file" name="img" accept=".jpg, .png, image/jpeg, image/png" multiple>
                  </div>
                  <div class="mb-4">
                    <h5 class="mb-3">Inventory</h5>
                    
                    <div class="row g-3">
                      <div class="col-12 col-lg-3">
                        <div class="nav flex-column nav-pills border rounded vertical-pills overflow-hidden">
                          <button class="nav-link px-4 rounded-0" data-bs-toggle="pill" data-bs-target="#Pricing" type="button"><i class="bi bi-tag-fill me-2"></i>Pricing</button>
                          <button class="nav-link px-4 rounded-0" data-bs-toggle="pill" data-bs-target="#Restock" type="button"><i class="bi bi-box-seam-fill me-2"></i>Restock</button>
                          <button class="nav-link active px-4 rounded-0" data-bs-toggle="pill" data-bs-target="#Shipping" type="button"><i class="bi bi-truck-front-fill me-2"></i>Shipping</button>
                          <button class="nav-link px-4 rounded-0" data-bs-toggle="pill" data-bs-target="#GlobalDelivery" type="button"><i class="bi bi-globe me-2"></i>Global Delivery</button>
                          <button class="nav-link px-4 rounded-0" data-bs-toggle="pill" data-bs-target="#Attributes" type="button"><i class="bi bi-hdd-rack-fill me-2"></i>Attributes</button>
                          <button class="nav-link px-4 rounded-0" data-bs-toggle="pill" data-bs-target="#Advanced" type="button"><i class="bi bi-handbag-fill me-2"></i>Advanced</button>
                        </div>
                      </div>
                      <div class="col-12 col-lg-9">
                        <div class="tab-content">
                          <div class="tab-pane fade" id="Pricing">
                            <div class="row g-3">
                              <div class="col-12 col-lg-6">
                                <h6 class="mb-2">Regular price</h6>
                                <input class="form-control" type="text" placeholder="$$$">
                              </div>
                              <div class="col-12 col-lg-6">
                                <h6 class="mb-2">Sale price</h6>
                                <input class="form-control" type="text" placeholder="$$$">
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="Restock">
                            <h6 class="mb-3">Add to Stock</h6>
                            <div class="row g-3">
                              <div class="col-sm-7">
                                <input class="form-control" type="number" placeholder="Quantity">
                              </div>
                              <div class="col-sm">
                                <button class="btn btn-outline-primary"><i class="bi bi-check2 me-2"></i>Confirm</button>
                              </div>
                            </div>
                            <table class="mt-3">
                              <thead>
                                <tr>
                                  <th style="width: 200px;"></th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="text-1000 py-1">Product in stock now:</td>
                                  <td class="text-700 fw-semi-bold py-1">$2,059<button class="btn p-0 ms-2" type="button"><i class="bi bi-arrow-clockwise"></i></button></td>
                                </tr>
                                <tr>
                                  <td class="text-1000 py-1">Product in transit:</td>
                                  <td class="text-700 fw-semi-bold py-1">3000</td>
                                </tr>
                                <tr>
                                  <td class="text-1000 py-1">Last time restocked:</td>
                                  <td class="text-700 fw-semi-bold py-1">25th March, 2020</td>
                                </tr>
                                <tr>
                                  <td class="text-1000 py-1">Total stock over lifetime:</td>
                                  <td class="text-700 fw-semi-bold py-1">50,000</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="tab-pane fade show active" id="Shipping">
                            <div class="d-flex flex-column h-100">
                              <h6 class="mb-3">Shipping Type</h6>
                              <div class="flex-1">
                                <div class="mb-4">
                                  <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="shippingRadio" id="fullfilledBySeller">
                                    <label class="form-check-label fw-bold" for="fullfilledBySeller">Fullfilled by Seller</label></div>
                                  <div class="ps-4">
                                    <p class="mb-0">You’ll be responsible for product delivery. <br>Any damage or delay during shipping may cost you a Damage fee.</p>
                                  </div>
                                </div>
                                <div class="mb-4">
                                  <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="shippingRadio" id="fullfilledByPhoenix" checked="checked">
                                    <label class="form-check-label fw-bold d-flex align-items-center" for="fullfilledByPhoenix">Fullfilled by Admin <span class="badge bg-warning text-dark ms-2">Recommended</span></label></div>
                                  <div class="ps-4">
                                    <p class="mb-0">Your product, Our responsibility.<br>For a measly fee, we will handle the delivery process for you.</p>
                                  </div>
                                </div>
                              </div>
                              <p class="fs--1 fw-semi-bold mb-0">See our <a class="fw-bold" href="#!">Delivery terms and conditions </a>for details.</p>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="GlobalDelivery">
                            <div class="d-flex flex-column h-100">
                              <h6 class="mb-3">Global Delivery</h6>
                              <div class="flex-1">
                                <div class="mb-4">
                                  <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="shippingRadio" id="Worldwidedelivery">
                                    <label class="form-check-label fw-bold" for="Worldwidedelivery">Worldwide delivery</label>
                                  </div>
                                  <div class="ps-4">
                                    <p class="mb-0">Only available with Shipping method: <a href="#!">Fullfilled by Admin</a></p>
                                  </div>
                                </div>
                                <div class="mb-4">
                                  <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="shippingRadio" id="SelectedCountries" checked="checked">
                                    <label class="form-check-label fw-bold d-flex align-items-center" for="SelectedCountries">Selected Countries</label>
                                  </div>
                                  <div class="ps-4">
                                    <input class="form-control" type="text" placeholder="Type Country name">
                                  </div>
                                </div>
                                <div class="mb-0">
                                  <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="shippingRadio" id="Localdelivery">
                                    <label class="form-check-label fw-bold" for="Localdelivery">Local delivery</label>
                                  </div>
                                  <div class="ps-4">
                                    <p class="mb-0">Only available with Shipping method: <a href="#!">Fullfilled by Admin</a></p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="Attributes">
                            <h6 class="mb-3">Attributes</h6>
                            <div class="form-check">
                              <input class="form-check-input" id="fragileCheck" type="checkbox">
                              <label class="form-check-label text-900 fs-0" for="fragileCheck">Fragile Product</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" id="biodegradableCheck" type="checkbox">
                              <label class="form-check-label text-900 fs-0" for="biodegradableCheck">Biodegradable</label>
                            </div>
                            <div class="mb-3">
                              <div class="form-check"><input class="form-check-input" id="frozenCheck" type="checkbox" checked="checked">
                                <label class="form-check-label text-900 fs-0" for="frozenCheck">Frozen Product</label>
                                <input class="form-control" type="text" placeholder="Max. allowed Temperature" style="max-width: 350px;">
                              </div>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" id="productCheck" type="checkbox" checked="checked">
                              <label class="form-check-label text-900 fs-0" for="productCheck">Expiry Date of Product</label>
                              <input class="form-control" id="inventory" type="date">
                            </div>
                          </div>
                          <div class="tab-pane fade" id="Advanced">
                            <h6 class="mb-3">Advanced</h6>
                            <div class="row g-3">
                              <div class="col-12 col-lg-6">
                                <label class="mb-2">Product ID Type</label>
                                <select class="form-select">
                                  <option selected="selected">ISBN</option>
                                  <option value="1">UPC</option>
                                  <option value="2">EAN</option>
                                  <option value="3">JAN</option>
                                </select>
                              </div>
                              <div class="col-12 col-lg-6">
                                <label class="mb-2">Product ID</label>
                                <input class="form-control" type="text" placeholder="ISBN Number">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                     </div>
                   </div> 
                 </div>
              </div>
          </div> 
          <div class="col-12 col-lg-4">
             <div class="card">
                <div class="card-body">
                   <div class="d-flex align-items-center gap-3">
                    <button type="button" class="btn btn-outline-danger flex-fill"><i class="bi bi-x-circle me-2"></i>Discard</button>
                    <button type="button" class="btn btn-outline-success flex-fill"><i class="bi bi-cloud-download me-2"></i>Save Draft</button>
                    <button type="button" class="btn btn-outline-primary flex-fill"><i class="bi bi-send me-2"></i>Publish</button>
                   </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                   <h5 class="mb-3">Organize</h5>
                      <div class="row g-3">
                          <div class="col-12">
                            <label for="AddCategory" name="category" class="form-label">Category</label>
                            <select class="form-select" id="AddCategory">
                              <option value="0">Topwear</option>
                              <option value="1">Bottomwear</option>
                              <option value="2">Casual Tshirt</option>
                              <option value="3">Electronic</option>
                            </select>
                          </div>
                          <div class="col-12">
                            <label for="Collection" class="form-label">Collection</label>
                            <input type="text" class="form-control" name="collection" id="Collection" placeholder="Collection">
                          </div>                         
                        </div><!--end row-->
                     </div>
                </div>
=======
<!-- form start -->
<form action="#" id="addProductForm" class="needs-validation" novalidate method="post" enctype="multipart/form-data">
>>>>>>> 7c9d2afe17434b899771fb30f35d08bc29ea6311

  <div class="row">
    <div class="col-12 col-lg-8">
      <div class="card">
        <div class="card-body">
          <div class="mb-4">
            <h5 class="mb-3">Product Title</h5>
            <input type="text" class="form-control" name="product_title" placeholder="write title here...." required>
          </div>
          <div class="mb-4">
            <h5 class="mb-3">Product Description</h5>
            <textarea class="form-control" cols="4" rows="6" name="product_description" placeholder="write a description here.." required></textarea>
          </div>
          
          <!-- IMAGE UPLOAD -->
          <div class="mb-4">
            <h5 class="mb-3">Display Images</h5>
            <input id="fancy-file-upload" type="file" name="product_image" accept=".jpg, .png, image/jpeg, image/png" multiple required>
          </div>
          <!-- IMAGE UPLOAD -->

          <div class="mb-4">
            <div class="row g-3">
              
              <div class="col-12 col-lg-9">
                <div class="tab-content">
                  <div class="tab-pane fade" id="Pricing">
                    <div class="row g-3">
                      <div class="col-12 col-lg-6">
                        <h6 class="mb-2">Regular Price</h6>
                        <input class="form-control" type="text" name="price" placeholder="$$$" required>
                      </div>
                      <div class="col-12 col-lg-6">
                        <h6 class="mb-2">Sale Price</h6>
                        <input class="form-control" type="text" placeholder="$$$">
                      </div>
                    </div>
                  </div>
                  <!-- Additional tab contents go here -->
                </div>
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div> 

    <div class="col-12 col-lg-4">
      <div class="card">
       
      </div>

      <div class="card">
        <div class="card-body">
          <h5 class="mb-3">Organize</h5>
          <div class="row g-3">
            <div class="col-12">
              <label for="AddCategory" class="form-label">Category</label>
              <select class="form-select" id="AddCategory" name="category">
                <option value="0">Topwear</option>
                <option value="1">Bottomwear</option>
                <option value="2">Casual T-shirt</option>
                <option value="3">Electronic</option>
              </select>
            </div>
            <div class="col-12">
              <label for="Collection" class="form-label">Collection</label>
              <input type="text" class="form-control" name="collection" id="Collection" placeholder="Collection">
            </div>                         
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h5 class="mb-3">Variants</h5>
            <div class="row g-3">
              <div class="col-12">
                <label for="Brand" class="form-label">Brand</label>
                <input type="text" class="form-control" name="brand" id="Brand" placeholder="Brand">
              </div>
              <div class="col-12">
                <label for="Color" class="form-label">Color</label>
                <input type="text" class="form-control" name="color" id="Color" placeholder="Color">
              </div>
              <div class="col-12">
                <label for="Size" class="form-label">Size</label>
                <input type="text" class="form-control" name="size" id="Size" placeholder="Size">
              </div>
              <div class="col-12">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="Price">
              </div>
              <div class="col-12">
              <div class="col-12">
  <div class="d-grid">
    <button type="submit" name="add_variant" class="btn btn-primary">Add Variants</button>
  </div>
</div>
              </div>
            </div>
          </div>
        </div>
      </div>                
    </div><!--end row-->
</form>
<!-- form end  -->

  </main>
  <!--end main wrapper-->


    <!--start overlay-->
    <div class="overlay btn-toggle"></div>
    <!--end overlay-->

     <!--start footer-->
     <footer class="page-footer">
      <p class="mb-0">Copyright © 2024. All right reserved.</p>
    </footer>
    <!--top footer-->

  <!--start cart-->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCart">
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
  <button class="btn btn-grd btn-grd-primary position-fixed bottom-0 end-0 m-3 d-flex align-items-center gap-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop">
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
            <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="LightTheme">
              <span class="material-icons-outlined">light_mode</span>
              <span>Light</span>
            </label>
          </div>
          <div class="col-12 col-xl-6">
            <input type="radio" class="btn-check" name="theme-options" id="DarkTheme">
            <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="DarkTheme">
              <span class="material-icons-outlined">dark_mode</span>
              <span>Dark</span>
            </label>
          </div>
          <div class="col-12 col-xl-6">
            <input type="radio" class="btn-check" name="theme-options" id="SemiDarkTheme">
            <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="SemiDarkTheme">
              <span class="material-icons-outlined">contrast</span>
              <span>Semi Dark</span>
            </label>
          </div>
          <div class="col-12 col-xl-6">
            <input type="radio" class="btn-check" name="theme-options" id="BoderedTheme">
            <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="BoderedTheme">
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
  <script src="assets/plugins/fancy-file-uploader/jquery.ui.widget.js"></script>
	<script src="assets/plugins/fancy-file-uploader/jquery.fileupload.js"></script>
	<script src="assets/plugins/fancy-file-uploader/jquery.iframe-transport.js"></script>
	<script src="assets/plugins/fancy-file-uploader/jquery.fancy-fileupload.js"></script>
  <script>
		$('#fancy-file-upload').FancyFileUpload({
			params: {
				action: 'fileuploader'
			},
			maxfilesize: 1000000
		});
	</script>
  <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="assets/js/main.js"></script>


</body>

</html>