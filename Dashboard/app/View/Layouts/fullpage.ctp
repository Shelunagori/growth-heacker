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


</head>
<body style="margin:0px 0px 0px 0px;">
	<?php echo $this->fetch('content'); ?>	
</body>
</html>