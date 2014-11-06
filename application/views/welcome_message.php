<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome to <?php echo $_name; ?></title>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<meta name="robots" content="index, follow">
	<meta http-equiv="Copyright" content="Afes Oktavianus">
	<meta name="author" content="Afes Oktavianus">
	<meta http-equiv="imagetoolbar" content="no">
	<meta name="language" content="Indonesia">
	<meta name="revisit-after" content="7">
	<meta name="webcrawlers" content="all">
	<meta name="rating" content="general">
	<meta name="spiders" content="all">
	<link type="text/css" rel="stylesheet" href="<?php base_url(); ?>asset/css/bootstrap.min.css" media="screen"/>	
	<script type="text/javascript" src="<?php base_url();?>asset/js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="<?php base_url();?>asset/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php base_url(); ?>asset/js/jquery.easyui.min.js"></script>

</head>
<body>

<nav class="navbar navbar-default" role="navigation"> 
	<div class="navbar-header"> 
		<a class="navbar-brand" href="#">TutorialsPoint</a> 
	</div> 
	<div id="myexample"> 
		<ul class="nav navbar-nav"> 
			<li class="active"><a href="#">iOS</a></li> 
			<li><a href="#">SVN</a></li> 
			<li class="dropdown"> <a href="#" class="dropdown-toggle">Java <b class="caret"></b></a> 
				<ul class="dropdown-menu"> 
					<li>
						<a id="action-1" href="#"> jmeter</a> 
					</li> 
					<li>
						<a href="#">EJB</a>
					</li> 
					<li>
						<a href="#">Jasper Report</a>
					</li> 
					<li class="divider"></li> 
					<li>
						<a href="#">Separated link</a>
					</li> 
					<li class="divider"></li> 
					<li><a href="#">One more separated link</a></li> 
				</ul> 
			</li> 
		</ul> 
	</div> 
</nav>
<div>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>