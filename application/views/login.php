<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bem Vindo ao NutriDiet</title>

	<style type="text/css">


	body {
		background-color: #315577;
		color: #4F5155;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		margin: 40px;
		position: relative;
	}

	#container{
		background-color: #FFF;
		border: 1px solid #D0D0D0;
		left: 405;
		position: absolute;
		margin: 10px;
		top: 130;
		width: 325px;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
		-webkit-border-radius: 4px;
		-moz-border-radius: 4px;
		border-radius: 4px;
	}

	#container h1 {
		color: #315577;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}	
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 0;
	}

	#conteudo{
		margin-left:10px;
	}
	
	#conteudo span{
		margin-right: 15px;
	}

	#conteudo #email{
		margin-left: 6px;
		margin-right:42	px;
	}

	#container #email,
	#container #senha{
		border-radius: 2px;
		margin-bottom: 10px;
		width: 180px;
		height: 25px;
	}

	#container #senha{
		margin-right: 0;
	}


	#entrar{
		color: #fff;
		cursor: pointer;
		font-size: 12px;
		background-color: #49AFCD;
		background-image: -webkit-linear-gradient(top, #5BC0DE, #2F96B4);
		background-image: -o-linear-gradient(top, #5BC0DE, #2F96B4);
		background-image: linear-gradient(top, #5BC0DE, #2F96B4);
		background-repeat: repeat-x;
		border-color: #2F96B4 #2F96B4 #1F6377;
		border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
		-webkit-border-radius: 4px;
		position: relative;
		right: -1;
	}

	#entrar:hover{
		text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.5);
  		color: #ffffff;
	}

	#entrar:active{
		color: rgba(255, 255, 255, 0.75);
	}

	</style>
</head>
<body>

<div id="container">
	<h1>Bem vindo ao NutriDiet</h1>

	<div id="conteudo">
		<form name="frmLogin" method="POST" action='' >
			<span>Login:</span>
			<input type="text" name="email" id="email" />

			<span>Senha:</span>
	        <input type="password" name="senha" id="senha" />

			<input type="submit" value="Entrar" id="entrar" />
        </form>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>