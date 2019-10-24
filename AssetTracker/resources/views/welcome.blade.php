<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <title>{{config('app.name','TrackYourAssets')}}</title>
        <!-- Jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
        $(document).ready(function() {
        $(window).scroll(function() {
            if ($(document).scrollTop() > 270) {
            $("#myid").addClass("myitem2");
            $("#myid").removeClass("myitem");
            } else {
            $("#myid").addClass("myitem");
            $("#myid").removeClass("myitem2");
            }
        });
        });
        </script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                color: #fff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                margin: 0;
                background-repeat: no-repeat;
                background-size: 1920px 1080px;
                background-attachment: fixed;
            }

            .title {
                font-size: 84px;
            }

            .card{
                position: relative;
                width:100%;
                height: 100%;
                transition: all 0.8s linear;
                transform-style: preserve-3d;
                border-radius: 45px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom:0%;
            }

            .front, .back {
                position: absolute;
                width: 100%;
                height: 100%;
                backface-visibility: hidden;
            }

            .front{
                z-index: 2;
                transform: rotateY(0deg);
                box-shadow: 5px 5px 5px #555;
            }

            .container:hover .card{
                transform: rotateY(180deg);
                box-shadow: -5px 5px 5px #555;
            }

            .back {
                display: block;
                transform: rotateY(-180deg);
                box-sizing: border-box;
                padding: 10px;
                color: white;
                text-align: center;
                background-color: rgba(52, 165, 217,0.8);
                backface-visibility: hidden;
                transform: rotateY(180deg);
                text-align: center;
                line-height: 31px;
                font-family: 'Titillium Web', sans-serif;
            }
        
            .container{
                margin: 100px auto;
                width: 350px;
                height: 300px;
                perspective: 1000px;
                background-color: transparent;
            }
            img{
                height:600px;
            }
            @media only screen and (min-width: 1500px){
            .vl{
                border-left: 3px solid darkgray;
                height: 500px;
                margin-left: 9%;
                margin-top: 2.5%;
            }
            .mainheading{
                margin-left: 6%; 
                text-align:center;
                font-size: 90px;
                margin-top: 12%;
                -webkit-transition: font-size 1s;
                -webkit-transition: margin-top 1s;
            }
            img
            {
                margin-left: 10%;
            }
            .imageparent{
                width:auto;
                align-content: center;
                align-items: center;
            }
            }
            @media only screen and (max-width: 1500px){
                .mainheading{
                margin-left: 0%; 
                text-align:center;
                font-size: 60px;
                margin-top: 0%;
                width: 100%;
                -webkit-transition: font-size 1s;
                -webkit-transition: margin-top 1s;
            } 
            .imageparent{
               width: 100%;
               align-self: center!important;
               align-content: center!important;
               align-items: center!important;
            }
            img
            {
                align-self: center!important;
                text-align: center!important;
                margin-left: auto;
                margin-right: auto;
                display: block;

            }
            }

            #secondpart{
                margin-top: 5%;
            }

            .row{
                background-color: transparent;
            }

            .nav-item{
                margin-right: 20%;
            }

            .nav-link{
                color:black;
                height:30px;
            }
            .myitem{
                font-size: 0px;
                width:0px;
                transition:all 0.2s ease-in;
               
            }
            .myitem2{
                padding-top: 0%!important;
                font-size: 25px;
                width:155px;
                vertical-align: -webkit-baseline-middle;
                transition:all 0.2s ease-in;
                padding-bottom: 10px;
                
            }
        </style>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body background="/images/download.jfif">
        <nav class="navbar navbar-expand-sm fixed-top" style="background-color: rgba(52, 165, 217,1)">  
            <div class="container-fluid">
            <button class="navbar-toggler hidden-md-up pull-right" type="button" data-toggle="expand" data-target="#navbar2"> ☰ </button>
                    

                            <a id ="myid" class="nav-item myitem" style="padding:0%; color:black; margin-right:5%" href="/">TrackYourAssets</a>
                <div class="collapse navbar-expand-sm navbar-collapse justify-content-between" id="navbar2">
                        <div class="navbar-nav">
                @if(Route::has('login'))
                    @auth
                        <a class="nav-item nav-link" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="nav-item nav-link" href="{{ url('login') }}">Login</a>
                            @if(Route::has('register'))
                                <a class="nav-item nav-link" href="{{ url('register') }}">Register</a>
                            @endif
                    @endauth
                @endif
                    <a class="nav-item nav-link" href="#about">About</a>

                    <a class="nav-item nav-link" href="#contact">Contact</a>
                    </div>
                @auth
                <div class="navbar-nav">
                        <a class="nav-item nav-link" href="\logout">LogOut</a>
                </div> 
                @endauth
                </div>
            </div>
        </nav>
              
        <div class="row" style="margin-top:8%;width:100%">
            <h1 class = "mainheading" >TrackYourAssets</h1>
            <div class="vl"></div>
            <div class = "imageparent">
                <img src="images/landing.png" alt="photo" class="img-responsive">  
            </div>  
        </div>
        <div id="about">
            <div class="row" style="margin-top: 3%">
                <div class="container col-lg-5">
                    <div class="card card-block d-flex">
                        <div class="front face">
                            <div class="card-body align-items-center d-flex justify-content-center">
                                <img src="/images/download.png" alt="photo" style="height:150px;margin-top:6%;">
                                <h1 style="margin-top:6%">One stop to manage your assets</h1>
                            </div>
                        </div>
                        <div class="back face">
                            <br><br><br><br>
                            <h3>With systematic information of the assets possessed</h3>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="container col-lg-5 col-lg-offset-0">
                    <div class="card card-block d-flex">
                        <div class="front face">
                            <div class="card-body align-items-center d-flex justify-content-center">
                                <img src="/images/manageyourassets.png" alt="photo" style="height: 150px;margin-top:6%">
                                <h1 style="margin-left: 6%;margin-top: 7%">Keep track of the assets given</h1>
                            </div>
                        </div>
                        <div class="back face">
                            <br><br><br><br>
                            <h3>With this efficient tracking system</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 0%">
                <div class="container col-lg-5 col-lg-offset-0">
                    <div class="card card-block d-flex">
                        <div class="front face">
                            <div class="card-body align-items-center d-flex justify-content-center">
                                <img src="/images/inventory.png" alt="photo" style="height: 200px;margin-top: 4%">  
                                <h1 style="margin-top: 6%">Real-time Inventory Check</h1>
                            </div>
                        </div>
                        <div class="back face">
                            <br><br><br>
                            <h3>Get an up-to-date status of the inventory</h3>
                        </div>
                    </div>
                </div>
                <div class="container col-lg-5 col-lg-offset-0">
                        <div class="card card-block d-flex">
                            <div class="front face">
                                <div class="card-body align-items-center d-flex justify-content-center">
                                    <img src="/images/time.png" alt="photo" style="height: 200px">  
                                    <h2>Easy way to obtain assets</h2>
                                </div>
                            </div>
                            <div class="back face">
                                <br><br><br><br>
                                <h3>This saves time!</h3>
                            </div>
                        </div>
                    </div>
            </div>
            <div class = "col-lg-12" id="contact">
                <div style="background-color:#191919; width:100%; height:200px">
                    <div style="-ms-flex-align: center;
                    align-items: center;
                    display: -ms-flexbox;
                    display: flex;
                    -ms-flex-pack: center;
                    justify-content: center;
                    font-size: 40px;
                    color:white;">
                        TrackYourAssets
                    </div>
                    <div style="display: block;
                    margin-top: 15px;
                    padding-left: 20px;
                    padding-right: 20px;
                    text-align: center;">

                </div>

                <div style="color:white;text-align:center;font-size:14px;">Copyright © 2019. All Rights Reserved.</div> 
            </div>
        </div>
    </body>
</html>
