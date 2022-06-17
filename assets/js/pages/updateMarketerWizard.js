$(function(){

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




});

























