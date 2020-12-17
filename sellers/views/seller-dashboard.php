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
            <h3 class="my-2">DASHBOARD</h3>

            <div class="card mb-4">
                <div class="card-body">
                    <div class="border-bottom">
                    <h6 class="">STORE SUMMARY</h6>
                </div>
                    <div class="row text-center no-gutters">
                        <div class="col-12 col-md-4">
                            <div class="m-3 text_primary">
                                <label class="display_1">Total Earnings</label>
                                <h2>#<span>57,000</span></h2>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="m-3 text_primary">
                            <label class="display_1">Total Number of Orders</label>
                            <h2>134</h2>
                        </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="m-3 text_primary">
                            <label class="display_1">Total Number of Reviewers</label>
                            <h2>47</h2>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <div class="border-bottom">
                        <h6 class="">STORE PERFORMANCE</h6>
                    </div>
                    <div class="row text-center no-gutters">
                        <div class="col-12 col-md-4">
                            <div class="m-3 text_primary">
                                <label class="display_1">PRODUCT QUALITY</label>
                                <h2><span>100</span>%</h2>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="m-3 text_primary">
                            <label class="display_1">DELIVERED ON TIME</label>
                                <h2><span>100</span>%</h2>
                        </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="m-3 text_primary">
                                <label class="display_1">COMMUNICATION</label>
                                    <h2><span>100</span>%</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-2 border border-bottom-0 py-2 px-4 rounded-top d-flex">
                    <h6 class="m-0 py-2">REVENUE</h6>
                    <div class="dropdown ml-auto">
                      <a class="btn btn-default dropdown-toggle radio_select_option" href="#" role="button" id="revenueStatus_select_option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <!-- Selected Option appears here -->
                      </a>
                      <div class="dropdown-menu shadow border-0 px-3" aria-labelledby="revenueStatus_select_option">
                        <!--  -->
                        <form>
                        <div class="form-check dropdown-item">
                          <input class="form-check-input" type="radio" name="revenue_duration" id="2020" value="2020">
                          <label class="form-check-label" for="2020">
                            2020
                          </label>
                        </div>
                        <div class="form-check dropdown-item">
                          <input class="form-check-input" type="radio" name="revenue_duration" id="2019" value="2019">
                          <label class="form-check-label" for="2019">
                            2019
                          </label>
                        </div>
                        <div class="form-check dropdown-item">
                          <input class="form-check-input" type="radio" name="revenue_duration" id="2018" value="2018" checked>
                          <label class="form-check-label" for="2018">
                           2018
                          </label>
                        </div>
                        </form>
                      </div>
                    </div>
            </div>
            <div class="chart-container border p-3">
                <canvas id="myChart"></canvas>
            </div>
        </main>
    </div>
</div>
<!-- footer -->
<?php include '../includes/footer.php'; ?>

<script type="text/javascript">
    var ctx = document.getElementById('myChart').getContext('2d');

    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',

        // The data for our dataset
        data: {
            labels: [
            'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'
            ],
            datasets: [{
                label: 'Seller\'s Revenue',
                backgroundColor: '#bcae00',
                borderColor: '#bcae00',
                data: [300, 10000, 20000, 30000, 40000, 50000]
                ,
            }]
        },

        // Configuration options go here
        options: {}
});
</script>