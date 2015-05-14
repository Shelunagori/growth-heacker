<?php
$webroot_path=$this->requestAction(array('controller' => 'Gh', 'action' => 'webroot_path'));
$count_row=sizeof($result_notification_rule);
foreach($result_notification_rule as $data){
$string=$data["notification_rule"]["string"];
$type=$data["notification_rule"]["type"];
}
?>
<div class='alert alert-block alert-success fade in success_report' style="display:none;"></div>
<div style="background-color:#fff;padding:5px;width:96%;margin:auto;" class="form_div">
	<h4 style="color: #46b8da;font-weight: 500;border-bottom: solid 1px #DAD9D9;padding-bottom: 10px;"><i class="icon-globe"></i> Set Targeting Rule</h4>
<!--FORM CONTENT START-->
<div id="output"></div>
<form method="post">
<h4 class="block">Page URL(s)</h4>

<div class="row-fluid">
	<div class="span12">
	
		<div id="group" <?php if($count_row<1){ echo 'style="display:none;"'; } ?> >
			<select class="span5 m-wrap" data-placeholder="Choose a Category" tabindex="1" id="group_url">
				<option value="1">ANY rule can satisfy</option>
				<option value="2">ALL rule must satisfy</option>
			</select>
		</div>
		<div  id="url_main">
		<?php if($count_row>0){
			$i=0;
			foreach($result_notification_rule as $data){
			$i++;
			$string=$data["notification_rule"]["string"];
			$type=$data["notification_rule"]["type"];
			?>
			<div class="controls controls-row content_<?php echo $i; ?>">
				<select class="span3 m-wrap" data-placeholder="Choose a Category" tabindex="1" name="theme">
					<option value="1" <?php if($type==1){ echo 'selected';} ?> >equals to</option>
					<option value="2" <?php if($type==2){ echo 'selected';} ?> >starts with</option>
					<option value="3" <?php if($type==3){ echo 'selected';} ?> >ends with</option>
					<option value="4" <?php if($type==4){ echo 'selected';} ?> >contains</option>
					<optgroup  label="--------"></optgroup>
					<option value="5" <?php if($type==5){ echo 'selected';} ?> >not equals to</option>
					<option value="6" <?php if($type==6){ echo 'selected';} ?> >not starts with</option>
					<option value="7" <?php if($type==7){ echo 'selected';} ?> >not ends with</option>
					<option value="8" <?php if($type==8){ echo 'selected';} ?> >not contains</option>
				</select>
				<input class="span6 m-wrap" type="text" value="<?php echo $string; ?>">
				<?php if($i!=1){ ?>
				<a href="#" role="button" id='<?php echo $i; ?>' class="btn black mini delete"><i class="icon-remove-sign"></i></a>
				<?php } ?>
			</div>
		<?php } } ?>
		<?php if($count_row==0){
		?>
		<div class="controls controls-row">
			<select class="span3 m-wrap" data-placeholder="Choose a Category" tabindex="1" name="theme">
				<option value="1">equals to</option>
				<option value="2">starts with</option>
				<option value="3">ends with</option>
				<option value="4">contains</option>
				<optgroup  label="--------"></optgroup>
				<option value="5">not equals to</option>
				<option value="6">not starts with</option>
				<option value="7">not ends with</option>
				<option value="8">not contains</option>
			</select>
			<input class="span6 m-wrap" type="text">
		</div>
		<?php } ?>
			
		</div>
		<a href="#" role="button" id="add_row" class="btn black mini"><i class="icon-plus-sign"></i> Add row</a>
		<p>Url comparison will be case insensitive.</p>
	</div>
</div>


<h4 class="block">Leave intent targeting</h4>
<label class="checkbox">
<div class="checker" id="uniform-undefined"><span><input type="checkbox" value="1"name="leave_intent" style="opacity: 0;"></span></div> Enable leave intent targeting
</label>



<hr>
<button type="submit" class="btn form_post" style="background-color: #46b8da;color:#fff;" name="publish" submit_type="publish">Save rules and continue</button>
<div style="display:none;" id="wait"><img src="/Housingmatters/as/fb_loading.gif"> Please Wait...</div>
</form>
<!--FORM CONTENT END-->
</div>

<script>
$(document).ready(function(){
	 $("#add_row").bind('click',function(){
		var count = $("#url_main div").length;
		count++;
		if(count==2){
			$("#group").show();
		}
		$("#url_main").append('<div class="controls controls-row content_'+count+'"><select class="span3 m-wrap" data-placeholder="Choose a Category" tabindex="1" name="theme"><option value="1">equals to</option><option value="2">starts with</option><option value="3">ends with</option><option value="4">contains</option><optgroup  label="--------"></optgroup>		<option value="5">not equals to</option><option value="6">not starts with</option><option value="7">not ends with</option>		<option value="8">not contains</option></select><input class="span6 m-wrap" type="text"><a href="#" role="button" id='+count+' class="btn black mini delete"><i class="icon-remove-sign"></i></a></div>');
	 });
	 
	 $(".delete").live('click',function(){
		var id = $(this).attr("id");
		$('.content_'+id).remove();
		var count = $("#url_main div").length;
		if(count==1){
			$("#group").hide();
		}
	 });
});
</script>
<script>
$(document).ready(function() {
	$('form').submit( function(ev){
		ev.preventDefault();
		var count = $("#url_main div").length;
		var ar = [];
		for(var i=1;i<=count;i++){
			var s=$("#url_main div:nth-child("+i+") select").val();
			var u=$("#url_main div:nth-child("+i+") input").val();
			if(u!=""){
				ar.push([s,u]);
			}
		}
		var myJsonString = JSON.stringify(ar);
		
		var group_url=$("#group_url").val();
		var m_data = new FormData();
		m_data.append( 'url',myJsonString);
		m_data.append( 'group_url',group_url);
		m_data.append( 'leave_intent',$('input:checkbox[name=leave_intent]:checked').val());
		
		$(".form_post").addClass("disabled");
		$("#wait").show();
		
		$.ajax({
		url: "<?php echo $webroot_path; ?>Gh/update_rules/<?php echo $id; ?>",
		data: m_data,
		processData: false,
		contentType: false,
		type: 'POST',
		}).done(function(response) {
		$("#wait").html(response);
		});
		
	});
});
</script>