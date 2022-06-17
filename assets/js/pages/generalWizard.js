$(function(){



    function handleAddRetailer(){

        var currentTab = 1;

        let t = $(".wizard-tab");

        let addRetailerForm = $("#addRetailerForm");
        
        let showShopCoordinate = $("#showShopCoordinate");

        let checkOldShop = $("#checkOldShop");


        function showTab(e){

            var t = $(".wizard-tab");
        
            // t[e].style.display = "block";
    
            t.each(function(){
    
                let index = $(this).index();
    
                if(index == e){
    
                    $(this).css("display","block");
    
                }else{
                    $(this).css("display","none");
                }
            });
            
        
            // $("#prevBtn").style.display = 0 == e ? "none": "inline";
            
            if( 1 == e){
                $("#prevBtn").css("display","none");
            }else{
                
                $("#prevBtn").css("display","inline");
            }
    
    
            if(e != t.length){
                $("#submitBtn").css("display","none");
                $("#nextBtn").css("display","inline");
            }else if( e == t.length){
                $("#nextBtn").css("display","none");
                $("#submitBtn").css("display","block");
            }else if(e == 1 && e < t.length){
                
                $("#nextBtn").css("display","inline");
                
            }
        
            fixStepIndicator(e)
        
        } 

        function next(e){

            


            if(currentTab == 2){

                if( checkOldShop.length && (checkOldShop.val() == null || checkOldShop.val() == "") ){
                    $.toast({heading:"Shop name exists!",text:"Enter a new shop name",position:"top-center",loaderBg:"#bf441d",icon:"error",hideAfter:3e3,stack:1});
                    return;
                }

                if(showShopCoordinate.html() == "" ){
                    $.toast({heading:"No coordinates!",text:"Record shop coordinates",position:"top-center",loaderBg:"#bf441d",icon:"error",hideAfter:3e3,stack:1});
                    return;
                }
               
            }
    
            
    
    
            if(addRetailerForm.valid() != false){
    
                // validate add retailer form
    
                
                    
                var t = $(".wizard-tab");
    
                // t[currentTab].style.display="none";
    
                t.each(function(){
                    let index = $(this).index();
                    
                    if(index == e){
                        $(this).css("display","none");
                    }
                });
    
                currentTab = currentTab + e;
    
    
    
               
    
                if(currentTab > t.length){
    
                    currentTab = currentTab - e;
    
                    t.each(function(){
                        let index = $(this).index();
                        
                        if(index == currentTab){
                            $(this).css("display","block");
                            $(this).siblings().css("display","none");
                        }
                    });
    
                }
    
                addRetailerForm.removeClass("was-validated");
    
                showTab(currentTab);
                    
    
    
            }else{
                addRetailerForm.addClass("was-validated");
            }
            
                    
        
        }

        function prev(e){

            // validate add retailer form
                    
            var t = $(".wizard-tab");
    
            // t[currentTab].style.display="none";
    
            currentTab = currentTab - 1;
    
            t.each(function(){
                let index = $(this).index();
                
                if(index == currentTab){
                    $(this).css("display","block");
                }
            });
    
            
    
            if(currentTab == 0){
    
                currentTab = 1;
    
                t.each(function(){
                    let index = $(this).index();
                    
                    if(index == currentTab){
                        $(this).css("display","block");
                        $(this).siblings().css("display","none");
                    }
                });
    
            }
    
    
            showTab(currentTab);
    
                    
        
        }

        function fixStepIndicator(e){

            var t = $(".list-item");
    
            t.each(function(){
    
                let index = $(this).index();
    
                if(index == e){
                    $(this).siblings().removeClass("active");
                    $(this).addClass("active");
                }
            });
               
        }
    
        showTab(currentTab);

        $("#nextBtn").on("click",function(){
            next(1);
        });
    
        $("#prevBtn").on("click",function(){
            prev(-1);
        });
           
    }


    function handleAddNextShop(){

        var currentTab = 1;

        let showShopCoordinate = $("#showShopCoordinate");

        let checkShop = $("#checkShop");

        let t = $(".wizard-tab");

        let addShopForm = $("#addShopForm");
        
        

        function showTab(e){

            var t = $(".wizard-tab");
        
            // t[e].style.display = "block";
    
            t.each(function(){
    
                let index = $(this).index();
    
                if(index == e){
                    console.log(index);
    
                    $(this).css("display","block");
    
                }else{
                    $(this).css("display","none");
                }
            });
            
        
            // $("#prevBtn").style.display = 0 == e ? "none": "inline";
            
            if( 1 == e){
                $("#retailerNextPrevBtn").css("display","none");
            }else{
                
                $("#retailerNextPrevBtn").css("display","inline");
            }
    
    
            if(e != t.length){
                $("#retailerNextSubmitBtn").css("display","none");
                $("#retailerNextNextBtn").css("display","inline");
            }else if( e == t.length){
                $("#retailerNextNextBtn").css("display","none");
                $("#retailerNextSubmitBtn").css("display","block");
            }else if(e == 1 && e < t.length){
                
                $("#retailerNextNextBtn").css("display","inline");
                
            }
        
            fixStepIndicator(e)
        
        } 

        function next(e){

            if( checkShop.length && (checkShop.val() == null || checkShop.val() == "") ){
                $.toast({heading:"Shop name exists!",text:"Enter a new shop name",position:"top-center",loaderBg:"#bf441d",icon:"error",hideAfter:3e3,stack:1});
                return;
            }
            
            if(showShopCoordinate.html() == ""){
                $.toast({heading:"No coordinates!",text:"Record shop coordinates",position:"top-center",loaderBg:"#bf441d",icon:"error",hideAfter:3e3,stack:1});
                return;
            }
            
    
    
            if(addShopForm.valid() != false){
    
                // validate add retailer form


                    
                var t = $(".wizard-tab");
    
                // t[currentTab].style.display="none";
    
                t.each(function(){
                    let index = $(this).index();
                    
                    if(index == e){
                        $(this).css("display","none");
                    }
                });
    
                currentTab = currentTab + e;
        
        
        
                   
        
                if(currentTab > 3){
    
                    currentTab = currentTab - e;
    
                    t.each(function(){
                        let index = $(this).index();
                        
                        if(index == currentTab){
                            $(this).css("display","block");
                            $(this).siblings().css("display","none");
                        }
                    });
    
                }
    
                addShopForm.removeClass("was-validated");
    
                showTab(currentTab);           
            }else{
                addShopForm.addClass("was-validated");
            }
            
                    
        
        }

        function prev(e){

            // validate add retailer form
                    
            var t = $(".wizard-tab");
    
            // t[currentTab].style.display="none";
    
            currentTab = currentTab - 1;
    
            t.each(function(){
                let index = $(this).index();
                
                if(index == currentTab){
                    $(this).css("display","block");
                }
            });
    
            
    
            if(currentTab == 0){
    
                currentTab = 1;
    
                t.each(function(){
                    let index = $(this).index();
                    
                    if(index == currentTab){
                        $(this).css("display","block");
                        $(this).siblings().css("display","none");
                    }
                });
    
            }
    
    
            showTab(currentTab);
    
                    
        
        }

        function fixStepIndicator(e){

            var t = $(".list-item");
    
            t.each(function(){
    
                let index = $(this).index();
    
                if(index == e){
                    $(this).siblings().removeClass("active");
                    $(this).addClass("active");
                }
            });
               
        }
    
        showTab(currentTab);

        $("#retailerNextNextBtn").on("click",function(){
            next(1);
        });
    
        $("#retailerNextPrevBtn").on("click",function(){
            prev(-1);
        });
           
    }





    function handleAddMarketer(){

        var currentTab = 1;

        let createMarketerForm = $("#createMarketerForm");

        
        function showTab(e){

            var t = $(".wizard-tab");
        

            t.each(function(){

                let index = $(this).index();

                if(index == e){

                    $(this).css("display","block");

                }else{
                    $(this).css("display","none");
                    
                }
            });

            
            
        
            
            
            if( 1    == e){
                $("#prevBtnCreateMarketer").css("display","none");
            }else{
                
                $("#prevBtnCreateMarketer").css("display","inline");
            }


            if(e != currentTab){
                $("#submitBtnCreateMarketer").css("display","none");
                $("#nextBtnCreateMarketer").css("display","inline");
            }else if( e == 1){
                $("#nextBtnCreateMarketer").css("display","none");
                $("#submitBtnCreateMarketer").css("display","block");
            }else if(e == 1 && e < 1){
                
                $("#nextBtnCreateMarketer").css("display","inline");
                
            }
        
            fixStepIndicator(e)
        
        }   

        
        function next(e){
            
            createMarketerForm.validate();

            


            if(createMarketerForm.valid() != false){

                // validate add retailer form

                
                    
                var t = $(".wizard-tab");

                

                t.each(function(){
                    let index = $(this).index();
                                
                    if(index == currentTab){
                        $(this).css("display","none");
                    }
                });

                currentTab = currentTab + e;



            

                if(currentTab > 3){

                    currentTab = currentTab - e;

                    t.each(function(){
                        let index = $(this).index();
                        
                        if(index == currentTab){
                            $(this).css("display","block");
                            $(this).siblings().css("display","none");
                        }
                    });

                }

                createMarketerForm.removeClass("was-validated");

                showTab(currentTab);
                    


            }else{
                createMarketerForm.addClass("was-validated");
            }
            
                    
        
        }

        function prev(e){

            // validate add retailer form
                    
            var t = $(".wizard-tab");

            // t[currentTab].style.display="none";

            currentTab = currentTab - 1;

            t.each(function(){
                let index = $(this).index();
                
                if(index == currentTab){
                    $(this).css("display","block");
                }
            });

            

            if(currentTab == 0){

                currentTab = 1;

                t.each(function(){
                    let index = $(this).index();
                    
                    if(index == currentTab){
                        $(this).css("display","block");
                        $(this).siblings().css("display","none");
                    }
                });

            }


            showTab(currentTab);

                    
        
        }

        
        function fixStepIndicator(e){

            var t = $(".list-item");

            t.each(function(){

                let index = $(this).index();

                if(index == e){
                    $(this).siblings().removeClass("active");
                    $(this).addClass("active");
                }
            });
            
        }

        showTab(currentTab);

        $("#nextBtnCreateMarketer").on("click",function(){
            next(1);
        });
    
        $("#prevBtnCreateMarketer").on("click",function(){
            prev(-1);
        });




    }


    function handleDeleteMarketer(){

        var currentTab = 1;

        let deleteMarketerFormContainer = $("#deleteMarketerFormContainer");

        
        function showTab(e){

            var t = $(".wizard-tab");
        

            t.each(function(){

                let index = $(this).index();

                if(index == e){

                    $(this).css("display","block");

                }else{
                    $(this).css("display","none");
                    
                }
            });

            
        
            fixStepIndicator(e)
        
        }   

               
        function fixStepIndicator(e){

            var t = $(".list-item");

            t.each(function(){

                let index = $(this).index();

                if(index == e){
                    $(this).siblings().removeClass("active");
                    $(this).addClass("active");
                }
            });
            
        }

        showTab(currentTab);


    }

    function handleDeleteRetailer(){

        var currentTab = 1;

        let deleteRetailerFormContainer = $("#deleteRetailerFormContainer");

        
        function showTab(e){

            var t = $(".wizard-tab");
        

            t.each(function(){

                let index = $(this).index();

                if(index == e){

                    $(this).css("display","block");

                }else{
                    $(this).css("display","none");
                    
                }
            });

            
                    
            fixStepIndicator(e)
        
        }   

               
        function fixStepIndicator(e){

            var t = $(".list-item");

            t.each(function(){

                let index = $(this).index();

                if(index == e){
                    $(this).siblings().removeClass("active");
                    $(this).addClass("active");
                }
            });
            
        }

        showTab(currentTab);


    }


    function handleUpdateRetailer(){

        var currentTab = 2;

        let updateRetailerForm = $("#updateRetailerForm");

        function showTab(e){

            var t = $(".wizard-tab");
        
    
            t.each(function(){
    
                let index = $(this).index();
    
                if(index == e){
    
                    
                    $(this).css("display","block");
    
                }else{
                    $(this).css("display","none");
                    
                }
            });
            
        
            
            
            if( 2 == e){
                $("#prevBtnUpdateRetailer").css("display","none");
            }else{
                
                $("#prevBtnUpdateRetailer").css("display","inline");
            }
    
    
            if(e != 3){
                $("#submitBtnUpdateRetailer").css("display","none");
                $("#nextBtnUpdateRetailer").css("display","inline");
            }else if( e == 3){
                $("#nextBtnUpdateRetailer").css("display","none");
                $("#submitBtnUpdateRetailer").css("display","block");
            }else if(e == 1 && e < 3){
                
                $("#nextBtnUpdateRetailer").css("display","inline");
                
            }
        
            fixStepIndicator(e)
        
        }   

        function next(e){
        
            updateRetailerForm.validate();
    
            
    
    
            if(updateRetailerForm.valid() != false){
    
                // validate add retailer form
    
                
                    
                var t = $(".wizard-tab");
    
                
    
                t.each(function(){
                    let index = $(this).index();
                    console.log(index);
                    
                    if(index == currentTab){
                        $(this).css("display","none");
                    }
                });
    
                currentTab = currentTab + e;
    
    
    
               
    
                if(currentTab > 3){
    
                    currentTab = currentTab - e;
    
                    t.each(function(){
                        let index = $(this).index();
                        
                        if(index == currentTab){
                            $(this).css("display","block");
                            $(this).siblings().css("display","none");
                        }
                    });
    
                }
    
                updateRetailerForm.removeClass("was-validated");
    
                showTab(currentTab);
                    
    
    
            }else{
                updateRetailerForm.addClass("was-validated");
            }
            
                    
        
        }

        function prev(e){

            // validate add retailer form
                    
            var t = $(".wizard-tab");
    
            // t[currentTab].style.display="none";
    
            currentTab = currentTab - 1;
    
            t.each(function(){
                let index = $(this).index();
                
                if(index == currentTab){
                    $(this).css("display","block");
                }
            });
    
            
    
            if(currentTab == 0){
    
                currentTab = 1;
    
                t.each(function(){
                    let index = $(this).index();
                    
                    if(index == currentTab){
                        $(this).css("display","block");
                        $(this).siblings().css("display","none");
                    }
                });
    
            }
    
    
            showTab(currentTab);
    
                    
        
        }

        
        function fixStepIndicator(e){

            var t = $(".list-item");

            t.each(function(){

                let index = $(this).index();

                if(index == e){
                    $(this).siblings().removeClass("active");
                    $(this).addClass("active");
                }
            });
            
        }

        showTab(currentTab);

        $("#nextBtnUpdateRetailer").on("click",function(){
            next(1);
        });
    
        $("#prevBtnUpdateRetailer").on("click",function(){
            prev(-1);
        });
    
    

    }


    function handleAddOrder(){

        var currentTab = 1;

        let createOrderForm = $("#createOrderForm");

        function showTab(e){

            var t = $(".wizard-tab");
        
    
            t.each(function(){
    
                let index = $(this).index();
    
                if(index == e){
    
                    
                    $(this).css("display","block");
    
                }else{
                    $(this).css("display","none");
                    
                }
            });
            
        
            
            
            if( 1 == e){
                $("#prevBtnAddOrder").css("display","none");
            }else{
                
                $("#prevBtnAddOrder").css("display","inline");
            }
    
    
            if(e != t.length){
                $("#submitBtnAddOrder").css("display","none");
                $("#nextBtnAddOrder").css("display","inline");
            }else if( e == t.length){
                $("#nextBtnAddOrder").css("display","none");
                $("#submitBtnAddOrder").css("display","block");
            }else if(e == 1 && e < t.length){
                
                $("#nextBtnAddOrder").css("display","inline");
                
            }
        
            fixStepIndicator(e)
        
        }   

        function next(e){
        
            createOrderForm.validate();
    
            
    
    
            if(createOrderForm.valid() != false){
    
                // validate add retailer form
    
                
                    
                var t = $(".wizard-tab");
    
                
    
                t.each(function(){
                    let index = $(this).index();
                    console.log(index);
                    
                    if(index == currentTab){
                        $(this).css("display","none");
                    }
                });
    
                                
                currentTab = currentTab + e;
                
                  
    
                if(currentTab > t.length){
    
                    currentTab = currentTab - e;
    
                    t.each(function(){
                        let index = $(this).index();
                        
                        if(index == currentTab){
                            $(this).css("display","block");
                            $(this).siblings().css("display","none");
                        }
                    });
    
                }
    
    
    
                createOrderForm.removeClass("was-validated");
    
                showTab(currentTab);
                    
    
    
            }else{
                createOrderForm.addClass("was-validated");
            }
            
                    
        
        }

        function prev(e){

            // validate add retailer form
                    
            var t = $(".wizard-tab");
    
            // t[currentTab].style.display="none";
    
            currentTab = currentTab - 1;
    
            t.each(function(){
                let index = $(this).index();
                
                if(index == currentTab){
                    $(this).css("display","block");
                }
            });
    
            
    
            if(currentTab == 0){
    
                currentTab = 1;
    
                t.each(function(){
                    let index = $(this).index();
                    
                    if(index == currentTab){
                        $(this).css("display","block");
                        $(this).siblings().css("display","none");
                    }
                });
    
            }
    
    
            showTab(currentTab);
    
                    
        
        }

        
        function fixStepIndicator(e){

            var t = $(".list-item");

            t.each(function(){

                let index = $(this).index();

                if(index == e){
                    $(this).siblings().removeClass("active");
                    $(this).addClass("active");
                }
            });
            
        }

        showTab(currentTab);

        $("#nextBtnAddOrder").on("click",function(){
            next(1);
        });
    
        $("#prevBtnAddOrder").on("click",function(){
            prev(-1);
        });
    
    

    }



    function handleUpdateMarketer(){

        var currentTab = 2;

        let updateMarketerForm = $("#updateMarketerForm");

        function showTab(e){

            var t = $(".wizard-tab");
        
    
            t.each(function(){
    
                let index = $(this).index();
    
                if(index == e){
    
                    console.log(t.length);
    
                    $(this).css("display","block");
    
                }else{
                    $(this).css("display","none");
                    
                }
            });
            
        
            
            
            if( 2 == e){
                $("#prevBtnUpdateMarketer").css("display","none");
            }else{
                
                $("#prevBtnUpdateMarketer").css("display","inline");
            }
    
    
            if(e != 3){
                $("#submitBtnUpdateMarketer").css("display","none");
                $("#nextBtnUpdateMarketer").css("display","inline");
            }else if( e == 3){
                $("#nextBtnUpdateMarketer").css("display","none");
                $("#submitBtnUpdateMarketer").css("display","block");
            }else if(e == 1 && e < 3){
                
                $("#nextBtnUpdateMarketer").css("display","inline");
                
            }
        
            fixStepIndicator(e)
        
        }   

        
        function next(e){
            
            updateMarketerForm.validate();

            


            if(updateMarketerForm.valid() != false){

                // validate add retailer form

                
                    
                var t = $(".wizard-tab");

                

                t.each(function(){
                    let index = $(this).index();
                    console.log(index);
                    
                    if(index == currentTab){
                        $(this).css("display","none");
                    }
                });

                currentTab = currentTab + e;



            

                if(currentTab > 3){

                    currentTab = currentTab - e;

                    t.each(function(){
                        let index = $(this).index();
                        
                        if(index == currentTab){
                            $(this).css("display","block");
                            $(this).siblings().css("display","none");
                        }
                    });

                }

                updateMarketerForm.removeClass("was-validated");

                showTab(currentTab);
                    


            }else{
                updateMarketerForm.addClass("was-validated");
            }
            
                    
        
        }

        function prev(e){

            // validate add retailer form
                    
            var t = $(".wizard-tab");
    
            // t[currentTab].style.display="none";
    
            currentTab = currentTab - 1;
    
            t.each(function(){
                let index = $(this).index();
                
                if(index == currentTab){
                    $(this).css("display","block");
                }
            });
    
            
    
            if(currentTab == 0){
    
                currentTab = 1;
    
                t.each(function(){
                    let index = $(this).index();
                    
                    if(index == currentTab){
                        $(this).css("display","block");
                        $(this).siblings().css("display","none");
                    }
                });
    
            }
    
    
            showTab(currentTab);
    
                    
        
        }

            
        function fixStepIndicator(e){

            var t = $(".list-item");

            t.each(function(){

                let index = $(this).index();

                if(index == e){
                    $(this).siblings().removeClass("active");
                    $(this).addClass("active");
                }
            });
            
        }
        
        
        showTab(currentTab);

        $("#nextBtnUpdateMarketer").on("click",function(){
            next(1);
        });

        $("#prevBtnUpdateMarketer").on("click",function(){
            prev(-1);
        });

    

    }

   
    // call all the functions

    if($("#createMarketerForm").length){

        handleAddMarketer();
    }

    if( $("#updateMarketerForm").length){

        handleUpdateMarketer();
    }

    if($("#addRetailerForm").length){

        handleAddRetailer();
    }

    if($("#updateRetailerForm").length){

        handleUpdateRetailer();
    }

    if($("#deleteMarketerFormContainer").length){

        handleDeleteMarketer();
    }

    if($("#deleteRetailerFormContainer").length){

        handleDeleteRetailer();
    }

    if($("#createOrderForm").length){

        handleAddOrder();

    }
    
    if($("#addShopForm").length){

        handleAddNextShop();

    }

});





























    