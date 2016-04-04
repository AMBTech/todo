<?php
    session_start();

    if(isset($_SESSION['username']))
    {
        header("Location: home.php");
        exit();
    }
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

        <title>Todo Application</title>
    </head>
    <body onload="onLoad()">

    
        
    <div class="app">
        
        <?php include_once('sidebar.php'); ?>

        <div class="container main_container">
            <div class="row">
                <div class="col-sm-1 col-xs-0 col-md-2 col-lg-3"></div>
                <div class="col-sm-10 col-xs-12 col-md-8 col-lg-6">
                    <div class="welcome_note">
                        Welcome to TODO App
                    </div>
                    <div class="login_form">
                        <form method="post" action="scripts/login.php">
                        
                            <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                                <div class="input-group details" style="">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-user"></span>
                                    </span>
                                    <input type="text"  
                                    class="form-control text_field" 
                                    id="username" name="username" placeholder="Username Or Email" required></input>
                                </div>
                                <div class="input-group details" style="">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-lock"></span>
                                    </span>
                                    <span class="hilight_area">
                                    </span>
                                        <input type="password" class="form-control text_field" 
                                        id="password" name="password" placeholder="Password" 
                                        required title="Enter Password"></input>
                                </div>

                                <div class="invalid" name="invalid" 
                                    style="color: red;"><?php if(isset($_SESSION['invalid_username'])) echo $_SESSION['invalid_username'];?>
                                </div>

                                <input type="checkbox" id="rem" class="rem" style="margin-top: 20px;">Remember password</input>
                                <br /><br />
                                <button id="login" name="login" type="submit" class="btn btn-lg btn_login">
                                    Sign In
                                </button>
                                <div class="forget" style="margin-top: 30px; font-weight: bold;">
                                    <p>
                                        <a href="forget_pass.php">
                                            Forgot Your Password?
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </form>
                        <center>
                            <div class="heading"><h3 class="login_user">New User</h3></div>
                            <a href="signup.php">
                                <button id="new_user" class="btn btn-lg btn_sign_up ">
                                    Create your account
                                </button>
                            </a>
                        </center>
                        </div>
                        
                        

                </div>
                <div class="col-sm-1 col-xs-0 col-md-2 col-lg-3"></div>
            </div>
        </div>


    </div>

    <script type="text/javascript">
        function onLoad() {
            <?php
                $_SESSION = array();
                session_unset();
                session_destroy();
            ?>
        }
    </script>


    </body>
</html>
