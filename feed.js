var xmlhttp;
var host=window.location.host;
var url=window.location.href;


var xhr = new XMLHttpRequest();
xhr.open("GET", "http://52.74.43.53/growth-heacker/feed_gh.php?key="+key+"&host="+host+"&url="+url, true);
xhr.onload = function (e) {
  if (xhr.readyState === 4) {
    if (xhr.status === 200) {
      console.log(xhr.responseText);
	  document.body.insertAdjacentHTML('afterbegin', xhr.responseText);
    } else {
      console.error(xhr.statusText);
    }
  }
};
xhr.onerror = function (e) {
  console.error(xhr.statusText);
};
xhr.send(null);





(function(a) {var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = 'http://52.74.43.53/growth-heacker/feedback.js?key='+key;var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);}(window, document))





  












