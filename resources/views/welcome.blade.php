<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Geeko</title>

        <!-- Fonts -->
        @include('layouts.bootstrap')
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                //background-color: #fff;
                //background-image: url('storage/images/bluebook.jpg');
                //color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            #backgroundImage
            {
                background-image: url('storage/images/book.jpg');
                background-attachment: fixed;
                background-size: cover;
                background-repeat: no-repeat;
                height: 90%;
                width: 100%;
                opacity: 0.9;
                margin-bottom: 3%;
            }

            .full-height {
                height: 95vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                color:#ffffff;
            }

            a:hover{
                background-color: yellow;
            }

            #dashboard
            {
                //padding-left: 30%;
            }

            /*.links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }*/

            .m-b-lg {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

    <div class="container-fluid">
    <div class="row">

        <div class="container-fluid" id="backgroundImage">
            <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @if (Auth::check())
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ url('/login') }}" class="btn btn-danger btn-md">Login</a>
                            <a href="{{ url('/register') }}" class="btn btn-danger btn-md">Register</a>
                        @endif
                    </div>
                @endif

                <div class="content">
                    <div class="title m-b-lg">
                        Geeko
                    </div>

                    <!--<div class="links">
                        <a href="https://laravel.com/docs">Documentation</a>
                        <a href="https://laracasts.com">Laracasts</a>
                        <a href="https://laravel-news.com">News</a>
                        <a href="https://forge.laravel.com">Forge</a>
                        <a href="https://github.com/laravel/laravel">GitHub</a>
                    </div>-->
                </div>
            </div>
        </div>

        <div class="container centerButtons" style="margin-bottom: 5%;">
        <h2 style="padding-bottom: 3%;">Now, Monitor Your Growth</h2>
            <div class="row" style="padding-bottom: 3%;">
                <div class="col-md-4">
                    <div class="card">
                        <div class="container-fluid">
                            <i class="fa fa-tasks fa-4x" aria-hidden="true" style="color: #95e248;"></i>
                            <h3>Timeline</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="container-fluid">
                          <i class="fa fa-calendar fa-5x" aria-hidden="true" style="color: #ed8f4b;"></i>
                            <h3>Schedule</h3>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card">
                        <div class="container-fluid">
                            <i class="fa fa-exclamation-circle fa-4x" aria-hidden="true" style="color: #dd3533;"></i>
                            <h3>Error Analysis</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="container-fluid">
                            <i class="fa fa-file-text fa-4x" aria-hidden="true" style="color: #1fa67a;"></i>
                            <h3>Report</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="container-fluid">
                            <i class="fa fa-comments fa-5x" aria-hidden="true" style="color: #ce488b;"></i>
                            <h3>Topic Wise Analysis</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="container-fluid">
                            <i class="fa fa-certificate fa-4x" aria-hidden="true" style="color: #45a4d1;"></i>
                            <h3>Results</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dashboard Section-->
        <div class="container centerButtons" style="background-color: #fff;margin-bottom: 5%;">
            <h1 style="padding-bottom: 3%;">Manage Your Dashboard</h1>

            <div class="col-md-4">
                <div class="container-fluid" id="dashboard">
                    <i class="fa fa-pie-chart" aria-hidden="true" style="color: #ad5c58;font-size: 150px;"></i>
                    <h3>Attendance</h3>
                </div>
            </div>

            <div class="col-md-4">
                <div class="container-fluid" id="dashboard">
                    <i class="fa fa-braille" aria-hidden="true" style="color: #5263a5;font-size: 150px;"></i>
                    <h3>News Feed</h3>
                </div>
            </div>

            <div class="col-md-4">
                <div class="container-fluid" id="dashboard">
                    <i class="fa fa-line-chart" aria-hidden="true" style="color: #52a595;font-size: 150px;"></i>
                    <h3>Strength</h3>
                </div>
            </div>
        </div>

        <!-- Contact Us Section -->
        <div class="container-fluid " style="background-color: #e25d70;">
            <h1 style="padding-bottom: 2%;color: #fff;">Get In Touch!</h1>
            <div class="col-md-6">
                <div class="panel panel-danger">
                <div class="panel-heading"><h4>Contact Us</h4></div>
                <div class="panel-body">
                <form class="form-horizontal" method="post">
                    
                    <div class="form-group">
                        <label class="col-md-2 control-label">Name</label>
                        <div class="col-md-10">
                            <input type="text" name="name" placeholder="Enter Name" class="form-control" required> 
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-2 control-label">Email</label>
                        <div class="col-md-10">
                            <input type="email" name="email" placeholder="Enter Email" class="form-control" required>    
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Message</label>
                        <div class="col-md-10">
                            <textarea name="message" placeholder="Enter Message" class="form-control" rows="5" required></textarea>    
                        </div>
                    </div>

                    <div class="col-md-10 col-md-offset-2">
                       <input type="submit" class="btn btn-danger btn-block">    
                    </div>

                </form>
                </div>
                </div>
            </div>

            <div class="col-md-6 centerButtons" style="background-color: #ffffff;padding: 5%;"> 
                <h2 style="padding-bottom: 3%;">Follow Us</h2>
                    <div class="col-md-4">
                        <i class="fa fa-facebook-official fa-3x" aria-hidden="true" style="color: #4267b2;"></i>
                    </div>
                  
                    <div class="col-md-4">
                        <i class="fa fa-linkedin-square fa-3x" aria-hidden="true" style="color: #0077B5;"></i>
                    </div>
                  
                    <div class="col-md-4">
                        <i class="fa fa-twitter fa-3x" aria-hidden="true" style="color: #1da1f2;"></i>
                    </div>       
            </div>     
        </div>

        <div class="container-fluid" style="background-color:#e25d70;">
            <h4 style="color: #000000;">All Rights Reserved 2017 &copy; Geeko Pvt Ltd.</h4>
        </div>

    </div>
    </div>
    </body>

    <script>
      jQuery(window).scroll(function(){
          var vscroll=jQuery(this).scrollTop();
          jQuery('#logotext').css({
          "transform" : "translate(0px, "+vscroll/2+ "px)"
          });
      });
    </script>

</html>
