<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- favicon -->
    <link rel="icon" href="./assets/images/favicon.png" type="image/gif" sizes="16x16">
    <!-- Normalize css -->
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <!-- Fontawesome 5.15.1 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <!-- Fontawesome 5.13.x -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" /> -->
    <!-- Fontawesome 5.1.0 -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha512-3M00D/rn8n+2ZVXBO9Hib0GKNpkm8MSUU/e2VNthDyBYxKWG+BftNYYcuEjXlyrSO637tidzMBXfE7sQm0INUg==" crossorigin="anonymous" /> -->
    <!-- Owl carousel2 2.4.3 -->
    <link rel="stylesheet" href="./assets/plugins/owlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/plugins/owlCarousel/owl.theme.default.min.css">
    <!-- AOS css -->
    <link rel="stylesheet" href="./assets/plugins/aos.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/plugins/bootstrap-4.2.1/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="stylesheet/main.css">
    <title>Made in Lagos</title>
</head>

<body>
    <!-- HEADER -->
    <header class="bg_secondaryDark d-none d-md-block sticky-top">
        <div class="container-fluid">
            <nav class="navbar navbar-dark sticky-top flex-md-nowrap py-2">
                <!-- <div class="container"> -->
                <a class="navbar-brand col-sm-3 col-md-1 p-0" href="./">
                    <!-- <img src="./assets/images/madeinlagos_brand_logo.png" class="img-fluid" alt=""> -->
                    <img src="./assets/images/new-logo.png" class="img-fluid" alt="brand logo">
                </a>
                <div>
                    <!-- <button class="btn text_primary d-block d-md-none" id="categories_tab_toggler">
                        <span data-feather="menu"></span>
                    </button> -->
                    <button class="btn text_primary d-none d-md-block" id="categories_tab_toggler_lg">
                        <span data-feather="menu"></span>
                    </button>
                </div>

                <div>
                    <div class="dropdown">
                        <button class="btn btn-sm text-white dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Help
                        </button>
                        <div class="dropdown-menu" id="HelpDropDown" aria-labelledby="dropdownMenuButton">
                            <a class="btn-sm dropdown-item" href="./views/faq.php">FAQ</a>
                            <a class="btn-sm dropdown-item" href="./views/contact-us.php">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 px-0">
                    <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->

                    <div class="input-group">
                        <input type="text" class="form-control" aria-label="Search items"
                            aria-describedby="search-button">
                        <div class="input-group-append">
                            <button class="btn text-white bg_orange" type="button" id="search-button">SEARCH</button>
                        </div>
                    </div>
                </div>
                <div class="nav-item text-nowrap d-flex align-items-center">
                    <div class="dropdown">
                        <button class="btn btn-sm text-white dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            My Account
                        </button>
                        <div class="dropdown-menu text-center" id="loginDropDown" aria-labelledby="dropdownMenuButton">
                            <a class="btn-sm dropdown-item" href="./views/user-account.php">My Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="btn-sm dropdown-item" href="./views/login.php">LOGIN</a>
                            <div class="dropdown-divider"></div>
                            <a class="btn-sm dropdown-item" href="./views/register.php">SIGNUP</a>
                            <div class="dropdown-divider"></div>
                            <a class="btn-sm dropdown-item text-danger" href="#">LOG OUT</a>
                        </div>
                    </div>
                    <!-- cart link -->
                    <a class="nav-link text-white" href="./user-cart.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-cart3" viewBox="0 0 16 16">
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                        <span class="badge badge-light">4</span>
                    </a>
                </div>
            </nav>
        </div>
    </header>
    <!-- mobile header -->
    <header class="d-block d-md-none sticky-top">
        <nav class="bg_secondaryDark d-flex align-items-center justify-content-between py-2">
            <div class="d-flex align-items-center">
                <button class="btn text_primary d-block d-md-none" id="categories_tab_toggler">
                    <span data-feather="menu"></span>
                </button>
                <a class="navbar-brand p-0" href="../">
                    <!-- <img src="./assets/images/madeinlagos_brand_logo.png" class="img-fluid" alt=""> -->
                    <img src="./assets/images/new-logo.png" class="img-fluid" alt="brand logo">
                </a>
            </div>
            <div class="d-flex align-items-center">
                <!-- Cart link -->
                <a class="nav-link text-white" href="./user-cart.php">
                    <span data-feather="shopping-cart"></span><span class="badge badge-light">4</span>
                </a>
            </div>
        </nav>
        <div class="pg_search_input_wrapper bg-white">
            <div class="inner">
                <form action="#" class='container'>
                    <div class="input-group border rounded">
                        <input type="text" class="form-control border-0" aria-label="Search items"
                            aria-describedby="search-button" placeholder="SEARCH">
                        <div class="input-group-append">
                            <button class="btn bg-white border-0" type="button" id="search-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </header>

    <!-- hero -->
    <div style="position:relative">
        <!-- large screen categories slide nav begins here -->
        <section id="main_category_container" class="hide d-none d-md-block">
            <div class="container">
                <ul class="side_nav_tab list_style_0 bg-white shadow">
                    <li class="category_list">Electronics
                        <div class="sidenav_subList border-0">
                            <div class="container">
                                <ul class="row">
                                    <li class="col-3"><a href="#">Electric jugs </a></li>
                                    <li class="col-3"><a href="#"> Electric oven </a></li>
                                    <li class="col-3"><a href="#"> Gas stoves</a></li>
                                    <li class="col-3"><a href="#">
                                            Hot plates</a></li>
                                    <li class="col-3"><a href="#">
                                            Microwaves </a></li>
                                    <li class="col-3"><a href="#"> Pressure cookers</a></li>
                                    <li class="col-3"><a href="#">
                                            Rice cookers </a></li>
                                    <li class="col-3"><a href="#"> Sandwich makers </a></li>
                                    <li class="col-3"><a href="#"> Blender </a></li>
                                    <li class="col-3"><a href="#"> Mixers </a></li>
                                    <li class="col-3"><a href="#"> Juice extractor </a></li>
                                    <li class="col-3"><a href="#"> Pressing iron </a></li>
                                    <li class="col-3"><a href="#"> Electric kettle </a></li>
                                    <li class="col-3"><a href="#"> Deep fryer </a></li>
                                    <li class="col-3"><a href="#"> Coffee maker </a></li>
                                    <li class="col-3"><a href="#"> Toasters </a></li>
                                    <li class="col-3"><a href="#"> Gas cooker </a></li>
                                    <li class="col-3"><a href="#"> Built in oven </a></li>
                                    <li class="col-3"><a href="#"> Built in Hob </a></li>
                                    <li class="col-3"><a href="#"> Built in chimney </a></li>
                                    <li class="col-3"><a href="#"> Table top cooker </a></li>
                                    <li class="col-3"><a href="#"> Freezers </a></li>
                                    <li class="col-3"><a href="#"> Water dispensers </a></li>
                                    <li class="col-3"><a href="#"> Refrigerators</a></li>
                                    <li class="col-3"><a href="#"> Air conditioners - split unit, floor
                                            standing
                                            AC</a></li>
                                    <li class="col-3"><a href="#"> Industrial fan</a></li>
                                    <li class="col-3"><a href="#"> Cassette air conditioner</a></li>
                                    <li class="col-3"><a href="#"> Air coolers</a></li>
                                    <li class="col-3"><a href="#"> Washing machine -</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="category_list">Groceries
                        <div class="sidenav_subList border-0">
                            <div class="container">
                                <ul class="row list_style_0">
                                    <li class="col-12">
                                        <a href="#">Canned Foods</a>
                                    </li>
                                    <li class="col-12">
                                        <a href="#">
                                            Food</a>
                                    </li>
                                    <li class="col-12">
                                        <a href="#">
                                            Cereal & beverages</a>
                                    </li>
                                    <li class="col-12">
                                        <a href="#">
                                            Fruits & Vegetables</a>
                                    </li>
                                    <li class="col-12">
                                        <a href="#">
                                            Fruit Juices and Drinks</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="category_list">Home, Kitchen and Office
                        <div class="sidenav_subList border-0">
                            <div class="container">
                                <div class="text-center">
                                    <h3>Coming soon</h3>
                                    <h6>Make a list of Home, Kitchen and Office you want</h6>
                                    <p><a href="#" class="text_primary">CLICK HERE</a></p>
                                </div>
                                <!-- <ul class="row">
                                    <li class="col-12">
                                        <a href="#">Home, Kitchen and Office Link...</a>
                                    </li>
                                    <li class="col-12">
                                        <a href="#">
                                            Home, Kitchen and Office Link...</a>
                                    </li>
                                    <li class="col-12">
                                        <a href="#">
                                            Home, Kitchen and Office Link...</a>
                                    </li>
                                    <li class="col-12">
                                        <a href="#">
                                            Home, Kitchen and Office Link...</a>
                                    </li>
                                    <li class="col-12">
                                        <a href="#">
                                            Home, Kitchen and Office Link...</a>
                                    </li>
                                </ul> -->
                            </div>
                        </div>
                    </li>
                    <li class="category_list">Books
                        <div class="sidenav_subList border-0">
                            <div class="container">
                                <div class="text-center">
                                    <h3>Coming soon</h3>
                                    <h6>Make a list of Books you want</h6>
                                    <p><a href="#" class="text_primary">CLICK HERE</a></p>
                                </div>
                                <!-- <ul class="row">
                                    <li class="col-12">
                                        <a href="#">Books Link...</a>
                                    </li>
                                    <li class="col-12">
                                        <a href="#">
                                            Books Link...</a>
                                    </li>
                                    <li class="col-12">
                                        <a href="#">
                                            Books Link...</a>
                                    </li>
                                    <li class="col-12">
                                        <a href="#">
                                            Books Link...</a>
                                    </li>
                                    <li class="col-12">
                                        <a href="#">
                                            Books Link...</a>
                                    </li>
                                </ul> -->
                            </div>
                        </div>
                    </li>
                    <li class="category_list">Beauty
                        <div class="sidenav_subList border-0">
                            <div class="container">
                                <div class="text-center">
                                    <h3>Coming soon</h3>
                                    <h6>Make a list of Beauty you want</h6>
                                    <p><a href="#" class="text_primary">CLICK HERE</a></p>
                                </div>
                                <!-- <ul class="row">
                                    <li class="col-12">
                                        <a href="#">Beauty Link...</a>
                                    </li>
                                    <li class="col-12">
                                        <a href="#">
                                            Beauty Link...</a>
                                    </li>
                                    <li class="col-12">
                                        <a href="#">
                                            Beauty Link...</a>
                                    </li>
                                    <li class="col-12">
                                        <a href="#">
                                            Beauty Link...</a>
                                    </li>
                                    <li class="col-12">
                                        <a href="#">
                                            Beauty Link...</a>
                                    </li>
                                </ul> -->
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- large screen categories slide nav ends here -->


        <!-- mobile categories slide nav begins here -->
        <section id="sidenav_main_container" class="d-block d-md-none">
            <div id="overlay" class="hide"></div>
            <div id="inner" class="hide">
                <nav>

                    <div class="card border-0 mt-5">
                        <div class="card-header">
                            <button class="btn text-danger p-0 mb-4">Logout</button>
                            <div class="d-flex flex-wrap">
                                <a href="#" class="btn w-50 btn_white primary_border rounded-0">Login</a>
                                <a href="#" class="btn w-50 btn_white primary_border rounded-0">Sign up</a>
                            </div>
                            <a href="../views/user-account.php" class="link_primary">AKINOLA OLUWATOBI</a>
                        </div>
                        <div class="card-body">
                            <h3>All Categories</h3>
                            <style>
                            </style>
                            <div style="overflow-x: hidden">
                                <div class="sidenav_content">
                                    <div>
                                        <!-- A -->
                                        <ul class="nav_tab list_style_0" id="main_category_list">
                                            <li class="category_list category_title">Electronics</li>
                                            <li class="category_list category_title">Groceries</li>
                                            <li class="category_list category_title">Home, Kitchen and
                                                Office</li>
                                            <li class="category_list category_title">Books</li>
                                            <li class="category_list category_title">Beauty</li>
                                            <li class="category_list category_title">TEST1</li>
                                        </ul>
                                    </div>
                                    <div>
                                        <!-- B -->
                                        <button class="btn p-0 mb-4 btn_reset_category">
                                            <span data-feather="arrow-left"></span>Electronics
                                        </button>
                                        <ul class="list_style_0 category_scroll_y">
                                            <li><a href="#">Electric jugs</a></li>
                                            <li><a href="#">Electric oven</a></li>
                                            <li><a href="#">Gas stoves</a></li>
                                            <li><a href="#">Hot plates</a></li>
                                            <li><a href="#">Microwaves</a></li>
                                            <li><a href="#">Pressure cookers</a></li>
                                            <li><a href="#">Rice cookers</a></li>
                                            <li><a href="#">Sandwich makers</a></li>
                                            <!--  -->
                                            <li><a href="#">Blender</a></li>
                                            <li><a href="#">Mixers</a></li>
                                            <li><a href="#">Juice extractor</a></li>
                                            <li><a href="#">Pressing iron</a></li>
                                            <li><a href="#">Electric kettle</a></li>
                                            <li><a href="#">Deep fryer</a></li>
                                            <li><a href="#">Coffee maker</a></li>
                                            <li><a href="#">Toasters</a></li>
                                            <!--  -->
                                            <li><a href="#">Gas cooker</a></li>
                                            <li><a href="#">Built in oven</a></li>
                                            <li><a href="#">Built in Hob</a></li>
                                            <li><a href="#">Built in chimney</a></li>
                                            <li><a href="#">Table top cooker</a></li>
                                            <li><a href="#">Freezers</a></li>
                                            <li><a href="#">Water dispensers</a></li>
                                            <li><a href="#">Refrigerators
                                                </a></li>
                                            <li><a href="#">Air conditioners - split unit, floor standing AC
                                                </a></li>
                                            <li><a href="#">Industrial fan
                                                    Cassette air conditioner
                                                    Air coolers</a></li>
                                            <li><a href="#">Washing machine -
                                                </a></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <!-- C -->
                                        <button class="btn p-0 mb-4 btn_reset_category">
                                            <span data-feather="arrow-left"></span>Groceries
                                        </button>
                                        <div class="text-center">
                                            <h3>Coming soon</h3>
                                            <h6>Make a list of Groceries you want</h6>
                                            <p><a href="#" class="text_primary">CLICK HERE</a></p>
                                        </div>
                                        <!-- <ul class="list_style_0 category_scroll_y">
                                            <li><a href="#">Groceries Item 1</a></li>
                                            <li><a href="#">Groceries Item 2</a></li>
                                            <li><a href="#">Groceries Item 3</a></li>
                                            <li><a href="#">Groceries Item 4</a></li>
                                            <li><a href="#">Groceries Item 5</a></li>
                                            <li><a href="#">Groceries Item 6</a></li>
                                        </ul> -->
                                    </div>
                                    <div>
                                        <!-- D -->
                                        <button class="btn p-0 mb-4 btn_reset_category">
                                            <span data-feather="arrow-left"></span>Home, Kitchen and Office
                                        </button>

                                        <div class="text-center">
                                            <h3>Coming soon</h3>
                                            <h6>Make a list of Home, Kitchen and Office you want</h6>
                                            <p><a href="#" class="text_primary">CLICK HERE</a></p>
                                        </div>
                                        <!-- <ul class="list_style_0 category_scroll_y">
                                            <li><a href="#">Home, Kitchen and Office Item 1</a></li>
                                            <li><a href="#">Home, Kitchen and Office Item 2</a></li>
                                            <li><a href="#">Home, Kitchen and Office Item 3</a></li>
                                            <li><a href="#">Home, Kitchen and Office Item 4</a></li>
                                            <li><a href="#">Home, Kitchen and Office Item 5</a></li>
                                            <li><a href="#">Home, Kitchen and Office Item 6</a></li>
                                        </ul> -->
                                    </div>
                                    <div>
                                        <!-- E -->
                                        <button class="btn p-0 mb-4 btn_reset_category">
                                            <span data-feather="arrow-left"></span>Books
                                        </button>

                                        <div class="text-center">
                                            <h3>Coming soon</h3>
                                            <h6>Make a list of Books you want</h6>
                                            <p><a href="#" class="text_primary">CLICK HERE</a></p>
                                        </div>
                                        <!-- <ul class="list_style_0 category_scroll_y">
                                            <li><a href="#">Books Item 1</a></li>
                                            <li><a href="#">Books Item 2</a></li>
                                            <li><a href="#">Books Item 3</a></li>
                                            <li><a href="#">Books Item 4</a></li>
                                            <li><a href="#">Books Item 5</a></li>
                                            <li><a href="#">Books Item 6</a></li>
                                        </ul> -->
                                    </div>
                                    <div>
                                        <!-- F -->
                                        <button class="btn p-0 mb-4 btn_reset_category">
                                            <span data-feather="arrow-left"></span>Beauty
                                        </button>

                                        <div class="text-center">
                                            <h3>Coming soon</h3>
                                            <h6>Make a list of Beauty you want</h6>
                                            <p><a href="#" class="text_primary">CLICK HERE</a></p>
                                        </div>
                                        <!-- <ul class="list_style_0 category_scroll_y">
                                            <li><a href="#">Beauty Item 1</a></li>
                                            <li><a href="#">Beauty Item 2</a></li>
                                            <li><a href="#">Beauty Item 3</a></li>
                                            <li><a href="#">Beauty Item 4</a></li>
                                            <li><a href="#">Beauty Item 5</a></li>
                                            <li><a href="#">Beauty Item 6</a></li>
                                        </ul> -->
                                    </div>
                                    <div>
                                        <!-- TEST 1 -->
                                        <button class="btn p-0 mb-4 btn_reset_category">
                                            <span data-feather="arrow-left"></span>TEST ONE
                                        </button>

                                        <div class="text-center">
                                            <h3>Coming soon</h3>
                                            <h6>Make a list of TEST ONE you want</h6>
                                            <p><a href="#" class="text_primary">CLICK HERE</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </section>
        <!-- mobile categories slide nav ends here -->

        <div class="bd-example mb-4">
            <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators d-none">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./assets//images//clothing-products-banner.jpg" class="d-block w-100" alt="...">
                        <!-- <div class="container">
                            <div class="obj1">
                                <img src="https://freesvg.org/storage/img/thumb/goblin-chibi-3.png" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="obj2">
                                <img src="https://freesvg.org/storage/img/thumb/1555417758.png" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5 data-aos="fade-up" data-aos-delay="300">First slide label</h5>
                            <p data-aos="fade-up" data-aos-delay="700">Nulla vitae elit libero, a pharetra augue mollis
                                interdum.</p>
                        </div> -->
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/images//food-products-banner.jpg" class="d-block w-100" alt="...">
                        <!-- <div class="container">

                            <div class="obj1">
                                <img src="https://freesvg.org/storage/img/thumb/1543739579.png" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="obj2">
                                <img src="https://freesvg.org/storage/img/thumb/johnny-automatic-3rd-generation-iPod.png"
                                    alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div> -->
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/images//footwears-products-banner.jpg" class="d-block w-100" alt="...">
                        <!-- <div class="container">
                            <div class="obj1">
                                <img src="https://freesvg.org/storage/img/thumb/Muga_Mobile_Phone.png" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="obj2">
                                <img src="https://freesvg.org/storage/img/thumb/tonyk_phone.png" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div> -->
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </div>

    <!-- <section class="container"> -->

    <!-- Set up your HTML -->
    <!-- <div class="owl-carousel owl-theme hero_slider">
      <div class="item" id="item1">
        <h1 data-aos="fade-up" data-aos-delay="700">TITLE</h1>
        <h2 data-aos="fade-up" data-aos-delay="300">Tagline</h2>
      </div>
      <div class="item" id="item2"></div>
      <div class="item" id="item3"></div>
    </div>
  </section> -->

    <!-- <section>
      <h1 data-aos="fade-up" data-aos-delay="700">TITLE</h1>
      <h2 data-aos="fade-up" data-aos-delay="300">Tagline</h2>
    </section> -->


    <section class="mb-4">
        <div class="container prod_listing">
            <div class="head bg-white py-2 px-3">
                <!-- New arrivals starts -->
                <h5 class="title" data-aos="fade-up" data-aos-delay="700">New Arrivals</h5>
            </div>
            <div class="prod_list_slider_wrapper">
                <div class="owl-carousel owl-theme new_arrival_listing">
                    <div class="item product_card">
                        <a href="#">
                            <div class="card border-bottom-0 rounded-0">
                                <img src="./assets/images/sample-prod.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Mama'S Pride Premium Nigeria Parboiled Rice 5kg</p>
                                </div>
                            </div>
                            <div class="price_rating_tag border px-3 py-2 rounded-0">
                                <span class="price">₦ 3,200</span>
                                <span class="rating"><i class="far fa-star"></i>(No ratings yet)</span>
                            </div>
                        </a>
                    </div>
                    <div class="item product_card">
                        <a href="#">
                            <div class="card border-bottom-0 rounded-0">
                                <img src="./assets/images/sample-prod.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Mama'S Pride Premium Nigeria Parboiled Rice 5kg</p>
                                </div>
                            </div>
                            <div class="price_rating_tag border px-3 py-2 rounded-0">
                                <span class="price">₦ 3,200</span>
                                <span class="rating"><i class="far fa-star"></i>(No ratings yet)</span>
                            </div>
                        </a>
                    </div>
                    <div class="item product_card">
                        <a href="#">
                            <div class="card border-bottom-0 rounded-0">
                                <img src="./assets/images/sample-prod.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Mama'S Pride Premium Nigeria Parboiled Rice 5kg</p>
                                </div>
                            </div>
                            <div class="price_rating_tag border px-3 py-2 rounded-0">
                                <span class="price">₦ 3,200</span>
                                <span class="rating"><i class="far fa-star"></i>(No ratings yet)</span>
                            </div>
                        </a>
                    </div>
                    <div class="item product_card">
                        <a href="#">
                            <div class="card border-bottom-0 rounded-0">
                                <img src="./assets/images/sample-prod.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Mama'S Pride Premium Nigeria Parboiled Rice 5kg</p>
                                </div>
                            </div>
                            <div class="price_rating_tag border px-3 py-2 rounded-0">
                                <span class="price">₦ 3,200</span>
                                <span class="rating"><i class="far fa-star"></i>(No ratings yet)</span>
                            </div>
                        </a>
                    </div>
                    <div class="item product_card">
                        <a href="#">
                            <div class="card border-bottom-0 rounded-0">
                                <img src="./assets/images/sample-prod.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Mama'S Pride Premium Nigeria Parboiled Rice 5kg</p>
                                </div>
                            </div>
                            <div class="price_rating_tag border px-3 py-2 rounded-0">
                                <span class="price">₦ 3,200</span>
                                <span class="rating"><i class="far fa-star"></i>(No ratings yet)</span>
                            </div>
                        </a>
                    </div>
                    <div class="item product_card">
                        <a href="#">
                            <div class="card border-bottom-0 rounded-0">
                                <img src="./assets/images/sample-prod.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Mama'S Pride Premium Nigeria Parboiled Rice 5kg</p>
                                </div>
                            </div>
                            <div class="price_rating_tag border px-3 py-2 rounded-0">
                                <span class="price">₦ 3,200</span>
                                <span class="rating"><i class="far fa-star"></i>(No ratings yet)</span>
                            </div>
                        </a>
                    </div>
                    <div class="item product_card">
                        <a href="#">
                            <div class="card border-bottom-0 rounded-0">
                                <img src="./assets/images/sample-prod.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Mama'S Pride Premium Nigeria Parboiled Rice 5kg</p>
                                </div>
                            </div>
                            <div class="price_rating_tag border px-3 py-2 rounded-0">
                                <span class="price">₦ 3,200</span>
                                <span class="rating"><i class="far fa-star"></i>(No ratings yet)</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="new_arrivals_nav custom_nav_wrapper">
                    <button type="button" name="button" class="btn customNextBtn">
                        <span data-feather="chevron-left"></span></button>
                    <button type="button" name="button" class="btn customPrevBtn">
                        <span data-feather="chevron-right"></span></button>
                </div>
            </div>
            <!-- New arrivals ends here -->
        </div>
    </section>


