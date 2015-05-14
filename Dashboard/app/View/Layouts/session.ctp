<!DOCTYPE html>
<html lang="en">
<head>
<title>Growth-Heacker</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<!-- Include external files and scripts here (See HTML helper for more info.) -->
<?php
echo $this->fetch('meta');
$webroot_path=$this->requestAction(array('controller' => 'Gh', 'action' => 'webroot_path'));
?>

<link href="/growth-heacker/Dashboard//assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/growth-heacker/Dashboard//assets/css/metro.css" rel="stylesheet" />
	<link href="/growth-heacker/Dashboard//assets/bootstrap/css/bootstrap-responsive.min.1.css" rel="stylesheet" />
	<link href="/growth-heacker/Dashboard//assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="/growth-heacker/Dashboard//assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="/growth-heacker/Dashboard//assets/css/style.1.css" rel="stylesheet" />
	<link href="/growth-heacker/Dashboard//assets/css/style_responsive.css" rel="stylesheet" />
	<link href="/growth-heacker/Dashboard//assets/css/style_default.1.css" rel="stylesheet" id="style_color" />
	<link rel="stylesheet" type="text/css" href="/growth-heacker/Dashboard//assets/uniform/css/uniform.default.css" />
	    <link href="/growth-heacker/Dashboard//assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
     <link rel="stylesheet" type="text/css" href="/growth-heacker/Dashboard//assets/gritter/css/jquery.gritter.css" />
   <link rel="stylesheet" type="text/css" href="/growth-heacker/Dashboard//assets/chosen-bootstrap/chosen/chosen.css" />
   <link rel="stylesheet" type="text/css" href="/growth-heacker/Dashboard//assets/jquery-tags-input/jquery.tagsinput.css" />
   <link rel="stylesheet" type="text/css" href="/growth-heacker/Dashboard//assets/clockface/css/clockface.css" />
   <link rel="stylesheet" type="text/css" href="/growth-heacker/Dashboard//assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
   <link rel="stylesheet" type="text/css" href="/growth-heacker/Dashboard//assets/bootstrap-datepicker/css/datepicker.css" />
   <link rel="stylesheet" type="text/css" href="/growth-heacker/Dashboard//assets/bootstrap-timepicker/compiled/timepicker.css" />
   <link rel="stylesheet" type="text/css" href="/growth-heacker/Dashboard//assets/bootstrap-colorpicker/css/colorpicker.css" />
   <link rel="stylesheet" href="/growth-heacker/Dashboard//assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
   <link rel="stylesheet" href="/growth-heacker/Dashboard//assets/data-tables/DT_bootstrap.css" />
   <link rel="stylesheet" type="text/css" href="/growth-heacker/Dashboard//assets/bootstrap-daterangepicker/daterangepicker.css" />
   <link href="/growth-heacker/Dashboard//assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
	<link href="/growth-heacker/Dashboard//assets/jqvmap/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="favicon.ico" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/growth-heacker/Dashboard//as/bootstrap.min.css" rel="stylesheet">
