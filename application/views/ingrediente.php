<html>
    <body>
        <div style='width:960px; margin-left:auto; margin-right:auto;'>
            <img src="<?php echo base_url('application/assets/images/header.png'); ?>"/>
            <hr>
            <div id='bemvindo' style="float:right">Bem vindo <?php echo $nome; ?>! (<a href="<?php echo site_url('/login/doLogoff');?>">Sair</a>)</div><br>
            <form id="refeicao" name="refeicao" method="post" action="<?php echo site_url("refeicao/salvar"); ?>">
                Data: <input type="text" value="" name="data" />
                <br>Ingredientes:<br>
                <fieldset border="1">
                    Alimento: <input type="text" value="" name="alimento" />
                    Quantidade: <input type="text" value="" name="quantidade" />
                    Unidade: <select id="id_unidade_medida" name="id_unidade_medida">
                        <?php foreach ($unidades as $unidade) {
                                echo "<option value='".$unidade['id_unidade_medida']."'>".$unidade['unidade']."</option>";
                        } ?>
                    </select>
                </fieldset><br>
                <fieldset border="1">
                    Alimento: <input type="text" value="" name="alimento2" />
                    Quantidade: <input type="text" value="" name="quantidade2" />
                    Unidade: <select id="id_unidade_medida" name="id_unidade_medida2">
                        <?php foreach ($unidades as $unidade) {
                                echo "<option value='".$unidade['id_unidade_medida']."'>".$unidade['unidade']."</option>";
                        } ?>
                    </select>
                </fieldset><br>
                <br><input type="submit" value="Salvar">
            </form>
        </div>
    </body>
</html>
