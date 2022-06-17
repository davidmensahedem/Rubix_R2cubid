<?php if($_SESSION['admin_type'] == "Administrator"):?>
    <div id="showNotification" class="dropdown d-inline-block">
        <button id="notificationBtn" type="button" class="btn header-item noti-icon" id="page-header-notifications-dropdown"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="icon-sm" data-feather="bell"></i>
            <input type="hidden" name="checkTodaysOrders" id="checkTodaysOrders">
            
            <span class="noti-dot bg-danger rounded-pill" style="display:none"></span>     
        </button>  

       

            <div id="todaysOrderAvailable" class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
            
               <div class="showRecentOrder">

                       
                   
                </div>

            </div>
      
            <div id="noTodaysOrder" class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                <div data-simplebar style="max-height: 250px;">
                    <h6 class="dropdown-header bg-light">No order for today</h6>
                </div>
            </div>
     
    </div>

<?php endif; ?>



<!-- <div id="showNotification" class="dropdown d-inline-block">
        <button id="notificationBtn" type="button" class="btn header-item noti-icon" id="page-header-notifications-dropdown"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="icon-sm" data-feather="bell"></i>
            
            <span class="noti-dot bg-danger rounded-pill" style="display:none"></span>
            
        </button>

        
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
        
            <div data-simplebar style="max-height: 250px;">
                <h6 class="dropdown-header bg-light">New</h6>
                
                <a class="text-reset notification-item">
                    <div class="d-flex border-bottom align-items-start">
                        <div class="flex-shrink-0">
                            <img id="marketerImage" class="me-3 rounded-circle avatar-sm" alt="user-pic">
                        </div>
                        <div class="flex-grow-1">
                            Ordered by: <p id="marketerName" class="mb-0 font-size-10 text-uppercase fw-bold"></p>
                            <div class="text-muted">
                                <p id="retailerName" class="mb-1 font-size-13"></p> <span id="orderQuantity" class="badge badge-soft-success"></span> bag(s)
                                <i class="mdi mdi-clock-outline"></i><p id="orderTime" class="mb-0 font-size-10 text-uppercase fw-bold"> </p>
                            </div>
                        </div>
                    </div>
                </a>
                

            </div>
            <div class="p-2 border-top d-grid">
                <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href=".?action=all_order_page">
                    <i class="uil-arrow-circle-right me-1"></i> <small>View All..</small>
                </a>
            </div>

        </div>
    
        
        

        
        
        
    </div> -->