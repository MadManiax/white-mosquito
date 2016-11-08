<?php
require_once("config.inc.php");
require_once("model/include_dao.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>White Mosquito - Rock n' Roll experience</title>
        <base href="<?php echo $location; ?>" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="author" content="Q Web Production"/>
        <meta name="DC" content="ita" scheme="RFC1766"/>
        <meta name="title" content="White MosQuito - Official Website"/>
        <meta name="description" content="Il loro sound ha la matrice seventies, graffia con delle chitarre prepotenti e dei riff vertiginosi."/>
        <meta name="keywords" content="rock,rockn roll,hard rock,heavy,guitar,music,radio,musica,white mosquito,whitemosquito,video,foto,alternative,personalità nascoste,il potere e la sua signora"/>

        <meta property="og:image" content="http://www.whitemosquito.it/images/experience_thumb.jpg" />
        <?php
        $gallerieDao = DAOFactory::getDatGallerieDAO();
        $allGalleries = $gallerieDao->queryByTitle("Backgrounds");
        $randomImagePath = "";
        foreach ($allGalleries as $gallery) {
            if ($gallery->id > 6) {
                $allImages = DAOFactory::getDatImmaginiDAO()->queryByIdGalleria($gallery->id);
                $counter = 0;
                shuffle($allImages);
                foreach ($allImages as $imageItem) {
                    $fileItem = DAOFactory::getFilesDAO()->load($imageItem->filesID);
                    $imgPath = $fileItem->thumbnails;
                    if ($counter == 0)
                        $randomImagePath = $fileItem->filesName;
                    $counter++;
                    ?>
                    <meta property="og:image" content="<?php echo $location; ?><?php echo $imgPath; ?>" />
                    <?php
                }
            }
        }
        ?>
        <meta name="google-site-verification" content="XmCA1wSUVPjjmRceKix8G7dNJQCKr6I79rDBFHJHf_I" />

        <link rel="stylesheet" type="text/css" href="includes/css/fonts.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="includes/css/index_demone.css" media="screen" />

        <script language="JavaScript" type="text/JavaScript">
            if (navigator.userAgent.indexOf('MSIE') !=-1){
            document.write('<link REL="SHORTCUT ICON" HREF="<?php echo $location; ?>favicon.ico"/>');
            }else{
            document.write('<link REL="SHORTCUT ICON" HREF="<?php echo $location; ?>favicon.png"/>');
            }
        </script>

        <script type='text/javascript' src='http://code.jquery.com/jquery-latest.min.js'></script>
        <script type='text/javascript' src='http://code.jquery.com/ui/1.10.0/jquery-ui.min.js'></script>
        <?php
        require_once 'google_snippets.php';
        ?>


    </head>
    <body>   
        <script type="text/javascript">
            $(document).ready(function(){      
            $('#hover img').css('width',screen.width);
            $("#hover").animate({opacity:1},700);
            $("#hover").animate({opacity:0.2},10000);

            $("div#logo").fadeIn(8000);
            $(".demone_video").fadeIn(11000);
            $("hr").fadeIn(10000);
            $("div#entra").fadeIn(13000);                
            });            
        </script>  

<!--        <div id="hover"><img src="ImagesRepository/AngeloAzzurro/00_corio_MG_0414w.jpg" width="1000px"/></div>-->
        <div id="hover"><img src="<?php echo $randomImagePath; ?>" width="1000px"/></div>

        <div class="contentIndex">
            <div id="logo" >
<!--                <img src="images/logo_whitemosquito.png" width="1000"/>-->
                WhiteMos<b>Q</b>uito
            </div>
            <hr id="bar" class="style-two"/>
            <div class="demone_video">
			<iframe width="640" height="360" src="https://www.youtube.com/embed/vCUHvT7IG4Q" frameborder="0" allowfullscreen></iframe>

                
            </div>
            <hr id="bar2" class="style-two"/>
            <a id="aPrincipal" href="home.php" >
                <div id="entra">


                    Entra

                </div>
            </a>

        </div>
       
    </body>
</html>