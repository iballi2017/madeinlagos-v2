<!-- head -->
<?php include '../includes/header.php'; ?>


<div class="overflow-hidden" id="orders_page">
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
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <ul class="d-flex flex-wrap list_style_0" id="product_sorter">
                                <li>
                                    <div class="dropdown ml-auto">
                                        <a class="btn btn-default dropdown-toggle radio_select_option uppercase"
                                            href="#" role="button" id="orderStatus_select_option" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <!-- Selected Option appears here -->
                                        </a>
                                        <div class="dropdown-menu shadow border-0 px-3"
                                            aria-labelledby="orderStatus_select_option">
                                            <!--  -->
                                            <div class="form-check dropdown-item">
                                                <input class="form-check-input" type="radio" name="order_status"
                                                    id="all_statuses" value="all_statuses" checked>
                                                <label class="form-check-label" for="all_statuses">
                                                    All Statuses
                                                </label>
                                            </div>

                                            <div class="form-check dropdown-item">
                                                <input class="form-check-input" type="radio" name="order_status"
                                                    id="pending" value="pending">
                                                <label class="form-check-label" for="pending">
                                                    Pending
                                                </label>
                                            </div>
                                            <div class="form-check dropdown-item">
                                                <input class="form-check-input" type="radio" name="order_status"
                                                    id="delivered" value="delivered" checked>
                                                <label class="form-check-label" for="delivered">
                                                    Delivered
                                                </label>
                                            </div>
                                            <div class="form-check dropdown-item">
                                                <input class="form-check-input" type="radio" name="order_status"
                                                    id="cancelled" value="cancelled">
                                                <label class="form-check-label" for="cancelled">
                                                    Cancelled
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>

                                    <div class="dropdown ml-auto">
                                        <a class="btn btn-default dropdown-toggle radio_select_option uppercase"
                                            href="#" role="button" id="orderDate_select_option" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <!-- Selected Option appears here -->
                                        </a>
                                        <div class="dropdown-menu shadow border-0 px-3"
                                            aria-labelledby="orderDate_select_option">
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
                                        <a class="btn btn-default dropdown-toggle radio_select_option uppercase"
                                            href="#" role="button" id="orderMonth_select_option" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <!-- Selected Option appears here -->
                                        </a>
                                        <div class="dropdown-menu shadow border-0 px-3"
                                            aria-labelledby="orderMonth_select_option">
                                            <!--  -->

                                            <div class="form-check dropdown-item">
                                                <input class="form-check-input" type="radio" name="order_month"
                                                    id="all_month" value="all_month" checked>
                                                <label class="form-check-label" for="all_month">
                                                    All Months
                                                </label>
                                            </div>
                                            <div class="form-check dropdown-item">
                                                <input class="form-check-input" type="radio" name="order_month"
                                                    id="january" value="january">
                                                <label class="form-check-label" for="january" checked>
                                                    January
                                                </label>
                                            </div>
                                            <div class="form-check dropdown-item">
                                                <input class="form-check-input" type="radio" name="order_month"
                                                    id="february" value="february" checked>
                                                <label class="form-check-label" for="february">
                                                    February
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>



            <!-- table -->
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" id="order_number">ORDER NUMBER</th>
                            <th scope="col" id="order_date">DATE</th>
                            <th scope="col" id="order_price">PRICE</th>
                            <th scope="col" id="order_deliver_status">DELIVERY STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">
                                <a href="./customer-order-details.php" class="text_link">TEP47362839404212</a>
                            </th>
                            <td>21/12/2020</td>
                            <td>#<span>12,000</span></td>
                            <td>
                                <span class="approved">Approved</span>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <a href="./customer-order-details.php" class="text_link">TEP47368499404212</a>
                            </th>
                            <td>28/12/2020</td>
                            <td>#<span>9,000</span></td>
                            <td>
                                <span class="cancelled">Cancelled</span>
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
<script>
$(document).ready(function() {})
</script>