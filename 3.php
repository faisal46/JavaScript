<?php
$title = "jQuery Fundamentals (Part - 03)";
$tutorials = "jQuery Fundamentals Bangla Tutorial - fadeIn, fadeOut, fadeTo (Part - 03)";
$content = "Text on desplay Show";
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
        <button id="fadein">FadeIn</button>
        <button id="fadeout">FadeOut</button>
        <button id="fadeto">FadeTo</button>
        <button id="fadetoggle">FadeToggle</button>

        <div class="data" style="background: #ddd;padding: 10px;margin-top: 5px;">
            <h3>This is my project</h3>
            <p>We believe that attitude, work ethic, pride in your work, and a desire to learn and improve are always
                better than a skillset. If you bring the right mindset, we have the training to develop your skills. We
                believe that attitude, work ethic, pride in your work, and a desire to learn and improve are always
                better than a skillset. If you bring the right mindset, we have the training to develop your skills.</p>
        </div>


        <script type="text/javascript">
            $(document).ready(function () {

                $("#fadein").click(function () {
                  $(".data").fadeIn('slow');
                });

                $("#fadeout").click(function () {
                  $(".data").fadeOut(1000);
                });

                $("#fadeto").click(function () {
                  $(".data").fadeTo(1000, 0.4);
                });

                $("#fadetoggle").click(function () {
                  $(".data").fadeToggle(1000);
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