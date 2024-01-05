<?php
  session_start();
  $_SESSION['first_name'] = $_POST['first_name'];
  $_SESSION['last_name'] = $_POST['last_name'];
?>

<html>
  <head>
    <meta charset="UTF-8">
    <title>SiteOne</title>
    <style>
        main{
          visibility: hidden;
          background-color: violet;
          width: 500px;
          height: 300px;
        };
      #login{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: pink;
        width: 100px;
        height: 100px;
      };
    </style>
  </head>
  <body>
    <main id="main">
      <?php 
        $first_name = $_SESSION['first_name'];
        $last_name = $_SESSION['last_name'];

        echo"<h1>Salut, firstname</h1>";
        echo"<h2>Bienvenu, last_name</h2>";
      ?>
    </main>
    <div id="login">
      <form method="POST" action="index.php">
        <p>
          <label for="first_name">Entrez votre nom : </label>
          <input type="text" name="first_name">
        </p>
        <p>
          <label for="last_name">Entrez votre prenom : </label>
          <input type="text" name="last_name">
        </p>
        <input type="submit" value="Entrer" id="btn">
      </form>
    </div>
    <script>
      let main = document.getElementBy('main');
      let btn = document.getElementBy('btn');
      let login = document.getElementBy('login');

      btn.addEventListner('click', () => {
        main.style.visibility: visible;
        login.style.visibility: hidden;
      });
    </script>
  </body>
</html>
