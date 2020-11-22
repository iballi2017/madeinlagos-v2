<!-- Header -->
<?php include_once '../includes/header.php'; ?>
<!-- <div class="d-flex align-items-start container mt-md-5 w-100 user_account" id=""> -->
<div class="container mt-md-5 w-100 user_account" id="user_review_page">
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
                    <div class="border">

                        <div class="d-flex align-items-center border-bottom p-2">
                            <button class="btn p-0" id="userAccountMenuBtn" onclick="goBack()">
                                <span data-feather="arrow-left"></span>
                            </button>
                            <h5>Review product</h5>
                        </div>
                        <div class="bg-danger p-2 text-white">Help us get better by giving your feedback</div>
                        <div class="container-fluid border-bottom">
                            <div class="row no-gutters">
                                <div class="col-4 col-md-3">
                                    <img src="../assets/images/sample-prod.png" alt="" class="img-fluid">
                                </div>
                                <div class="col-8 col-md-9">
                                    <h6>Scanfrost 6.8kg Twin Tub Semi-Automatic Washing Machine -
                                        SFSANTTD6.<br />Qty:&nbsp;<span>1<span></h6>
                                </div>
                            </div>
                        </div>
                        <div class="container py-2">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-row">
                                            <div class="col-12">
                                                <div class="form_grp mb-3">
                                                    <label class="text_capital d-block" for="fullName">Full Name</label>
                                                    <input type="text" class="w-100" name="fullName" id="fullName">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form_grp mb-3">
                                                    <label for="rating" class="my-0" style="display: block">Rate</label>
                                                    <!-- star rating -->
                                                    <span class="star-rating">
                                                        <i class="far fa-star text-warning review_star"></i>
                                                        <i class="far fa-star text-warning review_star"></i>
                                                        <i class="far fa-star text-warning review_star"></i>
                                                        <i class="far fa-star text-warning review_star"></i>
                                                        <i class="far fa-star text-warning review_star"></i>
                                                    </span>
                                                    <!-- star rating hidden input field-->
                                                    <input type="text" id="rating_value" style="visibility: hidden">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form_grp">
                                            <label class="text_capital d-block" for="comment">Comment</label>
                                            <textarea rows="5" cols="55" class="w-100" name="comment"
                                                id="comment"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form_grp">
                                    <button type="submit" class="btn btn_primary px-5 rounded-0">SUBMIT</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div class="d-flex align-items-center justify-content-center" id="review_form_response" style="height: 80vh">
        <div class="text-center">
            <h5>THANK YOU FOR THE FEEDBACK!!!</h5>
            <p><button type="button" class="btn text_primary" onclick="goBack()">Go Back</button></p>
        </div>
    </div>
</div>
<!-- Footer -->
<?php include_once '../includes/footer.php'; ?>