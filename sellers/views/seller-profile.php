<!-- head -->
<?php include '../includes/header.php'; ?>


<div class="overflow-hidden">
    <div class="d-flex align-items-start">
        <div class="">
            <?php include_once '../includes/side-navigation.php' ;?>
        </div>
        <main role="main" class="container-fluid" style="overflow-x: auto">
            <div class="py-2">
                <button class="btn btn-lg px-0" id="sidenav_toggler">
                    <i class="fas fa-arrow-alt-circle-left"></i>
                </button>
            </div>

            <section class="border mb-5">
                <div class="p-3 border-bottom display_2">
                    ACCOUNT DETAILS
                </div>
                <div class="row no-gutters">
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="p-3 d-flex align-items-center">
                            <i class="fas fa-user-circle display_3 mr-3"></i>
                            <h5 class="seller_name_tag">AKON STORE</h5>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="p-3">
                            <h5 class="uppercase">Seller Details</h5>
                            <ul class="list_style_0">
                                <li>
                                    <span> <i class="fas fa-user-circle mr-2"></i></span>
                                    <span>OLUWATOBI ADEOYE</span>
                                </li>
                                <li>
                                    <span><i class="fas fa-envelope mr-2"></i></span>
                                    <span>Adeoyeoluwatobi.123@gmail.com</span>
                                </li>
                                <li>
                                    <span> <i class="fas fa-phone mr-2"></i></span>
                                    <span>07065194485</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="p-3">
                            <h5 class="uppercase">Address</h5>
                            <p>19, 3tee Street, Ajegunle/iroko Town, Ado Odo/otta, Ogun, Nigeria</p>
                        </div>
                    </div>
                </div>
            </section>


            <section class="mb-3">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link btn nav_tab_btn active" id="pills-account-settings-tab" data-toggle="pill"
                            href="#pills-account-settings" role="tab" aria-controls="pills-account-settings"
                            aria-selected="true">ACCOUNT SETTING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn nav_tab_btn" id="pills-business-settings-tab" data-toggle="pill"
                            href="#pills-business-settings" role="tab" aria-controls="pills-business-settings"
                            aria-selected="false">BUSINESS SETTINGS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn nav_tab_btn" id="pills-payment-settings-tab" data-toggle="pill"
                            href="#pills-payment-settings" role="tab" aria-controls="pills-payment-settings"
                            aria-selected="false">PAYMENT SETTINGS</a>
                    </li>
                </ul>
                <div class="tab-content border p-3" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-account-settings" role="tabpanel"
                        aria-labelledby="pills-account-settings-tab">

                        <!-- ACCOUNT DETAILS -->
                        <form action="#" id="" class="anim_form">
                            <fieldset class="mb-5">
                                <legend class="display_1 mb-0">ACCOUNT DETAILS</legend>
                                <hr class="mb-4" />
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <div class="select_drop_wrapper form_wrapper">
                                                <select class="custom-select border-0 second_page_control" name="title">
                                                    <option value="" selected>Title</option>
                                                    <option value="mr">Mr</option>
                                                    <option value="mrs">Mrs</option>
                                                    <option value="others">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <div class="form_wrapper sit">
                                                <label for="sellerName">First and Last Name</label>
                                                <input type="text" value="" class="form-control second_page_control"
                                                    id="sellerName" aria-describedby="sellerNameHelp" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <div class="form_wrapper sit">
                                                <label for="email">Email Address</label>
                                                <input type="text" value="" class="form-control second_page_control"
                                                    id="email" aria-describedby="emailHelp" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <div class="form_wrapper sit">
                                                <label for="phone">Phone Number</label>
                                                <input type="text" value="" class="form-control second_page_control"
                                                    id="phone" aria-describedby="phoneHelp" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <div class="form_wrapper sit">
                                                <label for="address">Street Address</label>
                                                <input type="text" value="" class="form-control second_page_control"
                                                    id="address" aria-describedby="addressHelp" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <button type="submit" class="btn rounded-0 px-3 btn_primary" id="">SAVE ACCOUNT
                                            DETAILS</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                        <!--  -->

                        <!-- PASSWORD -->
                        <form action="#" id="" class="anim_form">
                            <fieldset class="mb-5">
                                <legend class="display_1 mb-0">PASSWORD</legend>
                                <hr class="mb-4" />
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <div class="form_wrapper sit">
                                                <label for="oldPassword">Old Password</label>
                                                <input type="text" value="" class="form-control second_page_control"
                                                    id="oldPassword" aria-describedby="oldPasswordHelp" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <div class="form_wrapper sit">
                                                <label for="newPassword">New Password</label>
                                                <input type="text" value="" class="form-control second_page_control"
                                                    id="newPassword" aria-describedby="newPasswordHelp" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <div class="form_wrapper sit">
                                                <label for="cNewPassword">Confirm New Password</label>
                                                <input type="text" value="" class="form-control second_page_control"
                                                    id="cNewPassword" aria-describedby="cNewPasswordHelp" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <button type="submit" class="btn rounded-0 px-3 btn_primary" id="">SAVE PASSWORD
                                        </button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                        <!--  -->
                    </div>
                    <div class="tab-pane fade" id="pills-business-settings" role="tabpanel"
                        aria-labelledby="pills-business-settings-tab">

                        <!-- STORE SETTINGS -->
                        <form action="#" id="" class="anim_form">
                            <fieldset class="mb-5">
                                <legend class="display_1 mb-0">STORE SETTINGS</legend>
                                <hr class="mb-4" />
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <div class="form_wrapper sit">
                                                <label for="storeName">Store Name</label>
                                                <input type="text" value="" class="form-control second_page_control"
                                                    id="storeName" aria-describedby="storeNameHelp" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <div class="form_wrapper sit">
                                                <label for="storeAddress">Street Address</label>
                                                <input type="text" value="" class="form-control second_page_control"
                                                    id="storeAddress" aria-describedby="storeAddressHelp" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <div class="select_drop_wrapper form_wrapper">
                                                <select class="custom-select border-0 second_page_control" name="title">
                                                    <option value="" selected>Gender</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <!-- <label for="country">Country</label>
                                                <input type="text" value="" class="form-control second_page_control"
                                                    id="country" aria-describedby="countryHelp" required> -->
                                            <div class="select_drop_wrapper form_wrapper">
                                                <select class="custom-select border-0 second_page_control" name="title">
                                                    <option value="" selected>Country</option>
                                                    <option value="country1">Country 1</option>
                                                    <option value="country2">Country 2</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <div class="file_upload_wrapper">
                                                <div class="file_btn_wrap">
                                                    <!-- file input for user interface -->
                                                    <input type="text" id="pseudo_sellerId"
                                                        class="border-0 border-right"
                                                        placeholder="Upload your personal ID">
                                                    <!-- file input for processing -->
                                                    <input class="docFile" type="file" id="sellerId" name="sellerId"
                                                        accept="image/png, image/jpeg" onchange="pickPersonalId()">
                                                    <!-- file input label -->
                                                    <label class="file_btn border" for="sellerId">Upload</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <button type="submit" class="btn rounded-0 px-3 btn_primary" id="">SAVE ACCOUNT
                                            DETAILS</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                        <!--  -->
                    </div>
                    <div class="tab-pane fade" id="pills-payment-settings" role="tabpanel"
                        aria-labelledby="pills-payment-settings-tab">

                        <!-- BANK ACCOUNT -->
                        <form action="#" id="" class="anim_form">
                            <fieldset class="mb-5">
                                <legend class="display_1 mb-0">BANK ACCOUNT</legend>
                                <hr class="mb-4" />
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <div class="select_drop_wrapper form_wrapper">
                                                <select class="custom-select border-0 second_page_control" name="title">
                                                    <option value="" selected>Choose Your Bank</option>
                                                    <option value="gtb">GTB Bank</option>
                                                    <option value="zenith">Zenith Bank</option>
                                                    <option value="wema">WEMA Bank</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <div class="form_wrapper sit">
                                                <label for="accountNumber">Account Number</label>
                                                <input type="text" value="" class="form-control second_page_control"
                                                    id="accountNumber" aria-describedby="accountNumberHelp" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <button type="submit" class="btn rounded-0 px-3 btn_primary" id="">SAVE ACCOUNT
                                            DETAILS</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                        <!--  -->
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>
<!-- footer -->
<?php include '../includes/footer.php'; ?>