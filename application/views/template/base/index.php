
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="<?= base_url("node_modules/bootstrap/dist/css/bootstrap.css")?>">
        <link rel="stylesheet" href="<?= base_url("assets/css/styles.css")?>">
    <title>In a Bottle</title>
</head>
<body>
    <header>
        

<?php $this->load->view("template/base/nav"); ?>

    </header>

<div class="container">

<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    
</div>

<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
    
<?= $view_content ?>
</div>


</div>
 <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCG9JH8LGpGuXa9Men4FjD06AKx7B94_7A&callback=myMap">
    </script>
<script src="<?= base_url("assets/js/app.js")?>"></script>
</body>
</html>