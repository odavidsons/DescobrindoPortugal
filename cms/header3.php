<div class="navegacao">
  <nav>
    <input type="checkbox" id="check" onclick="myFunction()">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <label class="logo"><a href="">Descobrindo Portugal</a></label>
    <ul>
      <?php
      if (empty($_SESSION['id'])) {
        echo '<li><a href="../login.php">Login</a></li>';
      }else{
        echo '<li><a href="../processo_logout.php">Logout</a></li>';
      }?>
    </ul>
  </nav>
</div>
