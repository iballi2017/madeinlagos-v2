  <!-- Header -->
  <?php include_once '../includes/header.php'; ?>
  <div class="container" id="reset_password_page">
      <div class="inner">
          <div class="text-center">
              <h5>RESET PASSWORD</h5>
              <div class="alert alert-danger" role="alert">
                  Invalid email address
              </div>
              <div class="alert alert-success" role="alert">
                  Please check your email
              </div>
              <p>Please enter the email address you registered with. We will send you a link</p>
              <form action="#" method="post">

                  <div class="input-group">
                      <input type="text" class="form-control" aria-label="Enter email address"
                          placeholder="Enter email address" aria-describedby="send-link">
                      <div class="input-group-append">
                          <button class="btn text-white bg_primary" type="button" id="send-link">SEND LINK</button>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
  <!-- Footer -->
  <?php include_once '../includes/footer.php'; ?>