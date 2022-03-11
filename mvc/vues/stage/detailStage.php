<?php

// var_dump($lignes);

foreach  ($lignes as $row) {

echo '
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">'.$row[1].'</h5>
      <p class="card-text">'.$row[2].'</p>
      <a href="mailto:'.$row[3].'" class="btn btn-primary">
        Nous contacter
      </a>
    </div>
  </div>';
}









?>