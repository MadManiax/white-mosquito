<!-- META TAGS CONTENT -->
<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>
<meta name="title" content="White MosQuito - Official Website - Foto"/>
<meta name="keywords" content="white mosquito, foto, photo, album"/>
<?php
if(!isset($_GET['periodo']))
{
?>
<meta name="description" content="Raccolta di foto nei vari periodi della band"/>

<?php
}
else
{
    $imgSrcPeriodo ="";
    $imgTitlePeriodo ="";
    $periodo = $_GET['periodo']; 
    if($periodo == "Periodo1")
    {
        $imgSrcPeriodo ="images/GalleryMenu/2006.png";
        $imgTitlePeriodo ="dal 2006 al 2008";
    }
    else if($periodo == "Periodo2")
    {
        $imgSrcPeriodo ="images/GalleryMenu/2008.png";
        $imgTitlePeriodo ="dal 2008 al 2010";
    }
    else if($periodo == "Periodo3")
    {
        $imgSrcPeriodo ="images/GalleryMenu/2011.png";
        $imgTitlePeriodo ="dal 2011 al 2014";
    }
	else if($periodo == "Periodo4")
    {
        $imgSrcPeriodo ="images/GalleryMenu/2014.png";
        $imgTitlePeriodo ="dal 2014";
    }

?>
<meta name="description" content="Raccolta di foto nei vari periodi della band - <?php echo $imgTitlePeriodo;?>"/>
<?php
}
?>	
<?php
  //Assign all Page Specific variables
  $pageMetatags = ob_get_contents();
  ob_end_clean();
 ?>	


<!-- CSS CONTENT -->
<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>
<link rel="stylesheet" href="includes/css/foto.css" type="text/css" />
<link rel="stylesheet" href="includes/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<?php
  //Assign all Page Specific variables
  $pageCss = ob_get_contents();
  ob_end_clean();
 ?>
<!-- JAVASCRIPT CONTENT -->
<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>
<script src="includes/prettyPhoto/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>

<?php
  //Assign all Page Specific variables
  $pageScripts = ob_get_contents();
  ob_end_clean();
 ?>
 <?php
  //Buffer larger content areas like the main page content
  ob_start();
?>


<!--  gallery right alignment     -->
<div id="divGallery" class="galContainer" >      
<?php
//Gallery Loader
require_once("config.inc.php");
require_once("model/include_dao.php");
$page = "foto.php";
if(isset($_GET['periodo']))
{
    ?>    
    <div class="periodTitle">
        <img src="<?php echo $imgSrcPeriodo;?>" alt="<?php echo $imgTitlePeriodo;?>" title="<?php echo $imgTitlePeriodo;?>"/>
    </div>
    <div class="txtContainer">
    <?php
    $DatGallerieDAO = DAOFactory::getDatGallerieDAO();
    
    $GalleriaLista = $DatGallerieDAO->queryByDescription($periodo);
    foreach($GalleriaLista as $gallery)
    {
        //$start = time();
            if($gallery->title != "Locandine" && $gallery->title != "SystemImg" && $gallery->title != "Backgrounds")
            {  
                include("model/Rendering/GalleryItem.php");
            }
        //$stop = time();
        
        //echo "<div>".($stop - $start)."</div>";
        
    }
    ob_start();
    ?>
        <script type="text/javascript">
        $(document).ready(function(){
                $("area[rel^='prettyPhoto']").prettyPhoto();

                $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',slideshow:5000, autoplay_slideshow: true});
                $(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:5000, hideflash: true});

                $("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
                        custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
                        changepicturecallback: function(){ initialize(); }
                });

                $("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
                        custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
                        changepicturecallback: function(){ _bsap.exec(); }
                });
        });
    </script>

    </div>
    <?php
    $pageScripts = $pageScripts.ob_get_contents();
    ob_end_clean();
}
else
{
    ?>    
	<div class="period">
    <?php
    $periodSelected = "Periodo4";
    $divPeriodoFloat = "left";    
    $imgPeriodoSrc = "images/GalleryMenu/2014.png";
    $imgPeriodoTitle = "dal 2014";
    $imgPeriodoAlt = $imgPeriodoTitle;
    $divPreviewFloat = "right";
    $imgPreviewSrc = "images/GalleryMenu/2014.jpg";
    $imgPreviewTitle = $imgPeriodoTitle;
    $imgPreviewAlt = $imgPeriodoTitle;
    include("model/Rendering/GalleryMenuItem.php");
    ?>
    </div>
    <div class="period">
    <?php
    $periodSelected = "Periodo3";
    $divPeriodoFloat = "right";    
    $imgPeriodoSrc = "images/GalleryMenu/2011.png";
    $imgPeriodoTitle = "dal 2011 al 2014";
    $imgPeriodoAlt = $imgPeriodoTitle;
    $divPreviewFloat = "left";
    $imgPreviewSrc = "images/GalleryMenu/2011prev.jpg";
    $imgPreviewTitle = $imgPeriodoTitle;
    $imgPreviewAlt = $imgPeriodoTitle;
    include("model/Rendering/GalleryMenuItem.php");
    ?>
    </div>
    <div class="period sfasato" >
    <?php
    $periodSelected = "Periodo2";
    $divPeriodoFloat = "left";    
    $imgPeriodoSrc = "images/GalleryMenu/2008.png";
    $imgPeriodoTitle = "dal 2008 al 2010";
    $imgPeriodoAlt = $imgPeriodoTitle;
    $divPreviewFloat = "right";
    $imgPreviewSrc = "images/GalleryMenu/2008-2010prev.jpg";
    $imgPreviewTitle = $imgPeriodoTitle;
    $imgPreviewAlt = $imgPeriodoTitle;
    include("model/Rendering/GalleryMenuItem.php");
    ?>
    </div>
    <div class="period">
    <?php
    $periodSelected = "Periodo1";
    $divPeriodoFloat = "right";    
    $imgPeriodoSrc = "images/GalleryMenu/2006.png";
    $imgPeriodoTitle = "dal 2006 al 2008";
    $imgPeriodoAlt = $imgPeriodoTitle;
    $divPreviewFloat = "left";
    $imgPreviewSrc = "images/GalleryMenu/2006-2008prev.jpg";
    $imgPreviewTitle = $imgPeriodoTitle;
    $imgPreviewAlt = $imgPeriodoTitle;
    include("model/Rendering/GalleryMenuItem.php");
    ?>
    </div>
    <div class="clear" ></div>
    <?php
}
?>

</div>

<?php
  //Assign all Page Specific variables
  $pagecontent = ob_get_contents();
  ob_end_clean();
  $pagetitle = "Foto - White Mosquito";
  $pageInternaltitle = "Foto";
  //Apply the template
  include("masterpage.php");
?>
