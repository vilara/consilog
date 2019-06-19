$(document).ready(function() {
		 $('#codom').mask('999999');
		 $('#codoug').mask('999999');
		 $('#ddd').mask('(99)');
		 $('#numero').mask('99999-9999');
		 
	// Acesso ao webservice dos correios inicio
	// -------------------------------------------------------------

	function limpa_formulário_cep() {
		// Limpa valores do formulário de cep.
		$("#rua").val("");
		$("#bairro").val("");
		$("#cidade").val("");
		$("#estado").val("");
		$("#numeroEndereco").val("");
		$("#cep").val("");
		$("#complemento").val("");
	}
	
//	limpa_formulário_cep();

	$("#cep").blur(function() {

		// Nova variável "cep" somente com dígitos.
		var cep = $(this).val().replace(/\D/g, '');

		// Verifica se campo cep possui valor informado.
		if (cep != "") {
			
			
            	
//            	$("#rua").val("...");
//        		$("#bairro").val("...");
//        		$("#cidade").val("...");
//        		$("#estado").val("...");
//			
        		//Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#rua").val(dados.logradouro);
                        $("#bairro").val(dados.bairro);
                        $("#cidade").val(dados.localidade);
                        $("#estado").val(dados.uf);
                        $("#cep").val(cep);
                        
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        alert("CEP não encontrado.");
                    }
                });
            
		} 
		
		else {
			// cep sem valor, limpa formulário.
			limpa_formulário_cep();
		}

	});
	// Acesso ao webservice dos correios fim
	// -----------------------------------------------------------------

});