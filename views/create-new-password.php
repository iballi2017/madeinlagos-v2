  <!-- Header -->
  <?php include_once '../includes/header.php'; ?>
  <div class="container" id="reset_password_page">
      <div class="inner">
          <div class="">
              <h5 class="text-center">RESET PASSWORD</h5>    
              <div class="alert alert-danger text-center" role="alert">
                  Password do not match
              </div>
              <div class="alert alert-success text-center" role="alert">
                  Password saved
              </div>      
                  <form action="" method="post">
                      <div class="form_control_wrapper mb-3">
                          <label for="password" class="label submerge">Password</label>
                          <input type="password" name="password" class="form_control">
                      </div>
                      <div class="form_control_wrapper mb-3">
                          <label for="confirmPassword" class="label submerge">Confirm Password</label>
                          <input type="password" name="confirmPassword" class="form_control">
                      </div>
                      <div class="form_control_wrapper">
					  <button type="submit" class="btn btn-block btn_primary">Login</button>
                      </div>
					 </form>
          </div>
      </div>
  </div>
  <!-- Footer -->
  <?php include_once '../includes/footer.php'; ?>