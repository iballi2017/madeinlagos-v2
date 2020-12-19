<!-- head -->
<?php include '../includes/header.php'; ?>


<div class="overflow-hidden" id="uploaded_products">
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

            <section>
                <div class="container d-flex flex-wrap justify-content-between align-items-center py-4">
                    <h4>PRODUCT UPLOAD</h4>
                    <a href="./add-new-product.php" class="btn btn_primary">SELL PRODUCT</a>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <ul class="d-flex flex-wrap list_style_0" id="product_sorter">
                            <li>
                                <input type="radio" name="sortProducts" id="every_status">
                                <label for="every_status">EVERY STATUS</label>
                            </li>
                            <li>
                                <input type="radio" name="sortProducts" id="approved">
                                <label for="approved">APPROVED</label>
                            </li>
                            <li>
                                <input type="radio" name="sortProducts" id="pending">
                                <label for="pending">PENDING</label>
                            </li>
                        </ul>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search Product"
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn_primary" type="button" id="seach_btn">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- table -->
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" id="prod_name">PRODUCT</th>
                            <th scope="col" id="prod_qty">QUANTITY</th>
                            <th scope="col" id="prod_price">PRICE</th>
                            <th scope="col" id="prod_status">STATUS</th>
                            <th scope="col" id="action"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="../assets/images/chakalaka-south-african-food.png" class="card-img"
                                            alt="..." style="width:70px">
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="m-0">ITALIAN BELT</h6>
                                    </div>
                                </div>
                            </th>
                            <td>1</td>
                            <td>#<span>12,000</span></td>
                            <td>
                                <span class="pending">Pending</span>
                            </td>
                            <td>
                                <button class="btn btn-sm p-0 mx-1 text-danger">
                                    <span class="icon feather-icon" data-feather="trash"></span>
                                </button>
                                <!-- <button class="btn btn-sm p-0 mx-1">
                                <span class="icon feather-icon" data-feather="edit"></span>
                            </button>    -->
                                <a href="./edit-product.php" class="btn btn-sm p-0 mx-1">
                                    <span class="icon feather-icon" data-feather="edit"></span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="../assets/images/chakalaka-south-african-food.png" class="card-img"
                                            alt="..." style="width:70px">
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="m-0">ITALIAN BELT</h6>
                                    </div>
                                </div>
                            </th>
                            <td>2</td>
                            <td>#<span>24,000</span></td>
                            <td>
                                <span class="approved">Approved</span>
                            </td>
                            <td>
                                <button class="btn btn-sm p-0 mx-1 text-danger">
                                    <span class="icon feather-icon" data-feather="trash"></span>
                                </button>
                                <!-- <button class="btn btn-sm p-0 mx-1">
                                <span class="icon feather-icon" data-feather="edit"></span>
                            </button> -->
                                <a href="./edit-product.php" class="btn btn-sm p-0 mx-1">
                                    <span class="icon feather-icon" data-feather="edit"></span>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="../assets/images/chakalaka-south-african-food.png" class="card-img"
                                            alt="..." style="width:70px">
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="m-0">ITALIAN BELT</h6>
                                    </div>
                                </div>
                            </th>
                            <td>1</td>
                            <td>#<span>12,000</span></td>
                            <td>
                                <span class="cancelled">Cancelled</span>
                            </td>
                            <td>
                                <button class="btn btn-sm p-0 mx-1 text-danger">
                                    <span class="icon feather-icon" data-feather="trash"></span>
                                </button>
                                <!-- <button class="btn btn-sm p-0 mx-1">
                                <span class="icon feather-icon" data-feather="edit"></span>
                            </button> -->
                                <a href="./edit-product.php" class="btn btn-sm p-0 mx-1">
                                    <span class="icon feather-icon" data-feather="edit"></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
<!-- footer -->
<?php include '../includes/footer.php'; ?>