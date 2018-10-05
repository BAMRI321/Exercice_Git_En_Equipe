<?php
function print_names() {
    $names = array(
      'Marin',
      'Diallo',
      'Robert',
      'Edward'
    );

  foreach ($names as $name ){
    $result =  "
      <div class='col-sm'>
        <a href='./page.php?name=".$name."'>".$name."</a>
      </div>
    ";
    echo $result;
  }
}