<section class="mb-4">
    <div class="container prod_listing">
        <div class="head bg_primary py-2 px-3 mb-2">
            <!-- Best sellings starts -->
            <h5 class="title text-white" data-aos="fade-up" data-aos-delay="700">Best Selling</h5>
        </div>
        <div class="prod_list_slider_wrapper">
            <div class="owl-carousel owl-theme best_sellings">
                <div class="item product_card">
                    <a href="#">
                        <div class="card border-bottom-0 rounded-0">
                            <img src="./assets/images/sample-prod.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Mama'S Pride Premium Nigeria Parboiled Rice 5kg</p>
                            </div>
                        </div>
                        <div class="price_rating_tag border px-3 py-2 rounded-0">
                            <span class="price">₦ 3,200</span>
                            <span class="rating poor"><i class="fas fa-star"></i>&nbsp;&nbsp;<span
                                    class="rating_fig">2.5</span>&nbsp;ratings</span>
                        </div>
                    </a>
                </div>
                <div class="item product_card">
                    <a href="#">
                        <div class="card border-bottom-0 rounded-0">
                            <img src="./assets/images/sample-prod.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Mama'S Pride Premium Nigeria Parboiled Rice 5kg</p>
                            </div>
                        </div>
                        <div class="price_rating_tag border px-3 py-2 rounded-0">
                            <span class="price">₦ 3,200</span>
                            <span class="rating fair"><i class="fas fa-star"></i>&nbsp;&nbsp;<span
                                    class="rating_fig">2.5</span>&nbsp;ratings</span>
                        </div>
                    </a>
                </div>
                <div class="item product_card">
                    <a href="#">
                        <div class="card border-bottom-0 rounded-0">
                            <img src="./assets/images/sample-prod.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Mama'S Pride Premium Nigeria Parboiled Rice 5kg</p>
                            </div>
                        </div>
                        <div class="price_rating_tag border px-3 py-2 rounded-0">
                            <span class="price">₦ 3,200</span>
                            <span class="rating good"><i class="fas fa-star"></i>&nbsp;&nbsp;<span
                                    class="rating_fig">2.5</span>&nbsp;ratings</span>
                        </div>
                    </a>
                </div>
                <div class="item product_card">
                    <a href="#">
                        <div class="card border-bottom-0 rounded-0">
                            <img src="./assets/images/sample-prod.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Mama'S Pride Premium Nigeria Parboiled Rice 5kg</p>
                            </div>
                        </div>
                        <div class="price_rating_tag border px-3 py-2 rounded-0">
                            <span class="price">₦ 3,200</span>
                            <span class="rating good"><i class="fas fa-star"></i>&nbsp;&nbsp;<span
                                    class="rating_fig">2.5</span>&nbsp;ratings</span>
                        </div>
                    </a>
                </div>
                <div class="item product_card">
                    <a href="#">
                        <div class="card border-bottom-0 rounded-0">
                            <img src="./assets/images/sample-prod.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Mama'S Pride Premium Nigeria Parboiled Rice 5kg</p>
                            </div>
                        </div>
                        <div class="price_rating_tag border px-3 py-2 rounded-0">
                            <span class="price">₦ 3,200</span>
                            <span class="rating fair"><i class="fas fa-star"></i>&nbsp;&nbsp;<span
                                    class="rating_fig">2.5</span>&nbsp;ratings</span>
                        </div>
                    </a>
                </div>
                <div class="item product_card">
                    <a href="#">
                        <div class="card border-bottom-0 rounded-0">
                            <img src="./assets/images/sample-prod.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Mama'S Pride Premium Nigeria Parboiled Rice 5kg</p>
                            </div>
                        </div>
                        <div class="price_rating_tag border px-3 py-2 rounded-0">
                            <span class="price">₦ 3,200</span>
                            <span class="rating good"><i class="fas fa-star"></i>&nbsp;&nbsp;<span
                                    class="rating_fig">2.5</span>&nbsp;ratings</span>
                        </div>
                    </a>
                </div>
                <div class="item product_card">
                    <a href="#">
                        <div class="card border-bottom-0 rounded-0">
                            <img src="./assets/images/sample-prod.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Mama'S Pride Premium Nigeria Parboiled Rice 5kg</p>
                            </div>
                        </div>
                        <div class="price_rating_tag border px-3 py-2 rounded-0">
                            <span class="price">₦ 3,200</span>
                            <span class="rating poor"><i class="fas fa-star"></i>&nbsp;&nbsp;<span
                                    class="rating_fig">2.5</span>&nbsp;ratings</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="best_sellings_nav custom_nav_wrapper">
                <button type="button" name="button" class="btn customNextBtn">
                    <span data-feather="chevron-left"></span></button>
                <button type="button" name="button" class="btn customPrevBtn">
                    <span data-feather="chevron-right"></span></button>
            </div>
        </div>
        <!-- Best sellings ends here -->
    </div>
