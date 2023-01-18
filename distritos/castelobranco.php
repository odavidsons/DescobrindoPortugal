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
  $rec = mysqli_query($db, "SELECT * FROM distritos WHERE distrito='Castelo Branco'");
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
          <li><a class="example_c"href="castelobranco/belmonte.php">Belmonte</a></li>
          <li><a class="example_c"href="castelobranco/castelobranco.php">Castelo Branco</a></li>
          <li><a class="example_c"href="castelobranco/covilha.php">Covilhâ</a></li>
          <li><a class="example_c"href="castelobranco/fundao.php">Fundão</a></li>
          <li><a class="example_c"href="castelobranco/idanhaanova.php">Idanha-a-Nova</a></li>
          <li><a class="example_c"href="castelobranco/oleiros.php">Oleiros</a></li>
          <li><a class="example_c"href="castelobranco/penamacor.php">Penamacor</a></li>
          <li><a class="example_c"href="castelobranco/proencaanova.php">Proença-a-Nova</a></li>
          <li><a class="example_c"href="castelobranco/serta.php">Sertã</a></li>
          <li><a class="example_c"href="castelobranco/viladerei.php">Vila de Rei</a></li>
          <li><a class="example_c"href="castelobranco/vilavelhaderodao.php">Vila Velha de Ródão</a></li>
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
