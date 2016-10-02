<?php

  global $summarytext;
  global $profiletext;
  global $ins1name;
  global $ins2name;
  global $ins3name;
  global $ins4name;
  global $ins5name;
  global $ins6name;
  global $class3;
  global $class2;
  global $class1;

  $summarytext = 

  "We are a highly exclusive art school servicing students of all ages through the trivalley. With some of the best teachers gathered from an international pool, we offer high end music classes and art classes We serve all ages in the San Ramon and S.F. Bay area."

  ;

  $profiletext =

  " 

  <p>
    The Angel Academy of the Arts was founded in 2008 with a staff of renowned artists, musicians, and educators. It now serves all ages in the San Ramon valley and S.F. Bay area.
  </p> 


  <p>
    The Academy offers art lessons and music lessons for K-12 as well as college students and adults. Additional services are “Art Portfolio” preparation for college, custom painting, Portraits and International Culture and Arts Exchange.
  </p> 
  

  <p>
    For the art lessons, we specialize in classical drawing, illustration and oil painting, with an emphasis on teaching fundamental techniques and concepts while encouraging self-expression. Many of our students have received awards in national and local art competitions.
  </p> 
      

  <p>
    For music lessons, we offer beginner and advanced Flute, Clarinet, Saxophone, and Pi Pa (琵琶)(Chinese music instrument).
  </p> 


  <p>
    We are proud to partner with our local schools to support and serve the community.
  </p>

  "

  ;

  $ins1name = "Lily Zhang Bob (Hi) (Founder)";

  $ins2name = "Brad Belvins (Art Teacher)";

  $ins3name = "Pang Yen Chou (Art Teacher)";

  $ins4name = "Amy D. Leung (Art Teacher)";

  $ins5name = "Olivia Chen (Art Teacher)";

  $ins6name = "Arno Chen (Art Teacher)";

  $ins7name = "David Leese (Music Teacher)";

  $ins8name = "Juan Huang (Music Teacher)";


  $class1 = "Youth Art Lessons";

  $class2 = "Music Lessons";

  $class3 = "Senior Art Lessons";

?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="content-type">
	<meta charset="utf-8">

	<title>Angel Arts Academy- Serving The Trivalley, San Ramon, Dublin, Pleasonton, and Danville</title>
	<meta content="Bootply" name="generator">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<div id="wrap">




<div class="navbar-wrapper">

	<div class="container">

		<?php

			global $pagetype;

			if ($pagetype != "Home"){

				echo '<div class="navbar navbar-default navbar-fixed-top" role="navigation">';

			}


			if ($pagetype == "Home"){

				echo '<div class="navbar navbar-default navbar-static-top" role="navigation">';

			}

		?>
	
		<div class="container">

			<div class="navbar-header">

				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

		            <span class="sr-only">Toggle navigation</span>

		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>

				</button>

				<a class="navbar-brand" rel="home" href="#" title="Youth Competitive Programming Circle"><img style="max-width:100px; margin-top: -12px;" src="../img/angelartslogo.svg"></a>

			</div>

			<div class="navbar-collapse collapse">

	      		<ul class="nav navbar-nav">


	      			<li><a href = "../index">Home</a></li>
						<li><a href = "../about">About</a></li>
						<li><a href = "../instructor">Instructors</a></li>
            <li><a href = "../artwork">Student Artwork</a></li>
            <li><a href = "../class">Classes</a></li>
						<li><a href = "../show">Art Show</a></li>




      			</ul>

			</div>

		</div>

	</div>

</div>

</div>

    	




