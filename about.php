<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>About</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./Recources/core.css">
        <link rel="icon" href="./Recources/Images/Logo.png">
    </head>
    <body class="backing">
        <div class="navigation">
            <div class="navgroup">
                <div class="navbuttonspace">
                    <img src="Recources/Images/Logo.png" style="height: 100%; user-select: none;">
                </div>

                <a href="index.php">
                    <div class="navbutton">HOME</div>
                </a>

                <a href="gallery.php">
                    <div class="navbutton">GALLERY</div>
                </a>
                
                <div class="navbutton selected">ABOUT</div>
            </div>
            
            <div class="navgroup">
                <div class="navgroup"></div>
                <div class="navgroup">
                    SANDRA'S ART GALLERY
                </div>
            </div>
        </div>

        <div class="pagespace">
            <div class="aboutcenter">

                <div class="aboutsplit" style="flex-direction: row; height: 50%;">
                    <div class="aboutsplit" style="align-items: center; justify-content: center;">
                        <div class="aboutimage">

                        </div>
                    </div>

                    <div class="aboutsplit" style="margin-right: 10px">
                        <p>
                        The photos shown on this website are all
                        taken by me using my Nikon Coolpix A900.
                        For a few years now I've decided to try
                        out photography, something that's always
                        peaked my interest as a hobby. Initially,
                        this website was going to show my paintings,
                        instead I've decided to host my photos here
                        as I find them more visually interesting.
                        Some time I may decide to upload some of
                        my paintings to be displayed. All photos
                        are taken by myself, no credits will
                        be given, as they are all my own.
                        </p>
                    </div>
                </div>

                <div class="aboutsplit" style="flex-direction: row; height: 50%;">
                    <div class="aboutsplit" style="display: flex; margin-left: 10px; flex-direction: column;">
                        <p>
                        A while back I decided to invest in
                        a camera, looking through TradeMe
                        for something that would fit my
                        needs. Luckily for me, someone decided
                        to give away one of their cameras for
                        a low price, with a camera valued over
                        $800 NZD, going for $200 NZD. Following
                        this I decided to try out the camera
                        mainly taking photos of the sky.
                        </p>
                        
                        <p>
                            By signing up for my newsletter, you
                            will be able to recieve emails every
                            time I post something new. With future
                            updates to the website being mentioned,
                            future photos, plans, cameras, etc.
                        </p>
                    </div>

                    <div class="aboutsplit" style="align-items: center; justify-content: center;">
                        <div class="aboutimage">

                        </div>
                    </div>
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
        
        <script src="Recources/about.js" async defer></script>
    </body>
</html>