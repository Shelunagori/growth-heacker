$(document).ready(function(){
	alert();
    var url="http://52.74.43.53/growth-heacker/feed_gh.php";
		alert(url);
	$.ajax({
        
		type: 'GET',
		url: url,
		 async: false,
		jsonpCallback: 'myJSON',
		contentType: "application/json",
		dataType: 'jsonp',
        success: function(data) {
			alert(data);
			$("body").append(data.report_type);
        }
    });
	
});