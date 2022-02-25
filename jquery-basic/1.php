<?php
$title = "Get Started (Part - 01)";
$tutorials = "jQuery Fundamentals Bangla Tutorial - Get Started (Part - 01)";
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

        <p>This is my project</p>
        <button>Hide</button>


        <script type="text/javascript">
            $(document).ready(function () {

                $('button').click(function(){
                    $('p').hide();
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