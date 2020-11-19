    <!-- Header -->
    <?php include_once '../includes/header.php'; ?>

    <div class="mt-5 px-2" id="checkout_page">
        <section class="inner_wrapper">

            <div class="title_wrapper p-3">
                <h4 class="uppercase m-0">Check out</h4>
            </div>
            <form action="#">
                <div class="bg-white mb-3 border">
                    <fieldset class="">
                        <legend class="border-bottom uppercase p-3">1. Receiver’s Details</legend>

                        <!--  -->
                        <div class="p-3">
                            <div class="row">
                                <div class="col-12 col-md-6 mb-4">
                                    <div class="form_grp">
                                        <label class="capitalize d-block" for="fName">First Name</label>
                                        <input type="text" class="d-block w-100" name="fName" id="fName">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 mb-4">
                                    <div class="form_grp">
                                        <label class="capitalize d-block" for="lName">Last Name</label>
                                        <input type="text" class="d-block w-100" name="lName" id="lName">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6 mb-4">
                                    <div class="form_grp">
                                        <label class="capitalize d-block" for="email">Email Address</label>
                                        <input type="text" class="d-block w-100" name="email" id="email">
                                    </div>
                                </div>
                                <div class="col-6 mb-4">
                                    <div class="form_grp">
                                        <label class="capitalize d-block" for="phone">Phone number</label>
                                        <input type="text" class="d-block w-100" name="phone" id="phone">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-md-9 mb-4">
                                    <div class="form_grp">
                                        <label class="capitalize d-block" for="streetAddress">Street Address</label>
                                        <input type="text" class="d-block w-100" name="streetAddress" id="streetAddress">
                                    </div>
                                </div>
                                <div class="col-5 col-md-3 mb-4">
                                    <div class="form_grp">
                                        <label class="capitalize d-block" for="state">State</label>
                                        <div class="select_drop_wrapper">
                                            <select name="state" id="state" class="w-100">
                                                <option value="stateA">State A</option>
                                                <option value="stateB">State B</option>
                                                <option value="stateC">State C</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->

                    </fieldset>
                </div>
                <div class="bg-white mb-3 border">
                    <fieldset class="">
                        <legend class="border-bottom uppercase p-3">2. Payment Method</legend>

                        <!--  -->

                        <div class="row p-3">
                            <div class="col-12 col-md-6">
                                <div class="form_grp mb-3">
                                    <input type="radio" class="radio_rej d-block w-100" name="payment_method"
                                    id="bank_transfer">
                                    <label class="capitalize" for="bank_transfer">
                                        <span class="custom_radio"></span>
                                        <span>Bank Transfer</span>
                                    </label>
                                </div>
                                <div class="hide bg-white shadow p-3" id="seller_account_details">
                                    <ul class="list_style_0">
                                        <li>
                                            <p>Bank Account name:<br />
                                                <span>#### #### #### ####</span>
                                            </p>
                                        </li>
                                        <li>
                                            <p>Bank Account Number:<br />
                                                <span>#### #### #### ####</span>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form_grp mb-3">
                                    <input type="radio" class="radio_rej d-block w-100" name="payment_method"
                                    id="third_party">
                                    <label class="capitalize" for="third_party">
                                        <span class="custom_radio"></span>
                                        <span>Third-party payment interface</span>
                                    </label>
                                </div>
                            </div>

                        </div>
                        <!--  -->

                    </fieldset>
                </div>
                <div class="bg-white mb-3 border" id="shipping_option_wrapper">
                    <fieldset class="">
                        <legend class="border-bottom uppercase p-3">3. SHIPPING </legend>

                        <!--  -->

                        <div class="row p-3">
                            <div class="col-12">
                                <div class="form_grp mb-3">
                                    <input type="radio" class="radio_rej d-block w-100" name="shipping_option"
                                    id="shipping_option_one">
                                    <label class="capitalize" for="shipping_option_one">
                                        <span class="custom_radio"></span>
                                        <span>Lagos – Standard Delivery (1-7 working days, not including weekends or Public
                                        Holidays): ₦1,000</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form_grp mb-3">
                                    <input type="radio" class="radio_rej d-block w-100" name="shipping_option"
                                    id="shipping_option_two">
                                    <label class="capitalize" for="shipping_option_two">
                                        <span class="custom_radio"></span>
                                        <span>Lagos - Next Working Day Delivery – Island (Order before 5pm, not including
                                            weekends or Public Holidays): ₦2,000
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form_grp mb-3">
                                    <input type="radio" class="radio_rej d-block w-100" name="shipping_option"
                                    id="shipping_option_three">
                                    <label class="capitalize" for="shipping_option_three">
                                        <span class="custom_radio"></span>
                                        <span>Lagos – Next Working Day Delivery – Mainland (Order before 5pm, not including
                                        weekends or Public Holidays): ₦2,500 </span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form_grp mb-3">
                                    <input type="radio" class="radio_rej d-block w-100" name="shipping_option"
                                    id="shipping_option_four">
                                    <label class="capitalize" for="shipping_option_four">
                                        <span class="custom_radio"></span>
                                        <span>Lagos – Saturday Delivery – Island (Order before 2pm on Friday): ₦2,500
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form_grp mb-3">
                                    <input type="radio" class="radio_rej d-block w-100" name="shipping_option"
                                    id="shipping_option_five">
                                    <label class="capitalize" for="shipping_option_five">
                                        <span class="custom_radio"></span>
                                        <span>Lagos – Same Day Delivery – Island (Order before 2pm, not including weekends
                                            or
                                        Public Holidays): ₦2,500</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form_grp mb-3">
                                    <input type="radio" class="radio_rej d-block w-100" name="shipping_option"
                                    id="shipping_option_six">
                                    <label class="capitalize" for="shipping_option_six">
                                        <span class="custom_radio"></span>
                                        <span>Lagos – Same Day Delivery – Mainland (Order before 12pm, not including
                                            weekends or
                                        Public Holidays): ₦3,000</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form_grp mb-3">
                                    <input type="radio" class="radio_rej d-block w-100" name="shipping_option"
                                    id="shipping_option_seven">
                                    <label class="capitalize" for="shipping_option_seven">
                                        <span class="custom_radio"></span>
                                        <span>Lagos – Saturday Delivery – Mainland (Order before 2pm on Friday):: ₦3,000
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                    </fieldset>
                </div>


                <!-- Order Summary -->
                <div class="order_summary_section border">
                    <div class="title_wrapper p-3">
                        <h5 class="uppercase m-0">Order Summary</h5>
                    </div>
                    <div class="bg-white">
                        <div class="p-3 border-bottom">
                            <h6 class="m-0">
                                YOUR ORDER ( <span>1</span>&nbsp;<span>ITEM</span> )</h6>
                            </div>
                            <div class="p-3 border-bottom">
                                <ul class="p-0 list_style_0">
                                    <li><span>1</span>&nbsp;<span>Items</span></li>
                                    <li>
                                        <div class="d-flex justify-content-between">
                                            <div class="capitalize">Subtotal:</div>
                                            <div><strong><span>₦</span>&nbsp;<span>71,000</span></strong></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex justify-content-between">
                                            <div class="capitalize">Shipping</div>
                                            <div><strong>---</strong></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex justify-content-between">
                                            <div class="uppercase">vat</div>
                                            <div><strong>---</strong></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-3">
                                <ul class="p-0 m-0 list_style_0">
                                    <li>
                                        <div class="d-flex justify-content-between">
                                            <div class="capitalize">Total to pay:</div>
                                            <div><strong><span>₦</span>&nbsp;<span>71,000</span></strong></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col">
                       <div class="text-center process_btn_wrapper">
                        <a href="#" class="btn btn_white shadow my-3 px-5">MODIFY CART</a>
                        <button type="submit" class="btn btn_primary shadow my-1 my-md-2 px-5">CONFIRM ORDER</button>
                    </div>
                </div>
            </div>
        </form>
    </section>


    <!-- Thank you message when form is submitted -->
    <section>
        <div class="container" id="thank_you_message">
            <div class="inner text-center">
               <p> <span class="display_1">THANK YOU FOR SHOPPING WITH US  !!</span><br/>
                <span>A mail will be sent to your email address</span><br/>
                <a href="#" class="text_decorate_0 link_primary">CONTINUE SHOPPING</a></p>
            </div>
        </div>
    </section>
</div>

<!-- Footer -->
<?php include_once '../includes/footer.php'; ?>