<h1 style="text-align: center;">Clientes</h1>
<!-- Aqui esta chamando o controller cliente depois a função cadastrar -->
<hr>
<a  class="btn-primary btn-lg btn-block" href="clientes/cadastrar">Cadastrar Cliente</a>

<form class="form-group" action="clientes/search" method="post">
  <div class="input-group md-form form-sm form-1 pl-0">
      <div class="input-group-prepend">
        <span class="input-group-text cyan lighten-2" id="basic-text1"><ion-icon name="search">img</ion-icon>
      </div>
      <input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search" name="nome"><button type="submit" name="button">Pesquisar</button>
  </div>
</form>

<hr>


<ul class="list-group">
<?php foreach ($clientes as $value){
  ?>
  <br>
  <li class="list-group-item"><?php echo $value->nome;?><button class="btn btn-dark"><?php echo anchor("clientes/editar/{$value->id}","Editar"); ?></button><button class="btn btn-warning"><?php echo anchor("clientes/excluir/{$value->id}","Excluir"); ?></button></li>

    <?php
}
?>
<br>
</ul>

<style media="screen">
  .btn {
    margin-left: 30px;
    position:static;
  }

  .btn-lg{
    margin: 30px 0 30px 0;
    text-align: center;
  }


  a:link {
    color: black;
  }

  li {
    margin-top: 5px;
    border-radius: 30px;
  }

  .input-group.md-form.form-sm.form-1 input{
  border: 1px solid #bdbdbd;
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
  }

  .input-group.md-form.form-sm.form-2 input {
border: 1px solid #bdbdbd;
border-top-left-radius: 0.25rem;
border-bottom-left-radius: 0.25rem;
}
</style>
