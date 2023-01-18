<?php
require 'includes/conexao.php';
?>
<!DOCTYPE php>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/style.css">
    <link rel="stylesheet" href="includes/footer.css">
    <link rel="stylesheet" href="distritos/locais.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Pesquisa</title>
  </head>
  <body>
    <div class="full-height">
    <?php include_once('header.php'); ?>
    <p style="padding: 25px 25px 0px 20px;font-size: 20;text-align:center;">Nesta página pode pesquisar por um local, e verificar se este existe no nosso website</p>
    <div class="container" >
   <div class="row">
   <div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
   <div class="row">

   <?php

     $conn = new mysqli('localhost', 'root', '', 'descobrindo_portugal');
     if(isset($_GET['search'])){
        $searchKey = $_GET['search'];
        $sql = "SELECT * FROM locais WHERE nome LIKE '%$searchKey%'";
     }else
     $sql = "SELECT * FROM locais";
     $result = $conn->query($sql);
   ?>

   <form action="" method="GET" style=" margin-left: 35%;margin-right:25%;width: 50%;">
     <div class="col-md-6" style="padding-bottom:10px;">
        <input type="text" name="search" class="form-control" style="width: 40%; height:25px;" placeholder="Pesquisar por nome do local" value=<?php echo @$_GET['search']; ?> >
     </div>
     <div class="col-md-6 text-left">
      <button class="btn" style="width:80px;height:25px;background-color: #333333;color:white;border:0;">Pesquisar</button>
     </div>
   </form>

   <br>
   <br>
</div>
<div  class ="locais" style="border:solid 1px #ccc;padding:10px;float:center;margin-top:10px; margin: 0 auto;">
  <p style="font-size: 18; margin-left:15px;"></p>
<table class="table table-bordered" border='1'>
  <tr>
     <th>Nome</th>
     <th>Distrito</th>
     <th>Concelho</th>
     <th>Descrição</th>
     <th>Imagem</th>
  </tr>
  <?php while( $row = $result->fetch_object() ): ?>
  <tr>
     <td><?php echo $row->nome ?></td>
     <td><?php echo $row->distrito ?></td>
     <td><?php echo $row->concelho ?></td>
     <td><?php echo $row->descricao ?></td>
     <td><?php echo"<img src='" . $row->imagem . "'width='100%'>"; ?></td>
  </tr>
  <?php endwhile; ?>
</table>
</div>
</div>
</div>
</div>
</div>

  </body>
</html>
