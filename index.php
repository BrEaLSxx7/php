<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="node_modules/mdbootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="node_modules/mdbootstrap/css/mdb.min.css" rel="stylesheet" type="text/css"/>
    <link href="node_modules/mdbootstrap/css/style.css" rel="stylesheet" type="text/css"/>
    <title></title>
  </head>
  <body>
    <div class="col-6 mx-auto my-5">
      <form>
        <p class="h5 text-center mb-4">Sign in</p>

        <div class="md-form">
          <i class="fa fa-envelope prefix grey-text"></i>
          <input type="text" id="defaultForm-email" name="email" class="form-control">
          <label for="defaultForm-email">Your email</label>
        </div>

        <div class="md-form">
          <i class="fa fa-lock prefix grey-text"></i>
          <input type="password" id="defaultForm-pass" name="contrasena" class="form-control">
          <label for="defaultForm-pass">Your password</label>
        </div>

        <div class="text-center">
          <button type="button" class="btn btn-default" id="iniciar">Login</button>
        </div>
      </form>
    </div>
    <div class="col-xl-6 col-sm-12 col-md-4 col-lg-4" id="mensaje">
      
    </div>

    <?php
    // put your code here
    ?>
  </body>
  <!-- <script src="node_modules/jquery/dist/jquery.min.js" type="text/javascript"></script> -->
  <script src="node_modules/mdbootstrap/js/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="node_modules/mdbootstrap/js/popper.min.js" type="text/javascript"></script>
  <script src="node_modules/mdbootstrap/js/mdb.min.js" type="text/javascript"></script>
  <script src="node_modules/mdbootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="node_modules/mdbootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="node_modules/angular/angular.min.js" type="text/javascript"></script>
  <script src="js/login.js" type="text/javascript"></script>
</html>
