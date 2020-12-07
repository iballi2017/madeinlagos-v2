<!-- head -->
<?php include '../includes/head.php'; ?>


<!-- main -->
<div class="container">
    <h4 class="text-center text_primary mb-5 mt-3">Register and start selling today, CREATE A SELLERS VILLA ACCOUNT</h4>
</div>
<div id="registration_form_wrapper">
    <div class="progress_bar d-flex my-5">
        <div class="step text-center">
            <div class="bullet active">
                <span>1</span>
            </div>
            <p>SELLER ACCOUNT</p>
        </div>
        <div class="step text-center">
            <div class="bullet">
                <span>2</span>
            </div>
            <p>BUSINESS INFORMATION</p>
        </div>
    </div>
    <div class="inner mb-5">
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
                            aria-describedby="nameHelp" required>
                    </div>
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                        <small id="errorMsg" class="form-text text-danger">Something wrong has happened</small> -->
                </div>
                <div class="form-group">
                    <div class="form_wrapper sit">
                        <label for="phone">Phone Number</label>
                        <input type="text" value="" class="form-control first_page_control" id="phone"
                            aria-describedby="phoneHelp" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form_wrapper sit">
                        <label for="streetAddress">Street Address</label>
                        <input type="text" value="" class="form-control first_page_control" id="streetAddress"
                            aria-describedby="streetAddressHelp" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form_wrapper sit">
                        <label for="email">Email Address</label>
                        <input type="email" value="" class="form-control first_page_control email_field" id="email"
                            aria-describedby="emailHelp" required>
                    </div>
                    <small id="errorMsg" class="form-text text-danger incorrect_email_error hide">Incorrect e-mail address</small>
                </div>
                <div class="form-group">
                    <div class="form_wrapper sit">
                        <label for="email_test">Re-type Email Address</label>
                        <input type="email" value="" class="form-control first_page_control email_field" id="email_test"
                            aria-describedby="email_testHelp" required>
                    </div>
                    <small id="errorMsg" class="form-text text-danger email_error hide">Your email addresses do not
                        match</small>
                    <small id="errorMsg" class="form-text text-danger incorrect_email_error hide">Incorrect e-mail address</small>
                </div>
                <div class="form-group">
                    <div class="form_wrapper sit">
                        <label for="password">Password</label>
                        <input type="password" value="" class="form-control first_page_control pwd_field" id="password"
                            aria-describedby="passwordHelp" required>
                    </div>
                    <small id="errorMsg" class="form-text text-danger pwd_error hide">Your passwords do not
                        match</small>
                </div>
                <div class="form-group">
                    <div class="form_wrapper sit">
                        <label for="cPassword">Re-type Password</label>
                        <input type="password" value="" class="form-control first_page_control pwd_field" id="cPassword"
                            aria-describedby="cPasswordHelp" required>
                    </div>
                    <small id="errorMsg" class="form-text text-danger pwd_error hide">Your passwords do not
                        match</small>
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
                            aria-describedby="storeNameHelp" required>
                    </div>
                    <small id="errorMsg" class="form-text text-danger businessField_error hide">The store name should
                        not be empty!</small>
                </div>
                <div class="form-group">
                    <div class="form_wrapper sit">
                        <label for="storeStreetAddress">Street Address</label>
                        <input type="text" value="" class="form-control second_page_control" id="storeStreetAddress"
                            aria-describedby="storeStreetAddressHelp" required>
                    </div>
                    <small id="errorMsg" class="form-text text-danger businessField_error hide">Please, provide your
                        street name</small>
                </div>
                <div class="form-group">
                    <div class="select_drop_wrapper form_wrapper">
                        <select class="custom-select border-0 second_page_control" name="gender">
                            <option value="" selected>Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <small id="errorMsg" class="form-text text-danger businessField_error hide">Please, select your
                        gender</small>
                </div>
                <div class="form-group">
                    <div class="select_drop_wrapper form_wrapper">
                        <select class="custom-select border-0 second_page_control" name="country">
                            <option value="" selected>Country</option>
                            <option value="country1">Country 1</option>
                            <option value="country2">Country 2</option>
                        </select>
                    </div>
                    <small id="errorMsg" class="form-text text-danger businessField_error hide">Please, select your country</small>
                </div>
                <!-- upload file field -->
                <div class="form-group">
                    <div class="file_upload_wrapper">
                        <div class="file_btn_wrap">
                            <!-- file input for user interface -->
                            <input type="text" id="pseudo_file" class="border-0 border-right px-3"
                                placeholder="Upload Your Personal ID" required>
                            <!-- file input for processing -->
                            <input class="" type="file" id="docFile" name="docFile" accept="image/png, image/jpeg"
                                onchange="pickfile()" required>
                            <!-- file input label -->
                            <label class="file_btn border" for="docFile">Choose a file</label>
                        </div>
                    </div>
                    <small id="errorMsg" class="form-text text-danger file_upload_error hide">You need to upload an
                        ID</small>
                </div>
                <!-- /upload file field -->
                <button type="button" class="btn btn_primary float-left px-3 backBtn" onclick="prevBtn()">Back</button>
                <button type="submit" class="btn float-right px-3 btn_primary"
                    id="register_submit_btn">Complete</button>
            </div>
        </form>
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

<script>
var docFile = document.getElementById("docFile");
var pseudoFile = document.getElementById("pseudo_file");

function pickfile() {
    pseudoFile.value = docFile.value;
    pseudoFile.value = docFile.value.slice(12);
    // if(docFile.value == ''){
    //     let file_upload_error = document.getElementById("file_upload_error");
    //     if(file_upload_error.classList.contains("hide")){
    //         file_upload_error.classList.remove("hide");
    //     }
    // }
}
</script>
</body>

</html>