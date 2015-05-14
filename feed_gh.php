<?php
include("function_url.php");
$key=$_GET["key"]; 
$host_name=$_GET["host"];
$url=$_GET["url"];
$url=strtolower(remove_http($url));

$servername = "localhost";
$username = "root";
$password = "phppoets";
$conn = mysql_connect($servername, $username, $password);
mysql_select_db('growth_hacker');

//////////check authentication 
$sel=mysql_query("SELECT * FROM `domains` where `id`='$key'  AND `domain_name`='$host_name'");
$num=@mysql_num_rows($sel);
if($num>0){
	while($result_domain=mysql_fetch_array($sel)){
	$domain_id=$result_domain['id']; }
	/////////check host-name and api key
	$sel_notification=mysql_query("SELECT * FROM `notifications` where `domain_id`='$domain_id'  AND `active`='1'");
	$notification_count=@mysql_num_rows($sel_notification);
	if($notification_count>0){
		while($result_notification=mysql_fetch_array($sel_notification)){
		$notification_id=$result_notification['id'];
		$alignment=$result_notification['alignment'];
		$group_url=$result_notification['group_url'];
		$leave_intent=$result_notification['leave_intent'];
		
		/////////check Page URL
		$sel_notification_rule=mysql_query("SELECT * FROM `notification_rules` where `notification_id`='$notification_id'");
		$sel_notification_rule_count=@mysql_num_rows($sel_notification_rule);
		if($sel_notification_rule_count==0){ $visible=1; }
		if($sel_notification_rule_count>0){
			while($result_rule=mysql_fetch_array($sel_notification_rule)){
				$type=$result_rule['type'];
				$string=strtolower(remove_http($result_rule['string']));
				$info[]=check_url($string,$url,$type);
			}
			if($group_url==1){$visible=array_sum($info);}
			if($group_url==2){$visible=array_product($info);}
		}
		if($visible>=1){
		?>
		<div id="main<?php echo $notification_id; ?>" <?php if($leave_intent==1){ echo 'style="display:none;"'; } ?>>
		<iframe class="iframe_notification<?php echo $notification_id; ?> iframe_position_<?php echo $alignment; ?>" id="myIFrame" src="http://52.74.43.53/growth-heacker/notification_view.php?q=<?php echo $notification_id; ?>"  frameBorder="0">
		</iframe>
		</div>
		<?php
		}}
	}
}else{
	?>
	<div id="error_notification_div">Error! Your api key or hostname is not correct.</div>
	<style>
	#error_notification_div{
	padding: 5px; border: 1px solid red;position: fixed; z-index: 16000002; width: 400px; height: 100px;   bottom: 0;  right: 5px;  margin-top: -100px;  margin-left: -200px;background: rgba(255, 0, 0, 0.16);color:red;
	}
	</style>
	<?php
}
?>
<script>
(function(a) {var ga2 = document.createElement('script'); ga2.type = 'text/javascript'; ga2.async = true; ga2.src = 'http://52.74.43.53/growth-heacker/leave_intent.js';var s2 = document.getElementsByTagName('script')[0]; s2.parentNode.insertBefore(ga2, s2);}(window, document))
</script>
<style>
#main_notification_div{
padding: 0px; border:0;position: fixed; z-index: 16000002; width: 400px; height: 500px;   bottom: 0;  right: 5px;  margin-top: -100px;  margin-left: -200px;background:transparent;
}
#main_notification_div > #close_notification_div{
position: absolute; right: 0; top: 0;
margin-top: -12px;
border: 1px solid;
border-radius: 11px !important;
margin-right: -4px;
cursor: pointer;
padding: 2px 5px 2px 5px;
}
.iframe_position_bottom_right{
	z-index: 16776276;
	position: fixed;
	bottom: 0;
	right: 0px;
	border: none;
	overflow: hidden;
	visibility: visible;
	left: auto;
	background-color: transparent;
}
.iframe_position_bottom_left{
	z-index: 16776276;
	position: fixed;
	bottom: 0;
	left: 0px;
	border: none;
	overflow: hidden;
	visibility: visible;
	left: auto;
	background-color: transparent;
}
.iframe_position_top_left{
	z-index: 16776276;
	position: fixed;
	top: 0;
	left: 0px;
	border: none;
	overflow: hidden;
	visibility: visible;
	left: auto;
	background-color: transparent;
}
.iframe_position_top_right{
	z-index: 16776276;
	position: fixed;
	top: 0;
	right: 0px;
	border: none;
	overflow: hidden;
	visibility: visible;
	left: auto;
	background-color: transparent;
}
</style>