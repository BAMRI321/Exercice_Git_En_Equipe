<?php include_once('function/function.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Hello, world!</title>
    <style media="screen">
      .container h1, h4 {
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="message ">
          <? echo $message ; ?>
      </div>
      <h1>Exercice Formulaires</h1>
      <div class="header">
        <h4>Formulaire</h4>
      <form method="POST" action="<?php echo  $_SERVER['PHP_SELF'] ;  ?>">
       <div class="form-group">
         <label >Nombre de départ</label>
         <input type="text" class="form-control" name="nbr_depart" id="nbrDepart" placeholder="Value">
      </div>
      <div class="form-group">
        <label >Nombre de fin</label>
        <input type="text" class="form-control" name="nbr_fin" id="nbrFin" placeholder="Value">
      </div>
      <div class="form-group">
        <label >Pas</label>
        <input type="text" class="form-control" name="nbr_pas" id="nbrFin" placeholder="Value">
      </div>
      <div class="form-group form-check">
        <input type="radio"  name="color_b" value="blue" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label"  for="exampleCheck1">Couleur bleu</label>
      </div>
      <div class="form-group form-check">
        <input type="radio" name="color_r" value="rouge" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label"  for="exampleCheck1">Couleur rouge</label>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
      </div>
      </span>

    </div>

    <?php
    if (isset($_POST['submit'])) {
      print_data();
    } else {
      $message = "<h1 class='alert alert-danger'>Veillez verifier votre système de validation</h1>";
    }
     ?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </body>
</html>
