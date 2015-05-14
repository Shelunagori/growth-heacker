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
$theme=$result_notification['theme'];
$leave_intent=$result_notification['leave_intent'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="http://localhost/growth-heacker_css/style_gh.css" rel="stylesheet" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<?php if($leave_intent==1){ ?>
<script type="text/javascript">
$(document).ready(function(){
	$(parent.document).find('body').mousemove(function( event ) {
	  var pageCoords = "( " + event.pageX + ", " + event.pageY + " )";
	  var clientCoords = "( " + event.clientX + ", " + event.clientY + " )";
	  if(event.clientY<30){
			$(parent.document).find('#main<?php echo $q; ?>').show();
	  }
	});
});
</script>
<?php } ?>
<script type="text/javascript">
$(document).ready(function(){
    $(".container").fadeIn(500);
	var h=$('.container').height();
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
	<div class="<?php echo $alignment; ?> container <?php echo $theme; ?>">
	<a href="#" class="close" id="close_button<?php echo $q; ?>">X</a>
	<span id="title"><?php echo $title; ?></span><br/>
	<span id="description"><?php echo $description; ?></span><br/>
	<input type="submit" />
	</div>
</body>
</html>