<style>
.card {
  background: #fff;
  border-radius: 2px;
  display: inline-block;
  height: 20%;

  position: relative;
  width: 500px;
}

.card {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}

.card:hover {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}


</style>
  Ville : <select id="ville" value=" Ville">
                <option value="..."> </option>
                <option value="Melun">Melun </option>
                <option value="Paris">Paris</option>
                </select>
        <?php

//liste des services	
$i=0;

 foreach  ($lignes as $row) {
        if($i%4==0){
          
          echo' <div class="row"><div class="col col-2 offset-2 card" ><ul class="list-group list-group-flush" style="text-align:center;">
          <li class="list-group-item">'.$row['1'].'&emsp;';
          echo '<br><a href="index.php?controleur=entreprise&action=detailEntreprise&entreprise='.$row[0].'">
          <button type="button" class="btn btn-primary" >En savoir plus</button></a></li>
          </ul></div> &nbsp;&nbsp;&nbsp;';
        }
        elseif($i%4==1) {
          echo' <div class="col col-2 card"><ul class="list-group list-group-flush"style="text-align:center;">
          <li class="list-group-item">'.$row['1'].'&emsp;'; 
          echo '<br><a href="index.php?controleur=entreprise&action=detailEntreprise&entreprise='.$row[0].'">
          <button type="button" class="btn btn-primary" >En savoir plus</button></a></li>
          </ul></div>&nbsp;&nbsp;&nbsp;';
        }
        
        elseif($i%4==2){
          echo' <div class="col col-2 card"><ul class="list-group list-group-flush" style="text-align:center;">
          <li class="list-group-item">'.$row['1'].'&emsp;'; 
          echo '<br><a href="index.php?controleur=entreprise&action=detailEntreprise&entreprise='.$row[0].'">
          <button type="button" class="btn btn-primary" >En savoir plus</button></a></li>
          </ul></div> &nbsp;&nbsp;&nbsp;';
        }
        elseif($i%4==3){
          echo' <div class="col col-2 card"><ul class="list-group list-group-flush"style="text-align:center;">
          <li class="list-group-item">'.$row['1'].'&emsp;';
          echo '<br><a href="index.php?controleur=entreprise&action=detailEntreprise&entreprise='.$row[0].'">
          <button type="button" class="btn btn-primary" >En savoir plus</button></a></li>
          </ul></div></div><br>';
        }
        
      $i++;
  }
?>
