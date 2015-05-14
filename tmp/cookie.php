<html>
<head>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="jquery.cookie.js"></script>
<script>
function setCookie(key, value) {
   var expires = new Date();
   expires.setTime(expires.getTime() + 31536000000); //1 year
   document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
   }

function getCookie(key) {
   var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
   return keyValue ? keyValue[2] : null;
   }

setCookie('growth-heacker', 'hello');
alert(getCookie('growth-heacker'));

</script>
</head>
<body>
<a class="setme">Set Me</a>
<a class="tellme">Tell Me</a>
<a class="delete">DeleteM</a>
</body>
</html>
