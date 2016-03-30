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
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="../css/index.css">

        <title>Hello World</title>
    </head>
    <body>

    
        
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
                                
                                <input class="form-control text_field" name="fullname" placeholder="Full Name"
                                required title="Enter full name"></input>
                                <input type="text" class="form-control text_field" 
                                id="username" name="username" placeholder="Email" required title="Enter Valid Email"
                                ></input>
                                
                                <input type="password" class="form-control text_field" id="password" name="password" placeholder="Password"
                                required title="Enter Password"></input>

                                <input type="password" class="form-control text_field" id="repass" name="repass" placeholder="Re-type Password"
                                required title="Enter Password"></input>

                                <input class="form-control text_field" name="city" placeholder="City" required title="Enter city"></input>

                                <input class="form-control text_field" name="country" placeholder="Country" 
                                required title="Enter country"></input>

                                
                                <br /><br />
                                <button id="signup" name="signup" type="submit" class="btn btn-lg btn_login" 
                                style="">
                                    Create account
                                </button>
                                
                                <div class="heading"><h3 class="new_user">Already have an account</h3></div>
                                

                                <button id="login" name="login" class="btn btn-lg btn_sign_up">Login</button>
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