<link href="/growth-heacker/Dashboard//as/animate.css" rel="stylesheet" />
<link href="/growth-heacker/Dashboard//as/demo-styles.css" rel="stylesheet" />
<!-----js--------------->
	<script src="/growth-heacker/Dashboard//assets/js/jquery-1.8.3.min.js"></script>			
	<script src="/growth-heacker/Dashboard//assets/breakpoints/breakpoints.js"></script>			
	<script src="/growth-heacker/Dashboard//assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>	
	<script src="/growth-heacker/Dashboard//assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="/growth-heacker/Dashboard//assets/js/jquery.blockui.js"></script>
	<script src="/growth-heacker/Dashboard//assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>	
	<script type="text/javascript" src="/growth-heacker/Dashboard//assets/uniform/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="/growth-heacker/Dashboard//assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
	<script src="/growth-heacker/Dashboard//assets/flot/jquery.flot.js"></script>
	<script src="/growth-heacker/Dashboard//assets/flot/jquery.flot.resize.js"></script>
	<script src="/growth-heacker/Dashboard//assets/flot/jquery.flot.pie.js"></script>
	<script src="/growth-heacker/Dashboard//assets/flot/jquery.flot.stack.js"></script>
	<script src="/growth-heacker/Dashboard//assets/flot/jquery.flot.crosshair.js"></script>
	   <script type="text/javascript" src="/growth-heacker/Dashboard//assets/ckeditor/ckeditor.js"></script>  
   <script type="text/javascript" src="/growth-heacker/Dashboard//assets/bootstrap/js/bootstrap-fileupload.js"></script>
     <script type="text/javascript" src="/growth-heacker/Dashboard//assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
   <script type="text/javascript" src="/growth-heacker/Dashboard//assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
   <script type="text/javascript" src="/growth-heacker/Dashboard//assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
   <script type="text/javascript" src="/growth-heacker/Dashboard//assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
   <script type="text/javascript" src="/growth-heacker/Dashboard//assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript" src="/growth-heacker/Dashboard//assets/clockface/js/clockface.js"></script>
   <script type="text/javascript" src="/growth-heacker/Dashboard//assets/bootstrap-daterangepicker/date.js"></script>
   <script type="text/javascript" src="/growth-heacker/Dashboard//assets/bootstrap-daterangepicker/daterangepicker.js"></script> 
   <script type="text/javascript" src="/growth-heacker/Dashboard//assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
   <script type="text/javascript" src="/growth-heacker/Dashboard//assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <script src="/growth-heacker/Dashboard//assets/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
   	<script src="/growth-heacker/Dashboard//assets/fancybox/source/jquery.fancybox.pack.js"></script>
	<script src="/growth-heacker/Dashboard//assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="/growth-heacker/Dashboard//assets/js/jquery.cookie.js"></script>
	<script src="/growth-heacker/Dashboard//assets/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>	
	<script src="/growth-heacker/Dashboard//assets/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
	<script src="/growth-heacker/Dashboard//assets/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
	<script src="/growth-heacker/Dashboard//assets/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
	<script src="/growth-heacker/Dashboard//assets/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
	<script src="/growth-heacker/Dashboard//assets/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
	<script src="/growth-heacker/Dashboard//assets/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>	
		<script type="text/javascript" src="/growth-heacker/Dashboard//assets/gritter/js/jquery.gritter.js"></script>
	<script type="text/javascript" src="/growth-heacker/Dashboard//assets/js/jquery.pulsate.min.js"></script>	
	  <script src="/growth-heacker/Dashboard//assets/uniform/jquery.uniform.min.js"></script> 
 	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="/growth-heacker/Dashboard//assets/js/gmaps.js"></script>
	<script src="/growth-heacker/Dashboard//assets/js/demo.gmaps.js"></script>
		<script type="text/javascript" src="/growth-heacker/Dashboard//assets/data-tables/jquery.dataTables.js"></script>
	<script type="text/javascript" src="/growth-heacker/Dashboard//assets/data-tables/DT_bootstrap.js"></script>
		<script src="/growth-heacker/Dashboard//assets/js/app.1.js"></script>		
	<script>
		jQuery(document).ready(function() {			
			// initiate layout and plugins
			App.setPage('calendar');
			App.init();
		});
	</script>
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-37564768-1']);
	  _gaq.push(['_setDomainName', 'keenthemes.com']);
	  _gaq.push(['_setAllowLinker', true]);
	  _gaq.push(['_trackPageview']);
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
<script src="/growth-heacker/Dashboard//as/js/jquery.validate.min.js"></script>

