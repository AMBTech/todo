<!DOCTYPE html>
<!--
    Licensed to the Apache Software Foundation (ASF) under one
    or more contributor license agreements.  See the NOTICE file
    distributed with this work for additional information
    regarding copyright ownership.  The ASF licenses this file
    to you under the Apache License, Version 2.0 (the
    "License"); you may not use this file except in compliance
    with the License.  You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing,
    software distributed under the License is distributed on an
    "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
     KIND, either express or implied.  See the License for the
    specific language governing permissions and limitations
    under the License.
-->
<html>
    <head>
        <!--
        Customize this policy to fit your own app's needs. For more guidance, see:
            https://github.com/apache/cordova-plugin-whitelist/blob/master/README.md#content-security-policy
        Some notes:
            * gap: is required only on iOS (when using UIWebView) and is needed for JS->native communication
            * https://ssl.gstatic.com is required only on Android and is needed for TalkBack to function properly
            * Disables use of inline scripts in order to mitigate risk of XSS vulnerabilities. To change this:
                * Enable inline JS: add 'unsafe-inline' to default-src
        -->
        <meta http-equiv="Content-Security-Policy" content="default-src 'self' data: gap: https://ssl.gstatic.com 'unsafe-eval'; style-src 'self' 'unsafe-inline'; media-src *">
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="initial-scale=1, minimum-scale=1, width=device-width">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="css/index.css">

        <title>Hello World</title>
    </head>
    <body style="background-color: #F9F9F9;">

    
        
    <div class="app">
        <div class="navbar navbar-inverse navbar-static-top">
            <div class="container">

                <div class="navbar-header">
                    <a href="/" class="navbar-brand">Brand Name Site</a>
                    
                    <button class="navbar-toggle" id="navBtn" data-toggle="collapse" data-target="#navHeaderCollapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                

                <div class="collapse navbar-collapse navHeaderCollapse" id="navHeaderCollapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a data-toggle="collapse" href="#">Home</a></li>
                        <li><a data-toggle="collapse" href="#">About</a></li>
                        <li><a data-toggle="collapse" href="#">Social Media</a></li>
                        <!-- <li><a href="#"><span class="glyphicon glyphicon-home"></span> Home </a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-book"></span> About </a></li> -->
                    </ul>
                </div>


            </div>
        </div>

        <div class="container main_container">
            <div class="row">
                <div class="col-sm-3 col-xs-1 col-md-3 col-lg-3"></div>
                <div class="col-sm-6 col-xs-10 col-md-6 col-lg-6">
                    <div class="welcome_note">
                        Welcome to TODO App
                    </div>
                    <form method="post">
                    
                        <div class="login_form">
                            
                            <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                                <div class="input-group details" style="">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-user"></span>
                                    </span>
                                    <input type="text"  
                                    class="form-control text_field" 
                                    id="email" placeholder="Username Or Email" required title="Enter Valid Email"></input>
                                </div>
                                <div class="input-group details" style="">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-lock"></span>
                                    </span>
                                    <span class="hilight_area">
                                    </span>
                                        <input type="password"  
                                        class="form-control text_field" id="password" placeholder="Password"
                                        required title="Enter Password"></input>
                                </div>

                                <input type="checkbox" id="rem" class="rem" style="margin-top: 20px;">Remember password</input>
                                <br /><br />
                                <button id="login" type="submit" class="btn btn-lg btn_login" 
                                style="">
                                    Sign In
                                </button>
                                <div class="heading"><h3 class="new_user">New Customer</h3></div>

                                <button id="new_user" class="btn btn-lg btn_sign_up">Create your account</button>
                            </div>
                                
                        </div>

                    </form>
                </div>
                <div class="col-sm-3 col-xs-1 col-md-3 col-lg-3"></div>
            </div>
        </div>


    </div>

        <script type="text/javascript" src="cordova.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script> -->
        <script type="text/javascript" src="http://twitter.github.io/bootstrap/assets/js/bootstrap-transition.js"></script>
        <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </body>
</html>
