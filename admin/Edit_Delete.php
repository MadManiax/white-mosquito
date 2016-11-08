<?php
require_once(dirname(__DIR__).DIRECTORY_SEPARATOR."config.inc.php");
require_once(dirname(__DIR__).DIRECTORY_SEPARATOR."model/include_dao.php");


// function rrmdirAll($dir) { 
   // if (is_dir($dir)) { 
     // $objects = scandir($dir); 
     // foreach ($objects as $object) { 
       // if ($object != "." && $object != "..") { 
         // if (filetype($dir."/".$object) == "dir") rrmdirAll($dir."/".$object); else unlink($dir."/".$object); 
       // } 
     // } 
     // reset($objects); 
     // rmdir($dir); 
   // } 
 // } 
function rmdirr($dir) {
   if($objs = @glob("../".$dir."/*")){
        foreach($objs as $obj) {
	 @is_dir($obj)? rmdirr($obj) : @unlink($obj);
	  }
 }
@rmdir("../".$dir);
}
  function rmImage($idImg)
 {		
		$DatImmaginiDAO = DAOFactory::getDatImmaginiDAO();
		$image = $DatImmaginiDAO->load($idImg);
		$FilesDAO = DAOFactory::getFilesDAO();
		$file = $FilesDAO->load($image->filesID);
	
		$FilesDAO->delete($file->filesID);
		$DatImmaginiDAO->delete($image->id);		
 }
 function rmImageAndFiles($idImg)
 {		
		$DatImmaginiDAO = DAOFactory::getDatImmaginiDAO();
		$image = $DatImmaginiDAO->load($idImg);
		$FilesDAO = DAOFactory::getFilesDAO();
		$file = $FilesDAO->load($image->filesID);
		
		unlink(dirname(__DIR__).DIRECTORY_SEPARATOR.$file->thumbnails);		
		unlink(dirname(__DIR__).DIRECTORY_SEPARATOR.$file->filesName);
	
		$FilesDAO->delete($file->filesID);
		$DatImmaginiDAO->delete($idImg);
                return "imagesManager.php?idGallery=".$image->idGalleria;
 }
 
 
if(isset($_GET['Mode']))
{
	
	$mode = $_GET['Mode'];
	
	if($mode == "DeleteG")
	{	
		$idGalleria = $_GET['idGallery'];
		$DatGallerieDAO = DAOFactory::getDatGallerieDAO();
		$Gallery = $DatGallerieDAO->load($idGalleria);
		$GalleryRepository = $ImageRepository."/".$Gallery->path;
		$DatImmaginiDAO = DAOFactory::getDatImmaginiDAO();
		$Images = $DatImmaginiDAO->queryByIdGalleria($idGalleria);
		
		foreach($Images as $Image)
		{
			rmImage($Image->id);
		}
		rmdirr($GalleryRepository);		
		$DatGallerieDAO->delete($idGalleria);
                $redirectPage="galleryManager.php";
	}	
	if($mode == "Delete")
	{
		$idImg = $_GET['IdImg'];
		$redirectPage=rmImageAndFiles($idImg);
                
	}
        if($mode == "DeleteE")
        {
            $idEvent = $_GET['idEvent'];
            $DatEventsDAO = DAOFactory::getDatEventsDAO();
            $DatEventsDAO->delete($idEvent);
        }
        if($mode == "DeleteN")
        {
            $idNews = $_GET['idNews'];
            $DatNewsDAO = DAOFactory::getDatNewsDAO();
            $DatNewsDAO->delete($idNews);
        }
        
        if($mode == "DeleteP")
        {
            $idPress = $_GET['pressId'];
            $DatPressDAO = DAOFactory::getDatPressDAO();
            $DatPressDAO->delete($idPress);
        }
	header("location:".$redirectPage);//redirect
}
	
?>