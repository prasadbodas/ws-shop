<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo URL; ?>images/favicon.ico">

    <title><?php echo $this->title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo URL; ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo URL; ?>css/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
        <section class="">
            <form class="form form-signin" method="post">
                <h2 class="form-signin-heading">Please sign in</h2>
                <div class="form-group">
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" autofocus>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" >
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="remember" value="remember-me"> Remember me
                  </label>
                </div>
                <button class="btn btn-primary btn-block" name="login" type="submit">Sign in</button>
              </form>
        </section>
    </div> <!-- /container -->


  </body>
</html>
