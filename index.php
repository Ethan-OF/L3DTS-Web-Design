<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./Recources/core.css">
        <link rel="icon" href="./Recources/Images/Logo.png">
    </head>
    <div class="background">
        <body>
            <div class="navigation">
                <div class="navgroup">
                    <div class="navbuttonspace">
                        <img src="Recources/Images/Logo.png" style="height: 100%;">
                    </div>
                    
                    <div class="navbutton selected">HOME</div>
    
                    <a href="gallery.php">
                        <div class="navbutton">GALLERY</div>
                    </a>
                    
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
    
            <div class="space"></div>
            <div class="bottomText">
                <p style="margin: 10px; word-break: normal; white-space: normal;">
                    Wanting to display some of my photos, I've made this website to show my collection, allowing you (the viewer)
                    to explore my photos, and see them for yourself. 
                </p>
                <p style="margin: 10px; word-break: normal; white-space: normal;">
                    Using the navigation at the top you can find the gallery page, where all my photos are on display. Simply click
                    on the photos to go to the next one. 
                </p>

                <p style="margin: 10px; word-break: normal; white-space: normal;">
                    I have also included an about page, to tell you more about myself, and how I take these photos. Though, I don't have
                    all too much to talk about.
                </p>
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
                        Email: <input type="email" name="email" id="email" style="margin-left: 10px; height: 50%;">
                        <input type="submit" value="Submit" class="navbutton" style="margin-left: 10px; margin-right: 10px; text-decoration: underline;">
                    </form>
                    <?php }?>
                </div>
            </div>
            <!--[if lt IE 7]>
                <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
            
            <script src="" async defer></script>
        </body>
    </div>
</html>