var xmlhttp;
var host=window.location.host;
var url=window.location.href;
alert();




if(xobj)
{
var c1=document.getElementById("soc_wing").value;
var query="?key=" + key +"&host="+host+"&url="+url;

xobj.open("GET","http://52.74.43.53/growth-heacker/feed_gh.php" +query,true);
xobj.onreadystatechange=function()
{
if(xobj.readyState==4 && xobj.status==200)
{	   
alert("hello ajax done");
}
}

}
xobj.send(null);




(function(a) {var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = 'http://52.74.43.53/growth-heacker/feedback.js?key='+key;var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);}(window, document))





  












