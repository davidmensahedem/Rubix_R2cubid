$(function(){

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




});

























