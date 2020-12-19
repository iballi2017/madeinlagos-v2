<!-- head -->
<?php include '../includes/header.php'; ?>


<div class="overflow-hidden">
    <div class="d-flex align-items-start">
        <div class="">
            <?php include_once '../includes/side-navigation.php' ;?>
        </div>
        <main role="main" class="container" style="overflow-x: auto">
            <div class="py-2">
                <button class="btn btn-lg px-0" id="sidenav_toggler">
                    <span class="icon feather-icon md" data-feather="arrow-left-circle"></span>
                </button>
            </div>

            <div class="mb-3 py-2">
                <div class="d-flex align-items-center">
                    <button class="btn p-0" onclick="goBack()">
                        <span class="icon feather-icon md" data-feather="arrow-left"></span>
                    </button>
                    <h3 class="my-0 ml-3 uppercase">Sell product</h3>
                </div>
            </div>
            <section>
                <form action="#" id="" class="anim_form" method="POST">
                    <div class="border p-3 mb-3">
                        <!-- CATEGORY -->
                        <fieldset>
                            <legend class="display_1 mb-0 uppercase">Select Category</legend>
                            <hr class="mb-4" />
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <div class="select_drop_wrapper form_wrapper">
                                            <select class="custom-select border-0 second_page_control"
                                                name="mainCategory">
                                                <option value="" selected>Main Category</option>
                                                <option value="1">Category 1</option>
                                                <option value="2">Category 2</option>
                                                <option value="3">Category 3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <div class="select_drop_wrapper form_wrapper">
                                            <select class="custom-select border-0 second_page_control"
                                                name="subCategory">
                                                <option value="" selected>Sub Category</option>
                                                <option value="1">Sub Category 1</option>
                                                <option value="2">Sub Category 2</option>
                                                <option value="3">Sub Category 3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <!--  -->
                    </div>
                    <div class="border p-3 mb-3">
                        <!-- IMAGES -->
                        <fieldset>
                            <legend class="display_1 mb-0 uppercase">Product Images</legend>
                            <hr class="mb-4" />
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <div class="file_upload_wrapper">
                                            <div class="file_btn_wrap">
                                                <!-- file input for user interface -->
                                                <input type="text" id="pseudo_productImage1"
                                                    class="border-0 border-right pseudo_file"
                                                    placeholder="Upload the first Image here">
                                                <!-- file input for processing -->
                                                <input class="docFile" type="file" id="productImage1" name="docFile"
                                                    accept="image/png, image/jpeg" onchange="pick()">
                                                <!-- file input label -->
                                                <label class="file_btn border" for="productImage1">Upload</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <div class="file_upload_wrapper">
                                            <div class="file_btn_wrap">
                                                <!-- file input for user interface -->
                                                <input type="text" id="pseudo_productImage2"
                                                    class="border-0 border-right pseudo_file"
                                                    placeholder="Upload the second Image here">
                                                <!-- file input for processing -->
                                                <input class="docFile" type="file" id="productImage2" name="docFile2"
                                                    accept="image/png, image/jpeg" onchange="pick2()">
                                                <!-- file input label -->
                                                <label class="file_btn border" for="productImage2">Upload</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn rounded-0 px-3 btn_primary" id="">SAVE ACCOUNT
                                        DETAILS</button>
                                </div>
                            </div> -->
                        </fieldset>
                        <!--  -->
                    </div>
                    <div class="border p-3 mb-3">
                        <!-- IMAGES -->
                        <fieldset>
                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <div>
                                    <legend class="display_1 mb-0 uppercase">Product Images</legend>
                                </div>
                                <div class="text-muted">
                                    Upload Images
                                </div>
                            </div>
                            <hr class="mb-4" />
                            <div class="row">
                                <div class="col">
                                    <div class="dropzone-previews"></div>
                                    <div class="form-group dropzone" action="./">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <!--  -->
                    </div>


                    <div class="border p-3 mb-3">
                        <fieldset>
                            <legend class="display_1 mb-0 uppercase">Product Images</legend>
                            <hr class="mb-4" />
                            <div class="p-3" id="imageBox"></div>
                            <div class="text-center">
                                <input type="file" name="images" id="productImages" class="m-auto"
                                    onchange="pickImage()">
                            </div>
                            <p class="text-center"><small class="text-sm text-muted">Drag and drop</small> <br />
                                Recommended image dimension is 500px x 500px</p>
                        </fieldset>
                    </div>


                    <div class="border p-3 mb-3">
                        <!-- PRODUCT DETAILS -->
                        <fieldset>
                            <legend class="display_1 mb-0 uppercase">Product Details</legend>
                            <hr class="mb-4" />
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <div class="form_wrapper sit">
                                            <label for="productTitle">Product title</label>
                                            <input type="text" value="" class="form-control" id="productTitle"
                                                aria-describedby="productTitleHelp">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <div class="form_wrapper sit">
                                            <label for="overview">Overview</label>
                                            <textarea type="text" value="" class="form-control" id="overview"
                                                aria-describedby="overviewHelp"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <div class="form_wrapper sit">
                                            <label for="specification">Specification</label>
                                            <textarea type="text" value="" class="form-control" id="specification"
                                                aria-describedby="specificationHelp"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <!--  -->
                    </div>

                    <div class="border p-3 mb-3">
                        <!-- PRODUCT PRICING AND QUANTITY -->
                        <fieldset>
                            <legend class="display_1 mb-0 uppercase">Product Pricing and Quantity</legend>
                            <hr class="mb-4" />
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <div class="form_wrapper sit">
                                            <label for="price">Price</label>
                                            <input type="number" value="" class="form-control" id="price"
                                                aria-describedby="priceHelp">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <div class="form_wrapper sit">
                                            <label for="quantity">Quantity</label>
                                            <input type="number" value="" class="form-control" id="quantity"
                                                aria-describedby="quantityHelp">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <!--  -->
                    </div>

                    <div class="border p-3 mb-3">
                        <!-- PRODUCTS POLICY AND DELIVERY INFORMATION -->
                        <fieldset>
                            <legend class="display_1 mb-0 uppercase">Products Policy and Delivery Information </legend>
                            <hr class="mb-4" />
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <div class="form_wrapper sit">
                                            <label for="returnPolicy">Return Policy</label>
                                            <input type="text" value="" class="form-control" id="returnPolicy"
                                                aria-describedby="returnPolicyHelp">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <div class="form_wrapper sit">
                                            <label for="quantity">Delivery information</label>
                                            <input type="text" value="" class="form-control" id="quantity"
                                                aria-describedby="quantityHelp">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <!--  -->
                    </div>

                    <div class="border p-3 mb-3">
                        <!-- WARANTY -->
                        <fieldset>
                            <legend class="display_1 mb-0 uppercase">Waranty</legend>
                            <hr class="mb-4" />
                            <p>Do you provide a warranty?</p>
                            <div class="row" id="warantyToggler">
                                <div class="col">
                                    <div class="form-group">
                                        <input type="radio" name="waranty" id="warantyNo" class="check" checked>
                                        <label for="warantyNo">
                                            <span class="custom_check mr-3"></span>
                                            No
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="waranty" id="warantyYes" class="check">
                                        <label for="warantyYes">
                                            <span class="custom_check mr-3"></span>
                                            Yes
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row hide" id="warantyField">
                                <div class="col">
                                    <div class="form-group">
                                        <div class="form_wrapper sit">
                                            <label for="warantyPeriod">Waranty Period</label>
                                            <input type="text" value="" class="form-control" id="warantyPeriod"
                                                aria-describedby="warantyPeriodHelp">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <!--  -->
                    </div>
                    <div class="row mb-5">
                        <div class="col">
                            <button type="submit" class="btn rounded-0 px-5 btn_primary uppercase" id="">Submit</button>
                        </div>
                    </div>
                </form>
            </section>
        </main>
    </div>
</div>
<!-- footer -->
<?php include '../includes/footer.php'; ?>