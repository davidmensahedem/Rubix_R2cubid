$(function(){

    var currentTab=0;


    let addRetailerForm = $("#addRetailerForm");

    let retailerName = $("#retailerName");
        
    let retailerEmail = $("#retailerEmail");

    let retailerContact = $("#retailerContact");

    let retailerAddress = $("#retailerAddress");


    function showTab(e){

        var t = $(".wizard-tab");
    
        t[e].style.display = "block";
    
        $("#prevBtn").style.display = 0 == e ? "none": "inline";
    
        
        if(e != t.length-1){
            $("#submitBtn").style.display = "none";
            $("#nextBtn").style.display = "inline";
        }else if( e == t.length-1){
            $("#nextBtn").style.display = "none";
            $("#submitBtn").style.display = "inline";
        }else if(e == 0 && e < t.length-1){
            
            $("#nextBtn").style.display = "inline";
            
        }
    
        fixStepIndicator(e)
    
    }   

    function nextPrev(e){

        // validate add retailer form
    
        
        if(addRetailerForm){
    
            // validate first four fields
            if( (retailerName.value && retailerName.value.trim() != "") && retailerEmail.value && retailerContact && retailerAddress){
    
    
                
                var t=document.getElementsByClassName("wizard-tab");
    
                t[currentTab].style.display="none";
                
                (currentTab += e) >= t.length && (t[currentTab -= e].style.display="block");
                
                showTab(currentTab) 
    
            }else{
                
                addRetailerForm.classList.add("was-validated");
                
            }
    
        }
    
    
    
    
    }



    function fixStepIndicator(e){
    
        for( var t= $(".list-item"), n=0 ; n < t.length; n++)t[n].className=t[n].className.replace(" active","");
        
        t[e].className +=" active";
    }


    showTab(currentTab);



});

























