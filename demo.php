<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="http://localhost/growth-heacker_css/style_gh.css" rel="stylesheet" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Growth-Hacker | Demo</title>
<script type="text/javascript">
$(document).ready(function(){
	var c=$(window).height();
	$("#main_iframe").height(c);
	$( window ).resize(function() {
		var c=$(window).height();
		$("#main_iframe").height(c);
	});
});
</script>
</head>

<body style="margin:0px 0px 0px 0px;">
	<iframe  src="http://localhost/lohars/" id="main_iframe"  frameBorder="0" width="100%" ></iframe>
	<div style="position: absolute; top: 0; background-color: rgba(0, 0, 0, 0.61); width: 50%; margin-left: 25%; color: #fff;padding: 5px;border:solid 2px #838383">
	<div align="center" style="  padding: 5px 0 5px 0;background-color: rgba(0, 0, 0, 0.65);">
		Growth-Hacker Demo For - <b>"localhost/lohars/"</b>
	</div>
		<table width="100%">
			<tr>
				<td align="center">
					<div class="welcome active"><i class="fa fa-user-plus fa-2x"></i><br/><span class="text_des">WELCOME</span></div>
				</td>
				<td align="center">
					<div class="feedback"><i class="fa fa-camera-retro fa-2x"></i><br/><span class="text_des">FEEDBACK</span></div>
				</td>
				<td align="center">
					<div class="notification"><i class="fa fa-camera-retro fa-2x"></i><br/>Feedback</div>
				</td>
				<td align="center">
					<div class="notification"><i class="fa fa-camera-retro fa-2x"></i><br/>Feedback</div>
				</td>
			</tr>
		</table>
		<div style="  padding: 5px 5px 5px 5px;background-color: rgba(0, 0, 0, 0.65);">
		Some Description
		</div><br/>
		<div align="center">
			<div align="center" class="go"><i class="fa fa-arrow-circle-right fa-2x"></i></div>
		</div>
	</div>
</body>
</html>
<style>

.welcome{
	background-color: #1f897f; width: 62px; border-radius: 5px; padding: 5px;border: solid 3px #1f897f;cursor: pointer;
}
.welcome:hover{
	border: solid 3px #fff;
}
.feedback{
	background-color: #578ebe; width: 62px; border-radius: 5px; padding: 5px;border: solid 3px #578ebe;cursor: pointer;
}
.feedback:hover{
	border: solid 3px #fff;
}

.notification{
	background-color: #dfba49; width: 62px; border-radius: 5px; padding: 5px;border: solid 3px #dfba49;cursor: pointer;
}
.notification:hover{
	border: solid 3px #fff;
}

.active{
	border: solid 3px #fff;
}

.go{
	width: 32px;
	border: solid 1px #fff;
	padding: 10px;
	background-color: #f1353d;
	cursor: pointer;
	border-radius: 5px;
}
.go:hover{
	background-color: #D5161E;
}
.go:active{
	border: solid 2px #fff;
	background-color: #F46369;
}
.text_des{
	  font-size: 10px;
}
</style>