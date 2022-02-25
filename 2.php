<?php
$title = "jQuery Fundamentals (Part - 02)";
$tutorials = "jQuery Fundamentals Bangla Tutorial - hide, show, toggle (Part - 02)";
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
</head>
<body>
<div class="main_area">
    <div class="header">
        <h1><?php echo $title; ?></h1>
        <h3><?php echo $tutorials; ?></h3>
    </div>
    <div class="main_content">
        <button id="hide">Hide</button>
        <button id="show">Show</button>
        <button id="toggle">Toggle</button>

        <div class="data" style="background: #ddd;padding: 10px;margin-top: 5px;">
            <h3>This is my project</h3>
            <p>We believe that attitude, work ethic, pride in your work, and a desire to learn and improve are always
                better than a skillset. If you bring the right mindset, we have the training to develop your skills. We
                believe that attitude, work ethic, pride in your work, and a desire to learn and improve are always
                better than a skillset. If you bring the right mindset, we have the training to develop your skills.</p>
        </div>


        <script type="text/javascript">
            $(document).ready(function () {
                $("#hide").click(function () {
                  $(".data").hide('slow');
                });

                $("#show").click(function () {
                  $(".data").show('slow');
                });

                $("#toggle").click(function () {
                  $(".data").toggle('slow');
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