  <!-- Header -->
  <?php include_once '../includes/header.php'; ?>
  <div class="container" id="login_page">
      <div class="inner">
          <div class="card w-100 border-0 shadow">
              <div class="card-body">
                  <h5 class="card-title text-center text_primary">LOGIN</h5>
                  <form action="" method="post">
                      <div class="form_control_wrapper mb-3">
                          <label for="email" class="label submerge">Email Address</label>
                          <input type="email" name="email" class="form_control">
                      </div>
                      <div class="form_control_wrapper mb-3">
                          <label for="password" class="label submerge">Password</label>
                          <input type="password" name="password" class="form_control">
                      </div>
                      <div class="form_control_wrapper">
                          <div class="d-flex align-items-center justify-content-between">
                              <div class="checkbox">
								  <input type="checkbox" name="reminder" class="check_rej" id="reminder">
								  <label for="reminder">
									  <span class="custom_checkbox"></span>
									  Remember me
								  </label>
                              </div>
                              <div><a href="./reset-password.php" class="link_primary">Forgot Password?</a></div>
                          </div>
					  </div>
                      <div class="form_control_wrapper">
					  <button type="submit" class="btn btn-block btn_primary">Login</button>
                      </div>
					  <div>Don't have an account? <a href="./register.php" class="link_primary">SIGNUP</a></div>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <!-- Footer -->
  <?php include_once '../includes/footer.php'; ?>