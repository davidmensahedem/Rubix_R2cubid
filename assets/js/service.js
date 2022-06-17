$(function(){ 
    
    // start of JQuery

    

    
    if($("#totalSalesChart").length ){

        var options = {
            chart: {
                type: 'bar'
            },
            series: [{
                name: 'sales',
                data: []
            }],
            xaxis: {
                categories: []
            },
            noData:{
                text:'loading'
            }
        }
    
        var chart = new ApexCharts(document.querySelector("#totalSalesChart"), options);      
        chart.render();

    }

    if($("#order-status").length ){

        var pieOptions = {
            noData:{
                text:"loading"
            },
            chart: {
              type: 'pie'
            },
            series: [],
            labels: [],
            plotOptions: {
                pie: {
                    customScale: 0.0
                }
            }
            
        }
    
        var piechart = new ApexCharts(document.querySelector("#order-status"), pieOptions);
    
          
        piechart.render();

        

    }


    //============ All orders ====================

    let manageOrder = $("#manageOrdersTable").DataTable({

        ajax:"index.php?action=serveManagedOrders",
        stateSave:false,
        pageLength: window.innerWidth >= 1174 ? 10 : 5,
        dom:'Bfrtip',
        buttons:[
            'csv','excel','pdf','print'
        ]
        
    });
    //============ End of orders ==================


    
 

    // start of JQuery
    function getDashBoardInfo(){
        
        
        let todayDate = new Date();
        todayDate = `${todayDate.getFullYear()}-${todayDate.getMonth()+1}-${todayDate.getDay()}`;

        $.ajax({
            type:"POST",
            url: "index.php?action=get_dashboard_info&value="+todayDate,
            data: $(this).serialize(),
            timeout: 100000,
            error: function(xhr, status, error) {
                alert( error);
            },
            success: function(response)
            {   
                let {orders,retailers,marketers,stocks} = response.data 

                // dashboard notification


                

                if($("#showNotification").length){

                    if(Object.keys(orders.recentOrders).length > 0){

                        $("#checkTodaysOrders").val("orders");
          
                    }else{

                        $("#checkTodaysOrders").val("no orders");
                
                    }
                }


                if( $("#checkTodaysOrders").val() == "orders"){

                    $(".noti-dot").css({"display":"block"});
                    // $("#todaysOrderAvailable").css({"display":""});
                    // $("#noTodaysOrder").css({"display":"none"});
                    // $("#todaysOrderAvailable").removeClass("d-none");
                    // $("#noTodaysOrder").addClass("d-none");
                    
                    $(".showRecentOrder").html(
                        ` <div data-simplebar style="max-height: 250px;">
                        <h6 class="dropdown-header bg-light">Recent Order</h6>
                        
                        <a class="text-reset notification-item">
                            <div class="d-flex border-bottom align-items-start">
                                <div class="flex-shrink-0">
                                    <img class="me-3 rounded-circle avatar-sm marketerImage" src="${orders.recentOrders.marketerImage}" alt="user-pic">
                                </div>
                                <div class="flex-grow-1">
                                    <span class="mb-0 font-size-10 text-uppercase fw-bold">Ordered by: <span class="mb-0 font-size-10 text-uppercase fw-bold marketerName">${orders.recentOrders.marketerName}</span></span>
                                    <div class="text-muted">
                                        <p class="retailerName mb-1 font-size-13">${orders.recentOrders.retailerName}</p> 
                                        <p class="badge badge-soft-success orderQuantity">${orders.recentOrders.quantity}</p> <span class="mb-0 font-size-10 fw-bold">bag(s)</span>
                                        <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> <span class="orderTime">${orders.recentOrders.time}</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        

                    </div>
                    <div class="p-2 border-top d-grid">
                        <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href=".?action=all_order_page">
                            <i class="uil-arrow-circle-right me-1"></i> <small>View All..</small>
                        </a>
                    </div>`
                    )

 




                    // $(".marketerImage").attr("src",orders.recentOrders.marketerImage);
                    // $(".marketerName").text(orders.recentOrders.marketerName);
                    // $(".retailerName").html(orders.recentOrders.retailerName);
                    // $(".orderQuantity").html(orders.recentOrders.quantity);
                    // $(".orderTime").html(orders.recentOrders.time);


                }else{

                    $(".noti-dot").css({"display":"none"});
                    // $("#todaysOrderAvailable").css({"display":"none"});
                    // $("#noTodaysOrder").css({"display":""});
                    // $("#todaysOrderAvailable").addClass("d-none");
                    // $("#noTodaysOrder").removeClass("d-none");

                    $(".showRecentOrder").html(
                        `<div data-simplebar style="max-height: 250px;">
                        <h6 class="dropdown-header bg-light">No order(s) for today</h6>
                    </div>`
                    );

                }

                



                               
                               
                // dashboard row 1 information

                $("#row_retailers_count").html(retailers.getRetailerCount);              
                $("#row_1_stocks_count").html(stocks.getStocksCount);       
                $("#row_1_marketers_count").html(marketers.getMarketersCount);      
                $("#row_1_orders_count").html(orders.getOrdersCount);      


                // dashboard row 2 information

                $("#row_2_get_orders_approved_sum").html(orders.getApprovedOrdersSum);
                $("#row_2_approved_orders_count").html(orders.getOrdersApprovedCount);
                $("#row_2_pending_orders_count").html(orders.getPendingOrdersCount);
                $("#pie_approved_orders").html(orders.getOrdersApprovedCount);
                $("#pie_get_approved_sum").html(orders.getApprovedOrdersSum);
                $("#pie_pending_orders_count").html(orders.getPendingOrdersCount);
                $("#pie_pending_sum").html(orders.getPendingOrderSum);

                


                
                //show the bar chart 
               
                chart.updateOptions({

                    series: [{
                        name: 'sales',
                        data: orders.showTotalSales.totalSum
                    }],
                    xaxis: {
                        categories: orders.showTotalSales.allMonths
                    }
                    
                });

                
                // update pie chart

                piechart.updateOptions({

                    series: orders.showOrdersPieChart.values,
                    labels: orders.showOrdersPieChart.labels,
                    plotOptions: {
                        pie: {
                            customScale: 1.0
                        }
                    }
                    
                });

                
                


                // dashboard row 3 information
                $("#row_3_marketers_count").html(marketers.getMarketersCount);
                $("#dashboardMarketers tbody").html(marketers.allMarketers);
                $("#dashboardRetailers tbody").html(retailers.allRetailers);
                $("#row_3_retailer_count").html(retailers.getRetailerCount);
                $("#row_3_todays_orders").html(orders.todaysOrdersCount);
                $("#totalOrders").html(orders.getOrdersCount);
                $("#showTodaysOrders").html(orders.showTodaysOrders);
                

                



    
            }
        });

         

    }

    if($("#dashboardBody").length){
        setInterval(function(){
            getDashBoardInfo()
            manageOrder.ajax.reload()
        },2000);
    }



    



    let successmodal = $("#successmodal");


    // ========= handle image preview ============

    function previewImage() {
        var file = document.getElementById("image").files;
        if (file.length > 0) {
            var fileReader = new FileReader();
    
            fileReader.onload = function (event) {
                document.getElementById("preview").setAttribute("src", event.target.result);
                document.getElementById("preview").style.height = '100px';
                document.getElementById("preview").style.display = 'block';
            };
    
            fileReader.readAsDataURL(file[0]);
        }
    }
    function previewRetailerImage() {
        var file = document.getElementById("shopPicture").files;
        if (file.length > 0) {
            var fileReader = new FileReader();
    
            fileReader.onload = function (event) {
                document.getElementById("preview").setAttribute("src", event.target.result);
                document.getElementById("preview").style.height = '100px';
                document.getElementById("preview").style.display = 'block';
            };
    
            fileReader.readAsDataURL(file[0]);
        }
    }

    if($("#image").length){
        $("#image").on('change',function(){
            previewImage();
        });
    }
    if($("#shopPicture").length){
        $("#shopPicture").on('change',function(){
            previewRetailerImage();
        });
    }
    


    // ========== End of Image Preview ============



   


    
    
    // ============ Total Monthly Sales ===================
    
    
    
    
    
    
    // ============ End of Apex Charts =============
   

    // ======================================
    // Tables
    // ======================================

    //============ All orders ====================

    let orders_table = $("#orders_table").DataTable({

        pageLength: window.innerWidth >= 1174 ? 10 : 5,
        dom:'Bfrtip',
        buttons:[
            'csv','excel','pdf','print'
        ]
        
    });
    //============ End of orders ==================




    //============ All retailers ====================

    let retailers_table = $("#retailers_table").DataTable({

        pageLength: window.innerWidth >= 1174 ? 10 : 5,
        dom:'Bfrtip',
        buttons:[
            'csv','excel','pdf','print'
        ]
        
    });
    //============ End of retailers ==================


    //============ All marketers ====================

    let marketers_table = $("#marketers_table").DataTable({

        pageLength: window.innerWidth >= 1174 ? 10 : 5,
        dom:'Bfrtip',
        buttons:[
            'csv','excel','pdf','print'
        ]
        
    });
    //============ End of marketers ==================

    //============ All marketers ====================

    let marketer_retailers_table = $("#marketer_retailers_table").DataTable({

        pageLength: window.innerWidth >= 1174 ? 5 : 5,
        
       
        
    });
    //============ End of marketers ==================

    //============ marketer_orders_table ====================

    let marketer_orders_table = $("#marketer_orders_table").DataTable({

        pageLength: window.innerWidth >= 1174 ? 5 : 5,
        
       
        
    });
    //============ End of marketer_orders_table ==================







    // ======================================
    // End of Tables
    // ======================================



    


    

  


    // =============================================
    // Handle Customer ID Generation
    // =============================================

    async function getAllRegions(){

        let results = await fetch("./data/cities.json");

        let regions = await results.json();

       

        let output = '';

        Object.keys(regions).forEach(region => {
            output += `<option value="${region}"><small>${region}</small></option>`;
        });

        $("#shopRegion").append(output);
        

    }

    async function getLocations(){

        let selectedRegion = $("#shopRegion").val();

        if(selectedRegion == ""){
            $("#shopLocation").html('<option value="">Select area or location</option>');
        }else{

            let results = await fetch("./data/cities.json");

            let regions = await results.json();

            let locations = regions[selectedRegion];

            let output = "";

            locations.forEach(location => {
                output += `<option value="${location}"><small>${location}</small></option>`;
            });

            $("#shopLocation").html('<option value="">Select area or location</option>');
            $("#shopLocation").append(output);
        }
        

    }

    getAllRegions();

    $("#shopRegion").on('change',function(){
        getLocations();
    });





    // =============================================
    // End of Customer ID Generation
    // =============================================



  
    
    
    // =============================================
    // Addition of Marketer (Marketer Management)
    // =============================================
    
    let createMarketerForm = $("#createMarketerForm");

    let confirmCreateMarketer = $("#confirmCreateMarketer");
    
    let createMarketerModal = $("#createMarketerModal");

   

    createMarketerForm.validate({

        submitHandler: function(form){

            // form.preventDefault();
         
            createMarketerModal.modal('show');
            
            confirmCreateMarketer.click(function(evt){

                evt.preventDefault();

                createMarketerModal.modal('hide');
                successmodal.modal('show');

                setTimeout(function(){
                    form.submit();
                
                },2000);
    
            });          

        }

    });


    // =============================================
    // End of Addition of Marketer 
    // ============================================= 


    // =============================================
    // Search and Delete for a Marketer (Marketer Management)
    // =============================================
    let deleteMarketerForm = $("#deleteMarketerForm");
    let deleteMarketerFormContainer = $("#deleteMarketerFormContainer");

    deleteMarketerForm.on('keypress',function(e){

        if(e.keyCode === 13 || e.which === 13){
            e.preventDefault();
            return false;
        }

    })
    deleteMarketerFormContainer.on('keypress',function(e){

        if(e.keyCode === 13 || e.which === 13){
            e.preventDefault();
            return false;
        }

    })

    $searchMarketer = $('#searchMarketer');

    let showDeleteInfo = $("#showDeleteInfo");
    

    $searchMarketer.on('keyup',function(evt){

        let searchText = evt.currentTarget.value;
               

        let deleteTableBody = $("#searchMarketerDeleteTable tbody");

        $.ajax({
            type:"POST",
            url: "index.php?action=search_marketer&value="+searchText,
            data: $(this).serialize(),
            timeout: 10000,
            error: function(xhr, status, error) {
                alert( error);
            },
            success: function(response)
            {
                response = JSON.parse(response);
                
                

                if(response.data.message == "success"){
                    showDeleteInfo.attr('class',"");
                    deleteTableBody.html(response.data.results);
                    
                }else{
                    showDeleteInfo.attr('class','d-none');
                    deleteTableBody.html('<small class="mt-2">No results</small>');
                }
                
    
            }
        });


    });


    // let deleteMarketerForm = $("#deleteMarketerForm");

    let confirmDeleteMarketer = $("#confirmDeleteMarketer");

    let deleteMarketerModal = $("#deleteMarketerModal");


    
    
    deleteMarketerForm.submit(function(event){
        event.preventDefault();

        deleteMarketerModal.modal('show');

        confirmDeleteMarketer.click(function(evt){

            evt.preventDefault();

            deleteMarketerModal.modal('hide');
            successmodal.modal('show');

            // setTimeout(function(){
            //     event.currentTarget.submit();
            // },2000);

        });   

    });



    






    // =============================================
    // End of Search and Delete for Marketer 
    // ============================================= 


    


    

    // =============================================
    // Updation of Marketer (Marketer Management)
    // =============================================
   
    
    let updateMarketerForm = $("#updateMarketerForm");
    let confirmUpdateMarketer = $("#confirmUpdateMarketer");
    let updateMarketerModal = $("#updateMarketerModal");
    
    let showUpdateDetails = $("#showUpdateDetails");

    let updateSearchMarketer = $("#updateSearchMarketer");
    let updateName = $("#updateName");
    let updateEmail = $('#updateEmail');
    let updatePassword = $("#updatePassword");
    let updateContact = $("#updateContact");
    let updateRole = $("#updateRole");
    let updateImage = $("#updateImage");
    let id = $("#adminID");
    let showMarketerImage = $("#showMarketerImage");
    
    // search for a marketer to update

    updateMarketerForm.on('keypress',function(e){

        if(e.keyCode === 13 || e.which === 13){
            e.preventDefault();
            return false;
        }

    })

    $showUpdateDetails = $('#showUpdateDetails');

    updateSearchMarketer.on('keyup',function(evt){

        let searchText = evt.currentTarget.value;

        $.ajax({
            type:"POST",
            url: "index.php?action=update_search_marketer&value="+searchText,
            data: $(this).serialize(),
            timeout: 10000,
            error: function(xhr, status, error) {
                alert( error);
            },
            success: function(response)
            {
                let {message,adminID,name,email,password,contact,image,type} = response.marketer;
                                
                if(message == "success"){

                    showUpdateDetails.attr('class',"");
                    $('#btnContainer').attr('class','');
                    
                    


                    id.val(adminID);
                    updateName.val(name);
                    updateEmail.val(email);
                    updatePassword.val(password);
                    updateContact.val(contact);
                    updateRole.val(type);
                    
                    showMarketerImage.attr({'src':image,width:250,height:250});

                }else{

                    showUpdateDetails.attr('class',"d-none");
                    $('#btnContainer').attr('class','d-none');
                    id.val("");
                    updateName.val("");
                    updateEmail.val("");
                    updatePassword.val("");
                    updateContact.val("");
                    updateRole.val("");
                    updateImage.val("");
                }
                
    
            }
        });


    });

   

    
    updateMarketerForm.submit(function(event){
        event.preventDefault();

        updateMarketerForm.validate();

        if(updateMarketerForm.valid() != false){

            updateMarketerModal.modal('show');
    
            confirmUpdateMarketer.click(function(evt){
    
                evt.preventDefault();
    
                updateMarketerModal.modal('hide');
                successmodal.modal('show');
    
                event.currentTarget.submit();
                
            });   
        }


    });


    // =============================================
    // End of Updation of Marketer 
    // ============================================= 


    // =============================================
    // Addition of Retailer (Retailer Management)
    // =============================================
    
    let addRetailerModal = $("#addRetailerModal");

    let confirmAddRetailer = $("#confirmAddRetailer");
    
    let addRetailerForm = $("#addRetailerForm");

    addRetailerForm.on('keypress',function(e){

        if(e.keyCode === 13 || e.which === 13){
            e.preventDefault();
            return false;
        }

    })


   

    $("#shopName").on('keyup',function(){
        let nextShopName = $("#shopName").val();
        let checkOldShop = $("#checkOldShop")
        
        $.ajax({
            type:"POST",
            url: "index.php?action=check_shop_name&value="+nextShopName,
            data: $(this).serialize(),
            timeout: 10000,
            error: function(xhr, status, error) {
                alert( error);
            },
            success: function(response)
            {
                
                

                if(response.data.message == "Exists"){
                    
                    $("#showNewShopExists").css("display","block");
                    checkOldShop.val(null);
                }else{
                    checkOldShop.val("no");
                    $("#showNewShopExists").css("display","none");
                }
                
    
            }
        });

    });


    addRetailerForm.submit(function(event){
        event.preventDefault();

        addRetailerForm.validate();

        if(addRetailerForm.valid() != false){

            addRetailerModal.modal('show');

            confirmAddRetailer.click(function(evt){

                evt.preventDefault();
    
                addRetailerModal.modal('hide');
                successmodal.modal('show');
    
                event.currentTarget.submit();
                
            }); 

        }else{
            return;
        }

        
        

  

    });



    // =============================================
    // End of Addition of Retailer (Retailer Management)
    // =============================================

















    // =============================================
    // Updation of Retailer (Retailer Management)
    // =============================================
   
    
    let updateRetailerForm = $("#updateRetailerForm");

    let confirmUpdateRetailer = $("#confirmUpdateRetailer");
    let updateRetailerModal = $("#updateRetailerModal");
    
    let showRetailerUpdateDetails = $("#showRetailerUpdateDetails");

    let retailerUpdateSearch = $("#retailerUpdateSearch");
    
    let updateRetailerName = $("#updateRetailerName");
    let updateRetailerEmail = $('#updateRetailerEmail');
    let updateRetailerPhoneNumber = $("#updateRetailerPhoneNumber");
    let updateRetailerAddress = $("#updateRetailerAddress");
    let updateRetailerMaximumStock = $("#updateRetailerMaximumStock");
    let updateRetailerMinimumStock = $("#updateRetailerMinimumStock");
    let updateRetailerImage = $("#updateRetailerImage");
    let showRetailerImage = $("#showRetailerImage");
    let retailerUpdateID = $("#retailerUpdateID");
    
    // search for a retailer to update

    updateRetailerForm.on('keypress',function(e){

        if(e.keyCode === 13 || e.which === 13){
            e.preventDefault();
            return false;
        }

    })

  

    retailerUpdateSearch.on('keyup',function(evt){

        let searchText = evt.currentTarget.value;

        

        $.ajax({
            type:"POST",
            url: "index.php?action=retailer_update_search&value="+searchText,
            data: $(this).serialize(),
            timeout: 10000,
            error: function(xhr, status, error) {
                alert( error);
            },
            success: function(response)
            {
                let {message,customerID,customer_name,customer_email,customer_contact,address,min_level,max_level,shop_picture} = response.retailer;
                                
                if(message == "success"){

                    showRetailerUpdateDetails.attr('class',"");
                    $('#btnContainer').attr('class','');
                    
                    


                    retailerUpdateID.val(customerID);

                    updateRetailerName.val(customer_name);
                    updateRetailerEmail.val(customer_email);
                    updateRetailerPhoneNumber.val(customer_contact);
                    updateRetailerAddress.val(address);
                    updateRetailerMaximumStock.val(max_level);
                    updateRetailerMinimumStock.val(min_level);
                    
                    showRetailerImage.attr({src:shop_picture,width:250,height:250});

                }else{

                    showRetailerUpdateDetails.attr('class',"d-none");
                    $('#btnContainer').attr('class','d-none');

                    retailerUpdateID.val(customerID);

                    updateRetailerName.val("");
                    updateRetailerEmail.val("");
                    updateRetailerPhoneNumber.val("");
                    updateRetailerAddress.val("");
                    updateRetailerMaximumStock.val("");
                    updateRetailerMinimumStock.val("");
                    updateRetailerImage.val("");
                }
                
    
            }
        });


    });

   

    
    updateRetailerForm.submit(function(event){
        event.preventDefault();

        updateRetailerForm.validate();

        if(updateRetailerForm.valid() != false){

            updateRetailerModal.modal('show');
    
            confirmUpdateRetailer.click(function(evt){
    
                evt.preventDefault();
    
                updateRetailerModal.modal('hide');
                successmodal.modal('show');
    
                event.currentTarget.submit();
                
            });   
        }


    });


    // =============================================
    // End of Updation of Retailer 
    // ============================================= 
    


    // =============================================
    // Delete Retailer 
    // ============================================= 

    let deleteRetailerForm = $("#deleteRetailerForm");
    let deleteRetailerFormContainer = $("#deleteRetailerFormContainer");

    deleteRetailerForm.on('keypress',function(e){

        if(e.keyCode === 13 || e.which === 13){
            e.preventDefault();
            return false;
        }

    })
    deleteRetailerFormContainer.on('keypress',function(e){

        if(e.keyCode === 13 || e.which === 13){
            e.preventDefault();
            return false;
        }

    })

    let deleteSearchRetailer = $('#deleteSearchRetailer');

    let showRetailerDeleteInfo = $("#showRetailerDeleteInfo");
    

    deleteSearchRetailer.on('keyup',function(evt){

        let searchText = evt.currentTarget.value;
               

        let deleteTableBody = $("#searchRetailerDeleteTable tbody");

        $.ajax({
            type:"POST",
            url: "index.php?action=search_delete_retailer&value="+searchText,
            data: $(this).serialize(),
            timeout: 10000,
            error: function(xhr, status, error) {
                alert( error);
            },
            success: function(response)
            {
                response = JSON.parse(response);
                
               

                if(response.data.message == "success"){
                    showRetailerDeleteInfo.attr('class',"");
                    deleteTableBody.html(response.data.results);
                    
                }else{
                    showRetailerDeleteInfo.attr('class','d-none');
                    deleteTableBody.html('<small class="mt-2">No results</small>');
                }
                
    
            }
        });


    });


   




    // =============================================
    // End of Delete Retailer 
    // ============================================= 


    // =============================================
    // Retailer Next Shop
    // ============================================= 

    let addNextRetailerShopModal = $("#addNextRetailerShopModal");

    let confirmAddNextRetailerShop = $("#confirmAddNextRetailerShop");

    let checkShop = $("#checkShop");
    
    let addShopForm = $("#addShopForm");

    addShopForm.on('keypress',function(e){

        if(e.keyCode === 13 || e.which === 13){
            e.preventDefault();
            return false;
        }

    })


    $("#retalierNextShopName").on('keyup',function(){
        let nextShopName = $("#retalierNextShopName").val();
        

        
        
        $.ajax({
            type:"POST",
            url: "index.php?action=check_shop_name&value="+nextShopName,
            data: $(this).serialize(),
            timeout: 10000,
            error: function(xhr, status, error) {
                alert( error);
            },
            success: function(response)
            {
                
                

                if(response.data.message == "Exists"){
                    
                    
                    checkShop.val(null);
                    $("#showShopExists").css("display","block");
                    // $.toast({heading:"Shop name exists!",text:"Enter a new shop name",position:"top-center",loaderBg:"#bf441d",icon:"error",hideAfter:3e3,stack:1});
                }else{
                    checkShop.val("no");
                    $("#showShopExists").css("display","none");
                }
                
    
            }
        });

    });


    addShopForm.submit(function(event){
        event.preventDefault();

        addShopForm.validate();

        if(addShopForm.valid() != false){

            
           addNextRetailerShopModal.modal('show');

            confirmAddNextRetailerShop.click(function(evt){

                evt.preventDefault();
    
                addNextRetailerShopModal.modal('hide');
                successmodal.modal('show');
    
                event.currentTarget.submit();
                
            }); 
 
            

        }else{
            return;
        }
  

    });

    // =============================================
    // End of Retailer Next Shop
    // ============================================= 

  



    
    // =============================================
    // Add Order 
    // ============================================= 

        
    let createOrderForm = $("#createOrderForm");

    let confirmAddOrder = $("#confirmAddOrder");
    
    let addOrderModal = $("#addOrderModal");


    if(createOrderForm.length){

        $("#shopID").on('change',function(){

            $("#quantity").val(1);

            $.ajax({
                type:"POST",       
                url: `index.php?action=getRetailerStocks&shopID=${$("#shopID").val()}`,
                data: $(this).serialize(),
                timeout: 10000,
                error: function(xhr, status, error) {
                    alert("Error: " + xhr.status + " - " + error);
                },
                success: function(response)                
                {


                    if(response != 'no data'){

                        $("#minValue").html(response.data.retailer.min_level);     
                        $("#maxValue").html(response.data.retailer.max_level);
                        if(response.data.retailer.stock_level == 0){
                            $("#showStock").css({"display":"none"});
                        }else{
                            $("#showStock").css({"display":"block"});
                            $("#stockLevel").html(response.data.retailer.stock_level);
                        }
                           
                        $("#showRetailerStocks").css({"display":"block"});

                        

                    }else{
                        $("#showRetailerStocks").css({"display":"none"});
                    }
                    
                }
            });

        });

        
        $("#quantity").keyup('change',function(){

            $.ajax({
                type:"POST",       
                url: `index.php?action=getRetailerStocks&shopID=${$("#shopID").val()}`,
                data: $(this).serialize(),
                timeout: 10000,
                error: function(xhr, status, error) {
                    alert("Error: " + xhr.status + " - " + error);
                },
                success: function(response)                
                {


                    if(response != 'no data'){

                        if(response.data.retailer.stock_level == 0){
                            if(parseInt($("#quantity").val()) > response.data.retailer.max_level){
                                $.toast({heading:"Quantity too high!",text:"Quantity must not exceed the maximum",position:"top-center",loaderBg:"#bf441d",icon:"error",hideAfter:3e3,stack:1});
                                $("#checkQuantity").val("exceeded");
                                return;
                            }else{
                                $("#checkQuantity").val("okay");
                            }
                        }else if(response.data.retailer.stock_level > 0){
                            if(parseInt($("#quantity").val()) > response.data.retailer.stock_level){
                                $.toast({heading:"Quantity too high!",text:"Quantity must not exceed the remaining bag(s)",position:"top-center",loaderBg:"#bf441d",icon:"error",hideAfter:3e3,stack:1});
                                $("#checkQuantity").val("exceeded");
                                return;
                            }else{
                                $("#checkQuantity").val("okay");
                            }
                            
                        }


                        

                    }else{
                        return
                    }
                    
                }
            });

        });

    }

   

    createOrderForm.validate({

        submitHandler: function(form){

            if($("#checkQuantity").val() == "exceeded" ){
                $.toast({heading:"Quantity too high!",text:"Change the quantity",position:"top-center",loaderBg:"#bf441d",icon:"error",hideAfter:3e3,stack:1});
                return;
            }

            // form.preventDefault();
         
            addOrderModal.modal('show');
            
            confirmAddOrder.click(function(evt){

                evt.preventDefault();

                addOrderModal.modal('hide');
                successmodal.modal('show');

                setTimeout(function(){
                    form.submit();
                
                },2000);
    
            });          

        }

    });

    



    // =============================================
    // End of Add Order 
    // ============================================= 




// end of JQuery
});