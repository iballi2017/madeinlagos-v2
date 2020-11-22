  <!-- Header -->
  <?php include_once '../includes/header.php'; ?>
  <div class="container" id="register_page">
      <div class="inner">
          <div class="card w-100 border-0 shadow">
              <div class="card-body">
                  <h5 class="card-title text-center text_primary">SIGN UP</h5>
                  
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-9">
                                <div class="form_grp mb-3">
                                    <label class="text_capital d-block" for="fullName">Full Name</label>
                                    <input type="text" class="d-block w-100" name="fullName" id="fullName">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form_grp mb-3">
                                    <label class="text_capital d-block" for="gender">Gender</label>
                                    <div class="select_drop_wrapper">
                                        <select class="w-100" name="gender" id="gender">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form_grp mb-3">
                                    <label class="text_capital d-block" for="email">Email Address</label>
                                    <input type="email" class="d-block w-100" name="email" id="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form_grp mb-3">
                                    <label class="text_capital d-block" for="phone">Phone Number</label>
                                    <input type="text" class="d-block w-100" name="phone" id="phone">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form_grp mb-3">
                                    <label class="text_capital d-block" for="address">Address</label>
                                    <input type="text" class="d-block w-100" name="address" id="address">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form_grp mb-3">
                                    <label class="text_capital d-block" for="town_city">Town/City</label>
                                    <div class="select_drop_wrapper">
                                        <select class="w-100" name="town_city" id="town_city">
                                            <option value="Town A">Town A</option>
                                            <option value="Town B">Town B</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form_grp mb-3">
                                    <label class="text_capital d-block" for="state_city">State</label>
                                    <div class="select_drop_wrapper">
                                        <select class="w-100" name="state_city" id="state_city">
                                            <option value="State A">State A</option>
                                            <option value="State B">State B</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form_grp mb-3">
                                    <label class="text_capital d-block" for="pwd">Password</label>
                                    <input type="password" class="d-block w-100" name="pwd" id="pwd">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form_grp mb-3">
                                    <label class="text_capital d-block" for="confirm_pwd">Confirm Password</label>
                                    <input type="text" class="d-block w-100" name="confirm_pwd" id="confirm_pwd">
                                </div>
                            </div>
                        </div>
                        <div class="form_grp mb-3">
                            <button type="submit" class="btn btn-block py-2 btn_primary rounded">REGISTER</button>
                        </div>
					  <div>Already have an account? <a href="./login.php" class="link_primary">LOGIN</a></div>
                    </form>
              </div>
          </div>
      </div>
  </div>
  <!-- Footer -->
  <?php include_once '../includes/footer.php'; ?>