<!-- Header -->
<?php include_once '../includes/header.php'; ?>
<div id="verified_products_page">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li>Products verified by made in lagos</li>
        </ul>
        <div class="d-flex justify-content-between align-items-center flex-wrap border-bottom mb-3">
            <h1 class="page_title my-3 text-center text-md-left">Television</h1>
            <div>
                <span>
                    <span>9</span>&nbsp;out of&nbsp;<span>10</span>
                </span>
            </div>
        </div>



        <!-- DESKTOP VIEW CONTENTS FILTER -->
        <form action="#" class="container-fluid filter_form d-none d-md-block">
            <div class="row" id="filter_nav">
                <div class="col-12 col-md-9 d-flex flex-wrap">
                    <div>
                        <ul class="float-left list_style_0 d-flex flex-wrap" style="position: relative">
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
                                                        <input type="checkbox" name="scanfrost" id="scanfrost" class="check">
                                                        <label for="scanfrost">
                                                            <span class="custom_check"></span>
                                                            Scanfrost
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <input type="checkbox" name="whatever" id="whatever" class="check">
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
                                    SCREEN SIZE
                                </div>
                                <div class="filter_dropdown">
                                    <div class="container-fluid">
                                        <form action="#">
                                            <fieldset class="px-2 py-3">
                                                <!-- <legend>SCREEN SIZE</legend> -->
                                                <div class="row mb-3">
                                                    <div class="col-6">
                                                        <input type="checkbox" name="inch_32" id="inch_32" class="check">
                                                        <label for="inch_32">
                                                            <span class="custom_check"></span>
                                                            32"
                                                        </label>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="checkbox" name="inch_43" id="inch_43" class="check">
                                                        <label for="inch_43">
                                                            <span class="custom_check"></span>
                                                            43"
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
                                    OPERATING SYSTEM
                                </div>
                                <div class="filter_dropdown">
                                    <div class="container-fluid">
                                        <form action="#">
                                            <fieldset class="px-2 py-3">
                                                <!-- <legend>SCREEN SIZE</legend> -->
                                                <div class="row mb-3">
                                                    <div class="col-6">
                                                        <input type="checkbox" name="android" id="android" class="check">
                                                        <label for="android">
                                                            <span class="custom_check"></span>
                                                            Android
                                                        </label>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="checkbox" name="linux" id="linux" class="check">
                                                        <label for="linux">
                                                            <span class="custom_check"></span>
                                                            Linux
                                                        </label>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="checkbox" name="other" id="other" class="check">
                                                        <label for="other">
                                                            <span class="custom_check"></span>
                                                            Other
                                                        </label>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="checkbox" name="none" id="none" class="check">
                                                        <label for="none">
                                                            <span class="custom_check"></span>
                                                            None
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
                                                <div class="col-6">
                                                    <button class="btn btn-sm my-2 form_clear_btn">CLEAR ALL</button>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-sm my-2 btn_primary float-right">APPLY</button>
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


                <div class="col-12 col-md-3">
                    <div class="d-flex align-items-start flex-wrap float-right">
                        <!-- Sort by recommended -->
                        <span class="py-2">Sort by: &nbsp;</span>
                        <div class="filter_tab">
                            <div class="filterToggler recommend dropNull py-2 px-2" id="status_filter_selection">
                                <!-- Recommended -->
                            </div>
                            <style>
                            </style>
                            <div class="filter_dropdown w-100">
                                <div class="container-fluid p-2">
                                    <form action="#">
                                        <div class="checkbox_form_grp">
                                            <input type="radio" name="lg_screen_sort_products" class="lg_screen_product_sorter" id="recommended">
                                            <label for="recommended">Recommended</label>
                                        </div>
                                        <div class="checkbox_form_grp">
                                            <input type="radio" name="lg_screen_sort_products" class="lg_screen_product_sorter" id="newArrival">
                                            <label for="newArrival">New Arrival</label>
                                        </div>
                                        <div class="checkbox_form_grp">
                                            <input type="radio" name="lg_screen_sort_products" class="lg_screen_product_sorter" id="lowToHigh">
                                            <label for="lowToHigh">Price: Low to High</label>
                                        </div>
                                        <div class="checkbox_form_grp">
                                            <input type="radio" name="lg_screen_sort_products" class="lg_screen_product_sorter" id="highToLow">
                                            <label for="highToLow">Price: High to Low</label>
                                        </div>
                                        <div class="checkbox_form_grp">
                                            <input type="radio" name="lg_screen_sort_products" class="lg_screen_product_sorter" id="bestSelling">
                                            <label for="bestSelling">Best Sellings</label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

                <script>

                    /* Custom radio selections */
                    function radioSelect(arg1, arg2) {
                        if (arg1.is(':checked')) {
                            arg2.html(arg1.siblings("label").html());
                        } else {
                            arg2.html("Status");
                        }
                        arg1.on("click", function() {
                            arg2.html($(this).siblings("label").html());
                        });
                    }
                    // PRV form status
                    var status_filter_selection = $("#status_filter_selection");
                    var selected_lg_screen_sort_products = $("input[type='radio'][name='lg_screen_sort_products']");
                    var selected_lg_screen_sort_products_checked = $("input[type='radio'][name='lg_screen_sort_products']:checked");
                    radioSelect(selected_lg_screen_sort_products, status_filter_selection)
                    status_filter_selection.html(selected_lg_screen_sort_products_checked.siblings("label").html());
                </script>
            </div>
        </form>


        <!-- MOBILE VIEW CONTENTS FILTER -->
        <div class="d-block d-md-none">
            <div class="text-center mb-5">
                <button type="button" class="btn btn-lg btn_white border px-5" id="mobileFilterFormTriggerToShow"><span data-feather="filter"></span>Filter</button>
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
                                <button type="button" class="btn" id="mobileFilterFormTriggerToHide"><span data-feather="arrow-left"></span>&nbsp; Filter</button>
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
                                            <input type="radio" name="mobile_sort_products" id="recommended_sm" class="radio_rej">
                                            <label for="recommended_sm" class="justify-content-between">
                                                Recommended
                                                <span class="custom_radio"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <input type="radio" name="mobile_sort_products" id="newArrival_mobile" class="radio_rej">
                                            <label for="newArrival_mobile" class="justify-content-between">
                                                New arrival
                                                <span class="custom_radio"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <input type="radio" name="mobile_sort_products" id="lowToHigh_mobile" class="radio_rej">
                                            <label for="lowToHigh_mobile" class="justify-content-between">
                                                Price: Low to High
                                                <span class="custom_radio"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <input type="radio" name="mobile_sort_products" id="highToLow_mobile" class="radio_rej">
                                            <label for="highToLow_mobile" class="justify-content-between">
                                                Price: High to Low
                                                <span class="custom_radio"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <input type="radio" name="mobile_sort_products" id="bestSellings" class="radio_rej">
                                            <label for="bestSellings" class="justify-content-between">
                                                Best sellings
                                                <span class="custom_radio"></span>
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



        <div class="container-fluid mb-5">
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
                                <div class="card-footer d-flex bg-white align-items-center justify-content-between flex-wrap">
                                    <div class="price">
                                        #<span>19,800</span>
                                    </div>
                                    <div class="star_rating text-success">
                                        <i class="fas fa-star"></i>&nbsp;<span>2.5</span>&nbsp;ratings
                                    </div>
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
                                <div class="card-footer d-flex bg-white align-items-center justify-content-between flex-wrap">
                                    <div class="price">
                                        #<span>19,800</span>
                                    </div>
                                    <div class="star_rating text-success">
                                        <i class="fas fa-star"></i>&nbsp;<span>2.5</span>&nbsp;ratings
                                    </div>
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
                                <div class="card-footer d-flex bg-white align-items-center justify-content-between flex-wrap">
                                    <div class="price">
                                        #<span>19,800</span>
                                    </div>
                                    <div class="star_rating text-success">
                                        <i class="fas fa-star"></i>&nbsp;<span>2.5</span>&nbsp;ratings
                                    </div>
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
                                <div class="card-footer d-flex bg-white align-items-center justify-content-between flex-wrap">
                                    <div class="price">
                                        #<span>19,800</span>
                                    </div>
                                    <div class="star_rating text-success">
                                        <i class="fas fa-star"></i>&nbsp;<span>2.5</span>&nbsp;ratings
                                    </div>
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
                                <div class="card-footer d-flex bg-white align-items-center justify-content-between flex-wrap">
                                    <div class="price">
                                        #<span>19,800</span>
                                    </div>
                                    <div class="star_rating text-success">
                                        <i class="fas fa-star"></i>&nbsp;<span>2.5</span>&nbsp;ratings
                                    </div>
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
                                <div class="card-footer d-flex bg-white align-items-center justify-content-between flex-wrap">
                                    <div class="price">
                                        #<span>19,800</span>
                                    </div>
                                    <div class="star_rating text-success">
                                        <i class="fas fa-star"></i>&nbsp;<span>2.5</span>&nbsp;ratings
                                    </div>
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
                                    <a class="page-link rounded-0" href="#" tabindex="-1" aria-disabled="true">Previous</a>
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