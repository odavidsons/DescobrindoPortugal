<?php
require '../includes/conexao.php';
?>
<?php
require '../cms/db_distritos.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Viana</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../includes/style.css">
    <link rel="stylesheet" href="../includes/distritos.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
  <?php include_once('header2.php'); ?>
  <?php
  $rec = mysqli_query($db, "SELECT * FROM distritos WHERE distrito='Viseu'");
  $record = mysqli_fetch_array($rec);
  $distrito = $record['distrito'];
  $descricao = $record['descricao'];
  $imagem = $record['imagem'];
  $id = $record['id'];
  ?>
  <div id="conteudo">
    <?php $results = mysqli_query($db, "SELECT * FROM distritos"); ?>
    <h1> <?php echo $record['distrito']; ?> </h1>
    <p> <?php echo $record['descricao']; ?> </p><br><br>
    <div style="width: 100%;">
      <div class="imagens" style="float: right; width: 40%; height: 100%;">
        <img src="<?php echo $record['imagem']; ?>" alt="" width="100%">
      </div>
      <div class="concelhos" style="width: 50%; height: 100%; float: left;">
      <h2>Concelhos</h2><br>
        <ol type="1">
          <li><a class="example_c"href="viseu/armamar.php">Armamar</a></li>
          <li><a class="example_c"href="viseu/carregal.php">Carregal do Sal</a></li>
          <li><a class="example_c"href="viseu/castro.php">Castro Daire</a></li>
          <li><a class="example_c"href="viseu/cinfaes.php">Cinfães</a></li>
          <li><a class="example_c"href="viseu/lamego.php">Lamego</a></li>
          <li><a class="example_c"href="viseu/mangualde.php">Mangualde</a></li>
          <li><a class="example_c"href="viseu/moimenta.php">Moimenta da Beira</a></li>
          <li><a class="example_c"href="viseu/mortagua.php">Mortágua</a></li>
          <li><a class="example_c"href="viseu/nelas.php">Nelas</a></li>
          <li><a class="example_c"href="viseu/oliveira.php">Oliveira de Frades</a></li>
          <li><a class="example_c"href="viseu/penalva.php">Penalva do Castelo</a></li>
          <li><a class="example_c"href="viseu/penedono.php">Penedono</a></li>
          <li><a class="example_c"href="viseu/resende.php">Resende</a></li>
          <li><a class="example_c"href="viseu/santacomba.php">Santa Comba Dão</a></li>
          <li><a class="example_c"href="viseu/saojoao.php">São João da Pesqueira</a></li>
          <li><a class="example_c"href="viseu/saopedro.php">São Pedro do Sul</a></li>
          <li><a class="example_c"href="viseu/satao.php">Sátão</a></li>
          <li><a class="example_c"href="viseu/sernancelhe.php">Sernancelhe</a></li>
          <li><a class="example_c"href="viseu/tabuaco.php">Tabuaço</a></li>
          <li><a class="example_c"href="viseu/tarouca.php">Tarouca</a></li>
          <li><a class="example_c"href="viseu/tondela.php">Tondela</a></li>
          <li><a class="example_c"href="viseu/vilanova.php">Vila Nova de Paiva</a></li>
          <li><a class="example_c"href="viseu/viseu.php">Viseu</a></li>
          <li><a class="example_c"href="viseu/vouzela.php">Vouzela</a></li>
        </ol>
        <br><br><br><br><br><br>
        <ol>
          <li><a class="voltar" href="../mapa.php">Voltar</a></li>
        </ol>
      </div>
    </div>
  </div>

</body>
</html>
