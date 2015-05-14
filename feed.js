var xmlhttp;
var host=window.location.host;
var url=window.location.href;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
	  
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
		alert(url);
		document.body.insertAdjacentHTML('afterbegin', xmlhttp.responseText);
    }
  }
xmlhttp.open("GET","http://52.74.43.53/growth-heacker/feed_gh.php?key="+key+"&host="+host+"&url="+url,true);
xmlhttp.send();



(function(a) {var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = 'http://52.74.43.53/growth-heacker/feedback.js?key='+key;var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);}(window, document))





  












