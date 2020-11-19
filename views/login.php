  <!-- Header -->
  <?php include_once '../includes/header.php'; ?>
  <style type="text/css">
#login_page {}

.inner {
    max-width: 600px;
    margin: 0 auto;
    /*height: 100vh;*/
    margin-top: 5em;
    margin-bottom: 3em;
    display: flex;
    align-items: center;
}

form {
    display: block;
}

form .form_control_wrapper {
    position: relative;
    margin-bottom: 1.8em;
}

form .form_control_wrapper>input {
    display: block;
    width: 100%;
}

form .form_control_wrapper>label.submerge {
    position: absolute;
    bottom: 0;
    left: .4em;
}

form .form_control_wrapper>input {
    padding: .4em;
}
  </style>
  <div class="container" id="login_page">
      <div class="inner">
          <div class="card w-100">
              <div class="card-body">
                  <h5 class="card-title text-center">Login</h5>
                  <form action="" method="post">
                      <div class="form_control_wrapper">
                          <label for="email" class="label submerge">Email Address</label>
                          <input type="email" name="email" class="form_control">
                      </div>
                      <div class="form_control_wrapper">
                          <label for="password" class="label submerge">Password</label>
                          <input type="password" name="password" class="form_control">
                      </div>
                      <div class="form_control_wrapper">
                          <div class="d-flex align-items-center justify-content-between">
                              <div class="checkbox">
                                  <!-- <input type="radio" class="radio_rej d-block w-100" name="shipping_option"
                                      id="shipping_option_two">
                                  <label class="capitalize" for="shipping_option_two">
                                      <span class="custom_radio"></span>
                                      <span>Lagos - Next Working Day Delivery – Island (Order before 5pm, not including
                                          weekends or Public Holidays): ₦2,000
                                      </span>
								  </label> -->
								  <input type="checkbox" name="reminder" id="reminder">
								  <label for="reminder">Remember me
									  <span class="custom_checkbox">ff</span>
								  </label>
                              </div>
                              <div><a href="#">Forgot Password?</a></div>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <!-- Footer -->
  <?php include_once '../includes/footer.php'; ?>