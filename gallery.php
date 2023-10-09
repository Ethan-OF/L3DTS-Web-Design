<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Gallery</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./Recources/core.css">
    </head>
    <body style="background-color: rgb(155, 155, 155);">
        <div class="navigation">
            <div class="navgroup">
                <div class="navbuttonspace"></div>
                
                <a href="index.php">
                    <div class="navbutton">HOME</div>
                </a>

                <div class="navbutton selected">GALLERY</div>

                <a href="about.php">
                    <div class="navbutton">ABOUT</div>
                </a>
            </div>
            
            <div class="navgroup">
                <div class="navgroup"></div>
                <div class="navgroup">
                    SANDRA'S ART GALLERY
                </div>
            </div>
        </div>

        <div class="pagespace">
            <div class="slidearea">
                <div class="slideshow" id="slideshow">
                </div>
            </div>
        </div>

        <div class="navigation">

                <div class="navgroup">
                    <p style="align-self: center; margin-left: 10px; font-size: clamp(16px, 2vw, 24px);">Sign up to my newsletters! ➜</p>
                </div>

                <!--CHANGED FOOTER-->
                <div class="navgroup" style="align-items: right; justify-content: right; display: flex;">
                    <?php if(isset($_GET['message'])) {
                        echo "<span style='margin-right: 32px;'>Insert Successful</span>";
                    }
                    else { ?>
                    <form action="Recources/newsletter.php" method="post" style="display: flex; align-items: center;">
                        Email: <input type="text" name="email" id="email" style="margin-left: 10px; height: 50%;">
                        <input type="submit" value="Submit" class="navbutton" style="margin-left: 10px; margin-right: 10px; text-decoration: underline;">
                    </form>
                    <?php }?>
                </div>
            </div>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="Recources/gallery.js" async defer></script>
    </body>
</html>