<script id="_webengage_script_tag" type="text/javascript">
  var _weq = _weq || {};
  _weq['webengage.licenseCode'] = '58adca51';
  _weq['webengage.widgetVersion'] = "4.0";
  
  (function(d){
    var _we = d.createElement('script');
    _we.type = 'text/javascript';
    _we.async = true;
    _we.src = (d.location.protocol == 'https:' ? "https://ssl.widgets.webengage.com" : "http://cdn.widgets.webengage.com") + "/js/widget/webengage-min-v-4.0.js";
    var _sNode = d.getElementById('_webengage_script_tag');
    _sNode.parentNode.insertBefore(_we, _sNode);
  })(document);
</script>
<script>

$(document).ready(function() {
	$("a[rel='tab']").live('click',function(e){
		e.preventDefault();
		$("#loading").show();
		pageurl = $(this).attr('href');
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
		
	});
	
	
	$("a[role='button']").live('click',function(e){
		e.preventDefault();
	});
	
	$('a[role="button"]').live('click',function(e){
		e.preventDefault();
	});
	window.onpopstate = function(s) {
		pageurl = location.pathname;
		$('.page-content').load(pageurl+'?rel=tab');
		
	};
});
</script>
<!------------JS-------------------->
</head>
<body class="fixed-top">
<!-- BEGIN HEADER -->
<style>
#loading{
	background-color: rgba(0, 0, 0, 0.21);
	height: 100%;
	width: 100%;
	position: fixed;
	z-index: 1;
	margin-top: 0px;
	top: 0px;
	display:none;
}
#loading-center{
	width: 100%;
	height: 100%;
	position: relative;
}
#loading-center-absolute {
	position: absolute;
	left: 50%;
	top: 50%;
	height: 150px;
	width: 150px;
	margin-top: -75px;
	margin-left: -75px;
}
.object{
	width: 20px;
	height: 20px;
	background-color: #008DD2;
	float: left;
	margin-right: 20px;
	margin-top: 65px;
	-moz-border-radius: 50% 50% 50% 50% !important;
	-webkit-border-radius: 50% 50% 50% 50% !important;
	border-radius: 50% 50% 50% 50% !important;
}

#object_one {	
	-webkit-animation: object_one 1.5s infinite;
	animation: object_one 1.5s infinite;
	}
#object_two {
	-webkit-animation: object_two 1.5s infinite;
	animation: object_two 1.5s infinite;
	-webkit-animation-delay: 0.25s; 
    animation-delay: 0.25s;
	}
#object_three {
    -webkit-animation: object_three 1.5s infinite;
	animation: object_three 1.5s infinite;
	-webkit-animation-delay: 0.5s;
    animation-delay: 0.5s;
	
	}
@-webkit-keyframes object_one {
75% { -webkit-transform: scale(0); }
}

@keyframes object_one {

  75% { 
    transform: scale(0);
    -webkit-transform: scale(0);
  }

}
@-webkit-keyframes object_two {
  75% { -webkit-transform: scale(0); }
}

@keyframes object_two {
  75% { 
    transform: scale(0);
    -webkit-transform:  scale(0);
  }

}

@-webkit-keyframes object_three {
  75% { -webkit-transform: scale(0); }
}

