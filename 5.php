<?php
$title = "jQuery Fundamentals (Part - 05)";
$tutorials = "jQuery Fundamentals Bangla Tutorial - animation() Method (Part - 05)";
$footer_text = "Design & Developments by &copy; 2018 www.rajtechbd.com";
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
            position: relative;
            background: #fff;
            padding: 10px;
            margin-top: 5px;
            width: 923px;
            height: 480px;
            border: 1px solid #9e8f8f;
        }
        .data_inner{
            position: absolute;
            width: 200px;
            height: 200px;
            background: #000;
            border-radius: 50%;
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
        <button id="startanimate">Start Animate</button>


        <div class="data">
          <div class="data_inner">
          </div>
        </div>


        <script type="text/javascript">
            $(document).ready(function () {

                $("#startanimate").click(function () {
                  $(".data_inner").animate({
                      left: "750px",
                      opacity: "0.5",
                      width: "50px",
                      height: "50px",
                  },'slow');
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