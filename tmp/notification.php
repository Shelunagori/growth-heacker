<?php
$key=@$_GET["key"];
$host=@$_GET["host"];
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysql_connect($servername, $username, $password);
mysql_select_db( 'growth_hacker' );
$sel=mysql_query("SELECT * FROM `domains` where `id`='$key'  AND `name`='$host'");
$num=@mysql_num_rows($sel);
if($num==1){
	while($result=mysql_fetch_array($sel)){
		$id=$result['id'];
		$sel_ntfcn=mysql_query("SELECT * FROM `notifications` where `user_id`='$id'");
		$num_ntfcn=mysql_num_rows($sel_ntfcn);
		if($num_ntfcn>0){
			while($result_ntfcn=mysql_fetch_array($sel_ntfcn)){
				$id=$result_ntfcn['id'];
				?>
				<div id="main_notification_div">
				<button type="button" id="close_notification_div">X</button>
				<iframe src="http://localhost/growth-heacker/Dashboard/Gh/notification_view/<?php echo $id; ?>" style=" height: 100%; width: 100%;  padding: 5px;" frameBorder="0"></iframe>
				</div>
				<?php
			}
		}
		?>
		
		<?php
	}
}
?>

<style>
#close_notification_div{
position: absolute; right: 0; top: 0;
margin-top: -12px;
border: 1px solid;
border-radius: 11px !important;
margin-right: -4px;
cursor: pointer;
}
#main_notification_div{
padding: 0px; border: 1px solid #EFEFEF;position: fixed; z-index: 16000002; width: 400px; height: 200px;   bottom: 0;  right: 5px;  margin-top: -100px;  margin-left: -200px;background: rgb(218, 215, 215);
}
</style>