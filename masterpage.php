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
            <meta name="viewport" content="width=device-width">
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
            <?php 
                if(BrowserTools::isMobile()){
                    ?>
                        <link rel="stylesheet" type="text/css" href="includes/css/incScreen-mobile.css" media="screen" />
                    <?php
                }
            ?>
            
            <link rel="stylesheet" type="text/css" href="includes/css/contatti.css" />
            <?php echo $pageCss; ?>        
       
        </head>

        <body id="wm-body">
            <!--  INIZIO CONTAINER -->
            <div id="container">
                <!--  INIZIO HEADER -->
                <div id="header">
                    <!-- sample of a menu -->
                    <div id="menuWM" class="interno">
                        <ul>	
                            <li class="logo"><a href="index.php" title="home page - White MosQuito"><img id="indexImg" src="images/Logo-wm-Palatino-black-.png"  border="0" alt="home page - white mosquito" title="home page - white mosquito" /></a></li>
                        </ul>                        
                    </div>
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
                <div>
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
                                    YouTube
                                </a>
                            </li>
                            <li>
                                <a href='http://www.facebook.com/pages/White-MosQuito/42106554501' title='Facebook' TARGET="_blank">
                                    Facebook
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/whitemosquito" TARGET="_blank" title='Twitter'>
                                    Twitter
                                </a>
                            </li>
                            <li>
                                <a href="https://open.spotify.com/artist/3FqevB7iN9ion5HWntFU43" TARGET="_blank" title='Google+'>
                                    Spotify
                                </a>
                            </li>

                        </ul>    
                        </div>  
                </div>
                <!--  FINE FOOTER -->
            </div>
            <!--  FINE CONTAINER -->

            <?php
                    require_once 'google_snippets.php';
            ?>
            <script src="includes/js/jquery-3.2.1.min.js"></script>
            <script src="includes/js/jquery-ui-1.12.1/jquery-ui.min.js"></script>
            <?php echo $pageScripts; ?>
        </body>
    </html>
 
