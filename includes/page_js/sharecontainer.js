var addThisShare = 
{
  id : "div#addThisShare",
  buttonId : "div#condividi",
  shareText : "CONDIVIDI...",
  hideText : "NASCONDI...",
  fadingTime: 300,
  init : function(){
    $(this.id).hide();
  },
  onClickHandler: function()
  {    
    var text = $(this).text();
    
    if(text === addThisShare.shareText)
    { 
      $(addThisShare.id).show(addThisShare.fadingTime);
      $(this).text(addThisShare.hideText);
    }
    else if(text === addThisShare.hideText)
    {
      $(addThisShare.id).hide(addThisShare.fadingTime);
      $(this).text(addThisShare.shareText);
    }
  }
};

$(document).ready(function() {
  addThisShare.init();
  $(addThisShare.buttonId).click(addThisShare.onClickHandler);
});