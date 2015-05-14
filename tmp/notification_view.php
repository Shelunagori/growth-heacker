<?php
$q=@$_GET["q"];
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysql_connect($servername, $username, $password);
mysql_select_db( 'growth_hacker' );
$sel_notification=mysql_query("SELECT * FROM `notifications` where `id`='$q'");
while($result_notification=mysql_fetch_array($sel_notification)){
$notification_id=$result_notification['id'];
$title=$result_notification['title'];
$description=$result_notification['description'];
$button_text=$result_notification['button_text'];
$button_url=$result_notification['button_url'];
$button_text=$result_notification['target'];
$width=$result_notification['width'];
$alignment=$result_notification['alignment'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="http://localhost/growth-heacker_css/style_gh.css" rel="stylesheet" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $(".simple_blue_").fadeIn(500);
	var h=$('.simple_blue_').height();
	h=h+40;
	$(parent.document).find('.iframe_notification<?php echo $q; ?>').height(h);
	$(parent.document).find('.iframe_notification<?php echo $q; ?>').width(<?php echo $width; ?>);
	$(document).on('click', "#close_button<?php echo $q; ?>", function () {
		$(parent.document).find('#main<?php echo $q; ?>').remove();
		
	});
});
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Growth-Hacker</title>
</head>

<body style="margin:20px 7px 0px 0px;">
	<div id="simple_blue_<?php echo $alignment; ?>" class="simple_blue">
	<a href="#" class="close" id="close_button<?php echo $q; ?>">X</a>
	<span id="title"><?php echo $title; ?></span><br/>
	<span id="description"><?php echo $description; ?></span><br/>
	<input type="submit" />
	</div>
</body>
</html>
