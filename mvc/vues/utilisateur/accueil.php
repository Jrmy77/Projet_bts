<html>
    <head>
        <title>Acceuil</title>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="projet-main/ppe.css"/> 
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.css">
    </head>
    <body>


    <video  height= "100%" width= "100%" autoplay loop>
  <source src="Video4.mp4" type="video/mp4">
  
</video>
<br><br><br>

<div class="row" style="margin-right: 0px !important;">
  <div class="col-3 offset-1">
    <div class="card">
      <img  style="height: 250px;"
        src="stage1.jpg"
        class="card-img-top"
        alt="..."
      />
      <div class="card-body" style="text-align:center;">
        <h5 class="card-title">Stage</h5>
        <a href="index.php?controleur=stage&action=listeStage" class="btn btn-primary">Cliquez-ici</a>

      </div>
    </div>
  </div>
  <div class="col-2 offset-1">
    <div class="card">
      <img style="height: 250px;"
        src="user2.png"
        class="card-img-top"
        alt="..."
      />
      <div class="card-body" style="text-align:center;">
        <h5 class="card-title">Votre profil</h5>
        <a href="index.php?controleur=utilisateur&action=DetailUtilisateur" class="btn btn-primary">Cliquez-ici</a>

      </div>
    </div>
  </div>
  <div class="col-3 offset-1">
    <div class="card">
      <img style="height: 250px;"
        src="building1.jpg"
        class="card-img-top"
        alt="..."
      />
      <div class="card-body" style="text-align:center;">
        <h5 class="card-title">Entreprises</h5>
        <a href="index.php?controleur=entreprise&action=listeEntreprise" class="btn btn-primary">Cliquez-ici</a>
      </div>
    </div>
  </div>
</div>  





    </body>

    </html>
