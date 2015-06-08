var host=window.location.host;
var url=window.location.href;
$(document).ready(function(){
	var query="?key=" + key +"&host="+host+"&url="+url;
    var url="http://52.74.43.53/growth-heacker/feed_gh.php" +query;
	
	$.get(url, function(data) {
		alert(data);
	});
});