<section class="container-fluid" id="section6" style="padding-bottom:10%;padding-top:10%;background: url('img/deathtostock_wired2.jpg') no-repeat center center fixed;">
			<h1 style="text-align:center;color:white;font-family: 'monoglyceride';margin-top:0%;margin-bottom:5%;">Three Varieties of Courses</h1>

			<div class="col-sm-10 col-sm-offset-1 row">
				<div class="col-sm-4 col-xs-12 list-group text-center" data-target="#class1" data-toggle="modal" style="height:100%;" title="Pang Yen Chou">
					<a class="list-group-item active" href="#" style="height:100%;">
					<h2 class="list-group-item-heading">Youth Art Class</h2>

					<h6>For Ages 5-9</h6>

					<h5>Instructor Cindy Zhu</h5></a><a class="list-group-item" href="#">
					<p class="list-group-item-text">Level 1 Art Exploration $35/2hr/lesson</p></a><a class="list-group-item" href="#">
					<p class="list-group-item-text">Level 2 Fundamentals $40/2hr/lesson</p></a><a class="list-group-item" href="#">
					<p class="list-group-item-text">Level 3 Intermediate $40/2hr/lesson</p></a><a class="list-group-item" href="#">
					<p class="list-group-item-text">Level 4 Advanced $50/2.5hr/lesson</p></a><a class="list-group-item" href="#"><button class="btn btn-primary btn-lg btn-block">More Information</button></a>
				</div>

				<div class="col-sm-4 col-xs-12 list-group text-center" data-target="#class2" data-toggle="modal" style="height:100%;" title="Pang Yen Chou">
					<a class="list-group-item active" href="#" style="height:100%;">
					<h2 class="list-group-item-heading">Music Lessons</h2>

					<h6>For ages K-12, college students and adults</h6>

					<h5>Instructors David Leese and Juan Huang</h5>

					<h6 class="list-group-item-text">Instruments: Recorder, Saxophone, Clarinet, Pi Pa, Flute</h6></a><a class="list-group-item" href="#">
					<p class="list-group-item-text">$40/30min./lesson(individual)</p></a><a class="list-group-item" href="#">
					<p class="list-group-item-text">$80/60min./lesson(2 students)</p></a><a class="list-group-item" href="#">
					<p class="list-group-item-text">$70/60min./lesson(individual)</p></a><a class="list-group-item" href="#"><button class="btn btn-primary btn-lg btn-block">More Information</button></a>
				</div>

				<div class="col-sm-4 col-xs-12 list-group text-center" data-target="#class3" data-toggle="modal" style="height:100%;" title="Pang Yen Chou">
					<a class="list-group-item active" href="#" style="height:100%;">
					<h2 class="list-group-item-heading">Senior Art Class</h2>

					<h6>For Ages 9-12, 12-17, and adults</h6>

					<h5>Instructor Cindy Zhu</h5></a><a class="list-group-item" href="#">
					<p class="list-group-item-text">Level 1 Art Exploration $35/2hr/lesson</p></a><a class="list-group-item" href="#">
					<p class="list-group-item-text">Level 2 Fundamentals $40/2hr/lesson</p></a><a class="list-group-item" href="#">
					<p class="list-group-item-text">Level 3 Intermediate $40/2hr/lesson</p></a><a class="list-group-item" href="#">
					<p class="list-group-item-text">Level 4 Advanced $50/2.5hr/lesson</p></a><a class="list-group-item" href="#"><button class="btn btn-primary btn-lg btn-block">More Information</button></a>
				</div>
			</div>
		</section>



		<div class="divider" id="section8"></div>

		<div class="row col-md-8 col-md-offset-1"></div>

		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<h1 style="margin-bottom:2%;">Location</h1>
			</div>

			<div id="map-canvas"></div>
			<hr>

			<div class="col-sm-1"></div>

			<div class="col-sm-5"><img src="img/classroom.jpg" style="margin-top:-1%;"></div>

			<div class="col-sm-3"></div>

			<div class="col-sm-3 pull-right">
				<address>
					Angel Academy of the Arts, Inc.<br>
					<span id="map-input">2092 Omega Road, Suite D<br>
					San Ramon, CA 94583</span><br>
					P: (510) 364-6757
				</address>
			</div>
		</div>

