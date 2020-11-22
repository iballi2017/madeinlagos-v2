<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- favicon -->
    <link rel="icon" href="../assets/images/favicon.png" type="image/gif" sizes="16x16">
    <!-- Normalize css -->
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <!-- Fontawesome 5.15.1 -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" /> -->
    <!-- Fontawesome 5.13.x -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <!-- Owl carousel2 2.4.3 -->
    <link rel="stylesheet" href="../assets/plugins/owlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/plugins/owlCarousel/owl.theme.default.min.css">
    <!-- AOS css -->
    <!-- <link rel="stylesheet" href="css/aos.css"> -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/plugins/bootstrap-4.2.1/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../stylesheet/main.css">
    <title>Made in Lagos</title>
</head>

<body>
    <!-- HEADER -->
    <header class="bg_secondaryDark">
        <div class="container">
            <nav class="navbar navbar-dark sticky-top flex-md-nowrap py-2">
                <!-- <div class="container"> -->
                <a class="navbar-brand col-sm-3 col-md-1 p-0 mr-4" href="../">
                    <img src="../assets/images/madeinlagos_brand_logo.png" class="img-fluid" alt="">
                </a>
                <!-- <span>AAAA</span>
                <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
                <span>BBBB</span> -->

                <div class="">
                    <button class="btn text_primary d-block d-md-none" id="categories_tab_toggler">
                        <span data-feather="menu"></span>
                    </button>
                    <button class="btn text_primary d-none d-md-block" id="categories_tab_toggler_lg">
                        <span data-feather="menu"></span>
                    </button>
                </div>

                <div class="">
                    <div class="dropdown">
                        <button class="btn btn-sm text-white dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Help
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="btn-sm dropdown-item" href="#">FAQ</a>
                            <a class="btn-sm dropdown-item" href="#">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 px-0">
                    <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->

                    <div class="input-group">
                        <input type="text" class="form-control" aria-label="Recipient's username"
                            aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn text-white bg_orange" type="button" id="button-addon2">SEARCH</button>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="dropdown">
                        <button class="btn btn-sm text-white dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Login
                        </button>
                        <div class="dropdown-menu text-center" aria-labelledby="dropdownMenuButton">
                            <a class="btn-sm dropdown-item" href="./login.php">LOGIN</a>
                            <div class="dropdown-divider"></div>
                            <a class="btn-sm dropdown-item" href="./register.php">SIGNUP</a>
                        </div>
                    </div>
                </div>
                <!-- <div class="">
                  ddd
                </div> -->
                <ul class="navbar-nav">
                    <li class="nav-item text-nowrap">
                        <!-- <a class="nav-link text-white" href="#"><i class="fas fa-shopping-cart mr-2"></i>Cart</a> -->
                        <a class="nav-link text-white" href="./user-cart.php"><span data-feather="shopping-cart"></span><span class="badge badge-light">4</span></a>

                    </li>
                </ul>
                <!-- </div> -->
            </nav>
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
                    <div class="card border-0">
                        <div class="card-body">
                            <h3>All Categories</h3>
                            <style>
                            </style>
                            <div style="overflow-x: hidden">
                                <div class="sidenav_content">
                                    <div>
                                        <!-- A -->
                                        <ul class="nav_tab list_style_0" id="main_category_list">
                                            <li id="category_electronics" class="category_list">Electronics</li>
                                            <li id="category_groceries" class="category_list">Groceries</li>
                                            <li id="category_homeKitchenOffice" class="category_list">Home, Kitchen and
                                                Office</li>
                                            <li id="category_books" class="category_list">Books</li>
                                            <li id="category_beauty" class="category_list">Beauty</li>
                                        </ul>
                                    </div>
                                    <div>
                                        <!-- B -->
                                        <button class="btn p-0 mb-4" id="category_electronics_back_btn">
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
                                        <button class="btn p-0 mb-4" id="category_groceries_back_btn">
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
                                        <button class="btn p-0 mb-4" id="category_homeKitchenOffice_back_btn">
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
                                        <button class="btn p-0 mb-4" id="category_books_back_btn">
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
                                        <button class="btn p-0 mb-4" id="category_beauty_back_btn">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </section>
        <!-- mobile categories slide nav ends here -->

    </div>