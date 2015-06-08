var xmlhttp;
var host=window.location.host;
var url=window.location.href;
alert(host);
alert(url);


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
var query="?key=" + key +"&host="+host+"&url="+url;

xobj.open("GET","http://52.74.43.53/growth-heacker/feed_gh.php" +query,true);
xobj.onreadystatechange=function()
{
	alert(xobj.readyState);
	alert(xobj.status);
if(xobj.readyState==4 && xobj.status==200)
{	   
document.body.innerHTML += xobj.responseText;
}
}

}
xobj.send(null);




(function(a) {var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = 'http://52.74.43.53/growth-heacker/feedback.js?key='+key;var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);}(window, document))





  












