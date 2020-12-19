<!-- head -->
<?php include '../includes/header.php'; ?>



<div class="overflow-hidden">
    <div class="d-flex align-items-start">
        <div class="">
            <?php include_once '../includes/side-navigation.php' ;?>
        </div>
        <main role="main" class="container" style="overflow-x: auto">
            <div class="border-bottom py-2">
                <button class="btn btn-lg px-0" id="sidenav_toggler">
                    <span class="icon feather-icon md" data-feather="arrow-left-circle"></span>
                </button>
            </div>
            <div class="d-flex align-items-center justify-content-between flex-wrap mb-3 py-2">
                <div class="d-flex align-items-center">
                    <button class="btn p-0" onclick="goBack()">
                        <span class="icon feather-icon md" data-feather="arrow-left"></span>
                    </button>
                    <h3 class="my-0 ml-3">Customer Order Details</h3>
                </div>
                <div class="delivered display_1">Delivered</div>
            </div>
            <div class="d-flex align-items-center justify-content-between flex-wrap border mb-3 p-3">
                <div class="d-flex align-items-center">
                    <span class="display_1 uppercase">Order #304758590389547843</span>
                    <span class="my-0 ml-3">10 DEC, 2020</span>
                </div>
                <div class="display_1">#<span>25,000</span></div>
            </div>

            <div class="border p-3 mb-3">
                <dl>
                    <dt>From <span>Aderibigbe Adeola</span></dt>
                    <dd>
                        Hello, I requested for a O & O VINTAGE OFADA RICE I got Oniko rice, Please change it to what I
                        requested for O & O VINTAGE OFADA RICE. <br />Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Debitis, accusamus nemo iste dolorem eaque aliquid, non laudantium magni distinctio, enim
                        inventore quibusdam! Totam, similique amet! Debitis ut cupiditate iste inventore?<button
                            class="btn m-0 p-0 text_primary">more...</button>
                    </dd>
                </dl>
            </div>

            <div class="border p-3 mb-3">
                <h4>Customer Details</h4>
                <hr />
                <div class="d-flex align justify-content-between flex-wrap">
                    <span>Customer Name: Aderibigbe Adeola</span>
                    <span>Phone Number: 08046373399</span>
                    <span>Email Address: aderibigbe@gmail.com</span>
                    <span>Address: 13 Aderibigbe street, Mushin, Lagos</span>
                </div>
            </div>

            <section>

                <div class="d-flex my-2">
                    <button class="btn btn_white btn-lg mr-2 trigger_page_modal">
                        CANCEL
                    </button>
                    <button class="btn btn_white btn-lg">
                        DELIVERED
                    </button>
                </div>
                <!-- table -->
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="row" width="7px">
                                    <input type="checkbox" name="order_product" id="all_row_check" class="check">
                                    <label for="all_row_check">
                                        <span class="custom_check"></span>
                                    </label>
                                </th>
                                <th scope="col" id="prod_name_img">PRODUCT</th>
                                <th scope="col" id="prod_qty">QUANTITY</th>
                                <th scope="col" id="prod_qty">DURATION</th>
                                <th scope="col" id="prod_price">PRICE</th>
                                <th scope="col" id="prod_status">STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <input type="checkbox" name="order_product" id="row_check2" class="check">
                                    <label for="row_check2">
                                        <span class="custom_check"></span>
                                    </label>
                                </th>
                                <th scope="col">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="../assets/images/chakalaka-south-african-food.png"
                                                class="card-img" alt="..." style="width:70px">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="m-0">ITALIAN BELT</h6>
                                        </div>
                                    </div>
                                </th>
                                <td>1</td>
                                <td>2 Days</td>
                                <td>#<span>12,000</span></td>
                                <td>
                                    <span class="returned">Returned</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <input type="checkbox" name="order_product" id="row_check3" class="check">
                                    <label for="row_check3">
                                        <span class="custom_check"></span>
                                    </label>
                                </th>
                                <th scope="col">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="../assets/images/chakalaka-south-african-food.png"
                                                class="card-img" alt="..." style="width:70px">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="m-0">ITALIAN BELT</h6>
                                        </div>
                                    </div>
                                </th>
                                <td>1</td>
                                <td>2 Days</td>
                                <td>#<span>12,000</span></td>
                                <td>
                                    <span class="delivered">Delivered</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>
</div>

<!-- Cancellation modal pop up -->
<!-- 1. Overlay -->
<div class="overlay hide"></div>
<div class="modal_form hide">
    <div class="inner">
        <div class="card border-0 mb-5">
            <div class="card-header bg-danger text-white">
                <h5 class="uppercase text-center">Cancel Order</h5>
                <button class="btn btn-sm p-0 m-0 cancel_modal_close_btn text-white">
                    <span class="icon feather-icon" data-feather="x-circle"></span>
                </button>
            </div>
            <div class="card-body">
                <form action="#">
                    <textarea name="" id="" cols="" rows="10" style="width:100%"></textarea>
                    <button class="btn btn_primary btn-lg btn-block uppercase">Complete</button>
                </form>
            </div>
        </div>
        <div class="card border-0">
            <div class="card-body text-center">
                <div class="w-50 m-auto">
                    <img src="../assets/images/iconmonstr-check-mark.png" alt="iconmonstr-check-mark"
                        class="img img-fluid">
                </div>
                <p>Your Order has been cancelled</p>
            </div>
        </div>
    </div>
</div>
<!-- footer -->
<?php include '../includes/footer.php'; ?>