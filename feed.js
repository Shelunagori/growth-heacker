var xmlhttp;
var host=window.location.host;
var url=window.location.href;

alert("http://52.74.43.53/growth-heacker/feed_gh.php?key="+key+"&host="+host+"&url="+url);
   $.ajax({
   type:'GET',
   url :"http://52.74.43.53/growth-heacker/feed_gh.php?key="+key+"&host="+host+"&url="+url,
   success: function(data) {
        console.log('success',data);
			alert(data);
			
   },
   error:function(exception){alert('Exeption:'+exception);}
}); 





(function(a) {var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = 'http://52.74.43.53/growth-heacker/feedback.js?key='+key;var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);}(window, document))





  












