<html>
    <head>
        <meta charset="utf-8">
        <title>Bem Vindo ao NutriDiet</title>

        <link href="<?php echo base_url('application/assets/css/ui-lightness/jquery-ui-1.8.20.custom.css'); ?>" type="text/css" media="screen" rel="stylesheet"/>

        <style type="text/css">
            div.ui-datepicker{
                font-size:12px;
            }
        </style>

        <script src="<?php echo base_url('application/assets/js/jquery-1.7.2.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('application/assets/js/jquery-ui-1.8.20.custom.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('application/assets/js/jquery.ui.core.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('application/assets/js/jquery.ui.widget.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('application/assets/js/jquery.ui.datepicker.js'); ?>" type="text/javascript"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                $("#data").datepicker({
                    dateFormat: 'dd/mm/yy',
                    dayNames: [
                        'Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'
                    ],
                    dayNamesMin: [
                        'D','S','T','Q','Q','S','S','D'
                    ],
                    dayNamesShort: [
                        'Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'
                    ],
                    monthNames: [
                        'Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro',
                        'Outubro','Novembro','Dezembro'
                    ],
                    monthNamesShort: [
                        'Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set',
                        'Out','Nov','Dez'
                    ],
                    nextText: 'Próximo',
                    prevText: 'Anterior'

                });
            });
        </script>

    </head>
    <body>
        <div style='width:960px; margin-left:auto; margin-right:auto;'>
            <img src="<?php echo base_url('application/assets/images/header.png'); ?>"/>
            <hr>
            <div id='bemvindo' style="float:right">Bem vindo <?php echo $nome; ?>! (<a href="<?php echo site_url('/login/doLogoff'); ?>">Sair</a>)</div><br>
            <form id="refeicao" name="refeicao" method="post" action="<?php echo site_url("refeicao/salvar"); ?>">
                Data: <input type="text" value="" name="data" id="data"/>
                <br>Ingredientes:<br>
                <fieldset border="1">
                    Alimento: <input type="text" value="" name="alimento" />
                    Quantidade: <input type="text" value="" name="quantidade" />
                    Unidade: <select id="id_unidade_medida" name="id_unidade_medida">
                        <?php
                        foreach ($unidades as $unidade) {
                            echo "<option value='" . $unidade['id_unidade_medida'] . "'>" . $unidade['unidade'] . "</option>";
                        }
                        ?>
                    </select>
                </fieldset><br>
                <fieldset border="1">
                    Alimento: <input type="text" value="" name="alimento2" />
                    Quantidade: <input type="text" value="" name="quantidade2" />
                    Unidade: <select id="id_unidade_medida" name="id_unidade_medida2">
                        <?php
                        foreach ($unidades as $unidade) {
                            echo "<option value='" . $unidade['id_unidade_medida'] . "'>" . $unidade['unidade'] . "</option>";
                        }
                        ?>
                    </select>
                </fieldset><br>
                <br><input type="submit" value="Salvar">
            </form>
        </div>
    </body>
</html>
