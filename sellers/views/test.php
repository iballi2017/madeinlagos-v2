<!-- head -->
<?php include '../includes/head.php'; ?>

<div class="overflow-hidden">
    <div class="d-flex align-items-start">
        <div class="">
            <nav class="sidebar" id="adminSideNav">
                <div class="">
                    <ul class="nav flex-column">
                        <li class="nav-item sidenav-item">
                            <a class="nav-link active" href="../views/user-dashboard.php">
                                <span class="icon" data-feather="pie-chart"></span>
                                <span>Dashboard</span>
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item sidenav-item">
                            <a class="nav-link" href="#">
                                <span class="icon" data-feather="upload"></span>
                                <span>Upload timesheet</span>
                            </a>
                        </li>
                        <li class="nav-item sidenav-item">
                            <a class="nav-link" href="../views/user-saved-timesheet.php">
                                <span class="icon" data-feather="file-text"></span>
                                <span>Saved timesheet</span>
                            </a>
                        </li>
                        <li class="nav-item sidenav-item">
                            <a class="nav-link" href="../views/user-catalogue.php">
                                <span class="icon" data-feather="eye"></span>
                                <span>View catalogue</span>
                            </a>
                        </li>
                        <li class="nav-item sidenav-item">
                            <a class="nav-link" href="#">
                                <span class="logout text-danger" data-feather="log-out"></span>
                                <span class="text-danger">LOG OUT</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <main role="main" class="container">
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
                      <a class="btn btn-default dropdown-toggle" href="#" role="button" id="revenue_select_option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <!-- Selected Option appears here -->
                      </a>
                      <div class="dropdown-menu shadow border-0 px-3" aria-labelledby="revenue_select_option">
                        <!--  -->

                        <div class="form-check dropdown-item">
                          <input class="form-check-input" type="radio" name="duration" id="last7" value="last7" checked>
                          <label class="form-check-label" for="last7">
                            Last 7 day
                          </label>
                        </div>
                        <div class="form-check dropdown-item">
                          <input class="form-check-input" type="radio" name="duration" id="last15" value="last15">
                          <label class="form-check-label" for="last15">
                            Last 15 days
                          </label>
                        </div>
                        <div class="form-check dropdown-item">
                          <input class="form-check-input" type="radio" name="duration" id="last30" value="last30">
                          <label class="form-check-label" for="last30">
                           Last 30 days
                          </label>
                        </div>
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
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September'
        // , 'October', 'November', 'December'
        ],
        datasets: [{
            label: 'Seller\'s Revenue',
            backgroundColor: '#bcae00',
            borderColor: '#bcae00',
            // data: [0, 10, 5, 2, 20, 30, 45]
            data: [0, 10000, 20000, 30000, 40000, 50000]
        }]
    },

    // Configuration options go here
    options: {}
});
    $(document).ready(function(){
        var revenue_select_option = $("#revenue_select_option");
        var selectedRadio = $("input[type='radio'][name='duration']");
        var selectedRadioChecked = $("input[type='radio'][name='duration']:checked");
        if(selectedRadio.is(':checked')){
          $( revenue_select_option ).html( $( "input[type='radio']" ).siblings("label").html() );
        }else{
            return;
        }
        $( "input[type='radio']" ).on( "click", function() {
          $( revenue_select_option ).html( $( this ).siblings("label").html() );
        });
    })
</script>