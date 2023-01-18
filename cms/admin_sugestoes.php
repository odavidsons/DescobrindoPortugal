<?php
require '../includes/conexao.php';
?>
<?php
require 'db_sugestoes.php';
?>

<!DOCTYPE php>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../includes/style.css">
    <link rel="stylesheet" href="stylesheet.css">
		<link rel="stylesheet" href="../includes/footer.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Admin Panel</title>
  </head>
  <body>
    <div class="full-height">
    <?php include_once('header3.php'); ?>
    <h1>Bem vindo ao painel administrador</h1>
    <div style="text-align:center">
		<a class="example_c" href="admin_inicio.php">Voltar</a>
		</div>
    <?php if (isset($_SESSION['msg'])): ?>
    <div class="msg">
  		<?php
  			echo $_SESSION['msg'];
  			unset($_SESSION['msg']);
  		?>
	  </div>
    <?php endif ?>

    <?php $results = mysqli_query($db, "SELECT * FROM sugestoes"); ?>
    <table>
    	<thead>
    		<tr>
					<th>Id</th>
					<th>Utilizador</th>
          <th>Local</th>
    			<th>Descrição</th>
    			<th colspan="2">Ação</th>
    		</tr>
    	</thead>
      <?php while ($row = mysqli_fetch_array($results)) { ?>
  		<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['utilizador']; ?></td>
        <td><?php echo $row['local']; ?></td>
  			<td><?php echo $row['descricao']; ?></td>
  			<td>
  				<a href="db_sugestoes.php?del=<?php echo $row['id']; ?>" class="del_btn">Eliminar</a>
  			</td>
  		</tr>
      <?php } ?>
    </table>

</div>
		<?php include_once('../footer.php'); ?>
  </body>
</html>
