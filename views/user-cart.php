<!-- Header -->
<?php include_once '../includes/header.php'; ?>


<div id="user_cart">


    <div class="container">
        <div class="mx-2">
        <h5 class="py-2">Cart (1 Item)</h5>

        <div class="row bg-secondary p-2 text-white heading_label">
            <div class="col col-md-5 d-none d-md-block">
                Item
            </div>
            <div class="col col-md-2 d-none d-md-block">
                Quantity
            </div>
            <div class="col col-md-2 d-none d-md-block">
                Price
            </div>
            <div class="col col-md-2 d-none d-md-block">
                Action
            </div>
        </div>
        <!-- Item 1 -->
        <div class="row bg-white p-2 mb-1 border">
            <div class="col-12 col-md-5">
                <div class="d-flex align-items-center justify-content-between">

                    <img src="../assets/images/sample-prod.png" class="card-img mr-2" alt="..."
                        style="max-width: 100px;">
                    <div>
                        <h6>Scanfrost 6.8kg Twin Tub Semi -Automatic Washing Machine...</h6>
                    </div>
                </div>

            </div>
            <div class="col-4 col-md-2 item_qty_wrapper">

                <div>
                    <small class="d-block d-md-none">Quantity</small>
                    <div class="d-flex align-items-center border">
                        <button class="btn p-0 btn_primary text-white rounded-0 border-right">-</button>
                        <div class="text-center">1</div>
                        <button class="btn p-0 btn_primary text-white rounded-0 border-left">+</button>
                    </div>
                </div>
            </div>
            <div class="col-8 col-md-2">
                <div class="item_cost">
                    <div>₦ 71,000 </div>
                    <div class="initial_cal">
                        <span>₦71,000</span>&nbsp;x&nbsp;<span>1</span>&nbsp;Item
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-2">
                <div class="cart_btn_wrapper">
                    <button class="btn cart_item_btn remove"><small>
                            <i class="fas fa-trash"></i>
                            Remove</small></button>
                    <button class="btn cart_item_btn save_item"><small>
                            <i class="fas fa-heart"></i>
                            Save Item</small></button>
                </div>
            </div>
        </div>
        <!-- Item 2 -->

        <!-- Total Amount -->
        <div class="row">
            <div class="col">
                <div class="cart_summary_wrapper float-right mb-2">
                    <label for="">TOTAL:&nbsp;</label>
                    <span class="total_cost"><span>₦</span>&nbsp;<span>71,000</span></span>
                    <div class="info">Without shipping fee</div>
                </div>
            </div>
        </div>

        <!-- Process buttons -->
        <div class="row">
            <div class="col">
                <div class="text-center process_btn_wrapper float-md-right">
                    <a href="#" class="btn btn_white border py-2 px-md-5 process_btn">CONTINUE SHOP</a>
                    <button type="submit" class="btn btn_primary my-1 py-2 px-md-5 process_btn">PROCEED TO
                        CHECKOUT</button>
                </div>
            </div>
        </div>



        <!-- Message for an empty cart -->
        <div class="d-block d-md-none my-3">
            <button class="btn back_history border-0" onclick="goBack()">
                <i class="fas fa-long-arrow-alt-left fa-2x"></i></button>
            &nbsp;<h5>Order</h5>
        </div>

        <div class="empty_cart_msg_wrapper mt-5">
            <div class="text-center inner bg-white p-5 shadow">
                <div class="cart_icon_wrapper relative_position">
                    <i class="fas fa-shopping-cart"></i>
                    <div class="plus_icon_wrapper bg-danger text-white">
                        <i class="fas fa-plus"></i>
                    </div>
                </div>

                <p>Cart empty</p>
                <p><a href="#" class="link_primary green_hover">CONTINUE SHOPPING</a></p>
            </div>
        </div></div>
    </div>
</div>

<!-- Footer -->
<?php include_once '../includes/footer.php'; ?>