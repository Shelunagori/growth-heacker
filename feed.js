var host=window.location.host;
var url=window.location.href;



function createCORSRequest(method, url){
    var xhr = new XMLHttpRequest();
    if ("withCredentials" in xhr){
        // XHR has 'withCredentials' property only if it supports CORS
        xhr.open(method, url, true);
    } else if (typeof XDomainRequest != "undefined"){ // if IE use XDR
        xhr = new XDomainRequest();
        xhr.open(method, url);
    } else {
        xhr = null;
    }
   // return xhr;
   alert(xhr.responseText);
	
}


var request = createCORSRequest( "get", "http://52.74.43.53/growth-heacker/feed_test.php");
if ( request ){
    // Define a callback function
    request.onload = function(){};
    // Send request
    request.send();
}








  












