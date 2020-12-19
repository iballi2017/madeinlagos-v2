<!-- head -->
<?php include '../includes/header.php'; ?>


<div class="overflow-hidden">
    <div class="d-flex align-items-start">
        <div class="">
            <?php include_once '../includes/side-navigation.php' ;?>
        </div>
        <main role="main" class="container-fluid" style="overflow-x: auto">
            <div class="border-bottom py-2">
                <button class="btn btn-lg px-0" id="sidenav_toggler">
                    <i class="fas fa-arrow-alt-circle-left"></i>
                </button>
            </div>
            <h5 class="my-2">NOTIFICATIONS</h5>
            <div>
                <a href="#" class="text_link notification_item">
                    <div
                        class="py-2 px-3 mb-2 d-flex justify-content-between align-items-center flex-wrap flex-lg-nowrap">
                        <div>You have a new order #1234654 3223345434 and instructions from Aderibigbe. Kindly deliver
                            before time.</div>
                        <div>15 Dec, 2020</div>
                    </div>
                </a>
                <a href="#" class="text_link notification_item">
                    <div
                        class="py-2 px-3 mb-2 d-flex justify-content-between align-items-center flex-wrap flex-lg-nowrap">
                        <div>You have a newo rder #1234654 3223345434 and instructions from Aderibigbe. Kindly deliver
                            before time.</div>
                        <div>15 Dec, 2020</div>
                    </div>
                </a>
            </div>
        </main>
    </div>
</div>
<!-- footer -->
<?php include '../includes/footer.php'; ?>