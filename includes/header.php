<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="title" content="Star Trek: The Line" />
	<meta name="description" content="" />
	<meta name="keywords" content="Star Trek, Oberth, Border Patrol" />
	<meta name="language" content="en" />
	<title> Star Trek: The Line</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/ddpowerzoomer.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($){ //fire on DOM ready
			$('#msd').addpowerzoom({
				defaultpower: 3,
				powerrange: [2,3],
				largeimage: "images/theseus.jpg",
				magnifiersize: [200,200]
			});
			$("table").delegate('td','mouseover mouseleave', function(e) {
				if (e.type == 'mouseover') {
					$(this).parent().addClass("hover");
					$("colgroup").eq($(this).index()).addClass("hover");
				} else {
					$(this).parent().removeClass("hover");
					$("colgroup").eq($(this).index()).removeClass("hover");
			  }
			});
		})
	</script>
	<link href='http://fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="/css/styles.css" type="text/css" media="all" />
</head>
<body>
	<div id="floater"></div>
	<div id="centered">
		<div class="navigation maintext">
			<div id="mainlinks">
				<ul>
					<li><a href="/">home</a></li>
					<li><a href="/ship">ship</a></li>
					<li><a href="/crew">crew</a></li>
					<li><a href="/list">list</a></li>
				</ul>
			</div>
		</div>
		<center>
			<img class="centered" src="images/the_line.png" alt="Star Trek: The Line" /><br/>
		</center>
