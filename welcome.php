<!doctype html>
<html lang="en" data-bs-theme="blue-theme">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Maxton | Creative Bootstrap5 Software Landing Page</title>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png">
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet">
  <script src="assets/js/pace.min.js"></script>

  <!--plugins-->
  <link href="assets/plugins/OwlCarousel/css/owl.carousel.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/plugins/lightbox/dist/css/glightbox.min.css">
  <!--bootstrap css-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
  <!--main css-->
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
  <link href="sass/main.css" rel="stylesheet">
  <link href="assets/css/horizontal-menu.css" rel="stylesheet">
  <link href="sass/dark-theme.css" rel="stylesheet">
  <link href="sass/semi-dark.css" rel="stylesheet">
  <link href="sass/blue-theme.css" rel="stylesheet">
  <link href="sass/bordered-theme.css" rel="stylesheet">
</head>

<body>

  <!--start header-->
  <header class="top-header" id="Parent_Scroll_Div">
    <nav class="navbar navbar-expand-xl align-items-center gap-3 container px-4 px-lg-0">
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

      <div class="offcanvas offcanvas-start w-260" tabindex="-1" id="offcanvasNavbar">
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
        <div class="offcanvas-body p-0 primary-menu">
          <ul class="navbar-nav align-items-center mx-auto gap-0 gap-xl-1">
            <li class="nav-item">
              <a class="nav-link" href="#home">
                <div class="parent-icon"><i class="material-icons-outlined">home</i>
                </div>
                <div class="menu-title">Home</div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#About">
                <div class="parent-icon"><i class="material-icons-outlined">info</i>
                </div>
                <div class="menu-title">About</div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Services">
                <div class="parent-icon"><i class="material-icons-outlined">work_outline</i>
                </div>
                <div class="menu-title">Services</div>
              </a>
            </li>
          

          
          </ul>
        </div>
      </div>
     
    </nav>
  </header>
  <!--end top header-->


  <!--start main wrapper-->
  <main class="main-wrapper" data-bs-spy="scroll" data-bs-target="#Parent_Scroll_Div" data-bs-smooth-scroll="false" tabindex="0">
    <div class="main-content">

      <!--start banner-->
      <section class="py-5" id="home">
        <div class="container py-4 px-4 px-lg-0">
          <div class="row align-items-center justify-content-center g-4">
            
          </div>

          <div class=" d-flex align-items-center justify-content-center">
            <div class="container-fluid my-5 my-lg-0">
              <div class="row">
                 <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-4 mx-auto">
                  <div class="card rounded-4 mb-0 border-top border-4 border-primary border-gradient-1">
                    <div class="card-body p-5">
                        <img src="assets/images/logo1.png" class="mb-4" width="145" alt="">
                        <h4 class="fw-bold">Get Started Now</h4>
                        <p class="mb-0">Enter your credentials to login your account</p>
      
                        <div class="form-body my-5">
                          <form class="row g-3">
                            
                           
                            
                            
                            <div class="col-12">
                              <div class="d-grid">
                                
                                     <button type="submit" class="btn btn-grd-primary">

                                     <a href="auth-basic-login.php">
                                     Login
                                     </a>
                                       </button>
                                
                                
                              </div>
                            </div>
                            <div class="col-12"></div>
                              <div class="d-grid">
                                <button type="submit" class="btn btn-grd-primary"><a href="auth-basic-register.php">Register</a></button>
                              </div>
                            </div>
                           
                            <div class="separator section-padding">
                              <div class="line"></div>
                              <p class="mb-0 fw-bold">OR SIGN IN WITH</p>
                              <div class="line"></div>
                            </div> 




                            <div class="d-flex gap-3 justify-content-center mt-2">
                              <a href="javascript:;" class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-grd-danger">
                                <i class="bi bi-google fs-5 text-white"></i>
                              </a>
                              <a href="javascript:;" class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-grd-deep-blue">
                                <i class="bi bi-facebook fs-5 text-white"></i>
                              </a>
                              <a href="javascript:;" class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-grd-info">
                                <i class="bi bi-linkedin fs-5 text-white"></i>
                              </a>
                              <a href="javascript:;" class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-grd-royal">
                                <i class="bi bi-github fs-5 text-white"></i>
                              </a>
                            </div>  

                          </form>
                        </div>
      
      
                   
                    </div>
                  </div>
                 </div>
              </div><!--end row-->
           </div>
          </div>
          <!--authentication-->
      


        </div>
      </section>
      <!--end banner-->


      <!--start about us-->
      <section class="py-5 bg-section" id="About">
        <div class="container py-4 px-4 px-lg-0">
          <div class="section-title text-center mb-5">
            <h1 class="mb-0 section-title-name">About Us</h1>
          </div>
          <div class="row g-4">
            <div class="col-12 col-xl-6">
              <h6 class="text-uppercase mb-3">Who We Are</h6>
              <h2 class="mb-3">Maximizing Potential through Innovative Strategies.</h2>
              <p class="mb-3">At [Your Company Name], we believe that every space has a story, and we’re here to help you tell yours. Founded in [Year], our firm has been dedicated to transforming ordinary spaces into extraordinary environments that reflect your personality and enhance your lifestyle.
              </p>
              <div class="d-flex flex-column gap-2">
                <p class="d-flex align-items-start gap-3 mb-0"><i
                    class="material-icons-outlined fs-5">check_circle</i>Concept Development: Crafting a vision that aligns with your style and needs.
                  dignissimos ducimus blanditiis</p>
                <p class="d-flex align-items-start gap-3 mb-0"><i
                    class="material-icons-outlined fs-5">check_circle</i>Space Planning: Maximizing functionality while maintaining aesthetic appeal.
                  indignation </p>
                <p class="d-flex align-items-start gap-3 mb-0"><i
                    class="material-icons-outlined fs-5">check_circle</i>Material and Finish Selection: Choosing high-quality materials that complement your design.
                  untrammelled</p>
                <p class="d-flex align-items-start gap-3 mb-0"><i
                    class="material-icons-outlined fs-5">check_circle</i>NProject Management: Overseeing every detail to ensure timely and on-budget completion.</p>
              </div>
              
            </div>
            <div class="col-12 col-xl-6">
              <!-- <img src="assets/images/gallery/24.png" class="img-fluid img-thumbnail rounded-4 bg-grd-warning" alt=""> -->
              <img src="assets/images/banners/widget-1.png" class="img-fluid img-thumbnail rounded-4 bg-grd-warning"
                alt="">
            </div>
          </div><!--end row-->

          <div class="mt-5 clients">
            <h3 class="d-none">Brands</h3>
            <div class="clients-grid py-3">
              <div class="clients-shops owl-carousel owl-theme">
                <div class="item">
                  <div class="p-4 rounded-4 card mb-0">
                    <a href="javascript:;">
                      <img src="assets/images/clients/01.png" class="img-fluid" alt="...">
                    </a>
                  </div>
                </div>
                <div class="item">
                  <div class="p-4 rounded-4 card mb-0">
                    <a href="javascript:;">
                      <img src="assets/images/clients/02.png" class="img-fluid" alt="...">
                    </a>
                  </div>
                </div>
                <div class="item">
                  <div class="p-4 rounded-4 card mb-0">
                    <a href="javascript:;">
                      <img src="assets/images/clients/03.png" class="img-fluid" alt="...">
                    </a>
                  </div>
                </div>
                <div class="item">
                  <div class="p-4 rounded-4 card mb-0">
                    <a href="javascript:;">
                      <img src="assets/images/clients/04.png" class="img-fluid" alt="...">
                    </a>
                  </div>
                </div>
                <div class="item">
                  <div class="p-4 rounded-4 card mb-0">
                    <a href="javascript:;">
                      <img src="assets/images/clients/05.png" class="img-fluid" alt="...">
                    </a>
                  </div>
                </div>
                <div class="item">
                  <div class="p-4 rounded-4 card mb-0">
                    <a href="javascript:;">
                      <img src="assets/images/clients/06.png" class="img-fluid" alt="...">
                    </a>
                  </div>
                </div>
                <div class="item">
                  <div class="p-4 rounded-4 card mb-0">
                    <a href="javascript:;">
                      <img src="assets/images/clients/07.png" class="img-fluid" alt="...">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--end about us-->


      <!--start services-->
      <section class="py-5" id="Services">
        <div class="container py-4 px-4 px-lg-0">
          <div class="section-title text-center mb-5">
            <h1 class="mb-0 section-title-name">Services</h1>
          </div>
          <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4">
            <div class="col d-flex">
              <div class="card rounded-4 mb-0 w-100">
                <div class="card-body text-center p-4">
                  <div class="d-flex flex-column gap-4">
                    <div
                      class="d-flex align-items-center justify-content-center rounded-circle wh-64 bg-grd-primary text-white flex-shrink-0 mx-auto">
                      <i class="material-icons-outlined fs-2">favorite_border</i>
                    </div>
                    <div class="">
                      <h5>Asperiores Commodit</h5>
                      <p class="mb-0">Non et temporibus minus omnis sed dolor esse consequatur.
                        Cupiditate sed error ea fuga sit provident adipisci neque.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col d-flex">
              <div class="card rounded-4 mb-0 w-100">
                <div class="card-body text-center p-4">
                  <div class="d-flex flex-column gap-4">
                    <div
                      class="d-flex align-items-center justify-content-center rounded-circle wh-64 bg-grd-danger text-white flex-shrink-0 mx-auto">
                      <i class="material-icons-outlined fs-2">card_membership</i>
                    </div>
                    <div class="">
                      <h5>Velit Doloremque</h5>
                      <p class="mb-0">Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis
                        aut.
                        Sed animi at autem alias eius labore.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col d-flex">
              <div class="card rounded-4 mb-0 w-100">
                <div class="card-body text-center p-4">
                  <div class="d-flex flex-column gap-4">
                    <div
                      class="d-flex align-items-center justify-content-center rounded-circle wh-64 bg-grd-warning text-white flex-shrink-0 mx-auto">
                      <i class="material-icons-outlined fs-2">language</i>
                    </div>
                    <div class="">
                      <h5>All Variations</h5>
                      <p class="mb-0">Provident nihil minus qui consequatur non omnis maiores.
                        Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col d-flex">
              <div class="card rounded-4 mb-0 w-100">
                <div class="card-body text-center p-4">
                  <div class="d-flex flex-column gap-4">
                    <div
                      class="d-flex align-items-center justify-content-center rounded-circle wh-64 bg-grd-branding text-white flex-shrink-0 mx-auto">
                      <i class="material-icons-outlined fs-2">account_balance</i>
                    </div>
                    <div class="">
                      <h5>Nesciunt Mete</h5>
                      <p class="mb-0">Provident nihil minus qui consequatur non omnis maiores.
                        Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col d-flex">
              <div class="card rounded-4 mb-0 w-100">
                <div class="card-body text-center p-4">
                  <div class="d-flex flex-column gap-4">
                    <div
                      class="d-flex align-items-center justify-content-center rounded-circle wh-64 bg-grd-success text-white flex-shrink-0 mx-auto">
                      <i class="material-icons-outlined fs-2">history</i>
                    </div>
                    <div class="">
                      <h5>Ledo Markt</h5>
                      <p class="mb-0">Ut excepturi voluptatem nisi sed. Quidem fuga consequatur.
                        Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col d-flex">
              <div class="card rounded-4 mb-0 w-100">
                <div class="card-body text-center p-4">
                  <div class="d-flex flex-column gap-4">
                    <div
                      class="d-flex align-items-center justify-content-center rounded-circle wh-64 bg-grd-deep-blue text-white flex-shrink-0 mx-auto">
                      <i class="material-icons-outlined fs-2">leaderboard</i>
                    </div>
                    <div class="">
                      <h5>Eosle Commodi</h5>
                      <p class="mb-0">Ut autem aut autem non a. Sint sint sit facilis nam iusto sint.
                        Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!--end row-->
        </div>
      </section>
      <!--end services-->


</body>

</html>