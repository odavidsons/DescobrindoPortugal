<?php
require '../../includes/conexao.php';
?>
<?php
require '../../cms/db_concelhos.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Arcos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../includes/style.css">
    <link rel="stylesheet" href="../../includes/concelhos.css">
    <link rel="stylesheet" href="../locais.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
  <?php include_once('../header4.php'); ?>
  <?php
  $rec = mysqli_query($db, "SELECT * FROM concelhos WHERE concelho='Lajes das Flores'");
  $record = mysqli_fetch_array($rec);
  $concelho = $record['concelho'];
  $descricao = $record['descricao'];
  $imagem = $record['imagem'];
  $id = $record['id'];
  ?>
  <div id="content">
    <?php $results = mysqli_query($db, "SELECT * FROM concelhos WHERE concelho='Lajes das Flores'"); ?>
    <h1> <?php echo $record['concelho']; ?> </h1>
    <p> <?php echo $record['descricao']; ?> </p><br><br>
    <div style="width: 100%;">
      <div class="imagens" style="float: right; width: 40%; height: 100%;">
        <img src="<?php echo $record['imagem']; ?>" alt="" width="100%">
      </div>
      <div class="concelhos" style="width: 50%; height: 100%; float: left;">
        <h2>Pontos turísticos</h2><br>
        <p>Em baixo segue-se uma coleção de locais que valem a pena visitar neste concelho.</p>
      </div>
    </div>
  </div>

  <div class="locais">
    <?php
   if (mysqli_connect_errno()) {
       echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   $result = mysqli_query($con, "SELECT * FROM locais WHERE concelho='Lajes das Flores'");
   while ($row = mysqli_fetch_array($result)) {
     echo "<div style='border:solid 1px #ccc;padding:10px;float:center;margin-top:10px;'>";
       echo "<table border='1'> <tr> <th>Nome</th> <th>Descrição</th> <th>Imagem</th> </tr>";
       echo "<tr>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['descricao'] . "</td>";
            echo "<td>";echo"<img src='" . $row['imagem'] . "width='70px'>";echo"</td>";
            echo "</tr>";
       echo "</table>";
     echo "</div>";
    }
    mysqli_close($con);

    ?>
  </div>

</body>
</html>
