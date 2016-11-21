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
            <!-- <link rel="stylesheet" type="text/css" href="includes/audiojs/audio.css"/>
            <script src="includes/audiojs/audio.min.js"></script> -->
            
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
                            <li><a><b>S</b></a></li>
                            <li><a><b>U</b></a></li>
                            <li><a><b>P</b></a></li>
                            <li><a><b>E</b></a></li>
                            <li><a><b>R</b></a></li>
                            <li><a><b>E</b></a></li>
                            <li><a><b>G</b></a></li>
                            <li><a><b>O</b></a></li>
                            <!-- <li><a class="menuItem" href="news.php">new<b>S</b></a></li>
                            <li><a class="menuItem" href="tour.php">to<b>U</b>r</a></li>
                            <li><a class="menuItem" href="press.php"><b>P</b>r<b>E</b>ss</a></li>
                            <li><a class="menuItem" href="discografia.php">discog<b>R</b>afia</a></li>
                            <li><a class="menuItem" href="#"><b>EGO</b></a></li> -->
                        </ul>                        
                    </div>

                    
                    <h1 class="page"><?php echo $pageInternaltitle; ?></h1>

                    
                    <?php require_once('model/Rendering/ShareContainer.php'); ?>

                    <div id="cp_widget_12c4ef5e-fe98-4b91-adc8-c98d37613baf">...</div><script type="text/javascript">
var cpo = []; cpo["_object"] ="cp_widget_12c4ef5e-fe98-4b91-adc8-c98d37613baf"; cpo["_fid"] = "AoMALzNrAK9B";
var _cpmp = _cpmp || []; _cpmp.push(cpo);
(function() { var cp = document.createElement("script"); cp.type = "text/javascript";
cp.async = true; cp.src = "//www.cincopa.com/media-platform/runtime/libasync.js";
var c = document.getElementsByTagName("script")[0];
c.parentNode.insertBefore(cp, c); })(); </script><noscript>Powered by Cincopa <a href='https://www.cincopa.com/video-portal'>Video Portal</a> for Business solution.<span>no name</span><span>Sono il colpevole</span><span>Personalità Nascoste</span><span>Quello che non vedi</span><span>Personalità Nascoste</span><span>In faccia</span><span>Il Potere e la sua Signora</span><span>Circostanze</span><span>Il Potere e la sua Signora</span><span>Stato Confusionale</span><span>Il Potere e la sua Signora</span><span>Manifesto</span><span>Il Potere e la sua Signora</span><span>Nuvola</span><span>Il Potere e la sua Signora</span><span>Come Se</span><span>Personalità Nascoste</span></noscript>

                    <!-- <div id="cp_widget_b29b0f2d-d604-4364-a868-8d165a66784a">...</div><script type="text/javascript">
var cpo = []; cpo["_object"] ="cp_widget_b29b0f2d-d604-4364-a868-8d165a66784a"; cpo["_fid"] = "AoMALzNrAK9B";
var _cpmp = _cpmp || []; _cpmp.push(cpo);
(function() { var cp = document.createElement("script"); cp.type = "text/javascript";
cp.async = true; cp.src = "//www.cincopa.com/media-platform/runtime/libasync.js";
var c = document.getElementsByTagName("script")[0];
c.parentNode.insertBefore(cp, c); })(); </script><noscript>Powered by Cincopa <a href='https://www.cincopa.com/video-portal'>Video Portal</a> for Business solution.<span>no name</span><span>Sono il colpevole</span><span>Personalità Nascoste</span><span>Quello che non vedi</span><span>Personalità Nascoste</span><span>In faccia</span><span>Il Potere e la sua Signora</span><span>Circostanze</span><span>Il Potere e la sua Signora</span><span>Stato Confusionale</span><span>Il Potere e la sua Signora</span><span>Manifesto</span><span>Il Potere e la sua Signora</span><span>Nuvola</span><span>Il Potere e la sua Signora</span><span>Come Se</span><span>Personalità Nascoste</span></noscript>
                </div> -->

                <!--  FINE HEADER -->


                <!--  INIZIO CONTENT -->

                <div id="content">
                     
                 
                    <?php
                    echo $pagecontent;
                    ?>
                    </div>
                    

                </div>

                        <!--<div id="musicPlayer">
                    
                        <ol>
                            <li class="playing"><a href="#" data-src="mp3/201 In Faccia.mp3">In Faccia</a></li>
                            <li ><a href="#" data-src="mp3/311 Nuvola.mp3">Nuvola</a></li>
                            <li ><a href="#" data-src="mp3/304 Manifesto.mp3">Manifesto</a></li>
                            <li ><a href="#" data-src="mp3/303 Stato confusionale.mp3">Stato Confusionale</a></li>
                            <li ><a href="#" data-src="mp3/101 Come se.mp3">Come se</a></li>
                          </ol>

                          <audio src="" preload="auto" ></audio>
                          </div>-->
                   
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
                <!--  FINE FOOTER -->
            </div>



            <!--  FINE CONTAINER -->
<!--
<script type="text/javascript">
              
      $(function() { 
        // Setup the player to autoplay the next track
        var a = audiojs.createAll({
          trackEnded: function() {
            var next = $('ol li.playing').next();
            if (!next.length) next = $('ol li').first();
            next.addClass('playing').siblings().removeClass('playing');
            audio.load($('a', next).attr('data-src'));
            audio.play();
          }
        });
        
        // Load in the first track
        var audio = a[0];
            first = $('ol a').attr('data-src');
        $('ol li').first().addClass('playing');
        audio.load(first);

        // Load in a track on click
        $('ol li').click(function(e) {
          e.preventDefault();
          $(this).addClass('playing').siblings().removeClass('playing');
          audio.load($('a', this).attr('data-src'));
          audio.play();
        });
     
      });
    
            </script>
            -->

        </body>
    </html>

