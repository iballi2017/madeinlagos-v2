<!-- head -->
<?php include '../includes/header.php'; ?>
    <!-- main -->
    <div class="container-fluid" id="login_page">
        <div class="row">
            <div class="col-12 col-sm-5 col-lg-7 right_child"></div>
            <div class="col-12 col-sm-7 col-lg-5 shadow">
                <h4 class="text-center text_primary my-5">WELCOME TO SELLER VILLA</h4>

                <div id="login_form_wrapper">
                    <div class="inner">
                        <form action="#" id="" class="anim_form">

                            <div class="page w-100 mx-2">

                                <div class="alert alert-danger login_form_errorMsg" role="alert">
                                    Error message!
                                </div>
                                <div class="form-group">
                                    <div class="form_wrapper sit">
                                        <label for="email">Email Address</label>
                                        <input type="text" value="John Doe" class="form-control first_page_control" id="email"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form_wrapper sit">
                                        <label for="password">Password</label>
                                        <input type="password" value="12345" class="form-control first_page_control"
                                            id="password" aria-describedby="passwordHelp">
                                    </div>
                                </div>
                                <a href="#" class="text_link float-right mb-2">Forgot Password?</a>
                                <button type="button" class="btn btn-block btn_primary px-3">LOGIN</button>
                            </div>
                        </form>

                        <p class="text-center mt-5 uppercase">New seller? <a href="#" class="text_link">Create account</a></p>
                    </div>
                </div>
            </div>
        </div>

<!-- footer -->
<?php include '../includes/footer.php'; ?>