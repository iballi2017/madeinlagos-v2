<!-- Header -->
<?php include_once '../includes/header.php'; ?>
<div id="verified_products_page">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li>Products verified by made in lagos</li>
        </ul>

        <h1 class="page_title my-3 mb-4 text-center text-md-left">Products verified by made in lagos</h1>




        <!-- DESKTOP VIEW CONTENTS FILTER -->
        <form action="#" class="container-fluid filter_form d-none d-md-block">
            <div class="row" id="filter_nav">
                <div class="col-12 col-md-6 d-flex flex-wrap">
                    <div>
                        <ul class="float-left list_style_0 d-flex" style="position: relative">
                            <li class="filter_tab m-1">
                                <div class="filterToggler dropNull border py-2 px-5">
                                    BRAND
                                </div>
                                <div class="filter_dropdown">
                                    <div class="container-fluid">
                                        <form action="#">
                                            <fieldset class="px-2 py-3">
                                                <!-- <legend>BRAND</legend> -->
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <input type="checkbox" name="scanfrost" id="scanfrost"
                                                            class="check">
                                                        <label for="scanfrost">
                                                            <span class="custom_check"></span>
                                                            Scanfrost
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <input type="checkbox" name="whatever" id="whatever"
                                                            class="check">
                                                        <label for="whatever">
                                                            <span class="custom_check"></span>
                                                            Whatever
                                                        </label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="row border-top">
                                                <div class="col">
                                                    <button class="btn my-2 form_clear_btn">CLEAR ALL</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li class="filter_tab m-1">
                                <div class="filterToggler dropNull border py-2 px-5">
                                    PRICE
                                </div>
                                <div class="filter_dropdown">
                                    <div class="container-fluid">
                                        <form action="#">
                                            <fieldset class="px-2 py-3">
                                                <!-- <legend>PRICE</legend> -->
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">Min</label>
                                                        <input type="number" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">Max</label>
                                                        <input type="number" class="form-control">
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="row border-top">
                                                <div class="col">
                                                    <button class="btn my-2 form_clear_btn">CLEAR ALL</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li class="filter_tab m-1">
                                <!-- <form action="#"> -->
                                <div class="filterToggler dropNull border py-2 px-5">
                                    RATING
                                </div>
                                <div action="#" class="filter_dropdown">
                                    <div class="container-fluid">
                                        <form action="#">
                                            <fieldset class="star_ratings px-2 py-3">
                                                <!-- <legend>RATING</legend> -->
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <input type="checkbox" name="5Star" id="5Star" class="check">
                                                        <label for="5Star">
                                                            <span class="custom_check"></span>
                                                            <span>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <input type="checkbox" name="4Star" id="4Star" class="check">
                                                        <label for="4Star">
                                                            <span class="custom_check"></span>
                                                            <span>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <input type="checkbox" name="3Star" id="3Star" class="check">
                                                        <label for="3Star">
                                                            <span class="custom_check"></span>
                                                            <span>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <input type="checkbox" name="2Star" id="2Star" class="check">
                                                        <label for="2Star">
                                                            <span class="custom_check"></span>
                                                            <span>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <input type="checkbox" name="1Star" id="1Star" class="check">
                                                        <label for="1Star">
                                                            <span class="custom_check"></span>
                                                            <span>
                                                                <i class="fas fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row border-top">
                                                    <div class="col">
                                                        <button class="btn my-2 form_clear_btn">CLEAR ALL</button>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="col-12 col-md-6">
                    <div class="d-flex align-items-start flex-wrap float-right">
                        <!-- Sort by recommended -->
                        <span class="py-2">Sort by: &nbsp;</span>
                        <div class="filter_tab">
                            <div class="filterToggler recommend dropNull py-2 px-2">
                                Recommended
                            </div>
                            <style>
                            </style>
                            <div class="filter_dropdown">
                                <div class="container-fluid p-2">
                                    <form action="#">
                                        <div class="checkbox_form_grp">
                                            <input type="checkbox" name="recommend" class="recommend_checkbox"
                                                id="newArrival">
                                            <label for="newArrival">New Arrival</label>
                                        </div>
                                        <div class="checkbox_form_grp">
                                            <input type="checkbox" name="recommend" class="recommend_checkbox"
                                                id="lowToHigh">
                                            <label for="lowToHigh">Price: Low to High</label>
                                        </div>
                                        <div class="checkbox_form_grp">
                                            <input type="checkbox" name="recommend" class="recommend_checkbox"
                                                id="highToLow">
                                            <label for="highToLow">Price: High to Low</label>
                                        </div>
                                        <div class="checkbox_form_grp">
                                            <input type="checkbox" name="recommend" class="recommend_checkbox"
                                                id="bestSelling">
                                            <label for="bestSelling">Best Sellings</label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>


        <!-- MOBILE VIEW CONTENTS FILTER -->
        <div class="d-block d-md-none">
            <div class="text-center mb-5">
                <button type="button" class="btn btn-lg btn_white border px-5" id="mobileFilterFormTriggerToShow"><span
                        data-feather="filter"></span>Filter</button>
                <!-- <button class="btn btn-lg border px-5"><span data-feather="chevron-down"></span>Sort</button> -->
                <button class="btn btn-lg btn_white border px-5" id="mobileSortFormTriggerToShow">
                    <i class="fas fa-sort"></i>
                    Sort</button>
            </div>
            <!-- Filter pop up -->
            <div id="mobile_filter_form_wrapper" class="hide">
                <form action="#">
                    <div class="container">
                        <div class="my-3 d-flex justify-content-between align-items-center">

                            <span class="display_1">
                                <button type="button" class="btn" id="mobileFilterFormTriggerToHide"><span
                                        data-feather="arrow-left"></span>&nbsp; Filter</button>
                            </span>
                            <span>
                                <button type="button" class="btn text_light">CLEAR ALL</button>
                            </span>
                        </div>
                    </div>
                    <hr />
                    <div class="container mt-5">
                        <div class="container-fluid">
                            <fieldset class="mb-4">
                                <legend>BRAND</legend>
                                <div class="row mb-3">
                                    <div class="col">
                                        <input type="checkbox" name="item" id="scanfrost_mobile" class="check">
                                        <label for="scanfrost_mobile">
                                            <span class="custom_check"></span>
                                            Scanfrost
                                        </label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <input type="checkbox" name="item" id="whatever_mobile" class="check">
                                        <label for="whatever_mobile">
                                            <span class="custom_check"></span>
                                            Whatever
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="mb-4">
                                <legend>PRICE</legend>
                                <div class="row">
                                    <div class="col">
                                        <label for="formGroupExampleInput">Min</label>
                                        <input type="number" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">Max</label>
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="mb-4 star_ratings">
                                <legend>RATING</legend>
                                <div class="row mb-3">
                                    <div class="col">
                                        <input type="checkbox" name="starRating_mobile" id="5Star_mobile" class="check">
                                        <label for="5Star_mobile">
                                            <span class="custom_check"></span>
                                            <span>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <input type="checkbox" name="starRating_mobile" id="4Star_mobile" class="check">
                                        <label for="4Star_mobile">
                                            <span class="custom_check"></span>
                                            <span>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <input type="checkbox" name="starRating_mobile" id="3Star_mobile" class="check">
                                        <label for="3Star_mobile">
                                            <span class="custom_check"></span>
                                            <span>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <input type="checkbox" name="starRating_mobile" id="2Star_mobile" class="check">
                                        <label for="2Star_mobile">
                                            <span class="custom_check"></span>
                                            <span>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <input type="checkbox" name="starRating_mobile" id="1Star_mobile" class="check">
                                        <label for="1Star_mobile">
                                            <span class="custom_check"></span>
                                            <span>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <hr />
                    <div class="container">
                        <button class="btn btn-block btn-lg bg_primary text-white">APPLY</button>
                    </div>
                </form>
            </div>

            <!-- Sort pop up -->
            <div class="hide" id="mobile_sort_form_wrapper">
                <form action="#" id="mobile_sort_form">
                    <div class="container">
                        <div class="d-flex align-items-center inner_wrapper">
                            <div class="card w-100">
                                <div class="card-header">
                                    <button type="button" class="btn close float-right">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="card-body">

                                    <div class="row mb-3">
                                        <div class="col">
                                            <input type="checkbox" name="recommended" id="recommended" class="check">
                                            <label for="recommended" class="justify-content-between">
                                                Recommended
                                                <span class="custom_check"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <input type="checkbox" name="newArrival" id="newArrival" class="check">
                                            <label for="newArrival" class="justify-content-between">
                                                New arrival
                                                <span class="custom_check"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <input type="checkbox" name="lowToHigh" id="lowToHigh" class="check">
                                            <label for="lowToHigh" class="justify-content-between">
                                                Price: Low to High
                                                <span class="custom_check"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <input type="checkbox" name="highToLow" id="highToLow" class="check">
                                            <label for="highToLow" class="justify-content-between">
                                                Price: High to Low
                                                <span class="custom_check"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <input type="checkbox" name="bestSellings" id="bestSellings" class="check">
                                            <label for="bestSellings" class="justify-content-between">
                                                Best sellings
                                                <span class="custom_check"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>



        <div class="container-fluid my-5">
            <div class="row no-gutters">
                <!-- product item column -->
                <div class="col-6 col-sm-4 col-md-3">
                    <div class="item product_card m-1">
                        <a href="#">
                            <div class="card rounded-0">
                                <img src="../assets/images/sample-prod.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Mama'S Pride Premium Nigeria Parboiled Rice 5kg</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- product item column -->
                <div class="col-6 col-sm-4 col-md-3">
                    <div class="item product_card m-1">
                        <a href="#">
                            <div class="card rounded-0">
                                <img src="../assets/images/sample-prod.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Mama'S Pride Premium Nigeria Parboiled Rice 5kg</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- product item column -->
                <div class="col-6 col-sm-4 col-md-3">
                    <div class="item product_card m-1">
                        <a href="#">
                            <div class="card rounded-0">
                                <img src="../assets/images/sample-prod.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Mama'S Pride Premium Nigeria Parboiled Rice 5kg</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- product item column -->
                <div class="col-6 col-sm-4 col-md-3">
                    <div class="item product_card m-1">
                        <a href="#">
                            <div class="card rounded-0">
                                <img src="../assets/images/sample-prod.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Mama'S Pride Premium Nigeria Parboiled Rice 5kg</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- product item column -->
                <div class="col-6 col-sm-4 col-md-3">
                    <div class="item product_card m-1">
                        <a href="#">
                            <div class="card rounded-0">
                                <img src="../assets/images/sample-prod.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Mama'S Pride Premium Nigeria Parboiled Rice 5kg</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- product item column -->
                <div class="col-6 col-sm-4 col-md-3">
                    <div class="item product_card m-1">
                        <a href="#">
                            <div class="card rounded-0">
                                <img src="../assets/images/sample-prod.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Mama'S Pride Premium Nigeria Parboiled Rice 5kg</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- pagination -->
            <div class="row">
                <div class="col">
                    <div class="my-3">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link rounded-0" href="#" tabindex="-1"
                                        aria-disabled="true">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link rounded-0 more" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>




    </div>
</div>

<!-- Footer -->
<?php include_once '../includes/footer.php'; ?>