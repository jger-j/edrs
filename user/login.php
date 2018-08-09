<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EDRS - LOGIN</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="../assets/favicon_16.ico"/>
    <link rel="bookmark" href="../assets/favicon_16.ico"/>
    <!-- site css -->
    <link rel="stylesheet" href="../assets/bootflat/dist/css/site.min.css">
    
    <script type="text/javascript" src="../assets/bootflat/dist/js/site.min.js"></script>
    <style>
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #303641;
        color: #C1C3C6
      }
    </style>
  </head>
  <body>
    <div class="container">
        <form class="form-signin" role="form" action="actions/auth_action.php" method="POST">
        <h3 class="form-signin-heading">Please sign in</h3>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="glyphicon glyphicon-user"></i>
            </div>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off" />
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class=" glyphicon glyphicon-lock "></i>
            </div>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" />
          </div>
        </div>

        <label class="checkbox">
          <input type="checkbox" value="remember-me"> &nbsp Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit" onclick="">Sign in</button>
      </form>

    </div>
    <div class="clearfix"></div>
    <br><br>
    <!--footer-->
    <div class="site-footer login-footer">
      <div class="container">
        <div class="copyright clearfix text-center">
            <p><b>EDRS</b></p> <p>Electronic Device Repair Shop  </p>
        </div>
      </div>
    </div>
  </body>
</html>
