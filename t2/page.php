<?php require 'header.php'; ?>
    <div class="container">
      <div class="header">
        <h1>PHP & CSS </h1>
        <p> Suite avec les tableaux , en cliquant sur les noms vous etes renvoyez vers cette pages
          <br>
          Avec un message de bienvenu suivi du nom sur lequel on a cliqué , ce dernier est mis en paramètre
        </p>
        <h1>Bienvenu <?php echo $_GET["name"]; ?> </h1>

    </div>
<?php require 'footer.php'; ?>
