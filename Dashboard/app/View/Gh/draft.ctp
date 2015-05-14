<?php 
$webroot_path=$this->requestAction(array('controller' => 'Gh', 'action' => 'webroot_path'));
foreach($result_notification as $data){ 
$id=$data["notification"]["id"];
$title=$data["notification"]["title"];
?>
	<div style="border:solid 1px #ccc;margin:10px 10px 10px 10px;  background-color: #fff;">
	<div style="padding: 4px; font-size: 15px; color: rgb(81, 81, 81);  border-bottom: solid 1px #ccc;"><?php echo $title; ?></div>
	<div style="padding: 4px;"><a href="<?php echo $webroot_path; ?>Gh/edit/<?php echo $id; ?>" rel='tab' role="button">Edit</a>  |  <a href="#">Active</a></div>
	</div>
<?php }?>
