<div class="navegacao">
  <nav>
    <input type="checkbox" id="check" onclick="myFunction()">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <label class="logo"><a href="../index.php">Descobrindo Portugal</a></label>
    <ul>
      <li><a class="active" href="../index.php">Início</a></li>
      <li><a href="../projeto.php">Projeto</a></li>
      <?php
      if (empty($_SESSION['id'])) {
        echo '<li><a href="../login.php">Login</a></li>';
      }else{

        echo '<li><a href="../sugestoes.php">Sugestões</a></li>';
        echo '<li><a href="../processo_logout.php">Logout</a></li>';
      }?>
    </ul>
  </nav>
</div>
