<!DOCTYPE html>
<html>
<head>
    <title>Página de Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/style.css">
    <link rel="stylesheet" href="includes/login.css">
    <link rel="stylesheet" href="includes/footer.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="full-height">
  <?php include_once('header.php'); ?>

  <div class="full-page">
         <div id='login-form'class='login-page'>
             <div class="form-box">
                 <div class='button-box'>
                     <div id='btn'></div>
                     <button type='button'onclick='login()'class='toggle-btn'>Log In</button>
                     <button type='button'onclick='register()'class='toggle-btn'>Register</button>
                 </div>
                 <form action="processo_login.php" id='login' class='input-group-login' method="POST">
                     <input type='text' id="user" name="utilizador" class='input-field' placeholder='Utilizador' required >
 		    <input type='password' id="pass" name="password" class='input-field'placeholder='Palavra-passe' required>
 		    <button type='submit' name="login" class='submit-btn'>Log in</button>
 		 </form>
 		 <form action="processo_registar.php" id='register' class='input-group-register' method="POST">
 		     <input type='text'class='input-field'placeholder='Insira Email' name="email" id="email" required>
 		     <input type='text'class='input-field'placeholder='Nome de utilizador ' name="utilizador" id="utilizador" required>
 		     <input type='password'class='input-field'placeholder='Insira Password' name="password" id="password" required>
 		     <input type='password'class='input-field'placeholder='Confirme Password' name="password_repeat" id="password_repeat"  required>
                     <button type='submit' name="registo" class='submit-btn'>Register</button>
 	         </form>
             </div>
         </div>
     </div>
     <script>
         var x=document.getElementById('login');
 		var y=document.getElementById('register');
 		var z=document.getElementById('btn');
 		function register()
 		{
 			x.style.left='-400px';
 			y.style.left='50px';
 			z.style.left='110px';
 		}
 		function login()
 		{
 			x.style.left='50px';
 			y.style.left='450px';
 			z.style.left='0px';
 		}
 	</script>
</div>
</body>
</html>
