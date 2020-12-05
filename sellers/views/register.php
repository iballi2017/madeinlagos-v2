<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/plugins/bootstrap-4.2.1/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../stylesheet/main.css">
</head>

<body>
    <!-- header -->
    <div
        class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg_secondary border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal text-white uppercase">Sellers Villa</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-white" href="./login.php">Login</a>
        </nav>
        <a class="btn btn_primary" href="./register.php">Sign up</a>
    </div> <!-- //header -->


    <!-- main -->
    <!-- <div class="container"> -->
    <h4 class="text-center text_primary mb-5">Register and start selling today, CREATE A SELLERS VILLA ACCOUNT</h4>
    <!-- </div> -->
    <div id="registration_form_wrapper">
        <div class="inner">
            <!-- <form action="#"> -->
            <form action="#" id="register_for_area" class="d-flex slidePage">
                <!-- Account Info -->
                <div id="account_info" class="page mx-2">

                    <div class="alert alert-danger hide" role="alert" id="accountInfo_form_errorMsg">
                       Complete empty fields!
                    </div>
                    <div class="form-group">
                        <div class="form_wrapper sit">
                            <label for="name">First and Last Name</label>
                            <input type="text" value="" class="form-control first_page_control" id="name"
                                aria-describedby="nameHelp">
                        </div>
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                        <small id="errorMsg" class="form-text text-danger">Something wrong has happened</small> -->
                    </div>
                    <div class="form-group">
                        <div class="form_wrapper sit">
                            <label for="phone">Phone Number</label>
                            <input type="text" value="" class="form-control first_page_control" id="phone"
                                aria-describedby="phoneHelp">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form_wrapper sit">
                            <label for="streetAddress">Street Address</label>
                            <input type="text" value="" class="form-control first_page_control" id="streetAddress"
                                aria-describedby="streetAddressHelp">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form_wrapper sit">
                            <label for="email">Email Address</label>
                            <input type="text" value="" class="form-control first_page_control" id="email"
                                aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form_wrapper sit">
                            <label for="email_test">Re-type Email Address</label>
                            <input type="text" value="" class="form-control first_page_control" id="email_test"
                                aria-describedby="email_testHelp">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form_wrapper sit">
                            <label for="password">Password</label>
                            <input type="password" value="" class="form-control first_page_control" id="password"
                                aria-describedby="passwordHelp">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form_wrapper sit">
                            <label for="cPassword">Re-type Password</label>
                            <input type="password" value="" class="form-control first_page_control" id="cPassword"
                                aria-describedby="cPasswordHelp">
                        </div>
                        <small id="errorMsg" class="form-text text-danger pwd_error hide">Your passwords does not match</small>
                    </div>
                    <button type="button" class="btn btn_primary float-right px-3 nextBtn">Complete</button>
                </div>

                <!-- Business Info -->
                <div id="business_info" class="page mx-2">

                    <div class="alert alert-danger hide" role="alert" id="businessInfo_form_errorMsg">
                       Complete empty fields!
                    </div>
                    <div class="form-group">
                        <div class="form_wrapper sit">
                            <label for="storeName">Store Name</label>
                            <input type="text" value="" class="form-control second_page_control" id="storeName"
                                aria-describedby="storeNameHelp">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form_wrapper sit">
                            <label for="storeStreetAddress">Street Address</label>
                            <input type="text" value="" class="form-control second_page_control" id="storeStreetAddress"
                                aria-describedby="storeStreetAddressHelp">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form_wrapper sit">
                            <label for="gender">Gender</label>
                            <input type="text" value="" class="form-control second_page_control" id="gender" aria-describedby="genderHelp">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form_wrapper sit">
                            <label for="country">Country</label>
                            <input type="text" value="" class="form-control second_page_control" id="country"
                                aria-describedby="countryHelp">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form_wrapper sit">
                            <label for="idImage">Upload Your Personal ID</label>
                            <input type="text" value="" class="form-control second_page_control" id="idImage" aria-describedby="genderHelp">
                        </div>
                    </div>
                    <button type="button" class="btn btn_primary float-left px-3 backBtn" onclick="prevBtn()">Back</button>
                    <button type="submit" class="btn float-right px-3 btn_primary" id="register_submit_btn">Complete</button>
                </div>
            </form>
            <!-- </form> -->
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