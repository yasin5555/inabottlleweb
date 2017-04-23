<!doctype html>
<html>
<head>
	<title>hashtag in a bottle</title>
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login.css'); ?>">
    
</head>
<body>
	<div id="bottle">
		<div id="boxcenter">
			<div id="boxone">
				<div>
					<img src="http://img4.hostingpics.net/pics/249732inabotlltlemin.png">
					<p>Connectez-vous à votre compte</p>
				</div>
			</div>
			<div id="boxtwo">
				<form name="ProfileForm" onsubmit="return CheckInputs();" action="http://link-be.mediamarkt.be/u/register.php" method="get">
					<input type="text" name="email" placeholder="Votre adresse e-mail">
					<input type="text" name="email" placeholder="Votre mot de passe">
					<input type="button" onclick="javascript:SubmitIt()" name="submit1" value="Inscrivez-vous !">
				</form>
			</div>
			<div id="boxthree">
				<div>Nouveau ? <a href="#">Inscrivez-vous</a><br>Mot de passe perdu ? <a href="#">Cliquez-ici</a></div>
			</div>
		</div>
	</div>

</body>
</html>
