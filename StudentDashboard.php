<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>WisCourse - Dashboard</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

<style>
	.now{
		width:90%;
	}
</style>


</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>WisCourse</span></a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Edit</a></li>
							<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="StudentDashboard.html"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Student Dashboard</a></li>
			<li><a href="Reminder.html"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Reminder</a></li>
			
			<li><a href="CourseLecturers.html"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Course Lecturers</a></li>
			<li><a href="Inbox.html"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Inbox &nbsp&nbsp&nbsp&nbsp<span class="glyphicon glyphicon-bell"></span></a></li>
			<li><a href="Sent.html"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Sent</a></li>
			
			<li role="presentation" class="divider"></li>
			<li><a href="login.html"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Login Page</a></li>
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="Index.html"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
		<!--/.START main-->
      <div class="container">
      <div class="col-sm-3">
      <button type="button" class="btn btn-default" style="font-size : 50px;" >
	  <small style="font-size:20px;">Registered Courses</small><br >
      <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
      </button>
       </div>

       <div class="col-sm-3">
      <a href="compose_email.php"><button type="button"  class="btn btn-default" style="font-size : 50px;" >
	   <small style="font-size:20px;">Compose Email</small><br >
        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
      </button></a>
      </div>
	  
	     <div class="col-sm-3">
      ,<a href="file://///wiscourse/upload"><button type="button"   class="btn btn-default" style="font-size : 50px;" >
	   <small style="font-size:20px;">Downloads</small><br >
        <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
      </button></a>
     </div>

        

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
