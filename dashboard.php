<!DOCTYPE html>
<?php 

include ("index.php");


echo $num_comments;
?>
<html>
<head>
   <link rel="stylesheet" href="style.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<meta charset="UTF-8">
<title>Reddit Stats</title>
</head>

<body>
<nav class="navbar navbar-default" role="navigation">
  <div class="navbar-header">
    <a href="#" type="button" class="btn btn-default navbar-btn">
      <span class="glyphicon glyphicon-home"></span>Home
    </a>
    
    <a href="#" type="button" class="btn btn-default navbar-btn pull-right">
      <span class="glyphicon glyphicon-shopping-cart"></span>Logout
    </a>
  </div>
</nav>
<div class="container">
    <div class="row">
      <div class="col-xs-6 col-sm-4 header_info"><p class = "glyphicon glyphicon-comment">.</p>
      <?php echo $num_comments;?>
      </div>
  <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
  <!-- Optional: clear the XS cols if their content doesn't match in height -->
  <div class="clearfix visible-xs-block"></div>
  <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
</div>
</div>

    
</body>

</html>