	
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


<section class="bg-3" id="section3"><div class="col-sm-6 col-sm-offset-3 text-center"><h2 style="padding:20px;background-color:rgba(5,5,5,.4);margin-bottom:10%;">Instructors</h2></div><div class="container"><div class="row" style="color: #505050;"><div class="col-sm-4 col-xs-6 wow slideInDown animated" data-wow-duration="1s" style="font-size: 150%; visibility: visible; -webkit-animation: slideInDown 1s;"><div class="panel panel-default" data-toggle="modal" data-target="#ins1"><div class="panel-thumbnail"><a href="#" title="Lily Zhang" data-toggle="modal" data-target="#ins1"><img a="" href="#" data-toggle="modal" data-target="#ins1" src="//placehold.it/600x400/444/F8F8F8" class="img-responsive center"></a></div><div class="panel-body"><p><span class = "glyphicon glyphicon-info-sign"></span> Lily Zhang Bob (Founder)</p><p></p></div></div></div><div class="col-sm-4 col-xs-6 wow slideInLeft animated" data-wow-duration="1s" style="font-size: 150%; visibility: visible; -webkit-animation: slideInLeft 1s;"><div class="panel panel-default" data-toggle="modal" data-target="#ins2"><div class="panel-thumbnail"><a href="#" title="Brad Belvins" data-toggle="modal" data-target="#ins2"><img a="" href="#" data-toggle="modal" data-target="#ins2" src="img/bradbelvins.jpg" class="img-responsive center"></a></div><div class="panel-body"><p><span class = "glyphicon glyphicon-info-sign"></span> Brad Belvins (Art Teacher)</p><p></p></div></div></div><div class="col-sm-4 col-xs-6 wow slideInRight animated" data-wow-duration="1.5s" style="font-size: 150%; visibility: visible; -webkit-animation: slideInRight 1.5s;"><div class="panel panel-default" data-toggle="modal" data-target="#ins3"><div class="panel-thumbnail"><a href="#" title="Pang Yen Chou" data-toggle="modal" data-target="#ins3"><img a="" href="#" data-toggle="modal" data-target="#ins3" src="img/pangyenchou.jpg" class="img-responsive center"></a></div><div class="panel-body"><p><span class = "glyphicon glyphicon-info-sign"></span> Pang Yen Chou (Art Teacher)</p><p></p></div></div></div><div class="col-sm-4 col-xs-6 wow slideInTop animated" data-wow-duration="1.5s" style="font-size: 150%; visibility: visible; -webkit-animation: 1.5s;"><div class="panel panel-default " data-toggle="modal" data-target="#ins4"><div class="panel-thumbnail"><a href="#" title="Amy D. Leung" data-toggle="modal" data-target="#ins4"><img data-toggle="modal" data-target="#ins4" src="img/amydleung.jpg" class="img-responsive center"></a></div><div class="panel-body"><p> <span class = "glyphicon glyphicon-info-sign"></span> Amy D. Leung (Art Teacher)</p><p></p></div></div></div><div class="col-sm-4 col-xs-6 wow slideInRight animated" data-wow-duration="2s" style="font-size: 150%; visibility: visible; -webkit-animation: slideInRight 2s;"><div class="panel panel-default" data-toggle="modal" data-target="#ins5"><div class="panel-thumbnail"><a href="#" title="Olivia Chen" data-toggle="modal" data-target="#ins5"><img data-toggle="modal" data-target="#ins5" src="img/oliviachen.jpg" class="img-responsive center"></a></div><div class="panel-body"><p> <span class = "glyphicon glyphicon-info-sign"></span> Olivia Chen (Art Teacher)</p><p></p></div></div></div><div class="col-sm-4 col-xs-6 wow slideInLeft animated" data-wow-duration="1s" style="font-size: 150%; visibility: visible; -webkit-animation: slideInLeft 1s;"><div class="panel panel-default" data-toggle="modal" data-target="#ins6"><div class="panel-thumbnail"><a href="#" title="Arno Chen" data-toggle="modal" data-target="#ins6"><img data-toggle="modal" data-target="#ins6" src="img/arnochen.jpg" class="img-responsive center"></a></div><div class="panel-body"><p> <span class = "glyphicon glyphicon-info-sign"></span> Arno Chen (Art Teacher)</p><p></p></div></div></div><div class="col-sm-4 col-xs-6 wow slideInRight" data-wow-duration="1s" style="font-size: 150%; visibility: hidden; -webkit-animation: none 1s;"><div class="panel panel-default" data-toggle="modal" data-target="#ins7"><div class="panel-thumbnail"><a href="#" title="5" data-toggle="modal" data-target="#ins7"><img data-toggle="modal" data-target="#ins7" src="//placehold.it/600x400/666/F4F4F4" class="img-responsive center"></a></div><div class="panel-body"><p> <span class = "glyphicon glyphicon-info-sign"></span> David Leese (Music Teacher)</p><p></p></div></div></div><div class="col-sm-4 col-xs-6 wow slideInLeft" data-wow-duration="1s" style="font-size: 150%; visibility: hidden; -webkit-animation: none 1s;"><div class="panel panel-default" data-toggle="modal" data-target="#ins8"><div class="panel-thumbnail"><a href="#" title="6" data-toggle="modal" data-target="#ins8"><img data-toggle="modal" data-target="#ins8" src="//placehold.it/600x400/666/F4F4F4" class="img-responsive center"></a></div><div class="panel-body"><p> <span class = "glyphicon glyphicon-info-sign"></span> Juan Huang (Music Teacher)</p><p></p></div></div></div></div></div></section>

