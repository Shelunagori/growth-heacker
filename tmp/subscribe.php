<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<div align="center"><h3>LOGO</h3></div>
<table width="100%">
<tr>
<td width="80%"><input type="email" style="width:100%;"/></td>
<td><button type="button">SUBSCRIBE</button></td>
</tr>
</table>
<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

echo @$_COOKIE[$cookie_name];
?> 
</body>
</html>