$(function(){


    // =============================================
    // Shelf Items Table
    // =============================================

    $("#supplies_items_table").DataTable({
        pageLength:6,
        dom:'Bfrtip',
        buttons:[
            'csv','excel','pdf','print'
        ]
    });





    // =============================================
    // Items Table
    // =============================================

    $("#items_table").DataTable({
        pageLength:5,
        dom:'Bfrtip',
        buttons:[
            'csv','excel','pdf','print'
        ],
        order:[[6,"desc"]]
    });

    let approvalInput = $(".approvalInput");

    let ApprovalForm = $(".ApprovalForm");

    // let all_items_table = $("#items_table").DataTable({
    //     ajax:"index.php?action=serverAllItems",
    //     stateSave:false,
    //     pageLength:4,
    //     dom:'Bfrtip',
    //     buttons:[
    //         'csv','excel','pdf','print'
    //     ],
    //     createdRow:function(row,data,dataIndex) {
    //         if(data[7] == 'Pending'){

    //             localStorage.setItem("itemsID",data[0]);
                
    //             console.log(data[0]);
    //         }else{
    //             console.log(row,data,dataIndex);
    //         }
    //     },
    //     columns:[
    //         {data:0},
    //         {data:1},
    //         {data:2},
    //         {data:3},
    //         {data:4},
    //         {data:5},
    //         {
    //             data:6,
    //             render:function(data,type){
                    
    //                 if(data == 'Approved'){

    //                     return ` <p class="text-success"> <b>${data}</b> <p>`;

    //                 }else{

    //                    return `<p class="label label-danger">${data}<p>`;

    //                 }


                  
    //             }
    //         },
           
    //         {
    //             data: 7,
    //             render:function(data,type){
                    
    //                 if(data == 'Approved'){
    //                     return `<i class="mdi mdi-checkbox-marked-outline"></i>`;

    //                 }else{
                        
    //                     let formdata  = `<form class="ApprovalForm" method="post" action=".?action=update_item_status">
    //                         <input type="hidden" name="itemsID" value="${localStorage.getItem("itemsID")}" class="approvalInput">
    //                         <button type="submit"
    //                             class="btn btn-info btn-sm waves-effect waves-light"><small>Approve</small></button>
    //                             </form>`;

    //                     return formdata;

                     

    //                 }


                  
    //             }
    //         }
    //     ]
        
    // });



   


    // =============================================
    // Workers Table
    // =============================================

    $("#workers_table").DataTable({
        pageLength:5,
        dom:'Bfrtip',
        buttons:[
            'csv','excel','pdf','print'
        ]
    });




    // =============================================
    // Works Table
    // =============================================

    $("#works_table").DataTable({
        pageLength:5,
        dom:'Bfrtip',
        buttons:[
            'csv','excel','pdf','print'
        ],
        order:[[0,"desc"]]
    });
    
    
    // =============================================
    // Supplies Table
    // =============================================

    $("#supplies_table").DataTable({
        pageLength:5,
        dom:'Bfrtip',
        buttons:[
            'csv','excel','pdf','print'
        ],
        order:[[0,"desc"]]
    });



    // =============================================
    // Bookings Table
    // =============================================

    $("#bookings_table").DataTable({
        pageLength:5,
        dom:'Bfrtip',
        buttons:[
            'csv','excel','pdf','print'
        ]
    });
    
    
    // =============================================
    // Handle Supplies Item Select
    // =============================================

    let suppliesquantity = $("#suppliesquantity");

        let checkquantity = $("#checkquantity");
        
        let suppliesSubmit = $("#suppliesSubmit");
        
        let suppliesClose = $("#suppliesClose");






        let supplesitemid = $("#supplesitemid");
        
        let itemQuantityInfo = $("#itemQuantityInfo");
    
         // handles the changing of the select button for selecting an item
         supplesitemid.change(function(evt){
            evt.preventDefault();

            
            suppliesquantity.val(1);

            checkquantity.html("");

            suppliesSubmit.show("fast");
            suppliesClose.show("fast");
            
                                
          
            
            $.ajax({
                type:"POST",
                url: "index.php?action=getItemDetails",
                data: $(this).serialize(),
                timeout: 10000,
                error: function(xhr, status, error) {
                    alert("Error: " + xhr.status + " - " + error);
                },
                success: function(response)
                {
                    if(  localStorage.getItem("itemName") ){

                        localStorage.removeItem("itemName");

                        localStorage.setItem("itemName",response.info.name);
                    
                    }else{

                        localStorage.setItem("itemName",response.info.name);

                    }

                    // set the placeholders
                    if(response.info.quantity == ""){
                        itemQuantityInfo.html("");
                    }else{

                        let responseMessage = `${response.info.quantity} remaining`;
                        itemQuantityInfo.html(responseMessage);

                    }
                   
                   
                }
            });
     
    
        });
    
    
    // =============================================
    // End of Handle Supplies Item Select
    // =============================================





    // =============================================
    // Handle Quantity Check Item Select
    // =============================================

        
            
         // handles the checking of an items quantity
         suppliesquantity.change(function(evt){
            evt.preventDefault();

            //get the selected item
            let item = localStorage.getItem("itemName");
    
            $.ajax({
                type:"POST",       
                url: `index.php?action=checkQuantity&item=${item}&selectedQuantity=${suppliesquantity.val()}`,
                data: $(this).serialize(),
                timeout: 10000,
                error: function(xhr, status, error) {
                    alert("Error: " + xhr.status + " - " + error);
                },
                success: function(response)
                {
                    
                    // check whether the selected quantity exceeds the one in stock
                    



                   if( suppliesquantity.val() > response.info.quantity ){

                    // $.toast({heading:"Invalid Information!",text:"Quantity has exceeded",position:"top-center",loaderBg:"#bf441d",icon:"error",hideAfter:3e3,stack:1});
                    checkquantity.html("Quantity has exceeded");

                    suppliesSubmit.hide();
                    suppliesClose.hide();
                   
                   }else{
                    checkquantity.html(" ");

                    suppliesSubmit.show("fast");
                    suppliesClose.show("fast");


                   }
                   
                }
            });
     
    
        });
    
    
    // =============================================
    // End of Handle Quantity Check Item Select
    // =============================================








    // success modal
    let successmodal = $("#successmodal");


    // =============================================
    // Administrator Creation
    // =============================================


    // superAdminCreateModal modal
    let CreateAdminModal = $("#CreateAdminModal");

    let createAdmin = $("#createAdmin");
    let confirmCreateAdmin = $("#confirmCreateAdmin");


    createAdmin.validate({

        submitHandler: function(form){

            CreateAdminModal.modal('show');

          

            confirmCreateAdmin.click(function(evt){
                evt.preventDefault();

                successmodal.modal('show');

                CreateAdminModal.modal('hide');

                setTimeout(function(){
                    form.submit();
                
                },1000);

            });

        }

    });


    // =============================================
    // End
    // =============================================


    // =============================================
    // Administrator Deletion
    // =============================================

    // superAdminCreateModal modal
    let DeleteAdminModal = $("#DeleteAdminModal");

    let DeleteAdmin = $("#DeleteAdmin");
    let confirmDeleteAdmin = $("#confirmDeleteAdmin");

    DeleteAdmin.validate({

        submitHandler: function(form){

            DeleteAdminModal.modal('show');

          

            confirmDeleteAdmin.click(function(evt){
                evt.preventDefault();

                successmodal.modal('show');

                DeleteAdminModal.modal('hide');

                setTimeout(function(){
                    form.submit();
                
                },1000);

            });

        }

    });







    // =============================================
    // End
    // =============================================


    
    // =============================================
    // Administrator Updation and Selection
    // =============================================



    let updateSelect = $("#updateSelect");
    let updateAdmin = $("#updateAdmin");
    let UpdateAdminModal = $("#UpdateAdminModal");
    let confirmUpdateAdmin = $("#confirmUpdateAdmin");

      // get ids for placeholders
      let updatename = $("#updatename");
      let updateemail = $("#updateemail");
      let updatepassword = $("#updatepassword");

    
     // handles the changing of the select button for updating an admin
     updateSelect.change(function(evt){
        evt.preventDefault();

        $.ajax({
            type:"POST",
            url: "index.php?action=getAdminDetails",
            data: $(this).serialize(),
            timeout: 10000,
            error: function(xhr, status, error) {
                alert("Error: " + xhr.status + " - " + error);
            },
            success: function(response)
            {
                // set the placeholders
                updatename.attr("value",response.info.name);
                updateemail.attr("value",response.info.email);
                updatepassword.attr("value",response.info.password);
            }
        });
 

    });


    updateAdmin.validate({

        submitHandler: function(form){

            UpdateAdminModal.modal('show');

            confirmUpdateAdmin.click(function(evt){
                evt.preventDefault();

                successmodal.modal('show');

                UpdateAdminModal.modal('hide');

                setTimeout(function(){
                    form.submit();
                
                },1000);

            });

           
        }

    });


    
    // =============================================
    // End
    // =============================================



    // =============================================
    // Works Entry
    // =============================================

    let WorksEntryModal = $("#WorksEntryModal");

    let openWorkEntry = $("#openWorkEntry");

   let workInfoForm = $("#workInfoForm");

   let FinalWorksEntryModal = $("#FinalWorksEntryModal");

   let confirmWorksEntry = $("#confirmWorksEntry");

    openWorkEntry.on('click',function(evt){

        evt.preventDefault();

        WorksEntryModal.modal('show');


    });


    workInfoForm.validate({

        submitHandler: function(form){

            FinalWorksEntryModal.modal('show');

          

            confirmWorksEntry.click(function(evt){
                evt.preventDefault();

                successmodal.modal('show');

                FinalWorksEntryModal.modal('hide');
                WorksEntryModal.modal('hide');

                setTimeout(function(){
                    form.submit();
                },1000);

            });

        }

    });






    // =============================================
    // End
    // =============================================










    // =============================================
    // Supplies Entry
    // =============================================

    let SuppliesEntryModal = $("#SuppliesEntryModal");

    let openSuppliesEntry = $("#openSuppliesEntry");

   let SuppliesForm = $("#SuppliesForm");

   
   let FinalSuppliesEntryModal = $("#FinalSuppliesEntryModal");

   let confirmSuppliesEntry = $("#confirmSuppliesEntry");

    openSuppliesEntry.on('click',function(evt){

        evt.preventDefault();

        SuppliesEntryModal.modal('show');


    });


    SuppliesForm.validate({

       

        submitHandler: function(form){

           
            FinalSuppliesEntryModal.modal('show');

          

            confirmSuppliesEntry.click(function(evt){
                evt.preventDefault();

                successmodal.modal('show');

                FinalSuppliesEntryModal.modal('hide');
                SuppliesEntryModal.modal('hide');

                setTimeout(function(){
           
                    form.submit();
                                       
                },1000);

            });

        }

    });






    // =============================================
    // End
    // =============================================




    // =============================================
    // Bookings Entry
    // =============================================

    let BookingsEntryModal = $("#BookingsEntryModal");

    let openBookingsEntry = $("#openBookingsEntry");

    let fromBookingTime = $("#bookingstime");

    let endBookingTime = $("#endbookingstime");

   let BookingsForm = $("#BookingsForm");
  
   let showBookingError = $("#showBookingError");

   let FinalBookingsEntryModal = $("#FinalBookingsEntryModal");

   let confirmBookingsEntry = $("#confirmBookingsEntry");
   
   let bookingsdate = $("#bookingsdate");


    openBookingsEntry.on('click',function(evt){

        evt.preventDefault();

        BookingsEntryModal.modal('show');


    });




  
    BookingsForm.validate({

        submitHandler: function(form){

            

            $.ajax({
                type:"POST",
                url: `index.php?action=check_booking_details&fromBookingTime=${fromBookingTime.val()}&endBookingTime=${endBookingTime.val()}&bookingsdate=${bookingsdate.val()}`,
                data: $(this).serialize(),
                timeout: 10000,
                error: function(xhr, status, error) {
                    alert("Error: " + xhr.status + " - " + error);
                },
                success: function(response)
                {
                    if(  response.info.message != "Available" ){     

                        $.toast({heading:"Booking not available",text:"",position:"top-center",loaderBg:"#bf441d",icon:"error",hideAfter:3e3,stack:1});
                        showBookingError.html(response.info.message);
                        console.log(response.info.message);
                    }else{

                        FinalBookingsEntryModal.modal('show');

                        confirmBookingsEntry.click(function(evt){
                            evt.preventDefault();
                            
                            successmodal.modal('show');

                            FinalBookingsEntryModal.modal('hide');

                            BookingsEntryModal.modal('hide');

                            console.log(response.info.message);

                           
            
                            setTimeout(function(){
            
                                form.submit();
                            },1000);
            
                        });

                        

                        
                     
                    }
                 
                }
            });

          

           

        }

    });


















    // BookingsForm.submit(function(evt){
    //     evt.preventDefault();

        
    //     $.ajax({
    //         type:"POST",
    //         url: `index.php?action=check_booking_details&fromBookingTime=${fromBookingTime.val()}&endBookingTime=${endBookingTime.val()}`,
    //         data: $(this).serialize(),
    //         timeout: 1000,
    //         error: function(xhr, status, error) {
    //             alert("Error: " + xhr.status + " - " + error);
    //         },
    //         success: function(response)
    //         {
    //          console.log(response);
            
    //         }
    //     });


    // });
        
























    // =============================================
    // End
    // =============================================




    // =============================================
    // Approval 
    // =============================================

        

        let ApproveModal = $("#ApproveModal");

        let confirmApproveModal = $("#confirmApproveModal");

        // ApprovalForm.validate({

        //     submitHandler: function(form){

        //         ApproveModal.modal('show');

        //         confirmApproveModal.click(function(evt){
        //             evt.preventDefault();
    
        //             successmodal.modal('show');
    
        //             ApproveModal.modal('hide');

    
        //             setTimeout(function(){
        //                 form.submit();
        //             },1000);
    
        //         });


        //     }


        // });


    // =============================================
    // End
    // =============================================



    // =============================================
    // Add Supplies Item
    // =============================================

    
    let createItem = $("#createItem");

    
    createItem.validate({

        submitHandler: function(form){            

            
            successmodal.modal('show');

            setTimeout(function(){
                form.submit();
                successmodal.modal('show');
            
            },1000);
            
           
           
        }

    });





    // =============================================
    // End of Add Supplies Item
    // =============================================
    




    // =============================================
    // Set Bookings Date to now
    // =============================================


    // let bookingsdate = $("#bookingsdate");
    // bookingsdate.valueASDate = new Date();
    // bookingsdate.attr('min', new Date());


    
    // =============================================
    // End
    // =============================================


});