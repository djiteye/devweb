<?php
session_start();  
?>
<!DOCTYPE html>
<head>
	<title>addev</title>
	<script type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<meta  http-equiv="Content-Type" content="text.html"  charset="iso-8859-1">
	<style type="text/css">
    a.e{
  text-decoration: none;
  color: cadetblue;
}
  </style>
</head>

<body>

	<form action="oper.php" method="post" enctype="multipart/form-data">
		<div class="col-sm-6" style="margin:auto;">
			<h1 align="center">Ajout d'evenement</h1>
<div class="mb-3">
  <label for="titre" class="form-label">titre</label>
  <input type="text" class="form-control" id="titre" name="titre" placeholder="donner votre titre">
</div>
<div class="mb-3">
  <label for="titre" class="form-label">Date Max de l'evenement à l'actualité</label>
  <input type="date" class="form-control" id="date" name="date" placeholder="ajouter delai pour postuler">
</div>		
<div class="mb-3">
  <label for="commentaire" class="form-label">description</label>
  <textarea class="form-control" id="commentaire" name="commentaire" rows="3"></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">inserer votre evenement en photo ou en PDF</label>
  <input type="file" class="form-control" name="file" id="file" placeholder="insert file">
</div>
<div class="mb-3">
  <input type="submit" class="btn btn-outline-success" name="add" value="add">
 <button class="btn btn-danger" margin="15px"><a class="e" href="addev.php">annuler</a></button>
  
</div>
</div>
</form>
<div class="mb-3" align="center">
   <button class="btn btn-danger" margin="15px"><a class="e" href="adminpage.php">retour</a></button>
</div>
</body>
</html>