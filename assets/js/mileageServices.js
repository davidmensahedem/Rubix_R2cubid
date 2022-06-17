$(function(){ 
    
    // start of JQuery


    let successmodal = $("#successmodal");

    


    
    // =============================================
    // Appointments Tables
    // =============================================

    let appointments_table = $("#appointments_table").DataTable({

        pageLength:5,
        dom:'Bfrtip',
        buttons:[
            'csv','excel','pdf','print'
        ]
        
    });



   



    // =============================================
    // End of Appointments Tables
    // =============================================
























    // =============================================
    // Workers Tables
    // =============================================

    let workers_table = $("#workers_table").DataTable({
        ajax:"index.php?action=getworkersinfo",
        stateSave:false,
        pageLength:8,
        dom:'Bfrtip',
        buttons:[
            'csv','excel','pdf','print'
        ],
        createdRow:function(row,data,dataIndex) {

            // let expectedValue;

            // let data_2 = data[2];

            // if(typeof data_2 === 'string'){

            //     data_2 = parseInt(data_2);
            //     expectedValue = data_2 + 5000;

            // }else{
            //     expectedValue = data_2 + 5000;
            // }

             

            

            // close to mileage threshold (color ===> yellow);
            if(data[4] >= ( (75/100) * data[5] )  ){

                $(row).children().eq(4).addClass('bg-warning text-white').html(`${data[4]} `);
                 
             }

             // when mileage value is equal to or greater than the threshold (color ===> red )
            if(data[4] >= data[5]){

                $(row).children().eq(4).addClass('bg-danger text-white').html(`${data[4]} <small>&nbsp;<i class="mdi mdi-shield-alert"></i>due for servicing</small>`);
                 
             }


        },
        columns:[
            {data:0},
            {data:1},
            {data:2},
            {data:3},
            {data:4},
            {data:5}
        ]
        
    });



    // handles the constant updating of the current_activities_table
    setInterval(function(){
        workers_table.ajax.reload(function(json){

            // make an ajax call to get the data from the server 
            // $.ajax({
            //     type:"POST",
            //     url: "",
            //     timeout: 10000, 
            //     error: function(xhr, status, error) {
            //         alert("Error: " + xhr.status + " - " + error);
            //     },
            //     success: function(response)
            //     {
                    
                    
                    
            //     }
            // });

        },false);
    }, 3000);



    // =============================================
    // End of Workers Tables
    // =============================================




    //////////////////////////////////////////////////////////
    //////////////     NEXT SECTION          /////////////////
    //////////////////////////////////////////////////////////
    
    
    
    
    
    
    // =============================================
    // Set Date for All Pages
    // =============================================
    
    $('#page-date').html( (new Date()).toDateString() );
    
    // =============================================
    // End
    // =============================================





    //////////////////////////////////////////////////////////
    //////////////     NEXT SECTION          /////////////////
    //////////////////////////////////////////////////////////





    // =============================================
    // Set Date for All Pages
    // =============================================
    
    $('#copyright').html( `Mileage Software ${(new Date()).getFullYear()}` );
    
    // =============================================
    // End
    // =============================================

    
    
    
    
    //////////////////////////////////////////////////////////
    //////////////     NEXT SECTION          /////////////////
    //////////////////////////////////////////////////////////
    
    
    
    // =============================================
    // Ajax for Dashboard Info
    // =============================================
    
    
    setInterval(function(){
       

           // make an ajax call to get the data from the server 
            $.ajax({
                type:"get",
                url: "index.php?action=getdashboardinfo",
                timeout: 10000, 

               
                
                error: function(xhr, status, error) {
                    alert("Error: " + xhr.status + " - " + error);
                },
                success: function(response)
                {
                    
                  
                    $("#totalWorkersCount").html(response.info.totalWorkersCount);               
                   
                    $("#sterlingCompanyCount").html(response.info.sterlingCompanyCount);

                    if(response.info.totalMileage == null){
                        $("#totalMileage").html(0);
                    }else{
                        $("#totalMileage").html(response.info.totalMileage);
                    }
                    
                    

                    $('#totalAppointments').html(response.info.totalAppointments);
                    
                    
                    
                }
            });

       
    }, 100);



    
    // =============================================
    // End
    // =============================================


    //////////////////////////////////////////////////////////
    //////////////     NEXT SECTION          /////////////////
    //////////////////////////////////////////////////////////
    
    
    
    // =============================================
    // Service Schedule Section
    // =============================================



    // Handle Service Schedule Form Submission
     
    let confirmBookAppointment = $("#confirmBookAppointment");
    
    let scheduleServiceForm = $("#schedule_service");

    let confirmappointmentmodal = $("#confirmappointmentmodal");
        
    
    scheduleServiceForm.validate({

        submitHandler: function(form){

                   
            // form.preventDefault();
         
            confirmappointmentmodal.modal('show');
            

           

            confirmBookAppointment.click(function(evt){

                evt.preventDefault();

                confirmappointmentmodal.modal('hide');
                successmodal.modal('show');

                setTimeout(function(){
                    form.submit();
                
                },2000);
    


            });


           
           

        }

    });




     // handles the changing of the schedule service selects elements

    let sterling_company_select = $("#sterling_company_select");
    let worker_select = $("#worker_select");

    let sterlingCompanyOperatingHours = $("#sterlingCompanyOperatingHours");
    let sterlingCompanyLocation = $("#sterlingCompanyLocation");

    let workerDetails = $("#workerDetails");
    let workerLastServiceMileage = $("#workerLastServiceMileage");
    let workerCurrentMileage = $("#workerCurrentMileage");

    // handle sterling company select

    sterling_company_select.on('change',function(evt){
        evt.preventDefault();

        let id = evt.currentTarget.value;

        if(id == ""){
            sterlingCompanyOperatingHours.html("");
            sterlingCompanyLocation.html("");
            
            return;
        }
        

        $.ajax({
            type:"POST",
            url: "index.php?action=return_sterling_data&id="+id,
            data: $(this).serialize(),
            timeout: 10000,
            error: function(xhr, status, error) {
                alert( error);
            },
            success: function(response)
            {
                sterlingCompanyOperatingHours.html(`Operating Hours:<br/> ${response.info.sterlingCompanyOpeningHours}`);
                sterlingCompanyLocation.html(`Location: ${response.info.sterlingCompanyLocation}`);
                
               
            }
        });
 

    });



    // handle worker select

    worker_select.on('change',function(evt){
        evt.preventDefault();

        let id = evt.currentTarget.value;

        if(id == ""){
            workerCurrentMileage.html("");
            workerDetails.html("");
            workerLastServiceMileage.html("");
            return;
        }
        

        $.ajax({
            type:"POST",
            url: "index.php?action=return_workerinfo_data&id="+id,
            data: $(this).serialize(),
            timeout: 10000,
            error: function(xhr, status, error) {
                alert( error);
            },
            success: function(response)
            {
               
                workerCurrentMileage.html(response.info.workerCurrentMileage);
                workerDetails.html(`${response.info.workerDetails} , ${response.info.workerPosition}`);
                workerLastServiceMileage.html(response.info.lastMileage);

            }
        });
 

    });




    // =============================================
    // End
    // =============================================



    //////////////////////////////////////////////////////////
    //////////////     NEXT SECTION          /////////////////
    //////////////////////////////////////////////////////////
    
    
    
    
    
    
    // =============================================
    // Addition of Mileage (Mileage Management)
    // =============================================



    let add_mileage_form = $("#add_mileage_form");

    let confirmAddMileage = $("#confirmAddMileage");
    
    let AddMileageModal = $("#AddMileageModal");

    add_mileage_form.validate({

        submitHandler: function(form){

            // form.preventDefault();
         
            AddMileageModal.modal('show');
            
            confirmAddMileage.click(function(evt){

                evt.preventDefault();

                AddMileageModal.modal('hide');
                successmodal.modal('show');

                setTimeout(function(){
                    form.submit();
                
                },2000);
    
            });          

        }

    });



    // =============================================
    // End of Addition of Mileage (Mileage Management)
    // =============================================



    //////////////////////////////////////////////////////////
    //////////////     NEXT SECTION          /////////////////
    //////////////////////////////////////////////////////////
    
    
    
    
    
    
    // =============================================
    // Addition of Worker (Worker Management)
    // =============================================


    let add_worker_form = $("#add_worker_form");

    let confirmAddWorker = $("#confirmAddWorker");
    
    let AddWorkerModal = $("#AddWorkerModal");

    add_worker_form.validate({

        submitHandler: function(form){

            if( $('#worker_name').val().trim() == "" || $('#workerID').val().trim() == "" || $('#position').val().trim() == ""){
                
                $.toast({heading:"Invalid Information!",text:"Required field(s) must not be empty",position:"top-right",loaderBg:"#bf441d",icon:"error",hideAfter:3e3,stack:1});

                return;
            
            }

          

            
         
            AddWorkerModal.modal('show');
            
            confirmAddWorker.click(function(evt){

                evt.preventDefault();

                AddWorkerModal.modal('hide');
                successmodal.modal('show');

                setTimeout(function(){
                    form.submit();
                
                },2000);
    
            });          

        }

    });

// =============================================
// End of Addition of Worker (Worker Management)
// =============================================
    
    
    
    
    
// =============================================
// Updation of Worker (Worker Management)
// =============================================


    let update_worker_form = $("#update_worker_form");

    let updateInformation = $('#updateInformation');

    let confirmUpdateWorker = $("#confirmUpdateWorker");
    
    let UpdateWorkerModal = $("#UpdateWorkerModal");

    let update_worker_select = $("#update_worker_select");


    // handle the selecting of a worker for updation
    update_worker_select.on('change',function(evt){

        evt.preventDefault();
        
        let id = evt.currentTarget.value;

        updateInformation.removeClass('d-none');

        $.ajax({
            type:"POST",
            url: "index.php?action=return_update_worker_info&id="+id,
            data: $(this).serialize(),
            timeout: 10000,
            error: function(xhr, status, error) {
                alert( error);
            },
            success: function(response)
            {
               
                $('#update_worker_name').val(response.info.workerName);

                $('#update_worker_position').val(response.info.workerPosition);

                $('#update_workerID').val(response.info.workerID);

                $('#phone_number').val(response.info.workerPhoneNumber);
               
            }
        });

        

     


    });



    // handle the updation of workers
    update_worker_form.validate({
        
        submitHandler: function(form){  
            
            
            UpdateWorkerModal.modal('show');
            
            confirmUpdateWorker.click(function(evt){

                evt.preventDefault();

                UpdateWorkerModal.modal('hide');
                successmodal.modal('show');

                setTimeout(function(){
                    form.submit();
                    
                },2000);
                
            });          

        }
        
    });
    
    
    
    // =============================================
    // End of Updation of Worker (Worker Management)
    // =============================================




    // =============================================
    // Deletion of Worker (Worker Management)
    // =============================================


    let delete_worker_form = $("#delete_worker_form");

    let confirmDeleteWorker = $("#confirmDeleteWorker");
    
    let DeleteWorkerModal = $("#DeleteWorkerModal");

    delete_worker_form.validate({

        submitHandler: function(form){

              
            DeleteWorkerModal.modal('show');
            
            confirmDeleteWorker.click(function(evt){

                evt.preventDefault();

                DeleteWorkerModal.modal('hide');
                successmodal.modal('show');

                setTimeout(function(){
                    form.submit();
                
                },2000);
    
            });          

        }

    });

// =============================================
// End of Deletion of Worker (Worker Management)
// =============================================




 //////////////////////////////////////////////////////////
//////////////     NEXT SECTION          /////////////////
//////////////////////////////////////////////////////////
    
    
    
    
    
    
    // =============================================
    // Handle Navigation Active State
    // =============================================

        $('#side-menu li a').on('click',function(evt){

           evt.preventDefault();

            let url = evt.currentTarget.href

            let urlArray = url.split("=");

            let urlValue = urlArray[1];

      
           

            $.ajax({
                type:"POST",
                url: "index.php?action=set_and_update_navigation&urlname="+urlValue,
                data: $(this).serialize(),
                timeout: 10000,
                error: function(xhr, status, error) {
                    alert( error);
                },
                success: function(response)
                {
                    
                   window.location.href = `http://localhost/mileage_software/?action=${response}`;

                }
            });

        });

     // =============================================
    // End of Handle Navigation Active State
    // =============================================



    //////////////////////////////////////////////////////////
    //////////////     NEXT SECTION          /////////////////
    //////////////////////////////////////////////////////////



   
    // =============================================
    // Start of After Appointment Form
    // =============================================

    let afterAppointmentModal = $('#afterAppointmentModal');
    
    let CompletedModal = $('#CompletedModal');
    
    let appointmentDoneBtn = $('#appointmentDoneBtn');

    let after_appointment_form = $('#after_appointment_form');

    let confirmCompleted = $('#confirmCompleted');

    appointmentDoneBtn.on('click',function(){

        afterAppointmentModal.modal('show');


        // submitting of appointment form

    });


    after_appointment_form.validate({

        submitHandler: function(form){

            CompletedModal.modal('show');


            
           
            // $.toast({heading:"Invalid Information!",text:"Required field(s) must not be empty",position:"top-center",loader:false,allowToastClose:false,hideAfter:60000,icon:"warning",stack:1});
            confirmCompleted.click(function(evt){

                evt.preventDefault();

                CompletedModal.modal('hide');
                afterAppointmentModal.modal('hide');
                successmodal.modal('show');



             

                setTimeout(function(){
                    form.submit();
                
                },2000);
    
            });          

        }

    });






    
    
    // =============================================
    // End of After Appointment Form
    // =============================================

    
    
    







// end of JQuery
});