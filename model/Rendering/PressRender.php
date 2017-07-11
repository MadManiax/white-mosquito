<!-- table rows -->

<div id="pslides">
<?php
require_once("model/include_dao.php");
$daoPress = DAOFactory::getDatPressDAO();

if(!isset($_GET["pressId"]))
{
?>



<?php
	$today = date('Y-m-d');
	$allPress = $daoPress->queryTopAllOrderBy("data desc","5");
	foreach($allPress as $pressItem)
	{	
            $pressId = $pressItem->id;
            $pressTitle = $pressItem->title;
            $pressSubTitle = $pressItem->subtitle;
            $pressStralcio = $pressItem->stralcio;
            $pressLink = $pressItem->link;
            $pressData = $pressItem->data;
            include("PressItem.php");
	}
}
else
{
	$pressId = $_GET["pressId"];
	$pressDetail = $daoPress->load($pressId);
	$pressDetailTitle = $pressDetail->title;
        $pressDetailSubTitle = $pressDetail->subtitle;
        $pressDetailDate = $pressDetail->data;
        $pressDetailText = $pressDetail->text;
        $pressDetailLink = $pressDetail->link;
	include("PressDetail.php");
	?>
	<a href="press.php" style="float:right;">Indietro</a>
	<?php
}

?>
</div>