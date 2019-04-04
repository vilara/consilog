$(document).ready(function() {
	
	
	
	$("#p1").click(function() {
		bootbox.confirm({ 
		    size: "medium",
		    message: "Você confirma a exxclusão do usuário?",
		    callback: function(result){ 
			if(result){
				bootbox.alert('clicou')
			}else{
				
			}
		    
		    }
		})
	});
	
	
	
	
});