</div>

    	







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


       <div class="modal" id="ins1">
            <div class="modal-dialog" style="height: auto;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal">×</button>
                        <h3 class="modal-title" style="margin-top:3%;margin-bottom:3%;text-align:center;font-size:200%;"><?php global $ins1name;echo $ins1name;?></h3>
                    </div>
                    <div class="modal-body">
                        <iframe style="z-index: 1000;border: 0;width: 90%;height: 90%;margin-top:-3%;margin-left:10%;" src="https://docs.google.com/document/d/1mDi1lGE7_-0mlWHnVocL7O_91dFlpJ8gUsKAiTPrlWw/pub?embedded=true"></iframe>
                        <div id="cp_widget_e127286f-030d-4527-b0ca-1720cf237212">...</div>
                        <script type="text/javascript">
                            var cpo = [];
                            cpo["_object"] = "cp_widget_e127286f-030d-4527-b0ca-1720cf237212";
                            cpo["_fid"] = "A0LASwLRMeCd";
                            var _cpmp = _cpmp || [];
                            _cpmp.push(cpo);
                            (function() {
                                var cp = document.createElement("script");
                                cp.type = "text/javascript";
                                cp.async = true;
                                cp.src = "//www.cincopa.com/media-platform/runtime/libasync.js";
                                var c = document.getElementsByTagName("script")[0];
                                c.parentNode.insertBefore(cp, c);
                            })();
                        </script>
                        <noscript>Powered by Cincopa <a href='http://www.cincopa.com/video-hosting'>Video Streaming Hosting</a> solution.<span>Instructor 1 Gallery</span>
                        </noscript>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="ins2" style="height: 120vm;">
            <div class="modal-dialog" style="height: 120vm;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal">×</button>
                        <h3 class="modal-title" style="margin-top:3%;margin-bottom:3%;text-align:center;font-size:200%;"><?php global $ins1name;echo $ins2name;?></h3>
                    </div>
                    <div class="modal-body">
                        <iframe style="z-index: 1000;border: 0;width: 90%;height: 90%;margin-top:-3%;margin-left:10%;" src="https://docs.google.com/document/d/1hwYhSqRQCwxB7vudUAFD5TO59wCUMH_NimwEhnqW-Qk/pub?embedded=true"></iframe>
                        <div id="cp_widget_2017b230-bf9d-4d92-bd6e-806c04822d60">...</div>
                        <script type="text/javascript">
                            var cpo = [];
                            cpo["_object"] = "cp_widget_2017b230-bf9d-4d92-bd6e-806c04822d60";
                            cpo["_fid"] = "AMCAKxbEMGBT";
                            var _cpmp = _cpmp || [];
                            _cpmp.push(cpo);
                            (function() {
                                var cp = document.createElement("script");
                                cp.type = "text/javascript";
                                cp.async = true;
                                cp.src = "//www.cincopa.com/media-platform/runtime/libasync.js";
                                var c = document.getElementsByTagName("script")[0];
                                c.parentNode.insertBefore(cp, c);
                            })();
                        </script>
                        <noscript>Powered by Cincopa <a href='http://www.cincopa.com/video-hosting'>Video Streaming Hosting</a> solution.<span>New Gallery 2014/6/26</span><span>height</span><span> 1200</span><span>width</span><span> 829</span><span>orientation</span><span> 1</span><span>camerasoftware</span><span> Adobe Photoshop CS3 </span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 662</span><span>width</span><span> 856</span><span>camerasoftware</span><span> paint.net 4.0</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 500</span><span>width</span><span> 685</span><span>camerasoftware</span><span> paint.net 4.0</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 666</span><span>width</span><span> 927</span><span>camerasoftware</span><span> paint.net 4.0</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span>
                        </noscript>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="modal" id="ins3" style="height: 120vm;">
        <div class="modal-dialog" style="height: 120vm;">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">×</button>
                    <h3 class="modal-title" style="margin-top:3%;margin-bottom:3%;text-align:center;font-size:200%;"><?php global $ins3name;echo $ins3name;?></h3>
                </div>
                <div class="modal-body">
                    <iframe style="z-index: 1000;border: 0;width: 90%;height: 90%;margin-top:-3%;margin-left:10%;" src="https://docs.google.com/document/d/1hwYhSqRQCwxB7vudUAFD5TO59wCUMH_NimwEhnqW-Qk/pub?embedded=true"></iframe>
                    <div id="cp_widget_e2175112-2407-47bb-aeb3-6706bdb77218">...</div>
                    <script type="text/javascript">
                        var cpo = [];
                        cpo["_object"] = "cp_widget_e2175112-2407-47bb-aeb3-6706bdb77218";
                        cpo["_fid"] = "AANAkyrwMG0R";
                        var _cpmp = _cpmp || [];
                        _cpmp.push(cpo);
                        (function() {
                            var cp = document.createElement("script");
                            cp.type = "text/javascript";
                            cp.async = true;
                            cp.src = "//www.cincopa.com/media-platform/runtime/libasync.js";
                            var c = document.getElementsByTagName("script")[0];
                            c.parentNode.insertBefore(cp, c);
                        })();
                    </script>
                    <noscript>Powered by Cincopa <a href='http://www.cincopa.com/video-hosting'>Video Streaming Hosting</a> solution.<span>Instructor Pictures</span><span>height</span><span> 776</span><span>width</span><span> 605</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 750</span><span>width</span><span> 583</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 746</span><span>width</span><span> 570</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 554</span><span>width</span><span> 720</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 769</span><span>width</span><span> 595</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 802</span><span>width</span><span> 603</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 770</span><span>width</span><span> 595</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 720</span><span>width</span><span> 541</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 450</span><span>width</span><span> 600</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span>
                    </noscript>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="ins4">
        <div class="modal-dialog" style="height: 120vm;">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">×</button>
                    <h3 class="modal-title" style="margin-top:3%;margin-bottom:3%;text-align:center;font-size:200%;"><?php global $ins4name;echo $ins4name;?></h3>
                </div>
                <div class="modal-body">
                    <div style="z-index: 1000;border: 0;width: 100%;height: 100%">
                        <iframe style="z-index: 1000;border: 0;width: 90%;height: 90%;margin-top:-3%;margin-left:10%;" src="https://docs.google.com/document/d/1SuIJ0IUJH97EEbBVtDsZ75N6JuyQzzLYGCB4cWgSIPE/pub?embedded=true"></iframe>
                        <div id="cp_widget_07d00665-ce6e-439c-9ddc-c2eb84ecb81b">...</div>
                        <script type="text/javascript">
                            var cpo = [];
                            cpo["_object"] = "cp_widget_07d00665-ce6e-439c-9ddc-c2eb84ecb81b";
                            cpo["_fid"] = "AoNA1zrgM2aT";
                            var _cpmp = _cpmp || [];
                            _cpmp.push(cpo);
                            (function() {
                                var cp = document.createElement("script");
                                cp.type = "text/javascript";
                                cp.async = true;
                                cp.src = "//www.cincopa.com/media-platform/runtime/libasync.js";
                                var c = document.getElementsByTagName("script")[0];
                                c.parentNode.insertBefore(cp, c);
                            })();
                        </script>
                        <noscript>Powered by Cincopa <a href='http://www.cincopa.com/video-hosting'>Video Streaming Hosting</a> solution.<span>New Gallery 2014/6/26</span><span>height</span><span> 479</span><span>width</span><span> 599</span><span>camerasoftware</span><span> paint.net 4.0</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 535</span><span>width</span><span> 399</span><span>camerasoftware</span><span> paint.net 4.0</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 480</span><span>width</span><span> 600</span><span>camerasoftware</span><span> paint.net 4.0</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 600</span><span>width</span><span> 446</span><span>camerasoftware</span><span> paint.net 4.0</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span>
                        </noscript>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="ins5">
        <div class="modal-dialog" style="height: 120vm;">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">×</button>
                    <h3 class="modal-title" style="margin-top:3%;margin-bottom:3%;text-align:center;font-size:200%;"><?php global $ins5name;echo $ins5name;?></h3>
                </div>
                <div class="modal-body">
                    <iframe style="z-index: 1000;border: 0;width: 90%;height: 90%;margin-top:-3%;margin-left:10%;" src="https://docs.google.com/document/d/1x0xcumDO96FegN_ZhFOSW9LEbbPfyWMPqyWWW0M38fU/pub?embedded=true"></iframe>
                    <div id="cp_widget_854b7108-eefb-4895-bc72-80790e86b312">...</div>
                    <script type="text/javascript">
                        var cpo = [];
                        cpo["_object"] = "cp_widget_854b7108-eefb-4895-bc72-80790e86b312";
                        cpo["_fid"] = "AwKASxrAMOUd";
                        var _cpmp = _cpmp || [];
                        _cpmp.push(cpo);
                        (function() {
                            var cp = document.createElement("script");
                            cp.type = "text/javascript";
                            cp.async = true;
                            cp.src = "//www.cincopa.com/media-platform/runtime/libasync.js";
                            var c = document.getElementsByTagName("script")[0];
                            c.parentNode.insertBefore(cp, c);
                        })();
                    </script>
                    <noscript>Powered by Cincopa <a href='http://www.cincopa.com/video-hosting'>Video Streaming Hosting</a> solution.<span>Instructor 5 Gallery</span>
                    </noscript>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="ins6">
        <div class="modal-dialog" style="height: 120vm;">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">×</button>
                    <h3 class="modal-title" style="margin-top:3%;margin-bottom:3%;text-align:center;font-size:200%;"><?php global $ins6name;echo $ins6name;?></h3>
                </div>
                <div class="modal-body">
                    <iframe style="z-index: 1000;border: 0;width: 90%;height: 90%;margin-top:-3%;margin-left:10%;" src="https://docs.google.com/document/d/1fuey4eXuLErx1OGdoAtoaVgCeLqbzhgnQ_HfzuKHI8g/pub?embedded=true"></iframe>
                    <div id="cp_widget_29d6909b-53ae-48fd-a8cd-45707fd03e96">...</div>
                    <script type="text/javascript">
                        var cpo = [];
                        cpo["_object"] = "cp_widget_29d6909b-53ae-48fd-a8cd-45707fd03e96";
                        cpo["_fid"] = "AcKAmwLFMikd";
                        var _cpmp = _cpmp || [];
                        _cpmp.push(cpo);
                        (function() {
                            var cp = document.createElement("script");
                            cp.type = "text/javascript";
                            cp.async = true;
                            cp.src = "//www.cincopa.com/media-platform/runtime/libasync.js";
                            var c = document.getElementsByTagName("script")[0];
                            c.parentNode.insertBefore(cp, c);
                        })();
                    </script>
                    <noscript>Powered by Cincopa <a href='http://www.cincopa.com/video-hosting'>Video Streaming Hosting</a> solution.<span>Instructor 6 Gallery</span>
                    </noscript>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="ins7">
        <div class="modal-dialog" style="height: 120vm;">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">×</button>
                    <h3 class="modal-title" style="margin-top:3%;margin-bottom:3%;text-align:center;font-size:200%;"><?php global $ins7name;echo $ins7name;?></h3>
                </div>
                <div class="modal-body">
                    <iframe style="z-index: 1000;border: 0;width: 90%;height: 90%;margin-top:-3%;margin-left:10%;" src="https://docs.google.com/document/d/1YQl44o4MxnFaSirGBKzyLrosjjE0bnnGPHsYv6V0Rtw/pub?embedded=true"></iframe>
                    <div id="cp_widget_33f57b06-4521-4aa5-af64-48c8ce880074">...</div>
                    <script type="text/javascript">
                        var cpo = [];
                        cpo["_object"] = "cp_widget_33f57b06-4521-4aa5-af64-48c8ce880074";
                        cpo["_fid"] = "AMDACxrRM-W4";
                        var _cpmp = _cpmp || [];
                        _cpmp.push(cpo);
                        (function() {
                            var cp = document.createElement("script");
                            cp.type = "text/javascript";
                            cp.async = true;
                            cp.src = "//www.cincopa.com/media-platform/runtime/libasync.js";
                            var c = document.getElementsByTagName("script")[0];
                            c.parentNode.insertBefore(cp, c);
                        })();
                    </script>
                    <noscript>Powered by Cincopa <a href='http://www.cincopa.com/video-hosting'>Video Streaming Hosting</a> solution.<span>Instructor 7</span>
                    </noscript>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="ins8">
        <div class="modal-dialog" style="height: 120vm;">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">×</button>
                    <h3 class="modal-title" style="margin-top:3%;margin-bottom:3%;text-align:center;font-size:200%;"><?php global $ins8name;echo $ins8name;?></h3>
                </div>
                <div class="modal-body">
                    <iframe style="z-index: 1000;border: 0;width: 90%;height: 90%;margin-top:-3%;margin-left:10%;" src="https://docs.google.com/document/d/19NqXt4WiQP5CXUhSdHuduwA09tt7U6yADKFNU5SkXIM/pub?embedded=true"></iframe>
                    <div id="cp_widget_e227d5b6-8e92-4a8d-a8b1-e46aa941c5e3">...</div>
                    <script type="text/javascript">
                        var cpo = [];
                        cpo["_object"] = "cp_widget_e227d5b6-8e92-4a8d-a8b1-e46aa941c5e3";
                        cpo["_fid"] = "AMMAXybOMqt4";
                        var _cpmp = _cpmp || [];
                        _cpmp.push(cpo);
                        (function() {
                            var cp = document.createElement("script");
                            cp.type = "text/javascript";
                            cp.async = true;
                            cp.src = "//www.cincopa.com/media-platform/runtime/libasync.js";
                            var c = document.getElementsByTagName("script")[0];
                            c.parentNode.insertBefore(cp, c);
                        })();
                    </script>
                    <noscript>Powered by Cincopa <a href='http://www.cincopa.com/video-hosting'>Video Streaming Hosting</a> solution.<span>Instructor 8</span>
                    </noscript>
                </div>
            </div>
        </div>
    </div>










		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script><script src="js/bootstrap.min.js"></script><script src="http://maps.googleapis.com/maps/api/js?sensor=false&extension=.js&output=embed"></script><script src="js/scripts.js"></script><script src="js/jquery.nicescroll.min.js"></script>
</body>
</html>




















