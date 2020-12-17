  <!-- Header -->
  <?php include_once '../includes/header.php'; ?>
  <div class="container" id="login_page">
      <div class="inner">
          <div class="card w-100 border-0 shadow">
              <div class="card-body">
                  <h5 class="card-title text-center text_primary">LOGIN</h5>
                  <form action="" method="post">                  
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
                      <div class="form_control_wrapper mb-3">
					  <button type="submit" class="btn btn-block py-2 btn_primary">Login</button>
                      </div>
					  <div>Don't have an account? <a href="./register.php" class="link_primary">SIGNUP</a></div>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <!-- Footer -->
  <?php include_once '../includes/footer.php'; ?>
