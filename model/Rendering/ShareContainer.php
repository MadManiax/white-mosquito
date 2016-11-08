<script type='text/javascript' src='includes/page_js/sharecontainer.js'/>
<script type="text/javascript">
    $(document).ready(function(){
        addThisShare.load();
        
        $("div#condividi").click(addThisShare.onClickHandler);
        
    });
</script>
<div style="width:100%; height:30px;" id="share">
<?php if (!isset($displayShare)) { ?>                      
        <div style="float:left">
            <div id="fb-root"></div>
            <script>
                (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = "//connect.facebook.net/it_IT/all.js#xfbml=1";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>
            <div id="shareContainer" style="/*position:relative; top:5px; right:5px;*/ width:300px; height:40px;">
                <div class="fb-like" data-href="http://www.whitemosquito.it" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false"></div>
                <!-- Inserisci questo tag nel punto in cui vuoi che sia visualizzato l'elemento pulsante +1. -->
                <div class="g-plusone" style="display: inline-block" data-size="small" data-href="https://plus.google.com/u/0/b/112102260296805028926/112102260296805028926/posts"></div>

                <!-- Inserisci questo tag dopo l'ultimo tag di pulsante +1. -->
                <script type="text/javascript">
                    window.___gcfg = {lang: 'it'};

                    (function() {
                        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                        po.src = 'https://apis.google.com/js/plusone.js';
                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                    })();
                </script>
            </div>
        </div>

    <?php
    }
    ?>
    <div id="condividi" >CONDIVIDI...</div>
    <br/>

    <!-- AddThis Button BEGIN -->
    <div class="addthis_toolbox addthis_default_style " id="addThisShare" style="display: none;" >
        <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
        <a class="addthis_button_tweet"></a>
        <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
        <a class="addthis_counter addthis_pill_style"></a>
    </div>
    <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f157b0d1407428c"></script>
    <!-- AddThis Button END -->
</div>