<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ma page de test</title>
  </head>
  <body>
    
    <?php
        include 'fonctionmysql.php';
        include 'fonctiontable.php';
        $rows = getallProduct();
        afficherTableau($rows, getHeaderTable());
        
    ?>

    <a href=formulaire.php?id=0 >ajouter un produit</a>
  </body>
</html>