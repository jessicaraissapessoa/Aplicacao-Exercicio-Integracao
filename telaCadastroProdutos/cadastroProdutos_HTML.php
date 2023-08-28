<!--
<?php
include('cadastroProdutos_PHP.php')
?>
-->

<!DOCTYPE html>

<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Cadastro de Produto</title>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="cadastroProdutos_CSS.css">
    </head>

    <body>

        <div class="container">
            <Center>

                <div class="box-one">

                    <div class="usuario">
                        <ul class="dados_usuario">
                            <li><i id="account_circle" class="material-icons">menu</i><?php echo $nomeusuario; ?></li>
                        </ul>
                    </div>

                    <div id="formulario_cadastro">
                        <form action="cadastroProdutos_scripting.php" method="post" onsubmit="return validateForm()">
                            <ul>
                                <li id="nome_produto">Nome do produto:</li>
                                <li>
                                    <input type="espaco_nome_produto" name="espaco_nome_produto" id="espaco_nome_produto" required onkeyup="validate()">
                                </li>
                                <li id="feedback">
                                    <span class="feedback" id="campo-feedback"></span>
                                </li>
                            </ul>

                            <ul>
                                <li id="descricao_produto">Descrição do produto:</li>
                                <li>
                                    <input type="espaco_descricao_produto" name="espaco_descricao_produto" id="espaco_descricao_produto" required onkeyup="validate()">
                                </li>
                                <li id="feedback">
                                    <span class="feedback" id="campo-feedback"></span>
                                </li>
                            </ul>

                            <button type="submit" id="cadastrar">Cadastrar</button>

                        </form>

                        <form action="umatelaai.php">
                            <button type="submit" id="voltar">Voltar</button>
                        </form>

                    </div>

                </div>

            </Center>
        </div>

        <script>
            //Verifica se o campo nome está em branco ou preenchido
        function validate() {
            var campoInput = document.getElementById("campo");
            var campoFeedback = document.getElementById("campo-feedback");
            var campo = campoInput.value;

            if (campo.trim() === "") {
                campoFeedback.textContent = "O campo não pode estar em branco.";
                campoInput.style.backgroundColor = "lightcoral";
            } else {
                campoFeedback.textContent = "";
                campoInput.style.backgroundColor = "lightgreen";
            }
        }

        function validateForm() {
            var inputs = document.querySelectorAll("input");
            var invalidFields = false;

            inputs.forEach(function (input) {
                if (input.style.backgroundColor === "lightcoral") {
                    invalidFields = true;
                }
            });

            if (invalidFields) {
                return false; // Cancela o envio do formulário
            }

            return true; // Permite o envio do formulário
        }
        </script>

    </body>


</html>