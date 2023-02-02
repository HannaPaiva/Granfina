<?php

use core\classes\Studio;
?>


<!-- <div class="container-fluid">
    <div class="row mt-3">
        <div class="col-md-2">
            < ?php include(__DIR__ . '/layouts/admin_menu.php') ?>
        </div> -->
<!-- form -->


<!--Primeira Coluna-->
<section class="container">
    <div class="row my-5">
        <div class="col-sm-8 offset-sm-2 card bg-light p-4">

            <form action="?a=gere_cliente_update&id=<?= Studio::aesEncriptar($cliente->id_cliente) ?>" method="POST" >

                <input type="hidden" name="id_cliente" value="<?= $cliente->id_cliente ?>">
                <input type="hidden" name="text_activo" value="<?= $cliente->activo ?>">
                <input type="hidden" name="categoria_icone" value="<?= $cliente->foto ?>">

                <!--Alinhamento de Campos Primeira Coluna-->



                <!--Campo NOME-->
                <label for="nome">Nome :</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-user" id="basic-addon-nome"></span>
                    </div>
                    <input type='text' name='text_nome' id="id_text_nome" class="form-control" value="<?= $cliente->nome_completo ?>" autofocus required><br>
                </div>


                <!--Campo EMAIL-->
                <label for="email">Email :</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-user" id="basic-addon-email"></span>
                    </div>
                    <input type='email' name='text_email' id="id_text_email" class="form-control" value="<?= $cliente->email ?>" autofocus required><br>
                </div>

                <!--Campo TELEFONE-->
                <label for="telefone">Telefone :</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-user" id="basic-addon-telefone"></span>
                    </div>
                    <input type='text' name='text_telefone' id="id_text_telefone" class="form-control" value="<?= $cliente->telefone ?>" autofocus required><br>
                </div>



                <!--Campo MORADA-->
                <label for="morada">Morada :</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-user" id="basic-addon-morada"></span>
                    </div>
                    <input type='text' name='text_morada' id="id_text_morada" class="form-control" value="<?= $cliente->morada ?>" autofocus required><br>
                </div>



                <!--Campo CIDADE-->
                <label for="cidade">Cidade :</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-user" id="basic-addon-cidade"></span>
                    </div>
                    <input type='text' name='text_cidade' id="id_text_cidade" class="form-control" value="<?= $cliente->cidade ?>" autofocus required><br>
                </div>


                <div class='col-xs-3'>
                    <!--Campo data criação-->
                    <label for="created">Criado em :</label>
                    <div class="input-group col-md-6 col-lg-6">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-user" id="basic-addon-created"></span>
                        </div>
                        <input type='text' name='text_created_at' id="id_text_created_at" class="form-control" value="<?= $cliente->created_at ?>" autofocus required><br>
                    </div>

                    <!--Campo data alteração-->
                    <label for="created">Alterado em :</label>
                    <div class="input-group col-md-6 col-lg-6">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-user" id="basic-addon-created"></span>
                        </div>
                        <input type='text' name='text_updated_at' id="id_text_updated_at" class="form-control" value="<?= $cliente->updated_at ?>" autofocus required><br>
                    </div>


                    <!--Final ROW De Posiçao Primeira Coluna-->
                </div>
                <!--Final ROW De Posiçao Primeira Coluna-->
                <!--Fim Primeira Coluna-->

                <!--ROW De Posiçao Segunda Coluna-->


                <!--Alinhamento de Campos Segunda Coluna-->
                <div class="mb-3">

                    <!--Fim Campo Situaçao-->
                    <!--Campo Data Prevista-->

                    <!--Senha-->
                    <label for="senha" class="control-label">
                        <br>Password: <br></label>
                    <div class="input-group">
                        <!-- <div class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </div> -->
                        <div><input style="background-color: #008B45; color: white; text-align:center;" readonly class="form-control" type="text" name="text_senha_1" id="senha" value="<?= $cliente->senha ?>"></div>

                        <!--Fim Senha-->

                        <!--Data Deleted-->
                        <label for="deleted_at" class="control-label">
                            <br>Apagado em: <br></label>
                        <div class="input-group col-lg-10">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </div>
                            <div><input style="background-color: #008B45; color: white; text-align:center;" readonly class="form-control" type="text" name="text_deleted_at" id="text_deleted_at" value="<?= $cliente->deleted_at ?>"></div>
                        </div>
                        <!--Fim deleted_at-->
                    </div>

                </div>

                <div class="col-xs-3">
                    <!--Campo foto-->
                    <label for="foto" class="control-label">
                        <br>Foto:<br></label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-pencil" id="basic-addon-obs"></span>
                        </div>


                    </div>
                    <div class="mb-3">
                        <img src="../admin/assets/images/clientes/<?= $cliente->foto ?>" class="img-fluid img-thumbnail img-50-50"> <!-- Permite tornar imagem responsiva -->
                    </div>
                    <!-- atualiza imagem -->
                    <div class="mb-3 align=center">

                        <label class="label-file align=center" for="text_file">Upload Ficheiro</label>
                        <input type="file" name="text_file" id="text_file" onchange="previewImagem()" accept="image/jpeg,image/png,image/gif">
                        <img class="infosUsuario__avatar avatar--bordaAzul" id="foto" src="#" style="width: 150px; height:150px;">

                    </div>
                    <!--Fim Campo foto-->
                </div>
                <!--Final ROW De Posiçao Segunda Coluna-->
        </div>
    </div>
    <!--Final ROW De Posiçao Segunda Coluna-->
    <!--Fim Segunda Coluna-->

