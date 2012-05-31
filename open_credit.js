$(document).ready(function() {
	$('#dreamer').each(function(){
		$(this).qtip({
			content:{text:$('#dreamer-link')},
			position: {
				corner: {
					target: 'topMiddle',
 					tooltip: 'bottomMiddle' 			
				}			
			},
			style: {
				name: 'blue',
				tip: 'bottomMiddle',
				border: {
       		width: 1,
        	radius: 5
      	},
			},
    	hide: {
  			fixed: true,
 				delay: 180
     	}
		});
	});
});
/*
function showblock() {
  $("#dreamer-link").show();
}

function hideblock() {
  setTimeout(function () {
	$("#dreamer-link").hide();
  }, 1000);
  
}*/
