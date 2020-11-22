  <!-- Header -->
  <?php include_once '../includes/header.php'; ?>
  <!-- <div class="d-flex align-items-start container mt-md-5 w-100 user_account" id=""> -->
  <div class="container mt-md-5 w-100 user_account" id="">
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
                      <!-- If profile is successfully updated -->
                      <div class="alert alert-info text-center" role="alert">
                          Your profile is successsfully updated!
                      </div>
                      <!--  -->
                      <div class="p-3 border">
                          <h4 class="m-0">Account Overview</h4>
                      </div>
                      <form action="#" method="post">
                          <div class="border border-top-0">
                              <div class="p-3">
                                  <div class="row">
                                      <div class="col-12 col-md-6">
                                          <div class="form_control_wrapper mb-3">
                                              <input type="text" name="fName" id="fName" placeholder="Full Name">
                                          </div>
                                      </div>
                                      <div class="col-12 col-md-6">
                                          <div class="form_control_wrapper mb-3">
                                              <input type="email" name="email" id="email"
                                                  placeholder="Current Email Address">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-12 col-md-6">
                                          <div class="form_control_wrapper mb-3 mb-md-0">
                                              <input type="text" name="address" id="address" placeholder="Address Book">
                                          </div>
                                      </div>
                                      <div class="col-12 col-md-6">
                                          <div class="form_control_wrapper">
                                              <input type="text" name="phone" id="phone" placeholder="Phone Number">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="p-3 border-top">
                                  <div class="row">
                                      <div class="col-12 col-md-6">
                                          <div class="form_control_wrapper mb-3 mb-md-0">
                                              <input type="password" name="oldPwd" id="oldPwd"
                                                  placeholder="Old Password">
                                          </div>
                                      </div>
                                      <div class="col-12 col-md-6">
                                          <div class="form_control_wrapper">
                                              <input type="password" name="newPwd" id="newPwd"
                                                  placeholder="New Password">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="my-3">
                              <button type="submit" class="btn btn_primary rounded-0">UPDATE PROFILE</button>
                          </div>
                      </form>
                  </div>
              </main>
          </div>
      </div>
  </div>
  <!-- Footer -->
  <?php include_once '../includes/footer.php'; ?>