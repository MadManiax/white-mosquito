/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function loadMusicRaiser(){
	$.get( "https://www.musicraiser.com/projects/5991-superego-lalbum", function( data ) {
	  $( "#musicraiser" ).html( data );
	  
	});
	//$("#musicraiser").load("https://www.musicraiser.com/projects/5991-superego-lalbum");
}
function ColorChanger(controlId){
    this.controlId = controlId;
    this.itemInterval = 200;
    this.mode = 1;
    this.baseColor = "#5A5A5A";
    this.baseSize = "-=3px";
    this.newColor = "#a80707";
    this.newSize = "+=3px";
    this.easing = "linear";
    
    this.change = function(){
        $(this.controlId).animate({color: this.baseColor}, this.interval);
        
        var that = this;
        var infiniteLoop = setInterval(function(){
            if(that.mode === 1)
            {
                that.mode = 2;
                $(that.controlId).animate({color:that.newColor},that.itemInterval);
            }
            if(that.mode === 2)
            {
                that.mode = 1;
                $(that.controlId).animate({color: that.baseColor },that.itemInterval);
            }
        }, that.itemInterval);
    };
}

function TextTyper(id,text){
    this.charIndex = 0;
    this.id = id;
    this.text = text;
    this.type = function()
    {
      $(this.id).html(this.text.substr(0, this.charIndex++));
      
        
      if(this.charIndex < this.text.length  + 1)
      {
        var that = this;
        setTimeout(function(){that.type();},40);
        
      }
      else
      {
        this.charIndex = 0;
        $(this.id).fadeOut().fadeIn('slow');
      } 
    };    
}




var menuFader = {
    fade: function ()
    {
        $("div#menuWM.interno ul li a b").delay(1000).animate({fontSize:"20px"},1000);                        
        $("div#menuWM.interno ul li a").animate({color:"#5A5A5A"},4000);                        
    }
};        




$(document).ready(function(){   
    /*
    var textCap1 = new TextTyper("div#cap1","Il rock and roll morirà entro giugno");        
    var textCap2 = new TextTyper("div#cap2","Variety 1965");          
    
    textCap1.type();
    
    textCap2.type();*/

    //colorChanger.change();
    /*var cChanger = new ColorChanger("a.newAlbum");
    cChanger.change();
	//loadMusicRaiser();*/
    menuFader.fade();
	//$("#content").css("width","1160px");
	//$("#container").css("width","100%");
});