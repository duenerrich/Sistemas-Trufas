
<ul class="list-group">

  <br>
  <li class="list-group-item">
    <ul><?php echo "Sabor: ".$trufas->sabor;?></ul>
    <ul><?php echo "Preço: ".$trufas->preco;?></ul>
    <ul><?php echo "Quantidade: ".$trufas->quantidade." unidade(s)";?></ul>
    <button class="btn btn-dark"><?php echo anchor("trufas/editar/{$trufas->id}","Editar"); ?></button>
    <button class="btn btn-warning"><?php echo anchor("trufas/excluir/{$trufas->id}","Excluir"); ?></button></li>
<br>

</ul>

<style media="screen">
  .btn {
    margin: 10px 0 0 40px;
    position:static;
  }
  li {
    margin-top: 5px;
    border-radius: 30px;
  }
  .btn-lg{
    margin: 30px 0 30px 0;
    text-align: center;
  }

  </style>
