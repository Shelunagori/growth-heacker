<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<style>
.toggle_btn{
	cursor: pointer;
	background-color: #5bc0de;
	height: 27px;
	color: White;
	border: solid 1px #5bc0de;
}
</style>
</head>

<body style="margin: 0;">
<div align="center" class="toggle_btn">Live Chat</div>
<div>jakldajkdasl</div>

<script>
$(document).ready(function() {
	$(".toggle_btn").bind('click',function(e){
		$(".main_container").css("background-color", "yellow");
	});
});
</script>
</body>
</html>