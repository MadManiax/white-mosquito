<?php
require_once(dirname(__DIR__).DIRECTORY_SEPARATOR."config.inc.php");
require_once(dirname(__DIR__).DIRECTORY_SEPARATOR."model/include_dao.php");


if(isset($_GET['Mode']))
{
	$mode = $_GET['Mode'];
	if($mode == "SaveG")
	{	
            $idGalleria = $_GET['idGallery'];
            $textGallery = $_POST['Gallery_'.$idGalleria];
            $DatGallerieDAO = DAOFactory::getDatGallerieDAO();
            $Gallery = $DatGallerieDAO->load($idGalleria);		
            $Gallery->title = quoteReplacement($textGallery);
            $DatGallerieDAO->update($Gallery);
            $redirectPage="galleryManager.php";
	}
        if($mode == "AssociaG")
        {
            $idGalleria = $_GET['idGallery'];
            $txtTitle = $_POST['txt_gallery_title'];
            $selPeriodo = $_POST['select_gallery_assoc'];
            echo $txtTitle;
            echo "<br/>".$selPeriodo;
            echo "<br/>".$idGalleria;
            $DatGallerieDAO = DAOFactory::getDatGallerieDAO();
            $Gallery = $DatGallerieDAO->load($idGalleria);            
            $Gallery->title = quoteReplacement($txtTitle);
            $Gallery->description = $selPeriodo;
            $DatGallerieDAO->update($Gallery);
            $redirectPage="galleryManager.php";
            
        }
	if($mode == "Save")
	{
		$idImg = $_GET['IdImg'];
		$DatImmaginiDAO = DAOFactory::getDatImmaginiDAO();
		$image = $DatImmaginiDAO->load($idImg);
		$galID = $image->idGalleria;
		$title = quoteReplacement($_POST['image_title_'.$galID."_".$idImg]);
		$desc = quoteReplacement($_POST['image_description_'.$galID."_".$idImg]);
		
		$image->title = $title;
		/*echo("<br/>");
		echo($_POST['image_title_'.$galID."_".$idImg]);
		echo("<br/>");
		echo($title);
		echo("<br/>");		
		echo($image->title);
		echo("<br/>");
		exit;*/
		$image->description = $desc;
		$image->alt = $title;
		$DatImmaginiDAO->update($image);
	}
        if($mode == "SaveE")
	{
            $idEvent = null;
            $eventToSave = new DatEvent();
            if(isset($_GET['idEvent']))
            {
                $idEvent = $_GET['idEvent'];
                if($idEvent == "")
                {
                    $eventToSave = new DatEvent();
                    $idEvent = null;
                }
                else
                    $eventToSave = DAOFactory::getDatEventsDAO()->load($idEvent);
            }
            else
            {
                $eventToSave = new DatEvent();
                $idEvent = null;
            }
            $title = $_POST['txt_event_title'];
            $desc = $_POST['txt_event_desc'];
            $address = $_POST['txt_event_address'];
            $city = $_POST['txt_event_city'];
            $cost = $_POST['txt_event_cost'];
            $fbEvent = $_POST['txt_event_fb'];
            $pub = $_POST['txt_event_pub'];
            $hour = $_POST['select_hour'];
            $minutes = $_POST['select_min'];
            $data = $_POST['date1'];
            $itemLocandina = $_POST['select_locandina'];
            $idLocandina = NULL;
            if($itemLocandina != "none")
            {
                $splittedItems = preg_split("/_/",$itemLocandina);
                $idLocandina = $splittedItems[0];
            }
           
            $eventToSave->data = date('Y-m-d H:i:s',strtotime($data." ".$hour.":".$minutes.":00"));
            //echo $eventToSave->data;
            $eventToSave->citta = $city;   
            $eventToSave->title = $title;
            $eventToSave->descrizione = $desc;
            $eventToSave->indirizzo = $address;
            $eventToSave->ingresso = $cost;
            $eventToSave->linkFBEvent = $fbEvent;
            $eventToSave->locale = $pub;            
            $eventToSave->idDATImmagineLocandina = $idLocandina;
            if(isset($idEvent) || isset($eventToSave->id))
                DAOFactory::getDatEventsDAO()->update($eventToSave);    
            else
                DAOFactory::getDatEventsDAO()->insert($eventToSave);
            
        }
        if($mode == "SaveI")
        {
            $imageId = $_POST['id_image'];
            $title = $_POST['image_txt_title'];
            $desc = $_POST['image_txt_description'];
            $imageAlt = $_POST['image_txt_alt'];
            $idGalleria = $_POST['id_gallery'];
            
            $DatImmaginiDAO = DAOFactory::getDatImmaginiDAO();
            $image = $DatImmaginiDAO->load($imageId);
            $image->title = $title;		
            $image->description = $desc;
            $image->alt = $imageAlt;
            $DatImmaginiDAO->update($image);
            $redirectPage="imagesManager.php?idGallery=".$idGalleria;
        }
        if($mode == "SaveN")
        {
            $news = new DatNews();
            if(isset($_POST['id_news']))
            {
                $newsId = $_POST['id_news'];
                $news = DAOFactory::getDatNewsDAO()->load($newsId);                
            }
            $data = $_POST['date1'];
            $title = $_POST['txt_news_title'];
            $desc = $_POST['txt_news_desc'];
            
            $news->title = $title;
            $news->data = $data;
            $news->descr = $desc;
            
            if(isset($_POST['id_news']))
                DAOFactory::getDatNewsDAO()->update($news);
            else
                DAOFactory::getDatNewsDAO()->insert($news);
                
        }
        if($mode == "SaveP")
        {            
            $title = $_POST['txt_press_title'];
            $subtitle = $_POST['txt_press_subtitle'];
            $link = $_POST['txt_press_link'];
            $text = $_POST['txt_press_text'];            
            $data = $_POST['date1'];
            $stralcio = $_POST['txt_press_stralcio'];
            
            $idPress = null;
            $press = new DatPress();    
            $datPressDAO = DAOFactory::getDatPressDAO();
            if(isset($_GET['idPress']) && $_GET['idPress'] != '')
            {
                $idPress = $_GET['idPress'];
                $press = $datPressDAO->load($idPress);
            }
            else
            {
                $press = new DatPress();
                $idPress = null;
            }
            
            $press->title = $title;
            $press->subtitle= $subtitle;
            $press->link = $link;
            $press->text = $text;
            $press->data = $data;
            $press->stralcio = $stralcio;
            
            if(isset($idPress)  )
                $datPressDAO->update ($press);
            else
                $datPressDAO->insert($press);            
        }
	header("location:".$redirectPage);//redirect
}
function quoteReplacement($string)
{
	//$quotes = array('/"/',"/'/");
	//$replacements = array('$quot;','&#39;');
	//return preg_replace($quotes,$replacements,$string);
	$htmlSpecial =  htmlspecialchars($string, ENT_QUOTES);
	$htmlSpecial = str_replace('\\', '', $htmlSpecial);
	return $htmlSpecial;
}
?>