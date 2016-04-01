<?php
    session_start();
?>

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
        
        <?php 
            include_once('header.php'); 
        ?>

        <div class="container main_container">
            <div class="row">
                <div class="col-sm-3 col-xs-1 col-md-3 col-lg-3"></div>
                <div class="col-sm-6 col-xs-10 col-md-6 col-lg-6">
                    <div class="welcome_note">
                        Welcome to TODO App
                    </div>
                    <div class="login_form">
                        <form method="post" action="script.php">
                    
                            
                            <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                                
                                <input class="form-control text_field" name="fullname" placeholder="Full Name"
                                required title="Enter full name"></input>

                                <input type="text" class="form-control text_field" id="username" 
                                name="username" placeholder="Email" required title="Enter Valid Email"></input>
                                
                                <input type="password" class="form-control text_field" 
                                id="password" name="password" placeholder="Password"
                                required title="Enter Password"></input>

                                <input type="password" class="form-control text_field" 
                                id="repass" name="repass" placeholder="Re-type Password"
                                required title="Enter Password"></input>

                                <input class="form-control text_field" name="city" 
                                placeholder="City" required title="Enter city"></input>

                                <input class="form-control text_field" name="country" 
                                placeholder="Country" required title="Enter country"></input>

                                <div class="success"
                                    style="color: black; text-align: left; margin-top: 10px;">
                                    <?php 

                                        if( isset($_SESSION['status']) )
                                        { 
                                            echo $_SESSION['status'];
                                        }
                                    ?>
                                </div>
                                
                                <br /><br />
                                <button id="signup" name="signup" onclick="validate()" type="submit" class="btn btn-lg btn_login" 
                                style="">
                                    Create account
                                </button>
                                
                            </div>
                        </form>
                                
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="heading"><h3 class="new_user">Already have an account</h3></div>
                                <center>
                                    <a href="index.php">
                                        <button id="login" name="login" class="btn btn-lg btn_sign_up">Login</button>
                                    </a>
                                </center>
                            </div>
                        </div>
                        </div>

                </div>
                <div class="col-sm-3 col-xs-1 col-md-3 col-lg-3"></div>
            </div>
        </div>


    </div>

    <script type="text/javascript">
        function validate() {
            var pass = document.getElementById('password').value;
            var repass = document.getElementById('repass').value;
            alert(pass);

            if(pass != repass)
            {
                alert("Both passwords should be same.");
            }
        }
    </script>

        
    </body>
</html>
