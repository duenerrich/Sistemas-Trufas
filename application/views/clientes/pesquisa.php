<ul class="list-group">
  <br>
<li class="list-group-item"><?php echo $cliente->nome;?><button class="btn btn-dark"><?php echo anchor("clientes/editar/{$cliente->id}","Editar"); ?></button><button class="btn btn-warning"><?php echo anchor("clientes/excluir/{$cliente->id}","Excluir"); ?></button</li>
<br>
</ul>


<style media="screen">
li {
  margin-top: 5px;
  border-radius: 30px;
}

.btn {
  margin-left: 30px;
  position:static;
}
</style>
