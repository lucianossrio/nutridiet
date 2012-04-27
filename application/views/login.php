<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bem Vindo ao NutriDiet</title>

	<link href="<? echo base_url('application/assets/css/login.css'); ?>" type="text/css" media="screen" rel="stylesheet"/>

	<script src="<? echo base_url('application/assets/js/jquery-1.7.1.min.js'); ?>" type="text/javascript"></script>
	<script src="<? echo base_url('application/assets/js/jquery.validate.js');?>" type="text/javascript"></script>
	<script src="<? echo base_url('application/assets/js/login.js'); ?>" type="text/javascript"></script>

</head>
<body>

<div id="container">
	<h1>Bem vindo ao NutriDiet</h1>

	<div id="conteudo">
		<form id="frmLogin" name="frmLogin" method="POST" action='' >
			<span>Login:</span>
			<input type="text" name="email" id="email" />

			<span>Senha:</span>
	        <input type="password" name="senha" id="senha"/>

			<input type="submit" value="Entrar" id="entrar" />
        </form>
	</div>

	<p class="footer"><?php echo $msg; ?></p>
</div>

</body>
</html>