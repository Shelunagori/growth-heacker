$(document).ready(function(){
    var url="http://52.74.43.53/growth-heacker/feed_gh.php";
	$.ajax({
        url: url,
		jsonp: "callback",
		dataType: "jsonp",
        success: function(data) {
			alert(data);
			$("body").append(data.report_type);
        }
    });
	
});