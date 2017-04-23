<!doctype html>
<html>
<head>
	<title>hashtag in a bottle</title>
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="">
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'> 
  	<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">    
    <style type="text/css">
    body {font-family: 'lato', sans-serif;background: rgba(35, 137, 158, 0.0901961);color: #fff;}
    header {width: 100%;height:90px;position: fixed;z-index: 1000;/*display: flex; justify-content:space-between;*/top:0;margin-left: -8px;}
    aside {width: 90px;height:800px;position: absolute;background-color: #22899f;}
    body > div {position: relative;}
    header > ul > li {font-size: 25px;margin-left: 97px;}

    header ul {
		-webkit-box-shadow: 0px 0px 30px 5px rgba(255,255,255,1);
		-moz-box-shadow: 0px 0px 30px 5px rgba(255,255,255,1);
		box-shadow: 0px 0px 30px 5px rgba(255,255,255,1);
    	;border-radius: 0px 0px 40px 40px;list-style-type: none; margin: 0; padding: 0; overflow: hidden; width: 64%; margin-left: 150px; display: inline-table; background-color: #22899f;}
	header li {float: left;}

	header li a, .dropbtn {display: inline-block;color: white;text-align: center;padding: 22px 34px;text-decoration: none;}

	header li a:hover, .dropdown:hover .dropbtn {color: red;text-shadow: 0px 0px 40px white;b}

	header li.dropdown {display: inline-block;}

	header .dropdown-content {display: none;position: absolute;background-color: #f9f9f9;min-width: 160px;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); z-index: 1;}

	header .dropdown-content a {color: black;padding: 12px 16px;text-decoration: none;display: block;text-align: left;font-size: 20px;}
	header .dropdown-content a:nth-child(1) {background-color: #df0000;}
	header .dropdown-content a:nth-child(2) {background-color: orange;}
	header .dropdown-content a:nth-child(3) {background-color: green;}
	header .dropdown-content a:nth-child(4) {background-color: lightblue;}

	header .dropdown-content a:hover {color: white;}

	header .dropdown:hover .dropdown-content {display: block;}
	header img {width: 100%;}
	header > div {width:11%;float: left;margin: 20px 20px 0 30px;}
			a {
		  color: #fff;
		  text-decoration: none;
		}
		.me {
		  width: 400px;
		  margin: 90px auto;
		}
		.me p,
		.me h1 {
		  text-transform: uppercase;
		  letter-spacing: 3px;
		  text-align: center;
		}
		.me p {
		  font-weight: 200;
		}
		.me span {
		  font-weight: bold;
		}
		.social {
		  z-index: 1000;
		  position: fixed;
		  top: 220px;
		}
		.social ul {
		  padding: 0px;
		  -webkit-transform: translate(-270px, 0);
		  -moz-transform: translate(-270px, 0);
		  -ms-transform: translate(-270px, 0);
		  -o-transform: translate(-270px, 0);
		  transform: translate(-270px, 0);
		}
		.social ul li {
		  border: 1px solid #dedede;
		  display: block;
		  margin: 5px;
		  background: #22899f;
		  width: 300px;
		  text-align: right;
		  padding: 10px;
		  -webkit-border-radius: 0 30px 30px 0;
		  -moz-border-radius: 0 30px 30px 0;
		  border-radius: 0 30px 30px 0;
		  -webkit-transition: all 1s;
		  -moz-transition: all 1s;
		  -ms-transition: all 1s;
		  -o-transition: all 1s;
		  transition: all 1s;
		}
		.social ul li:hover {
		  -webkit-transform: translate(110px, 0);
		  -moz-transform: translate(110px, 0);
		  -ms-transform: translate(110px, 0);
		  -o-transform: translate(110px, 0);
		  transform: translate(110px, 0);
		  background: white;
		  border: 1px solid #dedede;
		}
		.social ul li:hover a {
		  color: #000;
		}
		.social ul li:hover i {
		  color: #fff;
		  background: rgba(0, 0, 0, 0.36);
		  -webkit-transform: rotate(360deg);
		  -moz-transform: rotate(360deg);
		  -ms-transform: rotate(360deg);
		  -o-transform: rotate(360deg);
		  transform: rotate(360deg);
		  -webkit-transition: all 1s;
		  -moz-transition: all 1s;
		  -ms-transition: all 1s;
		  -o-transition: all 1s;
		  transition: all 1s;
		}
		.social ul li i {
		  
		  margin-left: 10px;
		  color: #000;
		  background: #fff;
		  padding: 10px;
		  -webkit-border-radius: 50%;
		  -moz-border-radius: 50%;
		  border-radius: 50%;
		  width: 20px;
		  height: 20px;
		  font-size: 20px;
		  background: #ffffff;
		  -webkit-transform: rotate(0deg);
		  -moz-transform: rotate(0deg);
		  -ms-transform: rotate(0deg);
		  -o-transform: rotate(0deg);
		  transform: rotate(0deg);
		}
    </style>
</head>
<body>
	<div>
		<header>
			<div>
				<img src="http://img4.hostingpics.net/pics/249732inabotlltlemin.png">
			</div>
			<ul>
			  <li><a href="#">&#35;In-a-bottle</a></li>
			  <li><a href="<?php echo base_url("inabottle") ?>">Default view</a></li>
			  <li class="dropdown">
			    <a href="javascript:void(0)" class="dropbtn">Filtres &#35;</a>
			    <div class="dropdown-content">
			      <a href="#">Utilisateur</a>
			      <a href="#">Twitter</a>
			      <a href="#">Facebook</a>
			      <a href="#">Instagram</a>
			      <a href="#">Maps</a>
			    </div>
			  </li>
			</ul>
		</header>
		<!--aside></aside-->
	</div>
	<div>
		<nav class="social">
	          <ul>
	              <li><a href="<?php echo base_url("users") ?>">Utilisateur <i class="fa fa-user"></i></a></li>
	              <li><a href="<?php echo base_url("maps") ?>">Maps <i class="fa fker"><img width="100%" src="http://img4.hostingpics.net/pics/21419510410ddd6.png"></i></a></li>
	              <li><a href="<?php echo base_url("twitter") ?>">Twitter <i class="fa fa-twitter"></i></a></li>
	              <li><a href="<?php echo base_url("facebook") ?>">Facebook <i class="fa fa-facebook"></i></a></li>
	              <li><a href="<?php echo base_url("instagram") ?>">Instagram <i class="fa fa-instagram"></i></a></li>
	          </ul>
	    </nav>
    </div>
    <div id="divflex">
    	<!--div class="divflexi"><img width="100%" src="https://www.slrlounge.com/wp-content/uploads/2016/02/instagram-point-reyes-shipwreck-fire-redacted-400x593.jpg"></div-->

    	<div class="divflexi"><img width="100%" src="http://meteorcapture.com/content/images/2015/03/Screen-Shot-2015-03-26-at-6-06-45-pm-1.png"></div>
    </div>
    <style type="text/css">
    	#divflex {margin: 135px 128px; width: 87%; display:flex;justify-content:space-around;flex-wrap:wrap;}
    	.divflexi {background-color: #22899f; width: 94%;height:560px;margin-bottom: 15px; border: 1px solid #b6b6b6;}
    	.divflexi:nth-child(2) {width:94%;}
    	/*.divflexi:nth-child(5) {height: 540px;}*/
    	.divflexi img {height: 560px;}
    	.social a {padding: 15px 0px 15px 58px;}
    </style>

</body>
</html>