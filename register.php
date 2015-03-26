<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dream Day</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="CSS/custom.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome-4.3.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="CSS/colors.css" />
</head>
<body id="page-top">

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#page-top">Dream Day</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="home.php">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="404.php">About</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up/Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<header>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="glyphicon glyphicon-lock"></span> Login</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">
                                    Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">
                                    Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"/>
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group last">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-success btn-sm">
                                        Sign in</button>
                                    <button type="reset" class="btn btn-default btn-sm">
                                        Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="panel-footer">

                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="glyphicon glyphicon-user"></span> Register</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">
                                    First Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputFirst" placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">
                                    Last Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputLast" placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">
                                    Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">
                                    Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="inputPassword1" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">

                                </div>
                            </div>
                            <div class="form-group last">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-success btn-sm">
                                        Sign Up</button>
                                    <button type="reset" class="btn btn-default btn-sm">
                                        Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="panel-footer">
                    </div>
                </div>
            </div>
        </div>
</header>

<div class="container">
    <hr>
    <div class="text-center center-block">
        <p class="txt-railway">Dream Day</p>
        <br />
        <a href="#"><i id="social" class="fa fa-facebook-square fa-3x social-fb logo-color"></i></a>
        <a href="#"><i id="social" class="fa fa-twitter-square fa-3x social-tw logo-color"></i></a>
        <a href="#"><i id="social" class="fa fa-google-plus-square fa-3x social-gp logo-color"></i></a>
        <a href="mailto:dreamdaydev@gmail.com"><i id="social" class="fa fa-envelope-square fa-3x social-em logo-color"></i></a>
    </div>
    <hr>
</div>

<script src="JavaScript/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
