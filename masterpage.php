    <?php
    require_once("config.inc.php");
    require_once("model/include_dao.php");
    ?>
    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <title><?php echo strtolower($pagetitle); ?></title>
            <base href="<?php echo $location; ?>" />
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <meta name="author" content="Q Web Production"/>
            <meta name="DC" content="ita" scheme="RFC1766"/>        
            <link rel="image_src" href="<?php echo $location; ?>images/experience_thumb.jpg" />        

            <meta property="og:type" content="Website"/>
            <meta property="og:site_name" content="White Mosquito - Rock Band"/>
            <meta name="google-site-verification" content="XmCA1wSUVPjjmRceKix8G7dNJQCKr6I79rDBFHJHf_I" />

            <?php echo $pageMetatags; ?>        
            
            <script language="JavaScript" type="text/JavaScript">
                if (navigator.userAgent.indexOf('MSIE') !=-1){
                    document.write('<link REL="SHORTCUT ICON" HREF="<?php echo $location; ?>favicon.ico"/>');
                }else{
                    document.write('<link REL="SHORTCUT ICON" HREF="<?php echo $location; ?>favicon.png"/>');
                }
            </script>
            

            
            <link rel="stylesheet" type="text/css" href="includes/css/fonts.css" media="screen" />
            <link rel="stylesheet" type="text/css" href="includes/css/incScreen.css" media="screen" />
            <link rel="stylesheet" type="text/css" href="includes/js/vegas/vegas.min.css" />
            <link rel="stylesheet" type="text/css" href="includes/css/contatti.css" />
            <?php echo $pageCss; ?>        
            <?php
                    require_once 'google_snippets.php';
            ?>
            <?php
            if ($pageInternaltitle === "Contatti") 
            {
                ?>
                <script type='text/javascript' src='includes/js/jquery-1.4.2.min.js'></script>
                <?php
            }else if ($pageInternaltitle === "Home")
            {
                ?>
                           <script type='text/javascript' src='http://code.jquery.com/jquery-latest.min.js'></script>
                <?php
            } else {
                ?>
                <!-- <script type='text/javascript' src='includes/js/jquery-1.3.2.min.js'></script> -->
                <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js'></script>

                <?php
            }
            ?>
            <script type='text/javascript' src='http://code.jquery.com/ui/1.10.0/jquery-ui.min.js'></script>
            <script type='text/javascript' src='includes/js/vegas/vegas.min.js'></script>
            
            <?php echo $pageScripts; ?>
        </head>
        <body id="wm-body">
            <!--  INIZIO CONTAINER -->
            <div id="container">
                <!--  INIZIO HEADER -->
                <div id="header">
                    <!-- sample of a menu -->
                    <div id="menuWM" class="interno">
                        <ul>	
                            <li><a href="index.php" title="home page - White MosQuito"><img id="indexImg" src="images/logo_whitemosquito.png" height="60" border="0" alt="home page - white mosquito" title="home page - white mosquito" /></a></li>
                            <li><a class="menuItem" href="news.php">new<b>S</b></a></li>
                            <li><a class="menuItem" href="tour.php">to<b>U</b>r</a></li>
                            <li><a class="menuItem" href="press.php"><b>P</b>r<b>E</b>ss</a></li>
                            <li><a class="menuItem" href="discografia.php">discog<b>R</b>afia</a></li>
                            <li><a class="menuItem" href="#"><b>EGO</b></a></li>
                        </ul>                        
                    </div>

                    
                    <h1 class="page"><?php echo $pageInternaltitle; ?></h1>

                    
                    <?php require_once('model/Rendering/ShareContainer.php'); ?>
                </div>

                <!--  FINE HEADER -->

                <!--  INIZIO CONTENT -->

                <div id="content">

    <?php
    echo $pagecontent;
    ?>
                </div>
                
                <!--  FINE CONTENT -->

                <!--  INIZIO FOOTER-->
                <div id="footer"> 
                        <ul class="contacts footerContent left">
                            <li>Booking: <a href="mailto:booking@whitemosquito.it">booking@whitemosquito.it</a></li>
                            <li>Info: <a href="mailto:booking@whitemosquito.it">info@whitemosquito.it</a></li>
                            <li><a href="resources/WhiteMosQuito_PressKit.pdf" target="_blank">Press Kit</a></li>
                            <li><a href="resources/WhiteMosQuito_schedaTecnica.pdf" target="_blank">Scheda Tecnica</a></li>
                            <li>Webmaster: <a href="mailto:maniax.matteo@gmail.com">contatta il webmaster</a></li>


                        </ul>
                        <ul class="socialfooter footerContent right">
                            <li>
                                <a href="http://www.youtube.com/WhiteMosQuitoBand" TARGET="_blank" title='YouTube'>
                                    <img src="images/social/yt.png" title="follow white mosquito" alt=''/>
                                </a>
                            </li>
                            <li>
                                <a href='http://www.facebook.com/pages/White-MosQuito/42106554501' title='Facebook' TARGET="_blank">
                                    <img src="images/social/fb.png" title="follow white mosquito" alt=''/>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/whitemosquito" TARGET="_blank" title='Twitter'>
                                    <img src="images/social/tw.png" title="follow white mosquito" alt=''/>
                                </a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/103687039580096180150/posts" TARGET="_blank" title='Google+'>
                                    <img src="images/social/g+.png" title="follow white mosquito" alt=''/>
                                </a>
                            </li>

                        </ul>      
                </div>
                <!--  FINE FOOTER -->
            </div>

            <!--  FINE CONTAINER -->


        </body>
    </html>

