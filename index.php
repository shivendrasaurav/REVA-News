<?php

?>

<html>
    <head>
        <title>REVA News Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://fluentdesignforweb.github.io/fluent.js"></script>
        <link href="https://fluentdesignforweb.github.io/fluent.css" type="text/css" rel="stylesheet">
        <link href="https://fluentdesignforweb.github.io/Icons/css/fluent-icons.css" type="text/css" rel="stylesheet">
        <link href="customstyles.css" type="text/css" rel="stylesheet">
        <style>
            .thumb{
                width: 100%;
                height: 100dp;
            }
        </style>
        <script>
            function openside1(){
                document.getElementById("nav").style.display="Block";
                document.getElementById("content").style.filter="saturate(125%) blur(10px)";
            }
            function closeside1(){
                document.getElementById("nav").style.display="None";
                document.getElementById("content").style.filter="blur(0px)";
            }            
        </script>
    </head>
    <body>

    <div id="content">
            <div class="primary_inverted column large10 medium10 small12 center zi2">

                <a class="pivot_button" style="font-size: 28px;" href="index.php">
                    <img src="logo_reva.png" style="width: 40px; height: 40px; margin: -10px; margin-left: 5px;"/>
                    <!--&nbsp;&nbsp;&nbsp;&nbsp;REVA NEWS-->
                </a>
                <button class="pivot_button right" onclick="openside1();">
                    <i class="ms-Icon ms-Icon--GlobalNavButton" aria-hidden="true" style="font-size: 16px;"></i>
                </button>

                </div>
                <div class="fsbg center column large10 medium10 small12 parallax" id="home">

                    <div class="iam" style="margin-top: 100px; color: #FFF;">
                        <h1 class="anim1">REVA NEWS</h1>
                        <h3 class="anim2">Expanding New Horizons</h3>
                    </div>
                </div>
                <div class="column large10 medium10 small12 center">
                    <h5>Latest Articles</h5>
                    <br><br>

                    <p style='display: none'>After This</p> 

                </div>
                <br><br>
                <div class='primary_inverted column large10 medium10 small12 center'>
                    
                    <br>
                    <div class='column large6 medium6 small12'>
                        <a href='https://reva.edu.in/' style='color: #FFF'>REVA University</a><br>
                        <a href='https://race.reva.edu.in/' style='color: #FFF'>REVA Academy for Corporate Excellence</a><br>
                    </div>
                                
                    <div class='column large6 medium6 small12'>
                        <a href='aboutus.html' style='color: #FFF'>About REVA News</a><br>
                        <a href='contact.html' style='color: #FFF'>Contact REVA News</a><br>
                    </div>

                    <hr>
                    <span>This website is built on <a style='color: #FFF;' href='https://fluentdesignforweb.github.io'>Fluent Design For Web</a></span>
                    <span class="right">&copy; REVA News 2019</span>
                    
                    <br><br>

                </div>
    </div>


    <div class="sidepanel_container" id="nav">
        <div class=" sidepanel_content zi3 right" id="modct1">
            <button class="primary_red right ta_center mod_close_btn" onclick="closeside1();">X</button>
            <br><br><br><br>
            <div class="page_container">
                <a href="index.php"><div class="large12 panel_item">Home</div></a>
                <a href="https://news.google.com/?hl=en-IN&gl=IN&ceid=IN:en"><div class="large12 panel_item">G News</div></a>
                <a href="aboutus.html"><div class="large12 panel_item">About Us</div></a>
                <a href="contact.html"><div class="large12 panel_item">Contact Us</div></a>
            </div>
        </div>
    </div>
    </body>
</html>