<?php
require '../includes/conexao.php';
?>
<?php
require 'db_locais.php';
?>

<?php
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;

		$rec = mysqli_query($db, "SELECT * FROM locais WHERE id=$id");
    $record = mysqli_fetch_array($rec);
		$nome = $record['nome'];
    $distrito = $record['distrito'];
		$concelho = $record['concelho'];
		$descricao = $record['descricao'];
    $imagem = $record['imagem'];
    $id = $record['id'];
	}
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
		<form method="post" action="db_locais.php" >
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="input-group">
			<label>Nome</label>
			<input type="text" name="nome" value="<?php echo $nome; ?>">
		</div>
    <div class="input-group">
			<label>Distrito</label>
			<input type="text" name="distrito" value="<?php echo $distrito; ?>">
		</div>
		<div class="input-group">
			<label>Concelho</label>
			<input type="text" name="concelho" value="<?php echo $concelho; ?>">
		</div>
		<div class="input-group">
			<label>Descricao</label>
			<input type="text" name="descricao" value="<?php echo $descricao; ?>">
		</div>
    <div class="input-group">
			<label>Imagem</label>
			<input type="text" name="imagem" value="<?php echo $imagem; ?>">
		</div>
		<div class="input-group">
      <?php if ($update == false): ?>
			<button class="btn" type="submit" name="save" >Introduzir</button>
    <?php else: ?>
      <button class="btn" type="submit" name="update" >Atualizar</button>
    <?php endif ?>
		</div>
	</form>
    <?php $results = mysqli_query($db, "SELECT * FROM locais"); ?>
    <table>
    	<thead>
    		<tr>
					<th>Id</th>
					<th>Nome</th>
          <th>Distrito</th>
    			<th>Concelhos</th>
    			<th>Descricao</th>
          <th>Imagem</th>
    			<th colspan="2">Ação</th>
    		</tr>
    	</thead>
      <?php while ($row = mysqli_fetch_array($results)) { ?>
  		<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['nome']; ?></td>
        <td><?php echo $row['distrito']; ?></td>
  			<td><?php echo $row['concelho']; ?></td>
  			<td><?php echo $row['descricao']; ?></td>
        <td><?php echo $row['imagem']; ?></td>
  			<td>
  				<a href="admin_locais.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Editar</a>
  			</td>
  			<td>
  				<a href="db_locais.php?del=<?php echo $row['id']; ?>" class="del_btn">Eliminar</a>
  			</td>
  		</tr>
      <?php } ?>
    </table>


		<?php include_once('../footer.php'); ?>
  </body>
</html>
