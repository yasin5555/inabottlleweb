<!Doctype html>
<html>
<head>
	<title># in a bottle</title>
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url("node_modules/bootstrap/dist/css/bootstrap.css")?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login.css'); ?>">
    
</head>
<body>
	<div id="bottle">
		<div id="boxcenter">
			<div id="boxone">
				<div>
				<a href="<?= base_url("map")?>">
				<img src="http://img4.hostingpics.net/pics/249732inabotlltlemin.png">
				</a>
					<p>Connectez-vous à votre compte</p>
				</div>
			</div>
			<div id="boxtwo">

<?php echo validation_errors(); ?>
<?= form_open('login'); ?>
<?php

$data_email = array(
        'name'  => 'email',
        'Class'   => 'form-control',
        'value' => set_value("email"),
		'placeholder' => "Your e-mail"
);

$data_password = array(
        'name'  => 'password',
        'Class'   => 'form-control',
        'value' => set_value("password"),
		'placeholder' => "Your e-mail"
);
?>

<h5>Password</h5>
<?= form_input($data_password); ?>

<h5>Email Address</h5>
<?= form_input($data_email); ?>

<?= form_close() ?>

			</div>
			<div id="boxthree">
				<div>New ? <?php echo form_submit('mysubmit', 'Register now!', array('class' => 'btn btn-primary')); ?><br>Mot de passe perdu ? <a href="#">Cliquez-ici</a></div>
			</div>
		</div>
	</div>

</body>
</html>
