<h1 style="text-align:center;"><?php echo $titulo?></h1>
<br>
<a  class="btn-primary btn-lg btn-block" href="trufas/cadastrar">Adicionar Trufa</a>

<form class="form-group" action="trufas/search" method="post">
  <div class="input-group md-form form-sm form-1 pl-0">
      <div class="input-group-prepend">
        <span class="input-group-text cyan lighten-2" id="basic-text1"><ion-icon name="search">img</ion-icon>
      </div>
      <input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search" name="nome"><button type="submit" name="button">Pesquisar</button>
  </div>
</form>

<ul class="list-group">
<?php foreach ($trufas as $value){
  ?>

  <br>
  <li class="list-group-item">
    <img  id="img" alt="Trufa">
    <ul><?php echo "Sabor: ".$value->sabor;?></ul>
    <ul><?php echo "Preço: ".$value->preco;?></ul>
    <ul><?php echo "Quantidade: ".$value->quantidade." unidade(s)";?></ul>
    <button class="btn btn-dark"><?php echo anchor("trufas/editar/{$value->id}","Editar"); ?></button>
    <button class="btn btn-warning"><?php echo anchor("trufas/excluir/{$value->id}","Excluir"); ?></button> <button  class="btn btn-success"><?php echo anchor("trufas/comprar/{$value->id}","Comprar"); ?></button>
  </li>
<br>

<?php }?>
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

  a{
    color: #e3f0ff;
  }
  #img {
    width: 200%;
    src: url("img/cho.jpg");
  }

  </style>
