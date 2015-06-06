var xmlhttp;
var host=window.location.host;
var url=window.location.href;
alert(key);



var xobj;
//modern browers
if(window.XMLHttpRequest)
{
xobj=new XMLHttpRequest();
}
//for ie
else if(window.ActiveXObject)
{
xobj=new ActiveXObject("Microsoft.XMLHTTP");
}
else
{
alert("Your broweser doesnot support ajax");
}
if(xobj)
{
	
	var handleResponse = function (status, response) {
   alert(response)
}
var handleStateChange = function () {
   switch (xmlhttp.readyState) {
      case 0 : // UNINITIALIZED
      case 1 : // LOADING
      case 2 : // LOADED
      case 3 : // INTERACTIVE
      break;
      case 4 : // COMPLETED
      handleResponse(xmlhttp.status, xmlhttp.responseText);
      break;
      default: alert("error");
   }
}
var query="?key=" + key +"&host="+host+"&url="+url;
var xobj=new XMLHttpRequest();
xobj.onreadystatechange=handleStateChange;
xobj.open("GET","http://52.74.43.53/growth-heacker/feed_gh.php" +query,true);
xobj.send(null);






(function(a) {var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = 'http://52.74.43.53/growth-heacker/feedback.js?key='+key;var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);}(window, document))





  












