
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'> 
  	<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> 
        <link rel="stylesheet" href="<?= base_url("node_modules/bootstrap/dist/css/bootstrap.css")?>">
        <link rel="stylesheet" href="<?= base_url("assets/css/css_map.css")?>">
        <link rel="stylesheet" href="<?= base_url("assets/css/navcss.css")?>">
        <link rel="stylesheet" href="<?= base_url("assets/css/navleft.css")?>">
    <title>In a Bottle</title>
</head>
<body>
    <div>

    <header>
        
<?php $this->load->view("template/base/nav"); ?>


    </header>

</div>
    <?php $this->load->view("template/base/navleft"); ?>

<div class="container">

    
<?= $view_content ?>


</div>
 <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCG9JH8LGpGuXa9Men4FjD06AKx7B94_7A&callback=myMap">
    </script>
<script src="<?= base_url("assets/traffic_accidents.json")?>"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<script src="<?= base_url("assets/js/app.js")?>"></script>
<script src="<?= base_url("assets/js/markerclusterer.js")?>"></script>
<script src="<?= base_url("node_modules/jquery/dist/jquery.js")?>"></script>
</body>
</html>

