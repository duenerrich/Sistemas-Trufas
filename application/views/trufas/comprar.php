<h1 id="title">Compra de trufas</h1>

<div class="form-group">
  <div class="card" style="text-align: center; width:100%">
    <div class="card-body">
    <h2 class="card-title h2">Trufa comprada</h2>
    <h3 class="card-subtitle mb-2 text-muted">Sabor: <?=$trufas->sabor;?></h3>
    <h3 class="card-subtitle mb-2 text-muted">Preço R$<?=$trufas->preco?></h3>
    <h3 class="card-subtitle mb-2 text-muted">Quantidade disponivel:<?=$trufas->quantidade?></h3>
  </div>

  <form class="" action="<?php echo base_url('trufas/buy'); ?>" method="post">
    <h4 class="card-subtitle mb-2 text-muted">Quantidade a ser comprada</h4><input type="number" name="quantidade" min="1" max="<?=$trufas->quantidade?>">

<br>
<br>
<br>

<div class="card" style="text-align: center; width:80%; margin-left: 10%;">
    <h2 class="card-title">Cliente Existente ?</h2>
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


<h2 class="card-title">Cliente Novo</h2>
<div class="card2">
    <div class="form-group">
      <label for="nome">Nome</label>
      <?php echo form_error('nome'); ?>
      <input type="text" class="form-control" name="nome" id="nome" value="<?php echo set_value('nome')?>">
    </div>

    <div class="form-group">
      <label for="telefone">Telefone</label>
      <?php echo form_error('telefone'); ?>
      <input type="text" class="form-control" name="telefone" id="telefone" value="<?php echo set_value('telefone');?>">
    </div>

    <div class="form-group">
      <label for="endereco">Endereço</label>
      <?php echo form_error('endereco'); ?>
      <input type="text" class="form-control" name="endereco" id="endereco" value="<?php echo set_value('endereco');?>">
    </div>
</div>

</div>
  <button type="submit" name="button" class="btn-lg btn-primary">Comprar</button>
</form>
<br>

  </div>
</div>

<style media="screen">
  .form-control{
    margin-left: 15%;
  }

  .card2{
    width: 80%;
  }

label{
    margin-left: 25%;
  }

  [type=button], [type=reset], [type=submit], button {
      -webkit-appearance: button;
      margin: 20px 0 20px 0;
  }

h1,h2,h3,h3{
  text-align: center;
}

#title{
  margin: 40px 0 40px 0;
}

</style>
