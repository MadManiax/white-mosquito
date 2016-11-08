<?php
function quoteReplacement($string)
{
	$htmlSpecial =  htmlspecialchars($string, ENT_QUOTES);
	$htmlSpecial = str_replace('\\', '', $htmlSpecial);
	return $htmlSpecial;
}
function IsBetterResizedWidth($size,$maxWidth)
{    
    if(!isset($size))
        return true;
    return $size[0] > $maxWidth;        
}
function IsBetterResizedHeight($size,$maxHeight)
{    
    if(!isset($size))
        return true;
    return $size[1] > $maxHeight;        
}

function GetBestWidth($size,$Height)
{    
    return ($Height * $size[0]) / $size[1];
}


function ImageResampling($imagesTmp,$imagesName,$galRep,$width)
{    
    //$new_images = "thumbnails_".$_FILES["fileUpload"]["name"][$i];
    //copy($imagesTmp,"../".$galRep.$imagesName);    
    $size=GetimageSize($imagesTmp);
    $height=round($width*$size[1]/$size[0]);
    
    $images_orig = ImageCreateFromJPEG($imagesTmp);
    $photoX = ImagesX($images_orig);
    $photoY = ImagesY($images_orig);
    $images_fin = ImageCreateTrueColor($width, $height);
    ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
    ImageJPEG($images_fin,"../".$galRep.$imagesName);
    ImageDestroy($images_orig);
    ImageDestroy($images_fin);
}

function SaveImage($galPath,$img_filename,$img_thumbname,$gal_id,$img_desc,$img_alt,$img_title)
{
    $FilesDAO = DAOFactory::getFilesDAO();
    $Files = new File();
    $Files->filesName = $galPath.$img_filename;
    $Files->thumbnails = $galPath.$img_thumbname;						
    $FilesID = $FilesDAO->insert($Files);

    $DatImmagini = new DatImmagini();
    $DatImmagini->filesID = $FilesID;
    $DatImmagini->idGalleria = $gal_id;				
    $DatImmagini->title = $img_title;
    $DatImmagini->description = $img_desc;
    $DatImmagini->filesID = $FilesID;
    $DatImmagini->alt = $img_alt;

    $DatImmaginiDAO = DAOFactory::getDatImmaginiDAO();
    $idImmagine = $DatImmaginiDAO->insert($DatImmagini);
}

function ResizeImage($img_size,$img_max_width,$img_max_height,$gal_rep,$img_filename,$img_tmp)
{
    if(IsBetterResizedWidth($img_size, $img_max_width))
        ImageResampling ($img_tmp, $img_filename, $gal_rep, $img_max_width);   
    else if(IsBetterResizedHeight($img_size, $img_max_height))
        ImageResampling ($img_tmp, $img_filename, $gal_rep, GetBestWidth($img_size, $img_max_height));
    else
        copy($img_tmp,"../".$gal_rep.$img_filename); 
}

	require_once(dirname(__DIR__).DIRECTORY_SEPARATOR."config.inc.php");
	require_once(dirname(__DIR__).DIRECTORY_SEPARATOR."model/include_dao.php");
	
	$maxWidth = 1000;
        $maxHeight = 1000;
	
	$DatGallerieDAO = DAOFactory::getDatGallerieDAO();
	$selected_radio = $_POST['saveMode'];
	$gallery;	
	$galleryID;
	$galleryRepository = "";
	if($selected_radio == "new")
	{	
		$gallery = new DatGallerie();
		if(!isset($_POST['galleryName']))
			die("in modalità new il nome della galleria è obbligatorio");
		$galleryTitle = quoteReplacement($_POST['galleryName']);
		
		$gallery->title = $galleryTitle;
		$checkExists = $DatGallerieDAO->queryByTitle($gallery->title);
		if(isset($checkExists->id))
			die("the gallery ".$gallery->title." already exists, please change name");
		$gallery->path = $gallery->title;
		$galleryID = $DatGallerieDAO->insert($gallery);
		$gallery->id = $galleryID;		
		$galleryRepository = $ImageRepository."/".$gallery->path."/";
		if(!mkdir("../".$galleryRepository))
			die("error on creating specified dir:  "."../".$galleryRepository);
	}
	else if ($selected_radio == "add")
	{
		$galleryID = $_POST['GalleryList'];
		$gallery = $DatGallerieDAO->load($galleryID);
		$galleryRepository = $ImageRepository."/".$gallery->path."/";
	}
	if(isset($_FILES['fileUpload'])){
            $errors= array();
            foreach($_FILES['fileUpload']['tmp_name'] as $key => $tmp_name ){
                $file_name = $key.$_FILES['fileUpload']['name'][$key];
		$file_size =$_FILES['fileUpload']['size'][$key];
		$file_tmp =$_FILES['fileUpload']['tmp_name'][$key];
		$file_type=$_FILES['fileUpload']['type'][$key];	
                
                if($file_size > (20*1024*1024))
			$errors[]='File size must be less than 20 MB';
                if(!empty($errors))
                    print_r($errors);
                
                
                try
                {
                    $size = GetimageSize($file_tmp);                
                    ResizeImage($size,$maxWidth,$maxHeight,$galleryRepository,$file_name,$file_tmp);
                }
                catch(Exception $e)
                {
                    $errors[] = "Errore durante la scalatura dell'immagine  nome file: ".$file_name." errore: ".$e->getMessage()."\n";
                }
                try
                {
                    $imagesThumbName = "thumbnails_".$file_name;
                    ResizeImage($size,400,400,$galleryRepository,$imagesThumbName,$file_tmp);
                }
                catch(Exception $e)
                {
                    $errors[] = "Errore durante la creazione della miniatura  nome file: ".$file_name." errore: ".$e->getMessage()."\n";
                }
                try
                {   
                    $title = str_replace(".".$file_type, "", $file_name);
                    SaveImage($galleryRepository,$file_name,$imagesThumbName,$gallery->id,"",$title,$title);
                }
                catch(Exception $e)
                {
                    $errors[] = "Errore nel salvataggio a database: ".$e->getMessage()."\n";
                }
            }
        }
	
	if(empty($errors))
            header("location:".$redirectPage);//redirect
        else
            print_r($errors);
	
?>
