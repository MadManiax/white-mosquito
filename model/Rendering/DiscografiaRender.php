<div>
    <div class="itemContainer left">
        <?php
//Il potere e la sua signora
        $discoImgSrc = "images/coverAlbum/IlPotereELaSuaSignora.jpg";
        $discoTitle = "Il potere e la sua signora (Riserva Sonora Records)";
        $discoYear = "2012";
        $discoDurata = "38:42";
        $tracks = array(
            array("Candido", "01:34")
            , array("Solite parole", "05:04")
            , array("Stato confusionale", "04:15")
            , array("Manifesto", "04:38")
            , array("Demone", "03:57")
            , array("Forme", "03:11")
            , array("Anche qst è rocchenroll", "00:33")
            , array("In faccia", "03:56")
            , array("Non smetto", "03:37")
            , array("Dimmi", "04:11")
            , array("Nuvola", "03:46")
			, array("Quello che non vedi", "03:57")
			, array("Fino a farmi male", "03:49")
        );
        include("model/Rendering/DiscoItem.php");

//Personalita nascoste
        $discoImgSrc = "images/coverAlbum/personalitaNascoste.jpg";
        $discoTitle = "Personalit&agrave; nascoste";
        $discoYear = "2008";
        $discoDurata = "45:14";
        $tracks = array(
            array("Come se", "03:05")
            , array("Ultimo incontro", "04:48")
            , array("Manifesto", "03:03")
            , array("Sono colpevole", "03:30")
            , array("Quello che non vedi", "04:10")
            , array("White MosQuito", "04:22")
            , array("Non smetto di sognare mai", "03:35")
            , array("Il mio impossibile", "02:37")
            , array("Real", "03:28")
            , array("Tu senza me", "03:21")
            , array("Fino a Farmi male", "04:29")
            , array("Sola e vuota", "04:41")
        );
        include("model/Rendering/DiscoItem.php");
        ?>
    </div>
    <div class="clear"></div>
</div>