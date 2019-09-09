<form class="form-group" action="<?php echo base_url('clientes/update'); ?>" method="post">
<input type="hidden" name="id" value="<?=$cliente->id?>">

  <h2>Cliente cadastrado == Freguês</h2>
<div class="form-group">
    <?php echo form_error('nome'); ?>
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome"  value="<?=$cliente->nome?>">
</div>

<div class="form-group">
    <?php echo form_error('telefone'); ?>
    <label for="telefone">Telefone</label>
    <input type="text" class="form-control" id="telefone" name="telefone" value="<?=$cliente->telefone?>">
</div>

<div class="form-group">
    <?php echo form_error('endereco'); ?>
    <label for="endereco">Endereço</label>
    <input type="text" class="form-control" name="endereco" id="endereco" value="<?=$cliente->endereco?>">
</div>

  <button type="submit">Atualizar Cadastro</button>
</form>
