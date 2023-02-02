
<!-- TABELA  -->
<button type="button" class="btn btn-primary float" data-bs-toggle="modal" data-bs-target="#exampleModal3">+</button>

<!-- Modal CRIAR -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Criar Cliente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="">
          nome: <input type="text">
          <br>
          email: <input type="text">
          <br>
          senha: <input type="password">
          <br>
          <br>
          data de nascimento: <input type="date">
          <BR></BR>
          lingua: <select name="">
            <option value=""> Português</option>
            <option value=""> Inglês</option>
          </select>
          <input type="submit" value="INSERIR">


        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
        <a href="?a=cliente_apagar_Hard&id=<?= $cliente->id ?>"> <button type="button" class="btn btn-primary">OK</button></a>
      </div>
    </div>
  </div>
</div>




<div id="conteudo" class="col-md-9">

 
  <table class="table" id="tabela-clientes">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">##</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>

        <th scope="col">Status</th>
        <th scope="col">Data de nascimento</th>
        <th scope="col">Idade</th>
      </tr>
    </thead>
    <tbody>

      <?php foreach ($clientes as $cliente) : ?>
        <tr>

          <td scope="row">
            <!-- BUTTON TRIGGER MODAL APAGAR -->
            <button type="button" class="btn btn-primary delbtn" data-bs-toggle="modal" data-bs-target="#exampleModal">Apagar</button>
          </td>

          <!-- BUTTON TRIGGER MODAL EDITAR -->
          <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">Editar</button></td>

          <td><?= $cliente->nome ?></td>
          <td><?= $cliente->email ?></td>
          <td>




            <!-- SWITCH ATIVO E DESATIVADO -->
            <div class="form-check form-switch">

              <input class="form-check-input" name="check" type="checkbox" role="switch" id="flexSwitchCheckDefault" onclick="location.href = '?a=cliente_apagar_soft&id=<?= $cliente->id ?>&status=<?= $cliente->status ?>'" <?= $cliente->status == "ativo" ? "checked" : "unchecked" ?>>
              <label class="form-check-label" for="flexSwitchCheckDefault" id="status"> <?= $cliente->status ?> </label>
              <a href="?a=cliente_apagar_soft&id=<?= $cliente->id ?>&status=<?= $cliente->status ?>">ola </a>
            </div>


          </td>

          <td><?= $cliente->datanasc ?> </td>
          <td><?= $cliente->idade ?> </td>
        </tr>


      <?php endforeach; ?>

    </tbody>
  </table>


</div>

</div>
</div>






<!--****************************** MODAIS ************************************ -->

<!-- Modal APAGAR -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apagar conta?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <p>Você tem certeza que deseja apagar este cliente?</p>
        <p>Cuidado! Esta ação não pode ser desfeita!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
        <a href="?a=cliente_apagar_Hard&id=<?= $cliente->id ?>"> <button type="button" class="btn btn-primary" onclick="document.getElementById('id01').style.display='none'">Apagar</button></a>
      </div>
    </div>
  </div>
</div>


<!-- Modal EDITAR -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Cliente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="">
          nome: <input type="text">

        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
        <a href="?a=cliente_apagar_Hard&id=<?= $cliente->id ?>"> <button type="button" class="btn btn-primary" onclick="document.getElementById('id01').style.display='none'">OK</button></a>
      </div>
    </div>
  </div>
</div>



<!-- JAVASCRIPT DA TABELA DE DADOS -->
<script>
  $(document).ready(function() {
    $('#tabela-clientes').DataTable({
      language: {

        lengthMenu: "Apresenta _MENU_ clientes por Página ",
        zeroRecords: "Não existem Clientes ",
        info: "Mostrando _PAGE_ de _PAGES_ ",
        infoEmpty: "Sem clientes inseridos",
        infoFiltered: "(filtered from _MAX_ total records)",
        "search": "Pesquisar:"
      }
    });
  });
</script>