<Br><Br><br><br>
<style>
.brand:hover>a{background-color:rgba(255,255,255,0.05);color:#fff;text-decoration:none}.brand{width:187px;height:auto;float:left;display:block;margin-left:-20px;color:#fff;line-height:1}#under-footer{margin:0;padding:0 20px;bottom:0;padding-top:1%;min-height:46px;background:#222 url(../img/fbg.jpg);color:#b0b0b0;-webkit-box-shadow:0 0 0 5px rgba(0,0,0,.1),0 1px 1px rgba(0,0,0,.35);-moz-box-shadow:0 0 0 5px rgba(0,0,0,.1),0 1px 1px rgba(0,0,0,.35);box-shadow:0 0 0 5px rgba(0,0,0,.1),0 1px 1px rgba(0,0,0,.35);-webkit-border-radius:2px;-moz-border-radius:2px;border-radius:2px;opacity:.95}#under-footer-logo{height:46px}#under-footer-logo a{color:#e1e1e1;text-decoration:none;font-size:22px;line-height:48px;margin-left:5px}.under-footer-copyright{margin:17px 0 0}.under-footer-copyright a{color:#eee}#under-footer-back-to-top{margin:10px;z-index:999}#under-footer-back-to-top a{width:30px;height:30px;display:block;background-color:#b0b0b0;background-repeat:no-repeat;background-position:50%;-webkit-transition:all .1s ease-in-out;-moz-transition:all .1s ease-in-out;-o-transition:all .1s ease-in-out;-ms-transition:all .1s ease-in-out;transition:all .1s ease-in-out}#under-footer-back-to-top a:hover{background-color:#aaa}
</style>

<div id="under-footer">      
      <!-- start: Row -->
      <div class="row">

        <!-- start: Under Footer Logo -->
        <div class="col-sm-2" style = " height:46px;">

        </div>
        <!-- end: Under Footer Logo -->

        <!-- start: Under Footer Copyright -->
        <div class="col-sm-5" class="under-footer-copyright" style = "line-height: 20px; text-align:center">
          
          
            
						Copyright ©2014 Angel Academy Of The Arts, Inc. 
						
          <br>
          
        </div>
        <div class="col-sm-5" class="under-footer-copyright" style = "line-height: 20px; text-align:center;">
          
          
            
						All Rights Reserved
						
          
          
        </div>

<br><br>

        <!-- end: Under Footer Copyright -->

        <!-- start: Under Footer Back To Top -->
        <!-- end: Under Footer Back To Top -->
      
      </div>
      <!-- end: Row -->
      
    </div>

    <div class="modal" id="class1">
        <div class="modal-dialog" style="height: 120vm;">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">×</button>
                    <h3 class="modal-title" style="margin-top:3%;margin-bottom:3%;text-align:center;font-size:200%;font-family: 'monoglyceride';"><?php global $class1;echo $class1;?></h3>
                </div>
                <div class="modal-body">
                    <iframe style="z-index: 1000;border: 0;width: 90%;height: 90%;margin-top:-3%;margin-left:10%;" src="https://docs.google.com/document/d/11IvDK8qss71DqQHQwj3pfQi0LUKwZS73OqqRMmMv9OM/pub?embedded=true"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="class2">
        <div class="modal-dialog" style="height: 120vm;">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">×</button>
                    <h3 class="modal-title" style="margin-top:3%;margin-bottom:3%;text-align:center;font-size:200%;font-family: 'monoglyceride';"><?php global $class2;echo $class2;?></h3>
                </div>
                <div class="modal-body">
                    <iframe style="z-index: 1000;border: 0;width: 90%;height: 90%;margin-top:-3%;margin-left:10%;" src="https://docs.google.com/document/d/18DEf7uWqc8T8ySFpwQEZpxVwYRBusNiDY7r3iN0AOrg/pub?embedded=true"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="class3">
        <div class="modal-dialog" style="height: 120vm;">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">×</button>
                    <h3 class="modal-title" style="margin-top:3%;margin-bottom:3%;text-align:center;font-size:200%;font-family: 'monoglyceride';"><?php global $class3;echo $class3;?></h3>
                </div>
                <div class="modal-body">
                    <iframe style="z-index: 1000;border: 0;width: 90%;height: 90%;margin-top:-3%;margin-left:10%;" src="https://docs.google.com/document/d/1K8KgXmHdC2KKdPrz7PXnuMnH-kPJ1FNB04ahlCC1RwA/pub?embedded=true"></iframe>
                </div>
            </div>
        </div>
    </div>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script><script src="js/bootstrap.min.js"></script><script src="http://maps.googleapis.com/maps/api/js?sensor=false&extension=.js&output=embed"></script><script src="js/scripts.js"></script><script src="js/jquery.nicescroll.min.js"></script>
</body>
</html>