@keyframes object_three {

  75% { 
    transform: scale(0);
    -webkit-transform: scale(0);
  }
  
}
</style>
<div id="loading">
<div id="loading-center">
<div id="loading-center-absolute">
<div class="object" id="object_one"></div>
<div class="object" id="object_two"></div>
<div class="object" id="object_three"></div>
</div>
</div>
</div>
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner hide_at_print">
			<div class="container-fluid" style="padding-right: 0px;">
				<!-- BEGIN LOGO -->
				<a class="brand" href="/growth-heacker/Dashboard/Gh/Dashboard">
				<span>Growth-Hacker</span>
				</a>
				
				<?php
				$user_id=$this->Session->read('user_id');
				$domain_id=$this->Session->read('domain_id');
				
				$domain_name=$this->requestAction(array('controller' => 'Gh', 'action' => 'get_domain_names'), array('pass' => array($domain_id)));
				
				$get_domain_names_list=$this->requestAction(array('controller' => 'Gh', 'action' => 'get_domain_names_list'));
				?>
				<div class="btn-group">
					<a class="btn" href="#"  data-toggle="dropdown" style="color: #DEDEDE;background-color: #1F1F1F;font-size: 14px;font-weight: bold;"><?php echo $domain_name; ?></a>
					<ul class="dropdown-menu">
						<li><a href="#" role="button" style="background-color: #eee;font-weight: 100;font-size: 13px;">Change Domain</a></li>
						<?php foreach($get_domain_names_list as $data){ ?>
						<li><a href="sadas"><?php echo $data["domain"]["domain_name"]; ?></a></li>
						<?php } ?>
					</ul>
				</div>
				
				<?php
				$get_user_info=$this->requestAction(array('controller' => 'Gh', 'action' => 'get_user_info'), array('pass' => array($user_id)));
				?>		
				<ul class="nav pull-right">
				<li class="dropdown user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<span class="username">Hello  <?php echo $get_user_info[0]["user"]["name"]; ?></span>
					<i class="icon-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#"><i class="icon-user"></i> My Profile</a></li>
						<li class="divider"></li>
						<li><a href="<?php echo $webroot_path; ?>Gh/logout"><i class="icon-key"></i> Log Out</a></li>
					</ul>
				</li>
				</ul>
				<!-- END TOP NAVIGATION MENU -->	
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->

	
	
	
<!-- BEGIN CONTAINER -->	
	<div class="page-container row-fluid">
		<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar nav-collapse collapse">
			<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
			<div class="slide hide">
				<i class="icon-angle-left"></i>
			</div>
			
			<div class="clearfix"></div>
			<!-- END RESPONSIVE QUICK SEARCH FORM -->
			<!-- BEGIN SIDEBAR MENU -->
			<ul>
				<li>
					<a href="<?php echo $webroot_path; ?>Gh/Dashboard" rel='tab'>
					<i class="icon-home"></i> Dashboard
					</a>					
				</li>
				<li class="has-sub">
					<a href="javascript:;" class="">
						<i class="icon-bullhorn"></i> Notifications
						<span class="arrow"></span>
					</a>
					<ul class="sub">
						<li><a class="" href="<?php echo $webroot_path; ?>Gh/create_notification"  rel='tab'>Create</a></li>
						<li><a class="" href="<?php echo $webroot_path; ?>Gh/draft"  rel='tab'>Draft</a></li>
						<li><a class="" href="ui_tabs_accordions.html">Tabs &amp; Accordions</a></li>
						<li><a class="" href="ui_typography.html">Typography</a></li>
					</ul>
				</li>
				<li class="has-sub">
					<a href="javascript:;" class="">
						<i class="icon-bullhorn"></i> Feedback
						<span class="arrow"></span>
					</a>
					<ul class="sub">
						<li><a class="" href="<?php echo $webroot_path; ?>F/settings"  rel='tab'>Create</a></li>
					</ul>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div class="page-content" style="padding:5px;background: #f1f3fa;">
			<!-- BEGIN PAGE CONTAINER-->
			<div class="" ><!--container-fluid-->
				
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div  id="content">
						
						
						<!-- Here's where I want my views to be displayed-->
						<?php echo $this->fetch('content'); ?>
						
						
					</div>
				</div>
				<!-- END PAGE CONTENT-->
			</div>
			<!-- END PAGE CONTAINER-->	
		</div>
		<!-- END PAGE -->	 	
	</div>
	<!-- END CONTAINER -->

	
	
	
	<!-- BEGIN FOOTER -->
	<div class="footer hide_at_print">
		Growth-Heacker
		<div class="span pull-right">
			<span class="go-top"><i class="icon-angle-up"></i></span>
		</div>
	</div>
	<!-- END FOOTER -->


</body>
</html>