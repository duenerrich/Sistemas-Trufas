<form class="form-group" action="<?php echo base_url('clientes/salvar'); ?>" method="post">
  <h2>Cliente cadastrado == Freguês</h2>
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

  <button type="submit" name="button">Cadastrar</button>
</form>
