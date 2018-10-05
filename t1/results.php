<?php
if (isset($_POST['submit'])) {
  if (isset($_POST['nbr_depart']) && isset($_POST['nbr_fin']) && isset($_POST['nbr_pas'])&& isset($_POST['color_b'])
          && isset($_POST['color_r']))
  {
        $depart = htmlspecialchars($_POST['nbr_depart']);
        $fin = htmlspecialchars($_POST['nbr_fin']);
        $pas = htmlspecialchars($_POST['nbr_pas']);
        if (!empty($color_blue) ) {
            $color_blue = htmlspecialchars($_POST['color_b']);
        }
      if (!empty($color_red)) {
        $color_red = htmlspecialchars($_POST['color_r']);
        $color = $color_red;
      } elseif (empty($color_red)) {
        $color = null;
      } else {
        echo 'error';
      }
      if (!empty($color_blue)) {
        $color_blue = htmlspecialchars($_POST['color_b']);
        $color = $color_blue;
      } elseif (empty($color_blue)) {
        $color = null;
      } else {
        echo 'error';
      }
        //
        // $array  = array(
        //   'Depart :' => $depart ,
        //   'Arrivé : ' => $fin ,
        //   'Couleur : ' =>  $color
        // );

          for ($i = $depart; $i < $fin ; $i++) {
            echo $i;
          }

        // var_dump($array);
 }
}