</section>




<section class="container">
    <div class="row my-5 justify-content-center">


        <div class="col-2 mb-1 card bg-light p-4">
            <a href="?a=gere_lista_clientes" class="btn btn-secondary btn-sm">Cancelar</a>

        </div>

        <div class="col-2 mb-1 card bg-light p-4">
            <input type="submit" value="Atualizar" class="btn btn-primary btn-sm">
        </div>

        <!-- <div class="col-2 mb-1 card bg-light p-4">
                <button type="button" class="btn btn-primary" onclick="gerarUtitlizadorPassword()">Refresh </button>
            </div> -->

        <?php if (!empty($_SESSION['erro'])) : ?>
            <div class="alert alert-danger p-2 text-center">
                <?= $_SESSION['erro'] ?>

            </div>
        <?php endif; ?>
        <?php if (!empty($_SESSION['success'])) : ?>
            <div class="alert alert-success p-2 text-center">
                <?= $_SESSION['success']  ?>
            </div>
        <?php endif; ?>
    </div>

</section>
</form>



<!-- Fim form -->
<script>
    function limite_obs(obj) {
        obj.value = obj.value.substring(0, 1000);
    }

    function gerarUtitlizadorPassword() {
        //definir variáveis
        let client_username = "";
        let client_password = "";
        let charbase = " abcdefghijklmnopqrstuvxzABCDEFGHIJKLMNOPQRSTUVXZ0123456789";
        let client_username_length = 32;
        let client_password_length = 32;
        //client username
        for (var i = 1; i <= client_username_length; i++) {
            client_username += charbase.charAt(Math.floor(Math.random() * charbase.length));
        }

        //client password
        for (var i = 1; i <= client_password_length; i++) {
            client_password += charbase.charAt(Math.floor(Math.random() * charbase.length));
        }
        // Colocar os valores nos input' s //document.querySelector("#utilizador").value=client_username; document.querySelector("#senha").value=client_password; } function mudar_ativo() { } // gerar username e senha // gerarUtitlizadorPassword(); 
    }



    function previewImagem() {

        const [file] = text_file.files;
        if (file) {
            foto.src = URL.createObjectURL(file);
        }


        // receber o valor do campo input da imagem
        var imagem_C = document.querySelector('input[name=text_file]').files[0];
        //variável preview vai receber o valor do selector da nossa tag img
        var preview = document.querySelector('foto.src');
        // ler resultado
        var reader = new FileReader() // permite ler o conteúdo de forma assincrona
        // vamos pegar o objeto, depois do FileReader estar finalizado

        reader.onloadend = function() {
            // agora depois de lido apresenta a imagem
            // este preview estou a atribuir o source, que será o caminho da imagem
            // neste caso a imagem que estiver dentro do reader

            foto.src = reader.result;
        }

        // Verificar se esta váriável for true
        if (imagem_C) {
            // Se a imagem existir vou aceder à imagem
            // Ler conteúdo do ficheiro
            reader.readAsDataURL(imagem_C);

            // print_r(imagem);
            //     document.querySelector("#utilizador").value = imagem;
            //    document.getElementById("utilizador").innerHTML = carros[0];
            //document.querySelector("[name='utilizador']").value = x;

            // Apanha o nome da Imagem
            var fullPath = document.getElementById('text_file').value;
            if (fullPath) {
                var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                var filename = fullPath.substring(startIndex);
                if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                    filename = filename.substring(1);
                }
                //alert(filename);
                document.querySelector("[name='nome_imagem']").value = filename;
            }

        } else {
            // Caso contrario será retornada um vazio
            preview.src = "";
        }

    }
</script>
