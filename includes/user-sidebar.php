<?php 
if($_GET["subj"]){
    $sub = $_GET["subj"];
}

?>
<div class="bg-white hide" id="sidebar">
          <div class="d-flex justify-content-between align-items-center d-block d-md-none">
              <h5 class="d-block d-md-none mt-4 mb-3">MY DASHBOARD</h5>
              <button class="btn p-0" id="userAccountCloseMenuBtn">
                  <span data-feather="plus" class="rotate_45"></span>
              </button>
          </div>
          <ul class="nav-tab list-group">
              <li class="list-group-item">
                  <a href="user-account.php?subj=account" class="
                  <?php
                  if($sub=="account"){
                      echo "active";
                  }
                  ?>
                  ">My Account</a>
              </li>
              <li class="list-group-item">
                  <a href="user-orders.php?subj=orders" class="
                  <?php
                  if($sub=="orders"){
                      echo "active";
                  }
                  ?>
                  ">Orders</a>
              </li>
              <li class="list-group-item">
                  <a href="pending-reviews.php?subj=pending-reviews" class="
                  <?php
                  if($sub=="pending-reviews"){
                      echo "active";
                  }
                  ?>
                  ">Pending Reviews</a>
              </li>
              <li class="list-group-item">
                  <a href="user-saved-items.php?subj=user-saved-items" class="
                  <?php
                  if($sub=="user-saved-items"){
                      echo "active";
                  }
                  ?>
                  ">Saved Item</a>
              </li>
          </ul>

      </div>