<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="">Logo</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="">Home <span class="sr-only">(current)</span></a></li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container">
    <div class="col-md-3">
        <?php echo validation_errors(); ?>
        <?php echo $this->session->flashdata('regfailed') ?>
        <form class="form-signup" action="<?php echo base_url('home/signup'); ?>" method="POST">
            <h2 class="form-signup-heading">Sign Up</h2>                    
            <input type="text" name="fname" class="form-control" placeholder="Enter First Name"  autofocus><br>
            <input type="text" name="lname" class="form-control" placeholder="Enter Last Name"  autofocus><br>
            <input type="text" name="uname" class="form-control" placeholder="Enter Username"  autofocus><br>
            <input type="password" name="password" class="form-control" placeholder="Password" ><br>
            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" ><br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
        </form>   
        <center><strong>Not Registered?</strong><br>
        <a href="<?php echo base_url('home'); ?>">Sign In</a></center>
    </div>
</div>
</body>
</html>
