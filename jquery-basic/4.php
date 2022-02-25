<?php
$title = "jQuery Fundamentals (Part - 04)";
$tutorials = "jQuery Fundamentals Bangla Tutorial - Sliding Effects(Part - 04)";
$footer_text = "Design & Developments by &copy; 2018 prime.com";
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
    <style>
        .data{
            display: none;
        }
    </style>
</head>
<body>
<div class="main_area">
    <div class="header">
        <h1><?php echo $title; ?></h1>
        <h3><?php echo $tutorials; ?></h3>
    </div>
    <div class="main_content">
        <button id="slidedown">Slide Down</button>
        <button id="slideup">Slide Up</button>
        <button id="slidetoggle">Slide Toggle</button>

        <div class="data" style="background: #ddd;padding: 10px;margin-top: 5px;">
            <h3>This is my project</h3>
            <p>We believe that attitude, work ethic, pride in your work, and a desire to learn and improve are always
                better than a skillset. If you bring the right mindset, we have the training to develop your skills. We
                believe that attitude, work ethic, pride in your work, and a desire to learn and improve are always
                better than a skillset. If you bring the right mindset, we have the training to develop your skills.</p>
        </div>


        <script type="text/javascript">
            $(document).ready(function () {

                $("#slidedown").click(function () {
                  $(".data").slideDown('slow');
                });

                $("#slideup").click(function () {
                  $(".data").slideUp('slow');
                });

                $("#slidetoggle").click(function () {
                  $(".data").slideToggle('slow');
                });

            });
        </script>
    </div>
    <div class="footer">
        <p><?php echo $footer_text; ?></p>
    </div>
</div>
</body>
</html>