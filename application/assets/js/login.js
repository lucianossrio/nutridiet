$(document).ready(function(){
	jQuery('#frmLogin').validate( {
		rules: {
			email: {
				required: true,
				email: true
			},
			senha: {
				required: true
			},
		},
		messages: {
			email: {
				required: "Digite seu e-mail.",
				email: "E-mail inválido!"
			},
			senha: {
				required: "Digite sua senha.",
			},
		}
	});
});