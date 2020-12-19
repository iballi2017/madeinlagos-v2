<!-- head -->
<?php include '../includes/header.php'; ?>


<div class="overflow-hidden" id="earnings">
    <div class="d-flex align-items-start">
        <div class="">
            <?php include_once '../includes/side-navigation.php' ;?>
        </div>
        <main role="main" class="container-fluid" style="overflow-x: auto">
            <div class="bg-danger text-white p-3">
                N.B: Withdrawal of funds takes 7 days after orders has been delivered without any issues
            </div>
            <div class="border-bottom py-2">
                <button class="btn btn-lg px-0" id="sidenav_toggler">
                    <i class="fas fa-arrow-alt-circle-left"></i>
                </button>
            </div>
            <div class="d-flex align-items-center justify-content-between flex-wrap mb-3 py-2">
                <div class="d-flex align-items-center">
                    <h3 class="my-0 ml-3 uppercase">Earnings</h3>
                </div>
                <button class="btn btn_primary trigger_page_modal">WITHDRAW</button>
            </div>

            <div class="border p-4 text-center">
                <div class="row">
                    <div class="col border-right">
                        <p class="uppercase">Net income</p>
                        <h2>#<span>60,200</span></h2>
                    </div>
                    <div class="col border-right">
                        <p class="uppercase">Withdrawn</p>
                        <h2>#<span>4,200</span></h2>
                    </div>
                    <div class="col">
                        <p class="uppercase">Expected Earnings</p>
                        <h2>#<span>6,200</span></h2>
                    </div>
                </div>
            </div>


            <section>
                <ul class="d-flex flex-wrap list_style_0 mt-4 mb-2" id="product_sorter">
                    <li>
                        <div class="dropdown ml-auto">
                            <a class="btn border m-1 btn-default dropdown-toggle radio_select_option uppercase" href="#"
                                role="button" id="orderDate_select_option" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <!-- Selected Option appears here -->
                            </a>
                            <div class="dropdown-menu shadow border-0 px-3" aria-labelledby="orderDate_select_option">
                                <!--  -->

                                <div class="form-check dropdown-item">
                                    <input class="form-check-input" type="radio" name="order_date" id="2020"
                                        value="2020">
                                    <label class="form-check-label" for="2020">
                                        2020
                                    </label>
                                </div>
                                <div class="form-check dropdown-item">
                                    <input class="form-check-input" type="radio" name="order_date" id="2019"
                                        value="2019" checked>
                                    <label class="form-check-label" for="2019">
                                        2019
                                    </label>
                                </div>
                                <div class="form-check dropdown-item">
                                    <input class="form-check-input" type="radio" name="order_date" id="2018"
                                        value="2018">
                                    <label class="form-check-label" for="2018">
                                        2018
                                    </label>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>

                        <div class="dropdown ml-auto">
                            <a class="btn border m-1 btn-default dropdown-toggle radio_select_option uppercase" href="#"
                                role="button" id="orderMonth_select_option" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <!-- Selected Option appears here -->
                            </a>
                            <div class="dropdown-menu shadow border-0 px-3" aria-labelledby="orderMonth_select_option">
                                <!--  -->

                                <div class="form-check dropdown-item">
                                    <input class="form-check-input" type="radio" name="order_month" id="all_month"
                                        value="all_month" checked>
                                    <label class="form-check-label" for="all_month">
                                        All Months
                                    </label>
                                </div>
                                <div class="form-check dropdown-item">
                                    <input class="form-check-input" type="radio" name="order_month" id="january"
                                        value="january">
                                    <label class="form-check-label" for="january" checked>
                                        January
                                    </label>
                                </div>
                                <div class="form-check dropdown-item">
                                    <input class="form-check-input" type="radio" name="order_month" id="february"
                                        value="february" checked>
                                    <label class="form-check-label" for="february">
                                        February
                                    </label>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </section>


            <!-- table -->
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" id="order_number">ACTIVITY</th>
                            <th scope="col" id="order_date">DATE</th>
                            <th scope="col" id="order_price">PRICE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">
                                ORDER REVENUE
                            </th>
                            <td>21/12/2020</td>
                            <td class="text-success">#<span>12,000</span></td>
                        </tr>
                        <tr>
                            <th scope="row">WITHDRAWAL COMPLETE
                            </th>
                            <td>28/12/2020</td>
                            <td class="text-danger">#<span>9,000</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>



    <!-- Withdrawal modal pop up -->
    <!-- 1. Overlay -->
    <div class="overlay hide"></div>
    <div class="modal_form hide" id="earnings_modal">
        <div class="inner">
            <div class="inner_wrapper border-0 mb-5">
                <div class="bg-white">
                    <form action="#" class="d-flex anim_form" id="bankFormSlidePage">
                        <div class="form_section mx-3 pb-4">
                            <div class="modal_header bg-white text-dark p-3 border-bottom mb-4">
                                <h5 class="uppercase text-center">Enter Bank details</h5>
                                <button class="btn btn-sm p-0 m-0 cancel_modal_close_btn text-danger">
                                    <span class="icon feather-icon" data-feather="x-circle"></span>
                                </button>
                            </div>
                            <div class="pb-2 text-danger text-center hide" id="firstPage_error_msg">
                                <p class="m-0">All fields must be completed!</p>
                            </div>
                            <div class="form-group">
                                <div class="form_wrapper sit">
                                    <label for="amount">Amount</label>
                                    <input type="number" value="" class="form-control bankForm_first_page_control"
                                        id="amount" aria-describedby="amountHelp">
                                </div>
                            </div>
                            <div class="form-group">
                                <select class="custom-select bankForm_first_page_control" id="select" size="3">
                                    <option selected style="color:gray" value="">Select your bank</option>
                                    <option value="UBA">UBA</option>
                                    <option value="Zenith Bank">Zenith Bank</option>
                                    <option value="WEMA Bank">WEMA Bank</option>
                                    <option value="Access Bank">Access Bank</option>
                                    <option value="First Bank">First Bank</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="form_wrapper sit">
                                    <label for="acct_number">Acount Number</label>
                                    <input type="number" value="" class="form-control bankForm_first_page_control"
                                        id="acct_number" aria-describedby="acct_numberHelp">
                                </div>
                            </div>
                            <button type="button" class="btn btn_primary btn-lg btn-block uppercase"
                                id="earningsFormNextBtn">Next</button>
                        </div>
                        <!-- //  -->
                        <div class="form_section mx-3 bg-white container-fluid">
                            <div class="modal_header text-dark p-3 border-bottom mb-4">
                                <h5 class="uppercase text-center">Preview</h5>
                                <button class="btn btn-sm p-0 m-0 cancel_modal_close_btn text-danger">
                                    <span class="icon feather-icon" data-feather="x-circle"></span>
                                </button>
                            </div>
                            <div class="row py-2 border-bottom mb-3">
                                <div class="col">Amount</div>
                                <div class="col">
                                    <div class="float-right">₦ <span id="amount_preview">
                                            <!-- amount preview appears here -->
                                        </span></div>
                                </div>
                            </div>
                            <div class="row py-2 border-bottom mb-3">
                                <div class="col">Bank Name</div>
                                <div class="col">
                                    <div class="float-right" id="bank_preview">
                                        <!-- bank name preview appears here -->
                                    </div>
                                </div>
                            </div>
                            <div class="row py-2 border-bottom mb-3">
                                <div class="col">Account Number</div>
                                <div class="col">
                                    <div class="float-right" id="accountNumber_preview">
                                        <!-- account number preview appears here -->
                                    </div>
                                </div>
                            </div>
                            <button type="submit"
                                class="btn btn_primary btn-lg btn-block uppercase mt-2">Complete</button>
                        </div>
                    </form>
                </div>
            </div>


            <div class="card border-0">
                <div class="card-header modal_header bg-white text-dark p-3 border-bottom mb-4">
                    <button class="btn btn-sm p-0 m-0 cancel_modal_close_btn text-danger">
                        <span class="icon feather-icon" data-feather="x-circle"></span>
                    </button>
                </div>
                <div class="card-body text-center">
                    <div class="w-50 m-auto">
                        <img src="../assets/images/iconmonstr-check-mark.png" alt="iconmonstr-check-mark"
                            class="img img-fluid">
                    </div>
                    <h2 class="uppercase text_primary">SENT</h2>
                    <p>Transaction might take up to 2 minutes</p>
                </div>
            </div>
        </div>
    </div>


    <!-- footer -->
    <?php include '../includes/footer.php'; ?>