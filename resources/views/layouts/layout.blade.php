<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Bootstrap -->
        <link href="/resources/assets/css/bootstrap.min.css" rel="stylesheet">
        <script src="/resources/assets/js/bootstrap.min.js"></script>

    </head>
    <body>

        <nav class="navbar navbar-default">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">My Laravel Blog</a>
                </div>

                <div class="nav navbar-nav navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>

                    <ul class="nan navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="/" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Action action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated Link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        {{--@yield('about')--}}
    </body>
</html>