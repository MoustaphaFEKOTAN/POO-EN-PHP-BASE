<DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo prof php</title>
    <link
    href="Magasin.css" rel="stylesheet"> 
    </head>
     <body>
     <?php 
     require_once('connexion.php')
     
     ?>
  <div class="s">

  <h3>Produit</h3>
  <br>
  <Label> code</Label>
  <input type="text" value="">
</br>
  <br>
  <Label> Libfil</Label>
  <input type="text" value="">
  </br>

  <br>
  <Label> Description</Label>
  <input type="text" value="">
  </br>
</div>
<br>
   
     <button class="mybutton" name="envoyer">Enregistrer</button>
</br>
  </body>
  </html>