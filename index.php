<!DOCTYPE html>
<html>
<head>
	<title>WebExpress|A Railway Reservation Website</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="http://s.mlcdn.co/animate.css">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  	<link href="https://fonts.googleapis.com/css?family=Baloo+Chettan" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Pacifico|Quicksand" rel="stylesheet">
  	<script src="https://use.fontawesome.com/729fc58e0b.js"></script>
  	<script src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>
  	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  	  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  	<script src="http://maps.googleapis.com/maps/api/js"></script>

  	<style type="text/css">
  	.pace {
	  -webkit-pointer-events: none;
	  pointer-events: none;

	  -webkit-user-select: none;
	  -moz-user-select: none;
	  user-select: none;
	}

	.pace-inactive {
	  display: none;
	}

	.pace .pace-progress {
	  background: #29d;
	  position: fixed;
	  z-index: 2000;
	  top: 0;
	  right: 100%;
	  width: 100%;
	  height: 2px;
	}
  	</style>

  	<script>
  $( function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
    $( "#tags2" ).autocomplete({
      source: availableTags
    });
  } );
  </script>

  	<script>
	  $( function() {
	    $( "#datepicker" ).datepicker();
	 
      	$( "#datepicker" ).datepicker( "option", "showAnim", "bounce" );
	  } );
    </script>

   	<script type="text/javascript">
	 	function initialize() {
	 		var myCenter = new google.maps.LatLng(19.0957290,72.838890);
  			var mapCanvas = document.getElementById("sec2");
  			var mapProp = {center: myCenter, zoom: 15};
  			var map = new google.maps.Map(mapCanvas, mapProp);
  			var marker = new google.maps.Marker({position:myCenter});
  			marker.setMap(null);
  			var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      
      '<div id="bodyContent" >'+
      '<div class="row">'+
      '<div class="col-md-7">'+
      '<h4> <i class="fa fa-home" aria-hidden="true"></i> Our Address</h4>'+
      '</div>'+
      '<div class="col-md-5">'+
      '<h4><i class="fa fa-phone" aria-hidden="true"></i> Contact us.</h4>'+
      '</div>'+
      '</div>'+
      '<div class="row">'+
      '<div class="col-md-7 text-center">'+
      '<strong> C-2,JUHU Airport Colony,<br>S.V Road ,Opp. Nanavatti Hospital ,<br>Vileparle West. Mumbai - 56.</strong>'+
      '</div>'+
      '<div class="col-md-5 text-center">'+
      '<strong> <i class="fa fa-bullseye" aria-hidden="true"></i> 022-56568766 </strong><br>'+
      '<strong> <i class="fa fa-bullseye" aria-hidden="true"></i> 022-56568766 </strong>'+
      '</div>'+
      '</div>'+
      '</div>';

  			var infowindow = new google.maps.InfoWindow({
    			content: contentString,
    			maxWidth:500
  			});
  			infowindow.setPosition({lat: 19.0957175, lng: 72.838774});
  			infowindow.open(map);
	 	}
	 	google.maps.event.addDomListener(window, 'load', initialize);
	 </script>

  	<style type="text/css">
  		.viewArea {min-height:500px; background-image: url("images/image3.jpg"); background-repeat: no-repeat;background-size: 100%,80%}
  		.aboutUs {min-height:500px; background-image: url("images/wall.jpg"); background-size: 100%,80%}
  		.footer{min-height:100px;background-image: url("images/check3.png");}
  		.navbar {margin-top: 20px; background-color: transparent;border-color: transparent;font-family: 'Baloo Chettan', cursive; font-size: 16px;}
  		.navbar-inverse .navbar-nav > .active > a {background-color: transparent;color: #f89d0e;border-bottom: 1px solid yellow; border-top: 1px solid yellow; border-radius: 6px}
  		.navbar-inverse .navbar-nav > .active > a:hover,
		.navbar-inverse .navbar-nav > .active > a:focus {
  			color: #f89d0e;
  			background-color: transparent;
  			border-bottom: 1px solid yellow; 
  			border-top: 1px solid yellow; 
  			border-radius: 6px;
		}
		.navbar-inverse .navbar-nav > li > a {
  			color: #f89d0e;
		}
		.navbar-inverse .navbar-nav > li > a:hover,
		.navbar-inverse .navbar-nav > li > a:focus {
  			color: #f89d0e;
  			background-color: transparent;
  			border-bottom: 1px solid yellow; 
  			border-top: 1px solid yellow; 
  			border-radius: 6px;
  			
		}
		.navbar-inverse .navbar-brand {
			color:#1BAEE4;
			font-family: 'Quicksand', sans-serif;
  			font-size: 20px;
  			font-style: bold;
		}
		.btn-cicle{width:60px; height: 60px;border-radius: 80px;}
		.btn-facebook{background-color: #3b5988;}
		.searchBox {margin: 60px auto auto;}
		.form-control{background-color: #000; opacity:0.6; border-color: transparent;}
		.form-control:hover ,.form-control:focus{background-color: #eee; opacity:0.7;}
		.user-details {position: relative; padding: 0;}
		.user-details .user-image {position: relative;  z-index: 1; width: 100%; text-align: center;}
 		.user-image img { clear: both; margin: auto; position: relative;}

		.user-details .user-info-block {width: 100%; position: absolute; top: 55px; background: rgb(0, 0, 0); z-index: 0; padding-top: 35px;}
 		.user-info-block .user-heading {width: 100%; text-align: center; margin: 10px 0 0;color: #fff;}
 		.user-info-block .navigation {float: left; width: 100%; margin: 0; padding: 0; list-style: none; border-bottom: 1px solid #428BCA; border-top: 1px solid #428BCA;}
 		.user-info-block{opacity: 0.5;}
  		.navigation li {float: left; margin: 0; padding: 0;}
   		.navigation li a {padding: 20px 30px; float: left;}
   		.navigation li.active a {background: #428BCA; color: #fff;}
 		.user-info-block .user-body {float: left; padding: 5%; width: 90%;}
  		.user-body .tab-content > div {float: left; width: 100%;}
  		.user-body .tab-content h4 {width: 100%; margin: 10px 0; color: #333;}
  		.help-block{color: #fff;font-family: 'Baloo Chettan', cursive;}
  		.btn-google{background-color: #db3236}
  		.btn-twitter{background-color: #0084b4}
  		.row-centered {
    		text-align:center;
		}
		.col-centered {
    		display:inline-block;
    		float:none;
    		text-align:left;
    		margin-right:10px;
		}
		.tHead{font-family: 'Baloo Chettan', cursive; color:#eee;}
		.contactUs{ min-height:500px;background-size: 100%,80%; }
		.input-group-addon{background-color: #000; opacity:0.7; border-color: transparent;}
		body{position: relative;}
		.spacing{margin-top: 30px}
		span.twitter-typeahead .tt-menu,
		span.twitter-typeahead .tt-dropdown-menu {
		  position: absolute;
		  top: 100%;
		  left: 0;
		  z-index: 1000;
		  display: none;
		  float: left;
		  min-width: 215px;
		  padding: 5px 0;
		  margin: 2px 0 0;
		  list-style: none;
		  font-size: 14px;
		  text-align: left;
		  background-color: #ffffff;
		  border: 1px solid #cccccc;
		  border: 1px solid rgba(0, 0, 0, 0.15);
		  border-radius: 4px;
		  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
		  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
		  background-clip: padding-box;
		  opacity: 0.6;
		}
		span.twitter-typeahead .tt-suggestion {
		  display: block;
		  padding: 3px 20px;
		  clear: both;
		  font-weight: normal;
		  line-height: 1.42857143;
		  color: #333333;
		  white-space: nowrap;
		}
		.font-style{color: #000;font-family: 'Baloo Chettan', cursive;font-size: 17px;}
		span.twitter-typeahead .tt-suggestion.tt-cursor,
		span.twitter-typeahead .tt-suggestion:hover,
		span.twitter-typeahead .tt-suggestion:focus {
		  color: #ffffff;
		  text-decoration: none;
		  outline: 0;
		  background-color: #337ab7;
		}
		.input-group.input-group-lg span.twitter-typeahead .form-control {
		  height: 46px;
		  padding: 10px 16px;
		  font-size: 18px;
		  line-height: 1.3333333;
		  border-radius: 6px;
		}
		.input-group.input-group-sm span.twitter-typeahead .form-control {
		  height: 30px;
		  padding: 5px 10px;
		  font-size: 12px;
		  line-height: 1.5;
		  border-radius: 3px;
		}
		span.twitter-typeahead {
		  width: 100%;
		}
		.input-group span.twitter-typeahead {
		  display: block !important;
		  height: 34px;
		}
		.input-group span.twitter-typeahead .tt-menu,
		.input-group span.twitter-typeahead .tt-dropdown-menu {
		  top: 32px !important;
		}
		.input-group span.twitter-typeahead:not(:first-child):not(:last-child) .form-control {
		  border-radius: 4px;
		}
		.input-group span.twitter-typeahead:first-child .form-control {
		  border-top-left-radius: 4px;
		  border-bottom-left-radius: 4px;
		  border-top-right-radius: 4px;
		  border-bottom-right-radius: 4px;
		}
		.input-group span.twitter-typeahead:last-child .form-control {
		  border-top-left-radius: 4px;
		  border-bottom-left-radius: 4px;
		  border-top-right-radius: 4px;
		  border-bottom-right-radius: 4px;
		}
		.input-group.input-group-sm span.twitter-typeahead {
		  height: 30px;
		}
		.input-group.input-group-sm span.twitter-typeahead .tt-menu,
		.input-group.input-group-sm span.twitter-typeahead .tt-dropdown-menu {
		  top: 30px !important;
		}
		.input-group.input-group-lg span.twitter-typeahead {
		  height: 46px;
		  opacity: 0.7;
		}
		.input-group.input-group-lg span.twitter-typeahead .tt-menu,
		.input-group.input-group-lg span.twitter-typeahead .tt-dropdown-menu {
		  top: 46px !important;
		}
		.form-control{background-color: #000; opacity:0.6; border-color: transparent;}
		.form-control:hover ,.form-control:focus{background-color: #eee; opacity:0.7;}
		.copyright{margin-top: 10px;color: #fff;}
		.sp1{float: right; padding-top: auto;}
		.sp2{float: center;padding-top: auto;}
		.sp3{float: left; padding-top: auto;}
		.OpenTag{margin: 140px auto auto;}
		.oneLine{color:#f89d0e;font-family: 'Quicksand', sans-serif;}
  	</style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
	<div class="container-fluid viewArea" id="home">
		 <nav class="navbar navbar-inverse navbar-fixed-top" id="myScrollspy">
  			<div class="container-fluid">
    			<div class="navbar-header">
      				<a class="navbar-brand" href="#home" style="color:#f89d0e;"><strong>WebExpress</strong></a>
    			</div>
    			<ul class="nav navbar-nav">
      				<li class="active" id="my"><a href="#home"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
      				<li><a href="#sec1"><i class="fa fa-users" aria-hidden="true"></i> About us</a></li>
      				<li><a href="#sec2"> <i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
    			</ul>
    			<ul class="nav navbar-nav navbar-right">
      				<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      				<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    			</ul>
  			</div>
		</nav>
		<div class="row row-centered OpenTag">
			<div class="col-md-10 col-centered" style="text-align:center;">
				<h1 class="oneLine"> Looking for Trains ...Type in</h1>
			</div>			
		</div>
				<div class="row searchBox row-centered">
			<div class="col-md-3 col-centered">
				<div class="input-group input-group-lg" id="the-basics">
        				<input type="text" id="tags" class=" form-control type"style="color:#fff"  placeholder="From..">
        		</div>
        	</div>
        	<div class="col-md-3 col-centered">
				<div class="input-group input-group-lg" id="the-basics2">
        				<input type="text" id="tags2" class=" form-control type" style="color:#fff" placeholder="To..">
        		</div>
        	</div>
        	<div class="col-md-2 col-centered">
				<div class="input-group input-group-lg" style="border-radius:6px;">
        				<input type="text" class=" form-control type" style="color:#fff" placeholder="No of Passengers">
        		</div>
        	</div>
        	<div class="col-md-3 col-centered">
				<div class="input-group input-group-lg date">
        				<input type="text" id="datepicker" class="form-control" style="color:#fff" placeholder="Date..">
        					<span class="input-group-addon">
                        		<span class="glyphicon glyphicon-calendar"></span>
                    		</span>
        				<span class="input-group-btn">
	        				<button class="btn btn-primary btn-lg" type="button">Go!</button>
	     				</span>
        		</div>
        	</div>
 
		</div>
	</div>
	<div class="container-fluid aboutUs" id="sec1">
		<div class="row row-centered" style=" margin-top: 90px;">
			<div class="col-md-4 col-centered" style=" text-align:center;">
				<h2 class="tHead">Our Team</h2>
			</div>
		</div>
		<div class="row row-centered" style=" margin-top: 50px;">
			<div class="col-sm-3 col-md-3 user-details col-centered">
            <div class="user-image">
                <img src="https://fbcdn-sphotos-a-a.akamaihd.net/hphotos-ak-xla1/v/t1.0-9/11701020_948513175205940_5941609613386380650_n.jpg?oh=7d0f91871bac682be5a2ebfc2e56a46b&oe=58387938&__gda__=1484535957_4ce2316ab3fedc4266bac9ef60513e88" alt="Akshay Kumar" title="Akshay Kumar" width="110px" height="110px" class="img-circle">
            </div>
            <div class="user-info-block">
                <div class="user-heading">
                    <h3>Akshay Kumar</h3>
                    <span class="help-block">Web Developer</span>
                </div>
            </div> 
            </div>
            <div class="col-sm-3 col-md-3 user-details col-centered">
            <div class="user-image">
                <img src="https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-9/249058_472418296161521_780132210_n.jpg?oh=4db92669f5f20a9ac52cb6e40a71f5dc&oe=5874AB60" alt="Suman Chatla" title="Suman Chatla" width="110px" height="110px" class="img-circle">
            </div>
            <div class="user-info-block">
                <div class="user-heading">
                    <h3>Suman Chatla</h3>
                    <span class="help-block">Web Developer</span>
                </div>
            </div> 
            </div>
            <div class="col-sm-3 col-md-3 user-details col-centered">
            <div class="user-image">
                <img src="https://fbcdn-sphotos-a-a.akamaihd.net/hphotos-ak-xla1/v/t1.0-9/11701020_948513175205940_5941609613386380650_n.jpg?oh=7d0f91871bac682be5a2ebfc2e56a46b&oe=58387938&__gda__=1484535957_4ce2316ab3fedc4266bac9ef60513e88" alt="Rahul Waghmare" title="Rahul Waghmare" width="110px" height="110px" class="img-circle">
            </div>
            <div class="user-info-block">
                <div class="user-heading">
                    <h3>Rahul Waghmare</h3>
                    <span class="help-block">Web Developer</span>
                </div>
            </div> 
            </div>
        </div>
	</div>
	<div class="container-fluid contactUs" id="sec2">
		
	</div>
	<div class="container-fluid footer" id="foot">
		<div class="row row-centered spacing">
			<div class="col-md-6 col-centered">
				 <div class="btn-group btn-group-justified" style="border-color:transparent;">
				  <a href="#" class="btn btn-primary btn-facebook"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
				  <a href="#" class="btn btn-danger btn-google"><i class="fa fa-google" aria-hidden="true"></i> Google</a>
				  <a href="#" class="btn btn-primary btn-twitter"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
				</div>
			</div>
		</div>
		<div class="row row-centered copyright">
			<div class="col-md-4 col-centered">
				<div style="padding-left:20px;">
					<p class="font-style"><span class="label label-warning">Fusion Inc. All rights reserved.</span></p>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			var substringMatcher = function(strs) {
	  			return function findMatches(q, cb) {
	    			var matches, substringRegex;
	    			matches = [];
	    			substrRegex = new RegExp(q, 'i');
	    			$.each(strs, function(i, str) {
	      				if (substrRegex.test(str)) {
	        				matches.push(str);
	      				}
	    			});

	    			cb(matches);
	  			};
			};

			var stations = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
			  'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
			  'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
			  'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
			  'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
			  'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
			  'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
			  'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
			  'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'];

			$('#the-basics .type').typeahead({
		  		hint: true,
		  		highlight: true,
		  		minLength: 1
			},
			{
		  		name: 'states',
		  		source: substringMatcher(states)
			});

			$('#the-basics2 .type').typeahead({
		  		hint: true,
		  		highlight: true,
		  		minLength: 1
			},
			{
		  		name: 'states',
		  		source: substringMatcher(states)
			});
		});
	</script>
	 	<script type="text/javascript">
	// $(document).ready(function(){
 //   		$('body').scrollspy({target: ".navbar", offset: 200});   
 //  		$("#myScrollspy a").on('click', function(event) {
 //    		if (this.hash !== "") {
 //      			event.preventDefault();
 //      			var hash = this.hash;
 //      			$('html, body').animate({
 //        			scrollTop: $(hash).offset().top
 //      			}, 800, function(){
 //        			window.location.hash = hash;
 //      			});
 //    		}  
 //  		});
	// });
	</script>
</body>
</html>