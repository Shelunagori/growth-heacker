<?php
$webroot_path=$this->requestAction(array('controller' => 'Gh', 'action' => 'webroot_path'));
foreach($result_notification as $data){
$id=$data["notification"]["id"];
$title=$data["notification"]["title"];
$description=$data["notification"]["description"];
$button_text=$data["notification"]["button_text"];
$button_url=$data["notification"]["button_url"];
$width=$data["notification"]["width"];
$target=$data["notification"]["target"];
$alignment=$data["notification"]["alignment"];
}
?>
<div class='alert alert-block alert-success fade in success_report' style="display:none;"></div>
<div style="background-color:#fff;padding:5px;width:96%;margin:auto;" class="form_div">
	<h4 style="color: #46b8da;font-weight: 500;border-bottom: solid 1px #DAD9D9;padding-bottom: 10px;"><i class="icon-bullhorn"></i> Edit Notification</h4>
<!--FORM CONTENT START-->
<div id="output"></div>
<form method="post">
<h4 class="block">Basic Details</h4>


<div class="row-fluid">
	<div class="span6">
	
		<div class="control-group">
			<label class="control-label">Title</label>
			<div class="controls">
				<input type="text" class="span9 m-wrap" name="title" value="<?php echo $title; ?>">
				<label report="title" class="remove_report"></label>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label">Description</label>
			<div class="controls">
				<textarea class="span12  m-wrap" rows="6" name="description"><?php echo $description; ?></textarea>
				<label report="description" class="remove_report"></label>
			</div>
		</div>
		
	</div>
	<div class="span6">
		
		<div class="control-group">
			<label class="control-label">Button Text (Call-to-action Text)</label>
			<div class="controls">
				<input type="text" class="span9 m-wrap" name="button_text" value="<?php echo $button_text; ?>">
				<label report="button_text" class="remove_report"></label>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label">Button URL (Call-to-action URL)</label>
			<div class="controls">
				<input type="text" class="span9 m-wrap" name="button_url" value="<?php echo $button_url; ?>">
				<label report="button_url" class="remove_report"></label>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label">Button Target (Call-to-action Target)</label>
			<div class="controls">
				<label class="radio line">
					<div class="radio" id="uniform-undefined"><span>
					<input type="radio" name="target" value='1' style="opacity: 0;" <?php if($target==1){ echo 'checked=""';} ?>>
					</span></div>
					Open link in same window
				</label>
				<label class="radio line">
					<div class="radio" id="uniform-undefined"><span class="checked">
					<input type="radio" name="target" value='2'  style="opacity: 0;" <?php if($target==2){ echo 'checked=""';} ?>>
					</span></div>
					Open link in new window (tab)
				</label>  
			</div>
			<label report="target" class="remove_report"></label>
		</div>
	</div>
</div>


<h4 class="block">Layout Specific Options</h4>
<div class="row-fluid">
	<div class="span6">
		
		<div class="control-group">
			<label class="control-label">Box alignment</label>
			<div class="controls">
				<label class="radio line">
					<div class="radio" id="uniform-undefined"><span class="checked">
					<input type="radio" checked="" name="alignment" value='bottom_right' style="opacity: 0;"  <?php if($alignment=="bottom_right"){ echo 'checked=""';} ?>>
					</span></div>
					Bottom Right
				</label>
				<label class="radio line">
					<div class="radio" id="uniform-undefined"><span>
					<input type="radio" name="alignment" value='bottom_left' style="opacity: 0;" <?php if($alignment=="bottom_left"){ echo 'checked=""';} ?>>
					</span></div>
					Bottom Left
				</label>
				<label class="radio line">
					<div class="radio" id="uniform-undefined"><span>
					<input type="radio" name="alignment" value='top_left' style="opacity: 0;" <?php if($alignment=="top_left"){ echo 'checked=""';} ?>>
					</span></div>
					Top Left
				</label>
				<label class="radio line">
					<div class="radio" id="uniform-undefined"><span>
					<input type="radio" name="alignment" value='top_right'  style="opacity: 0;" <?php if($alignment=="top_right"){ echo 'checked=""';} ?>>
					</span></div>
					Top Right
				</label>
			</div>
			<label report="alignment" class="remove_report"></label>
		</div>
	</div>
	<div class="span6">
	
		<div class="control-group">
			<label class="control-label">Width (in pixels)</label>
			<div class="controls">
				<input type="text" class="span9 m-wrap" name="width" value="<?php echo $width; ?>">
				<label report="width" class="remove_report"></label>
			</div>
		</div>
		
	</div>
</div>
	
<h4 class="block">Choose Theme</h4>
<div class="row-fluid">
	<div class="span6">
		<div class="control-group">
			<label class="control-label">Color</label>
			<div class="controls">
				<select class="span6 m-wrap" data-placeholder="Choose a Category" tabindex="1" name="theme">
					<option value="simple" <?php if($alignment=="simple"){ echo 'selected';} ?>>simple</option>
					<option value="simple1" <?php if($alignment=="simple1"){ echo 'selected';} ?>>simple1</option>
				</select>
				<label report="theme" class="remove_report"></label>
			</div>
		</div>
	</div>
	<div class="span6"></div>
</div>

<hr>
<button type="submit" class="btn form_post" style="background-color: #46b8da;color:#fff;" name="publish" submit_type="publish">Save Notification & Continue</button>
<div style="display:none;" id="wait"><img src="<?php echo $webroot_path; ?>as/fb_loading.gif"> Please Wait...</div>
</form>
<!--FORM CONTENT END-->
</div>

<script>
$(document).ready(function() {
	$('form').submit( function(ev){
		ev.preventDefault();
		var m_data = new FormData();
		m_data.append( 'id','<?php echo $id; ?>');
		m_data.append( 'title', $('input[name=title]').val());
		m_data.append( 'description', $('textarea[name=description]').val());
		m_data.append( 'button_text', $('input[name=button_text]').val());
		m_data.append( 'button_url', $('input[name=button_url]').val());
		m_data.append( 'target', $('input:radio[name=target]:checked').val());
		m_data.append( 'alignment', $('input:radio[name=alignment]:checked').val());
		m_data.append( 'width', $('input[name=width]').val());
		m_data.append( 'theme', $('select[name=theme]').val());
		
		$(".form_post").addClass("disabled");
		$("#wait").show();
		$.ajax({
		url: '<?php echo Router::url(array('controller' => 'Gh', 'action' =>'submit_notification_edit'), true); ?>',
		data: m_data,
		processData: false,
		contentType: false,
		type: 'POST',
		dataType:'json',
		}).done(function(response) {
		if(response.report_type=='error'){
				
				$(".remove_report").html('');
					jQuery.each(response.report, function(i, val) {
					$("label[report="+val.label+"]").html('<span style="color:red;">'+val.text+'</span>');
				});
			}
			if(response.report_type=='success'){
				$("#loading").show();
				pageurl = '<?php echo $webroot_path; ?>Gh/notification_targeting_rule/'+response.report;
				$.ajax({
				url: pageurl,
				}).done(function(response) {
				$(".page-content").html(response);
				$("#loading").hide();
				$("html, body").animate({
				scrollTop:0
				},"slow");
				});

				window.history.pushState({path:pageurl},'',pageurl);
			}
			
		$("html, body").animate({
		scrollTop:0
		},"slow");
		$(".form_post").removeClass("disabled");
		$("#wait").hide();
		});
	});
});
</script>
