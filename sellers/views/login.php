<!-- head -->
<?php include '../includes/head.php'; ?>
    <!-- main -->
    <div class="container-fluid" id="login_page">
        <div class="row">
            <div class="col-12 col-sm-5 col-lg-7 right_child"></div>
            <div class="col-12 col-sm-7 col-lg-5 shadow">
                <h4 class="text-center text_primary my-5">WELCOME TO SELLER VILLA</h4>

                <div id="login_form_wrapper">
                    <div class="inner">
                        <form action="#" id="register_for_area" class="d-flex slidePage">

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








        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="../assets/plugins/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        <link rel="stylesheet" href="../assets/plugins/bootstrap-4.2.1/js/bootstrap.min.js">

        <!-- Custom javascript -->
        <script src="../javascript/main.js"></script>
</body>

</html>