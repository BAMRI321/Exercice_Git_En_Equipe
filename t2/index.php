<?php require 'header.php'; ?>
    <div class="container">
      <div class="header">
        <h1>PHP & CSS </h1>
        <p> Creer un tableau de 4 noms et les afficher dans des carrés placer en colonne.
          <br>
          Les noms sont des liens, si on clique sur un nom on est rediriger vers une autre pages , affichant un message .
        </p>
      </div>
      <div class="content">
        <div class="row">
          <?php print_names(); ?>
        </div>
      </div>

    </div>
<?php require 'footer.php'; ?>
