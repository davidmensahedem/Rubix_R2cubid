// var currentTab=0;

// let addRetailerForm = document.getElementById("addRetailerForm");

// let retailerName = document.getElementById("retailerName");

// let retailerEmail = document.getElementById("retailerEmail");

// let retailerContact = document.getElementById("retailerContact");

// let retailerAddress = document.getElementById("retailerAddress");


// function showTab(e){
//     var t=document.getElementsByClassName("wizard-tab");

//     t[e].style.display="block";
    
//     document.getElementById("prevBtn").style.display = 0 == e ? "none": "inline";
    

//     if(e != t.length-1){
//         document.getElementById("submitBtn").style.display = "none";
//         document.getElementById("nextBtn").style.display = "inline";
//     }else if( e == t.length-1){
//         document.getElementById("nextBtn").style.display = "none";
//         document.getElementById("submitBtn").style.display = "inline";
//     }else if(e == 0 && e < t.length-1){
        
//         document.getElementById("nextBtn").style.display = "inline";
        
//     }
    
//     // e == t.length-1 ? document.getElementById("nextBtn").type = "submit" : document.getElementById("nextBtn").innerHTML="Next";
    
//     fixStepIndicator(e)
// }

// function nextPrev(e){

//     // validate add retailer form

    

//     if(addRetailerForm){

//         // validate first four fields
//         if( (retailerName.value && retailerName.value.trim() != "") && retailerEmail.value && retailerContact && retailerAddress){


            
//             var t=document.getElementsByClassName("wizard-tab");

//             t[currentTab].style.display="none";
            
//             (currentTab += e) >= t.length && (t[currentTab -= e].style.display="block");
            
//             showTab(currentTab) 

//         }else{
            
//             addRetailerForm.classList.add("was-validated");
            
//         }

//     }




// }

// function fixStepIndicator(e){
    
//     for( var t=document.getElementsByClassName("list-item"), n=0 ; n < t.length; n++)t[n].className=t[n].className.replace(" active","");
    
//     t[e].className +=" active";
// }

// showTab(currentTab);



$(function(){

    var currentTab = 1;

    let t = $(".wizard-tab");

    let addRetailerForm = $("#addRetailerForm");
    
    let showShopCoordinate = $("#showShopCoordinate");
    let shopLatLong = $("#shopLatLong");



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
        
        addRetailerForm.validate({
            
            rules: {
                shopLatLong: "required"
              },
              messages: {
                shopLatLong: "you must record coordinate"
              }
        });

        


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




});

























