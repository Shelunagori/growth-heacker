<?php
$title=$result_notification[0]["notification"]["title"];
$description=$result_notification[0]["notification"]["description"];
$button_text=$result_notification[0]["notification"]["button_text"];
$button_url=$result_notification[0]["notification"]["button_url"];
$target=$result_notification[0]["notification"]["target"];
?>
<html>
<head>
<?php echo $target; ?>
</head>
<body style="margin:0;">
	<div style="width:100%;height:100%;">
	<h4><?php echo $title; ?></h4>
	<table width="98%">
	<tr>
	<td><p><?php echo $description; ?><p></td>
	<td><img src="/Housingmatters\assets\img\gallery\image1.png" style="height:80px;width:60%;" /></td>
	</tr>
	</table>
	<a href="<?php echo $button_url; ?>" style="background-color: blue;color: white;padding: 5px;text-decoration: none;"><?php echo $button_text; ?></a>
	</div>
</body>
</html>
