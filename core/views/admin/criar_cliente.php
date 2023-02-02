<!-- ««««««««««««««««««« BOTÃO DE CRIAR CLIENTE  »»»»»»»»»»»»»»»»»»»»»»»»»»»-->
<button type="button" class="btn btn-primary float" data-bs-toggle="modal" data-bs-target="#exampleModal3" style=" z-index: 1;">+</button>


<!-- Modal CRIAR -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Criar Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                <form class="forms-sample" action="?a=criar_cliente_button" method="POST">
                    <div class="form-group">
                        <label for="exampleInputUsername1">Nome</label>
                        <input type="text" name="t_nome" class="form-control" id="t_nome" placeholder="Nome da cliente" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">E-mail</label>
                        <input type="text" name="t_email" class="form-control" id="t_email" placeholder="E-mail da cliente" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputUsername1">Senha</label>
                        <input type="password" name="t_pass" class="form-control" id="t_pass" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputUsername1">Data de nascimento</label>
                        <input type="date" name="datanasc" class="form-control" id="t_nasc" placeholder="dd-mm-yyyy" value="" min="1930-01-01" max="<?= date('d-m-Y'); ?>" required>
                    </div>


                    <div class="form-group">
                        Lingua: <select name="t_lang" class="form-control" >

                            <option value="pt"> Português</option>
                            <option value="eng"> Inglês</option>
                        </select>
                    </div>
                    <div class="form-group">
                        Status: <select name="status" class="form-control">

                            <option value="ativo"> Ativo</option>
                            <option value="desativado">Desativado</option>
                        </select>
                    </div>
                    <input type="submit" class="btn btn-primary" value="INSERIR">





                    </div>
                    <div class = "modal-footer">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    </div>
               
                 
      
            <button class="btn btn-primary" onclick="AdicionarCliente()">GERAR Cliente</button>
            <!-- <div class="modal-body">

                <form action="?a=criar_cliente_button" method="POST">

                    Nome: <input type="text" name="t_nome" id="t_nome" required>
                    <br>
                    <br>
                    Email: <input type="text" name="t_email" id="t_email" required>
                    <br>
                    <br>
                    Senha: <input type="password" name="t_pass" id="t_pass" required>
                    <br>
                    <br>
                    Data de nascimento: <input type="date" name="datanasc" id="t_nasc" placeholder="dd-mm-yyyy" value="" min="1930-01-01" max="<?= date('d-m-Y'); ?>" required>


                    <BR></BR>

                    Lingua: <select name="t_lang">

                        <option value="pt"> Português</option>
                        <option value="eng"> Inglês</option>
                    </select>

                    Status: <select name="status">

                        <option value="ativo"> Ativo</option>
                        <option value="desativado">Desativado</option>
                    </select>

                    <input type="submit" class="btn btn-primary" value="INSERIR">


                </form> -->

        </div>

    </div>
</div>


<script>
    function AdicionarCliente() {

        max = 900;
        min = 1;
        maxpass = 900000;
        minpass = 10000;

        valor = Math.floor(Math.random() * (max - min) + min);

        document.getElementById("t_nome").value = valor;
        document.getElementById("t_email").value = valor + "@aeffl.pt";
        senha = document.getElementById("t_pass").value = Math.floor(Math.random() * (maxpass - minpass) + minpass);
        nascimento = document.getElementById("t_nasc").value = "2000/07/05";



    }
</script>