<?php

//if(!BrowserTools::isMobile())
  if(true)
{
?>
<div id="vslides">
<iframe src="http://www.youtube.com/embed/vCUHvT7IG4Q" class="youtube-player" type="text/html"  id="v_1" frameborder="0" width="100%" height="100%" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0" style="overflow:visible; width:100%; display:block" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
<iframe src="http://www.youtube.com/embed/KDnxsBwsA4A" class="youtube-player" type="text/html" id="v_2" frameborder="0" width="100%" height="100%" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0" style="overflow:visible; width:100%; display:block" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
<iframe src="http://www.youtube.com/embed/DD0BmgEEjW0" class="youtube-player" type="text/html" id="v_3" frameborder="0" width="100%" height="100%" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0" style="overflow:visible; width:100%; display:block" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
<iframe src="http://www.youtube.com/embed/8opta3y6nPE" class="youtube-player" type="text/html" id="v_4" frameborder="0" width="100%" height="100" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0" style="overflow:visible; width:100%; display:block" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
</div>

<!-- <div id="Glide" class="glide">

    

    <div class="glide__wrapper">
        <ul class="glide__track">
            <li class="glide__slide"><iframe src="http://www.youtube.com/embed/vCUHvT7IG4Q" class="youtube-player" type="text/html"  id="v_1" frameborder="0" width="100%" height="500px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0" style="overflow:visible; width:100%; display:block" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></li>
            <li class="glide__slide"><iframe src="http://www.youtube.com/embed/KDnxsBwsA4A" class="youtube-player" type="text/html" id="v_2" frameborder="0" width="100%" height="500px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0" style="overflow:visible; width:100%; display:block" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></li>
            <li class="glide__slide"><iframe src="http://www.youtube.com/embed/DD0BmgEEjW0" class="youtube-player" type="text/html" id="v_3" frameborder="0" width="100%" height="500px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0" style="overflow:visible; width:100%; display:block" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></li>
        </ul>
    </div>

    <div class="glide__bullets"></div>

</div> -->


<script>
$(function() {
      $('#vslides').slidesjs({
        width: 940,
        height: 528,
        play: {
          active: true,
          auto: true,
          interval: 4000,
          swap: true
        },
        pagination:{
          active: false
        }
      });
      $('a.slidesjs-stop.slidesjs-navigation').css('display', 'none');
    });
</script>
<?php 
}
//else
//{

 ?>
<!--
<li>

    <iframe src="http://www.youtube.com/embed/vCUHvT7IG4Q" class="youtube-player" type="text/html"  id="v_1" frameborder="0" width="100%" height="60%" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0" style="overflow:visible; width:100%; display:block" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
  </li>
  <li>
    <iframe src="http://www.youtube.com/embed/KDnxsBwsA4A" class="youtube-player" type="text/html" id="v_2" frameborder="0" width="100%" height="60%" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0" style="overflow:visible; width:100%; display:block" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
  </li>
  <li>
    <iframe src="http://www.youtube.com/embed/DD0BmgEEjW0" class="youtube-player" type="text/html" id="v_3" frameborder="0" width="100%" height="60%" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0" style="overflow:visible; width:100%; display:block" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
  </li>
  <li>
    <iframe src="http://www.youtube.com/embed/8opta3y6nPE" class="youtube-player" type="text/html" id="v_4" frameborder="0" width="100%" height="60%" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0" style="overflow:visible; width:100%; display:block" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
  </li>
  
</ul>

-->
<?php 
//}
?>