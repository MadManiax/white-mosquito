
<!-- META TAGS CONTENT -->
<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>
<meta name="title" content="White MosQuito - Official Website - Biografia"/>
<meta name="description" content="L'influenza maggiore del loro sound ha una chiara matrice seventies cara a gruppi come Led Zeppelin e AC/DC...."/>
<meta name="keywords" content="white mosquito, biography, bio, biografia"/>
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



<!-- some header here     -->
<?php
  //Assign all Page Specific variables
  $pageScripts = ob_get_contents();
  ob_end_clean();
 ?>

<?php
//Buffer larger content areas like the main page content
ob_start();
?>
<div id="biografia_testo" class="column_content left biografia_new" style="overflow:auto">
    
    <p>
        L'influenza maggiore del loro sound ha una chiara matrice seventies cara a gruppi come Led Zeppelin e AC/DC. <br/>
        Mantenendo sempre un proprio stile tendono la mano a gruppi rock dell'italica scena come Litfiba e Afterhours. <br/>
        Fanno particolare attenzione all'effettistica e la sperimentazione, sempre presente nelle loro produzioni ma mai invadente.<br/>
        I loro brani, scritti in Italiano, hanno sempre un giusto equilibrio tra musica e parole, cercano un linguaggio semplice,<br/>
        ma non banale con testi pungenti, talvolta allegorici e ricercati. Il tutto sostenuto da una voce calda ed espressiva<br/>
        che si appoggia al pezzo con linee melodiche mai scontate.<br/>
        <br/>
        Nel 2006 il primo lavoro in studio, un promo cd dal titolo "20 grammi", <br/>
        un assaggio del loro potenziale definito dal portale web genovatune.net:"un mirabile equilibrio tra musica e testi".<br/>
        Vengono selezionati per il "cerca talenti" indetto dal comune di Genova e arrivano secondi alle selezioni liguri per "Arezzo wave". <br/>
        L'occasione più grande arriva vincendo il concorso di Radio 19 e IL SECOLO XIX che dà loro la possibilità di aprire il 5 maggio 2007<br/>
        il concerto dei Deep purple al palasport di Genova, la prima vera occasione di confrontarsi con un grande pubblico e con un palco internazionale.<br/>
        Non deludono le aspettative e riscaldano l'ambiente a tal punto da meritarsi i personalissimi complimenti degli stessi Deep purple.<br/>
        <br/>
        All'attività live che inizia a vederli tra i gruppi più attivi del panorama genovese, si affiancano nel 2008 collaborazioni significative<br/>
        con Emergency e Music for peace per la raccolta di fondi e generi alimentari per i bambini dell'africa.<br/>
        Nello stesso periodo ultimano il loro secondo lavoro in studio dando alla luce, nel giugno 2008,<br/>
        il loro primo album interamente autoprodotto dal nome: "Personalità nascoste".<br/>
        <br/>
        Nel luglio 2008 vengono selezionati come band rock emergente al concorso nazionale Alternative version,<br/>
        concorso parallelo al festival degli interpreti che dà loro la possibilità di partecipare al festival-stage "L'arte dell'incontro"<br/>
        tenutosi dal 1 al 10 agosto a Tione di Trento e organizzato da Franco Fasano e Fausto Bonfanti,<br/>
        con insegnanti del calibro di Ellade Bandini (batteria), Michele Ascolese (chitarra), Simona Bencini (canto), Maurizio Meo (basso) .<br/>
        <br/>
        La band prepara e propone anche una versione acustica del proprio repertorio, che viene accolta molto bene dalla stampa locale:<br/>
        "le quattro zanzare conquistano sin da subito l'attenzione dei presenti, grazie a brani asciutti ed immediati (Come se, Quello che non vedi),<br/>
        che deprivati della saturazione e della potenza che li veste abitualmente, rivelano un'inaspettata delicatezza”.<br/>
        <br/>
        Nel 2011 c’è un cambio di sezione ritmica e a Sergio Antonazzo (voce) e Matteo Magnani (chitarra)<br/>
        si aggiungono Simone Pani (basso) e Stefano Ruiu (batteria).<br/>
        Tra i quattro c’è un intesa tale che porta subito la band in studio per la realizzazione del secondo album<br/>
        uscito a Febbraio 2012 per l’etichetta indipendente Q Label e dal titolo IL POTERE E LA SUA SIGNORA,<br/>
        registrato da Mattia Cominotto (Meganoidi) al GREEN FOG STUDIO di Genova.<br/>
        L’uscita dell’album è stata anticipata dal primo video ufficiale dalla Band :” IN FACCIA”,<br/>
        per la regia di Lucio Basadonne (ENTERTAIN studio di Genova).<br/>
        Attualmente la band è in giro per la promozione dell’album con il PUTTANTOUR.<br/>
        <br/>
        <br/>
        STAY ROCK  (.!..!)
    </p>

</div>
<div class="clear"></div>
<?php
//Assign all Page Specific variables
$pagecontent = ob_get_contents();
ob_end_clean();
$pagetitle = "Band - White Mosquito";
$pageInternaltitle = "Band";
//Apply the template
include("masterpage.php");
?>
