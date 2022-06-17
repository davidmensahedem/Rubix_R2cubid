let recordShopCoordinate  = document.getElementById('recordShopCoordinate');
let showShopCoordinate = document.getElementById('showShopCoordinate');
let shopCoordinateValues = document.getElementById('shopCoordinateValues');


function getShopCoordinate(){

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        showShopCoordinate.innerHTML = "Geolocation is not supported by this browser.";
    }

}

function showPosition(position) {
    let shopCoordinate = "Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude;
    showShopCoordinate.innerHTML = shopCoordinate;
    shopCoordinateValues.value ="https://www.google.com/maps/@"+position.coords.latitude.toFixed(5)+","+position.coords.longitude.toFixed(5)+",15z";
   
}

if(recordShopCoordinate != undefined || recordShopCoordinate != null){

    recordShopCoordinate.onclick = function(){        
        getShopCoordinate();
    }
}




