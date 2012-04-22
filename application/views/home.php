<html>
    <body>
        <div style='width:960px; margin-left:auto; margin-right:auto;'>
            <img src="<? echo base_url('application/assets/images/header.png'); ?>"/>
            <hr>
            <div id='bemvindo' style="float:right">Bem vindo <? echo $nome; ?>! (<a href="<? echo site_url('/login/doLogoff');?>">Sair</a>)</div><br>
            <center>
                <table>
                    <tr align="center">
                        <td><a href="#"><img src="<? echo base_url('application/assets/images/refeicoes.png'); ?>"/></a></td>
                        <td><a href="#"><img src="<? echo base_url('application/assets/images/exercicios.png'); ?>" /></a></td>
                    </tr>
                    <tr align="center">
                        <td><a href="#"><img src="<? echo base_url('application/assets/images/acompanhamento.png'); ?>" /></a></td>
                        <td><a href="#"><img src="<? echo base_url('application/assets/images/dados.png'); ?>" /></a></td>
                    </tr>
            </center>
        </div>
    </body>
</html>