<?php 
if(isset($_GET["subj"]) && isset($_GET["id"])){
    $subj = $_GET["subj"];
    $id = $_GET["id"];
}else{
    header("Location: ../index.php");
    exit();
}

?>
<!-- Header -->
<?php include_once '../includes/header.php'; ?>
<!-- <div class="d-flex align-items-start container mt-md-5 w-100 user_account" id=""> -->
<div class="container mt-md-5 w-100 user_account" id="user_order_page">
    <div class="row no-gutters">
        <div class="col-3">
            <?php include_once '../includes/user-sidebar.php'; ?>
        </div>
        <div class="col-12 col-md-9">
            <main class="main_area">
                <div class="px-3 mb-5">
                    <!-- <div>
                        <button class="btn p-0 my-3 d-block d-md-none" id="userAccountMenuBtn">
                            <span data-feather="menu"></span>
                        </button>
                    </div> -->
                    <div class="d-flex align-items-center border-bottom">
                        <button class="btn p-0 my-3" id="userAccountMenuBtn">
                            <span data-feather="arrow-left"></span>
                        </button>
                        <h5>Order Details</h5>
                    </div>
                    <div class="border-bottom py-3">
                        <ul class="list_style_0 my-0">
                            <li><span>2</span>&nbsp;Item<span>s</span></li>
                            <li>Placed on&nbsp;<span>29-11-2020</span></li>
                            <li>Total:&nbsp;#<span>4000</span></li>
                        </ul>
                    </div>
                    <div class="py-3">
                        <h5>ITEMS IN YOUR ORDER</h5>
                        <div class="border">
                            <div class="p-2 border-bottom">
                                Status : <span><strong>DELIVERED</strong></span>
                            </div>
                            <div class="container p-0">
                                <!-- Item -->
                                <div class="row py-2 border m-2">
                                    <div class="col-4 col-md-2 p-0 m-0">
                                        <img src="../assets/images/sample-prod.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-8 col-md-4 p-0 m-0">
                                        <h6 class="m-0">Scanfrost 6.8kg Twin Tub Semi- Automatic Washing Machine -
                                            SFSANTTD6.</h6>
                                    </div>
                                    <div class="col-4 col-md-2 text-center p-0 m-0">
                                        <dl>
                                            <dt>Quantity</dt>
                                            <dd>1</dd>
                                        </dl>
                                    </div>
                                    <div class="col-4 col-md-2 text-center p-0 m-0">
                                        <dl>
                                            <dt>Price</dt>
                                            <dd>₦&nbsp;<span>71,000</span></dd>
                                        </dl>
                                    </div>
                                    <div class="col-12 col-md-2 text-center m-0">
                                        <button class="btn btn-block btn_primary btn-sm">REFUND</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid px-0">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="card h-100 my-2 rounded-0">
                                    <div class="card-body">
                                        <h5 class="card-title">PAYMENT INFORMATION</h5>
                                        <dl>
                                            <dt>Payment Method</dt>
                                            <dd>Bank Transfer / Third-party payment interface</dd>
                                            <dt>Payment Details</dt>
                                            <dd>Items total: ₦&nbsp;<span>4000</span></dd>
                                        </dl>
                                        <p>Shipping Fees: </p>
                                        <p>Total: ₦&nbsp;<span>4000</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="card h-100 my-2 rounded-0">
                                    <div class="card-body">
                                        <h5 class="card-title">DELIVERY INFORMATION</h5>
                                        <dl>
                                            <dt>Delivery Method</dt>
                                            <dd>Standard Door Delivery</dd>
                                            <dt>Shipping Address</dt>
                                            <dd>AKINOLA OLUWATOBI</dd>
                                        </dl>
                                        <p>6a kolawole Shonibare Street, Ilupeju, Lagos Nigeria
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
<!-- Footer -->
<?php include_once '../includes/footer.php'; ?>