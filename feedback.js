
var xmlhttp2;
var host=window.location.host;
var url=window.location.href;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp2=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp2=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp2.onreadystatechange=function()
  {
  if (xmlhttp2.readyState==4 && xmlhttp2.status==200)
    {
		document.body.insertAdjacentHTML('afterbegin', xmlhttp2.responseText);
    }
  }
xmlhttp2.open("GET","http://52.74.43.53/growth-heacker/feedback.php?key="+key+"&host="+host+"&url="+url,true);
xmlhttp2.send();