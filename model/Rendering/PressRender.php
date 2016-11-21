<!-- table rows -->
<?php
require_once("model/include_dao.php");
$daoPress = DAOFactory::getDatPressDAO();

if(!isset($_GET["pressId"]))
{
?>

<script type="text/javascript">
    $(document).ready(function()
    {
        var maxlength = 800;
        $("div.pressText").each(function(){
            var text = $(this).text();
            if(text.length > maxlength)
            {
                text = text.substring(0,maxlength);
                $(this).text(text+"...");
            }
        });
        
    });
</script>

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
