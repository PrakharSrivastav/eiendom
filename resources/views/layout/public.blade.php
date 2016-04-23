<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{url('css/app.css')}}">
        @yield('css')
        <!--page title-->
        <title>Eiendom | {{$title}}</title>
    </head>
    <body>
        <div class="container-fluid no-padding">
            <nav class="navbar navbar-fixed-top navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Company Name</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a class="menu-item" href="#om_oss">Om Oss</a></li>
                            <li><a class="menu-item" href="#kontakt_oss">Kontact Oss</a></li>
                            <li><a class="menu-item" href="#ansatte">Ansatte</a></li>
                            <li><a class="menu-item" href="#verdier">Verdier</a></li>
                            <li><a class="menu-item" href="#fakturaaddresser">Fakturaadresser</a></li>
                            <li><a class="menu-item" href="#referanser">Referanser</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
        <div class="container">
            @yield('content')
        </div>
        <footer class="containter-fluid" style="background:#122b40">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="text-center text-white">Links</div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="text-center text-white">Social Media</div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="text-center text-white">Contact Details</div>
                </div>
            </div>
        </footer>
        <!-- jQuery first, then Bootstrap JS. -->
        <script src="{{url('js/jquery.min.js')}}"></script>
        <script src="{{url('js/bootstrap.min.js')}}" ></script>
        <script src="{{url('js/app.js')}}" ></script>
        @yield('javascript')
    </body>
</html>
