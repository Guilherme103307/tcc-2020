$(document).ready(function(){
	$('a[data-confirm]').click(function(ev){
		var href = $(this).attr('href');
		if(!$('#confirm-delete').length){
			$('body').append('<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header text-white" style="background-color: #FA8072; ">Novo Amigo Adicionado!<span aria-hidden="true">&times;</span></button></div><div class="modal-body"></div><div class="modal-footer"><a class="btn text-white" style="background-color: #FA8072; color:white" id="dataComfirmOK">OK!</a></div></div></div></div>');
		}
		$('#dataComfirmOK').attr('href', href);
        $('#confirm-delete').modal({show: true});
		return false;
		
	});
});