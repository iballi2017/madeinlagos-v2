<!-- Header -->
<?php include_once '../includes/header.php'; ?>
<!-- <div class="d-flex align-items-start container mt-md-5 w-100 user_account" id=""> -->
<div class="container mt-md-5 w-100 user_account" id="user_order_page">
    <div class="row no-gutters">
        <div class="col-3">
            <?php include_once '../includes/user-sidebar.php'; ?>
        </div>
        <div class="col-12 col-md-9">
            <main class="main_area">
                <div class="px-3">
                    <div>
                        <button class="btn p-0 my-3 d-block d-md-none" id="userAccountMenuBtn">
                            <span data-feather="menu"></span>
                        </button>
                    </div>

                    <div class="container p-0">
                        <!-- If there is no Item to review-->
                        <div class="alert alert-info text-center" role="alert">
                            No Item to review!
                        </div>
                        <!--  -->
                        <!-- Item 1 -->
                        <div class="row py-2 border m-2 item_row">
                            <div class="col-5 col-lg-2 p-0 m-0">
                                <img src="../assets/images/sample-prod.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-7 col-lg-7">
                                <div class="row">
                                    <div class="col-12 col-lg-7">
                                        <h6 class="m-0">Scanfrost 6.8kg Twin Tub Semi- Automatic Washing Machine
                                            -
                                            SFSANTTD6.</h6>
                                        <div><strong>₦&nbsp;<span>71,000</span></strong></div>
                                    </div>
                                    <div class="col-12 col-lg-5">
                                        <div class="d-flex align-items-center">
                                            <div>02-11-2020&nbsp;</div>
                                            <div class="text-success">Delivered</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <a href="./review-item.php?subj=pending-reviews&id=1" class="btn btn_primary btn-sm float-md-right btn_action">Rate
                                    this
                                    product</a>
                            </div>
                        </div>
                        <!-- Item 2 -->
                        <div class="row py-2 border m-2 item_row">
                            <div class="col-5 col-lg-2 p-0 m-0">
                                <img src="../assets/images/sample-prod.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-7 col-lg-7">
                                <div class="row">
                                    <div class="col-12 col-lg-7">
                                        <h6 class="m-0">Scanfrost 6.8kg Twin Tub Semi- Automatic Washing Machine
                                            -
                                            SFSANTTD6.</h6>
                                        <div><strong>₦&nbsp;<span>71,000</span></strong></div>
                                    </div>
                                    <div class="col-12 col-lg-5">
                                        <div class="d-flex align-items-center">
                                            <div>02-11-2020&nbsp;</div>
                                            <div class="text-success">Delivered</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <a href="./review-item.php?subj=pending-reviews&id=2" class="btn btn_primary btn-sm float-md-right btn_action">Rate
                                    this
                                    product</a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
<!-- Footer -->
<?php include_once '../includes/footer.php'; ?>