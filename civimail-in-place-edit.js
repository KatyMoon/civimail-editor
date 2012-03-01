
$(function() {
        
	$('.editable').editable(function(value, settings) { 
	     return(value);
	  }, { 
	      submit : 'OK',
	      cancel : 'cancel',
	 });
	
	$( "#items" ).sortable();

	$(".item").hover(
	  function () {
	    $(this).append($("<div class='add_remove'><input type='button' value='+'><input type='button' value='-'><div>"));
	  }, 
	  function () {
	    $(this).find("div.add_remove").remove();
	  }
	);
		
		
});