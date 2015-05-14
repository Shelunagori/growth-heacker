var xmlhttp;
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
		document.body.insertAdjacentHTML('afterbegin', xmlhttp.responseText);
		document.getElementById("main").addEventListener("click", function(){
		});
    }
  }
xmlhttp.open("GET","http://localhost/growth-heacker/feed_gh.php?key="+key+"&host="+window.location.host,true);
xmlhttp.send();














