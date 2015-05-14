<!-- BEGIN LOGO -->
  <div class="logo">
	<h3 style="color:white;">Growth-Hacker</h3>
  </div>
  <!-- END LOGO -->
  <!-- BEGIN LOGIN -->
  <div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form id="contact-form" method="post" class="form-vertical login-form"  />
    <fieldset>
      <h3 class="form-title">Growth-Hacker Sign up</h3>
	<div class="success_report" style="display:none;">
		<div class="alert alert-success">
			<strong>congratulations!</strong> You have been successfully registered.<br/>
			Redirecting to Dashboard.....
		</div>
	</div>
	  <div class="output"></div>
      <div class="control-group">
	  	<div class="controls">
        	<div class="input-icon left"><i class="icon-user"></i>
			<input type="text"  class="m-wrap" name="name" style="font-size:16px;" placeholder="Full Name*">	
			<label report="name" class="remove_report"></label>
             </div>
		</div>
	  </div>
	  <div class="control-group">
	  	<div class="controls">
        	<div class="input-icon left"><i class="icon-user"></i>
			<input type="text"  class="m-wrap" name="email" style="font-size:16px;" placeholder="Email ID*">
			<label report="email" class="remove_report"></label>
             </div>
		</div>
	  </div>
       <div class="control-group">
	  	<div class="controls">
        	<div class="input-icon left"><i class="icon-lock"></i>
			<input type="password"   class="m-wrap" placeholder="Set New Password*" style="font-size:16px;" name="password" >
			<label report="password" class="remove_report"></label>
             </div>
		</div>
	  </div>
	<div class="control-group">
		<div class="controls">
			<div class="input-icon left"><i class="icon-user"></i>
			<input type="text"  class="m-wrap" name="domain" style="font-size:16px;" placeholder="Domain Name*">
			<label report="domain" class="remove_report"></label>
			 </div>
		</div>
	</div>	  
      <div class="form-actions">
			<button type="submit" name="login" class="btn blue  pull-right form_post" style="font-size:16px; width:45%">Sign-Up  <i class="icon-thumbs-up m-icon-white"></i></button>
			<div style="display:none;" id="wait"><img src="/Housingmatters/as/fb_loading.gif"> Please Wait...</div>
      </div>
      </fieldset>
    </form>
    <!-- END LOGIN FORM -->        
 </div>
  <!-- END LOGIN -->
  <!-- BEGIN COPYRIGHT -->
  <div class="copyright">
    Growth-Hacker
  </div>
  <!-- END COPYRIGHT -->
  
<script>
$(document).ready(function() {
	$('form').submit( function(ev){
		ev.preventDefault();
		var m_data = new FormData();
		m_data.append( 'name', $('input[name=name]').val());
		m_data.append( 'email', $('input[name=email]').val());
		m_data.append( 'password', $('input[name=password]').val());
		m_data.append( 'domain', $('input[name=domain]').val());
		
		$(".form_post").addClass("disabled");
		$("#wait").show();
		$.ajax({
		url: "submit_signup",
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
				$(".success_report").show();
				$(".form_post").remove();
				window.location.href = 'Dashboard';
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