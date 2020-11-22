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
                <div class="px-3">
                    <div>
                        <button class="btn p-0 my-3 d-block d-md-none" id="userAccountMenuBtn">
                            <span data-feather="menu"></span>
                        </button>
                    </div>
                        <!-- If there is no order i.e table is empty -->
                        <div class="alert alert-info text-center" role="alert">
                            No Orders!
                        </div>
                        <!--  -->
                    <div class="table-responsive">
                        <table class="table table-dark order_table">
                            <thead>
                                <tr>
                                    <th scope="col" class="order_number">Order Number</th>
                                    <th scope="col" class="date">Date</th>
                                    <th scope="col" class="ship_to">Ship To</th>
                                    <th scope="col" class="total_amount">Total Amount</th>
                                    <th scope="col" class="status">Status</th>
                                    <th scope="col" class="details">Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">01</th>
                                    <td>20/11/2020</td>
                                    <td>Akinola Oluwatobi</td>
                                    <td><span>#</span>5,000</td>
                                    <td>Delvered</td>
                                    <td><a href="./user-order-details.php?subj=orders&id=1" class="btn btn_primary btn-sm">View</a></td>
                                </tr>
                                <tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
<!-- Footer -->
<?php include_once '../includes/footer.php'; ?>