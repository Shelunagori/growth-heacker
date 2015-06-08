var host=window.location.host;
var url=window.location.href;
$(document).ready(function(){
	var query="?key=" + key +"&host="+host+"&url="+url;
    $('body').load("http://52.74.43.53/growth-heacker/feed_gh.php" +query);
});