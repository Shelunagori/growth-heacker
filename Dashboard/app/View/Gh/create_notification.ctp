<div class='alert alert-block alert-success fade in success_report' style="display:none;"></div>
<div style="background-color:#fff;padding:5px;width:96%;margin:auto;" class="form_div">
	<h4 style="color: #46b8da;font-weight: 500;border-bottom: solid 1px #DAD9D9;padding-bottom: 10px;"><i class="icon-bullhorn"></i> Create Notification</h4>
<!--FORM CONTENT START-->
<div id="output"></div>
<form method="post">
<h4 class="block">Basic Details</h4>


<div class="row-fluid">
	<div class="span6">
	
		<div class="control-group">
			<label class="control-label">Title</label>
			<div class="controls">
				<input type="text" class="span9 m-wrap" name="title">
				<label report="title" class="remove_report"></label>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label">Description</label>
			<div class="controls">
				<textarea class="span12  m-wrap" rows="6" name="description"></textarea>
				<label report="description" class="remove_report"></label>
			</div>
		</div>
		
	</div>
	<div class="span6">
		
		<div class="control-group">
			<label class="control-label">Button Text (Call-to-action Text)</label>
			<div class="controls">
				<input type="text" class="span9 m-wrap" name="button_text">
				<label report="button_text" class="remove_report"></label>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label">Button URL (Call-to-action URL)</label>
			<div class="controls">
				<input type="text" class="span9 m-wrap" name="button_url">
				<label report="button_url" class="remove_report"></label>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label">Button Target (Call-to-action Target)</label>
			<div class="controls">
				<label class="radio line">
					<div class="radio" id="uniform-undefined"><span><input type="radio" name="target" value='1' style="opacity: 0;"></span></div>
					Open link in same window
				</label>
				<label class="radio line">
					<div class="radio" id="uniform-undefined"><span class="checked"><input type="radio" name="target" value='2' checked="" style="opacity: 0;"></span></div>
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
					<div class="radio" id="uniform-undefined"><span class="checked"><input type="radio" checked="" name="alignment" value='bottom_right' style="opacity: 0;"></span></div>
					Bottom Right
				</label>
				<label class="radio line">
					<div class="radio" id="uniform-undefined"><span><input type="radio" name="alignment" value='bottom_left' style="opacity: 0;"></span></div>
					Bottom Left
				</label>
				<label class="radio line">
					<div class="radio" id="uniform-undefined"><span><input type="radio" name="alignment" value='top_left' style="opacity: 0;"></span></div>
					Top Left
				</label>
				<label class="radio line">
					<div class="radio" id="uniform-undefined"><span><input type="radio" name="alignment" value='top_right'  style="opacity: 0;"></span></div>
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
				<input type="text" class="span9 m-wrap" name="width">
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
					<option value="simple">simple</option>
					<option value="simple1">simple1</option>
				</select>
				<label report="theme" class="remove_report"></label>
			</div>
		</div>
	</div>
	<div class="span6"></div>
</div>

<hr>
<button type="submit" class="btn form_post" style="background-color: #46b8da;color:#fff;" name="publish" submit_type="publish">Save Notification & Continue</button>
<div style="display:none;" id="wait"><img src="/Housingmatters/as/fb_loading.gif"> Please Wait...</div>
</form>
<!--FORM CONTENT END-->
</div>

<script>
$(document).ready(function() {
	$('form').submit( function(ev){
		ev.preventDefault();
		var m_data = new FormData();
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
		url: "submit_notification",
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
				pageurl = "notification_targeting_rule/"+response.report
				$.ajax({
				url: pageurl,
				}).done(function(response) {
					$(".page-content").html(response);
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
<script>
$(document).ready(function(){
	 $(".preview_button").live('click',function(){
		$("#preview").hide();
		$("#preview_content").slideDown('fast');
		//$("#show_box").html('');
		
		var title=$('input[name=title]').val();
		var description=$('textarea[name=description]').val();
		var button_text=$('input[name=button_text]').val();
		var alignment=$('input:radio[name=alignment]:checked').val();
		var width=$('input[name=width]').val();
		
		
		
	 });
	 $(".preview_close").live('click',function(){
		$("#preview_content").slideUp('fast');
		$("#preview").show();
	 });
});
</script>