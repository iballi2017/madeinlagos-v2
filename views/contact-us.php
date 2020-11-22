  <!-- Header -->
  <?php include_once '../includes/header.php'; ?>
  <div id="contact_us_page">

      <div class="container">
          <ul class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li>Contact Us</li>
          </ul>
      </div>
      <div class="border-bottom">
          <div class="container">
              <h3>CONTACT US</h3>
          </div>
      </div>
      <section>
          <div class="container mt-3 mb-5">
              <h5 class="text-center">Get in touch with us!</h5>

              <div class="row">
                  <div class="col-6 col-md-3 contact_option my-1">
                      <div class="text-center">
                          <span data-feather="phone" class="icon"></span>
                          <h6>Phone Number:</h6>
                          <span>090X XXXX XXX</span>
                      </div>
                  </div>
                  <div class="col-6 col-md-3 contact_option my-1">
                      <div class="text-center">
                          <span data-feather="mail" class="icon"></span>
                          <h6>Email Address:</h6>
                          <span>support@madeinlagos.com</span>
                      </div>
                  </div>
                  <div class="col-6 col-md-3 contact_option my-1">
                      <div class="text-center">
                          <span data-feather="map-pin" class="icon"></span>
                          <h6>Location:</h6>
                          <span>23, adesanya street, iyolope lga, Lagos state.</span>
                      </div>
                  </div>
                  <div class="col-6 col-md-3 my-1">
                      <div class="text-center">
                          <span data-feather="clock" class="icon"></span>
                          <h6>Working Hours:</h6>
                          <span>Monday –Saturday (8am – 5.30pm)</span>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <section class="mb-5">
          <div id="form_area">
              <h4 class="text-center mb-3">If you got any questions<br />please do not hesitate to send us a message
              </h4>
              <form action="#" method="post" class="container">
                  <div class="row">
                      <div class="col-12">
                          <div class="form_control_wrapper mb-3">
                              <label for="name" class="label submerge">Name</label>
                              <input type="text" name="name" class="form_control">
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-12 col-md-6">
                          <div class="form_control_wrapper mb-3">
                              <label for="phone" class="label submerge">Phone Number</label>
                              <input type="text" name="phone" class="form_control">
                          </div>
                      </div>
                      <div class="col-12 col-md-6">
                          <div class="form_control_wrapper mb-3">
                              <label for="email" class="label submerge">Email Address</label>
                              <input type="email" name="email" class="form_control">
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-12">
                          <div class="form_control_wrapper mb-3">
                              <label class="d-block" for="comment">Message</label>
                              <textarea rows="5" cols="55" class="w-100" name="comment" id="comment"></textarea>
                          </div>
                      </div>
                  </div>
                  <div class="form_control_wrapper mb-3">
                      <button type="submit" class="btn btn-block btn-md-auto py-2 btn_primary rounded-0">SUBMIT</button>
                  </div>
              </form>
          </div>
      </section>
  </div>
  <!-- Footer -->
  <?php include_once '../includes/footer.php'; ?>