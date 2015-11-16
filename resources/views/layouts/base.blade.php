<!DOCTYPE html>
<!--
@author : Chathura Widanage
@email  : chathurawidanage@gmail.com
-->
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    @yield('style')
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" data-aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img src="img/logo.png" alt="carebear" height="35">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Services </a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-role="button" aria-haspopup="true"
                       aria-expanded="false">More <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-role="button" aria-haspopup="true"
                       aria-expanded="false">Login <span class="caret"></span></a>
                    <ul class="dropdown-menu login_panel">
                        <li>
                            <form class="form form-horizontal">
                                <div class="form-group-sm">
                                    <input class="form-control" placeholder="username">
                                </div>
                                <div class="form-group-sm">
                                    <input type="password" class="form-control" placeholder="password">
                                </div>
                                <div class="form-group-sm">
                                    <input type="submit" class="form-control btn btn-primary" value="login">
                                </div>
                            </form>
                        </li>

                    </ul>
                </li>

                <li><a href="#">Signup</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
@yield('body')

<div class="container-fluid footer_wrapper">
    <div class="container">
        <div class="col-xs-12 col-sm-4">
            <h4 class="footer_title">Contact Us</h4>

            <p>carebare@gmail.com</p>

            <p>Tel : 408-242-xxx</p>
        </div>
        <div class="col-xs-12 col-sm-4">
            <h4 class="footer_title">Address</h4>

            <p>Oak Way<br>Mitapitas, CA 95035</p>
        </div>
        <div class="col-xs-12 col-sm-4">
            <h4 class="footer_title">Signup Today!</h4>
        </div>
    </div>

    <div class="container footer_copyright font_thin text-right">
        <p>&copy; 2013 by CareBear Inc. | Prodly connecting parents with loving and safe caregivers</p>
    </div>
</div>

@section('scripts')
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="bootstrap/javascripts/bootstrap.js"></script>
@show


</body>
</html>