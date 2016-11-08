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
            <script type='text/javascript' src='includes/js/jquery-1.3.2.min.js'></script>

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
                        <li><a href="home.php" title="home page - White MosQuito"><img id="indexImg" src="images/logo_whitemosquito.png" height="60" border="0" alt="home page - white mosquito" title="home page - white mosquito" /></a></li>
                        <li><a class="menuItem" href="discografia.php">discog<b>R</b>afia</a></li>
                        <li><a class="menuItem" href="foto.php">f<b>O</b>to</a></li>
                        <li><a class="menuItem" href="merch.php">mer<b>C</b>h</a></li>
                        <li><a class="menuItem" href="links.php">lin<b>K</b>s</a></li>
                        <li><a class="menuItem" href="band.php"><b>B</b>and</a></li>
                        <li><a class="menuItem" href="contatti.php">cont<b>A</b>tti</a></li>
                        <li><a class="menuItem" href="tour.php">eve<b>N</b>ti</a></li>
                        <li><a class="menuItem" href="video.php">vi<b>D</b>eo</a></li>
                    </ul>
                    <ul style="width: 300px; font-size: 16px;  margin: -14px 0 0 635px">
                        <li style="font-size:16px;">
                            <a href="news.php">
                                NEWS
                            </a>
                        </li>
                        <li style="font-size:16px;">
                            <a href="press.php">
                                PRESS
                            </a>
                        </li>
                        <li style="font-size:16px;">
                            <a href="player.php"  target="_blank">
                                ASCOLTA
                            </a>
                        </li>
                        <!--<li style="font-size:16px;">
                            <a class="newAlbum" href="download.php">
                                DOWNLOAD
                            </a>
                        </li>-->

                    </ul>
                </div>

                <script type="text/javascript">
                    
                    
                    $(document).ready(function()
                    {  
                        
                        $('#wm-body').vegas({
                            slides:[
                            <?php
                            $gallerieDao = DAOFactory::getDatGallerieDAO();
                            $allGalleries = $gallerieDao->queryByTitle("Backgrounds");

                            foreach ($allGalleries as $gallery) {
                                if ($gallery->id > 6) {
                                    $allImages = DAOFactory::getDatImmaginiDAO()->queryByIdGalleria($gallery->id);
                                    shuffle($allImages);
                                    foreach ($allImages as $imageItem) {
                                        $fileItem = DAOFactory::getFilesDAO()->load($imageItem->filesID);
                                        $imgPath = $fileItem->filesName;
                                        echo "{ src: '$location" . $imgPath . "' },\n";
                                    }
                                }
                            }
                            ?>
							],
							
    							transition: [ 'flash2', 'blur2', 'burn' ],
    							animation: 'random'
                            });
                        });
                </script>
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

            <!--  FINE FOOTER -->
        </div>

        <!--  FINE CONTAINER -->


    </body>
</html>