</section>

    <section class="mb-4 add_cards_wrapper">
        <div class="container">
            <!-- <div class="row no-gutters">
                <div class="col-12 col-md-6" data-aos="fade-left" data-aos-delay="1000">
                    <a href="#">
                        <div class="shadow m-2">
                            <img src="./assets/images/ad-coffee.png" class="img-fluid">
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="700">
                    <a href="#">
                        <div class="shadow m-2">
                            <img src="./assets/images/ad-portable-iron.png" class="img-fluid">
                        </div>
                    </a>
                </div>
            </div> -->

            <div class="row">
                <div class="col">
                <img src="./assets/images/cross-banner-lg.png" class="img-fluid d-none d-md-block w-100">
                <img src="./assets/images/cross-banner-sm.png" class="img-fluid d-block d-md-none w-100">
                </div>
            </div>
        </div>
    </section>

    <section class="mb-4">

        <div class="container prod_listing">
            <div class="head bg_secondaryDark py-2 px-3 d-flex flex-wrap align-items-center">
                <!-- Verified products starts -->
                <h5 class="title text-white mr-3" data-aos="fade-up" data-aos-delay="700">Products verified by made in
                    Lagos
                </h5>
                <span class="mx-sm-auto"></span>
                <div class="">
                    <h6><a href="./views/verified-products.php" CLASS="text-white text_decorate_0">SEE ALL</a></h6>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="900">
                    <div class="item product_card">
                        <a href="#">
                            <div class="card rounded-0">
                                <img src="./assets/images/sample-prod.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Mama'S Pride Premium Nigeria Parboiled Rice 5kg</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3" data-aos="flip-right" data-aos-delay="700">
                    <div class="item product_card">
                        <a href="#">
                            <div class="card rounded-0">
                                <img src="./assets/images/sample-prod.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Mama'S Pride Premium Nigeria Parboiled Rice 5kg</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="900">
                    <div class="item product_card">
                        <a href="#">
                            <div class="card rounded-0">
                                <img src="./assets/images/sample-prod.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Mama'S Pride Premium Nigeria Parboiled Rice 5kg</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3" data-aos="flip-right" data-aos-delay="700">
                    <div class="item product_card">
                        <a href="#">
                            <div class="card rounded-0">
                                <img src="./assets/images/sample-prod.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Mama'S Pride Premium Nigeria Parboiled Rice 5kg</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Verified products ends -->
        </div>
    </section>

    <section class="mb-4">
        <article class="container display_1 text-center">
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae commodi quam ea odit ab. Deleniti
                blanditiis est neque dicta tempore iusto cumque minima. Vitae quo sequi consequatur blanditiis, id cum.
            </p>
        </article>
    </section>


    <!-- Sponsors logos begins -->
    <section class="mb-4">
        <div class="container">
            <ul class="sponsor_logos p-0 list_style_0">
                <li data-aos="fade-up" data-aos-delay="1200">
                    <div class="item">
                        <!-- 1. Nexus brand logo -->
                        <img src="./assets/images/Nexus-brand-logo.png" class="img-fluid" alt="nexus brand logo">
                    </div>
                </li>
                <li data-aos="zoom-in" data-aos-delay="1200">
                    <div class="item">
                        <!-- 3. Samsung brand logo -->
                        <img src="./assets/images/Samsung-brand-logo.png" class="img-fluid" alt="Samsung brand logo">
                    </div>
                </li>
                <li data-aos="fade-up" data-aos-delay="1000">
                    <div class="item">
                        <!-- 2. Scanfrost brand logo -->
                        <img src="./assets/images/Scanfrost-brand-logo.png" class="img-fluid"
                            alt="Scanfrost brand logo">
                    </div>
                </li>
                <li data-aos="flip-up" data-aos-delay="900">
                    <div class="item">
                        <!-- 2. LG brand logo -->
                        <img src="./assets/images/LG-brand-logo.png" class="img-fluid" alt="LG brand logo">
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- Sponsors logos ends -->


    <!-- newletter subscription panel begins -->

    <section class="" style="background-color: #3AB795">
        <div class="container py-4">
            <div class="row">
                <div class="col-12 col-md-1 my-1 text-center text-md-left d-md-flex align-items-center" data-aos="zoom-in-right"
                    data-aos-delay="700">
                    <!-- <img src="./assets/images/madeinlagos_brand_logo.png" alt=""> -->
                    <img src="./assets/images/new-logo-alt.png" class="img-fluid" alt="brand logo">
                </div>
                <div class="col-12 col-sm-5 col-md-5 my-1 text-white text-center text-md-left d-md-flex align-items-center" data-aos="zoom-in"
                    data-aos-delay="700">
                    <!-- <div> -->
                    <strong>SUBSCRIBE TO RECIEVE NEW UPDATE ABOUT OUR PRODUCT</strong>
                    <!-- </div> -->
                </div>
                <div class="col-12 col-sm-7 col-md-6 my-1 d-md-flex align-items-center" data-aos="zoom-in-left" data-aos-delay="1000">
                    <form class="input-group">
                        <input type="text" class="form-control" aria-label="Recipient's username"
                            aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn text-white bg_orange" type="button" id="button-addon2">SUBSCRIBE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- newletter subscription panel ends -->

    <footer class="py-3">
        <div class="inner">
            <div class="container py-4">
                <div class="row">
                    <div class="col-6 col-md-4">
                        <ul class="list_style_0 px-0">
                            <li class="title">COMPANY</li>
                            <li>
                                <a href="./views/privacy-policy.php">Privacy policy</a>
                            </li>
                            <li>
                                <a href="./views/faq.php">FAQs</a>
                            </li>
                            <li>
                                <a href="./views/about-us.php">About us</a>
                            </li>
                            <li>
                                <a href="./views/terms-and-conditions.php">Terma and conditions</a>
                            </li>
                            <li>
                                <a href="./views/return-and-refund-policy.php">Return and refund policy</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-4">
                        <ul class="list_style_0 px-0">
                            <li class="title">PAYMENT METHOD</li>
                            <li>
                                <a href="#">Transfer</a>
                            </li>
                            <li>
                                <a href="#">Mastercard</a>
                            </li>
                            <li>
                                <a href="#">Visa</a>
                            </li>
                            <li>
                                <a href="#">Interswitch</a>
                            </li>
                            <li>
                                <a href="#">Verve</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-4">
                        <ul class="list_style_0 px-0">
                            <li class="title">STAY CONNECTED</li>
                            <li>
                                <a href="#" class="media_link"><i class="fab fa-twitter-square mr-2"></i>Twitter</a>
                            </li>
                            <li>
                                <a href="#" class="media_link"><i class="fab fa-facebook-square mr-2"></i>Facebook</a>
                            </li>
                            <li>
                                <a href="#" class="media_link"><i class="fab fa-instagram-square mr-2"></i>Instagram</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">2020 &copy; Amazon Lagos</div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="./assets/plugins/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="./assets/plugins/bootstrap-4.2.1/js/bootstrap.min.js">

    <!-- Feather icons js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script>
    $(document).ready(function() {
        feather.replace();

        $('button').click(function() {
            $('.alert').html('<i data-feather="activity"></i>');
            feather.replace();
        });

    });
    </script>
    <!-- PLUGINS -->
    <!-- Owl carousel2 2.4.3 -->
    <script src="./assets/plugins/owlCarousel/owl.carousel.min.js"></script>
    <script src="./assets/plugins/aos.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./assets/plugins/smoothscroll.js"></script>
    <script src="./assets/plugins/custom.js"></script>
    <!-- Custom javascript -->
    <script src="./javascript/main.js"></script>

</body>

</html>