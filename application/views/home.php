<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NPRU Alumni</title>
    <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>css/home.css">
</head>
<body>
    <?php include("header.php");?>
        <div class="ABbody">
            <div class="ABcontainer">
                <div class="left-side">
                    <a class="a1" href="../Alumni/showPrivate">ข้อมูลศิษย์เก่า</a>
                    <a href="../Alumni/search">ค้นหาข้อมูลสมาชิกศิษย์เก่า</a>
                </div>
                <div class="right-side">
                    <h2>Welcome</h2>
                    <div class="box">
                        <?php include("slide.php");?>
                    </div>
                </div>
            </div>
        </div>
        <?php include("footer.php");?>
</body>
</html>