<!-- Header -->
<?php include_once '../includes/header.php'; ?>
<div id="verified_products_page">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li>Products verified by made in lagos</li>
        </ul>

        <h1 class="page_title my-3 mb-4">Products verified by made in lagos</h1>




        <!-- DESKTOP VIEW CONTENTS FILTER -->
        <form action="#" class="container-fluid filter_form d-none d-md-block">
            <!-- <div class="d-flex align-items-center justify-content-between flex-wrap"> -->
            <div class="row">
                <div class="col-12 col-md-6 d-flex flex-wrap">
                    <div class="select_drop_wrapper mr-0 mr-sm-2">
                        <select class="custom-select" id="brandSelect">
                            <option selected style="color:gray" value="null">BRAND</option>
                            <option value="option1">Option One</option>
                            <option value="option2">Option Two</option>
                            <option value="option3">Option Three</option>
                        </select>
                    </div>
                    <div class="select_drop_wrapper mr-0 mr-sm-2">
                        <select class="custom-select" id="priceSelect">
                            <option selected style="color:gray" value="null">PRICE</option>
                            <option value="option1">Option One</option>
                            <option value="option2">Option Two</option>
                            <option value="option3">Option Three</option>
                        </select>
                    </div>
                    <div class="select_drop_wrapper">
                        <select class="custom-select" id="ratingSelectLargeScreen">
                            <option selected style="color:gray" value="null">RATING</option>
                            <option value="option1">Option One</option>
                            <option value="option2">Option Two</option>
                            <option value="option3">Option Three</option>
                        </select>
                    </div>
                </div>


                <div class="col-12 col-md-6">
                    <div class="d-flex align-items-center flex-wrap float-right">
                        <span>Sort by: &nbsp;</span>
                        <div class="select_drop_wrapper">
                            <select class="custom-select border-0 p-0" id="ratingSelectSmallScreen">
                                <option selected style="color:gray" value="null">Recommended</option>
                                <option value="option1">Option One</option>
                                <option value="option2">Option Two</option>
                                <option value="option3">Option Three</option>
                            </select>
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
                            <form action="#">
                                <fieldset class="mb-4">
                                    <legend>BRAND</legend>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <input type="checkbox" name="scanfrost" id="scanfrost" class="check">
                                            <label for="scanfrost">
                                                <span class="custom_check"></span>
                                                Scanfrost
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <input type="checkbox" name="whatever" id="whatever" class="check">
                                            <label for="whatever">
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
                                    <div class="row mb-3">
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
                <div class="col-12 col-sm-6 col-md-3">
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
                <div class="col-12 col-sm-6 col-md-3">
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
                <div class="col-12 col-sm-6 col-md-3">
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
                <div class="col-12 col-sm-6 col-md-3">
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
                <div class="col-12 col-sm-6 col-md-3">
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
                <div class="col-12 col-sm-6 col-md-3">
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
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link more" href="#">Next</a>
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
<?php include_once '../includes/footer.php'; ?> <img<img