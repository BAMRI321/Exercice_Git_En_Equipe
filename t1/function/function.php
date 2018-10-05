<?php
function print_data()
{
  if (isset($_POST['nbr_depart']) && isset($_POST['nbr_fin']) && isset($_POST['nbr_pas']) && isset($_POST['color_b']) && isset($_POST['color_r']))
  {
        $depart = htmlspecialchars($_POST['nbr_depart']);
        $fin = htmlspecialchars($_POST['nbr_fin']);
        $pas = htmlspecialchars($_POST['nbr_pas']);
        $color_red = $_POST['color_r'];
        $color_blue = $_POST['color_b'];

        $data['Depart'] = $depart;
        $data['Arrivé'] = $fin;
        //$data['color'] = $color_blue ;
        if (empty($color_blue)) {
          $data['color'] = $color_blue;
        } elseif (empty($color_red)) {
          $data['color'] = $color_red;
        }
        for ($i = $depart; $i <  $fin; $i++) {
          echo "<span>"."$i"."</span> <br>";
        }
  }



}
