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
  $rec = mysqli_query($db, "SELECT * FROM distritos WHERE distrito='Faro'");
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
          <li><a class="example_c"href="faro/albufeira.php">Albufeira</a></li>
          <li><a class="example_c"href="faro/alcoutim.php">Alcoutim</a></li>
          <li><a class="example_c"href="faro/aljezur.php">Aljezur</a></li>
          <li><a class="example_c"href="faro/castromarim.php">Castro Marim</a></li>
          <li><a class="example_c"href="faro/faro.php">Faro</a></li>
          <li><a class="example_c"href="faro/lagoa.php">Lagoa</a></li>
          <li><a class="example_c"href="faro/lagos.php">Lagos</a></li>
          <li><a class="example_c"href="faro/loule.php">Loulé</a></li>
          <li><a class="example_c"href="faro/monchique.php">Monchique</a></li>
          <li><a class="example_c"href="faro/olhao.php">Olhão</a></li>
          <li><a class="example_c"href="faro/portimao.php">Portimão</a></li>
          <li><a class="example_c"href="faro/saobrasdealportel.php">São Brás de Alportel</a></li>
          <li><a class="example_c"href="faro/silves.php">Silves</a></li>
          <li><a class="example_c"href="faro/tavira.php">Tavira</a></li>
          <li><a class="example_c"href="faro/viladobispo.php">Vila do Bispo</a></li>
          <li><a class="example_c"href="faro/vilarealdesantoantonio.php">Vila Real de Santo António</a></li>
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
