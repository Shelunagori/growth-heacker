<?php
if(isset($_POST["sub"])){
	echo $_POST["name"];
}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Growth-Hacker</title>
<script type="text/javascript">
$(document).ready(function(){
	$(parent.document).on('click', "#gh_main_div", function () {
		$(parent.document).find('#IFrame_div').show();
	});
	$(document).on('click', "#close_fd", function () {
		$(parent.document).find('#IFrame_div').hide();
	});
});
</script>
</head>

<body style="margin:0px 0px 0px 0px;">
<button type="button" id="close_fd">X</button>
	<div style="background-color: #eee;padding:5px;">
	<form method="post">
	<br/><br/>
		Name: <input type="text" name="name"/><br/>
		Email: <input type="email"/><br/>
		Message: <textarea name="message"></textarea><br/>
		<input type="submit" name="sub"/><br/>
	</form>
	</div>
</body>
</html>